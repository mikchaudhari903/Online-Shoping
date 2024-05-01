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
<section >
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('image/'.$viewproduct->image) }}" alt="..." style="float: left;
                width:  600px;
                height: 400px;
                object-fit: contain;" /></div>
            <div class="col-md-6">
                <h4 class=" fw-bolder">{{ $viewproduct->name }}</h4>
                <div class="fs-5 mb-5">
                    <span>₹ {{ $viewproduct->price }}</span>
                </div>
                <p class="lead">{{ $viewproduct->details}}</p>
                <div class="d-flex">
                    <form action="{{ route('order') }}" method="post">
                     @csrf
                    <input type="text" class="visually-hidden" name="user_id" value="{{ $userId = Auth::id(); }}">
                    <input type="text" class="visually-hidden" name="product_id" value="{{ $viewproduct->id }}">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" name="qty" style="max-width: 3rem" />
                    <br>
                    <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div style="height: 60px">

    </div>
</section>
{{-- <section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Other products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($NewProduct as $item)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
         --}}
         @include('footer')
@endsection  

</body>
</html>