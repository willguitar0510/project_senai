<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>MDS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
</head>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header tit-up">
					<h2 class="modal-title">Registre-se</h2>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body customer-box">
					<form> <!--role="form" class="form-horizontal" method="POST">-->
						<div class="input-group">
							<input type="text" class="form-control" name="email" placeholder="E-mail">
						</div>
						<hr />	
						<div class="input-group">
							<input  type="password" class="form-control" name="password" placeholder="Senha">
						</div>
						<hr />
						<button class="btn btn-lg btn-block btn-login" type="submit">Registre-se</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="content">
	<!-- Header (top menu)-->
    <header class = "">
		<div class ="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#"><img src="images/icon.png" width="100" height="100" alt=""> Meu Doguinho Salon</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse right_header_info justify-content-end" id="navbarTogglerDemo01">
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item active">
							<a class="nav-link" href="recipe.html">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="#">Nosso Seriços</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="#">Agenda</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-facebook fa"></i></a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-instagram fa"></i></a>
							</li>
							
							<li class="nav-item">
							<a class="nav-link"  href="#" data-toggle="modal" data-target="#login"><i class="fa fa-user fa"></i> Login </a>
							</li>
					</ul>
				</div>
			</nav>
		</div>
    </header>
	<!-- Home -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Meu Doguinho Salon</h3>
                                                <p>Nós amamos e somo profissionais em cuidados caninos em Tubarão/SC</p>
                                                <a class="main_bt_border" href="#">Conheça nossos serviços</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="images/dog.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services -->
    <section class="resip_section">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
					<div class="ourheading">
						<h2>Nossos Serviços</h2>
					</div>
				</div>    
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							
								<?php
									require_once 'controller/Servicos.php';
									$obj = new ServicosController();
									$obj->listar();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="bg_bg">
	<!-- Schedule -->
	<div class="about">
		<div class="container">
		  <div class="row">
			 <div class="col-md-12">
				 <div class="title">
					<h2>Agende um horário</h2>
				 </div>
			  </div>
		   </div>
		   <div class="row">
			 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					 <div class="about_img">
					 
				 </div>
                </div>
			  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				 <div class="about_box">
					 <h3>Agende agora!!!</h3>
					 <p>Entraremos em contato para confirmar o horário</p>
					 <div class="input-group-schedule">
							<input type="text" class="form-control" name="name" placeholder="Nome">
					</div>
					<div class="input-group-schedule">
							<input type="text" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="input-group-schedule">
							<input type="text" class="form-control" name="fone" placeholder="Telefone">
					</div>
					<div class="input-group-date">
							<input type="text" name="date1" id="date1" alt="date" class="IP_calendar form-control" title="d/m/Y" placeholder="Selecione uma data">
					</div>
					<hr />	
					<button class="btn btn-lg btn-block btn-login" type="submit">Enviar</button>
				 </div>
			 </div>
		   </div> 
		</div>
	</div>
    <!-- footer -->
    <fooetr>
        <div class="">
            <div class="copyright">
                <div class="container">
                    <p>© Willian Moreira Teixeira</p>
                </div>
            </div>
        </div>
    </fooetr>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
   <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
   </script>
	<script>
		$(document).ready(function() {
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			margin: 10,
			nav: true,
			loop: true,
			responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 5
			}
			}
		})
		})
	</script>

</body>

</html>