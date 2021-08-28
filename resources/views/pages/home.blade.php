@extends('layout.frontend.home.main')
@section('judul_hal','Home')
@push('css')
@endpush
@push('scripts')
@endpush
@section('home1')
<section class="clean-block clean-hero" style="background-image:url('{{url('img/tech/image4.jpg')}}');color:rgba(9, 162, 255, 0.85);">
    <div class="text">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p><button class="btn btn-outline-light btn-lg" type="button">Learn More</button>
    </div>
</section>
@endsection
@section('home2')
<section class="clean-block clean-info dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Info</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6"><img class="img-thumbnail" src="{{url('img/scenery/image5.jpg')}}"></div>
            <div class="col-md-6">
                <h3>Lorem impsum dolor sit amet</h3>
                <div class="getting-started-info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div><button class="btn btn-outline-primary btn-lg" type="button">Join Now</button>
            </div>
        </div>
    </div>
</section>
@endsection
@section('home3')
<section class="clean-block features">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Features</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                <h4>Bootstrap 4</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                <h4>Customizable</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                <h4>Responsive</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                <h4>All Browser Compatibility</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
        </div>
    </div>
</section>
@endsection
@section('home4')
<section class="clean-block slider dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Slider</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item active"><img class="w-100 d-block" src="{{url('img/scenery/image1.jpg')}}" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="{{url('img/scenery/image4.jpg')}}" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="{{url('img/scenery/image6.jpg')}}" alt="Slide Image"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
        </div>
    </div>
</section>
@endsection
@section('home5')
<section class="clean-block about-us">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="{{url('img/avatars/avatar1.jpg')}}">
                    <div class="card-body info">
                        <h4 class="card-title">John Smith</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="{{url('img/avatars/avatar2.jpg')}}">
                    <div class="card-body info">
                        <h4 class="card-title">Robert Downturn</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="{{url('img/avatars/avatar3.jpg')}}">
                    <div class="card-body info">
                        <h4 class="card-title">Ally Sanders</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection