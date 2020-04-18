<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN" class=" woofc-no-touchevents woofc-supports woofc-csstransitions woofc-csstransforms3d" style=""><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://www.oneue.com/xmlrpc.php">
<title>ONEUE – 一个简单的购物网站</title>
<link rel="stylesheet" id="woofcicons-css" href="/Public/newskin/css/woofcicons.css" type="text/css" media="all">
<link rel="stylesheet" id="woo-floating-cart-css" href="/Public/newskin/css/woo-floating-cart.css" type="text/css" media="all">
<link rel="stylesheet" id="wcqi-css-css" href="/Public/newskin/css/wc-quantity-increment.css" type="text/css" media="all">
<link rel="stylesheet" id="yith_wccl_frontend-css" href="/Public/newskin/css/yith-wccl.css" type="text/css" media="all">
<style id="yith_wccl_frontend-inline-css" type="text/css">
.select_option .yith_wccl_tooltip > span{background: #000000;color: #ffffff;}
            .select_option .yith_wccl_tooltip.bottom span:after{border-bottom-color: #000000;}
            .select_option .yith_wccl_tooltip.top span:after{border-top-color: #000000;}
</style>
<link rel="stylesheet" id="ywot_style-css" href="/Public/newskin/css/ywot_style.css" type="text/css" media="all">
<link rel="stylesheet" id="storefront-style-css" href="/Public/newskin/css/style.css" type="text/css" media="all">
<style id="storefront-style-inline-css" type="text/css">

			.main-navigation ul li a,
			.site-title a,
			ul.menu li a,
			.site-branding h1 a,
			.site-footer .storefront-handheld-footer-bar a:not(.button),
			button.menu-toggle,
			button.menu-toggle:hover {
				color: #333333;
			}

			button.menu-toggle,
			button.menu-toggle:hover {
				border-color: #333333;
			}

			.main-navigation ul li a:hover,
			.main-navigation ul li:hover > a,
			.site-title a:hover,
			a.cart-contents:hover,
			.site-header-cart .widget_shopping_cart a:hover,
			.site-header-cart:hover > li > a,
			.site-header ul.menu li.current-menu-item > a {
				color: #838383;
			}

			table th {
				background-color: #f8f8f8;
			}

			table tbody td {
				background-color: #fdfdfd;
			}

			table tbody tr:nth-child(2n) td,
			fieldset,
			fieldset legend {
				background-color: #fbfbfb;
			}

			.site-header,
			.secondary-navigation ul ul,
			.main-navigation ul.menu > li.menu-item-has-children:after,
			.secondary-navigation ul.menu ul,
			.storefront-handheld-footer-bar,
			.storefront-handheld-footer-bar ul li > a,
			.storefront-handheld-footer-bar ul li.search .site-search,
			button.menu-toggle,
			button.menu-toggle:hover {
				background-color: #ffffff;
			}

			p.site-description,
			.site-header,
			.storefront-handheld-footer-bar {
				color: #6d6d6d;
			}

			.storefront-handheld-footer-bar ul li.cart .count,
			button.menu-toggle:after,
			button.menu-toggle:before,
			button.menu-toggle span:before {
				background-color: #333333;
			}

			.storefront-handheld-footer-bar ul li.cart .count {
				color: #ffffff;
			}

			.storefront-handheld-footer-bar ul li.cart .count {
				border-color: #ffffff;
			}

			h1, h2, h3, h4, h5, h6 {
				color: #333333;
			}

			.widget h1 {
				border-bottom-color: #333333;
			}

			body,
			.secondary-navigation a,
			.onsale,
			.pagination .page-numbers li .page-numbers:not(.current), .woocommerce-pagination .page-numbers li .page-numbers:not(.current) {
				color: #6d6d6d;
			}

			.widget-area .widget a,
			.hentry .entry-header .posted-on a,
			.hentry .entry-header .byline a {
				color: #9f9f9f;
			}

			a  {
				color: #96588a;
			}

			a:focus,
			.button:focus,
			.button.alt:focus,
			.button.added_to_cart:focus,
			.button.wc-forward:focus,
			button:focus,
			input[type="button"]:focus,
			input[type="reset"]:focus,
			input[type="submit"]:focus {
				outline-color: #96588a;
			}

			button, input[type="button"], input[type="reset"], input[type="submit"], .button, .added_to_cart, .widget a.button, .site-header-cart .widget_shopping_cart a.button {
				background-color: #eeeeee;
				border-color: #eeeeee;
				color: #333333;
			}

			button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .button:hover, .added_to_cart:hover, .widget a.button:hover, .site-header-cart .widget_shopping_cart a.button:hover {
				background-color: #d5d5d5;
				border-color: #d5d5d5;
				color: #333333;
			}

			button.alt, input[type="button"].alt, input[type="reset"].alt, input[type="submit"].alt, .button.alt, .added_to_cart.alt, .widget-area .widget a.button.alt, .added_to_cart, .widget a.button.checkout {
				background-color: #333333;
				border-color: #333333;
				color: #ffffff;
			}

			button.alt:hover, input[type="button"].alt:hover, input[type="reset"].alt:hover, input[type="submit"].alt:hover, .button.alt:hover, .added_to_cart.alt:hover, .widget-area .widget a.button.alt:hover, .added_to_cart:hover, .widget a.button.checkout:hover {
				background-color: #1a1a1a;
				border-color: #1a1a1a;
				color: #ffffff;
			}

			.pagination .page-numbers li .page-numbers.current, .woocommerce-pagination .page-numbers li .page-numbers.current {
				background-color: #e6e6e6;
				color: #6d6d6d;
			}

			#comments .comment-list .comment-content .comment-text {
				background-color: #f8f8f8;
			}

			.site-footer {
				background-color: #f0f0f0;
				color: #6d6d6d;
			}

			.site-footer a:not(.button) {
				color: #333333;
			}

			.site-footer h1, .site-footer h2, .site-footer h3, .site-footer h4, .site-footer h5, .site-footer h6 {
				color: #333333;
			}

			#order_review {
				background-color: #ffffff;
			}

			#payment .payment_methods > li .payment_box,
			#payment .place-order {
				background-color: #fafafa;
			}

			#payment .payment_methods > li:not(.woocommerce-notice) {
				background-color: #f5f5f5;
			}

			#payment .payment_methods > li:not(.woocommerce-notice):hover {
				background-color: #f0f0f0;
			}

			@media screen and ( min-width: 768px ) {
				.secondary-navigation ul.menu a:hover {
					color: #868686;
				}

				.secondary-navigation ul.menu a {
					color: #6d6d6d;
				}

				.site-header-cart .widget_shopping_cart,
				.main-navigation ul.menu ul.sub-menu,
				.main-navigation ul.nav-menu ul.children {
					background-color: #f0f0f0;
				}

				.site-header-cart .widget_shopping_cart .buttons,
				.site-header-cart .widget_shopping_cart .total {
					background-color: #f5f5f5;
				}

				.site-header {
					border-bottom-color: #f0f0f0;
				}
			}
