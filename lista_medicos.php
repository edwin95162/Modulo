<html>
	<head><title>Medicos</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 </head>
	<body>		
  <div class="container">
  <table class="table" >
    <thead class="thead-light">
      <tr>		
			
			<th>Id</th>			
			<th>Nombre</th>			
			<th>Apellido</th>          
			<th>Especialidad</th>		          
			<th>Horario</th>
			                     
      </tr>
	</thead> 	
   </div>
	</body>
</html>

<?php
	include "database.php";
	$n=1;
	  $sql_users="SELECT * FROM medico";
	  $result=$conn->query($sql_users);

	  if($result->num_rows > 0){
		  while ($row = $result->fetch_assoc()) {
			  echo "<tr><td>".$row['Id']."</td>";
			  echo "<td>".$row['Nombre']."</td>";
			  echo "<td>".$row['Apellido']."</td>";
			  echo "<td>".$row['Especialidad']."</td>";
			  echo "<td>".$row['Horario']." Horas en el día"."</td>";
		  }
		  echo "</table>";
	  }else{
		  echo "::: No hay médicos registrados :::";
	  }
	  
?>
<html>
<table><br>
   <h1 align="right"><button type="button" class="btn btn-secondary btn-lg">
  Reporte General</button></h1>
  </table>
</html>