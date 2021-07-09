@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="mt-3 py-3" style="background-color:#FFA500">
          <h1 class="text-white">My Cart</h1>
        </div>
      </div>
    </div>
      <div class="col-md-12">
        <table class="table">
          <thead class="bg-light">
            <tr class="text-center">
              <th><strong></strong></th>
              <th><strong>Product</strong></th>
              <th><strong>Price</strong></th>
              <th><strong>Quantity</strong></th>
              <th><strong>Subtotal</strong></th>
              <th><strong>Action</strong></th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center">
              <td><img width="80" height="70" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-1-80x80.jpg" alt=""></td>
              <td>Organic Broccoli</td>
              <td>&#8369; 300</td>
              <td><input type="number" id="quantity" name="quantity" placeholder="1" min="1" max="30"></td>
              <td>&#8369; 300</td>
              <td><a href="" class="text-reset"><span class="material-icons">delete</span></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    <div class="container mt-5">
      <div class="col-md-12">
        <h3>Cart Totals</h3>
        <table class="table">
              <tr>
                <th>Subtotal</th>
                <td>&#8369; 300</td>
              </tr>
              <tr>
                <th>Delivery</th>
                <td>  <p>Please select the delivery type:</p>
                  <input type="radio" id="" name="delivery" value="Not Deliver">
                  <label for="male">Not Deliver</label><br>
                  <input type="radio" id="female" name="delivery" value="Deliver">
                  <label for="female">Deliver</label><br></td>
              </tr>
              <tr>
                <th>Total</th>
                <td>&#8369; 300</td>
              </tr>
        </table>
        <button type="submit" class="btn btn-danger"><a href=" {{ url('/checkout') }} " class="text-reset text-decoration-none">Proceed to Checkout <span class="material-icons">input</span></a></button>
      </div>
    </div>
  </div>
@endsection
