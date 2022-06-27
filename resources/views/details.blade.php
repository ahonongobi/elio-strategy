@extends('_layouts._index')

@section('content')
<!--Banner area-->
<div style="background-image: url({{asset('img/banner/'.$banner)}})" class="breadcrumb-area water-effect jquery-ripples">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="page-title">{{{$metal ?? ""}}}</h1>
                    <ul class="page-list">
                        <li><a href="/">Acceuil</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li><a href="">{{{$metal ?? ''}}}</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner area end-->

<div class="single-blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="thumb">
                    <img src="{{asset('img/blog/'.$img)}}" alt="blog">
                </div>
                <div class="single-blog-post px-0">
                    
                    <h2 class="title"><a href="">SES PROPRIÉTÉS</a></h2>
                    <div class="blog-meta">
                        
                    </div>
                    <p>{{$property ?? ""}}</p>

                    <h2 class="title"><a href="">SITUATION & PERSPECTIVES</a></h2>
                    <div class="blog-meta">
                        
                    </div>
                    <p>{{$situation ?? ""}} </p>

                    <h2 class="title"><a href="">SES APPLICATIONS</a></h2>
                    <div class="blog-meta">
                        
                    </div>
                    <p>
                        {{$application ?? ""}}
                         </p>
                    <blockquote class="blockquote">
                         <p class="mb-0">{{$history ?? ""}}</p>
                          <footer class="text-end">Son histoire</footer>
                    </blockquote>
                    
                    
                    
                </div>
            </div>
            <!--Widget-area-->
            <div class="col-lg-4 ps-4">
                
                <div class="widget widget-category">
                    <h4 class="widget-title">Metaux rares</h4>
                    <ul class="widget-list">
                          <li><a href="/details/germanium">Germanium  <span></span></a></li>
                          <li><a href="/details/indium">Indium   <span></span></a></li>
                          <li><a href="/details/dysprosium">Dysprosium <span></span></a></li>
                          <li><a href="/details/gallium">Gallium  <span></span></a></li>
                          <li><a href="/details/terbium">Terbium<span></span></a></li>
                          <li><a href="/details/neodyme">Neodyme<span></span></a></li>
                      </ul>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
@stop

