<html>
	<head><title>Medicos</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 </head>
	<body>
  <br><h2 align="center">Lista Pacientes</h2>		
  <div class="container">
  <table class="table" >
    <thead class="thead-light">
      <tr>		
			
			<th>Cc</th>			
			<th>Paciente</th>			
			<th>Historia Clínica</th>          
			<th>Tratamiento</th>		          
						                     
      </tr>
	</thead> 	
   </div>
	</body>
</html>

<?php
	include "database.php";
	$n=1;
	  $sql_users="SELECT * FROM paciente";
	  $result=$conn->query($sql_users);

	  if($result->num_rows > 0){
		  while ($row = $result->fetch_assoc()) {
			  echo "<tr><td>".$row['Cc']."</td>";
			  echo "<td>".$row['Paciente']."</td>";
			  echo "<td>".$row['Historia Clínica']."</td>";
			  echo "<td>".$row['Tratamiento']."</td>";
			}
		  echo "</table>";
	  }else{
		  echo "::: No hay pacientes registrados :::";
	  }
	  
?>
<html>
<br><table>
	<th width="920px" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 15px"><a href="index.php"><button type="button" class="btn btn-primary btn-lg">
	Regresar</button></a></th>
	<th></th>
	<th><button type="button" class="btn btn-secondary btn-lg">
	Reporte General</button></th>
	</table><br>
	<div class="well-sm col-sm-12">
<div class="btn-group pull-right">
<form action=" <?php echo $_SERVER["PHP_SELF"]; ?>“ method="post">
<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Exportar a Excel</button>
</form>
</div>
</div>
</html>