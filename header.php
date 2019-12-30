<!doctype html>
<html <?php language_attributes(); ?>>
<title><?php wp_title() ?></title>
<meta charset="utf-8">
<link rel="icon" href="image/amp_favicon.png">
<link rel="canonical" href="article.amp.html">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600,600i,700&display=swap" rel="stylesheet"> 

<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
<script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>

<style amp-custom>
<?php

$bufferCss = file_get_contents(get_template_directory_uri() . '/style.css');
$bufferCss = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $bufferCss);
$bufferCss = str_replace(': ', ':', $bufferCss);
$bufferCss = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $bufferCss);
echo $bufferCss;

?>
</style>

<?php wp_head() ?>

</head>
<body>
<!-- Header start -->
<header class="header">
    <div class="hdrIn">
        <a id="logo" href="#">
            <amp-img width="294" height="89" layout="responsive" src="<?php the_field('header_logo', 'option'); ?>" alt="Amazing"></amp-img>
            <em class="discernible_name">empty</em>
        </a>
        <button id="menuBtn" on="tap:menu.toggleClass(class='toggleMenu')" title="Title">
            <span class="menuBtnIn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </span>
            <em class="discernible_name">empty</em>
        </button>
        
        <?php wp_nav_menu( array(
            'theme_location'  => 'menu-1',
            'container'       => 'nav',
            'container_class' => 'menu-{menu-slug}-container navigation',
            'menu_class'      => 'menu',
            'menu_id'         => 'menu',
        ) ); ?>
    </div>
</header>
<!-- Header area end -->