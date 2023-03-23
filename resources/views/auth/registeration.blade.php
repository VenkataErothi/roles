@include('dashboard')
    
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Authentication</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
     <div class="container">
     	<div class="row">
     		<div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
     			<h4>Registeration</h4>
     			<form action="{{route('register-user')}}" method="post">
     				@if(Session::has('success'))
     				<div class="alert alert-success">{{Session::get('success')}}</div>
     				@endif

     				@if(Session::has('fail'))
     				<div class="alert alert-danger">{{Session::get('fail')}}</div>
     				@endif
     				@csrf
     				<div class="form-group">
     					<label for="name">Full name</label>
     					<input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
     					<span class="text-danger">@error('name'){{$message}} @enderror</span>
     				</div>
     				<div class="form-group">
     					<label for="email">Email</label>
     					<input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
     					<span class="text-danger">@error('email'){{$message}} @enderror</span>
     				</div>
     				<div class="form-group">
     					<label for="password">Password</label>
     					<input type="password" class="form-control" placeholder="Enter password" name="password" value="">
     					<span class="text-danger">@error('password'){{$message}} @enderror</span>
     				</div>
     				<div class="form-group">
     					<button class="btn btn-block btn-primary" type="submit">Register</button>
     				</div>
     				<br>
     				<a href="login">Already Registered User !! Login here</a>
     			</form>
     		</div>
     	</div>
     </div>
</body>
</html>