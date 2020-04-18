<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<!-- Mirrored from yanshi.sucaihuo.com/modals/41/4112/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 05:56:07 GMT -->
<head>
  <title>Home</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Questrial:400%7CMontserrat:300,400,700,700i' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="/Public/home/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/Public/home/css/font-icons.css" />
  <link rel="stylesheet" href="/Public/home/css/style.css" />
  <link rel="stylesheet" href="/Public/home/css/color.css" />

</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>
  

  <!-- Mobile Sidenav -->    
  <header class="sidenav" id="sidenav">
    <!-- Search -->
    <div class="sidenav__search-mobile">
      <form method="get" class="sidenav__search-mobile-form">
        <input type="search" class="sidenav__search-mobile-input" placeholder="Search..." aria-label="Search input">
        <button type="submit" class="sidenav__search-mobile-submit" aria-label="Submit search">
          <i class="ui-search"></i>
        </button>
      </form>
    </div>

    <nav>
      <ul class="sidenav__menu" role="menubar">
        <!--<li>
          <a href="#" class="sidenav__menu-link">Men</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="#" class="sidenav__menu-link">T-shirt</a></li>
            <li><a href="#" class="sidenav__menu-link">Hoodie &amp; Jackets</a></li>
            <li><a href="#" class="sidenav__menu-link">Suits</a></li>
            <li><a href="#" class="sidenav__menu-link">Shorts</a></li>
          </ul>
        </li>





          <?php if(is_array($maxfls)): $i = 0; $__LIST__ = $maxfls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$er): $mod = ($i % 2 );++$i; if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?><div class="col nav__megamenu-item">
                            <a href="/index.php/Home/shop/index" class="nav__megamenu-title"><?php echo ($ss['fname']); ?></a>
                            <ul class="nav__megamenu-list">
                              <?php if(is_array($ss)): foreach($ss as $key=>$ce): if(is_array($ce)): foreach($ce as $key=>$as): ?><li><a href="/index.php/Home/shop/index"><?php echo ($as['fname']); ?></a></li><?php endforeach; endif; endforeach; endif; ?>
                            </ul>
                          </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
