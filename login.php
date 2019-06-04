<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
  <h2> Admin</h2>
  <form action="action_page.php" class="was-validated" method="POST"">
    <div class="form-group">
      <label for="email">Correo:</label>
      <input type="email" class="form-control" id="email" placeholder="Escribir Correo" name="aemail" required>
    </div>
    <div class="form-group">
      <label for="pwd">Contraseña:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Escribir contraseña" name="apswd" required>
    </div>    
    <div><button submit="location.href='login.php'" class="btn btn-primary">Ingresar</button>
	 </form>
	</div>
	<h1 align = "center"><th align = "center">
	<a href="index.php"><button type="button" class="btn btn-primary btn-lg">
	Regresar</button></a></th></h1>
</body>

</html>