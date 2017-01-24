<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Wisconsin Policy Analysis Lab</title>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
  <script src="js/jquery-1.11.3.min.js"></script> 
  <script src="js/bootstrap.js"></script>
  <script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="index.css" rel="stylesheet" type="text/css">

    </head>
    <body style="background-color:lightgrey">
      <div class="wrapper" style="background-color: #ffffff;">
        <div style="height:100px;background-color:#c5050c;" align="center">
          <p id="heading" style="color:#fff;">
            Wisconsin Policy Analysis Lab
          </p>
        </div>
        <nav class="navbar navbar-inverse"  style="background-color:#c5050c; border: none;border-radius: 0px">
          <div class="container-fluid"  > 
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="myInverseNavbar2">
              <ul class="nav navbar-nav nav-justified nav-tabs ">
                <li><a href="index.php" class='active'>Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li><a href="members.php">Members</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Links <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://www.lafollette.wisc.edu/">La Follette</a></li>
                    <li><a href="http://www.econ.wisc.edu/">Economics</a></li>
                    <li><a href="http://www.ssc.wisc.edu/soc/">Sociology</a></li>
                  </ul>
                </li>
                <li><a href="http://www.wisc.edu/">Wisconsin</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse --> 
          </div>
          <!-- /.container-fluid --> 
        </nav>
        <div class="container">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">
            <div id="carousel-299058" class="carousel slide">
              <div class="carousel-inner">
                <div class="item"> <img  class="img-responsive" src="images/slider1.jpg" alt="thumb">
                  <div class="carousel-caption">  </div>
                </div>
                <div class="item active"> <img class="img-responsive" src="images/slider2.jpg" alt="thumb"></div>
                <div class="item"> <img class="img-responsive" src="images/slider3.jpg" alt="thumb">
                  <div class="carousel-caption"> </div>
                </div>
                <div class="item"> <img class="img-responsive" src="images/slider4.jpg" alt="thumb">
                  <div class="carousel-caption"> </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-299058" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel-299058" data-slide="next"><span class="icon-next"></span></a></div>
            </div>  </div>
            <div class="container">
              <div class="col-md-12" id="projects">
                <!-- projects -->
              </div>
            </div>
            <div class="container well">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 col-md-4"> <span class="text-right">
                </span>
                <h3>About Us</h3>
                <p>sdfgkjhzgjkhbfiljkhgf.kfgb</p>
              </div>

              <div class="col-xs-6 col-sm-6 col-lg-4 col-md-4"> <span class="text-right"> </span>
                <h3>Contact Us</h3>

                <address>
                  <strong>lfxdgkjxgbklh</strong><br>
                  <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>

                <address>
                  <strong>Full Name</strong><br>
                  <a href="mailto:#">first.last@example.com</a>
                </address>
              </div>
            </div>
          </div>
          <footer class="text-center">
            <div>
              <div class="row">
                <div class="col-xs-12">
                  <p style="color: #333;">Developed by Sparsh Agarwal</p>
                </div>
              </div>
            </div>
          </footer>
</div> 
<script id="projecttpl" type="text/template">
{{#projects}}
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
    <div class="thumbnail"><a href="{{url}}"> <img src="images/{{img_src}}" alt="Thumbnail Image 1" class="img-responsive" href="{{url}}"></a>
      <div class="caption">
        <a href="{{url}}"><h4>{{heading}}</h4></a>
        <p>{{short_des}}</p>
      </div>
    </div>
  </div>
{{/projects}}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle/3.0.3/jquery.cycle.all.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function () {
    $.getJSON('https://fletcher-e4553.firebaseio.com/.json',function(data){
      data.projects.sort(function (a, b) {return Math.random() - 0.5;});
      data.projects=data.projects.slice(0,6);
      var template  = $('#projecttpl').html();
      var html =  Mustache.to_html(template,  data);
      $('#projects').html(html);
      
    });
  });
</script>
</body>
</html>