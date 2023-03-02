<?php
$mysql =new mysqli("localhost","root", "","ucadb");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    
    $my_query = "Select *FROM carrera WHERE codigo='$id'";
    $result = $mysql -> query($my_query);

    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        echo "Datos: ".$row['nombre']." ".$row['descripcion']." ".$row['ubicacion'];
    }
    else{
        echo "No se encontro el registro";
    }

}

?>