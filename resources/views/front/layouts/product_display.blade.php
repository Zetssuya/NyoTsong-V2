<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">

<div class="">
      <h3>Recent Product Ads</h3>
      <button href="" type="button" class="btn btn-success">Products Nearby>>>>></button>
      <div class="third mt-4"> 
          <a href="/front/profile/editproduct/{{$sdata->id}}" title="Edit Product" class="btn btn-success">
          <i class="fa fa-cogs"></i> Edit</a>
      </div>
    </div>

    <section class="products">
    <div class="row">
    
    <div class="product-card text-center col-sm" >
          <div class="product-image">
          @foreach($saledata as $i => $sdata)
          <div class="product-info">
              <img  src="{{ url('/uploads/') . '/' . $sdata->image }}" alt="Product image here" >
          </div>
            <h5>{{$sdata->name}}</h5>
            <h6>Nu. {{$sdata->price}}</h6>
            <h6>{{$sdata->detail}}</h6>
            <div class="third mt-4"> 
                            <a href="/front/saledetails/{{$sdata->id}}" title="Edit Product" class="btn btn-success">
                            <i class="fa fa-cogs"></i> View Details</a>
                        </div>
          @endforeach
            
          </div>
        </div>

        <div class="product-card text-center col-sm">
          <div class="product-image">
          @foreach($dondata as $i => $ddata)
          <div class="product-info">
              <img src="{{ url('/uploads/') . '/' . $ddata->image }}" alt="Product image here" >
          </div>
            <h5>{{$ddata->name}}</h5>
            <h6>{{$ddata->detail}}</h6>
            <div class="third mt-4"> 
                            <a href="/front/donationdetails/{{$ddata->id}}" title="Edit Product" class="btn btn-success">
                            <i class="fa fa-cogs"></i> View Details</a>
                        </div>

          @endforeach
          </div>
        </div>
    </div>
      </section>