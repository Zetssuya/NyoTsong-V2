<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
<div>
  <a href="/front/feedbacksystem" class="btn btn-primary">
    <i class="fa fa-archive"></i>Provide System Feedback</a>
</div>

<!-- Product display -->
<div class="">
      <center>
      <div class="third mt-4"> 
          <a href="/front/nearbyprod" title="Edit Product" class="btn btn-success">
            <i class="fa fa-heart" aria-hidden="true"></i> Products nearby me</a>
      </div>
    </center>
</div>

<div class = "products">
  <div class = "container">
    <h1 class = "lg-title">Products for sale</h1>
    <div class="row">

    <!--Products for sale -->
      @foreach($saledata as $i => $sdata)
      <div class="col-md-3">
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

    <!--Products for donation -->
    <div class="mb-4">
    <h1 class = "lg-title">Items for donation</h1>
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
    
</div>
</div>
</div>

