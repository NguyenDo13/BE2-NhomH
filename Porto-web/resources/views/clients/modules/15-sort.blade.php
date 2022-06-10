<div class="module-15">
    <div class="section">
        <!-- container -->
        <div class="">
            <!-- STORE -->
            <div id="store" class="" style="float:right ;">
                <div class="row ab">
                    
                    @foreach ($feature as $pageProduct)
                        <div class="col-md-4 col-xs-6">
                            <div class="product ab">
                                <div class="product-img">
                                    <img src="{{ asset('assets/clients/images/' . $pageProduct->image) }}" alt=""
                                        width="100%">
                                    <div class="product-label text-center">
                                        <span class="sale">-30%</span>
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a
                                            href="{{ url('product/' . $pageProduct->id) }}">{{ $pageProduct->name }}</a>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4 class="product-price">${{ $pageProduct->price }}</h4>

                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                                        <button class="add-to-cart"><i class="fa fa-heart-o">Add to
                                                cart</i></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
