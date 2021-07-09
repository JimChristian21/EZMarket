@extends('layouts.app')


@section('content')
<div class="container-fluid bg-white">
    @include('carousel.owl')
    <div class="container owl-wrapper mt-2 mb-5">
        {{-- carousel for the header (ads)--}}
        @include('carousel.owl2')
    </div>
</div>
    <div class="container d-flex mt-2 bg-light">
        <h5 class="mr-auto mt-2">Top Savers Today <span class="badge bg-primary">10% OFF</span></h5>
        <a href="{{ url('/categories') }}" class="text-decoration-none text-dark"><h5 class="ml-auto mt-2 ">View All</h5></a>
    </div>
    <div class="container owl-wrapper mt-1">
        {{-- carousel for top savers --}}
        @include('carousel.topSavers')
        {{-- banner for ads --}}
        <div class="banner d-flex mt-1">
            <img class="mt-3 " src="https://klbtheme.com/groci/wp-content/uploads/2018/08/2-2.jpg" alt="">
            <img class="mt-3 " src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-2.jpg" alt="">
        </div>
    </div>
    <div class="container d-flex mt-5 bg-light">
        <h5 class="mr-auto mt-2">Top Sales</span></h5>
        <a href="{{ url('/categories') }}" class="text-decoration-none text-dark"><h5 class="ml-auto mt-2 ">View All</h5></a>
    </div>
    <div class="container owl-wrapper mt-1 mb-3">
        {{-- carousel for best savers --}}
        @include('carousel.bestSavers')
    </div>
@endsection
