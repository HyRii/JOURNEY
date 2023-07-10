<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Add</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('layouts.stylesheet');



</head>
<body>

    <div class="wrapper">
        <div class="page-header" style="background-image: url('../assets/img/maps.jpg');">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register">
                                <h3 class="title">Add New Adventure</h3>
                                
                                <form class="register-form" method="post" action="{{ route('storejournals') }}" enctype="multipart/form-data">
                                    @csrf
                                    <label>Post a Picture</label>
                                    <input class="form-control" type="file" name="image" id="image">

                                    <label>Place Name</label>
                                    <input type="text" class="form-control" name="place"  placeholder="Neuschwanstein">

                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country"  placeholder="Jerman">

                                    <label>Date</label>
                                    <input type="date" class="form-control"name="date" >

                                    <label>Experiences</label>
                                    <input type="Text" class="form-control" name="experience"  placeholder="The most beautiful castle">

                                    <button class="btn btn-danger btn-block btn-round" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
					<div class="footer register-footer text-center">
						<h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
					</div>
                </div>
        </div>
    </div>
</body>
@include('layouts.javascript');
</html>