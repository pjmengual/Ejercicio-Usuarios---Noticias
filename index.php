<?php

include("./Modelos/Usuarios.php");
include("./Modelos/Noticias.php");
include("./Include/Funciones.php");

error_reporting(0);

if (isset($_GET['seccion'])!=null)
$seccion=$_GET['seccion'];

if (isset($_GET['operacion']))
$operacion=$_GET['operacion'];

if (isset($_GET['id']))
$id=$_GET['id'];

if ($seccion=="Usuarios"){

	if(isset($_GET['operacion'])==false){

		UsuariosListado();

	}
	else{
		$operacion=$_GET['operacion'];

	switch ($operacion) {

    case 'editar':
        UsuariosUpdate($_GET['id']);
        break;
    case 'borrar':
        UsuariosDelete($_GET['id']);
        break;
    case 'crear':
        UsuariosCreate();
    	break;
    case 'leer':
        UsuariosRead($_GET['id']);
    	break;
    default:
    	print "Operacion incorrecta";
    	break;
       }
}
}
elseif ($seccion!="Noticias"){

	print "Seccion incorrecta";
}
	
    	
    
    

elseif ($seccion=="Noticias"){

	if(isset($_GET['operacion'])==false){

		NoticiasListado();

	}
	else{
		$operacion=$_GET['operacion'];

	switch ($operacion) {

    case 'editar':
        NoticiasUpdate($_GET['id']);
        break;
    case 'borrar':
        NoticiasDelete($_GET['id']);
        break;
    case 'crear':
        NoticiasCreate();
    	break;
    case 'leer':
        NoticiasRead($_GET['id']);
    	break;
    }
}
}
else{

	print "Seccion incorrecta";
}

?>