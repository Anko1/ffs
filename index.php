<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<?php
function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',  
        '/[^\S ]+\</s', 
        '/(\s)+/s'
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");
?>
<html class="no-js" lang="uk"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Celentano</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="./images/logo-min.png">
    <link rel="stylesheet"  href="css/bootstrap-datetimepicker.min.css" >
    <!--Асинхронні стилі-->
<!--     <link rel="stylesheet"  href="css/bootstrap.css" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet"  href="css/flexslider.css" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet"  href="css/animate.css" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet"  href="css/icomoon.css" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet"  href="css/simple-line-icons.css" media="none" onload="if(media!='all')media='all'"> -->
    
        <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet"  href="css/flexslider.css">
    <link rel="stylesheet"  href="css/animate.css">
    <link rel="stylesheet"  href="css/icomoon.css">
    <link rel="stylesheet"  href="css/simple-line-icons.css">
    

    <!-- <link rel="stylesheet"  href="css/allin.css"> -->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T3JHTWQ');</script>
    <!-- End Google Tag Manager -->

    <style>
    /*@import url('https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700i&subset=cyrillic');*/
    /*@import url('https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i');*/

   @font-face {
    font-family: Merriweather; 
    src: url(fonts/Merriweather-Light.ttf); 
   }
   @font-face {
    font-family: Playfair Display; 
    src: url(fonts/PlayfairDisplay-Regular.ttf); 
   }
   @font-face {
    font-family: Playfair Display; 
    src: url(fonts/PlayfairDisplay-Bold.ttf);
    font-weight: 700; 
   }
