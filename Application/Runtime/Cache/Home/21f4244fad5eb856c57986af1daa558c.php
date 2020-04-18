<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="<?=$meta_keywords?>"/>
		<meta name="description" content="<?=$meta_description?>"/>
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title></title>
		<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
		<link href="/favicon.ico" rel="bookmark icon" />
		<link rel="stylesheet" href="http://suan.diankai.me/Assets/web/css/main.css">
		<script type="text/javascript" src="http://suan.diankai.me/Assets/web/script/jquery.js"></script>
		<script type="text/javascript" src="http://suan.diankai.me/Assets/web/script/main.js"></script>
		<script type="text/javascript" src="http://suan.diankai.me/Assets/web/script/respond.js"></script>
		<script type="text/javascript" src="http://suan.diankai.me/Assets/web/script/common.js"></script>
		<script type="text/javascript" src="http://suan.diankai.me/Assets/web/script/dialog.js"></script>
		<script type="text/javascript" src="http://suan.diankai.me/Assets/web/script/datepicker.js"></script>
		<link rel="stylesheet" href="http://suan.diankai.me/Assets/web/css/other.css">
  		<script src="http://cdn.ronghub.com/RongIMLib-2.3.0.min.js"></script>
  <style>
	.bg1{width: 40px;background-color: white;color: red;font-size: 12px;}
</style>
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
<link rel="stylesheet" id="ywcmap_prettyPhoto_css-css" href="//www.oneue.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css" type="text/css" media="all">
<link rel="stylesheet" id="ywcmap-frontend-css" href="https://www.oneue.com/wp-content/plugins/yith-woocommerce-customize-myaccount-page/assets/css/ywcmap-frontend.css" type="text/css" media="all">
<style id="ywcmap-frontend-inline-css" type="text/css">

				#my-account-menu .logout a,
				#my-account-menu-tab .logout a {
					color:#ffffff;
					background-color:#c0c0c0;
				}
				#my-account-menu .logout:hover a,
				#my-account-menu-tab .logout:hover a {
					color:#ffffff;
					background-color:#333333;
				}
				.myaccount-menu li a {
					color:#777777;
				}
				.myaccount-menu li:hover a,
				.myaccount-menu li.active a {
					color:#000000;
				}
			
</style>
<link rel="stylesheet" id="font-awesome-css" href="https://www.oneue.com/wp-content/plugins/yith-woocommerce-customize-myaccount-page/assets/css/font-awesome.min.css" type="text/css" media="all">
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

	<style>
		/*@media (max-width: 600px) {
		#logop{
			display: none;
		}
		}*/
		@media (max-width: 600px) {
		#cp1{width: 100%;display: block; background-color: rgb(240,240,240);height: 7%;position: fixed;top: 93%;z-index: 100;border-top: 1px solid rgb(220,220,220);display: flex;}
		.cp2{width: 16%;margin-left: 3%;}
		.cp3{height: 100%;width: 100%;}
		.cp4{height: 60%;width: 100%;margin-top:8%;}
		.cp5{font-size: 12px;color: rgb(144,144,144);width: 100%;text-align: center;}
		}
		#cp1{display: none;}
	</style>
	</head>

	<body>
<div class="container">
	<div class="panel border-blue radius-none xl12 xs12 xm8 xb8">
		<div class="panel-head text-white border-blue bg-blue radius-none" style="padding: 10px;">
			<span class="icon-comments text-big"></span> 
<input type="hidden" id="shopid" value="<?php echo ($shopid); ?>">
          <input type="hidden" id="pid" value="<?php echo ($pid); ?>">
                    <input type="hidden" id="us" value="">




			
			<div style="clear:none;height:10px;"></div>
		</div>
		<div class="panel-body bg-white padding-small">
			<div id="msg_view" style="height: 360px; border: #ddd solid 1px; padding:5px;overflow: auto;">
              <div id="" class="margin-bottom">
                
                <div class="icon-user">
                  
               
	<table >

		<thead>
			<tr>
									<th class="order-number"><span class="nobr">商品名称</span></th>
									<th class="order-date"><span class="nobr">用户名称</span></th>
									<th class="order-status"><span class="nobr">留言内容</span></th>
									<th class="order-total"><span class="nobr">留言时间</span></th>
              						<th class="order-total"><span class="nobr">留言回复</span></th>

				
							</tr>
		</thead>

		<tbody>
							  <?php if(is_array($data)): foreach($data as $key=>$data): ?><tr class="order" >
											<td class="order-number" data-title="商品名称">
								             		<?php echo ($data['sname']); ?>			
													</td>
                              <td class="order-number" data-title="用户名称">
								             		<?php echo ($data['me']); ?>			
													</td>
                              
                              <td class="order-number" data-title="留言内容">
								             		<?php echo ($data['content']); ?>			
													</td>
                             
                            <td class="order-date" data-title="日期">
											<time datetime="2018-03-19T00:21:07+00:00"><?php echo ($data['addtime']); ?></time>

													</td>
                                       
                            <td class="order-date" data-title="留言回复">
										   										     <a href="javascript:void(0)" class="button pay" onclick=oks('<?php echo ($data["me"]); ?>')>回复</a>


													</td>
							
                                              
									</tr><?php endforeach; endif; ?>
					</tbody>
	</table>
                
                </div> </div>
				<div id="msg_end" style="height:0px; overflow:hidden"></div>
			</div>
			<div style="height: 100px;margin-top: 5px; overflow: hidden;">
				<textarea id="content_talk_input" class="border-blue x10" style="height: 85px; float:left; resize: none;box-shadow: 1px 1px 5px #aaa inset; border: #0ae solid 1px;width:75%;"></textarea>
				<button id="send_btn" type="button" class="button bg-blue x2 radius-none text-large" style="height: 90px;" onclick="savestat()">
				SEND
				</button>

			</div>
		</div>
	</div>

</div>

	</body>
  	<script src="/Public/js/jquery.1.7.2.min.js"></script>
<script type="text/javascript">
  
          function savestat(){
            var shopid=$("#shopid").val();
            var pid=$("#pid").val();
    
            var text=$("#content_talk_input").val();
            
              var us=$("#us").val();
            if(!us){
                var us =0;
               }
                      



            

            $.post('/index.php/Home/chat/addly',{shopid:shopid,pid:pid,text:text,us:us},function(data){
              //alert(data)
              if(data==1){

                    location.reload();
                 }else{
                 alert("网络出了点问题···");

                 }

            })
  }
  
            function oks(ok,us){
           if(ok){
              $("#content_talk_input").html('<?php echo ($_SESSION['username']); ?>'+"回复"+ok+":");
               $("#us").val(ok);
              
              }
  }
</script>

</html>