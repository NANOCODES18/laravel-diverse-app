
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 127.0.0.1:8000/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 20:41:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet" />
    <title>{{$title}} | {{$company_features? $company_features->companyname :"No company name set"}}</title>
  <link href="static/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://fonts.googleapis.com/" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
  <link
    href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet" />
  <link crossorigin="anonymous" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    referrerpolicy="no-referrer" rel="stylesheet">
  <!-- Fontawesome CSS -->
  <link href="static/temp/css/fontawesome-all.min.css" rel="stylesheet" />
  <script src="../code.tidio.co_443/4cihkkybheqskao593ubrnyyzgcofntd.js" async></script>
  <link href="static/css/style.css" rel="stylesheet" />
  <script src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"
    type="text/javascript">
    </script>
  </link>
  </link>
  <style>
    .ascent {
      text-align: center;
      width: 100% !important;
      
    }

    .platform__left p {
  font-style: normal;
  font-weight: 400;
  font-size: 22px;
  line-height: 25px;
  letter-spacing: 0.72px;
  color: #ffffff;
  max-width: 100%; 
  margin: 30px 0;
}
p {
  padding-left: 10%;
  padding-right: 10%;

}
h3{
  font-style: normal;
  font-weight: 600;
  font-size: 2rem;
  line-height: 57px;
  letter-spacing: 0.02em;
  background: linear-gradient(90deg, #ff3bff 0%, #5c24ff 33.65%, #d94fd5 69.06%, #ecbfbf 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
  </style>
</head>

<body>
  <section class="homefront">
    <nav class="navbar navbar-expand-lg change" id="navbar">
      <a class="navbar-brand" href="{{route('index')}}">
        <img alt="" height="42" src="logo.png" style="object-fit: contain;" width="220" />
        <!-- {{$company_features? $company_features->companyname :"No company name set"}} -->
      </a>
      <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
        class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon">
        </span>
      </button>
      <div id="google_translate_element">
      </div>
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
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown"
              href="index.html#" id="clientDropdown" role="button">
              CLIENT AREA
            </a>
            <div aria-labelledby="clientDropdown" class="dropdown-menu">
              <a class="dropdown-item" href="{{route('index')}}">
                LOGIN
              </a>
              <a class="dropdown-item" href="{{route('index')}}">
                SIGN UP
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <video autoplay="" loop="" muted="" src="static/video/obvideo.mp4">
    </video>
    <div class="overlay">
    </div>
    <div class="text">
      <h1 style="text-align:center">
        {{$company_features? $company_features->companyname :"No company name set"}}
      </h1>
      <br />
      <br />
      <h1>
        BONDS, CRYPTO, FOREX, STOCKS ETC
      </h1>
      <p>
        Explore the all new auto trading future with ease...
      </p>
      <a href="{{route('index')}}">
        JOIN US
      </a>
    </div>
  </section>
  <div class="future__content">
    <ul class="future">
      <li class="feature__heading">
        The Future of
        <br />
        Investment is Here
      </li>
      <li class="feature__subheading">
        Enjoy new eco-friendly investment
        <br />
        btechnologies and get
        <br />
        amazing benefits
      </li>
      <li class="start__now">
        <a href="{{route('index')}}">
          Get Started
        </a>
      </li>
    </ul>
  </div>
  <section id="second1">
    <div class="container">
      <div style="text-align: center; width: 100%; font-size: 1.4em;">
        <h2>Chose from different Investmen portfolios</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-body">
            <h5 class="card-title">
              Stocks &amp; ETFs
            </h5>
            <p class="card-text">
              Invest in stocks with 0% commission. Buy in bulk or just a fraction.
            </p>
            <a href="{{route('index')}}" style="width: fit-content;">
              Invest in Stocks
            </a>
            <div style="padding: 0;margin: 0;">
              <svg height="180" viewbox="0 0 290 180" width="290" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <rect height="180" id="prefix__a" rx="10" width="290" x="0" y="0">
                  </rect>
                  <rect height="86" id="prefix__c" rx="4" width="86" x="0" y="0">
                  </rect>
                  <rect height="180" id="prefix__i" rx="7" width="305" x="12" y="31">
                  </rect>
                  <rect height="48" id="prefix__n" rx="4" width="48" x="0" y="0">
                  </rect>
                  <lineargradient id="prefix__j" x1="50%" x2="50%" y1="0%" y2="100%">
                    <stop offset="0%" stop-color="#FFF" stop-opacity=".75">
                    </stop>
                    <stop offset="100%" stop-color="#2C2C2C" stop-opacity="0">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__k" x1="50%" x2="50%" y1="38.65%" y2="89.71%">
                    <stop offset="0%" stop-color="#F6FCEE">
                    </stop>
                    <stop offset="100%" stop-color="#FFF" stop-opacity="0">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__l" x1="50%" x2="50%" y1="0%" y2="100%">
                    <stop offset="0%" stop-color="#FFF" stop-opacity="0">
                    </stop>
                    <stop offset="100%" stop-color="#FFF">
                    </stop>
                  </lineargradient>
                  <filter filterunits="objectBoundingBox" height="193%" id="prefix__d" width="193%" x="-46.5%"
                    y="-30.2%">
                    <feoffset dy="14" in="SourceAlpha" result="shadowOffsetOuter1">
                    </feoffset>
                    <fegaussianblur in="shadowOffsetOuter1" result="shadowBlurOuter1" stddeviation="11">
                    </fegaussianblur>
                    <fecolormatrix in="shadowBlurOuter1"
                      values="0 0 0 0 0.562709821 0 0 0 0 0.639266309 0 0 0 0 0.728528912 0 0 0 0.235167572 0">
                    </fecolormatrix>
                  </filter>
                  <filter filterunits="objectBoundingBox" height="133.3%" id="prefix__h" width="119.7%" x="-9.8%"
                    y="-16.7%">
                    <femorphology in="SourceAlpha" operator="dilate" radius="2" result="shadowSpreadOuter1">
                    </femorphology>
                    <feoffset in="shadowSpreadOuter1" result="shadowOffsetOuter1">
                    </feoffset>
                    <fegaussianblur in="shadowOffsetOuter1" result="shadowBlurOuter1" stddeviation="8">
                    </fegaussianblur>
                    <fecomposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1">
                    </fecomposite>
                    <fecolormatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0">
                    </fecolormatrix>
                  </filter>
                  <filter filterunits="objectBoundingBox" height="266.7%" id="prefix__m" width="266.7%" x="-83.3%"
                    y="-54.2%">
                    <feoffset dy="14" in="SourceAlpha" result="shadowOffsetOuter1">
                    </feoffset>
                    <fegaussianblur in="shadowOffsetOuter1" result="shadowBlurOuter1" stddeviation="11">
                    </fegaussianblur>
                    <fecolormatrix in="shadowBlurOuter1"
                      values="0 0 0 0 0.562709821 0 0 0 0 0.639266309 0 0 0 0 0.728528912 0 0 0 0.235167572 0">
                    </fecolormatrix>
                  </filter>
                  <path d="M0 0.722L20.529 0.722 20.529 43 0 43z" id="prefix__f">
                  </path>
                </defs>
                <g fill="none" fill-rule="evenodd">
                  <mask fill="#fff" id="prefix__b">
                    <use xlink:href="#prefix__a">
                    </use>
                  </mask>
                  <use fill="#FFF" xlink:href="#prefix__a">
                  </use>
                  <g mask="url(#prefix__b)">
                    <g transform="translate(9 119)">
                      <mask fill="#fff" id="prefix__e">
                        <use xlink:href="#prefix__c">
                        </use>
                      </mask>
                      <g fill-rule="nonzero">
                        <use fill="#000" filter="url(#prefix__d)" xlink:href="#prefix__c">
                        </use>
                        <use fill="#EE2722" xlink:href="#prefix__c">
                        </use>
                      </g>
                      <g mask="url(#prefix__e)">
                        <g>
                          <g transform="translate(30 26) translate(0 .278)">
                            <mask fill="#fff" id="prefix__g">
                              <use xlink:href="#prefix__f">
                              </use>
                            </mask>
                            <path
                              d="M10.63.722v3.144C9.508 2.622 7.799.722 7.799.722H0v38.73L4.496 43l4.682-.586.036-3.432c1.537 1.266 3.645 2.993 3.645 2.993l7.67-.781V4.708L16.366.73 10.63.72z"
                              fill="#231F20" mask="url(#prefix__g)">
                            </path>
                          </g>
                          <path
                            d="M11.91 31.382l-.262.03L7.168 2.04l-5.97-.007L1.2 38.9s1.19-.17 3.707-.457l-.259-28.022.26-.024L9.17 38.006s1.457-.173 6.412-.664V2.037h-3.805l.133 29.345z"
                            fill="#FEFEFE" transform="translate(30 26)">
                          </path>
                        </g>
                      </g>
                      <g mask="url(#prefix__e)">
                        <path
                          d="M65.19 33.02c0-.133-.079-.176-.26-.176h-.175v.379l.175.004c.181 0 .26-.06.26-.185v-.022zm.273.94h-.207c-.02 0-.035-.012-.043-.028l-.283-.472c-.005-.01-.03-.021-.039-.021h-.127v.468c0 .025-.017.052-.05.052h-.188c-.023 0-.047-.027-.047-.052v-1.185c0-.069.027-.097.086-.106.066-.009.246-.015.343-.015.344 0 .552.1.552.42v.021c0 .198-.1.302-.254.353l.293.489c.002.01.008.023.008.035 0 .019-.011.04-.044.04zm-.492-1.573c-.51 0-.921.415-.921.915 0 .501.412.91.921.91.507 0 .923-.409.923-.91 0-.5-.416-.915-.923-.915zm0 2.013c-.619 0-1.113-.493-1.113-1.098 0-.603.494-1.098 1.113-1.098.613 0 1.116.495 1.116 1.098 0 .605-.503 1.098-1.116 1.098z"
                          fill="#FFF" fill-rule="nonzero">
                        </path>
                      </g>
                    </g>
                  </g>
                  <g mask="url(#prefix__b)">
                    <g transform="translate(59 13)">
                      <g opacity=".75">
                        <use fill="#000" filter="url(#prefix__h)" xlink:href="#prefix__i">
                        </use>
                        <use fill="#FFF" fill-opacity=".9" xlink:href="#prefix__i">
                        </use>
                      </g>
                      <rect fill="#D8D8D8" fill-opacity=".35" height="35" rx="4" width="35" x="40" y="57">
                      </rect>
                      <g transform="translate(0 14)">
                        <rect fill="#494D5A" height="60" rx="4" width="60">
                        </rect>
                        <g fill-rule="nonzero">
                          <path
                            d="M10.286 16.259c0-1.523.378-2.826 1.134-3.907.757-1.082 1.792-1.899 3.104-2.45 1.202-.509 2.682-.873 4.44-1.094.6-.066 1.58-.154 2.936-.265V7.98c0-1.412-.155-2.362-.467-2.847-.467-.663-1.201-.994-2.203-.994h-.267c-.734.066-1.368.298-1.902.696-.534.397-.879.949-1.035 1.655-.089.442-.311.696-.667.762l-3.838-.464c-.379-.088-.568-.287-.568-.596 0-.066.011-.143.034-.231.378-1.965 1.307-3.422 2.786-4.372C15.253.64 16.983.11 18.963 0h.835c2.536 0 4.517.651 5.94 1.954.223.22.429.458.618.712.19.254.34.48.45.679.112.198.212.485.301.86.089.376.156.635.2.779.045.143.078.452.1.927.023.474.034.756.034.844v8.014c0 .574.083 1.098.25 1.573.167.474.328.817.484 1.026.156.21.412.547.768 1.01.133.199.2.376.2.53 0 .177-.09.331-.267.464-1.847 1.59-2.848 2.45-3.004 2.583-.267.198-.59.22-.968.066-.311-.265-.584-.519-.818-.762-.233-.243-.4-.42-.5-.53-.1-.11-.262-.325-.484-.645-.223-.32-.378-.536-.467-.646-1.246 1.347-2.47 2.185-3.672 2.517-.756.22-1.69.33-2.803.33-1.713 0-3.12-.524-4.222-1.572-1.102-1.049-1.652-2.533-1.652-4.454zm5.74-.662c0 .86.217 1.55.651 2.07.434.518 1.018.777 1.752.777.067 0 .162-.01.284-.033.122-.022.206-.033.25-.033.935-.243 1.658-.839 2.17-1.788.244-.42.428-.877.55-1.374.123-.497.19-.9.2-1.209.012-.309.017-.817.017-1.523v-.828c-1.29 0-2.27.088-2.937.265-1.958.552-2.937 1.777-2.937 3.676z"
                            fill="#FFF" transform="translate(10.286 13.714)">
                          </path>
                          <path
                            d="M.068 25.874c.114-.2.296-.212.547-.037 5.693 3.63 11.887 5.445 18.582 5.445 4.464 0 8.87-.914 13.22-2.741.114-.05.279-.126.495-.226.216-.1.37-.175.461-.225.342-.15.61-.075.803.225.194.3.131.576-.188.826-.41.326-.934.701-1.571 1.127-1.959 1.277-4.145 2.265-6.559 2.966-2.414.701-4.77 1.052-7.07 1.052-3.553 0-6.912-.682-10.077-2.047-3.166-1.364-6.001-3.285-8.506-5.764C.068 26.35 0 26.225 0 26.1c0-.075.023-.15.068-.226z"
                            fill="#EB9734" transform="translate(10.286 13.714)">
                          </path>
                          <path
                            d="M30.901 27.135c.045-.09.111-.179.2-.269.554-.38 1.085-.637 1.595-.771.842-.224 1.662-.347 2.46-.37.22-.022.431-.01.63.034.998.09 1.596.257 1.795.503.089.135.133.336.133.604v.235c0 .783-.21 1.706-.631 2.769-.421 1.063-1.008 1.918-1.762 2.567-.11.09-.21.134-.299.134-.044 0-.088-.01-.133-.033-.132-.067-.166-.19-.1-.37.82-1.946 1.23-3.3 1.23-4.06 0-.246-.044-.425-.133-.537-.221-.268-.841-.403-1.86-.403-.377 0-.82.023-1.33.068-.554.067-1.063.134-1.529.201-.133 0-.221-.022-.266-.067-.044-.045-.055-.09-.033-.134 0-.023.011-.056.033-.101z"
                            fill="#EB9734" transform="translate(10.286 13.714)">
                          </path>
                        </g>
                        <rect fill="url(#prefix__j)" height="60" rx="4" style="mix-blend-mode:overlay" width="60">
                        </rect>
                      </g>
                      <path
                        d="M87.283 79l.725-2.379h3.643L92.376 79h2.283l-3.54-10.035h-2.592L85 79h2.283zm3.863-4.156H88.54c.711-2.302 1.142-3.744 1.292-4.327.036.164.097.387.181.67.084.282.462 1.501 1.132 3.657zM97.636 79v-4.648c0-.534-.044-1.598-.13-3.193h.061L99.973 79h1.942l2.577-7.827h.062c-.055 1.258-.086 2.032-.093 2.324-.007.292-.01.55-.01.773V79h1.976v-9.994h-2.885l-2.509 7.642h-.041l-2.365-7.642h-2.885V79h1.894zm17.646 0v-1.75h-4.915l4.785-6.877v-1.367h-7.178v1.75h4.662l-4.792 6.87V79h7.438zm3.311 0v-4.703c0-.57-.043-1.522-.13-2.858h.062L122.872 79h2.694v-9.994h-1.907v4.73c0 .538.034 1.456.102 2.755h-.048l-4.34-7.485H116.7V79h1.893z"
                        fill="#2C2C2C" fill-rule="nonzero">
                      </path>
                      <g>
                        <path
                          d="M1 64.857L16.381 54.2 39.452 54.2 47.142 67.521 60.6 67.521 81.748 56.864 99.052 64.857 112.51 51.536 137.503 40.879 148.697 28.882 175.63 24.162 185.187 32.029 200.948 40.879 219.939 28.882 234.708 30.456 245.134 30.456 262.51 10 289.387 24.894 299 11.574 299 117 1 117z"
                          fill="url(#prefix__k)" transform="translate(11 86)">
                        </path>
                        <path d="M0 0H262V81H0z" fill="url(#prefix__l)" transform="translate(11 86)">
                        </path>
                        <path
                          d="M1 64.574L16.625 53.66 38.948 53.66 50.109 67 62.386 67 83.592 57.298 101.449 63.362 114.843 51.234 138.713 41.301 150.162 28.596 176.877 22.243 186.417 31.772 201.683 41.301 220.765 28.596 237.938 30.184 245.571 30.184 262.169 10 288.955 24.553 299 11.213"
                          stroke="#6AAC0E" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5"
                          transform="translate(11 86)">
                        </path>
                      </g>
                      <g>
                        <g fill-rule="nonzero" transform="translate(199)">
                          <use fill="#000" filter="url(#prefix__m)" xlink:href="#prefix__n">
                          </use>
                          <use fill="#FFF" xlink:href="#prefix__n">
                          </use>
                        </g>
                        <path
                          d="M33.469 10l-5.97 4.802 8.602 5.12-8.602 5.12 5.97 4.802L42 24.475l-5.899-4.553L42 15.369 33.469 10zm-11.938 0L13 15.37l5.899 4.552 8.6-5.12L21.531 10zM13 24.475l8.53 5.37 5.97-4.804-8.601-5.119L13 24.475zm8.53 6.388l-2.561-1.612v1.808L27.517 36l8.549-4.941V29.25l-2.562 1.612-5.987-4.788-5.986 4.788z"
                          fill="#3183FF" transform="translate(199)">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-body">
            <h5 class="card-title">
              Cryptocurrencies
            </h5>
            <p class="card-text">
              Buy, sell and store and invest in Bitcoin and other leading cryptos with ease
            </p>
            <a href="{{route('index')}}" style="width: fit-content;">
              Invest in Cryptocurrencies
            </a>
            <div style="padding: 0;margin: 0;">
              <svg height="180" viewbox="0 0 290 180" width="290" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <lineargradient id="prefix__e" x1="50%" x2="50%" y1="0%" y2="100%">
                    <stop offset="0%" stop-color="#FFF" stop-opacity=".75">
                    </stop>
                    <stop offset="100%" stop-color="#2C2C2C" stop-opacity="0">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__f" x1="0%" x2="122.816%" y1="50%" y2="50%">
                    <stop offset="0%" stop-color="#FFF">
                    </stop>
                    <stop offset="100%" stop-color="#FFF" stop-opacity="0">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__i" x1="50%" x2="50%" y1="0%" y2="100%">
                    <stop offset="0%" stop-color="#FFF" stop-opacity=".75">
                    </stop>
                    <stop offset="48.301%" stop-color="#999" stop-opacity=".388">
                    </stop>
                    <stop offset="100%" stop-color="#2C2C2C" stop-opacity="0">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__j" x1="0%" x2="122.816%" y1="50%" y2="50%">
                    <stop offset="0%" stop-color="#FFF">
                    </stop>
                    <stop offset="100%" stop-color="#FFF" stop-opacity="0">
                    </stop>
                  </lineargradient>
                  <filter filterunits="objectBoundingBox" height="121.9%" id="prefix__c" width="120.2%" x="-10.1%"
                    y="-10.6%">
                    <femorphology in="SourceAlpha" operator="dilate" radius="2.5" result="shadowSpreadOuter1">
                    </femorphology>
                    <feoffset dy="1" in="shadowSpreadOuter1" result="shadowOffsetOuter1">
                    </feoffset>
                    <fegaussianblur in="shadowOffsetOuter1" result="shadowBlurOuter1" stddeviation="8">
                    </fegaussianblur>
                    <fecomposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1">
                    </fecomposite>
                    <fecolormatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0">
                    </fecolormatrix>
                  </filter>
                  <filter filterunits="objectBoundingBox" height="139.2%" id="prefix__k" width="139.2%" x="-19.6%"
                    y="-18.8%">
                    <femorphology in="SourceAlpha" operator="dilate" radius="1" result="shadowSpreadOuter1">
                    </femorphology>
                    <feoffset dy="1" in="shadowSpreadOuter1" result="shadowOffsetOuter1">
                    </feoffset>
                    <fegaussianblur in="shadowOffsetOuter1" result="shadowBlurOuter1" stddeviation="7">
                    </fegaussianblur>
                    <fecolormatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0">
                    </fecolormatrix>
                  </filter>
                  <rect height="182" id="prefix__a" rx="10" width="290" x="0" y="0">
                  </rect>
                  <rect height="283" id="prefix__d" rx="7" width="307" x="14" y="0">
                  </rect>
                  <circle cx="50.5" cy="146.5" id="prefix__l" r="62.5">
                  </circle>
                  <path d="M0 0L8.165 0 8.165 10.92 0 10.92z" id="prefix__g">
                  </path>
                </defs>
                <g fill="none" fill-rule="evenodd">
                  <mask fill="#fff" id="prefix__b">
                    <use xlink:href="#prefix__a">
                    </use>
                  </mask>
                  <use fill="#FFF" xlink:href="#prefix__a">
                  </use>
                  <g mask="url(#prefix__b)">
                    <g>
                      <g transform="translate(64 26)">
                        <use fill="#000" filter="url(#prefix__c)" xlink:href="#prefix__d">
                        </use>
                        <rect fill="#FFF" fill-opacity=".6" height="283.5" rx="7" stroke="#979797" stroke-opacity=".05"
                          stroke-width=".5" width="307.5" x="13.75" y="-.25">
                        </rect>
                      </g>
                      <g>
                        <g transform="translate(64 26) translate(14 10) translate(23 20)">
                          <rect fill="#4D7795" height="30" rx="4" width="30">
                          </rect>
                          <path
                            d="M20.571 16.186L15 24l-5.571-7.814 5.57 3.36 5.572-3.36zM15 6l5.571 9.108L15 18.468l-5.571-3.36L15 6z"
                            fill="#FFF">
                          </path>
                          <rect fill="url(#prefix__e)" height="30" rx="4" style="mix-blend-mode:overlay" width="30">
                          </rect>
                        </g>
                        <g>
                          <path
                            d="M2 14.293L4.942 11.534 9.355 11.534 10.826 14.983 13.4 14.983 17.445 12.224 20.755 14.293 23.329 10.845 28.11 8.086 30.316 5.328 35.465 3.948 37.303 6.017 40.245 8.086 43.923 5.328 47.232 5.672 48.703 5.672 52.013 0.5 57.161 3.948 59 0.5 59 27.791 2 27.791z"
                            fill="#F6FCEE" fill-opacity=".5"
                            transform="translate(64 26) translate(14 10) translate(161 26)">
                          </path>
                          <path
                            d="M2 14.786L4.942 11.929 9.355 11.929 10.826 15.5 13.4 15.5 17.445 12.643 20.755 14.786 23.329 11.214 28.11 8.357 30.316 5.5 35.465 4.071 37.303 6.214 40.245 8.357 43.923 5.5 47.232 5.857 48.703 5.857 52.013 0.5 57.161 4.071 59 0.5"
                            stroke="#6BAD10" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5"
                            transform="translate(64 26) translate(14 10) translate(161 26)">
                          </path>
                          <path d="M22.375 -10.834L38.625 -10.834 38.625 50.166 22.375 50.166z" fill="url(#prefix__f)"
                            transform="translate(64 26) translate(14 10) translate(161 26) rotate(-90 30.5 19.666)">
                          </path>
                        </g>
                      </g>
                      <path
                        d="M85.014 49v-1.75h-3.637v-2.577h3.384v-1.736h-3.384v-2.195h3.637v-1.736h-5.756V49h5.756zm5.765 0v-8.23h2.714v-1.764h-7.547v1.764h2.714V49h2.12zm6.196 0v-4.313h3.958V49h2.113v-9.994h-2.113v3.917h-3.958v-3.917h-2.119V49h2.12z"
                        fill="#2C2C2C" fill-rule="nonzero" transform="translate(64 26)">
                      </path>
                      <g>
                        <g transform="translate(64 26) translate(14 60) translate(23 20)">
                          <rect fill="#F1B033" height="30" rx="4" width="30">
                          </rect>
                          <g transform="rotate(-15 45.666 -32.033)">
                            <mask fill="#fff" id="prefix__h">
                              <use xlink:href="#prefix__g">
                              </use>
                            </mask>
                            <path
                              d="M7.489 5.438c-.361-.268-.857-.357-.857-.357s.451-.267.631-.49c.18-.267.271-.624.271-.847 0-.178.045-1.025-.632-1.515-.496-.357-1.083-.535-1.895-.58V0H3.97v1.65h-.812V0H2.075v1.65H0v1.069H.63c.18 0 .452 0 .587.134.135.178.135.223.135.49V7.62c0 .09 0 .223-.09.313-.09.089-.18.089-.406.089H.225L0 9.27h2.075v1.65h1.083V9.27h.812v1.65h1.083V9.225c.27 0 .54-.045.677-.045.315-.044.992-.133 1.623-.534.632-.446.767-1.114.812-1.783-.045-.713-.315-1.159-.676-1.426zm-4.331-2.63s.316-.044.676-.044c.317 0 .632 0 1.083.133.451.134.677.446.722.847 0 .357-.18.624-.451.802-.316.179-.722.268-1.083.268h-.902V2.808h-.045zm2.346 4.948c-.226.133-.722.267-1.218.267-.452.044-1.173 0-1.173 0V5.794s.676-.044 1.218 0c.541.045.947.179 1.173.267.18.09.54.313.54.803 0 .58-.27.757-.54.892z"
                              fill="#FFF" mask="url(#prefix__h)">
                            </path>
                          </g>
                          <circle cx="15" cy="15" r="9.857" stroke="#FFF">
                          </circle>
                          <rect fill="url(#prefix__i)" height="30" rx="4" style="mix-blend-mode:overlay" width="30">
                          </rect>
                        </g>
                        <g>
                          <path
                            d="M2 11.293L5 11.25 9 10 14 6.25 15 7.5 17.445 9.224 21 10 23.329 7.845 28.11 5.086 30 5 36 7.5 37.303 3.017 40.245 5.086 43.923 2.328 47.232 2.672 48.703 2.672 52 5 57.161 0.948 59 1.25 59 25 2 25z"
                            fill="#FCECED" fill-opacity=".5"
                            transform="translate(64 26) translate(14 60) translate(161 29) matrix(-1 0 0 1 61 0)">
                          </path>
                          <path
                            d="M2 11.786L5 11.25 9 10 12 7.5 14 6.25 17.445 9.643 21 10 23.329 8.214 28.11 5.357 30 5 36 7.5 37.303 3.214 40.245 5.357 43.923 2.5 47.232 2.857 48.703 2.857 52 5 57.161 1.071 59 1.25"
                            stroke="#D0021B" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5"
                            transform="translate(64 26) translate(14 60) translate(161 29) matrix(-1 0 0 1 61 0)">
                          </path>
                          <path d="M21.75 -13.209L39.25 -13.209 39.25 47.791 21.75 47.791z" fill="url(#prefix__j)"
                            transform="translate(64 26) translate(14 60) translate(161 29) rotate(-90 30.5 17.291)">
                          </path>
                        </g>
                      </g>
                      <g>
                        <g transform="translate(64 26) translate(14 110) translate(23 20)">
                          <rect fill="#2C2C2C" height="30" rx="4" width="30">
                          </rect>
                          <g fill="#FFF" fill-rule="nonzero">
                            <path
                              d="M15.387 0H18l-5.437 5.393c-1.968 1.952-5.158 1.952-7.126 0L0 0h2.613l4.13 4.097c1.247 1.236 3.267 1.236 4.514 0L15.387 0z"
                              transform="translate(6 7.714)">
                            </path>
                            <path
                              d="M2.603 14.571H0l5.45-5.4c1.96-1.942 5.14-1.942 7.1 0l5.45 5.4h-2.603l-4.149-4.11c-1.241-1.23-3.255-1.23-4.496 0l-4.149 4.11z"
                              transform="translate(6 7.714)">
                            </path>
                          </g>
                          <rect fill="url(#prefix__e)" height="30" rx="4" style="mix-blend-mode:overlay" width="30">
                          </rect>
                        </g>
                        <g>
                          <path
                            d="M2 13.793L4.942 11.034 9.355 11.034 10.826 14.483 13 8.75 17 8.75 21 8.75 23.329 10.345 28.11 7.586 31 8.75 33 8.75 37 7.5 40.245 7.586 43.923 4.828 47.232 5.172 49 6.25 52 5 57.161 3.448 59 0 59 27.291 2 27.291z"
                            fill="#F6FCEE" fill-opacity=".5"
                            transform="translate(64 26) translate(14 110) translate(161 26.5)">
                          </path>
                          <path
                            d="M2 14.286L4.942 11.429 9.355 11.429 10.826 15 13 8.75 17 8.75 21 8.75 23.329 10.714 28.11 7.857 31 8.75 35 8.75 37 7.5 40.245 7.857 43.923 5 47.232 5.357 50 6.25 52 5 57.161 3.571 59 0"
                            stroke="#6BAD10" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5"
                            transform="translate(64 26) translate(14 110) translate(161 26.5)">
                          </path>
                          <path d="M22.375 -11.334L38.625 -11.334 38.625 49.666 22.375 49.666z" fill="url(#prefix__f)"
                            transform="translate(64 26) translate(14 110) translate(161 26.5) rotate(-90 30.5 19.166)">
                          </path>
                        </g>
                      </g>
                      <path
                        d="M82.997 99c1.13 0 2.025-.255 2.683-.766.659-.51.988-1.221.988-2.132 0-.643-.14-1.158-.42-1.545-.28-.388-.738-.652-1.371-.793v-.069c.465-.077.837-.307 1.118-.69.28-.383.42-.873.42-1.47 0-.88-.32-1.52-.96-1.924-.64-.403-1.67-.605-3.087-.605h-3.11V99h3.74zm-.39-6.036h-1.23v-2.222h1.114c.606 0 1.05.083 1.33.25.28.166.42.44.42.823 0 .41-.129.705-.386.882-.258.178-.673.267-1.248.267zm.15 4.286h-1.38v-2.604h1.312c1.185 0 1.778.414 1.778 1.244 0 .46-.14.802-.417 1.025-.278.223-.709.335-1.292.335zm9.779 1.887c1.012 0 1.928-.171 2.748-.513v-1.777c-.998.35-1.848.526-2.55.526-1.672 0-2.509-1.114-2.509-3.343 0-1.07.22-1.906.657-2.505.437-.6 1.055-.899 1.852-.899.365 0 .736.066 1.114.198.379.132.755.287 1.128.465l.684-1.723c-.98-.469-1.955-.704-2.926-.704-.952 0-1.783.209-2.492.626-.708.417-1.252 1.016-1.63 1.798-.378.781-.567 1.692-.567 2.73 0 1.65.385 2.916 1.155 3.798.77.882 1.882 1.323 3.336 1.323zM99.354 99v-4.313h3.958V99h2.112v-9.994h-2.112v3.917h-3.958v-3.917h-2.119V99h2.12zM80.27 149l2.324-3.78 2.324 3.78h2.42l-3.377-5.038 3.138-4.956h-2.284l-2.112 3.596-2.153-3.596h-2.338l3.103 4.84L78 149h2.27zm10.27 0v-3.835h1.128L94.054 149h2.351c-.456-.656-1.435-2.108-2.94-4.354.593-.26 1.051-.62 1.375-1.077.323-.458.485-.981.485-1.569 0-1.007-.326-1.758-.978-2.252-.651-.495-1.656-.742-3.014-.742H88.42V149h2.119zm.683-5.558h-.683v-2.7h.642c.684 0 1.189.1 1.515.301.325.2.488.538.488 1.012 0 .478-.16.83-.478 1.052-.32.224-.814.335-1.484.335zM99.607 149v-3.555h.91c1.239 0 2.195-.285 2.867-.854.672-.57 1.008-1.392 1.008-2.468 0-1.034-.315-1.813-.947-2.334-.63-.522-1.552-.783-2.765-.783h-3.192V149h2.119zm.697-5.291h-.697v-2.967h.964c.579 0 1.004.119 1.275.356.271.237.407.603.407 1.1 0 .492-.162.867-.486 1.125-.323.257-.811.386-1.463.386z"
                        fill="#2C2C2C" fill-rule="nonzero" transform="translate(64 26)">
                      </path>
                    </g>
                  </g>
                  <g mask="url(#prefix__b)">
                    <use fill="#000" filter="url(#prefix__k)" xlink:href="#prefix__l">
                    </use>
                    <use fill="#FFF" xlink:href="#prefix__l">
                    </use>
                  </g>
                  <path
                    d="M70.094 145.786c-1.87-1.366-4.438-1.822-4.438-1.822s2.337-1.366 3.27-2.505c.935-1.367 1.405-3.189 1.405-4.328 0-.91.23-5.238-3.275-7.743-2.568-1.822-5.608-2.733-9.815-2.961V118h-5.375v8.427h-4.207V118H42.05v8.427H31.3v5.466h3.272c.935 0 2.337 0 3.04.683.699.911.699 1.14.699 2.506v21.862c0 .458 0 1.139-.467 1.596-.468.456-.935.456-2.104.456H32.47l-1.169 6.377h10.75v8.427h5.61v-8.427h4.206v8.427h5.61v-8.655c1.4 0 2.803-.23 3.506-.23 1.634-.225 5.142-.68 8.411-2.73 3.275-2.278 3.973-5.694 4.207-9.11-.234-3.645-1.634-5.922-3.506-7.289zM47.5 132.635s1.606-.235 3.436-.235c1.606 0 3.208 0 5.499.704 2.29.705 3.436 2.348 3.665 4.461 0 1.878-.916 3.287-2.29 4.226-1.605.94-3.666 1.409-5.5 1.409h-4.58v-10.565h-.23zm12.478 25.284c-1.177.69-3.769 1.38-6.358 1.38-2.354.227-6.12 0-6.12 0v-11.497s3.53-.23 6.355 0c2.825.228 4.946.92 6.123 1.377.939.463 2.822 1.612 2.822 4.142 0 2.989-1.412 3.906-2.822 4.598z"
                    fill="#FBBE50" fill-opacity=".75" mask="url(#prefix__b)">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-body">
            <h5 class="card-title">
              CFD Trading
            </h5>
            <p class="card-text">
              Go long or short on FX from just 1 pip. Trade commodities and indices with flexible
              leverage.
            </p>
            <a href="{{route('index')}}" style="width: fit-content;">
              Invest in FX Now
            </a>
            <div style="padding: 0;margin: 0;">
              <svg height="180" viewbox="0 0 290 180" width="290" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <rect height="179" id="prefix__a" rx="10" width="290" x="0" y="0">
                  </rect>
                  <rect height="240" id="prefix__c" rx="5" width="230" x="12" y="29">
                  </rect>
                  <rect height="35" id="prefix__g" rx="4" width="35" x="0" y="0">
                  </rect>
                  <rect height="240" id="prefix__i" rx="5" width="230" x="0" y="0">
                  </rect>
                  <rect height="18" id="prefix__l" rx="2" width="25.575" x=".165" y=".165">
                  </rect>
                  <rect height="15" id="prefix__o" rx="2" width="25" x="0" y="0">
                  </rect>
                  <rect height="60" id="prefix__r" rx="3" width="90" x="0" y="0">
                  </rect>
                  <rect height="60" id="prefix__t" rx="3" width="90" x="0" y="0">
                  </rect>
                  <lineargradient id="prefix__e" x1="0%" x2="122.816%" y1="50%" y2="50%">
                    <stop offset="0%" stop-color="#FFF">
                    </stop>
                    <stop offset="100%" stop-color="#FFF" stop-opacity="0">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__f" x1="120.454%" x2="35.454%" y1="50%" y2="50%">
                    <stop offset="0%" stop-color="#FFF" stop-opacity="0">
                    </stop>
                    <stop offset="100%" stop-color="#FFF">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__h" x1="50%" x2="50%" y1="0%" y2="100%">
                    <stop offset="0%" stop-color="#FFF" stop-opacity=".75">
                    </stop>
                    <stop offset="100%" stop-color="#2C2C2C" stop-opacity="0">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__p" x1="50%" x2="50%" y1="0%" y2="138.853%">
                    <stop offset="0%" stop-color="#4D4D4D">
                    </stop>
                    <stop offset="100%" stop-color="#848484">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__q" x1="0%" x2="122.816%" y1="50%" y2="50%">
                    <stop offset="0%" stop-color="#FFF">
                    </stop>
                    <stop offset="100%" stop-color="#FFF" stop-opacity="0">
                    </stop>
                  </lineargradient>
                  <lineargradient id="prefix__v" x1="100%" x2="36.8%" y1="50%" y2="50%">
                    <stop offset="0%" stop-color="#D8D8D8" stop-opacity=".5">
                    </stop>
                    <stop offset="100%" stop-color="#EEE" stop-opacity=".5">
                    </stop>
                  </lineargradient>
                  <filter filterunits="objectBoundingBox" height="125.4%" id="prefix__d" width="126.5%" x="-13.3%"
                    y="-12.3%">
                    <femorphology in="SourceAlpha" operator="dilate" radius="2" result="shadowSpreadOuter1">
                    </femorphology>
                    <feoffset dy="1" in="shadowSpreadOuter1" result="shadowOffsetOuter1">
                    </feoffset>
                    <fegaussianblur in="shadowOffsetOuter1" result="shadowBlurOuter1" stddeviation="8">
                    </fegaussianblur>
                    <fecolormatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0">
                    </fecolormatrix>
                  </filter>
                  <filter filterunits="objectBoundingBox" height="125.4%" id="prefix__j" width="126.5%" x="-13.3%"
                    y="-12.3%">
                    <femorphology in="SourceAlpha" operator="dilate" radius="2" result="shadowSpreadOuter1">
                    </femorphology>
                    <feoffset dy="1" in="shadowSpreadOuter1" result="shadowOffsetOuter1">
                    </feoffset>
                    <fegaussianblur in="shadowOffsetOuter1" result="shadowBlurOuter1" stddeviation="8">
                    </fegaussianblur>
                    <fecolormatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0">
                    </fecolormatrix>
                  </filter>
                  <filter filterunits="objectBoundingBox" height="193.3%" id="prefix__n" width="156%" x="-36%" y="-60%">
                    <feoffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1">
                    </feoffset>
                    <fegaussianblur in="shadowOffsetOuter1" result="shadowBlurOuter1" stddeviation="2">
                    </fegaussianblur>
                    <fecolormatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                    </fecolormatrix>
                  </filter>
                </defs>
                <g fill="none" fill-rule="evenodd">
                  <mask fill="#fff" id="prefix__b">
                    <use xlink:href="#prefix__a">
                    </use>
                  </mask>
                  <use fill="#FFF" xlink:href="#prefix__a">
                  </use>
                  <g mask="url(#prefix__b)">
                    <g transform="translate(8 28)">
                      <g>
                        <use fill="#000" filter="url(#prefix__d)" xlink:href="#prefix__c">
                        </use>
                        <use fill="#FFF" xlink:href="#prefix__c">
                        </use>
                      </g>
                      <g>
                        <path
                          d="M6.656 28.672L16.446 22.971 31.132 22.971 36.027 30.098 44.593 30.098 58.055 24.397 69.069 28.672 77.636 21.546 93.545 15.845 100.888 10.144 118.021 7.293 124.14 11.569 133.931 15.845 146.169 10.144 157.183 10.856 162.078 10.856 173.092 0.167 190.225 7.293 196.344 0.167 196.344 56.568 6.656 56.568z"
                          fill="#F6FCEE" fill-opacity=".5" transform="translate(19 107)">
                        </path>
                        <path
                          d="M6.656 29.69L16.446 23.786 31.132 23.786 36.027 31.167 44.593 31.167 58.055 25.262 69.069 29.69 77.636 22.31 93.545 16.405 100.888 10.5 118.021 7.548 124.14 11.976 133.931 16.405 146.169 10.5 157.183 11.238 162.078 11.238 173.092 0.167 190.225 7.548 196.344 0.167"
                          stroke="#6BAD10" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5"
                          transform="translate(19 107)">
                        </path>
                        <path d="M84.708 -61.724L118.292 -61.724 118.292 141.276 84.708 141.276z" fill="url(#prefix__e)"
                          transform="translate(19 107) rotate(-90 101.5 39.776)">
                        </path>
                      </g>
                      <g>
                        <text fill="#6BAD10" font-family="DINOT-Medium, DIN OT" font-size="12" font-weight="400"
                          letter-spacing="-.15" transform="translate(140.5 100)">
                          <tspan x="50.134" y="12.5">
                            0.15%
                          </tspan>
                        </text>
                        <path d="M44 6.5L47 9.5 41 9.5z" fill="#6AAC0E" transform="translate(140.5 100)">
                        </path>
                      </g>
                      <path d="M0 0H67V158H0z" fill="url(#prefix__f)">
                      </path>
                      <g transform="translate(32 49)">
                        <use fill="#F7F7F7" xlink:href="#prefix__g">
                        </use>
                        <rect fill="url(#prefix__h)" height="35" rx="4" style="mix-blend-mode:overlay" width="35">
                        </rect>
                        <g fill="#000">
                          <path
                            d="M11.805 14.606c1.754 3.083 3.872 4.159 5.978 4.362-2.661 1.029-5.28-.355-5.978-4.362M9.362 2.998c2.043 6.724-1.23 10.805 1.242 15.12 1.699 2.964 5.384 4.76 9.145 2.55 3.48-2.046 3.957-6.289 2.226-9.234-2.465-4.193-7.73-3.382-12.613-8.436M2.426 5.918c.654 1.648 1.628 2.328 2.657 2.575-1.39.325-2.59-.543-2.657-2.575M2.025 0c.543 3.472-1.362 5.265-.438 7.573.635 1.586 2.335 2.732 4.35 1.9 1.866-.772 2.398-2.84 1.745-4.418C6.754 2.807 4.091 2.842 2.025 0"
                            transform="translate(5 6)">
                          </path>
                        </g>
                      </g>
                      <path
                        d="M82.571 72.137c1.532 0 2.707-.445 3.528-1.333.82-.889 1.23-2.16 1.23-3.815 0-1.659-.407-2.93-1.22-3.814-.814-.884-1.988-1.326-3.524-1.326s-2.715.438-3.538 1.316c-.822.877-1.234 2.147-1.234 3.81 0 1.664.41 2.94 1.23 3.829.821.888 1.997 1.333 3.528 1.333zm0-1.778c-.843 0-1.476-.282-1.9-.847-.424-.565-.636-1.406-.636-2.523 0-1.116.214-1.958.643-2.526.428-.567 1.064-.85 1.907-.85 1.682 0 2.522 1.125 2.522 3.376 0 2.247-.845 3.37-2.536 3.37zM91.345 72v-9.994h-2.12V72h2.12zm8.513 0v-1.75h-4.054v-8.244h-2.119V72h6.173z"
                        fill="#393939" fill-rule="nonzero">
                      </path>
                    </g>
                  </g>
                  <g mask="url(#prefix__b)">
                    <g>
                      <g transform="translate(99 16)">
                        <mask fill="#fff" id="prefix__k">
                          <use xlink:href="#prefix__i">
                          </use>
                        </mask>
                        <use fill="#000" filter="url(#prefix__j)" xlink:href="#prefix__i">
                        </use>
                        <use fill="#FFF" xlink:href="#prefix__i">
                        </use>
                        <g mask="url(#prefix__k)">
                          <g transform="translate(25 31)">
                            <mask fill="#fff" id="prefix__m">
                              <use xlink:href="#prefix__l">
                              </use>
                            </mask>
                            <use fill="#000" fill-rule="nonzero" xlink:href="#prefix__l">
                            </use>
                            <path d="M0 0H25.85V18.15H0z" fill="#FFF" fill-rule="nonzero" mask="url(#prefix__m)">
                            </path>
                            <path
                              d="M12.1 0H25.85V1.65H12.1zM12.1 2.75H25.85V4.4H12.1zM12.1 5.5H25.85V7.15H12.1zM12.1 8.25H25.85V9.9H12.1zM0 11H25.85V12.65H0zM0 13.75H25.85V15.4H0zM0 16.5H25.85V18.15H0z"
                              fill="#FE352E" fill-rule="nonzero" mask="url(#prefix__m)">
                            </path>
                            <path d="M0 0H12.1V9.9H0z" fill="#08399C" fill-rule="nonzero" mask="url(#prefix__m)">
                            </path>
                            <path
                              d="M3.327 2.089L2.914 2.391 2.97 1.883 2.502 1.677 2.97 1.471 2.914 0.963 3.327 1.264 3.739 0.963 3.684 1.471 4.152 1.677 3.684 1.883 3.739 2.391z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 3.327 1.677)">
                            </path>
                            <path
                              d="M3.327 5.389L2.914 5.691 2.97 5.183 2.502 4.977 2.97 4.771 2.914 4.263 3.327 4.564 3.739 4.263 3.684 4.771 4.152 4.977 3.684 5.183 3.739 5.691z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 3.327 4.977)">
                            </path>
                            <path
                              d="M3.327 8.689L2.914 8.991 2.97 8.483 2.502 8.277 2.97 8.071 2.914 7.563 3.327 7.864 3.739 7.563 3.684 8.071 4.152 8.277 3.684 8.483 3.739 8.991z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 3.327 8.277)">
                            </path>
                            <path
                              d="M6.627 2.089L6.214 2.391 6.27 1.883 5.802 1.677 6.27 1.471 6.214 0.963 6.627 1.264 7.039 0.963 6.984 1.471 7.452 1.677 6.984 1.883 7.039 2.391z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 6.627 1.677)">
                            </path>
                            <path
                              d="M6.627 5.389L6.214 5.691 6.27 5.183 5.802 4.977 6.27 4.771 6.214 4.263 6.627 4.564 7.039 4.263 6.984 4.771 7.452 4.977 6.984 5.183 7.039 5.691z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 6.627 4.977)">
                            </path>
                            <path
                              d="M9.927 5.389L9.514 5.691 9.57 5.183 9.102 4.977 9.57 4.771 9.514 4.263 9.927 4.564 10.339 4.263 10.284 4.771 10.752 4.977 10.284 5.183 10.339 5.691z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 9.927 4.977)">
                            </path>
                            <path
                              d="M6.627 8.689L6.214 8.991 6.27 8.483 5.802 8.277 6.27 8.071 6.214 7.563 6.627 7.864 7.039 7.563 6.984 8.071 7.452 8.277 6.984 8.483 7.039 8.991z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 6.627 8.277)">
                            </path>
                            <path
                              d="M9.927 2.089L9.514 2.391 9.57 1.883 9.102 1.677 9.57 1.471 9.514 0.963 9.927 1.264 10.339 0.963 10.284 1.471 10.752 1.677 10.284 1.883 10.339 2.391z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 9.927 1.677)">
                            </path>
                            <path
                              d="M9.927 8.689L9.514 8.991 9.57 8.483 9.102 8.277 9.57 8.071 9.514 7.563 9.927 7.864 10.339 7.563 10.284 8.071 10.752 8.277 10.284 8.483 10.339 8.991z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 9.927 8.277)">
                            </path>
                            <path
                              d="M1.677 3.739L1.264 4.041 1.32 3.533 0.852 3.327 1.32 3.121 1.264 2.612 1.677 2.914 2.089 2.612 2.034 3.121 2.502 3.327 2.034 3.533 2.089 4.041z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 1.677 3.327)">
                            </path>
                            <path
                              d="M1.677 7.039L1.264 7.341 1.32 6.833 0.852 6.627 1.32 6.421 1.264 5.912 1.677 6.214 2.089 5.912 2.034 6.421 2.502 6.627 2.034 6.833 2.089 7.341z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 1.677 6.627)">
                            </path>
                            <path
                              d="M4.977 3.739L4.564 4.041 4.62 3.533 4.152 3.327 4.62 3.121 4.564 2.612 4.977 2.914 5.389 2.612 5.334 3.121 5.802 3.327 5.334 3.533 5.389 4.041z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 4.977 3.327)">
                            </path>
                            <path
                              d="M8.277 3.739L7.864 4.041 7.92 3.533 7.452 3.327 7.92 3.121 7.864 2.612 8.277 2.914 8.689 2.612 8.634 3.121 9.102 3.327 8.634 3.533 8.689 4.041z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 8.277 3.327)">
                            </path>
                            <path
                              d="M4.977 7.039L4.564 7.341 4.62 6.833 4.152 6.627 4.62 6.421 4.564 5.912 4.977 6.214 5.389 5.912 5.334 6.421 5.802 6.627 5.334 6.833 5.389 7.341z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 4.977 6.627)">
                            </path>
                            <path
                              d="M8.277 7.039L7.864 7.341 7.92 6.833 7.452 6.627 7.92 6.421 7.864 5.912 8.277 6.214 8.689 5.912 8.634 6.421 9.102 6.627 8.634 6.833 8.689 7.341z"
                              fill="#FFF" mask="url(#prefix__m)" transform="rotate(30 8.277 6.627)">
                            </path>
                            <g transform="translate(9 11)">
                              <use fill="#000" filter="url(#prefix__n)" xlink:href="#prefix__o">
                              </use>
                              <use fill="url(#prefix__p)" xlink:href="#prefix__o">
                              </use>
                              <path
                                d="M7.228 11.088c.548 0 1.022-.095 1.424-.286.401-.19.708-.464.92-.822.213-.357.319-.773.319-1.248V4.575H8.533V8.5c0 .498-.1.863-.301 1.096-.2.233-.524.35-.969.35-.46 0-.79-.116-.989-.348-.199-.231-.299-.595-.299-1.09V4.575H4.618v4.14c0 .735.228 1.315.685 1.738.457.423 1.099.635 1.925.635zm5.435 0c.744 0 1.325-.167 1.742-.501.418-.334.627-.791.627-1.371 0-.42-.112-.773-.334-1.061-.223-.289-.635-.577-1.235-.864-.454-.217-.742-.367-.864-.45-.121-.084-.21-.17-.266-.26-.055-.09-.083-.194-.083-.314 0-.193.069-.35.206-.47.138-.12.336-.18.594-.18.217 0 .437.028.661.083.224.056.508.154.85.295l.44-1.06c-.331-.143-.648-.254-.951-.333-.304-.08-.622-.12-.956-.12-.68 0-1.212.164-1.598.489-.385.325-.578.772-.578 1.34 0 .302.059.565.176.791.117.226.274.423.47.593.197.17.491.347.884.532.419.2.696.344.832.435.137.09.24.185.31.284.07.098.106.21.106.336 0 .225-.08.395-.24.51-.16.114-.389.17-.687.17-.25 0-.524-.039-.824-.118-.3-.079-.668-.215-1.101-.408V10.7c.527.258 1.133.387 1.819.387zM16.63 11l.466-1.53h2.343l.465 1.53h1.468l-2.276-6.451H17.43L15.163 11h1.467zm2.483-2.672H17.44c.457-1.48.734-2.407.83-2.782.024.106.063.25.117.431.054.182.297.965.727 2.351z"
                                fill="#FFF" fill-rule="nonzero">
                              </path>
                            </g>
                          </g>
                        </g>
                        <g fill="#323232" fill-rule="nonzero" mask="url(#prefix__k)">
                          <path
                            d="M68.151 47v-4.703c0-.57-.043-1.522-.13-2.858h.062L72.431 47h2.693v-9.994h-1.907v4.73c0 .538.034 1.456.102 2.755h-.048l-4.34-7.485h-2.673V47h1.893zm11.528.137c1.158 0 2.062-.26 2.71-.78.65-.52.975-1.23.975-2.132 0-.652-.173-1.202-.52-1.651-.346-.45-.986-.897-1.92-1.344-.707-.337-1.155-.57-1.344-.7-.189-.13-.327-.265-.413-.404-.087-.139-.13-.301-.13-.488 0-.301.107-.545.321-.732.214-.187.522-.28.923-.28.337 0 .68.043 1.029.13.348.086.79.24 1.323.458l.683-1.648c-.515-.223-1.008-.396-1.48-.52-.471-.122-.967-.184-1.487-.184-1.057 0-1.885.253-2.484.76-.6.505-.9 1.2-.9 2.084 0 .47.092.88.274 1.23.182.351.426.66.732.923.305.265.763.54 1.374.828.651.31 1.083.535 1.295.676.212.142.372.289.482.441.11.153.164.327.164.523 0 .351-.124.615-.373.793-.248.178-.605.267-1.07.267-.387 0-.814-.062-1.281-.185-.467-.123-1.038-.335-1.713-.636v1.97c.82.4 1.764.6 2.83.6zM87.831 47c1.768 0 3.12-.438 4.057-1.313.936-.874 1.405-2.135 1.405-3.78 0-1.545-.452-2.748-1.354-3.61-.902-.86-2.17-1.291-3.8-1.291H85V47h2.83zm.198-1.75h-.91v-6.508h1.129c1.895 0 2.843 1.073 2.843 3.22 0 2.192-1.02 3.288-3.062 3.288zm16.176 4.129l-2.406-2.687c.807-.369 1.419-.951 1.836-1.746.417-.795.625-1.781.625-2.957 0-1.659-.407-2.93-1.22-3.814-.814-.884-1.988-1.326-3.524-1.326s-2.715.438-3.538 1.316c-.822.877-1.233 2.147-1.233 3.81 0 1.664.41 2.94 1.23 3.829.82.888 1.996 1.333 3.527 1.333h.158l1.832 2.242h2.713zm-4.703-4.02c-.843 0-1.476-.282-1.9-.847-.424-.565-.636-1.406-.636-2.523 0-1.116.214-1.958.643-2.526.428-.567 1.064-.85 1.907-.85 1.682 0 2.522 1.125 2.522 3.376 0 2.247-.845 3.37-2.536 3.37zM110.682 47v-9.994h-1.736l-3.22 2.563 1.018 1.272 1.149-.923c.136-.11.38-.34.731-.69l-.034 1.039-.02.95V47h2.112zm6.025.137c1.19 0 2.07-.42 2.642-1.258.572-.839.858-2.13.858-3.876 0-1.686-.295-2.967-.885-3.842-.59-.875-1.462-1.312-2.615-1.312-1.185 0-2.062.418-2.632 1.254-.57.836-.854 2.136-.854 3.9 0 1.69.293 2.969.878 3.835.586.866 1.455 1.299 2.608 1.299zm0-1.702c-.501 0-.858-.266-1.07-.797-.212-.53-.318-1.41-.318-2.635 0-1.226.107-2.107.322-2.642.214-.536.57-.803 1.066-.803.488 0 .842.267 1.063.803.221.535.332 1.416.332 2.642 0 1.212-.11 2.087-.329 2.625-.218.538-.574.807-1.066.807zm7.816 1.702c1.19 0 2.07-.42 2.642-1.258.572-.839.858-2.13.858-3.876 0-1.686-.295-2.967-.885-3.842-.59-.875-1.462-1.312-2.615-1.312-1.185 0-2.062.418-2.632 1.254-.57.836-.854 2.136-.854 3.9 0 1.69.293 2.969.878 3.835.586.866 1.455 1.299 2.608 1.299zm0-1.702c-.501 0-.858-.266-1.07-.797-.211-.53-.317-1.41-.317-2.635 0-1.226.107-2.107.32-2.642.215-.536.57-.803 1.067-.803.488 0 .842.267 1.063.803.221.535.332 1.416.332 2.642 0 1.212-.11 2.087-.328 2.625-.22.538-.575.807-1.067.807z">
                          </path>
                        </g>
                      </g>
                      <g>
                        <path
                          d="M6.525 27.5L16.122 22.167 30.518 22.167 35.317 28.833 43.715 28.833 56.911 23.5 67.708 27.5 76.106 20.833 91.702 15.5 98.9 10.167 115.696 7.5 121.694 11.5 131.292 15.5 143.288 10.167 154.086 10.833 158.884 10.833 169.681 0.833 186.477 7.5 192.475 0.833 192.475 53.596 6.525 53.596z"
                          fill="#F6FCEE" fill-opacity=".5" transform="translate(99 16) translate(18.5 69.5)">
                        </path>
                        <path
                          d="M6.525 28.452L16.122 22.929 30.518 22.929 35.317 29.833 43.715 29.833 56.911 24.31 67.708 28.452 76.106 21.548 91.702 16.024 98.9 10.5 115.696 7.738 121.694 11.881 131.292 16.024 143.288 10.5 154.086 11.19 158.884 11.19 169.681 0.833 186.477 7.738 192.475 0.833"
                          stroke="#6BAD10" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5"
                          transform="translate(99 16) translate(18.5 69.5)">
                        </path>
                        <path d="M83.792 -61.612L115.208 -61.612 115.208 137.388 83.792 137.388z" fill="url(#prefix__q)"
                          transform="translate(99 16) translate(18.5 69.5) rotate(-90 99.5 37.888)">
                        </path>
                      </g>
                      <g transform="translate(99 16) translate(22 119)">
                        <mask fill="#fff" id="prefix__s">
                          <use xlink:href="#prefix__r">
                          </use>
                        </mask>
                        <rect height="59.5" rx="3" stroke="#777" stroke-opacity=".5" stroke-width=".5" width="89.5"
                          x=".25" y=".25">
                        </rect>
                        <path d="M0 0H90V24H0z" fill="#1A2D3D" fill-opacity=".9" mask="url(#prefix__s)">
                        </path>
                        <path
                          d="M13.283 17c.969 0 1.736-.219 2.3-.656.564-.438.847-1.047.847-1.828 0-.551-.12-.993-.36-1.325-.24-.332-.633-.558-1.175-.68v-.058c.398-.066.717-.264.958-.592.24-.328.36-.748.36-1.26 0-.753-.275-1.303-.823-1.649-.55-.346-1.431-.518-2.646-.518h-2.666V17h3.205zm-.334-5.174h-1.054V9.922h.955c.52 0 .899.071 1.14.214.24.142.36.378.36.706 0 .351-.11.603-.331.756-.221.152-.578.228-1.07.228zm.13 3.674h-1.184v-2.232h1.125c1.015 0 1.523.355 1.523 1.066 0 .395-.12.687-.357.879-.239.191-.608.287-1.108.287zm8.334 1.617c.73 0 1.363-.127 1.898-.38.535-.255.944-.62 1.227-1.096.284-.477.425-1.032.425-1.664V8.434h-1.81v5.232c0 .664-.134 1.151-.402 1.462-.267.31-.698.466-1.292.466-.613 0-1.052-.155-1.318-.463-.266-.309-.398-.793-.398-1.453V8.434h-1.811v5.52c0 .98.305 1.752.914 2.317.61.564 1.465.846 2.567.846zM30.479 17v-3.334l2.842-5.232h-1.957l-1.787 3.527-1.775-3.527h-1.97l2.843 5.29V17h1.804z"
                          fill="#FFF" fill-rule="nonzero" mask="url(#prefix__s)">
                        </path>
                      </g>
                      <g transform="translate(99 16) translate(122 119)">
                        <mask fill="#fff" id="prefix__u">
                          <use xlink:href="#prefix__t">
                          </use>
                        </mask>
                        <rect height="59.5" rx="3" stroke="#777" stroke-opacity=".5" stroke-width=".5" width="89.5"
                          x=".25" y=".25">
                        </rect>
                        <path d="M0 0H90V24H0z" fill="#1A2D3D" fill-opacity=".9" mask="url(#prefix__u)">
                        </path>
                        <path
                          d="M11.977 17.117c.992 0 1.766-.222 2.323-.668.556-.445.835-1.054.835-1.828 0-.559-.149-1.03-.446-1.415-.296-.385-.845-.768-1.646-1.151-.605-.29-.99-.49-1.151-.6-.163-.112-.28-.227-.355-.347-.074-.119-.111-.258-.111-.419 0-.257.092-.466.275-.627.184-.16.447-.24.791-.24.29 0 .583.037.882.112.299.074.677.205 1.134.392l.586-1.412c-.442-.191-.865-.34-1.269-.445-.404-.106-.829-.158-1.274-.158-.906 0-1.616.216-2.13.65-.514.434-.77 1.03-.77 1.787 0 .402.078.754.234 1.055.156.3.365.564.627.79.261.227.654.464 1.177.71.559.265.93.459 1.11.58.182.12.32.247.414.378.094.13.14.28.14.448 0 .3-.106.527-.319.68-.213.152-.518.228-.917.228-.332 0-.698-.053-1.098-.158-.4-.105-.89-.287-1.468-.545v1.688c.703.343 1.511.515 2.426.515zM21.47 17v-1.5h-3.117v-2.209h2.9v-1.488h-2.9V9.922h3.117V8.434h-4.933V17h4.933zm6.928 0v-1.5h-3.474V8.434h-1.817V17H28.4zm6.63 0v-1.5h-3.475V8.434h-1.816V17h5.29z"
                          fill="#FFF" fill-rule="nonzero" mask="url(#prefix__u)">
                        </path>
                      </g>
                      <path
                        d="M194.5 151c4.142 0 7.5 3.358 7.5 7.5 0 4.142-3.358 7.5-7.5 7.5h-14c-4.142 0-7.5-3.358-7.5-7.5 0-4.142 3.358-7.5 7.5-7.5h14zM167 161c1.105 0 2 .895 2 2s-.895 2-2 2h-24c-1.105 0-2-.895-2-2s.895-2 2-2h24zM93.5 151c4.142 0 7.5 3.358 7.5 7.5 0 4.142-3.358 7.5-7.5 7.5h-14c-4.142 0-7.5-3.358-7.5-7.5 0-4.142 3.358-7.5 7.5-7.5h14zM66 161c1.105 0 2 .895 2 2s-.895 2-2 2H42c-1.105 0-2-.895-2-2s.895-2 2-2h24z"
                        fill="url(#prefix__v)" transform="translate(99 16)">
                      </path>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          <h2>
            <b>
              Trade and invest
            </b>
            in top stocks and ETFs. Trade currency pairs, Indices and Commodities via CFDs.
            Investing in the financial markets has never been easier.
          </h2>
          <a href="{{route('index')}}" style="width: fit-content;">
            Start Trading
          </a>
          <div style="border-left: 1px solid black;margin-top: 40px;padding: 15px;">
            <h1 id="demo" style="color: green;font-size: 70px;font-weight: 800;">
            </h1>
            <h6>
              TRADES OPENED ON {{$company_features? $company_features->companyname :"No company name set"}}
            </h6>
            <script>
              let interval = setInterval(function () {
                let now = new Date();
                let show = Math.floor(now / 20000);

                function numberWithCommas(x) {
                  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }

                val = numberWithCommas(show);

                document.getElementById("demo").innerHTML = val;
              }, 1000)
            </script>
          </div>
        </div>
        <div class="col-md-6">
          <style>
            .tradingview-widget-container {
              display: none;
            }

            .active6 {
              display: block;
            }
          </style>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container active6" id="widget1" style="margin-bottom: 3px;">
            <div class="tradingview-widget-container__widget">
            </div>
            <script async="" src="../s3.tradingview.com/external-embedding/embed-widget-symbol-info.js"
              type="text/javascript">
                {
                  "symbol": "NASDAQ:TSLA",
                    "width": "100%",
                      "locale": "en",
                        "colorTheme": "light",
                          "isTransparent": false
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container active6" id="widget2" style="margin-bottom: 3px;">
            <div class="tradingview-widget-container__widget">
            </div>
            <script async="" src="../s3.tradingview.com/external-embedding/embed-widget-symbol-info.js"
              type="text/javascript">
                {
                  "symbol": "NASDAQ:AAPL",
                    "width": "100%",
                      "locale": "en",
                        "colorTheme": "light",
                          "isTransparent": false
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container" id="widget3" style="margin-bottom: 3px;">
            <div class="tradingview-widget-container__widget">
            </div>
            <script async="" src="../s3.tradingview.com/external-embedding/embed-widget-symbol-info.js"
              type="text/javascript">
                {
                  "symbol": "NASDAQ:AMZN",
                    "width": "100%",
                      "locale": "en",
                        "colorTheme": "light",
                          "isTransparent": false
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container" id="widget4" style="margin-bottom: 3px;">
            <div class="tradingview-widget-container__widget">
            </div>
            <script async="" src="../s3.tradingview.com/external-embedding/embed-widget-symbol-info.js"
              type="text/javascript">
                {
                  "symbol": "NASDAQ:MSFT",
                    "width": "100%",
                      "locale": "en",
                        "colorTheme": "light",
                          "isTransparent": false
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container" id="widget5" style="margin-bottom: 3px;">
            <div class="tradingview-widget-container__widget">
            </div>
            <script async="" src="../s3.tradingview.com/external-embedding/embed-widget-symbol-info.js"
              type="text/javascript">
                {
                  "symbol": "NASDAQ:NFLX",
                    "width": "100%",
                      "locale": "en",
                        "colorTheme": "light",
                          "isTransparent": false
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container" id="widget6" style="margin-bottom: 3px;">
            <div class="tradingview-widget-container__widget">
            </div>
            <script async="" src="../s3.tradingview.com/external-embedding/embed-widget-symbol-info.js"
              type="text/javascript">
                {
                  "symbol": "NASDAQ:FB",
                    "width": "100%",
                      "locale": "en",
                        "colorTheme": "light",
                          "isTransparent": false
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
          <script>
            let cs = 0;
            let ts = 6;

            function next() {
              document.getElementById("widget" + (cs + 1)).classList.remove("active6");
              document.getElementById("widget" + (cs + 2)).classList.remove("active6");
              cs = (ts + cs + 2) % ts;
              document.getElementById("widget" + (cs + 1)).classList.add("active6");
              document.getElementById("widget" + (cs + 2)).classList.add("active6");
            }

            setInterval(function () {
              next();
            }, 10000);
          </script>
        </div>
      </div>
    </div>
  </section>

  <section id="third">
    <div class="container">
      
      <h2>
        Crpto Market Charts
      </h2>
      <h6>
        with  {{$company_features? $company_features->companyname :"No company name set"}}
      </h6>
      <div class="row">
        <div class="col-sm-6 col-sm-12 ">
          <section style="overflow-x: scroll;">
            <span id="tradingview-copyright">
                <a style="color: rgb(173, 174, 176); font-family: " Trebuchet MS",Tahoma,Arial,sans-serif; font-size:
                    13px;" href="http://www.tradingview.com/" target="_blank" ref="nofollow noopener">
                    Cryptocurrency Market by
                    <span style="color: #3BB3E4">{{$company_features? $company_features->companyname :"No company name set"}}
                    </span>
                </a>
            </span>
    
            <script src="../s3.tradingview.com/external-embedding/embed-widget-screener.js">
                {
                    "width": "auto",
                    "height": "500px",
                    "defaultColumn": "overview",
                    "screener_type": "crypto_mkt",
                    "displayCurrency": "USD",
                    "locale": "en"
                }
            </script>
        </section>
        </div>

        
        <div class="col-sm-12">
          <div class="container">
              <div  style="width:100%;  margin:auto;overflow-x: scroll">
              <h2>Recent Transactions</h2>
              
  
  
                  <h6>Our recent live transaction by our Investors</h6>
  
                
                      
                              
                             
                                  <iframe
                                      src="https://www.btcwidget.info/widget/liveTx/%235dbcd2/%23ffffff/%235e2ead/%23042f66/%23042f66/800/400/10"
                                      width="800" height="400" frameBorder="0" scrolling="no"></iframe> </iframe>
                             
                
  
              </div>
          </div>
      </div>
      </div>
    </div>
  </section>
  

  <section>
  <section class="crypto__deposits">
    <div class="crypto__services--heading">
      <h2 style="text-align: center;">
        services

        That We
        <br>

        Continue
        <br />
        To

        Improve
      </h2>
      <p>
        To receive only high-quality service from our Investment Platform,
        <br />
        we constantly continue to improve on different aspects of our investment platform.
        <br>Join us

        and start earning now.
      </p>
    </div>
    <div class="crypto__services">
      <!-- <div class="left__section"> -->
      <div class="security">
        <img alt="" class="service__img" src="static/images/service1.svg" />
        <div>
          <h4>
            Security and
            <br />
            privacy
          </h4>
          <p>
            We appreciate the
            <br />
            personal and financial
            <br />
            data of our clients. For
            <br />
            this, we use several
            levels
            <br />
            of
            protection so
            that your
            <br />
            data is always safe.
          </p>
        </div>
      </div>
      <div class="deposit">
        <img alt="" class="service__img" src="static/images/service3.svg" />
        <div>
          <h4>
            Crypto Deposits
          </h4>
          <p>
            Our Investment system is built to
            <br />
            enable crytpto deposits
            <br />
            with the lowest possible
            <br />
            cost that enables
            <br />
            customers to
            deposit and withdraw
            <br />
            to there account
            <br />
            through any supported crypto
            <br />
            currency of there choice
          </p>
        </div>
      </div>
      <!-- </div> -->
      <!-- <div class="right__section"> -->
      <div class="loan__application">
        <img alt="" class="service__img" src="static/images/service4.svg" />
        <div>
          <h4>
            Financial Growth
          </h4>
          <p>
            With our credit facilities,
            <br />
            With longer-tenure credit,
            <br />
            flexible payment plan and
            <br />
            lower
            equity. investment
            with

            us
            is a rewarding
            <br />
            relationship that enables
            <br />
            you to enjoy life.
          </p>
        </div>
      </div>
      <div class="great__service">
        <img alt="" class="service__img" src="static/images/service2.svg" />
        <div>
          <h4>
            Great service
          </h4>
          <p>
            We make every effort to
            <br />
            make it convenient for
            <br />
            you to use our services. If
            <br />
            you have any
            questions or
            <br />
            wishes,
            write to our email
            <br />
            address
          </p>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </section>
  <section id="third">
    <div class="container">
     
      <h2>
        the global leader of Investment
      </h2>
      <h6>
        Discover why millions Invest with {{$company_features? $company_features->companyname :"No company name set"}}
      </h6>
      <div class="row">
        <div class="col-md-4">
          <i class="fa fa-clipboard-check">
          </i>
          <h5>
            REGISTERED
          </h5>
          <p>
            Registered and regulated according to the law
          </p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-shield-alt">
          </i>
          <h5>
            SECURITY
          </h5>
          <p>
            Security of assets and data encription
          </p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-lock">
          </i>
          <h5>
            PRIVACY
          </h5>
          <p>
            High privacy and data protection
          </p>
        </div>

        
      </div>
    </div>
  </section>
  <section class="banking__platform">
    <div class="platform">
      <div class="platform__left">
        <div class="platform__heading">
          <h1>
            Reliable investment platform
          </h1>
          <h2>
            Overview of Diverse Climax
          </h2>
        </div>
        <p class="ascent">
          Diverse Climax Investment Company is a leading investment firm with a proven track record of success.
          Their diverse team of experts analyzes market trends and identifies unique investment opportunities.
          They offer personalized investment solutions tailored to individual goals and risk tolerances.
          Transparency and trust are core values, with regular updates and detailed reports provided to investors.
          Choose Diverse Climax for a pathway to financial success guided by a reputable and experienced investment
          company.
        </p>
        <ul class="support__getstarted">
          <li>
            <a class="get__started" href="{{route('index')}}">
              Get Started
            </a>
          </li>
          <li>
            <a class="support" href="#">
              Support
            </a>
          </li>
        </ul>
        <div style="text-align: center; width: 100%;">
          <h3>Introduction</h3>
          <p class="ascent">
            In today's fast-paced and ever-changing world, investing wisely has become crucial for securing a prosperous
            future. Amidst the vast array of investment options, one company stands out for its exceptional track
            record, commitment to diversity, and unparalleled expertise - Diverse Climax Investment Company. With a
            strong focus on delivering remarkable results and empowering investors, Diverse Climax invites you to join
            their ranks and embark on a journey towards financial success. <br>
          </p>

          <h3>Unmatched Expertise</h3>
          <p class="ascent">
            Diverse Climax Investment Company boasts a team of seasoned professionals with extensive experience in the
            investment industry. Their experts diligently analyze market trends, identify emerging opportunities, and
            employ innovative strategies to ensure maximum returns for their investors. By leveraging their deep
            understanding of the financial landscape, Diverse Climax remains at the forefront of investment excellence,
            consistently surpassing industry benchmarks. <br>
          </p>

          <h3>Embracing Diversity</h3>
          <p class="ascent">
            In today's interconnected world, diversity has become more than just a buzzword; it is a fundamental element
            of success. Diverse Climax Investment Company truly embraces this philosophy by fostering an inclusive
            environment that encourages diverse perspectives and ideas. Their diverse team brings together individuals
            from different backgrounds, cultures, and experiences, enabling them to understand global markets and
            identify unique investment opportunities. This commitment to diversity sets Diverse Climax apart, creating a
            dynamic and forward-thinking investment approach. <br>
          </p>
          <h3>Tailored Investment Solutions</h3>
          <p class="ascent">
            Recognizing that every investor has unique goals and risk tolerances, Diverse Climax Investment Company
            offers a range of tailored investment solutions. Whether you are a seasoned investor or just starting your
            journey, their experts take the time to understand your financial aspirations and craft personalized
            investment strategies to suit your needs. From conservative approaches to more aggressive growth strategies,
            Diverse Climax provides comprehensive solutions that align with your objectives. <br>
          </p>
          <h3>Transparency and Trust</h3>
          <p class="ascent" style="width: 100%;">
            At Diverse Climax, transparency is at the core of their operations. They believe in fostering trust through
            open communication and a commitment to keeping investors informed every step of the way. By providing
            regular updates, detailed reports, and access to essential information, Diverse Climax ensures that
            investors can make informed decisions and have full confidence in their investment choices. <br>
          </p>
          <h3>Proven Track Record</h3>
          <p class="ascent">
            Diverse Climax Investment Company's success is evident through its impressive track record of consistently
            delivering exceptional results. Their investment strategies have withstood the test of time, consistently
            outperforming market expectations and generating sustainable returns for their clients. Diverse Climax's
            dedication to achieving long-term growth has earned them the trust and loyalty of a diverse clientele,
            solidifying their reputation as a leading investment company. <br>
          </p>
          <h3>Conclusion</h3>
          <p class="ascent">
            When it comes to securing your financial future, choosing the right investment partner is crucial. Diverse
            Climax Investment Company's unwavering commitment to diversity, unmatched expertise, personalized solutions,
            transparency, and proven track record make them the ideal choice for investors seeking exceptional results.
            Join Diverse Climax today and unlock the door to financial success, guided by a company that understands
            your aspirations and is dedicated to helping you achieve them. <br>
          </p>
        </div>
        <!-- <div class="qr__scan">
          <img alt="" src="{{asset('/static/images/qrcode.png')}}" />
          <div>
            <h4>
              SCAN THE CODE &amp; JOIN
              <br />
              OUR TELEGRAM
            </h4>
            <p>
              Get the latest news
              <br />
              about our service
              <br />
              and the world of cryptocurrencies
            </p>
          </div>
        </div> -->
      </div>
      <!-- <div class="platform__right">
        <img alt="" class="right__image" src="{{asset('/static/images/coin_hero.png')}}" />
        <div>
          <p style="font-weight: 500;">
            Register
          </p>
          <p>
            Deposit
          </p>
        </div>
        <div>
          <p style="font-weight: 500;">
            Invest
          </p>
          <p>
            Earn
          </p>
        </div>
        <div>
          <p style="font-weight: 500;">
            Make
          
            withdrawals
          </p>
        </div>
      </div> -->
    </div>
  </section>
  <!--<section id="fourth">
     <div class="container">
      <h2>
        News And Events
      </h2>
      <h6>
        Trading Stock Market News
      </h6>
      <div class="row mx-auto my-auto">
        <div class="carousel slide w-100" data-ride="carousel" id="recipeCarousel">
          <div class="carousel-inner w-100" role="listbox">
            <a class="carousel-control-prev w-auto" data-slide="prev" href="/#recipeCarousel" role="button">
              <span aria-hidden="true" class="carousel-control-prev-icon bg-dark border border-dark rounded-circle">
              </span>
              <span class="sr-only">
                Previous
              </span>
            </a>
            <a class="carousel-control-next w-auto" data-slide="next" href="/#recipeCarousel" role="button">
              <span aria-hidden="true" class="carousel-control-next-icon bg-dark border border-dark rounded-circle">
              </span>
              <span class="sr-only">
                Next
              </span>
            </a>
          </div>
        </div>
      </div>
    </div> 
  </section>-->
  <section id="fifth">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-4 align-middle">
          <h2>
            Invest with confidence on the world's leading friendly Investment platform
          </h2>
          <h6>
            Join millions who have already discovered smarter, friendly and automated ways of managing multiple type
            of assets. Choose an investment product to start with.
          </h6>
        </div>
        <div class="col-md-4">
          <img alt="Responsive image" class="img-fluid float-start" src="static/images/4.png" />
        </div>
      </div>
    </div>
  </section>
  <section id="second">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img alt="Responsive image" class="img-fluid mx-auto d-block" src="static/images/3.png" />
        </div>
        <div class="col-md-6">
          <h2>
            invest In a diverse portfolio
          </h2>
          <ul>
            <li>
              Build a diversified portfolio
            </li>
            <li>
              Top security
            </li>
            <li>
              Auto Trading and Investing
            </li>
          </ul>
          <a href="{{route('about')}}">
            Read More
          </a>
        </div>
      </div>
      <div class="row align-items-center" style="margin-top: 70px;">
        <div class="offset-md-1 col-md-6 align-middle">
          <iframe height="315" src="companyvideo.html" width="100%">
          </iframe>
        </div>
        <div class="col-md-4 align-middle">
          <a download="" href="{{route('brochure')}}">
            <div class="card card-body" id="brochure">
              <i aria-hidden="true" class="fa fa-download">
              </i>
              <h5 class="card-title">
                View Company
                <br />
                Brochure
              </h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="fifth2">
    <style>
      .testi {
        position: absolute;
        top: 100px;
        left: 150px;
        color: #fff;
        width: 40%;
        text-align: left;
      }
    </style>
    <div class="carousel slide thecarousel" data-ride="carousel" id="carouselExampleIndicators">
      <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators">
        </li>
        <li data-slide-to="1" data-target="#carouselExampleIndicators">
        </li>
        <li data-slide-to="2" data-target="#carouselExampleIndicators">
        </li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img alt="First slide" class="d-block w-100" src="static/images/17.jpg"
            style="height: 500px;position: relative;" />
          <div class="testi">
            <h3>
              Meet Our Popular Investors
            </h3>
            <p style="font-size: 25px;">
              <q>
                {{$company_features? $company_features->companyname :"No company name set"}} is a fantastic trading platform, both from an ease of use and
                technical perspective.
              </q>
            </p>
          </div>
          <div class="carousel-caption" style="display: block;">
            <h3>
              FRANKLIN
            </h3>
            <p>
              FROM UNITED KINGDOM
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img alt="Second slide" class="d-block w-100" src="static/images/18.jpg"
            style="height: 500px;position: relative;" />
          <div class="testi">
            <h3>
              Meet Our Popular Investors
            </h3>
            <p style="font-size: 25px;">
              <q>
                I am very satisfied with the services {{$company_features? $company_features->companyname :"No company name set"}} platform provides
              </q>
            </p>
          </div>
          <div class="carousel-caption" style="display: block;">
            <h5>
              ANGELINA
            </h5>
            <p>
              FROM UNITED STATES
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img alt="Third slide" class="d-block w-100" src="static/images/19.jpg"
            style="height: 500px;position: relative;" />
          <div class="testi">
            <h3>
              Meet Our Popular Investors
            </h3>
            <p style="font-size: 25px;">
              <q>
                Great service. Fast feedback. Social forum give a lot of info
              </q>
            </p>
          </div>
          <div class="carousel-caption" style="display: block;">
            <h5>
              ALBERT
            </h5>
            <p>
              FROM IRELAND
            </p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" data-slide="prev" href="index.html#carouselExampleIndicators" role="button">
        <span aria-hidden="true" class="carousel-control-prev-icon">
        </span>
        <span class="sr-only">
          Previous
        </span>
      </a>
      <a class="carousel-control-next" data-slide="next" href="index.html#carouselExampleIndicators" role="button">
        <span aria-hidden="true" class="carousel-control-next-icon">
        </span>
        <span class="sr-only">
          Next
        </span>
      </a>
    </div>
  </section>
  <section id="sixth">
    <div class="container">
      <div class="row row1">
        <div class="col-md-4">
          <div class="card card-body">
            <h5 class="card-title">
              Auto-Trade
            </h5>
            <p class="card-text">
              Explore the auto-trading feature
            </p>
            <a href="{{route('about')}}">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-body">
            <h5 class="card-title">
              Top Security
            </h5>
            <p class="card-text">
              Secure and protect wallets at all time
            </p>
            <a href="{{route('about')}}">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-body">
            <h5 class="card-title">
              Cryptocurrency
            </h5>
            <p class="card-text">
              Buy and sell cryptocurrency with 0% commission
            </p>
            <a href="{{route('about')}}">
              Read More
            </a>
          </div>
        </div>
      </div>
      <div class="row row2">
        <div class="col-md-1">
        </div>
        <div class="col-md-5">
          <img alt="Responsive image" class="img-fluid float-start" src="static/images/5.png" />
        </div>
        <div class="col-md-4">
          <h2>
            Explore top performing variety of stock
          </h2>
          <h6>
            Trade and invest in top stocks and ETFs. Trade currency pairs, indices and commodities via CFDs. Investing
            in the financial market has never been easier.
          </h6>
          <a href="{{route('invest')}}">
            Start Investing
          </a>
        </div>
        <div class="col-md-2">
        </div>
      </div>
      <div class="row row3">
        <div class="col-md-12">
          <h4 class="text-center">
            WE ACCEPT
          </h4>
        </div>
        <div class="col-xs-2 col-2">
          <i class="fab fa-cc-visa" style="color:#15195A">
          </i>
          <br />
        </div>
        <div class="col-xs-2 col-2">
          <i class="fab fa-cc-paypal" style="color: #169BD7">
          </i>
          <br />
        </div>
        <div class="col-xs-2 col-2">
          <i class="fab fa-cc-stripe" style="color: #5433FF">
          </i>
          <br />
        </div>
        <div class="col-xs-2 col-2">
          <i class="fab fa-cc-visa" style="color:#15195A">
          </i>
          <br />
        </div>
        <div class="col-xs-2 col-2">
          <i class="fab fa-cc-paypal" style="color: #169BD7">
          </i>
          <br />
        </div>
        <div class="col-xs-2 col-2">
          <i class="fab fa-cc-stripe" style="color: #5433FF">
          </i>
          <br />
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
            <a class="dropdown-item" href="{{route('register')}}">SIGN UP</a>
      <a class="dropdown-item" href="{{route('login')}}">LOGIN</a>
          </div>
        </div>
        <div class="col-md-4">
          <img alt="website logo" height="40" src="logo.png" width="100" />
          <h3>
          </h3>
          <div class="contacts" tyle="text-decoration: none;">
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

  <script crossorigin="anonymous" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    src="../code.jquery.com/jquery-3.2.1.slim.min.js">
    </script>
  <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
  <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
  <script src="static/js/script.js">
  </script>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
  </script>
</body>


<!-- Mirrored from 127.0.0.1:8000/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 20:42:30 GMT -->
</html>