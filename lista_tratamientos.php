<html>
	<head><title>Medicos</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 </head>
	<body>		
  <div class="container">
  <table class="table" >
    <thead class="thead-light">
      <tr>		
			
			<th>Código</th>			
			<th>Nombre</th>			
			<th>Médico</th>          
						                     
      </tr>
	</thead> 	
   </div>
	</body>
</html>

<?php
	include "database.php";
	$n=1;
	  $sql_users="SELECT * FROM tratamiento";
	  $result=$conn->query($sql_users);

	  if($result->num_rows > 0){
		  while ($row = $result->fetch_assoc()) {
			  echo "<tr><td>".$row['Codigo']."</td>";
			  echo "<td>".$row['Nombre']."</td>";
			  echo "<td>".$row['Medico']."</td>";			  
		  }
		  echo "</table>";
	  }else{
		  echo "::: No hay Tratamientos registrados :::";
	  }
	  
?>
<html>
<table><br>
   <h1 align="right"><button type="button" class="btn btn-secondary btn-lg">
  Reporte General</button></h1>
  </table>
</html>