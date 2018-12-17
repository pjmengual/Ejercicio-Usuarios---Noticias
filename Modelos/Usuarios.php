<?php


 function UsuariosCreate(){

 	print "Se ha <strong>CREADO</strong> el usuario";
 
 }
 function UsuariosRead($id){

	if(isset($id)!=null)
 	print "Se ha <strong>LEIDO</strong> el usuario: ".$id;
 	else
 	print "introduce el id";
 }
 function UsuariosUpdate($id){

 	if(isset($id)!=null)
 	print "Se ha <strong>ACTUALOIZADO</strong> el usuario: ".$id;
 	else
 	print "introduce el id";
 }
 function UsuariosDelete($id){

 	if(isset($id)!=null)
 	print "Se ha <strong>BORRADO</strong> el usuario: ".$id;
 	else
 	print "introduce el id";
 
 }
 function UsuariosListado(){

 	print "Se han <strong>LISTADO</strong> los usuarios";
 
 }

?>