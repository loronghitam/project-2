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
    <div class="site-section bg-light" id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-7 mb-4 position-relative text-center mx-auto">
                    <h2 class="font-weight-bold text-center">Our Blog Posts</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">

                @foreach($blog as $data)
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
                        <div class="blog_entry">
                            <a href="{{ url('blog/'. $data->slug) }}"><img src="{{ asset('images/blog/' . $data->image)}}" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
                            <div class="p-4 bg-white">
                                <h3><a href="{{ url('blog/'. $data->slug) }}">{{$data->title}}</a></h3>
                                <span class="date">{{\Illuminate\Support\Carbon::make($data->created_at)->diffForHumans()}}</span>
                                <p>{!! \Illuminate\Support\Str::limit($data->body, 250) !!}</p>
                                <p class="more"><a href="{{ url('blog/'. $data->slug) }}">Continue reading...</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
