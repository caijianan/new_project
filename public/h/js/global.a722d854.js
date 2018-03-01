!function() {
    var a = function() {
        "use strict";
        function a(a) {
            this.tagNames = [a || null], this.buffer = "", this.id = null, this.className = null, this.style = null
        }
        var b;
        return a.prototype.begin = function(a) {
            this.tagNames.push(a || null)
        }, a.prototype.push = function(a) {
            this.buffer += a
        }, a.prototype.pushOpenTag = function() {
            var a = this.getCurrentTag(), b = this.id, c = this.className, d = this.style;
            this.buffer += "<" + a, b && (this.buffer += ' id="' + this.id + '"', this.id = null), c && (this.buffer += ' class="' + this.className + '"', this.className = null), d && (this.buffer += ' style="' + this.style + '"', this.style = null), this.buffer += ">"
        }, a.prototype.pushCloseTag = function() {
            var a = this.tagNames.pop();
            this.buffer += "</" + a + ">"
        }, a.prototype.setId = function(a) {
            return this.id = a, this
        }, a.prototype.setClass = function(a) {
            return this.className = a, this
        }, a.prototype.setStyle = function(a) {
            return this.style = a, this
        }, a.prototype.getCurrentTag = function() {
            return this.tagNames[this.tagNames.length - 1]
        }, b = a
    }(), b = function() {
        "use strict";
        var a, b = {on: function(a, b, c) {
                var d = this.getEvents();
                "string" == typeof a && b && "function" == typeof b && (d[a] || (d[a] = []), d[a].push({callback: b, context: c}))
            }, off: function(a, b) {
                var c = this.getEvents();
                if (!a && !b)
                    return void(this.events = {});
                if (c[a]) {
                    if (c[a] && !b)
                        return void delete c[a];
                    for (var d, e = [], f = c[a], g = f.length; g--; )
                        d = f[g], d && d.callback !== b && e.push(d);
                    0 === e.length ? delete c[a] : c[a] = e
                }
            }, once: function(a, b, c) {
                var d, e = this, f = this.getEvents();
                f[a] || (f[a] = []), d = function() {
                    e.off(a, d), b.apply(this, arguments)
                }, f[a].push({callback: d, context: c})
            }, trigger: function(a) {
                var b, c, d = this.getEvents(), e = d[a], f = Array.prototype.slice.call(arguments, 1);
                if (!e || 0 === e.length)
                    return void(window.console && "function" == typeof window.console.log && console.log("no one subscribe topic", a));
                for (b = e.length; b--; )
                    c = e[b].callback.apply(e[b].context, f);
                return c
            }, listenTo: function(a, b, c, d) {
                "object" == typeof a && "function" == typeof a.on && a.on(b, c, d)
            }, stopListening: function(a, b, c) {
                "object" == typeof a && "function" == typeof a.off && a.off(b, c)
            }, getEvents: function() {
                return this.events || (this.events = {})
            }};
        return a = b
    }(), c = function(a) {
        "use strict";
        function b() {
        }
        var c, d = a;
        b.prototype = d, b.prototype.constructor = b, b.prototype.publish = d.trigger, b.prototype.subscribe = d.on, b.prototype.cancelSub = d.off, b.prototype.subscribeOnce = d.once, b.prototype.subscribeMany = function(a, b, c) {
            if ("[object Array]" === Object.prototype.toString.call(a) && 0 !== a.length) {
                var d, e, f, g = this, h = [], i = a.join("-");
                for (d = a.length; d--; )
                    !function(b) {
                        g.subscribeOnce(a[d], function() {
                            if (1 === h.length)
                                g.publish(i);
                            else
                                for (e = h.length; e--; )
                                    h[e] === b && h.splice(e, e + 1)
                        })
                    }(a[d]), h.push(a[d]);
                f = function() {
                    b.call(c), g.cancelSub(i)
                }, this.subscribe(i, f, c)
            }
        };
        var e = new b;
        return c = e
    }(b), d = function() {
        "use strict";
        var a, b = {multiply: function(a, b) {
                var c, d, e = 0;
                return c = (a + "").split("."), d = (b + "").split("."), 2 === c.length && (e += c[1].length, a *= Math.pow(10, c[1].length)), 2 === d.length && (e += d[1].length, b *= Math.pow(10, d[1].length)), a * b / Math.pow(10, e)
            }, add: function(a, b) {
                var c, d, e = 0;
                return c = (a + "").split("."), d = (b + "").split("."), 2 === c.length && (e = Math.max(c[1].length, e)), 2 === d.length && (e = Math.max(d[1].length, e)), e ? (a *= Math.pow(10, e), b *= Math.pow(10, e), (a + b) / Math.pow(10, e)) : a + b
            }, inherit: function(a, b) {
                function c() {
                }
                if (!a)
                    throw new Error("lack of destination class");
                if (b = b || Function, "function" != typeof a)
                    throw new Error("Dest need to be function");
                return c.prototype = b.prototype, a.prototype = new c, a._super = b, a.prototype.constructor = a, a
            }};
        return a = b
    }(), e = function() {
        "use strict";
        var a;
        _.templateSettings.variable = "data";
        var b = {}, c = function(a) {
            this.templateId = a, this.compiledTemplate = null
        };
        c.prototype.load = function() {
            if (this.compiledTemplate)
                return this.compiledTemplate;
            var a = this.loadTemplate(this.templateId);
            return this.compiledTemplate = this.compileTemplate(a), this.compiledTemplate
        }, c.prototype.loadTemplate = function(a) {
            var b = $(a).html();
            return $(a).remove(), b
        }, c.prototype.compileTemplate = function(a) {
            return _.template(a)
        };
        var d = {get: function(a) {
                var d = b[a];
                return d || (d = new c(a), b[a] = d), d.load()
            }};
        return a = d
    }(), f = function() {
        "use strict";
        function a(a) {
            for (var b in a)
                if ("success" === b || "error" === b)
                    throw new Error("dont't use success and error callback in request options, use done, fail, or then")
        }
        var b, c = {request: function(b) {

                return a(b), b.data = b.data || {}, ELEME.csrfToken && (b.data.csrf_token = ELEME.csrfToken), $.ajax(b).then(function(a, b, c) {
                    if (arguments.length) {
                        var d = $.Deferred();
                        if(a.status == undefined){
                             a = JSON.parse(a);
                        }
                       
                        return"ok" === a.status ? d.resolveWith(null, [a.data, b, c]) : "error" === a.status ? d.rejectWith(null, [a.error, b, c]) : void 0
                    }
                }, function(a, b) {
                    var c = $.Deferred(), d = {code: -1, msg: "请求出错"};
                    return c.rejectWith(null, [d, b, a])
                })
            }};
        return b = c
    }(), g = function() {
        "use strict";
        var a, b = {email: /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i, tel: /^([2-9]\d{2,7})(-\d{3,5})*$/, cellphone: /^1[34578]\d{9}$/, fulltel: /^([2-9]\d{6,7})(-\d{3,5})*$/};
        return a = b
    }(), h = function() {
        "use strict";
        var a, b = {format: function(a) {
                a *= 1e3;
                var b, c, d, e = new Date(a), f = new Date, g = f.getTime();
                return f.setHours(0, 0, 0, 0), c = f.getTime(), f.setTime(c - 864e5), d = f.getTime(), b = g - a, 6e4 > b ? "刚刚" : 36e5 > b ? Math.round(b / 6e4) + "分钟前" : e.getTime() > c ? Math.round(b / 36e5) + "小时前" : c > a && a > d ? "昨天" : e.getFullYear() === f.getFullYear() ? e.getMonth() + 1 + "月" + e.getDate() + "日" : e.getFullYear() + "年" + (e.getMonth() + 1) + "月" + e.getDate() + "日"
            }};
        return a = b
    }();
    !function(a, b, c, d, e, f, g, h) {
        "use strict";
        var i = a, j = b, k = c, l = d, m = e, n = f, o = g, p = h;
        "undefined" == typeof Eleme && (window.Eleme = {}), Eleme.Common = {RenderBuffer: i, Evt: j, Util: l, Time: p, Http: n, PubSub: k, Regex: o, TemplateCache: m}
    }(a, b, c, d, e, f, g, h)
}(), function() {
    !function() {
        "use strict";
        if ($(".eleme_dropdown:not(#topbar_msg, #topbar_cart)").uDropdown(), $('input:not([type="password"]), textarea').placeholder(), $('[data-toggle="bs-tooltip"]').tooltip({animation: !1, placement: "top", delay: {show: 700, hide: 0}, container: "body"}), $("#mod_fixed").length > 0) {
            var a = $("#mod_fixed");
            Eleme.Component.scrollspy("fixedMod", {min: 300, onEnter: function() {
                    a.find("#back_top").removeClass("ui_invisible")
                }, onLeave: function() {
                    a.find("#back_top").addClass("ui_invisible")
                }}), $("#back_top").on("click", function() {
                $("html, body").animate({scrollTop: "0px"}, 300)
            })
        }
        var b = {feedbackUrl: "/feedback/addSuggestion", feedbackModalSelector: "#modal_feedback", feedbackInputSelector: "#feedback_input", feedbackFormSelector: "#feedback_form", feedbackErrorSelector: ".feedback_err_tip", cancelFeedbackSelector: ".cancel_feedback", submitFeedbackSelector: ".submit_feedback"};
        $(b.feedbackFormSelector).on("submit", function(a) {
            var c = "http://" + ELEME.mainHost + b.feedbackUrl, d = $.trim($(b.feedbackInputSelector).val());
            return a.preventDefault(), "" === d ? void $(b.feedbackErrorSelector).html("亲爱的用户，您还没有添加反馈意见").removeClass("hide") : ($(b.submitFeedbackSelector).html("正在提交"), void Eleme.Common.Http.request({url: c, type: "get", dataType: "jsonp", data: {content: d}}).done(function() {
                $(b.feedbackModalSelector).modal("hide"), $(b.feedbackInputSelector).val(""), $(b.feedbackErrorSelector).html("").addClass("hide"), $(b.submitFeedbackSelector).html("提交")
            }).fail(function(a) {
                $(b.feedbackErrorSelector).html(a.msg).removeClass("hide"), $(b.submitFeedbackSelector).html("提交")
            }))
        }), $(b.cancelFeedbackSelector).on("click", function() {
            $(b.feedbackErrorSelector).addClass("hide").html("")
        }), ~function() {
            function a(a) {
                var b, c = a.split(/,\s/), d = {};
                return $.each(c, function(a, c) {
                    return b = $.trim(c).split(/\s+/), b[1] ? void(d[parseInt(b[1])] = b[0]) : void(d[0] = b[0])
                }), d
            }
            var b = Math.ceil(window.devicePixelRatio || 1), c = "srcset"in new Image;
            $.fn.srcset = function() {
                return c ? void 0 : $(this).each(function(c, d) {
                    for (var e = $(d), f = e.attr("srcset"), g = a(f), h = b; h >= 0; ) {
                        if (g[h])
                            return void e.attr("src", g[h]);
                        --h
                    }
                })
            }
        }(jQuery)
    }()
}(), function() {
    var a = function() {
        "use strict";
        function a(a) {
            this.$el = null, this.local = !1, this.searchResault = {}, this.init(a)
        }
        var b, c = Eleme.Common.Http, d = Eleme.Common.PubSub, e = {searchPanelSelector: "#topbar_search", searchFormSelector: "#tsearch_form", resaultWrapSelector: "#tsearch_autocomplete", localLabelSelector: ".ts_inRst", removeLocalLabelSelector: "#ts_remove", searchInputSelector: "#tsearch_input", singleFoodSelector: ".tsearch-item", loadingSpinSelector: "#ts_loading", iconSearchSelector: "#icon_tsearch", searchClearSelector: "#ts_clear", filterFoodTopic: "filterFood", searchSuccessTopic: "restaurantSearchSuccess", searchFailureTopic: "restaurantSearchFailure", foodScrollTopic: "foodScroll", emptyTip: '<div class="tsearch-no-result">没有找到相关的美食</div>', foodContainer: ['<div class="group">', '<span class="tsearch-cate">美食</span>', '<ul class="tsearch-list"></ul>', "</div>"].join(""), restaurantContainer: ['<div class="group">', '<span class="tsearch-cate">餐厅</span>', '<ul class="tsearch-list"></ul>', "</div>"].join(""), inRestaurantTpl: ['<span class="ts_inRst tsearch-in-rst">', '<i class="glyph-search"></i>搜本店<a id="ts_remove" class="action-remove">×</a>', "</span>"].join(""), foodTpl: ['<li class="tsearch-item ts-dish">', '<a class="tsd-name" data-foodid="<%- data.id %>"><%- data.name %></a>', '<span class="tsd-price"><span class="symbol-rmb"></span><%- data.price %></span>', "</li>"].join(""), globalFoodTpl: ['<li class="tsearch_item tsearch-item ts-dish">', '<a class="tsd-name" href="<%- "//" + "r" + "." + ELEME.rootHost + "/" + data.restaurantNameForUrl + "#food/" + data.id %>" target="_blank"><%- data.name %></a>', '<a class="tsd-rst" href="<%- "//" + data.restaurantNameForUrl + "." + ELEME.rootHost %>" target="_blank"><%- data.restaurantName %></a>', '<span class="tsd-price">', '<span class="symbol-rmb"><%- data.price %></span>', "</span>", "</li>"].join(""), globalRestaurantTpl: ['<li class="tsearch_item">', '<a class="tsearch-item ts-restaurant" href="<%- "//" + "r" + "." + ELEME.rootHost + "/" + data.nameForUrl %>" target="_blank">', '<img class="tsr-logo" src="<%- ELEME.fussHost + data.logo %>" alt="" />', '<span class="tsr-name"><%- data.name %></span>', '<% if (data.deliverTime) { %><span class="tsr-time"><%- data.deliverTime %>分钟</span><% } %>', "</a>", "</li>"].join(""), local: !1, activeClass: "ui_open", searchUrl: "/search/suggestion", restaurantTag: "restaurant_show"};
        return a.prototype.init = function() {
            this.$el = $(e.searchPanelSelector), this.subscribeTopic(), this.bindEvents(), ELEME.route === e.restaurantTag && this.changeToInRestaurant()
        }, a.prototype.subscribeTopic = function() {
            d.subscribe(e.searchSuccessTopic, function(a) {
                this.$el.find(e.loadingSpinSelector).addClass("hide").siblings(e.searchClearSelector).removeClass("hide"), this.parseResault(a)
            }, this), d.subscribe(e.searchFailureTopic, function() {
            })
        }, a.prototype.bindEvents = function() {
            var a = this;
            this.$el.on("keyup", e.searchInputSelector, $.proxy(this.handleType(), this)), this.$el.on("click", e.removeLocalLabelSelector, $.proxy(this.changeToNomal, this)), this.$el.on("click", e.singleFoodSelector, function(b) {
                var c = $(b.currentTarget).find(".tsd-name"), f = window.parseInt(c.data("foodid"), 10);
               d.publish(e.foodScrollTopic, f), a.$el.find(e.searchInputSelector).val(""), a.$el.find(e.searchFormSelector).removeClass("focus"), a.$el.find(e.resaultWrapSelector).removeClass(e.activeClass).hide(), a.$el.find(e.searchClearSelector).addClass("hide")
            }), this.$el.on("click", e.searchClearSelector, function() {
                a.$el.find(e.searchInputSelector).val(""), $(this).addClass("hide")
            }), $(document).on("click", function(b) {
                var c = b.target, d = a.$el[0], f = a.$el.find(e.resaultWrapSelector);
                f.hasClass(e.activeClass) && ($.contains(d, c) || (a.$el.find(e.searchFormSelector).removeClass("focus"), f.removeClass(e.activeClass).hide(), a.$el.find(e.searchClearSelector).addClass("hide")))
            }), this.$el.on("focus", e.searchInputSelector, function(b) {
                var c = a.$el.find(e.searchFormSelector), d = a.$el.find(e.resaultWrapSelector);
                return d.hasClass(e.activeClass) ? !1 : (d.addClass(e.activeClass), c.addClass("focus"), void b.stopPropagation())
            }), this.$el.find(e.searchFormSelector).on("submit", function() {
                var a = $(this).find(e.searchInputSelector).val();
                return a = encodeURIComponent(a), window.location.href = ELEME.formerBaseUrl + "/search/kw/" + a, !1
            })
        }, a.prototype.changeToInRestaurant = function() {
            this.$el.addClass("ui_in_rst").find(e.iconSearchSelector).addClass("hide"), this.$el.find(e.iconSearchSelector).after($(e.inRestaurantTpl)), this.$el.find(e.searchInputSelector).attr("placeholder", "美食"), this.local = !0
        }, a.prototype.changeToNomal = function() {
            this.$el.removeClass("ui_in_rst").find(e.localLabelSelector).remove(), this.$el.find(e.iconSearchSelector).removeClass("hide"), this.$el.find(e.searchInputSelector).attr("placeholder", "搜索餐厅,美食"), this.local = !1
        }, a.prototype.handleType = function() {
            var a;
            return function() {
                var b = this.$el.find(e.searchInputSelector).val();
                a !== $.trim(b) && (this.local ? d.publish(e.filterFoodTopic, {keyword: b}, $.proxy(this.parseResault, this)) : this.search({wd: b}), a = b)
            }
        }, a.prototype.search = function(a) {
            var b = "//" + ELEME.mainHost + e.searchUrl;
            this.$el.find(e.loadingSpinSelector).removeClass("hide").siblings(e.searchClearSelector).addClass("hide"), c.request({type: "get", url: b, data: a, dataType: "jsonp"}).done(function(a) {
            }).fail(function(a) {
                d.publish(e.searchFailureTopic, a.msg)
            })
        }, a.prototype.parseResault = function(a) {
            a.food = a.foods || [], a.restaurant = a.restaurants || [], this.searchResault = a, this.buildResaultContent()
        }, a.prototype.buildResaultContent = function() {
            var a, b, c, d, f, g, h = "", i = "", j = this.searchResault.food, k = this.searchResault.restaurant, l = $(e.foodContainer), m = $(e.restaurantContainer), n = this.$el.find(e.resaultWrapSelector);
            if (n.empty(), this.local ? f = _.template(e.foodTpl) : (g = _.template(e.globalRestaurantTpl), f = _.template(e.globalFoodTpl)), 0 === j.length && 0 === k.length)
                return void n.append(e.emptyTip).show();
            if (0 !== k.length) {
                for (b = 0, d = k.length; d > b; b++)
                    i += g(k[b]);
                m.children("ul").append(i), n.append(m)
            }
            if (0 !== j.length) {
                for (a = 0, c = j.length; c > a; a++)
                    h += f(j[a]);
                l.children("ul").append(h), n.append(l)
            }
            n.show()
        }, b = a
    }(), b = function() {
        "use strict";
        function a() {
            this.$el = null, this.init()
        }
        var b, c = Eleme.Common.Util, d = Eleme.Common.Http, e = Eleme.Common.PubSub, f = {topbarCartSelector: "#topbar_cart", cartWrapSelector: "#tcart_wrapper", cartLoadingSelector: "#tcart_loading", cartContentSelector: ".t_c_c", rstPhoneSelector: ".rst_header_tel", cartTotalSelector: "#tcart_total", basketSyncSuccessTopic: "basketSyncSuccess", basketSyncFailureTopic: "topBasketSyncFailure", foodTpl: ['<li class="tcart-item">', '<span class="tcart-dish"><%- data.name %></span>', '<span class="tcart-amount">× <%- data.quantity %></span>', '<span class="tcart-price">', '<span class="symbol-rmb"><%= data.foodTotal %></span>', "</span>", "</li>"].join(""), cartInfoTpl: ['<h3 class="tcart-title group">', '<a class="tcart-restaurant" href="<%- data.restaurantNameForUrl %>"><% if (data.restaurantName.length > 10) { %><%- data.restaurantName.substr(0, 9) %>&hellip;<% } else { %><%- data.restaurantName %><% } %></a>', '<span class="tcart-cost"><span class="symbol-rmb"><%- data.total %></span></span>', "</h3>", '<div class="tcart-content t_c_c"></div>'].join(""), checkBtnTpl: ['<div class="twidget-footer">', "<% if (data.deliverPlus >= 0) { %>", "<% if (data.phoneOrder) { %>", '<p class="tcart-hint" title="该餐厅当前只支持电话订餐">餐厅电话：<span class="tcart-tel"><%- data.phone %></span></p>', "<% } else { %>", '<a id="tcart_checkout" class="twidget-btn" href="<%- data.url %>">去结算</a>', "<% } %>", "<% } else { %>", '<p class="tcart-hint">还需要 <span class="tcart-remainder"><span class="symbol-rmb"></span><%= -data.deliverPlus %></span> 起送</p>', "<% } %>", "</div>"].join(""), singleCartTpl: '<h4 class="tcart-basket"><%- data.basketId %>号篮子</h4>', emptyCartHintTpl: '<div class="twidget-empty">篮子空空，肚子空空，快去订餐吧~</div>', cartFetchUrl: "/cart"};
        return a.prototype.init = function() {
            this.$el = $(f.topbarCartSelector), this.bindEvents(), this.subscribeTopic()
        }, a.prototype.bindEvents = function() {
            this.$el.uDropdown($.proxy(this.fetch, this), $.proxy(this.empty, this))
        }, a.prototype.subscribeTopic = function() {
            e.subscribe(f.basketSyncSuccessTopic, function(a, b) {
                b = b || {}, b.top && this.parseCartData(a)
            }, this), e.subscribe(f.basketSyncSuccessTopic, this.countCartTotal, this)
        }, a.prototype.countCartTotal = function(a) {
            var b, c, d, e, f, g = 0;
            if ("1" !== a) {
                if (!$.isArray(a.groups))
                    return;
                for (b = a.groups.length; b--; )
                    for (e = a.groups[b], c = e.length; c--; )
                        for (f = e[c], g += f.quantity, d = f.garnishes.length; d--; )
                            g += f.garnishes[d].quantity
            }
            this.updateCartTotal(g)
        }, a.prototype.updateCartTotal = function(a) {
            a > 0 ? this.$el.find(f.cartTotalSelector).html(a).show() : 0 === a && this.$el.find(f.cartTotalSelector).html(a).hide()
        }, a.prototype.fetch = function() {
            var a = "//" + ELEME.mainHost + f.cartFetchUrl;
            d.request({type: "get", url: a, dataType: "jsonp"}).done(function(a) {
                e.publish(f.basketSyncSuccessTopic, a, {top: !0})
            }).fail(function(a) {
                e.publish(f.basketSyncFailureTopic, a.msg)
            })
        }, a.prototype.empty = function() {
            this.$el.find(f.cartWrapSelector).empty(), this.$el.find(f.cartLoadingSelector).show()
        }, a.prototype.parseCartData = function(a) {
            var b, c = a.groups;
            return this.$el.find(f.cartWrapSelector).empty(), this.$el.find(f.cartLoadingSelector + "," + f.cartWrapSelector).hide(), 0 === c.length ? void this.showEmptyTip() : (a.restaurantNameForUrl = "//" + a.restaurantNameForUrl + "." + ELEME.rootHost, this.appendRstHead(a), this.appendCartBody(c), 1 === c.length && this.$el.find(f.cartContentSelector + " h4").remove(), a.phoneOrder && (b = this.getPhoneNumber()), this.appendCheckoutBtn({url: "http://" + ELEME.mainHost + "/cart/checkout", deliverAmount: a.deliverAmount, restaurantDeliverAmount: a.restaurantDeliverAmount, phoneOrder: a.phoneOrder, total: a.total, phone: b}), void this.$el.find(f.cartWrapSelector).show())
        }, a.prototype.showEmptyTip = function() {
            this.$el.find(f.cartWrapSelector).append(f.emptyCartHintTpl).show()
        }, a.prototype.appendCartBody = function(a) {
            var b, d, e, g, h, i, j, k, l, m = _.template(f.foodTpl), n = _.template(f.singleCartTpl), o = this.$el.find(f.cartContentSelector);
            for (b = 0, g = a.length; g > b; b++) {
                for (h = a[b], k = $(n({basketId:b + 1})), l = $('<ul class="tcart-list"></ul>'), d = h.length; d--; )
                    if (i = h[d], i.foodTotal = c.multiply(i.price, i.quantity), l.append(m(i)), i.garnish)
                        for (e = i.garnish.length; e--; )
                            j = i.garnish[e], l.append(m(j));
                o.append(k, l)
            }
        }, a.prototype.appendRstHead = function(a) {
            var b = _.template(f.cartInfoTpl);
            this.$el.find(f.cartWrapSelector).append(b(a))
        }, a.prototype.appendCheckoutBtn = function(a) {
            var b = _.template(f.checkBtnTpl);
            a.deliverPlus = c.add(a.deliverAmount, -a.restaurantDeliverAmount), this.$el.find(f.cartWrapSelector).append(b(a))
        }, a.prototype.getPhoneNumber = function() {
            var a = "";
            return a = $(f.rstPhoneSelector).text(), a.split(/\s+/i).length > 0 && (a = a.split(/\s+/i)[0]), a
        }, b = a
    }(), c = function() {
        "use strict";
        function a() {
            this.$el = null, this.pullId = null, this.active = !1, this.working = !1, this.currentUnread = 0, this.init()
        }
        var b, c = Eleme.Common.Http, d = Eleme.Common.PubSub, e = {topbarMsgSelector: "#topbar_msg", msgTotalSelector: "#tmsg_total", msgContainerSelector: "#tmsg_wrapper", msgLoadingSelector: "#tmsg_loading", clearBtnSelector: "#tmsg_clear", singleMsgSelector: ".tmsg_item", msgFetchErrorTopic: "msgFetchError", msgFetchDoneTopic: "msgFetchDone", unreadMsgTopic: "unreadMsg", userAuthTopic: "userAuth", msgTpl: ['<a class="tmsg-item tmsg_item" data-id="<%- data.id %>" href="<%- data.url %>" target="_blank">', '<h4 class="tmsg-title" title="<%- data.abstract %>"><%- data.abstract %></h4>', '<span class="tmsg-time"><%- data.createdAt %></span>', '<p class="tmsg-content"><%- data.content %></p>', "</a>"].join(""), noMsgHintTpl: '<div id="tmsg_empty" class="twidget-empty">没有新信息</div>', msgClearBtnTpl: '<div class="twidget-footer"><a id="tmsg_clear" class="twidget-btn">知道了</a></div>', msgUrl: "/topbar/message", msgReadUrl: "/topbar/read/message", syncTimeStamp: 6e6};
        return a.prototype.init = function() {
            this.$el = $(e.topbarMsgSelector), this.bindEvents(), this.subscribeTopic()
        }, a.prototype.subscribeTopic = function() {
            d.subscribe(e.msgFetchDoneTopic, this.parseMsgData, this), d.subscribe(e.msgFetchErrorTopic, this.parseMsgData, this), d.subscribe(e.userAuthTopic, this.toggle, this), d.subscribe(e.unreadMsgTopic, this.updateMsgInfo, this)
        }, a.prototype.bindEvents = function() {
            var a = this;
            this.$el.uDropdown($.proxy(this.fetch, this), $.proxy(this.empty, this)), this.$el.on("click", e.clearBtnSelector, function() {
                a.markAsRead({payLoad: "/all", type: "all", success: function() {
                        this.$el.trigger("click").find(e.msgTotalSelector).html(0).hide()
                    }})
            }), this.$el.on("click", e.singleMsgSelector, function(b) {
                var c = $(b.currentTarget);
                a.markAsRead({payLoad: "/" + c.data("id"), type: "single", success: function() {
                        0 === this.currentUnread && this.$el.trigger("click").find(e.msgTotalSelector).html(0).hide(), c.remove(), this.$el.find(e.msgTotalSelector).html(this.currentUnread)
                    }})
            })
        }, a.prototype.fetch = function() {
            var a = "//" + ELEME.mainHost + e.msgUrl;
            c.request({type: "get", url: a, dataType: "jsonp"}).done(function(a) {
                d.publish(e.msgFetchDoneTopic, a)
            }).fail(function(a) {
                d.publish(e.msgFetchErrorTopic, a.msg)
            })
        }, a.prototype.toggle = function(a) {
            a.authed ? (this.working = !0, this.$el.removeClass("hide"), window.setTimeout($.proxy(function() {
                this.pullId || (this.pullId = window.setInterval($.proxy(this.pull, this), 1e4))
            }, this), e.syncTimeStamp)) : (this.working = !1, this.$el.addClass("hide"))
        }, a.prototype.empty = function() {
            this.active = !1, this.$el.find(e.msgLoadingSelector).show(), this.$el.find(e.msgContainerSelector).empty()
        }, a.prototype.pull = function() {
            var a, b, f = this, g = (new Date).getTime(), h = "//" + ELEME.mainHost + e.msgUrl + "/count";
            a = window.localStorage.getItem("updateTimeStamp"), b = window.localStorage.getItem("unread"), g - a > e.syncTimeStamp ? c.request({type: "get", url: h, dataType: "jsonp"}).done(function(a) {
                f.storeToLocal(a), d.publish(e.unreadMsgTopic, a)
            }).fail(function() {
            }) : d.publish(e.unreadMsgTopic, b)
        }, a.prototype.updateMsgInfo = function(a) {
            this.active || this.currentUnread == a || (this.currentUnread = a, this.$el.find(e.msgTotalSelector).html(a), a > 0 ? this.$el.find(e.msgTotalSelector).css("display", "block") : 0 === a && this.$el.find(e.msgTotalSelector).css("display", "none"))
        }, a.prototype.parseMsgData = function(a) {
            a = a || [];
            var b, c = _.template(e.msgTpl), f = this.$el.find(e.msgContainerSelector);
            if (f.empty(), this.storeToLocal(this.currentUnread), d.publish(e.unreadMsgTopic, a.length), this.active = !0, this.$el.find(e.msgLoadingSelector).hide(), 0 === a.length)
                return void f.append(e.noMsgHintTpl);
            for (b = a.length; b--; )
                f.append(c(a[b]));
            f.append(e.msgClearBtnTpl)
        }, a.prototype.markAsRead = function(a) {
            var b, d, f, g = this;
            a && (d = a.payLoad, f = a.success, d && f && "function" == typeof f && (b = "//" + ELEME.mainHost + e.msgReadUrl + d, c.request({type: "get", url: b, dataType: "jsonp"}).done(function(b) {
                b.success && ("all" === a.type ? g.currentUnread = 0 : g.currentUnread--, g.storeToLocal(g.currentUnread), a.success.call(g))
            }).fail(function() {
            })))
        }, a.prototype.storeToLocal = function(a) {
            window.localStorage && (window.localStorage.setItem("unread", a), window.localStorage.setItem("updateTimeStamp", (new Date).getTime()))
        }, a.prototype.showErrorTip = function() {
            this.$el.find(e.msgLoadingSelector).hide()
        }, b = a
    }(), d = function() {
        "use strict";
        function a() {
            this.$el = null, this.topbarInfo = {}, this.init()
        }
        var b, c = Eleme.Common.Http, d = Eleme.Common.PubSub, e = {topbarWrapSelector: "#topbar", cartTotalSelector: "#tcart_total", msgTotalSelector: "#tmsg_total", userNameSelector: "#t_username", userNameWrapSelector: "#topbar_username", loginWrapSelector: "#topbar_logreg", msgWrapSelector: "#topbar_msg", cartWrapSelector: "#topbar_cart", dpLinkSelector: "#tdp_link", logoutSelector: "#topbar_logout", userAuthTopic: "userAuth", userInfoDoneTopic: "userInfoDone", userInfoUrl: "/topbar/userinfo", logoutUrl: "http://" + ELEME.accountHost + "/logout"};
        return a.prototype.init = function() {
            this.$el = $(e.topbarWrapSelector), d.subscribe(e.userInfoDoneTopic, this.updateUserInfo, this), d.subscribe(e.userInfoDoneTopic, this.traceUserBehavior, this)
        }, a.prototype.fetch = function() {
            var a = "//" + ELEME.mainHost + e.userInfoUrl;
            c.request({url: a, type: "get", dataType: "jsonp"}).done(function(a) {
                d.publish(e.userInfoDoneTopic, a)
            }).fail(function() {
            })
        }, a.prototype.updateUserInfo = function(a) {
            this.topbarInfo = a, this.topbarInfo.authenticated ? (ELEME.authed = !0, this.$el.find(e.userNameSelector).html(this.topbarInfo.username), this.$el.find(e.userNameWrapSelector).removeClass("hide"), this.$el.find(e.loginWrapSelector).addClass("hide"), this.topbarInfo.message > 0 && (this.$el.find(e.msgTotalSelector).html(this.topbarInfo.message).closest(e.msgWrapSelector).removeClass("empty"), window.localStorage.setItem("unread", this.topbarInfo.message), window.localStorage.setItem("updateTimeStamp", (new Date).getTime()))) : (ELEME.authed = !1, this.$el.find(e.msgWrapSelector).addClass("hide")), this.topbarInfo.cart > 0 && this.$el.find(e.cartTotalSelector).html(this.topbarInfo.cart).closest(e.cartWrapSelector).removeClass("empty"), this.topbarInfo.position && this.$el.find(e.dpLinkSelector).removeClass("hide").attr("href", "http://t.dianping.com/home?distance=500&latitude=" + this.topbarInfo.position.latitude + "&longitude=" + this.topbarInfo.position.longitude), d.publish(e.userAuthTopic, {authed: this.topbarInfo.authenticated})
        }, a.prototype.traceUserBehavior = function(a) {
            var b = {screenWidth: window.screen ? screen.width : null, screenHeight: window.screen ? screen.height : null, clientWidth: document.documentElement.clientWidth, clientHeight: document.documentElement.clientHeight, URL: document.URL, referrer: document.referrer, userId: a.userid, geohash: a.geohash};
            (new Image).src = "https://web-ubt.ele.me/tracking.gif?" + $.param(b)
        }, b = a
    }();
    !function(a, b, c, d) {
        "use strict";
        var e = a, f = b, g = c, h = d, i = (new e, new f, new g, new h);
        i.fetch()
    }(a, b, c, d)
}();