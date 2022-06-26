<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    
    <title>Elio strategy - Accueil</title>


    <!--Fevicon icon-->
    <link rel="icon" href="img/fevicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/slick-slider.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <!--Google Fonts-->
    <link href="../../../fonts.googleapis.com/css2f59e.css?family=Playfair+Display:wght@400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

</head>
<body class="home-3">

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
    <div class="navbar-area">
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
                    <a class="main-logo" href="/"><!--<img src="img/_logo-blanc2.png" style="height: 80px !important ;width: 90px !important" alt="img"> --> <h2><img style="width: 50px;height:50px" src="img/fevicon.png" alt="" />  ELIO STRATEGY</h2></a>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open ml-auto">
                        <li class="current-menu-item">
                            <a href="/">ACCUEIL
                                </a>
                        </li>
                        <li>
                            <a href="{{url('about')}}">À PROPOS</a>
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

    <!-- Banner Area Start-->
    <section class="banner-area style-3" style="background: url(img/banner/bg.png);">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-sm-10 offset-xl-2 align-self-center">
                    <div class="banner-inner ms-xl-5">
                        <h1>
                            Spécialiste en métaux d’investissement
                            </h1>
                        <p>Un constat confirmé chaque année aujourd’hui encore, tant leur utilisation ne cesse de croître dans la production industrielle mondiale. En effet, ce groupe de 17 métaux précieux est devenu l’un des facteurs clé de la croissance mondiale.</p>
                        <a href="/contact" class="mt-3"><a class="btn btn-blue mt-3" href="/contact"><i class="fa fa-book"></i>Demande de brochure gratuite</a></a>
                        <a class="btn btn-blue active m-0 mt-3" href="/contact"><i class="fa fa-phone-square"></i>Contactez-nous</a>
                    </div>
                        <div class="row mt-5 justify-content-center">
                                
                            <div class="col-lg-11">
                                <div class="video-inner">
                                        
                                    <a class="play-btn" href="../../../external.html?link=https://www.youtube.com/embed/Wimkqo8gDZ0" data-effect="mfp-zoom-in"><img src="img/icon/play.png" alt="img"></a>
                                </div>          
                            </div>          
                        </div>  
                </div>
                <div class="col-xl-5 col-lg-6 offset-lg-1 d-none d-lg-block">
                    <img src="img/banner/banner1.png" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- intro-Area Start-->
    <section class="intro-area pd-top-110 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit8.png" alt="">
                        <h4><a href="{{url('details/germanium')}}">Germanium </a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit2.png" alt="">
                        <h4><a href="{{url('details/indium')}}">Indium </a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit3.png" alt="">
                        <h4><a href="{{url('details/dysprosium')}}">Dysprosium</a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit4.png" alt="">
                        <h4><a href="{{url('details/gallium')}}">Gallium</a></h4>
                    </div>                  
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit5.png" alt="">
                        <h4><a href="{{url('details/terbium')}}">Terbium</a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit1.png" alt="">
                        <h4><a href="{{url('details/neodyme')}}">Neodyme</a></h4>
                    </div>                  
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit6.png" alt="">
                        <h4><a href="{{url('details/hafnium')}}">Hafnium</a></h4>
                    </div>                  
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit7.png" alt="">
                        <h4><a href="{{url('details/praseodymium')}}">Praseodymium</a></h4>
                    </div>                  
                </div>
            </div>
        </div>      
    </section>
    <!-- intro-Area End-->

    <!-- featured-Area Start-->
    <div class="featured-area pd-top-120">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 offset-xl-1 col-lg-5 align-self-center align-self-xl-start d-none d-lg-block">
                    <div class="thumb me-5 span3 wow rollIn">
                        <img src="img/featured/imageedit_9_6383058336.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-8 col-md-10 col-sm-11">
                    <div class="section-title">
                        <h4 class="title">
                            Des matières premières indispensables
                            </h4>
                        <p>
                            Domaines d'utilisation
                        </p>
                    </div> 
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-featured-wrap">
                                <div class="thumb">
                                    <img style="width: 150px; height:150px;border-radius: 10%;" src="img/featured/produit1.png" alt="img">
                                </div>
                                <div class="featured-wrap-details">
                                    <h6>Le Neodyme  utilisation : </h6>
                                    <p> Electronique</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-featured-wrap">
                                <div class="thumb">
                                    <img style="width: 150px; height:150px;border-radius: 10%;" src="img/featured/produit3.png" alt="img">
                                </div>
                                <div class="featured-wrap-details">
                                    <h6>Le Dysprosium, utilisation :</h6>
                                    <p>Aviation, Missiles, Radars</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-featured-wrap">
                                <div class="thumb">
                                    <img style="width: 150px; height:150px;border-radius: 10%;" src="img/featured/produit8.png" alt="img">
                                </div>
                                <div class="featured-wrap-details">
                                    <h6>Le Gallium, utilisation :</h4>
                                    <p> Scanners, Echographie.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-featured-wrap">
                                <div class="thumb">
                                    <img style="width: 150px; height:150px;border-radius: 10%;"  src="img/featured/produit5.png" alt="img">
                                </div>
                                <div class="featured-wrap-details">
                                    <h6>Le Terbium, utilisation : </h6>
                                    <p>Lasers, Teinture du verre</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-featured-wrap d-1400-none display-lg-block">
                                <div class="thumb">
                                    <img style="width: 150px; height:150px;border-radius: 10%;"  src="img/featured/prduit11.png" alt="img">
                                </div>
                                <div class="featured-wrap-details">
                                    <h6>L'Europium , utilisation : </h6>
                                    <p>Nucléaire, Géochimie</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-featured-wrap d-1400-none display-lg-block">
                                <div class="thumb">
                                    <img style="width: 150px; height:150px;border-radius: 10%;"  src="img/featured/produit10.png" alt="img">
                                </div>
                                <div class="featured-wrap-details">
                                    <h6>Le Prométhium, utilisation : </h6>
                                    <p>Aerospatiale.</p>
                                </div>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>  
    </div>
    <!-- featured-Area End-->

    <!-- upcoming-featured-Area Start-->
    <div class="upcoming-featured-area pd-top-120 pd-bottom-120">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5 offset-md-1 col-md-6 col-sm-10 align-self-center">
                    <div class="ps-5 ms-5">
                        <div class="section-title">
                            <h2 class="title">
                                Dysprosium
                                </h2>
                            <p>Tout comme le NÉODYME, le DYSPROSIUM possède des propriétés fortement magnétiques. Aussi le DYSPROSIUM fait-il partie des composants d’aimant permanents, qui sont utilisés dans des générateurs pour la production d’électricité et dans les voitures électriques. Il sert d’agent de protection pour les réacteurs nucléaires et les lampes à économie d’énergie <br><br>
                                Le dysprosium est la terre rare “reine”, celle que l’on s’arrache. Grâce à sa puissance magnétique, le dysprosium est l’élément clef des aimants permanents de haute technicité. Ajouté au néodyme, le dysprosium permet aux aimants de rester magnétique.
                                Ce métal est ainsi essentiel aux turbines d’éoliennes off-shore et aux voitures electriques. <br> <br>
                                En vertu de ces considérations, une forte augmentation de la demande en DYSPROSIUM est à prévoir.
                            </p>
                        </div>
                        
                    </div>                  
                </div>
                <div class="col-lg-5 col-md-5 d-none d-md-block align-self-center">
                    <div class="thumb me-5 span3 wow rollInRight">
                        <img src="img/featured/img1.jpeg" alt="img">
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <div class="upcoming-featured-area pd-top-120 pd-bottom-120">
        <div class="container-fluid">
            <div class="row justify-content-center">
                
                <div class="col-xl-5 offset-md-1 col-md-6 col-sm-10 align-self-center">
                    <div class="ps-5 ms-5">
                        <img src="img/featured/image2.jpeg" alt="img">
    
                    </div>                  
                </div>
                <div  class="col-lg-5 col-md-5 d-none d-md-block align-self-center">
                    <div class="thumb me-5 span3 wow rollInRight">
                        
                        <div class="section-title">
                            <h2 class="title">
                                Neodymium
                                </h2>
                            <p>Le NÉODYME est l’une des seules Terres Rares qui apparaisse dans la liste* établie par la Commission Européenne des métaux classés, dont l’approvisionnement risque d’être problématique. S’ajoute à cela l’importance du NÉODYME pour de nombreuses technologies futures, la demande mondiale de NÉODYME serait amenée à quadrupler d’ici à l’horizon 2030.</p>
                            <br><br>
                            <p>Le NÉODYME est utilisé surtout pour la fabrication des aimants extrêmement puissants. Ces derniers ont la capacité de porter durablement 1.300 fois leur poids. Ils sont utilisés là où de forts champs magnétiques sont nécessaires en faible quantité, notamment dans des turbines pour des moteurs électriques hautement performants, dans des microphones ou des haut-parleurs des Smartphones, autrement dit dans les technologies de pointe.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>  
    </div>

    <div class="upcoming-featured-area pd-top-120 pd-bottom-120">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5 offset-md-1 col-md-6 col-sm-10 align-self-center">
                    <div class="ps-5 ms-5">
                        <div class="section-title">
                            <h2 class="title">Technologie des turbines</h2>
                            <p>Les turbines des centrales électriques de toutes sortes assurent un approvisionnement énergétique fiable, les turbines des avions permettent des voyages aériens toujours plus efficaces. Cependant, seuls l'hafnium, le rhénium et le praséodymicane peuvent être utilisés pour construire des turbines répondant aux exigences modernes.</p>
                        </div>
                        
                    </div>                  
                </div>
                <div class="col-lg-5 col-md-5 d-none d-md-block align-self-center">
                    <div class="thumb me-5 span3 wow rollInRight">
                        <img src="img/featured/image3.jpeg" alt="img">
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- upcoming-featured-Area End-->

    <!-- fact-count-Area start-->
    <section class="fact-count-area text-center">
        <div class="container">
            <div class="fact-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-fact-inner">
                            <h2><span class="counter">200,000</span></h2>
                            <h4>Produites par an</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-fact-inner">
                            <h2 class="counter">10</h2>
                            <h4>Pays producteurs</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-fact-inner">
                            <h2><span class="counter">95 </span>%</h2>
                            <h4>Production mondiale</h4>
                        </div>
                    </div>
                    
                </div>
            </div>  
        </div>
    </section>
    <!-- fact-count-Area End-->

    <!--Screenshot-area-->
    <section class="screenshot-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">Investissez dans le futur</h2>
                        <a href="/contact" class=""><a class="btn btn-blue" href="/contact"><i class="fa fa-book"></i>Demande de brochure gratuite</a></a>
                    </div>
                </div>
                <div class="col-md-12 d-none">
                    <div class="screenshot-slider slick-carousel ps-4 pe-4">
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="img/screenshot/01.png" alt="app">
                            </div>  
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="img/screenshot/02.png" alt="app">
                            </div>  
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="img/screenshot/03.png" alt="app">
                            </div>  
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="img/screenshot/04.png" alt="app">
                            </div>  
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="img/screenshot/05.png" alt="app">
                            </div>  
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="img/screenshot/04.png" alt="app">
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Screenshot-area end-->

    <!--Pricing-area-->
    <section class="pricing-area text-center pd-top-140 pd-bottom-110 d-none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-sm-10">
                    <div class="section-title">
                        <h2 class="title">Pricing Plans</h2>
                        <p>Delay rapid joy share allow age manor six. Went why far saw many knew. Exquisite excellent son gentleman acuteness her.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-price">
                        <h4 class="pricing-title">Free</h4>
                        <div class="thumb">
                            <img src="img/pricing/price-1.png" alt="img">
                        </div>      
                        <ul class="pricing-list text-start">
                            <li><a href="#"><i class="fa fa-check"></i> Total Users1</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Unlimitted Styles</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Advanced Protection</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Cloud Storage</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> 24/7 Customer Service</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Backup Service</a></li>
                        </ul>       
                        <a class="btn btn-blue" href="index.html"><i class="fa fa-shopping-cart"></i>ORDER NOW</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price style-1">
                        <h4 class="pricing-title">Basic</h4>
                        <div class="thumb">
                            <img src="img/pricing/price-2.png" alt="img">
                        </div>      
                        <ul class="pricing-list text-start">
                            <li><a href="#"><i class="fa fa-check"></i> Total Users1</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Unlimitted Styles</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Advanced Protection</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Cloud Storage</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> 24/7 Customer Service</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Backup Service</a></li>
                        </ul>       
                        <a class="btn btn-blue" href="index.html"><i class="fa fa-shopping-cart"></i>ORDER NOW</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price style-2">
                        <h4 class="pricing-title">Premium</h4>
                        <div class="thumb">
                            <img src="img/pricing/price-3.png" alt="img">
                        </div>      
                        <ul class="pricing-list text-start">
                            <li><a href="#"><i class="fa fa-check"></i> Total Users1</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Unlimitted Styles</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Advanced Protection</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Cloud Storage</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> 24/7 Customer Service</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Backup Service</a></li>
                        </ul>       
                        <a class="btn btn-blue" href="../../../external.html?link=https://www.s7template.com/tf/prooland/html"><i class="fa fa-shopping-cart"></i>ORDER NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pricing-area end-->

    <!-- network-Area Start-->
    <section class="network-area pd-top-140">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 d-none d-lg-block align-self-end">
                    <div class="thumb me-5 span3 wow rollIn">
                        <img src="img/technique_image_gobi.png" alt="img">
                    </div>
                </div> 
                <div class="col-xl-5 col-lg-5 col-sm-9">
                    <div class="section-title mb-0 pb-5">
                        <h2 class="title">Investir dans l’avenir des métaux de terres rares à Pau</h2>
                        <p>Elio Strategy est une entreprise qui investit dans l’avenir . Nous croyons au potentiel des métaux des terres rares et nous nous engageons à aider nos clients à tirer parti de cette industrie en pleine croissance. Notre équipe possède des années d’expérience dans les secteurs de l’exploitation minière et de l’investissement, et nous sommes ravis de partager nos connaissances avec vous. Si vous cherchez une société qui peut vous aider à investir dans les métaux des terres rares, ne cherchez pas plus loin qu’Elio Strategy !</p>
                    </div>
                    <!--<ul class="pl-list-inner style-1">
                        <li><i class="fa fa-check"></i>Delay rapid joy share allow age manor six.</li>
                        <li><i class="fa fa-check"></i>Exquisite excellent son gentleman acuteness her.</li>
                        <li><i class="fa fa-check"></i>Went why far saw many knew.</li>
                        <li><i class="fa fa-check"></i>Friendly as stronger speedily by recurred.</li>
                        <li><i class="fa fa-check"></i>Son interest wandered sir addition end say.</li>
                    </ul>   -->                 
                </div>
                <div class="col-lg-2 d-none d-xl-block align-self-end">
                    <div class="thumb span3 wow rollInRight">
                        <img src="img/other/6.png" alt="img">
                    </div>
                </div>
            </div>  
        </div>    
    </section>
    <!-- network-Area End-->
      <!-- video-Area start-->
      <section class="d-none">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-lg-11">
                    <div class="video-inner">
                        <img src="img/other/video.png" alt="img">
                        <a class="play-btn" href="" data-effect="mfp-zoom-in"><img src="img/icon/play.png" alt="img"></a>
                    </div>          
                </div>          
            </div>  
        </div>
     </section>
    <!-- video-Area End-->
    <!-- testimonial-Area Start-->
    
    <!-- testimonial-Area End-->

    <!-- faq-Area start-->
    <section class="faq-area pd-top-140 pd-bottom-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-sm-10">
                    <div class="section-title mb-0 pb-5 text-center">
                        <h2 class="title">Foire Aux Questions</h2>
                        <p>« Les terres rares sont à la Chine ce que le pétrole est au Moyen-Orient »
                            – Deng Xiaoping –</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pl-faq-accordion accordion" id="accordionExample">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        
                                       Quelques clefs pour décrypter les marchés des métaux
 
                                      </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        Elio Strategy dispose d’une équipe de professionnels expérimentés et dévoués qui connaissent bien le domaine des métaux des terres rares. Notre équipe a une longue expérience de réussite dans l’industrie, et nous nous engageons à investir dans l’avenir de cette ressource essentielle. Notre équipe possède l’expertise et les connaissances nécessaires pour prendre les décisions les plus éclairées lorsqu’il s’agit d’investir dans les métaux des terres rares, et nous travaillerons sans relâche pour que nos clients obtiennent le meilleur retour sur investissement. <br>
                                        – Des professionnels expérimentés et compétents. <br>

                                        – Engagés à investir dans l’avenir. <br>

                                        – Expertise et connaissances pour prendre des décisions éclairées 
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        
                                        
                                      Vous souhaitez commercialiser un produit innovant ?

 
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        

                                        ELIO Strategy dans le cadre de son devellopement recrute des commerciaux.

                                        Envoyez votre candidature à : <a href="mailto:administration@eliostrategy.com">administration@eliostrategy.com</a> ou remplissez le en cliqant <a href="/contact">ici</a>

                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        
                                        Comment nous investissons dans les métaux des terres rares

                                      </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        L’investissement d’Elio Strategy porte sur l’avenir des métaux des terres rares. La Chine produit et exporte actuellement plus de 95 % des métaux de terres rares dans le monde, mais avec les récentes réductions de production, les prix de ces métaux sont en hausse. C’est donc le bon moment pour investir dans des sociétés qui explorent et développent de nouvelles sources de métaux de terres rares en dehors de la Chine. <br> <br>
                                        L’investissement d’Elio Strategy dans les métaux comprend une exposition au germanium, à l’indium, au dysprosium, au gallium, au terbium et au néodyme. Chacun de ces métaux rares joue un rôle important dans l’économie mondiale et Elio Strategy les a identifiés comme des secteurs de croissance clés. En investissant dans ces métaux, Elio Strategy est en mesure d’offrir à ses clients une diversification et un potentiel de hausse à long terme. Les recherches de la société montrent que ces métaux continueront d’être très demandés en raison de leurs propriétés et applications uniques. Par conséquent, Elio Strategy estime que son investissement dans ces métaux rares générera des rendements importants pour ses clients situés à Pau.

                                        <img src="img/graphisme-augmentation-métaux-rares-300x204.png" alt="">
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        

                                       Pour schématiser, on peut distinguer deux principaux types de crises :

                                      </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        Les crises liées à l’offre, liées à des interruptions temporaires et conjoncturelles de la production, de nature accidentelle (incidents techniques, aléas climatiques…etc.), ou intentionnelle (assèchement délibéré de l’offre, stockages stratégiques ou spéculatifs, quotas et restrictions à l’exportation…).
                                        <br>
                                        Les impacts de tels évènements sur le cours d’un métal dépendent de plusieurs facteurs importants détaillés dans les sections précédentes, notamment le degré de concentration de la production, les quantités de métal utilisé pour chaque application, l’éventualité de produits de substitution…
                                        <br>
                                        Les hausses les plus spectaculaires sont généralement constatées lors des crises liées à la demande, lorsque le métal est insubstituable et utilisé en faible quantité. En effet, malgré les quantités faibles mises en jeu par produit, la diffusion massive génère au global une hausse importante et très rapide de la demande, que le système productif est incapable de satisfaire. Pour les industriels, les faibles quantités de métal incorporées par produit font que la hausse, même massive du cours, a peu d’influence sur le coût global du produit. Pour les acheteurs, peu importe donc le prix à payer, le véritable risque s’avérant être celui de pénurie. Ces situations conduisent parfois à de véritables phénomènes d’emballements, les acheteurs procédant alors à des achats compulsifs qui alimentent la hausse exponentielle des cours.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        
                                     Le marché des métaux et ses principaux facteurs

                                      </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        Décrypter les marchés des métaux mineurs demande beaucoup de curiosité car l´exercice mobilise divers domaines de connaissance. Suivre et comprendre l’évolution du cours d’un métal conduit en effet à suivre toute une filière industrielle : à commencer par les projets miniers et leur exploitation, les procédés de raffinage, de métallurgies, de substitution, aux travaux de R&D, et enfin aux développements des filières de recyclage… Une telle diversité impose donc beaucoup d’exigence dans le travail d’analyse, mais elle contribue à le rendre d’autant plus passionnant. <br>
                                        Cette section propose une vision panoramique des principaux facteurs à considérer pour étudier le marché des métaux rares et métaux critiques, afin de compléter ainsi les analyses de l’offre et de la demande présentées dans les sections précédentes. Rappelons que chaque métal doit faire l’objet d’une analyse fine et complète de sa chaîne d’approvisionnement, car, selon le métal considéré, les points de fragilités peuvent se faire à des niveaux très différents. L’analyse doit prendre en compte l’ensemble de la filière amont et aval, depuis la ressource minérale jusqu’au produit fini, et intégrer les activités des investisseurs et intermédiaires de marché. <br>
                                        <br>
                                        Le raisonnement proposé dans cette section s’articule autour de principes fondamentaux et génériques (valables pour tout marché), qu’il complète et amende selon les spécificités importantes des métaux mineurs détaillées dans les sections précédentes. Pour synthétiser ces spécificités importantes à considérer, on peut citer les points principaux suivants : <br>
                                        <ul>
                                            <li>  
                                                 Les marchés des métaux mineurs et stratégiques connaissent des volumes d´échanges modestes par rapport aux échanges enregistrés sur les marchés traditionnels des métaux industriels. (- de 200 tonnes par an contre + de 19 Million de tonnes pour le cuivre par exemple);
                                            </li>
                                            <li>
                                                Pour la plupart des métaux mineurs, il n’existe pas de cotation ni de place de marché officielle ; seul le cobalt et le molybdène font figure d’exception car ils sont côtés sur le London Métal Exchange depuis quelques années.

                                            </li>
                                            <li>
                                                La balance entre l’offre et la demande connaît des déséquilibres de nature structurelle : face aux hausses parfois très violentes de la demande, le système productif, sous diverses contraintes, fait preuve d’une grande inertie. L’inélasticité entre l’offre et la demande est d’autant plus grande pour les métaux qui sont des coproduits ou sous-produits d’autres ressources minérales.

                                            </li>
                                            <li>
                                                Conséquence du point précédent, les situations de crises et les ruptures d’approvisionnement sont relativement fréquentes et aiguës sur les marchés des métaux mineurs et génèrent de fortes tensions sur les prix et une forte volatilité.

                                            </li>
                                        </ul>
                                        <img src="img/blog/truck.jpeg" alt="" srcset="">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                       
                                        Que sont les métaux des terres rares et pourquoi sont-ils importants ?

                                      </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        Les métaux des terres rares sont un groupe de 17 éléments qui sont essentiels à de nombreux produits de haute technologie. Ils sont utilisés dans tout, des téléphones portables aux voitures électriques, et leur demande ne fera qu’augmenter au fur et à mesure des progrès technologiques. Malheureusement, ils sont également assez rares, ce qui les rend difficiles à extraire et à traiter. <br> <br>
                                        La bonne nouvelle, c’est que les investisseurs de Pau commencent à prendre conscience de l’importance des métaux de terres rares, et cette industrie offre un potentiel de profits énormes. Des entreprises comme Elio Strategy investissent dans de nouvelles opérations minières et installations de traitement, ce qui contribuera à garantir que nous disposons de suffisamment de métaux de terres rares pour répondre à la demande future. Donc, si vous recherchez un investissement avec un grand potentiel de rendement futur, examinez les entreprises impliquées dans l’industrie des métaux des terres rares.
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>    
                </div>       
            </div>  
        </div>
    </section>
    <!-- faq-Area End-->

    <!-- subscribe-Area Start-->
    <section class="subscribe-area pd-bottom-150 ps-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-10">
                    <div class="section-title mb-0 pb-5 text-center">
                        <h2 class="title">Recevez gratuitement notre brochure par email</h2>
                        
                    </div>
                </div>
                <div class="col-lg-7 col-sm-10">
                    <div class="single-subscribe-wrap">
                        <input type="text" placeholder="Adresse Email">
                        <button class="btn btn-black">SOUSCRIRE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-Area end-->

    <!-- footer area start -->
    <footer class="footer-area text-center" style="background: url(img/shape/footer-bg-1.png);">
        <div class="container">
            <div class="footer-thumb">
                <a href="/">  <img src="img/logo-footer.png" alt="img"></a>
            </div>  
            <div class="widget-footer-link">
                <ul>
                    <li><a href="{{url('/')}}">ACCEUIL</a></li>
                    <li><a href="{{url('about')}}">À PROPOS </a></li>
                    <li><a href="{{url('/product')}}"">MÉTAUX PRÉCIEUX </a></li>
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
                    <p>© 2022 ELIO STRATEGY

                        . Tout droits réservés

                          <a href="mailto:contact@eliostrategy.com">contact@eliostrategy.com</a>

                    </p>                        
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
      "backgroundColor":"#1f2873", 
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
      "welcomeText":"Bonjour !\nComment puis-je vous aider ? \n. ",
      "messageText":" Salut ! Comment ça marche ?",
      "backgroundColor":"#1f2873",
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
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/magnific.js"></script>
    <script src="js/image-loaded.js"></script>
    <script src="js/nice-select.js"></script>
    <script src="js/slick-slider.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/ripple.js"></script>
    <script src="js/waypoint.js"></script>
    <script src="js/counterup.js"></script>
    <!-- main js  -->
    <script src="js/main.js"></script>
</body>

</html>