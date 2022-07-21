<!DOCTYPE html>
<!--[if IE 9 ]> <html lang="vi" class="ie9 loading-site no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="vi" class="ie8 loading-site no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="vi" class="loading-site no-js">
<!--<![endif]-->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <script>
    (function(html) {
      html.className = html.className.replace(/\bno-js\b/, 'js')
    })(document.documentElement);
  </script>

  <title><?= $title ?></title>

  <script type="text/javascript">
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "http:\/\/127.0.0.1\/car\/public\/site\/wp-includes\/js\/wp-emoji-release.min.js"
      }
    };
    ! function(a, b, c) {
      function d(a, b) {
        var c = String.fromCharCode;
        l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
        var d = k.toDataURL();
        l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
        var e = k.toDataURL();
        return d === e
      }

      function e(a) {
        var b;
        if (!l || !l.fillText) return !1;
        switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
          case "flag":
            return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
          case "emoji":
            return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
        }
        return !1
      }

      function f(a) {
        var c = b.createElement("script");
        c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
      }
      var g, h, i, j, k = b.createElement("canvas"),
        l = k.getContext && k.getContext("2d");
      for (j = Array("flag", "emoji"), c.supports = {
          everything: !0,
          everythingExceptFlag: !0
        }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
      c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
        c.DOMReady = !0
      }, c.supports.everything || (h = function() {
        c.readyCallback()
      }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
        "complete" === b.readyState && c.readyCallback()
      })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
    }(window, document, window._wpemojiSettings);
  </script>
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel='stylesheet' id='skillbar-css-css' href='<?= public_url("site/wp-content/plugins/skillbars/skillbar-css.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='wp-color-picker-css' href='<?= public_url("site/wp-admin/css/color-picker.min.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='dashicons-css' href='<?= public_url("site/wp-includes/css/dashicons.min.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='menu-icons-extra-css' href='<?= public_url("site/wp-content/plugins/ot-flatsome-vertical-menu/libs/menu-icons/css/extra.min.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='hrw-css' href='<?= public_url("site/wp-content/plugins/call-now-icon-animate/css.css") ?>' type='text/css' media='' />
  <link rel='stylesheet' id='contact-form-7-css' href='<?= public_url("site/wp-content/plugins/contact-form-7/includes/css/styles.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='fb-messenger-style-css' href='<?= public_url("site/wp-content/plugins/fb-messenger/css/style.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='ot-vertical-menu-css' href='<?= public_url("site/wp-content/plugins/ot-flatsome-vertical-menu/assets/css/ot-vertical-menu.css") ?>' type='text/css' media='all' />
  <style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
      visibility: visible;
    }
  </style>
  <link rel='stylesheet' id='flatsome-icons-css' href='<?= public_url("site/wp-content/themes/flatsome/assets/css/fl-icons.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='easy-social-share-buttons-css' href='<?= public_url("site/wp-content/plugins/easy-social-share-buttons3/assets/css/default-retina/easy-social-share-buttons.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='essb-cct-style-css' href='<?= public_url("site/wp-content/plugins/easy-social-share-buttons3/lib/modules/click-to-tweet/assets/css/styles.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='bfa-font-awesome-css' href='//cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
  <link rel='stylesheet' id='flatsome-main-css' href='<?= public_url("site/wp-content/themes/flatsome/assets/css/flatsome.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='flatsome-shop-css' href='<?= public_url("site/wp-content/themes/flatsome/assets/css/flatsome-shop.css") ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='flatsome-style-css' href='<?= public_url("site/wp-content/themes/flatsome-child/style.css") ?>' type='text/css' media='all' />
  <script type='text/javascript' src='<?= public_url("site/wp-includes/js/jquery/jquery.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-includes/js/jquery/jquery-migrate.min.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/skillbars/js/shortcodes_skillbar.js") ?>'></script>

  <meta name="generator" content="WordPress 4.9.15" />
  <meta name="generator" content="WooCommerce 3.5.1" />

  <!-- Call Now Icon Animate Mobile 0.1.1 by Alan Tien (alantien.com) -->
  <style>
    .mypage-alo-ph-circle {
      border-color: #cc9a00;
    }

    .mypage-alo-ph-circle-fill {
      background-color: #cc9a00;
    }

    .mypage-alo-ph-img-circle {
      background-color: #cc9a00;
    }

    .mypage-alo-phone:hover .mypage-alo-ph-circle {
      border-color: #43b91e;
    }

    .mypage-alo-phone:hover .mypage-alo-ph-circle-fill {
      background-color: #43b91e;
    }

    .mypage-alo-phone:hover .mypage-alo-ph-img-circle {
      background-color: #43b91e;
    }
  </style>
  <style>
    .bg {
      opacity: 0;
      transition: opacity 1s;
      -webkit-transition: opacity 1s;
    }

    .bg-loaded {
      opacity: 1;
    }
  </style>
  <!--[if IE]><link rel="stylesheet" type="text/css" href="http://mauweb.monamedia.net/autoser/wp-content/themes/flatsome/assets/css/ie-fallback.css"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="http://mauweb.monamedia.net/autoser/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]-->
  <script type="text/javascript">
    WebFontConfig = {
      google: {
        families: ["Roboto:regular,700", "Roboto:regular,regular", "Roboto:regular,700", "Dancing+Script", ]
      }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
  <noscript>
    <style>
      .woocommerce-product-gallery {
        opacity: 1 !important;
      }
    </style>
  </noscript>
  <style type="text/css">
    .essb_links_list li.essb_totalcount_item .essb_t_l_big .essb_t_nb:after,
    .essb_links_list li.essb_totalcount_item .essb_t_r_big .essb_t_nb:after {
      color: #777777;
      content: "shares";
      display: block;
      font-size: 11px;
      font-weight: normal;
      text-align: center;
      text-transform: uppercase;
      margin-top: -5px;
    }

    .essb_links_list li.essb_totalcount_item .essb_t_l_big,
    .essb_links_list li.essb_totalcount_item .essb_t_r_big {
      text-align: center;
    }

    .essb_displayed_sidebar .essb_links_list li.essb_totalcount_item .essb_t_l_big .essb_t_nb:after,
    .essb_displayed_sidebar .essb_links_list li.essb_totalcount_item .essb_t_r_big .essb_t_nb:after {
      margin-top: 0px;
    }

    .essb_displayed_sidebar_right .essb_links_list li.essb_totalcount_item .essb_t_l_big .essb_t_nb:after,
    .essb_displayed_sidebar_right .essb_links_list li.essb_totalcount_item .essb_t_r_big .essb_t_nb:after {
      margin-top: 0px;
    }

    .essb_totalcount_item_before,
    .essb_totalcount_item_after {
      display: block !important;
    }

    .essb_totalcount_item_before .essb_totalcount,
    .essb_totalcount_item_after .essb_totalcount {
      border: 0px !important;
    }

    .essb_counter_insidebeforename {
      margin-right: 5px;
      font-weight: bold;
    }

    .essb_width_columns_1 li {
      width: 100%;
    }

    .essb_width_columns_1 li a {
      width: 92%;
    }

    .essb_width_columns_2 li {
      width: 49%;
    }

    .essb_width_columns_2 li a {
      width: 86%;
    }

    .essb_width_columns_3 li {
      width: 32%;
    }

    .essb_width_columns_3 li a {
      width: 80%;
    }

    .essb_width_columns_4 li {
      width: 24%;
    }

    .essb_width_columns_4 li a {
      width: 70%;
    }

    .essb_width_columns_5 li {
      width: 19.5%;
    }

    .essb_width_columns_5 li a {
      width: 60%;
    }

    .essb_width_columns_6 li {
      width: 16%;
    }

    .essb_width_columns_6 li a {
      width: 55%;
    }

    .essb_links li.essb_totalcount_item_before,
    .essb_width_columns_1 li.essb_totalcount_item_after {
      width: 100%;
      text-align: left;
    }

    .essb_network_align_center a {
      text-align: center;
    }

    .essb_network_align_right .essb_network_name {
      float: right;
    }
  </style>
  <script type="text/javascript">
    var essb_settings = {
      "ajax_url": "http:\/\/mauweb.monamedia.net\/autoser\/wp-admin\/admin-ajax.php",
      "essb3_nonce": "0063dac655",
      "essb3_plugin_url": "http:\/\/mauweb.monamedia.net\/autoser\/wp-content\/plugins\/easy-social-share-buttons3",
      "essb3_facebook_total": true,
      "essb3_admin_ajax": false,
      "essb3_internal_counter": false,
      "essb3_stats": false,
      "essb3_ga": false,
      "essb3_ga_mode": "simple",
      "essb3_counter_button_min": 0,
      "essb3_counter_total_min": 0,
      "blog_url": "http:\/\/mauweb.monamedia.net\/autoser\/",
      "ajax_type": "wp",
      "essb3_postfloat_stay": false,
      "essb3_no_counter_mailprint": false,
      "essb3_single_ajax": false,
      "twitter_counter": "self",
      "post_id": 16
    };
  </script>
  <style id="custom-css" type="text/css">
    :root {
      --primary-color: #1c63b8;
    }

    /* Site Width */
    .full-width .ubermenu-nav,
    .container,
    .row {
      max-width: 1230px
    }

    .row.row-collapse {
      max-width: 1200px
    }

    .row.row-small {
      max-width: 1222.5px
    }

    .row.row-large {
      max-width: 1260px
    }

    body.framed,
    body.framed header,
    body.framed .header-wrapper,
    body.boxed,
    body.boxed header,
    body.boxed .header-wrapper,
    body.boxed .is-sticky-section {
      max-width: 1260px
    }

    .header-main {
      height: 91px
    }

    #logo img {
      max-height: 91px
    }

    #logo {
      width: 430px;
    }

    .header-bottom {
      min-height: 43px
    }

    .header-top {
      min-height: 40px
    }

    .transparent .header-main {
      height: 30px
    }

    .transparent #logo img {
      max-height: 30px
    }

    .has-transparent+.page-title:first-of-type,
    .has-transparent+#main>.page-title,
    .has-transparent+#main>div>.page-title,
    .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
      padding-top: 110px;
    }

    .header.show-on-scroll,
    .stuck .header-main {
      height: 70px !important
    }

    .stuck #logo img {
      max-height: 70px !important
    }

    .header-bg-color,
    .header-wrapper {
      background-color: rgba(255, 255, 255, 0.9)
    }

    .header-bottom {
      background-color: #1c63b8
    }

    .header-bottom-nav>li>a {
      line-height: 16px
    }

    @media (max-width: 549px) {
      .header-main {
        height: 70px
      }

      #logo img {
        max-height: 70px
      }
    }

    .nav-dropdown {
      border-radius: 3px
    }

    .nav-dropdown {
      font-size: 100%
    }

    .nav-dropdown-has-arrow li.has-dropdown:after {
      border-bottom-color: #ffffff;
    }

    .nav .nav-dropdown {
      background-color: #ffffff
    }

    .header-top {
      background-color: #f1f1f1 !important;
    }

    /* Color */
    .accordion-title.active,
    .has-icon-bg .icon .icon-inner,
    .logo a,
    .primary.is-underline,
    .primary.is-link,
    .badge-outline .badge-inner,
    .nav-outline>li.active>a,
    .nav-outline>li.active>a,
    .cart-icon strong,
    [data-color='primary'],
    .is-outline.primary {
      color: #1c63b8;
    }

    /* Color !important */
    [data-text-color="primary"] {
      color: #1c63b8 !important;
    }

    /* Background Color */
    [data-text-bg="primary"] {
      background-color: #1c63b8;
    }

    /* Background */
    .scroll-to-bullets a,
    .featured-title,
    .label-new.menu-item>a:after,
    .nav-pagination>li>.current,
    .nav-pagination>li>span:hover,
    .nav-pagination>li>a:hover,
    .has-hover:hover .badge-outline .badge-inner,
    button[type="submit"],
    .button.wc-forward:not(.checkout):not(.checkout-button),
    .button.submit-button,
    .button.primary:not(.is-outline),
    .featured-table .title,
    .is-outline:hover,
    .has-icon:hover .icon-label,
    .nav-dropdown-bold .nav-column li>a:hover,
    .nav-dropdown.nav-dropdown-bold>li>a:hover,
    .nav-dropdown-bold.dark .nav-column li>a:hover,
    .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
    .is-outline:hover,
    .tagcloud a:hover,
    .grid-tools a,
    input[type='submit']:not(.is-form),
    .box-badge:hover .box-text,
    input.button.alt,
    .nav-box>li>a:hover,
    .nav-box>li.active>a,
    .nav-pills>li.active>a,
    .current-dropdown .cart-icon strong,
    .cart-icon:hover strong,
    .nav-line-bottom>li>a:before,
    .nav-line-grow>li>a:before,
    .nav-line>li>a:before,
    .banner,
    .header-top,
    .slider-nav-circle .flickity-prev-next-button:hover svg,
    .slider-nav-circle .flickity-prev-next-button:hover .arrow,
    .primary.is-outline:hover,
    .button.primary:not(.is-outline),
    input[type='submit'].primary,
    input[type='submit'].primary,
    input[type='reset'].button,
    input[type='button'].primary,
    .badge-inner {
      background-color: #1c63b8;
    }

    /* Border */
    .nav-vertical.nav-tabs>li.active>a,
    .scroll-to-bullets a.active,
    .nav-pagination>li>.current,
    .nav-pagination>li>span:hover,
    .nav-pagination>li>a:hover,
    .has-hover:hover .badge-outline .badge-inner,
    .accordion-title.active,
    .featured-table,
    .is-outline:hover,
    .tagcloud a:hover,
    blockquote,
    .has-border,
    .cart-icon strong:after,
    .cart-icon strong,
    .blockUI:before,
    .processing:before,
    .loading-spin,
    .slider-nav-circle .flickity-prev-next-button:hover svg,
    .slider-nav-circle .flickity-prev-next-button:hover .arrow,
    .primary.is-outline:hover {
      border-color: #1c63b8
    }

    .nav-tabs>li.active>a {
      border-top-color: #1c63b8
    }

    .widget_shopping_cart_content .blockUI.blockOverlay:before {
      border-left-color: #1c63b8
    }

    .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
      border-left-color: #1c63b8
    }

    /* Fill */
    .slider .flickity-prev-next-button:hover svg,
    .slider .flickity-prev-next-button:hover .arrow {
      fill: #1c63b8;
    }

    @media screen and (max-width: 549px) {
      body {
        font-size: 100%;
      }
    }

    body {
      font-family: "Roboto", sans-serif
    }

    body {
      font-weight: 0
    }

    body {
      color: #353535
    }

    .nav>li>a {
      font-family: "Roboto", sans-serif;
    }

    .nav>li>a {
      font-weight: 700;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .heading-font,
    .off-canvas-center .nav-sidebar.nav-vertical>li>a {
      font-family: "Roboto", sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .heading-font,
    .banner h1,
    .banner h2 {
      font-weight: 700;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .heading-font {
      color: #1c1c1c;
    }

    .alt-font {
      font-family: "Dancing Script", sans-serif;
    }

    .header:not(.transparent) .header-bottom-nav.nav>li>a {
      color: #ffffff;
    }

    @media screen and (min-width: 550px) {
      .products .box-vertical .box-image {
        min-width: 300px !important;
        width: 300px !important;
      }
    }

    .footer-2 {
      background-color: #777777
    }

    .absolute-footer,
    html {
      background-color: #000000
    }

    .label-new.menu-item>a:after {
      content: "New";
    }

    .label-hot.menu-item>a:after {
      content: "Hot";
    }

    .label-sale.menu-item>a:after {
      content: "Sale";
    }

    .label-popular.menu-item>a:after {
      content: "Popular";
    }
  </style>

  <style scope="scope">
    #section_805565961 {
      padding-top: 0px;
      padding-bottom: 0px;
    }

    #section_1765500845 {
      padding-top: 0px;
      padding-bottom: 0px;
      background-color: rgb(247, 247, 247);
    }

    #image_439763723 {
      width: 100%;
    }

    #image_2096061202 {
      width: 100%;
    }

    #section_1341016199 {
      padding-top: 0px;
      padding-bottom: 0px;
    }

    #image_712758470 {
      width: 100%;
    }

    #section_249230101 {
      padding-top: 0px;
      padding-bottom: 0px;
      background-color: rgb(247, 247, 247);
    }

    #image_430548742 {
      width: 100%;
    }

    #section_1022386961 {
      padding-top: 0px;
      padding-bottom: 0px;
    }

    #section_1916852813 {
      padding-top: 25px;
      padding-bottom: 25px;
      background-color: rgb(28, 99, 184);
    }

    #section_1217095824 {
      padding-top: 25px;
      padding-bottom: 25px;
      background-color: rgb(28, 99, 184);
    }

    #section_1609712845 {
      padding-top: 0px;
      padding-bottom: 0px;
    }

    #section_1671632777 {
      padding-top: 0px;
      padding-bottom: 0px;
    }

    #image_1853976005 {
      width: 100%;
    }
  </style>

  <style>
    .pagination {
      display: inline-block;
    }

    .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
      margin: 0 4px;
    }

    .pagination strong {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
      margin: 0 4px;
    }

    .pagination a.active {
      background-color: #4CAF50;
      color: white;
      border: 1px solid #4CAF50;
    }

    .pagination a:hover:not(.active) {
      background-color: #ddd;
    }

    .pag_center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 20%;
    }
  </style>
