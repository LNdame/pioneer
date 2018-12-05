<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pioneer Connect - Home</title>

    <!-- Bootstrap core CSS -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/prettyPhoto.css' />
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='style.css' />
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <style>
          #map-canvas {
            width: 500px;
            height: 400px;
          }
        </style>
        
        <script src="https://maps.googleapis.com/maps/api/js"></script>

  </head>

  <body>

      <?php include('includes/header.php')?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/1.jpg');">
            <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0, 0, 0, 0.2);" >
            <img class="img-flex" src="mockup-images/logo_caption.png" alt="Pioneer" />
              <p>your link to the future</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/2.jpg');">
            <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0, 0, 0, 0.2);">
            <img class="img-fluid" src="mockup-images/logo_caption.png" alt="Pioneer" /><br>
              <p></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/3.jpg');">
            <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0, 0, 0, 0.2);" >
            <img class="img-fluid" src="mockup-images/logo_caption.png" alt="Pioneer" />
              <p>your link to the future</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('images/4.jpg');">
            <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0, 0, 0, 0.2);">
            <img class="img-fluid" src="mockup-images/logo_caption.png" alt="Pioneer" />
              <p>your link to the future</p>
            </div>
          </div>
         
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <br>
<section class="home-icons">
    <div class="row" style="padding:20px;">
      <div class="col-md-3">
        <div class="card" >
            <center><i class="fas fa-wifi fa-9x card-img-top" style="color:#ffa100"></i></center>
                <div class="card-body">
                <h3 style="color:#961a0c;text-align: center;"> Wireless Internet</h3>
                    <p class="card-text">Wireless internet has evolved into more than internet connectivity as can be seen by our various service offerings wich make use of our wireless internet connections.</p>
                </div>
                <div class="card-footer">
                <div class="latest-post-bottom-text">
                <a href="services.php#about">find out more </a></div>
                </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card" >
        <center><i class="fas fa-video fa-9x card-img-top" style="color:#ffa100"></i></center>
                <div class="card-body">
                <h3 style="color:#961a0c;text-align: center;">CCTV</h3>
                    <p class="card-text">At Pioneer connect, we understand the importance of personal or business security. Our affordable range of CCTV security offerings will bring you peace of mind.</p>
                </div>
                <div class="card-footer">
                <div class="latest-post-bottom-text">
                <a href="services.php#video">find out more </a></div>
                </div>
        </div>
    </div>


<div class="col-md-3">
        <div class="card" >
            <center><i class="fas fa-network-wired fa-9x" style="color:#ffa100"></i></center>
                <div class="card-body">
                <h3 style="color:#961a0c;text-align: center;">Fibre</h3>
                    <p class="card-text">From unlimitted (uncappd) data to self-managed top up products, Pioneer Ponnect will provide you with high-speed fiber packages to meet any business or personal requirements.</p>
                </div>
                <div class="card-footer">
                <div class="latest-post-bottom-text">
                <a href="services.php#data">find out more </a></div>
                </div>
        </div>
    </div>


<div class="col-md-3">
        <div class="card" >
            <center><i class="fas fa-microphone-alt fa-9x" style="color:#ffa100"></i></center>
                <div class="card-body">
                <h3 style="color:#961a0c;text-align: center;">VOIP</h3>
                    <p class="card-text">Reduce your home and business voice call costs by taking advantage of the VOIP products from pioneer Connect. VOIP is a reliable and cheaper alternative to the traditional voice networks.</p>
                </div>
                <div class="card-footer">
                <div class="latest-post-bottom-text">
                <a href="services.php#voip">find out more </a></div>
                </div>
        </div>
    </div>

</div>

</section>


