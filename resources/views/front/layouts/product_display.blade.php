<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
<div class="">
      <center><h3>Recent Products</h3>
      <div class="third mt-4"> 
          <a href="/front/nearbyprod" title="Edit Product" class="btn btn-success">
            <i class="fa fa-heart" aria-hidden="true"></i> Products nearby me</a>
      </div>
    </center>
</div>

<div class="container">
  <div class="row">
    
        <div class="col-sm">
          <h3 class="text-center">For sale</h3>
          <div class="position-relative">
                @foreach($saledata as $i => $sdata)
                  <article class="card-article d-flex flex-column text-center mb-4">
                  <div class="card-article d-flex flex-column text-center">
                    <div class="category text-success h6 mb-3">
                      <div>{{$sdata->name}}</div>
                    </div>
                    <img src="{{ url('/uploads/') . '/' . $sdata->image }}" alt="Products for sale" class="img-fluid card-img-top">
                    <h4 class="font-weight-bold mb-3">
                      <span>Nu. {{$sdata->price}}</span>
                    </h4>
                    <div class="description mb-3">
                      {{$sdata->detail}}
                    </div>
                      <span class="text-success h6"> <a href="/front/saledetail/{{$sdata->id}}" class="text-success h6">
                      View details </a></span>
                  </div>
                  </article>
                @endforeach
          </div>
        </div>

                  {{-- <div class="card product-image border border-info mb-4">
                  @foreach($saledata as $i => $sdata)
                  <div class="product-info">
                      <img  src="{{ url('/uploads/') . '/' . $sdata->image }}" alt="Product image here" >
                  </div>
                    <h5>{{$sdata->name}}</h5>
                    <h6>Nu. {{$sdata->price}}</h6>
                    <h6>{{$sdata->detail}}</h6>
                    <div class="third mt-4"> 
                    <a href="/front/saledetail/{{$sdata->id}}" title="Product Detail" class="btn btn-success">
                    <i class="fa fa-cogs"></i> View Details</a>
                    </div>
                  @endforeach
                    
                  </div> --}}
        


        <div class="col-sm">
          <h3 class="text-center">For donation</h3>
          <div class="position-relative">
            @foreach($dondata as $i => $ddata)
            <article class="card-article d-flex flex-column text-center">
            <div class="card-article d-flex flex-column text-center">
              <div class="category text-success h6 mb-3">
                <div>{{$ddata->name}}</div>
              </div>
              <img src="{{ url('/uploads/') . '/' . $ddata->image }}" alt="Products for donation" class="img-fluid card-img-top">
              {{-- <h4 class="font-weight-bold mb-3">
                <span>Osteopathy for Sports Injuries</span>
              </h4> --}}
              <div class="description mb-3">
                {{$ddata->detail}}
              </div>
              <span class="text-success h6"> 
                <a href="/front/donationdetail/{{$ddata->id}}" class="text-success h6">
                View details </a></span>
            </article>
            @endforeach
            </div>
                      {{-- <h3>Products for donation</h3>
                        <div class="card product-image border border-info">
                        @foreach($dondata as $i => $ddata)
                        <div class="product-info">
                            <img src="{{ url('/uploads/') . '/' . $ddata->image }}" alt="Product image here" >
                        </div>
                          <h5>{{$ddata->name}}</h5>
                          <h6>{{$ddata->detail}}</h6>
                          <div class="third mt-4"> 
                                          <a href="/front/donationdetail/{{$ddata->id}}" title="Product Detail" class="btn btn-success">
                                          <i class="fa fa-cogs"></i> View Details</a>
                                      </div>

                        @endforeach
                        </div> --}}
        </div>
    </div>
  </div>
