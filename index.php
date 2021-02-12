<?php
  require("front/message.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="user-scalable=no,initial-scale=1.0,width=device-width,width=1.0" >
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
  <!--Font-->
  <link rel="stylesheet" type="text/css" href="./index.css">
</head>

<body>

<!--Message-->
<?php
if($_SESSION !=null ){
  if(isset($_SESSION['msg'])){

    print_r($_SESSION['msg']);
    $_SESSION = null;
    session_destroy();

  }
}
?>
<!--Message end-->

<div class="menu">
  <span></span>
  <span></span>
  <span></span>
</div>
<header>
  
  <img src="img/Uniki-logo.png" class="logo">

  <nav>
    <li>
      <a id="intro_Link" href="#intro">Home</a>
    </li>
    <li>
      <a id="event_Link" href="#event">Events</a>
    </li>
    <li>
      <a id="Menu_Link" href="#Menu">Menu</a>
    </li>
    <li>
      <a id="contact_Link" href="#contact">Contact</a>
    </li>
    <li>
      <a id="About_Link" href="#About">About</a>
    </li>
  </nav>


</header>

  <div class="container-fluid banner" id="banner" >
    <div class="banner_inner">
      <div class="logo">
        <img src="img/Logo sm.png" width="300px" height="300px">
        <div class="text">
          <p class="lead" >
            <h2 class="featurette-header text-center text-dark" >Let's Feed Your Cravings</h2>
          </p>
        </div>   
      </div>
    </div>
  </div>

  <section id="intro" class="container-fluid" >
    <div  class="container">
      
      <div class="row">
        <div class="col-md-1"></div>

        <div class="col-md-6">
          <h1 class="text-warning"  align="center" >
            Uniki Foods
          </h1>
            <h3 class="text-warning" ><small>Why We Exist</small></h3>
          <p class="lead" >
            Food is a basic need but eating same meals everyday it is not a need. 
            We exist because we are passionate at feeding your cravings anywhere and anytime of the day with tasty meals that are on the menu.
          </p>
          <ul class="services" >
            <li> <i class="fa fa-check fa-md text-warning" ></i> We cater for public events</li>
            <li> <i class="fa fa-check fa-md text-warning" ></i> We cater for private functions</li>
            <li> <i class="fa fa-check fa-md text-warning" ></i> Cooperate function</li>
            <li> <i class="fa fa-check fa-md text-warning" ></i> We serve breakfast, lunch and dinner for students who don’t have time to cook or who cannot cook</li>
          </ul>
        </div>
        <div class="col-md-4">
          <div class="carousel slide" data-ride="carousel" data-interval="3500" id="Intro_carousel" >
            <div class="carousel-inner">

              <div class="carousel-item active bg-light">
                <img src="img/Logo sm.png" width="100%" height="300px" >
              </div>

              <div class="carousel-item">
                <img src="img/img27.jpg" width="100%" height="300px">
                <div class="container">
                  <div class="carousel-caption">
                    <h4 align="center" >
                      Uniki Foods <i>(Breakfast)</i>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img15.jpg" width="100%" height="300px">
                <div class="container">
                  <div class="carousel-caption">
                    <h4 align="center" >
                      Uniki Foods <i>(LUNCH)</i>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/res04.jpg" width="100%" height="300px">
                <div class="container">
                  <div class="carousel-caption">
                    <h4 align="center" >
                      Uniki Foods <i>(Dinner)</i>
                    </h4>
                  </div>
                </div>
              </div>

            </div>
             <a class="carousel-control-prev" href="#Intro_carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#Intro_carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>

        <div class="col-md-1"></div>
      </div>

    </div>
  </section>

  <!--Servings & services-->

  <div id="Services" class="container-fluid carousel slide Serve" data-ride="carousel" data-interval="3500">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/img9.jpg" width="100%" height="400px" >
        <div class="container">
          <div class="carousel-caption">
            <h4 align="center" >
              What We Serve <i class="fa fa-disk fa-md" ></i>
            </h4>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/img22.jpg" width="100%" height="400px" >
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div> 
      </div>

      <div class="carousel-item">
        <img src="img/res02.jpg" width="100%" height="400px" >
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div> 
      </div>

      <div class="carousel-item">
        <img src="img/img21.jpg" width="100%" height="400px" >
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div> 
      </div>

      <div class="carousel-item">
        <img src="img/img29.jpg" width="100%" height="400px" >
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div> 
      </div>
    </div>
     <a class="carousel-control-prev" href="#Services" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#Services" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--/Servings & services end-->
  <!--Events-->
  <section class="paralax" id="event" >
    <div class="inner_para">
      <div class="container">
        <hr class="featurette-divider" >
        <div class="row featurette">
          <div class="col-md-6">
            <div class="col-md">
              <p class="lead" >
                <h4 class="featurette-header text-warning text-center" >This is How We've been Feeding your cravings</h4>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            
            <div class="container">
              
              <div class="carousel slide" data-ride="carousel" data-interval="4500" id="Event_carousel">
                <div class="carousel-inner">
                  <!--Event Item 1-->
                  <div class="carousel-item bg-dark active">
                    <img src="img/img23.jpg" width="100%" height="320px">
                    <!--Event item Caption-->
                    <div class="container">
                      <div class="carosuel-caption bg-dark text-light text-center">
                        <p>
                          IKAMVA YOUTH EBONY PARK Branch.
                          <br>
                          Tutor Appreciation 2018
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--Event Item 2-->
                  <div class="carousel-item bg-dark">
                    <img src="img/img13.jpg" width="100%" height="320px">
                    <!--Event item Caption-->
                    <div class="container">
                      <div class="carosuel-caption bg-dark text-light text-center">
                        <p>
                          KLIVEN's HOUSE ACCOMMODATION.
                          <br>
                          2018 Weekend Market
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--Event Item 3-->
                  <div class="carousel-item bg-dark">
                    <img src="img/img12.jpg" width="100%" height="320px">
                    <!--Event item Caption-->
                    <div class="container">
                      <div class="carosuel-caption bg-dark text-light text-center">
                        <p class="lead" >
                          2018 MR and MISS GATEWAYAT MARISTON HOTEL
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--Event Item 4-->
                  <div class="carousel-item bg-dark">
                    <img src="img/img18.jpg" width="100%" height="320px">
                    <!--Event item Caption-->
                    <div class="container">
                      <div class="carosuel-caption bg-dark text-light text-center">
                        <p>
                          At academia Apartments (Vaal)
                          <br>
                          Private Call Out by Instagram Influencer <a href="#" class="link" >@thabee_happy</a>
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--Event Item 5-->
                  <div class="carousel-item bg-dark">
                    <img src="img/img9.jpg" width="100%" height="320px">
                    <!--Event item Caption-->
                    <div class="container">
                      <div class="carosuel-caption bg-dark text-light text-center">
                        <p>
                          2018 Birthday celebration @lesegoLesejane
                          <br>
                          <address>Tembisa</address>
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--Event Item 6-->
                  <div class="carousel-item bg-dark">
                    <img src="img/img32.png" width="100%" height="320px">
                    <!--Event item Caption-->
                    <div class="container">
                      <div class="carosuel-caption bg-dark text-light text-center">
                        <p>
                          Lazy Sunday's lunch session
                          <br>
                          At Mamurwa Student Accommodation.
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--Event Item 7-->
                  <div class="carousel-item bg-dark">
                    <img src="img/img30.jpg" width="100%" height="320px">
                    <!--Event item Caption-->
                    <div class="container">
                      <div class="carosuel-caption bg-dark text-light">
                        <p>
                          This is one of our daily meals.
                          <br>
                           Subscriber's breakfast look like this.
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--Event Item 8-->
                  <div class="carousel-item bg-dark">
                    <img src="img/res04.jpg" width="100%" height="320px">
                    <!--Event item Caption-->
                    <div class="container">
                      <div class="carosuel-caption bg-dark text-light">
                        <p>
                          How our subscribers eat for dinner on Wednesdays.
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--Event Item 9-->
                  <div class="carousel-item bg-dark">
                    <img src="img/Event-bg.jpg" width="100%" height="320px">
                    <!--Event item Caption-->
                    <div class="container">
                      <div class="carosuel-caption bg-dark text-light text-center">
                        <p>
                          Res Opening at Droonfontien
                        </p>
                      </div>
                    </div>
                  </div>

                </div>
                 <a class="carousel-control-prev" href="#Event_carousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#Event_carousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h2 class="featurette-header text-warning text-center" id="Sub_type_header">Meal Subscriptions</h2>
          </div>
          <div class="col-md-4" id="Sub_type">
            <div class="inner">
              <span>Breakfast</span>
            </div>
          </div>
          <div class="col-md-4" id="Sub_type">
            <div class="inner">
              <span>Lunch</span>
            </div>
          </div>
          <div class="col-md-4" id="Sub_type">
            <div class="inner">
              <span>Dinner</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Events-->

  <!--menu-->

  <section class="row" id="Menu">
 
    <div class="container">
      <!--Menu heading-->
    <div class="menu_top">
      <h2 class="featurette-header text-center text-warning" >Uniki Menu</h2>
      <ul>
        <li>
          <a id="Menu_All" class="menu_link" >Show All</a>
        </li>
        <li>
          <a id="Menu_BreakFast" class="menu_link" >Breakfast</a>
        </li>
        <li>
          <a id="Menu_Lunch" class="menu_link" >Lunch</a>
        </li>
        <li>
          <a id="Menu_Dinner" class="menu_link" >Dinner</a>
        </li>
      </ul>
    </div>
      <div class="col-md-12">
        <!--Left side food Menu-->
        <div class="menu_col" id="Menu_list">
          
        </div>
      </div>
    </div>
  </section>

  <!--/menu end-->

  <!--Contact Form-->
  
  <section class="container-fluid" id="contact" >
    <div class="container">
      
      <div class="row">
        
        <div class="col-md-4">
          <div class="contact_Details">
            <ul>
              <li>Phone : 
                <i class="fa fa-phone fa-md" ></i>
                <span class="detail" >
                  +27 61 314 3630
                </span>
              </li>
              <li>Email : <i class="fa fa-envelope-open fa-md" ></i>
                <span class="detail" >
                  <a href="" class="link"> unikifoods@gmail.com </a>
                </span>
              </li>
              <li> Socials : <i class="fa fa-share fa-md" ></i>
                <span class="detail" >
                  <a href="" class="link" >@_uniki</a>
                </span>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-8">
          
          <form class="form" method="post" class="" >
            <h2 align="center" class="featurette-header text-warning" >Message <i class="fa fa-comment fa-md" ></i></h2>
            <div class="inputs form-group">
              <input type="text" name="type" value="message" hidden/>
              <div class="form-group">
                <input type="" name="fullname" class="form-control" placeholder="Full Name" id="Form_name" >
              </div>
              <div class="form-group">
                <input type="" name="email" class="form-control" placeholder="E-Mail Address" id="Form_email" >
              </div>
              <div class="form-group">
                <input type="" name="subject" class="form-control" placeholder="Subject" id="Form_subject" >
              </div>

            </div>

            <textarea class="form-control" name="message" id="Form_message" >Your Message...
            </textarea>

            <button class="send" type="submit" role="button">
              Send <i class="fa fa-paper-plane fa-md" ></i> 
            </button>

          </form> 

        </div>
      </div>
    </div>
  </section>
  <!--/Contact Form End-->

  <!--footer-->
  <footer class="container-fluid" id="About">
    <div class="container">
      
      <div class="row">
        
        <div class="col-md-1"></div>   

        <div class="col-md-10">
          
          <h4 class="widget-title text-center">Uniki Foods</h4>
          <img src="img/Uniki-logo.png" width="100px" height="100px" >
            <address>We are based in Soweto</address>
            <div class="social-list">
              <ul>
                <li>
                  <a href="" class="fa fa-facebook-f fa-md" ></a>
                </li>
                <li>
                  <a href="" class="fa fa-twitter fa-md" ></a>
                </li>
                <li>
                  <a href="" class="fa fa-instagram fa-md" ></a>
                </li>
              </ul>
            </div>
            <p class="copyright clear-float">
              © Uniki Foods.
            </p>

        </div>

        <div class="col-md-1"></div>   

      </div>

    </div>
  </footer>
  <!--/footer End-->

<!----scripts---->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./index.js"></script>
<script type="text/javascript">
  
  $(".menu").click(function(){
    $('.menu').toggleClass('active');
    $("header").toggleClass('active');
  });
  $('#closeMessage').click(function(){
    $('.message').toggleClass('active');
  });

</script>
</body>

</html>
