<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark purple fixed-top scrolling-navbar">
        <a class="navbar-brand" href="#">Fland</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <button class="btn btn-sm align-middle btn-outline-white" type="button">Try for Free</button>
            </li>
            <li class="nav-item">
                <a href="/login"><button class="btn btn-sm align-middle btn-outline-white" type="button">Login</button></a>

            </li>
        </ul>
        </div>
    </nav>
    <!--/.Navbar -->

    <div class="container-sm" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-5">
                <div class="card" style="">
                    <form action="" method="post">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend" style="border-radius: 0px;">
                              <span class="input-group-text" id="addon-wrapping" style="border-radius: 0px; border-right: none; background-color: #fff;"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" style="border-radius: 0px; border-left: none; outline: 0 none; border-color: #d8d3d3; box-shadow: none;">
                          </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6">
                <h2>Introducing Video Consultations.
                    Don’t delay your health concerns.</h2>
            </div>
        </div>
        <div class="">
            <div class="row no-gutters" style="margin-top: 20px;">
                <div class="col-md-6 col-6">
                    <div class="card" style="margin-right:5px;">
                        <div class="row no-gutters" style="">
                            <div id="imagesforcardhomepage" class="col-md-4" style="background-color: black; border-radius: 5px 5px 5px 5px;">
    
                            </div>
                            <div class="col-md-8" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                <div>
                                    <div style="margin: 0px 0px 0px 15px;">
                                        <i id="cardTitle" style="font-style: normal; font-weight: bold;">Find Doctors near you</i>
                                        <i id="desktoponlycardtext" style="font-style: normal; font-size: 13px;">Select prefered doctor and time slot to book an in-clinic or video consiltation</i><br>
                                        <i id="mobileonlycardtext" style="font-style: normal; font-size: 13px;">Book video or in-clinic Appointeds.</i><br>
                                    </div>
                                    <button id="btn-desktop" class="btn btn-primary btn-sm">Find doctors now <i class="fas fa-angle-right"></i></button>
                                    <a href="#" id="btn-mobile" style="margin: 0 auto;">Find doctors now <i class="fas fa-angle-right"></i></a>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="card" style="margin-left: 5px;">
                        <div class="row no-gutters">
                            <div id="imagesforcardhomepage" class="col-md-4" style="background-color: rgb(184, 30, 171); border-radius: 5px 5px 5px 5px;">
    
                            </div>
                            <div class="col-md-8" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                <div>
                                    <div style="margin: 0px 0px 0px 15px;">
                                        <i id="cardTitle" style="font-style: normal; font-weight: bold;">Find Doctors near you</i>
                                        <i id="desktoponlycardtext" style="font-style: normal; font-size: 13px;">Select prefered doctor and time slot to book an in-clinic or video consiltation</i><br>
                                        <i id="mobileonlycardtext" style="font-style: normal; font-size: 13px;">Book video or in-clinic Appointeds.</i><br>
                                    </div>
                                    <button id="btn-desktop" class="btn btn-primary btn-sm">Find doctors now <i class="fas fa-angle-right"></i></button>
                                    <a href="#" id="btn-mobile" style="margin: 0 auto;">Find doctors now <i class="fas fa-angle-right"></i></a>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: purple; margin-top: 50px;">
        <div class="container">
            <!-- Card deck -->
            <div class="card-deck">

                <!-- Card -->
                <div class="card mb-4 shadow-none" style="margin-top: 50px; background: transparent; border: none;">
            
                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                    alt="Card image cap">
                    <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            
                <!--Card content-->
                <div class="card-body">
            
                    <!--Title-->
                    <h4 class="card-title text-white">Card title</h4>
                    <!--Text-->
                    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-white btn-md">Read more</button>
            
                </div>
            
                </div>
                <!-- Card -->
            
                <!-- Card -->
                <div class="card mb-4 shadow-none" style="margin-top: 50px; background: transparent; border: none;">
            
                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
                    alt="Card image cap">
                    <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            
                <!--Card content-->
                <div class="card-body">
            
                    <!--Title-->
                    <h4 class="card-title text-white">Card title</h4>
                    <!--Text-->
                    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-white btn-md">Read more</button>
            
                </div>
            
                </div>
                <!-- Card -->
            
                <!-- Card -->
                <div class="card mb-4 shadow-none" style="margin-top: 50px; background: transparent; border: none;">
            
                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
                    alt="Card image cap">
                    <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            
                <!--Card content-->
                <div class="card-body">
            
                    <!--Title-->
                    <h4 class="card-title text-white">Card title</h4>
                    <!--Text-->
                    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-white btn-md">Read more</button>
            
                </div>
            
                </div>
                <!-- Card -->
            
            </div>
            <!-- Card deck -->
        </div>

    </div>

    <div style="background-color: #fff;">

        <div class="container">
            <div class="row">
                <div class="col-md-4" style="height: 300px; display: flex; flex-direction: center; align-items: center;">
                    <div>
                        <i style="font-style: normal; font-size: 25px; font-weight: bold;">Read top articles from health experts</i><br>
                        <i>Health articles that keep you informed about good health practices and achieve your goals.</i><br>
                        <button class="btn btn-primary">See all articles</button>
                    </div>
                </div>
                <div class="col-md-8" style="">

                    <!-- Card deck -->
                    <div class="card-deck">

                        <!-- Card -->
                        <div class="card mb-4 shadow-none" style="margin-top: 20px; border: none;">
                    
                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                            alt="Card image cap">
                            <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    
                        <!--Card content-->
                        <div class="card-body">
                    
                            <!--Title-->
                            <h4 class="card-title">Post title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    
                        </div>
                    
                        </div>
                        <!-- Card -->
                    
                        <!-- Card -->
                        <div class="card mb-4 shadow-none" style="margin-top: 20px; border: none;">
                    
                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
                            alt="Card image cap">
                            <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    
                        <!--Card content-->
                        <div class="card-body">
                    
                            <!--Title-->
                            <h4 class="card-title">Post title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    
                        </div>
                    
                        </div>
                        <!-- Card -->
                    
                        <!-- Card -->
                        <div class="card mb-4 shadow-none" style="margin-top: 20px; border: none;">
                    
                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
                            alt="Card image cap">
                            <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    
                        <!--Card content-->
                        <div class="card-body">
                    
                            <!--Title-->
                            <h4 class="card-title">Post title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    
                        </div>
                    
                        </div>
                        <!-- Card -->
                    
                    </div>
                    <!-- Card deck -->

                </div>
            </div>
        </div>
    </div>
    <hr style="width: 90%;">

    <style>
        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev{
            display:block;
        }
    </style>

    <div>
        <div class="container-fluid" style="height: 200px;">
            <div style="display: flex; align-items: center; justify-content: center;">
                <i style="font-style: normal; font-size: 25px; font-weight: bold; text-align: center;">What our users have to say</i>
            </div>
            <div class="container">
                <div id="carouselContent" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active text-center p-4">
                            <div id="testimonialscarousel" style= "margin: 0 auto;">
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content..
                                </p>
                                <i><i class="fas fa-user-circle"></i> name name name</i>
                            </div>
                        </div>
                        <div class="carousel-item text-center p-4">
                            
                            <div id="testimonialscarousel" style="margin: 0 auto;">
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content..
                                </p>
                                <i><i class="fas fa-user-circle"></i> name name name</i>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                        {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                        <i class="fas fa-angle-left" style="color: black;"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                        {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                        <i class="fas fa-angle-right" style="color: black;"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px;">
        <!-- Footer -->
        <footer class="page-footer font-small purple pt-4">

            <!-- Footer Text -->
            <div class="container-fluid text-center text-md-left">
        
            <!-- Grid row -->
            <div class="row">
        
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
        
                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold">Footer text 1</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil
                    repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae
                    harum esse fugiat. Itaque, culpa?</p>
        
                </div>
                <!-- Grid column -->
        
                <hr class="clearfix w-100 d-md-none pb-3">
        
                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">
        
                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum
                    commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id
                    excepturi hic.</p>
        
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
            </div>
            <!-- Footer Text -->
        
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> fland.com</a>
            </div>
            <!-- Copyright -->
  
        </footer>
        <!-- Footer -->
    </div>



    

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
</body>
</html>