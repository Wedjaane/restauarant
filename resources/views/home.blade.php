@extends('layout')
@section('title')
<title>Restaurant </title>
@endsection
   

<!--Body-->
@section('Content')

<div class="hero">
  <div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-lg-10 hero-left">
		    <h1 class="display-4 mb-5"></br>" La vie est un restaurant petit, mauvais et cher.</br> En plus, c'est trop court! "</h1> Woody Allen
		    
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
		    	<li class="border-right">
		    		<span class="lnr lnr-rocket"></span>
		    		<h5>
		    			Livraison rapide
		    		</h5>
		    	</li>
		    	<li class="">
		    		<span class="lnr lnr-leaf"></span>
		    		<h5>
                        Meilleurs plats
		    		</h5>
		    	</li>
		    	
		    </ul>

	    </div>
	   
	</div>
  </div>
</div>		
<!-- Welcome Section -->
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex  align-items-center justify-content-center justify-content-md-end ">
                    <img  src="{{ url('img/hero-2.jpg')}}" /> 
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                
                        <h2>
                            Bienvenue !
                        </h2>
                    </div>
                    <div class="pl-lg-6 ml-md-5">
                        <p>Pure cuisine du terroir de la région du Souss ou l’ambiance chaleureuse et conviviale est mise de l’avant. C’est un endroit où l’on peut se détendre tout en étant libre de laisser sa créativité prendre le contrôle de nos moments.
                            Une expérience axée sur un service personnalisé et courtois. Sans oublier notre menu terroir de saison qui change selon nos arrivages et découvertes. Nous sommes fiers de vous offrir un menu crée entièrement à partir des produits locaux, le tout fait maison par nos passionnés de la cuisine.
                        </p>
                        <h3 class="mt-5">Nos plats</h3>
                        <div class="row">
                            <div class="col-4">
                                <a href="/menu" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ url('img/NEW4.jpg')}}" />
                                    <h6>Salades</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="/menu" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ url('img/tajine.jpg')}}" />
                                    <h6>Tajine</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="/menu" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ url('img/pizaa.jpg')}}"/>
                                    <h6>Pizza</h6>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="/menu" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ url('img/mechoui.jpg')}}"/>
                                    <h6>Mechoui</h6>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="/menu" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ url('img/paella.jpg')}}"/>
                                    <h6>Poissons</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome Section -->		
	<!-- Menu Section -->

    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                       
                        <h2>
                            <a  href="/menu">Menu</a>   
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Petit déjeuner </h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ url('img/SOUSI.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Le Soussi </h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">38.00 DH</h4>
                                </div>
                            </div>
                            <p >Boisson chaude au choix,Miel, Huile , Amlou, Beurre, Confiture, Pain Grillé, Tarafrnout.</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ url('img/breakfast-1.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Omelette au fromage
                                    </h4>
                                    <p>      </br>   </p>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">18.00 DH</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ url('img/DIET.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Le Diet</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">40.00 DH</h4>
                                </div>
                            </div>
                            <p>Boisson chaude au choix,Salade de fruit, Yaourt nature, Pain complet grilles, Beurre light et Confiture sans sucre</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Déjeuner</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ url('img/couscous.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Couscous</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">50.00 DH</h4>
                                </div>
                            </div>
                            <p>Nos couscous sont servis avec tfaya et lben   </br>      </br>     </br>   </p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ url('img/poisson.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Tajine de poissons</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">180.00 DH</h4>
                                </div>
                            </div>
                            <p>1KG</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ url('img/breakfast-1.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>1/4 Poulet Grillé
                                    </h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">45.00 DH</h4>
                                </div>
                            </div>
                            <p>Accompagnement: frites, légumes, riz et soda au choix  </br> </br> </br> </br></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Le Gouter</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ url('img/gouter.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Le Traditionnel</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">30.00 DH</h4>
                                </div>
                            </div>
                            <p>Boisson chaude au choix, Assortiment traditionnel (Msemen, Baghrir, Beignets à la confiture)</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ url('img/harira.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Harira</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">25.00 DH</h4>
                                </div>
                            </div>
                            <p> </br></p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ url('img/goufre.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Gaufre </h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">30.00 DH</h4>
                                </div>
                            </div>
                            <p> banane chocolat </br> </br> </br> </br>  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of menu Section -->			
	@endsection
<!-- footer -->		
