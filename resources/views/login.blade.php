<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('layouts.stylesheet')



</head>
<body>
    @include('layouts.navbar');
    <div class="wrapper">
        <div class="page-header" style="background-image: url('../assets/img/loginregis.jpg');">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register">
                                <h3 class="title">Welcome</h3>
                                <form class="register-form" action="{{ route('actionlogin') }}" method="post">
                                @csrf
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="">

                                    <label>Password</label>
                                    <input type="password" name="passwrd" class="form-control" placeholder="Password">
                                    <a href="/create" class="btn btn-danger btn-block btn-round">Login</button></a>
                                </form>
                                <div class="forgot">
                                    <a href="/register" class="btn btn-link btn-danger">Don't have account yet? <br> Free Register now!</a>
                                </div>
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
