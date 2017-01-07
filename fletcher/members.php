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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body style="background-color:lightgrey">
			<div class="wrapper" style="background-color: #ffffff;">
				<div style="height:120px;background-color:#c5050c;" align="center">
					<p id="heading" style="color:#fff;">
						Wisconsin Policy AnalysiLab
					</p>
				</div>
				<nav class="navbar navbar-inverse"  style="background-color:#c5050c; ">
					<div class="container-fluid"  > 
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="myInverseNavbar2">
							<ul class="nav navbar-nav navbar-left">
								<li><a href="index.php">Home</a></li>
								<li><a href="#">Projects</a></li>
								<li><a href="schedule.php">Schedule</a></li>
								<li><a href="members.php">Members</a></li>
								<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Links <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">La Follette</a></li>
										<li><a href="#">Economics</a></li>
										<li><a href="#">Sociology</a></li>
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
					<div class="col-md-12">	
						<!-- <?php
						$myfile = fopen("data.txt", "r") or die("Unable to open file!");
						while (!feof($myfile)) 
						{
							$line_of_text = fgets($myfile);
							$parts = explode('|', $line_of_text);
							if($parts[0]=="heading")
							{
								echo "<div class='member_divisions' >";
								echo "<h2 style='color:#c5050c'>".$parts[1]."</h2>";
							}
							if($parts[0]=="data")
							{
								echo "<div class='col-lg-4 col-md-4 col-sm-6 col-xs-6'>";
								echo "<div class='thumbnail' > <img src='".$parts[1]."' alt='Thumbnail Image 1' class='img-responsive'>";
								echo "<div class='caption'>";
								echo "<h3>".$parts[2]."</h3>";
								echo "<p>".$parts[3]."</p>";
								echo "</div></div></div>";
							}
							if($parts[0]=="end")
							{
								echo "</div>";
							}
						}
						fclose($myfile);
						?>  -->
						<div class="member_divisions">
							<h2 style="color:#c5050c">Professor</h2>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" > <img src="images/s0.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Jason Fletcher</h3>
										<p>Jason joined UW-Madison as an Associate Professor of Public Affairs, Sociology and Applied Economics in 2013.
											 He was a Robert Wood Johnson Foundation Health & Society Scholar at Columbia University between 2010-2012. You can see his website for more about his work.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="member_divisions">
							<h2 style="color:#c5050c">Graduate Student Research Assistants</h2>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
								<div class="thumbnail"> <img src="images/s1.png" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Jinho Kim</h3>
										<p>Jinho is a fifth year PhD Student in Sociology.
											Jinho and Jason are working on multiple projects related to social network analysis and family dynamics</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s2.png" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Joel Han</h3>
										<p>Joel is a fifth-year PhD student in Economics. His interests in reseach include the determinants of socio-economic inequality and mobility, which include education and neighborhoods.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail"> <img src="images/s3.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Angela Forgues</h3>
										<p>Angela is a fourth-year PhD student in Sociology
											Angela and Jason are working on gene-environment interactions research
											Angela presented some of this work with Justin Cook at PAA in 2016</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s4.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Jessica Polos</h3>
										<p>Jessica is a third-year PhD student in Sociology
											Jessica and Jason are working on examining the intergeneration transmission of health and education and the intersection of genetics and fertility.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail"> <img src="images/s5.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Maria Serakos</h3>
										<p>Maria is a first year PhD student in Social Work. She recently completed her MPA at La Follette. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s6.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Jingying He</h3>
										<p>Jingying is a third year PhD student in Sociology.
											Jingying and Jason are working on projects related to multigenerational effects of early conditions. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail"> <img src="images/s7.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Jihye Kam</h3>
										<p>Jihye is a fifth year PhD student in Education Leadership and Policy Analysis.
												Jihye and Jason are working on projects related to multigenerational effects of early conditions.  </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s8.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Evan Crawford</h3>
										<p>Evan is a fourth year PhD student in Political Science.
													Evan and Jason are working on the long term implications of voting laws.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail"> <img src="images/s9.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Won-tak Joo</h3>
										<p>Won-tak is a first year PhD student in Sociology.
											Won-tak and Jason are working on projects related to social network analysis and college rankings as well as impacts of network position on adolescent outcomes.  </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail"> <img src="images/s10.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Irina Shaorshadze</h3>
										<p>Irina is a fifth year PhD student in the Economics Department.
											Jason and Irina are working on a project examining peer effects for immigrant students. </p>
									</div>
								</div>
							</div>
						</div>	
						<div class="member_divisions">
							<h2 style="color:#c5050c">Master Students</h2>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s11.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Anshul Purohit</h3>
										<p>Anshul is a masters student in computer science.
											Anshul and Jason are working on projects that intergrate machine learning into policy analysis. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail"> <img src="images/s12.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Cody Oltmans</h3>
										<p>Cody is a masters student in the La Follette School of Public Affairs.
											Jason and Cody are working on a project examining educational mobility patterns in the US.  </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s13.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Max Pardo</h3>
										<p>Max is a masters student in the La Follette School of Public Affairs
											Jason and Max are working on several projects </p>
									</div>
								</div>
							</div>
						</div>
						<div class="member_divisions">
							<h2 style="color:#c5050c">Alumni</h2>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" > <img src="images/s14.png" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Ryne Marksteiner</h3>
										<p>Ryne received hi PhD in Economics from UW in 2016.
											He was a member of WiscPal from 2013-2016. He now works at the FTC.
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s15.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Taehoon Kim</h3>
										<p>Taehoon is a fifth year PhD student in the Economics Department. His main fields are labor and public economics.His current focuse is on early childhood education and its long-term effect. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" > <img src="images/s16.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Sean Lewis-Faupel</h3>
										<p>Sean received his PhD in Economics from UW in 2016. He was a member of WiscPal from 2013-2015.
											He now works at Treasury.Sean presented joint work at APPAM in 2015 </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s17.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Sebastian Daza</h3>
										<p>Sebastian is a sixth-year PhD student in Sociology at UW. 
											He was involved with WiscPal between 2014-2016.Sebastian presented joint work on the impacts of pregnancy on deliquency at PAA in 2015.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" > <img src="images/s18.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Justin Cook (Post Doctoral Associate)</h3>
										<p>Justin's work focuses on the health and economic impacts of genetic variation. At the country level, he explores the economic effects, both historic and contemporary, of differential genetic adaptations to the adoption of agriculture</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s19.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Norma Padron</h3>
										<p>Norma received her PhD in Health Policy and Management at Yale University in 2014.
											Her main interests are on the effects from involuntary parental job-loss and children's health and development outcomes. She is also interested in the determinants of marriage formation and its effects on inequality.
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail"> <img src="images/s20.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Duy Do</h3>
										<p>Duy completed his undergraduate degree in economics at the University of Wisconsin-Madison in 2014.
											Duy and Jason worked on a project examining the impacts of pesticides on children's health in Vietnam </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="thumbnail" style="background-color: #ad050b;"> <img src="images/s21.jpg" alt="Thumbnail Image 1" class="img-responsive">
									<div class="caption">
										<h3>Keo Lo</h3>
										<p>Keo Lo was a MPA student at the La Follette School of Public Affairs and graduated in May 2015.
											Keo is a Program and Planning Analyst at Department of Children and Families</p>
									</div>
								</div>
							</div>
						</div>
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
		</body>
		</html>