-->
       <?php if(is_array($maxfl)): $i = 0; $__LIST__ = $maxfl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$maxfls): $mod = ($i % 2 );++$i;?><li>
          <a href="#" class="sidenav__menu-link"><?php echo ($maxfls['fname']); ?></a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
          <?php if(is_array($maxfls)): $i = 0; $__LIST__ = $maxfls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$er): $mod = ($i % 2 );++$i; if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?><li>
              <a href="#" class="sidenav__menu-link"><?php echo ($ss['fname']); ?></a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li>           
                  <?php if(is_array($ss)): foreach($ss as $key=>$ce): if(is_array($ce)): foreach($ce as $key=>$as): ?><a href="#" class="sidenav__menu-link"><?php echo ($as['fname']); ?></a><?php endforeach; endif; endforeach; endif; ?>
                </li>
              </ul>
            </li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            

      
        
            
          </ul>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
        
      
      </ul>
    </nav>
  </header> <!-- end mobile sidenav -->


  <main class="main oh" id="main">

    <!-- Navigation -->
    <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">

          <!-- Top Bar -->
          <div class="top-bar d-none d-lg-flex">

            <!-- Currency / Language -->
            <ul class="top-bar__currency-language">
              <li class="top-bar__language">
                <a href="#">English</a>
                <div class="top-bar__language-dropdown">
                  <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Spanish</a></li>
                    <li><a href="#">German</a></li>
                    <li><a href="#">Chinese</a></li>
                  </ul>
                </div>
              </li>
              <li class="top-bar__currency">
                <a href="#">USD</a>
                <div class="top-bar__currency-dropdown">
                  <ul>
                    <li><a href="#">USD</a></li>
                    <li><a href="#">EUR</a></li>
                  </ul>
                </div>
              </li>              
            </ul>

            <!-- Promo -->
            <p class="top-bar__promo text-center">Free shipping on orders over $50</p>

            <!-- Sign in / Wishlist / Cart -->
            <div class="top-bar__right">

              <!-- Sign In -->
             <?php if(!isset($_SESSION['username'])): ?><a href="/index.php/Home/login/login.html" class="top-bar__item top-bar__sign-in"><i class="ui-user"></i>Sign In</a>
   <?php else: ?>
   <a href="/index.php/Home/login/login.html" class="top-bar__item top-bar__sign-in"><i class="ui-user"></i>Welcome,<?php echo (session('username')); ?></a><?php endif; ?>
             
           

              <!-- Wishlist -->
              <a href="#" class="top-bar__item"><i class="ui-heart"></i></a>

              <div class="top-bar__item nav-cart">                
                <a href="#">
                  <i class="ui-bag"></i>(2)
                </a>
                <div class="nav-cart__dropdown">
                  <div class="nav-cart__items">

                    <div class="nav-cart__item clearfix">
                      <div class="nav-cart__img">
                        <a href="#">
                          <img src="/Public/home/img/shop/cart_small_1.jpg" alt="">
                        </a>
                      </div>
                      <div class="nav-cart__title">
                        <a href="#">
                          Classic White Tailored Shirt
                        </a>
                        <div class="nav-cart__price">
                          <span>1 x</span>
                          <span>19.99</span>
                        </div>
                      </div>
                      <div class="nav-cart__remove">
                        <a href="#"><i class="ui-close"></i></a>
                      </div>
                    </div>

                    <div class="nav-cart__item clearfix">
                      <div class="nav-cart__img">
                        <a href="#">
                          <img src="/Public/home/img/shop/cart_small_2.jpg" alt="">
                        </a>
                      </div>
                      <div class="nav-cart__title">
                        <a href="#">
                          Sport Hi Adidas
                        </a>
                        <div class="nav-cart__price">
                          <span>1 x</span>
                          <span>29.00</span>
                        </div>
                      </div>
                      <div class="nav-cart__remove">
                        <a href="#"><i class="ui-close"></i></a>
                      </div>
                    </div>

                  </div> <!-- end cart items -->

                  <div class="nav-cart__summary">
                    <span>Cart Subtotal</span>
                    <span class="nav-cart__total-price">$1799.00</span>
                  </div>

                  <div class="nav-cart__actions mt-20">
                    <a href="shop-.html#" class="btn btn-md btn-light"><span>View Cart</span></a>
                    <a href="shop-.html#" class="btn btn-md btn-color mt-10"><span>Proceed to Checkout</span></a>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- end top bar -->

          <div class="flex-parent">

            <!-- Mobile Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open mobile menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> <!-- end mobile menu button -->

            <!-- Logo -->
            <a href="/index.php/Home/index/index" class="logo">
              <img class="logo__img" src="/Public/home/img/logo_light.png" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">
                
                
                  <!--     <?php if(is_array($maxfl)): $i = 0; $__LIST__ = $maxfl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$maxfls): $mod = ($i % 2 );++$i;?><li class="nav__dropdown active">
                  <a href="catalog.html"><?php echo ($maxfls['fname']); ?></a>
                  <ul class="nav__dropdown-menu">
                    <?php if(is_array($maxfls)): $i = 0; $__LIST__ = $maxfls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$er): $mod = ($i % 2 );++$i; if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?><li><a href="#"><?php echo ($ss['fname']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>-->

 <?php if(is_array($maxfl)): $i = 0; $__LIST__ = $maxfl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$maxfls): $mod = ($i % 2 );++$i;?><li class="nav__dropdown">
                  <a href="/index.php/Home/shop/index"><?php echo ($maxfls['fname']); ?></a>
                  <ul class="nav__dropdown-menu nav__megamenu">
                    <li>
                      <div class="nav__megamenu-wrap">
                             
                        <div class="row">
          <?php if(is_array($maxfls)): $i = 0; $__LIST__ = $maxfls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$er): $mod = ($i % 2 );++$i; if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?><div class="col nav__megamenu-item">
                            <a href="/index.php/Home/shop/index" class="nav__megamenu-title"><?php echo ($ss['fname']); ?></a>
                            <ul class="nav__megamenu-list">
                              <?php if(is_array($ss)): foreach($ss as $key=>$ce): if(is_array($ce)): foreach($ce as $key=>$as): ?><li><a href="/index.php/Home/shop/index"><?php echo ($as['fname']); ?></a></li><?php endforeach; endif; endforeach; endif; ?>
                            </ul>
                          </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                      <!--  <div class="col nav__megamenu-item">
                            <a href="#"><img src="/Public/home/img/shop/megamenu_banner.png" alt=""></a>
                          </div>
