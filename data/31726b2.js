(window.webpackJsonp = window.webpackJsonp || []).push([
    [25],
    {
      362: function (e, n, t) {
        "use strict";
        t.r(n);
        t(10), t(11), t(8), t(35);
        var o = t(9),
          r = t(12),
          c = t(13),
          l = t(4),
          d = t(5),
          v = t(6);
        function m(e) {
          var n = (function () {
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
            var t,
              o = Object(l.a)(e);
            if (n) {
              var r = Object(l.a)(this).constructor;
              t = Reflect.construct(o, arguments, r);
            } else t = o.apply(this, arguments);
            return Object(c.a)(this, t);
          };
        }
        var f = function (e, n, t, desc) {
            var o,
              r = arguments.length,
              c =
                r < 3
                  ? n
                  : null === desc
                  ? (desc = Object.getOwnPropertyDescriptor(n, t))
                  : desc;
            if (
              "object" ===
                ("undefined" == typeof Reflect
                  ? "undefined"
                  : Object(d.a)(Reflect)) &&
              "function" == typeof Reflect.decorate
            )
              c = Reflect.decorate(e, n, t, desc);
            else
              for (var i = e.length - 1; i >= 0; i--)
                (o = e[i]) &&
                  (c = (r < 3 ? o(c) : r > 3 ? o(n, t, c) : o(n, t)) || c);
            return r > 3 && c && Object.defineProperty(n, t, c), c;
          },
          _ = (function (e) {
            Object(r.a)(t, e);
            var n = m(t);
            function t() {
              return Object(o.a)(this, t), n.apply(this, arguments);
            }
            return t;
          })(v.Vue),
          h = (_ = f(
            [
              Object(v.Component)({
                head: function () {
                  return {
                    title: "Confidentialit??",
                    meta: [
                      {
                        hid: "og:title",
                        name: "og:title",
                        content: "Confidentialit??",
                      },
                      {
                        hid: "description",
                        name: "description",
                        content: "Les confidentialit?? de Akiled",
                      },
                      {
                        hid: "og:description",
                        name: "og:description",
                        content: "Les confidentialit?? de Akiled",
                      },
                    ],
                  };
                },
              }),
            ],
            _
          )),
          k = t(18),
          component = Object(k.a)(
            h,
            function () {
              var e = this.$createElement;
              this._self._c;
              return this._m(0);
            },
            [
              function () {
                var e = this,
                  n = e.$createElement,
                  t = e._self._c || n;
                return t("div", { staticClass: "box" }, [
                  t("h4", { staticClass: "box__title" }, [
                    e._v("POLITIQUE DE CONFIDENTIALIT??"),
                  ]),
                  e._v(" "),
                  t("div", { staticClass: "box__body" }, [
                    e._v(
                      "\r\n\tLa confidentalit?? des donn??es personnelles et la protection de la vie priv??e des clients sont des valeurs importantes et fondamentales dans toutes nos op??rations. Nous observons la l??gislation, les directives des autorit??s et la bonne pratique en mati??re de traitement de donn??es en ce qui concerne les donn??es de nos joueurs, employ??s et partenaires.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tAkiled maintient un niveau de protection des donn??es ?? caract??re personnel extr??mement ??lev??. Nous traitons vos donn??es ?? caract??re personnel uniquement ?? des fins appropri??es d??finies ?? l'avance et uniquement lorsque cela est n??cessaire.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("h2", [e._v("Confidentialit?? et protection des donn??es.")]),
                    e._v(" "),
                    t("br"),
                    e._v(
                      "\r\n\tNous respectons votre vie priv??e et nous nous engageons ?? prot??ger la vie priv??e de ces personnes (??utilisateur(s)?? ou ??vous??) qui acc??dent et utilisent nos jeux.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [
                      e._v("Vos droits concernant le traitement de vos donn??es."),
                    ]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tVous avez le droit d'agir sur le traitement de vos propres donn??es.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [
                      e._v(
                        "Droit d'acc??s et le droit de portabilit?? des donn??es"
                      ),
                    ]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tVous pouvez v??rifier vos propres donn??es ou recevoir les donn??es que vous avez vous-m^me fournies lors de l'utilisation de nos services sous forme lisible par une machine. Pour ce faire, acc??dez aux param??tres ou contacter le service client.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Droit de r??ctification")]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tSi vous constatez des donn??es incorrectes ou expir??es dans les donn??es personnelles que nous traitons, nous vous demandons de corriger les donn??es via notre Service Client. Nous avons besoin des informations personnelles correctes afin de fournir le meilleur service possible.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Droit ?? l'effacement")]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tVous avez le droit de demander la suppression des donn??es qui ne sont plus n??cessaires. Nous faisons de notre mieux pour supprimer ces donn??es automatiquement, mais si, pour une raison ou une autre, vous d??tectez des informations inutiles dans notre syst??me, vous pouvez contacter notre Service Client.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Droit ?? la limitation du traitement")]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tVous pouvez nous demander de restreindre ou de refuser le traitement de donn??es dans certaines situations. Nous avons cherch?? ?? d??crire toutes nos m??thodes de traitement de donn??es de mani??re ouverte et compr??hensible dans cette politique de confidentialit??\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [
                      e._v("Quelles sont les donn??es que nous collectons?"),
                    ]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("h2", [
                      e._v("Pourquoi collectons-nous vos donn??es personnelles?"),
                    ]),
                    e._v(" "),
                    t("br"),
                    e._v(
                      "\r\n\tAfin de fournir nos Services, nous avons besoin d'informations personnelles suffisantes. Nous avons besoin de vos coordonn??es pour communiquer avec vous, comme par exemple pour vous permettre de r??initialiser votre mot de passe si vous l'oubliez.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tDe plus, nos Services requi??rent diff??rents types de donn??es afin que nous puissions vous identifier individuellement et adapter le Service ?? vous.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tDans certains cas, par exemple lorsque des achats ou des paiements en ligne sont concern??s, nous avons l'obligation l??gale de collecter suffisamment de donn??es vous concernant pour fournir le Service.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tEn raison de la nature de nos produits, le traitement des donn??es ?? caract??re personnel est une partie essentielle et indissociable de nos Services, m??me si dans le Service m??me, nous ne traitons pas votre nom ou toute autre information qui vous identifie directement en tant que personne.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Donn??es ?? caract??re personnel ?? traiter")]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tNous ne traitons les donn??es ?? caract??re personnel que lorsque cela est appropri?? et n??cessaire. Le type de donn??es que nous collectons et stockons varie en fonction du jeu auquel vous jouez et de votre activit??. De fa??on g??n??rale, les donn??es que nous collectons ?? votre sujet concernent le type d'appareil que vous utilisez, la mani??re dont vous jouez (comme les niveaux test??s et achats effectu??s) et peuvent comprendre des informations que vous avez soumises lors de votre inscription (voir ci-dessous) ou des informations auxquelles vous nous autorisez ?? acc??der apr??s avoir connect?? vos comptes de r??seaux sociaux via nos Services.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tExemple de donn??es ?? caract??re personnel collect??s sur nos services :\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("ul", [
                      e._v(
                        "\r\n\t\t- Informations de contact, comme l'adresse e-mail et les informations de contact sur les r??seaux sociaux."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Informations sur le p??riph??rique, telles que le mod??le de p??riph??rique et la version du syst??me d'exploitation."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Informations de transaction et de paiement."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Historique du client Par exemple, si vous nous contactez par l'interm??diaire de notre service client, nous pouvons conserver un enregistrement de cette correspondance."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Journal des chats. Nous pouvons enregistrer les chats ?? des fins de s??curit?? et de mod??ration."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Donn??es g??n??r??es par l'utilisation des Services, telles que les donn??es techniques g??n??r??es en jouant ?? nos jeux ou lors de la visite de nos sites Web."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Informations sur les cookies et les cookies tiers ainsi que les donn??es d'analyse Web correspondantes."
                      ),
                      t("br"),
                      e._v("\r\n\t\t- Identifiants publicitaires."),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Vous pouvez avoir la possibilit?? de vous enregistrer ou de vous connecter au Service via un service de connexion tiers (par exemple Facebook ou Game Center sur les appareils Apple). Si tel est le cas, nous collectons le num??ro d'identification du profil de service tiers."
                      ),
                      t("br"),
                    ]),
                    e._v(" "),
                    t("br"),
                    e._v(" "),
                    t("h2", [e._v("Cookies")]),
                    e._v(" "),
                    t("br"),
                    e._v(
                      "\r\n\tLes informations personnelles peuvent ??tre collect??es gr??ce ?? l'utilisation de cookies et de technologies similaires, telles que des pixels (tags, balises ou gifs), des objets locaux partag??s et des empreintes num??riques. Pour les besoins de cette politique de confidentialit??, nous faisons r??f??rence ?? toutes ces technologies comme des ?? cookies ??.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tNous utilisons des cookies et des technologies similaires pour collecter des informations aupr??s des utilisateurs enregistr??s et pour nous aider ?? am??liorer le Service. La plupart des appareils et des navigateurs Web acceptent automatiquement les cookies, mais vous pouvez g??n??ralement modifier les param??tres de votre appareil ou de votre navigateur pour refuser les cookies. Sachez que si vous modifiez les param??tres de votre appareil ou de votre navigateur pour refuser les cookies, vous ne pourrez peut-??tre pas utiliser certaines fonctionnalit??s du service.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Cookies essentiels")]),
                    e._v(
                      ": Certains cookies sont indispensables pour nous afin de vous fournir le Service. Ces cookies seront utilis??s pour g??rer la prestation du Service, et si vous n'acceptez pas ces cookies, vous ne pourrez pas y acc??der. Ces cookies ne collectent pas d'informations personnelles susceptibles d'??tre utilis??es ?? des fins de marketing.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("M??morisation de vos pr??f??rences")]),
                    e._v(
                      ": Nous utilisons ??galement des cookies pour m??moriser vos pr??f??rences - cela modifie la fa??on dont le Service se comporte ou ressemble.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Cookies analytiques")]),
                    e._v(
                      ": ces cookies collectent des informations utilis??es sous forme agr??g??e pour nous aider ?? comprendre comment le service est utilis?? et d'o?? proviennent les utilisateurs.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Cookies de stockage local")]),
                    e._v(
                      ": les cookies de stockage locaux sont \"persistants\". Ils restent sur votre appareil pendant un certain temps (d??finis individuellement pour chaque cookie). Nous utilisons ces cookies pour enregistrer le nombre de fois que vous utilisez le Service, pour confirmer que vous ??tes un utilisateur enregistr??, pour enregistrer vos informations de connexion lors de l'acc??s au Service et pour collecter des statistiques sur l'utilisation du Service.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Comment refuser ou d??sactiver les cookies")]),
                    e._v(
                      ": Vous avez le droit de choisir d'accepter ou de refuser les cookies et les technologies similaires. Si vous choisissez d'utiliser le service sans bloquer ou d??sactiver les cookies, vous indiquerez votre consentement ?? l'utilisation de ces cookies et autres technologies. Vous indiquez ??galement votre consentement ?? l'utilisation (conform??ment ?? la pr??sente politique de confidentialit??) de toute information personnelle que nous recueillons en utilisant ces technologies.\r\n\t"
                    ),
                    t("br"),
                    e._v(" "),
                    t("h2", [e._v("S??curit?? des donn??es")]),
                    e._v(" "),
                    t("br"),
                    e._v(
                      "\r\n\tNous assurons la s??curit?? des donn??es lors du traitement de vos donn??es ?? caract??re personnel. Nous utilisons toujours des mesures de protection appropri??es, telles que le contr??le d'acc??s bas?? sur les mots de passe et d'autres m??thodes de protection ainsi que l???encryptage des donn??es. Notre environnement d'exploitation a ??t?? s??curis?? avec des pare-feu et un logiciel anti-virus appropri??.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tNous traitons principalement vos donn??es sous une forme dans laquelle un ??tranger ne peut pas vous identifier en tant que personne. Nous ne demandons pas ou ne stockons pas votre vrai nom ou votre identit?? et nos syst??mes utilisent un identifiant num??rique pour vous identifier ?? la fois en interne et ?? travers les syst??mes, par opposition ?? quelque chose comme votre adresse e-mail. Avec ces mesures, nous prot??geons la confidentialit?? de votre communication et emp??chons les connexions non pertinentes ?? votre identit??.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tChacun est responsable de la s??curit?? des donn??es. Afin d'assurer la protection de vos donn??es, nous vous demandons de faire attention ?? la s??curit?? des donn??es de vos propres appareils.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("h2", [e._v("Publicit??")]),
                    e._v(
                      "\r\n\tNos Services peuvent inclure des annonces pour des produits et services tiers. Pour vous montrer des publicit??s tierces pertinentes et int??ressantes, nous et nos partenaires publicitaires utiliserons les informations vous concernant. Un exemple de ce type d'informations peut ??tre lorsque vous avez achet?? un produit ?? partir d'un certain site Web ou entr?? un terme sp??cifique dans un moteur de recherche. Vous pouvez vous d??sinscrire des publicit??s bas??es sur les centres d'int??r??t, mais cela ne signifie pas que vous ne recevrez plus d'annonces, mais seulement que les publicit??s que vous recevez seront moins pertinentes pour vos int??r??ts.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("i", [e._v("Modifi??e le 04/05/2011")]),
                  ]),
                ]);
              },
            ],
            !1,
            null,
            null,
            null
          );
        n.default = component.exports;
      },
    },
  ]);
  