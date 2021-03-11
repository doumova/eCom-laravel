@extends('master')
@section("content")
<div class="custom-product">
        <!-- Indicators -->
        {{-- <div class="col-sm-4">
            <a href="#">Filter</a>
        </div> --}}
        <div class="col-sm-10">
            <table class="table">
                
                <tbody>
                  <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                  </tr>
                  <tr>
                    <td>Taxe</td>
                    <td>$ 0</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total + 10 }}</td>
                  </tr>
                </tbody>
              </table>
          
              <div>
                <form action="#">
                    <div class="form-group">
                        <textarea type="email" placeholder="Enter your adress " class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Payment method</label><br><br>
                       <input type="radio" name="payment"> <span class="glyphicon glyphicon-globe"> Oneline Payment</span>
                       <input type="radio" name="payment"> <span class="glyphicon glyphicon-credit-card"> Credit Cart</span>
                       <input type="radio" name="payment"> <span class="glyphicon glyphicon-import"> Payment on Delivery</span><br><br>


                    </div>
                    <button type="submit" class="btn btn-default">Order Now</button>
                  </form>
              </div>
        </div>

</div>
@endsection