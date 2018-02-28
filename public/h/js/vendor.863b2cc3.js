if (function(a, b) {
    function c(a) {
        var b = a.length, c = kb.type(a);
        return kb.isWindow(a) ? !1 : 1 === a.nodeType && b ? !0 : "array" === c || "function" !== c && (0 === b || "number" == typeof b && b > 0 && b - 1 in a)
    }
    function d(a) {
        var b = zb[a] = {};
        return kb.each(a.match(mb) || [], function(a, c) {
            b[c] = !0
        }), b
    }
    function e(a, c, d, e) {
        if (kb.acceptData(a)) {
            var f, g, h = kb.expando, i = a.nodeType, j = i ? kb.cache : a, k = i ? a[h] : a[h] && h;
            if (k && j[k] && (e || j[k].data) || d !== b || "string" != typeof c)
                return k || (k = i ? a[h] = bb.pop() || kb.guid++ : h), j[k] || (j[k] = i ? {} : {toJSON: kb.noop}), ("object" == typeof c || "function" == typeof c) && (e ? j[k] = kb.extend(j[k], c) : j[k].data = kb.extend(j[k].data, c)), g = j[k], e || (g.data || (g.data = {}), g = g.data), d !== b && (g[kb.camelCase(c)] = d), "string" == typeof c ? (f = g[c], null == f && (f = g[kb.camelCase(c)])) : f = g, f
        }
    }
    function f(a, b, c) {
        if (kb.acceptData(a)) {
            var d, e, f = a.nodeType, g = f ? kb.cache : a, i = f ? a[kb.expando] : kb.expando;
            if (g[i]) {
                if (b && (d = c ? g[i] : g[i].data)) {
                    kb.isArray(b) ? b = b.concat(kb.map(b, kb.camelCase)) : b in d ? b = [b] : (b = kb.camelCase(b), b = b in d ? [b] : b.split(" ")), e = b.length;
                    for (; e--; )
                        delete d[b[e]];
                    if (c ? !h(d) : !kb.isEmptyObject(d))
                        return
                }
                (c || (delete g[i].data, h(g[i]))) && (f ? kb.cleanData([a], !0) : kb.support.deleteExpando || g != g.window ? delete g[i] : g[i] = null)
            }
        }
    }
    function g(a, c, d) {
        if (d === b && 1 === a.nodeType) {
            var e = "data-" + c.replace(Bb, "-$1").toLowerCase();
            if (d = a.getAttribute(e), "string" == typeof d) {
                try {
                    d = "true" === d ? !0 : "false" === d ? !1 : "null" === d ? null : +d + "" === d ? +d : Ab.test(d) ? kb.parseJSON(d) : d
                } catch (f) {
                }
                kb.data(a, c, d)
            } else
                d = b
        }
        return d
    }
    function h(a) {
        var b;
        for (b in a)
            if (("data" !== b || !kb.isEmptyObject(a[b])) && "toJSON" !== b)
                return!1;
        return!0
    }
    function i() {
        return!0
    }
    function j() {
        return!1
    }
    function k() {
        try {
            return Y.activeElement
        } catch (a) {
        }
    }
    function l(a, b) {
        do
            a = a[b];
        while (a && 1 !== a.nodeType);
        return a
    }
    function m(a, b, c) {
        if (kb.isFunction(b))
            return kb.grep(a, function(a, d) {
                return!!b.call(a, d, a) !== c
            });
        if (b.nodeType)
            return kb.grep(a, function(a) {
                return a === b !== c
            });
        if ("string" == typeof b) {
            if (Qb.test(b))
                return kb.filter(b, a, c);
            b = kb.filter(b, a)
        }
        return kb.grep(a, function(a) {
            return kb.inArray(a, b) >= 0 !== c
        })
    }
    function n(a) {
        var b = Ub.split("|"), c = a.createDocumentFragment();
        if (c.createElement)
            for (; b.length; )
                c.createElement(b.pop());
        return c
    }
    function o(a, b) {
        return kb.nodeName(a, "table") && kb.nodeName(1 === b.nodeType ? b : b.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a
    }
    function p(a) {
        return a.type = (null !== kb.find.attr(a, "type")) + "/" + a.type, a
    }
    function q(a) {
        var b = ec.exec(a.type);
        return b ? a.type = b[1] : a.removeAttribute("type"), a
    }
    function r(a, b) {
        for (var c, d = 0; null != (c = a[d]); d++)
            kb._data(c, "globalEval", !b || kb._data(b[d], "globalEval"))
    }
    function s(a, b) {
        if (1 === b.nodeType && kb.hasData(a)) {
            var c, d, e, f = kb._data(a), g = kb._data(b, f), h = f.events;
            if (h) {
                delete g.handle, g.events = {};
                for (c in h)
                    for (d = 0, e = h[c].length; e > d; d++)
                        kb.event.add(b, c, h[c][d])
            }
            g.data && (g.data = kb.extend({}, g.data))
        }
    }
    function t(a, b) {
        var c, d, e;
        if (1 === b.nodeType) {
            if (c = b.nodeName.toLowerCase(), !kb.support.noCloneEvent && b[kb.expando]) {
                e = kb._data(b);
                for (d in e.events)
                    kb.removeEvent(b, d, e.handle);
                b.removeAttribute(kb.expando)
            }
            "script" === c && b.text !== a.text ? (p(b).text = a.text, q(b)) : "object" === c ? (b.parentNode && (b.outerHTML = a.outerHTML), kb.support.html5Clone && a.innerHTML && !kb.trim(b.innerHTML) && (b.innerHTML = a.innerHTML)) : "input" === c && bc.test(a.type) ? (b.defaultChecked = b.checked = a.checked, b.value !== a.value && (b.value = a.value)) : "option" === c ? b.defaultSelected = b.selected = a.defaultSelected : ("input" === c || "textarea" === c) && (b.defaultValue = a.defaultValue)
        }
    }
    function u(a, c) {
        var d, e, f = 0, g = typeof a.getElementsByTagName !== W ? a.getElementsByTagName(c || "*") : typeof a.querySelectorAll !== W ? a.querySelectorAll(c || "*") : b;
        if (!g)
            for (g = [], d = a.childNodes || a; null != (e = d[f]); f++)
                !c || kb.nodeName(e, c) ? g.push(e) : kb.merge(g, u(e, c));
        return c === b || c && kb.nodeName(a, c) ? kb.merge([a], g) : g
    }
    function v(a) {
        bc.test(a.type) && (a.defaultChecked = a.checked)
    }
    function w(a, b) {
        if (b in a)
            return b;
        for (var c = b.charAt(0).toUpperCase() + b.slice(1), d = b, e = yc.length; e--; )
            if (b = yc[e] + c, b in a)
                return b;
        return d
    }
    function x(a, b) {
        return a = b || a, "none" === kb.css(a, "display") || !kb.contains(a.ownerDocument, a)
    }
    function y(a, b) {
        for (var c, d, e, f = [], g = 0, h = a.length; h > g; g++)
            d = a[g], d.style && (f[g] = kb._data(d, "olddisplay"), c = d.style.display, b ? (f[g] || "none" !== c || (d.style.display = ""), "" === d.style.display && x(d) && (f[g] = kb._data(d, "olddisplay", C(d.nodeName)))) : f[g] || (e = x(d), (c && "none" !== c || !e) && kb._data(d, "olddisplay", e ? c : kb.css(d, "display"))));
        for (g = 0; h > g; g++)
            d = a[g], d.style && (b && "none" !== d.style.display && "" !== d.style.display || (d.style.display = b ? f[g] || "" : "none"));
        return a
    }
    function z(a, b, c) {
        var d = rc.exec(b);
        return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b
    }
    function A(a, b, c, d, e) {
        for (var f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0, g = 0; 4 > f; f += 2)
            "margin" === c && (g += kb.css(a, c + xc[f], !0, e)), d ? ("content" === c && (g -= kb.css(a, "padding" + xc[f], !0, e)), "margin" !== c && (g -= kb.css(a, "border" + xc[f] + "Width", !0, e))) : (g += kb.css(a, "padding" + xc[f], !0, e), "padding" !== c && (g += kb.css(a, "border" + xc[f] + "Width", !0, e)));
        return g
    }
    function B(a, b, c) {
        var d = !0, e = "width" === b ? a.offsetWidth : a.offsetHeight, f = kc(a), g = kb.support.boxSizing && "border-box" === kb.css(a, "boxSizing", !1, f);
        if (0 >= e || null == e) {
            if (e = lc(a, b, f), (0 > e || null == e) && (e = a.style[b]), sc.test(e))
                return e;
            d = g && (kb.support.boxSizingReliable || e === a.style[b]), e = parseFloat(e) || 0
        }
        return e + A(a, b, c || (g ? "border" : "content"), d, f) + "px"
    }
    function C(a) {
        var b = Y, c = uc[a];
        return c || (c = D(a, b), "none" !== c && c || (jc = (jc || kb("<iframe frameborder='0' width='0' height='0'/>").css("cssText", "display:block !important")).appendTo(b.documentElement), b = (jc[0].contentWindow || jc[0].contentDocument).document, b.write("<!doctype html><html><body>"), b.close(), c = D(a, b), jc.detach()), uc[a] = c), c
    }
    function D(a, b) {
        var c = kb(b.createElement(a)).appendTo(b.body), d = kb.css(c[0], "display");
        return c.remove(), d
    }
    function E(a, b, c, d) {
        var e;
        if (kb.isArray(b))
            kb.each(b, function(b, e) {
                c || Ac.test(a) ? d(a, e) : E(a + "[" + ("object" == typeof e ? b : "") + "]", e, c, d)
            });
        else if (c || "object" !== kb.type(b))
            d(a, b);
        else
            for (e in b)
                E(a + "[" + e + "]", b[e], c, d)
    }
    function F(a) {
        return function(b, c) {
            "string" != typeof b && (c = b, b = "*");
            var d, e = 0, f = b.toLowerCase().match(mb) || [];
            if (kb.isFunction(c))
                for (; d = f[e++]; )
                    "+" === d[0] ? (d = d.slice(1) || "*", (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c)
        }
    }
    function G(a, b, c, d) {
        function e(h) {
            var i;
            return f[h] = !0, kb.each(a[h] || [], function(a, h) {
                var j = h(b, c, d);
                return"string" != typeof j || g || f[j] ? g ? !(i = j) : void 0 : (b.dataTypes.unshift(j), e(j), !1)
            }), i
        }
        var f = {}, g = a === Rc;
        return e(b.dataTypes[0]) || !f["*"] && e("*")
    }
    function H(a, c) {
        var d, e, f = kb.ajaxSettings.flatOptions || {};
        for (e in c)
            c[e] !== b && ((f[e] ? a : d || (d = {}))[e] = c[e]);
        return d && kb.extend(!0, a, d), a
    }
    function I(a, c, d) {
        for (var e, f, g, h, i = a.contents, j = a.dataTypes; "*" === j[0]; )
            j.shift(), f === b && (f = a.mimeType || c.getResponseHeader("Content-Type"));
        if (f)
            for (h in i)
                if (i[h] && i[h].test(f)) {
                    j.unshift(h);
                    break
                }
        if (j[0]in d)
            g = j[0];
        else {
            for (h in d) {
                if (!j[0] || a.converters[h + " " + j[0]]) {
                    g = h;
                    break
                }
                e || (e = h)
            }
            g = g || e
        }
        return g ? (g !== j[0] && j.unshift(g), d[g]) : void 0
    }
    function J(a, b, c, d) {
        var e, f, g, h, i, j = {}, k = a.dataTypes.slice();
        if (k[1])
            for (g in a.converters)
                j[g.toLowerCase()] = a.converters[g];
        for (f = k.shift(); f; )
            if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), i = f, f = k.shift())
                if ("*" === f)
                    f = i;
                else if ("*" !== i && i !== f) {
                    if (g = j[i + " " + f] || j["* " + f], !g)
                        for (e in j)
                            if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
                                g === !0 ? g = j[e] : j[e] !== !0 && (f = h[0], k.unshift(h[1]));
                                break
                            }
                    if (g !== !0)
                        if (g && a["throws"])
                            b = g(b);
                        else
                            try {
                                b = g(b)
                            } catch (l) {
                                return{state: "parsererror", error: g ? l : "No conversion from " + i + " to " + f}
                            }
                }
        return{state: "success", data: b}
    }
    function K() {
        try {
            return new a.XMLHttpRequest
        } catch (b) {
        }
    }
    function L() {
        try {
            return new a.ActiveXObject("Microsoft.XMLHTTP")
        } catch (b) {
        }
    }
    function M() {
        return setTimeout(function() {
            $c = b
        }), $c = kb.now()
    }
    function N(a, b, c) {
        for (var d, e = (ed[b] || []).concat(ed["*"]), f = 0, g = e.length; g > f; f++)
            if (d = e[f].call(c, b, a))
                return d
    }
    function O(a, b, c) {
        var d, e, f = 0, g = dd.length, h = kb.Deferred().always(function() {
            delete i.elem
        }), i = function() {
            if (e)
                return!1;
            for (var b = $c || M(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; i > g; g++)
                j.tweens[g].run(f);
            return h.notifyWith(a, [j, f, c]), 1 > f && i ? c : (h.resolveWith(a, [j]), !1)
        }, j = h.promise({elem: a, props: kb.extend({}, b), opts: kb.extend(!0, {specialEasing: {}}, c), originalProperties: b, originalOptions: c, startTime: $c || M(), duration: c.duration, tweens: [], createTween: function(b, c) {
                var d = kb.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
                return j.tweens.push(d), d
            }, stop: function(b) {
                var c = 0, d = b ? j.tweens.length : 0;
                if (e)
                    return this;
                for (e = !0; d > c; c++)
                    j.tweens[c].run(1);
                return b ? h.resolveWith(a, [j, b]) : h.rejectWith(a, [j, b]), this
            }}), k = j.props;
        for (P(k, j.opts.specialEasing); g > f; f++)
            if (d = dd[f].call(j, a, k, j.opts))
                return d;
        return kb.map(k, N, j), kb.isFunction(j.opts.start) && j.opts.start.call(a, j), kb.fx.timer(kb.extend(i, {elem: a, anim: j, queue: j.opts.queue})), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always)
    }
    function P(a, b) {
        var c, d, e, f, g;
        for (c in a)
            if (d = kb.camelCase(c), e = b[d], f = a[c], kb.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d && (a[d] = f, delete a[c]), g = kb.cssHooks[d], g && "expand"in g) {
                f = g.expand(f), delete a[d];
                for (c in f)
                    c in a || (a[c] = f[c], b[c] = e)
            } else
                b[d] = e
    }
    function Q(a, b, c) {
        var d, e, f, g, h, i, j = this, k = {}, l = a.style, m = a.nodeType && x(a), n = kb._data(a, "fxshow");
        c.queue || (h = kb._queueHooks(a, "fx"), null == h.unqueued && (h.unqueued = 0, i = h.empty.fire, h.empty.fire = function() {
            h.unqueued || i()
        }), h.unqueued++, j.always(function() {
            j.always(function() {
                h.unqueued--, kb.queue(a, "fx").length || h.empty.fire()
            })
        })), 1 === a.nodeType && ("height"in b || "width"in b) && (c.overflow = [l.overflow, l.overflowX, l.overflowY], "inline" === kb.css(a, "display") && "none" === kb.css(a, "float") && (kb.support.inlineBlockNeedsLayout && "inline" !== C(a.nodeName) ? l.zoom = 1 : l.display = "inline-block")), c.overflow && (l.overflow = "hidden", kb.support.shrinkWrapBlocks || j.always(function() {
            l.overflow = c.overflow[0], l.overflowX = c.overflow[1], l.overflowY = c.overflow[2]
        }));
        for (d in b)
            if (e = b[d], ad.exec(e)) {
                if (delete b[d], f = f || "toggle" === e, e === (m ? "hide" : "show"))
                    continue;
                k[d] = n && n[d] || kb.style(a, d)
            }
        if (!kb.isEmptyObject(k)) {
            n ? "hidden"in n && (m = n.hidden) : n = kb._data(a, "fxshow", {}), f && (n.hidden = !m), m ? kb(a).show() : j.done(function() {
                kb(a).hide()
            }), j.done(function() {
                var b;
                kb._removeData(a, "fxshow");
                for (b in k)
                    kb.style(a, b, k[b])
            });
            for (d in k)
                g = N(m ? n[d] : 0, d, j), d in n || (n[d] = g.start, m && (g.end = g.start, g.start = "width" === d || "height" === d ? 1 : 0))
        }
    }
    function R(a, b, c, d, e) {
        return new R.prototype.init(a, b, c, d, e)
    }
    function S(a, b) {
        var c, d = {height: a}, e = 0;
        for (b = b?1:0; 4 > e; e += 2 - b)
            c = xc[e], d["margin" + c] = d["padding" + c] = a;
        return b && (d.opacity = d.width = a), d
    }
    function T(a) {
        return kb.isWindow(a) ? a : 9 === a.nodeType ? a.defaultView || a.parentWindow : !1
    }
    var U, V, W = typeof b, X = a.location, Y = a.document, Z = Y.documentElement, $ = a.jQuery, _ = a.$, ab = {}, bb = [], cb = "1.10.2", db = bb.concat, eb = bb.push, fb = bb.slice, gb = bb.indexOf, hb = ab.toString, ib = ab.hasOwnProperty, jb = cb.trim, kb = function(a, b) {
        return new kb.fn.init(a, b, V)
    }, lb = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source, mb = /\S+/g, nb = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, ob = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/, pb = /^<(\w+)\s*\/?>(?:<\/\1>|)$/, qb = /^[\],:{}\s]*$/, rb = /(?:^|:|,)(?:\s*\[)+/g, sb = /\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g, tb = /"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g, ub = /^-ms-/, vb = /-([\da-z])/gi, wb = function(a, b) {
        return b.toUpperCase()
    }, xb = function(a) {
        (Y.addEventListener || "load" === a.type || "complete" === Y.readyState) && (yb(), kb.ready())
    }, yb = function() {
        Y.addEventListener ? (Y.removeEventListener("DOMContentLoaded", xb, !1), a.removeEventListener("load", xb, !1)) : (Y.detachEvent("onreadystatechange", xb), a.detachEvent("onload", xb))
    };
    kb.fn = kb.prototype = {jquery: cb, constructor: kb, init: function(a, c, d) {
            var e, f;
            if (!a)
                return this;
            if ("string" == typeof a) {
                if (e = "<" === a.charAt(0) && ">" === a.charAt(a.length - 1) && a.length >= 3 ? [null, a, null] : ob.exec(a), !e || !e[1] && c)
                    return!c || c.jquery ? (c || d).find(a) : this.constructor(c).find(a);
                if (e[1]) {
                    if (c = c instanceof kb ? c[0] : c, kb.merge(this, kb.parseHTML(e[1], c && c.nodeType ? c.ownerDocument || c : Y, !0)), pb.test(e[1]) && kb.isPlainObject(c))
                        for (e in c)
                            kb.isFunction(this[e]) ? this[e](c[e]) : this.attr(e, c[e]);
                    return this
                }
                if (f = Y.getElementById(e[2]), f && f.parentNode) {
                    if (f.id !== e[2])
                        return d.find(a);
                    this.length = 1, this[0] = f
                }
                return this.context = Y, this.selector = a, this
            }
            return a.nodeType ? (this.context = this[0] = a, this.length = 1, this) : kb.isFunction(a) ? d.ready(a) : (a.selector !== b && (this.selector = a.selector, this.context = a.context), kb.makeArray(a, this))
        }, selector: "", length: 0, toArray: function() {
            return fb.call(this)
        }, get: function(a) {
            return null == a ? this.toArray() : 0 > a ? this[this.length + a] : this[a]
        }, pushStack: function(a) {
            var b = kb.merge(this.constructor(), a);
            return b.prevObject = this, b.context = this.context, b
        }, each: function(a, b) {
            return kb.each(this, a, b)
        }, ready: function(a) {
            return kb.ready.promise().done(a), this
        }, slice: function() {
            return this.pushStack(fb.apply(this, arguments))
        }, first: function() {
            return this.eq(0)
        }, last: function() {
            return this.eq(-1)
        }, eq: function(a) {
            var b = this.length, c = +a + (0 > a ? b : 0);
            return this.pushStack(c >= 0 && b > c ? [this[c]] : [])
        }, map: function(a) {
            return this.pushStack(kb.map(this, function(b, c) {
                return a.call(b, c, b)
            }))
        }, end: function() {
            return this.prevObject || this.constructor(null)
        }, push: eb, sort: [].sort, splice: [].splice}, kb.fn.init.prototype = kb.fn, kb.extend = kb.fn.extend = function() {
        var a, c, d, e, f, g, h = arguments[0] || {}, i = 1, j = arguments.length, k = !1;
        for ("boolean" == typeof h && (k = h, h = arguments[1] || {}, i = 2), "object" == typeof h || kb.isFunction(h) || (h = {}), j === i && (h = this, --i); j > i; i++)
            if (null != (f = arguments[i]))
                for (e in f)
                    a = h[e], d = f[e], h !== d && (k && d && (kb.isPlainObject(d) || (c = kb.isArray(d))) ? (c ? (c = !1, g = a && kb.isArray(a) ? a : []) : g = a && kb.isPlainObject(a) ? a : {}, h[e] = kb.extend(k, g, d)) : d !== b && (h[e] = d));
        return h
    }, kb.extend({expando: "jQuery" + (cb + Math.random()).replace(/\D/g, ""), noConflict: function(b) {
            return a.$ === kb && (a.$ = _), b && a.jQuery === kb && (a.jQuery = $), kb
        }, isReady: !1, readyWait: 1, holdReady: function(a) {
            a ? kb.readyWait++ : kb.ready(!0)
        }, ready: function(a) {
            if (a === !0 ? !--kb.readyWait : !kb.isReady) {
                if (!Y.body)
                    return setTimeout(kb.ready);
                kb.isReady = !0, a !== !0 && --kb.readyWait > 0 || (U.resolveWith(Y, [kb]), kb.fn.trigger && kb(Y).trigger("ready").off("ready"))
            }
        }, isFunction: function(a) {
            return"function" === kb.type(a)
        }, isArray: Array.isArray || function(a) {
            return"array" === kb.type(a)
        }, isWindow: function(a) {
            return null != a && a == a.window
        }, isNumeric: function(a) {
            return!isNaN(parseFloat(a)) && isFinite(a)
        }, type: function(a) {
            return null == a ? String(a) : "object" == typeof a || "function" == typeof a ? ab[hb.call(a)] || "object" : typeof a
        }, isPlainObject: function(a) {
            var c;
            if (!a || "object" !== kb.type(a) || a.nodeType || kb.isWindow(a))
                return!1;
            try {
                if (a.constructor && !ib.call(a, "constructor") && !ib.call(a.constructor.prototype, "isPrototypeOf"))
                    return!1
            } catch (d) {
                return!1
            }
            if (kb.support.ownLast)
                for (c in a)
                    return ib.call(a, c);
            for (c in a)
                ;
            return c === b || ib.call(a, c)
        }, isEmptyObject: function(a) {
            var b;
            for (b in a)
                return!1;
            return!0
        }, error: function(a) {
            throw new Error(a)
        }, parseHTML: function(a, b, c) {
            if (!a || "string" != typeof a)
                return null;
            "boolean" == typeof b && (c = b, b = !1), b = b || Y;
            var d = pb.exec(a), e = !c && [];
            return d ? [b.createElement(d[1])] : (d = kb.buildFragment([a], b, e), e && kb(e).remove(), kb.merge([], d.childNodes))
        }, parseJSON: function(b) {
            return a.JSON && a.JSON.parse ? a.JSON.parse(b) : null === b ? b : "string" == typeof b && (b = kb.trim(b), b && qb.test(b.replace(sb, "@").replace(tb, "]").replace(rb, ""))) ? new Function("return " + b)() : void kb.error("Invalid JSON: " + b)
        }, parseXML: function(c) {
            var d, e;
            if (!c || "string" != typeof c)
                return null;
            try {
                a.DOMParser ? (e = new DOMParser, d = e.parseFromString(c, "text/xml")) : (d = new ActiveXObject("Microsoft.XMLDOM"), d.async = "false", d.loadXML(c))
            } catch (f) {
                d = b
            }
            return d && d.documentElement && !d.getElementsByTagName("parsererror").length || kb.error("Invalid XML: " + c), d
        }, noop: function() {
        }, globalEval: function(b) {
            b && kb.trim(b) && (a.execScript || function(b) {
                a.eval.call(a, b)
            })(b)
        }, camelCase: function(a) {
            return a.replace(ub, "ms-").replace(vb, wb)
        }, nodeName: function(a, b) {
            return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase()
        }, each: function(a, b, d) {
            var e, f = 0, g = a.length, h = c(a);
            if (d) {
                if (h)
                    for (; g > f && (e = b.apply(a[f], d), e !== !1); f++)
                        ;
                else
                    for (f in a)
                        if (e = b.apply(a[f], d), e === !1)
                            break
            } else if (h)
                for (; g > f && (e = b.call(a[f], f, a[f]), e !== !1); f++)
                    ;
            else
                for (f in a)
                    if (e = b.call(a[f], f, a[f]), e === !1)
                        break;
            return a
        }, trim: jb && !jb.call("﻿ ") ? function(a) {
            return null == a ? "" : jb.call(a)
        } : function(a) {
            return null == a ? "" : (a + "").replace(nb, "")
        }, makeArray: function(a, b) {
            var d = b || [];
            return null != a && (c(Object(a)) ? kb.merge(d, "string" == typeof a ? [a] : a) : eb.call(d, a)), d
        }, inArray: function(a, b, c) {
            var d;
            if (b) {
                if (gb)
                    return gb.call(b, a, c);
                for (d = b.length, c = c?0 > c?Math.max(0, d + c):c:0; d > c; c++)
                    if (c in b && b[c] === a)
                        return c
            }
            return-1
        }, merge: function(a, c) {
            var d = c.length, e = a.length, f = 0;
            if ("number" == typeof d)
                for (; d > f; f++)
                    a[e++] = c[f];
            else
                for (; c[f] !== b; )
                    a[e++] = c[f++];
            return a.length = e, a
        }, grep: function(a, b, c) {
            var d, e = [], f = 0, g = a.length;
            for (c = !!c; g > f; f++)
                d = !!b(a[f], f), c !== d && e.push(a[f]);
            return e
        }, map: function(a, b, d) {
            var e, f = 0, g = a.length, h = c(a), i = [];
            if (h)
                for (; g > f; f++)
                    e = b(a[f], f, d), null != e && (i[i.length] = e);
            else
                for (f in a)
                    e = b(a[f], f, d), null != e && (i[i.length] = e);
            return db.apply([], i)
        }, guid: 1, proxy: function(a, c) {
            var d, e, f;
            return"string" == typeof c && (f = a[c], c = a, a = f), kb.isFunction(a) ? (d = fb.call(arguments, 2), e = function() {
                return a.apply(c || this, d.concat(fb.call(arguments)))
            }, e.guid = a.guid = a.guid || kb.guid++, e) : b
        }, access: function(a, c, d, e, f, g, h) {
            var i = 0, j = a.length, k = null == d;
            if ("object" === kb.type(d)) {
                f = !0;
                for (i in d)
                    kb.access(a, c, i, d[i], !0, g, h)
            } else if (e !== b && (f = !0, kb.isFunction(e) || (h = !0), k && (h ? (c.call(a, e), c = null) : (k = c, c = function(a, b, c) {
                return k.call(kb(a), c)
            })), c))
                for (; j > i; i++)
                    c(a[i], d, h ? e : e.call(a[i], i, c(a[i], d)));
            return f ? a : k ? c.call(a) : j ? c(a[0], d) : g
        }, now: function() {
            return(new Date).getTime()
        }, swap: function(a, b, c, d) {
            var e, f, g = {};
            for (f in b)
                g[f] = a.style[f], a.style[f] = b[f];
            e = c.apply(a, d || []);
            for (f in b)
                a.style[f] = g[f];
            return e
        }}), kb.ready.promise = function(b) {
        if (!U)
            if (U = kb.Deferred(), "complete" === Y.readyState)
                setTimeout(kb.ready);
            else if (Y.addEventListener)
                Y.addEventListener("DOMContentLoaded", xb, !1), a.addEventListener("load", xb, !1);
            else {
                Y.attachEvent("onreadystatechange", xb), a.attachEvent("onload", xb);
                var c = !1;
                try {
                    c = null == a.frameElement && Y.documentElement
                } catch (d) {
                }
                c && c.doScroll && !function e() {
                    if (!kb.isReady) {
                        try {
                            c.doScroll("left")
                        } catch (a) {
                            return setTimeout(e, 50)
                        }
                        yb(), kb.ready()
                    }
                }()
            }
        return U.promise(b)
    }, kb.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(a, b) {
        ab["[object " + b + "]"] = b.toLowerCase()
    }), V = kb(Y), function(a, b) {
        function c(a, b, c, d) {
            var e, f, g, h, i, j, k, l, o, p;
            if ((b ? b.ownerDocument || b : O) !== G && F(b), b = b || G, c = c || [], !a || "string" != typeof a)
                return c;
            if (1 !== (h = b.nodeType) && 9 !== h)
                return[];
            if (I && !d) {
                if (e = tb.exec(a))
                    if (g = e[1]) {
                        if (9 === h) {
                            if (f = b.getElementById(g), !f || !f.parentNode)
                                return c;
                            if (f.id === g)
                                return c.push(f), c
                        } else if (b.ownerDocument && (f = b.ownerDocument.getElementById(g)) && M(b, f) && f.id === g)
                            return c.push(f), c
                    } else {
                        if (e[2])
                            return ab.apply(c, b.getElementsByTagName(a)), c;
                        if ((g = e[3]) && x.getElementsByClassName && b.getElementsByClassName)
                            return ab.apply(c, b.getElementsByClassName(g)), c
                    }
                if (x.qsa && (!J || !J.test(a))) {
                    if (l = k = N, o = b, p = 9 === h && a, 1 === h && "object" !== b.nodeName.toLowerCase()) {
                        for (j = m(a), (k = b.getAttribute("id"))?l = k.replace(wb, "\\$&"):b.setAttribute("id", l), l = "[id='" + l + "'] ", i = j.length; i--; )
                            j[i] = l + n(j[i]);
                        o = nb.test(a) && b.parentNode || b, p = j.join(",")
                    }
                    if (p)
                        try {
                            return ab.apply(c, o.querySelectorAll(p)), c
                        } catch (q) {
                        } finally {
                            k || b.removeAttribute("id")
                        }
                }
            }
            return v(a.replace(jb, "$1"), b, c, d)
        }
        function d() {
            function a(c, d) {
                return b.push(c += " ") > z.cacheLength && delete a[b.shift()], a[c] = d
            }
            var b = [];
            return a
        }
        function e(a) {
            return a[N] = !0, a
        }
        function f(a) {
            var b = G.createElement("div");
            try {
                return!!a(b)
            } catch (c) {
                return!1
            } finally {
                b.parentNode && b.parentNode.removeChild(b), b = null
            }
        }
        function g(a, b) {
            for (var c = a.split("|"), d = a.length; d--; )
                z.attrHandle[c[d]] = b
        }
        function h(a, b) {
            var c = b && a, d = c && 1 === a.nodeType && 1 === b.nodeType && (~b.sourceIndex || X) - (~a.sourceIndex || X);
            if (d)
                return d;
            if (c)
                for (; c = c.nextSibling; )
                    if (c === b)
                        return-1;
            return a ? 1 : -1
        }
        function i(a) {
            return function(b) {
                var c = b.nodeName.toLowerCase();
                return"input" === c && b.type === a
            }
        }
        function j(a) {
            return function(b) {
                var c = b.nodeName.toLowerCase();
                return("input" === c || "button" === c) && b.type === a
            }
        }
        function k(a) {
            return e(function(b) {
                return b = +b, e(function(c, d) {
                    for (var e, f = a([], c.length, b), g = f.length; g--; )
                        c[e = f[g]] && (c[e] = !(d[e] = c[e]))
                })
            })
        }
        function l() {
        }
        function m(a, b) {
            var d, e, f, g, h, i, j, k = S[a + " "];
            if (k)
                return b ? 0 : k.slice(0);
            for (h = a, i = [], j = z.preFilter; h; ) {
                (!d || (e = lb.exec(h))) && (e && (h = h.slice(e[0].length) || h), i.push(f = [])), d = !1, (e = mb.exec(h)) && (d = e.shift(), f.push({value: d, type: e[0].replace(jb, " ")}), h = h.slice(d.length));
                for (g in z.filter)
                    !(e = rb[g].exec(h)) || j[g] && !(e = j[g](e)) || (d = e.shift(), f.push({value: d, type: g, matches: e}), h = h.slice(d.length));
                if (!d)
                    break
            }
            return b ? h.length : h ? c.error(a) : S(a, i).slice(0)
        }
        function n(a) {
            for (var b = 0, c = a.length, d = ""; c > b; b++)
                d += a[b].value;
            return d
        }
        function o(a, b, c) {
            var d = b.dir, e = c && "parentNode" === d, f = Q++;
            return b.first ? function(b, c, f) {
                for (; b = b[d]; )
                    if (1 === b.nodeType || e)
                        return a(b, c, f)
            } : function(b, c, g) {
                var h, i, j, k = P + " " + f;
                if (g) {
                    for (; b = b[d]; )
                        if ((1 === b.nodeType || e) && a(b, c, g))
                            return!0
                } else
                    for (; b = b[d]; )
                        if (1 === b.nodeType || e)
                            if (j = b[N] || (b[N] = {}), (i = j[d]) && i[0] === k) {
                                if ((h = i[1]) === !0 || h === y)
                                    return h === !0
                            } else if (i = j[d] = [k], i[1] = a(b, c, g) || y, i[1] === !0)
                                return!0
            }
        }
        function p(a) {
            return a.length > 1 ? function(b, c, d) {
                for (var e = a.length; e--; )
                    if (!a[e](b, c, d))
                        return!1;
                return!0
            } : a[0]
        }
        function q(a, b, c, d, e) {
            for (var f, g = [], h = 0, i = a.length, j = null != b; i > h; h++)
                (f = a[h]) && (!c || c(f, d, e)) && (g.push(f), j && b.push(h));
            return g
        }
        function r(a, b, c, d, f, g) {
            return d && !d[N] && (d = r(d)), f && !f[N] && (f = r(f, g)), e(function(e, g, h, i) {
                var j, k, l, m = [], n = [], o = g.length, p = e || u(b || "*", h.nodeType ? [h] : h, []), r = !a || !e && b ? p : q(p, m, a, h, i), s = c ? f || (e ? a : o || d) ? [] : g : r;
                if (c && c(r, s, h, i), d)
                    for (j = q(s, n), d(j, [], h, i), k = j.length; k--; )
                        (l = j[k]) && (s[n[k]] = !(r[n[k]] = l));
                if (e) {
                    if (f || a) {
                        if (f) {
                            for (j = [], k = s.length; k--; )
                                (l = s[k]) && j.push(r[k] = l);
                            f(null, s = [], j, i)
                        }
                        for (k = s.length; k--; )
                            (l = s[k]) && (j = f ? cb.call(e, l) : m[k]) > -1 && (e[j] = !(g[j] = l))
                    }
                } else
                    s = q(s === g ? s.splice(o, s.length) : s), f ? f(null, g, s, i) : ab.apply(g, s)
            })
        }
        function s(a) {
            for (var b, c, d, e = a.length, f = z.relative[a[0].type], g = f || z.relative[" "], h = f ? 1 : 0, i = o(function(a) {
                return a === b
            }, g, !0), j = o(function(a) {
                return cb.call(b, a) > -1
            }, g, !0), k = [function(a, c, d) {
                    return!f && (d || c !== D) || ((b = c).nodeType ? i(a, c, d) : j(a, c, d))
                }]; e > h; h++)
                if (c = z.relative[a[h].type])
                    k = [o(p(k), c)];
                else {
                    if (c = z.filter[a[h].type].apply(null, a[h].matches), c[N]) {
                        for (d = ++h; e > d && !z.relative[a[d].type]; d++)
                            ;
                        return r(h > 1 && p(k), h > 1 && n(a.slice(0, h - 1).concat({value: " " === a[h - 2].type ? "*" : ""})).replace(jb, "$1"), c, d > h && s(a.slice(h, d)), e > d && s(a = a.slice(d)), e > d && n(a))
                    }
                    k.push(c)
                }
            return p(k)
        }
        function t(a, b) {
            var d = 0, f = b.length > 0, g = a.length > 0, h = function(e, h, i, j, k) {
                var l, m, n, o = [], p = 0, r = "0", s = e && [], t = null != k, u = D, v = e || g && z.find.TAG("*", k && h.parentNode || h), w = P += null == u ? 1 : Math.random() || .1;
                for (t && (D = h !== G && h, y = d); null != (l = v[r]); r++) {
                    if (g && l) {
                        for (m = 0; n = a[m++]; )
                            if (n(l, h, i)) {
                                j.push(l);
                                break
                            }
                        t && (P = w, y = ++d)
                    }
                    f && ((l = !n && l) && p--, e && s.push(l))
                }
                if (p += r, f && r !== p) {
                    for (m = 0; n = b[m++]; )
                        n(s, o, h, i);
                    if (e) {
                        if (p > 0)
                            for (; r--; )
                                s[r] || o[r] || (o[r] = $.call(j));
                        o = q(o)
                    }
                    ab.apply(j, o), t && !e && o.length > 0 && p + b.length > 1 && c.uniqueSort(j)
                }
                return t && (P = w, D = u), s
            };
            return f ? e(h) : h
        }
        function u(a, b, d) {
            for (var e = 0, f = b.length; f > e; e++)
                c(a, b[e], d);
            return d
        }
        function v(a, b, c, d) {
            var e, f, g, h, i, j = m(a);
            if (!d && 1 === j.length) {
                if (f = j[0] = j[0].slice(0), f.length > 2 && "ID" === (g = f[0]).type && x.getById && 9 === b.nodeType && I && z.relative[f[1].type]) {
                    if (b = (z.find.ID(g.matches[0].replace(xb, yb), b) || [])[0], !b)
                        return c;
                    a = a.slice(f.shift().value.length)
                }
                for (e = rb.needsContext.test(a)?0:f.length; e-- && (g = f[e], !z.relative[h = g.type]); )
                    if ((i = z.find[h]) && (d = i(g.matches[0].replace(xb, yb), nb.test(f[0].type) && b.parentNode || b))) {
                        if (f.splice(e, 1), a = d.length && n(f), !a)
                            return ab.apply(c, d), c;
                        break
                    }
            }
            return C(a, j)(d, b, !I, c, nb.test(a)), c
        }
        var w, x, y, z, A, B, C, D, E, F, G, H, I, J, K, L, M, N = "sizzle" + -new Date, O = a.document, P = 0, Q = 0, R = d(), S = d(), T = d(), U = !1, V = function(a, b) {
            return a === b ? (U = !0, 0) : 0
        }, W = typeof b, X = 1 << 31, Y = {}.hasOwnProperty, Z = [], $ = Z.pop, _ = Z.push, ab = Z.push, bb = Z.slice, cb = Z.indexOf || function(a) {
            for (var b = 0, c = this.length; c > b; b++)
                if (this[b] === a)
                    return b;
            return-1
        }, db = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped", eb = "[\\x20\\t\\r\\n\\f]", fb = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+", gb = fb.replace("w", "w#"), hb = "\\[" + eb + "*(" + fb + ")" + eb + "*(?:([*^$|!~]?=)" + eb + "*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|(" + gb + ")|)|)" + eb + "*\\]", ib = ":(" + fb + ")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|" + hb.replace(3, 8) + ")*)|.*)\\)|)", jb = new RegExp("^" + eb + "+|((?:^|[^\\\\])(?:\\\\.)*)" + eb + "+$", "g"), lb = new RegExp("^" + eb + "*," + eb + "*"), mb = new RegExp("^" + eb + "*([>+~]|" + eb + ")" + eb + "*"), nb = new RegExp(eb + "*[+~]"), ob = new RegExp("=" + eb + "*([^\\]'\"]*)" + eb + "*\\]", "g"), pb = new RegExp(ib), qb = new RegExp("^" + gb + "$"), rb = {ID: new RegExp("^#(" + fb + ")"), CLASS: new RegExp("^\\.(" + fb + ")"), TAG: new RegExp("^(" + fb.replace("w", "w*") + ")"), ATTR: new RegExp("^" + hb), PSEUDO: new RegExp("^" + ib), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + eb + "*(even|odd|(([+-]|)(\\d*)n|)" + eb + "*(?:([+-]|)" + eb + "*(\\d+)|))" + eb + "*\\)|)", "i"), bool: new RegExp("^(?:" + db + ")$", "i"), needsContext: new RegExp("^" + eb + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + eb + "*((?:-\\d)?\\d*)" + eb + "*\\)|)(?=[^-]|$)", "i")}, sb = /^[^{]+\{\s*\[native \w/, tb = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, ub = /^(?:input|select|textarea|button)$/i, vb = /^h\d$/i, wb = /'|\\/g, xb = new RegExp("\\\\([\\da-f]{1,6}" + eb + "?|(" + eb + ")|.)", "ig"), yb = function(a, b, c) {
            var d = "0x" + b - 65536;
            return d !== d || c ? b : 0 > d ? String.fromCharCode(d + 65536) : String.fromCharCode(d >> 10 | 55296, 1023 & d | 56320)
        };
        try {
            ab.apply(Z = bb.call(O.childNodes), O.childNodes), Z[O.childNodes.length].nodeType
        } catch (zb) {
            ab = {apply: Z.length ? function(a, b) {
                    _.apply(a, bb.call(b))
                } : function(a, b) {
                    for (var c = a.length, d = 0; a[c++] = b[d++]; )
                        ;
                    a.length = c - 1
                }}
        }
        B = c.isXML = function(a) {
            var b = a && (a.ownerDocument || a).documentElement;
            return b ? "HTML" !== b.nodeName : !1
        }, x = c.support = {}, F = c.setDocument = function(a) {
            var b = a ? a.ownerDocument || a : O, c = b.defaultView;
            return b !== G && 9 === b.nodeType && b.documentElement ? (G = b, H = b.documentElement, I = !B(b), c && c.attachEvent && c !== c.top && c.attachEvent("onbeforeunload", function() {
                F()
            }), x.attributes = f(function(a) {
                return a.className = "i", !a.getAttribute("className")
            }), x.getElementsByTagName = f(function(a) {
                return a.appendChild(b.createComment("")), !a.getElementsByTagName("*").length
            }), x.getElementsByClassName = f(function(a) {
                return a.innerHTML = "<div class='a'></div><div class='a i'></div>", a.firstChild.className = "i", 2 === a.getElementsByClassName("i").length
            }), x.getById = f(function(a) {
                return H.appendChild(a).id = N, !b.getElementsByName || !b.getElementsByName(N).length
            }), x.getById ? (z.find.ID = function(a, b) {
                if (typeof b.getElementById !== W && I) {
                    var c = b.getElementById(a);
                    return c && c.parentNode ? [c] : []
                }
            }, z.filter.ID = function(a) {
                var b = a.replace(xb, yb);
                return function(a) {
                    return a.getAttribute("id") === b
                }
            }) : (delete z.find.ID, z.filter.ID = function(a) {
                var b = a.replace(xb, yb);
                return function(a) {
                    var c = typeof a.getAttributeNode !== W && a.getAttributeNode("id");
                    return c && c.value === b
                }
            }), z.find.TAG = x.getElementsByTagName ? function(a, b) {
                return typeof b.getElementsByTagName !== W ? b.getElementsByTagName(a) : void 0
            } : function(a, b) {
                var c, d = [], e = 0, f = b.getElementsByTagName(a);
                if ("*" === a) {
                    for (; c = f[e++]; )
                        1 === c.nodeType && d.push(c);
                    return d
                }
                return f
            }, z.find.CLASS = x.getElementsByClassName && function(a, b) {
                return typeof b.getElementsByClassName !== W && I ? b.getElementsByClassName(a) : void 0
            }, K = [], J = [], (x.qsa = sb.test(b.querySelectorAll)) && (f(function(a) {
                a.innerHTML = "<select><option selected=''></option></select>", a.querySelectorAll("[selected]").length || J.push("\\[" + eb + "*(?:value|" + db + ")"), a.querySelectorAll(":checked").length || J.push(":checked")
            }), f(function(a) {
                var c = b.createElement("input");
                c.setAttribute("type", "hidden"), a.appendChild(c).setAttribute("t", ""), a.querySelectorAll("[t^='']").length && J.push("[*^$]=" + eb + "*(?:''|\"\")"), a.querySelectorAll(":enabled").length || J.push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), J.push(",.*:")
            })), (x.matchesSelector = sb.test(L = H.webkitMatchesSelector || H.mozMatchesSelector || H.oMatchesSelector || H.msMatchesSelector)) && f(function(a) {
                x.disconnectedMatch = L.call(a, "div"), L.call(a, "[s!='']:x"), K.push("!=", ib)
            }), J = J.length && new RegExp(J.join("|")), K = K.length && new RegExp(K.join("|")), M = sb.test(H.contains) || H.compareDocumentPosition ? function(a, b) {
                var c = 9 === a.nodeType ? a.documentElement : a, d = b && b.parentNode;
                return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)))
            } : function(a, b) {
                if (b)
                    for (; b = b.parentNode; )
                        if (b === a)
                            return!0;
                return!1
            }, V = H.compareDocumentPosition ? function(a, c) {
                if (a === c)
                    return U = !0, 0;
                var d = c.compareDocumentPosition && a.compareDocumentPosition && a.compareDocumentPosition(c);
                return d ? 1 & d || !x.sortDetached && c.compareDocumentPosition(a) === d ? a === b || M(O, a) ? -1 : c === b || M(O, c) ? 1 : E ? cb.call(E, a) - cb.call(E, c) : 0 : 4 & d ? -1 : 1 : a.compareDocumentPosition ? -1 : 1
            } : function(a, c) {
                var d, e = 0, f = a.parentNode, g = c.parentNode, i = [a], j = [c];
                if (a === c)
                    return U = !0, 0;
                if (!f || !g)
                    return a === b ? -1 : c === b ? 1 : f ? -1 : g ? 1 : E ? cb.call(E, a) - cb.call(E, c) : 0;
                if (f === g)
                    return h(a, c);
                for (d = a; d = d.parentNode; )
                    i.unshift(d);
                for (d = c; d = d.parentNode; )
                    j.unshift(d);
                for (; i[e] === j[e]; )
                    e++;
                return e ? h(i[e], j[e]) : i[e] === O ? -1 : j[e] === O ? 1 : 0
            }, b) : G
        }, c.matches = function(a, b) {
            return c(a, null, null, b)
        }, c.matchesSelector = function(a, b) {
            if ((a.ownerDocument || a) !== G && F(a), b = b.replace(ob, "='$1']"), !(!x.matchesSelector || !I || K && K.test(b) || J && J.test(b)))
                try {
                    var d = L.call(a, b);
                    if (d || x.disconnectedMatch || a.document && 11 !== a.document.nodeType)
                        return d
                } catch (e) {
                }
            return c(b, G, null, [a]).length > 0
        }, c.contains = function(a, b) {
            return(a.ownerDocument || a) !== G && F(a), M(a, b)
        }, c.attr = function(a, c) {
            (a.ownerDocument || a) !== G && F(a);
            var d = z.attrHandle[c.toLowerCase()], e = d && Y.call(z.attrHandle, c.toLowerCase()) ? d(a, c, !I) : b;
            return e === b ? x.attributes || !I ? a.getAttribute(c) : (e = a.getAttributeNode(c)) && e.specified ? e.value : null : e
        }, c.error = function(a) {
            throw new Error("Syntax error, unrecognized expression: " + a)
        }, c.uniqueSort = function(a) {
            var b, c = [], d = 0, e = 0;
            if (U = !x.detectDuplicates, E = !x.sortStable && a.slice(0), a.sort(V), U) {
                for (; b = a[e++]; )
                    b === a[e] && (d = c.push(e));
                for (; d--; )
                    a.splice(c[d], 1)
            }
            return a
        }, A = c.getText = function(a) {
            var b, c = "", d = 0, e = a.nodeType;
            if (e) {
                if (1 === e || 9 === e || 11 === e) {
                    if ("string" == typeof a.textContent)
                        return a.textContent;
                    for (a = a.firstChild; a; a = a.nextSibling)
                        c += A(a)
                } else if (3 === e || 4 === e)
                    return a.nodeValue
            } else
                for (; b = a[d]; d++)
                    c += A(b);
            return c
        }, z = c.selectors = {cacheLength: 50, createPseudo: e, match: rb, attrHandle: {}, find: {}, relative: {">": {dir: "parentNode", first: !0}, " ": {dir: "parentNode"}, "+": {dir: "previousSibling", first: !0}, "~": {dir: "previousSibling"}}, preFilter: {ATTR: function(a) {
                    return a[1] = a[1].replace(xb, yb), a[3] = (a[4] || a[5] || "").replace(xb, yb), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4)
                }, CHILD: function(a) {
                    return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || c.error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) : a[3] && c.error(a[0]), a
                }, PSEUDO: function(a) {
                    var c, d = !a[5] && a[2];
                    return rb.CHILD.test(a[0]) ? null : (a[3] && a[4] !== b ? a[2] = a[4] : d && pb.test(d) && (c = m(d, !0)) && (c = d.indexOf(")", d.length - c) - d.length) && (a[0] = a[0].slice(0, c), a[2] = d.slice(0, c)), a.slice(0, 3))
                }}, filter: {TAG: function(a) {
                    var b = a.replace(xb, yb).toLowerCase();
                    return"*" === a ? function() {
                        return!0
                    } : function(a) {
                        return a.nodeName && a.nodeName.toLowerCase() === b
                    }
                }, CLASS: function(a) {
                    var b = R[a + " "];
                    return b || (b = new RegExp("(^|" + eb + ")" + a + "(" + eb + "|$)")) && R(a, function(a) {
                        return b.test("string" == typeof a.className && a.className || typeof a.getAttribute !== W && a.getAttribute("class") || "")
                    })
                }, ATTR: function(a, b, d) {
                    return function(e) {
                        var f = c.attr(e, a);
                        return null == f ? "!=" === b : b ? (f += "", "=" === b ? f === d : "!=" === b ? f !== d : "^=" === b ? d && 0 === f.indexOf(d) : "*=" === b ? d && f.indexOf(d) > -1 : "$=" === b ? d && f.slice(-d.length) === d : "~=" === b ? (" " + f + " ").indexOf(d) > -1 : "|=" === b ? f === d || f.slice(0, d.length + 1) === d + "-" : !1) : !0
                    }
                }, CHILD: function(a, b, c, d, e) {
                    var f = "nth" !== a.slice(0, 3), g = "last" !== a.slice(-4), h = "of-type" === b;
                    return 1 === d && 0 === e ? function(a) {
                        return!!a.parentNode
                    } : function(b, c, i) {
                        var j, k, l, m, n, o, p = f !== g ? "nextSibling" : "previousSibling", q = b.parentNode, r = h && b.nodeName.toLowerCase(), s = !i && !h;
                        if (q) {
                            if (f) {
                                for (; p; ) {
                                    for (l = b; l = l[p]; )
                                        if (h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType)
                                            return!1;
                                    o = p = "only" === a && !o && "nextSibling"
                                }
                                return!0
                            }
                            if (o = [g ? q.firstChild : q.lastChild], g && s) {
                                for (k = q[N] || (q[N] = {}), j = k[a] || [], n = j[0] === P && j[1], m = j[0] === P && j[2], l = n && q.childNodes[n]; l = ++n && l && l[p] || (m = n = 0) || o.pop(); )
                                    if (1 === l.nodeType && ++m && l === b) {
                                        k[a] = [P, n, m];
                                        break
                                    }
                            } else if (s && (j = (b[N] || (b[N] = {}))[a]) && j[0] === P)
                                m = j[1];
                            else
                                for (; (l = ++n && l && l[p] || (m = n = 0) || o.pop()) && ((h?l.nodeName.toLowerCase() !== r:1 !== l.nodeType) || !++m || (s && ((l[N] || (l[N] = {}))[a] = [P, m]), l !== b)); )
                                    ;
                            return m -= e, m === d || m % d === 0 && m / d >= 0
                        }
                    }
                }, PSEUDO: function(a, b) {
                    var d, f = z.pseudos[a] || z.setFilters[a.toLowerCase()] || c.error("unsupported pseudo: " + a);
                    return f[N] ? f(b) : f.length > 1 ? (d = [a, a, "", b], z.setFilters.hasOwnProperty(a.toLowerCase()) ? e(function(a, c) {
                        for (var d, e = f(a, b), g = e.length; g--; )
                            d = cb.call(a, e[g]), a[d] = !(c[d] = e[g])
                    }) : function(a) {
                        return f(a, 0, d)
                    }) : f
                }}, pseudos: {not: e(function(a) {
                    var b = [], c = [], d = C(a.replace(jb, "$1"));
                    return d[N] ? e(function(a, b, c, e) {
                        for (var f, g = d(a, null, e, []), h = a.length; h--; )
                            (f = g[h]) && (a[h] = !(b[h] = f))
                    }) : function(a, e, f) {
                        return b[0] = a, d(b, null, f, c), !c.pop()
                    }
                }), has: e(function(a) {
                    return function(b) {
                        return c(a, b).length > 0
                    }
                }), contains: e(function(a) {
                    return function(b) {
                        return(b.textContent || b.innerText || A(b)).indexOf(a) > -1
                    }
                }), lang: e(function(a) {
                    return qb.test(a || "") || c.error("unsupported lang: " + a), a = a.replace(xb, yb).toLowerCase(), function(b) {
                        var c;
                        do
                            if (c = I ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang"))
                                return c = c.toLowerCase(), c === a || 0 === c.indexOf(a + "-");
                        while ((b = b.parentNode) && 1 === b.nodeType);
                        return!1
                    }
                }), target: function(b) {
                    var c = a.location && a.location.hash;
                    return c && c.slice(1) === b.id
                }, root: function(a) {
                    return a === H
                }, focus: function(a) {
                    return a === G.activeElement && (!G.hasFocus || G.hasFocus()) && !!(a.type || a.href || ~a.tabIndex)
                }, enabled: function(a) {
                    return a.disabled === !1
                }, disabled: function(a) {
                    return a.disabled === !0
                }, checked: function(a) {
                    var b = a.nodeName.toLowerCase();
                    return"input" === b && !!a.checked || "option" === b && !!a.selected
                }, selected: function(a) {
                    return a.parentNode && a.parentNode.selectedIndex, a.selected === !0
                }, empty: function(a) {
                    for (a = a.firstChild; a; a = a.nextSibling)
                        if (a.nodeName > "@" || 3 === a.nodeType || 4 === a.nodeType)
                            return!1;
                    return!0
                }, parent: function(a) {
                    return!z.pseudos.empty(a)
                }, header: function(a) {
                    return vb.test(a.nodeName)
                }, input: function(a) {
                    return ub.test(a.nodeName)
                }, button: function(a) {
                    var b = a.nodeName.toLowerCase();
                    return"input" === b && "button" === a.type || "button" === b
                }, text: function(a) {
                    var b;
                    return"input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || b.toLowerCase() === a.type)
                }, first: k(function() {
                    return[0]
                }), last: k(function(a, b) {
                    return[b - 1]
                }), eq: k(function(a, b, c) {
                    return[0 > c ? c + b : c]
                }), even: k(function(a, b) {
                    for (var c = 0; b > c; c += 2)
                        a.push(c);
                    return a
                }), odd: k(function(a, b) {
                    for (var c = 1; b > c; c += 2)
                        a.push(c);
                    return a
                }), lt: k(function(a, b, c) {
                    for (var d = 0 > c ? c + b : c; --d >= 0; )
                        a.push(d);
                    return a
                }), gt: k(function(a, b, c) {
                    for (var d = 0 > c ? c + b : c; ++d < b; )
                        a.push(d);
                    return a
                })}}, z.pseudos.nth = z.pseudos.eq;
        for (w in{radio:!0, checkbox:!0, file:!0, password:!0, image:!0})
            z.pseudos[w] = i(w);
        for (w in{submit:!0, reset:!0})
            z.pseudos[w] = j(w);
        l.prototype = z.filters = z.pseudos, z.setFilters = new l, C = c.compile = function(a, b) {
            var c, d = [], e = [], f = T[a + " "];
            if (!f) {
                for (b || (b = m(a)), c = b.length; c--; )
                    f = s(b[c]), f[N] ? d.push(f) : e.push(f);
                f = T(a, t(e, d))
            }
            return f
        }, x.sortStable = N.split("").sort(V).join("") === N, x.detectDuplicates = U, F(), x.sortDetached = f(function(a) {
            return 1 & a.compareDocumentPosition(G.createElement("div"))
        }), f(function(a) {
            return a.innerHTML = "<a href='#'></a>", "#" === a.firstChild.getAttribute("href")
        }) || g("type|href|height|width", function(a, b, c) {
            return c ? void 0 : a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2)
        }), x.attributes && f(function(a) {
            return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value")
        }) || g("value", function(a, b, c) {
            return c || "input" !== a.nodeName.toLowerCase() ? void 0 : a.defaultValue
        }), f(function(a) {
            return null == a.getAttribute("disabled")
        }) || g(db, function(a, b, c) {
            var d;
            return c ? void 0 : (d = a.getAttributeNode(b)) && d.specified ? d.value : a[b] === !0 ? b.toLowerCase() : null
        }), kb.find = c, kb.expr = c.selectors, kb.expr[":"] = kb.expr.pseudos, kb.unique = c.uniqueSort, kb.text = c.getText, kb.isXMLDoc = c.isXML, kb.contains = c.contains
    }(a);
    var zb = {};
    kb.Callbacks = function(a) {
        a = "string" == typeof a ? zb[a] || d(a) : kb.extend({}, a);
        var c, e, f, g, h, i, j = [], k = !a.once && [], l = function(b) {
            for (e = a.memory && b, f = !0, h = i || 0, i = 0, g = j.length, c = !0; j && g > h; h++)
                if (j[h].apply(b[0], b[1]) === !1 && a.stopOnFalse) {
                    e = !1;
                    break
                }
            c = !1, j && (k ? k.length && l(k.shift()) : e ? j = [] : m.disable())
        }, m = {add: function() {
                if (j) {
                    var b = j.length;
                    !function d(b) {
                        kb.each(b, function(b, c) {
                            var e = kb.type(c);
                            "function" === e ? a.unique && m.has(c) || j.push(c) : c && c.length && "string" !== e && d(c)
                        })
                    }(arguments), c ? g = j.length : e && (i = b, l(e))
                }
                return this
            }, remove: function() {
                return j && kb.each(arguments, function(a, b) {
                    for (var d; (d = kb.inArray(b, j, d)) > - 1; )
                        j.splice(d, 1), c && (g >= d && g--, h >= d && h--)
                }), this
            }, has: function(a) {
                return a ? kb.inArray(a, j) > -1 : !(!j || !j.length)
            }, empty: function() {
                return j = [], g = 0, this
            }, disable: function() {
                return j = k = e = b, this
            }, disabled: function() {
                return!j
            }, lock: function() {
                return k = b, e || m.disable(), this
            }, locked: function() {
                return!k
            }, fireWith: function(a, b) {
                return!j || f && !k || (b = b || [], b = [a, b.slice ? b.slice() : b], c ? k.push(b) : l(b)), this
            }, fire: function() {
                return m.fireWith(this, arguments), this
            }, fired: function() {
                return!!f
            }};
        return m
    }, kb.extend({Deferred: function(a) {
            var b = [["resolve", "done", kb.Callbacks("once memory"), "resolved"], ["reject", "fail", kb.Callbacks("once memory"), "rejected"], ["notify", "progress", kb.Callbacks("memory")]], c = "pending", d = {state: function() {
                    return c
                }, always: function() {
                    return e.done(arguments).fail(arguments), this
                }, then: function() {
                    var a = arguments;
                    return kb.Deferred(function(c) {
                        kb.each(b, function(b, f) {
                            var g = f[0], h = kb.isFunction(a[b]) && a[b];
                            e[f[1]](function() {
                                var a = h && h.apply(this, arguments);
                                a && kb.isFunction(a.promise) ? a.promise().done(c.resolve).fail(c.reject).progress(c.notify) : c[g + "With"](this === d ? c.promise() : this, h ? [a] : arguments)
                            })
                        }), a = null
                    }).promise()
                }, promise: function(a) {
                    return null != a ? kb.extend(a, d) : d
                }}, e = {};
            return d.pipe = d.then, kb.each(b, function(a, f) {
                var g = f[2], h = f[3];
                d[f[1]] = g.add, h && g.add(function() {
                    c = h
                }, b[1 ^ a][2].disable, b[2][2].lock), e[f[0]] = function() {
                    return e[f[0] + "With"](this === e ? d : this, arguments), this
                }, e[f[0] + "With"] = g.fireWith
            }), d.promise(e), a && a.call(e, e), e
        }, when: function(a) {
            var b, c, d, e = 0, f = fb.call(arguments), g = f.length, h = 1 !== g || a && kb.isFunction(a.promise) ? g : 0, i = 1 === h ? a : kb.Deferred(), j = function(a, c, d) {
                return function(e) {
                    c[a] = this, d[a] = arguments.length > 1 ? fb.call(arguments) : e, d === b ? i.notifyWith(c, d) : --h || i.resolveWith(c, d)
                }
            };
            if (g > 1)
                for (b = new Array(g), c = new Array(g), d = new Array(g); g > e; e++)
                    f[e] && kb.isFunction(f[e].promise) ? f[e].promise().done(j(e, d, f)).fail(i.reject).progress(j(e, c, b)) : --h;
            return h || i.resolveWith(d, f), i.promise()
        }}), kb.support = function(b) {
        var c, d, e, f, g, h, i, j, k, l = Y.createElement("div");
        if (l.setAttribute("className", "t"), l.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", c = l.getElementsByTagName("*") || [], d = l.getElementsByTagName("a")[0], !d || !d.style || !c.length)
            return b;
        f = Y.createElement("select"), h = f.appendChild(Y.createElement("option")), e = l.getElementsByTagName("input")[0], d.style.cssText = "top:1px;float:left;opacity:.5", b.getSetAttribute = "t" !== l.className, b.leadingWhitespace = 3 === l.firstChild.nodeType, b.tbody = !l.getElementsByTagName("tbody").length, b.htmlSerialize = !!l.getElementsByTagName("link").length, b.style = /top/.test(d.getAttribute("style")), b.hrefNormalized = "/a" === d.getAttribute("href"), b.opacity = /^0.5/.test(d.style.opacity), b.cssFloat = !!d.style.cssFloat, b.checkOn = !!e.value, b.optSelected = h.selected, b.enctype = !!Y.createElement("form").enctype, b.html5Clone = "<:nav></:nav>" !== Y.createElement("nav").cloneNode(!0).outerHTML, b.inlineBlockNeedsLayout = !1, b.shrinkWrapBlocks = !1, b.pixelPosition = !1, b.deleteExpando = !0, b.noCloneEvent = !0, b.reliableMarginRight = !0, b.boxSizingReliable = !0, e.checked = !0, b.noCloneChecked = e.cloneNode(!0).checked, f.disabled = !0, b.optDisabled = !h.disabled;
        try {
            delete l.test
        } catch (m) {
            b.deleteExpando = !1
        }
        e = Y.createElement("input"), e.setAttribute("value", ""), b.input = "" === e.getAttribute("value"), e.value = "t", e.setAttribute("type", "radio"), b.radioValue = "t" === e.value, e.setAttribute("checked", "t"), e.setAttribute("name", "t"), g = Y.createDocumentFragment(), g.appendChild(e), b.appendChecked = e.checked, b.checkClone = g.cloneNode(!0).cloneNode(!0).lastChild.checked, l.attachEvent && (l.attachEvent("onclick", function() {
            b.noCloneEvent = !1
        }), l.cloneNode(!0).click());
        for (k in{submit:!0, change:!0, focusin:!0})
            l.setAttribute(i = "on" + k, "t"), b[k + "Bubbles"] = i in a || l.attributes[i].expando === !1;
        l.style.backgroundClip = "content-box", l.cloneNode(!0).style.backgroundClip = "", b.clearCloneStyle = "content-box" === l.style.backgroundClip;
        for (k in kb(b))
            break;
        return b.ownLast = "0" !== k, kb(function() {
            var c, d, e, f = "padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;", g = Y.getElementsByTagName("body")[0];
            g && (c = Y.createElement("div"), c.style.cssText = "border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px", g.appendChild(c).appendChild(l), l.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", e = l.getElementsByTagName("td"), e[0].style.cssText = "padding:0;margin:0;border:0;display:none", j = 0 === e[0].offsetHeight, e[0].style.display = "", e[1].style.display = "none", b.reliableHiddenOffsets = j && 0 === e[0].offsetHeight, l.innerHTML = "", l.style.cssText = "box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;", kb.swap(g, null != g.style.zoom ? {zoom: 1} : {}, function() {
                b.boxSizing = 4 === l.offsetWidth
            }), a.getComputedStyle && (b.pixelPosition = "1%" !== (a.getComputedStyle(l, null) || {}).top, b.boxSizingReliable = "4px" === (a.getComputedStyle(l, null) || {width: "4px"}).width, d = l.appendChild(Y.createElement("div")), d.style.cssText = l.style.cssText = f, d.style.marginRight = d.style.width = "0", l.style.width = "1px", b.reliableMarginRight = !parseFloat((a.getComputedStyle(d, null) || {}).marginRight)), typeof l.style.zoom !== W && (l.innerHTML = "", l.style.cssText = f + "width:1px;padding:1px;display:inline;zoom:1", b.inlineBlockNeedsLayout = 3 === l.offsetWidth, l.style.display = "block", l.innerHTML = "<div></div>", l.firstChild.style.width = "5px", b.shrinkWrapBlocks = 3 !== l.offsetWidth, b.inlineBlockNeedsLayout && (g.style.zoom = 1)), g.removeChild(c), c = l = e = d = null)
        }), c = f = g = h = d = e = null, b
    }({});
    var Ab = /(?:\{[\s\S]*\}|\[[\s\S]*\])$/, Bb = /([A-Z])/g;
    kb.extend({cache: {}, noData: {applet: !0, embed: !0, object: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"}, hasData: function(a) {
            return a = a.nodeType ? kb.cache[a[kb.expando]] : a[kb.expando], !!a && !h(a)
        }, data: function(a, b, c) {
            return e(a, b, c)
        }, removeData: function(a, b) {
            return f(a, b)
        }, _data: function(a, b, c) {
            return e(a, b, c, !0)
        }, _removeData: function(a, b) {
            return f(a, b, !0)
        }, acceptData: function(a) {
            if (a.nodeType && 1 !== a.nodeType && 9 !== a.nodeType)
                return!1;
            var b = a.nodeName && kb.noData[a.nodeName.toLowerCase()];
            return!b || b !== !0 && a.getAttribute("classid") === b
        }}), kb.fn.extend({data: function(a, c) {
            var d, e, f = null, h = 0, i = this[0];
            if (a === b) {
                if (this.length && (f = kb.data(i), 1 === i.nodeType && !kb._data(i, "parsedAttrs"))) {
                    for (d = i.attributes; h < d.length; h++)
                        e = d[h].name, 0 === e.indexOf("data-") && (e = kb.camelCase(e.slice(5)), g(i, e, f[e]));
                    kb._data(i, "parsedAttrs", !0)
                }
                return f
            }
            return"object" == typeof a ? this.each(function() {
                kb.data(this, a)
            }) : arguments.length > 1 ? this.each(function() {
                kb.data(this, a, c)
            }) : i ? g(i, a, kb.data(i, a)) : null
        }, removeData: function(a) {
            return this.each(function() {
                kb.removeData(this, a)
            })
        }}), kb.extend({queue: function(a, b, c) {
            var d;
            return a ? (b = (b || "fx") + "queue", d = kb._data(a, b), c && (!d || kb.isArray(c) ? d = kb._data(a, b, kb.makeArray(c)) : d.push(c)), d || []) : void 0
        }, dequeue: function(a, b) {
            b = b || "fx";
            var c = kb.queue(a, b), d = c.length, e = c.shift(), f = kb._queueHooks(a, b), g = function() {
                kb.dequeue(a, b)
            };
            "inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire()
        }, _queueHooks: function(a, b) {
            var c = b + "queueHooks";
            return kb._data(a, c) || kb._data(a, c, {empty: kb.Callbacks("once memory").add(function() {
                    kb._removeData(a, b + "queue"), kb._removeData(a, c)
                })})
        }}), kb.fn.extend({queue: function(a, c) {
            var d = 2;
            return"string" != typeof a && (c = a, a = "fx", d--), arguments.length < d ? kb.queue(this[0], a) : c === b ? this : this.each(function() {
                var b = kb.queue(this, a, c);
                kb._queueHooks(this, a), "fx" === a && "inprogress" !== b[0] && kb.dequeue(this, a)
            })
        }, dequeue: function(a) {
            return this.each(function() {
                kb.dequeue(this, a)
            })
        }, delay: function(a, b) {
            return a = kb.fx ? kb.fx.speeds[a] || a : a, b = b || "fx", this.queue(b, function(b, c) {
                var d = setTimeout(b, a);
                c.stop = function() {
                    clearTimeout(d)
                }
            })
        }, clearQueue: function(a) {
            return this.queue(a || "fx", [])
        }, promise: function(a, c) {
            var d, e = 1, f = kb.Deferred(), g = this, h = this.length, i = function() {
                --e || f.resolveWith(g, [g])
            };
            for ("string" != typeof a && (c = a, a = b), a = a || "fx"; h--; )
                d = kb._data(g[h], a + "queueHooks"), d && d.empty && (e++, d.empty.add(i));
            return i(), f.promise(c)
        }});
    var Cb, Db, Eb = /[\t\r\n\f]/g, Fb = /\r/g, Gb = /^(?:input|select|textarea|button|object)$/i, Hb = /^(?:a|area)$/i, Ib = /^(?:checked|selected)$/i, Jb = kb.support.getSetAttribute, Kb = kb.support.input;
    kb.fn.extend({attr: function(a, b) {
            return kb.access(this, kb.attr, a, b, arguments.length > 1)
        }, removeAttr: function(a) {
            return this.each(function() {
                kb.removeAttr(this, a)
            })
        }, prop: function(a, b) {
            return kb.access(this, kb.prop, a, b, arguments.length > 1)
        }, removeProp: function(a) {
            return a = kb.propFix[a] || a, this.each(function() {
                try {
                    this[a] = b, delete this[a]
                } catch (c) {
                }
            })
        }, addClass: function(a) {
            var b, c, d, e, f, g = 0, h = this.length, i = "string" == typeof a && a;
            if (kb.isFunction(a))
                return this.each(function(b) {
                    kb(this).addClass(a.call(this, b, this.className))
                });
            if (i)
                for (b = (a || "").match(mb) || []; h > g; g++)
                    if (c = this[g], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(Eb, " ") : " ")) {
                        for (f = 0; e = b[f++]; )
                            d.indexOf(" " + e + " ") < 0 && (d += e + " ");
                        c.className = kb.trim(d)
                    }
            return this
        }, removeClass: function(a) {
            var b, c, d, e, f, g = 0, h = this.length, i = 0 === arguments.length || "string" == typeof a && a;
            if (kb.isFunction(a))
                return this.each(function(b) {
                    kb(this).removeClass(a.call(this, b, this.className))
                });
            if (i)
                for (b = (a || "").match(mb) || []; h > g; g++)
                    if (c = this[g], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(Eb, " ") : "")) {
                        for (f = 0; e = b[f++]; )
                            for (; d.indexOf(" " + e + " ") >= 0; )
                                d = d.replace(" " + e + " ", " ");
                        c.className = a ? kb.trim(d) : ""
                    }
            return this
        }, toggleClass: function(a, b) {
            var c = typeof a;
            return"boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this.removeClass(a) : this.each(kb.isFunction(a) ? function(c) {
                kb(this).toggleClass(a.call(this, c, this.className, b), b)
            } : function() {
                if ("string" === c)
                    for (var b, d = 0, e = kb(this), f = a.match(mb) || []; b = f[d++]; )
                        e.hasClass(b) ? e.removeClass(b) : e.addClass(b);
                else
                    (c === W || "boolean" === c) && (this.className && kb._data(this, "__className__", this.className), this.className = this.className || a === !1 ? "" : kb._data(this, "__className__") || "")
            })
        }, hasClass: function(a) {
            for (var b = " " + a + " ", c = 0, d = this.length; d > c; c++)
                if (1 === this[c].nodeType && (" " + this[c].className + " ").replace(Eb, " ").indexOf(b) >= 0)
                    return!0;
            return!1
        }, val: function(a) {
            var c, d, e, f = this[0];
            {
                if (arguments.length)
                    return e = kb.isFunction(a), this.each(function(c) {
                        var f;
                        1 === this.nodeType && (f = e ? a.call(this, c, kb(this).val()) : a, null == f ? f = "" : "number" == typeof f ? f += "" : kb.isArray(f) && (f = kb.map(f, function(a) {
                            return null == a ? "" : a + ""
                        })), d = kb.valHooks[this.type] || kb.valHooks[this.nodeName.toLowerCase()], d && "set"in d && d.set(this, f, "value") !== b || (this.value = f))
                    });
                if (f)
                    return d = kb.valHooks[f.type] || kb.valHooks[f.nodeName.toLowerCase()], d && "get"in d && (c = d.get(f, "value")) !== b ? c : (c = f.value, "string" == typeof c ? c.replace(Fb, "") : null == c ? "" : c)
            }
        }}), kb.extend({valHooks: {option: {get: function(a) {
                    var b = kb.find.attr(a, "value");
                    return null != b ? b : a.text
                }}, select: {get: function(a) {
                    for (var b, c, d = a.options, e = a.selectedIndex, f = "select-one" === a.type || 0 > e, g = f ? null : [], h = f ? e + 1 : d.length, i = 0 > e ? h : f ? e : 0; h > i; i++)
                        if (c = d[i], !(!c.selected && i !== e || (kb.support.optDisabled ? c.disabled : null !== c.getAttribute("disabled")) || c.parentNode.disabled && kb.nodeName(c.parentNode, "optgroup"))) {
                            if (b = kb(c).val(), f)
                                return b;
                            g.push(b)
                        }
                    return g
                }, set: function(a, b) {
                    for (var c, d, e = a.options, f = kb.makeArray(b), g = e.length; g--; )
                        d = e[g], (d.selected = kb.inArray(kb(d).val(), f) >= 0) && (c = !0);
                    return c || (a.selectedIndex = -1), f
                }}}, attr: function(a, c, d) {
            var e, f, g = a.nodeType;
            if (a && 3 !== g && 8 !== g && 2 !== g)
                return typeof a.getAttribute === W ? kb.prop(a, c, d) : (1 === g && kb.isXMLDoc(a) || (c = c.toLowerCase(), e = kb.attrHooks[c] || (kb.expr.match.bool.test(c) ? Db : Cb)), d === b ? e && "get"in e && null !== (f = e.get(a, c)) ? f : (f = kb.find.attr(a, c), null == f ? b : f) : null !== d ? e && "set"in e && (f = e.set(a, d, c)) !== b ? f : (a.setAttribute(c, d + ""), d) : void kb.removeAttr(a, c))
        }, removeAttr: function(a, b) {
            var c, d, e = 0, f = b && b.match(mb);
            if (f && 1 === a.nodeType)
                for (; c = f[e++]; )
                    d = kb.propFix[c] || c, kb.expr.match.bool.test(c) ? Kb && Jb || !Ib.test(c) ? a[d] = !1 : a[kb.camelCase("default-" + c)] = a[d] = !1 : kb.attr(a, c, ""), a.removeAttribute(Jb ? c : d)
        }, attrHooks: {type: {set: function(a, b) {
                    if (!kb.support.radioValue && "radio" === b && kb.nodeName(a, "input")) {
                        var c = a.value;
                        return a.setAttribute("type", b), c && (a.value = c), b
                    }
                }}}, propFix: {"for": "htmlFor", "class": "className"}, prop: function(a, c, d) {
            var e, f, g, h = a.nodeType;
            if (a && 3 !== h && 8 !== h && 2 !== h)
                return g = 1 !== h || !kb.isXMLDoc(a), g && (c = kb.propFix[c] || c, f = kb.propHooks[c]), d !== b ? f && "set"in f && (e = f.set(a, d, c)) !== b ? e : a[c] = d : f && "get"in f && null !== (e = f.get(a, c)) ? e : a[c]
        }, propHooks: {tabIndex: {get: function(a) {
                    var b = kb.find.attr(a, "tabindex");
                    return b ? parseInt(b, 10) : Gb.test(a.nodeName) || Hb.test(a.nodeName) && a.href ? 0 : -1
                }}}}), Db = {set: function(a, b, c) {
            return b === !1 ? kb.removeAttr(a, c) : Kb && Jb || !Ib.test(c) ? a.setAttribute(!Jb && kb.propFix[c] || c, c) : a[kb.camelCase("default-" + c)] = a[c] = !0, c
        }}, kb.each(kb.expr.match.bool.source.match(/\w+/g), function(a, c) {
        var d = kb.expr.attrHandle[c] || kb.find.attr;
        kb.expr.attrHandle[c] = Kb && Jb || !Ib.test(c) ? function(a, c, e) {
            var f = kb.expr.attrHandle[c], g = e ? b : (kb.expr.attrHandle[c] = b) != d(a, c, e) ? c.toLowerCase() : null;
            return kb.expr.attrHandle[c] = f, g
        } : function(a, c, d) {
            return d ? b : a[kb.camelCase("default-" + c)] ? c.toLowerCase() : null
        }
    }), Kb && Jb || (kb.attrHooks.value = {set: function(a, b, c) {
            return kb.nodeName(a, "input") ? void(a.defaultValue = b) : Cb && Cb.set(a, b, c)
        }}), Jb || (Cb = {set: function(a, c, d) {
            var e = a.getAttributeNode(d);
            return e || a.setAttributeNode(e = a.ownerDocument.createAttribute(d)), e.value = c += "", "value" === d || c === a.getAttribute(d) ? c : b
        }}, kb.expr.attrHandle.id = kb.expr.attrHandle.name = kb.expr.attrHandle.coords = function(a, c, d) {
        var e;
        return d ? b : (e = a.getAttributeNode(c)) && "" !== e.value ? e.value : null
    }, kb.valHooks.button = {get: function(a, c) {
            var d = a.getAttributeNode(c);
            return d && d.specified ? d.value : b
        }, set: Cb.set}, kb.attrHooks.contenteditable = {set: function(a, b, c) {
            Cb.set(a, "" === b ? !1 : b, c)
        }}, kb.each(["width", "height"], function(a, b) {
        kb.attrHooks[b] = {set: function(a, c) {
                return"" === c ? (a.setAttribute(b, "auto"), c) : void 0
            }}
    })), kb.support.hrefNormalized || kb.each(["href", "src"], function(a, b) {
        kb.propHooks[b] = {get: function(a) {
                return a.getAttribute(b, 4)
            }}
    }), kb.support.style || (kb.attrHooks.style = {get: function(a) {
            return a.style.cssText || b
        }, set: function(a, b) {
            return a.style.cssText = b + ""
        }}), kb.support.optSelected || (kb.propHooks.selected = {get: function(a) {
            var b = a.parentNode;
            return b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex), null
        }}), kb.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        kb.propFix[this.toLowerCase()] = this
    }), kb.support.enctype || (kb.propFix.enctype = "encoding"), kb.each(["radio", "checkbox"], function() {
        kb.valHooks[this] = {set: function(a, b) {
                return kb.isArray(b) ? a.checked = kb.inArray(kb(a).val(), b) >= 0 : void 0
            }}, kb.support.checkOn || (kb.valHooks[this].get = function(a) {
            return null === a.getAttribute("value") ? "on" : a.value
        })
    });
    var Lb = /^(?:input|select|textarea)$/i, Mb = /^key/, Nb = /^(?:mouse|contextmenu)|click/, Ob = /^(?:focusinfocus|focusoutblur)$/, Pb = /^([^.]*)(?:\.(.+)|)$/;
    kb.event = {global: {}, add: function(a, c, d, e, f) {
            var g, h, i, j, k, l, m, n, o, p, q, r = kb._data(a);
            if (r) {
                for (d.handler && (j = d, d = j.handler, f = j.selector), d.guid || (d.guid = kb.guid++), (h = r.events) || (h = r.events = {}), (l = r.handle) || (l = r.handle = function(a) {
                    return typeof kb === W || a && kb.event.triggered === a.type ? b : kb.event.dispatch.apply(l.elem, arguments)
                }, l.elem = a), c = (c || "").match(mb) || [""], i = c.length; i--; )
                    g = Pb.exec(c[i]) || [], o = q = g[1], p = (g[2] || "").split(".").sort(), o && (k = kb.event.special[o] || {}, o = (f ? k.delegateType : k.bindType) || o, k = kb.event.special[o] || {}, m = kb.extend({type: o, origType: q, data: e, handler: d, guid: d.guid, selector: f, needsContext: f && kb.expr.match.needsContext.test(f), namespace: p.join(".")}, j), (n = h[o]) || (n = h[o] = [], n.delegateCount = 0, k.setup && k.setup.call(a, e, p, l) !== !1 || (a.addEventListener ? a.addEventListener(o, l, !1) : a.attachEvent && a.attachEvent("on" + o, l))), k.add && (k.add.call(a, m), m.handler.guid || (m.handler.guid = d.guid)), f ? n.splice(n.delegateCount++, 0, m) : n.push(m), kb.event.global[o] = !0);
                a = null
            }
        }, remove: function(a, b, c, d, e) {
            var f, g, h, i, j, k, l, m, n, o, p, q = kb.hasData(a) && kb._data(a);
            if (q && (k = q.events)) {
                for (b = (b || "").match(mb) || [""], j = b.length; j--; )
                    if (h = Pb.exec(b[j]) || [], n = p = h[1], o = (h[2] || "").split(".").sort(), n) {
                        for (l = kb.event.special[n] || {}, n = (d?l.delegateType:l.bindType) || n, m = k[n] || [], h = h[2] && new RegExp("(^|\\.)" + o.join("\\.(?:.*\\.|)") + "(\\.|$)"), i = f = m.length; f--; )
                            g = m[f], !e && p !== g.origType || c && c.guid !== g.guid || h && !h.test(g.namespace) || d && d !== g.selector && ("**" !== d || !g.selector) || (m.splice(f, 1), g.selector && m.delegateCount--, l.remove && l.remove.call(a, g));
                        i && !m.length && (l.teardown && l.teardown.call(a, o, q.handle) !== !1 || kb.removeEvent(a, n, q.handle), delete k[n])
                    } else
                        for (n in k)
                            kb.event.remove(a, n + b[j], c, d, !0);
                kb.isEmptyObject(k) && (delete q.handle, kb._removeData(a, "events"))
            }
        }, trigger: function(c, d, e, f) {
            var g, h, i, j, k, l, m, n = [e || Y], o = ib.call(c, "type") ? c.type : c, p = ib.call(c, "namespace") ? c.namespace.split(".") : [];
            if (i = l = e = e || Y, 3 !== e.nodeType && 8 !== e.nodeType && !Ob.test(o + kb.event.triggered) && (o.indexOf(".") >= 0 && (p = o.split("."), o = p.shift(), p.sort()), h = o.indexOf(":") < 0 && "on" + o, c = c[kb.expando] ? c : new kb.Event(o, "object" == typeof c && c), c.isTrigger = f ? 2 : 3, c.namespace = p.join("."), c.namespace_re = c.namespace ? new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, c.result = b, c.target || (c.target = e), d = null == d ? [c] : kb.makeArray(d, [c]), k = kb.event.special[o] || {}, f || !k.trigger || k.trigger.apply(e, d) !== !1)) {
                if (!f && !k.noBubble && !kb.isWindow(e)) {
                    for (j = k.delegateType || o, Ob.test(j + o) || (i = i.parentNode); i; i = i.parentNode)
                        n.push(i), l = i;
                    l === (e.ownerDocument || Y) && n.push(l.defaultView || l.parentWindow || a)
                }
                for (m = 0; (i = n[m++]) && !c.isPropagationStopped(); )
                    c.type = m > 1 ? j : k.bindType || o, g = (kb._data(i, "events") || {})[c.type] && kb._data(i, "handle"), g && g.apply(i, d), g = h && i[h], g && kb.acceptData(i) && g.apply && g.apply(i, d) === !1 && c.preventDefault();
                if (c.type = o, !f && !c.isDefaultPrevented() && (!k._default || k._default.apply(n.pop(), d) === !1) && kb.acceptData(e) && h && e[o] && !kb.isWindow(e)) {
                    l = e[h], l && (e[h] = null), kb.event.triggered = o;
                    try {
                        e[o]()
                    } catch (q) {
                    }
                    kb.event.triggered = b, l && (e[h] = l)
                }
                return c.result
            }
        }, dispatch: function(a) {
            a = kb.event.fix(a);
            var c, d, e, f, g, h = [], i = fb.call(arguments), j = (kb._data(this, "events") || {})[a.type] || [], k = kb.event.special[a.type] || {};
            if (i[0] = a, a.delegateTarget = this, !k.preDispatch || k.preDispatch.call(this, a) !== !1) {
                for (h = kb.event.handlers.call(this, a, j), c = 0; (f = h[c++]) && !a.isPropagationStopped(); )
                    for (a.currentTarget = f.elem, g = 0; (e = f.handlers[g++]) && !a.isImmediatePropagationStopped(); )
                        (!a.namespace_re || a.namespace_re.test(e.namespace)) && (a.handleObj = e, a.data = e.data, d = ((kb.event.special[e.origType] || {}).handle || e.handler).apply(f.elem, i), d !== b && (a.result = d) === !1 && (a.preventDefault(), a.stopPropagation()));
                return k.postDispatch && k.postDispatch.call(this, a), a.result
            }
        }, handlers: function(a, c) {
            var d, e, f, g, h = [], i = c.delegateCount, j = a.target;
            if (i && j.nodeType && (!a.button || "click" !== a.type))
                for (; j != this; j = j.parentNode || this)
                    if (1 === j.nodeType && (j.disabled !== !0 || "click" !== a.type)) {
                        for (f = [], g = 0; i > g; g++)
                            e = c[g], d = e.selector + " ", f[d] === b && (f[d] = e.needsContext ? kb(d, this).index(j) >= 0 : kb.find(d, this, null, [j]).length), f[d] && f.push(e);
                        f.length && h.push({elem: j, handlers: f})
                    }
            return i < c.length && h.push({elem: this, handlers: c.slice(i)}), h
        }, fix: function(a) {
            if (a[kb.expando])
                return a;
            var b, c, d, e = a.type, f = a, g = this.fixHooks[e];
            for (g || (this.fixHooks[e] = g = Nb.test(e)?this.mouseHooks:Mb.test(e)?this.keyHooks:{}), d = g.props?this.props.concat(g.props):this.props, a = new kb.Event(f), b = d.length; b--; )
                c = d[b], a[c] = f[c];
            return a.target || (a.target = f.srcElement || Y), 3 === a.target.nodeType && (a.target = a.target.parentNode), a.metaKey = !!a.metaKey, g.filter ? g.filter(a, f) : a
        }, props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "), fixHooks: {}, keyHooks: {props: "char charCode key keyCode".split(" "), filter: function(a, b) {
                return null == a.which && (a.which = null != b.charCode ? b.charCode : b.keyCode), a
            }}, mouseHooks: {props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "), filter: function(a, c) {
                var d, e, f, g = c.button, h = c.fromElement;
                return null == a.pageX && null != c.clientX && (e = a.target.ownerDocument || Y, f = e.documentElement, d = e.body, a.pageX = c.clientX + (f && f.scrollLeft || d && d.scrollLeft || 0) - (f && f.clientLeft || d && d.clientLeft || 0), a.pageY = c.clientY + (f && f.scrollTop || d && d.scrollTop || 0) - (f && f.clientTop || d && d.clientTop || 0)), !a.relatedTarget && h && (a.relatedTarget = h === a.target ? c.toElement : h), a.which || g === b || (a.which = 1 & g ? 1 : 2 & g ? 3 : 4 & g ? 2 : 0), a
            }}, special: {load: {noBubble: !0}, focus: {trigger: function() {
                    if (this !== k() && this.focus)
                        try {
                            return this.focus(), !1
                        } catch (a) {
                        }
                }, delegateType: "focusin"}, blur: {trigger: function() {
                    return this === k() && this.blur ? (this.blur(), !1) : void 0
                }, delegateType: "focusout"}, click: {trigger: function() {
                    return kb.nodeName(this, "input") && "checkbox" === this.type && this.click ? (this.click(), !1) : void 0
                }, _default: function(a) {
                    return kb.nodeName(a.target, "a")
                }}, beforeunload: {postDispatch: function(a) {
                    a.result !== b && (a.originalEvent.returnValue = a.result)
                }}}, simulate: function(a, b, c, d) {
            var e = kb.extend(new kb.Event, c, {type: a, isSimulated: !0, originalEvent: {}});
            d ? kb.event.trigger(e, null, b) : kb.event.dispatch.call(b, e), e.isDefaultPrevented() && c.preventDefault()
        }}, kb.removeEvent = Y.removeEventListener ? function(a, b, c) {
        a.removeEventListener && a.removeEventListener(b, c, !1)
    } : function(a, b, c) {
        var d = "on" + b;
        a.detachEvent && (typeof a[d] === W && (a[d] = null), a.detachEvent(d, c))
    }, kb.Event = function(a, b) {
        return this instanceof kb.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || a.returnValue === !1 || a.getPreventDefault && a.getPreventDefault() ? i : j) : this.type = a, b && kb.extend(this, b), this.timeStamp = a && a.timeStamp || kb.now(), void(this[kb.expando] = !0)) : new kb.Event(a, b)
    }, kb.Event.prototype = {isDefaultPrevented: j, isPropagationStopped: j, isImmediatePropagationStopped: j, preventDefault: function() {
            var a = this.originalEvent;
            this.isDefaultPrevented = i, a && (a.preventDefault ? a.preventDefault() : a.returnValue = !1)
        }, stopPropagation: function() {
            var a = this.originalEvent;
            this.isPropagationStopped = i, a && (a.stopPropagation && a.stopPropagation(), a.cancelBubble = !0)
        }, stopImmediatePropagation: function() {
            this.isImmediatePropagationStopped = i, this.stopPropagation()
        }}, kb.each({mouseenter: "mouseover", mouseleave: "mouseout"}, function(a, b) {
        kb.event.special[a] = {delegateType: b, bindType: b, handle: function(a) {
                var c, d = this, e = a.relatedTarget, f = a.handleObj;
                return(!e || e !== d && !kb.contains(d, e)) && (a.type = f.origType, c = f.handler.apply(this, arguments), a.type = b), c
            }}
    }), kb.support.submitBubbles || (kb.event.special.submit = {setup: function() {
            return kb.nodeName(this, "form") ? !1 : void kb.event.add(this, "click._submit keypress._submit", function(a) {
                var c = a.target, d = kb.nodeName(c, "input") || kb.nodeName(c, "button") ? c.form : b;
                d && !kb._data(d, "submitBubbles") && (kb.event.add(d, "submit._submit", function(a) {
                    a._submit_bubble = !0
                }), kb._data(d, "submitBubbles", !0))
            })
        }, postDispatch: function(a) {
            a._submit_bubble && (delete a._submit_bubble, this.parentNode && !a.isTrigger && kb.event.simulate("submit", this.parentNode, a, !0))
        }, teardown: function() {
            return kb.nodeName(this, "form") ? !1 : void kb.event.remove(this, "._submit")
        }}), kb.support.changeBubbles || (kb.event.special.change = {setup: function() {
            return Lb.test(this.nodeName) ? (("checkbox" === this.type || "radio" === this.type) && (kb.event.add(this, "propertychange._change", function(a) {
                "checked" === a.originalEvent.propertyName && (this._just_changed = !0)
            }), kb.event.add(this, "click._change", function(a) {
                this._just_changed && !a.isTrigger && (this._just_changed = !1), kb.event.simulate("change", this, a, !0)
            })), !1) : void kb.event.add(this, "beforeactivate._change", function(a) {
                var b = a.target;
                Lb.test(b.nodeName) && !kb._data(b, "changeBubbles") && (kb.event.add(b, "change._change", function(a) {
                    !this.parentNode || a.isSimulated || a.isTrigger || kb.event.simulate("change", this.parentNode, a, !0)
                }), kb._data(b, "changeBubbles", !0))
            })
        }, handle: function(a) {
            var b = a.target;
            return this !== b || a.isSimulated || a.isTrigger || "radio" !== b.type && "checkbox" !== b.type ? a.handleObj.handler.apply(this, arguments) : void 0
        }, teardown: function() {
            return kb.event.remove(this, "._change"), !Lb.test(this.nodeName)
        }}), kb.support.focusinBubbles || kb.each({focus: "focusin", blur: "focusout"}, function(a, b) {
        var c = 0, d = function(a) {
            kb.event.simulate(b, a.target, kb.event.fix(a), !0)
        };
        kb.event.special[b] = {setup: function() {
                0 === c++ && Y.addEventListener(a, d, !0)
            }, teardown: function() {
                0 === --c && Y.removeEventListener(a, d, !0)
            }}
    }), kb.fn.extend({on: function(a, c, d, e, f) {
            var g, h;
            if ("object" == typeof a) {
                "string" != typeof c && (d = d || c, c = b);
                for (g in a)
                    this.on(g, c, d, a[g], f);
                return this
            }
            if (null == d && null == e ? (e = c, d = c = b) : null == e && ("string" == typeof c ? (e = d, d = b) : (e = d, d = c, c = b)), e === !1)
                e = j;
            else if (!e)
                return this;
            return 1 === f && (h = e, e = function(a) {
                return kb().off(a), h.apply(this, arguments)
            }, e.guid = h.guid || (h.guid = kb.guid++)), this.each(function() {
                kb.event.add(this, a, e, d, c)
            })
        }, one: function(a, b, c, d) {
            return this.on(a, b, c, d, 1)
        }, off: function(a, c, d) {
            var e, f;
            if (a && a.preventDefault && a.handleObj)
                return e = a.handleObj, kb(a.delegateTarget).off(e.namespace ? e.origType + "." + e.namespace : e.origType, e.selector, e.handler), this;
            if ("object" == typeof a) {
                for (f in a)
                    this.off(f, c, a[f]);
                return this
            }
            return(c === !1 || "function" == typeof c) && (d = c, c = b), d === !1 && (d = j), this.each(function() {
                kb.event.remove(this, a, d, c)
            })
        }, trigger: function(a, b) {
            return this.each(function() {
                kb.event.trigger(a, b, this)
            })
        }, triggerHandler: function(a, b) {
            var c = this[0];
            return c ? kb.event.trigger(a, b, c, !0) : void 0
        }});
    var Qb = /^.[^:#\[\.,]*$/, Rb = /^(?:parents|prev(?:Until|All))/, Sb = kb.expr.match.needsContext, Tb = {children: !0, contents: !0, next: !0, prev: !0};
    kb.fn.extend({find: function(a) {
            var b, c = [], d = this, e = d.length;
            if ("string" != typeof a)
                return this.pushStack(kb(a).filter(function() {
                    for (b = 0; e > b; b++)
                        if (kb.contains(d[b], this))
                            return!0
                }));
            for (b = 0; e > b; b++)
                kb.find(a, d[b], c);
            return c = this.pushStack(e > 1 ? kb.unique(c) : c), c.selector = this.selector ? this.selector + " " + a : a, c
        }, has: function(a) {
            var b, c = kb(a, this), d = c.length;
            return this.filter(function() {
                for (b = 0; d > b; b++)
                    if (kb.contains(this, c[b]))
                        return!0
            })
        }, not: function(a) {
            return this.pushStack(m(this, a || [], !0))
        }, filter: function(a) {
            return this.pushStack(m(this, a || [], !1))
        }, is: function(a) {
            return!!m(this, "string" == typeof a && Sb.test(a) ? kb(a) : a || [], !1).length
        }, closest: function(a, b) {
            for (var c, d = 0, e = this.length, f = [], g = Sb.test(a) || "string" != typeof a ? kb(a, b || this.context) : 0; e > d; d++)
                for (c = this[d]; c && c !== b; c = c.parentNode)
                    if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && kb.find.matchesSelector(c, a))) {
                        c = f.push(c);
                        break
                    }
            return this.pushStack(f.length > 1 ? kb.unique(f) : f)
        }, index: function(a) {
            return a ? "string" == typeof a ? kb.inArray(this[0], kb(a)) : kb.inArray(a.jquery ? a[0] : a, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        }, add: function(a, b) {
            var c = "string" == typeof a ? kb(a, b) : kb.makeArray(a && a.nodeType ? [a] : a), d = kb.merge(this.get(), c);
            return this.pushStack(kb.unique(d))
        }, addBack: function(a) {
            return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
        }}), kb.each({parent: function(a) {
            var b = a.parentNode;
            return b && 11 !== b.nodeType ? b : null
        }, parents: function(a) {
            return kb.dir(a, "parentNode")
        }, parentsUntil: function(a, b, c) {
            return kb.dir(a, "parentNode", c)
        }, next: function(a) {
            return l(a, "nextSibling")
        }, prev: function(a) {
            return l(a, "previousSibling")
        }, nextAll: function(a) {
            return kb.dir(a, "nextSibling")
        }, prevAll: function(a) {
            return kb.dir(a, "previousSibling")
        }, nextUntil: function(a, b, c) {
            return kb.dir(a, "nextSibling", c)
        }, prevUntil: function(a, b, c) {
            return kb.dir(a, "previousSibling", c)
        }, siblings: function(a) {
            return kb.sibling((a.parentNode || {}).firstChild, a)
        }, children: function(a) {
            return kb.sibling(a.firstChild)
        }, contents: function(a) {
            return kb.nodeName(a, "iframe") ? a.contentDocument || a.contentWindow.document : kb.merge([], a.childNodes)
        }}, function(a, b) {
        kb.fn[a] = function(c, d) {
            var e = kb.map(this, b, c);
            return"Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = kb.filter(d, e)), this.length > 1 && (Tb[a] || (e = kb.unique(e)), Rb.test(a) && (e = e.reverse())), this.pushStack(e)
        }
    }), kb.extend({filter: function(a, b, c) {
            var d = b[0];
            return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? kb.find.matchesSelector(d, a) ? [d] : [] : kb.find.matches(a, kb.grep(b, function(a) {
                return 1 === a.nodeType
            }))
        }, dir: function(a, c, d) {
            for (var e = [], f = a[c]; f && 9 !== f.nodeType && (d === b || 1 !== f.nodeType || !kb(f).is(d)); )
                1 === f.nodeType && e.push(f), f = f[c];
            return e
        }, sibling: function(a, b) {
            for (var c = []; a; a = a.nextSibling)
                1 === a.nodeType && a !== b && c.push(a);
            return c
        }});
    var Ub = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video", Vb = / jQuery\d+="(?:null|\d+)"/g, Wb = new RegExp("<(?:" + Ub + ")[\\s/>]", "i"), Xb = /^\s+/, Yb = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi, Zb = /<([\w:]+)/, $b = /<tbody/i, _b = /<|&#?\w+;/, ac = /<(?:script|style|link)/i, bc = /^(?:checkbox|radio)$/i, cc = /checked\s*(?:[^=]|=\s*.checked.)/i, dc = /^$|\/(?:java|ecma)script/i, ec = /^true\/(.*)/, fc = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g, gc = {option: [1, "<select multiple='multiple'>", "</select>"], legend: [1, "<fieldset>", "</fieldset>"], area: [1, "<map>", "</map>"], param: [1, "<object>", "</object>"], thead: [1, "<table>", "</table>"], tr: [2, "<table><tbody>", "</tbody></table>"], col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: kb.support.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]}, hc = n(Y), ic = hc.appendChild(Y.createElement("div"));
    gc.optgroup = gc.option, gc.tbody = gc.tfoot = gc.colgroup = gc.caption = gc.thead, gc.th = gc.td, kb.fn.extend({text: function(a) {
            return kb.access(this, function(a) {
                return a === b ? kb.text(this) : this.empty().append((this[0] && this[0].ownerDocument || Y).createTextNode(a))
            }, null, a, arguments.length)
        }, append: function() {
            return this.domManip(arguments, function(a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = o(this, a);
                    b.appendChild(a)
                }
            })
        }, prepend: function() {
            return this.domManip(arguments, function(a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = o(this, a);
                    b.insertBefore(a, b.firstChild)
                }
            })
        }, before: function() {
            return this.domManip(arguments, function(a) {
                this.parentNode && this.parentNode.insertBefore(a, this)
            })
        }, after: function() {
            return this.domManip(arguments, function(a) {
                this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
            })
        }, remove: function(a, b) {
            for (var c, d = a ? kb.filter(a, this) : this, e = 0; null != (c = d[e]); e++)
                b || 1 !== c.nodeType || kb.cleanData(u(c)), c.parentNode && (b && kb.contains(c.ownerDocument, c) && r(u(c, "script")), c.parentNode.removeChild(c));
            return this
        }, empty: function() {
            for (var a, b = 0; null != (a = this[b]); b++) {
                for (1 === a.nodeType && kb.cleanData(u(a, !1)); a.firstChild; )
                    a.removeChild(a.firstChild);
                a.options && kb.nodeName(a, "select") && (a.options.length = 0)
            }
            return this
        }, clone: function(a, b) {
            return a = null == a ? !1 : a, b = null == b ? a : b, this.map(function() {
                return kb.clone(this, a, b)
            })
        }, html: function(a) {
            return kb.access(this, function(a) {
                var c = this[0] || {}, d = 0, e = this.length;
                if (a === b)
                    return 1 === c.nodeType ? c.innerHTML.replace(Vb, "") : b;
                if (!("string" != typeof a || ac.test(a) || !kb.support.htmlSerialize && Wb.test(a) || !kb.support.leadingWhitespace && Xb.test(a) || gc[(Zb.exec(a) || ["", ""])[1].toLowerCase()])) {
                    a = a.replace(Yb, "<$1></$2>");
                    try {
                        for (; e > d; d++)
                            c = this[d] || {}, 1 === c.nodeType && (kb.cleanData(u(c, !1)), c.innerHTML = a);
                        c = 0
                    } catch (f) {
                    }
                }
                c && this.empty().append(a)
            }, null, a, arguments.length)
        }, replaceWith: function() {
            var a = kb.map(this, function(a) {
                return[a.nextSibling, a.parentNode]
            }), b = 0;
            return this.domManip(arguments, function(c) {
                var d = a[b++], e = a[b++];
                e && (d && d.parentNode !== e && (d = this.nextSibling), kb(this).remove(), e.insertBefore(c, d))
            }, !0), b ? this : this.remove()
        }, detach: function(a) {
            return this.remove(a, !0)
        }, domManip: function(a, b, c) {
            a = db.apply([], a);
            var d, e, f, g, h, i, j = 0, k = this.length, l = this, m = k - 1, n = a[0], o = kb.isFunction(n);
            if (o || !(1 >= k || "string" != typeof n || kb.support.checkClone) && cc.test(n))
                return this.each(function(d) {
                    var e = l.eq(d);
                    o && (a[0] = n.call(this, d, e.html())), e.domManip(a, b, c)
                });
            if (k && (i = kb.buildFragment(a, this[0].ownerDocument, !1, !c && this), d = i.firstChild, 1 === i.childNodes.length && (i = d), d)) {
                for (g = kb.map(u(i, "script"), p), f = g.length; k > j; j++)
                    e = i, j !== m && (e = kb.clone(e, !0, !0), f && kb.merge(g, u(e, "script"))), b.call(this[j], e, j);
                if (f)
                    for (h = g[g.length - 1].ownerDocument, kb.map(g, q), j = 0; f > j; j++)
                        e = g[j], dc.test(e.type || "") && !kb._data(e, "globalEval") && kb.contains(h, e) && (e.src ? kb._evalUrl(e.src) : kb.globalEval((e.text || e.textContent || e.innerHTML || "").replace(fc, "")));
                i = d = null
            }
            return this
        }}), kb.each({appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith"}, function(a, b) {
        kb.fn[a] = function(a) {
            for (var c, d = 0, e = [], f = kb(a), g = f.length - 1; g >= d; d++)
                c = d === g ? this : this.clone(!0), kb(f[d])[b](c), eb.apply(e, c.get());
            return this.pushStack(e)
        }
    }), kb.extend({clone: function(a, b, c) {
            var d, e, f, g, h, i = kb.contains(a.ownerDocument, a);
            if (kb.support.html5Clone || kb.isXMLDoc(a) || !Wb.test("<" + a.nodeName + ">") ? f = a.cloneNode(!0) : (ic.innerHTML = a.outerHTML, ic.removeChild(f = ic.firstChild)), !(kb.support.noCloneEvent && kb.support.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || kb.isXMLDoc(a)))
                for (d = u(f), h = u(a), g = 0; null != (e = h[g]); ++g)
                    d[g] && t(e, d[g]);
            if (b)
                if (c)
                    for (h = h || u(a), d = d || u(f), g = 0; null != (e = h[g]); g++)
                        s(e, d[g]);
                else
                    s(a, f);
            return d = u(f, "script"), d.length > 0 && r(d, !i && u(a, "script")), d = h = e = null, f
        }, buildFragment: function(a, b, c, d) {
            for (var e, f, g, h, i, j, k, l = a.length, m = n(b), o = [], p = 0; l > p; p++)
                if (f = a[p], f || 0 === f)
                    if ("object" === kb.type(f))
                        kb.merge(o, f.nodeType ? [f] : f);
                    else if (_b.test(f)) {
                        for (h = h || m.appendChild(b.createElement("div")), i = (Zb.exec(f) || ["", ""])[1].toLowerCase(), k = gc[i] || gc._default, h.innerHTML = k[1] + f.replace(Yb, "<$1></$2>") + k[2], e = k[0]; e--; )
                            h = h.lastChild;
                        if (!kb.support.leadingWhitespace && Xb.test(f) && o.push(b.createTextNode(Xb.exec(f)[0])), !kb.support.tbody)
                            for (f = "table" !== i || $b.test(f)?"<table>" !== k[1] || $b.test(f)?0:h:h.firstChild, e = f && f.childNodes.length; e--; )
                                kb.nodeName(j = f.childNodes[e], "tbody") && !j.childNodes.length && f.removeChild(j);
                        for (kb.merge(o, h.childNodes), h.textContent = ""; h.firstChild; )
                            h.removeChild(h.firstChild);
                        h = m.lastChild
                    } else
                        o.push(b.createTextNode(f));
            for (h && m.removeChild(h), kb.support.appendChecked || kb.grep(u(o, "input"), v), p = 0; f = o[p++]; )
                if ((!d || -1 === kb.inArray(f, d)) && (g = kb.contains(f.ownerDocument, f), h = u(m.appendChild(f), "script"), g && r(h), c))
                    for (e = 0; f = h[e++]; )
                        dc.test(f.type || "") && c.push(f);
            return h = null, m
        }, cleanData: function(a, b) {
            for (var c, d, e, f, g = 0, h = kb.expando, i = kb.cache, j = kb.support.deleteExpando, k = kb.event.special; null != (c = a[g]); g++)
                if ((b || kb.acceptData(c)) && (e = c[h], f = e && i[e])) {
                    if (f.events)
                        for (d in f.events)
                            k[d] ? kb.event.remove(c, d) : kb.removeEvent(c, d, f.handle);
                    i[e] && (delete i[e], j ? delete c[h] : typeof c.removeAttribute !== W ? c.removeAttribute(h) : c[h] = null, bb.push(e))
                }
        }, _evalUrl: function(a) {
            return kb.ajax({url: a, type: "GET", dataType: "script", async: !1, global: !1, "throws": !0})
        }}), kb.fn.extend({wrapAll: function(a) {
            if (kb.isFunction(a))
                return this.each(function(b) {
                    kb(this).wrapAll(a.call(this, b))
                });
            if (this[0]) {
                var b = kb(a, this[0].ownerDocument).eq(0).clone(!0);
                this[0].parentNode && b.insertBefore(this[0]), b.map(function() {
                    for (var a = this; a.firstChild && 1 === a.firstChild.nodeType; )
                        a = a.firstChild;
                    return a
                }).append(this)
            }
            return this
        }, wrapInner: function(a) {
            return this.each(kb.isFunction(a) ? function(b) {
                kb(this).wrapInner(a.call(this, b))
            } : function() {
                var b = kb(this), c = b.contents();
                c.length ? c.wrapAll(a) : b.append(a)
            })
        }, wrap: function(a) {
            var b = kb.isFunction(a);
            return this.each(function(c) {
                kb(this).wrapAll(b ? a.call(this, c) : a)
            })
        }, unwrap: function() {
            return this.parent().each(function() {
                kb.nodeName(this, "body") || kb(this).replaceWith(this.childNodes)
            }).end()
        }});
    var jc, kc, lc, mc = /alpha\([^)]*\)/i, nc = /opacity\s*=\s*([^)]*)/, oc = /^(top|right|bottom|left)$/, pc = /^(none|table(?!-c[ea]).+)/, qc = /^margin/, rc = new RegExp("^(" + lb + ")(.*)$", "i"), sc = new RegExp("^(" + lb + ")(?!px)[a-z%]+$", "i"), tc = new RegExp("^([+-])=(" + lb + ")", "i"), uc = {BODY: "block"}, vc = {position: "absolute", visibility: "hidden", display: "block"}, wc = {letterSpacing: 0, fontWeight: 400}, xc = ["Top", "Right", "Bottom", "Left"], yc = ["Webkit", "O", "Moz", "ms"];
    kb.fn.extend({css: function(a, c) {
            return kb.access(this, function(a, c, d) {
                var e, f, g = {}, h = 0;
                if (kb.isArray(c)) {
                    for (f = kc(a), e = c.length; e > h; h++)
                        g[c[h]] = kb.css(a, c[h], !1, f);
                    return g
                }
                return d !== b ? kb.style(a, c, d) : kb.css(a, c)
            }, a, c, arguments.length > 1)
        }, show: function() {
            return y(this, !0)
        }, hide: function() {
            return y(this)
        }, toggle: function(a) {
            return"boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function() {
                x(this) ? kb(this).show() : kb(this).hide()
            })
        }}), kb.extend({cssHooks: {opacity: {get: function(a, b) {
                    if (b) {
                        var c = lc(a, "opacity");
                        return"" === c ? "1" : c
                    }
                }}}, cssNumber: {columnCount: !0, fillOpacity: !0, fontWeight: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0}, cssProps: {"float": kb.support.cssFloat ? "cssFloat" : "styleFloat"}, style: function(a, c, d, e) {
            if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
                var f, g, h, i = kb.camelCase(c), j = a.style;
                if (c = kb.cssProps[i] || (kb.cssProps[i] = w(j, i)), h = kb.cssHooks[c] || kb.cssHooks[i], d === b)
                    return h && "get"in h && (f = h.get(a, !1, e)) !== b ? f : j[c];
                if (g = typeof d, "string" === g && (f = tc.exec(d)) && (d = (f[1] + 1) * f[2] + parseFloat(kb.css(a, c)), g = "number"), !(null == d || "number" === g && isNaN(d) || ("number" !== g || kb.cssNumber[i] || (d += "px"), kb.support.clearCloneStyle || "" !== d || 0 !== c.indexOf("background") || (j[c] = "inherit"), h && "set"in h && (d = h.set(a, d, e)) === b)))
                    try {
                        j[c] = d
                    } catch (k) {
                    }
            }
        }, css: function(a, c, d, e) {
            var f, g, h, i = kb.camelCase(c);
            return c = kb.cssProps[i] || (kb.cssProps[i] = w(a.style, i)), h = kb.cssHooks[c] || kb.cssHooks[i], h && "get"in h && (g = h.get(a, !0, d)), g === b && (g = lc(a, c, e)), "normal" === g && c in wc && (g = wc[c]), "" === d || d ? (f = parseFloat(g), d === !0 || kb.isNumeric(f) ? f || 0 : g) : g
        }}), a.getComputedStyle ? (kc = function(b) {
        return a.getComputedStyle(b, null)
    }, lc = function(a, c, d) {
        var e, f, g, h = d || kc(a), i = h ? h.getPropertyValue(c) || h[c] : b, j = a.style;
        return h && ("" !== i || kb.contains(a.ownerDocument, a) || (i = kb.style(a, c)), sc.test(i) && qc.test(c) && (e = j.width, f = j.minWidth, g = j.maxWidth, j.minWidth = j.maxWidth = j.width = i, i = h.width, j.width = e, j.minWidth = f, j.maxWidth = g)), i
    }) : Y.documentElement.currentStyle && (kc = function(a) {
        return a.currentStyle
    }, lc = function(a, c, d) {
        var e, f, g, h = d || kc(a), i = h ? h[c] : b, j = a.style;
        return null == i && j && j[c] && (i = j[c]), sc.test(i) && !oc.test(c) && (e = j.left, f = a.runtimeStyle, g = f && f.left, g && (f.left = a.currentStyle.left), j.left = "fontSize" === c ? "1em" : i, i = j.pixelLeft + "px", j.left = e, g && (f.left = g)), "" === i ? "auto" : i
    }), kb.each(["height", "width"], function(a, b) {
        kb.cssHooks[b] = {get: function(a, c, d) {
                return c ? 0 === a.offsetWidth && pc.test(kb.css(a, "display")) ? kb.swap(a, vc, function() {
                    return B(a, b, d)
                }) : B(a, b, d) : void 0
            }, set: function(a, c, d) {
                var e = d && kc(a);
                return z(a, c, d ? A(a, b, d, kb.support.boxSizing && "border-box" === kb.css(a, "boxSizing", !1, e), e) : 0)
            }}
    }), kb.support.opacity || (kb.cssHooks.opacity = {get: function(a, b) {
            return nc.test((b && a.currentStyle ? a.currentStyle.filter : a.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : b ? "1" : ""
        }, set: function(a, b) {
            var c = a.style, d = a.currentStyle, e = kb.isNumeric(b) ? "alpha(opacity=" + 100 * b + ")" : "", f = d && d.filter || c.filter || "";
            c.zoom = 1, (b >= 1 || "" === b) && "" === kb.trim(f.replace(mc, "")) && c.removeAttribute && (c.removeAttribute("filter"), "" === b || d && !d.filter) || (c.filter = mc.test(f) ? f.replace(mc, e) : f + " " + e)
        }}), kb(function() {
        kb.support.reliableMarginRight || (kb.cssHooks.marginRight = {get: function(a, b) {
                return b ? kb.swap(a, {display: "inline-block"}, lc, [a, "marginRight"]) : void 0
            }}), !kb.support.pixelPosition && kb.fn.position && kb.each(["top", "left"], function(a, b) {
            kb.cssHooks[b] = {get: function(a, c) {
                    return c ? (c = lc(a, b), sc.test(c) ? kb(a).position()[b] + "px" : c) : void 0
                }}
        })
    }), kb.expr && kb.expr.filters && (kb.expr.filters.hidden = function(a) {
        return a.offsetWidth <= 0 && a.offsetHeight <= 0 || !kb.support.reliableHiddenOffsets && "none" === (a.style && a.style.display || kb.css(a, "display"))
    }, kb.expr.filters.visible = function(a) {
        return!kb.expr.filters.hidden(a)
    }), kb.each({margin: "", padding: "", border: "Width"}, function(a, b) {
        kb.cssHooks[a + b] = {expand: function(c) {
                for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; 4 > d; d++)
                    e[a + xc[d] + b] = f[d] || f[d - 2] || f[0];
                return e
            }}, qc.test(a) || (kb.cssHooks[a + b].set = z)
    });
    var zc = /%20/g, Ac = /\[\]$/, Bc = /\r?\n/g, Cc = /^(?:submit|button|image|reset|file)$/i, Dc = /^(?:input|select|textarea|keygen)/i;
    kb.fn.extend({serialize: function() {
            return kb.param(this.serializeArray())
        }, serializeArray: function() {
            return this.map(function() {
                var a = kb.prop(this, "elements");
                return a ? kb.makeArray(a) : this
            }).filter(function() {
                var a = this.type;
                return this.name && !kb(this).is(":disabled") && Dc.test(this.nodeName) && !Cc.test(a) && (this.checked || !bc.test(a))
            }).map(function(a, b) {
                var c = kb(this).val();
                return null == c ? null : kb.isArray(c) ? kb.map(c, function(a) {
                    return{name: b.name, value: a.replace(Bc, "\r\n")}
                }) : {name: b.name, value: c.replace(Bc, "\r\n")}
            }).get()
        }}), kb.param = function(a, c) {
        var d, e = [], f = function(a, b) {
            b = kb.isFunction(b) ? b() : null == b ? "" : b, e[e.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b)
        };
        if (c === b && (c = kb.ajaxSettings && kb.ajaxSettings.traditional), kb.isArray(a) || a.jquery && !kb.isPlainObject(a))
            kb.each(a, function() {
                f(this.name, this.value)
            });
        else
            for (d in a)
                E(d, a[d], c, f);
        return e.join("&").replace(zc, "+")
    }, kb.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(a, b) {
        kb.fn[b] = function(a, c) {
            return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
        }
    }), kb.fn.extend({hover: function(a, b) {
            return this.mouseenter(a).mouseleave(b || a)
        }, bind: function(a, b, c) {
            return this.on(a, null, b, c)
        }, unbind: function(a, b) {
            return this.off(a, null, b)
        }, delegate: function(a, b, c, d) {
            return this.on(b, a, c, d)
        }, undelegate: function(a, b, c) {
            return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c)
        }});
    var Ec, Fc, Gc = kb.now(), Hc = /\?/, Ic = /#.*$/, Jc = /([?&])_=[^&]*/, Kc = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm, Lc = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, Mc = /^(?:GET|HEAD)$/, Nc = /^\/\//, Oc = /^([\w.+-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/, Pc = kb.fn.load, Qc = {}, Rc = {}, Sc = "*/".concat("*");
    try {
        Fc = X.href
    } catch (Tc) {
        Fc = Y.createElement("a"), Fc.href = "", Fc = Fc.href
    }
    Ec = Oc.exec(Fc.toLowerCase()) || [], kb.fn.load = function(a, c, d) {
        if ("string" != typeof a && Pc)
            return Pc.apply(this, arguments);
        var e, f, g, h = this, i = a.indexOf(" ");
        return i >= 0 && (e = a.slice(i, a.length), a = a.slice(0, i)), kb.isFunction(c) ? (d = c, c = b) : c && "object" == typeof c && (g = "POST"), h.length > 0 && kb.ajax({url: a, type: g, dataType: "html", data: c}).done(function(a) {
            f = arguments, h.html(e ? kb("<div>").append(kb.parseHTML(a)).find(e) : a)
        }).complete(d && function(a, b) {
            h.each(d, f || [a.responseText, b, a])
        }), this
    }, kb.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(a, b) {
        kb.fn[b] = function(a) {
            return this.on(b, a)
        }
    }), kb.extend({active: 0, lastModified: {}, etag: {}, ajaxSettings: {url: Fc, type: "GET", isLocal: Lc.test(Ec[1]), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: {"*": Sc, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript"}, contents: {xml: /xml/, html: /html/, json: /json/}, responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"}, converters: {"* text": String, "text html": !0, "text json": kb.parseJSON, "text xml": kb.parseXML}, flatOptions: {url: !0, context: !0}}, ajaxSetup: function(a, b) {
            return b ? H(H(a, kb.ajaxSettings), b) : H(kb.ajaxSettings, a)
        }, ajaxPrefilter: F(Qc), ajaxTransport: F(Rc), ajax: function(a, c) {
            function d(a, c, d, e) {
                var f, l, s, t, v, x = c;
                2 !== u && (u = 2, i && clearTimeout(i), k = b, h = e || "", w.readyState = a > 0 ? 4 : 0, f = a >= 200 && 300 > a || 304 === a, d && (t = I(m, w, d)), t = J(m, t, w, f), f ? (m.ifModified && (v = w.getResponseHeader("Last-Modified"), v && (kb.lastModified[g] = v), v = w.getResponseHeader("etag"), v && (kb.etag[g] = v)), 204 === a || "HEAD" === m.type ? x = "nocontent" : 304 === a ? x = "notmodified" : (x = t.state, l = t.data, s = t.error, f = !s)) : (s = x, (a || !x) && (x = "error", 0 > a && (a = 0))), w.status = a, w.statusText = (c || x) + "", f ? p.resolveWith(n, [l, x, w]) : p.rejectWith(n, [w, x, s]), w.statusCode(r), r = b, j && o.trigger(f ? "ajaxSuccess" : "ajaxError", [w, m, f ? l : s]), q.fireWith(n, [w, x]), j && (o.trigger("ajaxComplete", [w, m]), --kb.active || kb.event.trigger("ajaxStop")))
            }
            "object" == typeof a && (c = a, a = b), c = c || {};
            var e, f, g, h, i, j, k, l, m = kb.ajaxSetup({}, c), n = m.context || m, o = m.context && (n.nodeType || n.jquery) ? kb(n) : kb.event, p = kb.Deferred(), q = kb.Callbacks("once memory"), r = m.statusCode || {}, s = {}, t = {}, u = 0, v = "canceled", w = {readyState: 0, getResponseHeader: function(a) {
                    var b;
                    if (2 === u) {
                        if (!l)
                            for (l = {}; b = Kc.exec(h); )
                                l[b[1].toLowerCase()] = b[2];
                        b = l[a.toLowerCase()]
                    }
                    return null == b ? null : b
                }, getAllResponseHeaders: function() {
                    return 2 === u ? h : null
                }, setRequestHeader: function(a, b) {
                    var c = a.toLowerCase();
                    return u || (a = t[c] = t[c] || a, s[a] = b), this
                }, overrideMimeType: function(a) {
                    return u || (m.mimeType = a), this
                }, statusCode: function(a) {
                    var b;
                    if (a)
                        if (2 > u)
                            for (b in a)
                                r[b] = [r[b], a[b]];
                        else
                            w.always(a[w.status]);
                    return this
                }, abort: function(a) {
                    var b = a || v;
                    return k && k.abort(b), d(0, b), this
                }};
            if (p.promise(w).complete = q.add, w.success = w.done, w.error = w.fail, m.url = ((a || m.url || Fc) + "").replace(Ic, "").replace(Nc, Ec[1] + "//"), m.type = c.method || c.type || m.method || m.type, m.dataTypes = kb.trim(m.dataType || "*").toLowerCase().match(mb) || [""], null == m.crossDomain && (e = Oc.exec(m.url.toLowerCase()), m.crossDomain = !(!e || e[1] === Ec[1] && e[2] === Ec[2] && (e[3] || ("http:" === e[1] ? "80" : "443")) === (Ec[3] || ("http:" === Ec[1] ? "80" : "443")))), m.data && m.processData && "string" != typeof m.data && (m.data = kb.param(m.data, m.traditional)), G(Qc, m, c, w), 2 === u)
                return w;
            j = m.global, j && 0 === kb.active++ && kb.event.trigger("ajaxStart"), m.type = m.type.toUpperCase(), m.hasContent = !Mc.test(m.type), g = m.url, m.hasContent || (m.data && (g = m.url += (Hc.test(g) ? "&" : "?") + m.data, delete m.data), m.cache === !1 && (m.url = Jc.test(g) ? g.replace(Jc, "$1_=" + Gc++) : g + (Hc.test(g) ? "&" : "?") + "_=" + Gc++)), m.ifModified && (kb.lastModified[g] && w.setRequestHeader("If-Modified-Since", kb.lastModified[g]), kb.etag[g] && w.setRequestHeader("If-None-Match", kb.etag[g])), (m.data && m.hasContent && m.contentType !== !1 || c.contentType) && w.setRequestHeader("Content-Type", m.contentType), w.setRequestHeader("Accept", m.dataTypes[0] && m.accepts[m.dataTypes[0]] ? m.accepts[m.dataTypes[0]] + ("*" !== m.dataTypes[0] ? ", " + Sc + "; q=0.01" : "") : m.accepts["*"]);
            for (f in m.headers)
                w.setRequestHeader(f, m.headers[f]);
            if (m.beforeSend && (m.beforeSend.call(n, w, m) === !1 || 2 === u))
                return w.abort();
            v = "abort";
            for (f in{success:1, error:1, complete:1})
                w[f](m[f]);
            if (k = G(Rc, m, c, w)) {
                w.readyState = 1, j && o.trigger("ajaxSend", [w, m]), m.async && m.timeout > 0 && (i = setTimeout(function() {
                    w.abort("timeout")
                }, m.timeout));
                try {
                    u = 1, k.send(s, d)
                } catch (x) {
                    if (!(2 > u))
                        throw x;
                    d(-1, x)
                }
            } else
                d(-1, "No Transport");
            return w
        }, getJSON: function(a, b, c) {
            return kb.get(a, b, c, "json")
        }, getScript: function(a, c) {
            return kb.get(a, b, c, "script")
        }}), kb.each(["get", "post"], function(a, c) {
        kb[c] = function(a, d, e, f) {
            return kb.isFunction(d) && (f = f || e, e = d, d = b), kb.ajax({url: a, type: c, dataType: f, data: d, success: e})
        }
    }), kb.ajaxSetup({accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"}, contents: {script: /(?:java|ecma)script/}, converters: {"text script": function(a) {
                return kb.globalEval(a), a
            }}}), kb.ajaxPrefilter("script", function(a) {
        a.cache === b && (a.cache = !1), a.crossDomain && (a.type = "GET", a.global = !1)
    }), kb.ajaxTransport("script", function(a) {
        if (a.crossDomain) {
            var c, d = Y.head || kb("head")[0] || Y.documentElement;
            return{send: function(b, e) {
                    c = Y.createElement("script"), c.async = !0, a.scriptCharset && (c.charset = a.scriptCharset), c.src = a.url, c.onload = c.onreadystatechange = function(a, b) {
                        (b || !c.readyState || /loaded|complete/.test(c.readyState)) && (c.onload = c.onreadystatechange = null, c.parentNode && c.parentNode.removeChild(c), c = null, b || e(200, "success"))
                    }, d.insertBefore(c, d.firstChild)
                }, abort: function() {
                    c && c.onload(b, !0)
                }}
        }
    });
    var Uc = [], Vc = /(=)\?(?=&|$)|\?\?/;
    kb.ajaxSetup({jsonp: "callback", jsonpCallback: function() {
            var a = Uc.pop() || kb.expando + "_" + Gc++;
            return this[a] = !0, a
        }}), kb.ajaxPrefilter("json jsonp", function(c, d, e) {
        var f, g, h, i = c.jsonp !== !1 && (Vc.test(c.url) ? "url" : "string" == typeof c.data && !(c.contentType || "").indexOf("application/x-www-form-urlencoded") && Vc.test(c.data) && "data");
        return i || "jsonp" === c.dataTypes[0] ? (f = c.jsonpCallback = kb.isFunction(c.jsonpCallback) ? c.jsonpCallback() : c.jsonpCallback, i ? c[i] = c[i].replace(Vc, "$1" + f) : c.jsonp !== !1 && (c.url += (Hc.test(c.url) ? "&" : "?") + c.jsonp + "=" + f), c.converters["script json"] = function() {
            return h || kb.error(f + " was not called"), h[0]
        }, c.dataTypes[0] = "json", g = a[f], a[f] = function() {
            h = arguments
        }, e.always(function() {
            a[f] = g, c[f] && (c.jsonpCallback = d.jsonpCallback, Uc.push(f)), h && kb.isFunction(g) && g(h[0]), h = g = b
        }), "script") : void 0
    });
    var Wc, Xc, Yc = 0, Zc = a.ActiveXObject && function() {
        var a;
        for (a in Wc)
            Wc[a](b, !0)
    };
    kb.ajaxSettings.xhr = a.ActiveXObject ? function() {
        return!this.isLocal && K() || L()
    } : K, Xc = kb.ajaxSettings.xhr(), kb.support.cors = !!Xc && "withCredentials"in Xc, Xc = kb.support.ajax = !!Xc, Xc && kb.ajaxTransport(function(c) {
        if (!c.crossDomain || kb.support.cors) {
            var d;
            return{send: function(e, f) {
                    var g, h, i = c.xhr();
                    if (c.username ? i.open(c.type, c.url, c.async, c.username, c.password) : i.open(c.type, c.url, c.async), c.xhrFields)
                        for (h in c.xhrFields)
                            i[h] = c.xhrFields[h];
                    c.mimeType && i.overrideMimeType && i.overrideMimeType(c.mimeType), c.crossDomain || e["X-Requested-With"] || (e["X-Requested-With"] = "XMLHttpRequest");
                    try {
                        for (h in e)
                            i.setRequestHeader(h, e[h])
                    } catch (j) {
                    }
                    i.send(c.hasContent && c.data || null), d = function(a, e) {
                        var h, j, k, l;
                        try {
                            if (d && (e || 4 === i.readyState))
                                if (d = b, g && (i.onreadystatechange = kb.noop, Zc && delete Wc[g]), e)
                                    4 !== i.readyState && i.abort();
                                else {
                                    l = {}, h = i.status, j = i.getAllResponseHeaders(), "string" == typeof i.responseText && (l.text = i.responseText);
                                    try {
                                        k = i.statusText
                                    } catch (m) {
                                        k = ""
                                    }
                                    h || !c.isLocal || c.crossDomain ? 1223 === h && (h = 204) : h = l.text ? 200 : 404
                                }
                        } catch (n) {
                            e || f(-1, n)
                        }
                        l && f(h, k, l, j)
                    }, c.async ? 4 === i.readyState ? setTimeout(d) : (g = ++Yc, Zc && (Wc || (Wc = {}, kb(a).unload(Zc)), Wc[g] = d), i.onreadystatechange = d) : d()
                }, abort: function() {
                    d && d(b, !0)
                }}
        }
    });
    var $c, _c, ad = /^(?:toggle|show|hide)$/, bd = new RegExp("^(?:([+-])=|)(" + lb + ")([a-z%]*)$", "i"), cd = /queueHooks$/, dd = [Q], ed = {"*": [function(a, b) {
                var c = this.createTween(a, b), d = c.cur(), e = bd.exec(b), f = e && e[3] || (kb.cssNumber[a] ? "" : "px"), g = (kb.cssNumber[a] || "px" !== f && +d) && bd.exec(kb.css(c.elem, a)), h = 1, i = 20;
                if (g && g[3] !== f) {
                    f = f || g[3], e = e || [], g = +d || 1;
                    do
                        h = h || ".5", g /= h, kb.style(c.elem, a, g + f);
                    while (h !== (h = c.cur() / d) && 1 !== h && --i)
                }
                return e && (g = c.start = +g || +d || 0, c.unit = f, c.end = e[1] ? g + (e[1] + 1) * e[2] : +e[2]), c
            }]};
    kb.Animation = kb.extend(O, {tweener: function(a, b) {
            kb.isFunction(a) ? (b = a, a = ["*"]) : a = a.split(" ");
            for (var c, d = 0, e = a.length; e > d; d++)
                c = a[d], ed[c] = ed[c] || [], ed[c].unshift(b)
        }, prefilter: function(a, b) {
            b ? dd.unshift(a) : dd.push(a)
        }}), kb.Tween = R, R.prototype = {constructor: R, init: function(a, b, c, d, e, f) {
            this.elem = a, this.prop = c, this.easing = e || "swing", this.options = b, this.start = this.now = this.cur(), this.end = d, this.unit = f || (kb.cssNumber[c] ? "" : "px")
        }, cur: function() {
            var a = R.propHooks[this.prop];
            return a && a.get ? a.get(this) : R.propHooks._default.get(this)
        }, run: function(a) {
            var b, c = R.propHooks[this.prop];
            return this.pos = b = this.options.duration ? kb.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : a, this.now = (this.end - this.start) * b + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), c && c.set ? c.set(this) : R.propHooks._default.set(this), this
        }}, R.prototype.init.prototype = R.prototype, R.propHooks = {_default: {get: function(a) {
                var b;
                return null == a.elem[a.prop] || a.elem.style && null != a.elem.style[a.prop] ? (b = kb.css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0) : a.elem[a.prop]
            }, set: function(a) {
                kb.fx.step[a.prop] ? kb.fx.step[a.prop](a) : a.elem.style && (null != a.elem.style[kb.cssProps[a.prop]] || kb.cssHooks[a.prop]) ? kb.style(a.elem, a.prop, a.now + a.unit) : a.elem[a.prop] = a.now
            }}}, R.propHooks.scrollTop = R.propHooks.scrollLeft = {set: function(a) {
            a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
        }}, kb.each(["toggle", "show", "hide"], function(a, b) {
        var c = kb.fn[b];
        kb.fn[b] = function(a, d, e) {
            return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(S(b, !0), a, d, e)
        }
    }), kb.fn.extend({fadeTo: function(a, b, c, d) {
            return this.filter(x).css("opacity", 0).show().end().animate({opacity: b}, a, c, d)
        }, animate: function(a, b, c, d) {
            var e = kb.isEmptyObject(a), f = kb.speed(b, c, d), g = function() {
                var b = O(this, kb.extend({}, a), f);
                (e || kb._data(this, "finish")) && b.stop(!0)
            };
            return g.finish = g, e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g)
        }, stop: function(a, c, d) {
            var e = function(a) {
                var b = a.stop;
                delete a.stop, b(d)
            };
            return"string" != typeof a && (d = c, c = a, a = b), c && a !== !1 && this.queue(a || "fx", []), this.each(function() {
                var b = !0, c = null != a && a + "queueHooks", f = kb.timers, g = kb._data(this);
                if (c)
                    g[c] && g[c].stop && e(g[c]);
                else
                    for (c in g)
                        g[c] && g[c].stop && cd.test(c) && e(g[c]);
                for (c = f.length; c--; )
                    f[c].elem !== this || null != a && f[c].queue !== a || (f[c].anim.stop(d), b = !1, f.splice(c, 1));
                (b || !d) && kb.dequeue(this, a)
            })
        }, finish: function(a) {
            return a !== !1 && (a = a || "fx"), this.each(function() {
                var b, c = kb._data(this), d = c[a + "queue"], e = c[a + "queueHooks"], f = kb.timers, g = d ? d.length : 0;
                for (c.finish = !0, kb.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--; )
                    f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1));
                for (b = 0; g > b; b++)
                    d[b] && d[b].finish && d[b].finish.call(this);
                delete c.finish
            })
        }}), kb.each({slideDown: S("show"), slideUp: S("hide"), slideToggle: S("toggle"), fadeIn: {opacity: "show"}, fadeOut: {opacity: "hide"}, fadeToggle: {opacity: "toggle"}}, function(a, b) {
        kb.fn[a] = function(a, c, d) {
            return this.animate(b, a, c, d)
        }
    }), kb.speed = function(a, b, c) {
        var d = a && "object" == typeof a ? kb.extend({}, a) : {complete: c || !c && b || kb.isFunction(a) && a, duration: a, easing: c && b || b && !kb.isFunction(b) && b};
        return d.duration = kb.fx.off ? 0 : "number" == typeof d.duration ? d.duration : d.duration in kb.fx.speeds ? kb.fx.speeds[d.duration] : kb.fx.speeds._default, (null == d.queue || d.queue === !0) && (d.queue = "fx"), d.old = d.complete, d.complete = function() {
            kb.isFunction(d.old) && d.old.call(this), d.queue && kb.dequeue(this, d.queue)
        }, d
    }, kb.easing = {linear: function(a) {
            return a
        }, swing: function(a) {
            return.5 - Math.cos(a * Math.PI) / 2
        }}, kb.timers = [], kb.fx = R.prototype.init, kb.fx.tick = function() {
        var a, c = kb.timers, d = 0;
        for ($c = kb.now(); d < c.length; d++)
            a = c[d], a() || c[d] !== a || c.splice(d--, 1);
        c.length || kb.fx.stop(), $c = b
    }, kb.fx.timer = function(a) {
        a() && kb.timers.push(a) && kb.fx.start()
    }, kb.fx.interval = 13, kb.fx.start = function() {
        _c || (_c = setInterval(kb.fx.tick, kb.fx.interval))
    }, kb.fx.stop = function() {
        clearInterval(_c), _c = null
    }, kb.fx.speeds = {slow: 600, fast: 200, _default: 400}, kb.fx.step = {}, kb.expr && kb.expr.filters && (kb.expr.filters.animated = function(a) {
        return kb.grep(kb.timers, function(b) {
            return a === b.elem
        }).length
    }), kb.fn.offset = function(a) {
        if (arguments.length)
            return a === b ? this : this.each(function(b) {
                kb.offset.setOffset(this, a, b)
            });
        var c, d, e = {top: 0, left: 0}, f = this[0], g = f && f.ownerDocument;
        if (g)
            return c = g.documentElement, kb.contains(c, f) ? (typeof f.getBoundingClientRect !== W && (e = f.getBoundingClientRect()), d = T(g), {top: e.top + (d.pageYOffset || c.scrollTop) - (c.clientTop || 0), left: e.left + (d.pageXOffset || c.scrollLeft) - (c.clientLeft || 0)}) : e
    }, kb.offset = {setOffset: function(a, b, c) {
            var d = kb.css(a, "position");
            "static" === d && (a.style.position = "relative");
            var e, f, g = kb(a), h = g.offset(), i = kb.css(a, "top"), j = kb.css(a, "left"), k = ("absolute" === d || "fixed" === d) && kb.inArray("auto", [i, j]) > -1, l = {}, m = {};
            k ? (m = g.position(), e = m.top, f = m.left) : (e = parseFloat(i) || 0, f = parseFloat(j) || 0), kb.isFunction(b) && (b = b.call(a, c, h)), null != b.top && (l.top = b.top - h.top + e), null != b.left && (l.left = b.left - h.left + f), "using"in b ? b.using.call(a, l) : g.css(l)
        }}, kb.fn.extend({position: function() {
            if (this[0]) {
                var a, b, c = {top: 0, left: 0}, d = this[0];
                return"fixed" === kb.css(d, "position") ? b = d.getBoundingClientRect() : (a = this.offsetParent(), b = this.offset(), kb.nodeName(a[0], "html") || (c = a.offset()), c.top += kb.css(a[0], "borderTopWidth", !0), c.left += kb.css(a[0], "borderLeftWidth", !0)), {top: b.top - c.top - kb.css(d, "marginTop", !0), left: b.left - c.left - kb.css(d, "marginLeft", !0)}
            }
        }, offsetParent: function() {
            return this.map(function() {
                for (var a = this.offsetParent || Z; a && !kb.nodeName(a, "html") && "static" === kb.css(a, "position"); )
                    a = a.offsetParent;
                return a || Z
            })
        }}), kb.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function(a, c) {
        var d = /Y/.test(c);
        kb.fn[a] = function(e) {
            return kb.access(this, function(a, e, f) {
                var g = T(a);
                return f === b ? g ? c in g ? g[c] : g.document.documentElement[e] : a[e] : void(g ? g.scrollTo(d ? kb(g).scrollLeft() : f, d ? f : kb(g).scrollTop()) : a[e] = f)
            }, a, e, arguments.length, null)
        }
    }), kb.each({Height: "height", Width: "width"}, function(a, c) {
        kb.each({padding: "inner" + a, content: c, "": "outer" + a}, function(d, e) {
            kb.fn[e] = function(e, f) {
                var g = arguments.length && (d || "boolean" != typeof e), h = d || (e === !0 || f === !0 ? "margin" : "border");
                return kb.access(this, function(c, d, e) {
                    var f;
                    return kb.isWindow(c) ? c.document.documentElement["client" + a] : 9 === c.nodeType ? (f = c.documentElement, Math.max(c.body["scroll" + a], f["scroll" + a], c.body["offset" + a], f["offset" + a], f["client" + a])) : e === b ? kb.css(c, d, h) : kb.style(c, d, e, h)
                }, c, g ? e : b, g, null)
            }
        })
    }), kb.fn.size = function() {
        return this.length
    }, kb.fn.andSelf = kb.fn.addBack, "object" == typeof module && module && "object" == typeof module.exports ? module.exports = kb : (a.jQuery = a.$ = kb, "function" == typeof define && define.amd && define("jquery", [], function() {
        return kb
    }))
}(window), "undefined" == typeof jQuery)
    throw new Error("Bootstrap's JavaScript requires jQuery");
