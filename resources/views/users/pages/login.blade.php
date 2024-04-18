@extends('users.layout.layout')

@section('title', 'login');

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

    <section class="create-ban">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <form action="{{route('login.post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2 class="create-font">Create an login</h2>
                        <div class="create-label mt-3">
                            <label for="Full Name:">Email Address:</label>
                            <input type="email" name="email" placeholder="Example@gmail.com" class="create-input">
                        </div>
                        <div class="create-label mt-3">
                            <label for="Full Name:">Password:</label>
                            <input type="password" name="password" placeholder="Enter at least 8+ characters"
                                class="create-input">
                        </div>
                        <div class="skin-btn">
                            <a href="javascript:;" class="btn-a">Forgot Your Password</a>
                        </div>
                        <div class="skin-btn">
                            <button type="submit" class="btn-a">Login</button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </section>





@endsection
