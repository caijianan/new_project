(function($, window, document) {
  'use strict';
  $.cookie = function(key, val, ops) {
    if (arguments.length == 1) {
      var reg = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)');
      var result = reg.exec(document.cookie);
      return result ? decodeURIComponent(result[1]) : null;
    }
    ops = ops || {};
    if (val === null) {
      ops.expires = -1;
    } else if ($.isNumeric(ops)) {
      ops.expires = ops;
    } else if (ops === true) {
      ops.expries = 7;
    }
    ops = $.extend({
      expires: 0,
      path: '/',
      domain: null,
      secure: null
    }, ops);
    if (ops.expires) {
      var t = new Date();
      t.setDate(t.getDate() + ops.expires);
      ops.expires = t;
    }

    document.cookie = encodeURIComponent(key) + '=' + encodeURIComponent(String(val)) +
      (ops.expires ? '; expires=' + ops.expires : '') +
      (ops.path ? '; path=' + ops.path : '') +
      (ops.domain ? '; domain=' + ops.domain : '') +
      (ops.secure ? '; secure' : '');
  };

  $.getObject = function(args, maps) {
    var obj = {};
    if (args.length == 1 && $.isPlainObject(args[0])) {
      obj = args[0];
    } else {
      if (arguments.length == 1) {
        obj[args[0]] = args[1];
      } else {
        $.each(args, function(i, arg) {
          obj[maps[i]] = arg;
        });
        delete obj.undefined;
      }
    }
    return obj;
  };
  $.timer = function(ops) {
    ops = $.extend({
      interval: null,    // delay time (ms)
      callback: null,    // function to be executed
      autoStart: false,  // auto start (immediately after timer defination, and without using start())
      time: 0            // exectation times
    }, $.getObject(arguments, ['interval', 'callback', 'autoStart']));
    if (!ops.interval || !ops.callback) { return false; }

    var utr = new Timer(ops);
    if (ops.autoStart) { utr.start(); }
    return utr;

    function Timer(ops) {
      var UT = this;
      /* private variables */
      var ut_ops;
      var ut_tid = null;

      /* constructor */
      (function(ops) {
        ut_ops = ops;
        /* properites */
        UT.running = false;
      })(ops);

      /* public methods */
      UT.start = pub_start;
      UT.stop = pub_stop;
      if (!ut_ops.time) {
        UT.startWithRun = pub_startWithRun;
      }

      /* methods defination */
      function pub_start() {
        pub_stop();
        if (ut_ops.time > 0) {
          var time = ut_ops.time;
          ut_tid = setInterval(function() {
            if (--time <= 0) {
              pub_stop();
            }
            ut_ops.callback();
          }, ut_ops.interval);
        } else {
          ut_tid = setInterval(ut_ops.callback, ut_ops.interval);
        }
        UT.running = true;
        return UT;
      }
      function pub_startWithRun() {
        ut_ops.callback();
        return pub_start();
      }
      function pub_stop() {
        clearInterval(ut_tid);
        ut_tid = null;
        UT.running = false;
        return UT;
      }
    }
  };
  $.timerOnce = function(interval, callback, autoStart) {
    return $.timer({
      interval: interval,
      callback: callback,
      autoStart: autoStart,
      time: 1
    });
  };

  //phone_validation plugin
  $.fn.phone_validation = function(options) {
    var self = $(this);

    var phone_code_get = self.find('.phone-validation-code-get');
    var phone_code_msg = self.find('.phone-validation-code-msg');

    var phone_input = self.find('.phone-validation-phone');
    var phone_input_msg = phone_input.next('.form-control-msg');
    var phone_input_wrap = phone_input.parent('.form-control-wrap');

    var code_input = self.find('.phone-validation-code');
    var code_input_msg = code_input.next('.form-control-msg');
    var code_input_wrap = code_input.parent('.form-control-wrap');

    var notice = self.find('.phone_validation_notice');
    if (options.title) {
      self.find('.phone-validation-title').text(options.title);
    }

    if (options.notice) {
      notice.text(options.notice);
    }

    if (options.default_phone) {
      phone_input.val(options.default_phone);
    }

    if (options.phone_input_disabled) {
      phone_input.attr('disabled', 'disabled');
    }

    if (options.submit_name) {
      self.find('.phone-validation-submit').text(options.submit_name);
    }

    var phone_code_time = 'phone_validation_get_time';
    if (options.name) {
      phone_code_time = 'phone_validation_get_time' + options.name;
    }

    var code_timer;
    var get_code_timer = function() {
      if ($.cookie(phone_code_time)) {
        var now = new Date();
        if (now - $.cookie(phone_code_time) < 60000) {
          var i = 60 - Math.floor((now - $.cookie(phone_code_time)) / 1000);
          phone_code_get.removeClass('btn-green').addClass('btn-gray disabled').text('(' + i + '秒后)重新获取验证码');
          code_timer = $.timer(1000, function() {
            if (--i > 0) {
              phone_code_get.text('(' + i + '秒后)重新获取验证码');
            } else {
              code_timer.stop();
              phone_code_get.removeClass('btn-gray disabled').addClass('btn-green').text('点击获取验证码');
            }
          }).start();
        }
      }
    };

    get_code_timer();

    self.off('click', '.phone-validation-code-get');
    self.on('click', '.phone-validation-code-get', function() {
      if (self.hasClass('disabled')) {
        return;
      }
      var phone = $.trim(phone_input.val());
      if (/^\d{11}$/.test(phone)) {
        phone_input_wrap.removeClass('has-warning');
        $.post(options.code_link, {
          mobile: phone
        }, function(data) {
          if (data.status) {
            var now = new Date();
            $.cookie(phone_code_time, now.getTime());
            get_code_timer();
            phone_code_msg.show();
          } else {
            phone_input.select();

            if (notice.length) {
              notice.text(data.msg).addClass('text-danger');
            } else {
              phone_input_msg.text(data.msg);
              phone_input_wrap.addClass('has-warning');
            }
          }
        }, 'json');
      } else {
        phone_input.select().next('.form-control-msg').text('请填写正确的手机号码');
        phone_input_wrap.addClass('has-warning');
      }
    });

    self.off('click', '.phone-validation-code-msg');
    self.on('click', '.phone-validation-code-msg>a', function() {
      if (self.hasClass('disabled')) {
        return;
      }
      self.find('.phone-validation-code-msg>div').toggle();
    });

    self.off('click', '.phone-validation-submit');
    self.on('click', '.phone-validation-submit', function() {
      if (self.hasClass('disabled')) {
        return;
      }
      var phone = $.trim(phone_input.val());
      var code = $.trim(code_input.val());
      phone_input_wrap.removeClass('has-warning');
      code_input_wrap.removeClass('has-warning');
      if (!phone) {
        phone_input.select();
        if (notice.length) {
          notice.text('请输入手机号码').addClass('text-danger');
        } else {
          phone_input_msg.text('请输入手机号码');
          phone_input_wrap.addClass('has-warning');
        }
      } else if (!/^\d{6}$/.test(code)) {
        code_input.select();
        if (notice.length) {
          notice.text('验证码有误').addClass('text-danger');
        } else {
          code_input_msg.text('验证码有误');
          code_input_wrap.addClass('has-warning');
        }
      } else {
        $.ajax({
          type: options.submit_type ? options.submit_type : 'POST',
          url: options.submit_link,
          dataType: 'json',
          data: {mobile: phone, code: code},
          success: function(data) {
            if (data.status) {
              if (options.submit_success) {
                options.submit_success();
              }
              $.cookie(phone_code_time, null);
              code_input.val('');
              if (code_timer) {
                code_timer.stop();
              }
              phone_code_get.removeClass('btn-gray disabled').addClass('btn-green').text('点击获取验证码');
            } else {
              code_input.select();
              if (notice.length) {
                notice.text(data.msg).addClass('text-danger');
              } else {
                code_input_msg.text(data.msg);
                code_input_wrap.addClass('has-warning');
              }
            }
          }
        })
      }
    });
  };
})($, window, document);
