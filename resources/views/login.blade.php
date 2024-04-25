@extends('layouts.index')
@section('structure')
<!-- Wrapper -->
<div id="wrapper">
    <!-- Compare Properties Widget
    ================================================== -->
    <div class="compare-slide-menu">
        <div class="csm-trigger"></div>
        <div class="csm-content">
            <h4>Compare Properties <div class="csm-mobile-trigger"></div></h4>
            <div class="csm-properties">
                <!-- Property -->
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>For Sale</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">Eagle Apartments <i>$420,000</i></span>
                        </div>
                        <img src="images/listing-01.jpg" alt="">
                    </a>
                </div>
                <!-- Property -->
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>For Sale</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">Selway Apartments <i>$420,000</i></span>
                        </div>
                        <img src="images/listing-03.jpg" alt="">
                    </a>
                </div>

                <!-- Property -->
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>For Sale</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">Oak Tree Villas <i>$535,000</i></span>
                        </div>
                        <img src="images/listing-05.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="csm-buttons">
                <a href="compare-properties.html" class="button">Compare</a>
                <a href="#" class="button reset">Reset</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Titlebar
    ================================================== -->
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Log In & Register</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Log In & Register</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact
    ================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <button class="button social-login via-twitter"><i class="fa fa-twitter"></i> Log In With Twitter</button>
                <button class="button social-login via-gplus"><i class="fa fa-google-plus"></i> Log In With Google Plus</button>
                <button class="button social-login via-facebook"><i class="fa fa-facebook"></i> Log In With Facebook</button>
                <!--Tab -->
                <div class="my-account style-1 margin-top-5 margin-bottom-40">
                    <ul class="tabs-nav">
                        <li class=""><a href="{{route('loginPage')}}">Log In</a></li>
                        <li><a href="{{route('registrationPage')}}">Register</a></li>
                    </ul>
                    <div class="tabs-container alt">
                        <!-- Login -->
                        <div class="tab-content" id="tab1">
                            <form method="POST" class="login" action="{{route('login')}}">
                                @csrf
                                <p class="form-row form-row-wide">
                                    <label for="username">Username:
                                        <i class="im im-icon-Male"></i>
                                        <input type="text" class="input-text" name="username" id="username" value="" />
                                    </label>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="password">Password:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password" id="password"/>
                                    </label>
                                </p>
                                <p class="form-row">
                                    <input type="submit" class="button border margin-top-10" name="login" value="Login" />
                                    <label for="rememberme" class="rememberme">
                                        <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
                                </p>
                                <p class="lost_password">
                                    <a href="#" >Lost Your Password?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
