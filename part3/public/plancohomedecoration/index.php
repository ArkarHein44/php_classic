
<?php

ini_set('display_errors',1);
require_once "../../sessionconfig.php";

if(authfailed()){
    redirectto('../../signin.php');
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Plannco Home Decoration</title>

    <!-- fav icon -->
    <link rel="icon" href="./assets/img/fav/favicon.png" type="image/png" sizes="16x16">
    
    <!-- bootstrap css1 js1 -->
    <link rel="stylesheet" href="./assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css" type="text/css"/>

    <!-- font awesome css1  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" type="text/css" />

    <!-- jquery ui css1 js1  -->
    <link rel="stylesheet" href="./assets/libs/jquery-ui-1.13.2/jquery-ui.min.css" type="text/css" /> 

    <!-- lightbox2 css1 js1  -->
    <link rel="stylesheet" href="./assets/libs/lightbox2-2.11.4/dist/css/lightbox.min.css" type="text/css" />

    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
</head>
<body>
    <!-- Start Back to top -->
    <div class="fixed-bottom">
        <a href="index.html" class="btn-backtotops">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>    
    <!-- End Back to top  -->

    <!-- start Stick Note  -->
    <div class="sticknotes">
        <a href="javascript:void(0);" class="about">About</a>
        <a href="javascript:void(0);" class="blog">Blog</a>
        <a href="javascript:void(0);" class="news">News</a>
        <a href="javascript:void(0);" class="contact">Contact</a>
    </div>

    <!-- start Stick Note  -->

    <!-- Start Header section  -->
    <header>
        <!-- start nav bar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="index.html" class="navbar-brand text-light mx-3"> 
                <img src="./assets/img/fav/favicon.png" width="70" alt="favicon" />
                <span class="text-uppercase h2 fw-bold mx-2">Plannco </span><span class="h3">HOME DECORATION</span>
            </a>

            <button type="button" class="navbar-toggler navbuttons" data-bs-target="#nav" data-bs-toggle="collapse">

                <div class="bg-light lines1 "></div>
                <div class="bg-light lines2"></div>
                <div class="bg-light lines3"></div>
            </button>

            <div id="nav" class="navbar-collapse collapse justify-content-end text-uppercase fw-bold">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link mx-2 menuitems">Home</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link mx-2 menuitems">About Us</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link mx-2 menuitems">Properties</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link mx-2 menuitems">Servies</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link mx-2 menuitems">Customers</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link mx-2 menuitems">Furniture</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link mx-2 menuitems">Contact</a></li>
                    <li class="nav-item"><a href="../../Logout.php" class="nav-link mx-2 menuitems">Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- end nav bar  -->

        <!-- start banner -->
        <div class="text-light text-center text-md-end banners">
            <h1 class="display-4 bannerheaders">Welcome to <span class="display-3 text-uppercase">Plannco</span>Home Decoration Co.,Ltd</h1>
            <p class="lead bannerparagraphs">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
        <!-- end banner -->
    </header>
    <!-- End Header Section  -->
    

    <!-- Start About Us section  -->
    <section class="py-5 aboutuss">
        <div class="contianer">
            <div class="row">
                <div class="col-sm-6">
                    <img src="./assets/img/users/staffgirl1.png" alt="staffgitl" />
                </div>
                <div class="col-sm-6 text-white">
                    <div class="col-md-12">
                        <h2 class="text-uppercase">Who are We !!!</h2>
                        <div class="lines"></div>
                        <div class="lines"></div>
                        <div class="lines"></div>
                    </div>

                    <h5><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam dolor unde natus excepturi, veritatis earum aliquam in suscipit esse voluptates vitae cumque autem! Iste odio pariatur incidunt in architecto nihil.</i></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti optio officia ipsum, laboriosam ab facilis porro esse adipisci cumque amet, nostrum debitis sint quisquam temporibus explicabo pariatur nesciunt officiis. Aliquid.</p>
                    <a href="javascript:void(0)" class="btn btn-danger rounded-0">Read Me</a>
                </div>
            </div>           
        </div>
    </section>    
    <!-- End About Us Section  -->


    <!-- Start Property section  -->
    <!-- start title -->
    <section>
        <div class="py-5">
            <div class="container-fluid">
                <div class="text-center">
                    <div class="col">
                        <h3 class="titles">Properties</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- end title  -->

        <ul class="list-inline text-center text-uppercase fw-bold">
            <li class="list-inline-item propertylists activeitems" data-filter="all">All<span class="mx-3 mx-md-5 text-muted">/</span></li>
            <li class="list-inline-item propertylists " data-filter="house">House<span class="mx-3 mx-md-5 text-muted">/</span></li>
            <li class="list-inline-item propertylists " data-filter="decoration">Decoration<span class="mx-3 mx-md-5 text-muted">/</span></li>
            <li class="list-inline-item propertylists " data-filter="furniture">Furniture<span class="mx-3 mx-md-5 text-muted">/</span></li>
            <li class="list-inline-item propertylists " data-filter="office">Office<span class="mx-3 mx-md-5 text-muted">/</span></li>
        </ul>

        <div class="container-fluid">
            <div class="d-flex flex-wrap justify-content-center">

                <div class="filters house"><a href="./assets/img/gallery/image1.jpg"  data-lightbox="Property" data-title="Image 1"><img src="./assets/img/gallery/image1.jpg" width="200" alt="image 1" /></a></div>
                <div class="filters house"><a href="./assets/img/gallery/image2.jpg"  data-lightbox="Property" data-title="Image 2"><img src="./assets/img/gallery/image2.jpg" width="200" alt="image 2" /></a></div>
                <div class="filters house"><a href="./assets/img/gallery/image3.jpg"  data-lightbox="Property" data-title="Image 3"><img src="./assets/img/gallery/image3.jpg" width="200" alt="image 3" /></a></div>

                <div class="filters decoration"><a href="./assets/img/gallery/image4.jpg"  data-lightbox="Property" data-title="Image 4"><img src="./assets/img/gallery/image4.jpg" width="200" alt="image 4" /></a></div>
                <div class="filters decoration"><a href="./assets/img/gallery/image5.jpg"  data-lightbox="Property" data-title="Image 5"><img src="./assets/img/gallery/image5.jpg" width="200" alt="image 5" /></a></div>
                <div class="filters decoration"><a href="./assets/img/gallery/image6.jpg"  data-lightbox="Property" data-title="Image 6"><img src="./assets/img/gallery/image6.jpg" width="200" alt="image 6" /></a></div>

                <div class="filters furniture"><a href="./assets/img/gallery/image7.jpg"  data-lightbox="Property" data-title="Image 7"><img src="./assets/img/gallery/image7.jpg" width="200" alt="image 7" /></a></div>
                <div class="filters furniture"><a href="./assets/img/gallery/image8.jpg"  data-lightbox="Property" data-title="Image 8"><img src="./assets/img/gallery/image8.jpg" width="200" alt="image 8" /></a></div>
                <div class="filters furniture"><a href="./assets/img/gallery/image9.jpg"  data-lightbox="Property" data-title="Image 9"><img src="./assets/img/gallery/image9.jpg" width="200" alt="image 9" /></a></div>

                <div class="filters office"><a href="./assets/img/gallery/image1.jpg"  data-lightbox="Property" data-title="Image 10"><img src="./assets/img/gallery/image1.jpg" width="200" alt="image 10" /></a></div>
                <div class="filters office"><a href="./assets/img/gallery/image2.jpg"  data-lightbox="Property" data-title="Image 11"><img src="./assets/img/gallery/image2.jpg" width="200" alt="image 11" /></a></div>
                <div class="filters office"><a href="./assets/img/gallery/image3.jpg"  data-lightbox="Property" data-title="Image 12"><img src="./assets/img/gallery/image3.jpg" width="200" alt="image 12" /></a></div>

                <div class="filters decoration"><a href="./assets/img/gallery/image4.jpg"  data-lightbox="Property" data-title="Image 13"><img src="./assets/img/gallery/image4.jpg" width="200" alt="image 13" /></a></div>
                <div class="filters decoration"><a href="./assets/img/gallery/image5.jpg"  data-lightbox="Property" data-title="Image 14"><img src="./assets/img/gallery/image5.jpg" width="200" alt="image 14" /></a></div>

                <div class="filters house"><a href="./assets/img/gallery/image6.jpg"  data-lightbox="Property" data-title="Image 15"><img src="./assets/img/gallery/image6.jpg" width="200" alt="image 15" /></a></div>
                <div class="filters furniture"><a href="./assets/img/gallery/image7.jpg"  data-lightbox="Property" data-title="Image 16"><img src="./assets/img/gallery/image7.jpg" width="200" alt="image 16" /></a></div>




            </div>
        </div>
    </section>     
    <!-- End Property Section  -->
    

    <!-- Start Adv section  --> 
    <section>
        <div class="py-5 missions">
            <div class="container">
                <div class="row align=items-center">
                    <div class="col-lg-5">
                        <img src="./assets/img/etc/building4.png" class="homeimages fromlefts advimages" alt="building4">
                    </div>
                    <div class="col-lg-7  text-white text-center text-lg-end fromrights advtexts">
                        <h1>Plannco Myanmar</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, modi. Architecto dolores asperiores ex molestias cupiditate numquam! Debitis sint ipsam hic sed, quidem recusandae tempore ex, incidunt maiores nihil at.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>       
    <!-- End Adv Section  -->

    <!-- Start services section  --> 
    <section class="p-4 services">
        <!-- star title  -->
        <div class="container-fluid">
            <div class="text-center mb-3">
                <h3 class="titles text-white">Our services</h3>
                <p class="text-light lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga a qui quos quae aspernatur eveniet, porro perferendis quisquam, officiis recusandae nihil corporis fugit, rem amet earum atque unde necessitatibus quaerat!
                </p>
            </div>
        
        <!-- End title  -->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card border-0 servicecards">
                        <img src="./assets/img/gallery/home1.jpg" alt="image1" />
                        <h5 class="text-white text-uppercase fw-bold p-2 headings">Living Room</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card border-0 servicecards">
                        <img src="./assets/img/gallery/home2.jpg" alt="image2" />
                        <h5 class="text-white text-uppercase fw-bold p-2 headings">Mini Bar</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card border-0 servicecards">
                        <img src="./assets/img/gallery/home3.jpg" alt="image3" />
                        <h5 class="text-white text-uppercase fw-bold p-2 headings">Dining Room</h5>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card border-0 servicecards">
                        <img src="./assets/img/gallery/home4.jpg" alt="image4" />
                        <h5 class="text-white text-uppercase fw-bold p-2 headings">Meeting Room</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card border-0 servicecards">
                        <img src="./assets/img/gallery/home5.jpg" alt="image5" />
                        <h5 class="text-white text-uppercase fw-bold p-2 headings">Bed Room</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card border-0 servicecards">
                        <img src="./assets/img/gallery/home6.jpg" alt="image6" />
                        <h5 class="text-white text-uppercase fw-bold p-2 headings">Party Room</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>       
    <!-- End Services Section  -->

    <!-- Start Client section  -->
    <section class="p-3">
        <div class="container-fluid">
            <!-- star title  -->
                <div class="text-center mb-3">
                    <div class="col">
                        <h3 class="titles">Satisfied Clients</h3>
                        <p class="text-light lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga a qui quos quae aspernatur eveniet, porro perferendis quisquam, officiis recusandae nihil corporis fugit, rem amet earum atque unde necessitatibus quaerat!
                    </p>
                    </div>                    
                </div>
        
            <!-- End title  -->

            <div class="row">
                <div class="col-md-12">
                    <ul class="clientlists">
                        <li><img src="./assets/img/clients/client1.png" alt="client1"></li>
                        <li><img src="./assets/img/clients/client2.png" alt="client2"></li>
                        <li><img src="./assets/img/clients/client3.png" alt="client3"></li>
                        <li><img src="./assets/img/clients/client4.png" alt="client4"></li>
                        <li><img src="./assets/img/clients/client5.png" alt="client5"></li>
                    </ul>
                </div>
            </div>

        </div>
        
    </section>        
    <!-- End Client Section  -->

    <!-- Start Customers section  -->    
    <section class="py-3 customers">
        <div class="col">
            <div class="container-fluid">

            <!-- star title  -->
                <div class="text-center mb-3">
                    <div class="col">
                        <h3 class="titles text-white">What  Customers Say?</h3>
                    </div>                    
                </div>  
            </div>      
            <!-- End title  -->

            <div class="row">

                <div class="col-md-6 mx-auto">
                    <div id="customercarousels" class="carousel" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-bs-target="#customercarousels" data-bs-slide-to="0"></li>
                            <li data-bs-target="#customercarousels" data-bs-slide-to="1"></li>
                            <li data-bs-target="#customercarousels" data-bs-slide-to="2"></li>
                        </ol>                           

                        <div class="carousel-inner">

                            <div class="carousel-item  text-center active">
                                <img class="rounded-circle" src="./assets//img//users/user1.jpg" alt="user1" />
                                <blockquote class="text-light">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolorum assumenda delectus esse nesciunt culpa iusto id perspiciatis alias rerum optio corporis debitis quae, eos distinctio veritatis beatae porro quos.</p>
                                </blockquote>
                                <h5 class="text-white text-uppercase fw-bold mb-3">
                                    Ms. July
                                </h5>

                                <ul class="list-inline">
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                            </div>

                            <div class="carousel-item  text-center">
                                <img class="rounded-circle" src="./assets//img//users/user2.jpg" alt="user2" />
                                <blockquote class="text-light">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolorum assumenda delectus esse nesciunt culpa iusto id perspiciatis alias rerum optio corporis debitis quae, eos distinctio veritatis beatae porro quos.</p>
                                </blockquote>
                                <h5 class="text-white text-uppercase fw-bold mb-3">
                                    Mr.Anton
                                </h5>

                                <ul class="list-inline">
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                            </div>

                            <div class="carousel-item  text-center">
                                <img class="rounded-circle" src="./assets//img//users/user3.jpg" alt="user3" />
                                <blockquote class="text-light">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolorum assumenda delectus esse nesciunt culpa iusto id perspiciatis alias rerum optio corporis debitis quae, eos distinctio veritatis beatae porro quos.</p>
                                </blockquote>
                                <h5 class="text-white text-uppercase fw-bold mb-3">
                                    Ms. Yoon
                                </h5>

                                <ul class="list-inline">
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item mb-5"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                            </div>
                        </div>
                   </div>
                </div>
           
            </div>
        </div>
        
    </section>    
    <!-- End Customers Section  -->

    <!-- Start Quotation section  -->    
    <section>
        <div class="container">
            <div class="quotes">
                <div class="infos">
                    <div class="me-5"><img src="./assets/img/icon/phoneicon.png" class="phoneicons" alt="phoneicon"></div>

                    <div class="text-white">
                        <h2 class="fw-bold text-uppercase">Request A Free Quote</h2>
                        <p class="lead">Get answers and advice from people  you want it from</p>
                    </div>

                    <div><a href="tel:09422042225" class="btn btn-calls">Call Now <i class="fas fa-phone"></i></a></div>

                </div>
            </div>
        </div>
    </section>    
    <!-- End Quotation Section  -->

    <!-- Start Furnicture section  -->    
    <section class="bg-light text-center py-3">
        <div class="container">
            <!-- star title  -->
            <div class="text-center mb-3">
                <div class="col">
                    <h3 class="titles text-dark">Furnicture Services</h3>
                    <p class="lead">ipsum dolor sit amet consectetur adipisicing elit. Alias accusantium magni praesentium sunt laboriosam rem fuga qui consequatur mollitia ducimus sed nemo dolorum accusamus, nobis animi aperiam blanditiis reiciendis vitae!</p>
                </div>                    
            </div>  
             
            <!-- End title  -->

            <div class="row furicons">
                <div class="col-md-4">
                    <img src="./assets/img/icon/services1.png" alt="services1" />
                    <h4>Fast Service</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                
                <div class="col-md-4">
                    <img src="./assets/img/icon/services2.png" alt="services2" />
                    <h4>Secure payments</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="col-md-4">
                    <img src="./assets/img/icon/services3.png" alt="services3" />
                    <h4>Expert  team</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="col-md-4">
                    <img src="./assets/img/icon/services4.png" alt="services4" />
                    <h4>Affordable services</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="col-md-4">
                    <img src="./assets/img/icon/services5.png" alt="services5" />
                    <h4>90 Days warranty</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="col-md-4">
                    <img src="./assets/img/icon/services6.png" alt="services6" />
                    <h4>Award  winning</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

            </div>
        </div>
    </section>    
    <!-- End Furnicture Section  -->

    
    <!-- Start Contact section  --> 
    <section class="p-5 contacts">
        <div class="container-fluid">
            <div class="col-md-5">
                <h5 class="display-4 mb-3">Get New 
                Letter</h5>
                <form action="" method="">
                    <div class="form-group py-4">
                        <input type="text" name="name" id="name" class="form-control p-3 inputs" placeholder="Enter your name" autocomplete="off"/>
                        <label for="name" class="labels">Name</label>
                    </div>


                    <div class="form-group py-4">
                        <input type="email" name="email" id="email" class="form-control p-3 inputs" placeholder="Enter your email" autocomplete="off"/>
                        <label for="email" class="labels">Email</label>
                    </div>

                    <div class="my-5">
                        <div class="form-check form-switch">
                            <input type="checkbox" name="accept" id="accept" class="form-check-input">
                            <label for="accept" class="text-light">I agree to get push notify</label>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="button" class="btn text-uppercase fw-bold rounded-0 submit-btns">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>        
    </section>       
    <!-- End Contact Section  -->

    <!-- Start Footer section  -->
    <footer class="bg-dark px-5">
        <div class="container-fluid">
            <div class="row text-white  py-4">
                <div class="col-md-3 col-sm-6">
                    <h5 class="mb-3"><img src="./assets/img/fav/favicon.png" width="70" alt="footericon" />About Plannco</h5>
                    <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate qui, hic nostrum, totam tenetur mollitia accusantium consectetur vitae sapiente voluptatem adipisci, rem minus error accusamus similique voluptates magni officiis ad!</p>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h5 class="mb-3">Visit Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="javascript:void(0)" class="footerlinks">Home</a></li>
                        <li><a href="javascript:void(0)" class="footerlinks">About</a></li>
                        <li><a href="javascript:void(0)" class="footerlinks">Properties</a></li>
                        <li><a href="javascript:void(0)" class="footerlinks">Services</a></li>
                        <li><a href="javascript:void(0)" class="footerlinks">Customers</a></li>
                        <li><a href="javascript:void(0)" class="footerlinks">Furnicture</a></li>
                        <li><a href="javascript:void(0)" class="footerlinks">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h5 class="mb-3">Need Help?</h5>
                    <ul class="list-unstyled">
                        <li><a href="javascript:void(0)" class="footerlinks">Customer service</a></li>
                        <li><a href="javascript:void(0)" class="footerlinks">Online Chat</a></li>
                        <li><a href="javascript:void(0)" class="footerlinks">Support</a></li>
                        <li><a href="javascript:void(0)" class="footerlinks">info@plannco.com</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h5 class="mb-3">Contact us</h5>
                    <ul class="list-unstyled">
                        <li><a href="javascript:void(0)" class="nav-link">1-9719(A),60 Street,Between Theik Pan Street And, Aung</a></li>
                       
                        <li><a href="javascript:void(0)" class="nav-link">Phone: +95 9 4220 42225 / +95 9 4220 42242</a></li>
                    </ul>
                </div>
            </div>

            <div>
                <div class="text-light d-flex justify-content-between border-top pt-4">
                   <p>&copy; <span id="getyear">2000</span> Copyright, Inc,All rights reserved</p>

                    <ul class="list-unstyled d-flex">
                        <li><a href="javascript:void(0)" class="nav-link"><i class="fab fa-twitter"></i></a></li>
                        <li class="ms-3"><a href="javascript:void(0)" class="nav-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="ms-3"><a href="javascript:void(0)" class="nav-link"><i class="fab fa-facebook"></i></a><li>                       
                    </ul>
                </div>           
            </div>

        </div>

    </footer>
    <!-- End Footer Section  -->


    <!-- bootstrap css1 js1  -->
    <script src="./assets/libs/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>

    <!-- jquery js1  -->
    <script src="./assets/libs/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>

    <!-- jquery-ui css1 js1  -->
    <script src="./assets/libs/jquery-ui-1.13.2/jquery-ui.min.js" type="text/javascript"></script>

    <!-- lightbox2 css1 js1  -->
    <script src="./assets/libs/lightbox2-2.11.4/dist/js/lightbox.min.js" type="text/javascript"></script>

    <!-- custom js  -->
    <script src="./js/app.js" type="text/javascript"></script>
    
</body>
</html>

<!-- 9SV -->
<!-- 15ST -->
<!-- 15OT -->