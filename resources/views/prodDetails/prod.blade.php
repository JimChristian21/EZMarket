
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row d-flex">
        {{-- left --}}
        
        <div class="col-md-6  col-xl-5 mx-5 my-5 rounded justify-content-center">
            <img class="img-fluid" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-1-600x654.jpg" alt="">
            {{-- carousel --}}
            <div class="container mt-2">
                @include('carousel.prodcarou')
            </div>
            <div class="container mt-5">
                {{-- Description --}}
                <h5>Description</h5>
                <div class="container bg-white py-4 px-3">
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed imperdiet augue. Praesent quis nibh at nisl fermentum finibus. Phasellus pretium urna eu arcu cursus vulputate. Phasellus finibus hendrerit dolor non eleifend. Vestibulum consequat vehicula molestie. Phasellus sed purus leo. Proin ac feugiat justo, sit amet vehicula massa. Cras non viverra elit, eu posuere metus. Vivamus in egestas urna. Sed vestibulum mauris et egestas sollicitudin. Phasellus et est auctor, tristique diam nec, ornare massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sagittis nisi ac ornare egestas.
                    </p>
                </div>
            </div>
                {{-- ratings --}}
                <div class="container mt-5">
                    <h5>Ratings & Reviews</h5>
                    @include('layouts.ratings')
                </div>
        </div>
        {{-- right --}}
        
        <div class="col-md-5  col-xl-4 my-5  ">
            <div class="bg-white  border border-2 rounded py-4 px-4">
                <span class="badge bg-success">10% OFF</span>
                <h3 class="mt-2">Organic Broccoli</h3>
                <h4  class="mt-2">&#8369; 300</h4>
                <div class="d-flex ">
                    <input type="number" id="quantity" name="quantity" placeholder="1" min="1" max="30">
                    <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span><a href=" {{ url('/cart') }} " class="text-reset text-decoration-none">ADD TO CART</a></button>
                </div>
                <div class="container bg-white border border-5 rounded my-3 py-3">
                    <h6>All Reviews: 4.3 out of 5</h6> 
                    <h6>Date: May 20, 2021 </h6> 
                    <h6>Name of Marketplace: SB Store </h6> 
                    <h6>Categories: Fruits & Vegetables</h6> 
                </div>
                <br>
                <hr>
                 {{-- related products --}}
                <div class="container  border-5 rounded bg-white">
                    <h5 class="pt-3">Related Products</h5>
                    <div class="container">
                        <div class="card bg-white ">
                            <span class="badge bg-success mr-auto">10% OFF</span>
                            <div class="card-body">
                                <img style="img-fluid" style="width: 200 px !important; height: 200px !important"src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                            </div>
                            <div class="card-footer text-center bg-white border-top-0">
                                <h4 class="text-primary">Strawberry</h4>
                                <p class="">&#8369; 200</p>
                                <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                            </div>
                        </div>
                        <div class="card bg-white mt-5">
                            <span class="badge bg-success mr-auto">10% OFF</span>
                            <div class="card-body">
                                <img style="img-fluid"src="https://klbtheme.com/groci/wp-content/uploads/2018/08/5-1-170x185.jpg" alt="">
                            </div>
                            <div class="card-footer text-center bg-white border-top-0">
                                <h4 class="text-primary">Cauliflower</h4>
                                <p class="">&#8369; 500</p>
                                <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            
            
            
        </div>
    </div>
</div>
    
@endsection