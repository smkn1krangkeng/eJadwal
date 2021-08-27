@extends('layout.frontend.main')
@section('judul_hal','Home')
@push('css')
@endpush
@push('scripts')
@endpush
@section('konten')
<div class="row" style="margin-top: 12px;margin-bottom: 12px;">
    <div class="col d-flex justify-content-center align-items-center justify-content-md-center align-items-md-center" style="padding: 0px;"><img class="w-100 h-100" style="margin: 0px;margin-left: 10px;margin-right: 10px;padding: 20px;border-radius: 25px;box-shadow: 0px 0px;" src="{{url('img/bkg-smk.png')}}"></div>
    <div class="col-12 col-md-6 offset-lg-0 d-flex justify-content-center align-items-center justify-content-md-center align-items-md-center" style="padding: 0px;">
        <form class="d-md-flex align-items-md-center">
            <div style="margin-top: 10px;margin-bottom: 10px;width: 287px;"><label class="form-label" style="margin-top: 6px;">Username :</label><input class="form-control" type="text" style="border-radius: 50px;border-style: none;"><label class="form-label" style="margin-top: 6px;">Password :</label><input class="form-control" type="password" style="border-radius: 50px;border-style: none;"><button class="btn btn-primary" type="button" style="margin-top: 12px;margin-bottom: 6px;border-radius: 20px;">Sign In</button></div>
        </form>
    </div>
</div>
@endsection
@section('cards')
<div class="row">
    <div class="col-12 col-md-4" style="padding: 0px;">
        <div class="card" style="margin: 20px;border-radius: 8px;margin-top: 10px;margin-bottom: 10px;">
            <div class="card-header">
                <h4>Title</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Read More ...</a>
            </div>
        </div>
    </div>
    <div class="col" style="padding: 0px;">
        <div class="card" style="margin: 20px;border-radius: 8px;margin-top: 10px;margin-bottom: 10px;">
            <div class="card-header">
                <h4>Title</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Read More ...</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4" style="padding: 0px;">
        <div class="card" style="margin: 20px;border-radius: 8px;margin-top: 10px;margin-bottom: 10px;">
            <div class="card-header">
                <h4>Title</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Read More ...</a>
            </div>
        </div>
    </div>
</div>
@endsection