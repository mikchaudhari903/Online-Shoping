<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="image/logo.png" type="image/x-icon"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>

<footer class="text-center text-lg-start bg-body-tertiary text-muted" style="background-color: black">
  

    <section class="">
      <div style="padding: 10px"></div>
      <div class="container text-center text-md-start mt-5">
      
        <div class="row mt-3">
        
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
         
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Product
            </h6>
            <p>
                Online shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet using a web browser or a mobile app. 
            </p>
          </div>
        
  
        
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
           
            <h6 class="text-uppercase fw-bold mb-4">
                links
            </h6>
            <p>
              <a href="{{ route('home') }}" class="text-reset">Home</a>
            </p>
            <p>
              <a href="{{ route('product') }}" class="text-reset">Product</a>
            </p>
            <p>
              <a href="{{ route('about.index') }}" class="text-reset">About</a>
            </p>
            <p>
              <a href="{{ route('contact.index') }}" class="text-reset">Contact Us</a>
            </p>
          </div>
        
  
        
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
         
            <h6 class="text-uppercase fw-bold mb-4">
              Map
            </h6>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d555.2183243830762!2d72.9532279777342!3d20.586065063944393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c335580ae8a3%3A0x9889309121cf9790!2sCodeSynergiX!5e0!3m2!1sgu!2sin!4v1708494071269!5m2!1sgu!2sin" width="180" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        
  
        
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
           
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p>FF-18, Swastik Arcade, Valsad - Dharampur Rd, Chokdi, Atak Pardi, Valsad, Pardi Parnera, Gujarat 396002</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 91 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 91 234 567 89</p>
          </div>
        
        </div>
     
      </div>
    </section>
  
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="https://codesynergix.com/">codesynergix.com</a>
    </div>
    @section('footer')
    @show
  
  </footer>

    
  
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  
</body>
</html>