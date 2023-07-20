
<!DOCTYPE html>
<html lang="en">
 
<!-- Mirrored from 127.0.0.1:8000/contact by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 20:49:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <link crossorigin="anonymous" href="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet"/>
  <title>{{$title}} | {{$company_features? $company_features->companyname :"No company name set"}}</title>
  <link href="static/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
   <link href="https://fonts.googleapis.com/" rel="preconnect"/>
   <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
   <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
   <link crossorigin="anonymous" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" referrerpolicy="no-referrer" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="static/temp/css/fontawesome-all.min.css" rel="stylesheet"/>
  <script src="../code.tidio.co_443/4cihkkybheqskao593ubrnyyzgcofntd.js" async></script>
    <link href="static/css/style.css" rel="stylesheet"/>
    <script src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit" type="text/javascript">
    </script>
   </link>
  </link>
 </head>
 <body>
  <section id="seventh">
   <div class="container">
    <div class="row text-center row1">
     <div class="col-md-4">
      <h3>
       Contact Us
      </h3>
      <h5>
       Send Us A Message
      </h5>
      <form id="contactform" method="POST" action="{{route('postcontact')}}">
                @csrf
              <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
              </div>
              <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="message" rows="4" cols="10" placeholder="Message"></textarea>
              </div>
              <button type="submit" class="btn d-md-flex">Send</button>
            </form>
     </div>
     <div class="col-md-4" id="links">
      <h3>
       Sitemap
      </h3>
      <div class="links">
       <a href="{{route('index')}}">
        Home
       </a>
       <a href="{{route('about')}}">
        About Us
       </a>
       <a href="{{route('invest')}}">
        Invest
       </a>
       <a href="{{route('blog')}}">
        Blog
       </a>
       <a href="{{route('faq')}}">
        FAQ
       </a>
       <a href="{{route('index')}}">
        Login
       </a>
       <a href="{{route('index')}}">
        Sign Up
       </a>
      </div>
     </div>
     <div class="col-md-4">
      <img alt="website logo" height="40" src="media/site_images/diverseclimax_DfgBCAa.html" width="100"/>
      <h3>
      </h3>
      <div class="contacts">
        <p>
          Phone: <br>
            <a href="tel:+" style="text-decoration: none; color: white;">{{$company_features? $company_features->companyphone :"No company phone set"}}</a>
          
        </p>
        <p>
          
           Email: <br> <a href='mailto:{{($company_features)? $company_features->companyemail :"No company email set"}}' style="text-decoration: none; color: white;">{{($company_features)? $company_features->companyemail :"No company email set"}}</a>
          
          
        </p>
        <p>
          
          
            Address: <br>  {{$company_features? $company_features->companylocation :"No company address set"}}
          
          
        </p>
        <p>
         Second Address: None
          
        </p>
        
      </div>
     </div>
    </div>
   </div>
  </section>
  <div class="container-fluid" id="copyright">
   <p>
    Copyright © 2021 All Rights Reserved {{$company_features? $company_features->companyname :"No company name set"}}
   </p>
  </div>

  <script crossorigin="anonymous" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" src="../code.jquery.com/jquery-3.2.1.slim.min.js">
  </script>
  <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
  </script>
  <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
  </script>
  <script src="static/js/script.js">
  </script>
  <script type="text/javascript">
   function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
  </script>
 </body>

<!-- Mirrored from 127.0.0.1:8000/contact by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 20:49:32 GMT -->
</html>
