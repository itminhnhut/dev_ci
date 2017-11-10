<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Test CI Application</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/ci_cart.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/menu.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/icon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/reponsive.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/plugin.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/plugin_1.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/plugin_2.css">
    <script type="text/javascript">
        var road_brandnumber = 5,
        road_brandscroll = true,
        road_brandscrollnumber = 2,
        road_brandpause = 3000,
        road_brandanimate = 2000;
        var road_catenumber = 4,
        road_catescroll = false,
        road_catescrollnumber = 1,
        road_catepause = 3000,
        road_cateanimate = 2000;
        var road_blogscroll = false,
        road_blogpause = 3000,
        road_bloganimate = 2000;
        var road_rtl = false
    </script>
    <script type="text/javascript">
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <title>Maroko &#8211; WooCommerce Theme</title>
    <style>
    .wishlist_table .add_to_cart,
    a.add_to_wishlist.button.alt {
        border-radius: 16px;
        -moz-border-radius: 16px;
        -webkit-border-radius: 16px
    }
</style>
<script type="text/javascript">
    var yith_wcwl_plugin_ajax_web_url = 'http://demo.roadthemes.com/maroko/wp-admin/admin-ajax.php' /*tpa=http://demo.roadthemes.com/maroko/wp-admin/admin-ajax.php*/ ;
</script>
<script>
    if (typeof WebFontConfig === "undefined") {
        WebFontConfig = new Object();
    }
    WebFontConfig['google'] = {
        families: ['Raleway:100,200,300,400,500,600,700,800,900', 'Montserrat:400,700']
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js' /*tpa=https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js*/ ;
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
<script type="text/javascript">
    /*<![CDATA[*/
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "http:\/\/demo.roadthemes.com\/maroko\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.4"
        }
    };
    ! function(a, b, c) {
        function d(a) {
            var b, c, d, e, f = String.fromCharCode;
            if (!k || !k.fillText) return !1;
            switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
                case "flag":
                return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), !(j.toDataURL().length < 3e3) && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 55356, 57096), 0, 0), c = j.toDataURL(), b !== c);
                case "emoji4":
                return k.fillText(f(55357, 56425, 55356, 57341, 8205, 55357, 56507), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55357, 56425, 55356, 57341, 55357, 56507), 0, 0), e = j.toDataURL(), d !== e
            }
            return !1
        }

        function e(a) {
            var c = b.createElement("script");
            c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
        }
        var f, g, h, i, j = b.createElement("canvas"),
        k = j.getContext && j.getContext("2d");
        for (i = Array("flag", "emoji4"), c.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (g = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings); /*]]>*/
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
        padding: 0 !important
    }
</style>
<style id='rs-plugin-settings-inline-css' type='text/css'>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,800,300,700)
/*tpa=http://fonts.googleapis.com/css?family=Open+Sans:400,800,300,700*/

;
.tp-caption.roundedimage img {
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px
}

.tp-caption a {
    color: #ff7302;
    text-shadow: none;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    -ms-transition: all 0.2s ease-out
}

.tp-caption a:hover {
    color: #ffa902
}

.largeredbtn {
    font-family: "Raleway", sans-serif;
    font-weight: 900;
    font-size: 16px;
    line-height: 60px;
    color: #fff !important;
    text-decoration: none;
    padding-left: 40px;
    padding-right: 80px;
    padding-top: 22px;
    padding-bottom: 22px;
    background: rgb(234, 91, 31);
    background: -moz-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(234, 91, 31, 1)), color-stop(100%, rgba(227, 58, 12, 1)));
    background: -webkit-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -o-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -ms-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: linear-gradient(to bottom, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ea5b1f', endColorstr='#e33a0c', GradientType=0)
}

.largeredbtn:hover {
    background: rgb(227, 58, 12);
    background: -moz-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(227, 58, 12, 1)), color-stop(100%, rgba(234, 91, 31, 1)));
    background: -webkit-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -o-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -ms-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: linear-gradient(to bottom, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#e33a0c', endColorstr='#ea5b1f', GradientType=0)
}

.fullrounded img {
    -webkit-border-radius: 400px;
    -moz-border-radius: 400px;
    border-radius: 400px
}

.tp-caption a {
    color: #ff7302;
    text-shadow: none;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    -ms-transition: all 0.2s ease-out
}

.tp-caption a:hover {
    color: #ffa902
}

