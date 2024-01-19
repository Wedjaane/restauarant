<!DOCTYPE html>

<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ url('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{ url('owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('style.min.css')}}">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    @livewireStyles
</head>
<body data-spy="scroll" data-target="#navbar">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	
</div>	
	
 	
	<div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg bg-info fixed-top ">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="{{ url('img/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/h">A propos</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link " href="/s" >plats spéciaux  </a>
                        
                    </li>
                </div>
            </ul>
            
            <a class="navbar-brand navbar-brand-center d-flex align-items-center  only-desktop" href="#">
                <img src="{{ url('img/logo.png')}}" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="/menu">Menu</a>
                    </li>
                   

                    <li class="nav-item ">
                        <a class="nav-link" href="/cc">Passez commande </a>
                    </li>
                </div>
               
            </ul>
        </div>
    </div>
</nav>		

<!--Body-->

@yield('Content')
	
<!-- footer -->	
	
<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container border-1">
         <div class="row">
         
         	<div class="col-lg-4">
         		<div class="footer-widget px-lg-8 px-0">
         			<h4>Heures d’ouverture </h4>
	         		<ul class="list-unstyled open-hours">
		                <li class="d-flex justify-content-between"><span>Lundi –- Vendredi</span><span>8:00 - 23:00</span></li>
		                <li class="d-flex justify-content-between"><span>Samedi</span><span>8:00 - 00:00</span></li>
		                <li class="d-flex justify-content-between"><span>Dimanche</span><span>8:00 - 00:00</span></li>
		              
		              </ul>
         		</div>
         		
         	</div>

         	<div class="col-lg-4">
         		<div class="footer-widget pl-lg-5 pl-0">
         			<h4>A PROPOS</h4>
	         		<p>+212 661-691-346 </br>
                        contact@restodino.com </br>
                        Route taghazout après cimenterie Anza, tournez à gauche 80000 Anza, Agadir, Maroc</p>
	         		
         		</div>
         		
         	</div>
             <div class="col-lg-4">
                <div class="footer-widget ">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d110102.5217211158!2d-9.678410621473251!3d30.416144509334888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d30.3730424!2d-9.5562226!4m5!1s0xdb3b3c510ff126f%3A0x7aacc0d0639ec253!2srestaurant%20anza!3m2!1d30.457901!2d-9.665759999999999!5e0!3m2!1sfr!2sma!4v1642783459974!5m2!1sfr!2sma" width="445" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    
                </div>
                
            </div>
         	
            
        </div>
    </div>
</footer>	
</div>

	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="{{ url('bootstrap/popper.min.js')}}"></script>
	<script src="{{ url('bootstrap/bootstrap.min.js')}}"></script>
	<script src="{{ url('select2/select2.min.js')}} "></script>
	<script src="{{ url('owlcarousel/owl.carousel.min.js')}}"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="{{ url('stellar/jquery.stellar.js')}}" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="{{ url('app.min.js')}} "></script>

    @livewireScripts
</body>
</html>
