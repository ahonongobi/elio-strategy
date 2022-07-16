@extends('_layouts._index')
<style>
	/** start here radio button css like a button **/
	.btn_choose_sent input {
  -webkit-appearance: none;
  display: block;
  margin: 10px;
  width: 18px;
  height: 18px;
  border-radius: 12px;
  cursor: pointer;
  vertical-align: middle;
  box-shadow: hsla(0,0%,100%,.15) 0 1px 1px, inset hsla(0,0%,0%,.5) 0 0 0 1px;
  background-color: hsla(0,0%,0%,.2);
      background-image: -webkit-radial-gradient( #fff 0%, #fff 15%, #fff 28%, #fff 70% );
  background-repeat: no-repeat;
  -webkit-transition: background-position .15s cubic-bezier(.8, 0, 1, 1),
    -webkit-transform .25s cubic-bezier(.8, 0, 1, 1);
  outline: none;
}
.btn_choose_sent input:checked {
  -webkit-transition: background-position .2s .15s cubic-bezier(0, 0, .2, 1),
    -webkit-transform .25s cubic-bezier(0, 0, .2, 1);
}
.btn_choose_sent input:active {
  -webkit-transform: scale(1.5);
  -webkit-transition: -webkit-transform .1s cubic-bezier(0, 0, .2, 1);
}



/* The up/down direction logic */

.btn_choose_sent input,
.btn_choose_sent input:active {
  background-position: 0 24px;
}
.btn_choose_sent input:checked {
  background-position: 0 0;
}
.btn_choose_sent input:checked ~ input,
 .btn_choose_sent input:checked ~ input:active {
  background-position: 0 -24px;
}

.btn_choose_sent{
	    background: #EF2D56;
    color: #fff;
    box-shadow: 0 10px 20px rgba(125, 147, 178, .3);
    border: none; 
     border-radius: 3px;
    font-size: 16px;
    line-height: 10px;
    padding:  16px 20px 16px 38px;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    margin-right: 30px;
    transition: all .3s;
    height: auto;
    cursor: pointer;
    position: relative;
    outline: none;
}

.btn_choose_sent input{
    position: absolute;
    left: 0;
    right: 0;
    z-index: 99;
    top: 2px;
}

.btn_choose_sent input:after{
	 position: absolute;
    content: '';
    width: 15rem;
    left: 0;
    right: 0;
    /* background: red; */
    /* z-index: -1; */
    height: 40px;
    top: -10px;
}

.bg_btn_chose_1{
	background-color: #f78968 !important;
}


.bg_btn_chose_2{
	background-color: #4e336fdb !important;
}


.bg_btn_chose_3{
	background-color: #359dcc !important;
}


/*-=p=--=*/




.btn_choose_sent_check_b{
	  background: #EF2D56;
    color: #fff;
    box-shadow: 0 10px 20px rgba(125, 147, 178, .3);
    border: none; 
     border-radius: 3px;
    font-size: 16px;
    line-height: 10px;
    padding:  16px 20px 16px 46px;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    margin-right: 30px;
    transition: all .3s;
    height: auto;
    cursor: pointer;
    position: relative;
    outline: none;
}
/** end start here radio button css like a button **/
</style>
@section('content')
    

	<!--Banner area-->
	<div style="background-image: url(img/banner/place_de_la_bourse.jpeg)" class="breadcrumb-area water-effect jquery-ripples">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">Contactez-nous</h1>
                        <ul class="page-list">
                            <li><a href="index.html">Accueil</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <li>Contactez-nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--Banner area end-->
	
	<div class="contact-page pd-bottom-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 align-self-center">
					<div class="contact-touch">
						<div class="title">
							Numero de téléphone
						</div>
						<span>+33 (0)5 33 89 34 40</span>
						<div class="title">
							Email
						</div>
						<span>contact@eliostrategy.com</span>
						<div class="title">
							Adresse
						</div>
						<span class="mb-0">2 cours du 30 Juillet
                            33000 Bordeaux, France
                            contact@eliostrategy.com</span>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-3">
					<!-- Sectop - Map -->
				    <div class="contact-map">
	              		<div class="embed-responsive embed-responsive-21by9">
	                		<div class="embed-responsive-item d-flex flex-column justify-content-center">
	                  			
                                  <iframe id="mapcanvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.9398901314844!2d-0.5763320842945971!3d44.84315748268725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527da6af0b507%3A0xedf8fe543a8cb0e7!2s2%20Cr%20du%2030%20Juillet%2C%2033000%20Bordeaux%2C%20France!5e0!3m2!1sfr!2sbj!4v1656056739541!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	                  		</div>
	                	</div>
				    </div>
				    <!-- Sectop - Map -->
				</div>
				<div class="col-lg-12">
					<div class="blog-comment-form">
						<span>
							<!-- sucess message -->
							@if(session()->has('success'))
								<div class="alert alert-success">
									{{ session()->get('success') }}
								</div>
							@endif
						</span>
						
						<div class="title">
							Recevez votre consultation ainsi que notre brochure gratuitement
						</div>
						<form action="{{url('contactMessage')}}" method="POST" class="text-center">
							@csrf
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
								    	<input type="text" required name="name" class="form-control" placeholder="Nom et Prénom">
								    </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
								    	<input type="email"  required email="email" name="email" class="form-control" placeholder="Email">
								    </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
								    	<input type="text" name="tel" class="form-control" placeholder="Téléphone">
								    </div>
								</div>
							</div>
                           
							<button type="button" class="btn_choose_sent bg_btn_chose_3 mb-3">
								<input type="radio" checked name="code" value="Recevoir la brochure" />  Recevoir la brochure
							</button>
							  {{-- another --}}
							
							<button type="button" class="btn_choose_sent bg_btn_chose_2 mb-3">
								<input type="radio" name="code" value="Demander à être rappelé" />Demander à être rappelé
							</button>
							<button type="button" class="btn_choose_sent bg_btn_chose_3 mb-3">
								<input type="radio" name="code" value="Aministratif" />  Aministratif
							</button>
							<button type="button" class="btn_choose_sent bg_btn_chose_1 mb-3">
								<input type="radio" name="code" value="Autres" /> Autres
							</button>
						  	<div class="form-group">
							    <textarea class="form-control" name="message" placeholder="Message" rows="8"></textarea>
							</div>
						  	
						  	<button type="submit" class="common-btn">ENVOYER LE MESSAGE</button>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
@endsection

	