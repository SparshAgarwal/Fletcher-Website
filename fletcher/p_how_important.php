<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Wisconsin Policy Analysis Lab</title>

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
		<nav class="navbar navbar-inverse"  style="background-color:#c5050c; border: none;border-radius: 0px; ">
			<div class="container-fluid"  > 
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="myInverseNavbar2">
					<ul class="nav navbar-nav nav-justified nav-tabs">
						<li><a href="index.php">Home</a></li>
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
			<div class="col-md-12" id="project_details">	
				<!-- project_details -->
			</div>
		</div>
		<div class="container well">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-lg-4 col-md-4"> <span class="text-right"></span>
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
						<p>Developed by Sparsh Agarwal</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/jquery-1.11.3.min.js"></script> 
		<!-- Include all compiled plugins (below), or include individual files as needed --> 
		<script src="js/bootstrap.js"></script>
	</div>
<script id="project_detailtpl" type="text/template">
	{{}}
	<div style="color: #333">
		<section>
			<article>
				<div style="padding: 10px;padding-top: 0px;margin: 0px;">
					<header >
						<h1 style="color: #c5050c;font-weight: bold; margin-top: 0px; ">{{heading}}</h1>
					</header>
					<div style="padding-left: 50px;padding-top: 10px;">
						<article>
							<h4 style="padding: 10px;">Publications</h4>
							<nav>
								<ul>
									{{#publications}}
									<a href="{{url}}" style="color: #c5050c;"><li>{{heading}}</li></a>
									{{/publications}}
								</ul>
							</nav>
							<h4 style="padding: 10px;">Research Summary</h4>
							<p style="color: #8c8c8c;padding-left: 30px;">{{research_summary}}</p>
							<p style="padding: 20px;"><img class="size-full wp-image-424 aligncenter" src="images/projects/{{study_img}}" sizes="(max-width: 680px) 100vw, 680px" width="680" height="290"></p>
							<nav>
								<h4 style="padding: 10px;">Related Resources</h4>
								<ul>
									{{#related_resources}}
									<li><a href="{{url}}" style="color: #c5050c">{{heading}}</a></li>
									{{/related_resources}}
								</ul>
							</nav>
							<h4 style="padding: 10px;">Funding</h4>
							<p style="color: #8c8c8c;padding-left: 30px;"">{{funding}}</p>
						</article>
						<div></div>
					</div>
				</div>
			</article>
		</section>
	</div>
	{{}}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle/3.0.3/jquery.cycle.all.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function () {
    $.getJSON('https://fletcher-e4553.firebaseio.com/.json',function(data){
    	for(var i=0; i<data.projects.length;i++){
    		var current_project	=	JSON.stringify(data.projects[i].heading);
    		if(current_project=="\"How important are spousal peer effects?\""){
    			data.projects	=	data.projects[i];
    		}
    	}
    	var template  = $('#project_detailtpl').html();
    	var html =  Mustache.to_html(template,  data.projects);
    	$('#project_details').html(html);
    });
  });
</script>
</body>
</html>