.largeredbtn {
    font-family: "Raleway", sans-serif;
    font-weight: 900;
    font-size: 16px;
    line-height: 60px;
    color: #fff !important;
    text-decoration: none;
    padding-left: 40px;
    padding-right: 80px;
    padding-top: 22px;
    padding-bottom: 22px;
    background: rgb(234, 91, 31);
    background: -moz-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(234, 91, 31, 1)), color-stop(100%, rgba(227, 58, 12, 1)));
    background: -webkit-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -o-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -ms-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: linear-gradient(to bottom, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ea5b1f', endColorstr='#e33a0c', GradientType=0)
}

.largeredbtn:hover {
    background: rgb(227, 58, 12);
    background: -moz-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(227, 58, 12, 1)), color-stop(100%, rgba(234, 91, 31, 1)));
    background: -webkit-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -o-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -ms-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: linear-gradient(to bottom, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#e33a0c', endColorstr='#ea5b1f', GradientType=0)
}

.fullrounded img {
    -webkit-border-radius: 400px;
    -moz-border-radius: 400px;
    border-radius: 400px
}
</style>
<link rel='stylesheet' id='tp-raleway-css' href="http://fonts.googleapis.com/css?family=Raleway%3A400%2C900%2C800%2C700%2C600%2C500%2C200%2C100%2C300&ver=4.7.4" tppabs="http://fonts.googleapis.com/css?family=Raleway%3A400%2C900%2C800%2C700%2C600%2C500%2C200%2C100%2C300&ver=4.7.4" type='text/css'
media='all' />
<link rel='stylesheet' id='roadthemes-fonts-css' href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&subset=latin,latin-ext" tppabs="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&subset=latin,latin-ext" type='text/css'
media='all' />
<!--[if lte IE 9]><link rel='stylesheet' id='roadthemes-ie-css'  href="ie1.css-ver=20121010.css" tppabs="http://demo.roadthemes.com/maroko/wp-content/themes/maroko/css/ie1.css?ver=20121010" type='text/css' media='all' /> <![endif]-->
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery/slide.js" tppabs="http://demo.roadthemes.com/maroko/wp-content/cache/minify/000000/lctbCoAwDETRDdkWlyQaNJpHTRvF3asg-CnCwPzcw53pomnPAaUnH6Ck-drqYMdzDX83gXG0rkJklKZNBlshHMCSlZDJR5SXxDoBQ3bpp1hVqfxFV6jkFVVueQI.js"></script>
<script type='text/javascript'>
    var wc_add_to_cart_params = {
        "ajax_url": "http:\/\/demo.roadthemes.com\/maroko\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "http:\/\/demo.roadthemes.com\/maroko\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View Cart",
        "cart_url": "http:\/\/demo.roadthemes.com\/maroko\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
</script>
<link rel='https://api.w.org/' href='http://demo.roadthemes.com/maroko/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://demo.roadthemes.com/maroko/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://demo.roadthemes.com/maroko/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.7.4" />
<meta name="generator" content="WooCommerce 2.4.7" />
<link rel='shortlink' href='http://demo.roadthemes.com/maroko/' />
<link rel="alternate" type="application/json+oembed" href="http://demo.roadthemes.com/maroko/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.roadthemes.com%2Fmaroko%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://demo.roadthemes.com/maroko/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.roadthemes.com%2Fmaroko%2F&#038;format=xml" />
<script type="text/javascript">
    jQuery(document).ready(function() {
        var ajaxRevslider = function(obj) {
            var content = "";
            data = {};
            data.action = 'revslider_ajax_call_front';
            data.client_action = 'get_slider_html';
            data.token = 'aa3bc6af31';
            data.type = obj.type;
            data.id = obj.id;
            data.aspectratio = obj.aspectratio;
            jQuery.ajax({
                type: "post",
                url: "http://demo.roadthemes.com/maroko/wp-admin/admin-ajax.php" /*tpa=http://demo.roadthemes.com/maroko/wp-admin/admin-ajax.php*/ ,
                dataType: 'json',
                data: data,
                async: false,
                success: function(ret, textStatus, XMLHttpRequest) {
                    if (ret.success == true) content = ret.data;
                },
                error: function(e) {
                    console.log(e);
                }
            });
            return content;
        };
        var ajaxRemoveRevslider = function(obj) {
            return jQuery(obj.selector + " .rev_slider").revkill();
        };
        var extendessential = setInterval(function() {
            if (jQuery.fn.tpessential != undefined) {
                clearInterval(extendessential);
                if (typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
                    jQuery.fn.tpessential.defaults.ajaxTypes.push({
                        type: "revslider",
                        func: ajaxRevslider,
                        killfunc: ajaxRemoveRevslider,
                        openAnimationSpeed: 0.3
                    });
                }
            }
        }, 30);
    });
</script>
<script type="text/javascript">
    var ajaxurl = 'http://demo.roadthemes.com/maroko/wp-admin/admin-ajax.php' /*tpa=http://demo.roadthemes.com/maroko/wp-admin/admin-ajax.php*/ ;
</script>
<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="vc_lte_ie9.css" tppabs="http://demo.roadthemes.com/maroko/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.css" media="screen"><![endif]-->
<!--[if IE  8]><link rel="stylesheet" type="text/css" href="vc-ie8.css" tppabs="http://demo.roadthemes.com/maroko/wp-content/plugins/js_composer/assets/css/vc-ie8.css" media="screen"><![endif]-->
<style type="text/css" title="dynamic-css" class="options-output">
body {
    font-family: Raleway;
    line-height: 20px;
    font-weight: 400;
    font-style: normal;
    color: #848484;
    font-size: 13px;
    opacity: 1;
    visibility: visible;
    -webkit-transition: opacity 0.24s ease-in-out;
    -moz-transition: opacity 0.24s ease-in-out;
    transition: opacity 0.24s ease-in-out
}

.wf-loading body,
{
    opacity: 0
}

.ie.wf-loading body,
{
    visibility: hidden
}
</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">
.vc_custom_1436002762836 {
    margin-right: 0px !important;
    margin-left: 0px !important
}

.vc_custom_1436002772838 {
    margin-top: 50px !important;
    margin-right: 0px !important;
    margin-bottom: 0px !important;
    margin-left: 0px !important;
    padding-top: 30px !important;
    padding-bottom: 30px !important;
    background-image: url(http://demo.roadthemes.com/maroko/wp-content/uploads/2014/12/bg_newsletter.jpg)/*tpa=http://demo.roadthemes.com/maroko/wp-content/uploads/2014/12/bg_newsletter.jpg?id=3213*/
    !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important
}
</style>
<noscript>
    <style>
    .wpb_animate_when_almost_visible{opacity:1}
</style>
</noscript>
<?php echo $styles;?>
</head>
<body>
    <div id="yith-wcwl-popup-message" style="display:none;">
        <div id="yith-wcwl-message"></div>
    </div>
    <div class="wrapper">
        <div class="page-wapper">
            <?php $this->load->view("layouts/font_end/header") ?>
            <div class= "main-container front-page">
            	<div class="page-content">
            		<article id="post-1860" class="post-1860 page type-page status-publish hentry">
            			<div class = "entry-content">
            				<?php $this->load->view($slide) ?>
            				<?php echo $contents;?>
            			</div>
            		</article>
            	</div>
            </div>
            <?php $this->load->view("layouts/font_end/footer") ?>
        </div>
    </div>
    <div id="secondary" class="col-xs-12 col-md-3 sidebar-sub">
        <aside id="nav_menu-2" class="widget widget_nav_menu">
            <h3 class="widget-title"><span>Custom Menu</span></h3>
            <div class="menu-custom-links-container">
                <ul id="menu-custom-links-1" class="menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page first menu-item-3532"><a href="http://demo.roadthemes.com/maroko/about-us/">About Us</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"><a href="http://demo.roadthemes.com/maroko/contact/">Contact</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3533"><a href="http://demo.roadthemes.com/maroko/blog/">Blog</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page last menu-item-3535"><a href="http://demo.roadthemes.com/maroko/faqs/">FAQS</a>
                    </li>
                </ul>
            </div>
        </aside>
        <aside id="text-5" class="widget widget_text">
            <h3 class="widget-title"><span>Keep your shopping</span></h3>
            <div class="textwidget">We always provide the latest fashion style and the low price and sale product for your choice. With all clothes, bag, hat and other fashion accessories, make your new today</div>
        </aside>
        <aside id="easy_facebook_page_plugin-2" class="widget widget_easy_facebook_page_plugin">
            <h3 class="widget-title"><span>Find us on Facebook</span></h3>
            <div id="fb-root"></div>
            <script>
                /*<![CDATA[*/
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=395202813876688";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk')); /*]]>*/
            </script>
            <div class="fb-page " data-href="https://www.facebook.com/roadthemes" data-hide-cover=false data-width="250" data-height="" data-show-facepile=true data-show-posts=false data-adapt-container-width=true data-hide-cta=false data-small-header="false"></div>
        </aside>
    </div>
     <div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery/plugin_1.js"></script>
    <script type='text/javascript'>
        var _wpcf7 = {
            "loaderUrl": "http:\/\/loclhost/\/assets\/img\/anh\/ajax-loader.gif",
            "sending": "Sending ...",
            "cached": "1"
        };
    </script>
    <?php echo $scripts_header;?>
</body>
</html>