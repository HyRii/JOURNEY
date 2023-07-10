<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Edit</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('layouts.stylesheet')



</head>
<body>

    <div class="wrapper">
        <div class="page-header" style="background-image: url({{asset('assets/img/maps.jpg')}});">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register">
                                <h3 class="title">Edit your Adventure</h3>
                                @foreach ($journals as $journal)
                                <form class="register-form" method="post" action="{{ route('updatejournals') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$journal->id}}">
                                    
                                    <img src="" alt="" srcset="">
                                    <label>Post a Picture</label>
                                    <input class="form-control" type="file" name="image" id="formFile">

                                    <label>Place Name</label>
                                    <input type="text" class="form-control" name="place" value="{{$journal->place}}">

                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country" value="{{$journal->country}}">

                                    <label>Date</label>
                                    <input type="date" class="form-control"name="date" value="{{$journal->date}}">

                                    <label>Experiences</label>
                                    <input type="Text" class="form-control" name="experience" value="{{$journal->experience}}">

                                    <button class="btn btn-danger btn-block btn-round" type="submit" href="{{ route('savejournals') }}"><i class="fa fa-plus"></i>Update</button>
                                </form>
                                @endforeach
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
@include('layouts.javascript')

</html>