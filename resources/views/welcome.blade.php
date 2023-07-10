<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Journal</title>

    {{-- <audio hidden autoplay loop>
        <source src="Prologue.m4a" type="audio/mp4">
    </audio> --}}

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('layouts.stylesheet');

</head>
<body>
    @include('layouts.navbar');
		<div class="page-header" data-parallax="true" style="background-image: url('../assets/img/header.png');" id="homepage">
			<div class="filter"></div>
			<div class="container">
			    <div class="motto text-center">
			        <h1>Journal Trip</h1>
			        <h3>Lets got a crush on the world</h3>
			        <br />
                    <a href="/login" ><button type="button" class="btn btn-outline-neutral btn-round">Login</button></a>
                    <a href="/register" ><button type="button" class="btn btn-outline-neutral btn-round">Register</button></a>
			    </div>
			</div>
    	</div>
        
        <div class="main" id="why">
			<div class="section text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="title">Why journaling is important?</h2>
                            <h5 class="description">Keeping a journal helps you create order when your world feels like it's in chaos.
                                You get to know yourself by revealing your most private fears, thoughts, and feelings.
                                Look at your writing time as personal relaxation time. It's a time when you can de-stress and wind down.</h5>
                            <br>
                            <a href="/login" ><button type="button" class="btn btn-outline-default btn-round">Let's Start Journalling</button></a>
                        </div>
                    </div>
				    <br/><br/>
				    <div class="row">
					    <div class="col-md-3">
						    <div class="info">
							    <div class="icon icon-danger">
								    <i class="nc-icon nc-album-2"></i>
							    </div>
							    <div class="description">
								    <h4 class="info-title">Wonderful Memory</h4>
								    <p class="description">Spend your time to see how beautiful world. Capture moments so they won't be forgoten.</p>
							    </div>
						    </div>
					    </div>
					    <div class="col-md-3">
						    <div class="info">
							    <div class="icon icon-danger">
								    <i class="nc-icon nc-bulb-63"></i>
							    </div>
							    <div class="description">
								    <h4 class="info-title">Brain's Performance</h4>
								    <p>Writing journal helps individuals create more organized, adaptable,
                                        and integrated plans regarding themselves</p>
							    </div>
						    </div>
					    </div>
					    <div class="col-md-3">
						    <div class="info">
							    <div class="icon icon-danger">
								    <i class="nc-icon nc-chart-bar-32"></i>
							    </div>
							    <div class="description">
								    <h4 class="info-title">Balance Mood</h4>
								    <p>Journaling is the act of keeping a record of your personal thoughts, feelings, insights, and more.
                                        It can be written, drawn, or typed. It can be on paper or on your computer.
                                        It’s a simple, low-cost way of improving your mental health. </p>
							    </div>
						    </div>
					    </div>
					    <div class="col-md-3">
						    <div class="info">
							    <div class="icon icon-danger">
								    <i class="nc-icon nc-sun-fog-29"></i>
							    </div>
							    <div class="description">
								    <h4 class="info-title">Explore new things</h4>
								    <p>Life is short, live it! that is our motto. Love to travel and go on adventures?
                                        This nice travel Journal will help you keep track of your thoughts, ideas, experiences, dreams and
                                        goals along the way</p>
							    </div>
						    </div>
					    </div>
				    </div>
                </div>
            </div>
        </div>

		<div class="section text-center">
            <div class="container">
                <h2 class="title">The most Visited Places</h2>
				<div class="row">

    				<div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="../assets/img/seoul.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Seoul</h4>
                                        <h6 class="card-category">Korea Selatan</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                    Seoul is the capital city of South Korea which is located in the northwest of the southern state on the
                                    Han river. Seoul is a metropolitan city and is the most populous city in the world which is more than 600 years
                                    old.Having an area of 605.21 km², Seoul is one of the largest cities in South Korea.
                                    Seoul is also a city that is visited by many local and foreign tourists,
                                    because there are many interesting tourist attractions.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="../assets/img/tokyo.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Tokyo</h4>
                                        <h6 class="card-category">Jepang</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                </p>Tokyo is the capital city of Japan, and is very popular for foreign tourists visiting Japan.
                                Since the Edo Shogunate was founded in the 1600s, it has developed as a political, economic and cultural center.
                                Today, it has expanded even further, mixing many attractions, including modern tourist attractions and traditional
                                 historical sites.
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="../assets/img/berlin.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Berlin </h4>
                                        <h6 class="card-category">Jerman</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                    Berlin as the capital of Germany did have a large involvement in World War II. Various important historical
                                    events took place in Berlin.Therefore, most tourist attractions in Berlin Germany are various old historical 
                                    buildings, to museums. Each tourist spot in Berlin has its own historical stories.
                                </p>
                            </div>
                            <di v class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
                            </di>
                        </div>
    				</div>
    			</div>
        	</div>
    	</div>

        
    @include('layouts.footer');
</body>
@include('layouts.javascript');
</html>
