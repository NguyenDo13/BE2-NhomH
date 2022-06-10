<div class="module-6 products">
     <div class="pad-module bg-white ">
          <div class="container text-center py-3 title-module">
               <h2>Sale Products</h2>
          </div>
          <div class="container">
               <div class="slider">
                    <div class="owl-carousel owl-theme">
                         @foreach ($products_sale as $item)
                         <div class="product item text-center">
                              <div class="image-item">
                                   <div class="labels">
                                        {{-- <div class="onhot"><span>Hot</span></div> --}}
                                        <div class="onsale"><span>{{$item['sale']}}%</span></div>
                                   </div>
                                   <img class="" style="width: 100%; height:100%" src="{{ asset('assets/clients/images/' .$item['image'] ) }}" alt="không có ảnh trong folder images">
                              </div>
                              <div class="item-content">
                                   <a href="" class="tag-item">Fashion</a>
                                   <a href="" class="name-item">
                                        <h3>{{$item['name']}}</h3>
                                   </a>
                                   <div class="star-item">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                             class="fa fa-star"></i><i class="fa fa-star"></i>
                                   </div>
                                   <div class="price-item">
                                        {{-- <span>
                                             <span>$</span>209.00
                                        </span>
                                        - --}}
                                        <span>
                                             <span>$</span>{{$item['price']}}
                                        </span>
                                   </div>
                              </div>
                              <div class="wrap-selects">
                                   <div class="add-to-wishlist">
                                        <i class="far fa-heart"></i>
                                   </div>
                                   <div class="btn-add-to-cart" style="width: 150px">
                                        <a href="">
                                             <div><span class="material-symbols-outlined" style="font-size: 1.5em;">
                                                       shopping_bag
                                                  </span></div>Add to cart
                                        </a>
                                   </div>
                                   <div class="quick-view">
                                        <i class="fas fa-external-link-alt" style="font-size: 14px;"></i>
                                   </div>
                              </div>
                         </div>
                         @endforeach
                         
                         
     
                    </div>
               </div>
               
          </div>
     </div>
</div>
