
<!DOCTYPE html>
<html lang="en">
 
<!-- Mirrored from 127.0.0.1:8000/faq by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 20:50:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet"/>
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
  <section class="blogfront">
   <nav class="navbar navbar-expand-lg sticky-top change" id="navbar">
    <a class="navbar-brand" href="{{route('index')}}">
     <img alt="" height="42" src="logo.png" style="object-fit: contain;" width="220"/>
     <!-- {{$company_features? $company_features->companyname :"No company name set"}} -->
    </a>
    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
     <span class="navbar-toggler-icon">
     </span>
    </button>
    <div id="google_translate_element">
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a class="nav-link" href="{{route('index')}}">
        HOME
        <span class="sr-only">
         (current)
        </span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('about')}}">
        ABOUT US
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('invest')}}">
        INVEST
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('blog')}}">
        BLOG
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('contact')}}">
        CONTACT US
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('testimony')}}">
        TESTIMONIES
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('faq')}}">
        FAQ
       </a>
      </li>
      <!-- <li class="nav-item">
       <a class="nav-link" href="/terms">
        Legal and Terms
       </a>
      </li> -->
      <li class="nav-item dropdown">
       <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="faq.html#" id="clientDropdown" role="button">
        CLIENT AREA
       </a>
       <div aria-labelledby="clientDropdown" class="dropdown-menu">
      <a class="dropdown-item" href="{{route('register')}}">SIGN UP</a>
      <a class="dropdown-item" href="{{route('login')}}">LOGIN</a>
       </div>
      </li>
     </ul>
    </div>
   </nav>
   <div class="overlay2">
   </div>
   <div class="text">
    <h1>
     FAQ
    </h1>
   </div>
  </section>
  <section id="blog-content">
   <div class="container">
    <div class="row">
     <div class="col-md-7">
      <!-- <div class="bs-example"> -->
      <div class="accordion" id="accordionExample">
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           Is this company legally registered?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           {{$company_features? $company_features->companyname :"No company name set"}} is legally registered with FINRA(CRD#: 37711), and regulated by Sec(SEC#: 8-47899)..
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           How long does withdrawals take?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           Withdrawals are paid in a space of 0 - 1hour, considering the functioning of the blockchain network. No withdrawal fees, withdrawals are very seamless..
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           Can I invest in multiple plans?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           Yes, you can invest in multiple plans. All investments run concurrently..
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           How is the Referral plan?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           We operate a two generational referral system. You earn 7% from the first and 3.5% from the second referral generation.
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           Guaranteed Investment?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           Yes, your investment begins to grow immediately you have invested. Profits begin to accrue to your investment as the clock ticks..
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           Is DEPOSIT Automatic?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           All deposits are automatically credited to your balance, as you send BTC or your preferred payment option to a unique wallet address generated during Funding request.
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           Does the company have different payment options?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           Yes, we have different payment options both for deposit and withdrawal processes. BTC, USDT, ETHEREUM, and PAYPAL are the available payment options..
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           Can I Lose my money?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           It is always a possibility in the sphere of investment and also one of the biggest challenges faced by investors. However, in our case, the possibility is negative..
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           How are losses managed?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           As Wealth management companY, we professionally mitigate our losses as we spread our trading over a wide range of options with professionals in each field and also have good profit reserves..
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           What is the withdrawal limit?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           There is no limit for withdrawals..
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           When can I withdraw money?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           You can make a request at anytime, including weekends..
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           Is there a registration fee?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           Registration at our company website is free.
          </p>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingOne" style="background-color: #24248f;">
         <h2 class="mb-0">
          <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" style="color: ivory;text-decoration: none;" type="button">
           How long does the trade last for?
          </button>
         </h2>
        </div>
        <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
         <div class="card-body" style="color: #24248f;">
          <p>
           The trade lasts for a period of 6months, after which you can withdraw your capital..
          </p>
         </div>
        </div>
       </div>
      </div>
      <!-- </div> -->
      <br/>
      <br/>
     </div>
     <div class="col-md-5">
      <img alt="Responsive image" class="img-fluid mx-auto d-block" src="static/images/13.svg" style="height: 500px;"/>
     </div>
    </div>
   </div>
  </section>
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
      <form id="contactform">
       <div class="mb-3">
        <input class="form-control" name="name" placeholder="Name" required="" type="text"/>
       </div>
       <div class="mb-3">
        <input class="form-control" name="email" placeholder="Email" type="email"/>
       </div>
       <div class="mb-3">
        <textarea class="form-control" cols="10" name="message" placeholder="Message" rows="4"></textarea>
       </div>
       <button class="btn d-md-flex" type="submit">
        Send
       </button>
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
      <img alt="website logo" height="40" src="logo.png" width="100"/>
      <h3>
      </h3>
      <div class="contacts">
       <p>
        <i class="fas fa-phone-alt">
        </i>
        None
       </p>
       <p>
        <i class="fas fa-envelope">
        </i>
        {{($company_features)? $company_features->companyemail :"No company email set"}}
       </p>
       <p>
        <i class="fab fa-facebook">
        </i>
        @fb/diversclimax.com
       </p>
       <p>
        <i class="fab fa-twitter">
        </i>
        @tw/diversclimax.com
       </p>
       <p>
        <i class="fab fa-instagram-square">
        </i>
        @ig/diversclimax.com
       </p>
       <p>
        <i class="fab fa-linkedin">
        </i>
        @ln/diversclimax.com
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
 </body>

<!-- Mirrored from 127.0.0.1:8000/faq by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 20:50:21 GMT -->
</html>
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
    <img alt="website logo" height="40" src="logo.png" width="100"/>
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
