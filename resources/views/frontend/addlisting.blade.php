@extends('layouts.main')
@section('main-container')
	<!-- content  -->
    <main class="l-main row align-center add-listing-page">
      <div class="main large-8 small-12 columns">
        <div class="body field clearfix">
          <h2>Add Listing</h2>
          <form method="post" action="" id="add-listing-form" class="add-listing-form form--bordered" enctype="multipart/form-data" name="add-listing-form">
            <div class="row">
              <div class="large-12 columns">
                    <label for="title">Title</label> 
                    <input type="text" name="title" id="title" required="">
              </div>
              <div class="large-12 columns">
                <label for="_description">Description</label> 
                <textarea name="_description" id="_description" rows="5"></textarea>
              </div>
              <div class="large-12 columns">
                <label for="_short_description">Short description</label> 
                <textarea name="_short_description" id="_short_description" rows="2"></textarea>
              </div>
              <div class="medium-4 columns">
                <label for="_auction_item_condition">Item Condition</label> 
                <select name="_auction_item_condition" id="_auction_item_condition" data-storage="meta">
                  <option value="new" selected>New</option>
                  <option value="used">Old</option>
                </select>
              </div>
              <div class="medium-4 columns">
                <label for="_auction_type">Auction Type</label>
                <select name="_auction_type" id="_auction_type" data-storage="meta">
                  <option value="normal" selected>Normal</option>
                  <option value="reverse">Reverse</option>
                </select>
              </div>
              <div class="medium-4 columns">
                <label for="product_cat">Category</label>
                <select name="product_cat" id="product_cat" required="" data-storage="term">
                  <option value=""> </option>
                  <option value="antiques"> Antiques</option>
                  <option value="electronics">Electronics</option>
                  <option value="sneakers">Sneakers</option>
                  <option value="stamps">Stamps</option>
                  <option value="vehicles">Vehicles</option>
                  <option value="watches">Watches</option>
                  <option value="gaming">Gaming</option>
                </select>
              </div>
              <div class="medium-4 columns">
                <label for="_auction_start_price">Start Price ($)</label> <input type="text" name="_auction_start_price" id="_auction_start_price"data-storage="meta">
              </div>
              <div class="medium-4 columns">
                <label for="_auction_bid_increment">Bid Increment ($)</label> <input type="text" name=
                "_auction_bid_increment" id=
                "_auction_bid_increment" data-storage="meta">
              </div>
              <div class="medium-4 columns">
                <label for="_auction_reserved_price">Reserved Price
                ($)</label> <input type="text" name=
                "_auction_reserved_price" id=
                "_auction_reserved_price" data-storage="meta">
              </div>
              <div class="medium-4 columns">
                <label for="_regular_price">Buy it now price
                ($)</label> <input type="text" name=
                "_regular_price" id="_regular_price" data-storage=
                "meta">
              </div>
              <div class="medium-4 columns">
                <label for="_auction_dates_from">Start Date</label>
                <input type="datetime-local" name=
                "_auction_dates_from" id="_auction_dates_from"
                data-storage="meta">
              </div>
              <div class="medium-4 columns">
                <label for="_auction_dates_to">End Date</label>
                <input type="datetime-local" name=
                "_auction_dates_to" id="_auction_dates_to"
                data-storage="meta">
              </div>
                        <!-- ////////// -->
              <div class="large-4 columns">
                <label>Brand</label>
                <select id="brand" name="brand" data-storage="term">
                <option value='adidas'>Adidas</option>
                <option value='apple'>Apple</option>
                <option value='bmw'>BMW</option>
                <option value='caterpillar'>Caterpillar</option>
                <option value='everlane'>Everlane</option>
                <option value='ferrari'>Ferrari</option>
                <option value='google'>Google</option>
                <option value='hecha'>Hecha</option>
                <option value='logitech'>Logitech</option>
                <option value='mercedes'>Mercedes</option>
                <option value='microsoft'>Microsoft</option>
                <option value='nike'>Nike</option>
                <option value='puma'>Puma</option>
                <option value='razer'>Razer</option>
                </select>
              </div>
                    <!-- ///// -->
                    <div class="large-4 columns">
    <label>Region of Manufacture</label>
    <input type="text" id="regionofmanufacture" name="regionofmanufacture" value="" class="regular-text" data-storage="meta">
  </div>
  <div class="large-12 columns">
    <label for="images">Images</label>
    <div class="" style="border:1px solid black;">
        <div class="image-uploader" style="padding:20px;">
            <input type="file" name="images[]" accept=".jpg,.jpeg,.png,.gif,.svg" multiple="multiple">
            <div class="uploaded"></div>
            <div class="upload-text" style="text-align:center;">
                <i class="fas fa-cloud-upload-alt"></i> <br>
                <span>Drag &amp; Drop files here or click to browse</span>
            </div>
        </div>
    </div>





  </div><br>
  <input type="submit" class="wd-btn" style="margin-top:50px;">
  <div class="reveal tiny" id="exampleModal1" data-reveal=""></div>




            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
   
 
  
  <!-- /content  -->
@endsection