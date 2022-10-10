<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=a93ef8d6-8a88-420b-9ff9-955801aba3d5"> </script>
<!-- End of  Zendesk Widget script -->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
       <meta name="keywords" content="westcoast animations, westcoast, animations, animation, , westcoast animation, westcoast logo, westcoast animation style, illustrations, Portfolio, design, creative">

        <!-- Title -->
        <title>Commercial - Westcoast Animations</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/images/icon.png">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="../../css2.css?family=Roboto:wght@300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="../../css2-1.css?family=Poppins:wght@300;400;500;600;700;800&display=swap">
        <!-- Site css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            nav ul, nav ol {
margin: 18px;
list-style: none;
}


.section-home{
  position: relative;
  min-height: 100vh;
  background: url(bg.jpg)no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

.section-home:before{
  content: '';
  position: absolute;
  background: linear-gradient(to top, #23252B, transparent);
  width: 100%;
  height: 80px;
  bottom: 0;
}

.section-home h1{
  color: #fff;
  font-size: 10vw;
  font-weight: 800;
  text-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  opacity: 0.3;
}

.section-two{
  min-height: 100vh;
  background: #23252B;
}

.section-two h2{
  color: #fff;
  font-size: 3em;
  font-weight: 700;
  margin: 30px 0;
}

.section-two p{
  color: #fff;
  font-size: 1em;
  margin: 30px 0;
}

header{
font-family:'Rany-Bold';
  z-index: 999;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
      background-color: #0006 !important;
    opacity: 0.9 !important;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  padding: 0 100px;
  transition: 0.6s;
}

header .logo{
  color: #fff;
  font-size: 1.8em;
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 2px;
}

header .navigation{
  position: relative;
  line-height: 75px;
  transition: 0.6s;
  transition-property: line-height;
}

header.sticky .navigation{
  line-height: 60px;
}

header .navigation .menu{
  position: relative;
  display: flex;
  justify-content: center;
  list-style: none;
  user-select: none;
}

.menu-item > a{
  color: #fff;
  font-size: 1em;
  text-decoration: none;
  margin: 20px;
  padding: 25px 0;
}

.menu-item > a:hover{
  color: #469DFF;
  transition: 0.3s;
}

.menu-item .sub-menu{
  position: absolute;
  background: #23252B;
  top: 74px;
  line-height: 40px;
  list-style: none;
  border-radius: 0 0 8px 8px;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
 /* pointer-events: none; */
  transform: translateY(20px);
  opacity: 0;
  transition: 0.3s;
  transition-property: transform, opacity;
}

header.sticky .menu-item .sub-menu{
  top: 60px;
}

.menu-item:hover .sub-menu{
  pointer-events: all;
  transform: translateY(0);
  opacity: 1;
}

.menu-item .sub-menu .sub-item{
  position: relative;
  padding: 7px 0;
  cursor: pointer;
  box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
}

.menu-item .sub-menu .sub-item a{
  color: #fff;
  font-size: 1em;
  text-decoration: none;
  padding: 15px 30px;
}

.menu-item .sub-menu .sub-item:hover{
  background: #4080EF;
}

.menu-item .sub-menu .sub-item:last-child:hover{
  border-radius: 0 0 8px 8px;
}

.more .more-menu{
  position: absolute;
  background: #23252B;
  list-style: none;
  top: 0;
  left: 100%;
  white-space: nowrap;
  border-radius: 0 8px 8px 8px;
  overflow: hidden;
/*  pointer-events: none; */
  transform: translateY(20px);
  opacity: 0;
  transition: 0.3s;
  transition-property: transform, opacity;
}

.more:hover .more-menu{
  pointer-events: all;
  transform: translateY(0);
  opacity: 1;
}

.more .more-menu .more-item{
  padding: 7px 0;
  box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
  transition: 0.3s;
}

.more .more-menu .more-item:hover{
  background: #4080EF;
}

.menu-btn{
  display: none;
}

@media (max-width: 1060px){
  header .navigation .menu{
    position: fixed;
    display: block;
    background: #23252b;
    min-width: 350px;
    height: 100vh;
    top: 0;
    right: -100%;
    padding: 90px 50px;
    visibility: hidden;
    overflow-y: auto;
    transition: 0.5s;
    transition-property: right, visibility;
  }

  header.sticky .navigation{
    line-height: 75px;
  }

  header .navigation .menu.active{
    right: 0;
    visibility: visible;
  }

  .menu-item{
    position: relative;
  }

  .menu-item .sub-menu{
    opacity: 1;
    position: relative;
    top: 0;
    transform: translateX(10px);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    overflow: hidden;
    display: none;
  }

  header.sticky .menu-item .sub-menu{
    top: 0;
  }

  .menu-item:hover .sub-menu{
    transform: translateX(10px);
  }

  .menu-item .sub-menu .sub-item{
    box-shadow: none;
  }

  .menu-item .sub-menu .sub-item:hover{
    background: none;
  }

  .menu-item .sub-menu .sub-item a:hover{
    color: #4080EF;
    transition: 0.3s;
  }

  .more .more-menu{
    opacity: 1;
    position: relative;
    left: 0;
    transform: translateY(0);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    display: none;
  }

  .more .more-menu .more-item{
    box-shadow: none;
  }

  .more .more-menu .more-item:hover{
    background: none;
  }

  .more .more-menu .more-item a{
    margin-left: 20px;
  }

  .close-btn{
    position: absolute;
    background: url(close.png)no-repeat;
    width: 40px;
    height: 40px;
    background-size: 25px;
    background-position: center;
    top: 0;
    left: 0;
    margin: 25px;
    cursor: pointer;
  }

  .menu-btn{
    background: url(menu.png)no-repeat;
    width: 40px;
    height: 40px;
    background-size: 30px;
    background-position: center;
    cursor: pointer;
    display: block;
  }

  header{
    padding: 15px 20px;
  }

  header.sticky{
    padding: 10px 20px;
  }
}



.hamburger{
display:none;
cursor:pointer;
}
.bar{
display:block;
width:25px;
height:3px;
margin: 5px auto;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
background-color: white;
}

@media(max-width:1060px){
.hamburger{
display:block;
margin-left:90%;
}
.hamburger.active .bar:nth-child(2){
opacity: 0;
}
.hamburger.active .bar:nth-child(1){
transform: translateY(8px) rotate(45deg);
}
.hamburger.active .bar:nth-child(3){
transform: translateY(-8px) rotate(-45deg);
}
.menu{
position:fixed;
left:-100%;
top:70px;
gap:0;
flex-direction: column;
background-color: #262626;
width:100%;
text-align:center;
transition:0.3s;
}
.menu-item.active{
margin:16px 0;
}
.menu.active{
left:0;
}
}   


</style>

        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="portfolio-page work-style2 cursor-effect">

        <!-- ========== Start Cursor ==========

        <div id="cursor">
            <div id="circle"></div>
        </div>
 -->
        <!-- ========== End Cursor ========== -->

         <!-- ========== Start Preloader ========== -->


         <!-- ========== End Preloader ========== -->

        <!-- ========== Start Navbar ========== -->

 <header>
      
      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item"><a href="{{route("index")}}">Home</a></li>
          <!--
          <li class="menu-item">
            <a class="sub-btn" href="#">Dropdown <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="#">Sub Item 01</a></li>
              <li class="sub-item"><a href="#">Sub Item 02</a></li>
              <li class="sub-item"><a href="#">Sub Item 03</a></li>
            </ul>
          </li>
          -->
          
          <li class="menu-item">
            <a class="sub-btn" href="#">Services <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item more">
                <a class="more-btn" href="#">Development <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
              <li class="more-item"><a href="{{route("webdevelopment")}}">Web Development</a></li>
              <li class="more-item"><a href="{{route("appdevelopment")}}">App Development</a></li>
              <li class="more-item"><a href="{{route("software")}}">Software Development</a></li>
                </ul>
              </li>
              <li class="sub-item more">
                <a class="more-btn" href="#">Design <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
              <li class="more-item"><a href="{{route("graphic")}}">Graphics Design</a></li>
              <li class="more-item"><a href="{{route("brand")}}">Brand Identity</a></li>
              <li class="more-item"><a href="{{route("uiux")}}">UI/UX Design</a></li>
                </ul>
              </li>
              <li class="sub-item more">
                <a class="more-btn" href="#">Marketing <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
              <li class="more-item"><a href="{{route("social")}}">Social Media Marketing</a></li>
                </ul>
              </li>
              
              <li class="sub-item more">
                <a class="more-btn" href="#">Animations <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
              <li class="more-item"><a href="{{route("animation2d")}}">2D Animation</a></li>
              <li class="more-item"><a href="{{route("animation3d")}}">3D Animation</a></li>
              <li class="more-item"><a href="{{route("explainer")}}">Explainer</a></li>
              <li class="more-item"><a href="{{("illustration")}}">Illustration</a></li>
              <li class="more-item"><a href="{{route("screencast")}}">Screencast</a></li>
              <li class="more-item"><a href="{{route("logo")}}">Logo Animation</a></li>
              <li class="more-item"><a href="{{route("typography")}}">Typography</a></li>
              <li class="more-item"><a href="{{route("whiteboard")}}">Whiteboard</a></li>
              <li class="more-item"><a href="{{route("commercial")}}">Commercial</a></li>
                </ul>
              </li> 
                                                        <li class="sub-item more">
                <a class="more-btn"  href="{{route("videoediting")}}">Video Editing</a>
              </li> 
            </ul>
          </li>
          <li class="menu-item"><a href="{{route("portfolio")}}">Portfolio</a></li>
          <li class="menu-item"><a href="{{route("whyus")}}">Why Us</a></li>
          <li class="menu-item"><a href="{{route("contact")}}">Contact</a></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>
        <!-- ========== End Navbar ========== -->

        <!-- ========== Start Header ========== -->

        <div style="margin-top:10%;>
            <div class="dl-container">
                <div class="header-content">
                    <p class="subtitle" style="color: white; font-family: Rany-Bold;">Commercial-Portfolio</p>
                    <h1 class="title" style="color: white">Our Best Works</h1>
                </div>
            </div>
        </div>

        <!-- ========== End Header ========== -->

        <div class="content">

            <!-- ========== Start Portfolio Section ========== -->

            <section class="portfolio">
                <div class="container portfolio-container">
                    <div class="portfolio-filter">
                        <div class="filter-wrap d-flex align-items-center">
                            <!--<div class="filter">
                                <button type="button" data-filter="*" class="active">All</button>
                                <button type="button" data-filter=".photography">Photography</button>
                                <button type="button" data-filter=".architecture">Architecture</button>
                                <button type="button" data-filter=".product">Product</button>
                                <button type="button" data-filter=".pen">Pen</button>
                            </div>-->
                        </div>
                    </div>
                    <div style="padding:56.25% 0 0 0;position:relative; z-index:-10;"><iframe src="https://player.vimeo.com/video/715619870?h=16f3a28e60" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script> <br>
                                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/715107489?h=1b4a135adf" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script> <br>
                                                                               <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/721377454?h=cd8b89655d" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script> <br>
                    <!-- Portfolio Items Starts -->
                    <div class="portfolio-content">
                        <div class="grid row">
                            <!-- Portfolio Item Starts -->
                            <!--<div class="grid__item over-hidden architecture col-12 col-md-6">-->
                            <!--    <a class="not-hide-cursor d-block">
                                    <video width="100%" height="100%" style="object-fit: fill; margin-left:1.3%;" controls>
                                        <source src="assets/images/works/t1.mp4" type="video/mp4">
                                        <source src="assets/images/works/t1.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video> 
                                </a> -->
                               <!-- <div class="item-info">
                                    <h5>Architecture</h5>
                                    <a class="cursor-alter" href="project1.html">
                                        <h4>Phone Case</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                          <!--  <div class="grid__item architecture col-12 col-md-6">-->
                            <!--    <a class="not-hide-cursor d-block">
                                    <video width="100%" height="100%" style="object-fit: fill; margin-top:1%;" controls>
                                        <source src="assets/images/works/t2.mp4" type="video/mp4">
                                        <source src="assets/images/works/t2.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a> -->
                              <!--<div class="item-info">
                                    <h5>Architecture</h5>
                                    <a class="cursor-alter" href="project2.html">
                                        <h4>Red Sofa</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                            <!--  <div class="grid__item photography col-12 col-md-6">-->
                              <a class="not-hide-cursor d-block">
                                   <!-- <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/FINAL CHANGES with music.mp4" type="video/mp4">
                                        <source src="assets/images/works/FINAL CHANGES with music.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video> -->
                                      <!-- <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/04.mp4" type="video/mp4">
                                        <source src="assets/images/works/04.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                      <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/05.mp4" type="video/mp4">
                                        <source src="assets/images/works/05.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                      <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/06.mp4" type="video/mp4">
                                        <source src="assets/images/works/06.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>  -->
                                </a>
                               <!-- <div class="item-info">
                                    <h5>Photography</h5>
                                    <a class="cursor-alter" href="project3.html">
                                        <h4>Sleep Walker</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                          <!--  <div class="grid__item product col-12 col-md-6">
                                <a class="not-hide-cursor d-block">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/04.mp4" type="video/mp4">
                                        <source src="assets/images/works/04.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Product</h5>
                                    <a class="cursor-alter" href="project4.html">
                                        <h4>New Sound</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                         <!--   <div class="grid__item photography col-12 col-md-6">-->
                                <!--  <div class="grid__item architecture col-12 col-md-6">
                                    <a class="not-hide-cursor d-block">
                                        <video width="100%" height="100%" style="object-fit: fill;" controls>
                                            <source src="assets/images/works/02.mp4" type="video/mp4">
                                            <source src="assets/images/works/02.mp4" type="video/ogg">
                                            Your browser does not support the video tag.
                                          </video>
                                    </a>
                                  <div class="item-info">
                                        <h5>Architecture</h5>
                                        <a class="cursor-alter" href="project2.html">
                                            <h4>Red Sofa</h4>
                                        </a>
                                    </div>-->
                                </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                            <!--<div class="grid__item pen product col-12 col-md-6">
                                <a class="not-hide-cursor d-block">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/06.mp4" type="video/mp4">
                                        <source src="assets/images/works/06.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Pen | Product</h5>
                                    <a class="cursor-alter" href="project6.html">
                                        <h4>Colorful Pen</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

                        </div>
                    </div>
                    <!-- Portfolio Items Ends -->
                </div>
            </section>

            <!-- ========== End Portfolio Section ========== -->

            <!-- ========== Start Contact Us Section ========== -->


            <!-- ========== End Contact Us Section ========== -->

        </div>

        <!-- ========== Start Footer Section ========== -->

   @include('components.footer')

        <!-- ========== End Footer Section ========== -->

        <!-- ========== Start Scroll To Top Section ========== -->

        <div class="progress-parent">
            <svg class="progress-circle" width="100%" height="100%" viewbox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>

        <!-- ========== End Scroll To Top Section ========== -->

        <!-- ========== Js ========== -->

        <!-- Jquery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <!-- popper -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Libs and Plugins JS -->
		<script src="assets/js/gsap/gsap.min.js"></script>
		<script src="assets/js/gsap/ScrollToPlugin.min.js"></script>
		<script src="assets/js/gsap/ScrollTrigger.min.js"></script>
        <!-- Owl Carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup js -->
        <script src="assets/js/magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="assets/js/isotope.min.js"></script>
        <!-- Preloader -->
        <script src="assets/js/preloader.js"></script>
        <!-- Scroll To Top js -->
        <script src="assets/js/scrolltotop.js"></script>
        <!-- Main custom-->
        <script src="assets/js/custom.js"></script>
         <script type="text/javascript">
    //jquery for toggle dropdown menus
    $(document).ready(function(){
      //toggle sub-menus
      $(".sub-btn").click(function(){
        $(this).next(".sub-menu").slideToggle();
      });

      //toggle more-menus
      $(".more-btn").click(function(){
        $(this).next(".more-menu").slideToggle();
      });
    });

    //javascript for the responsive navigation menu
    var menu = document.querySelector(".menu");
    var menuBtn = document.querySelector(".menu-btn");
    var closeBtn = document.querySelector(".close-btn");

    menuBtn.addEventListener("click", () => {
      menu.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove("active");
    });

    //javascript for the navigation bar effects on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
    </script>
    
                    <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".menu");
    
    hamburger.addEventListener("click", ()=> {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    })

    </script>
    
    </body>

</html>