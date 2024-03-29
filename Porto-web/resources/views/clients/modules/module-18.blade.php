{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/18.css">
</head>

<body> --}}
    <div class="module-18 my-5">
        <div class="row">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description"
                        aria-selected="true">DESCRIPTION</button>
                    <button class="nav-link" id="nav-sizeguide-tab" data-bs-toggle="tab" data-bs-target="#nav-sizeguide"
                        type="button" role="tab" aria-controls="nav-sizeguide" aria-selected="false">SIZE GUIDE</button>
                    <button class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews"
                        type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">REVIEWS</button>
                    <button class="nav-link" id="nav-customtab-tab" data-bs-toggle="tab" data-bs-target="#nav-customtab"
                        type="button" role="tab" aria-controls="nav-customtab" aria-selected="false">CUSTOM TAB</button>
                </div>
            </nav>
            <div class="row">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                        aria-labelledby="nav-description-tab">
                        <div class="text-column">
                            <div class="text-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud ipsum
                                    consectetur sed do, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                            </div>
                            <div class="info-list">
                                <ul class="check-list">
                                    <li style="align-items: center;" class="check-list-item d-flex py-2">
                                        <i class="fa-solid fa-circle-check me-3"></i>
                                        <div class="list-item-desc">
                                            Any Product types that You want – Simple, Configurable
                                        </div>
                                    </li>
                                    <li style="align-items: center;" class="check-list-item d-flex py-2">
                                        <i class="fa-solid fa-circle-check me-3"></i>
                                        <div class="list-item-desc">
                                            Downloadable/Digital Products, Virtual Products
                                        </div>
                                    </li>
                                    <li style="align-items: center;" class="check-list-item d-flex py-2">
                                        <i class="fa-solid fa-circle-check me-3"></i>
                                        <div class="list-item-desc">
                                            Inventory Management with Backordered items
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-content">
                                <p>
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-sizeguide" role="tabpanel" aria-labelledby="nav-sizeguide-tab">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="single-image">
                                    <img src="{{asset('assets/clients/images/size_guide.png')}}" alt="">

                                </div>
                            </div>
                            <div class="col-md-8 text-center">
                                <div class="size-image">
                                    <img src="{{asset('assets/clients/images/Size.PNG')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                        <div id="reviews" class="list-reviews">
                            <div id="comment">

                                <h2 class="reviews-title">
                                    .... for <span>"Product"</span>
                                </h2>
                                <ol class="commentlist">
                                    <li class="review byuser" id="li-comment">
                                        <div class="row">
                                            <div class="col-md-1 img-user">
                                                <img src="images/user.png" alt="">
                                            </div>
                                            <div class="col-md-11 comment-text">
                                                <div class="star-rating"></div>
                                                <p class="meta">
                                                    <strong class="review-author">abc</strong>
                                                    <span class="review-dash">-</span>
                                                    <time class="review-published-date" datetime=""> </time>
                                                </p>
                                                <div class="description">
                                                    <p>Awesome!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <hr class="tall my-5">
                            <div class="review-form">
                                <h3>ADD A REVIEW</h3>
                                <form id="review-form" action="index.html" method="post">
                                    <h2>Your rating *</h2>
                                    <div id="rating">
                                        <svg class="star" id="1" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                            xml:space="preserve" style="fill: #10100f;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                            </polygon>
                                        </svg>
                                        <svg class="star" id="2" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                            xml:space="preserve" style="fill: #10100f;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                            </polygon>
                                        </svg>
                                        <svg class="star" id="3" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                            xml:space="preserve" style="fill: #10100f;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                            </polygon>
                                        </svg>
                                        <svg class="star" id="4" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                            xml:space="preserve" style="fill: #10100f;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                            </polygon>
                                        </svg>
                                        <svg class="star" id="5" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                            xml:space="preserve" style="fill: #808080;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                            </polygon>
                                        </svg>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="review">Your review *</label>
                                        <textarea class="form-control" rows="8" cols="45" placeholder="Your Reivew"
                                            name="review" id="review"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input class="form-control" type="text" placeholder="Name" name="name" id="name"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input class="form-control" type="text" placeholder="Email" name="email"
                                            id="email" value="">
                                    </div>
                                    <a href="#" id="submit" class="btn btn-primary">Submit</a>
                                    <input id="submitForm" type="submit" style="display:none;">
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-customtab" role="tabpanel" aria-labelledby="nav-customtab-tab">
                        <div class="text-column">
                            <div class="text-content">
                                <p>Custom Tab Content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
{{-- 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="js/18.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
</body>

</html> --}}