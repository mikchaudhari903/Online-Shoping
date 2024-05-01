<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="icon" href="image/logo.png" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    <section>
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <div class="card card-registration my-4">
                    <div class="row g-0">
                      <div class="col-xl-6 d-none d-xl-block">
                        <img src="https://img.freepik.com/free-vector/work-time-concept-illustration_114360-1232.jpg"
                          alt="Sample photo" class="img-fluid"
                          style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                      </div>
                      <div class="col-xl-6">
                        <div class="card-body p-md-5 text-black">
                          <h3 class="mb-5 text-uppercase">Registration form</h3>
                          <form action="{{ route('registration') }}" method="post">
                            @csrf
                          <div class="form-outline mb-4">
                            <input type="text" id="name" class="form-control form-control-lg" name="name" placeholder="Full Name" required/>
                          </div>
                          <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg" name="email" placeholder="Email Address" required/>
                          </div>
                          <div class="form-outline mb-4">
                            <input type="number" id="number" class="form-control form-control-lg" name="number" placeholder="Mobile Number" required/>
                          </div>

                          <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
          
                            <h6 class="mb-0 me-4">Gender: </h6>
          
                            <div class="form-check form-check-inline mb-0 me-4">
                              <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                value="Male" />
                              <label class="form-check-label" for="femaleGender">Male</label>
                            </div>
          
                            <div class="form-check form-check-inline mb-0 me-4">
                              <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                value="Female" />
                              <label class="form-check-label" for="maleGender">Female</label>
                            </div>
          
                            <div class="form-check form-check-inline mb-0">
                              <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                value="Other" />
                              <label class="form-check-label" for="otherGender">Other</label>
                            </div>
          
                          </div>
                          <div class="form-outline mb-4">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" placeholder="Address" required></textarea>
                            </div>
                            <div class="form-outline mb-4">
                              <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Password" required/>
                            </div>
  
          
                          <div class="d-flex justify-content-end pt-3">
                            
                            <button type="submit" class="btn btn-success btn-lg ms-2" name="registration">Registration</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 
</body>
</html>