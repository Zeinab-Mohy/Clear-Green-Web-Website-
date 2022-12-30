<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clear & Grean</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/clear&grean.css">
</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <nav class="navbar navbar-expand-lg sticky-top ">
        <div class="container">
             <p class="l">Clear & Grean</p> 
          <a class="logo" href="#">
              <img  src="logo3.jpg" alt="logo">
          </a>
          <button class="navbar-toggler" type="button"
           data-bs-toggle="collapse" data-bs-target="#main"
            aria-controls="main" aria-expanded="false" 
            aria-label="Toggle navigation">
            <i class="fa-solid fa-bars" style="color: white;"></i>
          </button>
          <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3 " href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3 " href="#s">SERVICES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="#ws">WORKSHOPS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="#aboutus">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="#ourteam">CONTACT</a>
              </li>
            </ul>
            <div class="box">
                <input type="checkbox" id="check">
                <div class="search-box">
                  <input type="text" placeholder="  Type here...">
                  <label for="check" class="icon">
                    <i class="fas fa-search"></i>
                  </label>
                </div>
              </div>
            <a class="btn btn-primary rounded-pill main-btn" id="login" href="logIn.php">LOGIN</a>
            <a class="btn btn-primary rounded-pill main-btn" style="position: relative;left: 30px;" id="login" href="sign.php">SIGN UP</a>
          </div>
          
        </div>
      </nav>
      <div class="landing"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner"  >
              <div class="carousel-item active">
                <img src="img/e57ce195528ef472074b16552d0440e8.gif" class="d-block w-100" alt="..." >
              </div>
              <div class="carousel-item">
                <img src="img2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img11.jpg" class="d-block w-100" alt="...">      
            </div>
            
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
       </div>
       <div class="features text-center pt-5">
           <div class="container">
               <div class="main-titel position-relative ">
                <i class="fa-solid fa-earth-africa " style="color: aliceblue;width: 1000px;height: 70px;"></i>
                   <h3 style="color: white;" id="s" >Clear & Grean Services</h3>
                   <br>
               </div>
               <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan</p>
               <div class="row">
                   <div class="col-md-6 col-lg-4">
                       <div class="feat">
                        <a class="mt-3 mb-3" style="color: white; text-decoration: none;" href="WaterRefine.html" target="_blank">
                           <div class="icon-holder position-relative ">
                            <img class="ic" src="feature1.png" alt="">
                           </div>
                           <!-- <h4 class="mt-3 mb-3" style="color: white;">Water Refine</h4> -->
                           Water Refine</a>
                       </div>
                       <br>
                       <a class="mt-3 mb-3" style="color: white; text-decoration: none;" href="SavingForest.html" target="_blank">
                       <div class="feat">
                        <div class="icon-holder position-relative ">
                         <img class="ic" src="icon4.png" alt="">
                        </div>
                        <!-- <h4 class="mt-3 mb-3" style="color: white;">Saving Forest </h4> -->
                        Saving Forest</a>
                    </div>
                   </div>
                   <div class="col-md-6 col-lg-4">
                    <div class="feat">
                        <a class="mt-3 mb-3" style="color: white; text-decoration: none;" href="EcoSystem.html" target="_blank">
                        <div class="icon-holder position-relative ">
                         <img class="ic" src="icon2.png" alt="">
                        </div>
                        <!-- <h4 class="mt-3 mb-3" style="color: white;">Eco System</h4> -->
                        Eco System</a>
                    </div>
                    <br>
                    <div class="feat">
                        <a class="mt-3 mb-3" style="color: white; text-decoration: none;" href="WindEnergy.html" target="_blank">
                        <div class="icon-holder position-relative ">
                         <img class="ic" src="icon5.png" alt="">
                        </div>
                        <!-- <h4 class="mt-3 mb-3" style="color: white;">Wind Energy</h4> -->
                        Wind Energy</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feat">
                        <a class="mt-3 mb-3" style="color: white; text-decoration: none;" href="SavingAnimals.html" target="_blank">
                        <div class="icon-holder position-relative ">
                         <img class="ic" src="icon3.png" alt="">
                        </div>
                        <!-- <h4 class="mt-3 mb-3" style="color: white;">Saving Animals</h4> -->
                        Saving Animals</a>
                    </div>
                    <br>
                    <div class="feat">
                        <a class="mt-3 mb-3" style="color: white; text-decoration: none;" href="RecyclingSystem.html" target="_blank">
                        <div class="icon-holder position-relative ">
                         <img class="ic" src="icon6.png" alt="">
                        </div>
                        <!-- <h4 class="mt-3 mb-3" style="color: white;">Recycling System</h4> -->
                        Recycling System</a>
                    </div>
                </div>
                <br>
               </div>
           </div>
       </div>
       <br>
       <br>
       <div class="our-work text-center ">
            <div class="container">
                <div class="main-titel position-relative ">
                    <i class="fa-solid fa-earth-africa " style="color: aliceblue;width: 1000px;height: 70px;"></i>
                    <h3 style="color: white;" id="ws">WorkShops</h3>
                    <br>
                </div>
                <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, s
                    ed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Qui
                     ipsum suspendisse ultrices gravida. Risus commodo viverr
                     a maecenas accumsan</p>
                     <img class="faq col-sm-7 col-lg-7 pb-lg-4" style="float: right;" src="faq-img.png" alt="">
                     <div class="row ">
                     <div class="box p-2">
                        <div class="card" style="width: 18rem;">
                            <img src="work3.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text" style="color: black;">Some quick example text to build on the card ti
                                  tle and make up the bulk of the card's content.</p>
                                  <a class="btn btn-primary rounded-pill main-btn" id="login" href="enrol.html">ENROLL NOW</a>
                            </div>
                     </div>
                </div>
                <div class="box p-2">
                    <div class="card" style="width: 18rem;">
                        <img src="work4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text" style="color: black;">Some quick example text to build on the card ti
                              tle and make up the bulk of the card's content.</p>
                              <a class="btn btn-primary rounded-pill main-btn" id="login" href="enrol.html">ENROLL NOW</a>
                        </div>
                 </div>
            </div>
                </div>
            </div>
       </div>
       
                <div class="stuff pt-5 text-center">
                    <div class="container">
                        <div class="main-titel position-relative ">
                            <i class="fa-solid fa-earth-africa " style="color: aliceblue;width: 1000px;height: 70px;"></i>
                            <h3 style="color: white;"  id="aboutus">About Us</h3>
                            <br>
                        </div>
                        <p class="description text-center mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                             et dolore magna aliqua. Quis ipsum suspendisse ultrices.
                        </p>
                        <div class="col-lg-11">
                            <div class="image " style="float: right; width: 400px; ">
                                <img class="img-fluid"  src="aboutus.jpg" alt="">
                            </div>
                        <div class="col-lg-4 mb-4 text-center text-md-start" style="color: white;">
                           <div class="text">
                               <h4 style="background-color:#2B2A15;">Clear & Grean</h4>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et d
                                   olore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing e
                                       lit, sed do eiusmod tempor incididunt ut labore et dol
                                       ore magna aliqua. Quis ipsum suspeem ipsum dolor sit amet, consectetur adipiscing e
                                       lit,
                                       ore magna aliqua. ndisse uls ipsum suspeem ipsum dolor sit amet, consectetur adipiscing e
                                       lit, sed do eiusmod tempor incididunt ut labore et dol
                                       ore magna aliqua. ndisse trices gravida.</p>
                                    <a class="btn btn-primary rounded-pill main-btn" id="login" href="#">For More</a> 
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-team text-center pb-5 pt-5">
                <div class="container">
                    <div class="main-titel position-relative ">
                        <i class="fa-solid fa-earth-africa " style="color: aliceblue;width: 1000px;height: 70px;"></i>
                        <h3 style="color: white;" id="ourteam">Our Team</h3>
                        <br>
                    </div>
                    <p class="text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, s
                        ed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Qui
                         ipsum suspendisse ultrices gravida. Risus commodo viverr
                         a maecenas accumsan</p>
                    <div class="row" style="color: white;">
                        <div class="col-md-6 col-lg-3">
                            <!-- <div class="box bg-white" >
                                <img class="img-fluid" src="team1.webp" alt="" >
                                <h4 class="p-2 text-light">Professor Elkington</h4>
                                <blockquote style="color: black;">is a world-renowned author, advisor, and entrepreneur who has advocated and promoted sustainability for more than four decades.</blockquote>

                            </div> -->
                            <div class="card" style="width: 18rem;">
                                <img src="team1.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="" style="text-decoration: none;"> <h4 class="p-2 text-light">Professor Elkington</h4></a>
                                  <p class="card-text" style="color: black;">is a world-renowned author, advisor, and entrepreneur who has advocated and promoted sustainability for more than four decades Academic director of the Postgraduate Course.</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- <div class="box bg-white">
                                <img class="img-fluid" src="team2.jpeg" alt="">
                                <h4 class="p-2 text-light">Dr.Antonella Chadha</h4>
                                <blockquote style="color: black;" >is a medical doctor with expertise in clinical pathology, neuroscience, and psychiatric disorders. She is head of stakeholder engagement for Alzheimer’s disease at Biogen.“Women’s Brain Project”,</blockquote>
                            </div> -->
                            <div class="card" style="width: 18rem;">
                                <img src="team2.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                   <a href="" style="text-decoration: none;"> <h4 class="p-2 text-light">Dr.Antonella Chadha</h4></a>
                                  <p class="card-text" style="color: black;">is a medical doctor with expertise in clinical pathology, neuroscience, and psychiatric disorders. She is head of stakeholder engagement for Alzheimer’s disease at Biogen.</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- <div class="box bg-white">
                                <img class="img-fluid" src="Ant.jpg" alt="">
                                <h4 class="p-2 text-light">Anet Jambrak</h4>
                                <blockquote style="color: black;"> is a Professor from the Faculty of Food Technology and Biotechnology of the University of Zagreb,
                                     Croatia. She is also a scientific advisor in food engineering</blockquote>

                            </div> -->
                            <div class="card" style="width: 18rem;">
                                <img src="Ant.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="" style="text-decoration: none;">  <h4 class="p-2 text-light">Anet Jambrak</h4></a>
                                  <p class="card-text" style="color: black;">is a Professor from the Faculty of Food Technology and Biotechnology of the University of Zagreb,
                                    Croatia. She is also a scientific advisor in food engineering</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- <div class="box bg-white">
                                <img class="img-fluid" src="team4.jpg" alt="">
                                <h4 class="p-2 text-light">Dr. Mélon </h4>
                                <blockquote style="color: black;"> Academic director of the Postgraduate Course in Sustanability Transition Management and Climate Emergency;
                                     Professor of Sustainability in Business Law</blockquote>

                            </div> -->
                            <div class="card" style="width: 18rem;">
                                <img src="team4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="" style="text-decoration: none;">  <h4 class="p-2 text-light">Dr. Mélon</h4></a>
                                  <p class="card-text" style="color: black;">Academic director of the Postgraduate Course in Sustanability Transition Management and Climate Emergency;
                                    Professor of Sustainability in Business Law</p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="donate pt-4 pb-4 text-center text-md-start">
                <div class="container">
                    <div class="row" style="color: black;">
                        <div class="col-md-6 col-lg-6">
                                <div class="p">To Become a Part of Change...</div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <a class="btn btn-primary rounded-pill main-btn w-100" id="donatdonate" href="donation.html" target="_blank">Donate Now</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="footer pt-5 pb-5 text-center text-white-50 text-md-start">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="info ">
                                <img src="logo3.jpg" alt="" class="mb-5">
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    , sed do eiusmod tempor incididunt ut lab
                                    ore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                </p>
                                <div class="copyright">
                                    Created By <span>Brain Sight Team</span>
                                    <div style="color: white;"> Team :<br> Zeinab Mohy Tohamy <br>  Eman Mostafa Elsayed</div>
                                    <div>&copy;2022 - <span>Clear & Grean</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="links ">
                                <h3 class="text-white">Links</h3>
                                <div class="list pt-4">
                                    <!-- <li>Home</li>
                                    <li class="pt-4">Services</li>
                                    <li class="pt-4">WorkShops</li>
                                    <li class="pt-4">About Us</li>
                                    <li class="pt-4">Contact</li> -->
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="list-style-type:disc;">
                                        <li class="nav-item">
                                          <a class="nav-link py-lg-1 " href="#">HOME</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link py-lg-1 " href="#s">SERVICES</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link py-lg-1" href="#ws">WORKSHOPS</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link py-lg-1" href="#aboutus">ABOUT US</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link py-lg-1" href="#ourteam">CONTACT</a>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="Aboutus">
                                <h3 class="text-white">About Us</h3>
                                <div class="list pt-4">
                                    <li>Sign In</li>
                                    <li class="pt-4">Register</li>
                                    <li class="pt-4">About Us</li>
                                    <li class="pt-4">Blog</li>
                                    <li class="pt-4">Contact</li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="ContactUs">
                                <h3 class="text-white">Contact Us :</h5>
                                <h6>Watsap Numbers :</h6>
                                <p class="my-2">+021025972355</p>
                                <p class="my-2">+021025972355</p>
                                <h6>Hot Line</h6>
                                <p class="my-2">19011</p>
                                <a class="btn btn-primary rounded-pill main-btn w-100" id="email" href="#" style="color:white ;" >BrainSight@gamil.com</a>
                                    <ul class="d-flex mt-5 list-unstyled gap-4">
                                        <a class="d-block text-light" href="">
                                            <i class="fa-brands fa-facebook fa-lg facebook rounded-circle p-2"></i>
                                        </a>
                                        <a class="d-block text-light" href="">
                                            <i class="fa-brands fa-twitter fa-lg twitter rounded-circle p-2"></i>
                                        </a>
                                        <a class="d-block text-light" href="">
                                            <i class="fa-brands fa-linkedin fa-lg linkedin rounded-circle p-2"></i>
                                        </a>
                                        <a class="d-block text-light" href="">
                                            <i class="fa-brands fa-instagram fa-lg instagram rounded-circle p-2"></i>
                                        </a>
                                        <a class="d-block text-light" href="">
                                            <i class="fa-brands fa-pinterest fa-lg pinterest rounded-circle p-2"></i>
                                        </a> 
                                        <a class="d-block text-light" href="">
                                            <i class="fa-brands fa-youtube fa-lg youtube rounded-circle p-2"></i>
                                        </a>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>