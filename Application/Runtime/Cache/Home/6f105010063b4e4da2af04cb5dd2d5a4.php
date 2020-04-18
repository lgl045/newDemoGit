<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN" class="woofc-no-touchevents woofc-supports woofc-csstransitions woofc-csstransforms3d" style=""><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://www.oneue.com/xmlrpc.php">
<title>购物车 – ONEUE</title>
<link rel="dns-prefetch" href="//s.w.org">
<link rel="stylesheet" id="woofcicons-css" href="https://www.oneue.com/wp-content/plugins/woo-floating-cart-lite/public/assets/css/woofcicons.css" type="text/css" media="all">
<link rel="stylesheet" id="woo-floating-cart-css" href="https://www.oneue.com/wp-content/plugins/woo-floating-cart-lite/public/assets/css/woo-floating-cart.css" type="text/css" media="all">
<link rel="stylesheet" id="select2-css" href="https://www.oneue.com/wp-content/plugins/woocommerce/assets/css/select2.css" type="text/css" media="all">
<link rel="stylesheet" id="wcqi-css-css" href="https://www.oneue.com/wp-content/plugins/woocommerce-quantity-increment/assets/css/wc-quantity-increment.css" type="text/css" media="all">
<link rel="stylesheet" id="yith_wccl_frontend-css" href="https://www.oneue.com/wp-content/plugins/yith-woocommerce-color-label-variations-premium/assets/css/yith-wccl.css" type="text/css" media="all">
<style id="yith_wccl_frontend-inline-css" type="text/css">
.select_option .yith_wccl_tooltip > span{background: #000000;color: #ffffff;}
            .select_option .yith_wccl_tooltip.bottom span:after{border-bottom-color: #000000;}
            .select_option .yith_wccl_tooltip.top span:after{border-top-color: #000000;}
</style>
<link rel="stylesheet" id="ywot_style-css" href="https://www.oneue.com/wp-content/plugins/yith-woocommerce-order-tracking-premium/assets/css/ywot_style.css" type="text/css" media="all">
<link rel="stylesheet" id="storefront-style-css" href="https://www.oneue.com/wp-content/themes/storefront/style.css" type="text/css" media="all">
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
<link rel="stylesheet" id="storefront-icons-css" href="https://www.oneue.com/wp-content/themes/storefront/assets/sass/base/icons.css" type="text/css" media="all">
<link rel="stylesheet" id="storefront-woocommerce-style-css" href="https://www.oneue.com/wp-content/themes/storefront/assets/sass/woocommerce/woocommerce.css" type="text/css" media="all">
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
<link rel="stylesheet" id="wsocial-css" href="https://www.oneue.com/wp-content/plugins/wechat-social-login/assets/css/social.css" type="text/css" media="all">
<script src="https://www.oneue.com/wp-includes/js/zxcvbn.min.js" type="text/javascript" async=""></script><script type="text/template" id="tmpl-variation-template">
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
<script type="text/javascript" src="https://www.oneue.com/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-includes/js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woo-floating-cart-lite/public/assets/vendors/modernizr.custom-min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woo-floating-cart-lite/public/assets/vendors/jquery.touch-min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woo-floating-cart-lite/public/assets/vendors/TweenMax-min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var WOOFC = {"ajaxurl":"https://www.oneue.com/wp-admin/admin-ajax.php","litemode":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woo-floating-cart-lite/public/assets/js/woo-floating-cart-min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https://www.oneue.com/wp-includes/js/zxcvbn.min.js"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.oneue.com/wp-includes/js/zxcvbn-async.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woocommerce-quantity-increment/assets/js/wc-quantity-increment.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/yith-woocommerce-order-tracking-premium/assets/js/jquery.tooltipster.min.js"></script>
<link rel="https://api.w.org/" href="https://www.oneue.com/wp-json/">
<link rel="canonical" href="https://www.oneue.com/cart/">
<link rel="alternate" type="application/json+oembed" href="https://www.oneue.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.oneue.com%2Fcart%2F">
<link rel="alternate" type="text/xml+oembed" href="https://www.oneue.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.oneue.com%2Fcart%2F&amp;format=xml">
	<noscript>&lt;style&gt;.woocommerce-product-gallery{ opacity: 1 !important; }&lt;/style&gt;</noscript>
	<meta name="robots" content="noindex,follow">
<meta name="keywords" content="">
<meta name="description" content="">
</head>

<body class="page-template-default page page-id-5 woocommerce-cart woocommerce-page right-sidebar woocommerce-active woofc-ready">


<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner" style="">
		<div class="col-full">

					<a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
				<div class="site-branding">
			<div class="beta site-title"><a href="/index.php/Home/index/index" rel="home">TOM</a></div><p class="site-description">一个简单的购物网站</p>		</div>

					<div class="site-search">
				<div class="widget woocommerce widget_product_search">   <form name="" method="post"  action="/index.php/Home/index/so" enctype="multipart/form-data">
	<label class="screen-reader-text" for="woocommerce-product-search-field-0">搜索：</label>
                  
	<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="搜索产品…" value="" name="s">
                      <button style="margin-left: 100%;margin-top:-20%;width: 30%;height:4.7%" type="submit" class="button pay">搜索</button> 
	<input type="hidden" name="post_type" value="product">
</form>
</div>			</div>
	<div class="storefront-primary-navigation">		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Navigation">
		<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span>Menu</span></button>
			<div class="primary-navigation"><ul id="menu-navigation" class="menu nav-menu" aria-expanded="false"><li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-11"><a href="/index.php/Home/index/index">首页</a></li>
<li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"><a href="/index.php/Home/cart/index">购物车</a></li>
                           <?php if(!isset($_SESSION['username'])): ?><li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="/index.php/Home/accoun/index">我的帐户</a></li>
   <?php else: ?>
				<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="/index.php/Home/Login/login">我的帐户</a></li><?php endif; ?>

</ul></div><div class="handheld-navigation"><ul id="menu-navigation-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-11"><a href="/index.php/Home/index/index">首页</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"><a href="/index.php/Home/cart/index">购物车</a></li>
                           <?php if(!isset($_SESSION['username'])): ?><li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="/index.php/Home/accoun/index">我的帐户</a></li>
   <?php else: ?>
				<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="/index.php/Home/Login/login">我的帐户</a></li><?php endif; ?>
</ul></div>		</nav><!-- #site-navigation -->
				<ul id="site-header-cart" class="site-header-cart menu">

			<li>
							</li>
		</ul>
		</div>
		</div>
	</header><!-- #masthead -->

	
	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<div class="woocommerce" style="margin-top: 8%"></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			
<div id="post-5" class="post-5 page type-page status-publish hentry">
			<header class="entry-header">
			<h1 class="entry-title">购物车</h1>		</header><!-- .entry-header -->
				<div class="entry-content">
<form class="woocommerce-cart-form" action="https://www.oneue.com/cart/" method="post">
	
	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name">产品</th>
				<th class="product-price">价格</th>
				<th class="product-quantity">数量</th>
				<th class="product-subtotal">合计</th>
			</tr>
		</thead>
		<tbody>
          <?php if(is_array($cart)): $i = 0; $__LIST__ = $cart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$okcart): $mod = ($i % 2 );++$i;?><tr class="woocommerce-cart-form__cart-item cart_item">

						<td class="product-remove">
							<a href="javascript:void(0);" onclick="del(<?php echo ($okcart['id']); ?>)" class="remove" aria-label="移除此物品" data-product_id="552" data-product_sku="">×</a>						</td>

						<td class="product-thumbnail">
                          
							<a href="/index.php/Home/Goods/goodsitem/gid/<?php echo ($okcart['id']); ?>"><img width="180" height="180" src="https://asd.luhanforex.cn/Public/<?php echo ($okcart['pic']); ?>" ></a>						</td>

						<td class="product-name" data-title="产品">
							<a href="/index.php/Home/Goods/goodsitem/gid/<?php echo ($okcart['id']); ?>"><?php echo ($okcart['chiname']); ?></a>						</td>

						<td class="product-price" data-title="价格">
							<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">¥</span><?php echo ($okcart['money']); ?></span>						</td>

						<td class="product-quantity" data-title="数量">
								<div class="quantity buttons_added">
        <input  type="button" value="-" class="minus" onclick="jian(<?php echo ($okcart['id']); ?>);" >
		<label class="screen-reader-text" for="quantity_5aae8943781a6">数量</label>
                                  
		<input type="number" value="<?php echo ($okcart['goods_num']); ?>" id="num_<?php echo ($okcart['id']); ?>" class="input-text qty text" step="1" min="0" max="" name="shul" value="1" title="数量" size="4" pattern="[0-9]*" inputmode="numeric" onblur="outs(<?php echo ($okcart['id']); ?>)" >
	 
        <input type="button" value="+" class="plus" onclick="jia(<?php echo ($okcart['id']); ?>);"></div>
							</td>

						<td class="product-subtotal" data-title="合计">
							<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">¥</span><?php echo ($okcart['money']*$okcart['goods_num']); ?></span>						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
			<tr>
				<td colspan="6" class="actions">

					<input type="button" class="button" name="update_cart" value="更新购物车"  onclick="reload();"> 

					
					<input type="hidden" id="_wpnonce" name="_wpnonce" value="448813db0c"><input type="hidden" name="_wp_http_referer" value="/cart/">				</td>
			</tr>

					</tbody>
	</table>
	</form>

<div class="cart-collaterals">
	<div class="cart_totals ">

	
	<h2>购物车总计</h2>

	<table cellspacing="0" class="shop_table shop_table_responsive">

		<tbody><tr class="cart-subtotal">
			<th>小计</th>
			<td data-title="小计"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">¥</span><?php echo ($nums); ?></span></td>
		</tr>

		
		
			
			<tr class="shipping">
	<th>配送 1</th>
	<td data-title="配送 1">
					免费配送 <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping:1" class="shipping_method">		
		
					
<form class="woocommerce-shipping-calculator" action="https://www.oneue.com/cart/" method="post">

	<p><a href="#" class="shipping-calculator-button">计算运费</a></p>

	<section class="shipping-calculator-form" style="display:none;">

		<p class="form-row form-row-wide" id="calc_shipping_country_field">
			<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
				<option value="">选择国家/地区…</option>
				<option value="UM"> 美国本土外小岛屿</option><option value="BT">不丹</option><option value="TL">东帝汶</option><option value="CN" selected="selected">中国</option><option value="TW">中国台湾</option><option value="CF">中非共和国</option><option value="DK">丹麦</option><option value="UA">乌克兰</option><option value="UZ">乌兹别克斯坦</option><option value="UG">乌干达</option><option value="UY">乌拉圭</option><option value="TD">乍得</option><option value="YE">也门</option><option value="AM">亚美尼亚</option><option value="IL">以色列</option><option value="IQ">伊拉克</option><option value="IR">伊朗</option><option value="BZ">伯利兹</option><option value="CV">佛得角</option><option value="RU">俄罗斯</option><option value="BG">保加利亚</option><option value="HR">克罗地亚</option><option value="GU">关岛</option><option value="GM">冈比亚</option><option value="IS">冰岛</option><option value="GN">几内亚</option><option value="GW">几内亚比绍</option><option value="LI">列支敦士登</option><option value="CG">刚果（布）</option><option value="CD">刚果（金）</option><option value="LY">利比亚</option><option value="LR">利比里亚</option><option value="CA">加拿大</option><option value="GH">加纳</option><option value="GA">加蓬</option><option value="HU">匈牙利</option><option value="KP">北朝鲜</option><option value="MP">北马里亚纳群岛</option><option value="GS">南乔治亚/南桑威奇群岛</option><option value="AQ">南极洲</option><option value="SS">南苏丹</option><option value="ZA">南非</option><option value="BQ">博内尔岛，圣尤斯特修斯和萨巴</option><option value="BW">博茨瓦纳</option><option value="QA">卡塔尔</option><option value="RW">卢旺达</option><option value="LU">卢森堡</option><option value="ID">印尼</option><option value="IN">印度</option><option value="GT">危地马拉</option><option value="EC">厄瓜多尔</option><option value="ER">厄立特里亚</option><option value="SY">叙利亚</option><option value="CU">古巴</option><option value="KG">吉尔吉斯斯坦</option><option value="DJ">吉布提</option><option value="KZ">哈萨克斯坦</option><option value="CO">哥伦比亚</option><option value="CR">哥斯达黎加</option><option value="CM">喀麦隆</option><option value="TV">图瓦卢</option><option value="TM">土库曼斯坦</option><option value="TR">土耳其</option><option value="LC">圣卢西亚</option><option value="KN">圣基茨和尼维斯</option><option value="ST">圣多美和普林西比</option><option value="BL">圣巴塞洛缪</option><option value="VC">圣文森特和格林纳丁斯</option><option value="PM">圣皮埃尔和密克隆</option><option value="CX">圣诞岛</option><option value="SH">圣赫勒拿</option><option value="MF">圣马丁（法国部分）</option><option value="SX">圣马丁（荷兰部分）</option><option value="SM">圣马力诺</option><option value="GY">圭亚那</option><option value="TZ">坦桑尼亚</option><option value="EG">埃及</option><option value="ET">埃塞俄比亚</option><option value="KI">基里巴斯</option><option value="TJ">塔吉克斯坦</option><option value="SN">塞内加尔</option><option value="RS">塞尔维亚</option><option value="SL">塞拉利昂</option><option value="CY">塞浦路斯</option><option value="SC">塞舌尔</option><option value="MX">墨西哥</option><option value="TG">多哥</option><option value="DM">多米尼克</option><option value="DO">多米尼加共和国</option><option value="AT">奥地利</option><option value="VE">委内瑞拉</option><option value="BD">孟加拉国</option><option value="AO">安哥拉</option><option value="AI">安圭拉</option><option value="AG">安提瓜和巴布达</option><option value="AD">安道尔</option><option value="FM">密克罗尼西亚</option><option value="NI">尼加拉瓜</option><option value="NG">尼日利亚</option><option value="NE">尼日尔</option><option value="NP">尼泊尔</option><option value="PS">巴勒斯坦领土</option><option value="BS">巴哈马</option><option value="PK">巴基斯坦</option><option value="BB">巴巴多斯</option><option value="PG">巴布亚新几内亚</option><option value="PY">巴拉圭</option><option value="PA">巴拿马</option><option value="BH">巴林</option><option value="BR">巴西</option><option value="BF">布基纳法索</option><option value="BV">布维岛</option><option value="BI">布隆迪</option><option value="GR">希腊</option><option value="CK">库克群岛</option><option value="CW">库拉索</option><option value="KY">开曼群岛</option><option value="DE">德国</option><option value="IT">意大利</option><option value="SB">所罗门群岛</option><option value="TK">托克劳</option><option value="LV">拉脱维亚</option><option value="NO">挪威</option><option value="CZ">捷克共和国</option><option value="MD">摩尔多瓦</option><option value="MA">摩洛哥</option><option value="MC">摩纳哥</option><option value="BN">文莱</option><option value="FJ">斐济</option><option value="SZ">斯威士兰</option><option value="SK">斯洛伐克</option><option value="SI">斯洛文尼亚</option><option value="SJ">斯瓦尔巴岛和扬马延岛</option><option value="LK">斯里兰卡</option><option value="SG">新加坡</option><option value="NC">新喀里多尼亚</option><option value="JE">新泽西</option><option value="NZ">新西兰</option><option value="JP">日本</option><option value="CL">智利</option><option value="KH">柬埔寨</option><option value="GG">格恩西</option><option value="GD">格林纳达</option><option value="GL">格陵兰</option><option value="GE">格鲁吉亚</option><option value="VA">梵帝冈</option><option value="BE">比利时</option><option value="MR">毛里塔尼亚</option><option value="MU">毛里求斯</option><option value="TO">汤加</option><option value="SA">沙特阿拉伯</option><option value="FR">法国</option><option value="TF">法国南部领土</option><option value="GF">法属圭亚那</option><option value="PF">法属波利尼西亚</option><option value="FO">法罗群岛</option><option value="PL">波兰</option><option value="PR">波多黎各</option><option value="BA">波斯尼亚和黑塞哥维那</option><option value="TH">泰国</option><option value="ZW">津巴布韦</option><option value="HN">洪都拉斯</option><option value="HT">海地</option><option value="AU">澳大利亚</option><option value="MO">澳门特别行政区，中国</option><option value="IE">爱尔兰</option><option value="EE">爱沙尼亚</option><option value="JM">牙买加</option><option value="TC">特克斯和凯科斯群岛</option><option value="TT">特里尼达和多巴哥</option><option value="BO">玻利维亚</option><option value="NR">瑙鲁</option><option value="SE">瑞典</option><option value="CH">瑞士</option><option value="GP">瓜德罗普岛</option><option value="WF">瓦利斯群岛和富图纳群岛</option><option value="VU">瓦努阿图</option><option value="RE">留尼旺</option><option value="BY">白俄罗斯</option><option value="BM">百慕大</option><option value="PN">皮特凯恩</option><option value="GI">直布罗陀</option><option value="FK">福克兰群岛</option><option value="KW">科威特</option><option value="KM">科摩罗</option><option value="CC">科科斯（基林）群岛</option><option value="PE">秘鲁</option><option value="TN">突尼斯</option><option value="LT">立陶宛</option><option value="SO">索马里</option><option value="JO">约旦</option><option value="NA">纳米比亚</option><option value="NU">纽埃</option><option value="MM">缅甸</option><option value="RO">罗马尼亚</option><option value="US">美国</option><option value="VI">美属维尔京群岛</option><option value="AS">美属萨摩亚</option><option value="LA">老挝</option><option value="KE">肯尼亚</option><option value="FI">芬兰</option><option value="SD">苏丹</option><option value="SR">苏里南</option><option value="GB">英国</option><option value="IO">英属印度洋领地</option><option value="VG">英属维尔京群岛</option><option value="AX">英属维尔京群岛</option><option value="NL">荷兰</option><option value="MZ">莫桑比克</option><option value="LS">莱索托</option><option value="PH">菲律宾</option><option value="SV">萨尔瓦多</option><option value="WS">萨摩亚群岛</option><option value="PT">葡萄牙</option><option value="MN">蒙古国</option><option value="MS">蒙特塞拉特</option><option value="EH">西撒哈拉</option><option value="ES">西班牙</option><option value="NF">诺福克岛</option><option value="CI">象牙海岸</option><option value="PW">贝劳</option><option value="BJ">贝宁</option><option value="ZM">赞比亚</option><option value="GQ">赤道几内亚</option><option value="HM">赫德岛和麦克唐纳群岛</option><option value="VN">越南</option><option value="AZ">阿塞拜疆</option><option value="AF">阿富汗</option><option value="DZ">阿尔及利亚</option><option value="AL">阿尔巴尼亚</option><option value="AE">阿拉伯联合酋长国</option><option value="OM">阿曼</option><option value="AR">阿根廷</option><option value="AW">阿鲁巴</option><option value="KR">韩国</option><option value="HK">香港特别行政区，中国</option><option value="MK">马其顿</option><option value="MV">马尔代夫</option><option value="IM">马恩岛</option><option value="MW">马拉维</option><option value="MQ">马提尼克</option><option value="MY">马来西亚</option><option value="YT">马约特岛</option><option value="MH">马绍尔群岛</option><option value="MT">马耳他</option><option value="MG">马达加斯加</option><option value="ML">马里</option><option value="LB">黎巴嫩</option><option value="ME">黑山</option>			</select>
		</p>

		<p class="form-row form-row-wide validate-required" id="calc_shipping_state_field">
			<span>
						<select name="calc_shipping_state" class="state_select" id="calc_shipping_state" placeholder="地区/县"><option value="">选择一个选项…</option><option value="CN1">云南</option><option value="CN2">北京</option><option value="CN3">天津</option><option value="CN4">河北</option><option value="CN5">陕西</option><option value="CN6">内蒙古</option><option value="CN7">辽宁</option><option value="CN8">吉林</option><option value="CN9">黑龙江</option><option value="CN10">上海 / 上海</option><option value="CN11">江苏</option><option value="CN12">浙江</option><option value="CN13">安徽</option><option value="CN14">福建</option><option value="CN15">江西</option><option value="CN16">山东</option><option value="CN17">河南</option><option value="CN18">湖北 / 湖北</option><option value="CN19">湖南 / 湖南</option><option value="CN20">广东 / 广东</option><option value="CN21">广西壮族</option><option value="CN22">海南</option><option value="CN23">重庆</option><option value="CN24">四川</option><option value="CN25">贵州</option><option value="CN26">陕西</option><option value="CN27">甘肃</option><option value="CN28">青海</option><option value="CN29">宁夏</option><option value="CN30">澳門</option><option value="CN31">西藏自治区</option><option value="CN32">新疆</option></select>
					</span>		</p>

		
		
			<p class="form-row form-row-wide" id="calc_shipping_postcode_field">
				<input type="text" class="input-text" value="" placeholder="邮政编码" name="calc_shipping_postcode" id="calc_shipping_postcode">
			</p>

		
		<p><button type="submit" name="calc_shipping" value="1" class="button">更新总数</button></p>

		<input type="hidden" id="_wpnonce" name="_wpnonce" value="448813db0c"><input type="hidden" name="_wp_http_referer" value="/cart/">	</section>
</form>

			</td>
</tr>

			
		
		
		
		
		<tr class="order-total">
			<th>合计</th>
			<td data-title="合计"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">¥</span><?php echo ($nums); ?></span></strong> </td>
		</tr>

		
	</tbody></table>

	<div class="wc-proceed-to-checkout">
		
<a href="/index.php/Home/Cart/paycart" class="checkout-button button alt wc-forward">
	去结算</a>
	</div>

	
</div>
</div>

</div>
					</div><!-- .entry-content -->
		</div><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<div id="secondary" class="widget-area" role="complementary">
	<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="gamma widget-title">分类</span><ul class="product-categories">
      
          <?php if(is_array($fl)): foreach($fl as $key=>$fls): ?><li class="cat-item cat-item-28"><a href="/index.php/Home/goods/typelist/id/<?php echo ($fls['id']); ?>"><?php echo ($fls['fname']); ?></a></li><?php endforeach; endif; ?>
</ul></div><div id="woocommerce_products-2" class="widget woocommerce widget_products"><span class="gamma widget-title">推荐</span><ul class="product_list_widget">
   <?php if(is_array($tj)): foreach($tj as $key=>$ddp): ?><li>
	<a   href="/index.php/Home/Goods/goodsitem/gid/<?php echo ($ddp['id']); ?>">
		<img src="https://asd.luhanforex.cn/Public/<?php echo ($ddp['pic1']); ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="https://asd.luhanforex.cn/Public/<?php echo ($ddp['pic1']); ?> 280w, https://asd.luhanforex.cn/Public/<?php echo ($ddp['pic1']); ?> 250w, https://asd.luhanforex.cn/Public/<?php echo ($ddp['pic1']); ?> 450w, https://asd.luhanforex.cn/Public/<?php echo ($ddp['pic1']); ?> 768w, https://asd.luhanforex.cn/Public/<?php echo ($ddp['pic1']); ?> 300w, https://asd.luhanforex.cn/Public/<?php echo ($ddp['pic1']); ?> 600w, https://asd.luhanforex.cn/Public/<?php echo ($ddp['pic1']); ?> 800w" sizes="(max-width: 180px) 100vw, 180px" />	
      <span class="product-title"><?php echo ($ddp['chiname']); ?></span>
	</a>
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&yen;</span><?php echo ($ddp['money']); ?></span></li>

<li><?php endforeach; endif; ?>
</ul></div>
</div><!-- #secondary -->

		</div><!-- .col-full -->
	</div><!-- #content -->
  	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
        function jian(id){
   		$.post('/index.php/Home/Cart/jian',{id:id},function(data){
        if(data=!1){
          alert("网络连接失败！稍后再试");
         }
      })
    }
  
          function jia(id){
        var shul = $("input[name='shul']").val();
   		$.post('/index.php/Home/Cart/jia',{id:id},function(data){
        if(data=!1){
          alert("网络连接失败！稍后再试");
         }
      })
    }
  function outs(id){
	 var num=	'num_'+id;
     var nums= $("#"+num+"").val();
   		$.post('/index.php/Home/Cart/outs',{id:id,shu:nums},function(data){
        if(data=!1){
          alert("网络连接失败！稍后再试");
         }
      })
  
  }
  		function del(id){
			if(confirm('确定删除？')){
              $.post('/index.php/Home/Cart/delca',{id:id},function(data){
              if(data==1){
                alert("操作成功！");
                location.reload();
               }else{
                 alert("网络连接失败！稍后再试");
               }
            })
		  }
		}
  function reload(){
     location.reload();
  
  }
  </script>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

							<div class="footer-widgets row-1 col-4 fix">
							<div class="block footer-widget-1">
								<div id="custom_html-2" class="widget_text widget widget_custom_html"><span class="gamma widget-title">购物</span><div class="textwidget custom-html-widget"><div class="widget_pages">
		<ul>
				<li><a href="https://www.oneue.com/help/451/">会员注册</a></li>
				<li><a href="https://www.oneue.com/help/452/">购物流程</a></li>
				<li><a href="https://www.oneue.com/help/453/">支付方式</a></li>
				<li><a href="https://www.oneue.com/help/454/">物流配送</a></li>
   </ul>
</div></div></div>							</div>
							<div class="block footer-widget-2">
								<div id="custom_html-3" class="widget_text widget widget_custom_html"><span class="gamma widget-title">服务</span><div class="textwidget custom-html-widget"><div class="widget_pages">
		<ul>
				<li><a href="https://www.oneue.com/help/459/">售后政策</a></li>
				<li><a href="https://www.oneue.com/help/460/">退款说明</a></li>
				<li><a href="https://www.oneue.com/help/461/">取消订单</a></li>
				<li><a href="https://www.oneue.com/retrieve-password/">找回密码</a></li>
   </ul>
</div></div></div>							</div>
							<div class="block footer-widget-3">
								<div id="custom_html-4" class="widget_text widget widget_custom_html"><span class="gamma widget-title">保障</span><div class="textwidget custom-html-widget"><div class="widget_pages">
		<ul>
				<li><a href="https://www.oneue.com/help/455/">官方质检</a></li>
				<li><a href="https://www.oneue.com/help/456/">正品保证</a></li>
				<li><a href="https://www.oneue.com/help/457/">闪电发货</a></li>
				<li><a href="https://www.oneue.com/help/458/">七天退换</a></li>
   </ul>
</div></div></div>							</div>
							<div class="block footer-widget-4">
								<div id="pages-5" class="widget widget_pages"><span class="gamma widget-title">关于</span>		<ul>
			<li class="page_item page-item-449"><a href="https://www.oneue.com/about/">关于我们</a></li>
<li class="page_item page-item-450"><a href="https://www.oneue.com/contact/">联系我们</a></li>
		</ul>
		</div>							</div>
				</div><!-- .footer-widgets.row-1 -->		<div class="site-info">
			© ONEUE 2017 - 2018 ALL RIGHTS RESERVED.			<br><a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">闽ICP备15017742号-3</a>								</div><!-- .site-info -->
				<div class="storefront-handheld-footer-bar">
			<ul class="columns-3">
				
              
                           <?php if(!isset($_SESSION['username'])): ?><li class="my-account">
						<a href="/index.php/Home/Login/login">My Account</a>
              						</li>
   <?php else: ?>
					<li class="my-account">
						<a href="/index.php/Home/accoun/myorder">My Account</a>
              						</li><?php endif; ?>
									<li class="search">
						<a href="">Search</a>			<div class="site-search">
				<div class="widget woocommerce widget_product_search">   <form name="" method="post"  action="/index.php/Home/index/so" enctype="multipart/form-data">
	<label class="screen-reader-text" for="woocommerce-product-search-field-0">搜索：</label>
                  
	<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="搜索产品…" value="" name="s">
                      <button style="margin-left: 100%;margin-top:-20%;width: 30%;height:4.7%" type="submit" class="button pay">搜索</button> 
	<input type="hidden" name="post_type" value="product">
</form>
</div>			</div>
							</li>
									<li class="cart">
												<a class="footer-cart-contents" href="/index.php/Home/Cart/index" title="View your shopping cart">
				<span class="count"><?php echo ($shu); ?></span>
			</a>
		
							</li>
							</ul>
		</div>
		
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	
</div><!-- #page -->


<div class="woofc woofc-pos-bottom-right woofc-counter-pos-top-left woofc-empty" data-position="bottom-right" data-flytocart="1" data-flyduration="650" data-flyappendbody="" data-shaketrigger="vertical" data-loadingtimeout="100">
	
		
	
<a href="#" class="woofc-trigger woofc-icontype-image">
	
	<span class="woofc-trigger-cart-icon"></span>
	
	<ul class="woofc-count"> <!-- cart items count -->
		<li>0</li>
		<li>1</li>
	</ul> <!-- .count -->
	
	<span class="woofc-trigger-close-icon"></span>
</a>	
<div class="woofc-inner">
	<div class="woofc-wrapper">
		
		
<div class="woofc-header">
	
	<span class="woofc-title">购物车
	<span class="woofc-undo">项目已删除。 <a href="#0">撤销</a></span>
	
</span></div>		
		<div class="woofc-body">
			
						
			
<ul class="woofc-list">
	
<li class="woofc-no-product">
	购物车里没有产品</li></ul>		
						
		</div> <!-- .woofc-body -->

		
<div class="woofc-footer">
	<a href="https://www.oneue.com/checkout/" class="woofc-checkout woofc-btn">
		<em>
			结算 - 
			<span>¥0.00</span>
		</em>
	</a>
</div>
		
		<div class="woofc-spinner-wrap"><div class="woofc-spinner-inner">
			<div class="woofc-spinner woofc-spinner-three-bounce">
		        <div class="woofc-spinner-child woofc-spinner-bounce1"></div>
		        <div class="woofc-spinner-child woofc-spinner-bounce2"></div>
		        <div class="woofc-spinner-child woofc-spinner-bounce3"></div>
		    </div></div></div>		
	</div> <!-- .woofc-wrapper -->
</div> <!-- .woofc-inner -->
	
</div><script type="application/ld+json">{"@context":"http://schema.org/","@type":"WebPage","url":"https://www.oneue.com/","name":"u6b22u8fceu5149u4e34","description":"u7cbeu81f4u751fu6d3bu3001u4eceONEUEu5f00u59cbuff0cu7ed9u751fu6d3bu6765u4e00u70b9u4e0du4e00u6837u7684u8272u5f69uff01"}</script><script type="application/ld+json">{"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":"1","item":{"name":"u9996u9875"}}]}</script><script type="text/javascript" src="https://www.oneue.com/wp-includes/js/jquery/ui/effect.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"/wp-admin/admin-ajax.php","wc_ajax_url":"https://www.oneue.com/?wc-ajax=%%endpoint%%","i18n_view_cart":"u67e5u770bu8d2du7269u8f66","cart_url":"https://www.oneue.com/cart/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"/wp-admin/admin-ajax.php","wc_ajax_url":"https://www.oneue.com/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"/wp-admin/admin-ajax.php","wc_ajax_url":"https://www.oneue.com/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_008afaed2b846a5fa3b248bb9790ab76"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-includes/js/underscore.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"/wp-admin/admin-ajax.php"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.oneue.com/wp-includes/js/wp-util.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"https://www.oneue.com/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"u5f88u62b1u6b49uff0cu6ca1u6709u7b26u5408u60a8u7684u9009u62e9u6761u4ef6u7684u4ea7u54c1uff0cu8bf7u5c1du8bd5u5176u5b83u641cu9009u6761u4ef6u3002","i18n_make_a_selection_text":"u52a0u5165u8d2du7269u8f66u4e4bu524du8bf7u9009u5b9au4ea7u54c1u9009u9879u3002","i18n_unavailable_text":"u62b1u6b49uff0cu8be5u4ea7u54c1u5df2u4e0bu67b6,u8bf7u9009u62e9u5176u5b83u4ea7u54c1u3002"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var yith_wccl_general = {"ajaxurl":"https://www.oneue.com/?wc-ajax=%%endpoint%%","cart_redirect":"","cart_url":"https://www.oneue.com/cart/","view_cart":"View Cart","tooltip":"1","tooltip_pos":"top","tooltip_ani":"fade","description":"1","add_cart":"u52a0u5165u8d2du7269u8f66","grey_out":"","image_hover":"","wrapper_container_shop":"li.product"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/yith-woocommerce-color-label-variations-premium/assets/js/yith-wccl.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-includes/js/jquery/jquery.form.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var ywot = {"p":"1","ajax_url":"https://www.oneue.com/wp-admin/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/plugins/yith-woocommerce-order-tracking-premium/assets/js/ywot.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/themes/storefront/assets/js/navigation.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/themes/storefront/assets/js/skip-link-focus-fix.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/themes/storefront/assets/js/vendor/rgbaster.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/themes/storefront/assets/js/homepage.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-content/themes/storefront/assets/js/woocommerce/header-cart.min.js"></script>
<script type="text/javascript" src="https://www.oneue.com/wp-includes/js/wp-embed.min.js"></script>
    <div id="wsocial-dialog-login" style="display:none;position: fixed;z-index: 999;">
	<div class="xh-cover"></div>
	<div class="xh-regbox xh-window">
		<div class="xh-title">登录</div>
