@extends('_layouts._index')

   @section('content')

	<!--Banner area-->
	<div style="background-image: url(img/banner/anwendung-header.jpg);" class="breadcrumb-area water-effect jquery-ripples">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">PRODUITS</h1>
                        <ul class="page-list">
                            <li><a href="index.html">Acceuil</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <li>produits</li>
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
                        <h4><a href="{{url('details')}}">Germanium </a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit2.png" alt="">
                        <h4><a href="about.html">Indium </a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit3.png" alt="">
                        <h4><a href="about.html">Dysprosium</a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit4.png" alt="">
                        <h4><a href="about.html">Gallium</a></h4>
                    </div>                  
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit5.png" alt="">
                        <h4><a href="about.html">Terbium</a></h4>
                    </div>                  
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit1.png" alt="">
                        <h4><a href="about.html">Neodyme</a></h4>
                    </div>                  
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit6.png" alt="">
                        <h4><a href="about.html">Hafnium</a></h4>
                    </div>                  
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-intro-wrap">
                        <img class="" style="width: 80px; height:80px;" src="img/featured/produit7.png" alt="">
                        <h4><a href="about.html">Praseodymium</a></h4>
                    </div>                  
                </div>
            </div>
        </div>      
    </section>
    
	<!-- network-Area Start-->
    
    <!-- network-Area End-->

   
    



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
                        <input type="text" placeholder="Adresse e-mail">
                        <button class="btn btn-black">SOUSCRIRE</button>
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
    @stop
    