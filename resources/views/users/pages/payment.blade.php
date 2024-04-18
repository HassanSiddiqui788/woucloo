<?php
$page = 'Woucloo | message';
$pageDesc = '""';
$pageTag = '""';
include 'includes/header.php';
$page = 'Home';
?>

<section class="image-upload">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                <div class="upload-right">
                    <div class="basic-flex">
                        <span class=" check-icon"><i class="fa-solid fa-check"></i></span>
                        <h6>Basic Information</h6>
                    </div>
                    <div class="basic-flex">
                        <span class="check-icon"></span>
                        <h6>Sale Information</h6>
                    </div>
                    <div class="basic-flex">
                        <span class="check-icon"></span>
                        <h6>Shipping</h6>
                    </div>
                    <div class="basic-flex bor-basic">
                        <span class="check-icon"></span>
                        <h6>Publishing</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="right-bg">
                    <div class="right-flex">
                        <h5>Filter</h5>
                        <span><i class="fa-solid fa-xmark"></i></span>
                    </div>
                    <div class="main-drop">
                        <div class="take-sec">
                            <i class="fa-solid fa-camera camera-font"></i>
                            <p class="pic-font">Take A Pic</p>
                        </div>
                        <div class="drop-sec">
                            <div class="drop-files">
                                <img src="images/icon-5.svg" class="img-fluid icon-drop" alt="">
                                <h4 class="">Drop Files Here</h4>
                                <p>Supported Format: PNG, JPEG</p>
                                <p>OR</p>
                                <p>Browse Files</p>
                            </div>

                        </div>
                    </div>
                    <div class="cancel-btn">
                        <a class="btn-a" href="javascript:;">CANCEL</a>
                        <a class="btn-a" href="javascript:;">UPLOAD</a>
                    </div>
                </div>
                <div class="value-bg">
                    <div class="right-flex">
                        <h5>Value Informaton</h5>
                        <div class="label-st">
                            <input type="checkbox">
                            <p class="mb-0">Charge TAX On This Product</p>
                        </div>
                    </div>
                    <div class="">
                        <form action="">
                            <div class="main-billing">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="price-style">
                                                <label for="Desired Price">Desired Price</label>
                                                <input type="text" class="form-control" placeholder="$20.00" name="text">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="price-style">
                                                <label for="Listing Value">Listing Value</label>
                                                <input type="text" class="form-control" placeholder="$15.00" name="text">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="price-style">
                                                <label for="Listing Value">Listing Value</label>
                                                <select name="cars" id="cars">
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="price-style">
                                                <label for="Listing Value">Listing Value</label>
                                                <select class="box-drop" name="cars" id="cars">
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-7">
                                            <div class="condition-st price-style mt-4">
                                                <div class="flex-con">
                                                    <label for="Condition">Condition</label>
                                                    <label for="Condition">Brand</label>
                                                </div>
                                                <span>New Tag</span>
                                                <span>+</span>
                                                <span>Nike</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="right-flex">
                                <h5>Variations</h5>
                                <div class="label-st">
                                    <input type="checkbox">
                                    <p class="mb-0">(Sizes Or Colors)</p>
                                </div>
                            </div>
                            <div class="main-billing">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="price-style">
                                                <label for="Desired Price">Desired Price</label>
                                                <input type="text" class="form-control" placeholder="$20.00" name="text">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="price-style">
                                                <label for="Listing Value">Value</label>
                                                <select class="box-drop" name="cars" id="cars">
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="price-style my-3">
                                                <select class="box-drop" name="cars" id="cars">
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="price-style">
                                                <select class="box-drop" name="cars" id="cars">
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="skin-btn">
                                                <a class="btn-a" href="javascript:;">Add Value</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="main-billing">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="label-st">
                                            <input type="checkbox">
                                            <p class="mb-0">size</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mb-0">Price</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mb-0">Available</p>
                                    </div>
                                </div>

                            </div>
                            <hr class="height-hr mg-0">
                            <div class="main-billing">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="label-st">
                                            <input type="checkbox">
                                            <p class="mb-0  small-font">Small (S)</p>
                                        </div>
                                        <div class="label-st">
                                            <input type="checkbox">
                                            <p class="mb-0 small-font">Medium (M)</p>
                                        </div>
                                        <div class="label-st">
                                            <input type="checkbox">
                                            <p class="mb-0 small-font">Large (L)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="$20.00" name="text">
                                        </div>
                                        <div class="my-3">
                                            <input type="text" class="form-control" placeholder="$20.00" name="text">
                                        </div>
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="$20.00" name="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="$20.00" name="text">
                                            <!-- <i class="fa-solid fa-pen"></i> -->
                                        </div>
                                        <div class="my-3">
                                            <input type="text" class="form-control" placeholder="$20.00" name="text">
                                        </div>
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="$20.00" name="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="height-hr mg-0">
                            <div class="cancel-btn mt-4">
                                <a class="btn-a" href="javascript:;">Save Draft</a>
                                <a class="btn-a" href="javascript:;">Next</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
include 'includes/footer.php';
$page = 'message';
?>