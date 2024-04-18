@extends('users.layout.layout')

@section('title','Home')

@section('root')

<!-- ==== preloader start ==== -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="G" class="letters-loading">
                    G
                </span>
            </div>
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
</div>
<!-- ==== / preloader end ==== -->


<section class="home1">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="owl-carousel owl-theme">
                    <div class="item postion">
                        <img src="{{ asset('userassets') }}/images/pic1.png" alt="">
                        <div class="home2">
                            <h2>We <span class="bold">Picked</span> Some <span class="bold">Bright Cool Things</span> For You!</h2>
                            <div class="home3">
                                <a href="#">ASK TO TRADE</a>
                            </div>
                        </div>
                    </div>
                    <div class="item postion">
                        <img src="{{ asset('userassets') }}/images/pic1.png" alt="">
                        <div class="home2">
                            <h2>We <span class="bold">Picked</span> Some <span class="bold">Bright Cool Things</span> For You!</h2>
                            <div class="home3">
                                <a href="#">ASK TO TRADE</a>
                            </div>
                        </div>
                    </div>
                    <div class="item postion">
                        <img src="{{ asset('userassets') }}/images/pic1.png" alt="">
                        <div class="home2">
                            <h2>We <span class="bold">Picked</span> Some <span class="bold">Bright Cool Things</span> For You!</h2>
                            <div class="home3">
                                <a href="#">ASK TO TRADE</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="img_after">
        <img src="{{ asset('userassets') }}/images/line.png" alt="">
    </div>
    <div class="img_before">
        <img src="{{ asset('userassets') }}/images/line1.png" alt="">
    </div>
</section>

<section class="home4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                <div class="home5">
                    <div class="home6">
                        <img src="{{ asset('userassets') }}/images/pic2.png" class="img-fluid" alt="">
                        <p>DRESS</p>
                    </div>
                    <div class="home6">
                        <img src="{{ asset('userassets') }}/images/pic3.png" class="img-fluid" alt="">
                        <p>GLASSES</p>
                    </div>
                    <div class="home6">
                        <img src="{{ asset('userassets') }}/images/pic4.png" class="img-fluid" alt="">
                        <p>UMBRELLA</p>
                    </div>
                    <div class="home6">
                        <img src="{{ asset('userassets') }}/images/pic5.png" class="img-fluid" alt="">
                        <p>WALLET</p>
                    </div>
                    <div class="home6">
                        <img src="{{ asset('userassets') }}/images/pic6.png" class="img-fluid" alt="">
                        <p>WATCH</p>
                    </div>
                    <div class="home6">
                        <img src="{{ asset('userassets') }}/images/pic7.png" class="img-fluid" alt="">
                        <p>BAG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home7">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="home8">
                    <h2>Featured Items</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic8.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic9.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic10.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic11.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic12.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic13.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic14.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic15.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home7">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="home8">
                    <h2>Regular Items</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic8.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic9.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic10.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic11.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic12.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic13.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic14.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card1">
                            <img src="{{ asset('userassets') }}/images/pic15.png" class="img-fluid" alt="">
                            <div class="home12">
                                <div class="home9">
                                    <div class="home10">
                                        <h4>Product Title</h4>
                                    </div>
                                    <div class="home11">
                                        <i class="fa-regular fa-user"></i>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="home13">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="home14">
                                    <h4>$230</h4>
                                    <p>290 items Sold</p>
                                </div>
                                <div class="home15">
                                    <a href="#">ASK TO TRADE</a>
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home16">
    <div class="container">
        <div class="row home19">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="home18">
                    <h2>Just <span class="bold">Watch,</span> Choose And <span class="bold">Shop.</span> </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    <div class="home20">
                        <a href="#">EXPLORE NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="home17">
                    <img src="{{ asset('userassets') }}/images/pic16.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home21">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="home22">
                    <h2>Featured Closets</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="home23">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <img src="{{ asset('userassets') }}/images/pic22.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="home24">
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="home25">
                                        <a href="#">VIEW STORE</a>
                                        <a href="#">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="home23">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <img src="{{ asset('userassets') }}/images/pic22.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="home24">
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="home25">
                                        <a href="#">VIEW STORE</a>
                                        <a href="#">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="home23">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <img src="{{ asset('userassets') }}/images/pic22.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="home24">
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="home25">
                                        <a href="#">VIEW STORE</a>
                                        <a href="#">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="home23">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <img src="{{ asset('userassets') }}/images/pic22.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="home24">
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="home25">
                                        <a href="#">VIEW STORE</a>
                                        <a href="#">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="home23">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <img src="{{ asset('userassets') }}/images/pic22.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="home24">
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="home25">
                                        <a href="#">VIEW STORE</a>
                                        <a href="#">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="home23">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <img src="{{ asset('userassets') }}/images/pic22.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="home24">
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="home25">
                                        <a href="#">VIEW STORE</a>
                                        <a href="#">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="home23">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <img src="{{ asset('userassets') }}/images/pic22.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="home24">
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="home25">
                                        <a href="#">VIEW STORE</a>
                                        <a href="#">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="home23">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <img src="{{ asset('userassets') }}/images/pic22.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="home24">
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="home25">
                                        <a href="#">VIEW STORE</a>
                                        <a href="#">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="home23">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <img src="{{ asset('userassets') }}/images/pic22.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="home24">
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="home25">
                                        <a href="#">VIEW STORE</a>
                                        <a href="#">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<a id="button_top"><i class="fa fa-chevron-up"></i></a>

@endsection