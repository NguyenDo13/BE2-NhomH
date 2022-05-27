<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <div class="type-22" style="float: right;">
        <!-- Cart -->


        <p style="font-weight: bold ;font-size: 26px;">Shopping cart</p>


        <div class="cart-list">
            <div class="product-widget" style="display:flex ;">
                <div class="product-body">
                    <h3 class="product-name" style="font-size: 15px;"><a href="#">product name goes here</a></h3>
                    <h4 class="product-price" style="font-size: 15px;color: rgb(117, 117, 117);font-weight: normal;">
                        <span class="qty">1x</span>$980.00</h4>
                </div>

                <div class="product-img">
                    <a href="" class="delete" aria-label="Remove this item"><i class="fa fa-times"></i></a>
                    <img src="{{ asset('module-22/image/product-75-150x150.jpg') }}" alt="" width="100px" height="100px">
                </div>



            </div>
        </div>
        <div class="cart-summary">
            <div class="total">
                <h5>SUBTOTAL: <span style="padding-left: 120px;">$2940.00</span></h5>

            </div>

        </div>
        <div class="cart-btns">
            <a href="#">View Cart</a>
            <a href="#">Checkout </a>
        </div>


        <!-- /Cart -->
    </div>
</body>

</html>