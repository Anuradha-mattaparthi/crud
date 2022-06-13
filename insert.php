<?php  include('connect.php');
if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sql="insert into `pagenation`(name,email)values('$name','$email')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header('location:sample.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
<form method="post">
   <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name='name'required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control"name='email'required>

</div>
  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
</form>
</div>
</body>
</html>