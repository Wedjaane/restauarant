@extends('layout')
@section('title')
<title>A PROPOS </title>
@endsection
@section('content')	
<!-- Reservation Section -->
<div class="container">

<section id="gtco-reservation" class=" section-padding " >
        <div class="row">
            <div class="col-lg-10">
                <div class="section-content  bg-white p-5 shadow">
                   
                            <h5 class="p-3">Passez votre commande </h5>
             
                    <h5>  Veuillez remplir ce formulaire . </h5>
                </br> 
               
                    <form method="GET" name="contact-us" action="/p">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nom Complet">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                           
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Téléphone">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                            </div>
                        </div>
                           <div class="row  ">
                
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="commande" name="commande" placeholder="Commande">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantité">
                            </div>
                            
                        </div>
                            <div class="row  ">
                
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="boisson" name="boisson" placeholder="Boisson ">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="number" class="form-control" id="quantity" name="quantity1" placeholder="Quantité">
                                </div>
                                
                   
                       
                            <div class="col-md-12 form-group">
                                <textarea  class="form-control" id="message" name="message" placeholder="Votre message "></textarea>
                            </div>                
                            <div class="col-md-12 text-center">
                                <button  class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Valider votre commande  </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
</section>

	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="w/bootstrap/popper.min.js"></script>
	<script src="w/bootstrap/bootstrap.min.js"></script>
	<script src="w/select2/select2.min.js "></script>
	<script src="w/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="w/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="w/app.min.js "></script>
</body>
</html>


