(window.webpackJsonp = window.webpackJsonp || []).push([
    [53],
    {
      298: function (e, t, n) {},
      356: function (e, t, n) {
        "use strict";
        n(298);
      },
      400: function (e, t, n) {
        "use strict";
        n.r(t);
        n(10), n(11), n(8), n(35), n(45), n(75), n(20);
        var r = n(3),
          c = n(9),
          o = n(17),
          f = n(12),
          l = n(13),
          h = n(4),
          d = n(5),
          S = n(2),
          v = n(6),
          O = n(300),
          k = n(301),
          w = n(299);
        function m(e) {
          var t = (function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
              return (
                Date.prototype.toString.call(
                  Reflect.construct(Date, [], function () {})
                ),
                !0
              );
            } catch (e) {
              return !1;
            }
          })();
          return function () {
            var n,
              r = Object(h.a)(e);
            if (t) {
              var c = Object(h.a)(this).constructor;
              n = Reflect.construct(r, arguments, c);
            } else n = r.apply(this, arguments);
            return Object(l.a)(this, n);
          };
        }
        var y = function (e, t, n, desc) {
            var r,
              c = arguments.length,
              o =
                c < 3
                  ? t
                  : null === desc
                  ? (desc = Object.getOwnPropertyDescriptor(t, n))
                  : desc;
            if (
              "object" ===
                ("undefined" == typeof Reflect
                  ? "undefined"
                  : Object(d.a)(Reflect)) &&
              "function" == typeof Reflect.decorate
            )
              o = Reflect.decorate(e, t, n, desc);
            else
              for (var i = e.length - 1; i >= 0; i--)
                (r = e[i]) &&
                  (o = (c < 3 ? r(o) : c > 3 ? r(t, n, o) : r(t, n)) || o);
            return c > 3 && o && Object.defineProperty(t, n, o), o;
          },
          x = (function (e) {
            Object(f.a)(S, e);
            var t,
              n,
              l,
              h,
              d = m(S);
            function S() {
              var e;
              return (
                Object(c.a)(this, S),
                ((e = d.apply(this, arguments)).SSOTicketweb = ""),
                (e.SSOTicket = ""),
                (e.settings = null),
                e
              );
            }
            return (
              Object(o.a)(S, [
                {
                  key: "mounted",
                  value:
                    ((h = Object(r.a)(
                      regeneratorRuntime.mark(function e() {
                        var t = this;
                        return regeneratorRuntime.wrap(
                          function (e) {
                            for (;;)
                              switch ((e.prev = e.next)) {
                                case 0:
                                  (e.prev = 0), (e.next = 3);
                                  break;
                                case 3:
                                  return (
                                    (e.next = 5),
                                    this.$axios.$get(
                                      "NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/wRPkxygJBcXMbulvqG7m"
                                    )
                                  );
                                case 5:
                                  return (
                                    (this.settings = e.sent),
                                    (e.next = 8),
                                    this.$axios.$get(
                                      "NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/2cOxfxkAyWtKxnWIeWH3"
                                    )
                                  );
                                case 8:
                                  return (
                                    (this.SSOTicket = e.sent.SSOTicket),
                                    (e.next = 11),
                                    this.loadInterface()
                                  );
                                case 11:
                                  setTimeout(
                                    Object(r.a)(
                                      regeneratorRuntime.mark(function e() {
                                        return regeneratorRuntime.wrap(function (
                                          e
                                        ) {
                                          for (;;)
                                            switch ((e.prev = e.next)) {
                                              case 0:
                                                return (
                                                  (e.next = 2),
                                                  t.loadSSOTicketWeb()
                                                );
                                              case 2:
                                                return e.abrupt("return", e.sent);
                                              case 3:
                                              case "end":
                                                return e.stop();
                                            }
                                        },
                                        e);
                                      })
                                    ),
                                    4500
                                  ),
                                    (e.next = 16);
                                  break;
                                case 14:
                                  (e.prev = 14), (e.t0 = e.catch(0));
                                case 16:
                                case "end":
                                  return e.stop();
                              }
                          },
                          e,
                          this,
                          [[0, 14]]
                        );
                      })
                    )),
                    function () {
                      return h.apply(this, arguments);
                    }),
                },
                {
                  key: "onDisconnectEvent",
                  value:
                    ((l = Object(r.a)(
                      regeneratorRuntime.mark(function e() {
                        return regeneratorRuntime.wrap(
                          function (e) {
                            for (;;)
                              switch ((e.prev = e.next)) {
                                case 0:
                                  return (e.next = 2), this.loadSSOTicketWeb();
                                case 2:
                                case "end":
                                  return e.stop();
                              }
                          },
                          e,
                          this
                        );
                      })
                    )),
                    function () {
                      return l.apply(this, arguments);
                    }),
                },
                {
                  key: "loadSSOTicketWeb",
                  value:
                    ((n = Object(r.a)(
                      regeneratorRuntime.mark(function e() {
                        return regeneratorRuntime.wrap(
                          function (e) {
                            for (;;)
                              switch ((e.prev = e.next)) {
                                case 0:
                                  return (
                                    (e.prev = 0),
                                    (e.next = 3),
                                    this.$axios.$get(
                                      "NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/SIU5A8clQdoImYrFWyQn"
                                    )
                                  );
                                case 3:
                                  (this.SSOTicketweb = e.sent.SSOTicketweb),
                                    (e.next = 9);
                                  break;
                                case 6:
                                  (e.prev = 6),
                                    (e.t0 = e.catch(0)),
                                    console.log(
                                      "Failed to load ssoticketweb: " + e.t0
                                    );
                                case 9:
                                case "end":
                                  return e.stop();
                              }
                          },
                          e,
                          this,
                          [[0, 6]]
                        );
                      })
                    )),
                    function () {
                      return n.apply(this, arguments);
                    }),
                },
                {
                  key: "loadInterface",
                  value:
                    ((t = Object(r.a)(
                      regeneratorRuntime.mark(function e() {
                        return regeneratorRuntime.wrap(function (e) {
                          for (;;)
                            switch ((e.prev = e.next)) {
                              case 0:
                                window.addEventListener(
                                  "message",
                                  function (e) {
                                    try {
                                      var data = e.data;
                                      if (!data) return;
                                      if (
                                        !data.startsWith(
                                          "Nitro_LegacyExternalInterface"
                                        )
                                      )
                                        return;
                                      var t = JSON.parse(
                                        data.split(
                                          "Nitro_LegacyExternalInterface"
                                        )[1]
                                      );
                                      if (!t) return;
                                      console.log(t), t.methode;
                                    } catch (e) {
                                      console.log(e);
                                    }
                                  },
                                  !1
                                );
                              case 1:
                              case "end":
                                return e.stop();
                            }
                        }, e);
                      })
                    )),
                    function () {
                      return t.apply(this, arguments);
                    }),
                },
              ]),
              S
            );
          })(S.default),
          R = (x = y(
            [
              Object(v.Component)({
                components: { ClientBtn: O.a, ClientLoading: k.a, ClientUI: w.a },
              }),
            ],
            x
          )),
          T = (n(356), n(18)),
          component = Object(T.a)(
            R,
            function () {
              var e = this,
                t = e.$createElement,
                n = e._self._c || t;
              return n(
                "div",
                { staticClass: "client" },
                [
                  "" != e.SSOTicket
                    ? n("iframe", {
                        attrs: {
                          src: "//localhost/nitro.html?sso=" + e.SSOTicket,
                          id: "flash-container",
                          width: "100%",
                          height: "100%",
                          frameborder: "0",
                        },
                      })
                    : e._e(),
                  e._v(" "),
                  n(
                    "client-only",
                    [
                      "" != e.SSOTicketweb
                        ? n("ClientUI", {
                            attrs: {
                              SSOTicket: e.SSOTicketweb,
                              WSUrl: e.settings.WSUrl,
                            },
                            on: {
                              "update:SSOTicket": function (t) {
                                e.SSOTicketweb = t;
                              },
                              "update:s-s-o-ticket": function (t) {
                                e.SSOTicketweb = t;
                              },
                              disconnect: e.onDisconnectEvent,
                            },
                          })
                        : e._e(),
                    ],
                    1
                  ),
                  e._v(" "),
                  n("ClientBtn"),
                ],
                1
              );
            },
            [],
            !1,
            null,
            null,
            null
          );
        t.default = component.exports;
      },
    },
  ]);
  