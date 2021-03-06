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
    <style>
        .displ-none{
            display: none;
        }
        .float{
	position:fixed;
	
	bottom:40px;
	right:40px;
	color:#FFF;
    border-radius: 30px
	/**border-radius:50px;
    width:60px;
	height:60px;
    **/
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:22px;
}
    </style>
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
                    <a class="main-logo" href="/"><!--<img src="img/_logo-blanc2.png" style="height: 80px !important ;width: 90px !important" alt="img"> --> <h4><img style="height: 80px !important ;width: 90px !important" src="img/logo-blanc2.png" alt="" />  ELIO STRATEGY</h4></a>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open ml-auto">
                        <li class="current-menu-item">
                            <a href="/">ACCUEIL
                                </a>
                        </li>
                        <li>
                            <a href="{{url('about')}}">?? PROPOS</a>
                        </li>
                        <li>
                            <a href="{{url('product')}}">TERRES RARES
                                </a>
                        </li>
                        <!--<li>
                            <a target="_blank"  href="{{url('blog.eliostrategy.com')}}">ACTUALIT??S
                            </a>
                        </li> -->
                        
                        
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
    <section class="banner-area style-3" style="background: url(img/banner/bg-change.png);">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-sm-10 offset-xl-2 align-self-center">
                    <div class="banner-inner ms-xl-5">
                        <h1>
                            Sp??cialiste en m??taux d???investissement
                            </h1>
                        <p>Un constat confirm?? chaque ann??e aujourd???hui encore, tant leur utilisation ne cesse de cro??tre dans la production industrielle mondiale. En effet, ce groupe de 17 m??taux pr??cieux est devenu l???un des facteurs cl?? de la croissance mondiale.</p>
                        <a href="/contact" class="mt-3"><a class="btn btn-blue mt-3" href="/contact"><i class="fa fa-book"></i>Demande de brochure gratuite</a></a>
                        <a style="" class="btn btn-blue active m-0 mt-3" href="/contact"><i class="fa fa-phone-square"></i>Contactez-nous</a>
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
                <div class="col-lg-3 col-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit8.png" alt="">
                        <h4><a href="{{url('details/germanium')}}">Germanium </a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit2.png" alt="">
                        <h4><a href="{{url('details/indium')}}">Indium </a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit3.png" alt="">
                        <h4><a href="{{url('details/dysprosium')}}">Dysprosium</a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit4.png" alt="">
                        <h4><a href="{{url('details/gallium')}}">Gallium</a></h4>
                    </div>                  
                </div>

                <div class="col-lg-3 col-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit5.png" alt="">
                        <h4><a href="{{url('details/terbium')}}">Terbium</a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit1.png" alt="">
                        <h4><a href="{{url('details/neodyme')}}">Neodyme</a></h4>
                    </div>                  
                </div>

                <div class="col-lg-3 col-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit6.png" alt="">
                        <h4><a href="{{url('details/hafnium')}}">Hafnium</a></h4>
                    </div>                  
                </div>

                <div class="col-lg-3 col-6">
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
                            Des mati??res premi??res indispensables
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
                                    <p>Nucl??aire, G??ochimie</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-featured-wrap d-1400-none display-lg-block">
                                <div class="thumb">
                                    <img style="width: 150px; height:150px;border-radius: 10%;"  src="img/featured/produit10.png" alt="img">
                                </div>
                                <div class="featured-wrap-details">
                                    <h6>Le Prom??thium, utilisation : </h6>
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
                            <p>Tout comme le N??ODYME, le DYSPROSIUM poss??de des propri??t??s fortement magn??tiques. Aussi le DYSPROSIUM fait-il partie des composants d???aimant permanents, qui sont utilis??s dans des g??n??rateurs pour la production d?????lectricit?? et dans les voitures ??lectriques. Il sert d???agent de protection pour les r??acteurs nucl??aires et les lampes ?? ??conomie d?????nergie <br><br>
                                Le dysprosium est la terre rare ???reine???, celle que l???on s???arrache. Gr??ce ?? sa puissance magn??tique, le dysprosium est l?????l??ment clef des aimants permanents de haute technicit??. Ajout?? au n??odyme, le dysprosium permet aux aimants de rester magn??tique.
                                Ce m??tal est ainsi essentiel aux turbines d?????oliennes off-shore et aux voitures electriques. <br> <br>
                                En vertu de ces consid??rations, une forte augmentation de la demande en DYSPROSIUM est ?? pr??voir.
                            </p>
                            <a class="btn btn-blue active m-0 mt-3" href="/details/dysprosium">Lire plus <i class="fa fa-angle-right"></i></a>

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
                    <div class="ps-5 ms-5 wow rollIn">
                        <img src="img/featured/image2.jpeg" alt="img">
    
                    </div>                  
                </div>
                <div  class="col-lg-5 col-md-5 d-none d-md-block align-self-center">
                    <div class="thumb me-5 span3 ">
                        
                        <div class="section-title">
                            <h2 class="title">
                                Neodymium
                                </h2>
                            <p>Le N??ODYME est l???une des seules Terres Rares qui apparaisse dans la liste* ??tablie par la Commission Europ??enne des m??taux class??s, dont l???approvisionnement risque d?????tre probl??matique. S???ajoute ?? cela l???importance du N??ODYME pour de nombreuses technologies futures, la demande mondiale de N??ODYME serait amen??e ?? quadrupler d???ici ?? l???horizon 2030.</p>
                            <br><br>
                            <p>Le N??ODYME est utilis?? surtout pour la fabrication des aimants extr??mement puissants. Ces derniers ont la capacit?? de porter durablement 1.300 fois leur poids. Ils sont utilis??s l?? o?? de forts champs magn??tiques sont n??cessaires en faible quantit??, notamment dans des turbines pour des moteurs ??lectriques hautement performants, dans des microphones ou des haut-parleurs des Smartphones, autrement dit dans les technologies de pointe.</p>

                            <a class="btn btn-blue active m-0 mt-3" href="/details/neodyme">Lire plus <i class="fa fa-angle-right"></i></a>

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
                            <p>Les turbines des centrales ??lectriques de toutes sortes assurent un approvisionnement ??nerg??tique fiable, les turbines des avions permettent des voyages a??riens toujours plus efficaces. Cependant, seuls l'hafnium, le rh??nium et le pras??odymicane peuvent ??tre utilis??s pour construire des turbines r??pondant aux exigences modernes.</p>
                            <a class="btn btn-blue active m-0 mt-3" href="/details/turbine">Lire plus <i class="fa fa-angle-right"></i></a>

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
                            <h4>Tonnes Produites par an</h4>
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
                <div class="col-xl-5 col-lg-6 d-none d-lg-block align-self-top">
                    <div class="thumb me-5 span3 wow rollIn">
                        <img src="https://etimg.etb2bimg.com/photo/89406536.cms" alt="img">
                    </div>
                </div> 
                <div class="col-xl-5 col-lg-5 col-sm-9">
                    <div class="section-title mb-0 pb-5">
                        <h2 class="title">Investir dans l???avenir des m??taux de terres rares ?? Pau</h2>
                        <p>Elio Strategy est une entreprise qui investit dans l???avenir . Nous croyons au potentiel des m??taux des terres rares et nous nous engageons ?? aider nos clients ?? tirer parti de cette industrie en pleine croissance. Notre ??quipe poss??de des ann??es d???exp??rience dans les secteurs de l???exploitation mini??re et de l???investissement, et nous sommes ravis de partager nos connaissances avec vous. Si vous cherchez une soci??t?? qui peut vous aider ?? investir dans les m??taux des terres rares, ne cherchez pas plus loin qu???Elio Strategy !</p>
                        <img src="img/cachet2.png" alt="" srcset=""> <br>
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
    <section>
        <div class="container d-flex justify-content-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nuITGO1FSEY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    <!-- testimonial-Area End-->

    <!-- faq-Area start-->
    <section class="faq-area pd-top-140 pd-bottom-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-sm-10">
                    <div class="section-title mb-0 pb-5 text-center">
                        <h2 class="title">Foire Aux Questions</h2>
                        <p>?? Les terres rares sont ?? la Chine ce que le p??trole est au Moyen-Orient ??
                            ??? Deng Xiaoping ???</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pl-faq-accordion accordion" id="accordionExample">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        
                                       Quelques clefs pour d??crypter les march??s des m??taux
 
                                      </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        Elio Strategy dispose d???une ??quipe de professionnels exp??riment??s et d??vou??s qui connaissent bien le domaine des m??taux des terres rares. Notre ??quipe a une longue exp??rience de r??ussite dans l???industrie, et nous nous engageons ?? investir dans l???avenir de cette ressource essentielle. Notre ??quipe poss??de l???expertise et les connaissances n??cessaires pour prendre les d??cisions les plus ??clair??es lorsqu???il s???agit d???investir dans les m??taux des terres rares, et nous travaillerons sans rel??che pour que nos clients obtiennent le meilleur retour sur investissement. <br>
                                        ??? Des professionnels exp??riment??s et comp??tents. <br>

                                        ??? Engag??s ?? investir dans l???avenir. <br>

                                        ??? Expertise et connaissances pour prendre des d??cisions ??clair??es 
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

                                        Envoyez votre candidature ?? : <a href="mailto:administration@eliostrategy.com">administration@eliostrategy.com</a> ou remplissez le en cliqant <a href="/contact">ici</a>

                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        
                                        Comment nous investissons dans les m??taux des terres rares

                                      </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        L???investissement d???Elio Strategy porte sur l???avenir des m??taux des terres rares. La Chine produit et exporte actuellement plus de 95 % des m??taux de terres rares dans le monde, mais avec les r??centes r??ductions de production, les prix de ces m??taux sont en hausse. C???est donc le bon moment pour investir dans des soci??t??s qui explorent et d??veloppent de nouvelles sources de m??taux de terres rares en dehors de la Chine. <br> <br>
                                        L???investissement d???Elio Strategy dans les m??taux comprend une exposition au germanium, ?? l???indium, au dysprosium, au gallium, au terbium et au n??odyme. Chacun de ces m??taux rares joue un r??le important dans l?????conomie mondiale et Elio Strategy les a identifi??s comme des secteurs de croissance cl??s. En investissant dans ces m??taux, Elio Strategy est en mesure d???offrir ?? ses clients une diversification et un potentiel de hausse ?? long terme. Les recherches de la soci??t?? montrent que ces m??taux continueront d?????tre tr??s demand??s en raison de leurs propri??t??s et applications uniques. Par cons??quent, Elio Strategy estime que son investissement dans ces m??taux rares g??n??rera des rendements importants pour ses clients situ??s ?? Pau.

                                        <img src="img/graphisme-augmentation-me??taux-rares-300x204.png" alt="">
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        

                                       Pour sch??matiser, on peut distinguer deux principaux types de crises :

                                      </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        Les crises li??es ?? l???offre, li??es ?? des interruptions temporaires et conjoncturelles de la production, de nature accidentelle (incidents techniques, al??as climatiques???etc.), ou intentionnelle (ass??chement d??lib??r?? de l???offre, stockages strat??giques ou sp??culatifs, quotas et restrictions ?? l???exportation???).
                                        <br>
                                        Les impacts de tels ??v??nements sur le cours d???un m??tal d??pendent de plusieurs facteurs importants d??taill??s dans les sections pr??c??dentes, notamment le degr?? de concentration de la production, les quantit??s de m??tal utilis?? pour chaque application, l?????ventualit?? de produits de substitution???
                                        <br>
                                        Les hausses les plus spectaculaires sont g??n??ralement constat??es lors des crises li??es ?? la demande, lorsque le m??tal est insubstituable et utilis?? en faible quantit??. En effet, malgr?? les quantit??s faibles mises en jeu par produit, la diffusion massive g??n??re au global une hausse importante et tr??s rapide de la demande, que le syst??me productif est incapable de satisfaire. Pour les industriels, les faibles quantit??s de m??tal incorpor??es par produit font que la hausse, m??me massive du cours, a peu d???influence sur le co??t global du produit. Pour les acheteurs, peu importe donc le prix ?? payer, le v??ritable risque s???av??rant ??tre celui de p??nurie. Ces situations conduisent parfois ?? de v??ritables ph??nom??nes d???emballements, les acheteurs proc??dant alors ?? des achats compulsifs qui alimentent la hausse exponentielle des cours.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        
                                     Le march?? des m??taux et ses principaux facteurs

                                      </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        D??crypter les march??s des m??taux mineurs demande beaucoup de curiosit?? car l??exercice mobilise divers domaines de connaissance. Suivre et comprendre l?????volution du cours d???un m??tal conduit en effet ?? suivre toute une fili??re industrielle : ?? commencer par les projets miniers et leur exploitation, les proc??d??s de raffinage, de m??tallurgies, de substitution, aux travaux de R&D, et enfin aux d??veloppements des fili??res de recyclage??? Une telle diversit?? impose donc beaucoup d???exigence dans le travail d???analyse, mais elle contribue ?? le rendre d???autant plus passionnant. <br>
                                        Cette section propose une vision panoramique des principaux facteurs ?? consid??rer pour ??tudier le march?? des m??taux rares et m??taux critiques, afin de compl??ter ainsi les analyses de l???offre et de la demande pr??sent??es dans les sections pr??c??dentes. Rappelons que chaque m??tal doit faire l???objet d???une analyse fine et compl??te de sa cha??ne d???approvisionnement, car, selon le m??tal consid??r??, les points de fragilit??s peuvent se faire ?? des niveaux tr??s diff??rents. L???analyse doit prendre en compte l???ensemble de la fili??re amont et aval, depuis la ressource min??rale jusqu???au produit fini, et int??grer les activit??s des investisseurs et interm??diaires de march??. <br>
                                        <br>
                                        Le raisonnement propos?? dans cette section s???articule autour de principes fondamentaux et g??n??riques (valables pour tout march??), qu???il compl??te et amende selon les sp??cificit??s importantes des m??taux mineurs d??taill??es dans les sections pr??c??dentes. Pour synth??tiser ces sp??cificit??s importantes ?? consid??rer, on peut citer les points principaux suivants : <br>
                                        <ul>
                                            <li>  
                                                 Les march??s des m??taux mineurs et strat??giques connaissent des volumes d????changes modestes par rapport aux ??changes enregistr??s sur les march??s traditionnels des m??taux industriels. (- de 200 tonnes par an contre + de 19 Million de tonnes pour le cuivre par exemple);
                                            </li>
                                            <li>
                                                Pour la plupart des m??taux mineurs, il n???existe pas de cotation ni de place de march?? officielle ; seul le cobalt et le molybd??ne font figure d???exception car ils sont c??t??s sur le London M??tal Exchange depuis quelques ann??es.

                                            </li>
                                            <li>
                                                La balance entre l???offre et la demande conna??t des d??s??quilibres de nature structurelle : face aux hausses parfois tr??s violentes de la demande, le syst??me productif, sous diverses contraintes, fait preuve d???une grande inertie. L???in??lasticit?? entre l???offre et la demande est d???autant plus grande pour les m??taux qui sont des coproduits ou sous-produits d???autres ressources min??rales.

                                            </li>
                                            <li>
                                                Cons??quence du point pr??c??dent, les situations de crises et les ruptures d???approvisionnement sont relativement fr??quentes et aigu??s sur les march??s des m??taux mineurs et g??n??rent de fortes tensions sur les prix et une forte volatilit??.

                                            </li>
                                        </ul>
                                        <img src="img/blog/truck.jpeg" alt="" srcset="">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                       
                                        Que sont les m??taux des terres rares et pourquoi sont-ils importants ?

                                      </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        Les m??taux des terres rares sont un groupe de 17 ??l??ments qui sont essentiels ?? de nombreux produits de haute technologie. Ils sont utilis??s dans tout, des t??l??phones portables aux voitures ??lectriques, et leur demande ne fera qu???augmenter au fur et ?? mesure des progr??s technologiques. Malheureusement, ils sont ??galement assez rares, ce qui les rend difficiles ?? extraire et ?? traiter. <br> <br>
                                        La bonne nouvelle, c???est que les investisseurs de Pau commencent ?? prendre conscience de l???importance des m??taux de terres rares, et cette industrie offre un potentiel de profits ??normes. Des entreprises comme Elio Strategy investissent dans de nouvelles op??rations mini??res et installations de traitement, ce qui contribuera ?? garantir que nous disposons de suffisamment de m??taux de terres rares pour r??pondre ?? la demande future. Donc, si vous recherchez un investissement avec un grand potentiel de rendement futur, examinez les entreprises impliqu??es dans l???industrie des m??taux des terres rares.
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
       {{-- add a +b --}}

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
                        <form action="{{url('subscribe')}}" method="post">
                            @csrf
                            <input type="text" required name="email" placeholder="Adresse E-mail">
                        <button class="btn btn-black">RECEVOIR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-Area end-->

    <!-- footer area start -->
    <footer class="footer-area text-center" style="background-color: #002c3e;">
        <div class="container">
            <div class="footer-thumb">
                <a href="/">  <img style="height: 80px !important ;width: 90px !important" src="img/logo-blanc2.png" alt="img"></a>
            </div>  
            <div class="widget-footer-link">
                <ul>
                    <li><a href="{{url('/')}}">ACCEUIL</a></li>
                    <li><a href="{{url('about')}}">?? PROPOS </a></li>
                    <li><a href="{{url('/product')}}"">TERRES RARES</a></li>
                    <li><a href="{{url('/contact')}}">CONTACT</a></li>
                    <li><a href="{{url('/mention')}}">MENTIONS L??GALES</a></li>
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
                    <p>?? 2022 ELIO STRATEGY

                        . Tout droits r??serv??s

                          <a href="mailto:contact@eliostrategy.com">contact@eliostrategy.com</a>

                    </p>                        
                </div>              
            </div>
        </div>
    </footer>
    <!-- footer area end -->        
     <!-- cookies consent -->
     <div class="displ-none" id="simple-cookie-consent">
        <div class="cookie-consent-container">
          <div class="cookie-consent-notice">
            <h4>Vos pr??f??rences en mati??re de cookies</h4>
            <hr>
            <p><a style="color: #781cb8" href="/">Elio strategy</a> utilise des cookies pour offrir ?? nos utilisateurs la meilleure exp??rience. Vous pouvez g??rer vos param??tres ci-dessous ou le d??couvrir en lisant notre <a href="#">Politique relative aux cookies</a>.</p>
          </div>
          <div class="cookie-consent-selection">
            <button onclick="return alert('Les cookies sont n??cessaires')"  class="cookie-consent-deny">D??cliner</button>
            <button id="cookie-consent-allow" class="cookie-consent-allow">Autoriser tous les cookies</button>
          </div>
        </div>
      </div>
      
      <a class="float btn btn-blue mt-3" href="/contact">
        <i class="fa fa-book"></i>
        Demande de brochure gratuite
     </a>

     <!--end cookies consent -->
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    
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
    <script>
        $(window).on('load',function(){
           if(localStorage.getItem('cookieconsent', true)){
            document.getElementById("simple-cookie-consent").style.display="none";
           }
        })
        
    </script>
    <script>
        

        (function() {
            if (!localStorage.getItem('cookieconsent')) {
                document.getElementById("simple-cookie-consent").style.display="block";
                document.getElementById('cookie-consent-allow').onclick = function(e) {

                    e.preventDefault();
                    document.getElementById("simple-cookie-consent").style.display="none";
                    localStorage.setItem('cookieconsent', true);
                };
            }
        })();
    
    
    </script>
</body>

</html>