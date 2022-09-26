
			<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}">
			<!doctype html>
			<html lang="en">
			  <head>
			    <!-- Required meta tags -->
			    <meta charset="utf-8">
			    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			    <!-- Bootstrap CSS -->
			   <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}">
			       <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico?v=fb84172938">
			    <link rel="stylesheet" href="{{ asset('front/css/style1.css')}}">
			    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			     <link rel="stylesheet" href="{{ asset('front/css/style.css')}}">
			    <link rel="stylesheet" href="{{ asset('front/css/slick.css')}}"/>
			     <link rel="stylesheet" href="{{ asset('front/css/slick-theme.css')}}"/>
			     <link href="{{ asset('front/css/animate.min.css')}}" rel="stylesheet" type="text/css">
			    <title>Home Page</title>
			  </head>
			  <style type="text/css">
			  .navigation-wrap2 {
			  position: fixed;
			  width: 100%;
			  top: 0px;
			  left: 0;
			  z-index: 1000;
			  max-width: 100%;
			  -webkit-transition: all 0.3s ease-out;
			  transition: all 0.3s ease-out;
			}

			  </style>
			  <body>



			<!-- Modal -->
			<div class="cutom_formrt">
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Get In Touch</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="form-group">
			    <label for="exampleInputPassword1">Name</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
			  </div>
			        <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

			  </div>
			   <div class="form-group">
			  <label for="comment">Comment:</label>
			  <textarea class="form-control" rows="5" id="comment"></textarea>
			</div>

			      </div>
			      <div class="modal-footer">

			        <button type="button" class="btn btn-primary">Submit Now</button>
			      </div>
			    </div>
			  </div>
			</div>
			</div>


			       <!-- navgtion part start -->
			    <div class="main-header style-one">
			<div class="header-top">
			            <div class="auto-container">
			                <div class="top-inner clearfix">
			                    <ul class="info top-left pull-left">
			                        <li><i class="fa-solid fa-phone"></i>+91 02502450136</li>
			                        <li><i class="fa-solid fa-envelope"></i>elixzagami7@gamil.com</li>
			                    </ul>
			                    <div class="top-right pull-right">
			                        <ul class="social-links clearfix">
			                          <li class="sty">Stay Connected</li>
			                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
			                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
			                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
			                        </ul>
			                    </div>
			                </div>
			            </div>
			        </div>


			      </div>

			      <div class="yid">


			  <div id="dynamic" class="navigation-wrap bg-light start-header start-style ">
			    <div class="container">
			      <div class="row">
			        <div class="col-12">
			          <nav class="navbar navbar-expand-lg navbar-light">

			            <a class="navbar-brand" href="{{URL::to('/')}}" ><img src="{{ asset('front/images/logo.png') }}" alt=""></a>

			            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			              <span class="navbar-toggler-icon"></span>
			            </button>

			            <div class="collapse navbar-collapse" id="navbarSupportedContent">
			              <ul class="navbar-nav ml-auto py-4 py-md-0">
			                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active"><a class="nav-link" href="{{URL::to('/')}}">Home</a>

			                </li>
			                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
			                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{route('arvca')}}" role="button" aria-haspopup="true" aria-expanded="false"> About Us </a>

			                  <div class="dropdown-menu">
			                    <a class="dropdown-item" href="{{route('arvca')}}">About ARV-CA</a>
			                    <a class="dropdown-item" href="{{route('vision')}}">Our Mission, Vision & ideology</a>
			                    <a class="dropdown-item" href="{{route('coreteam')}}">Core Team</a>
			                    <a class="dropdown-item" href="{{route('supporting-professionals')}}">Supporting Professionals</a>
			                    <a class="dropdown-item" href="{{route('sectoral-experience')}}">Sectoral Experience</a>

			                  </div>

			                </li>
			               <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
			                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">  Our Service</a>
			                   <div class="dropdown-menu">
			                    <a class="dropdown-item" href="{{route('ibc-related')}}">IBC related</a>
			                    <a class="dropdown-item" href="{{route('other-service')}}">Other Service</a>
			                  </div>

			                </li>
			                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
			                  <a class="nav-link" href="{{route('knowledge-legal')}}"> Knowledge Centre </a>

			                </li>
			                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
			                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> legal Framework</a>
			                    <div class="dropdown-menu">
			                    <a class="dropdown-item" href="{{route('ibc-related2')}}">IBC related</a>
			                    <a class="dropdown-item" href="{{route('allied-laws')}}">Allied Laws</a>
			                  </div>
			                </li>
			                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
			                  <a class="nav-link" href="{{route('contact-us')}}">Contact</a>
			                </li>
			                 <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
			                  <a class="nav-link" href="{{route('blog')}}">Blog</a>
			                </li>
			<button class="btn btn-outline-success my-2 my-sm-0 coit lpg" type="submit" data-toggle="modal" data-target="#exampleModal">Get In Touch</button>

			              </ul>
			            </div>
			      <button class="btn btn-outline-success my-2 my-sm-0 coit" type="submit" data-toggle="modal" data-target="#exampleModal">Get In Touch</button>
			          </nav>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- end -->