</head>

<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-16 woocommerce-no-js lightbox nav-dropdown-has-arrow">

  <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
  <div id="wrapper">

    <?php $this->load->view("site/static/header") ?>

    <?php $this->load->view($temp, $this->data) ?>

    <?php $this->load->view("site/static/mobile-menu") ?>

    <?php $this->load->view("site/static/footer", $this->data) ?>
  </div>

  <script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
  </script>
  <link rel='stylesheet' id='flatsome-effects-css' href='<?= public_url("site/wp-content/themes/flatsome/assets/css/effects.css") ?>' type='text/css' media='all' />
  <script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
      "apiSettings": {
        "root": "http:\/\/mauweb.monamedia.net\/autoser\/wp-json\/contact-form-7\/v1",
        "namespace": "contact-form-7\/v1"
      },
      "recaptcha": {
        "messages": {
          "empty": "H\u00e3y x\u00e1c nh\u1eadn r\u1eb1ng b\u1ea1n kh\u00f4ng ph\u1ea3i l\u00e0 robot."
        }
      }
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/contact-form-7/includes/js/scripts.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/fb-messenger/js/index.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/ot-flatsome-vertical-menu/assets/js/ot-vertical-menu.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js") ?>'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
      "ajax_url": "\/autoser\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "http:\/\/mauweb.monamedia.net\/autoser\/?wc-ajax=%%endpoint%%",
      "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
      "cart_url": "http:\/\/mauweb.monamedia.net\/autoser\/gio-hang\/",
      "is_cart": "",
      "cart_redirect_after_add": "no"
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js") ?>'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {
      "ajax_url": "\/autoser\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/autoser\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js") ?>'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
      "ajax_url": "\/autoser\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/autoser\/?wc-ajax=%%endpoint%%",
      "cart_hash_key": "wc_cart_hash_e727ccd85f813ec511df2361c8affc12",
      "fragment_name": "wc_fragments_e727ccd85f813ec511df2361c8affc12"
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-includes/js/hoverIntent.min.js") ?>'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
    var flatsomeVars = {
      "ajaxurl": "http:\/\/mauweb.monamedia.net\/autoser\/wp-admin\/admin-ajax.php",
      "rtl": "",
      "sticky_height": "70",
      "user": {
        "can_edit_pages": false
      }
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/themes/flatsome/assets/js/flatsome.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/themes/flatsome/assets/js/woocommerce.js") ?>'></script>
  <script type='text/javascript' src='<?= public_url("site/wp-includes/js/wp-embed.min.js") ?>'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
    var _zxcvbnSettings = {
      "src": "http:\/\/127.0.0.1\/car\/public\/site\/wp-includes\/js\/zxcvbn.min.js"
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='<?= public_url("site/wp-includes/js/zxcvbn-async.min.js") ?>'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
    var pwsL10n = {
      "unknown": "M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh",
      "short": "R\u1ea5t y\u1ebfu",
      "bad": "Y\u1ebfu",
      "good": "Trung b\u00ecnh",
      "strong": "M\u1ea1nh",
      "mismatch": "M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='<?= public_url("site/wp-admin/js/password-strength-meter.min.js") ?>'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
    var wc_password_strength_meter_params = {
      "min_password_strength": "3",
      "i18n_password_error": "Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.",
      "i18n_password_hint": "G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='<?= public_url("site/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js") ?>'></script>
  <style type="text/css"></style>
  <script type="text/javascript">
    var essb_clicked_lovethis = false;
    var essb_love_you_message_thanks = "Thank you for loving this.";
    var essb_love_you_message_loved = "You already love this today.";
    var essb_lovethis = function(oInstance) {
      if (essb_clicked_lovethis) {
        alert(essb_love_you_message_loved);
        return;
      }
      var element = jQuery('.essb_' + oInstance);
      if (!element.length) {
        return;
      }
      var instance_post_id = jQuery(element).attr("data-essb-postid") || "";
      var cookie_set = essb_get_lovecookie("essb_love_" + instance_post_id);
      if (cookie_set) {
        alert(essb_love_you_message_loved);
        return;
      }
      if (typeof(essb_settings) != "undefined") {
        jQuery.post(essb_settings.ajax_url, {
          'action': 'essb_love_action',
          'post_id': instance_post_id,
          'service': 'love',
          'nonce': essb_settings.essb3_nonce
        }, function(data) {
          if (data) {
            alert(essb_love_you_message_thanks);
          }
        }, 'json');
      }
      essb_tracking_only('', 'love', oInstance, true);
    };
    var essb_get_lovecookie = function(name) {
      var value = "; " + document.cookie;
      var parts = value.split("; " + name + "=");
      if (parts.length == 2) return parts.pop().split(";").shift();
    };
    var essb_window = function(oUrl, oService, oInstance) {
      var element = jQuery('.essb_' + oInstance);
      var instance_post_id = jQuery(element).attr("data-essb-postid") || "";
      var instance_position = jQuery(element).attr("data-essb-position") || "";
      var wnd;
      var w = 800;
      var h = 500;
      if (oService == "twitter") {
        w = 500;
        h = 300;
      }
      var left = (screen.width / 2) - (w / 2);
      var top = (screen.height / 2) - (h / 2);
      if (oService == "twitter") {
        wnd = window.open(oUrl, "essb_share_window", "height=300,width=500,resizable=1,scrollbars=yes,top=" + top + ",left=" + left);
      } else {
        wnd = window.open(oUrl, "essb_share_window", "height=500,width=800,resizable=1,scrollbars=yes,top=" + top + ",left=" + left);
      }
      if (typeof(essb_settings) != "undefined") {
        if (essb_settings.essb3_stats) {
          if (typeof(essb_handle_stats) != "undefined") {
            essb_handle_stats(oService, instance_post_id, oInstance);
          }
        }
        if (essb_settings.essb3_ga) {
          essb_ga_tracking(oService, oUrl, instance_position);
        }
      }
      essb_self_postcount(oService, instance_post_id);
      var pollTimer = window.setInterval(function() {
        if (wnd.closed !== false) {
          window.clearInterval(pollTimer);
          essb_smart_onclose_events(oService, instance_post_id);
        }
      }, 200);
    };
    var essb_self_postcount = function(oService, oCountID) {
      if (typeof(essb_settings) != "undefined") {
        oCountID = String(oCountID);
        jQuery.post(essb_settings.ajax_url, {
          'action': 'essb_self_postcount',
          'post_id': oCountID,
          'service': oService,
          'nonce': essb_settings.essb3_nonce
        }, function(data) {
          if (data) {}
        }, 'json');
      }
    };
    var essb_smart_onclose_events = function(oService, oPostID) {
      if (typeof(essbasc_popup_show) == 'function') {
        essbasc_popup_show();
      }
      if (typeof essb_acs_code == 'function') {
        essb_acs_code(oService, oPostID);
      }
    };
    var essb_tracking_only = function(oUrl, oService, oInstance, oAfterShare) {
      var element = jQuery('.essb_' + oInstance);
      if (oUrl == "") {
        oUrl = document.URL;
      }
      var instance_post_id = jQuery(element).attr("data-essb-postid") || "";
      var instance_position = jQuery(element).attr("data-essb-position") || "";
      if (typeof(essb_settings) != "undefined") {
        if (essb_settings.essb3_stats) {
          if (typeof(essb_handle_stats) != "undefined") {
            essb_handle_stats(oService, instance_post_id, oInstance);
          }
        }
        if (essb_settings.essb3_ga) {
          essb_ga_tracking(oService, oUrl, instance_position);
        }
      }
      essb_self_postcount(oService, instance_post_id);
      if (oAfterShare) {
        essb_smart_onclose_events(oService, instance_post_id);
      }
    };
    var essb_pinterest_picker = function(oInstance) {
      essb_tracking_only('', 'pinterest', oInstance);
      var e = document.createElement('script');
      e.setAttribute('type', 'text/javascript');
      e.setAttribute('charset', 'UTF-8');
      e.setAttribute('src', '//assets.pinterest.com/js/pinmarklet.js?r=' + Math.random() * 99999999);
      document.body.appendChild(e);
    };
  </script>
</body>

</html>