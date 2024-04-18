@extends('users.layout.layout')

@section('title','filter');

@section('root')

<!-- <section class="product-bg" style="background-image: url(images/product-ban.png);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                <div class="page-icon">
                    <a href="javascript:;">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="dash-ban">
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                <div class="filter-dash">
                    <div class="filter-flex">
                        <h5>Filter</h5>
                        <span><i class="fa-solid fa-xmark"></i></span>
                    </div>
                    <hr class="filter-hr">
                    <div class="head-label">
                        <div class="st-i">
                            <label for="Condition 1">Condition 1</label>
                            <span><i class="fa-solid fa-angle-up"></i></span>
                        </div>
                        <div class="label-st">
                            <input type="checkbox">
                            <span>option 1</span>
                            <input type="checkbox">
                            <span>option 2</span>
                            <input type="checkbox">
                            <span>option 3</span>
                            <input type="checkbox">
                            <span>option 4</span>
                        </div>
                    </div>
                    <div class="head-label">
                        <div class="st-i">
                            <label for="Condition 1">Tag (Select)</label>
                            <span><i class="fa-solid fa-angle-up"></i></span>
                        </div>
                        <div class="box-list">
                            <span>New Tag</span>
                            <span>New Tag</span>
                            <span>New Tag</span>
                            <span>New Tag</span>
                        </div>
                    </div>
                    <div class="head-label">
                        <div class="st-i">
                            <label for="Condition 1">Price Range</label>
                            <span><i class="fa-solid fa-angle-up"></i></span>
                        </div>
                        <div class="box-list box-flex">
                            <span>$ 10</span>
                            <span>$ 100</span>
                        </div>
                        <div class="range-bar">
                        <input type="range" id="vol" name="vol" min="0" max="50" oninput="moveDots()">
                            
                        </div>
                    </div>
                    <div class="head-label">
                        <div class="st-i">
                            <label for="Condition 1">Ratings</label>
                            <span><i class="fa-solid fa-angle-up"></i></span>
                        </div>
                        <span class="rate-flex">
                            <i class="fa-solid fa-star f-20"></i>
                            <i class="fa-solid fa-star f-20"></i>
                            <i class="fa-solid fa-star f-20"></i>
                            <i class="fa-solid fa-star f-20"></i>
                            <i class="fa-regular fa-star f-20"></i>
                        </span>
                    </div>
                    <div class="head-label">
                        <div class="st-i">
                            <label for="Condition 1">Ratings</label>
                            <span><i class="fa-solid fa-angle-up"></i></span>
                        </div>
                        <div class="icon-input">
                            <input class="icon-input__text-field" placeholder="Search" type="text">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="home15 home-pad">
                        <a href="#">RESET</a>
                        <a href="#">APPLY</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-7 col-xl-7">
                <div class="right-bg">
                    <div class="right-flex">
                        <div class="">
                            <h5 class="mb-0">Ask To Trade</h5>
                            <p class="mb-0">All Request Must Be Accepted Before A Trade Can Be Initiated.</p>
                        </div>
                        <span><i class="fa-solid fa-xmark"></i></span>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="adam-flex">
                                <p>Hi, @Adamnorth,</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid margin-img" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                        </div>
                    </div>
                    <div class="right-input">
                        <input type="text" name="name" id="" placeholder="Enter Personalized message (optional)" class="form-control">
                    </div>
                    <div class="skin-btn flex-skin">
                        <a class="btn-a" href="javascript:;">EDIT DETAILS</a>
                        <a class="btn-a" href="javascript:;">REQUEST & SHARE INVENTORY</a>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-10 col-xl-11 mt-3">
                    <div class="right-bg">
                        <div class="right-flex">
                            <div class="">
                                <h5 class="mb-0">Trade Offer From Adam</h5>
                            </div>
                            <span><i class="fa-solid fa-xmark"></i></span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <p>Product Name</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <p>Product Name</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <p>Product Name</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <p>Product Name</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-right-bg">
                        <div class="">
                            <div class="bad-trade">
                                <p class="mb-0">Trade Value Product 456454:</p>
                                <span>$600</span>
                            </div>
                            <div class="bad-trade">
                                <p class="mb-0">Trade Value Of Items To Ship:</p>
                                <span>$500</span>
                            </div>
                            <div class="bad-trade">
                                <p class="mb-0">Credits To Be Deposited:</p>
                                <span>$500</span>
                            </div>
                            <div class="bad-trade">
                                <p class="mb-0">Trade Balance Owing:</p>
                                <span>$0</span>
                            </div>
                            <div class="skin-btn flex-edit">
                                <a class="btn-a" href="javascript:;">ACCEPT TRADE OFFER</a>
                                <a class="btn-a" href="javascript:;">DENY TRADE OFFER</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-10 col-xl-11 mt-3">
                    <div class="right-bg">
                        <div class="right-flex">
                            <div class="">
                                <h5 class="mb-0">Select Items You Want</h5>
                            </div>
                            <span><i class="fa-solid fa-xmark"></i></span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <div class="flex-dummy">
                                            <p>Product Name</p>
                                            <span class="">
                                                <i class="fa-light fa-circle-minus"></i>
                                                <i class="fa-light fa-circle-plus"></i>
                                            </span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <div class="flex-dummy">
                                            <p>Product Name</p>
                                            <span class="">
                                                <i class="fa-light fa-circle-minus"></i>
                                                <i class="fa-light fa-circle-plus"></i>
                                            </span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <div class="flex-dummy">
                                            <p>Product Name</p>
                                            <span class="">
                                                <i class="fa-light fa-circle-minus"></i>
                                                <i class="fa-light fa-circle-plus"></i>
                                            </span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <div class="flex-dummy">
                                            <p>Product Name</p>
                                            <span class="">
                                                <i class="fa-light fa-circle-minus"></i>
                                                <i class="fa-light fa-circle-plus"></i>
                                            </span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-right-bg">
                        <div class="">
                            <div class="bad-trade">
                                <p class="mb-0">Available Buttons:</p>
                                <span>$256</span>
                            </div>
                            <div class="right-input">
                                <input type="text" name="name" id="" placeholder="Enter Personalized message (optional)" class="form-control">
                            </div>
                            <div class="bad-trade">
                                <p class="mb-0">Trade Value:</p>
                                <span>$500</span>
                            </div>
                            <div class="bad-trade">
                                <p class="mb-0">Trade Balance Owing:</p>
                                <span>$400</span>
                            </div>
                            <div class="skin-btn">
                                <a class="btn-a" href="javascript:;">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-10 col-xl-11 mt-3">
                    <div class="right-bg">
                        <div class="right-flex">
                            <div class="">
                                <h5 class="mb-0">Select Items You Want</h5>
                            </div>
                            <span><i class="fa-solid fa-xmark"></i></span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <p>Product Name</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <p>Product Name</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <p>Product Name</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adam-p adam-bg">
                                    <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                                    <div class="">
                                        <p>Product Name</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        <p>Trade Value: $250</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-right-bg">
                        <div class="">
                            <div class="bad-trade">
                                <p class="mb-0">Available Buttons:</p>
                                <span>$256</span>
                            </div>
                            <div class="right-input">
                                <input type="text" name="name" id="" placeholder="Enter Personalized message (optional)" class="form-control">
                            </div>
                            <div class="bad-trade">
                                <p class="mb-0">Trade Value:</p>
                                <span>$500</span>
                            </div>
                            <div class="bad-trade">
                                <p class="mb-0">Trade Balance Owing:</p>
                                <span>$400</span>
                            </div>
                            <div class="skin-btn">
                                <a class="btn-a" href="javascript:;">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-10 col-xl-11 mt-3">
                    <div class="right-bg">
                        <div class="right-flex">
                            <div class="">
                                <h5 class="mb-0">Shipping Information</h5>
                            </div>
                            <span><i class="fa-solid fa-xmark"></i></span>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="bil-bg">
                                    <label for="Name:">Name:</label>
                                    <input type="text" name="name" placeholder="First Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bil-bg">
                                    <input type="text" name="name" placeholder="First Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="bil-bg">
                                    <label for="Address:">Address:</label>
                                    <input type="text" name="name" placeholder="First Name" class="form-control">
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-3 city-pad">
                                        <input type="City" placeholder="City" class="form-control">
                                    </div>
                                    <div class="col-md-3 city-pad">
                                        <input type="City" placeholder="State" class="form-control">
                                    </div>
                                    <div class="col-md-5 city-pad">
                                        <input type="City" placeholder="Zip" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="bil-bg">
                                    <label for="Name:">Phone:</label>
                                    <input type="text" name="number" placeholder="0000 000 0000" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bil-bg">
                                    <label for="Name:">Email:</label>
                                    <input type="text" name="email" placeholder="Example@gmail.com" class="form-control">
                                </div>
                            </div>
                            <div class="label-st st-pad">
                                <input type="checkbox">
                                <span>Make This Default Address</span>
                            </div>
                            <div class="col-md-12">
                                <div class="bil-bg">
                                    <label for="Name:">Special Instruction:</label>
                                    <!-- <input type="text" name="number" placeholder="" class="form-control"> -->
                                    <textarea name="messsage" placeholder="Add notes for our Delivery staff" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="skin-btn flex-edit">
                            <a class="btn-a" href="javascript:;">ACCEPT TRADE OFFER</a>
                            <a class="btn-a" href="javascript:;">DENY TRADE OFFER</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>






@endsection