<form class="xh-form">
	<div id="fields-error-4eabae765c0a2fd821a9fde5dca039300"></div>
                <div class="xh-form-group">
            <label class="required">用户名/邮箱/手机</label>
            <input type="text" id="login_4eabae765c0a2fd821a9fde5dca039300_login_name" name="login_name" value="" placeholder="请输入用户名，邮箱或手机" class="form-control " style="">
                    </div>
              <script type="text/javascript">
      	(function($){
			$(document).bind('on_form_login_4eabae765c0a2fd821a9fde5dca039300_submit',function(e,m){
				m.login_name=$('#login_4eabae765c0a2fd821a9fde5dca039300_login_name').val();
			});

		})(jQuery);
		</script>
              <div class="xh-form-group">
            <label class="required">密码</label>
            <input type="password" id="login_4eabae765c0a2fd821a9fde5dca039300_login_password" name="login_password" value="" placeholder="" class="form-control " style="">
                    </div>
              <script type="text/javascript">
      	(function($){
			$(document).bind('on_form_login_4eabae765c0a2fd821a9fde5dca039300_submit',function(e,m){
				m.login_password=$('#login_4eabae765c0a2fd821a9fde5dca039300_login_password').val();
			});

		})(jQuery);
		</script>
              <div class="xh-form-group mt10">
            <button type="button" id="btn-login-4eabae765c0a2fd821a9fde5dca039300" onclick="window.xh_social_view_4eabae765c0a2fd821a9fde5dca039300.login();" class="xh-btn xh-btn-primary xh-btn-block xh-btn-lg">登录</button>
        </div>
    	    	    <div class="xh-form-group xh-mT20">
                <label>快速登录</label>
               <div class="xh-social">
                   <a title="微信" href="https://www.oneue.com/wp-admin/admin-ajax.php?channel_id=social_wechat&amp;action=xh_social_channel&amp;tab=login_redirect_to_authorization_uri&amp;xh_social_channel=37ddfc50d1&amp;notice_str=5381132623&amp;hash=668591ec2d1810032a0ca8377004da0f&amp;redirect_to=https%3A%2F%2Fwww.oneue.com%2F" class="xh-social-item" style="background:url(https://www.oneue.com/wp-content/plugins/wechat-social-login/assets/image/weixin-icon.png) no-repeat transparent;"></a><a title="手机" href="https://www.oneue.com/wp-admin/admin-ajax.php?channel_id=social_mobile&amp;action=xh_social_channel&amp;tab=login_redirect_to_authorization_uri&amp;xh_social_channel=37ddfc50d1&amp;notice_str=2216351833&amp;hash=90a7b93e459e6451f7abf8967999d761&amp;redirect_to=https%3A%2F%2Fwww.oneue.com%2F" class="xh-social-item" style="background:url(https://www.oneue.com/wp-content/plugins/wechat-social-login/assets/image/mobile-icon.png) no-repeat transparent;"></a>               </div>
            </div>
    	    </form>
