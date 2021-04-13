<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
<div class="">
      <center><h3>Recent Products</h3>
      <div class="third mt-4"> 
          <a href="/front/nearbyprod" title="Edit Product" class="btn btn-success">
            <i class="fa fa-heart" aria-hidden="true"></i> Products nearby me</a>
      </div>
    </center>
</div>

    <div class="container flex-row mt-4">
    <div class="row">
    
    <div class="col-sm offset-1" >
    <h3>For sale</h3>
          <div class="card product-image border border-info">
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
            
          </div>
        </div>


        <div  class="col-sm offset-1 ">
        <h3>Products for donation</h3>
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
          </div>
        </div>
    </div>
  </div>
