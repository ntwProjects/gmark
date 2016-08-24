/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*Jssor*/
(function(g, f, b, h, c, d, i) {/*! Jssor */
    new (function() {
    });
    var k = {Qd: function(a) {
            return a
        }, yc: function(a) {
            return-b.cos(a * b.PI) / 2 + .5
        }, Pd: function(a) {
            return-a * (a - 2)
        }}, o = {Td: 37, Ad: 39}, a = new function() {
        var e = this, vb = /\S+/g, T = 1, eb = 2, jb = 3, ib = 4, nb = 5, E, u = 0, l = 0, p = 0, C = 0, D = navigator, sb = D.appName, j = D.userAgent, B;
        function s() {
            if (!E) {
                E = {pb: "mousedown", ec: "mousemove", Z: "mouseup"};
                var a;
                if ((D.pointerEnabled || (a = D.msPointerEnabled)) && j.match(/iemobile/i))
                    E = {pb: a ? "MSPointerDown" : "pointerdown", ec: a ? "MSPointerMove" : "pointermove", Z: a ? "MSPointerUp" : "pointerup", O: a ? "MSPointerCancel" : "pointercancel", Gc: a ? "msTouchAction" : "touchAction", Dc: c};
                else if ("ontouchstart"in g || "createTouch"in f)
                    E = {pb: "touchstart", ec: "touchmove", Z: "touchend", O: "touchcancel", Dc: c, wd: c}
            }
            return E
        }
        function w(i) {
            if (!u)
                if (sb == "Microsoft Internet Explorer" && !!g.attachEvent && !!g.ActiveXObject) {
                    var d = j.indexOf("MSIE");
                    u = T;
                    p = n(j.substring(d + 5, j.indexOf(";", d)));
                    /*@cc_on@*/l = f.documentMode || p
                } else if (sb == "Netscape" && !!g.addEventListener) {
                    var c = j.indexOf("Firefox"), a = j.indexOf("Safari"), h = j.indexOf("Chrome"), b = j.indexOf("AppleWebKit");
                    if (c >= 0) {
                        u = eb;
                        l = n(j.substring(c + 8))
                    } else if (a >= 0) {
                        var k = j.substring(0, a).lastIndexOf("/");
                        u = h >= 0 ? ib : jb;
                        l = n(j.substring(k + 1, a))
                    } else if (j.match(/Trident.*rv[ :]*11\./)) {
                        u = T;
                        l = p = 11
                    }
                    if (b >= 0)
                        C = n(j.substring(b + 12))
                } else {
                    var e = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(j);
                    if (e) {
                        u = nb;
                        l = n(e[2])
                    }
                }
            return i == u
        }
        function q() {
            return w(T)
        }
        function O() {
            return q() && (l < 6 || f.compatMode == "BackCompat")
        }
        function wb() {
            return w(eb)
        }
        function hb() {
            return w(jb)
        }
        function gb() {
            return w(ib)
        }
        function mb() {
            return w(nb)
        }
        function M() {
            return q() && l < 9
        }
        function t(a) {
            if (!B) {
                m(["transform", "WebkitTransform", "msTransform", "MozTransform", "OTransform"], function(b) {
                    if (a.style[b] != i) {
                        B = b;
                        return c
                    }
                });
                B = B || "transform"
            }
            return B
        }
        function qb(a) {
            return Object.prototype.toString.call(a)
        }
        var K;
        function m(a, d) {
            if (qb(a) == "[object Array]") {
                for (var b = 0; b < a.length; b++)
                    if (d(a[b], b, a))
                        return c
            } else
                for (var e in a)
                    if (d(a[e], e, a))
                        return c
        }
        function Ab() {
            if (!K) {
                K = {};
                m(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(a) {
                    K["[object " + a + "]"] = a.toLowerCase()
                })
            }
            return K
        }
        function A(a) {
            return a == h ? String(a) : Ab()[qb(a)] || "object"
        }
        function ub(b, a) {
            setTimeout(b, a || 0)
        }
        function I(b, d, c) {
            var a = !b || b == "inherit" ? "" : b;
            m(d, function(c) {
                var b = c.exec(a);
                if (b) {
                    var d = a.substr(0, b.index), e = a.substr(b.lastIndex + 1, a.length - (b.lastIndex + 1));
                    a = d + e
                }
            });
            a = c + (a.indexOf(" ") != 0 ? " " : "") + a;
            return a
        }
        function db(b, a) {
            if (l < 9)
                b.style.filter = a
        }
        e.Fd = s;
        e.Ob = q;
        e.Id = wb;
        e.Cd = hb;
        e.Bd = gb;
        e.Dd = M;
        e.S = function() {
            return l
        };
        e.Pc = function() {
            w();
            return C
        };
        e.J = ub;
        function W(a) {
            a.constructor === W.caller && a.Vc && a.Vc.apply(a, W.caller.arguments)
        }
        e.Vc = W;
        e.T = function(a) {
            if (e.se(a))
                a = f.getElementById(a);
            return a
        };
        function r(a) {
            return a || g.event
        }
        e.Xc = function(a) {
            a = r(a);
            return a.target || a.srcElement || f
        };
        e.Sc = function(a) {
            a = r(a);
            return{x: a.pageX || a.clientX || 0, y: a.pageY || a.clientY || 0}
        };
        function F(c, d, a) {
            if (a != i)
                c.style[d] = a;
            else {
                var b = c.currentStyle || c.style;
                a = b[d];
                if (a == "" && g.getComputedStyle) {
                    b = c.ownerDocument.defaultView.getComputedStyle(c, h);
                    b && (a = b.getPropertyValue(d) || b[d])
                }
                return a
            }
        }
        function X(b, c, a, d) {
            if (a != i) {
                d && (a += "px");
                F(b, c, a)
            } else
                return n(F(b, c))
        }
        function o(d, a) {
            var b = a & 2, c = a ? X : F;
            return function(e, a) {
                return c(e, d, a, b)
            }
        }
        function yb(b) {
            if (q() && p < 9) {
                var a = /opacity=([^)]*)/.exec(b.style.filter || "");
                return a ? n(a[1]) / 100 : 1
            } else
                return n(b.style.opacity || "1")
        }
        function zb(c, a, f) {
            if (q() && p < 9) {
                var h = c.style.filter || "", i = new RegExp(/[\s]*alpha\([^\)]*\)/g), e = b.round(100 * a), d = "";
                if (e < 100 || f)
                    d = "alpha(opacity=" + e + ") ";
                var g = I(h, [i], d);
                db(c, g)
            } else
                c.style.opacity = a == 1 ? "" : b.round(a * 100) / 100
        }
        e.qe = function(b, c) {
            var a = t(b);
            if (a)
                b.style[a + "Origin"] = c
        };
        e.ve = function(a, c) {
            if (q() && p < 9 || p < 10 && O())
                a.style.zoom = c == 1 ? "" : c;
            else {
                var b = t(a);
                if (b) {
                    var f = "scale(" + c + ")", e = a.style[b], g = new RegExp(/[\s]*scale\(.*?\)/g), d = I(e, [g], f);
                    a.style[b] = d
                }
            }
        };
        e.Ae = function(a) {
            if (!a.style[t(a)] || a.style[t(a)] == "none")
                a.style[t(a)] = "perspective(2000px)"
        };
        var lb = 0, fb = 0;
        e.Be = function(b, a) {
            return M() ? function() {
                var h = c, e = O() ? b.document.body : b.document.documentElement;
                if (e) {
                    var g = e.offsetWidth - lb, f = e.offsetHeight - fb;
                    if (g || f) {
                        lb += g;
                        fb += f
                    } else
                        h = d
                }
                h && a()
            } : a
        };
        e.Kb = function(b, a) {
            return function(c) {
                c = r(c);
                var f = c.type, d = c.relatedTarget || (f == "mouseout" ? c.toElement : c.fromElement);
                (!d || d !== a && !e.ze(a, d)) && b(c)
            }
        };
        e.a = function(a, c, d, b) {
            a = e.T(a);
            if (a.addEventListener) {
                c == "mousewheel" && a.addEventListener("DOMMouseScroll", d, b);
                a.addEventListener(c, d, b)
            } else if (a.attachEvent) {
                a.attachEvent("on" + c, d);
                b && a.setCapture && a.setCapture()
            }
        };
        e.C = function(a, c, d, b) {
            a = e.T(a);
            if (a.removeEventListener) {
                c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
                a.removeEventListener(c, d, b)
            } else if (a.detachEvent) {
                a.detachEvent("on" + c, d);
                b && a.releaseCapture && a.releaseCapture()
            }
        };
        e.fb = function(a) {
            a = r(a);
            a.preventDefault && a.preventDefault();
            a.cancel = c;
            a.returnValue = d
        };
        e.xe = function(a) {
            a = r(a);
            a.stopPropagation && a.stopPropagation();
            a.cancelBubble = c
        };
        e.gb = function(d, c) {
            var a = [].slice.call(arguments, 2), b = function() {
                var b = a.concat([].slice.call(arguments, 0));
                return c.apply(d, b)
            };
            return b
        };
        e.V = function(d, c) {
            for (var b = [], a = d.firstChild; a; a = a.nextSibling)
                (c || a.nodeType == 1) && b.push(a);
            return b
        };
        function pb(a, c, e, b) {
            b = b || "u";
            for (a = a?a.firstChild:h; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    if (S(a, b) == c)
                        return a;
                    if (!e) {
                        var d = pb(a, c, e, b);
                        if (d)
                            return d
                    }
                }
        }
        e.l = pb;
        function Q(a, d, f, b) {
            b = b || "u";
            var c = [];
            for (a = a?a.firstChild:h; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    S(a, b) == d && c.push(a);
                    if (!f) {
                        var e = Q(a, d, f, b);
                        if (e.length)
                            c = c.concat(e)
                    }
                }
            return c
        }
        function kb(a, c, d) {
            for (a = a?a.firstChild:h; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    if (a.tagName == c)
                        return a;
                    if (!d) {
                        var b = kb(a, c, d);
                        if (b)
                            return b
                    }
                }
        }
        e.je = kb;
        e.he = function(b, a) {
            return b.getElementsByTagName(a)
        };
        function L(c) {
            for (var b = 1; b < arguments.length; b++) {
                var a = arguments[b];
                if (a)
                    for (var d in a)
                        c[d] = a[d]
            }
            return c
        }
        e.p = L;
        function rb(b, d) {
            var c = {};
            for (var a in b)
                if (b[a] !== d[a])
                    c[a] = b[a];
            return c
        }
        e.Zd = function(a) {
            return A(a) == "function"
        };
        e.se = function(a) {
            return A(a) == "string"
        };
        e.ee = function(a) {
            return!isNaN(n(a)) && isFinite(a)
        };
        e.f = m;
        function P(a) {
            return f.createElement(a)
        }
        e.M = function() {
            return P("DIV", f)
        };
        e.Ub = function() {
        };
        function U(b, c, a) {
            if (a == i)
                return b.getAttribute(c);
            b.setAttribute(c, a)
        }
        function S(a, b) {
            return U(a, b) || U(a, "data-" + b)
        }
        e.W = U;
        e.s = S;
        function x(b, a) {
            if (a == i)
                return b.className;
            b.className = a
        }
        e.vc = x;
        function tb(b) {
            var a = {};
            m(b, function(b) {
                a[b] = b
            });
            return a
        }
        function N(b, a) {
            return tb((b || "").match(a || vb))
        }
        function Y(b, c) {
            var a = "";
            m(c, function(c) {
                a && (a += b);
                a += c
            });
            return a
        }
        function H(a, c, b) {
            x(a, Y(" ", L(rb(N(x(a)), N(c)), N(b))))
        }
        e.G = function(a) {
            e.B(a, "none")
        };
        e.E = function(a, b) {
            e.B(a, b ? "none" : "")
        };
        e.wc = function(b, a) {
            b.removeAttribute(a)
        };
        e.qd = function() {
            return q() && l < 10
        };
        e.jd = function(d, c) {
            if (c)
                d.style.clip = "rect(" + b.round(c.c) + "px " + b.round(c.k) + "px " + b.round(c.j) + "px " + b.round(c.e) + "px)";
            else {
                var g = d.style.cssText, f = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)], e = I(g, f, "");
                a.qb(d, e)
            }
        };
        e.D = function() {
            return+new Date
        };
        e.q = function(b, a) {
            b.appendChild(a)
        };
        e.zb = function(b, a, c) {
            (c || a.parentNode).insertBefore(b, a)
        };
        e.vb = function(a, b) {
            (b || a.parentNode).removeChild(a)
        };
        e.fd = function(a, b) {
            m(a, function(a) {
                e.vb(a, b)
            })
        };
        e.oc = function(a) {
            e.fd(e.V(a, c), a)
        };
        var n = parseFloat;
        e.cd = n;
        e.ze = function(b, a) {
            var c = f.body;
            while (a && b !== a && c !== a)
                try {
                    a = a.parentNode
                } catch (e) {
                    return d
                }
            return b === a
        };
        function V(d, c, b) {
            var a = d.cloneNode(!c);
            !b && e.wc(a, "id");
            return a
        }
        e.ib = V;
        e.jb = function(f, g) {
            var a = new Image;
            function b(f, c) {
                e.C(a, "load", b);
                e.C(a, "abort", d);
                e.C(a, "error", d);
                g && g(a, c)
            }
            function d(a) {
                b(a, c)
            }
            if (mb() && l < 11.6 || !f)
                b(!f);
            else {
                e.a(a, "load", b);
                e.a(a, "abort", d);
                e.a(a, "error", d);
                a.src = f
            }
        };
        e.Zc = function(d, a, f) {
            var c = d.length + 1;
            function b(b) {
                c--;
                if (a && b && b.src == a.src)
                    a = b;
                !c && f && f(a)
            }
            m(d, function(a) {
                e.jb(a.src, b)
            });
            b()
        };
        e.ad = function(b, g, i, h) {
            if (h)
                b = V(b);
            var c = Q(b, g);
            if (!c.length)
                c = a.he(b, g);
            for (var f = c.length - 1; f > -1; f--) {
                var d = c[f], e = V(i);
                x(e, x(d));
                a.qb(e, d.style.cssText);
                a.zb(e, d);
                a.vb(d)
            }
            return b
        };
        function Cb(b) {
            var o = this, l, q = ["av", "pv", "ds", "dn"], d = [], n, k = 0, h = 0, g = 0;
            function j() {
                H(b, n, d[g || k || h & 2 || h])
            }
            function c() {
                k = 0;
                j();
                e.C(f, s().Z, c);
                s().O && e.C(f, s().O, c)
            }
            function p(a) {
                if (g)
                    e.fb(a);
                else {
                    k = 4;
                    j();
                    e.a(f, s().Z, c);
                    s().O && e.a(f, s().O, c)
                }
            }
            o.nd = function(a) {
                if (a != i) {
                    h = a & 2 || a & 1;
                    j()
                } else
                    return h
            };
            o.Qc = function(a) {
                if (a == i)
                    return!g;
                g = a ? 0 : 3;
                j()
            };
            b = e.T(b);
            l = x(b);
            m(q, function(a) {
                d.push(l + a)
            });
            n = Y(" ", d);
            d.splice(0, 0, "");
            a.a(b, s().pb, p)
        }
        e.Db = function(a) {
            return new Cb(a)
        };
        e.U = F;
        e.cb = o("overflow");
        e.o = o("top", 2);
        e.n = o("left", 2);
        e.g = o("width", 2);
        e.i = o("height", 2);
        e.Hd = o("marginLeft", 2);
        e.vd = o("marginTop", 2);
        e.t = o("position");
        e.B = o("display");
        e.v = o("zIndex", 1);
        e.Gb = function(b, a, c) {
            if (a != i)
                zb(b, a, c);
            else
                return yb(b)
        };
        e.qb = function(a, b) {
            if (b != i)
                a.style.cssText = b;
            else
                return a.style.cssText
        };
        var R = {N: e.Gb, c: e.o, e: e.n, fc: e.g, bc: e.i, Y: e.t, Ie: e.B, hc: e.v}, v;
        function J() {
            if (!v)
                v = L({Je: e.vd, He: e.Hd, b: e.jd}, R);
            return v
        }
        e.bd = J;
        e.I = function(c, b) {
            var a = J();
            m(b, function(d, b) {
                a[b] && a[b](c, d)
            })
        };
        new (function() {
        });
        e.md = function(l, f, t, r, u, w, i) {
            var c = f;
            if (l) {
                c = {};
                for (var e in f) {
                    var x = w[e] || 1, s = u[e] || [0, 1], d = (t - s[0]) / s[1];
                    d = b.min(b.max(d, 0), 1);
                    d = d * x;
                    var p = b.floor(d);
                    if (d != p)
                        d -= p;
                    var v = r[e] || r.dc || k.yc, q = v(d), g, y = l[e];
                    f[e];
                    var m = f[e];
                    if (a.ee(m))
                        g = y + m * q;
                    else {
                        g = a.p({X: {}}, l[e]);
                        a.f(m.X, function(c, b) {
                            var a = c * q;
                            g.X[b] = a;
                            g[b] += a
                        })
                    }
                    c[e] = g
                }
                if (f.m || f.H)
                    ;
            }
            if (f.b && i.nb) {
                var j = c.b.X, o = (j.c || 0) + (j.j || 0), n = (j.e || 0) + (j.k || 0);
                c.e = (c.e || 0) + n;
                c.c = (c.c || 0) + o;
                c.b.e -= n;
                c.b.k -= n;
                c.b.c -= o;
                c.b.j -= o
            }
            if (c.b && a.qd() && !c.b.c && !c.b.e && c.b.k == i.tb && c.b.j == i.kb)
                c.b = h;
            return c
        }
    };
    function l() {
        var b = this, d = [];
        function i(a, b) {
            d.push({Hb: a, Eb: b})
        }
        function h(b, c) {
            a.f(d, function(a, e) {
                a.Hb == b && a.Eb === c && d.splice(e, 1)
            })
        }
        b.eb = b.addEventListener = i;
        b.removeEventListener = h;
        b.d = function(b) {
            var c = [].slice.call(arguments, 1);
            a.f(d, function(a) {
                a.Hb == b && a.Eb.apply(g, c)
            })
        }
    }
    function j(n, z, i, R, P, K) {
        n = n || 0;
        var e = this, r, o, p, x, A = 0, I, J, H, C, E = 0, l = 0, u = 0, D, m = n, j, f, q, y = [], B;
        function M(a) {
            j += a;
            f += a;
            m += a;
            l += a;
            u += a;
            E = a
        }
        function Q(a, b) {
            var c = a - j + n * b;
            M(c);
            return f
        }
        function w(h, n) {
            var d = h;
            if (q && (d >= f || d <= j))
                d = ((d - j) % q + q) % q + j;
            if (!D || x || n || l != d) {
                var g = b.min(d, f);
                g = b.max(g, j);
                if (!D || x || n || g != u) {
                    if (K) {
                        var k = (g - m) / (z || 1);
                        if (i.rc)
                            k = 1 - k;
                        var o = a.md(P, K, k, I, H, J, i);
                        a.f(o, function(b, a) {
                            B[a] && B[a](R, b)
                        })
                    }
                    e.Qb(u - m, g - m)
                }
                u = g;
                a.f(y, function(b, c) {
                    var a = h < l ? y[y.length - c - 1] : b;
                    a.F(h - E, n)
                });
                var r = l, p = h;
                l = d;
                D = c;
                e.mb(r, p)
            }
        }
        function F(a, c, d) {
            c && a.uc(f, 1);
            !d && (f = b.max(f, a.ab() + E));
            y.push(a)
        }
        var s = g.requestAnimationFrame || g.webkitRequestAnimationFrame || g.mozRequestAnimationFrame || g.msRequestAnimationFrame;
        if (a.Cd() && a.S() < 7)
            s = h;
        s = s || function(b) {
            a.J(b, i.mc)
        };
        function L() {
            if (r) {
                var d = a.D(), e = b.min(d - A, i.Cc), c = l + e * p;
                A = d;
                if (c * p >= o * p)
                    c = o;
                w(c);
                if (!x && c * p >= o * p)
                    N(C);
                else
                    s(L)
            }
        }
        function v(d, g, h) {
            if (!r) {
                r = c;
                x = h;
                C = g;
                d = b.max(d, j);
                d = b.min(d, f);
                o = d;
                p = o < l ? -1 : 1;
                e.Ic();
                A = a.D();
                s(L)
            }
        }
        function N(a) {
            if (r) {
                x = r = C = d;
                e.Mc();
                a && a()
            }
        }
        e.xc = function(a, b, c) {
            v(a ? l + a : f, b, c)
        };
        e.nc = v;
        e.L = N;
        e.yd = function(a) {
            v(a)
        };
        e.u = function() {
            return l
        };
        e.Bc = function() {
            return o
        };
        e.bb = function() {
            return u
        };
        e.F = w;
        e.Hc = function() {
            w(j, c)
        };
        e.nb = function(a) {
            w(l + a)
        };
        e.Oc = function() {
            return r
        };
        e.Ud = function(a) {
            q = a
        };
        e.uc = Q;
        e.Nc = M;
        e.Yb = function(a) {
            F(a, 0)
        };
        e.Zb = function(a) {
            F(a, 1)
        };
        e.ab = function() {
            return f
        };
        e.mb = e.Ic = e.Mc = e.Qb = a.Ub;
        e.Vb = a.D();
        i = a.p({mc: 16, Cc: 50}, i);
        q = i.Lc;
        B = a.p({}, a.bd(), i.Pb);
        j = m = n;
        f = n + z;
        J = i.gc || {};
        H = i.Xb || {};
        I = a.p({dc: a.Zd(i.z) && i.z || k.yc}, i.z)
    }
    new (function() {
    });
    var e = function(q, ic) {
        var n = this;
        function Hc() {
            var a = this;
            j.call(a, -1e8, 2e8);
            a.sd = function() {
                var c = a.bb(), d = b.floor(c), f = u(d), e = c - b.floor(c);
                return{Q: f, hd: d, Y: e}
            };
            a.mb = function(d, a) {
                var f = b.floor(a);
                if (f != a && a > d)
                    f++;
                Ub(f, c);
                n.d(e.ld, u(a), u(d), a, d)
            }
        }
        function Gc() {
            var b = this;
            j.call(b, 0, 0, {Lc: t});
            a.f(D, function(a) {
                E & 1 && a.Ud(t);
                b.Zb(a);
                a.Nc(lb / cc)
            })
        }
        function Fc() {
            var a = this, b = Tb.R;
            j.call(a, -1, 2, {z: k.Qd, Pb: {Y: ac}, Lc: t}, b, {Y: 1}, {Y: -2});
            a.lb = b
        }
        function sc(m, l) {
            var a = this, f, g, i, k, b;
            j.call(a, -1e8, 2e8, {Cc: 100});
            a.Ic = function() {
                T = c;
                Y = h;
                n.d(e.gd, u(y.u()), y.u())
            };
            a.Mc = function() {
                T = d;
                k = d;
                var a = y.sd();
                n.d(e.od, u(y.u()), y.u());
                !a.Y && Kc(a.hd, s)
            };
            a.mb = function(e, d) {
                var a;
                if (k)
                    a = b;
                else {
                    a = g;
                    if (i) {
                        var c = d / i;
                        a = p.id(c) * (g - f) + f
                    }
                }
                y.F(a)
            };
            a.Ab = function(b, d, c, e) {
                f = b;
                g = d;
                i = c;
                y.F(b);
                a.F(0);
                a.nc(c, e)
            };
            a.rd = function(d) {
                k = c;
                b = d;
                a.xc(d, h, c)
            };
            a.pd = function(a) {
                b = a
            };
            y = new Hc;
            y.Yb(m);
            y.Yb(l)
        }
        function tc() {
            var c = this, b = Zb();
            a.v(b, 0);
            a.U(b, "pointerEvents", "none");
            c.R = b;
            c.wb = function() {
                a.G(b);
                a.oc(b)
            }
        }
        function Ec(o, i) {
            var f = this, r, x, J, y, k, A = [], H, q, S, I, O, G, g, w, m;
            j.call(f, -v, v + 1, {});
            function F(a) {
                x && x.ub();
                r && r.ub();
                R(o, a);
                G = c;
                r = new P.r(o, P, 1);
                x = new P.r(o, P);
                x.Hc();
                r.Hc()
            }
            function X() {
                r.Vb < P.Vb && F()
            }
            function K(o, r, m) {
                if (!I) {
                    I = c;
                    if (k && m) {
                        var g = m.width, b = m.height, l = g, j = b;
                        if (g && b && p.hb) {
                            if (p.hb & 3 && (!(p.hb & 4) || g > M || b > L)) {
                                var h = d, q = M / L * b / g;
                                if (p.hb & 1)
                                    h = q > 1;
                                else if (p.hb & 2)
                                    h = q < 1;
                                l = h ? g * L / b : M;
                                j = h ? L : b * M / g
                            }
                            a.g(k, l);
                            a.i(k, j);
                            a.o(k, (L - j) / 2);
                            a.n(k, (M - l) / 2)
                        }
                        a.t(k, "absolute");
                        n.d(e.ke, i)
                    }
                }
                a.G(r);
                o && o(f)
            }
            function T(b, c, d, e) {
                if (e == Y && s == i && U)
                    if (!Jc) {
                        var a = u(b);
                        B.ed(a, i, c, f, d);
                        c.le();
                        eb.uc(a, 1);
                        eb.F(a);
                        z.Ab(b, b, 0)
                    }
            }
            function ab(b) {
                if (b == Y && s == i) {
                    if (!g) {
                        var a = h;
                        if (B)
                            if (B.Q == i)
                                a = B.Yc();
                            else
                                B.wb();
                        X();
                        g = new Bc(o, i, a, f.me(), f.de());
                        g.qc(m)
                    }
                    !g.Oc() && g.ac()
                }
            }
            function Q(d, c, e) {
                if (d == i) {
                    if (d != c)
                        D[c] && D[c].fe();
                    else
                        !e && g && g.ie();
                    m && m.Qc();
                    var j = Y = a.D();
                    f.jb(a.gb(h, ab, j))
                } else {
                    var l = b.abs(i - d), k = v + p.ge - 1;
                    (!O || l <= k) && f.jb()
                }
            }
            function cb() {
                if (s == i && g) {
                    g.L();
                    m && m.dd();
                    m && m.be();
                    g.sc()
                }
            }
            function db() {
                s == i && g && g.L()
            }
            function E(c) {
                if (W) {
                    a.xe(c);
                    var b = a.Xc(c);
                    while (b && o !== b) {
                        b.tagName == "A" && a.fb(c);
                        try {
                            b = b.parentNode
                        } catch (d) {
                            break
                        }
                    }
                }
            }
            function Z(a) {
                !W && n.d(e.ae, i, a)
            }
            function N() {
                m = w.pInstance;
                g && g.qc(m)
            }
            f.jb = function(d, b) {
                b = b || y;
                if (A.length && !I) {
                    a.E(b);
                    if (!S) {
                        S = c;
                        n.d(e.ce, i);
                        a.f(A, function(b) {
                            if (!b.src) {
                                b.src = a.s(b, "src2");
                                a.B(b, b["display-origin"])
                            }
                        })
                    }
                    a.Zc(A, k, a.gb(h, K, d, b))
                } else
                    K(d, b)
            };
            f.ne = function() {
                if (B) {
                    var b = B.kd(t);
                    if (b) {
                        var e = Y = a.D(), c = i + Yb, d = D[u(c)];
                        return d.jb(a.gb(h, T, c, d, b, e), y)
                    }
                }
                fb(s + p.ye * Yb)
            };
            f.Fb = function() {
                Q(i, i, c)
            };
            f.fe = function() {
                m && m.dd();
                m && m.be();
                f.lc();
                g && g.we();
                g = h;
                F()
            };
            f.le = function() {
                a.G(o)
            };
            f.lc = function() {
                a.E(o)
            };
            f.pe = function() {
                m && m.Qc()
            };
            function R(b, f, e) {
                if (a.W(b, "jssor-slider"))
                    return;
                e = e || 0;
                if (!G) {
                    if (b.tagName == "IMG") {
                        A.push(b);
                        if (!b.src) {
                            O = c;
                            b["display-origin"] = a.B(b);
                            a.G(b)
                        }
                    }
                    a.Dd() && a.v(b, (a.v(b) || 0) + 1);
                    if (p.Tc && a.Pc())
                        (!bb || a.Pc() < 534 || !ib && !a.Bd()) && a.Ae(b)
                }
                var g = a.V(b);
                a.f(g, function(g) {
                    var i = g.tagName, l = a.s(g, "u");
                    if (l == "player" && !w) {
                        w = g;
                        if (w.pInstance)
                            N();
                        else
                            a.a(w, "dataavailable", N)
                    }
                    if (l == "caption") {
                        if (!a.Ob() && !f) {
                            if (i == "A") {
                                a.C(g, "click", E);
                                a.W(g, "jssor-content", h)
                            }
                            var j = a.ib(g, d, c);
                            a.zb(j, g, b);
                            a.vb(g, b);
                            g = j;
                            f = c
                        }
                    } else if (!G && !e && !k) {
                        if (i == "A") {
                            if (a.s(g, "u") == "image")
                                k = a.je(g, "IMG");
                            else
                                k = a.l(g, "image", c);
                            if (k) {
                                H = g;
                                a.I(H, V);
                                q = a.ib(H, c);
                                a.a(q, "click", E);
                                a.B(q, "block");
                                a.I(q, V);
                                a.Gb(q, 0);
                                a.U(q, "backgroundColor", "#000")
                            }
                        } else if (i == "IMG" && a.s(g, "u") == "image")
                            k = g;
                        if (k) {
                            k.border = 0;
                            a.I(k, V)
                        }
                    }
                    if (!a.W(g, "jssor-content")) {
                        a.a(g, "click", E);
                        a.W(g, "jssor-content", c)
                    }
                    R(g, f, e + 1)
                })
            }
            f.Qb = function(c, b) {
                var a = v - b;
                ac(J, a)
            };
            f.me = function() {
                return r
            };
            f.de = function() {
                return x
            };
            f.Q = i;
            l.call(f);
            var C = a.l(o, "thumb", c);
            if (C) {
                f.oe = a.ib(C);
                a.wc(C, "id");
                a.G(C)
            }
            a.E(o);
            y = a.ib(hb);
            a.v(y, 1e3);
            a.a(o, "click", Z);
            F(c);
            f.Jc = k;
            f.Uc = q;
            f.lb = J = o;
            a.q(J, y);
            n.eb(203, Q);
            n.eb(28, db);
            n.eb(24, cb)
        }
        function Bc(F, i, q, v, u) {
            var b = this, l = 0, x = 0, m, h, f, g, k, r, w, t, o = D[i];
            j.call(b, 0, 0);
            function y() {
                a.oc(Q);
                gc && k && o.Uc && a.q(Q, o.Uc);
                a.E(Q, !k && o.Jc)
            }
            function z() {
                if (r) {
                    r = d;
                    n.d(e.re, i, f, l, h, f, g);
                    b.F(h)
                }
                b.ac()
            }
            function A(a) {
                t = a;
                b.L();
                b.ac()
            }
            b.ac = function() {
                var a = b.bb();
                if (!C && !T && !t && s == i) {
                    if (!a) {
                        if (m && !k) {
                            k = c;
                            b.sc(c);
                            n.d(e.ue, i, l, x, m, g)
                        }
                        y()
                    }
                    var d, p = e.Rc;
                    if (a != g)
                        if (a == f)
                            d = g;
                        else if (a == h)
                            d = f;
                        else if (!a)
                            d = h;
                        else if (a > f) {
                            r = c;
                            d = f;
                            p = e.te
                        } else
                            d = b.Bc();
                    n.d(p, i, a, l, h, f, g);
                    var j = U && (!K || I);
                    if (a == g)
                        (f != g && !(K & 12) || j) && o.ne();
                    else
                        (j || a != f) && b.nc(d, z)
                }
            };
            b.ie = function() {
                f == g && f == b.bb() && b.F(h)
            };
            b.we = function() {
                B && B.Q == i && B.wb();
                var a = b.bb();
                a < g && n.d(e.Rc, i, -a - 1, l, h, f, g)
            };
            b.sc = function(b) {
                q && a.cb(nb, b && q.Lb.Fe ? "" : "hidden")
            };
            b.Qb = function(b, a) {
                if (k && a >= m) {
                    k = d;
                    y();
                    o.lc();
                    B.wb();
                    n.d(e.Yd, i, l, x, m, g)
                }
                n.d(e.Ed, i, a, l, h, f, g)
            };
            b.qc = function(a) {
                if (a && !w) {
                    w = a;
                    a.eb($JssorPlayer$.Ld, A)
                }
            };
            q && b.Zb(q);
            m = b.ab();
            b.ab();
            b.Zb(v);
            h = v.ab();
            f = h + (a.cd(a.s(F, "idle")) || p.Ec);
            u.Nc(f);
            b.Yb(u);
            g = b.ab()
        }
        function ac(e, g) {
            var f = w > 0 ? w : mb, c = Cb * g * (f & 1), d = Db * g * (f >> 1 & 1);
            c = b.round(c);
            d = b.round(d);
            if (a.Ob() && a.S() >= 10 && a.S() < 11)
                e.style.msTransform = "translate(" + c + "px, " + d + "px)";
            else {
                a.n(e, c);
                a.o(e, d)
            }
        }
        function yc(b) {
            var c = a.Xc(b);
            !O && !a.s(c, "nodrag") && wc() && xc(b)
        }
        function Pb() {
            sb = T;
            Kb = z.Bc();
            G = y.u()
        }
        function jc() {
            Pb();
            if (C || !I && K & 12) {
                z.L();
                n.d(e.Jd)
            }
        }
        function hc(e) {
            e && Pb();
            if (!C && (I || !(K & 12)) && !z.Oc()) {
                var c = y.u(), a = b.ceil(G);
                if (e && b.abs(H) >= p.Bb) {
                    a = b.ceil(c);
                    a += kb
                }
                if (!(E & 1))
                    a = b.min(t - v, b.max(a, 0));
                var d = b.abs(a - c);
                d = 1 - b.pow(1 - d, 5);
                if (!W && sb)
                    z.yd(Kb);
                else if (c == a) {
                    vb.pe();
                    vb.Fb()
                } else
                    z.Ab(c, a, d * Vb)
            }
        }
        function rc(b) {
            a.fb(b)
        }
        function xc(b) {
            C = c;
            Bb = d;
            Y = h;
            a.a(f, fc, dc);
            a.D();
            W = 0;
            jc();
            if (!sb)
                w = 0;
            if (Lb) {
                var i = b.touches[0];
                wb = i.clientX;
                xb = i.clientY
            } else {
                var g = a.Sc(b);
                wb = g.x;
                xb = g.y;
                a.Id() && a.S() < 4 && a.fb(b)
            }
            H = 0;
            gb = 0;
            kb = 0;
            n.d(e.td, u(G), G, b)
        }
        function dc(l) {
            if (C) {
                var e;
                if (Lb) {
                    var k = l.touches;
                    if (k && k.length > 0)
                        e = {x: k[0].clientX, y: k[0].clientY}
                } else
                    e = a.Sc(l);
                if (e) {
                    var i = e.x - wb, j = e.y - xb;
                    if (b.floor(G) != G)
                        w = w || mb & O;
                    if ((i || j) && !w) {
                        if (O == 3)
                            if (b.abs(j) > b.abs(i))
                                w = 2;
                            else
                                w = 1;
                        else
                            w = O;
                        if (bb && w == 1 && b.abs(j) - b.abs(i) > 3)
                            Bb = c
                    }
                    if (w) {
                        var d = j, h = Db;
                        if (w == 1) {
                            d = i;
                            h = Cb
                        }
                        if (!(E & 1)) {
                            if (d > 0) {
                                var f = h * s, g = d - f;
                                if (g > 0)
                                    d = f + b.sqrt(g) * 5
                            }
                            if (d < 0) {
                                var f = h * (t - v - s), g = -d - f;
                                if (g > 0)
                                    d = -f - b.sqrt(g) * 5
                            }
                        }
                        if (H - gb < -2)
                            kb = 0;
                        else if (H - gb > 2)
                            kb = -1;
                        gb = H;
                        H = d;
                        ub = G - H / h / (db || 1);
                        if (H && w && !Bb) {
                            a.fb(l);
                            if (!T)
                                z.rd(ub);
                            else
                                z.pd(ub)
                        }
                    }
                }
            }
        }
        function Fb() {
            uc();
            if (C) {
                C = d;
                a.D();
                a.C(f, fc, dc);
                W = H;
                z.L();
                var b = y.u();
                n.d(e.ud, u(b), b, u(G), G);
                hc(c)
            }
        }
        function qc(a) {
            D[s];
            s = u(a);
            vb = D[s];
            Ub(a);
            return s
        }
        function Kc(a, b) {
            w = 0;
            qc(a);
            n.d(e.zd, u(a), b)
        }
        function Ub(b, c) {
            zb = b;
            a.f(S, function(a) {
                a.cc(u(b), b, c)
            })
        }
        function wc() {
            var b = e.Wc || 0, a = R;
            if (bb)
                a & 1 && (a &= 1);
            e.Wc |= a;
            return O = a & ~b
        }
        function uc() {
            if (O) {
                e.Wc &= ~R;
                O = 0
            }
        }
        function Zb() {
            var b = a.M();
            a.I(b, V);
            a.t(b, "absolute");
            return b
        }
        function u(a) {
            return(a % t + t) % t
        }
        function nc(a, c) {
            if (c)
                if (!E) {
                    a = b.min(b.max(a + zb, 0), t - v);
                    c = d
                } else if (E & 2) {
                    a = u(a + zb);
                    c = d
                }
            fb(a, p.sb, c)
        }
        function Ab() {
            a.f(S, function(a) {
                a.jc(a.rb.Ac <= I)
            })
        }
        function lc() {
            if (!I) {
                I = 1;
                Ab();
                if (!C) {
                    K & 12 && hc();
                    K & 3 && D[s].Fb()
                }
            }
        }
        function kc() {
            if (I) {
                I = 0;
                Ab();
                C || !(K & 12) || jc()
            }
        }
        function mc() {
            V = {fc: M, bc: L, c: 0, e: 0};
            a.f(Z, function(b) {
                a.I(b, V);
                a.t(b, "absolute");
                a.cb(b, "hidden");
                a.G(b)
            });
            a.I(hb, V)
        }
        function qb(b, a) {
            fb(b, a, c)
        }
        function fb(g, f, k) {
            if (Rb && (!C || p.zc)) {
                T = c;
                C = d;
                z.L();
                if (f == i)
                    f = Vb;
                var e = Gb.bb(), a = g;
                if (k) {
                    a = e + g;
                    if (g > 0)
                        a = b.ceil(a);
                    else
                        a = b.floor(a)
                }
                if (E & 2)
                    a = u(a);
                if (!(E & 1))
                    a = b.max(0, b.min(a, t - v));
                var j = (a - e) % t;
                a = e + j;
                var h = e == a ? 0 : f * b.abs(j);
                h = b.min(h, f * v * 1.5);
                z.Ab(e, a, h || 1)
            }
        }
        n.xd = fb;
        n.xc = function() {
            if (!U) {
                U = c;
                D[s] && D[s].Fb()
            }
        };
        n.Rd = function() {
            return W
        };
        function cb() {
            return a.g(x || q)
        }
        function ob() {
            return a.i(x || q)
        }
        n.tb = cb;
        n.kb = ob;
        function Hb(c, e) {
            if (c == i)
                return a.g(q);
            if (!x) {
                var b = a.M(f);
                a.vc(b, a.vc(q));
                a.qb(b, a.qb(q));
                a.B(b, "block");
                a.t(b, "relative");
                a.o(b, 0);
                a.n(b, 0);
                a.cb(b, "visible");
                x = a.M(f);
                a.t(x, "absolute");
                a.o(x, 0);
                a.n(x, 0);
                a.g(x, a.g(q));
                a.i(x, a.i(q));
                a.qe(x, "0 0");
                a.q(x, b);
                var k = a.V(q);
                a.q(q, x);
                a.U(q, "backgroundImage", "");
                var j = {navigator: ab && ab.K == d, arrowleft: F && F.K == d, arrowright: F && F.K == d, thumbnavigator: J && J.K == d, thumbwrapper: J && J.K == d};
                a.f(k, function(c) {
                    a.q(j[a.s(c, "u")] ? q : b, c)
                })
            }
            db = c / (e ? a.i : a.g)(x);
            a.ve(x, db);
            var h = e ? db * cb() : c, g = e ? c : db * ob();
            a.g(q, h);
            a.i(q, g);
            a.f(S, function(a) {
                a.Wb(h, g)
            })
        }
        n.Sd = Hb;
        n.Kc = function(a) {
            var d = b.ceil(u(lb / cc)), c = u(a - s + d);
            if (c > v) {
                if (a - s > t / 2)
                    a -= t;
                else if (a - s <= -t / 2)
                    a += t
            } else
                a = s + c - d;
            return a
        };
        l.call(n);
        n.R = q = a.T(q);
        var p = a.p({hb: 0, ge: 1, Rb: 0, Tb: d, yb: 1, Tc: c, zc: c, ye: 1, Ec: 3e3, Sb: 1, sb: 500, id: k.Pd, Bb: 20, ic: 0, A: 1, kc: 0, Fc: 1, ob: 1, Cb: 1}, ic), mb = p.ob & 3, Yb = (p.ob & 4) / -4 || 1, jb = p.Ge, P = a.p({r: r}, p.Ce), ab = p.Ee, F = p.Xd, J = p.Vd, X = !p.Fc, x, A = a.l(q, "slides", X), hb = a.l(q, "loading", X) || a.M(f), Jb = a.l(q, "navigator", X), ec = a.l(q, "arrowleft", X), bc = a.l(q, "arrowright", X), Ib = a.l(q, "thumbnavigator", X), pc = a.g(A), oc = a.i(A), V, Z = [], zc = a.V(A);
        a.f(zc, function(b) {
            b.tagName == "DIV" && !a.s(b, "u") && Z.push(b)
        });
        var s = -1, zb, vb, t = Z.length, M = p.Wd || pc, L = p.Md || oc, Wb = p.ic, Cb = M + Wb, Db = L + Wb, cc = mb & 1 ? Cb : Db, v = b.min(p.A, t), nb, w, O, Bb, S = [], Qb, Sb, Ob, gc, Jc, U, K = p.Sb, Vb = p.sb, tb, ib, lb, Rb = v < t, E = Rb ? p.yb : 0, R, W, I = 1, T, C, Y, wb = 0, xb = 0, H, gb, kb, Gb, y, eb, z, Tb = new tc, db;
        U = p.Tb;
        n.rb = ic;
        mc();
        a.W(q, "jssor-slider", c);
        a.v(A, a.v(A) || 0);
        a.t(A, "absolute");
        nb = a.ib(A, c);
        a.zb(nb, A);
        if (jb) {
            gc = jb.De;
            tb = jb.r;
            ib = v == 1 && t > 1 && tb && (!a.Ob() || a.S() >= 8)
        }
        lb = ib || v >= t || !(E & 1) ? 0 : p.kc;
        R = (v > 1 || lb ? mb : -1) & p.Cb;
        var yb = A, D = [], B, Q, N = a.Fd(), Ac = N.pb, fc = N.ec, Ic = N.Z, Xb = N.O, Lb = N.wd, bb = N.Dc, G, sb, Kb, ub;
        if (N.Gc)
            if (R) {
                var Eb = "auto";
                if (R == 2)
                    Eb = "pan-x";
                else if (R)
                    Eb = "pan-y";
                a.U(yb, N.Gc, Eb)
            }
        eb = new Fc;
        if (ib)
            B = new tb(Tb, M, L, jb, bb);
        a.q(nb, eb.lb);
        a.cb(A, "hidden");
        Q = Zb();
        a.U(Q, "backgroundColor", "#000");
        a.Gb(Q, 0);
        a.zb(Q, yb.firstChild, yb);
        for (var rb = 0; rb < Z.length; rb++) {
            var Cc = Z[rb], Dc = new Ec(Cc, rb);
            D.push(Dc)
        }
        a.G(hb);
        Gb = new Gc;
        z = new sc(Gb, eb);
        if (R) {
            a.a(A, Ac, yc);
            a.a(A, "dragstart", rc);
            a.a(f, Ic, Fb);
            a.a(g, "blur", function() {
                Fb()
            });
            Xb && a.a(f, Xb, Fb)
        }
        K &= bb ? 10 : 5;
        if (Jb && ab) {
            Qb = new ab.r(Jb, ab, cb(), ob());
            S.push(Qb)
        }
        if (F && ec && bc) {
            F.yb = E;
            F.A = v;
            Sb = new F.r(ec, bc, F, cb(), ob());
            S.push(Sb)
        }
        if (Ib && J) {
            J.Rb = p.Rb;
            Ob = new J.r(Ib, J);
            S.push(Ob)
        }
        a.f(S, function(a) {
            a.Mb(t, D, hb);
            a.eb(m.Ib, nc)
        });
        Hb(cb());
        a.a(q, "mouseout", a.Kb(lc, q));
        a.a(q, "mouseover", a.Kb(kc, q));
        Ab();
        p.Kd && a.a(f, "keydown", function(a) {
            if (a.keyCode == o.Td)
                qb(-1);
            else
                a.keyCode == o.Ad && qb(1)
        });
        var pb = p.Rb;
        if (!(E & 1))
            pb = b.max(0, b.min(pb, t - v));
        z.Ab(pb, pb, 0)
    };
    e.ae = 21;
    e.td = 22;
    e.ud = 23;
    e.gd = 24;
    e.od = 25;
    e.ce = 26;
    e.ke = 27;
    e.Jd = 28;
    e.ld = 202;
    e.zd = 203;
    e.ue = 206;
    e.Yd = 207;
    e.Ed = 208;
    e.Rc = 209;
    e.te = 210;
    e.re = 211;
    var m = {Ib: 1};
    var s = function(e, g, j, o) {
        var b = this;
        l.call(b);
        var v, u, f, i, k, r = a.g(e), p = a.i(e);
        function n(a) {
            b.d(m.Ib, a, c)
        }
        function s(b) {
            a.E(e, b || !j.yb && f == 0);
            a.E(g, b || !j.yb && f >= u - j.A);
            v = b
        }
        b.cc = function(b, a, c) {
            if (c)
                f = a;
            else {
                f = b;
                s(v)
            }
        };
        b.jc = s;
        var t;
        b.Wb = function(f, b) {
            if (!t || i.K == d) {
                if (i.P & 1) {
                    a.n(e, (o - r) / 2);
                    a.n(g, (o - r) / 2)
                }
                if (i.P & 2) {
                    a.o(e, (b - p) / 2);
                    a.o(g, (b - p) / 2)
                }
                t = c
            }
        };
        var q;
        b.Mb = function(b) {
            u = b;
            f = 0;
            if (!q) {
                a.a(e, "click", a.gb(h, n, -k));
                a.a(g, "click", a.gb(h, n, k));
                a.Db(e);
                a.Db(g);
                q = c
            }
        };
        b.rb = i = a.p({tc: 1}, j);
        k = i.tc
    }, q = function(j, A) {
        var i = this, x, o, f, u = [], y, w, g, p, q, t, s, n, r, h, k;
        l.call(i);
        j = a.T(j);
        function z(n, d) {
            var e = this, b, l, j;
            function p() {
                l.nd(o == d)
            }
            function h() {
                if (!r.Rd()) {
                    var a = g - d % g, b = r.Kc((d + a) / g - 1), c = b * g + g - a;
                    i.d(m.Ib, c)
                }
            }
            e.Q = d;
            e.pc = p;
            j = n.oe || n.Jc || a.M();
            e.lb = b = a.ad(k, "thumbnailtemplate", j, c);
            l = a.Db(b);
            f.xb & 1 && a.a(b, "click", h);
            f.xb & 2 && a.a(b, "mouseover", a.Kb(h, b))
        }
        i.cc = function(c, d, e) {
            var a = o;
            o = c;
            a != -1 && u[a].pc();
            u[c].pc();
            !e && r.xd(r.Kc(b.floor(d / g)))
        };
        i.jc = function(b) {
            a.E(j, b)
        };
        i.Wb = a.Ub;
        var v;
        i.Mb = function(F, D) {
            if (!v) {
                x = F;
                b.ceil(x / g);
                o = -1;
                n = b.min(n, D.length);
                var i = f.db & 1, m = t + (t + p) * (g - 1) * (1 - i), l = s + (s + q) * (g - 1) * i, C = m + (m + p) * (n - 1) * i, A = l + (l + q) * (n - 1) * (1 - i);
                a.t(h, "absolute");
                a.cb(h, "hidden");
                f.P & 1 && a.n(h, (y - C) / 2);
                f.P & 2 && a.o(h, (w - A) / 2);
                a.g(h, C);
                a.i(h, A);
                var k = [];
                a.f(D, function(l, e) {
                    var f = new z(l, e), d = f.lb, c = b.floor(e / g), j = e % g;
                    a.n(d, (t + p) * j * (1 - i));
                    a.o(d, (s + q) * j * i);
                    if (!k[c]) {
                        k[c] = a.M();
                        a.q(h, k[c])
                    }
                    a.q(k[c], d);
                    u.push(f)
                });
                var E = a.p({Tc: d, Tb: d, zc: d, Wd: m, Md: l, ic: p * i + q * (1 - i), Bb: 12, sb: 200, Sb: 1, ob: f.db, Cb: f.Od ? 0 : f.db}, f);
                r = new e(j, E);
                v = c
            }
        };
        i.rb = f = a.p({Nb: 3, Jb: 3, A: 1, db: 1, P: 3, xb: 1}, A);
        y = a.g(j);
        w = a.i(j);
        h = a.l(j, "slides", c);
        k = a.l(h, "prototype");
        t = a.g(k);
        s = a.i(k);
        a.vb(k, h);
        g = f.Nd || 1;
        p = f.Nb;
        q = f.Jb;
        n = f.A
    };
    function r() {
        j.call(this, 0, 0);
        this.ub = a.Ub
    }
    jssor_slider1_starter = function(j) {
        var k = {Tb: c, Ec: 4e3, Sb: 1, Kd: c, sb: 800, Bb: 20, ic: 0, A: 1, kc: 0, Fc: 1, ob: 1, Cb: 1, Xd: {r: s, Ac: 1, P: 2, tc: 1}, Vd: {r: q, Ac: 2, xb: 1, P: 0, Nd: 1, Nb: 3, Jb: 3, A: 9, kc: 260, db: 1, Od: d}}, i = new e(j, k);
        function h() {
            var c = f.body.clientWidth;
            if (c)
                i.Sd(b.min(c, 980));
            else
                a.J(h, 30)
        }
        h();
        a.a(g, "load", h);
        a.a(g, "resize", a.Be(g, h));
        a.a(g, "orientationchange", h)
    }
})(window, document, Math, null, true, false)
