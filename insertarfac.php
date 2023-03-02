<?php
$mysql =new mysqli("localhost","root", "","ucadb");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $nombre = $_POST ["nombre"];
    $descripcion = $_POST["descripcion"];
    $ubicacion = $_POST["ubicacion"];
    $my_query = "insert into carrera(nombre, descripcion, ubicacion) values
    (' ".$nombre."' , '".$descripcion."', '".$ubicacion."')";

    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado sastisfactoriamente...";
    }else{

        echo "Error al guardar el registro...";
    }


}else{
    echo "Erro desconocido";
}
 
?>