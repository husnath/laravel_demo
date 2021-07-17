<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>login page</title>
</head>
<body>
<div class="container">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h2>User Login</h2><br>
		<form action="{{ route ('auth.check') }}" method="post">
			@csrf
			<div>
				@if(Session::get('fail'))
				<div class="alert alert-danger">
					{{ Session::get('fail') }}
				</div>
				@endif
			</div>
		  <div class="mb-3">
		    <label for="exampleInputUsername1" class="form-label">Username</label>
		    <input type="text" class="form-control" id="exampleInputUsername1" name="userName" value="{{ old('userName') }}">
		    <span class="text-danger">@error('userName'){{ $message }}@enderror</span>
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" value="{{ old('password') }}">
		    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>

		  <br>
		  <a href="register">Create a new Account?</a>
		</form>
	</div>
	<div class="col-md-2"></div>
 </div>
	

</body>
</html>