@charset "UTF-8";@font-face{font-family:'icomoon';src:url(fonts/icomoon/icomoon.eot?srf3rx);src:url("fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"),url(fonts/icomoon/icomoon.ttf?srf3rx) format("truetype"),url(fonts/icomoon/icomoon.woff?srf3rx) format("woff"),url("fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");font-weight:400;font-style:normal}@font-face{font-family:'OldStandard-Italic';src:url(fonts/OldStandard-Italic.ttf) format("ttf")}body{font-family:"Merriweather",serif;font-size:18px;font-weight:300;line-height:2;color:#5e493a}body.fh5co-overflow{overflow-x:auto}a{color:#fb6e14;-webkit-transition:0.5s;-o-transition:0.5s;transition:0.5s}a:hover,a:focus,a:active{color:#bf4c03}h1,h2,h3,h4,h5,h6{font-family:"Playfair Display",serif;color:#000}p{margin-bottom:30px}.btn{margin-right:4px;margin-bottom:4px;font-family:"Playfair Display",serif;font-size:12px;letter-spacing:2px;text-transform:uppercase;font-weight:700;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;border-radius:4px;-webkit-transition:0.5s;-o-transition:0.5s;transition:0.5s}.btn.btn-md{padding:10px 20px!important}.btn.btn-lg{padding:18px 36px!important}.btn:hover,.btn:active,.btn:focus{box-shadow:none!important;outline:none!important}.btn-primary{background:#fb6e14;color:#fff;border:2px solid #fb6e14}.btn-primary:hover,.btn-primary:focus,.btn-primary:active{background:#f16104!important;border-color:#f16104!important}.btn-primary.btn-outline{background:transparent;color:#fb6e14;border:2px solid #fb6e14}.btn-primary.btn-outline:hover,.btn-primary.btn-outline:focus,.btn-primary.btn-outline:active{background:#fb6e14;color:#fff}.btn-success{background:#58ca7e;color:#fff;border:2px solid #58ca7e}.btn-success:hover,.btn-success:focus,.btn-success:active{background:#45c46f!important;border-color:#45c46f!important}.btn-success.btn-outline{background:transparent;color:#58ca7e;border:2px solid #58ca7e}.btn-success.btn-outline:hover,.btn-success.btn-outline:focus,.btn-success.btn-outline:active{background:#58ca7e;color:#fff}.btn-info{background:#1784fb;color:#fff;border:2px solid #1784fb}.btn-info:hover,.btn-info:focus,.btn-info:active{background:#0477f4!important;border-color:#0477f4!important}.btn-info.btn-outline{background:transparent;color:#1784fb;border:2px solid #1784fb}.btn-info.btn-outline:hover,.btn-info.btn-outline:focus,.btn-info.btn-outline:active{background:#1784fb;color:#fff}.btn-warning{background:#fed330;color:#fff;border:2px solid #fed330}.btn-warning:hover,.btn-warning:focus,.btn-warning:active{background:#fece17!important;border-color:#fece17!important}.btn-warning.btn-outline{background:transparent;color:#fed330;border:2px solid #fed330}.btn-warning.btn-outline:hover,.btn-warning.btn-outline:focus,.btn-warning.btn-outline:active{background:#fed330;color:#fff}.btn-danger{background:#fb4f59;color:#fff;border:2px solid #fb4f59}.btn-danger:hover,.btn-danger:focus,.btn-danger:active{background:#fa3641!important;border-color:#fa3641!important}.btn-danger.btn-outline{background:transparent;color:#fb4f59;border:2px solid #fb4f59}.btn-danger.btn-outline:hover,.btn-danger.btn-outline:focus,.btn-danger.btn-outline:active{background:#fb4f59;color:#fff}.btn-outline{background:none;border:2px solid gray;font-size:12px;letter-spacing:2px;text-transform:uppercase;-webkit-transition:0.3s;-o-transition:0.3s;transition:0.3s}.btn-outline:hover,.btn-outline:focus,.btn-outline:active{box-shadow:none}.form-control{box-shadow:none;background:transparent;border:2px solid rgba(0,0,0,.1);height:54px;font-size:18px;font-weight:300}.form-control:active,.form-control:focus{outline:none;box-shadow:none;border-color:#fb6e14}#fh5co-home{min-height:700px;background:#fff url(images/loader.gif) no-repeat center center}#fh5co-home .flexslider{border:none;position:relative;z-index:1;margin-bottom:0}#fh5co-home .flexslider .fh5co-text{position:absolute;z-index:3;width:100%;top:50%;margin-top:-212px;text-align:center}#fh5co-home .flexslider .fh5co-text h1{position:relative;text-transform:capitalize;margin:160px 0 0;padding:0;font-family:"Playfair Display",serif;font-size:159px;font-weight:700;color:#fff;-webkit-transition:0.3s;-o-transition:0.3s;transition:0.3s}@media screen and (max-width:992px){#fh5co-home .flexslider .fh5co-text h1{font-size:60px}}#fh5co-home .flexslider .fh5co-text h1::after{content:'Франчайзинг';font-size:40px;font-family:"Merriweather",serif;position:absolute;top:-50px;left:50%;transform:translate(-50%)}#fh5co-home .flexslider .fh5co-text h2{padding:0;font-family:"Merriweather",serif;font-weight:300;font-size:32px;letter-spacing:2px;color:#fff;-webkit-transition:0.3s;-o-transition:0.3s;transition:0.3s;margin:20px 0 0}@media screen and (max-width:768px){#fh5co-home .flexslider .fh5co-text h2{font-size:20px}}#fh5co-home .flexslider .fh5co-text h2 span{font-family:"Playfair Display",serif;font-style:italic;text-transform:none}#fh5co-home .flexslider .fh5co-text h2 a{color:#fb6e14}#fh5co-home .flexslider .slides li{background-repeat:no-repeat;background-size:cover}#fh5co-home .flexslider .fh5co-overlay{position:absolute;z-index:3;top:0;bottom:0;left:0;right:0;opacity:.5;background:#000}#fh5co-home .flexslider .flex-control-nav,#fh5co-home .flexslider .flex-direction-nav{display:none}.fh5co-main-nav{position:relative;background:#fff}.fh5co-main-nav.fh5co-shadow{-webkit-box-shadow:0 0 7px 0 rgba(0,0,0,.3);-moz-box-shadow:0 0 7px 0 rgba(0,0,0,.3);-ms-box-shadow:0 0 7px 0 rgba(0,0,0,.3);box-shadow:0 0 7px 0 rgba(0,0,0,.3)}.fh5co-main-nav:before,.fh5co-main-nav:after{content:"";position:absolute;left:0;height:2px;width:100%;background:#e6e6e6}.fh5co-main-nav:before{top:2px}.fh5co-main-nav:after{bottom:2px}.fh5co-main-nav .fh5co-menu-1,.fh5co-main-nav .fh5co-menu-2,.fh5co-main-nav .fh5co-logo{vertical-align:middle;float:left;line-height:0}.fh5co-main-nav .fh5co-menu-1 a,.fh5co-main-nav .fh5co-menu-2 a,.fh5co-main-nav .fh5co-logo a{padding:35px 10px;color:#130d08;display:-moz-inline-stack;display:inline-block;zoom:1;*display:inline}.fh5co-main-nav .fh5co-menu-1 a:hover,.fh5co-main-nav .fh5co-menu-1 a:focus,.fh5co-main-nav .fh5co-menu-1 a:active,.fh5co-main-nav .fh5co-menu-2 a:hover,.fh5co-main-nav .fh5co-menu-2 a:focus,.fh5co-main-nav .fh5co-menu-2 a:active,.fh5co-main-nav .fh5co-logo a:hover,.fh5co-main-nav .fh5co-logo a:focus,.fh5co-main-nav .fh5co-logo a:active{outline:none;text-decoration:none}.fh5co-main-nav .fh5co-menu-1 a.active,.fh5co-main-nav .fh5co-menu-2 a.active,.fh5co-main-nav .fh5co-logo a.active{color:#fb6e14}.fh5co-main-nav .fh5co-menu-1 a img,.fh5co-main-nav .fh5co-menu-2 a img,.fh5co-main-nav .fh5co-logo a img{width:134px}.fh5co-main-nav .fh5co-menu-1{text-align:right;width:40.33%}.fh5co-main-nav .fh5co-menu-1 a{vertical-align:middle}.fh5co-main-nav .fh5co-logo{text-align:center;width:19.33%;font-size:40px;font-family:"Playfair Display",serif;font-weight:700;font-style:italic}.fh5co-main-nav .fh5co-logo a{position:relative;top:-5px;display:inline-block;padding:18px 0 0}.fh5co-main-nav .fh5co-menu-2{text-align:left;width:40.33%}.fh5co-main-nav #phone{position:absolute;right:20px;top:50%;transform:translateY(-50%)}.fh5co-heading .heading{font-size:50px;font-style:italic;position:relative;padding-bottom:30px;margin-bottom:30px}@media screen and (max-width:768px){.fh5co-heading .heading{font-size:30px}}.fh5co-heading .heading:after{content:"";position:absolute;bottom:0;width:40px;height:2px;left:50%;background:#fb6e14;margin-left:-20px}.fh5co-heading .sub-heading{font-size:20px;line-height:1.5;margin-bottom:30px}@media screen and (max-width:768px){.fh5co-heading .sub-heading{font-size:18px}}#fh5co-about{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;flex-wrap:wrap;-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap;background:#e6e6e6;width:100%}#fh5co-about .fh5co-2col{width:50%}@media screen and (max-width:1200px){#fh5co-about .fh5co-2col{width:100%}}#fh5co-about .fh5co-text{padding:2em 6em;text-align:left;background:#130d08 url(images/wood_1.png) repeat}@media screen and (max-width:1200px){#fh5co-about .fh5co-text{padding:1em}}#fh5co-about .fh5co-text .btn{color:#fff}#fh5co-about .fh5co-text .heading{margin-bottom:30px;color:#fff;font-style:italic;font-weight:300;position:relative;padding-bottom:30px;text-align:center;font-size:50px}#fh5co-about .fh5co-text .heading:after{content:"";position:absolute;bottom:0;width:40px;height:2px;left:50%;background:#fb6e14;margin-left:-20px}#fh5co-about .fh5co-text p{line-height:2;color:#a99c92}#fh5co-about .fh5co-text p span.firstcharacter{float:left;color:#903;font-size:75px;line-height:60px;padding-top:4px;padding-right:10px;padding-left:3px;font-style:italic;top:-20px;position:relative;color:#fff;font-family:"Playfair Display",serif}#fh5co-about .fh5co-bg{background-repeat:no-repeat;background-size:cover}@media screen and (max-width:1200px){#fh5co-about .fh5co-bg{width:100%;min-height:500px}}@media screen and (max-width:768px){#fh5co-about .fh5co-bg{width:100%;min-height:300px}}#fh5co-sayings{padding:4em 0}@media screen and (max-width:768px){#fh5co-sayings{padding:5em 0}}#fh5co-sayings h3{text-align:center;margin-bottom:40px;font-family:"Merriweather",serif}#fh5co-sayings .flexslider .slides li{font-size:40px;line-height:1.5}@media screen and (max-width:768px){#fh5co-sayings .flexslider .slides li blockquote{padding:0 20px}}#fh5co-sayings .flexslider .slides li blockquote p{font-size:40px;line-height:1.5}@media screen and (max-width:768px){#fh5co-sayings .flexslider .slides li blockquote p{font-size:20px;line-height:1.5}}#fh5co-sayings .flexslider .slides li blockquote p.quote-author{font-size:20px;color:gray}@media screen and (max-width:768px){#fh5co-sayings .flexslider .slides li blockquote p.quote-author{font-size:18px}}#fh5co-sayings .flexslider .flex-control-paging{position:relative}#fh5co-sayings .flexslider .flex-control-paging.flex-control-nav{bottom:-70px}@media screen and (max-width:768px){#fh5co-sayings .flexslider .flex-control-paging.flex-control-nav{bottom:-60px}}#fh5co-sayings .flexslider .flex-control-paging li a{width:14px;height:14px;background:rgba(0,0,0,.2);box-shadow:none}#fh5co-sayings .flexslider .flex-control-paging li a:active,#fh5co-sayings .flexslider .flex-control-paging li a:focus{outline:none}#fh5co-sayings .flexslider .flex-control-paging li a.flex-active{top:2px;position:relative;background:transparent;box-shadow:none;border:2px solid #fb6e14}#fh5co-featured{padding:7em 0;background:#130d08 url(images/wood_1.png) repeat}@media screen and (max-width:768px){#fh5co-featured{padding:5em 0}}#fh5co-featured .fh5co-heading .heading{position:relative;padding-top:30px!important;color:#fff}#fh5co-featured .fh5co-heading .heading:before,#fh5co-featured .fh5co-heading .heading::before{height:64px;width:64px;position:absolute;content:"";background:url(images/0103-served-plate_64.png) no-repeat;top:0;left:50%;margin-top:-50px;margin-left:-32px}#fh5co-featured .fh5co-heading .sub-heading{color:#a99c92}#fh5co-featured .fh5co-grid{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;flex-wrap:wrap;-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap}#fh5co-featured .fh5co-grid h2{font-size:20px;margin-bottom:0}#fh5co-featured .fh5co-grid p{line-height:1.6;font-size:20px;color:#222}#fh5co-featured .fh5co-grid .pricing{font-size:40px;display:block;padding-top:20px}#fh5co-featured .fh5co-grid .pricing:after{content:"";position:absolute;width:40px;height:2px;left:50%;margin-left:-20px;background:#fb6e14}#fh5co-featured .fh5co-grid .arrow-left:before,#fh5co-featured .fh5co-grid .arrow-left::before{content:"";position:absolute;z-index:999;top:50px;left:0;margin-left:-15px;width:0;height:0;border-top:15px solid transparent;border-bottom:15px solid transparent;border-right:15px solid #f5f5f5}@media screen and (max-width:768px){#fh5co-featured .fh5co-grid .arrow-left:before,#fh5co-featured .fh5co-grid .arrow-left::before{right:auto!important;left:15px!important;top:0!important;margin-top:-15px!important;margin-left:0px!important;border-top:none!important;border-left:15px solid transparent!important;border-right:15px solid transparent!important;border-bottom:15px solid #f5f5f5!important}}#fh5co-featured .fh5co-grid .arrow-right:before,#fh5co-featured .fh5co-grid .arrow-right::before{content:"";position:absolute;z-index:999;top:50px;right:0;margin-right:-15px;width:0;height:0;border-top:15px solid transparent;border-bottom:15px solid transparent;border-left:15px solid #f5f5f5}@media screen and (max-width:992px){#fh5co-featured .fh5co-grid .arrow-right:before,#fh5co-featured .fh5co-grid .arrow-right::before{right:auto!important;left:0!important;margin-left:-15px!important;border-left:none!important;border-right:15px solid #f5f5f5!important}}@media screen and (max-width:768px){#fh5co-featured .fh5co-grid .arrow-right:before,#fh5co-featured .fh5co-grid .arrow-right::before{right:auto!important;left:15px!important;top:0!important;margin-top:-15px!important;margin-left:0px!important;border-top:none!important;border-left:15px solid transparent!important;border-right:15px solid transparent!important;border-bottom:15px solid #f5f5f5!important}}#fh5co-featured .fh5co-grid>.fh5co-v-half{width:50%;text-align:center;position:relative;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;flex-wrap:wrap;-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap}@media screen and (max-width:992px){#fh5co-featured .fh5co-grid>.fh5co-v-half{width:100%}}#fh5co-featured .fh5co-grid>.fh5co-v-half .fh5co-text{background:#f5f5f5}#fh5co-featured .fh5co-grid>.fh5co-v-half .fh5co-special-1{background:#faebcd}#fh5co-featured .fh5co-grid>.fh5co-v-half .fh5co-special-1.arrow-left:before,#fh5co-featured .fh5co-grid>.fh5co-v-half .fh5co-special-1.arrow-left::before{border-right:15px solid #faebcd}@media screen and (max-width:768px){#fh5co-featured .fh5co-grid>.fh5co-v-half .fh5co-special-1.arrow-left:before,#fh5co-featured .fh5co-grid>.fh5co-v-half .fh5co-special-1.arrow-left::before{border-left:15px solid transparent!important;border-right:15px solid transparent!important;border-bottom:15px solid #faebcd!important}}#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-v-col-2{width:50%;padding:20px;position:relative}#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-v-col-2.fh5co-bg-img{background-size:cover;background-repeat:no-repeat;background-position:center center}@media screen and (max-width:768px){#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-v-col-2.fh5co-bg-img{height:200px}}@media screen and (max-width:768px){#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-v-col-2{width:100%}}#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-h-row-2{width:100%;position:relative;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;flex-wrap:wrap;-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap}#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-h-row-2>.fh5co-v-col-2{width:50%;position:relative;padding:20px}@media screen and (max-width:768px){#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-h-row-2>.fh5co-v-col-2{width:100%}}#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-h-row-2>.fh5co-v-col-2.fh5co-bg-img{background-size:cover;background-repeat:no-repeat;background-position:center center}@media screen and (max-width:768px){#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-h-row-2>.fh5co-v-col-2.fh5co-bg-img{height:200px}}#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-h-row-2.fh5co-reversed .fh5co-bg-img{position:absolute;right:0;bottom:0;top:0}@media screen and (max-width:992px){#fh5co-featured .fh5co-grid>.fh5co-v-half>.fh5co-h-row-2.fh5co-reversed .fh5co-bg-img{position:relative;right:inherit;top:inherit;bottom:inherit}}#fh5co-menus{overflow-x:hidden;padding:7em 0}@media screen and (max-width:768px){#fh5co-menus{padding:5em 0}}#fh5co-menus .fh5co-heading .heading{position:relative;padding-top:30px!important}#fh5co-menus .fh5co-heading .heading:before,#fh5co-menus .fh5co-heading .heading::before{height:64px;width:64px;position:absolute;content:"";background:url(images/0401-vegan.png) no-repeat;top:0;left:50%;margin-top:-50px;margin-left:-32px}#fh5co-menus .fh5co-heading .sub-heading{color:#a99c92}#fh5co-menus .fh5co-food-menu{float:left;width:100%;margin-bottom:30px;text-align:center}@media screen and (max-width:768px){#fh5co-menus .fh5co-food-menu{margin-bottom:30px;float:left;width:100%;clear:none!important}}#fh5co-menus .fh5co-food-menu img.logo{width:200px;margin-bottom:40px}#fh5co-menus .fh5co-food-menu ul{padding:0;margin:0}#fh5co-menus .fh5co-food-menu ul li{padding:0 0 20px 0;margin:0 0 20px 0;border-bottom:1px dotted #ccc;display:block;float:left;width:100%}#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc{clear:both;float:left;width:100%}#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc>figure{width:100%;float:left;position:relative;margin-right:4%}#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc>figure img{max-width:100%;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;border-radius:4px;margin-bottom:0}#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc>div{width:100%;float:left;position:relative;font-size:14px;line-height:1.5}#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc>div p{margin:0}#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc>div h3{margin:0 0 10px 0;padding:0;font-size:20px;color:#000;line-height:30px}#fh5co-menus .fh5co-food-menu ul li .fh5co-food-pricing{float:right;width:20%;text-align:right;font-size:20px;color:#fb6e14}#fh5co-events{padding:7em 0;background-color:transparent;background-size:cover;background-attachment:fixed;position:relative}#fh5co-events>.fh5co-overlay{position:absolute;top:0;bottom:0;left:0;right:0;background:rgba(0,0,0,.7);z-index:0}#fh5co-events>.container{z-index:10;position:relative}#fh5co-events .fh5co-heading .heading{position:relative;padding-top:30px!important;color:#fff}#fh5co-events .fh5co-heading .heading:before,#fh5co-events .fh5co-heading .heading::before{height:64px;width:49px;position:absolute;content:"";background:url(images/0402-chef.png) no-repeat;top:0;left:50%;margin-top:-50px;margin-left:-24px}#fh5co-events .fh5co-heading .sub-heading{color:#a99c92}@media screen and (max-width:768px){#fh5co-events{padding:5em 0}}#fh5co-events .fh5co-event{background:#fff;padding:48px;text-align:center;margin-bottom:30px;position:relative;height:650px;padding-bottom:0}#fh5co-events .fh5co-event:before{border:2px solid #e6e6e6;content:"";position:absolute;top:15px;bottom:15px;right:15px;left:15px;z-index:0}#fh5co-events .fh5co-event h3,#fh5co-events .fh5co-event .fh5co-event-meta,#fh5co-events .fh5co-event p,#fh5co-events .fh5co-event .btn{position:relative;z-index:2}#fh5co-events .fh5co-event h3{padding:0;margin:0}#fh5co-events .fh5co-event .fh5co-event-meta{margin-bottom:20px;display:block;color:gray;position:relative;padding-bottom:10px}#fh5co-events .fh5co-event .fh5co-event-meta:after,#fh5co-events .fh5co-event .fh5co-event-meta::after{background:#bfbfbf;background:#fb6e14;content:"";position:absolute;left:50%;bottom:-10px;width:40px;height:2px;margin-left:-20px}#fh5co-events .fh5co-event p{font-size:16px;line-height:1.8;text-align:left}#fh5co-events .fh5co-event p:last-child{margin-bottom:0}#fh5co-events .fh5co-event .btn{margin-bottom:0}#fh5co-contact{padding:7em 0}@media screen and (max-width:768px){#fh5co-contact{padding:5em 0}}#fh5co-contact h3{margin-bottom:30px;font-style:italic}@media screen and (max-width:768px){#fh5co-contact{padding:5em 0}}#fh5co-contact .fh5co-heading .heading{position:relative;padding-top:30px!important}#fh5co-contact .fh5co-heading .heading:before,#fh5co-contact .fh5co-heading .heading::before{height:61px;width:61px;position:absolute;content:"";background:url(images/0203-coffee-love.png) no-repeat;top:0;left:50%;margin-top:-50px;margin-left:-24px}#fh5co-contact .fh5co-heading .sub-heading{color:#a99c92}#fh5co-contact .fh5co-social{padding:0;margin:0}#fh5co-contact .fh5co-social li{padding:0;margin:0}#fh5co-contact .fh5co-contact-info{padding:0;margin:0 0 1.5em 0}#fh5co-contact .fh5co-contact-info li{position:relative;padding:0;margin:0 0 1.5em 0;padding-left:50px;list-style:none}#fh5co-contact .fh5co-contact-info li i{position:absolute;top:.4em;left:0}#fh5co-container{position:relative;z-index:10}#fh5co-footer{width:100%;background:rgba(0,0,0,.9);padding:7em 0;z-index:1;font-size:14px;line-height:1.5;color:rgba(255,255,255,.5)}@media screen and (max-width:768px){#fh5co-footer{padding:5em 0}}@media screen and (max-width:480px){#fh5co-footer{height:inherit;position:relative}}.fh5co-social{padding:0;margin:0}.fh5co-social li{padding:0;margin:0;list-style:none;display:inline}.fh5co-social li a{font-size:30px;padding:10px}.fh5co-social li a i{font-size:30px}.fh5co-social li a:hover,.fh5co-social li a:active,.fh5co-social li a:focus{outline:none;text-decoration:none}#fh5co-offcanvas,#fh5co-container,.fh5co-nav-toggle,#fh5co-footer{-webkit-transition:0.5s;-o-transition:0.5s;transition:0.5s}#fh5co-container,.fh5co-nav-toggle,#fh5co-footer{z-index:999;position:relative}#fh5co-offcanvas{display:block;height:100%;left:0;overflow-y:auto;position:fixed;z-index:9999;top:0;width:275px;background:rgba(0,0,0,.9);padding:.75em 1.25em;-moz-transform:translateX(-275px);-webkit-transform:translateX(-275px);-ms-transform:translateX(-275px);-o-transform:translateX(-275px);transform:translateX(-275px);-webkit-transition:0.9s;-o-transition:0.9s;transition:0.9s}#fh5co-offcanvas a{display:block;color:rgba(255,255,255,.4);text-align:center;padding:7px 0}#fh5co-offcanvas a:hover,#fh5co-offcanvas a:focus,#fh5co-offcanvas a:active{outline:none;text-decoration:none;color:#fb6e14}#fh5co-offcanvas a.active{color:#fb6e14}@media screen and (max-width:768px){#fh5co-offcanvas{display:block}}.offcanvas-visible #fh5co-offcanvas{-moz-transform:translateX(0);-webkit-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0);-webkit-transition:0.5s;-o-transition:0.5s;transition:0.5s}@media screen and (max-width:768px){#fh5co-container,#fh5co-footer,.fh5co-nav-toggle{-moz-transform:translateX(0);-webkit-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0)}
.offcanvas-visible #fh5co-container,.offcanvas-visible .fh5co-nav-toggle{-moz-transform:translateX(275px);-webkit-transform:translateX(275px);-ms-transform:translateX(275px);-o-transform:translateX(275px);transform:translateX(275px)}

}.js-sticky{display:block}@media screen and (max-width:768px){.js-sticky{display:none}}.fh5co-nav-toggle{cursor:pointer;text-decoration:none}.fh5co-nav-toggle.active i::before,.fh5co-nav-toggle.active i::after{background:#fff}.fh5co-nav-toggle:hover,.fh5co-nav-toggle:focus,.fh5co-nav-toggle:active{outline:none;border-bottom:none!important}.fh5co-nav-toggle i{position:relative;display:-moz-inline-stack;display:inline-block;zoom:1;*display:inline;width:30px;height:2px;color:#fff;font:bold 14px/.4 Helvetica;text-transform:uppercase;text-indent:-55px;background:#fff;transition:all .2s ease-out}.fh5co-nav-toggle i::before,.fh5co-nav-toggle i::after{content:'';width:30px;height:2px;background:#fff;position:absolute;left:0;-webkit-transition:0.2s;-o-transition:0.2s;transition:0.2s}.fh5co-nav-toggle i::before{top:-7px}.fh5co-nav-toggle i::after{bottom:-7px}.fh5co-nav-toggle:hover i::before{top:-10px}.fh5co-nav-toggle:hover i::after{bottom:-10px}.fh5co-nav-toggle.active i{background:transparent}.fh5co-nav-toggle.active i::before{top:0;-webkit-transform:rotateZ(45deg);-moz-transform:rotateZ(45deg);-ms-transform:rotateZ(45deg);-o-transform:rotateZ(45deg);transform:rotateZ(45deg)}.fh5co-nav-toggle.active i::after{bottom:0;-webkit-transform:rotateZ(-45deg);-moz-transform:rotateZ(-45deg);-ms-transform:rotateZ(-45deg);-o-transform:rotateZ(-45deg);transform:rotateZ(-45deg)}.fh5co-nav-toggle{position:fixed;top:20px;left:20px;z-index:9999;display:block;margin:0 auto;display:none;border-bottom:none!important;background:rgba(0,0,0,.7);padding:0 10px 10px 10px;cursor:pointer;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;border-radius:4px}@media screen and (max-width:768px){.fh5co-nav-toggle{display:block;z-index:9999}}#fh5co-type{padding:7em 0;background-color:transparent;background-size:cover;background-attachment:fixed;position:relative}#fh5co-type>.fh5co-overlay{position:absolute;top:0;bottom:0;left:0;right:0;background:rgba(0,0,0,.7);z-index:9}#fh5co-type>.container{z-index:10;position:relative}#fh5co-type>.container .heading{color:white}#fh5co-type .fh5co-type{float:left;width:100%;text-align:center}@media screen and (max-width:768px){#fh5co-type .fh5co-type{margin-bottom:30px}}#fh5co-type h3{margin-bottom:30px;font-style:italic;color:#fff;font-size:40px;text-align:center;padding-top:110px}#fh5co-type h3.with-icon{position:relative}#fh5co-type h3.with-icon:before,#fh5co-type h3.with-icon::before{content:"";position:absolute;left:50%;margin-left:-54px;margin-top:-125px;width:104px;height:104px;border:2px solid rgba(255,255,255,.2);-webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;border-radius:50%}#fh5co-type h3.with-icon.icon-1:before,#fh5co-type h3.with-icon.icon-1::before{background:url(images/pizza-2-64.png) no-repeat center center}#fh5co-type h3.with-icon.icon-2:before,#fh5co-type h3.with-icon.icon-2::before{background:url(images/chess-18-64.png) no-repeat center center}#fh5co-type h3.with-icon.icon-3:before,#fh5co-type h3.with-icon.icon-3::before{background:url(images/seo-performance-64.png) no-repeat center center}#fh5co-type h3.with-icon.icon-4:before,#fh5co-type h3.with-icon.icon-4::before{background:url(images/page-quality.png) no-repeat center center}#fh5co-type h3.with-icon.icon-5:before,#fh5co-type h3.with-icon.icon-5::before{background:url(images/add-list-64.png) no-repeat center center}#fh5co-type h3.with-icon.icon-6:before,#fh5co-type h3.with-icon.icon-6::before{background:url(images/chili-pepper-18-64.png) no-repeat center center}#fh5co-type h3.with-icon.icon-7:before,#fh5co-type h3.with-icon.icon-7::before{background:url(images/shoes-footprints-64.png) no-repeat center center}#fh5co-type h3.with-icon.icon-8:before,#fh5co-type h3.with-icon.icon-8::before{background:url(images/cook-64.png) no-repeat center center}#fh5co-type p{color:rgba(255,255,255,.7)}.js .to-animate,.js .to-animate-2{opacity:0}.row-padded{padding-bottom:40px}#trailer{position:relative;top:0;right:0;bottom:0;left:0;overflow:hidden;display:block;width:100%;height:100vh}#trailer video{position:absolute;top:50%;left:50%;min-width:100%;filter:grayscale(.4);transform:translate(-50%,-50%)}#s-calculator{text-align:center;background-color:white;height:100%;font-family:"Playfair Display",serif}#s-calculator .c-head h2{margin-top:100px;font-size:50px;position:relative;margin-bottom:30px}#s-calculator .c-head h2::after{content:"";position:absolute;bottom:-15px;width:40px;height:2px;left:50%;background:#fb6e14;margin-left:-20px}#s-calculator .c-head h5{font-size:20px;color:#a99c92}#s-calculator #calculator{margin:5% 0}#s-calculator #calculator span{display:block}#s-calculator #calculator #c-title{font-size:40px}#s-calculator #calculator #c-container{display:flex;justify-content:center;align-items:center;padding:20px}#s-calculator #calculator #c-container .c-item{position:relative;margin:0 20px;transition:all 0.6s cubic-bezier(.2,.57,.36,.8)}#s-calculator #calculator #c-container .c-item:hover{cursor:pointer}#s-calculator #calculator #c-container .c-item img{border-radius:50%;border:2px solid transparent;width:150px;height:150px}#s-calculator #calculator #c-container .c-item img:hover{border:2px solid white}#s-calculator #calculator #c-container .c-item span{display:block;margin-top:20px}#s-calculator #bill{display:flex;align-items:center;justify-content:space-around;position:relative;width:50%;height:300px;margin:10% 25% 0;background-color:#7d7d7d}#s-calculator #bill::before{content:'';position:absolute;left:-7px;top:0;height:100%;width:7px;background:#7d7d7d url(http://franch.freshline.name/images/check-l.png) repeat-y}#s-calculator #bill div{display:flex;flex-direction:column}#s-calculator #bill h3{color:white}#s-calculator #bill img{transform:rotate(270deg);width:170px;height:auto}#s-calculator #bill button{position:absolute;left:50%;transform:translate(-50%);bottom:-27px;background:#fb6e14;border-color:#fb6e14;color:white}#fh5co-help{margin-top:200px;padding:7em 0;background:#130d08 url(images/wood_1.png) repeat}@media screen and (max-width:768px){#fh5co-help{padding:5em 0}}#fh5co-help .heading{position:relative;padding-top:30px!important;color:#fff;font-size:50px;font-style:italic;padding-bottom:30px;margin-bottom:30px;text-align:center}#fh5co-help .heading:before,#fh5co-help .heading::before{height:64px;width:64px;position:absolute;content:"";background:url(images/light-bulb-2-64.png) no-repeat;top:0;left:50%;margin-top:-50px;margin-left:-32px}#fh5co-help .sub-heading{text-align:center;color:#a99c92}#fh5co-help .map-wrap{padding:0 10%;display:flex;justify-content:center}#fh5co-help .map-wrap #map{height:100%}#fh5co-help .map-wrap img{height:100%;max-height:500px;width:100%;object-fit:contain}#team{padding:80px 0}#team h2{font-size:50px;font-style:italic;position:relative;padding-bottom:30px;margin-bottom:30px;text-align:center}#team .member-wrap{display:flex;flex-direction:column;align-items:center}#team .member-wrap img{width:100%;max-width:300px}#team .member-wrap .title{margin:20px 0;font-size:20px;text-align:center;font-weight:700;position:relative}#team .member-wrap .title::after{content:'';display:block;width:40px;height:2px;background-color:#fb6e14;position:absolute;bottom:-10px;left:50%;transform:translateX(-50%)}#team .member-wrap .description{font-size:18px;text-align:center}#s-way{display:flex;flex-direction:column;justify-content:center;align-items:center;background:#130d08 url(images/wood_1.png) repeat;padding:5% 0 10%}#s-way *{color:white}#s-way .way-wrap{display:flex;flex-direction:column;justify-content:center;align-items:center}#s-way .way-wrap .stop{text-align:center;text-transform:uppercase;position:relative;font-size:30px;margin-top:100px}#s-way .way-wrap .stop::before{content:'';width:60px;height:60px;background-color:white;border-radius:50%;position:absolute;top:-80px;left:50%;transform:translateX(-50%);z-index:1}#s-way .way-wrap .stop::after{content:'';width:2px;height:100px;background-color:white;position:absolute;top:-100px;left:50%;transform:translateX(-50%);z-index:0}#s-way .way-wrap .stop:first-child::after{height:50px;top:-50px}#s-way .way-wrap .stop:last-child{margin-top:230px}#s-way .way-wrap .stop:last-child::before{content:url(images/pizdotina.png);width:auto;height:auto;background-color:transparent;top:-215px}#s-way .way-wrap .stop:last-child::after{display:none}.pulse{width:22px;height:22px;border-radius:50%;cursor:pointer;box-shadow:0 0 0 rgba(204,169,44,.4);animation:pulse 2s infinite}.pulse:hover{animation:none}@-webkit-keyframes pulse{0%{-webkit-box-shadow:0 0 0 0 rgba(204,169,44,.4)}70%{-webkit-box-shadow:0 0 0 20px rgba(204,169,44,0)}100%{-webkit-box-shadow:0 0 0 0 rgba(204,169,44,0)}}@keyframes pulse{0%{-moz-box-shadow:0 0 0 0 rgba(204,169,44,.4);box-shadow:0 0 0 0 rgba(204,169,44,.4)}70%{-moz-box-shadow:0 0 0 20px rgba(204,169,44,0);box-shadow:0 0 0 20px rgba(204,169,44,0)}100%{-moz-box-shadow:0 0 0 0 rgba(204,169,44,0);box-shadow:0 0 0 0 rgba(204,169,44,0)}}#scrollToTop{width:64px;height:64px;border-radius:50%;position:fixed;bottom:20px;right:20px;z-index:9999;display:none;border:none}#scrollToTop:hover{cursor:pointer;filter:brightness(50%) invert(1)}#scrollToTop img{width:100%;padding:10%}#m-contact{top:50%;transform:translateY(-50%)}#m-contact .modal-content{z-index:9999;padding:5% 10%}#m-contact .modal-content h3{text-align:center}#m-contact .modal-content .center{display:flex;justify-content:center}.calc_wrap{display:-webkit-flex;display:-moz-flex;display:-ms-flex;display:-o-flex;display:flex;-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap;-ms-flex-wrap:wrap;-o-flex-wrap:wrap;flex-wrap:wrap;justify-content:space-around;-ms-align-items:center;align-items:center;height:100%;padding:0 10%;width:100%}.calc_wrap-check{position:relative;display:-webkit-flex;display:-moz-flex;display:-ms-flex;display:-o-flex;display:flex;-webkit-flex-direction:column;-moz-flex-direction:column;-ms-flex-direction:column;-o-flex-direction:column;flex-direction:column;align-items:center;width:255px;height:100%;transition:filter .3s}.calc_warap-check-image{background-size:cover;background-position:center;width:100%;height:400px;display:flex;flex-direction:column;align-items:center;justify-content:center;position:relative}.calc_wrap-check .title{display:block;font-size:24px;top:0;width:100%;text-align:center}.check-label{display:-webkit-flex;display:-moz-flex;display:-ms-flex;display:-o-flex;display:flex;-ms-align-items:center;align-items:center;justify-content:center;padding:0 5px;position:relative;background-color:buttonface;margin:20px;height:60px;width:115px;border-radius:25%;border:none;font-weight:700;transition:.3s;cursor:pointer}.check-label:after{content:' м²'}.check-input{position:absolute;visibility:hidden}.info{position:absolute;left:0;bottom:0;height:172px;width:100%;background-color:#fafafa;border:2px solid #5e493a;z-index:-2;transition:bottom .3s linear;display:flex;flex-direction:column;justify-content:center;align-items:center;visibility:hidden}.info-text{font-size:20px;width:100%;text-align:center;margin:0}.calc_warap-check-image input:checked + .check-label{background-color:#5e493a;color:ghostwhite}#slice-one:checked~.info.slice-one_block,#slice-two:checked~.info.slice-two_block,#standart-one:checked~.info.standart-one_block,#standart-two:checked~.info.standart-two_block,#standart-three:checked~.info.standart-three_block,#ristorante-one:checked~.info.ristorante-one_block,#ristorante-two:checked~.info.ristorante-two_block,#ristorante-three:checked~.info.ristorante-three_block{bottom:-43%!important;visibility:visible}@media screen and (max-width:768px){.calc_wrap-check{height:620px;z-index:2}}.member-wrap .face{height:394px}.glyphicon-phone{position:absolute;top:-110%;right:40%;color:black!important;z-index:99}.glyphicon-fullscreen{position:absolute;top:-107%;right:44%;color:black!important;z-index:99}.glyphicon-list-alt{position:absolute;top:-107%;right:46%;color:black!important;z-index:99}.presentation-btn{text-align: center;margin-top: 20px;}.presentation-btn a{padding: 20px;border: 2px solid #fb6e14;display: inline-flex;text-transform: uppercase;letter-spacing: 2px;}}

    </style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3JHTWQ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

    <div id="fh5co-home" class="js-fullheight" data-section="home">

        <div class="flexslider">

            <div class="fh5co-overlay video-container">
                <div id="trailer">
                    <video id="video" autoplay="autoplay" preload="auto" loop muted>
                        <source src="video/v2.mp4"/>
                    </video>
                </div>
            </div>
            <div class="fh5co-text">
                <div class="container">
                    <div class="row">
                        <h1 class="to-animate">pizza celentano</h1>
                        <!--<h2 class="to-animate">Lovely Designed <span>by</span> <a href="http://freehtml5.co/"-->
                        <!--target="_blank">freehtml5.co</a></h2>-->
                        <h2 class="to-animate">це партнерство, взаємоповага та довіра!</h2>
                    </div>
                </div>
            </div>
            <ul class="slides">
                <li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
            </ul>

        </div>

    </div>

    <div class="js-sticky">
        <div class="fh5co-main-nav">
            <div class="container-fluid">
                

                <div class="fh5co-menu-1">
                    <a href="#" data-nav-section="home">Головна</a>
                    <a href="#" data-nav-section="about">Про нас</a>
                    <a href="#" data-nav-section="features">Переваги</a>
                </div>
                <div class="fh5co-logo">
                    <a href="index.html"><img src="images/logo-only-min.png" alt=""></a>
                </div>
                <div class="fh5co-menu-2">
                    <a href="#" data-nav-section="menu">Must Have</a>
                    <a href="#" data-nav-section="events">Чому ми?</a>
                    <a href="#" data-nav-section="reservation">Контакти</a>
                    <a href="tel://+390677893132" id="">+38 067 789 31 32</a>
                </div>
            </div>

        </div>
    </div>

    <div id="fh5co-about" data-section="about">
        <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/7.jpg)"></div>
        <div class="fh5co-2col fh5co-text">
            <h2 class="heading to-animate">Про нас</h2>
            <p class="to-animate">
                <!--<span class="firstcharacter">P</span>-->
                Компанія «Fast Food Systems» є найдосвідченішим представником франчайзингового ресторанного бізнесу в
                Україні. З 1998 року FFS є і найбільшим оператором країни в цій сфері. Зараз в мережі діє понад 220
                ресторанів ТМ «Pizza Celentano», «Картопляна Хата» та «ЯПІ» по всій Україні.
            </p>
            <p class="text-center to-animate"><a href="#fh5co-contact" class="btn btn-primary btn-outline">Зв'язатись з
                нами</a></p>
        </div>
    </div>

    <div id="fh5co-sayings">
        <div class="container">
            <div class="row to-animate">
                <h3>Цікаві факти</h3>

                <div id="slider" class="flexslider">

                    <ul class="slides">

                        <li>
                            <blockquote>
                                <p>Перший ресторан «Pizza Celentano» був відкритий у Львові у 1998 році. Це була перша
                                    піцерія в Україні.</p>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <p>Сьогодні під брендом «Pizza Celentano» успішно працюють понад 150 ресторанів</p>
                            </blockquote>
                        </li>

                        <li>
                            <blockquote>
                                <p>Pizza Celentano – це найбільша франчайзингова мережа ресторанів в Україні, об’єднаних
                                    спільною концепцією і ціновою політикою</p>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <p>Кожен ресторан відповідає усім фірмовим стандартам, але, в цей же час, відрізняється
                                    індивідуальною атмосферою та інтер`єром.</p>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <p>Понад 1,7 млн зареєстрованих учасників системи лояльності EgoЇсти</p>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <p>Від початку існування мережі продано понад 100 млн піц. </p>
                            </blockquote>
                        </li>


                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div id="fh5co-featured" data-section="features">
        <div class="container">
            <div class="row text-center fh5co-heading row-padded">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="heading to-animate">Хочете відкрити успішний ресторан?</h2>
                    <p class="sub-heading to-animate">Fast Food Systems знає як!</p>
                </div>
            </div>
            <div class="row">
                <div class="fh5co-grid">
                    <div class="fh5co-v-half to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img"
                             style="background-image: url(images/img_9620_1024.jpg)"></div>
                        <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                            <!--<h2>Fresh Mushrooms</h2>-->
                            <!--<span class="pricing">$7.50</span>-->
                            <p>Pizza Celentano є найпершоюі найбільшоюмережею піцерійв Україні. Ми пропонуємо вдалу і
                                випробувану концепцію та налагоджені бізнес-процеси, перевірені
                                роками.</p>
                        </div>
                    </div>
                    <div class="fh5co-v-half">
                        <div class="fh5co-h-row-2 to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img"
                                 style="background-image: url(images/dsc_3148________________1024.jpg)"></div>
                            <div class="fh5co-v-col-2 fh5co-text arrow-left">

                                <p>Ви можете обирати різні формати закладів: від фудкорту до окремого ресторану.</p>
                            </div>
                        </div>
                        <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img"
                                 style="background-image: url(images/0210_1024.jpg)"></div>
                            <div class="fh5co-v-col-2 fh5co-text arrow-right">

                                <p>У Вас буде можливість побудови власної мережі в рамках франчайзингу.</p>
                            </div>
                        </div>
                    </div>

                    <div class="fh5co-v-half">
                        <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img"
                                 style="background-image: url(images/0014_1024.jpg)"></div>
                            <div class="fh5co-v-col-2 fh5co-text arrow-right">
                                <p>Доступ до найбільшої бази постачальників.<br>
                                    Навчання, постійне покращення кваліфікації персоналу.
                                </p>

                            </div>
                        </div>
                        <div class="fh5co-h-row-2 to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img"
                                 style="background-image: url(images/269.jpg)"></div>
                            <div class="fh5co-v-col-2 fh5co-text arrow-left">

                                <p>Ми допомагаємо на кожному етапі запуску ресторану, забезпечуємо постійною
                                    маркетинговою підтримкою, навчаємо і консультуємо на усіх етапах розвитку вашого
                                    бізнесу.</p>
                            </div>
                        </div>
                    </div>
                    <div class="fh5co-v-half to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img"
                             style="background-image: url(images/dsc_4224_1024.jpg)"></div>
                        <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">

                            <p>З нами Ваш ресторан відразу стає учасником програми лояльності EgoЇсти, в якій вже зараз
                                більше 1,5 млн. Компанія допомагає з навчанням вашого персоналу на самому старті закладу
                                та продовжує надалі підвищення кваліфікації спеціалістів.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div id="fh5co-type" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="fh5co-overlay"></div>
        <div class="container">
            <div class="row text-center fh5co-heading row-padded">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="heading to-animate">Наші переваги</h2>
                    <!--<p class="sub-heading to-animate">Fast Food Systems знає як!</p>-->
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 to-animate">
                    <div class="fh5co-type">
                        <h3 class="with-icon icon-3"></h3>
                        <p>
                            Найперша та найбільша франчайзингова мережа ресторанів в Україні.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 to-animate">
                    <div class="fh5co-type">
                        <h3 class="with-icon icon-8"></h3>
                        <p>Найкращі піца-майстри працюють саме у нас (в мережі діє корпоративна школа).</p>
                    </div>
                </div>
                <div class="col-md-3 to-animate">
                    <div class="fh5co-type">
                        <h3 class="with-icon icon-6"></h3>
                        <p>
                            Три формати ресторану на Ваш вибір.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 to-animate">
                    <div class="fh5co-type">
                        <h3 class="with-icon icon-5"></h3>
                        <p>Постійна підтримка в побудові бізнесу</p>
                    </div>
                </div>
            </div>

            <!--<div class="row">-->
            <!--<div class="col-md-3 to-animate">-->
            <!--<div class="fh5co-type">-->
            <!--<h3 class="with-icon icon-5"></h3>-->
            <!--<p>-->
            <!--Покрокова інструкція відкриття закладу-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-3 to-animate">-->
            <!--<div class="fh5co-type">-->
            <!--<h3 class="with-icon icon-6"></h3>-->
            <!--<p>Італійська кухня та вино</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-3 to-animate">-->
            <!--<div class="fh5co-type">-->
            <!--<h3 class="with-icon icon-7"></h3>-->
            <!--<p>-->
            <!--Формат ресторану TO GO-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-3 to-animate">-->
            <!--<div class="fh5co-type">-->
            <!--<h3 class="with-icon icon-8"></h3>-->
            <!--<p>Усю піцу готує Pizza Master</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
        </div>
    </div>

    <div id="fh5co-menus" data-section="menu">
        <div class="container">
            <div class="row text-center fh5co-heading row-padded">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="heading to-animate">"Must have"</h2>
                    <p class="sub-heading to-animate">Вимоги для відкриття ресторанів</p>
                </div>
            </div>
            <div class="row row-padded">
                <div class="col-md-6">
                    <div class="fh5co-food-menu to-animate-2">
                        <!--<h2 class="fh5co-drinks">Для приміщення</h2>-->
                        <img class="logo" src="images/logo-rist.png" alt="">
                        <ul>
                            <li>
                                <div class="fh5co-food-desc">

                                    <div>
                                        <h3>Окремий ресторан /<br> Ресторан в готелі /<br> Приміщення ТРЦ</h3>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="fh5co-food-desc">

                                    <div>
                                        <h3>Площа від 180 м²</h3>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="fh5co-food-desc">

                                    <div>
                                        <h3>380 В / 70 кВт</h3>

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-food-menu to-animate-2">
                        <img class="logo" src="images/logo-slice.png" alt="">
                        <ul>
                            <li>
                                <div class="fh5co-food-desc">

                                    <div>
                                        <h3>Окремий ресторан /<br>Приміщення ТРЦ /<br> food court</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="fh5co-food-desc">

                                    <div>
                                        <h3>Площа від 45 м²</h3>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="fh5co-food-desc">

                                    <div>
                                        <h3>380 В / 25 кВт</h3>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center to-animate-2" style="overflow-x: hidden">
                <p><a href="#fh5co-contact" class="btn btn-primary btn-outline">Зв'язатись з нами</a></p>
            </div>
        </div>
    </div>

<div id="fh5co-events" data-section="events" style="background-image: url(images/0215_1024.jpg);"
     data-stellar-background-ratio="0.5">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2 to-animate">
                <h2 class="heading">Чому ми?</h2>
                <!--<p class="sub-heading">Зараз Ви дізнаєтесь</p>-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="fh5co-event to-animate-2">
                    <h3>Наші фішки</h3>
                    <span class="fh5co-event-meta">
                        <!--"Піца та вино в твоєму місті!"-->
                    </span>
                    <ul>
                        <li>
                            <p>Піцейола, який працює без розкатки, вручну створює тісто, наповнене киснем.</p>
                        </li>
                        <li>
                            <p>Соус власного виробництва – ми не використовуємо консервантів.</p>
                        </li>
                        <li>
                            <p>Борошно – італійське. Ми довго експериментували, знайшли найкраще.</p>
                        </li>
                        <li>
                            <p>Справжнє італійське вино.</p>
                        </li>
                        <li>
                            <p>Багаторівнева система контролю якості продукції.</p>
                        </li>
                    </ul>
                    <!--<p><a href="#" class="btn btn-primary btn-outline">Read More</a></p>-->
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-event to-animate-2">
                    <h3>Підтримка франчайзі</h3>
                    <span class="fh5co-event-meta"></span>
                    <ul>
                        <li>
                            <p>Онлайн підтримка 24/7.</p>
                        </li>
                        <li>
                            <p>Консультації з операційної роботи, локального та загальнонаціонального маркетингу.</p>
                        </li>
                        <li>
                            <p>Системні контракти з найкращими постачальниками України.</p>
                        </li>
                        <li>
                            <p>Ліцензований аудіо та відео контент.</p>
                        </li>
                        <li>
                            <p>Єдина "гаряча лінія".</p>
                        </li>
                    </ul>
                    <!--<p><a href="#" class="btn btn-primary btn-outline">Read More</a></p>-->
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-event to-animate-2">
                    <h3>Точка контролю зі сторони франчайзера</h3>
                    <span class="fh5co-event-meta"></span>
                    <ul>
                        <li>
                            <p> - STARTEAM – загальнонаціональна мотиваційна програма для працівників ресторанів нашої
                                мережі, яка побудована на основі змагань між ресторанами за право стати кращими.</p>
                        </li>
                        <li>
                            <p>"Таємний покупець" &mdash; оцінювання роботи закладу.</p>
                        </li>
                    </ul>
                    <!--<p><a href="#" class="btn btn-primary btn-outline">Read More</a></p>-->
                </div>
            </div>
        </div>
    </div>
</div>

<section id="s-calculator">
    <div class="c-head">
        <h2>Калькулятор інвестицій</h2>
        <h5>оберіть вашу площу в бажаному форматі закладу</h5>
    </div>

    <div class="calc_wrap">
        <div class="calc_wrap-check">
            <div class="title">Slice</div>
            <div class="calc_warap-check-image" style="background-image: url(./images/ahv_2149.jpg);">
                <input class="check-input" name="calc" id="slice-one" type="radio"> 
                <label class="check-label" for="slice-one">45+60 +</label>
                <div class="info slice-one_block">
                    <p class="info-text">Інвестиції: 35-40 $</p>
                    <p class="info-text">Посадкових місць: 22-30</p>
                </div>
                <input class="check-input" name="calc" id="slice-two" type="radio"> 
                <label class="check-label" for="slice-two">60-80 +</label>
                <div class="info slice-two_block">
                    <p class="info-text">Інвестиції: 45-60 $</p>
                    <p class="info-text">Посадкових місць: 30-40</p>
                </div>
            </div>
        </div>
        <div class="calc_wrap-check">
            <div class="title">Standart</div>
            <div class="calc_warap-check-image" style="background-image: url(./images/calc-bg.jpg); ">
                <input class="check-input" name="calc" id="standart-one" type="radio">
                <label class="check-label" for="standart-one">80-120 +</label>
                <div class="info standart-one_block">
                    <p class="info-text">Інвестиції: 70-80 $</p>
                    <p class="info-text">Посадкових місць: 36-45</p>
                </div>
                <input class="check-input" name="calc" id="standart-two" type="radio">
                <label class="check-label" for="standart-two">120-150 +</label> 
                <div class="info standart-two_block">
                    <p class="info-text">Інвестиції: 80-100 $</p>
                    <p class="info-text">Посадкових місць: 45-56</p>
                </div>
                <input class="check-input" name="calc" id="standart-three" type="radio">
                <label class="check-label" for="standart-three">150-180 +</label> 
                <div class="info standart-three_block">
                    <p class="info-text">Інвестиції: 100-120 $</p>
                    <p class="info-text">Посадкових місць: 56-68</p>
                </div>
            </div>
        </div>
        <div class="calc_wrap-check">
            <div class="title">Ristorante</div>
            <div class="calc_warap-check-image" style="background-image: url(./images/calc-bg.jpg);">
                <input class="check-input" name="calc" id="ristorante-one" type="radio"> 
                <label class="check-label" for="ristorante-one">180-220 +</label>
                <div class="info ristorante-one_block">
                    <p class="info-text">Інвестиції: 120-150 $</p>
                    <p class="info-text">Посадкових місць: 68-80</p>
                </div>
                <input class="check-input" name="calc" id="ristorante-two" type="radio"> 
                <label class="check-label" for="ristorante-two">220-270 +</label>
                <div class="info ristorante-two_block">
                    <p class="info-text">Інвестиції: 155-180 $</p>
                    <p class="info-text">Посадкових місць: 80-102</p>
                </div>
                <input class="check-input" name="calc" id="ristorante-three" type="radio"> 
                <label class="check-label" for="ristorante-three">270 +</label>
                <div class="info ristorante-three_block">
                    <p class="info-text">Інвестиції: 200+ $</p>
                    <p class="info-text">Посадкових місць: 102+</p>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="scroll-helper"></div>-->

</section>

<div id="fh5co-help">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading">Ми на карті</h2>
                <!--<p class="sub-heading">Наша підтримка і для франчайзі</p>-->
                <div class="map-wrap">
                    <!--<div id="map"></div>-->
                    <img src="images/map1.png" alt="">
                </div>
            </div>
        </div>

    </div>
</div>

<section id="team">
    <h2 class="heading">Наша команда</h2>

    <div class="container">
        <div class="row">

            <div class="col-md-3 member-wrap">
                <img class="face" data-face="a" src="images/face1.jpg" alt="">

                <span class="title">Дмитро Тетеря</span>
                <span class="description">національний менеджер з фрачайзингу</span>
            </div>

            <div class="col-md-3 member-wrap">
                <img class="face" data-face="a" src="images/face2.jpg" alt="">

                <span class="title">Дмитро Новаков</span>
                <span class="description">бренд-шеф FFS</span>
            </div>

            <div class="col-md-3 member-wrap">
                <img class="face" data-face="a" src="images/face3.jpg" alt="">

                <span class="title">Роксолана Токарська</span>
                <span class="description">керівник з продажу франшизи</span>
            </div>

            <div class="col-md-3 member-wrap">
                <img class="face" data-face="a" src="images/face4.jpg" alt="">

                <span class="title">Володимир Гнатюк</span>
                <span class="description">генеральний директор компанії FFS</span>
            </div>

        </div>
    </div>
</section>


<section id="s-way">
    <div class="text-center fh5co-heading row-padded">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="heading">Як почати свій бізнес вже зараз?</h2>
            <!--<p class="sub-heading">Зараз Ви дізнаєтесь</p>-->
        </div>
    </div>

    <div class="way-wrap">
        <div class="stop"><i class="glyphicon glyphicon-phone"></i>дзвінок</div>
        <div class="stop"><i class="glyphicon glyphicon-fullscreen"></i>вибір формату</div>
        <div class="stop"><i class="glyphicon glyphicon-list-alt"></i>укладання договору</div>
        <div class="stop">відкриття успішого ресторану</div>
    </div>
</section>


<div class="fh5co-events" data-section="events" style="background-image: url(images/slide_2.jpg);"
     data-stellar-background-ratio="0.5"></div>

<div id="fh5co-contact" data-section="reservation">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">Твори свій бізнес вже сьогодні</h2>
                <p class="sub-heading to-animate">Для отримання бізнес плану заповніть форму</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 to-animate-2">
                <h3>Конактна інформація</h3>
                <ul class="fh5co-contact-info">
                    <li class="fh5co-contact-address ">
                        <i class="icon-home"></i>
                        Адреса: вул. Антоновича, 132, м. Львів, 79057
                    </li>
                    <li><i class="icon-phone"></i>Тел.: +38 (032) 237 07 07, +38 067 789 31 32</li>
                    <li><i class="icon-envelope"></i>
                        <a target="_blank" href="mailto:r.tokarska@ffs-company.com">r.tokarska@ffs-company.com</a>
                    </li>
                    <!--<li><i class="icon-globe"></i> <a href="#" target="_blank">вебсайт</a></li>-->
                </ul>
            </div>
            <form class="col-md-6 to-animate-2">
                <h3>Форма</h3>
                <div class="form-group ">
                    <label for="name" class="sr-only">Name</label>
                    <input required id="name" name="name" class="form-control" placeholder="Name" type="text">
                </div>
                <div class="form-group ">
                    <label for="email" class="sr-only">Email</label>
                    <input required id="email" name="email" class="form-control" placeholder="Email" type="email">
                </div>


                <div class="form-group ">
                    <label for="message" class="sr-only">Message</label>
                    <textarea name="msg" id="message" cols="30" rows="5" class="form-control"
                              placeholder="Message"></textarea>
                </div>
                <div class="form-group ">
                    <input required class="btn btn-primary btn-submit" value="Зв'язатись з нами" type="submit">
                </div>
            </form>
        </div>
    </div>
</div>


<div id="fh5co-footer">
    <div class="container">
        <div class="row row-padded">
            <div class="col-md-12 text-center">
                <!--<p class="to-animate">&copy; 2017 Франчайзинг Pizza CELENTANO <br> Designed by Anna Vasylyshyn-->
                <!--</p>-->
                <p class="text-center to-animate"><a href="#" class="js-gotop">Початок</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="fh5co-social">
                    <li class="to-animate-2"><a href="https://www.facebook.com/pizzacelentano/"><i class="icon-facebook"></i></a></li>
                    <li class="to-animate-2"><a href="https://www.youtube.com/user/egoistycom"><i class="icon-youtube"></i></a></li>
                    <li class="to-animate-2"><a href="https://www.instagram.com/pizzacelentano/"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>
        </div media="none" onload="if(media!='all')media='all'">
        <div class="presentation-btn">
            <a href="Presentation-FFS.pdf" download>Отримайте презентацію</a>
        </div>
    </div>
</div>

<!--Modal-->
<button id="scrollToTop" class="pulse" data-toggle="modal" data-target=".bs-example-modal-lg">
    <img src="images/mail.png" alt="">
</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div id="m-contact" class="modal-dialog modal-lg">
        <form id="form" class="modal-content">
            <h3>Для отримання бізнес плану заповніть форму</h3>

            <div class="form-group ">
                <label for="name1" class="sr-only">Name</label>
                <input required id="name1" name="name" class="form-control" placeholder="Name" type="text">
            </div>
            <div class="form-group ">
                <label for="email1" class="sr-only">Email</label>
                <input required id="email1" name="email" class="form-control" placeholder="Email" type="email">
            </div>
            <div class="form-group ">
                <label for="message1" class="sr-only">Message</label>
                <textarea name="msg" id="message1" cols="30" rows="5" class="form-control"
                          placeholder="Message"></textarea>
            </div>
            <div class="form-group center">
                <input required class="btn btn-primary btn-submit" value="Зв'язатись з нами" type="submit">
            </div>
        </form>
    </div>
</div>


<script src="js/modernizr-2.6.2.min.js"></script>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Bootstrap DateTimePicker -->
<script src="js/moment.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>

<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<script>
    $(function () {
        $('#date').datetimepicker();

        startCalculator();
    });
</script>
<!-- Main JS -->
<script src="js/main.js"></script>

<script src="js/calculator.js"></script>

<script>
    new Waypoint({
        element: document.getElementById('fh5co-about'),
        handler: function (direction) {
            var scroll = document.getElementById('scrollToTop');

            if (direction === 'down') {
                scroll.style.display = 'block'
            } else {
                scroll.style.display = 'none'
            }
        }
    });
</script>

</body>
</html>