@extends('users.layout.layout')

@section('title','message');

@section('root')

<section class="chat-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                <div class="right-chat">
                    <div class="filter-flex">
                        <h5>Message</h5>
                        <span><i class="fa-regular fa-comments com-st"></i></span>
                    </div>
                    <hr class="filter-hr">
                    <div class="msg-flex">
                        <button class="chat-btn">New Request</button>
                        <button class="mes-btn">New Request</button>
                    </div>
                    <hr class="filter-hr">
                    <div class="client-flex">
                        <img class="img-fluid user-st" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                        <div class="user-head">
                            <h6>Michele</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                        <div class="lorem-font">
                            <p>Just Now</p>
                        </div>
                    </div>
                    <div class="client-flex">
                        <img class="img-fluid user-st" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                        <div class="user-head">
                            <h6>Audrey</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                        <div class="lorem-font">
                            <p>3 June</p>
                        </div>
                    </div>
                    <div class="client-flex">
                        <img class="img-fluid user-st" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                        <div class="user-head">
                            <h6>Jeff</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                        <div class="lorem-font">
                            <p>3 June</p>
                        </div>
                    </div>
                    <div class="client-flex">
                        <img class="img-fluid user-st" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                        <div class="user-head">
                            <h6>Audrey</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                        <div class="lorem-font">
                            <p>3 June</p>
                        </div>
                    </div>
                    <div class="user-flex">
                        <img class="img-fluid user-st" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                        <div class="user-head">
                            <h6>Jeff</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                        <div class="lorem-font">
                            <p>3 June</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                <div class="main-chat">
                    <div class="chat-flex">
                        <img class="img-fluid chat-st" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                        <div class="Trade-flex">
                            <p>New Trade Request</p>
                            <h3>Michelle</h3>
                        </div>
                        <div class="">
                            <img class="img-fluid chat-st" src="{{ asset('userassets') }}/images/thr-dots.svg" alt="">
                        </div>
                    </div>
                    <div class="chatting-pad">
                        <div class="chatting-flex">
                            <img class="img-fluid chat-st" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                            <div class="card-chat">
                                <img src="{{ asset('userassets') }}/images/pic8.png" class="img-fluid pic-fluid" alt="">
                                <div class="home12">
                                    <div class="">
                                        <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                    </div>
                                    <div class="msg-btn">
                                        <a href="">ACCEPTS</a>
                                        <a href="">DENY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deny-flex">
                        <div class="mes-chat">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                        <img class="img-fluid chat-st" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                    </div>
                    <div class="accept-flex">
                        <img class="img-fluid chat-st" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                        <div class="mes-chat">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                    <hr class="filter-hr mt-4">
                    <div class="icon-pad">
                        <div class="flex-icons">
                            <img src="{{ asset('userassets') }}/images/icon-1.svg" class="img-fluid icon-fluid" alt="">
                            <img src="{{ asset('userassets') }}/images/icon-2.svg" class="img-fluid icon-fluid" alt="">
                            <img src="{{ asset('userassets') }}/images/icon-3.svg" class="img-fluid icon-fluid" alt="">
                        </div>
                        <div class="icon-input">
                            <input class="icon-input__text-field" placeholder="Search" type="text">
                            <i class="fa-regular fa-face-smile"></i>
                        </div>
                        <img src="{{ asset('userassets') }}/images/icon-4.svg" class="img-fluid icon-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                <div class="filter-dash">
                    <div class="filter-flex">
                        <h5>Trade Offer Details</h5>
                        <span><i class="fa-solid fa-xmark"></i></span>
                    </div>
                    <hr class="filter-hr">
                    <div class="Michelle-center">
                        <img class="img-fluid img-filter" src="{{ asset('userassets') }}/images/user-img.svg" alt="">
                        <h3 class="Michelle">Michelle</h3>
                    </div>
                    <hr class="filter-hr mt-4">
                    <div class="main-product">
                        <div class="Available-style">
                            <h6>Michelle's Available Inventory</h6>
                            <a href="javascript:;">See More</a>
                        </div>
                        <div class="adam-p adam-bg dummy-margin mt-top">
                            <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                            <div class="">
                                <p>Product Name</p>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                <div class="cart-btn">
                                    <a class="" href="javascript:;">Add to Cart</a>
                                </div>

                            </div>
                        </div>
                        <div class="adam-p adam-bg dummy-margin mt-top">
                            <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                            <div class="">
                                <p>Product Name</p>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                <div class="cart-btn">
                                    <a class="" href="javascript:;">Add to Cart</a>
                                </div>

                            </div>
                        </div>
                        <div class="adam-p adam-bg dummy-margin mt-top">
                            <img class="img-fluid img-bor" src="{{ asset('userassets') }}/images/right-img.png" alt="">
                            <div class="">
                                <p>Product Name</p>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                <div class="cart-btn">
                                    <a class="" href="javascript:;">Add to Cart</a>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>





@endsection