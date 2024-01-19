@extends('layout')
@section('title')
<title>Passez voytre commande </title>
@endsection

<!-- Reservation Section -->
@section('content')

<section id="gtco-reservation" class=" section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="section-content  bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            <h2>Passez votre commande </h2>
                    </span>
             </div>
                    <h5>  Veuillez remplir ce formulaire . </h5>
                </br> 
                    
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nom Complet">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Téléphone">
                            </div>
                          

                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" placeholder="horaire" />
                                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-clock"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <select class="form-control" id="selectPlat"  >
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                 
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Votre adresse..."></textarea>
                            </div>
                            
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Valider la commande</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection
	