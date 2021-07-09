@extends('layouts.app')

@section('content')

  <div class="container mt-5 text-center">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3">Beverages</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Biscuits, snacks & Chocolates</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Breakfast & Dairy</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Fruits & Vegetables</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Furnishing & Home Appliances</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Groceries</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Kitchen Appliances</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Household Needs</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Meats & SeaFood</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Noodles, Sauce & Instant Food</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Hygiene Care</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Pet Needs</a>
                </div>
            </div>
        </div>
        <div class="col-md-9 mt-2">
            <div class="row">
                <img class="" height="140" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/2-2.jpg" alt="">
                <div class="col-md-6 mt-3 d-flex justify-content-start">
                    <button id="list" class="border border-3 p-1"><i class="fa fa-th-large fa-2x" aria-hidden="true"></i></button>
                    <button id="grid" class="border border-3 p-1 mx-2"><i class="fas fa-list fa-2x"></i></button>
                </div>
                <div class="col-md-6 ">
                    <select class="mt-3 col-sm-7 form-select ml-auto " aria-label="selection">
                        <a href="#"><option selected> Sort by popularity</option></a>
                        <a href="#"><option value="1"> Sort by average rating</option></a>
                        <a href="#"><option value="2"> Sort by latest</option></a>
                        <a href="#"><option value="3"> Sort by price: low to high</option></a>
                        <a href="#"><option value="3"> Sort by price: high to low</option></a>
                    </select>
                </div>
            </div>
            <div id="products" class=" row">
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">10% OFF</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <h4 class="text-primary">Strawberry</h4>
                            <p class="">&#8369; 200</p>
                            <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">10% OFF</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <h4 class="text-primary">Strawberry</h4>
                            <p class="">&#8369; 200</p>
                            <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">10% OFF</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <h4 class="text-primary">Strawberry</h4>
                            <p class="">&#8369; 200</p>
                            <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">10% OFF</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <h4 class="text-primary">Strawberry</h4>
                            <p class="">&#8369; 200</p>
                            <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">10% OFF</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <h4 class="text-primary">Strawberry</h4>
                            <p class="">&#8369; 200</p>
                            <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">10% OFF</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <h4 class="text-primary">Strawberry</h4>
                            <p class="">&#8369; 200</p>
                            <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">10% OFF</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <h4 class="text-primary">Strawberry</h4>
                            <p class="">&#8369; 200</p>
                            <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">10% OFF</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <h4 class="text-primary">Strawberry</h4>
                            <p class="">&#8369; 200</p>
                            <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">10% OFF</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <h4 class="text-primary">Strawberry</h4>
                            <p class="">&#8369; 200</p>
                            <button type="submit" class="btn btn-success"><span class="material-icons">shopping_cart</span> ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </div>
  @include('carousel.script')
@endsection