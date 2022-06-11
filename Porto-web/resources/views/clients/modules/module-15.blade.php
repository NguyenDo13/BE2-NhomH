<div class="module-15">
    <div class="section">
        <!-- container -->
        <div class="">
            <!-- STORE -->
            <div id="store" class="" style="float:right ;">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            Sort By:
                            <select id="shop-sort" class="input-select">
                                <option value="1" selected='selected'>Default sorting</option>
                                <option value="2">Sort by feature</option>
                                <option value="3">Sort by price: high to low</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by name: A-Z</option>
                                <option value="6">Sort by name: Z-A</option>
                                <option value="7">Sort by sale</option>
                            </select>
                        </label>


                    </div>

                    {{-- <ul class="store-grid">
                        <label>
                            Show:
                            <select class="input-select">
                                <option value="0">12</option>
                                <option value="1">24</option>
                                <option value="1">36</option>
                            </select>
                        </label>
                        <li class="active"><i class="fa fa-th"></i></li>
                        <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                    </ul> --}}
                </div>
                <!-- /store top filter -->

                <!-- store products -->
                <div class="row ab">
                    <!-- /product -->
                    <!-- product -->
                    @foreach ($Product as $pageProduct)
                        
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <a href="{{ url('product/'.$pageProduct->id)}}"><img src="{{ asset('assets/clients/images/'.$pageProduct->image) }}" alt="" width="100%"></a>
                                <div class="product-label text-center">
                                    <span class="sale">-30%</span>
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="{{ url('product/'.$pageProduct->id)}}">{{$pageProduct->name}}</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="product-price">${{$pageProduct->price}}</h4>

                                <div class="product-btns">
                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                                    <button class="add-to-cart"><i class="fa fa-heart-o">Add to cart</i></button>
                                    <button class="quick-view"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    
                    <!-- /product -->
                    <!-- /product -->
                    <!-- product -->
                    {{-- <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{ asset('assets/clients/images/product-2.png') }}" alt="" width="100%">
                                <div class="product-label text-center">
                                    <span class="sale">-30%</span>
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="product-price">$980.00 -$999.99</h4>

                                <div class="product-btns">
                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                                    <button class="add-to-cart"><i class="fa fa-heart-o">Add to cart</i></button>
                                    <button class="quick-view"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /product -->
                    <!-- /product -->
                    <!-- product -->
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{ asset('assets/clients/images/product-3.png') }}" alt="" width="100%">
                                <div class="product-label text-center">
                                    <span class="sale">-30%</span>
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="product-price">$980.00 -$999.99</h4>

                                <div class="product-btns">
                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                                    <button class="add-to-cart"><i class="fa fa-heart-o">Add to cart</i></button>
                                    <button class="quick-view"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /product --> --}}




                </div>
                
                <div class="row">
                    <!-- /store products -->



                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">12</option>
                                    <option value="1">24</option>
                                    <option value="1">36</option>
                                </select>
                            </label>

                        </div>
                        <nav class="woocommerce-pagination">
                            <form class="woocommerce-viewing" method="get">                               
                                <ul class="store-pagination">       
                                    <li class="active">{{ $Product->links() }}</li>
                                </ul>
                                <input type="hidden" name="paged" value="" />

                            </form>

                        </nav>
                    </div>
                    <!-- /store bottom filter -->
                </div>
            </div>
            <!-- /STORE -->

            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
</div>