--->  
              
                           

                        </div>
                                 
                      </div>
                                         
                    </li>
                  </ul>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

                
     

              </ul> <!-- end menu -->

            </nav> <!-- end nav-wrap -->


            <!-- Search -->
            <div class="flex-child nav__search d-none d-lg-block">
              <form method="get" class="nav__search-form">
                <input type="search" class="nav__search-input" placeholder="Search">
                <button type="submit" class="nav__search-submit">
                  <i class="ui-search"></i>
                </button>
              </form>
            </div>


            <!-- Mobile Wishlist -->
            <a href="#" class="nav__mobile-wishlist d-lg-none" aria-label="Mobile wishlist">
              <i class="ui-heart"></i>
            </a>

            <!-- Mobile Cart -->
            <a href="#" class="nav__mobile-cart d-lg-none">
              <i class="ui-bag"></i>
              <span class="nav__mobile-cart-amount">(2)</span>
            </a>

            
         
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->

<div class="container text-center" style="width:70%;vertical-align: middle;margin-top:5%;margin-bottom:5%;">
<table class="table table-striped table-bordered table-hover ">
      <thead>
        <tr>
          <th>商品</th>
          <th>描述</th>
          <th>规格</th>
          <th>数量</th>
          <th>金额</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>运动衫</td>
          <td>蓬袖运动衫</td>
          <td>蓝色</td>
          <td>1</td>
          <td>$99</td>
        </tr>
      </tbody>

    </table>
  <tfoot>
    <tr>
      <th colspan="6" class="order-items-total" scope="row">商品总数：</th>
      <td class="order-items-total" headers="priceHeader">¥ 99.00</td>
    </tr>
    <tr>
      <th class="order-delivery-costs" colspan="6" scope="row">预计寄送费用:</th>
      <td class="order-delivery-costs" headers="priceHeader">¥ 0.00</td>
    </tr>
    <tr class="total">
      <th colspan="6" scope="row"><strong>总金额:</strong></th>
      <td class="order-total" headers="priceHeader">¥ 99.00</td>
    </tr>
    <tr class="order-vat-costs">
      <th colspan="6" scope="row"><span class="offleft">销售税</span></th>
      <td headers="priceHeader"><em>* 含税</em></td>
    </tr>
  </tfoot>
  <br>
  <button class="btn btn-primary" style="margin-top:5%;">Continue</button>
</div>
   <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer__widgets">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="widget widget__about">
                <h4 class="widget-title white">about us</h4>
                <p class="widget__about-text">Namira is a very slick and clean e-commerce template with endless possibilities.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="widget widget__newsletter">
                <h4 class="widget-title white">get exclusive offers &amp; updates</h4>

                <form class="mc4wp-form">
                  <div class="mc4wp-form-fields">
                    <p><input type="email" placeholder="Please enter your email address" aria-label="Newsletter input"></p>
                    <p><input type="submit" value="Subscribe"></p>
                  </div>
                </form>

                <div class="socials socials--white mt-20">
                  <a href="#" class="facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                  <a href="#" class="twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                  <a href="#" class="snapchat" aria-label="snapchat"><i class="ui-snapchat"></i></a>
                  <a href="#" class="instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                  <a href="#" class="pinterest" aria-label="pinterest"><i class="ui-pinterest"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <div class="widget widget_nav_menu">
                <h4 class="widget-title white">help</h4>
                <ul>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Tract Order</a></li>
                  <li><a href="#">Returns &amp; Refunds</a></li>
                  <li><a href="#">Private Policy</a></li>
                  <li><a href="#">Shipping Info</a></li>
                  <li><a href="#">FAQ</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <div class="widget widget_nav_menu">
                <h4 class="widget-title white">information</h4>
                <ul>
                  <li><a href="#">Our Stores</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Delivery Info</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Site Map</a></li>
                  <li><a href="#">Namira Reviews</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>    
      </div> <!-- end container -->

      <div class="footer__bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-sm-center">
              <span class="copyright">
                Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="/">shop</a>
              </span>
            </div>

            <div class="col-md-6 footer__payment-systems text-right text-sm-center mt-sml-10">
              <i class="ui-paypal"></i>
              <i class="ui-visa"></i>
              <i class="ui-mastercard"></i>
              <i class="ui-discover"></i>
              <i class="ui-amex"></i>
            </div>
          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="/Public/home/js/jquery.min.js"></script>
  <script type="text/javascript" src="/Public/home/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/Public/home/js/easing.min.js"></script>
  <script type="text/javascript" src="/Public/home/js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="/Public/home/js/owl-carousel.min.js"></script>  
  <script type="text/javascript" src="/Public/home/js/flickity.pkgd.min.js"></script>
  <script type="text/javascript" src="/Public/home/js/modernizr.min.js"></script>
  <script type="text/javascript" src="/Public/home/js/scripts.js"></script>

</body>

<!-- Mirrored from yanshi.sucaihuo.com/modals/41/4112/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 05:56:48 GMT -->
</html>