<!DOCTYPE html>
<html>
<head>
	<title>sample</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	 <button class="btn btn-success mt-5"><a href="insert.php" class="text-light">Add</a></button>
	<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	include 'connect.php';
    $sql="select * from `pagenation`";
    $result=mysqli_query($conn,$sql);
    $i=1;
    while($query=mysqli_fetch_assoc($result)) { ?>
     <tr>
     	<td><?php echo $i++ ?></td>
     	<td><?=$query['name']?></td>
     	<td><?=$query['email']?></td>
     	<td><button class="btn btn-primary"><a href="update.php?updateid=<?=$query['id']?>" class="text-light">Edit</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid=<?=$query['id']?>" class="text-light">Delete</a></button></td>
     </tr>
   <?php }?>
</tbody>
</table>
</div>
</body>
</html>