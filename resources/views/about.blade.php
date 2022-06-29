@extends('_layouts._index')
<link rel="stylesheet" href="{{asset('css/gallery.css')}}">
@section('content')
    
   
	<!--Banner area-->
	<div style="background-image: url(img/banner/uns-header-1.jpg);" class="breadcrumb-area water-effect jquery-ripples">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">A PROPOS</h1>
                        <ul class="page-list">
                            <li><a href="/">Acceuil</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <li>A Propos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--Banner area end-->

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
    <div class="featured-area pd-top-120 bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 offset-xl-1 col-lg-5 align-self-center align-self-xl-start d-none d-lg-block">
                    <div class="thumb me-5 span3 wow rollIn">
                        <img src="img/featured/about.jpg" alt="img">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-8 col-md-10 col-sm-11">
                    <div class="section-title">
                        <h4 class="title">
                            
                            À propos d'Elio strategy
                            </h4>

                            <h5>Le marché des métaux et ses principaux facteurs</h5>
                        <p>
                            <img style="width: 200px; height:200px" src="img/cachet2.png" alt="" srcset=""> <br>
                            Décrypter les marchés des métaux mineurs demande beaucoup de curiosité car l´exercice mobilise divers domaines de connaissance. Suivre et comprendre l’évolution du cours d’un métal conduit en effet à suivre toute une filière industrielle : à commencer par les projets miniers et leur exploitation, les procédés de raffinage, de métallurgies, de substitution, aux travaux de R&D, et enfin aux développements des filières de recyclage… Une telle diversité impose donc beaucoup d’exigence dans le travail d’analyse, mais elle contribue à le rendre d’autant plus passionnant. <br> <br>
                            Cette section propose une vision panoramique des principaux facteurs à considérer pour étudier le marché des métaux rares et métaux critiques, afin de compléter ainsi les analyses de l’offre et de la demande présentées dans les sections précédentes. Rappelons que chaque métal doit faire l’objet d’une analyse fine et complète de sa chaîne d’approvisionnement, car, selon le métal considéré, les points de fragilités peuvent se faire à des niveaux très différents. L’analyse doit prendre en compte l’ensemble de la filière amont et aval, depuis la ressource minérale jusqu’au produit fini, et intégrer les activités des investisseurs et intermédiaires de marché.
                        </p>
                    </div> 
                    <div class="row">
                        
                    </div>                     
                </div>
            </div>
        </div>  
    </div>
	<!-- network-Area Start-->
    
    <!-- network-Area End-->

   
    

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
                    <div class="section-title mb-0 pb-5 text-center">
                        <h2 class="title">Investissez dans le futur</h2>
                        <a href="/contact" class=""><a class="btn btn-blue" href="/contact"><i class="fa fa-book"></i>Demande de brochure gratuite</a></a>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="screenshot-slider slick-carousel ps-4 pe-4">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery start here -->
    
        
        <div class="conatiner mb-5">
            <h2 class="d-flex justify-content-center">
                Des matières premières indispensables
            </h2>
            <main class="lightbox lightbox__content--flow">
                <picture class="card-gobi">
                  <img src="https://cdn.futura-sciences.com/buildsv6/images/mediumoriginal/a/a/e/aae4372f46_84845_album-terre-rare7.jpg" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/neodyme.jpg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/avion-dysp.jpeg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/5ca8cec881_84847_album-terre-rare8.jpg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/e4d775659a_84856_album-terre-rare16.jpg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/terbium.jpg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/520cddb887_84853_album-terre-rare14.jpg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/10795719f7_84855_album-terre-rare17.jpg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/7a06b2d65f_84846_album-terre-rare9.jpg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/3e26eea5b2_84854_album-terre-rare15.jpg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/cbc7d52c96_84843_album-terre-rare3.jpg')}}" alt="">
                </picture>
                <picture class="card-gobi">
                  <img src="{{asset('img/banner/032ca2b67a_84849_album-terre-rare1.jpg')}}" alt="">
                </picture>
              </main>
        </div>


    <!-- end gallery -->
    <!--Screenshot-area end-->

    <!-- testimonial-Area Start-->
    
    <!-- testimonial-Area End-->

    <!-- subscribe-Area Start-->
    <section class="subscribe-area pd-top-140 pd-bottom-150 shape-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 offset-xl-1 col-sm-10 align-self-center">
                    <div class="section-title mb-0 pb-5 text-center text-lg-start">
                        <h2 class="title">Recevez gratuitement notre brochure par email</h2>
                        <p>Vous recevrez des notifications  provénant d'elio strategy</p>
                    </div>
                    <div class="single-subscribe-wrap">
                        <form action="{{url('subscribe')}}" method="post">
                            @csrf
                            <input type="text" required name="email" placeholder="Adresse e-mail">
                        <button class="btn btn-black">RECEVOIR</button>
                        </form>
                        
                    </div>                  
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1 d-none d-lg-block align-self-end">
                    <div class="thumb span3 wow bounceInRight">
                        <img src="img/other/10.png" alt="img">
                    </div>
                </div>
            </div>   
        </div> 
    </section>
    <!-- subscribe-Area end-->
   <script>
            const showImage = document.createElement("div");
        showImage.classList.add("showImage");
        document.body.appendChild(showImage);

        const images = document.querySelectorAll("img");
        images.forEach((image) => {
        image.addEventListener("click", (e) => {
            showImage.classList.add("active");
            const img = document.createElement("img");
            img.src = image.src;
            while (showImage.firstChild) {
            showImage.removeChild(showImage.firstChild);
            }
            showImage.appendChild(img);
        });
        });

        showImage.addEventListener("click", (e) => {
        if (e.target !== e.currentTarget) return;
        showImage.classList.remove("active");
        });

   </script>
	@endsection