@extends('layouts.main')

@section('main-container')
    
	<!-- content  -->
  <main class="l-main row">
      <div class="main large-12 small-12 columns">
        <div class="body field clearfix">
          <div data-vc-full-width="true" data-vc-full-width-init=
          "false" class=
          "vc_row wpb_row vc_row-fluid vc_custom_1647339677699 vc_row-has-fill">
            <div class=
            "wpb_column vc_column_container vc_col-sm-7 vc_col-lg-7 vc_col-md-10 vc_col-xs-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="wd_empty_space" data-heightmobile="0"
                  data-heighttablet="30" data-heightdesktop="70"
                  style="height: 70px;"></div>
                  <div class='wd_empty_space' data-heightmobile=
                  '70' data-heighttablet='75' data-heightdesktop=
                  '90' style='height:90px'></div>
                  <div class="wd-heading text-left" style=
                  "max-width: 700px">
                    <h1 style="margin:0;color:#ffffff;" class=
                    "title_a">Join Our Next Auction! Find Your
                    Equipment</h1>
                  </div>
                  <div class='wd_empty_space' data-heightmobile=
                  '20' data-heighttablet='20' data-heightdesktop=
                  '20' style='height:20px'></div>
                  <div class="search_product_form one_line devia-anim item-target" data-devia-animate='{"triggerHandler":"inview","animationTarget":".item-target","duration":"1200","delay":"150", "initValues":{"y":41,"z":-118,"rotateX":-65,"opacity":0}, "animations":{"y":0,"z":0,"rotateX":0,"opacity":1,"delay":2,"ease":"easeOutQuint"}}'>
                    <div class='html-before item-target'></div>
                    <form role="search" method="" action="">
                      <ul class="inline-list">
                        <li class="item-target product_cat">
                          <select name='product-category' id='term' class='product_categories'>
                            <option value=''>All Car Types</option>
                            <option class="" value="watches">Watches (1)</option>
                            <option class="" value="vehicles">Vehicles (10)</option>
                            <option class="" value="gaming">Gaming (6)</option>
                            <option class="" value="antiques">Antiques (4)</option>
                          </select>
                        </li>
                        <li class="item-target product-name">
                          <input type="hidden" name="post_type" value="product"> 
                          <input type="text" name="s" id="product_name" placeholder="search your favourite car here....">
                        </li>
                        <li class="item-target btn-search">
                          <div class="submit-button item-target">
                            <input type="submit" class="button"
                            value="search">
                          </div>
                        </li>
                      </ul>
                    </form>
                    <div class='html-after item-target'></div>
                  </div>
                  <div class="wd_empty_space" data-heightmobile="20" data-heighttablet="40" data-heightdesktop="70" style="height: 70px;"></div>
                </div>
              </div>
            </div>
            <div class=
            "wpb_column vc_column_container vc_col-sm-5 vc_col-lg-5 vc_col-md-2 vc_hidden-md vc_hidden-sm vc_hidden-xs">
              <div class="vc_column-inner">
                <div class="wpb_wrapper"></div>
              </div>
            </div>
          </div>
          <div class="vc_row-full-width vc_clearfix"></div>
          <div data-animation-delay="300" class=
          "vc_row wpb_row vc_row-fluid">
            <div class=
            "wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class='wd_empty_space' data-heightmobile=
                  '35' data-heighttablet='40' data-heightdesktop=
                  '55' style='height:55px'></div>
                  <div class="wd-heading text-left" style=
                  "max-width: 100%">
                    <h2 style="margin:0;" class="title_a">Explore
                    Popular Categories</h2>
                  </div>
                  <div class='wd_empty_space' data-heightmobile=
                  '30' data-heighttablet='40' data-heightdesktop=
                  '45' style='height:45px'></div>
                  <div class="woocommerce columns-6 standard">
                    <ul class="products columns-6 grid">
                      <li class="product-category product first">
                        <a href=
                        "https://bidpro.webdevia.com/product-category/antiques/">
                        <img src=
                        "https://bidpro.webdevia.com/wp-content/uploads/2021/07/table-556x414.png"
                        alt="Antiques" width="600" height="414">
                        <h2 class=
                        "woocommerce-loop-category__title">Antiques
                        <mark class="count">(4)</mark></h2>
                        <div class="woo-category-info"></div></a>
                      </li>
                      <li class="product-category product">
                        <a href=
                        "https://bidpro.webdevia.com/product-category/electronics/">
                        <img src=
                        "https://bidpro.webdevia.com/wp-content/uploads/2021/07/apple_ipad--556x414.png"
                        alt="Electronics" width="600" height="414">
                        <h2 class=
                        "woocommerce-loop-category__title">
                        Electronics <mark class=
                        "count">(4)</mark></h2>
                        <div class="woo-category-info"></div></a>
                      </li>
                      <li class="product-category product">
                        <a href=
                        "https://bidpro.webdevia.com/product-category/sneakers/">
                        <img src=
                        "https://bidpro.webdevia.com/wp-content/uploads/2021/07/sneakers@2x-556x414.png"
                        alt="Sneakers" width="600" height="414">
                        <h2 class=
                        "woocommerce-loop-category__title">Sneakers
                        <mark class="count">(8)</mark></h2>
                        <div class="woo-category-info"></div></a>
                      </li>
                      <li class="product-category product">
                        <a href=
                        "https://bidpro.webdevia.com/product-category/stamps/">
                        <img src=
                        "https://bidpro.webdevia.com/wp-content/uploads/2021/07/stamps-556x414.png"
                        alt="Stamps" width="600" height="414">
                        <h2 class=
                        "woocommerce-loop-category__title">Stamps
                        <mark class="count">(2)</mark></h2>
                        <div class="woo-category-info"></div></a>
                      </li>
                      <li class="product-category product">
                        <a href=
                        "https://bidpro.webdevia.com/product-category/vehicles/">
                        <img src=
                        "https://bidpro.webdevia.com/wp-content/uploads/2021/07/finance-car@2x-556x414.png"
                        alt="Vehicles" width="600" height="414">
                        <h2 class=
                        "woocommerce-loop-category__title">Vehicles
                        <mark class="count">(10)</mark></h2>
                        <div class="woo-category-info"></div></a>
                      </li>
                      <li class="product-category product last">
                        <a href=
                        "https://bidpro.webdevia.com/product-category/watches/">
                        <img src=
                        "https://bidpro.webdevia.com/wp-content/uploads/2021/07/watch-556x414.png"
                        alt="Watches" width="600" height="414">
                        <h2 class=
                        "woocommerce-loop-category__title">Watches
                        <mark class="count">(1)</mark></h2>
                        <div class="woo-category-info"></div></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row wpb_row vc_row-fluid featured-grid">
            <div class=
            "wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class='wd_empty_space' data-heightmobile=
                  '20' data-heighttablet='35' data-heightdesktop=
                  '50' style='height:50px'></div>
                  <div class="wd-heading text-left" style=
                  "max-width: 100%">
                    <h2 style="margin:0;" class="title_a">Trending
                    Auctions</h2>
                    <p style="" class="sub_title_a">See what's
                    popular across thousands of items.</p>
                  </div>
                  <div class='wd_empty_space' data-heightmobile=
                  '30' data-heighttablet='40' data-heightdesktop=
                  '40' style='height:40px'></div>
                  <div class="woocommerce columns-4">
                    <ul class="products columns-4 grid">
                      <li class=
                      "wd-product-box product type-product post-10818 status-publish first instock product_cat-watches product_tag-premium product_tag-sales has-post-thumbnail featured downloadable sold-individually shipping-taxable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href=
                          "https://bidpro.webdevia.com/product/unique-watch/"
                          class=
                          "woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src=
                          "https://bidpro.webdevia.com/wp-content/uploads/2021/07/vitae-london-JvNFXRKWjL8-unsplash-600x414.jpg"
                          class=
                          "attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Watches
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href=
                              "https://bidpro.webdevia.com/product/unique-watch/">
                              Unique Watch</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "winned-for auction">Auction
                                Ended</span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=
                              "https://bidpro.webdevia.com/product/unique-watch/"
                              data-quantity="1" class=
                              "button product_type_auction"
                              data-product_id="10818"
                              data-product_sku="5784-245-1-1-1-1-1"
                              aria-label=
                              "Read more about “Unique Watch”" rel=
                              "nofollow">Auction finished</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=
                      "wd-product-box product type-product post-10800 status-publish instock product_cat-antiques product_tag-premium product_tag-sales has-post-thumbnail featured downloadable sold-individually shipping-taxable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href=
                          "https://bidpro.webdevia.com/product/black-premium-collection-2/"
                          class=
                          "woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src=
                          "https://bidpro.webdevia.com/wp-content/uploads/2018/05/alexander-andrews-BX4Q0gojWAs-unsplash-600x414.jpg"
                          class=
                          "attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Antiques
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href=
                              "https://bidpro.webdevia.com/product/black-premium-collection-2/">
                              Black Premium Collection</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "winned-for auction">Auction
                                Ended</span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=
                              "https://bidpro.webdevia.com/product/black-premium-collection-2/"
                              data-quantity="1" class=
                              "button product_type_auction"
                              data-product_id="10800"
                              data-product_sku="5784-245-1-1-1-1"
                              aria-label=
                              "Read more about “Black Premium Collection”"
                              rel="nofollow">Auction finished</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=
                      "wd-product-box product type-product post-10798 status-publish instock product_cat-gaming product_tag-premium product_tag-sales has-post-thumbnail featured downloadable sold-individually shipping-taxable purchasable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href=
                          "https://bidpro.webdevia.com/product/white-sony-ps-4-joystick-2/"
                          class=
                          "woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src=
                          "https://bidpro.webdevia.com/wp-content/uploads/2018/05/igor-karimov-59MGmlUiqwA-unsplash-600x414.jpg"
                          class=
                          "attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Gaming
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href=
                              "https://bidpro.webdevia.com/product/white-sony-ps-4-joystick-2/">
                              White Sony PS-4 Joystick</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "auction-price starting-bid"
                                data-auction-id="10798" data-bid=""
                                data-status="running"><span class=
                                "current auction">Starting
                                bid:</span> <span class=
                                "woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                $</span>49.00</span></span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=
                              "https://bidpro.webdevia.com/product/white-sony-ps-4-joystick-2/"
                              data-quantity="1" class=
                              "button product_type_auction add_to_cart_button"
                              data-product_id="10798"
                              data-product_sku="5784-245-1-1-1"
                              aria-label=
                              "Read more about “White Sony PS-4 Joystick”"
                              rel="nofollow">Bid now</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=
                      "wd-product-box product type-product post-10795 status-publish last instock product_cat-antiques product_tag-premium product_tag-sales has-post-thumbnail featured downloadable sold-individually shipping-taxable purchasable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href=
                          "https://bidpro.webdevia.com/product/brown-leader-bag-1/"
                          class=
                          "woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src=
                          "https://bidpro.webdevia.com/wp-content/uploads/2018/05/alvaro-serrano-pFLNV4gkXsc-unsplash-600x414.jpg"
                          class=
                          "attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Antiques
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href=
                              "https://bidpro.webdevia.com/product/brown-leader-bag-1/">
                              Brown Leader Bag</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "auction-price starting-bid"
                                data-auction-id="10795" data-bid=""
                                data-status="running"><span class=
                                "current auction">Starting
                                bid:</span> <span class=
                                "woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                $</span>350.00</span></span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=
                              "https://bidpro.webdevia.com/product/brown-leader-bag-1/"
                              data-quantity="1" class=
                              "button product_type_auction add_to_cart_button"
                              data-product_id="10795"
                              data-product_sku="5784-245-1-1"
                              aria-label=
                              "Read more about “Brown Leader Bag”"
                              rel="nofollow">Bid now</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=
                      "wd-product-box product type-product post-11002 status-publish first instock product_cat-gaming product_tag-premium product_tag-sales has-post-thumbnail featured downloadable sold-individually shipping-taxable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href=
                          "https://bidpro.webdevia.com/product/xbox-joystick/"
                          class=
                          "woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src=
                          "https://bidpro.webdevia.com/wp-content/uploads/2021/09/louis-philippe-poitras-OitYIbHSyWU-unsplash-600x414.gif"
                          class=
                          "attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Gaming
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href=
                              "https://bidpro.webdevia.com/product/xbox-joystick/">
                              Xbox Joystick</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "auction-price starting-bid"
                                data-auction-id="11002" data-bid=""
                                data-status="running"><span class=
                                "current auction">Starting
                                bid:</span> <span class=
                                "woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                $</span>350.00</span></span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=
                              "https://bidpro.webdevia.com/product/xbox-joystick/"
                              data-quantity="1" class=
                              "button product_type_auction"
                              data-product_id="11002"
                              data-product_sku="5784-245-1-1-1-2"
                              aria-label=
                              "Read more about “Xbox Joystick”"
                              rel="nofollow">Bid now</a>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="wd_empty_space" data-heightmobile=
                  "65" data-heighttablet="65" data-heightdesktop=
                  "65" style="height: 65px;"></div>
                </div>
              </div>
            </div>
          </div>
          <div data-vc-full-width="true" data-vc-full-width-init=
          "false" class=
          "vc_row wpb_row vc_row-fluid vc_custom_1625854912175 vc_row-has-fill">
            <div class=
            "wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class='wd_empty_space' data-heightmobile=
                  '15' data-heighttablet='15' data-heightdesktop=
                  '15' style='height:15px'></div>
                  <div class="wd-heading text-left" style=
                  "max-width: 100%">
                    <h2 style="margin:0;" class="title_a">Upcoming
                    Auctions</h2>
                  </div>
                  <div class='wd_empty_space' data-heightmobile=
                  '100' data-heighttablet='100' data-heightdesktop=
                  '100' style='height:100px'></div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row-full-width vc_clearfix"></div>
          <div data-vc-full-width="true" data-vc-full-width-init=
          "false" class=
          "vc_row wpb_row vc_row-fluid vc_custom_1626175829049">
            <div class=
            "wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner vc_custom_1626178067664">
                <div class="wpb_wrapper">
                  <div class="woocommerce columns-4">
                    <ul class="products columns-4 grid">
                      <li class=
                      "wd-product-box product type-product post-591 status-publish first instock product_cat-electronics product_tag-premium product_tag-sales has-post-thumbnail downloadable sold-individually shipping-taxable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href=
                          "https://bidpro.webdevia.com/product/iphone-charger/"
                          class=
                          "woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src=
                          "https://bidpro.webdevia.com/wp-content/uploads/2018/05/iphone-charger-600x414.jpg"
                          class=
                          "attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Electronics
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href=
                              "https://bidpro.webdevia.com/product/iphone-charger/">
                              iPhone Charger</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "winned-for auction">Auction
                                Ended</span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=
                              "https://bidpro.webdevia.com/product/iphone-charger/"
                              data-quantity="1" class=
                              "button product_type_auction"
                              data-product_id="591"
                              data-product_sku="5784-255"
                              aria-label=
                              "Read more about “iPhone Charger”"
                              rel="nofollow">Auction finished</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=
                      "wd-product-box product type-product post-587 status-publish instock product_cat-vehicles product_tag-premium product_tag-sales has-post-thumbnail sale sold-individually shipping-taxable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <span class="onsale">Sale!</span>
                          <a href="https://bidpro.webdevia.com/product/forklift-truck/"
                          class=
                          "woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src=
                          "https://bidpro.webdevia.com/wp-content/uploads/2018/05/Forklift-Truckt-600x414.jpg"
                          class=
                          "attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Vehicles
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href=
                              "https://bidpro.webdevia.com/product/forklift-truck/">
                              Forklift Truck</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "winned-for auction">Auction
                                Ended</span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=
                              "https://bidpro.webdevia.com/product/forklift-truck/"
                              data-quantity="1" class=
                              "button product_type_auction"
                              data-product_id="587"
                              data-product_sku="5784-215"
                              aria-label=
                              "Read more about “Forklift Truck”"
                              rel="nofollow">Auction finished</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=
                      "wd-product-box product type-product post-10674 status-publish instock product_cat-gaming has-post-thumbnail sold-individually shipping-taxable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href=
                          "https://bidpro.webdevia.com/product/play-station-5/"
                          class=
                          "woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src=
                          "https://bidpro.webdevia.com/wp-content/uploads/2021/07/dennis-cortes-cL7xovIO7sw-unsplash-scaled-600x414.jpg"
                          class=
                          "attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Gaming
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href=
                              "https://bidpro.webdevia.com/product/play-station-5/">
                              Play Station 5</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "winned-for auction">Auction
                                Ended</span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=
                              "https://bidpro.webdevia.com/product/play-station-5/"
                              data-quantity="1" class=
                              "button product_type_auction"
                              data-product_id="10674"
                              data-product_sku="" aria-label=
                              "Read more about “Play Station 5”"
                              rel="nofollow">Auction finished</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=
                      "wd-product-box product type-product post-551 status-publish last instock product_cat-stamps product_tag-premium product_tag-sales has-post-thumbnail sold-individually shipping-taxable purchasable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href=
                          "https://bidpro.webdevia.com/product/postage-stamp/"
                          class=
                          "woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src=
                          "https://bidpro.webdevia.com/wp-content/uploads/2017/12/ali-bakhtiari-81eOv8Vox8k-unsplash-600x414.jpg"
                          class=
                          "attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Stamps
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href=
                              "https://bidpro.webdevia.com/product/postage-stamp/">
                              Postage Stamp</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "auction-price current-bid"
                                data-auction-id="551" data-bid="90"
                                data-status="running"><span class=
                                "current auction">Current
                                bid:</span> <span class=
                                "woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                $</span>90.00</span></span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=
                              "https://bidpro.webdevia.com/product/postage-stamp/"
                              data-quantity="1" class=
                              "button product_type_auction add_to_cart_button"
                              data-product_id="551"
                              data-product_sku="woo-sunglasses"
                              aria-label=
                              "Read more about “Postage Stamp”"
                              rel="nofollow">Bid now</a>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
                                  <!-- products picked start -->
          <div class="vc_row-full-width vc_clearfix"></div>
          <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
            <div class="banner-picket-by-hand-heading wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class='wd_empty_space' data-heightmobile='60' data-heighttablet='60' data-heightdesktop='45' style='height:45px'></div>
                  <div class="wd-heading text-left" style="max-width: 100%">
                    <h2 style="margin:0;" class="title_a">Products picked by hand</h2>
                  </div>
                  <div class='wd_empty_space' data-heightmobile='40' data-heighttablet='40' data-heightdesktop='75' style='height:75px'></div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row-full-width vc_clearfix"></div>
          <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1626168932296 vc_row-has-fill">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-12">
              <div class="vc_column-inner vc_custom_1635441281502">
                <div class="wpb_wrapper">
                  <div class="wd-banner">
                    <div class="banner-img">
                      <img src="frontend/images/banner-bg@2x.jpg" width="440" height="222" alt="Headphone Trending JBL Harman">
                    </div>
                    <div class="disc bottom_right">
                      <h4 style="color:#fff;">Headphone Trending JBL Harman</h4>
                      <a href="" class="wd-btn small btn-radius btn-color-4 hover-color-1 btn-solid"style="font-size: 14px;">Get in touch</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-6">
              <div class="vc_column-inner vc_custom_1635441371779">
                <div class="wpb_wrapper">
                  <div class="wd-banner">
                    <div class="banner-img">
                      <img src="frontend/images/Banner-bg-2@2x.jpg" width="440" height="222" alt="Headphone Trending JBL Harman">
                    </div>
                    <div class="disc bottom_right">
                      <h4 style="color:#000000;">Headphone Trending JBL Harman</h4>
                      <a href="" class="wd-btn small btn-radius btn-color-4 hover-color-1 btn-solid" style="font-size: 14px;">Get in touch</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-6">
              <div class="vc_column-inner vc_custom_1635441380746">
                <div class="wpb_wrapper">
                  <div class="wd-banner">
                    <div class="banner-img">
                      <img src="frontend/images/Banner-bg-3@2x.jpg" width="440" height="222" alt="Headphone Trending JBL Harman">
                    </div>
                    <div class="disc bottom_right">
                      <h4 style="color:#fff;">Headphone Trending JBL Harman</h4>
                      <a href="" class="wd-btn small btn-radius btn-color-4 hover-color-1 btn-solid" style="font-size: 14px;">Get in touch</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row-full-width vc_clearfix"></div>
          <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1625595306103 vc_row-has-fill">
            <div class="wpb_column vc_column_container vc_col-sm-6">
              <div class="vc_column-inner vc_custom_1626169711848">
                <div class="wpb_wrapper">
                  <div class="wd-banner">
                    <div class="banner-img">
                      <img src="frontend/images/Banner-bg-4@2x.jpg" width="440" height="222" alt="Headphone Trending JBL Harman">
                    </div>
                    <div class="disc top_left">
                      <h4 style="color:#fff;">Headphone Trending JBL Harman</h4>
                      <a href="/product/unique-watch" class="wd-btn small btn-radius btn-color-4 hover-color-1 btn-solid"style="font-size: 14px;">Get in touch</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-6">
              <div class="vc_column-inner vc_custom_1626169728718">
                <div class="wpb_wrapper">
                  <div class="wd-banner">
                    <div class="banner-img">
                      <img src="frontend/images/Banner-bg-5@2x.jpg"width="440" height="222" alt="Headphone Trending JBL Harman">
                    </div>
                    <div class="disc top_left">
                      <h4 style="color:#000000;">Headphone Trending JBL Harman</h4>
                      <a href="/product/sneakers" class="wd-btn small btn-radius btn-color-3 hover-color-1 btn-solid" style="font-size: 14px;">Get in touch</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row-full-width vc_clearfix"></div>
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class='wd_empty_space' data-heightmobile='70' data-heighttablet='75' data-heightdesktop='55' style='height:55px'></div>
                  <div class="wd-heading text-left" style="max-width: 100%">
                    <h2 style="margin:0;" class="title_a">Products picked by hand</h2>
                  </div>
                  <div class='wd_empty_space' data-heightmobile='30' data-heighttablet='40' data-heightdesktop='40' style='height:40px'></div>
                  <div class="woocommerce columns-4">
                    <ul class="products columns-4 grid">
                      <li class="wd-product-box product type-product post-589 status-publish first instock product_cat-antiques product_tag-premium product_tag-sales has-post-thumbnail sold-individually shipping-taxable purchasable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                          <img width="600" height="414" src="frontend/images/florian-klauer-mk7D-4UCfmg-unsplash-600x414.jpg"
                          class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"></a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>Antiques</div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href="">Black Fayorit typewriter</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class="auction-price starting-bid" data-auction-id="589" data-bid="" data-status="running">
                                  <span class="current auction">Starting bid:</span> 
                                  <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>10.00
                                  </span>
                                </span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href="" data-quantity="1" class="button product_type_auction add_to_cart_button"data-product_id="589"data-product_sku="5784-235"aria-label=
                                "Read more about “Black Fayorit typewriter”" rel="nofollow">Bid now</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="wd-product-box product type-product post-548 status-publish instock product_cat-vehicles product_tag-auction product_tag-premium product_tag-sales has-post-thumbnail sale sold-individually shipping-taxable purchasable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <span class="onsale">Sale!</span>
                          <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <img width="600" height="414" src="frontend/images/Img-600x414.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"alt="" loading="lazy">
                          </a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>Vehicles</div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href="">Mercedes EQC 2021</a></h2>
                            </div>
                            <div class="wd-product__after-title"></div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class="auction-price starting-bid"data-auction-id="548" data-bid=""data-status="running">
                                  <span class="current auction">Startingbid:</span> 
                                  <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>50,000.00
                                  </span>
                                </span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=""data-quantity="1" class="button product_type_auction add_to_cart_button" data-product_id="548"
                                data-product_sku="woo-vneck-tee"aria-label="Read more about “Mercedes EQC 2021”"
                                rel="nofollow">Bid now
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="wd-product-box product type-product post-590 status-publish instock product_cat-sneakers product_tag-premium product_tag-sales has-post-thumbnail downloadable sold-individually shipping-taxable purchasable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <img width="600" height="414" src="frontend/images/sneaker-600x414.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy">
                          </a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Sneakers
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href="">Sneakers</a></h2>
                            </div>
                            <div class="wd-product__after-title">
                            </div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class=
                                "auction-price starting-bid"
                                data-auction-id="590" data-bid=""
                                data-status="running">
                                <span class="current auction">Starting bid:</span> 
                                <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>10.00</span></span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href=""
                              data-quantity="1" class=
                              "button product_type_auction add_to_cart_button"
                              data-product_id="590"
                              data-product_sku="5784-245"
                              aria-label=
                              "Read more about “Sneakers”" rel=
                              "nofollow">Bid now</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=
                      "wd-product-box product type-product post-597 status-publish last instock product_cat-sneakers product_tag-premium product_tag-sales has-post-thumbnail sold-individually shipping-taxable purchasable product-type-auction">
                        <figure class='product_item_thumbnail'>
                          <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                           <img width="600" height="414" src=
                              "frontend/images/photo-1596568359553-a56de6970068-600x414.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                              alt="" loading="lazy" srcset="frontend/images/photo-1596568359553-a56de6970068-600x414.jpg 600w, frontend/images/photo-1596568359553-a56de6970068-300x206.jpg 300w, https://bidpro.webdevia.com/wp-content/uploads/2018/12/photo-1596568359553-a56de6970068-768x528.jpg 768w, https://bidpro.webdevia.com/wp-content/uploads/2018/12/photo-1596568359553-a56de6970068-490x337.jpg 490w, https://bidpro.webdevia.com/wp-content/uploads/2018/12/photo-1596568359553-a56de6970068.jpg 1000w"
                              sizes="(max-width: 600px) 100vw, 600px">
                          </a>
                        </figure>
                        <div class="wd-product__content">
                          <div class="wd-product__head">
                            <div class="wd-product__before-title">
                              <div>
                                Sneakers
                              </div>
                            </div>
                            <div class="wd-product__title">
                              <h2><a href="">Sneaker Premium</a></h2>
                            </div>
                            <div class="wd-product__after-title"></div>
                          </div>
                          <div class="wd-product__details"></div>
                          <div class="wd-product__bottom">
                            <div class="wd-product__bottom-left">
                              <div>
                                <span class="auction-price starting-bid" data-auction-id="597" data-bid="" data-status="running">
                                  <span class="current auction">Starting bid:</span> 
                                  <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>10.00
                                  </span>
                                </span>
                              </div>
                            </div>
                            <div class="wd-product__bottom-right">
                              <a href="" data-quantity="1" class="button product_type_auction add_to_cart_button"data-product_id="597"data-product_sku="5784-765"aria-label="Read more about “Sneaker Premium”"rel="nofollow">Bid now</a>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class='wd_empty_space' data-heightmobile='70' data-heighttablet='75' data-heightdesktop='65' style='height:65px'></div>
                  <div class="wd-heading text-left" style="max-width: 100%">
                    <h2 style="margin:0;" class="title_a">Premier Sellers</h2>
                  </div>
                  <div class='wd_empty_space' data-heightmobile='30' data-heighttablet='40' data-heightdesktop='40' style='height:40px'></div>
                    <div id="dokan-store-listing-filter-wrap">
                      <div class="left">
                        <p class="item store-count">Total stores showing: 6</p>
                      </div>
                    <div class="right">
                      <div class="item">
                        <div class="dokan-icons">
                          <div class="dokan-icon-div"></div>
                          <div class="dokan-icon-div"></div>
                          <div class="dokan-icon-div"></div>
                        </div>
                      </div>
                      <form name="stores_sorting" class="sort-by item" method="get" id="stores_sorting">
                        <label>:</label> 
                          <select name="stores_orderby" id="stores_orderby" aria-label="">
                          <option value='most_recent'>Most Recent</option>
                          <option value='total_orders'>Most Popular</option>
                          <option value='random'>Random</option>
                        </select>
                      </form>
                      <div class="toggle-view item"></div>
                    </div>
                  </div>
                  <form name="dokan_store_lists_filter_form" id="dokan-store-listing-filter-form-wrap" style="display: none">
                    <div class="store-search grid-item">
                      <input type="search" class="store-search-input" name="dokan_seller_search" placeholder="">
                    </div>
                    <div class="apply-filter">
                      <button id="cancel-filter-btn" class="dokan-btn dokan-btn-theme"></button>
                      <button id="apply-filter-btn" class="dokan-btn dokan-btn-theme" type="submit"></button>
                    </div>
                  </form>
                  <div id="dokan-seller-listing-wrap" class="grid-view">
                    <div class="seller-listing-content">
                      <ul class="dokan-seller-wrap">
                        <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                          <div class="store-wrapper">
                            <div class="store-header">
                              <div class="store-banner">
                                <a href="">
                                <img src="frontend/images/default-store-banner.png" alt="image"></a>
                              </div>
                            </div>
                            <div class="store-content default-store-banner">
                              <div class="store-data-container">
                                <div class="featured-favourite">
                                  <div class="featured-label"></div>
                                </div>
                                <div class="store-data">
                                  <h2><a href="">Modern Auctions. Co.</a></h2>
                                  <div class="dokan-seller-rating" title="Rated 4.50 out of 5">
                                    <p class="rating">grbid out of 5</p>
                                  </div>
                                  <p class="store-address">
                                    <span class='state'>Michigan,</span>
                                    <span class='country'>United States (US)</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="store-footer">
                              <div class="seller-avatar">
                                <a href="">
                                  <img src="frontend/images/team-7-96x96.jpg" alt="Modern Auctions. Co.">
                                </a>
                              </div>
                              <a href="" title=""></a>
                            </div>
                          </div>
                        </li>
                        <li class="dokan-single-seller woocommerce coloum-3">
                          <div class="store-wrapper">
                            <div class="store-header">
                              <div class="store-banner">
                                <a href="">
                                  <img src="frontend/images/dustyroze-Xc1LXlXiLUs-unsplash.jpg"alt="image">
                                </a>
                              </div>
                            </div>
                            <div class="store-content">
                              <div class="store-data-container">
                                <div class="featured-favourite"></div>
                                <div class="store-data">
                                  <h2><a href="">Big Auction Service</a></h2>
                                  <div class="dokan-seller-rating" title="Rated 4.75 out of 5">
                                    <p class="rating">grbid out of 5</p>
                                  </div>
                                  <p class="store-address">
                                    <span class='country'>France</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="store-footer">
                              <div class="seller-avatar">
                                <a href="">
                                  <img src="frontend/images/team-4-96x96.jpg" alt="Big Auction Service">
                                </a>
                              </div>
                              <a href="" title=""></a>
                            </div>
                          </div>
                        </li>
                        <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                          <div class="store-wrapper">
                            <div class="store-header">
                              <div class="store-banner">
                                <a href="">
                                <img src="frontend/images/default-store-banner.png"alt="image"></a>
                              </div>
                            </div>
                            <div class="store-content default-store-banner">
                              <div class="store-data-container">
                                <div class="featured-favourite">
                                  <div class="featured-label"></div>
                                </div>
                                <div class="store-data">
                                  <h2><a href="">EastCost Equip</a></h2>
                                  <p class="store-address">
                                  <span class='country'>United Arab Emirates</span></p>
                                </div>
                              </div>
                            </div>
                            <div class="store-footer">
                              <div class="seller-avatar">
                                <a href="">
                                  <img src="frontend/images/team-8-96x96.jpg" alt="EastCost Equip">
                                </a>
                              </div>
                              <a href="" title=""></a>
                            </div>
                          </div>
                        </li>
                        <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                          <div class="store-wrapper">
                            <div class="store-header">
                              <div class="store-banner">
                                <a href="">
                                  <img src="frontend/images/default-store-banner.png" alt="image">
                                </a>
                              </div>
                            </div>
                            <div class="store-content default-store-banner">
                              <div class="store-data-container">
                                <div class="featured-favourite"></div>
                                <div class="store-data">
                                  <h2><a href="">AuctionnerPro</a></h2>
                                  <p class="store-address">
                                    <span class='country'>United Kingdom (UK)</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="store-footer">
                              <div class="seller-avatar">
                                <a href="">
                                  <img src="frontend/images/team-12-96x96.jpg" alt="AuctionnerPro">
                                </a>
                              </div>
                              <a href="" title=""></a>
                            </div>
                          </div>
                        </li>
                        <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                          <div class="store-wrapper">
                            <div class="store-header">
                              <div class="store-banner">
                                <a href="">
                                  <img src="frontend/images/default-store-banner.png" alt="image">
                                </a>
                              </div>
                            </div>
                            <div class="store-content default-store-banner">
                              <div class="store-data-container">
                                <div class="featured-favourite">
                                  <div class="featured-label"></div>
                                </div>
                                <div class="store-data">
                                  <h2><a href="">Saperst Co. Inc</a></h2>
                                  <p class="store-address">
                                    <span class='state'>Florida,</span>
                                    <span class='country'>United States (US)</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="store-footer">
                              <div class="seller-avatar">
                                <a href="">
                                  <img src="frontend/images/team-9-96x96.jpg" alt="Saperst Co. Inc">
                                </a>
                              </div>
                              <a href="" title=""></a>
                            </div>
                          </div>
                        </li>
                        <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                          <div class="store-wrapper">
                            <div class="store-header">
                              <div class="store-banner">
                                <a href="">
                                  <img src="frontend/images/default-store-banner.png"alt="image">
                                </a>
                              </div>
                            </div>
                            <div class="store-content default-store-banner">
                              <div class="store-data-container">
                                <div class="featured-favourite"></div>
                                <div class="store-data">
                                  <h2><a href="">Pro Auction Inc.</a></h2>
                                  <div class="dokan-seller-rating" title="Rated 5.00 out of 5">
                                    <p class="rating">grbid out of 5</p>
                                  </div>
                                  <p class="store-address">
                                    <span class='country'>United States (US)</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="store-footer">
                              <div class="seller-avatar">
                                <a href="">
                                  <img src="frontend/images/team-10-96x96.jpg" alt="Pro Auction Inc.">
                                </a>
                              </div>
                              <a href="" title=""></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class='wd_empty_space' data-heightmobile='70' data-heighttablet='75' data-heightdesktop='70' style='height:70px'></div>
                  <div class="wd-heading text-left" style="max-width: 100%">
                    <h2 style="margin:0;" class="title_a">Recent News</h2>
                  </div>
                  <div class='wd_empty_space' data-heightmobile='30' data-heighttablet='40' data-heightdesktop='40' style='height:40px'></div>
                  <div class='small-up-1 medium-up-2 large-up-3'>
                    <div class="column column-block">
                      <article class="wd-product-box wd-post wd-post--multicolumn post-2858 post type-post status-publish format-standard has-post-thumbnail hentry category-freebies category-news tag-3rd-tag tag-tag-1 tag-tag-2">
                        <div class="wd-post__thumbnail">
                          <img width="840" height="500" src="frontend/images/regis-hari-bouchard-ZjViL8qxihM-unsplash-scaled-840x500.jpg" class="attachment-grbid_sblog-thumb size-grbid_sblog-thumb wp-post-image" alt="">
                        </div>
                        <div class="wd-post__content">
                          <ul class="wd-post__meta clearfix">
                            <li>December 28, 2018</li>
                            <li class="wd-post__author">By:Alex Ali</li>
                            <li>
                              <a href=""rel="category tag">Freebies</a>,
                              <a href=""rel="category tag">News</a>
                            </li>
                            <li class="wd-post__comments">3 comments</li>
                          </ul>
                          <h4 class="wd-post__title">
                            <a href="">19 Powerful Customer Experience Statistics to Know in 2021</a>
                          </h4>
                          <div class="wd-post__read-more">
                            <a href="">Learn more <img src="frontend/images/more.svg" alt="icon"></a>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="column column-block">
                      <article class="wd-product-box wd-post wd-post--multicolumn post-264 post type-post status-publish format-standard has-post-thumbnail hentry category-freebies category-news">
                        <div class="wd-post__thumbnail">
                          <img width="840" height="500" src="frontend/images/photo-1596568359553-a56de6970068-840x500.jpg" class="attachment-grbid_sblog-thumb size-grbid_sblog-thumb wp-post-image" alt="" loading="lazy">
                        </div>
                        <div class="wd-post__content">
                          <ul class="wd-post__meta clearfix">
                            <li>December 28, 2018</li>
                            <li class="wd-post__author">By:Alex Ali</li>
                            <li>
                              <a href=""rel="category tag">Freebies</a>,
                              <a href=""rel="category tag">News</a>
                            </li>
                            <li class="wd-post__comments">2 comments</li>
                          </ul>
                          <h4 class="wd-post__title">
                            <a href="">15 Customer Success Lessons Companies Should Adopt from IT</a>
                          </h4>
                          <div class="wd-post__read-more">
                            <a href="">Learn more <img src="frontend/images/more.svg" alt="icon"></a>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="column column-block">
                      <article class="wd-product-box wd-post wd-post--multicolumn post-262 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
                        <div class="wd-post__thumbnail">
                          <img width="840" height="500" src="frontend/images/photo-1542291026-7eec264c27ff-840x500.jpg"
                           class="attachment-grbid_sblog-thumb size-grbid_sblog-thumb wp-post-image" alt="" loading="lazy">
                        </div>
                        <div class="wd-post__content">
                          <ul class="wd-post__meta clearfix">
                            <li>December 28, 2018</li>
                            <li class="wd-post__author">By:Alex Ali</li>
                            <li> <a href="" rel="category tag">News</a> </li>
                            <li class="wd-post__comments">3 comments</li>
                          </ul>
                          <h4 class="wd-post__title">
                            <a href="">How to Improve Customer Journey for Better Experience</a>
                          </h4>
                          <div class="wd-post__read-more">
                            <a href="">Learn more <img src="frontend/images/more.svg"alt="icon"></a>
                          </div>
                        </div>
                      </article>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
	<!-- /content  -->
@endsection