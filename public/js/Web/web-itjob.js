window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "a2159222e4",
            "applicationID": "3826099",
            "transactionName": "dQoIRERZCVVWQBhfC1QWSVlYUgBB",
            "queueTime": 0,
            "applicationTime": 83,
            "agent": ""
        }
        window.NREUM || (NREUM = {}), __nr_require = function(e, n, t) {
            function r(t) {
                if (!n[t]) {
                    var o = n[t] = {
                        exports: {}
                    };
                    e[t][0].call(o.exports, function(n) {
                        var o = e[t][1][n];
                        return r(o || n)
                    }, o, o.exports)
                }
                return n[t].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < t.length; o++) r(t[o]);
            return r
        }({
            1: [function(e, n, t) {
                function r() {}

                function o(e, n, t) {
                    return function() {
                        return i(e, [c.now()].concat(u(arguments)), n ? null : this, t), n ? void 0 : this
                    }
                }
                var i = e("handle"),
                    a = e(3),
                    u = e(4),
                    f = e("ee").get("tracer"),
                    c = e("loader"),
                    s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    d = "api-",
                    l = d + "ixn-";
                a(p, function(e, n) {
                    s[n] = o(d + n, !0, "api")
                }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), n.exports = newrelic, s.interaction = function() {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function(e, n) {
                        var t = {},
                            r = this,
                            o = "function" == typeof n;
                        return i(l + "tracer", [c.now(), e, t], r),
                            function() {
                                if (f.emit((o ? "" : "no-") + "fn-start", [c.now(), r, o], t), o) try {
                                    return n.apply(this, arguments)
                                } catch (e) {
                                    throw f.emit("fn-err", [arguments, this, e], t), e
                                } finally {
                                    f.emit("fn-end", [c.now()], t)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, n) {
                    m[n] = o(l + n)
                }), newrelic.noticeError = function(e) {
                    "string" == typeof e && (e = new Error(e)), i("err", [e, c.now()])
                }
            }, {}],
            2: [function(e, n, t) {
                function r(e, n) {
                    if (!o) return !1;
                    if (e !== o) return !1;
                    if (!n) return !0;
                    if (!i) return !1;
                    for (var t = i.split("."), r = n.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== t[a]) return !1;
                    return !0
                }
                var o = null,
                    i = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var u = navigator.userAgent,
                        f = u.match(a);
                    f && u.indexOf("Chrome") === -1 && u.indexOf("Chromium") === -1 && (o = "Safari", i = f[1])
                }
                n.exports = {
                    agent: o,
                    version: i,
                    match: r
                }
            }, {}],
            3: [function(e, n, t) {
                function r(e, n) {
                    var t = [],
                        r = "",
                        i = 0;
                    for (r in e) o.call(e, r) && (t[i] = n(r, e[r]), i += 1);
                    return t
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            4: [function(e, n, t) {
                function r(e, n, t) {
                    n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0);
                    for (var r = -1, o = t - n || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = e[n + r];
                    return i
                }
                n.exports = r
            }, {}],
            5: [function(e, n, t) {
                n.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function(e, n, t) {
                function r() {}

                function o(e) {
                    function n(e) {
                        return e && e instanceof r ? e : e ? f(e, u, i) : i()
                    }

                    function t(t, r, o, i) {
                        if (!d.aborted || i) {
                            e && e(t, r, o);
                            for (var a = n(o), u = v(t), f = u.length, c = 0; c < f; c++) u[c].apply(a, r);
                            var p = s[y[t]];
                            return p && p.push([b, t, r, a]), a
                        }
                    }

                    function l(e, n) {
                        h[e] = v(e).concat(n)
                    }

                    function m(e, n) {
                        var t = h[e];
                        if (t)
                            for (var r = 0; r < t.length; r++) t[r] === n && t.splice(r, 1)
                    }

                    function v(e) {
                        return h[e] || []
                    }

                    function g(e) {
                        return p[e] = p[e] || o(t)
                    }

                    function w(e, n) {
                        c(e, function(e, t) {
                            n = n || "feature", y[t] = n, n in s || (s[n] = [])
                        })
                    }
                    var h = {},
                        y = {},
                        b = {
                            on: l,
                            addEventListener: l,
                            removeEventListener: m,
                            emit: t,
                            get: g,
                            listeners: v,
                            context: n,
                            buffer: w,
                            abort: a,
                            aborted: !1
                        };
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {})
                }
                var u = "nr@context",
                    f = e("gos"),
                    c = e(3),
                    s = {},
                    p = {},
                    d = n.exports = o();
                d.backlog = s
            }, {}],
            gos: [function(e, n, t) {
                function r(e, n, t) {
                    if (o.call(e, n)) return e[n];
                    var r = t();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(e, n, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return e[n] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            handle: [function(e, n, t) {
                function r(e, n, t, r) {
                    o.buffer([e], r), o.emit(e, n, t)
                }
                var o = e("ee").get("handle");
                n.exports = r, r.ee = o
            }, {}],
            id: [function(e, n, t) {
                function r(e) {
                    var n = typeof e;
                    return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : a(e, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = e("gos");
                n.exports = r
            }, {}],
            loader: [function(e, n, t) {
                function r() {
                    if (!E++) {
                        var e = x.info = NREUM.info,
                            n = l.getElementsByTagName("script")[0];
                        if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n)) return s.abort();
                        c(y, function(n, t) {
                            e[n] || (e[n] = t)
                        }), f("mark", ["onload", a() + x.offset], null, "api");
                        var t = l.createElement("script");
                        t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n)
                    }
                }

                function o() {
                    "complete" === l.readyState && i()
                }

                function i() {
                    f("mark", ["domContent", a() + x.offset], null, "api")
                }

                function a() {
                    return O.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(), u)) - x.offset
                }
                var u = (new Date).getTime(),
                    f = e("handle"),
                    c = e(3),
                    s = e("ee"),
                    p = e(2),
                    d = window,
                    l = d.document,
                    m = "addEventListener",
                    v = "attachEvent",
                    g = d.XMLHttpRequest,
                    w = g && g.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: d.setImmediate,
                    CT: clearTimeout,
                    XHR: g,
                    REQ: d.Request,
                    EV: d.Event,
                    PR: d.Promise,
                    MO: d.MutationObserver
                };
                var h = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1099.min.js"
                    },
                    b = g && w && w[m] && !/CriOS/.test(navigator.userAgent),
                    x = n.exports = {
                        offset: u,
                        now: a,
                        origin: h,
                        features: {},
                        xhrWrappable: b,
                        userAgent: p
                    };
                e(1), l[m] ? (l[m]("DOMContentLoaded", i, !1), d[m]("load", r, !1)) : (l[v]("onreadystatechange", o), d[v]("onload", r)), f("mark", ["firstbyte", u], null, "api");
                var E = 0,
                    O = e(5)
            }, {}]
        }, {}, ["loader"]);
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42033311-1', 'auto');
        ga('send', 'pageview');
        var _prum = [
            ['id', '56790d9babe53d8f34be63f8'],
            ['mark', 'firstbyte', (new Date()).getTime()]
        ];
        (function() {
            var s = document.getElementsByTagName('script')[0],
                p = document.createElement('script');
            p.async = 'async';
            p.src = '/rum-static.pingdom.net/prum.min.js';
            s.parentNode.insertBefore(p, s);
        })();
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '/www.googletagmanager.com/gtm.js' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DSLL8');
        (function() {
            var e = window._fbq || (window._fbq = []);
            if (!e.loaded) {
                var t = document.createElement("script");
                t.async = true;
                t.src = "/connect.facebook.net/en_US/fbds.js";
                var n = document.getElementsByTagName("script")[0];
                n.parentNode.insertBefore(t, n);
                e.loaded = true
            }
            e.push(["addPixelId", "788250181187269"])
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(["track", "PixelInitialized", {}]);
        window.I18n = "en";
        window.fbAsyncInit = function() {
            FB.init({
                appId: "403551049745808", // Set YOUR APP ID
                status: true, // check login status
                cookie: true, // enable cookies to allow the server to access the session
                xfbml: true, // parse XFBML
                version: 'v2.2'
            });
        };

        // Load the SDK asynchronously
        (function(d) {
            var js, id = 'facebook-jssdk',
                ref = d.getElementsByTagName('script')[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement('script');
            js.id = id;
            js.async = true;
            js.src = "/connect.facebook.net/en_US/all.js";
            ref.parentNode.insertBefore(js, ref);
        }(document));
        var google_tag_params = {
            job_id: [],
            job_locid: "",
            job_pagetype: "home",
            job_totalvalue: 0
        };
        var google_conversion_id = 979073892;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        try {
            jQuery.noConflict();
        } catch (e) {};
        var wpp_params = {
            "rest_api": "1",
            "sampling_active": "0",
            "sampling_rate": "100",
            "ajax_url": "https:\/\/itviec.com\/blog\/wp-json\/wordpress-popular-posts\/v1\/popular-posts\/",
            "action": "update_views_ajax",
            "ID": "2",
            "token": "c84c2906cb",
            "debug": ""
        };
        (function() {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '/connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '788250181187269']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
        var _prum = [
            ['id', '5ac1dcfe4c4077000700057d'],
            ['mark', 'firstbyte', (new Date()).getTime()]
        ];
        (function() {
            var s = document.getElementsByTagName('script')[0],
                p = document.createElement('script');
            p.async = 'async';
            p.src = '/rum-static.pingdom.net/prum.min.js';
            s.parentNode.insertBefore(p, s);
        })();
        var image_save_msg = 'You Can Not Save images!';
        var no_menu_msg = 'Context Menu disabled!';
        var smessage = "";

        function disableEnterKey(e) {
            if (e.ctrlKey) {
                var key;
                if (window.event)
                    key = window.event.keyCode; //IE
                else
                    key = e.which; //firefox (97)
                //if (key != 17) alert(key);
                if (key == 97 || key == 65 || key == 67 || key == 99 || key == 88 || key == 120 || key == 26 || key == 85 || key == 86 || key == 83 || key == 43) {
                    show_wpcp_message('You are not allowed to copy content or view source');
                    return false;
                } else
                    return true;
            }
        }

        function disable_copy(e) {
            var elemtype = e.target.nodeName;
            var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
            elemtype = elemtype.toUpperCase();
            var checker_IMG = '';
            if (elemtype == "IMG" && checker_IMG == 'checked' && e.detail >= 2) {
                show_wpcp_message(alertMsg_IMG);
                return false;
            }
            if (elemtype != "TEXT" && elemtype != "TEXTAREA" && elemtype != "INPUT" && elemtype != "PASSWORD" && elemtype != "SELECT" && elemtype != "OPTION" && elemtype != "EMBED") {
                if (smessage !== "" && e.detail == 2)
                    show_wpcp_message(smessage);

                if (isSafari)
                    return true;
                else
                    return false;
            }
        }

        function disable_copy_ie() {
            var elemtype = window.event.srcElement.nodeName;
            elemtype = elemtype.toUpperCase();
            if (elemtype == "IMG") {
                show_wpcp_message(alertMsg_IMG);
                return false;
            }
            if (elemtype != "TEXT" && elemtype != "TEXTAREA" && elemtype != "INPUT" && elemtype != "PASSWORD" && elemtype != "SELECT" && elemtype != "OPTION" && elemtype != "EMBED") {
                //alert(navigator.userAgent.indexOf('MSIE'));
                //if (smessage !== "") show_wpcp_message(smessage);
                return false;
            }
        }

        function reEnable() {
            return true;
        }
        document.onkeydown = disableEnterKey;
        document.onselectstart = disable_copy_ie;
        if (navigator.userAgent.indexOf('MSIE') == -1) {
            document.onmousedown = disable_copy;
            document.onclick = reEnable;
        }

        function disableSelection(target) {
                //For IE This code will work
                if (typeof target.onselectstart != "undefined")
                    target.onselectstart = disable_copy_ie;

                //For Firefox This code will work
                else if (typeof target.style.MozUserSelect != "undefined") {
                    target.style.MozUserSelect = "none";
                }

                //All other  (ie: Opera) This code will work
                else
                    target.onmousedown = function() {
                        return false
                    }
                target.style.cursor = "default";
            }
            //Calling the JS function directly just after body load
        window.onload = function() {
            disableSelection(document.body);
        };
        document.ondragstart = function() {
                return false;
            }
            /* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    Disable context menu on images by GreenLava Version 1.0
    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */
        function nocontext(e) {
            return false;
        }
        document.oncontextmenu = nocontext;
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-42033311-3', 'auto');
        ga('send', 'pageview');
        function reSize() {
            try {
                var oBody = ifrm.document.body;
                var oFrame = document.all("ifrm");

                oFrame.style.height = oBody.scrollHeight + (oBody.offsetHeight - oBody.clientHeight);
                oFrame.style.width = oBody.scrollWidth + (oBody.offsetWidth - oBody.clientWidth);
            }
            //An error is raised if the IFrame domain != its container's domain
            catch (e) {
                window.status = 'Error: ' + e.number + '; ' + e.description;
            }
        }
        window.fbAsyncInit = function() {
            FB.init({
                appId: '964197663627036',
                xfbml: true,
                version: 'v2.4'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "/connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "/connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '/www.googletagmanager.com/gtm.js' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PFZ9CJ');
        var timeout_result;

        function show_wpcp_message(smessage) {
            if (smessage !== "") {
                var smessage_text = '<span>Alert: </span>' + smessage;
                document.getElementById("wpcp-error-message").innerHTML = smessage_text;
                document.getElementById("wpcp-error-message").className = "msgmsg-box-wpcp warning-wpcp showme";
                clearTimeout(timeout_result);
                timeout_result = setTimeout(hide_message, 3000);
            }
        }

        function hide_message() {
            document.getElementById("wpcp-error-message").className = "msgmsg-box-wpcp warning-wpcp hideme";
        }
        if (!window.TL_Const) {
            var TL_Const = {
                "security": "d384b5e595",
                "ajax_url": "https:\/\/itviec.com\/blog\/wp-admin\/admin-ajax.php",
                "forms": [],
                "action_conversion": "tve_leads_ajax_conversion",
                "action_impression": "tve_leads_ajax_impression",
                "ajax_load": 1,
                "main_group_id": 6074,
                "display_options": {
                    "allowed_post_types": [],
                    "flag_url_match": null
                },
                "custom_post_data": [],
                "current_screen": {
                    "screen_type": 3,
                    "screen_id": 2
                },
                "ignored_fields": ["email", "_captcha_size", "_captcha_theme", "_captcha_type", "_submit_option", "_use_captcha", "g-recaptcha-response", "__tcb_lg_fc", "__tcb_lg_msg", "_state", "_form_type", "_error_message_option", "_back_url", "_submit_option", "url", "_asset_group", "_asset_option", "mailchimp_optin"]
            };
        } else {
            ThriveGlobal.$j.extend(true, TL_Const, {
                "security": "d384b5e595",
                "ajax_url": "https:\/\/itviec.com\/blog\/wp-admin\/admin-ajax.php",
                "forms": [],
                "action_conversion": "tve_leads_ajax_conversion",
                "action_impression": "tve_leads_ajax_impression",
                "ajax_load": 1,
                "main_group_id": 6074,
                "display_options": {
                    "allowed_post_types": [],
                    "flag_url_match": null
                },
                "custom_post_data": [],
                "current_screen": {
                    "screen_type": 3,
                    "screen_id": 2
                },
                "ignored_fields": ["email", "_captcha_size", "_captcha_theme", "_captcha_type", "_submit_option", "_use_captcha", "g-recaptcha-response", "__tcb_lg_fc", "__tcb_lg_msg", "_state", "_form_type", "_error_message_option", "_back_url", "_submit_option", "url", "_asset_group", "_asset_option", "mailchimp_optin"]
            })
        } 
        var swpFloatBeforeContent = false;
        var swpClickTracking = false;
        swpPinIt = {
            "enabled": false
        };
        

