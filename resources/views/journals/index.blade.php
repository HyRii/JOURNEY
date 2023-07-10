<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('layouts.stylesheet');

</head>
<body>
    @include('layouts.navbar_user');
    <div class="wrapper">
        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('../assets/img/headerprofile.jpg');">
			<div class="filter"></div>
		</div>
        <div class="section profile-content">
            <div class="container">
                <div class="owner">
                    <div class="avatar">
                        <img src="../assets/img/traveler.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                    <div class="name">
                        <h4 class="title">TRAVELER<br /></h4>
						<a href="{{ route('createjournals') }}"><button type="button" class="btn btn-outline-default btn-round"><i class="fa fa-plus "></i> Journal</button></a>
                    </div>
                </div>
                <br/>
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#follows" role="tab">My Adventure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#following" role="tab">Stuff I'm Going TO DO</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tab panes -->
                <div class="tab-content following">
                    <div class="tab-pane active" id="follows" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>No.</th>
                                        <th>Picture</th>
                                        <th>Place</th>
                                        <th>Country</th>
                                        <th>Date</th>
                                        <th>Experiences</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($journals as $journal)
                                        <tr>
                                            <td>{{ $journal->id }}</td>
                                            <td><img src="{{ asset($journal->image) }}" class="img-thumbnail" style="width:200px" />
                                            </td>
                                            <td>{{ $journal->place }}</td>
                                            <td>{{ $journal->country }}</td>
                                            <td>{{ $journal->date }}</td>
                                            <td>{{ $journal->experience }}</td>
                                            <td>
                                                <a href="/journals/edit/{{$journal->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="/journals/delete/{{$journal->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane text-center" id="following" role="tabpanel">
                        <h3 class="text-muted">Features are not yet available :(</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer');
</body>
@include('layouts.javascript');
</html>
