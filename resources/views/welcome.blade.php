@extends('landingpage.app')

@section('content')
    <div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('asset/landingpage/images/hero-min.jpg')">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 intro">
                    <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">We turn ideas into extraordinary digital products</h1>
                    <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                    <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="200">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" class="btn btn-primary" value="Sign up">
                    </form>

                </div>


            </div>


        </div>

        <div class="slant" style="background-image: url('asset/landingpage/images/slant.svg');"></div>
    </div>


    <div class="py-3">
        <div class="container">

            <div class="owl-logos owl-carousel">
                <div class="item">
                    <img src="{{asset('asset/landingpage/images/logo-puma.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('asset/landingpage/images/logo-adobe.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('asset/landingpage/images/logo-google.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('asset/landingpage/images/logo-paypal.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('asset/landingpage/images/logo-adobe.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('asset/landingpage/images/logo-google.png')}}" alt="Image" class="img-fluid">
                </div>


            </div>


        </div>

    </div>


    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center"  data-aos="fade-up">
                    <h2 class="heading font-weight-bold mb-3">Our Services</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4">
                            <span class="feather-pen-tool"></span>
                        </div>
                        <div>
                            <h3>Modern Design</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4">
                            <span class="feather-layers"></span>
                        </div>
                        <div>
                            <h3>High Performance</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4">
                            <span class="feather-layout"></span>
                        </div>
                        <div>
                            <h3>Flexible Layout</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4">
                            <span class="feather-life-buoy"></span>
                        </div>
                        <div>
                            <h3>Free Support</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4">
                            <span class="feather-shopping-bag"></span>
                        </div>
                        <div>
                            <h3>Cool Pricing</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4">
                            <span class="feather-smartphone"></span>
                        </div>
                        <div>
                            <h3>Mobile Apps</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="features-lg ">
        <div class="container">
            <div class="row feature align-items-center justify-content-between">
                <div class="col-lg-7 section-stack order-lg-2 mb-4 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="0">

                    <div class="image-stack">
                        <div class="image-stack__item image-stack__item--top">
                            <img src="{{asset('asset/landingpage/images/img_h_2-min.jpg')}}" alt="">
                        </div>
                        <div class="image-stack__item image-stack__item--bottom">
                            <img src="{{asset('asset/landingpage/images/img_h_3-min.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 section-title" data-aos="fade-up" data-aos-delay="100">

                    <h2 class="font-weight-bold mb-4 heading">Far far away, behind the word mountains</h2>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                    <p><a href="#" class="btn btn-primary">Get Started</a></p>

                </div>

            </div>
        </div>
        </div>



    <div class="features-lg">
        <div class="container">

            <div class="row feature align-items-center justify-content-between">
                <div class="col-lg-7 mb-4 mb-lg-0 section-stack" data-aos="fade-up" data-aos-delay="0">
                    <img src="{{asset('asset/landingpage/images/img_h_5-min.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 section-title" data-aos="fade-up" data-aos-delay="100">

                    <h2 class="font-weight-bold mb-4">Far far away, behind the word mountains</h2>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                    <p><a href="#" class="btn btn-primary">Get Started</a></p>

                </div>

            </div>

        </div>
    </div>



@endsection