<script type="text/javascript">
	(function($){
	   $(document).keypress(function(e) {
			if (e.which == 13){
			　　window.xh_social_view_4eabae765c0a2fd821a9fde5dca039300.login();
			}
		});
		window.xh_social_view_4eabae765c0a2fd821a9fde5dca039300={
			loading:false,
			reset:function(){
				$('.xh-alert').empty().css('display','none');
			},
			error:function(msg){
				$('#fields-error-4eabae765c0a2fd821a9fde5dca039300').html('<div class="xh-alert xh-alert-danger" role="alert">'+msg+' </div>').css('display','block');
			},
			success:function(msg){
				$('#fields-error-4eabae765c0a2fd821a9fde5dca039300').html('<div class="xh-alert xh-alert-success" role="alert">'+msg+' </div>').css('display','block');
			},
			login:function(){
				this.reset();
				
				var data={};
				
				       $(document).trigger('on_form_login_4eabae765c0a2fd821a9fde5dca039300_submit',data);
       				if(this.loading){
					return;
				}
				
				$('#btn-login-4eabae765c0a2fd821a9fde5dca039300').attr('disabled','disabled').text('加载中...');
				this.loading=true;

				jQuery.ajax({
		            url: 'https://www.oneue.com/wp-admin/admin-ajax.php?action=xh_social_add_ons_login&tab=login&xh_social_add_ons_login=e787a7a63f&notice_str=2352631318&hash=3feab47e281c35bcd315dadc8b9c906e',
		            type: 'post',
		            timeout: 60 * 1000,
		            async: true,
		            cache: false,
		            data: data,
		            dataType: 'json',
		            complete: function() {
		            	$('#btn-login-4eabae765c0a2fd821a9fde5dca039300').removeAttr('disabled').text('登录');
		            	window.xh_social_view_4eabae765c0a2fd821a9fde5dca039300.loading=false;
		            },
		            success: function(m) {
		            	if(m.errcode==405||m.errcode==0){
		            		window.xh_social_view_4eabae765c0a2fd821a9fde5dca039300.success('登录成功！');   				           

		            		if (window.top&&window.top != window.self) {
			            		var $wp_dialog = jQuery('#wp-auth-check-wrap',window.top.document);
			            		if($wp_dialog.length>0)<?php echo ($wp_dialog["hide();return;"]); ?>
		            	    }
		            		location.href='https://www.oneue.com/';
							return;
						}
		            	
		            	window.xh_social_view_4eabae765c0a2fd821a9fde5dca039300.error(m.errmsg);
		            },
		            error:function(e){
		            	window.xh_social_view_4eabae765c0a2fd821a9fde5dca039300.error('系统内部错误！');
		            	console.error(e.responseText);
		            }
		         });
			}
		};
	})(jQuery);
