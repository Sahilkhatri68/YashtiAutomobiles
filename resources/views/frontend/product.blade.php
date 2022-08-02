@extends('layouts.main')

@section('main-container')

<section class="titlebar">
      <div class="row">
        <div class="large-12 columns">
          <h1 id="page-title" class="title">Sneakers</h1>
        </div>
      </div>
    </section>
    <div class="row shop-main-content">
      <div class="large-3 small-12 medium-12 columns has-image1 shop-sidebar">
        <div id="secondary" class="widget-area">
          <div class="first front-widgets">
            <div id="woocommerce_product_search-2" class="widget woocommerce widget_product_search shop-widgets">
              <form role="search" method="get" class="woocommerce-product-search" action="">
                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label> 
                <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products…" value="" name="s"> 
                <button type="submit" value="Search">Search</button> 
                <input type="hidden" name="post_type" value="product">
              </form>
            </div>
                                <!-- product categories -->
            <div id="woocommerce_product_categories-1" class="widget woocommerce widget_product_categories shop-widgets">
              <h4 class="widget-title">Product categories</h4>
              <ul class="product-categories">
                <li class="cat-item cat-item-38">
                  <a href="">Antiques</a>
                </li>
                <li class="cat-item cat-item-32">
                  <a href="">Electronics</a>
                </li>
                <li class="cat-item cat-item-29">
                  <a href="">Gaming</a>
                </li>
                <li class="cat-item cat-item-31 current-cat">
                  <a href="">Sneakers</a>
                </li>
                <li class="cat-item cat-item-30">
                  <a href="">Stamps</a>
                </li>
                <li class="cat-item cat-item-28">
                  <a href="">Vehicles</a>
                </li>
                <li class="cat-item cat-item-25">
                  <a href="">Watches</a>
                </li>
              </ul>
            </div>
                        <!-- product category end -->

            <div id="block-5" class="widget widget_block shop-widgets" style="border:1px solid black;">
                <div data-block-name="woocommerce/price-filter" data-show-input-fields="false"
                    data-show-filter-button="true" class="wp-block-woocommerce-price-filter is-loading"
                    data-showinputfields="false" data-showfilterbutton="true" data-heading="Filter by price"
                    data-heading-level="4">
                </div>
            </div>

            <div id="woocommerce_products-2" class="widget woocommerce widget_products shop-widgets">
              <h4 class="widget-title">Products</h4>
              <ul class="product_list_widget">
                <li>
                  <a href="">
                  <img width="600" height="414" src="frontend/images/braden-hopkins-b4sSOgZrkQ4-unsplash-scaled-600x414.jpg"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"> 
                  <span class="product-title">Sneaker Adidas</span></a>
                    <span class="auction-price starting-bid" data-auction-id="11010" data-bid="" data-status="running">
                        <span class="current auction">Starting bid:</span> 
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>10.00
                        </span>
                    </span>
                </li>
                <li>
                  <a href="">
                  <img width="600" height="414" src="frontend/images/photo-1597248881519-db089d3744a5-600x414.jpg"
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"> 
                  <span class=
                  "product-title">Nike Sneaker</span></a>
                  <span class="auction-price starting-bid"
                  data-auction-id="11008" data-bid="" data-status=
                  "running"><span class="current auction">Starting
                  bid:</span> <span class=
                  "woocommerce-Price-amount amount"><span class=
                  "woocommerce-Price-currencySymbol">$</span>10.00</span>
                </span>
                </li>
                
              </ul>
            </div>
                        <!-- recent reviews start -->
            <div id="woocommerce_recent_reviews-1" class="widget woocommerce widget_recent_reviews shop-widgets">
              <h4 class="widget-title">Recent reviews</h4>
              <ul class="product_list_widget">
                <li>
                  <a href="">
                  <img width="600" height="414" src="frontend/images/pascal-m-RtoBaMvSAbE-unsplash-600x414.jpg"
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                  alt="" loading="lazy"> <span class=
                  "product-title">Logitech keyboard</span></a>
                  <div class="star-rating" role="img" aria-label=
                  "Rated 4 out of 5">
                    <span style="width:80%">Rated <strong class="rating">4</strong> out of 5</span>
                  </div><span class="reviewer">by Alex Ali</span>
                </li>
                <li>
                  <a href="">
                  <img width="600" height="414" src=
                  "frontend/images/Mercedes-EQC-1-Mercedes-Benz-600x414.jpg"
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                  alt="" loading="lazy"> <span class=
                  "product-title">Mercedes EQC 2020</span></a>
                  <div class="star-rating" role="img" aria-label=
                  "Rated 5 out of 5">
                    <span style="width:100%">Rated <strong class=
                    "rating">5</strong> out of 5</span>
                  </div><span class="reviewer">by Alex Ali</span>
                </li>
                <li>
                    <a href="">
                        <img width="600" height="414" src="frontend/images/dustyroze-Xc1LXlXiLUs-unsplash-600x414.jpg"
                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"> 
                        <span class="product-title">Blue and White Ceramic Plate</span>
                    </a>
                  <div class="star-rating" role="img" aria-label="Rated 5 out of 5">
                    <span style="width:100%">Rated <strong class="rating">5</strong> out of 5</span>
                  </div>
                  <span class="reviewer">by Big Auction Service</span>
                </li>
              </ul>
            </div>
                        <!-- recent reviews end -->
          </div><!-- .first -->
        </div><!-- #secondary -->
      </div>
        <div class="large-9 small-12 medium-12 columns has-images">
                            <!-- shwoing all 8 result -->
            <p class="woocommerce-result-count" style="width:35%">Showing all 8 results</p>
                            <!-- end -->

            <nav class="gridlist-toggle" style="margin-top:-40px;">
                <a href="#" id="show_grid" class="active" title="Grid view">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path fill="#0033ff" d=
                                    "M208,0H16C7.163,0,0,7.163,0,16v192c0,8.837,7.163,16,16,16h192c8.837,0,16-7.163,16-16V16C224,7.163,216.837,0,208,0z M192,192H32V32h160V192z">
                                    </path>
                                    <path fill="#0033ff" d=
                                    "M496,0H304c-8.837,0-16,7.163-16,16v192c0,8.837,7.163,16,16,16h192c8.837,0,16-7.163,16-16V16 C512,7.163,504.837,0,496,0z M480,192H320V32h160V192z">
                                    </path>
                                    <path fill="#0033ff" d=
                                    "M208,288H16c-8.837,0-16,7.163-16,16v192c0,8.837,7.163,16,16,16h192c8.837,0,16-7.163,16-16V304 C224,295.163,216.837,288,208,288z M192,480H32V320h160V480z">
                                    </path>
                                    <path fill="#0033ff" d=
                                    "M496,288H304c-8.837,0-16,7.163-16,16v192c0,8.837,7.163,16,16,16h192c8.837,0,16-7.163,16-16V304 C512,295.163,504.837,288,496,288z M480,480H320V320h160V480z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <em>Grid view</em>
                </a> 
                <a href="#" id="show_list" title="List view">
                <svg height="512pt" viewbox="0 -52 512.00001 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#0033ff" d=
                    "m0 113.292969h113.292969v-113.292969h-113.292969zm30.003906-83.289063h53.289063v53.289063h-53.289063zm0 0">
                    </path>
                    <path fill="#0033ff" d=
                    "m149.296875 0v113.292969h362.703125v-113.292969zm332.699219 83.292969h-302.695313v-53.289063h302.695313zm0 0">
                    </path>
                    <path fill="#0033ff" d=
                    "m0 260.300781h113.292969v-113.292969h-113.292969zm30.003906-83.292969h53.289063v53.289063h-53.289063zm0 0">
                    </path>
                    <path fill="#0033ff" d=
                    "m149.296875 260.300781h362.703125v-113.292969h-362.703125zm30.003906-83.292969h302.695313v53.289063h-302.695313zm0 0">
                    </path>
                    <path fill="#0033ff" d=
                    "m0 407.308594h113.292969v-113.296875h-113.292969zm30.003906-83.292969h53.289063v53.289063h-53.289063zm0 0">
                    </path>
                    <path fill="#0033ff" d=
                    "m149.296875 407.308594h362.703125v-113.296875h-362.703125zm30.003906-83.292969h302.695313v53.289063h-302.695313zm0 0">
                    </path>
                </svg> 
                <em>List view</em></a>
            </nav>
                <!-- default sorting start -->
            <form class="" method="" style="width:40%; margin-top:-50px; float:right;">
                <select name="orderby" class="orderby" aria-label="Shop order">
                    <option value="menu_order" selected='selected'>Default sorting</option>
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="date">Sort by latest</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                    <option value="bid_asc">Sort by current bid: Low to high</option>
                    <option value="bid_desc">Sort by current bid: High to low</option>
                    <option value="auction_end">Sort auction by ending soonest</option>
                    <option value="auction_started">Sort auction by recently started</option>
                    <option value="auction_activity">Sort auction by most active</option>
                </select> 
                <input type="hidden" name="paged" value="1">
            </form>
                    <!-- default sorting end -->
            <ul class="products" style="list-style:none; margin-top:20px; display:flex; width:100%">
                <li style="width:30%; display:inline-block" class="">
                    <figure class='product_item_thumbnail'>
                        <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <img width="500" height="414" src="frontend/images/paul-volkmer-updW-QUccFE-unsplash-600x414.jpg"
                            class="" style="border-radius:10px 10px 0px 0px;" alt="" loading="">
                        </a>
                    </figure>
                    <div class="wd-product__content" style="background:#f4f5fc; border-radius:0px 0px 10px 10px;">
                        <div class="wd-product__head">
                            <div class="wd-product__before-title">
                                <div>Sneakers</div>
                            </div>
                            <div class="wd-product__title">
                                <h2><a href="">AIR 1 MID – Baskets montantes</a></h2>
                            </div>
                            <div class="wd-product__after-title"></div>
                        </div>
                        <div class="wd-product__details"></div>
                        <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                            <div>
                                <span class="auction-price starting-bid"
                                data-auction-id="10942" data-bid=""
                                data-status="running"><span class=
                                "current auction">Starting bid:</span>
                                <span class="woocommerce-Price-amount amount"><span class=
                                "woocommerce-Price-currencySymbol">$</span>10.00</span></span>
                            </div>
                        </div>
                            <div class="wd-product__bottom-right">
                                <a href=""data-quantity="1" class="button product_type_auction" data-product_id="10942" data-product_sku="5784-245-2" aria-label="Read more about “AIR 1 MID – Baskets montantes”"
                                rel="nofollow">Bid now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="width:30%; margin-Left:20px; display:inline-block" class="">
                    <figure class='product_item_thumbnail'>
                        <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <img width="500" height="414" src="frontend/images/paul-volkmer-updW-QUccFE-unsplash-600x414.jpg"
                            class="" style="border-radius:10px 10px 0px 0px;" alt="" loading="">
                        </a>
                    </figure>
                    <div class="wd-product__content" style="background:#f4f5fc; border-radius:0px 0px 10px 10px;">
                        <div class="wd-product__head">
                            <div class="wd-product__before-title">
                                <div>Sneakers</div>
                            </div>
                            <div class="wd-product__title">
                                <h2><a href="">AIR 1 MID – Baskets montantes</a></h2>
                            </div>
                            <div class="wd-product__after-title"></div>
                        </div>
                        <div class="wd-product__details"></div>
                        <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                            <div>
                                <span class="auction-price starting-bid"
                                data-auction-id="10942" data-bid=""
                                data-status="running"><span class=
                                "current auction">Starting bid:</span>
                                <span class="woocommerce-Price-amount amount"><span class=
                                "woocommerce-Price-currencySymbol">$</span>10.00</span></span>
                            </div>
                        </div>
                            <div class="wd-product__bottom-right">
                                <a href=""data-quantity="1" class="button product_type_auction" data-product_id="10942" data-product_sku="5784-245-2" aria-label="Read more about “AIR 1 MID – Baskets montantes”"
                                rel="nofollow">Bid now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="width:30%; margin-Left:20px; display:inline-block" class="">
                    <figure class='product_item_thumbnail'>
                        <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <img width="500" height="414" src="frontend/images/paul-volkmer-updW-QUccFE-unsplash-600x414.jpg"
                            class="" style="border-radius:10px 10px 0px 0px;" alt="" loading="">
                        </a>
                    </figure>
                    <div class="wd-product__content" style="background:#f4f5fc; border-radius:0px 0px 10px 10px;">
                        <div class="wd-product__head">
                            <div class="wd-product__before-title">
                                <div>Sneakers</div>
                            </div>
                            <div class="wd-product__title">
                                <h2><a href="">AIR 1 MID – Baskets montantes</a></h2>
                            </div>
                            <div class="wd-product__after-title"></div>
                        </div>
                        <div class="wd-product__details"></div>
                        <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                            <div>
                                <span class="auction-price starting-bid"
                                data-auction-id="10942" data-bid=""
                                data-status="running"><span class=
                                "current auction">Starting bid:</span>
                                <span class="woocommerce-Price-amount amount"><span class=
                                "woocommerce-Price-currencySymbol">$</span>10.00</span></span>
                            </div>
                        </div>
                            <div class="wd-product__bottom-right">
                                <a href=""data-quantity="1" class="button product_type_auction" data-product_id="10942" data-product_sku="5784-245-2" aria-label="Read more about “AIR 1 MID – Baskets montantes”"
                                rel="nofollow">Bid now</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    

@endsection