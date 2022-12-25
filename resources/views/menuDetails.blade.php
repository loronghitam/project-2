@extends('landingpage.app')

@section('content')
    <div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('http://uas.test/images/blog/{{$blog->image}}')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 intro text-center">
                    <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">{{ $blog->title }}</h1>
                </div>
            </div>
        </div>
        <div class="slant" style="background-image: url('http://uas.test/asset/landingpage/images/slant.svg');"></div>
    </div>

    <div class="site-section">
        <div class="container article">
            <div class="row justify-content-center align-items-stretch">

                <article class="col-lg-12 order-lg-2 px-lg-5">
                    {!! $blog->body !!}
                </article>
        </div>
    </div>


<!-- .untrtee_co-section -->
@endsection