</script>         <div class="xh-user-register xh-w">
           <a href="https://www.oneue.com/register/">注册</a>|<a href="https://www.oneue.com/retrieve-password/">忘记密码？</a>
        </div>
		<a class="xh-close" href="javascript:void(0);"></a>
	</div>
</div>
    

<script type="text/javascript">
    (function($){
    	$('#wsocial-dialog-login .xh-close,#wsocial-dialog-login .xh-cover').click(function(){
    		$('#wsocial-dialog-login').hide();
    	});
    	window.wsocial_dialog_login_show=function(){
        	$('#wsocial-dialog-login').css('display','block');
				window.__modal_wsocial_login_resize();			
        };
        window.__modal_wsocial_login_resize=function(){
			var $ul =$('#wsocial-dialog-login');
			var width = window.innerWidth,height = window.innerHeight;
			if (typeof width != 'number') { 
			    if (document.compatMode == 'CSS1Compat') {
			        width = document.documentElement.clientWidth;
			        height = document.docuementElement.clientHeight;
			    } else {
			        width = document.body.clientWidth;
			        height = document.body.clientHeight; 
			    }
			}
			$ul.css({
				top:((height - $ul.height()) / 2) + "px",
				left:((width - $ul.width()) / 2) + "px"
			});
		};
    	$(window).resize(function(){
    		window.__modal_wsocial_login_resize();
    	});
    })(jQuery);
