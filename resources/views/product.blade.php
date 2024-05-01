<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="icon" href="image/logo.png" type="image/x-icon"/>
    <link rel="stylesheet" href="resources/css/app.css">
    
</head>
<body>
<header>
    @extends('nav')

    @section('content')
 
</header>
<div style="padding: 30px"></div>
<section>
  <section style="background-color: #f7f7f7;">
    <div class="text-center container py-5">
      <h4 class="mt-4 mb-5"><strong>Product</strong></h4>
  
      <div class="row">
          @foreach ($viewproduct as $item)
        <div class="col-lg-3 col-md-10 mb-4">
          <div class="card">
            <div class="bg-image hover-zoom">
              <a href="{{route('productview', ['id' => $item->id])}}" class="text-reset text-decoration-none">
              <img src="{{ asset('image/'.$item->image) }}" class="w-100" style="float: left;
              width:  100px;
              height: 300px;
              object-fit: cover;"/>
            </div>
            <div class="card-body">
              
                <h5 class="card-title mb-3 text-truncate" >{{ $item->name }}</h5>
              </a>
              <p class="text-truncate">{{ $item->details}}</p>
              <h6 class="mb-3">
                <strong class="ms-2 text-danger">₹ {{ $item->price }}</strong>
              </h6>
            </div>
          </div>
        </div>
        @endforeach
        
        
        </div>
    
    </div>
  </section>
</section>
@include('footer')
@endsection  

</body>
</html>