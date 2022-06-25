@extends('_layouts._index')

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
						<div class="title">
							Recevez votre consultation ainsi que notre brochure gratuitement
						</div>
						<form class="text-center">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
								    	<input type="email" class="form-control" placeholder="Nom et Prénom">
								    </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
								    	<input type="email" class="form-control" placeholder="Email">
								    </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
								    	<input type="email" class="form-control" placeholder="Website">
								    </div>
								</div>
							</div>
                            <div class="row">
								<div class="col-md-8">
									<div class="form-group">
								    	<input type="email" class="form-control" placeholder="Téléphone">
								    </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
								    	<select name="" class="form-control" id="">
                                            <option selected value="Recevoir la brochure">Recevoir la brochure</option>
                                            <option value="Demander à être rappelé">Demander à être rappelé</option>
                                            <option value="Aministratif">Aministratif</option>
                                            <option value="Autres">Autres</option>
                                        </select>
								    </div>
								</div>
								
							</div>
						  	<div class="form-group">
							    <textarea class="form-control" placeholder="Message" rows="8"></textarea>
							</div>
						  	
						  	<button type="submit" class="common-btn">ENVOYER LE MESSAGE</button>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
@endsection

	