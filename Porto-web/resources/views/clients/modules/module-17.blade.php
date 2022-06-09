@foreach ($detail as $detail)
    
<div class="module-17">
    <div class="container">
        <div class="col-md-12 " style="float: right;">
            <div class="row">

                <h3 class="product-title">{{$detail->name}}</h3>
                
                <div class="rating" style="display: flex;">
                    <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>

                    <span class="review" style="padding: 0px 5px 0 5px;">1 customer review</span>
                    <span class="review" style=" border-left:1px solid gray ; padding-left:5px;">Add a
                        review</span>

                </div>
            </div>
            <div class="row">
                <h4 class="price"> <span>${{$detail->price}} - ${{$detail->price}}</span>
                </h4>
                <p class="product-description">{{$detail->description}}</p>
                <p>SKU: <span style="font-weight: bold;">PT0007</span></p>
                <p>CATEGORY: <span style="font-weight: bold;">FASHION</span></p>
                <p>TAGS: <span style="font-weight: bold;">BAG,CLOTHES,FASHION</span></p>
                <h5 class="colors">COLOR:
                    <span class="color black"></span>
                    <span class="color blue"></span>
                </h5>

                <h5 class="sizes">SIZE:
                    <button style="border:1px solid rgb(210, 208, 208) ;background: white;"> Extra Large</button>
                    <button style="border:1px solid rgb(210, 208, 208) ;background:white ;">Large</button>
                </h5>
            </div>
            <div id="add">
                <div class="buttons_added qty">
                    <button class="minus is-form" type="button" value="-">-</button>
                    <input aria-label="quantity" class="input-qty" max="100" min="0" name="" type="number"
                        value="1">
                    <button class="plus is-form" type="button" value="+">+</button>
                </div>
                <div class="buttons_added added">
                    <button class="add" type="submit"
                        style="font-weight: bold;font-size: 15px; height:3rem;width:12rem">
                        <i class="fa fa-star"></i>ADD TO CART</button>
                </div>
            </div>







            <div class="action pt-3">

                <a id="icon"><i class="fa-brands fa-facebook"></i></a>
                <a id="icon"><i class="fa-brands fa-twitter"></i></a>
                <a id="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                <a id="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a id="icon"><i class="fa-solid fa-envelope"></i></a>
                <a style="text-decoration: none"><i class="fa-solid fa-heart"></i><span>Add to
                        wishlist</span></a>

            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('clients.modules.module-18')
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
