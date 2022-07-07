<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    
    <title>Elio strategy</title>


    <!--Fevicon icon-->
    <link rel="icon" href="img/fevicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!--Google Fonts-->
    <link href="../../../fonts.googleapis.com/css2f59e.css?family=Playfair+Display:wght@400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

</head>
<body>

    <!-- preloader area start -->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- navbar start -->
    <div class="navbar-area style-4">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo" href="/"><h2><img style="height: 80px !important ;width: 90px !important" src="{{asset('img/logo-blanc2.png')}}" alt="" />  ELIO STRATEGY</h2></a>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open ml-auto">
                        <li class="menu-item-has-childrens current-menu-item">
                            <a href="{{url('/')}}">ACCUEIL
                                </a>
                        </li>
                        <li>
                            <a href="{{('/about')}}">À PROPOS</a>
                        </li>
                        <li>
                            <a href="{{url('product')}}">MÉTAUX PRÉCIEUX
                                </a> 
                        </li>
                        
                        
                        <li>
                            <a href="{{url('contact')}}">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    @yield('content')

    <!-- footer area start -->
    <footer class="footer-area text-center" style="background: url({{asset('img/shape/new_footer-bg.png')}});">
        <div class="container">
            <div class="footer-thumb">
                <a href="/"><img style="height: 80px !important ;width: 90px !important" src="{{asset('img/logo-blanc2.png')}}" alt="img"></a>
            </div>  
            <div class="widget-footer-link">
                <ul> 
                    <li><a href="{{url('/')}}">ACCEUIL</a></li>
                    <li><a href="{{url('about')}}">À PROPOS </a></li>
                    <li><a href="{{url('/product')}}">PERLES PRÉCIEUX </a></li>
                    <li><a href="{{url('/contact')}}">CONTACT</a></li>
                    <li><a href="{{url('/mention')}}">MENTIONS LÉGALES</a></li>
                </ul>
            </div> 
            <div class="widget-footer-social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <!--Footer bottom-->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <p>© 2020 Elio strategy. All Rights Reserved <a href="/mention">Mentions légales</a> </p>                        
                </div>              
            </div>
        </div>
    </footer>
    <!-- footer area end -->        

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?10582';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
      "enabled":true,
      "chatButtonSetting":{
          "backgroundColor":"#0b2a40", 
          "ctaText":"Nous écrire..",
          "borderRadius":"50",
          "marginLeft":"0",
          "marginBottom":"25",
          "marginRight":"25",
          "position":"right"
      },
      "brandSetting":{
          "brandName":"Elio Strategy",
          "brandSubTitle":"Jean Baptiste",
          "brandImg":"img/fevicon.png",
          "welcomeText":"Bonjour !\nComment puis-je vous aider ? \n ",
          "messageText":" Salut ! Comment ça marche ?",
          "backgroundColor":"#0b2a40",
          "ctaText":"Nous écrire..",
          "borderRadius":"25",
          "autoShow":false,
          "phoneNumber":"33(0)533893440"
      }
    };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script> 
    <!-- all plugins here -->
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/magnific.js')}}"></script>
    <script src="{{asset('js/image-loaded.js')}}"></script>
    <script src="{{asset('js/nice-select.js')}}"></script>
    <script src="{{asset('js/slick-slider.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/waypoint.js')}}"></script>
    <script src="{{asset('js/ripple.js')}}"></script>
    <script src="{{asset('js/counterup.js')}}"></script>
    <!-- main js  -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>