{{-- @extends('layouts.auth2')
@section('title', config('app.name', 'ABA DIRGAM'))
@inject('request', 'Illuminate\Http\Request')
@section('content') --}}
{{-- <div class="col-md-12 col-sm-12 col-xs-12 right-col tw-pt-20 tw-pb-10 tw-px-5 tw-flex tw-flex-col tw-items-center tw-justify-center tw-bg-blue-500">
    <div class="tw-text-6xl tw-font-extrabold tw-text-center tw-text-white tw-shadow-lg tw-px-4 tw-py-2 tw-bg-blue-700 tw-rounded-md">
        {{ config('app.name', 'ABA DIRGAM') }}
    </div>
    
    <p class="tw-text-lg tw-font-medium tw-text-center tw-text-white tw-mt-2 tw-shadow-md tw-bg-blue-600 tw-rounded-md tw-px-3 tw-py-1">
        {{ env('APP_TITLE', '') }}
    </p>
</div> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ABA Dirgam CO.">
    <title>ABA DIRGAM CO.</title>
    <!-- CSS plugins files -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animate.css') }}">
    <!-- Custome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <!-- Start Preloader -->
    <div class="cs_perloader">
        <div class="cs_perloader_in">
            <div class="cs_perloader_dots_wrap">
                <div class="cs_perloader_dots"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
        <span class="cs_perloader_text">Loading...</span>
    </div>
    <!-- End Preloader -->
    <!-- Start Header section -->
    <header class="cs_site_header cs_style_1 cs_text_white cs_fixed_header cs_medium">
        <div class="cs_main_header">
            <div class="container">
                <div class="cs_main_header_in">
                    <div class="cs_main_header_left">
                        <a class="cs_site_branding" href="index.html" aria-label="Home page link">
                            <img src="{{ asset('img/logo-small.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="cs_main_header_center">
                        <nav class="cs_nav cs_medium cs_primary_font">
                            <ul class="cs_nav_list cs_onepage_nav">
                                <li class="" aria-label="Menu link">
                                    <a href="/">Home</a>
                                    {{-- <ul>
                                            <li><a href="index.html" aria-label="Home demo link">Home v1</a></li>
                                            <li><a href="home-v2.html" aria-label="Home demo link">Home v2</a></li>
                                            <li><a href="home-v3.html" aria-label="Home demo link">Home v3</a></li>
                                            <li><a href="home-v4.html" aria-label="Home demo link">Home v4</a></li>
                                            <li><a href="dark-home.html" aria-label="Home demo link">Home V5</a></li>
                                        </ul> --}}
                                </li>
                                {{-- <li><a href="#features" aria-label="Menu link">Features</a></li>
                                <li><a href="#pricing" aria-label="Menu link">Pricing</a></li>
                                <li><a href="#testimonial" aria-label="Menu link">Testimonial</a></li>
                                <li><a href="#faq" aria-label="Menu link">Faq</a>
                                <li><a href="#blog" aria-label="Menu link">Blog</a></li>
                                <li><a href="#contact" aria-label="Menu link">Contact</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    <div class="cs_main_header_right">
                        <div class="cs_header_btns">
                            <a aria-label="Modal button" href="/login" class="cs_header_text_btn cs_modal_btn"
                                data-modal="login">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header section -->
    <div class="cs_content">
        <!-- Start Hero section -->
        <section class="cs_hero cs_style_1 position-relative" id="home">
            <div class="container">
                <div class="cs_hero_text text-center">
                    <h1 class="cs_hero_title cs_text_white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        ABA DIRGAM CO. - Your Ultimate POS Solution
                    </h1>
                    <p class="cs_hero_subtitle wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s">
                        ABA DIRGAM CO. is a leading perfume company offering premium fragrances and exceptional customer experiences for businesses and individuals alike.
                    </p>
                </div>
                <div class="cs_btn_group text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s">
                    <a href="/login" aria-label="Click to view demo" class="cs_btn cs_bg_white">Login</a>
                </div>
                <div class="cs_height_100 cs_height_lg_60"></div>
                <div class="cs_hero_img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s" style="display:flex;justify-content:center">
                    <img src="{{ asset('images/download.jpg') }}" alt="Thumbnail">
                </div>
            </div>
            <div class="cs_hero_shape1"></div>
            <div class="cs_hero_shape2"><img src="{{ asset('assets/Polygon.svg') }}" alt="Polygon Icon"></div>
            <div class="cs_hero_shape3"></div>
        </section>
        <!-- End Hero section -->
        <!-- Start Featured section -->
        <section class="cs_business_feature position-relative" id="features">
            <div class="cs_height_143 cs_height_lg_75"></div>
            <div class="container">
                <div class="cs_section_heading cs_style_1 text-center">
                    <p class="cs_section_subtitle cs_text_accent wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.2s">Grow Your Business With ABA DIRGAM</p>
                    <h2 class="cs_section_title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        Delightfully Simple And Deceptively <br> Our Point of Sell System</h2>
                </div>
                <div class="cs_height_85 cs_height_lg_60"></div>
                <div class="row cs_gap_y_30 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="col-lg-6 col-xl-3">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon">
                                <img src="{{ asset('assets/shop.svg') }}" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title">Suitable For All Types Businesses</h3>
                            <p class="cs_iconbox_subtitle">Voilla satisfaction spares over the quitting even disguised
                                I just of to I logging and does of lazy.</p>
                            <a href="#" aria-label="Click to view feature" class="cs_text_btn cs_text_accent">
                                Learn More
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon">
                                <img src="{{ asset('assets/price_bar.svg') }}" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title">Cost Effective With Affordable Price</h3>
                            <p class="cs_iconbox_subtitle">Voilla satisfaction spares over the quitting even disguised
                                I just of to I logging and does of lazy.</p>
                            <a href="#" aria-label="Click to view feature" class="cs_text_btn cs_text_accent">
                                Learn More
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon">
                                <img src="{{ asset('assets/setup.svg') }}" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title">Easy to Setup & No IT knowledge Need</h3>
                            <p class="cs_iconbox_subtitle">Voilla satisfaction spares over the quitting even disguised
                                I just of to I logging and does of lazy.</p>
                            <a href="#" aria-label="Click to view feature" class="cs_text_btn cs_text_accent">
                                Learn More
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon">
                                <img src="{{ asset('assets/ui.svg') }}" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title">Modern & Attractive User Dashboard</h3>
                            <p class="cs_iconbox_subtitle">Voilla satisfaction spares over the quitting even disguised
                                I just of to I logging and does of lazy.</p>
                            <a href="#" aria-label="Click to view feature" class="cs_text_btn cs_text_accent">
                                Learn More
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs_featured_shape">
                    <img src="{{ asset('assets/Vector.svg') }}" alt="Image">
                </div>
            </div>
            <div class="cs_height_150 cs_height_lg_80"></div>
        </section>
        <!-- Software features -->
        {{-- <section>
            <div class="container">
                <div class="row align-items-center cs_gap_y_40">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_pr_45 text-center">
                            <img src="{{ asset('assets/illustration.svg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_section_heading cs_style_1">
                            <p class="cs_section_subtitle cs_text_accent">Software Key Features</p>
                            <h2 class="cs_section_title mb-0">Powerful Features with Incredible Design</h2>
                        </div>
                        <div class="cs_height_60 cs_height_lg_40"></div>
                        <div class="row cs_gap_y_40">
                            <div class="col-lg-6">
                                <div class="cs_iconbox cs_style_2">
                                    <div class="cs_number_box cs_bg_accent cs_text_white">01</div>
                                    <h3 class="cs_iconbox_title">Inventory Management</h3>
                                    <p class="cs_iconbox_subtitle">Pos can analyze large volumes of data quickly and
                                        accurate, valuable.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cs_iconbox cs_style_2">
                                    <div class="cs_number_box cs_bg_accent cs_text_white">02</div>
                                    <h3 class="cs_iconbox_title">Sales & Payment Process</h3>
                                    <p class="cs_iconbox_subtitle">If can analyze large volumes of data quickly and
                                        accurate, valuable.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cs_iconbox cs_style_2">
                                    <div class="cs_number_box cs_bg_accent cs_text_white">03</div>
                                    <h3 class="cs_iconbox_title">Report and Analysis</h3>
                                    <p class="cs_iconbox_subtitle">If can analyze large volumes of data quickly and
                                        accurate, valuable.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cs_iconbox cs_style_2">
                                    <div class="cs_number_box cs_bg_accent cs_text_white">04</div>
                                    <h3 class="cs_iconbox_title">Secure Fast Transaction</h3>
                                    <p class="cs_iconbox_subtitle">Pos can analyze large volumes of data quickly and
                                        accurate, valuable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_height_150 cs_height_lg_75"></div>
        </section> --}}
        <!-- Users features -->
        {{-- <section class="cs_user_feature">
            <div class="container">
                <div class="row align-items-center cs_gap_y_40 cs_reverse_lg">
                    <div class="col-xl-6 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_section_heading cs_style_1">
                            <p class="cs_section_subtitle cs_text_accent">Who Can Use Our Poze</p>
                            <h2 class="cs_section_title mb-0">Our Software Capable for Wide Range of Business and
                                Industries</h2>
                        </div>
                        <div class="cs_height_60 cs_height_lg_40"></div>
                        <ul class="cs_list cs_style_1 cs_mp0">
                            <li>
                                <span class="cs_list_icon"><img src="{{ asset('assets/arrow.svg') }}"
                                        alt="Icon"></span>
                                <span class="cs_list_text">Retail Stores</span>
                            </li>
                            <li>
                                <span class="cs_list_icon"><img src="{{ asset('assets/arrow.svg') }}"
                                        alt="Icon"></span>
                                <span class="cs_list_text">Grocery Stores</span>
                            </li>
                            <li>
                                <span class="cs_list_icon"><img src="{{ asset('assets/arrow.svg') }}"
                                        alt="Icon"></span>
                                <span class="cs_list_text">Restaurants and Cafes</span>
                            </li>
                            <li>
                                <span class="cs_list_icon"><img src="{{ asset('assets/arrow.svg') }}"
                                        alt="Icon"></span>
                                <span class="cs_list_text">Convenience Stores</span>
                            </li>
                            <li>
                                <span class="cs_list_icon"><img src="{{ asset('assets/arrow.svg') }}"
                                        alt="Icon"></span>
                                <span class="cs_list_text">eCommerce Businesses</span>
                            </li>
                            <li>
                                <span class="cs_list_icon"><img src="{{ asset('assets/arrow.svg') }}"
                                        alt="Icon"></span>
                                <span class="cs_list_text">Hospitality and Hotels</span>
                            </li>
                            <li>
                                <span class="cs_list_icon"><img src="{{ asset('assets/arrow.svg') }}"
                                        alt="Icon"></span>
                                <span class="cs_list_text">Salons and Spas</span>
                            </li>
                            <li>
                                <span class="cs_list_icon"><img src="{{ asset('assets/arrow.svg') }}"
                                        alt="Icon"></span>
                                <span class="cs_list_text">And Many More..</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_feature_thumb_1 text-center"><img
                                src="{{ asset('assets/illustration1.svg') }}" alt="Image"></div>
                    </div>
                </div>
            </div>
            <div class="cs_height_150 cs_height_lg_80"></div>
        </section> --}}
        <!-- End Featured section -->
        <!-- Start Pricing section -->
        {{-- <section id="pricing" class="cs_section_shape_wrap_1 cs_gradient_bg_1 position-relative overflow-hidden">
                <div class="cs_section_shape_1 position-absolute">
                    <img src="{{ asset('assets/Vector3.svg') }}" alt="Shape">
                </div>
                <div class="cs_section_shape_2 position-absolute">
                    <img src="{{ asset('assets/dot.svg') }}" alt="Shape">
                </div>
                <div class="cs_height_143 cs_height_lg_75"></div>
                <div class="container">
                    <div class="cs_section_heading cs_style_1 cs_style_1 text-center">
                        <p class="cs_section_subtitle cs_text_accent wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.2s">Our Pricing</p>
                        <h2 class="cs_section_title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            Transparent Pricing Plans, Find the <br> Perfect Fit for Your Needs</h2>
                    </div>
                    <div class="cs_height_85 cs_height_lg_60"></div>
                    <div class="row cs_gap_y_30 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="col-lg-4">
                            <div class="cs_pricing_table cs_style_1">
                                <div class="cs_pricing_head">
                                    <div class="cs_pricing_icon">
                                        <img src="{{ asset('assets/symbol.svg') }}" alt="Image">
                                    </div>
                                    <div class="cs_pricing_head_text">
                                        <h3 class="cs_pricing_head_title">Starter</h3>
                                        <p class="cs_pricing_head_subtitle mb-0">For small business</p>
                                    </div>
                                </div>
                                <div class="cs_pricing_seperator"></div>
                                <div class="cs_pricing_plan">
                                    <h3 class="cs_price_value">$24 <small>/ month</small></h3>
                                </div>
                                <div class="cs_pricing_feature">
                                    <ul class="cs_pricing_feature_list cs_mp0">
                                        <li><i class="fa-solid fa-check"></i>Only for one user</li>
                                        <li><i class="fa-solid fa-check"></i>Inventory management</li>
                                        <li><i class="fa-solid fa-check"></i>Sells report & anlysis</li>
                                        <li><i class="fa-solid fa-xmark"></i>Extreme functionality</li>
                                        <li><i class="fa-solid fa-xmark"></i>Bar code scanning</li>
                                        <li><i class="fa-solid fa-xmark"></i>Free 24/7 support</li>
                                    </ul>
                                    <a href="#contact" aria-label="Click to buy service"
                                        class="cs_pricing_btn cs_up_3_hover">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cs_pricing_table cs_style_1 active">
                                <div class="cs_pricing_head">
                                    <div class="cs_pricing_icon"><img src="{{ asset('assets/symbol1.svg') }}" alt="Image"></div>
                                    <div class="cs_pricing_head_text">
                                        <h3 class="cs_pricing_head_title">Standard</h3>
                                        <p class="cs_pricing_head_subtitle mb-0">For professionals</p>
                                    </div>
                                </div>
                                <div class="cs_pricing_seperator"></div>
                                <div class="cs_pricing_plan">
                                    <h3 class="cs_price_value">$50 <small>/ month</small></h3>
                                </div>
                                <div class="cs_pricing_feature">
                                    <ul class="cs_pricing_feature_list cs_mp0">
                                        <li><i class="fa-solid fa-check"></i>Only for one user</li>
                                        <li><i class="fa-solid fa-check"></i>Inventory management</li>
                                        <li><i class="fa-solid fa-check"></i>Sells report & anlysis</li>
                                        <li><i class="fa-solid fa-check"></i>Extreme functionality</li>
                                        <li><i class="fa-solid fa-xmark"></i>Bar code scanning</li>
                                        <li><i class="fa-solid fa-xmark"></i>Free 24/7 support</li>
                                    </ul>
                                    <a href="#contact" aria-label="Click to buy service"
                                        class="cs_pricing_btn cs_up_3_hover">Choose Plan</a>
                                </div>
                                <div class="cs_pricing_badge">Most Popular</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cs_pricing_table cs_style_1">
                                <div class="cs_pricing_head">
                                    <div class="cs_pricing_icon"><img src="{{ asset('assets/symbol2.svg') }}" alt="Image"></div>
                                    <div class="cs_pricing_head_text">
                                        <h3 class="cs_pricing_head_title">Professional</h3>
                                        <p class="cs_pricing_head_subtitle mb-0">For enterprise level</p>
                                    </div>
                                </div>
                                <div class="cs_pricing_seperator"></div>
                                <div class="cs_pricing_plan">
                                    <h3 class="cs_price_value">$85 <small>/ month</small></h3>
                                </div>
                                <div class="cs_pricing_feature">
                                    <ul class="cs_pricing_feature_list cs_mp0">
                                        <li><i class="fa-solid fa-check"></i>Only for one user</li>
                                        <li><i class="fa-solid fa-check"></i>Inventory management</li>
                                        <li><i class="fa-solid fa-check"></i>Sells report & anlysis</li>
                                        <li><i class="fa-solid fa-check"></i>Extreme functionality</li>
                                        <li><i class="fa-solid fa-check"></i>Bar code scanning</li>
                                        <li><i class="fa-solid fa-check"></i>Free 24/7 support</li>
                                    </ul>
                                    <a href="#contact" aria-label="Click to buy service"
                                        class="cs_pricing_btn cs_up_3_hover">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_height_150 cs_height_lg_80"></div>
            </section> --}}
        <!-- End Pricing section -->
        <!--Start Testimonial Section -->
        {{-- <section id="testimonial">
            <div class="cs_height_143 cs_height_lg_75"></div>
            <div class="container">
                <div class="cs_section_heading cs_style_1 text-center">
                    <p class="cs_section_subtitle cs_text_accent wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.2s">Clients Feedback</p>
                    <h2 class="cs_section_title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        Voices of Delights Testimonials That <br> Speak to Our Excellence</h2>
                </div>
                <div class="cs_height_85 cs_height_lg_60"></div>
            </div>
            <div class="cs_slider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="cs_testimonial cs_style_1">
                    <div class="cs_client_info">
                        <div class="cs_client_img">
                            <img src="{{ asset('assets/user1.png') }}" alt="avatar1">
                        </div>
                        <div class="cs_client_meta">
                            <h4 class="cs_client_name">Wizard Bona</h4>
                            <p class="mb-0">Voila Caffe</p>
                        </div>
                    </div>
                    <p class="cs_client_review">
                        I am thrilled to share my experience with poze software. Their AI solutions have truly
                        revolutionized the way businessesoperate. They have set a new standard in the industry. Highly
                        recommended!
                    </p>
                    <div class="cs_rating" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                    </div>
                </div>
                <div class="cs_testimonial cs_style_1">
                    <div class="cs_client_info">
                        <div class="cs_client_img">
                            <img src="{{ asset('assets/user2.png') }}" alt="avatar1">
                        </div>
                        <div class="cs_client_meta">
                            <h4 class="cs_client_name">Ansari Patron</h4>
                            <p class="mb-0">Green Lodge</p>
                        </div>
                    </div>
                    <p class="cs_client_review">
                        I am thrilled to share my experience with poze software. Their AI solutions have truly
                        revolutionized the way businessesoperate. They have set a new standard in the industry. Highly
                        recommended!
                    </p>
                    <div class="cs_rating" data-rating="4.5">
                        <div class="cs_rating_percentage"></div>
                    </div>
                </div>
                <div class="cs_testimonial cs_style_1">
                    <div class="cs_client_info">
                        <div class="cs_client_img">
                            <img src="{{ asset('assets/user3.png') }}" alt="avatar1">
                        </div>
                        <div class="cs_client_meta">
                            <h4 class="cs_client_name">Tonima Mozeja</h4>
                            <p class="mb-0">Almas Market</p>
                        </div>
                    </div>
                    <p class="cs_client_review">
                        I am thrilled to share my experience with poze software. Their AI solutions have truly
                        revolutionized the way businessesoperate. They have set a new standard in the industry. Highly
                        recommended!
                    </p>
                    <div class="cs_rating" data-rating="4">
                        <div class="cs_rating_percentage"></div>
                    </div>
                </div>
                <div class="cs_testimonial cs_style_1">
                    <div class="cs_client_info">
                        <div class="cs_client_img">
                            <img src="{{ asset('assets/user4.png') }}" alt="avatar1">
                        </div>
                        <div class="cs_client_meta">
                            <h4 class="cs_client_name">Wizard Bona</h4>
                            <p class="mb-0">Voila Caffe</p>
                        </div>
                    </div>
                    <p class="cs_client_review">
                        I am thrilled to share my experience with poze software. Their AI solutions have truly
                        revolutionized the way businessesoperate. They have set a new standard in the industry. Highly
                        recommended!
                    </p>
                    <div class="cs_rating" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                    </div>
                </div>
                <div class="cs_testimonial cs_style_1">
                    <div class="cs_client_info">
                        <div class="cs_client_img">
                            <img src="{{ asset('assets/user5.png') }}" alt="avatar1">
                        </div>
                        <div class="cs_client_meta">
                            <h4 class="cs_client_name">Ansari Patron</h4>
                            <p class="mb-0">Green Lodge</p>
                        </div>
                    </div>
                    <p class="cs_client_review">
                        I am thrilled to share my experience with poze software. Their AI solutions have truly
                        revolutionized the way businessesoperate. They have set a new standard in the industry. Highly
                        recommended!
                    </p>
                    <div class="cs_rating" data-rating="4.5">
                        <div class="cs_rating_percentage"></div>
                    </div>
                </div>
                <div class="cs_testimonial cs_style_1">
                    <div class="cs_client_info">
                        <div class="cs_client_img">
                            <img src="{{ asset('assets/user3.png') }}" alt="avatar1">
                        </div>
                        <div class="cs_client_meta">
                            <h4 class="cs_client_name">Tonima Mozeja</h4>
                            <p class="mb-0">Almas Market</p>
                        </div>
                    </div>
                    <p class="cs_client_review">
                        I am thrilled to share my experience with poze software. Their AI solutions have truly
                        revolutionized the way businessesoperate. They have set a new standard in the industry. Highly
                        recommended!
                    </p>
                    <div class="cs_rating" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                    </div>
                </div>
            </div>
            <div class="cs_height_143 cs_height_lg_75"></div>
        </section> --}}
        <!--End Testimonial Section -->
        <!-- Start Brands section -->
        {{-- <div class="container">
            <div class="cs_section_heading cs_style_2 text-center">
                <h2 class="cs_section_subtitle mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our
                    worldwide reputed partner</h2>
            </div>
            <div class="cs_height_45 cs_height_lg_45"></div>
            <div class="cs_partners wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="cs_partner"><img src="{{ asset('assets/brand_1.svg') }}" alt="Brand"></div>
                <div class="cs_partner"><img src="{{ asset('assets/brand_2.svg') }}" alt="Brand"></div>
                <div class="cs_partner"><img src="{{ asset('assets/brand_3.svg') }}" alt="Brand"></div>
                <div class="cs_partner"><img src="{{ asset('assets/brand_4.svg') }}" alt="Brand"></div>
                <div class="cs_partner"><img src="{{ asset('assets/brand_5.svg') }}" alt="Brand"></div>
                <div class="cs_partner"><img src="{{ asset('assets/brand_6.svg') }}" alt="Brand"></div>
            </div>
        </div>
        <div class="cs_height_150 cs_height_lg_80"></div> --}}
        <!-- End Brands section -->
        <!-- Start CTA section -->
        {{-- <section>
            <div class="container">
                <div class="cs_cta cs_style_1 text-center position-relative">
                    <div class="cs_cta_in">
                        <div class="cs_section_heading cs_style_1">
                            <h2 class="cs_section_title cs_text_white">Upgrade Your Business with Our <br> Cutting-Edge
                                POS Solutions!</h2>
                            <p class="cs_section_subtitle mb-0">Experience the future of transactions! Schedule a demo
                                today and witness how <br> our POS solution can revolutionize your business.
                            </p>
                        </div>
                        <div class="cs_btn_group text-center">
                            <a href="#" aria-label="Start trial button" class="cs_btn cs_bg_white">Start Free
                                Trial</a>
                            <a href="#" aria-label="Purchase button" class="cs_btn cs_bg_accent">Purchase
                                Now</a>
                        </div>
                    </div>
                    <div class="cs_cta_shape1"><img src="{{ asset('assets/Ellipse_small.svg') }}" alt="Image">
                    </div>
                    <div class="cs_cta_shape2"><img src="{{ asset('assets/stroke.svg') }}" alt="Image"></div>
                </div>
            </div>
        </section> --}}
        <!-- End CTA section -->
        <!--Start FAQ's section -->
        {{-- <section class="cs_faq_wrap position-relative" id="faq">
            <div class="cs_height_143 cs_height_lg_75"></div>
            <div class="container">
                <div class="cs_section_heading cs_style_1 text-center">
                    <p class="cs_section_subtitle cs_text_accent wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.2s">Have Any Question?
                    </p>
                    <h2 class="cs_section_title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">Here
                        Some Questions Answer</h2>
                </div>
                <div class="cs_height_85 cs_height_lg_60"></div>
                <div class="row wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cs_accordian_wrap">
                            <div class="cs_accordian active">
                                <h2 class="cs_accordian_title">
                                    How Does a POS System Benefit My Business?
                                    <span class="cs_accordian_toggle">
                                        <span></span>
                                    </span>
                                </h2>
                                <div class="cs_accordian_body">
                                    To choose the right POS system, consider your business type, size, budget, required
                                    features, andpotential for futuregrowth. Research various options and read reviews
                                    to make an informed decision. Purchases and rewarding customers with points,
                                    discounts, or special offers.
                                </div>
                            </div>
                            <div class="cs_accordian">
                                <h2 class="cs_accordian_title">
                                    Can I Integrate the POS System with My Online Store?
                                    <span class="cs_accordian_toggle">
                                        <span></span>
                                    </span>
                                </h2>
                                <div class="cs_accordian_body">
                                    To choose the right POS system, consider your business type, size, budget, required
                                    features, andpotential for futuregrowth. Research various options and read reviews
                                    to make an informed decision. Purchases and rewarding customers with points,
                                    discounts, or special offers.
                                </div>
                            </div>
                            <div class="cs_accordian">
                                <h2 class="cs_accordian_title">
                                    Do I Need Special Training to Use a POS System?
                                    <span class="cs_accordian_toggle">
                                        <span></span>
                                    </span>
                                </h2>
                                <div class="cs_accordian_body">
                                    To choose the right POS system, consider your business type, size, budget, required
                                    features, andpotential for futuregrowth. Research various options and read reviews
                                    to make an informed decision. Purchases and rewarding customers with points,
                                    discounts, or special offers.
                                </div>
                            </div>
                            <div class="cs_accordian">
                                <h2 class="cs_accordian_title">
                                    What Kind of Sales Analytics Does a POS System Provide?
                                    <span class="cs_accordian_toggle"><span></span></span>
                                </h2>
                                <div class="cs_accordian_body">
                                    To choose the right POS system, consider your business type, size, budget, required
                                    features, andpotential for futuregrowth. Research various options and read reviews
                                    to make an informed decision. Purchases and rewarding customers with points,
                                    discounts, or special offers.
                                </div>
                            </div>
                            <div class="cs_accordian">
                                <h2 class="cs_accordian_title">
                                    How Can I Choose the Right POS System for My Business?
                                    <span class="cs_accordian_toggle">
                                        <span></span>
                                    </span>
                                </h2>
                                <div class="cs_accordian_body">
                                    To choose the right POS system, consider your business type, size, budget, required
                                    features, andpotential for futuregrowth. Research various options and read reviews
                                    to make an informed decision. Purchases and rewarding customers with points,
                                    discounts, or special offers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_faq_shape1"></div>
            <div class="cs_faq_shape2"></div>
            <div class="cs_height_150 cs_height_lg_75"></div>
        </section> --}}
        <!--End FAQ's section -->
        <!--Start Blog Section -->
        {{-- <section class="cs_blog cs_gradient_bg_2" id="blog">
                <div class="cs_height_143 cs_height_lg_75"></div>
                <div class="container">
                    <div class="cs_section_heading cs_style_1 text-center">
                        <p class="cs_section_subtitle cs_text_accent wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.2s">Latest Blog</p>
                        <h2 class="cs_section_title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            Insights & Inspiration, Explore Our Blog <br> for Knowledge and Ideas</h2>
                    </div>
                    <div class="cs_height_85 cs_height_lg_60"></div>
                    <div class="row wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="col-lg-4">
                            <div class="cs_post cs_style_1">
                                <div class="cs_post_thumb cs_modal_btn" data-modal="details">
                                    <img src="{{ asset('assets/blog1.jpg') }}" alt="Image">
                                    <div class="cs_posted_by">25 Mar</div>
                                </div>
                                <div class="cs_post_content">
                                    <div class="cs_post_content_in">
                                        <div class="cs_post_meta_wrap">
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/user.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">Admin</p>
                                            </div>
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/label.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">Software</p>
                                            </div>
                                        </div>
                                        <h2 class="cs_post_title cs_modal_btn mb-0" data-modal="details">
                                            How they shape our digital world with software innovation
                                        </h2>
                                    </div>
                                    <div class="cs_post_user">
                                        <span class="cs_text_btn cs_modal_btn" data-modal="details">
                                            Read More
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <div class="cs_post_meta_wrap">
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/comment-dots.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">12</p>
                                            </div>
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/eye.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">50</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_height_lg_30"></div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cs_post cs_style_1">
                                <div class="cs_post_thumb cs_modal_btn" data-modal="details">
                                    <img src="{{ asset('assets/blog2.jpg') }}" alt="Image">
                                    <div class="cs_posted_by">22 Apr</div>
                                </div>
                                <div class="cs_post_content">
                                    <div class="cs_post_content_in">
                                        <div class="cs_post_meta_wrap">
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/user.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">Admin</p>
                                            </div>
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/label.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">Software</p>
                                            </div>
                                        </div>
                                        <h2 class="cs_post_title cs_modal_btn mb-0" data-modal="details">
                                            How they shape our digital world with software innovation
                                        </h2>
                                    </div>
                                    <div class="cs_post_user">
                                        <span class="cs_text_btn cs_modal_btn" data-modal="details">
                                            Read More
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <div class="cs_post_meta_wrap">
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/comment-dots.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">12</p>
                                            </div>
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/eye.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">50</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_height_lg_30"></div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cs_post cs_style_1">
                                <div class="cs_post_thumb cs_modal_btn" data-modal="details">
                                    <img src="{{ asset('assets/blog3.jpg') }}" alt="Image">
                                    <div class="cs_posted_by">05 July</div>
                                </div>
                                <div class="cs_post_content">
                                    <div class="cs_post_content_in">
                                        <div class="cs_post_meta_wrap">
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/user.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">Admin</p>
                                            </div>
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/label.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">Software</p>
                                            </div>
                                        </div>
                                        <h2 class="cs_post_title cs_modal_btn mb-0" data-modal="details">
                                            How they shape our digital world with software innovation
                                        </h2>
                                    </div>
                                    <div class="cs_post_user">
                                        <div class="cs_text_btn cs_modal_btn" data-modal="details">
                                            Read More
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="cs_post_meta_wrap">
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/comment-dots.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">12</p>
                                            </div>
                                            <div class="cs_post_meta">
                                                <div class="cs_post_meta_icon"><img src="{{ asset('assets/eye.svg') }}"
                                                        alt="Image"></div>
                                                <p class="mb-0">50</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_height_lg_30"></div>
                        </div>
                    </div>
                </div>
                <div class="cs_height_150 cs_height_lg_80"></div>
            </section> --}}
        <!--End Blog Section -->
        <!--Start contact Section -->
        <!--End contact Section -->
    </div>
    <!-- Blog Details Modal -->
    {{-- <div class="cs_modal" data-modal="details">
            <div class="cs_close_overlay"></div>
            <div class="cs_modal_in">
                <div class="cs_modal_container cs_white_bg">
                    <button class="cs_close_modal cs_center cs_primary_bg">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="cs_post_details cs_style_1">
                        <div class="cs_post_meta_wrap">
                            <div class="cs_post_meta">
                                <div class="cs_post_meta_icon cs_text_accent"><i class="fa-regular fa-user"></i></div>
                                <p class="mb-0">Admin</p>
                            </div>
                            <div class="cs_post_meta">
                                <div class="cs_post_meta_icon cs_text_accent"><i class="fa-regular fa-calendar"></i></div>
                                <p class="mb-0">25.03.2023</p>
                            </div>
                        </div>
                        <h2 class="cs_post_title">How they shape our digital world with software innovation</h2>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the
                            day, goingforward, a new normal that has evolved from generation X is on the runway heading
                            towards a streamlined cloud solution. User generated content in real-time will have multiple
                            touchpoints for offshoring.
                        </p>
                        <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.
                            Override the digital divide with additional clickthroughs from DevOps.
                        </p>
                        <div class="cs_height_5 cs_height_lg_5"></div>
                        <img src="{{ asset('assets/blog_details.jpg') }}" alt="blog1">
                        <h2>Collaboratively administrate empowered.</h2>
                        <div class="cs_post_text">
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking
                                seamless key performance indicators offline to maximise the long tail. Keeping your eye on
                                the ball while performing a deep dive on the start-up mentality to derive convergence on
                                cross-platform integration.
                            </p>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                                procrastinate B2C users after installed base benefits. Dramatically visualize customer
                                directed convergence withoutrevolutionary ROI.
                            </p>
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking
                                seamless key performance indicators offline to maximise the long tail.
                            </p>
                            <h2>Blog video post can also added.</h2>
                            <p>Completely synergize resource taxing relationships via premier niche markets. Professionally
                                cultivate one-to-one customer service with robust ideas. Dynamically innovate
                                resource-leveling customer service for state of the art customer service.
                            </p>
                            <blockquote>Integer accumsan arcu ligula, eget dictum augue egestas sed. Curabitur bibendum,
                                lorem ac dapibus pellentesque, justo lectus bibendum enim.<small>by: <span>Mark
                                        Parker</span></small>
                            </blockquote>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration some form, by injected humour, or randomised words which don't look even
                                slightly believable. If you are going to use passage of Lorem Ipsum.
                            </p>
                            <h2>Phosfluorescently engage worldwide?</h2>
                            <p>Proactively envisioned multimedia based expertise and cross-media growth strategies.
                                Seamlessly visualize quality intellectual capital without superior collaboration and
                                idea-sharing. Holistically pontificate installed base portals after maintainable products.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/blog2.jpg') }}" alt="Image">
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/blog3.jpg') }}" alt="Image">
                                </div>
                            </div>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.
                                Override the digital divide with additional clickthroughs from DevOps. Nanotechnology
                                immersion along the information highway will close the loop on focusing solely on the bottom
                                line.
                            </p>
                        </div>
                        <div class="cs_height_35 cs_height_lg_35"></div>
                    </div>
                    <div class="comments_area">
                        <div class="comment_list_outer">
                            <h2 class="comments_title">Comments(3)</h2>
                            <ol class="comment_list">
                                <li class="comment">
                                    <div class="comment_body">
                                        <div class="comment_meta">
                                            <div class="comment_author">
                                                <img src="{{ asset('assets/comment1.jpg') }}" alt="comment1" class="avatar">
                                                <a href="#" aria-label="Comment link" class="nm">Smith Jhon</a>
                                            </div>
                                            <div class="comment_metadata">
                                                <a href="#" aria-label="Comment link"><span>15 Jan, 2023</span></a>
                                            </div>
                                        </div>
                                        <div class="comment_content">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </div>
                                        <div class="reply"><a href="#" aria-label="Comment link"
                                                class="comment_reply_link">Reply</a></div>
                                    </div>
                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment_body">
                                                <div class="comment_meta">
                                                    <div class="comment_author">
                                                        <img src="{{ asset('assets/comment2.jpg') }}" alt="comment1" class="avatar">
                                                        <span class="nm"><a href="#"
                                                                aria-label="Comment link">Robat Newman</a></span>
                                                    </div>
                                                    <div class="comment_metadata">
                                                        <a href="#" aria-label="Comment link"><span>15 Jan,
                                                                2023</span></a>
                                                    </div>
                                                </div>
                                                <div class="comment_content">
                                                    <p>Consectetuer adipiscing elit. Lorem ipsum dolor sit amet,
                                                        consectetuer.</p>
                                                </div>
                                                <div class="reply"><a href="#" aria-label="Comment link"
                                                        class="comment_reply_link">Reply</a></div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="comment">
                                    <div class="comment_body">
                                        <div class="comment_meta">
                                            <div class="comment_author">
                                                <img src="assets/img/comment1.jpg" alt="comment1" class="avatar">
                                                <span class="nm"><a href="#" aria-label="Comment link">Hannibal
                                                        Lecter</a></span>
                                            </div>
                                            <div class="comment_metadata">
                                                <a href="#" aria-label="Comment link"><span>26 Jan, 2023</span></a>
                                            </div>
                                        </div>
                                        <div class="comment_content">
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum adipiscing elit.</p>
                                        </div>
                                        <div class="reply"><a href="#" aria-label="Comment link"
                                                class="comment_reply_link">Reply</a></div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="comment_respond">
                            <h2 class="comment_reply_title">Add your comment</h2>
                            <form class="comment_form">
                                <div class="comment_form_author">
                                    <input type="text" placeholder="Name*" required>
                                </div>
                                <div class="comment_form_email">
                                    <input type="email" placeholder="E-mail*" required>
                                </div>
                                <div class="comment_form_url">
                                    <input type="url" placeholder="Website">
                                </div>
                                <div class="comment_form_comment">
                                    <textarea rows="5" placeholder="Write here...*" required></textarea>
                                </div>
                                <div class="form_submit">
                                    <button type="submit" class="cs_btn cs_bg_accent cs_color1 cs_dark_hover">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- End Blog Details Modal -->
    <!-- Login modal -->
    {{-- <div class="cs_modal cs_size_sm" data-modal="login">
            <div class="cs_close_overlay"></div>
            <div class="cs_modal_in">
                <div class="cs_modal_container">
                    <button class="cs_close_modal cs_center cs_primary_bg">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="cs_login">
                        <div class="cs_login_container text-center">
                            <div class="cs_logo">
                                <img src="assets/img/Poze.svg" alt="Logo">
                            </div>
                            <form class="cs_login_form">
                                <div class="cs_form_heading">
                                    <h2 class="cs_login_title">Login into account</h2>
                                    <p class="cs_login_subtitle mb-0">Use your credentials to access your account</p>
                                </div>
                                <div class="cs_text_field">
                                    <img src="assets/img/envelop.svg" alt="Icon">
                                    <input type="email" class="cs_form_field" placeholder="Email address">
                                </div>
                                <div class="cs_text_field position-relative">
                                    <img src="assets/img/lock.svg" alt="Icon">
                                    <input type="password" class="cs_form_field" placeholder="Password">
                                </div>
                                <div class="cs_login_meta">
                                    <div class="cs_check">
                                        <input type="checkbox">
                                        <label>Remember me</label>
                                    </div>
                                    <span class="cs_text_btn cs_modal_btn" data-modal="forgot"><span>Forgot
                                            Password?</span></span>
                                </div>
                                <button type="submit" aria-label="Submit button"
                                    class="cs_btn cs_bg_accent w-100 cs_dark_hover">
                                    <span>Login</span>
                                </button>
                                <div class="cs_or"><span>or login width</span></div>
                                <div class="cs_social_btn cs_style_1 cs_center">
                                    <a href="https://www.linkedin.com/" aria-label="Social link" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.linkedin.com/" aria-label="Social link" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a>
                                    <a href="https://www.linkedin.com/" aria-label="Social link" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/" aria-label="Social link" target="_blank"><i
                                            class="fa-brands fa-google"></i></a>
                                </div>
                                <p class="mb-0">
                                    Don't have an account?
                                    <span class="cs_text_btn cs_modal_btn" data-modal="register"><span>Register
                                            Here</span></span>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="cs-height_100 cs-height_lg_70"></div>
                </div>
            </div>
        </div> --}}
    <!-- Register modal -->
    {{-- <div class="cs_modal cs_size_sm" data-modal="register">
            <div class="cs_close_overlay"></div>
            <div class="cs_modal_in">
                <div class="cs_modal_container">
                    <button class="cs_close_modal cs_center cs_primary_bg">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="cs_login">
                        <div class="cs_login_container text-center">
                            <div class="cs_logo">
                                <img src="assets/img/Poze.svg" alt="Logo">
                            </div>
                            <form class="cs_login_form">
                                <div class="cs_form_heading">
                                    <h2 class="cs_login_title">Create an account</h2>
                                    <p class="cs_login_subtitle mb-0">Use your credentials to create an account</p>
                                </div>
                                <div class="cs_text_field">
                                    <span><i class="fa-regular fa-circle-user"></i></span>
                                    <input type="text" class="cs_form_field" placeholder="Full Name">
                                </div>
                                <div class="cs_text_field">
                                    <img src="assets/img/envelop.svg" alt="Icon">
                                    <input type="email" class="cs_form_field" placeholder="Email address">
                                </div>
                                <div class="cs_text_field position-relative">
                                    <img src="assets/img/lock.svg" alt="Icon">
                                    <input type="password" class="cs_form_field" placeholder="Password">
                                </div>
                                <div class="cs_login_meta">
                                    <div class="cs_check">
                                        <input type="checkbox">
                                        <label>Accept terms & condition</label>
                                    </div>
                                </div>
                                <button type="submit" aria-label="Submit button"
                                    class="cs_btn cs_bg_accent w-100 cs_dark_hover">
                                    <span>Register</span>
                                </button>
                                <div class="cs_or"><span>or signup with</span></div>
                                <div class="cs_social_btn cs_style_1 cs_center">
                                    <a href="https://www.linkedin.com/" aria-label="Social link" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.linkedin.com/" aria-label="Social link" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a>
                                    <a href="https://www.linkedin.com/" aria-label="Social link" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/" aria-label="Social link" target="_blank"><i
                                            class="fa-brands fa-google"></i></a>
                                </div>
                                <p class="mb-0">Already have an account?
                                    <span class="cs_text_btn cs_modal_btn" data-modal="login">Login</span>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="cs-height_100 cs-height_lg_70"></div>
                </div>
            </div>
        </div> --}}
    <!-- Recovery Password modal -->
    {{-- <div class="cs_modal cs_size_sm" data-modal="forgot">
            <div class="cs_close_overlay"></div>
            <div class="cs_modal_in">
                <div class="cs_modal_container">
                    <button class="cs_close_modal cs_center cs_primary_bg">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="cs_login">
                        <div class="cs_login_container text-center">
                            <div class="cs_logo">
                                <img src="assets/img/Poze.svg" alt="Logo">
                            </div>
                            <form class="cs_login_form">
                                <div class="cs_form_heading">
                                    <h2 class="cs_login_title">Change Password</h2>
                                    <p class="mb-0">Enter your email below to request an POZE account password reset.
                                    </p>
                                </div>
                                <div class="cs_text_field position-relative">
                                    <img src="assets/img/envelop.svg" alt="Icon">
                                    <input type="email" class="cs_form_field" placeholder="Enter Your Email">
                                </div>
                                <button type="submit" aria-label="Submit button"
                                    class="cs_btn cs_bg_accent w-100 cs_dark_hover mb-0">
                                    <span>Submit</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="cs-height_100 cs-height_lg_70"></div>
                </div>
            </div>
        </div> --}}
    <!--Start Footer Section -->
    <footer class="cs_site_footer cs_color_1 cs_sticky_footer">
        <div class="cs_footer_shape1">
            <img src="{{ asset('assets/Vector1.svg') }}" alt="Vector-Icon">
        </div>
        <div class="cs_height_140 cs_height_lg_70"></div>
        <div class="cs_main_footer">
            <div class="container">
                <div class="row " style="justify-content: center; display: flex; flex-direction: column;>
                    <div class="col-lg-3 col-xl-4 " style="justify-content: center; display: flex; flex-direction: column;">
                        <div class="cs_footer_widget">
                            <div class="cs_text_field">
                                <img src="{{ asset('img/logo-small.png') }}" alt="Logo" width="200px" class="cs_footer_logo">
                                <p class="cs_text_white mb-0">
                                    Ours Pos Software is the ultimate solution designed to transform your business
                                    operations into a streamlined and efficient powerhouse. With a focus on simplicity,
                                    versatility, and cutting-edge technology.
                                </p>
                            </div>
                        </div>
                        <div class="cs_footer_widget">
                            <div class="cs_social_btn cs_style_1 d-flex">
                                <a href="https://www.facebook.com/" aria-label="Social button" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://www.facebook.com/" aria-label="Social button" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/" aria-label="Social button" target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.facebook.com/" aria-label="Social button" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="cs_height_0 cs_height_lg_30"></div>
                    </div>
                    {{-- <div class="col-lg-2 col-xl-2 offset-lg-1">
                        <div class="cs_footer_widget">
                            <h2 class="cs_footer_widget_title">Quick Links</h2>
                            <ul class="cs_footer_widget_nav cs_mp0">
                                <li><a href="/" aria-label="Footer link">Home</a></li>
                                <li><a href="/#about" aria-label="Footer link">Features</a></li>
                                <li><a href="/#pricing" aria-label="Footer link">Pricing</a></li>
                                <li><a href="/#blog" aria-label="Footer link">Blog</a></li>
                                <li><a href="/#contact" aria-label="Footer link">Contact</a></li>
                            </ul>
                        </div>
                        <div class="cs_height_0 cs_height_lg_30"></div>
                    </div>
                    <div class="col-xl-1 col-lg-2">
                        <div class="cs_footer_widget">
                            <h2 class="cs_footer_widget_title">Supports</h2>
                            <ul class="cs_footer_widget_nav cs_mp0">
                                <li><a href="/#faq" aria-label="Footer link">Faq’s</a></li>
                                <li><a href="#" aria-label="Footer link">Articles</a></li>
                                <li><a href="#" aria-label="Footer link">Live Chat</a></li>
                            </ul>
                        </div>
                        <div class="cs_height_0 cs_height_lg_30"></div>
                    </div>
                    <div class="col-lg-4 col-xl-3 offset-xl-1">
                        <div class="cs_footer_widget">
                            <h2 class="cs_footer_widget_title">Subscribe Newsletter</h2>
                            <form class="cs_newsletter position-relative">
                                <input type="text" placeholder="Your email address" class="cs_form_field">
                                <button type="submit" aria-label="Subscribe button"
                                    class="cs_btn cs_bg_accent cs_send">
                                    Send
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div> --}}
                    <!-- .col -->
                </div>
                <div class="cs_height_110 cs_height_lg_50"></div>
            </div>
            <div class="container cs_copyright_text cs_text_white text-center">
                &copy; Copyright 2025. Design by Qeema Tech
            </div>
        </div>
    </footer>
    <!--End Footer Section -->
    <!-- Back to top btn -->
    <div id="cs_backtotop"><i class="fa-solid fa-arrow-up"></i></div>
    <!-- All Scripts Files -->
    <script src="{{ asset('assets/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/wow.min.js') }}"></script>
    <script src="{{ asset('assets/main.js') }}"></script>
</body>

</html>

{{-- @endsection --}}
