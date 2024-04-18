@extends('users.layout.layout')

@section('title','view');

@section('root')

<section class="product-bg" style="background-image: url({{ asset('userassets') }}/images/product-ban.png);">
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
</section>

<section class="dash-ban">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                <div class="side-dash">
                    <div class="dash-flex">
                        <img class="img-fluid dash-img" src="{{ asset('userassets') }}/images/pic-23.png" alt="">
                        <div class="">
                            <h6 class="dash-head">Olvia Lopez</h6>
                            <span class="dash-span">@Olivialopez12</span>
                        </div>
                    </div>
                    <hr class="height-hr">
                    <div class="pay-head">
                        <p>Region:</p>
                        <span>Montreal Qubic</span>
                    </div>
                    <div class="pay-head">
                        <p>bio:</p>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                    </div>
                    <div class="skin-btn">
                        <a class="btn-a" href="javascript:;">ADD TO INVENTORY</a>
                    </div>
                    <div class="skin-btn">
                        <a class="btn-a" href="javascript:;">BOOST LISTING</a>
                    </div>
                    <div class="skin-btn">
                        <a class="btn-a" href="javascript:;">BUY CREDITS</a>
                    </div>
                    <div class="head-bad mt-4">
                        <p class="mb-0">Badges:</p>
                        <span><i class="fa-regular fa-id-badge"></i></span>
                    </div>
                    <div class="head-bad">
                        <p class="mb-0">Followers:</p>
                        <span>25</span>
                    </div>
                    <div class="head-bad">
                        <p class="mb-0">Following:</p>
                        <span>30</span>
                    </div>
                    <div class="head-bad">
                        <p class="mb-0">Ratings:</p>
                        <span>
                            <i class="fa-solid fa-star f-10"></i>
                            <i class="fa-solid fa-star f-10"></i>
                            <i class="fa-solid fa-star f-10"></i>
                            <i class="fa-solid fa-star f-10"></i>
                            <i class="fa-regular fa-star f-10"></i>
                        </span>
                    </div>
                    <div class="head-bad">
                        <p class="mb-0">Tags:</p>

                        <div class="tags-list">
                            <span>Fashion</span>
                            <span>Petite</span>
                            <span>Trend</span>
                            <span>Trend</span>
                            <span>Nike</span>
                            <span>Design</span>
                            <span>Limited</span>
                        </div>
                    </div>
                    <div class="skin-btn">
                        <a class="btn-a" href="javascript:;">LET'S TRADE</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9 col-xl-9">
                <div class="tab-teaser">
                    <div class="tab-menu">
                        <ul>
                            <li><a href="#" class="active" data-rel="tab-1">Traded Items (14)</a></li>
                            <li><a href="#" data-rel="tab-2" class="">Closet (7)</a></li>
                            <li><a href="#" data-rel="tab-3" class="">Closet Wishes (24)</a></li>
                            <li><a href="#" data-rel="tab-4" class="">Pending request (12)</a></li>
                        </ul>
                    </div>

                    <div class="tab-main-box">
                        <div class="tab-box" id="tab-1" style="display:block;">
                            <div class="row">
                                <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="card1">
                                                <img src="{{ asset('userassets') }}/images/pic8.png" class="img-fluid" alt="">
                                                <div class="home12">
                                                    <div class="home9">
                                                        <div class="home10">
                                                            <h4>Product Title</h4>
                                                        </div>
                                                        <div class="home11">
                                                            <i class="fa-regular fa-bell"></i>
                                                        </div>
                                                    </div>
                                                    <div class="home14">
                                                        <h4>Trade Value: $250</h4>
                                                        <p>Size: Small</p>
                                                    </div>
                                                    <div class="skin-btn">
                                                        <a class="btn-a" href="javascript:;">EDIT DETAILS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="card1">
                                                <img src="{{ asset('userassets') }}/images/pic8.png" class="img-fluid" alt="">
                                                <div class="home12">
                                                    <div class="home9">
                                                        <div class="home10">
                                                            <h4>Product Title</h4>
                                                        </div>
                                                        <div class="home11">
                                                            <i class="fa-regular fa-bell"></i>
                                                        </div>
                                                    </div>
                                                    <div class="home14">
                                                        <h4>Trade Value: $250</h4>
                                                        <p>Size: Small</p>
                                                    </div>
                                                    <div class="skin-btn">
                                                        <a class="btn-a" href="javascript:;">EDIT DETAILS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="card-2">
                                                <div class="name-flex">
                                                    <img class="img-fluid img-filter" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                                                    <div class="name-font">
                                                        <div class="flex-full">
                                                            <h6>Full name</h6>
                                                            <!-- <span><i class="fa-regular fa-bell"></i></span> -->
                                                        </div>
                                                        <p>Professional Title</p>
                                                        <p>50 Items Available</p>
                                                    </div>

                                                </div>
                                                <div class="white-btn">
                                                    <a href="javascript:;">VIEW PROFILE</a>
                                                    <a href="javascript:;">SEE REQUEST</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="card-2">
                                                <div class="name-flex">
                                                    <img class="img-fluid img-filter" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                                                    <div class="name-font">
                                                        <div class="flex-full">
                                                            <h6>Full name</h6>
                                                            <!-- <span><i class="fa-regular fa-bell"></i></span> -->
                                                        </div>
                                                        <p>Professional Title</p>
                                                        <p>50 Items Available</p>
                                                    </div>

                                                </div>
                                                <div class="white-btn">
                                                    <a href="javascript:;">VIEW PROFILE</a>
                                                    <a href="javascript:;">SEE REQUEST</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="card-2">
                                                <div class="name-flex">
                                                    <img class="img-fluid img-filter" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                                                    <div class="name-font">
                                                        <div class="flex-full">
                                                            <h6>Full name</h6>
                                                            <!-- <span><i class="fa-regular fa-bell"></i></span> -->
                                                        </div>
                                                        <p>Professional Title</p>
                                                        <p>50 Items Available</p>
                                                    </div>

                                                </div>
                                                <div class="white-btn">
                                                    <a href="javascript:;">VIEW PROFILE</a>
                                                    <a href="javascript:;">SEE REQUEST</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="card-2">
                                                <div class="name-flex">
                                                    <img class="img-fluid img-filter" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                                                    <div class="name-font">
                                                        <div class="flex-full">
                                                            <h6>Full name</h6>
                                                            <!-- <span><i class="fa-regular fa-bell"></i></span> -->
                                                        </div>
                                                        <p>Professional Title</p>
                                                        <p>50 Items Available</p>
                                                    </div>

                                                </div>
                                                <div class="white-btn">
                                                    <a href="javascript:;">VIEW PROFILE</a>
                                                    <a href="javascript:;">SEE REQUEST</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="card1">
                                                <img src="{{ asset('userassets') }}/images/shoes-1.png" class="img-fluid" alt="">
                                                <div class="home12">
                                                    <div class="home9">
                                                        <div class="home10">
                                                            <h4>Product Title</h4>
                                                        </div>
                                                        <div class="home11">
                                                            <i class="fa-regular fa-bell"></i>
                                                        </div>
                                                    </div>
                                                    <div class="home14">
                                                        <h4>Trade Value: $250</h4>
                                                        <p>Size: Small</p>
                                                    </div>
                                                    <div class="skin-btn">
                                                        <a class="btn-a" href="javascript:;">EDIT DETAILS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="card1">
                                                <img src="{{ asset('userassets') }}/images/shoes-2.png" class="img-fluid" alt="">
                                                <div class="home12">
                                                    <div class="home9">
                                                        <div class="home10">
                                                            <h4>Product Title</h4>
                                                        </div>
                                                        <div class="home11">
                                                            <i class="fa-regular fa-bell"></i>
                                                        </div>
                                                    </div>
                                                    <div class="home14">
                                                        <h4>Trade Value: $250</h4>
                                                        <p>Size: Small</p>
                                                    </div>
                                                    <div class="skin-btn">
                                                        <a class="btn-a" href="javascript:;">EDIT DETAILS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-box" id="tab-2">
                            <h2>Tab 2</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                        <div class="tab-box" id="tab-3">
                            <h2>Tab 3</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                        <div class="tab-box" id="tab-4">
                            <h2>Tab 4</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>






@endsection