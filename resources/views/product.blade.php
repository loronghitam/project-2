@extends('landingpage.app')

@section('content')
    <div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('asset/landingpage/images/hero-min.jpg')">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 intro text-center">
                    <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">Append Portfolio</h1>
                    <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                    <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary">Get Started</a></p>


                </div>


            </div>


        </div>

        <div class="slant" style="background-image: url('asset/landingpage/images/slant.svg');"></div>
    </div>

    <div class="site-section" id="portfolio-section">
        <div class="container">

            <div class="filters" data-aos="fade-up" data-aos-delay="100">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".packaging">Packaging</li>
                    <li data-filter=".mockup">Mockup</li>
                    <li data-filter=".typography">Typography</li>
                    <li data-filter=".photography">Photography</li>
                </ul>
            </div>

            <div class="filters-content mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="row grid">
                    @foreach($product as $data)
                        <div class="isotope-card col-sm-4 all {{ \Illuminate\Support\Str::lower($data->category)}}">
                            <a href="{{asset('images/product/'. $data->file)}}" data-fancybox="gal">
                                <img src="{{asset('images/product/'. $data->file)}}" alt="Image" class="img-fluid">
                                <div class="contents">
                                    <h3>{{ $data->title }}</h3>
                                    <div class="cat">{{ $data->category }}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- .untrtee_co-section -->
@endsection
