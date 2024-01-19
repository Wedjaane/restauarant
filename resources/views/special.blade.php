@extends('layout')
@section('title')
<title>Special deshies </title>
@endsection
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        img {
            height: 280px;
        }

        body {
            background: hsl(0, 0, 94%);
        }
    </style>
@section('content')
<h1> Nos plats </h1>

<div class="container" > 
 <div class="container-fluid my-5">
        <h3 class="text-center fw-bold display-4 mb-5">Nos Plats <span class="text-danger">Spéciaux</span></h3>
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <img src="{{ url('img/tfaya.jpg')}}"  alt="tfaya" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Tfaya :</h4>
                                    <p> Special pour le  Vendredi </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="{{ url('img/couscous.jpeg')}}" alt="Couscous" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Couscous</h4>
                                    <p> Special pour le  Vendredi </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="{{ url('img/Mechoui.jpg')}}" alt="Mechoui" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Mechoui</h4>
                                    <p>--</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="{{ url('img/Mechoui 1.jpg')}}" alt="Mechoui" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Mechoui</h4>
                                    <p>--</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="{{ url('img/paella.jpg')}}" alt="Paella" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Paellaa</h4>
                                    <p>--</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="{{ url('img/friture.jpg')}}" alt="friture" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Friture Royal </h4>
                                    <p>--</p>
                                </div>
                            </div>
                        </div>
                    </div>
     
                </div>              
                </div>
            </div>
           
        </div>
        <h4>Vous pouvez toujours consulter notre menu pour plus de détails  : <h4>
            <a  href="/menu">Menu</a>
    </div>

    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    </div>
</body>

</html>