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

<link rel="stylesheet" href="/Public/home/css/iconfont.css">
<script type="text/javascript" src="/Public/js/zooming.js"></script>

<style>
  a{
  	color:#ddd;
  }
  a hover{
  	color:#f5f5f5;
  }
</style>
    <!-- Single Product -->
    <section class="section-wrap pb-20 product-single">
      <div class="container">

        <!-- Breadcrumbs -->
        <ol class="breadcrumbs">
          <li>
            <a href="index-2.html">Home</a>
          </li>
          <li>
            <a href="index-2.html">Women</a>
          </li>
          <li class="active">
            Casual Jacket
          </li>
        </ol>

        <div class="row">

          <div class="col-md-6 product-slider mb-50">

            <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">
      
              <div class="gallery-cell">
                <a href="https://asd.luhanforex.cn/Public/<?php echo ($data['pic1']); ?>" class="lightbox-img">
                  <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic1']); ?>" data-action="zoom" alt="" />
                </a>
              </div>
                 <div class="gallery-cell">
                <a href="https://asd.luhanforex.cn/Public/<?php echo ($data['pic2']); ?>">
                  <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic2']); ?>" data-action="zoom" alt="" />
                </a>
              </div>
                 <div class="gallery-cell">
                <a href="https://asd.luhanforex.cn/Public/<?php echo ($data['pic3']); ?>">
                  <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic3']); ?>" data-action="zoom" alt="" />
                </a>
              </div>
                 <div class="gallery-cell">
                <a href="https://asd.luhanforex.cn/Public/<?php echo ($data['pic4']); ?>">
                  <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic4']); ?>" data-action="zoom" alt="" />
                </a>
              </div>
                 <div class="gallery-cell">
                <a href="https://asd.luhanforex.cn/Public/<?php echo ($data['pic5']); ?>">
                  <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic5']); ?>" data-action="zoom" alt="" />
                </a>
              </div>
                 <div class="gallery-cell">
                <a href="https://asd.luhanforex.cn/Public/<?php echo ($data['pic6']); ?>">
                  <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic6']); ?>" data-action="zoom" alt="" />
                </a>
              </div>

         
            </div> <!-- end gallery main -->

            <div class="gallery-thumbs" id="gallery-thumbs">
              <div class="gallery-cell">
                <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic1']); ?>" alt="" />
              </div>
              <div class="gallery-cell">
                <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic2']); ?>" alt="" />
              </div>
              <div class="gallery-cell">
                <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic3']); ?>" alt="" />
              </div>
              <div class="gallery-cell">
               <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic4']); ?>" alt="" />
              </div>
              <div class="gallery-cell">
               <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic5']); ?>" alt="" />
              </div>
                 <div class="gallery-cell">
               <img src="https://asd.luhanforex.cn/Public/<?php echo ($data['pic6']); ?>" alt="" />
              </div>
            </div> <!-- end gallery thumbs -->

          </div> <!-- end col img slider -->

          <div class="col-md-6 product-single">
            <h1 class="product-single__title uppercase">Casual jacket</h1>


            <span class="product-single__price">
              <ins>
                <span class="amount">$17.99</span>
              </ins>
            </span>            

            <div class="colors clearfix">
              <span class="colors__label">SHOP: <span class="colors__label-selected"><a href="https://asd.luhanforex.cn/index.php/home/Shop">Fadaed Blue</a></span></span>
            </div>
            
            <div class="colors clearfix">
              <span class="colors__label">SHARE THIS: <a href="#"><i class="icon iconfont icon-facebook" style="font-size:24px;margin-right:24px;"></i></a><a href="#"><i class="icon iconfont icon-twitter" style="font-size:28px;margin-right:24px;"></i></a><a href="#"><i class="icon iconfont icon-weibo" style="font-size:28px;margin-right:24px;"></i></a></span>
            </div>

            <div class="size-quantity clearfix">
              <div class="size">
                <label>TYPE</label>
                <select name="size" id="size__select" class="size__select">
                  <option value="xs">XS</option>
                  <option value="s">S</option>
                  <option value="m">M</option>
                  <option value="l">L</option>
                  <option value="xl">XL</option>
                </select>
              </div>
              
            </div>            

            <div class="row row-10 product-single__actions clearfix">
              <div class="col">
                <a href="#" class="btn btn-lg btn-color product-single__add-to-cart">
                  <i class="ui-bag"></i>
                  <span>Add to Cart</span>
                </a>
              </div>
              <div class="col">
                <a href="/index.php/Home/Goods/getgoods" class="btn btn-lg btn-dark product-single__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Get it</span>
                </a>
              </div>
            </div>            

            <div class="product_meta">
              <ul>
                <li>
                  <span class="product-code">Product Code: <span>111763</span></span>
                </li>
                <li>
                  <span class="product-material">Material: <span>Cotton 100%</span></span>
                </li>
                <li>
                  <span class="product-country">Country: <span>Made in Canada</span></span>
                </li>
              </ul>                              
            </div>

            <!-- Accordion -->
            <div class="accordion mb-50" id="accordion">
              <div class="accordion__panel">
                <div class="accordion__heading" id="headingOne">
                  <a data-toggle="collapse" href="#collapseOne" class="accordion__link accordion--is-open" aria-expanded="true" aria-controls="collapseOne">Description<span class="accordion__toggle">&nbsp;</span>
                  </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion" role="tabpanel" aria-labelledby="headingOne">
                  <div class="accordion__body">
                    Namira is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine.
                  </div>
                </div>
              </div>

              <div class="accordion__panel">
                <div class="accordion__heading" id="headingTwo">
                  <a data-toggle="collapse" href="#collapseTwo" class="accordion__link accordion--is-closed" aria-expanded="false" aria-controls="collapseTwo">Information<span class="accordion__toggle">&nbsp;</span>
                  </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="accordion__body">
                    <table class="table shop_attributes">
                      <tbody>
                        <tr>
                          <th>Size:</th>
                          <td>EU 41 (US 8), EU 42 (US 9), EU 43 (US 10), EU 45 (US 12)</td>
                        </tr>
                        <tr>
                          <th>Colors:</th>
                          <td>Violet, Black, Blue</td>
                        </tr>
                        <tr>
                          <th>Fabric:</th>
                          <td>Cotton (100%)</td>
                        </tr>                                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="accordion__panel">
                <div class="accordion__heading" id="headingThree">
                  <a data-toggle="collapse" href="#collapseThree" class="accordion__link accordion--is-closed" aria-expanded="false" aria-controls="collapseThree">Reviews<span class="accordion__toggle">&nbsp;</span>
                  </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingThree">
                  <div class="accordion__body">
                    <div class="reviews">
                      <ul class="reviews__list">
                        <li class="reviews__list-item">
                          <div class="reviews__body">
                            <div class="reviews__content">
                              <p class="reviews__author"><strong>Alexander Samokhin</strong> - May 6, 2017 at 12:48 pm</p>
                              <div class="rating">
                                <a href="#"></a>
                              </div>
                              <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                            </div>
                          </div>
                        </li>

                        <li class="reviews__list-item">
                          <div class="reviews__body">
                            <div class="reviews__content">
                              <p class="reviews__author"><strong>Christopher Robins</strong> - May 7, 2014 at 12:48 pm</p>
                              <div class="rating">
                                <a href="#"></a>
                              </div>
                              <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                            </div>
                          </div>
                        </li>

                      </ul>         
                    </div> <!--  end reviews -->
                  </div>
                </div>
              </div>
            </div> <!-- end accordion -->

          </div> <!-- end col product description -->
        </div> <!-- end row -->
       
      </div> <!-- end container -->
    </section> <!-- end single product -->


    <!-- Related Products -->
    <section class="section-wrap pt-0 pb-40">
      <div class="container">

        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line">
              Shop the look
            </h2>
          </div>
        </div>

        <div class="row row-8">

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link">
                <img src="/Public/home/img/shop/product_1.jpg" alt="" class="product__img">
                <img src="/Public/home/img/shop/product_back_1.jpg" alt="" class="product__img-back">
              </a>
              <div class="product__actions">
                <a href="#" class="product__quickview">
                  <i class="ui-eye"></i>
                  <span>Quick View</span>
                </a>
                <a href="#" class="product__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Wishlist</span>
                </a>
              </div>
            </div>

            <div class="product__details">
              <h3 class="product__title">
                <a href="single-product.html">Joeby Tailored Trouser</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$17.99</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link">
                <img src="/Public/home/img/shop/product_9.jpg" alt="" class="product__img">
                <img src="/Public/home/img/shop/product_back_9.jpg" alt="" class="product__img-back">
              </a>
              <div class="product__actions">
                <a href="#" class="product__quickview">
                  <i class="ui-eye"></i>
                  <span>Quick View</span>
                </a>
                <a href="#" class="product__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Wishlist</span>
                </a>
              </div>
            </div>

            <div class="product__details">
              <h3 class="product__title">
                <a href="single-product.html">Men’s Belt</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$9.90</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link">
                <img src="/Public/home/img/shop/product_10.jpg" alt="" class="product__img">
                <img src="/Public/home/img/shop/product_back_10.jpg" alt="" class="product__img-back">
              </a>
              <div class="product__actions">
                <a href="#" class="product__quickview">
                  <i class="ui-eye"></i>
                  <span>Quick View</span>
                </a>
                <a href="#" class="product__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Wishlist</span>
                </a>
              </div>
            </div>

            <div class="product__details">
              <h3 class="product__title">
                <a href="single-product.html">Sport Hi Adidas</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$29.00</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link">
                <img src="/Public/home/img/shop/product_2.jpg" alt="" class="product__img">
                <img src="/Public/home/img/shop/product_back_2.jpg" alt="" class="product__img-back">
              </a>
              <div class="product__actions">
                <a href="#" class="product__quickview">
                  <i class="ui-eye"></i>
                  <span>Quick View</span>
                </a>
                <a href="#" class="product__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Wishlist</span>
                </a>
              </div>
            </div>

            <div class="product__details">
              <h3 class="product__title">
                <a href="single-product.html">Denim Hooded</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$30.00</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link">
                <img src="/Public/home/img/shop/product_3.jpg" alt="" class="product__img">
                <img src="/Public/home/img/shop/product_back_3.jpg" alt="" class="product__img-back">
              </a>
              <div class="product__actions">
                <a href="#" class="product__quickview">
                  <i class="ui-eye"></i>
                  <span>Quick View</span>
                </a>
                <a href="#" class="product__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Wishlist</span>
                </a>
              </div>
            </div>

            <div class="product__details">
              <h3 class="product__title">
                <a href="single-product.html">Mint Maxi Dress</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$17.99</span>
              </ins>
              <del>
                <span>$30.00</span>
              </del>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link">
                <img src="/Public/home/img/shop/product_4.jpg" alt="" class="product__img">
                <img src="/Public/home/img/shop/product_back_4.jpg" alt="" class="product__img-back">
              </a>
              <div class="product__actions">
                <a href="#" class="product__quickview">
                  <i class="ui-eye"></i>
                  <span>Quick View</span>
                </a>
                <a href="#" class="product__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Wishlist</span>
                </a>
              </div>
            </div>

            <div class="product__details">
              <h3 class="product__title">
                <a href="single-product.html">White Flounce Dress</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$15.99</span>
              </ins>
              <del>
                <span>$27.00</span>
              </del>
            </span>
          </div> <!-- end product -->
    
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end related products -->

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