<!--

    

    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills">
                <li class="nav-item col-md-6">
                  <a class="nav-link active" data-toggle="pill" href="#welcome">Who we are</a>
                </li>
                <li class="nav-item col-md-6">
                  <a class="nav-link" data-toggle="pill" href="#about_us">Current coverage</a>
                </li>
                </ul>
          </div>
        
        <div class="tab-content">
          <br>
            <div class="tab-pane container active" id="welcome">
              <div class="row">
                <div class="col-md-3" style="background-color:#d50000; height:200px;">
                    <img class="img-fluid" src="mockup-images/logo.png">
                </div>

                <div class="col-md-9">
                    
                            <h3 class="content-title">who we are</h3>
                        
                                 
                          <strong> Pioneer Connect (Pty) </strong> is an Information and Communication Technology (ICT) company situated at 24 Evatt Street, Central, Port Elizabeth, 6001. <strong> Pioneer Connect (Pty) </strong> is a subsidiary of African Pioneer Group, a company which was founded in 1990 as a black owned business and has grown exponentially over the last 28 years. African Pioneer group is now recognized as one of the largest and most successful unlisted Black Economic Empowerment Investment companies in South Africa.
                               
                        <div class="clear"></div>
                          <br>
                          <br>
                        </div>
                      </div>
                </div>
                
                
             
                 
            <div class="tab-pane container fade" id="about_us">
              <div class="row">
                

                <div class="col-md-9">
                    
                            <h2 class="content-title">We currently have coverage in the following areas:</h2>
                        
                                 
                          <div id="map-canvas"></div>
                          
                          <script>
                            /**
                             * @fileoverview Sample showing capturing a KML file click
                             *   and displaying the contents in a side panel instead of
                             *   an InfoWindow
                             */

                            var map;
                            var src = 'maps/map.kmz';

                            /**
                             * Initializes the map and calls the function that creates polylines.
                             */
                            function initialize() {
                              map = new google.maps.Map(document.getElementById('map-canvas'), {
                                center: new google.maps.LatLng(-19.257753, 146.823688),
                                zoom: 2,
                                mapTypeId: google.maps.MapTypeId.TERRAIN
                              });
                              loadKmlLayer(src, map);
                            }
                            
                            /**
                             * Adds a KMLLayer based on the URL passed. Clicking on a marker
                             * results in the balloon content being loaded into the right-hand div.
                             * @param {string} src A URL for a KML file.
                             */
                            function loadKmlLayer(src, map) {
                              var kmlLayer = new google.maps.KmlLayer(src, {
                                suppressInfoWindows: true,
                                preserveViewport: false,
                                map: map
                              });
                              google.maps.event.addListener(kmlLayer, 'click', function(event) {
                                var content = event.featureData.infoWindowHtml;
                                var testimonial = document.getElementById('capture');
                                testimonial.innerHTML = content;
                              });
                            }

                            google.maps.event.addDomListener(window, 'load', initialize);
                            </script>
                                                  
            
                               
                        <div class="clear"></div>
                          <br>
                          <br>
                        </div>
                        
                        <div class="col-md-3" style="background-color:rgb(255, 235, 59); height:200px;">
                    <img class="img-fluid" src="mockup-images/logo.png">
                </div>
                
                
                      </div>
                </div>
                
                
                      
                </div>
              </div>
            </div>-->
      
            
  
            
        <?php include('includes/footer_red.php')?>
    

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




        <!--Load JavaScript-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type='text/javascript' src='js/jquery.sticky-kit.min.js'></script>
        <script type='text/javascript' src='js/jquery.smartmenus.min.js'></script>
        <script type='text/javascript' src='js/jquery.sticky.js'></script>
        <script type='text/javascript' src='js/jquery.dryMenu.js'></script>
        <script type='text/javascript' src='js/isotope.pkgd.js'></script>
        <script type='text/javascript' src='js/jquery.carouFredSel-6.2.0-packed.js'></script>
        <script type='text/javascript' src='js/jquery.mousewheel.min.js'></script>
        <script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
        <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='js/imagesloaded.pkgd.js'></script>
        <script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
        <script type='text/javascript' src='js/main.js'></script>

  </body>

</html>
