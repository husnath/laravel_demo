<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>register page</title>
</head>
<body>
<div class="container">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h2>User Register</h2><br>
		<form action="{{ route ('auth.create') }}" method="post">
			@csrf
			<div>
				@if(Session::get('success'))
				<div class="alert alert-danger">
					{{ Session::get('success') }}
				</div>
				@endif

				@if(Session::get('fail'))
				<div class="alert alert-danger">
					{{ Session::get('fail') }}
				</div>
				@endif
			</div>

		  <div class="mb-3">
		    <label for="exampleInputName1" class="form-label" name="name">Name</label>
		    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ old('name') }}">
		    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
		  </div>

		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Username</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="userName" value="{{ old('userName') }}">
		    <span class="text-danger">@error('userName'){{ $message }}@enderror</span>
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1"  value="{{ old('password') }}" name="password">
		    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
		  </div>


		  <button type="submit" class="btn btn-primary">Submit</button>
		  
		  <br>
		  <a href="login">Already have an account</a>
		</form>
	</div>
	<div class="col-md-2"></div>
 </div>
	

</body>
</html>