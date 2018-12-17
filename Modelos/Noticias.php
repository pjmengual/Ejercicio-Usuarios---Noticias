<?php


 function NoticiasCreate(){

 	print "Se ha <strong>CREADO</strong> la noticia: ";
 
 }
 function NoticiasRead($id){

 	if(isset($id)!=null)
 	print "Se ha <strong>LEIDO</strong> la noticia: ".$id;
 	else
 	print "introduce el id";
 }
 function NoticiasUpdate($id){

 	if(isset($id)!=null)
 	print "Se ha <strong>ACTUALIZADO</strong> la noticia: ".$id;
 	else
 	print "introduce el id";
 }
 function NoticiasDelete($id){

 	if(isset($id)!=null)
 	print "Se ha <strong>BORRADO</strong> la noticia: ".$id;
 	else
 	print "introduce el id";
 
 }
 function NoticiasListado(){

 	print "Se han <strong>LISTADO</strong> las Noticias";
 
 }




?>