</script>
<div class="scroll">
	<div class="back-top"></div>
	<div class="mask"></div>
</div>

<script src="https://www.oneue.com/wp-content/themes/storefront/assets/js/jquery.lazyload.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function() {
    jQuery(".entry-content img").attr("class", 'lazy');
    jQuery("img.lazy").lazyload({
        effect:"fadeIn",
        threshold:800
    });
});

window.onscroll = function() {
    var t = document.documentElement.scrollTop || document.body.scrollTop;
    var scroll = jQuery(".scroll");
    if (t <= 182) {
        //scroll.fadeOut();
		jQuery(".scroll .back-top").fadeOut();
    } else {
        //scroll.fadeIn();
		jQuery(".scroll .back-top").fadeIn();
        if (t >= 3000) {
            scroll.css("bottom", "100px");
        } else {
            scroll.css("bottom", "100px");
        }
    }
};

$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? jQuery('html') : jQuery('body')) : jQuery('html,body');
jQuery(".back-top").click(function() {
    $body.animate({
        scrollTop: jQuery('.storefront-primary-navigation').offset().top
    },
    1000);
});

(function(){
	forScreen();
	window.onresize = function(){
		forScreen();
	}
	function forScreen(){
		var wWidth = jQuery(window).width();
		if(wWidth >= 768){
			jQuery(".customer-service").hover(
				function() {
					jQuery(".qrcode").stop(true, true).fadeIn(0);
				},
				function() {
					jQuery(".qrcode").stop(true, true).fadeOut(0);
					jQuery(".scroll .mask").stop(true, true).fadeOut(0);
					jQuery(".scroll .close").stop(true, true).fadeOut(0);
				}
			);
		}else{
			jQuery(".customer-service").click(
				function() {
					jQuery(".qrcode").fadeIn(0);
					jQuery(".scroll .mask").fadeIn(0);
					jQuery(".scroll .close").fadeIn(0);
				}
			);
			jQuery(".scroll .close").click(
				function() {
					jQuery(".qrcode").fadeOut(0);
					jQuery(".scroll .mask").fadeOut(0);
					jQuery(".scroll .close").fadeOut(0);
				}
			);
		}
	}
})();

</script>

</body></html>