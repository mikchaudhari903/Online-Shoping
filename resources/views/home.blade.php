<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" href="image/logo.png" type="image/x-icon"/>
</head>
<body>
    <header>
        @extends('nav')

    @section('content')


    </header>
    <div style="padding: 30px"></div>
     <section>
        <section>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://i.postimg.cc/fLnJWSvZ/image-1646x480.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.postimg.cc/TwJmZcvB/image-1646x480-2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.postimg.cc/QMrFhWmD/image-1646x480-3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
    </section>

   
    <section>
        <section style="background-color: #f7f7f7;">
          <div class="text-center container py-5">
            <h4 class="mt-4 mb-5"><strong>Popular Product</strong></h4>
        
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