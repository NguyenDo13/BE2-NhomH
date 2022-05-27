<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    /*reset css*/
    div,
    label {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 20px;
    }

    h1 {
        font-size: 1.5em;
        margin: 10px;
    }

    /****** Style Star Rating Widget *****/
    #rating {
        border: none;
        float: left;
    }

    #rating>input {
        display: none;
    }

    /*ẩn input radio - vì chúng ta đã có label là GUI*/
    #rating>label:before {

        font-size: 10px;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    /*1 ngôi sao*/
    #rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    /*0.5 ngôi sao*/
    #rating>label {
        color: black;

    }


    /*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
    /*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
    /* #rating>input:checked~label,
    #rating:not(:checked)>label:hover,
    #rating:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    /* Hover vào các sao phía trước ngôi sao đã chọn*/
    /* #rating>input:checked+label:hover,
    #rating>input:checked~label:hover,
    #rating>label:hover~input:checked~label,
    #rating>input:checked~label:hover~label {
        color: #FFED85;
    }  */
    </style>
</head>

<body>
    <div class="type-15">
        <div class="col-md-9 " style="float: right;">
            <!-- store top filter -->
            <div class="store-filter clearfix">
                <div class="store-sort" style="display: flex;">
                    <label>
                        Sort By:
                        <select class="input-select">
                            <option value="0">Popular</option>
                            <option value="1">Position</option>
                        </select>
                    </label>

                    <label>
                        View:
                        <select class="input-select">
                            <option value="0">20</option>
                            <option value="1">50</option>
                        </select>
                    </label>
                    <ul class="store-grid">
                        <li class="active"><i class="fa fa-th"></i></li>

                        <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                </div>

            </div>
            <!-- /store top filter -->

            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-13-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt=" fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-81-300x300.jpg" alt=" fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/product-68-300x300.jpg" alt="fluid-img">
                    </div>
                    <div class="row text-center">
                        <span style="font-size: 10px;color: gray;">SHOES</span>
                        <h6 style="font-weight: normal;">Basketball Sports Blue Shoes</h6>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                        <h4 style="font-size: 18px;"><span
                                style="text-decoration: line-through;font-size: 14px;color: gray;">1.999.00</span>
                            $1.699.00
                        </h4>
                        <div class="row">
                            <!-- <div class="col-2" style="display: inline-block;"><button>ggf</button></div>
                            <div class="col-8"><Button>ADD TO CART</Button></div>
                            <div class="col-2" style="display: block;"><button>ggf</button></div> -->
                            <div class="container">
                                <Button>ADD TO CART</Button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- store bottom filter -->
            <div class="store-filter clearfix" style="display: flex;float: right;">
                <span class="store-qty">Showing 20-100 products</span>
                <ul class="store-pagination">
                    <li class="active">1</li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
            <!-- /store bottom filter -->
        </div>
    </div>
</body>

</html>