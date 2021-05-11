<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">

<div style="background-color: #fff">
 <!--Slider trial -->
 <div class="d-flex flex-row justify-content-center" style="background-color: rgb(255, 255, 255)" >
  <a href="/vehicles">
  <div class="p-2" style="margin-left: 50px">
    <img src="/assets/img/img-1.png" alt="">
    <h6>Vehicles</h6>
  </div>
</a>
<a href="/electronics">
  <div class="p-2" style="margin-left: 50px">
    <img src="/assets/img/img-3.png" alt="">
    <h6>Electronics</h6>
  </div>
</a>
<a href="/livestock">
  <div class="p-2" style="margin-left: 50px">
    <img src="/assets/img/img-5.png" alt="">
    <h6>Livestock</h6>
  </div>
</a>
<a href="/land">
  <div class="p-2" style="margin-left: 50px">
    <img src="/assets/img/land.png" alt="" height="55px" width="55px" href="#">
    <h6>Land</h6>
  </div>
</a>
</div>
 <!--End of Slider trial -->

<!-- Product display -->
<div class="">
      <center>
      <div class="third mt-4"> 
          <a href="/front/nearbyprod" title="Edit Product" class="btn btn-success">
            <i class="fa fa-heart" aria-hidden="true"></i> Products nearby me</a>
      </div>
    </center>
</div>

<div class = "container">
  <div class = "products">
      <h3 class = "lg-title">Products for sale</h3>
    <div class="row">
    <!--Products for sale -->
      @foreach($saledata as $i => $sdata)
      <div id="saleproduct" class="col-md-3 column">
      <div class = "product-items">
          <!-- single product -->
          <div class = "product">
              <div class = "product-content">
                  <div class = "product-img">
                      <img src="{{ url('/uploads/') . '/' . $sdata->image }}" alt = "product image" height="200px" width="100%">
                  </div>
              </div>

              <div class = "product-info">
                  <div class = "product-info-top">
                      <h2 class = "sm-title justify-text-center">{{$sdata->name}}</h2>
                  </div>
                  <a class = "product-name">Nu. {{$sdata->price}}</a>
                  <p class = "product-price">{{$sdata->detail}}</p>
                  <a href="/front/saledetail/{{$sdata->id}}" class="text-success product-name">
                    View details </a>
              </div>

              <div class = "off-info">
                  <h2 class = "sm-title">{{$sdata->negotiation}}</h2>
                 
              </div>
              
          </div>
        </div>

      </div>
      @endforeach
      </div>
    </div>
    <center>
      <div> 
        <a href="/latestsale" title="See more like this" class="btn btn-outline-danger" style="margin-top: -70px">
        See more</a>
      </div>
      </center>
  </div>

  <div class ="products" style="margin-top: -30px">
    <div class ="container">
      <h3 class="lg-title">Products for donation</h3>
    <div class="row">
    @foreach($dondata as $i => $ddata)
    <div class="col-md-3">
    <div class = "product-items">
        <!-- single product -->
        <div class = "product">
            <div class = "product-content">
                <div class = "product-img">
                    <img src="{{ url('/uploads/') . '/' . $ddata->image }}" alt="Products for donation" height="200px" width="100%">
                </div>
            </div>

            <div class = "product-info">
                <div class = "product-info-top">
                    <h2 class = "sm-title justify-text-center">Item name: {{$ddata->name}}</h2>
                </div>
                <p class = "product-price">Item description: {{$ddata->detail}}</p>
                <a href="/front/donationdetail/{{$ddata->id}}" class="text-success product-name">
                  View details </a>
            </div> 
        </div>
      </div>
    </div>
      @endforeach  
</div>
<center>
  <div> 
    <a href="/latestdonation" title="See more like this" class="btn btn-outline-danger">
    See more</a>
  </div>
  </center>
</div>
</div>
</div>