+function(a) {
    "use strict";
    function b(b) {
        return this.each(function() {
            var d = a(this), e = d.data("bs.carousel"), f = a.extend({}, c.DEFAULTS, d.data(), "object" == typeof b && b), g = "string" == typeof b ? b : f.slide;
            e || d.data("bs.carousel", e = new c(this, f)), "number" == typeof b ? e.to(b) : g ? e[g]() : f.interval && e.pause().cycle()
        })
    }
    var c = function(b, c) {
        this.$element = a(b).on("keydown.bs.carousel", a.proxy(this.keydown, this)), this.$indicators = this.$element.find(".bs-carousel-indicators"), this.options = c, this.paused = this.sliding = this.interval = this.$active = this.$items = null, "hover" == this.options.pause && this.$element.on("mouseenter.bs.carousel", a.proxy(this.pause, this)).on("mouseleave.bs.carousel", a.proxy(this.cycle, this))
    };
    c.VERSION = "3.2.0", c.DEFAULTS = {interval: 5e3, pause: "hover", wrap: !0}, c.prototype.keydown = function(a) {
        switch (a.which) {
            case 37:
                this.prev();
                break;
            case 39:
                this.next();
                break;
            default:
                return
        }
        a.preventDefault()
    }, c.prototype.cycle = function(b) {
        return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this
    }, c.prototype.getItemIndex = function(a) {
        return this.$items = a.parent().children(".bs-carousel-item"), this.$items.index(a || this.$active)
    }, c.prototype.to = function(b) {
        var c = this, d = this.getItemIndex(this.$active = this.$element.find(".bs-carousel-item.active"));
        return b > this.$items.length - 1 || 0 > b ? void 0 : this.sliding ? this.$element.one("slid.bs.carousel", function() {
            c.to(b)
        }) : d == b ? this.pause().cycle() : this.slide(b > d ? "next" : "prev", a(this.$items[b]))
    }, c.prototype.pause = function(b) {
        return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this
    }, c.prototype.next = function() {
        return this.sliding ? void 0 : this.slide("next")
    }, c.prototype.prev = function() {
        return this.sliding ? void 0 : this.slide("prev")
    }, c.prototype.slide = function(b, c) {
        var d = this.$element.find(".bs-carousel-item.active"), e = c || d[b](), f = this.interval, g = "next" == b ? "left" : "right", h = "next" == b ? "first" : "last", i = this;
        if (!e.length) {
            if (!this.options.wrap)
                return;
            e = this.$element.find(".bs-carousel-item")[h]()
        }
        if (e.hasClass("active"))
            return this.sliding = !1;
        var j = e[0], k = a.Event("slide.bs.carousel", {relatedTarget: j, direction: g});
        if (this.$element.trigger(k), !k.isDefaultPrevented()) {
            if (this.sliding = !0, f && this.pause(), this.$indicators.length) {
                this.$indicators.find(".active").removeClass("active");
                var l = a(this.$indicators.children()[this.getItemIndex(e)]);
                l && l.addClass("active")
            }
            var m = a.Event("slid.bs.carousel", {relatedTarget: j, direction: g});
            return a.support.transition && this.$element.hasClass("slide") ? (e.addClass(b), e[0].offsetWidth, d.addClass(g), e.addClass(g), d.one("bsTransitionEnd", function() {
                e.removeClass([b, g].join(" ")).addClass("active"), d.removeClass(["active", g].join(" ")), i.sliding = !1, setTimeout(function() {
                    i.$element.trigger(m)
                }, 0)
            }).emulateTransitionEnd(1e3 * d.css("transition-duration").slice(0, -1))) : (d.removeClass("active"), e.addClass("active"), this.sliding = !1, this.$element.trigger(m)), f && this.cycle(), this
        }
    };
    var d = a.fn.carousel;
    a.fn.carousel = b, a.fn.carousel.Constructor = c, a.fn.carousel.noConflict = function() {
        return a.fn.carousel = d, this
    }, a(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]", function(c) {
        var d, e = a(this), f = a(e.attr("data-target") || (d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, ""));
        if (f.hasClass("bs-carousel")) {
            var g = a.extend({}, f.data(), e.data()), h = e.attr("data-slide-to");
            h && (g.interval = !1), b.call(f, g), h && f.data("bs.carousel").to(h), c.preventDefault()
        }
    }), a(window).on("load", function() {
        a('[data-ride="bs-carousel"]').each(function() {
            var c = a(this);
            b.call(c, c.data())
        })
    })
}(jQuery), +function(a) {
    "use strict";
    function b(b) {
        b && 3 === b.which || (a(e).remove(), a(f).each(function() {
            var d = c(a(this)), e = {relatedTarget: this};
            d.hasClass("open") && (d.trigger(b = a.Event("hide.bs.dropdown", e)), b.isDefaultPrevented() || d.removeClass("open").trigger("hidden.bs.dropdown", e))
        }))
    }
    function c(b) {
        var c = b.attr("data-target");
        c || (c = b.attr("href"), c = c && /#[A-Za-z]/.test(c) && c.replace(/.*(?=#[^\s]*$)/, ""));
        var d = c && a(c);
        return d && d.length ? d : b.parent()
    }
    function d(b) {
        return this.each(function() {
            var c = a(this), d = c.data("bs.dropdown");
            d || c.data("bs.dropdown", d = new g(this)), "string" == typeof b && d[b].call(c)
        })
    }
    var e = ".bs-dropdown-backdrop", f = '[data-toggle="bs-dropdown"]', g = function(b) {
        a(b).on("click.bs.dropdown", this.toggle)
    };
    g.VERSION = "3.2.0", g.prototype.toggle = function(d) {
        var e = a(this);
        if (!e.is(".disabled, :disabled")) {
            var f = c(e), g = f.hasClass("open");
            if (b(), !g) {
                "ontouchstart"in document.documentElement && !f.closest(".bs-navbar-nav").length && a('<div class="bs-dropdown-backdrop"/>').insertAfter(a(this)).on("click", b);
                var h = {relatedTarget: this};
                if (f.trigger(d = a.Event("show.bs.dropdown", h)), d.isDefaultPrevented())
                    return;
                e.trigger("focus"), f.toggleClass("open").trigger("shown.bs.dropdown", h)
            }
            return!1
        }
    }, g.prototype.keydown = function(b) {
        if (/(38|40|27)/.test(b.keyCode)) {
            var d = a(this);
            if (b.preventDefault(), b.stopPropagation(), !d.is(".disabled, :disabled")) {
                var e = c(d), g = e.hasClass("open");
                if (!g || g && 27 == b.keyCode)
                    return 27 == b.which && e.find(f).trigger("focus"), d.trigger("click");
                var h = " li:not(.divider):visible a", i = e.find('[role="menu"]' + h + ', [role="listbox"]' + h);
                if (i.length) {
                    var j = i.index(i.filter(":focus"));
                    38 == b.keyCode && j > 0 && j--, 40 == b.keyCode && j < i.length - 1 && j++, ~j || (j = 0), i.eq(j).trigger("focus")
                }
            }
        }
    };
    var h = a.fn.dropdown;
    a.fn.dropdown = d, a.fn.dropdown.Constructor = g, a.fn.dropdown.noConflict = function() {
        return a.fn.dropdown = h, this
    }, a(document).on("click.bs.dropdown.data-api", b).on("click.bs.dropdown.data-api", ".bs-dropdown form", function(a) {
        a.stopPropagation()
    }).on("click.bs.dropdown.data-api", f, g.prototype.toggle).on("keydown.bs.dropdown.data-api", f + ', [role="menu"], [role="listbox"]', g.prototype.keydown)
}(jQuery), +function(a) {
    "use strict";
    function b(b, d) {
        return this.each(function() {
            var e = a(this), f = e.data("bs.modal"), g = a.extend({}, c.DEFAULTS, e.data(), "object" == typeof b && b);
            f || e.data("bs.modal", f = new c(this, g)), "string" == typeof b ? f[b](d) : g.show && f.show(d)
        })
    }
    var c = function(b, c) {
        this.options = c, this.$body = a(document.body), this.$element = a(b), this.$backdrop = this.isShown = null, this.scrollbarWidth = 0, this.options.remote && this.$element.find(".bs-modal-content").load(this.options.remote, a.proxy(function() {
            this.$element.trigger("loaded.bs.modal")
        }, this))
    };
    c.VERSION = "3.2.0", c.DEFAULTS = {backdrop: !0, keyboard: !0, show: !0}, c.prototype.toggle = function(a) {
        return this.isShown ? this.hide() : this.show(a)
    }, c.prototype.show = function(b) {
        var c = this, d = a.Event("show.bs.modal", {relatedTarget: b});
        this.$element.trigger(d), this.isShown || d.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.$body.addClass("bs-modal-open"), this.setScrollbar(), this.escape(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="bs-modal"]', a.proxy(this.hide, this)), this.backdrop(function() {
            var d = a.support.transition && c.$element.hasClass("fade");
            c.$element.parent().length || c.$element.appendTo(c.$body), c.$element.show().scrollTop(0), d && c.$element[0].offsetWidth, c.$element.addClass("in").attr("aria-hidden", !1), c.enforceFocus();
            var e = a.Event("shown.bs.modal", {relatedTarget: b});
            d ? c.$element.find(".bs-modal-dialog").one("bsTransitionEnd", function() {
                c.$element.trigger("focus").trigger(e)
            }).emulateTransitionEnd(300) : c.$element.trigger("focus").trigger(e)
        }))
    }, c.prototype.hide = function(b) {
        b && b.preventDefault(), b = a.Event("hide.bs.modal"), this.$element.trigger(b), this.isShown && !b.isDefaultPrevented() && (this.isShown = !1, this.$body.removeClass("bs-modal-open"), this.resetScrollbar(), this.escape(), a(document).off("focusin.bs.modal"), this.$element.removeClass("in").attr("aria-hidden", !0).off("click.dismiss.bs.modal"), a.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", a.proxy(this.hideModal, this)).emulateTransitionEnd(300) : this.hideModal())
    }, c.prototype.enforceFocus = function() {
        a(document).off("focusin.bs.modal").on("focusin.bs.modal", a.proxy(function(a) {
            this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.trigger("focus")
        }, this))
    }, c.prototype.escape = function() {
        this.isShown && this.options.keyboard ? this.$element.on("keyup.dismiss.bs.modal", a.proxy(function(a) {
            27 == a.which && this.hide()
        }, this)) : this.isShown || this.$element.off("keyup.dismiss.bs.modal")
    }, c.prototype.hideModal = function() {
        var a = this;
        this.$element.hide(), this.backdrop(function() {
            a.$element.trigger("hidden.bs.modal")
        })
    }, c.prototype.removeBackdrop = function() {
        this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
    }, c.prototype.backdrop = function(b) {
        var c = this, d = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var e = a.support.transition && d;
            if (this.$backdrop = a('<div class="bs-modal-backdrop ' + d + '" />').appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", a.proxy(function(a) {
                a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus.call(this.$element[0]) : this.hide.call(this))
            }, this)), e && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !b)
                return;
            e ? this.$backdrop.one("bsTransitionEnd", b).emulateTransitionEnd(150) : b()
        } else if (!this.isShown && this.$backdrop) {
            this.$backdrop.removeClass("in");
            var f = function() {
                c.removeBackdrop(), b && b()
            };
            a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", f).emulateTransitionEnd(150) : f()
        } else
            b && b()
    }, c.prototype.checkScrollbar = function() {
        document.body.clientWidth >= window.innerWidth || (this.scrollbarWidth = this.scrollbarWidth || this.measureScrollbar())
    }, c.prototype.setScrollbar = function() {
        var a = parseInt(this.$body.css("padding-right") || 0, 10);
        this.scrollbarWidth && this.$body.css("padding-right", a + this.scrollbarWidth)
    }, c.prototype.resetScrollbar = function() {
        this.$body.css("padding-right", "")
    }, c.prototype.measureScrollbar = function() {
        var a = document.createElement("div");
        a.className = "bs-modal-scrollbar-measure", this.$body.append(a);
        var b = a.offsetWidth - a.clientWidth;
        return this.$body[0].removeChild(a), b
    };
    var d = a.fn.modal;
    a.fn.modal = b, a.fn.modal.Constructor = c, a.fn.modal.noConflict = function() {
        return a.fn.modal = d, this
    }, a(document).on("click.bs.modal.data-api", '[data-toggle="bs-modal"]', function(c) {
        var d = a(this), e = d.attr("href"), f = a(d.attr("data-target") || e && e.replace(/.*(?=#[^\s]+$)/, "")), g = f.data("bs.modal") ? "toggle" : a.extend({remote: !/#/.test(e) && e}, f.data(), d.data());
        d.is("a") && c.preventDefault(), f.one("show.bs.modal", function(a) {
            a.isDefaultPrevented() || f.one("hidden.bs.modal", function() {
                d.is(":visible") && d.trigger("focus")
            })
        }), b.call(f, g, this)
    })
}(jQuery), +function(a) {
    "use strict";
    function b(b) {
        return this.each(function() {
            var d = a(this), e = d.data("bs.tooltip"), f = "object" == typeof b && b;
            (e || "destroy" != b) && (e || d.data("bs.tooltip", e = new c(this, f)), "string" == typeof b && e[b]())
        })
    }
    var c = function(a, b) {
        this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null, this.init("tooltip", a, b)
    };
    c.VERSION = "3.2.0", c.DEFAULTS = {animation: !0, placement: "top", selector: !1, template: '<div class="bs-tooltip" role="tooltip"><div class="bs-tooltip-arrow"></div><div class="bs-tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: !1, container: !1, viewport: {selector: "body", padding: 0}}, c.prototype.init = function(b, c, d) {
        this.enabled = !0, this.type = b, this.$element = a(c), this.options = this.getOptions(d), this.$viewport = this.options.viewport && a(this.options.viewport.selector || this.options.viewport);
        for (var e = this.options.trigger.split(" "), f = e.length; f--; ) {
            var g = e[f];
            if ("click" == g)
                this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this));
            else if ("manual" != g) {
                var h = "hover" == g ? "mouseenter" : "focusin", i = "hover" == g ? "mouseleave" : "focusout";
                this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = a.extend({}, this.options, {trigger: "manual", selector: ""}) : this.fixTitle()
    }, c.prototype.getDefaults = function() {
        return c.DEFAULTS
    }, c.prototype.getOptions = function(b) {
        return b = a.extend({}, this.getDefaults(), this.$element.data(), b), b.delay && "number" == typeof b.delay && (b.delay = {show: b.delay, hide: b.delay}), b
    }, c.prototype.getDelegateOptions = function() {
        var b = {}, c = this.getDefaults();
        return this._options && a.each(this._options, function(a, d) {
            c[a] != d && (b[a] = d)
        }), b
    }, c.prototype.enter = function(b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
        return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), clearTimeout(c.timeout), c.hoverState = "in", c.options.delay && c.options.delay.show ? void(c.timeout = setTimeout(function() {
            "in" == c.hoverState && c.show()
        }, c.options.delay.show)) : c.show()
    }, c.prototype.leave = function(b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
        return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), clearTimeout(c.timeout), c.hoverState = "out", c.options.delay && c.options.delay.hide ? void(c.timeout = setTimeout(function() {
            "out" == c.hoverState && c.hide()
        }, c.options.delay.hide)) : c.hide()
    }, c.prototype.show = function() {
        var b = a.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(b);
            var c = a.contains(document.documentElement, this.$element[0]);
            if (b.isDefaultPrevented() || !c)
                return;
            var d = this, e = this.tip(), f = this.getUID(this.type);
            this.setContent(), e.attr("id", f), this.$element.attr("aria-describedby", f), this.options.animation && e.addClass("fade");
            var g = "function" == typeof this.options.placement ? this.options.placement.call(this, e[0], this.$element[0]) : this.options.placement, h = /\s?auto?\s?/i, i = h.test(g);
            i && (g = g.replace(h, "") || "top"), e.detach().css({top: 0, left: 0, display: "block"}).addClass(g).data("bs." + this.type, this), this.options.container ? e.appendTo(this.options.container) : e.insertAfter(this.$element);
            var j = this.getPosition(), k = e[0].offsetWidth, l = e[0].offsetHeight;
            if (i) {
                var m = g, n = this.$element.parent(), o = this.getPosition(n);
                g = "bottom" == g && j.top + j.height + l - o.scroll > o.height ? "top" : "top" == g && j.top - o.scroll - l < 0 ? "bottom" : "right" == g && j.right + k > o.width ? "left" : "left" == g && j.left - k < o.left ? "right" : g, e.removeClass(m).addClass(g)
            }
            var p = this.getCalculatedOffset(g, j, k, l);
            this.applyPlacement(p, g);
            var q = function() {
                d.$element.trigger("shown.bs." + d.type), d.hoverState = null
            };
            a.support.transition && this.$tip.hasClass("fade") ? e.one("bsTransitionEnd", q).emulateTransitionEnd(150) : q()
        }
    }, c.prototype.applyPlacement = function(b, c) {
        var d = this.tip(), e = d[0].offsetWidth, f = d[0].offsetHeight, g = parseInt(d.css("margin-top"), 10), h = parseInt(d.css("margin-left"), 10);
        isNaN(g) && (g = 0), isNaN(h) && (h = 0), b.top = b.top + g, b.left = b.left + h, a.offset.setOffset(d[0], a.extend({using: function(a) {
                d.css({top: Math.round(a.top), left: Math.round(a.left)})
            }}, b), 0), d.addClass("in");
        var i = d[0].offsetWidth, j = d[0].offsetHeight;
        "top" == c && j != f && (b.top = b.top + f - j);
        var k = this.getViewportAdjustedDelta(c, b, i, j);
        k.left ? b.left += k.left : b.top += k.top;
        var l = k.left ? 2 * k.left - e + i : 2 * k.top - f + j, m = k.left ? "left" : "top", n = k.left ? "offsetWidth" : "offsetHeight";
        d.offset(b), this.replaceArrow(l, d[0][n], m)
    }, c.prototype.replaceArrow = function(a, b, c) {
        this.arrow().css(c, a ? 50 * (1 - a / b) + "%" : "")
    }, c.prototype.setContent = function() {
        var a = this.tip(), b = this.getTitle();
        a.find(".bs-tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right")
    }, c.prototype.hide = function() {
        function b() {
            "in" != c.hoverState && d.detach(), c.$element.trigger("hidden.bs." + c.type)
        }
        var c = this, d = this.tip(), e = a.Event("hide.bs." + this.type);
        return this.$element.removeAttr("aria-describedby"), this.$element.trigger(e), e.isDefaultPrevented() ? void 0 : (d.removeClass("in"), a.support.transition && this.$tip.hasClass("fade") ? d.one("bsTransitionEnd", b).emulateTransitionEnd(150) : b(), this.hoverState = null, this)
    }, c.prototype.fixTitle = function() {
        var a = this.$element;
        (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "")
    }, c.prototype.hasContent = function() {
        return this.getTitle()
    }, c.prototype.getPosition = function(b) {
        b = b || this.$element;
        var c = b[0], d = "BODY" == c.tagName;
        return a.extend({}, "function" == typeof c.getBoundingClientRect ? c.getBoundingClientRect() : null, {scroll: d ? document.documentElement.scrollTop || document.body.scrollTop : b.scrollTop(), width: d ? a(window).width() : b.outerWidth(), height: d ? a(window).height() : b.outerHeight()}, d ? {top: 0, left: 0} : b.offset())
    }, c.prototype.getCalculatedOffset = function(a, b, c, d) {
        return"bottom" == a ? {top: b.top + b.height, left: b.left + b.width / 2 - c / 2} : "top" == a ? {top: b.top - d, left: b.left + b.width / 2 - c / 2} : "left" == a ? {top: b.top + b.height / 2 - d / 2, left: b.left - c} : {top: b.top + b.height / 2 - d / 2, left: b.left + b.width}
    }, c.prototype.getViewportAdjustedDelta = function(a, b, c, d) {
        var e = {top: 0, left: 0};
        if (!this.$viewport)
            return e;
        var f = this.options.viewport && this.options.viewport.padding || 0, g = this.getPosition(this.$viewport);
        if (/right|left/.test(a)) {
            var h = b.top - f - g.scroll, i = b.top + f - g.scroll + d;
            h < g.top ? e.top = g.top - h : i > g.top + g.height && (e.top = g.top + g.height - i)
        } else {
            var j = b.left - f, k = b.left + f + c;
            j < g.left ? e.left = g.left - j : k > g.width && (e.left = g.left + g.width - k)
        }
        return e
    }, c.prototype.getTitle = function() {
        var a, b = this.$element, c = this.options;
        return a = b.attr("data-original-title") || ("function" == typeof c.title ? c.title.call(b[0]) : c.title)
    }, c.prototype.getUID = function(a) {
        do
            a += ~~(1e6 * Math.random());
        while (document.getElementById(a));
        return a
    }, c.prototype.tip = function() {
        return this.$tip = this.$tip || a(this.options.template)
    }, c.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".bs-tooltip-arrow")
    }, c.prototype.validate = function() {
        this.$element[0].parentNode || (this.hide(), this.$element = null, this.options = null)
    }, c.prototype.enable = function() {
        this.enabled = !0
    }, c.prototype.disable = function() {
        this.enabled = !1
    }, c.prototype.toggleEnabled = function() {
        this.enabled = !this.enabled
    }, c.prototype.toggle = function(b) {
        var c = this;
        b && (c = a(b.currentTarget).data("bs." + this.type), c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c))), c.tip().hasClass("in") ? c.leave(c) : c.enter(c)
    }, c.prototype.destroy = function() {
        clearTimeout(this.timeout), this.hide().$element.off("." + this.type).removeData("bs." + this.type)
    };
    var d = a.fn.tooltip;
    a.fn.tooltip = b, a.fn.tooltip.Constructor = c, a.fn.tooltip.noConflict = function() {
        return a.fn.tooltip = d, this
    }
}(jQuery), +function(a) {
    "use strict";
    function b(b) {
        return this.each(function() {
            var d = a(this), e = d.data("bs.tab");
            e || d.data("bs.tab", e = new c(this)), "string" == typeof b && e[b]()
        })
    }
    var c = function(b) {
        this.element = a(b)
    };
    c.VERSION = "3.2.0", c.prototype.show = function() {
        var b = this.element, c = b.closest("ul:not(.bs-dropdown-menu)"), d = b.data("target");
        if (d || (d = b.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, "")), !b.parent("li").hasClass("active")) {
            var e = c.find(".active:last a")[0], f = a.Event("show.bs.tab", {relatedTarget: e});
            if (b.trigger(f), !f.isDefaultPrevented()) {
                var g = a(d);
                this.activate(b.closest("li"), c), this.activate(g, g.parent(), function() {
                    b.trigger({type: "shown.bs.tab", relatedTarget: e})
                })
            }
        }
    }, c.prototype.activate = function(b, c, d) {
        function e() {
            f.removeClass("active").find("> .bs-dropdown-menu > .active").removeClass("active"), b.addClass("active"), g ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"), b.parent(".bs-dropdown-menu") && b.closest("li.bs-dropdown").addClass("active"), d && d()
        }
        var f = c.find("> .active"), g = d && a.support.transition && f.hasClass("fade");
        g ? f.one("bsTransitionEnd", e).emulateTransitionEnd(150) : e(), f.removeClass("in")
    };
    var d = a.fn.tab;
    a.fn.tab = b, a.fn.tab.Constructor = c, a.fn.tab.noConflict = function() {
        return a.fn.tab = d, this
    }, a(document).on("click.bs.tab.data-api", '[data-toggle="bs-tab"], [data-toggle="bs-pill"]', function(c) {
        c.preventDefault(), b.call(a(this), "show")
    })
}(jQuery), +function(a) {
    "use strict";
    function b() {
        var a = document.createElement("bootstrap"), b = {WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd otransitionend", transition: "transitionend"};
        for (var c in b)
            if (void 0 !== a.style[c])
                return{end: b[c]};
        return!1
    }
    a.fn.emulateTransitionEnd = function(b) {
        var c = !1, d = this;
        a(this).one("bsTransitionEnd", function() {
            c = !0
        });
        var e = function() {
            c || a(d).trigger(a.support.transition.end)
        };
        return setTimeout(e, b), this
    }, a(function() {
        a.support.transition = b(), a.support.transition && (a.event.special.bsTransitionEnd = {bindType: a.support.transition.end, delegateType: a.support.transition.end, handle: function(b) {
                return a(b.target).is(this) ? b.handleObj.handler.apply(this, arguments) : void 0
            }})
    })
}(jQuery);
var QRCode;
!function() {
    function a(a) {
        this.mode = j.MODE_8BIT_BYTE, this.data = a, this.parsedData = [];
        for (var b = [], c = 0, d = this.data.length; d > c; c++) {
            var e = this.data.charCodeAt(c);
            e > 65536 ? (b[0] = 240 | (1835008 & e) >>> 18, b[1] = 128 | (258048 & e) >>> 12, b[2] = 128 | (4032 & e) >>> 6, b[3] = 128 | 63 & e) : e > 2048 ? (b[0] = 224 | (61440 & e) >>> 12, b[1] = 128 | (4032 & e) >>> 6, b[2] = 128 | 63 & e) : e > 128 ? (b[0] = 192 | (1984 & e) >>> 6, b[1] = 128 | 63 & e) : b[0] = e, this.parsedData = this.parsedData.concat(b)
        }
        this.parsedData.length != this.data.length && (this.parsedData.unshift(191), this.parsedData.unshift(187), this.parsedData.unshift(239))
    }
    function b(a, b) {
        this.typeNumber = a, this.errorCorrectLevel = b, this.modules = null, this.moduleCount = 0, this.dataCache = null, this.dataList = []
    }
    function c(a, b) {
        if (void 0 == a.length)
            throw new Error(a.length + "/" + b);
        for (var c = 0; c < a.length && 0 == a[c]; )
            c++;
        this.num = new Array(a.length - c + b);
        for (var d = 0; d < a.length - c; d++)
            this.num[d] = a[d + c]
    }
    function d(a, b) {
        this.totalCount = a, this.dataCount = b
    }
    function e() {
        this.buffer = [], this.length = 0
    }
    function f() {
        return"undefined" != typeof CanvasRenderingContext2D
    }
    function g() {
        var a = !1, b = navigator.userAgent;
        return/android/i.test(b) && (a = !0, aMat = b.toString().match(/android ([0-9]\.[0-9])/i), aMat && aMat[1] && (a = parseFloat(aMat[1]))), a
    }
    function h(a, b) {
        for (var c = 1, d = i(a), e = 0, f = p.length; f >= e; e++) {
            var g = 0;
            switch (b) {
                case k.L:
                    g = p[e][0];
                    break;
                case k.M:
                    g = p[e][1];
                    break;
                case k.Q:
                    g = p[e][2];
                    break;
                case k.H:
                    g = p[e][3]
            }
            if (g >= d)
                break;
            c++
        }
        if (c > p.length)
            throw new Error("Too long data");
        return c
    }
    function i(a) {
        var b = encodeURI(a).toString().replace(/\%[0-9a-fA-F]{2}/g, "a");
        return b.length + (b.length != a ? 3 : 0)
    }
    a.prototype = {getLength: function() {
            return this.parsedData.length
        }, write: function(a) {
            for (var b = 0, c = this.parsedData.length; c > b; b++)
                a.put(this.parsedData[b], 8)
        }}, b.prototype = {addData: function(b) {
            var c = new a(b);
            this.dataList.push(c), this.dataCache = null
        }, isDark: function(a, b) {
            if (0 > a || this.moduleCount <= a || 0 > b || this.moduleCount <= b)
                throw new Error(a + "," + b);
            return this.modules[a][b]
        }, getModuleCount: function() {
            return this.moduleCount
        }, make: function() {
            this.makeImpl(!1, this.getBestMaskPattern())
        }, makeImpl: function(a, c) {
            this.moduleCount = 4 * this.typeNumber + 17, this.modules = new Array(this.moduleCount);
            for (var d = 0; d < this.moduleCount; d++) {
                this.modules[d] = new Array(this.moduleCount);
                for (var e = 0; e < this.moduleCount; e++)
                    this.modules[d][e] = null
            }
            this.setupPositionProbePattern(0, 0), this.setupPositionProbePattern(this.moduleCount - 7, 0), this.setupPositionProbePattern(0, this.moduleCount - 7), this.setupPositionAdjustPattern(), this.setupTimingPattern(), this.setupTypeInfo(a, c), this.typeNumber >= 7 && this.setupTypeNumber(a), null == this.dataCache && (this.dataCache = b.createData(this.typeNumber, this.errorCorrectLevel, this.dataList)), this.mapData(this.dataCache, c)
        }, setupPositionProbePattern: function(a, b) {
            for (var c = -1; 7 >= c; c++)
                if (!(-1 >= a + c || this.moduleCount <= a + c))
                    for (var d = -1; 7 >= d; d++)
                        -1 >= b + d || this.moduleCount <= b + d || (this.modules[a + c][b + d] = c >= 0 && 6 >= c && (0 == d || 6 == d) || d >= 0 && 6 >= d && (0 == c || 6 == c) || c >= 2 && 4 >= c && d >= 2 && 4 >= d ? !0 : !1)
        }, getBestMaskPattern: function() {
            for (var a = 0, b = 0, c = 0; 8 > c; c++) {
                this.makeImpl(!0, c);
                var d = m.getLostPoint(this);
                (0 == c || a > d) && (a = d, b = c)
            }
            return b
        }, createMovieClip: function(a, b, c) {
            var d = a.createEmptyMovieClip(b, c), e = 1;
            this.make();
            for (var f = 0; f < this.modules.length; f++)
                for (var g = f * e, h = 0; h < this.modules[f].length; h++) {
                    var i = h * e, j = this.modules[f][h];
                    j && (d.beginFill(0, 100), d.moveTo(i, g), d.lineTo(i + e, g), d.lineTo(i + e, g + e), d.lineTo(i, g + e), d.endFill())
                }
            return d
        }, setupTimingPattern: function() {
            for (var a = 8; a < this.moduleCount - 8; a++)
                null == this.modules[a][6] && (this.modules[a][6] = 0 == a % 2);
            for (var b = 8; b < this.moduleCount - 8; b++)
                null == this.modules[6][b] && (this.modules[6][b] = 0 == b % 2)
        }, setupPositionAdjustPattern: function() {
            for (var a = m.getPatternPosition(this.typeNumber), b = 0; b < a.length; b++)
                for (var c = 0; c < a.length; c++) {
                    var d = a[b], e = a[c];
                    if (null == this.modules[d][e])
                        for (var f = -2; 2 >= f; f++)
                            for (var g = -2; 2 >= g; g++)
                                this.modules[d + f][e + g] = -2 == f || 2 == f || -2 == g || 2 == g || 0 == f && 0 == g ? !0 : !1
                }
        }, setupTypeNumber: function(a) {
            for (var b = m.getBCHTypeNumber(this.typeNumber), c = 0; 18 > c; c++) {
                var d = !a && 1 == (1 & b >> c);
                this.modules[Math.floor(c / 3)][c % 3 + this.moduleCount - 8 - 3] = d
            }
            for (var c = 0; 18 > c; c++) {
                var d = !a && 1 == (1 & b >> c);
                this.modules[c % 3 + this.moduleCount - 8 - 3][Math.floor(c / 3)] = d
            }
        }, setupTypeInfo: function(a, b) {
            for (var c = this.errorCorrectLevel << 3 | b, d = m.getBCHTypeInfo(c), e = 0; 15 > e; e++) {
                var f = !a && 1 == (1 & d >> e);
                6 > e ? this.modules[e][8] = f : 8 > e ? this.modules[e + 1][8] = f : this.modules[this.moduleCount - 15 + e][8] = f
            }
            for (var e = 0; 15 > e; e++) {
                var f = !a && 1 == (1 & d >> e);
                8 > e ? this.modules[8][this.moduleCount - e - 1] = f : 9 > e ? this.modules[8][15 - e - 1 + 1] = f : this.modules[8][15 - e - 1] = f
            }
            this.modules[this.moduleCount - 8][8] = !a
        }, mapData: function(a, b) {
            for (var c = -1, d = this.moduleCount - 1, e = 7, f = 0, g = this.moduleCount - 1; g > 0; g -= 2)
                for (6 == g && g--; ; ) {
                    for (var h = 0; 2 > h; h++)
                        if (null == this.modules[d][g - h]) {
                            var i = !1;
                            f < a.length && (i = 1 == (1 & a[f] >>> e));
                            var j = m.getMask(b, d, g - h);
                            j && (i = !i), this.modules[d][g - h] = i, e--, -1 == e && (f++, e = 7)
                        }
                    if (d += c, 0 > d || this.moduleCount <= d) {
                        d -= c, c = -c;
                        break
                    }
                }
        }}, b.PAD0 = 236, b.PAD1 = 17, b.createData = function(a, c, f) {
        for (var g = d.getRSBlocks(a, c), h = new e, i = 0; i < f.length; i++) {
            var j = f[i];
            h.put(j.mode, 4), h.put(j.getLength(), m.getLengthInBits(j.mode, a)), j.write(h)
        }
        for (var k = 0, i = 0; i < g.length; i++)
            k += g[i].dataCount;
        if (h.getLengthInBits() > 8 * k)
            throw new Error("code length overflow. (" + h.getLengthInBits() + ">" + 8 * k + ")");
        for (h.getLengthInBits() + 4 <= 8 * k && h.put(0, 4); 0 != h.getLengthInBits() % 8; )
            h.putBit(!1);
        for (; !(h.getLengthInBits() >= 8 * k) && (h.put(b.PAD0, 8), !(h.getLengthInBits() >= 8 * k)); )
            h.put(b.PAD1, 8);
        return b.createBytes(h, g)
    }, b.createBytes = function(a, b) {
        for (var d = 0, e = 0, f = 0, g = new Array(b.length), h = new Array(b.length), i = 0; i < b.length; i++) {
            var j = b[i].dataCount, k = b[i].totalCount - j;
            e = Math.max(e, j), f = Math.max(f, k), g[i] = new Array(j);
            for (var l = 0; l < g[i].length; l++)
                g[i][l] = 255 & a.buffer[l + d];
            d += j;
            var n = m.getErrorCorrectPolynomial(k), o = new c(g[i], n.getLength() - 1), p = o.mod(n);
            h[i] = new Array(n.getLength() - 1);
            for (var l = 0; l < h[i].length; l++) {
                var q = l + p.getLength() - h[i].length;
                h[i][l] = q >= 0 ? p.get(q) : 0
            }
        }
        for (var r = 0, l = 0; l < b.length; l++)
            r += b[l].totalCount;
        for (var s = new Array(r), t = 0, l = 0; e > l; l++)
            for (var i = 0; i < b.length; i++)
                l < g[i].length && (s[t++] = g[i][l]);
        for (var l = 0; f > l; l++)
            for (var i = 0; i < b.length; i++)
                l < h[i].length && (s[t++] = h[i][l]);
        return s
    };
    for (var j = {MODE_NUMBER: 1, MODE_ALPHA_NUM: 2, MODE_8BIT_BYTE: 4, MODE_KANJI: 8}, k = {L: 1, M: 0, Q: 3, H: 2}, l = {PATTERN000: 0, PATTERN001: 1, PATTERN010: 2, PATTERN011: 3, PATTERN100: 4, PATTERN101: 5, PATTERN110: 6, PATTERN111: 7}, m = {PATTERN_POSITION_TABLE: [[], [6, 18], [6, 22], [6, 26], [6, 30], [6, 34], [6, 22, 38], [6, 24, 42], [6, 26, 46], [6, 28, 50], [6, 30, 54], [6, 32, 58], [6, 34, 62], [6, 26, 46, 66], [6, 26, 48, 70], [6, 26, 50, 74], [6, 30, 54, 78], [6, 30, 56, 82], [6, 30, 58, 86], [6, 34, 62, 90], [6, 28, 50, 72, 94], [6, 26, 50, 74, 98], [6, 30, 54, 78, 102], [6, 28, 54, 80, 106], [6, 32, 58, 84, 110], [6, 30, 58, 86, 114], [6, 34, 62, 90, 118], [6, 26, 50, 74, 98, 122], [6, 30, 54, 78, 102, 126], [6, 26, 52, 78, 104, 130], [6, 30, 56, 82, 108, 134], [6, 34, 60, 86, 112, 138], [6, 30, 58, 86, 114, 142], [6, 34, 62, 90, 118, 146], [6, 30, 54, 78, 102, 126, 150], [6, 24, 50, 76, 102, 128, 154], [6, 28, 54, 80, 106, 132, 158], [6, 32, 58, 84, 110, 136, 162], [6, 26, 54, 82, 110, 138, 166], [6, 30, 58, 86, 114, 142, 170]], G15: 1335, G18: 7973, G15_MASK: 21522, getBCHTypeInfo: function(a) {
            for (var b = a << 10; m.getBCHDigit(b) - m.getBCHDigit(m.G15) >= 0; )
                b ^= m.G15 << m.getBCHDigit(b) - m.getBCHDigit(m.G15);
            return(a << 10 | b) ^ m.G15_MASK
        }, getBCHTypeNumber: function(a) {
            for (var b = a << 12; m.getBCHDigit(b) - m.getBCHDigit(m.G18) >= 0; )
                b ^= m.G18 << m.getBCHDigit(b) - m.getBCHDigit(m.G18);
            return a << 12 | b
        }, getBCHDigit: function(a) {
            for (var b = 0; 0 != a; )
                b++, a >>>= 1;
            return b
        }, getPatternPosition: function(a) {
            return m.PATTERN_POSITION_TABLE[a - 1]
        }, getMask: function(a, b, c) {
            switch (a) {
                case l.PATTERN000:
                    return 0 == (b + c) % 2;
                case l.PATTERN001:
                    return 0 == b % 2;
                case l.PATTERN010:
                    return 0 == c % 3;
                case l.PATTERN011:
                    return 0 == (b + c) % 3;
                case l.PATTERN100:
                    return 0 == (Math.floor(b / 2) + Math.floor(c / 3)) % 2;
                case l.PATTERN101:
                    return 0 == b * c % 2 + b * c % 3;
                case l.PATTERN110:
                    return 0 == (b * c % 2 + b * c % 3) % 2;
                case l.PATTERN111:
                    return 0 == (b * c % 3 + (b + c) % 2) % 2;
                default:
                    throw new Error("bad maskPattern:" + a)
                }
        }, getErrorCorrectPolynomial: function(a) {
            for (var b = new c([1], 0), d = 0; a > d; d++)
                b = b.multiply(new c([1, n.gexp(d)], 0));
            return b
        }, getLengthInBits: function(a, b) {
            if (b >= 1 && 10 > b)
                switch (a) {
                    case j.MODE_NUMBER:
                        return 10;
                    case j.MODE_ALPHA_NUM:
                        return 9;
                    case j.MODE_8BIT_BYTE:
                        return 8;
                    case j.MODE_KANJI:
                        return 8;
                    default:
                        throw new Error("mode:" + a)
                }
            else if (27 > b)
                switch (a) {
                    case j.MODE_NUMBER:
                        return 12;
                    case j.MODE_ALPHA_NUM:
                        return 11;
                    case j.MODE_8BIT_BYTE:
                        return 16;
                    case j.MODE_KANJI:
                        return 10;
                    default:
                        throw new Error("mode:" + a)
                }
            else {
                if (!(41 > b))
                    throw new Error("type:" + b);
                switch (a) {
                    case j.MODE_NUMBER:
                        return 14;
                    case j.MODE_ALPHA_NUM:
                        return 13;
                    case j.MODE_8BIT_BYTE:
                        return 16;
                    case j.MODE_KANJI:
                        return 12;
                    default:
                        throw new Error("mode:" + a)
                    }
            }
        }, getLostPoint: function(a) {
            for (var b = a.getModuleCount(), c = 0, d = 0; b > d; d++)
                for (var e = 0; b > e; e++) {
                    for (var f = 0, g = a.isDark(d, e), h = -1; 1 >= h; h++)
                        if (!(0 > d + h || d + h >= b))
                            for (var i = -1; 1 >= i; i++)
                                0 > e + i || e + i >= b || (0 != h || 0 != i) && g == a.isDark(d + h, e + i) && f++;
                    f > 5 && (c += 3 + f - 5)
                }
            for (var d = 0; b - 1 > d; d++)
                for (var e = 0; b - 1 > e; e++) {
                    var j = 0;
                    a.isDark(d, e) && j++, a.isDark(d + 1, e) && j++, a.isDark(d, e + 1) && j++, a.isDark(d + 1, e + 1) && j++, (0 == j || 4 == j) && (c += 3)
                }
            for (var d = 0; b > d; d++)
                for (var e = 0; b - 6 > e; e++)
                    a.isDark(d, e) && !a.isDark(d, e + 1) && a.isDark(d, e + 2) && a.isDark(d, e + 3) && a.isDark(d, e + 4) && !a.isDark(d, e + 5) && a.isDark(d, e + 6) && (c += 40);
            for (var e = 0; b > e; e++)
                for (var d = 0; b - 6 > d; d++)
                    a.isDark(d, e) && !a.isDark(d + 1, e) && a.isDark(d + 2, e) && a.isDark(d + 3, e) && a.isDark(d + 4, e) && !a.isDark(d + 5, e) && a.isDark(d + 6, e) && (c += 40);
            for (var k = 0, e = 0; b > e; e++)
                for (var d = 0; b > d; d++)
                    a.isDark(d, e) && k++;
            var l = Math.abs(100 * k / b / b - 50) / 5;
            return c += 10 * l
        }}, n = {glog: function(a) {
            if (1 > a)
                throw new Error("glog(" + a + ")");
            return n.LOG_TABLE[a]
        }, gexp: function(a) {
            for (; 0 > a; )
                a += 255;
            for (; a >= 256; )
                a -= 255;
            return n.EXP_TABLE[a]
        }, EXP_TABLE: new Array(256), LOG_TABLE: new Array(256)}, o = 0; 8 > o; o++)
        n.EXP_TABLE[o] = 1 << o;
    for (var o = 8; 256 > o; o++)
        n.EXP_TABLE[o] = n.EXP_TABLE[o - 4] ^ n.EXP_TABLE[o - 5] ^ n.EXP_TABLE[o - 6] ^ n.EXP_TABLE[o - 8];
    for (var o = 0; 255 > o; o++)
        n.LOG_TABLE[n.EXP_TABLE[o]] = o;
    c.prototype = {get: function(a) {
            return this.num[a]
        }, getLength: function() {
            return this.num.length
        }, multiply: function(a) {
            for (var b = new Array(this.getLength() + a.getLength() - 1), d = 0; d < this.getLength(); d++)
                for (var e = 0; e < a.getLength(); e++)
                    b[d + e] ^= n.gexp(n.glog(this.get(d)) + n.glog(a.get(e)));
            return new c(b, 0)
        }, mod: function(a) {
            if (this.getLength() - a.getLength() < 0)
                return this;
            for (var b = n.glog(this.get(0)) - n.glog(a.get(0)), d = new Array(this.getLength()), e = 0; e < this.getLength(); e++)
                d[e] = this.get(e);
            for (var e = 0; e < a.getLength(); e++)
                d[e] ^= n.gexp(n.glog(a.get(e)) + b);
            return new c(d, 0).mod(a)
        }}, d.RS_BLOCK_TABLE = [[1, 26, 19], [1, 26, 16], [1, 26, 13], [1, 26, 9], [1, 44, 34], [1, 44, 28], [1, 44, 22], [1, 44, 16], [1, 70, 55], [1, 70, 44], [2, 35, 17], [2, 35, 13], [1, 100, 80], [2, 50, 32], [2, 50, 24], [4, 25, 9], [1, 134, 108], [2, 67, 43], [2, 33, 15, 2, 34, 16], [2, 33, 11, 2, 34, 12], [2, 86, 68], [4, 43, 27], [4, 43, 19], [4, 43, 15], [2, 98, 78], [4, 49, 31], [2, 32, 14, 4, 33, 15], [4, 39, 13, 1, 40, 14], [2, 121, 97], [2, 60, 38, 2, 61, 39], [4, 40, 18, 2, 41, 19], [4, 40, 14, 2, 41, 15], [2, 146, 116], [3, 58, 36, 2, 59, 37], [4, 36, 16, 4, 37, 17], [4, 36, 12, 4, 37, 13], [2, 86, 68, 2, 87, 69], [4, 69, 43, 1, 70, 44], [6, 43, 19, 2, 44, 20], [6, 43, 15, 2, 44, 16], [4, 101, 81], [1, 80, 50, 4, 81, 51], [4, 50, 22, 4, 51, 23], [3, 36, 12, 8, 37, 13], [2, 116, 92, 2, 117, 93], [6, 58, 36, 2, 59, 37], [4, 46, 20, 6, 47, 21], [7, 42, 14, 4, 43, 15], [4, 133, 107], [8, 59, 37, 1, 60, 38], [8, 44, 20, 4, 45, 21], [12, 33, 11, 4, 34, 12], [3, 145, 115, 1, 146, 116], [4, 64, 40, 5, 65, 41], [11, 36, 16, 5, 37, 17], [11, 36, 12, 5, 37, 13], [5, 109, 87, 1, 110, 88], [5, 65, 41, 5, 66, 42], [5, 54, 24, 7, 55, 25], [11, 36, 12], [5, 122, 98, 1, 123, 99], [7, 73, 45, 3, 74, 46], [15, 43, 19, 2, 44, 20], [3, 45, 15, 13, 46, 16], [1, 135, 107, 5, 136, 108], [10, 74, 46, 1, 75, 47], [1, 50, 22, 15, 51, 23], [2, 42, 14, 17, 43, 15], [5, 150, 120, 1, 151, 121], [9, 69, 43, 4, 70, 44], [17, 50, 22, 1, 51, 23], [2, 42, 14, 19, 43, 15], [3, 141, 113, 4, 142, 114], [3, 70, 44, 11, 71, 45], [17, 47, 21, 4, 48, 22], [9, 39, 13, 16, 40, 14], [3, 135, 107, 5, 136, 108], [3, 67, 41, 13, 68, 42], [15, 54, 24, 5, 55, 25], [15, 43, 15, 10, 44, 16], [4, 144, 116, 4, 145, 117], [17, 68, 42], [17, 50, 22, 6, 51, 23], [19, 46, 16, 6, 47, 17], [2, 139, 111, 7, 140, 112], [17, 74, 46], [7, 54, 24, 16, 55, 25], [34, 37, 13], [4, 151, 121, 5, 152, 122], [4, 75, 47, 14, 76, 48], [11, 54, 24, 14, 55, 25], [16, 45, 15, 14, 46, 16], [6, 147, 117, 4, 148, 118], [6, 73, 45, 14, 74, 46], [11, 54, 24, 16, 55, 25], [30, 46, 16, 2, 47, 17], [8, 132, 106, 4, 133, 107], [8, 75, 47, 13, 76, 48], [7, 54, 24, 22, 55, 25], [22, 45, 15, 13, 46, 16], [10, 142, 114, 2, 143, 115], [19, 74, 46, 4, 75, 47], [28, 50, 22, 6, 51, 23], [33, 46, 16, 4, 47, 17], [8, 152, 122, 4, 153, 123], [22, 73, 45, 3, 74, 46], [8, 53, 23, 26, 54, 24], [12, 45, 15, 28, 46, 16], [3, 147, 117, 10, 148, 118], [3, 73, 45, 23, 74, 46], [4, 54, 24, 31, 55, 25], [11, 45, 15, 31, 46, 16], [7, 146, 116, 7, 147, 117], [21, 73, 45, 7, 74, 46], [1, 53, 23, 37, 54, 24], [19, 45, 15, 26, 46, 16], [5, 145, 115, 10, 146, 116], [19, 75, 47, 10, 76, 48], [15, 54, 24, 25, 55, 25], [23, 45, 15, 25, 46, 16], [13, 145, 115, 3, 146, 116], [2, 74, 46, 29, 75, 47], [42, 54, 24, 1, 55, 25], [23, 45, 15, 28, 46, 16], [17, 145, 115], [10, 74, 46, 23, 75, 47], [10, 54, 24, 35, 55, 25], [19, 45, 15, 35, 46, 16], [17, 145, 115, 1, 146, 116], [14, 74, 46, 21, 75, 47], [29, 54, 24, 19, 55, 25], [11, 45, 15, 46, 46, 16], [13, 145, 115, 6, 146, 116], [14, 74, 46, 23, 75, 47], [44, 54, 24, 7, 55, 25], [59, 46, 16, 1, 47, 17], [12, 151, 121, 7, 152, 122], [12, 75, 47, 26, 76, 48], [39, 54, 24, 14, 55, 25], [22, 45, 15, 41, 46, 16], [6, 151, 121, 14, 152, 122], [6, 75, 47, 34, 76, 48], [46, 54, 24, 10, 55, 25], [2, 45, 15, 64, 46, 16], [17, 152, 122, 4, 153, 123], [29, 74, 46, 14, 75, 47], [49, 54, 24, 10, 55, 25], [24, 45, 15, 46, 46, 16], [4, 152, 122, 18, 153, 123], [13, 74, 46, 32, 75, 47], [48, 54, 24, 14, 55, 25], [42, 45, 15, 32, 46, 16], [20, 147, 117, 4, 148, 118], [40, 75, 47, 7, 76, 48], [43, 54, 24, 22, 55, 25], [10, 45, 15, 67, 46, 16], [19, 148, 118, 6, 149, 119], [18, 75, 47, 31, 76, 48], [34, 54, 24, 34, 55, 25], [20, 45, 15, 61, 46, 16]], d.getRSBlocks = function(a, b) {
        var c = d.getRsBlockTable(a, b);
        if (void 0 == c)
            throw new Error("bad rs block @ typeNumber:" + a + "/errorCorrectLevel:" + b);
        for (var e = c.length / 3, f = [], g = 0; e > g; g++)
            for (var h = c[3 * g + 0], i = c[3 * g + 1], j = c[3 * g + 2], k = 0; h > k; k++)
                f.push(new d(i, j));
        return f
    }, d.getRsBlockTable = function(a, b) {
        switch (b) {
            case k.L:
                return d.RS_BLOCK_TABLE[4 * (a - 1) + 0];
            case k.M:
                return d.RS_BLOCK_TABLE[4 * (a - 1) + 1];
            case k.Q:
                return d.RS_BLOCK_TABLE[4 * (a - 1) + 2];
            case k.H:
                return d.RS_BLOCK_TABLE[4 * (a - 1) + 3];
            default:
                return void 0
            }
    }, e.prototype = {get: function(a) {
            var b = Math.floor(a / 8);
            return 1 == (1 & this.buffer[b] >>> 7 - a % 8)
        }, put: function(a, b) {
            for (var c = 0; b > c; c++)
                this.putBit(1 == (1 & a >>> b - c - 1))
        }, getLengthInBits: function() {
            return this.length
        }, putBit: function(a) {
            var b = Math.floor(this.length / 8);
            this.buffer.length <= b && this.buffer.push(0), a && (this.buffer[b] |= 128 >>> this.length % 8), this.length++
        }};
    var p = [[17, 14, 11, 7], [32, 26, 20, 14], [53, 42, 32, 24], [78, 62, 46, 34], [106, 84, 60, 44], [134, 106, 74, 58], [154, 122, 86, 64], [192, 152, 108, 84], [230, 180, 130, 98], [271, 213, 151, 119], [321, 251, 177, 137], [367, 287, 203, 155], [425, 331, 241, 177], [458, 362, 258, 194], [520, 412, 292, 220], [586, 450, 322, 250], [644, 504, 364, 280], [718, 560, 394, 310], [792, 624, 442, 338], [858, 666, 482, 382], [929, 711, 509, 403], [1003, 779, 565, 439], [1091, 857, 611, 461], [1171, 911, 661, 511], [1273, 997, 715, 535], [1367, 1059, 751, 593], [1465, 1125, 805, 625], [1528, 1190, 868, 658], [1628, 1264, 908, 698], [1732, 1370, 982, 742], [1840, 1452, 1030, 790], [1952, 1538, 1112, 842], [2068, 1628, 1168, 898], [2188, 1722, 1228, 958], [2303, 1809, 1283, 983], [2431, 1911, 1351, 1051], [2563, 1989, 1423, 1093], [2699, 2099, 1499, 1139], [2809, 2213, 1579, 1219], [2953, 2331, 1663, 1273]], q = function() {
        var a = function(a, b) {
            this._el = a, this._htOption = b
        };
        return a.prototype.draw = function(a) {
            function b(a, b) {
                var c = document.createElementNS("http://www.w3.org/2000/svg", a);
                for (var d in b)
                    b.hasOwnProperty(d) && c.setAttribute(d, b[d]);
                return c
            }
            var c = this._htOption, d = this._el, e = a.getModuleCount();
            Math.floor(c.width / e), Math.floor(c.height / e), this.clear();
            var f = b("svg", {viewBox: "0 0 " + String(e) + " " + String(e), width: "100%", height: "100%", fill: c.colorLight});
            f.setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:xlink", "http://www.w3.org/1999/xlink"), d.appendChild(f), f.appendChild(b("rect", {fill: c.colorDark, width: "1", height: "1", id: "template"}));
            for (var g = 0; e > g; g++)
                for (var h = 0; e > h; h++)
                    if (a.isDark(g, h)) {
                        var i = b("use", {x: String(g), y: String(h)});
                        i.setAttributeNS("http://www.w3.org/1999/xlink", "href", "#template"), f.appendChild(i)
                    }
        }, a.prototype.clear = function() {
            for (; this._el.hasChildNodes(); )
                this._el.removeChild(this._el.lastChild)
        }, a
    }(), r = "svg" === document.documentElement.tagName.toLowerCase(), s = r ? q : f() ? function() {
        function a() {
            this._elImage.src = this._elCanvas.toDataURL("image/png"), this._elImage.style.display = "block", this._elCanvas.style.display = "none"
        }
        function b(a, b) {
            var c = this;
            if (c._fFail = b, c._fSuccess = a, null === c._bSupportDataURI) {
                var d = document.createElement("img"), e = function() {
                    c._bSupportDataURI = !1, c._fFail && _fFail.call(c)
                }, f = function() {
                    c._bSupportDataURI = !0, c._fSuccess && c._fSuccess.call(c)
                };
                return d.onabort = e, d.onerror = e, d.onload = f, void(d.src = "data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHElEQVQI12P4//8/w38GIAXDIBKE0DHxgljNBAAO9TXL0Y4OHwAAAABJRU5ErkJggg==")
            }
            c._bSupportDataURI === !0 && c._fSuccess ? c._fSuccess.call(c) : c._bSupportDataURI === !1 && c._fFail && c._fFail.call(c)
        }
        if (this._android && this._android <= 2.1) {
            var c = 1 / window.devicePixelRatio, d = CanvasRenderingContext2D.prototype.drawImage;
            CanvasRenderingContext2D.prototype.drawImage = function(a, b, e, f, g, h, i, j) {
                if ("nodeName"in a && /img/i.test(a.nodeName))
                    for (var k = arguments.length - 1; k >= 1; k--)
                        arguments[k] = arguments[k] * c;
                else
                    "undefined" == typeof j && (arguments[1] *= c, arguments[2] *= c, arguments[3] *= c, arguments[4] *= c);
                d.apply(this, arguments)
            }
        }
        var e = function(a, b) {
            this._bIsPainted = !1, this._android = g(), this._htOption = b, this._elCanvas = document.createElement("canvas"), this._elCanvas.width = b.width, this._elCanvas.height = b.height, a.appendChild(this._elCanvas), this._el = a, this._oContext = this._elCanvas.getContext("2d"), this._bIsPainted = !1, this._elImage = document.createElement("img"), this._elImage.style.display = "none", this._el.appendChild(this._elImage), this._bSupportDataURI = null
        };
        return e.prototype.draw = function(a) {
            var b = this._elImage, c = this._oContext, d = this._htOption, e = a.getModuleCount(), f = d.width / e, g = d.height / e, h = Math.round(f), i = Math.round(g);
            b.style.display = "none", this.clear();
            for (var j = 0; e > j; j++)
                for (var k = 0; e > k; k++) {
                    var l = a.isDark(j, k), m = k * f, n = j * g;
                    c.strokeStyle = l ? d.colorDark : d.colorLight, c.lineWidth = 1, c.fillStyle = l ? d.colorDark : d.colorLight, c.fillRect(m, n, f, g), c.strokeRect(Math.floor(m) + .5, Math.floor(n) + .5, h, i), c.strokeRect(Math.ceil(m) - .5, Math.ceil(n) - .5, h, i)
                }
            this._bIsPainted = !0
        }, e.prototype.makeImage = function() {
            this._bIsPainted && b.call(this, a)
        }, e.prototype.isPainted = function() {
            return this._bIsPainted
        }, e.prototype.clear = function() {
            this._oContext.clearRect(0, 0, this._elCanvas.width, this._elCanvas.height), this._bIsPainted = !1
        }, e.prototype.round = function(a) {
            return a ? Math.floor(1e3 * a) / 1e3 : a
        }, e
    }() : function() {
        var a = function(a, b) {
            this._el = a, this._htOption = b
        };
        return a.prototype.draw = function(a) {
            for (var b = this._htOption, c = this._el, d = a.getModuleCount(), e = Math.floor(b.width / d), f = Math.floor(b.height / d), g = ['<table style="border:0;border-collapse:collapse;">'], h = 0; d > h; h++) {
                g.push("<tr>");
                for (var i = 0; d > i; i++)
                    g.push('<td style="border:0;border-collapse:collapse;padding:0;margin:0;width:' + e + "px;height:" + f + "px;background-color:" + (a.isDark(h, i) ? b.colorDark : b.colorLight) + ';"></td>');
                g.push("</tr>")
            }
            g.push("</table>"), c.innerHTML = g.join("");
            var j = c.childNodes[0], k = (b.width - j.offsetWidth) / 2, l = (b.height - j.offsetHeight) / 2;
            k > 0 && l > 0 && (j.style.margin = l + "px " + k + "px")
        }, a.prototype.clear = function() {
            this._el.innerHTML = ""
        }, a
    }();
    QRCode = function(a, b) {
        if (this._htOption = {width: 256, height: 256, typeNumber: 4, colorDark: "#000000", colorLight: "#ffffff", correctLevel: k.H}, "string" == typeof b && (b = {text: b}), b)
            for (var c in b)
                this._htOption[c] = b[c];
        "string" == typeof a && (a = document.getElementById(a)), this._android = g(), this._el = a, this._oQRCode = null, this._oDrawing = new s(this._el, this._htOption), this._htOption.text && this.makeCode(this._htOption.text)
    }, QRCode.prototype.makeCode = function(a) {
        this._oQRCode = new b(h(a, this._htOption.correctLevel), this._htOption.correctLevel), this._oQRCode.addData(a), this._oQRCode.make(), this._el.title = a, this._oDrawing.draw(this._oQRCode), this.makeImage()
    }, QRCode.prototype.makeImage = function() {
        "function" == typeof this._oDrawing.makeImage && (!this._android || this._android >= 3) && this._oDrawing.makeImage()
    }, QRCode.prototype.clear = function() {
        this._oDrawing.clear()
    }, QRCode.CorrectLevel = k
}(), function(a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a(jQuery)
}(function(a) {
    function b(b) {
        var c = {}, d = /^jQuery\d+$/;
        return a.each(b.attributes, function(a, b) {
            b.specified && !d.test(b.name) && (c[b.name] = b.value)
        }), c
    }
    function c(b, c) {
        var d = this, f = a(d);
        if (d.value == f.attr("placeholder") && f.hasClass("placeholder"))
            if (f.data("placeholder-password")) {
                if (f = f.hide().nextAll('input[type="password"]:first').show().attr("id", f.removeAttr("id").data("placeholder-id")), b === !0)
                    return f[0].value = c;
                f.focus()
            } else
                d.value = "", f.removeClass("placeholder"), d == e() && d.select()
    }
    function d() {
        var d, e = this, f = a(e), g = this.id;
        if ("" === e.value) {
            if ("password" === e.type) {
                if (!f.data("placeholder-textinput")) {
                    try {
                        d = f.clone().attr({type: "text"})
                    } catch (h) {
                        d = a("<input>").attr(a.extend(b(this), {type: "text"}))
                    }
                    d.removeAttr("name").data({"placeholder-password": f, "placeholder-id": g}).bind("focus.placeholder", c), f.data({"placeholder-textinput": d, "placeholder-id": g}).before(d)
                }
                f = f.removeAttr("id").hide().prevAll('input[type="text"]:first').attr("id", g).show()
            }
            f.addClass("placeholder"), f[0].value = f.attr("placeholder")
        } else
            f.removeClass("placeholder")
    }
    function e() {
        try {
            return document.activeElement
        } catch (a) {
        }
    }
    var f, g, h = "[object OperaMini]" == Object.prototype.toString.call(window.operamini), i = "placeholder"in document.createElement("input") && !h, j = "placeholder"in document.createElement("textarea") && !h, k = a.valHooks, l = a.propHooks;
    i && j ? (g = a.fn.placeholder = function() {
        return this
    }, g.input = g.textarea = !0) : (g = a.fn.placeholder = function() {
        var a = this;
        return a.filter((i ? "textarea" : ":input") + "[placeholder]").not(".placeholder").bind({"focus.placeholder": c, "blur.placeholder": d}).data("placeholder-enabled", !0).trigger("blur.placeholder"), a
    }, g.input = i, g.textarea = j, f = {get: function(b) {
            var c = a(b), d = c.data("placeholder-password");
            return d ? d[0].value : c.data("placeholder-enabled") && c.hasClass("placeholder") ? "" : b.value
        }, set: function(b, f) {
            var g = a(b), h = g.data("placeholder-password");
            return h ? h[0].value = f : g.data("placeholder-enabled") ? ("" === f ? (b.value = f, b != e() && d.call(b)) : g.hasClass("placeholder") ? c.call(b, !0, f) || (b.value = f) : b.value = f, g) : b.value = f
        }}, i || (k.input = f, l.value = f), j || (k.textarea = f, l.value = f), a(function() {
        a(document).delegate("form", "submit.placeholder", function() {
            var b = a(".placeholder", this).each(c);
            setTimeout(function() {
                b.each(d)
            }, 10)
        })
    }), a(window).bind("beforeunload.placeholder", function() {
        a(".placeholder").each(function() {
            this.value = ""
        })
    }))
}), function() {
    function a(a, b, c) {
        for (var d = (c || 0) - 1, e = a ? a.length : 0; ++d < e; )
            if (a[d] === b)
                return d;
        return-1
    }
    function b(a, b) {
        for (var c = a.criteria, d = b.criteria, e = -1, f = c.length; ++e < f; ) {
            var g = c[e], h = d[e];
            if (g !== h) {
                if (g > h || "undefined" == typeof g)
                    return 1;
                if (h > g || "undefined" == typeof h)
                    return-1
            }
        }
        return a.index - b.index
    }
    function c(a) {
        return"\\" + vc[a]
    }
    function d(a, b, c) {
        b || (b = 0), "undefined" == typeof c && (c = a ? a.length : 0);
        for (var d = -1, e = c - b || 0, f = Array(0 > e ? 0 : e); ++d < e; )
            f[d] = a[b + d];
        return f
    }
    function e(a) {
        return a instanceof e ? a : new f(a)
    }
    function f(a, b) {
        this.__chain__ = !!b, this.__wrapped__ = a
    }
    function g(a) {
        function b() {
            if (e) {
                var a = d(e);
                Jc.apply(a, arguments)
            }
            if (this instanceof b) {
                var g = h(c.prototype), i = c.apply(g, a || arguments);
                return J(i) ? i : g
            }
            return c.apply(f, a || arguments)
        }
        var c = a[0], e = a[2], f = a[4];
        return b
    }
    function h(a) {
        return J(a) ? Lc(a) : {}
    }
    function i(a, b, c) {
        if ("function" != typeof a)
            return Sb;
        if ("undefined" == typeof b || !("prototype"in a))
            return a;
        switch (c) {
            case 1:
                return function(c) {
                    return a.call(b, c)
                };
            case 2:
                return function(c, d) {
                    return a.call(b, c, d)
                };
            case 3:
                return function(c, d, e) {
                    return a.call(b, c, d, e)
                };
            case 4:
                return function(c, d, e, f) {
                    return a.call(b, c, d, e, f)
                }
        }
        return Fb(a, b)
    }
    function j(a) {
        function b() {
            var a = l ? i : this;
            if (f) {
                var q = d(f);
                Jc.apply(q, arguments)
            }
            if ((g || n) && (q || (q = d(arguments)), g && Jc.apply(q, g), n && q.length < k))
                return e |= 16, j([c, o ? e : -4 & e, q, null, i, k]);
            if (q || (q = arguments), m && (c = a[p]), this instanceof b) {
                a = h(c.prototype);
                var r = c.apply(a, q);
                return J(r) ? r : a
            }
            return c.apply(a, q)
        }
        var c = a[0], e = a[1], f = a[2], g = a[3], i = a[4], k = a[5], l = 1 & e, m = 2 & e, n = 4 & e, o = 8 & e, p = c;
        return b
    }
    function k(a, b) {
        for (var c = -1, d = s(), e = a ? a.length : 0, f = []; ++c < e; ) {
            var g = a[c];
            d(b, g) < 0 && f.push(g)
        }
        return f
    }
    function l(a, b, c, d) {
        for (var e = (d || 0) - 1, f = a ? a.length : 0, g = []; ++e < f; ) {
            var h = a[e];
            if (h && "object" == typeof h && "number" == typeof h.length && (Uc(h) || v(h))) {
                b || (h = l(h, b, c));
                var i = -1, j = h.length, k = g.length;
                for (g.length += j; ++i < j; )
                    g[k++] = h[i]
            } else
                c || g.push(h)
        }
        return g
    }
    function m(a, b, c, d) {
        if (a === b)
            return 0 !== a || 1 / a == 1 / b;
        var f = typeof a, g = typeof b;
        if (!(a !== a || a && uc[f] || b && uc[g]))
            return!1;
        if (null == a || null == b)
            return a === b;
        var h = Ec.call(a), i = Ec.call(b);
        if (h != i)
            return!1;
        switch (h) {
            case nc:
            case oc:
                return+a == +b;
            case qc:
                return a != +a ? b != +b : 0 == a ? 1 / a == 1 / b : a == +b;
            case sc:
            case tc:
                return a == String(b)
        }
        var j = h == mc;
        if (!j) {
            var k = a instanceof e, l = b instanceof e;
            if (k || l)
                return m(k ? a.__wrapped__ : a, l ? b.__wrapped__ : b, c, d);
            if (h != rc)
                return!1;
            var n = a.constructor, o = b.constructor;
            if (n != o && !(I(n) && n instanceof n && I(o) && o instanceof o) && "constructor"in a && "constructor"in b)
                return!1
        }
        c || (c = []), d || (d = []);
        for (var p = c.length; p--; )
            if (c[p] == a)
                return d[p] == b;
        var q = !0, r = 0;
        if (c.push(a), d.push(b), j) {
            if (r = b.length, q = r == a.length)
                for (; r-- && (q = m(a[r], b[r], c, d)); )
                    ;
        } else
            _c(b, function(b, e, f) {
                return Ic.call(f, e) ? (r++, !(q = Ic.call(a, e) && m(a[e], b, c, d)) && gc) : void 0
            }), q && _c(a, function(a, b, c) {
                return Ic.call(c, b) ? !(q = --r > -1) && gc : void 0
            });
        return c.pop(), d.pop(), q
    }
    function n(a, b) {
        return a + Hc(Sc() * (b - a + 1))
    }
    function o(a, b, c) {
        for (var d = -1, e = s(), f = a ? a.length : 0, g = [], h = c ? [] : g; ++d < f; ) {
            var i = a[d], j = c ? c(i, d, a) : i;
            (b ? !d || h[h.length - 1] !== j : e(h, j) < 0) && (c && h.push(j), g.push(i))
        }
        return g
    }
    function p(a) {
        return function(b, c, d) {
            var e = {};
            c = Qb(c, d, 3);
            var f = -1, g = b ? b.length : 0;
            if ("number" == typeof g)
                for (; ++f < g; ) {
                    var h = b[f];
                    a(e, h, c(h, f, b), b)
                }
            else
                ad(b, function(b, d, f) {
                    a(e, b, c(b, d, f), f)
                });
            return e
        }
    }
    function q(a, b, c, d, e, f) {
        var h = 2 & b, i = 16 & b, k = 32 & b;
        if (!h && !I(a))
            throw new TypeError;
        i && !c.length && (b &= -17, i = c = !1), k && !d.length && (b &= -33, k = d = !1);
        var l = 1 == b || 17 === b ? g : j;
        return l([a, b, c, d, e, f])
    }
    function r(a) {
        return Xc[a]
    }
    function s() {
        var b = (b = e.indexOf) === rb ? a : b;
        return b
    }
    function t(a) {
        return"function" == typeof a && Fc.test(a)
    }
    function u(a) {
        return Yc[a]
    }
    function v(a) {
        return a && "object" == typeof a && "number" == typeof a.length && Ec.call(a) == lc || !1
    }
    function w(a) {
        if (!a)
            return a;
        for (var b = 1, c = arguments.length; c > b; b++) {
            var d = arguments[b];
            if (d)
                for (var e in d)
                    a[e] = d[e]
        }
        return a
    }
    function x(a) {
        return J(a) ? Uc(a) ? d(a) : w({}, a) : a
    }
    function y(a) {
        if (!a)
            return a;
        for (var b = 1, c = arguments.length; c > b; b++) {
            var d = arguments[b];
            if (d)
                for (var e in d)
                    "undefined" == typeof a[e] && (a[e] = d[e])
        }
        return a
    }
    function z(a) {
        var b = [];
        return _c(a, function(a, c) {
            I(a) && b.push(c)
        }), b.sort()
    }
    function A(a, b) {
        return a ? Ic.call(a, b) : !1
    }
    function B(a) {
        for (var b = -1, c = Wc(a), d = c.length, e = {}; ++b < d; ) {
            var f = c[b];
            e[a[f]] = f
        }
        return e
    }
    function C(a) {
        return a === !0 || a === !1 || a && "object" == typeof a && Ec.call(a) == nc || !1
    }
    function D(a) {
        return a && "object" == typeof a && Ec.call(a) == oc || !1
    }
    function E(a) {
        return a && 1 === a.nodeType || !1
    }
    function F(a) {
        if (!a)
            return!0;
        if (Uc(a) || O(a))
            return!a.length;
        for (var b in a)
            if (Ic.call(a, b))
                return!1;
        return!0
    }
    function G(a, b) {
        return m(a, b)
    }
    function H(a) {
        return Nc(a) && !Oc(parseFloat(a))
    }
    function I(a) {
        return"function" == typeof a
    }
    function J(a) {
        return!(!a || !uc[typeof a])
    }
    function K(a) {
        return M(a) && a != +a
    }
    function L(a) {
        return null === a
    }
    function M(a) {
        return"number" == typeof a || a && "object" == typeof a && Ec.call(a) == qc || !1
    }
    function N(a) {
        return a && uc[typeof a] && Ec.call(a) == sc || !1
    }
    function O(a) {
        return"string" == typeof a || a && "object" == typeof a && Ec.call(a) == tc || !1
    }
    function P(a) {
        return"undefined" == typeof a
    }
    function Q(a) {
        var b = [];
        _c(a, function(a, c) {
            b.push(c)
        }), b = k(b, l(arguments, !0, !1, 1));
        for (var c = -1, d = b.length, e = {}; ++c < d; ) {
            var f = b[c];
            e[f] = a[f]
        }
        return e
    }
    function R(a) {
        for (var b = -1, c = Wc(a), d = c.length, e = Array(d); ++b < d; ) {
            var f = c[b];
            e[b] = [f, a[f]]
        }
        return e
    }
    function S(a) {
        for (var b = -1, c = l(arguments, !0, !1, 1), d = c.length, e = {}; ++b < d; ) {
            var f = c[b];
            f in a && (e[f] = a[f])
        }
        return e
    }
    function T(a) {
        for (var b = -1, c = Wc(a), d = c.length, e = Array(d); ++b < d; )
            e[b] = a[c[b]];
        return e
    }
    function U(a, b) {
        var c = s(), d = a ? a.length : 0, e = !1;
        return d && "number" == typeof d ? e = c(a, b) > -1 : ad(a, function(a) {
            return(e = a === b) && gc
        }), e
    }
    function V(a, b, c) {
        var d = !0;
        b = Qb(b, c, 3);
        var e = -1, f = a ? a.length : 0;
        if ("number" == typeof f)
            for (; ++e < f && (d = !!b(a[e], e, a)); )
                ;
        else
            ad(a, function(a, c, e) {
                return!(d = !!b(a, c, e)) && gc
            });
        return d
    }
    function W(a, b, c) {
        var d = [];
        b = Qb(b, c, 3);
        var e = -1, f = a ? a.length : 0;
        if ("number" == typeof f)
            for (; ++e < f; ) {
                var g = a[e];
                b(g, e, a) && d.push(g)
            }
        else
            ad(a, function(a, c, e) {
                b(a, c, e) && d.push(a)
            });
        return d
    }
    function X(a, b, c) {
        b = Qb(b, c, 3);
        var d = -1, e = a ? a.length : 0;
        if ("number" != typeof e) {
            var f;
            return ad(a, function(a, c, d) {
                return b(a, c, d) ? (f = a, gc) : void 0
            }), f
        }
        for (; ++d < e; ) {
            var g = a[d];
            if (b(g, d, a))
                return g
        }
    }
    function Y(a, b) {
        return mb(a, b, !0)
    }
    function Z(a, b, c) {
        var d = -1, e = a ? a.length : 0;
        if (b = b && "undefined" == typeof c ? b : i(b, c, 3), "number" == typeof e)
            for (; ++d < e && b(a[d], d, a) !== gc; )
                ;
        else
            ad(a, b)
    }
    function $(a, b) {
        var c = a ? a.length : 0;
        if ("number" == typeof c)
            for (; c-- && b(a[c], c, a) !== !1; )
                ;
        else {
            var d = Wc(a);
            c = d.length, ad(a, function(a, e, f) {
                return e = d ? d[--c] : --c, b(f[e], e, f) === !1 && gc
            })
        }
    }
    function _(a, b) {
        var c = d(arguments, 2), e = -1, f = "function" == typeof b, g = a ? a.length : 0, h = Array("number" == typeof g ? g : 0);
        return Z(a, function(a) {
            h[++e] = (f ? b : a[b]).apply(a, c)
        }), h
    }
    function ab(a, b, c) {
        var d = -1, e = a ? a.length : 0;
        if (b = Qb(b, c, 3), "number" == typeof e)
            for (var f = Array(e); ++d < e; )
                f[d] = b(a[d], d, a);
        else
            f = [], ad(a, function(a, c, e) {
                f[++d] = b(a, c, e)
            });
        return f
    }
    function bb(a, b, c) {
        var d = -1 / 0, e = d;
        "function" != typeof b && c && c[b] === a && (b = null);
        var f = -1, g = a ? a.length : 0;
        if (null == b && "number" == typeof g)
            for (; ++f < g; ) {
                var h = a[f];
                h > e && (e = h)
            }
        else
            b = Qb(b, c, 3), Z(a, function(a, c, f) {
                var g = b(a, c, f);
                g > d && (d = g, e = a)
            });
        return e
    }
    function cb(a, b, c) {
        var d = 1 / 0, e = d;
        "function" != typeof b && c && c[b] === a && (b = null);
        var f = -1, g = a ? a.length : 0;
        if (null == b && "number" == typeof g)
            for (; ++f < g; ) {
                var h = a[f];
                e > h && (e = h)
            }
        else
            b = Qb(b, c, 3), Z(a, function(a, c, f) {
                var g = b(a, c, f);
                d > g && (d = g, e = a)
            });
        return e
    }
    function db(a, b, c, d) {
        if (!a)
            return c;
        var e = arguments.length < 3;
        b = Qb(b, d, 4);
        var f = -1, g = a.length;
        if ("number" == typeof g)
            for (e && (c = a[++f]); ++f < g; )
                c = b(c, a[f], f, a);
        else
            ad(a, function(a, d, f) {
                c = e ? (e = !1, a) : b(c, a, d, f)
            });
        return c
    }
    function eb(a, b, c, d) {
        var e = arguments.length < 3;
        return b = Qb(b, d, 4), $(a, function(a, d, f) {
            c = e ? (e = !1, a) : b(c, a, d, f)
        }), c
    }
    function fb(a, b, c) {
        return b = Qb(b, c, 3), W(a, function(a, c, d) {
            return!b(a, c, d)
        })
    }
    function gb(a, b, c) {
        if (a && "number" != typeof a.length && (a = T(a)), null == b || c)
            return a ? a[n(0, a.length - 1)] : ec;
        var d = hb(a);
        return d.length = Rc(Qc(0, b), d.length), d
    }
    function hb(a) {
        var b = -1, c = a ? a.length : 0, d = Array("number" == typeof c ? c : 0);
        return Z(a, function(a) {
            var c = n(0, ++b);
            d[b] = d[c], d[c] = a
        }), d
    }
    function ib(a) {
        var b = a ? a.length : 0;
        return"number" == typeof b ? b : Wc(a).length
    }
    function jb(a, b, c) {
        var d;
        b = Qb(b, c, 3);
        var e = -1, f = a ? a.length : 0;
        if ("number" == typeof f)
            for (; ++e < f && !(d = b(a[e], e, a)); )
                ;
        else
            ad(a, function(a, c, e) {
                return(d = b(a, c, e)) && gc
            });
        return!!d
    }
    function kb(a, c, d) {
        var e = -1, f = a ? a.length : 0, g = Array("number" == typeof f ? f : 0);
        for (c = Qb(c, d, 3), Z(a, function(a, b, d) {
            g[++e] = {criteria: [c(a, b, d)], index: e, value: a}
        }), f = g.length, g.sort(b); f--; )
            g[f] = g[f].value;
        return g
    }
    function lb(a) {
        return Uc(a) ? d(a) : a && "number" == typeof a.length ? ab(a) : T(a)
    }
    function mb(a, b, c) {
        return c && F(b) ? ec : (c ? X : W)(a, b)
    }
    function nb(a) {
        for (var b = -1, c = a ? a.length : 0, d = []; ++b < c; ) {
            var e = a[b];
            e && d.push(e)
        }
        return d
    }
    function ob(a) {
        return k(a, l(arguments, !0, !0, 1))
    }
    function pb(a, b, c) {
        var e = 0, f = a ? a.length : 0;
        if ("number" != typeof b && null != b) {
            var g = -1;
            for (b = Qb(b, c, 3); ++g < f && b(a[g], g, a); )
                e++
        } else if (e = b, null == e || c)
            return a ? a[0] : ec;
        return d(a, 0, Rc(Qc(0, e), f))
    }
    function qb(a, b) {
        return l(a, b)
    }
    function rb(b, c, d) {
        if ("number" == typeof d) {
            var e = b ? b.length : 0;
            d = 0 > d ? Qc(0, e + d) : d || 0
        } else if (d) {
            var f = yb(b, c);
            return b[f] === c ? f : -1
        }
        return a(b, c, d)
    }
    function sb(a, b, c) {
        var e = 0, f = a ? a.length : 0;
        if ("number" != typeof b && null != b) {
            var g = f;
            for (b = Qb(b, c, 3); g-- && b(a[g], g, a); )
                e++
        } else
            e = null == b || c ? 1 : b || e;
        return d(a, 0, Rc(Qc(0, f - e), f))
    }
    function tb() {
        for (var a = [], b = -1, c = arguments.length; ++b < c; ) {
            var d = arguments[b];
            (Uc(d) || v(d)) && a.push(d)
        }
        var e = a[0], f = -1, g = s(), h = e ? e.length : 0, i = [];
        a:for (; ++f < h; )
            if (d = e[f], g(i, d) < 0) {
                for (var b = c; --b; )
                    if (g(a[b], d) < 0)
                        continue a;
                i.push(d)
            }
        return i
    }
    function ub(a, b, c) {
        var e = 0, f = a ? a.length : 0;
        if ("number" != typeof b && null != b) {
            var g = f;
            for (b = Qb(b, c, 3); g-- && b(a[g], g, a); )
                e++
        } else if (e = b, null == e || c)
            return a ? a[f - 1] : ec;
        return d(a, Qc(0, f - e))
    }
    function vb(a, b, c) {
        var d = a ? a.length : 0;
        for ("number" == typeof c && (d = (0 > c?Qc(0, d + c):Rc(c, d - 1)) + 1); d--; )
            if (a[d] === b)
                return d;
        return-1
    }
    function wb(a, b, c) {
        a = +a || 0, c = +c || 1, null == b && (b = a, a = 0);
        for (var d = -1, e = Qc(0, Gc((b - a) / c)), f = Array(e); ++d < e; )
            f[d] = a, a += c;
        return f
    }
    function xb(a, b, c) {
        if ("number" != typeof b && null != b) {
            var e = 0, f = -1, g = a ? a.length : 0;
            for (b = Qb(b, c, 3); ++f < g && b(a[f], f, a); )
                e++
        } else
            e = null == b || c ? 1 : Qc(0, b);
        return d(a, e)
    }
    function yb(a, b, c, d) {
        var e = 0, f = a ? a.length : e;
        for (c = c ? Qb(c, d, 1) : Sb, b = c(b); f > e; ) {
            var g = e + f >>> 1;
            c(a[g]) < b ? e = g + 1 : f = g
        }
        return e
    }
    function zb() {
        return o(l(arguments, !0, !0))
    }
    function Ab(a, b, c, d) {
        return"boolean" != typeof b && null != b && (d = c, c = "function" != typeof b && d && d[b] === a ? null : b, b = !1), null != c && (c = Qb(c, d, 3)), o(a, b, c)
    }
    function Bb(a) {
        return k(a, d(arguments, 1))
    }
    function Cb() {
        for (var a = -1, b = bb(ed(arguments, "length")), c = Array(0 > b ? 0 : b); ++a < b; )
            c[a] = ed(arguments, a);
        return c
    }
    function Db(a, b) {
        var c = -1, d = a ? a.length : 0, e = {};
        for (b || !d || Uc(a[0]) || (b = []); ++c < d; ) {
            var f = a[c];
            b ? e[f] = b[c] : f && (e[f[0]] = f[1])
        }
        return e
    }
    function Eb(a, b) {
        if (!I(b))
            throw new TypeError;
        return function() {
            return--a < 1 ? b.apply(this, arguments) : void 0
        }
    }
    function Fb(a, b) {
        return arguments.length > 2 ? q(a, 17, d(arguments, 2), null, b) : q(a, 1, null, null, b)
    }
    function Gb(a) {
        for (var b = arguments.length > 1 ? l(arguments, !0, !1, 1) : z(a), c = -1, d = b.length; ++c < d; ) {
            var e = b[c];
            a[e] = q(a[e], 1, null, null, a)
        }
        return a
    }
    function Hb() {
        for (var a = arguments, b = a.length; b--; )
            if (!I(a[b]))
                throw new TypeError;
        return function() {
            for (var b = arguments, c = a.length; c--; )
                b = [a[c].apply(this, b)];
            return b[0]
        }
    }
    function Ib(a, b, c) {
        var d, e, f, g, h, i, j, k = 0, l = !1, m = !0;
        if (!I(a))
            throw new TypeError;
        if (b = Qc(0, b) || 0, c === !0) {
            var n = !0;
            m = !1
        } else
            J(c) && (n = c.leading, l = "maxWait"in c && (Qc(b, c.maxWait) || 0), m = "trailing"in c ? c.trailing : m);
        var o = function() {
            var c = b - (fd() - g);
            if (0 >= c) {
                e && clearTimeout(e);
                var l = j;
                e = i = j = ec, l && (k = fd(), f = a.apply(h, d), i || e || (d = h = null))
            } else
                i = setTimeout(o, c)
        }, p = function() {
            i && clearTimeout(i), e = i = j = ec, (m || l !== b) && (k = fd(), f = a.apply(h, d), i || e || (d = h = null))
        };
        return function() {
            if (d = arguments, g = fd(), h = this, j = m && (i || !n), l === !1)
                var c = n && !i;
            else {
                e || n || (k = g);
                var q = l - (g - k), r = 0 >= q;
                r ? (e && (e = clearTimeout(e)), k = g, f = a.apply(h, d)) : e || (e = setTimeout(p, q))
            }
            return r && i ? i = clearTimeout(i) : i || b === l || (i = setTimeout(o, b)), c && (r = !0, f = a.apply(h, d)), !r || i || e || (d = h = null), f
        }
    }
    function Jb(a) {
        if (!I(a))
            throw new TypeError;
        var b = d(arguments, 1);
        return setTimeout(function() {
            a.apply(ec, b)
        }, 1)
    }
    function Kb(a, b) {
        if (!I(a))
            throw new TypeError;
        var c = d(arguments, 2);
        return setTimeout(function() {
            a.apply(ec, c)
        }, b)
    }
    function Lb(a, b) {
        var c = {};
        return function() {
            var d = b ? b.apply(this, arguments) : hc + arguments[0];
            return Ic.call(c, d) ? c[d] : c[d] = a.apply(this, arguments)
        }
    }
    function Mb(a) {
        var b, c;
        if (!I(a))
            throw new TypeError;
        return function() {
            return b ? c : (b = !0, c = a.apply(this, arguments), a = null, c)
        }
    }
    function Nb(a) {
        return q(a, 16, d(arguments, 1))
    }
    function Ob(a, b, c) {
        var d = !0, e = !0;
        if (!I(a))
            throw new TypeError;
        return c === !1 ? d = !1 : J(c) && (d = "leading"in c ? c.leading : d, e = "trailing"in c ? c.trailing : e), c = {}, c.leading = d, c.maxWait = b, c.trailing = e, Ib(a, b, c)
    }
    function Pb(a, b) {
        return q(b, 16, [a])
    }
    function Qb(a, b, c) {
        var d = typeof a;
        if (null == a || "function" == d)
            return i(a, b, c);
        if ("object" != d)
            return Vb(a);
        var e = Wc(a);
        return function(b) {
            for (var c = e.length, d = !1; c-- && (d = b[e[c]] === a[e[c]]); )
                ;
            return d
        }
    }
    function Rb(a) {
        return null == a ? "" : String(a).replace($c, r)
    }
    function Sb(a) {
        return a
    }
    function Tb(a) {
        Z(z(a), function(b) {
            var c = e[b] = a[b];
            e.prototype[b] = function() {
                var a = [this.__wrapped__];
                Jc.apply(a, arguments);
                var b = c.apply(e, a);
                return this.__chain__ ? new f(b, !0) : b
            }
        })
    }
    function Ub() {
        return wc._ = Dc, this
    }
    function Vb(a) {
        return function(b) {
            return b[a]
        }
    }
    function Wb(a, b) {
        return null == a && null == b && (b = 1), a = +a || 0, null == b ? (b = a, a = 0) : b = +b || 0, a + Hc(Sc() * (b - a + 1))
    }
    function Xb(a, b) {
        if (a) {
            var c = a[b];
            return I(c) ? a[b]() : c
        }
    }
    function Yb(a, b, d) {
        var f = e, g = f.templateSettings;
        a = String(a || ""), d = y({}, d, g);
        var h = 0, i = "__p += '", j = d.variable, k = RegExp((d.escape || jc).source + "|" + (d.interpolate || jc).source + "|" + (d.evaluate || jc).source + "|$", "g");
        a.replace(k, function(b, d, e, f, g) {
            return i += a.slice(h, g).replace(kc, c), d && (i += "' +\n_.escape(" + d + ") +\n'"), f && (i += "';\n" + f + ";\n__p += '"), e && (i += "' +\n((__t = (" + e + ")) == null ? '' : __t) +\n'"), h = g + b.length, b
        }), i += "';\n", j || (j = "obj", i = "with (" + j + " || {}) {\n" + i + "\n}\n"), i = "function(" + j + ") {\nvar __t, __p = '', __j = Array.prototype.join;\nfunction print() { __p += __j.call(arguments, '') }\n" + i + "return __p\n}";
        try {
            var l = Function("_", "return " + i)(f)
        } catch (m) {
            throw m.source = i, m
        }
        return b ? l(b) : (l.source = i, l)
    }
    function Zb(a, b, c) {
        a = (a = +a) > -1 ? a : 0;
        var d = -1, e = Array(a);
        for (b = i(b, c, 1); ++d < a; )
            e[d] = b(d);
        return e
    }
    function $b(a) {
        return null == a ? "" : String(a).replace(Zc, u)
    }
    function _b(a) {
        var b = ++fc + "";
        return a ? a + b : b
    }
    function ac(a) {
        return a = new f(a), a.__chain__ = !0, a
    }
    function bc(a, b) {
        return b(a), a
    }
    function cc() {
        return this.__chain__ = !0, this
    }
    function dc() {
        return this.__wrapped__
    }
    var ec, fc = 0, gc = {}, hc = +new Date + "", ic = /<%=([\s\S]+?)%>/g, jc = /($^)/, kc = /['\n\r\t\u2028\u2029\\]/g, lc = "[object Arguments]", mc = "[object Array]", nc = "[object Boolean]", oc = "[object Date]", pc = "[object Function]", qc = "[object Number]", rc = "[object Object]", sc = "[object RegExp]", tc = "[object String]", uc = {"boolean": !1, "function": !0, object: !0, number: !1, string: !1, undefined: !1}, vc = {"\\": "\\", "'": "'", "\n": "n", "\r": "r", "	": "t", "\u2028": "u2028", "\u2029": "u2029"}, wc = uc[typeof window] && window || this, xc = uc[typeof exports] && exports && !exports.nodeType && exports, yc = uc[typeof module] && module && !module.nodeType && module, zc = yc && yc.exports === xc && xc, Ac = uc[typeof global] && global;
    !Ac || Ac.global !== Ac && Ac.window !== Ac || (wc = Ac);
    var Bc = [], Cc = Object.prototype, Dc = wc._, Ec = Cc.toString, Fc = RegExp("^" + String(Ec).replace(/[.*+?^${}()|[\]\\]/g, "\\$&").replace(/toString| for [^\]]+/g, ".*?") + "$"), Gc = Math.ceil, Hc = Math.floor, Ic = Cc.hasOwnProperty, Jc = Bc.push, Kc = Cc.propertyIsEnumerable, Lc = t(Lc = Object.create) && Lc, Mc = t(Mc = Array.isArray) && Mc, Nc = wc.isFinite, Oc = wc.isNaN, Pc = t(Pc = Object.keys) && Pc, Qc = Math.max, Rc = Math.min, Sc = Math.random;
    f.prototype = e.prototype;
    var Tc = {};
    !function() {
        var a = {0: 1, length: 1};
        Tc.spliceObjects = (Bc.splice.call(a, 0, 1), !a[0])
    }(1), e.templateSettings = {escape: /<%-([\s\S]+?)%>/g, evaluate: /<%([\s\S]+?)%>/g, interpolate: ic, variable: ""}, Lc || (h = function() {
        function a() {
        }
        return function(b) {
            if (J(b)) {
                a.prototype = b;
                var c = new a;
                a.prototype = null
            }
            return c || wc.Object()
        }
    }()), v(arguments) || (v = function(a) {
        return a && "object" == typeof a && "number" == typeof a.length && Ic.call(a, "callee") && !Kc.call(a, "callee") || !1
    });
    var Uc = Mc || function(a) {
        return a && "object" == typeof a && "number" == typeof a.length && Ec.call(a) == mc || !1
    }, Vc = function(a) {
        var b, c = a, d = [];
        if (!c)
            return d;
        if (!uc[typeof a])
            return d;
        for (b in c)
            Ic.call(c, b) && d.push(b);
        return d
    }, Wc = Pc ? function(a) {
        return J(a) ? Pc(a) : []
    } : Vc, Xc = {"&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#x27;"}, Yc = B(Xc), Zc = RegExp("(" + Wc(Yc).join("|") + ")", "g"), $c = RegExp("[" + Wc(Xc).join("") + "]", "g"), _c = function(a, b) {
        var c, d = a, e = d;
        if (!d)
            return e;
        if (!uc[typeof d])
            return e;
        for (c in d)
            if (b(d[c], c, a) === gc)
                return e;
        return e
    }, ad = function(a, b) {
        var c, d = a, e = d;
        if (!d)
            return e;
        if (!uc[typeof d])
            return e;
        for (c in d)
            if (Ic.call(d, c) && b(d[c], c, a) === gc)
                return e;
        return e
    };
    I(/x/) && (I = function(a) {
        return"function" == typeof a && Ec.call(a) == pc
    });
    var bd = p(function(a, b, c) {
        Ic.call(a, c) ? a[c]++ : a[c] = 1
    }), cd = p(function(a, b, c) {
        (Ic.call(a, c) ? a[c] : a[c] = []).push(b)
    }), dd = p(function(a, b, c) {
        a[c] = b
    }), ed = ab, fd = t(fd = Date.now) && fd || function() {
        return(new Date).getTime()
    };
    e.after = Eb, e.bind = Fb, e.bindAll = Gb, e.chain = ac, e.compact = nb, e.compose = Hb, e.countBy = bd, e.debounce = Ib, e.defaults = y, e.defer = Jb, e.delay = Kb, e.difference = ob, e.filter = W, e.flatten = qb, e.forEach = Z, e.functions = z, e.groupBy = cd, e.indexBy = dd, e.initial = sb, e.intersection = tb, e.invert = B, e.invoke = _, e.keys = Wc, e.map = ab, e.max = bb, e.memoize = Lb, e.min = cb, e.omit = Q, e.once = Mb, e.pairs = R, e.partial = Nb, e.pick = S, e.pluck = ed, e.range = wb, e.reject = fb, e.rest = xb, e.shuffle = hb, e.sortBy = kb, e.tap = bc, e.throttle = Ob, e.times = Zb, e.toArray = lb, e.union = zb, e.uniq = Ab, e.values = T, e.where = mb, e.without = Bb, e.wrap = Pb, e.zip = Cb, e.collect = ab, e.drop = xb, e.each = Z, e.extend = w, e.methods = z, e.object = Db, e.select = W, e.tail = xb, e.unique = Ab, e.clone = x, e.contains = U, e.escape = Rb, e.every = V, e.find = X, e.has = A, e.identity = Sb, e.indexOf = rb, e.isArguments = v, e.isArray = Uc, e.isBoolean = C, e.isDate = D, e.isElement = E, e.isEmpty = F, e.isEqual = G, e.isFinite = H, e.isFunction = I, e.isNaN = K, e.isNull = L, e.isNumber = M, e.isObject = J, e.isRegExp = N, e.isString = O, e.isUndefined = P, e.lastIndexOf = vb, e.mixin = Tb, e.noConflict = Ub, e.random = Wb, e.reduce = db, e.reduceRight = eb, e.result = Xb, e.size = ib, e.some = jb, e.sortedIndex = yb, e.template = Yb, e.unescape = $b, e.uniqueId = _b, e.all = V, e.any = jb, e.detect = X, e.findWhere = Y, e.foldl = db, e.foldr = eb, e.include = U, e.inject = db, e.first = pb, e.last = ub, e.sample = gb, e.take = pb, e.head = pb, Tb(e), e.VERSION = "2.4.1", e.prototype.chain = cc, e.prototype.value = dc, Z(["pop", "push", "reverse", "shift", "sort", "splice", "unshift"], function(a) {
        var b = Bc[a];
        e.prototype[a] = function() {
            var a = this.__wrapped__;
            return b.apply(a, arguments), Tc.spliceObjects || 0 !== a.length || delete a[0], this
        }
    }), Z(["concat", "join", "slice"], function(a) {
        var b = Bc[a];
        e.prototype[a] = function() {
            var a = this.__wrapped__, c = b.apply(a, arguments);
            return this.__chain__ && (c = new f(c), c.__chain__ = !0), c
        }
    }), "function" == typeof define && "object" == typeof define.amd && define.amd ? (wc._ = e, define(function() {
        return e
    })) : xc && yc ? zc ? (yc.exports = e)._ = e : xc._ = e : wc._ = e
}.call(this), function(a) {
    function b() {
        a.each(i, function(a, b) {
            d(a, j) || (b.dom.parent(".eleme_dropdown").removeClass("open"), b.fnHide && b.fnHide(), delete i[a])
        }), j = [], e(i) || (g.unbind("click", b), h = !1)
    }
    function c(c, d, k) {
        var l = c.data("__rsiId") || f();
        if (c.data("__rsiId")) {
            if (i[l])
                return
        } else
            c.data("__rsiId", l);
        i[l] = {dom: c, fnShow: d, fnHide: k}, j.push(l), c.data("__rsiEvent") || (c.bind("click", function() {
            j.push(a(this).data("__rsiId"))
        }), c.data("__rsiEvent", !0)), c.parent(".eleme_dropdown").addClass("open"), d && d(), e(i) && !h && (g.bind("click", b), h = !0)
    }
    function d(b, c) {
        return a.inArray(b, c) >= 0
    }
    function e(b) {
        return Object.keys || (Object.keys = function(a) {
            var b = [];
            for (var c in a)
                a.hasOwnProperty(c) && b.push(c);
            return b
        }), (e = function(b) {
            return a.isArray(b) ? b.length : a.isPlainObject(b) ? Object.keys(b).length : 0
        })(b)
    }
    function f(a) {
        var b = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz".split(""), c = b.length;
        return(f = function(a) {
            a = a || 16, a > 128 && (a = 128);
            for (var d = "", e = 0; a > e; e++)
                d += b[Math.floor(Math.random() * c)];
            return d
        })(a)
    }
    var g = a("html"), h = !1, i = {}, j = [];
    a.fn.uDropdown = function(b, d) {
        this.each(function() {
            var e = a(this), f = e.children(".e_toggle"), g = e.children(".e_dropdown");
            f.bind("click", function() {
                c(g, b, d)
            })
        })
    }, a.fn.uCloseDropdown = function() {
        this.each(function() {
            var b = a(this).children(".e_dropdown"), c = b.data("__rsiId");
            if (c) {
                var d = a.inArray(c, j);
                d >= 0 && j.splice(d, 1)
            }
        }), g.click()
    }
}(jQuery), function(a) {
    a.fn.showAlertTip = function(b, c) {
        if (!this.length)
            return this;
        c = c || {};
        var d, e, f, g, h, i = this, j = i[0].offsetWidth, k = i.position(), l = c.noTemplate ? b : '<span class="error_tip ui-tip-notice error">' + b + "</span>";
        return d = a(l), d.detach().css({top: 0, left: 0}), i.before(d), e = d[0].offsetWidth, f = d[0].offsetHeight, g = c.outer ? k.left : (j - e) / 2 + k.left, h = k.top - f - 10, d.css("right" === c.align ? {right: 0, left: "auto", top: h} : {left: g, top: h}), this
    }, a.fn.removeAlertTip = function() {
        return this.prev(".error_tip").remove(), this
    }
}(jQuery), function() {
    "use strict";
    function a() {
    }
    function b(a) {
        return"undefined" == typeof a
    }
    function c() {
        var a = i.scrollTop();
        _.each(h, function(b) {
            var c = b.getCurrent(a);
            b.handle(c)
        }), f(g), g = null
    }
    function d(a) {
        this.name = a, this.queue = [], this.lastIndex = void 0
    }
    "undefined" == typeof Eleme && (window.Eleme = {});
    var e, f, g, h = {}, i = $(window);
    e = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(a) {
        window.setTimeout(a, 200)
    }, f = window.cancelRequestAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || window.oCancelAnimationFrame || window.msCancelAnimationFrame || window.clearTimeout, i.on("scroll.scrollspy", function() {
        g || (g = e(c))
    }), d.prototype.addSub = function(c) {
        b(c.min) && b(c.max) || (c.onEnter = c.onEnter || a, c.onLeave = c.onLeave || a, this.queue.push(c))
    }, d.prototype.refresh = function() {
        this.queue.length = 0
    }, d.prototype.getCurrent = function(a) {
        for (var b, c, d, e = this.queue.length; b = this.queue[--e]; )
            if (c = b.min, d = b.max, c && d && a > c && d > a || !d && c && a > c || !c && d && d > a)
                return e
    }, d.prototype.handle = function(a) {
        var c = this.queue, d = this.lastIndex, e = c[d], f = c[a];
        b(a) || a === d ? b(a) && d !== a && (e.onLeave(e), this.lastIndex = void 0) : (f.onEnter(f), b(d) || e.onLeave(e), this.lastIndex = a)
    };
    var j = function(a, b, c) {
        if (!a)
            return this;
        var e = h[a];
        return e || (e = h[a] = new d(a)), "object" == typeof b && "undefined" == typeof c && (c = b, b = "append"), "append" === b ? e.addSub({min: c.min, max: c.max, onEnter: c.onEnter, onLeave: c.onLeave}) : "flush" === b && e.refresh(), e
    };
    "undefined" == typeof Eleme.Component && (Eleme.Component = {}), Eleme.Component.scrollspy = j
}();