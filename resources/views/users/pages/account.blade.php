@extends('users.layout.layout')

@section('title', 'account');

@section('root')

    <section class="create-ban">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <form action="{{route('account.post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <input type="password" name="password" placeholder="Enter at least 8+ characters"
                                class="create-input">
                        </div>
                        <div class="create-label mt-3">
                            <label for="Full Name:">Confirm Password:</label>
                            <input type="password" name="confirm_password" placeholder="Enter at least 8+ characters"
                                class="create-input">
                        </div>
                        <div class="skin-btn d-flex">
                            <button type="submit" class="btn-a">register</button>
                            <a href="{{route('login.get')}}" class="btn-a">Login</a>
                        </div>
                    </form>
                </div>
           
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="">
                    <img class="img-fluid" src="{{ asset('userassets') }}/images/clothes.png" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>





@endsection
