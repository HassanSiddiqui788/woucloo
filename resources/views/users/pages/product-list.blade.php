@extends('users.layout.layout')

@section('title', 'product-list');

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

    {{-- <section class="create-ban">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="">
                        <h2 class="create-font">Create an Account</h2>
                        <div class="create-label mt-2">
                            <label for="Full Name:">Full Name:</label>
                            <input type="text" name="name" placeholder="Enter Full name" class="create-input">
                        </div>
                        <div class="create-label mt-3">
                            <label for="Full Name:">Email Address:</label>
                            <input type="text" name="email" placeholder="Example@gmail.com" class="create-input">
                        </div>
                        <div class="create-label mt-3">
                            <label for="Full Name:">Password:</label>
                            <input type="text" name="text" placeholder="Enter at least 8+ characters"
                                class="create-input">
                        </div>
                        <div class="create-label mt-3">
                            <label for="Full Name:">Confirm Password:</label>
                            <input type="text" name="text" placeholder="Enter at least 8+ characters"
                                class="create-input">
                        </div>
                        <div class="skin-btn">
                            <button type="submit" class="btn-a">register</button>
                        </div>
                        <div class="skin-btn">
                            <a href="javascript:;" class="btn-a">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}





@endsection