</style>
<link rel="stylesheet" id="storefront-icons-css" href="/Public/newskin/css/icons.css" type="text/css" media="all">
<link rel="stylesheet" id="storefront-woocommerce-style-css" href="/Public/newskin/css/woocommerce.css" type="text/css" media="all">
<style id="storefront-woocommerce-style-inline-css" type="text/css">

			a.cart-contents,
			.site-header-cart .widget_shopping_cart a {
				color: #333333;
			}

			table.cart td.product-remove,
			table.cart td.actions {
				border-top-color: #ffffff;
			}

			.woocommerce-tabs ul.tabs li.active a,
			ul.products li.product .price,
			.onsale,
			.widget_search form:before,
			.widget_product_search form:before {
				color: #6d6d6d;
			}

			.woocommerce-breadcrumb a,
			a.woocommerce-review-link,
			.product_meta a {
				color: #9f9f9f;
			}

			.onsale {
				border-color: #6d6d6d;
			}

			.star-rating span:before,
			.quantity .plus, .quantity .minus,
			p.stars a:hover:after,
			p.stars a:after,
			.star-rating span:before,
			#payment .payment_methods li input[type=radio]:first-child:checked+label:before {
				color: #96588a;
			}

			.widget_price_filter .ui-slider .ui-slider-range,
			.widget_price_filter .ui-slider .ui-slider-handle {
				background-color: #96588a;
			}

			.order_details {
				background-color: #f8f8f8;
			}

			.order_details > li {
				border-bottom: 1px dotted #e3e3e3;
			}

			.order_details:before,
			.order_details:after {
				background: -webkit-linear-gradient(transparent 0,transparent 0),-webkit-linear-gradient(135deg,#f8f8f8 33.33%,transparent 33.33%),-webkit-linear-gradient(45deg,#f8f8f8 33.33%,transparent 33.33%)
			}

			p.stars a:before,
			p.stars a:hover~a:before,
			p.stars.selected a.active~a:before {
				color: #6d6d6d;
			}

			p.stars.selected a.active:before,
			p.stars:hover a:before,
			p.stars.selected a:not(.active):before,
			p.stars.selected a.active:before {
				color: #96588a;
			}

			.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger {
				background-color: #eeeeee;
				color: #333333;
			}

			.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger:hover {
				background-color: #d5d5d5;
				border-color: #d5d5d5;
				color: #333333;
			}

			.button.loading {
				color: #eeeeee;
			}

			.button.loading:hover {
				background-color: #eeeeee;
			}

			.button.loading:after {
				color: #333333;
			}

			@media screen and ( min-width: 768px ) {
				.site-header-cart .widget_shopping_cart,
				.site-header .product_list_widget li .quantity {
					color: #6d6d6d;
				}
			}
</style>
<link rel="stylesheet" id="wsocial-css" href="/Public/newskin/css/social.css" type="text/css" media="all">
<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">
		{{{ data.variation.variation_description }}}
	</div>

	<div class="woocommerce-variation-price">
		{{{ data.variation.price_html }}}
	</div>

	<div class="woocommerce-variation-availability">
		{{{ data.variation.availability_html }}}
	</div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>抱歉，该产品已下架,请选择其它产品。</p>
</script>
<script type="text/javascript" src="/Public/newskin/js/jquery/jquery.js"></script>
<script type="text/javascript" src="/Public/newskin/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/Public/newskin/js/modernizr.custom-min.js"></script>
<script type="text/javascript" src="/Public/newskin/js/jquery.touch-min.js"></script>
<script type="text/javascript" src="/Public/newskin/js/TweenMax-min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var WOOFC = {"ajaxurl":"https://www.oneue.com/wp-admin/admin-ajax.php","litemode":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="/Public/newskin/js/woo-floating-cart-min.js"></script>
<script type="text/javascript" src="/Public/newskin/js/wc-quantity-increment.min.js"></script>
<script type="text/javascript" src="/Public/newskin/js/jquery.tooltipster.min.js"></script>
<link rel="https://api.w.org/" href="https://www.oneue.com/wp-json/">
<link rel="canonical" href="https://www.oneue.com/">
<link rel="alternate" type="application/json+oembed" href="https://www.oneue.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.oneue.com%2F">
<link rel="alternate" type="text/xml+oembed" href="https://www.oneue.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.oneue.com%2F&amp;format=xml">
	<noscript>&lt;style&gt;.woocommerce-product-gallery{ opacity: 1 !important; }&lt;/style&gt;</noscript>
	<meta name="keywords" content="">
<meta name="description" content="">
</head>

<body class="home page-template page-template-template-homepage page-template-template-homepage-php page page-id-10 has-post-thumbnail right-sidebar woocommerce-active woofc-ready">


<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner" style="">
		<div class="col-full">

					<a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
				<div class="site-branding">
			<div class="beta site-title"><a href="https://www.oneue.com/" rel="home">ONEUE</a></div><p class="site-description">一个简单的购物网站</p>		</div>
					<div class="site-search">
				<div class="widget woocommerce widget_product_search"><form role="search" method="get" class="woocommerce-product-search" action="https://www.oneue.com/">
	<label class="screen-reader-text" for="woocommerce-product-search-field-0">搜索：</label>
	<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="搜索产品…" value="" name="s">
	<input type="submit" value="搜索">
	<input type="hidden" name="post_type" value="product">
</form>
</div>			</div>
				<div class="storefront-primary-navigation">		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Navigation">
		<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span>Menu</span></button>
			<div class="primary-navigation"><ul id="menu-navigation" class="menu nav-menu" aria-expanded="false"><li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-11"><a href="/index.php/Home/index/index">首页</a></li>
<li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"><a href="/index.php/Home/cart/index">购物车</a></li>
                           <?php if(isset($_SESSION['username'])): ?><li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="/index.php/Home/accoun/index">我的帐户</a></li>
   <?php else: ?>
				<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="/index.php/Home/Login/login">我的帐户</a></li><?php endif; ?>

</ul></div><div class="handheld-navigation"><ul id="menu-navigation-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-11"><a href="/index.php/Home/index/index">首页</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"><a href="/index.php/Home/cart/index">购物车</a></li>
                           <?php if(isset($_SESSION['username'])): ?><li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="/index.php/Home/accoun/index">我的帐户</a></li>
   <?php else: ?>
				<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="/index.php/Home/Login/login">我的帐户</a></li><?php endif; ?>
</ul></div>		</nav><!-- #site-navigation -->
				<ul id="site-header-cart" class="site-header-cart menu">
			<li class="">
										<a class="cart-contents" href="https://www.oneue.com/cart/" title="View your shopping cart">
				<span class="amount">¥0.00</span> <span class="count">0 items</span>
			</a>
		
					</li>
			<li>
				<div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content">

	<p class="woocommerce-mini-cart__empty-message">购物车里没有产品</p>


</div></div>			</li>
		</ul>
		</div>
		</div>
	</header><!-- #masthead -->


<body>	
	 <div class="xh-regbox">
	<div class="xh-title">登录</div>
<form action="dologin" method="post">

                <div class="xh-form-group">
            <label class="required">用户名/邮箱/手机</label>
            <input type="text"  name="username" value="" placeholder="请输入用户名，邮箱或手机" class="form-control " style="">
                    </div>

              <div class="xh-form-group">
            <label class="required">密码</label>
            <input type="password" name="password" value="" placeholder="" class="form-control " style="">
                    </div>

              <div class="xh-form-group mt10">
            <button type="submit" id="btn-login-17150b2a85ea9427ca08d3e5d13a48d30"  class="xh-btn xh-btn-primary xh-btn-block xh-btn-lg">登录</button>
        </div>
    	    	  
    	    </form>
</div>


<style>.xh-regbox .xh-btn-primary{background-color:#399ee0;border-color:#399ee0;}.xh-regbox .xh-btn-primary:hover{background-color:#2c97de;border-color:#2c97de;}</style>
	  <div class="xh-user-register"><a href="/index.php/Home/Index/index">首页</a>|<a href="/index.php/Home/Login/register">注册</a>|<a href="/index.php/Home/Login/forgetkey">忘记密码？</a></div>
	
</body></html>