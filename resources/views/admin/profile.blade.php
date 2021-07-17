<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>admin profile</title>
</head>
<body>
	<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Type</th>
      <th scope="col">email</th>
      <th><a href="logout">Logout</a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $LoggedUserInfo->userName }}</td>
      <td>{{ $LoggedUserInfo->type }}</td>
      <td>{{ $LoggedUserInfo->email }}</td>
      
    </tr>
   
  </tbody>
</table>
</div>

</body>
</html>