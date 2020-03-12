/*! jquery.html5loader v1.8.0 || Gianluca Guarini <gianluca.guarini@gmail.com> (http://gianlucaguarini.com/) */
!function (a) {
    "use strict";
    a.html5Loader = function (b) {
        var c = {filesToLoad: null, debugMode: !1, stopExecution: !1, mediaBufferSizeToPreload: .2, forceMediaPreload: !0, onBeforeLoad: function () {
        }, onComplete: function () {
        }, onElementLoaded: function () {
        }, onUpdate: function () {
        }, onMediaError: function () {
        }}, d = a.extend(c, b), e = d.filesToLoad, f = d.debugMode, g = d.mediaBufferSizeToPreload, h = d.forceMediaPreload, i = d.stopExecution, j = d.onBeforeLoad, k = d.onComplete, l = d.onElementLoaded, m = d.onUpdate, n = d.onMediaError, o = a("head"), p = 0, q = 0, r = 0, s = [], t = navigator.userAgent.match(/iPad|Android|(?=.*\bWindows\b)(?=.*\bARM\b)/i), u = function (a) {
            return/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)) ? !0 : !1
        }(navigator.userAgent || navigator.vendor || window.opera), v = {}, w = function (a) {
            f && console && console.log(a)
        };
        v.video = function () {
            var a = document.createElement("video"), b = !1;
            try {
                a.canPlayType && (b = {ogg: a.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, ""), h264: a.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, ""), webm: a.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, ""), vp9: a.canPlayType('video/webm; codecs="vp9"').replace(/^no$/, "")}, b.mp4 = b.h264)
            }
            catch (c) {
            }
            return b
        }(), v.audio = function () {
            var a = document.createElement("audio"), b = !1;
            try {
                a.canPlayType && (b = {ogg: a.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/, ""), mp3: a.canPlayType("audio/mpeg;").replace(/^no$/, ""), opus: a.canPlayType('audio/ogg; codecs="opus"').replace(/^no$/, ""), wav: a.canPlayType('audio/wav; codecs="1"').replace(/^no$/, ""), m4a: (a.canPlayType("audio/x-m4a;") || a.canPlayType("audio/aac;")).replace(/^no$/, "")})
            }
            catch (c) {
            }
            return b
        }(), v.svg = function () {
            return!!document.createElementNS && !!document.createElementNS("http://www.w3.org/2000/svg", "svg").createSVGRect
        }();
        var x = function (b) {
            var c = b.type.toLowerCase(), d = b.sources;
            return a.each(d, function (a) {
                return v[c][a] ? (b = b.sources[a], b.type = c.toUpperCase(), !1) : void 0
            }), b.source ? b : !1
        }, y = function () {
            var a = 0;
            w("_bytesTotal = " + r), w("_bytesLoaded = " + q), a = Math.round(q / r * 100), w("Percentage: " + a + "%"), m(a), s[p].length || (p++, s[p] ? F() : k())
        }, z = function (a, b, c) {
            var d = c;
            ("VIDEO" === d.type || "AUDIO" === d.type) && (d = x(d)), d && (r += d.size, s[a].push(d))
        }, A = function (a) {
            var b;
            w("json loaded"), a.files[0].length || (a.files = [a.files]);
            for (var c = 0, d = a.files.length; d > c; c++) {
                s.push([]), b = a.files[c];
                for (var e = 0, f = b.length; f > e; e++)z(c, e, b[e])
            }
        }, B = function (b) {
            var c, d = new a.Deferred, e = b.size, f = a("<img>"), g = function () {
                w("File Loaded:" + c), q += e, l(b, this), s[p].splice(0, 1), y(), d.resolve()
            };
            return"[object Object]" === b.source.toString() ? b.source.svg && v.svg ? c = b.source.svg : b.source.fallback && (c = b.source.fallback) : c = b.source, f.on("load", g), f.attr("src", c), f = null, d.promise()
        }, C = function (b) {
            var c = new a.Deferred, d = b.size, e = a("VIDEO" === b.type ? "<video>" : "<audio>"), f = function () {
                w("File Loaded:" + b.source), q += d, l(b, e[0]), s[p].splice(0, 1), e.off(), e = null, y(), c.resolve()
            };
            return u || t ? f() : (e.on("loadstart", function () {
                3 === this.networkState && (n(b, this), f())
            }), e.on("error stalled", function () {
                n(b, this), f()
            }), e.on("loadedmetadata", function () {
                e.on("progress", function () {
                    var a = 0;
                    w("loading in progress file:" + b.source), this.buffered.length > 0 && (a = d / this.duration * this.buffered.end(0), d -= a, q += a, y(), 1 / d * a > g && !h && f())
                })
            }), e.attr({preload: "auto", src: b.source, controls: "controls"}), h && e.on("canplaythrough", f)), c.promise()
        }, D = function (b) {
            var c = new a.Deferred, d = b.size, e = {url: b.source, dataType: "script"};
            return("undefined" == typeof b.stopExecution && i || b.stopExecution === !0) && (e.converters = {"text script": function (a) {
                return a
            }}), a.ajax(e).done(function (a) {
                w("File Loaded:" + b.source), q += d, l(b, a), s[p].splice(0, 1), y(), c.resolve()
            }).fail(function (a, c, d) {
                    w("\n File Failed: " + b.source + "\n Message:     " + d.message + "\n")
                }), c.promise()
        }, E = function (b, c) {
            var d = new a.Deferred;
            return a.ajax({url: b.source, dataType: "text", success: function (a) {
                if (w("File Loaded:" + b.source), l(b, a), q += b.size, s[p].splice(0, 1), y(), c)if (document.createStyleSheet)try {
                    document.createStyleSheet(b.source)
                }
                catch (e) {
                }
                else {
                    var f;
                    f = document.createElement("link"), f.rel = "stylesheet", f.type = "text/css", f.media = "all", f.href = b.source, o[0].appendChild(f)
                }
                d.resolve(a)
            }}), d.promise()
        }, F = function () {
            var b = s[p].slice();
            a.each(b, function (a, b) {
                switch (w("preloading files"), w("file to preload:" + b.source), b.type) {
                    case"IMAGE":
                        B(b);
                        break;
                    case"VIDEO":
                    case"AUDIO":
                        C(b);
                        break;
                    case"SCRIPT":
                        D(b);
                        break;
                    case"TEXT":
                    case"CSS":
                        E(b, /CSS/g.test(b.type));
                        break;
                    default:
                        return!1
                }
            })
        };
        return this.init = function () {
            w("plugin initialized");
            var b = new a.Deferred, c = b.promise();
            j(), "object" == typeof e ? (a.proxy(A, this, e)(), b.resolve(e)) : (a.getJSON(e, b.resolve), b.pipe(a.proxy(A, this))), c.then(a.proxy(y, this)), c.then(a.proxy(F, this))
        }, this.init(), this
    }
}(jQuery);