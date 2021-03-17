<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript">
					$(document).ready(function(){
						//group add limit
						var maxGroup = 10;
						
						//add more fields group
						$(".addMoreAA").click(function(){
							if($('body').find('.fieldGroupAA').length < maxGroup){
								var fieldHTML = '<div class="form-group fieldGroupAA">'+$(".fieldGroupCopyAA").html()+'</div>';
								$('body').find('.fieldGroupAA:last').after(fieldHTML);
							}else{
								alert('Maximum '+maxGroup+' groups are allowed.');
							}
						});
						
						//remove fields group
						$("body").on("click",".removeAA",function(){ 
							$(this).parents(".fieldGroupAA").remove();
						});
					});
		</script>	
		<script type="text/javascript">
					$(document).ready(function(){
						//group add limit
						var maxGroup = 10;
						
						//add more fields group
						$(".addMoreAL").click(function(){
							if($('body').find('.fieldGroupAL').length < maxGroup){
								var fieldHTML = '<div class="form-group fieldGroupAL">'+$(".fieldGroupCopyAL").html()+'</div>';
								$('body').find('.fieldGroupAL:last').after(fieldHTML);
							}else{
								alert('Maximum '+maxGroup+' groups are allowed.');
							}
						});
						
						//remove fields group
						$("body").on("click",".removeAL",function(){ 
							$(this).parents(".fieldGroupAL").remove();
						});
					});
		</script>	
		
		
		
</head>

<body>
<?php
require 'menu.php';
?>

<div class="container">

<form action="submit.php" method="post" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW','width=600,height=400,left=300,top=150');">

<br />

<h4>Citas de Capítulos de Libros</h4>

<div class="form-group fieldGroupAA">
       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">ID Dspace</span>
            </div>
            <input type="text" name="iddspace" class="form-control"/>
       </div><br/>

    <div class="input-group mb-3">
       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Autor</span>
            </div>
            <input type="text" name="nameAA[]" class="form-control" placeholder="Primer Nombre">
            <input type="text" name="name2AA[]" class="form-control" placeholder="Segundo Nombre"/>
            <input type="text" name="apellidoAA[]" class="form-control" placeholder="Apellido"/>
            <a href="javascript:void(0)" class="btn btn-success addMoreAA"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Agregar</a>
     </div>
   </div>
</div>


       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Título del capítulo</span>
            </div>
            <input type="text" name="tituloCap" class="form-control"/>
       </div><br/>
	   

   <div class="input-group mb-3 fieldGroupAL">
       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Autor del Libro</span>
            </div>
            <input type="text" name="nameAL[]" class="form-control" placeholder="Primer Nombre">
            <input type="text" name="name2AL[]" class="form-control" placeholder="Segundo Nombre"/>
            <input type="text" name="apellidoAL[]" class="form-control" placeholder="Apellido"/>
            <a href="javascript:void(0)" class="btn btn-success addMoreAL"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Agregar</a>
     </div>
   </div>
  
		<div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Título del Libro</span>
            </div>
            <input type="text" name="tituloLibro" class="form-control"/>
		</div><br/>

 	    <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Edición</span>
            </div>
            <input type="text" name="edicion" class="form-control"/>

			<div class="input-group-prepend">
              <span class="input-group-text">Ciudad de edición</span>
            </div>
            <input type="text" name="ciudad" class="form-control"/>

            <div class="input-group-prepend">
              <span class="input-group-text">Editorial</span>
            </div>
            <input type="text" name="editorial" class="form-control"/>

        </div><br/>


       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Fecha de la publicación</span>
            </div>
  
			<div class="input-group-prepend">
              <span class="input-group-text">Día</span>
            </div>
            <input type="text" name="dia" class="form-control"/>

            <div class="input-group-prepend">
              <span class="input-group-text">Mes</span>
            </div>
            <input type="text" name="mes" class="form-control"/>

            <div class="input-group-prepend">
              <span class="input-group-text">Año</span>
            </div>
            <input type="text" name="anio" class="form-control"/>
       </div><br/>

	   
       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Cantidad de páginas</span>
            </div>
            <input type="text" name="paginas" class="form-control"/>
       </div>

		<input type="hidden" name="tipo" value="2">


        <br/>
    <input type="submit" name="submit" class="btn btn-primary" value="enviar"/>
	<br />	<br />
	<input type="reset" class="btn btn-danger" value="Borrar información">
<br />


</form>


<!-- copy of input fields group AUTOR DEL ARTICULO -->
<div class="form-group fieldGroupCopyAA" style="display: none;">
   <div class="input-group mb-3">
       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Autor</span>
            </div>
            <input type="text" name="nameAA[]" class="form-control" placeholder="Primer Nombre">
            <input type="text" name="name2AA[]" class="form-control" placeholder="Segundo Nombre"/>
            <input type="text" name="apellidoAA[]" class="form-control" placeholder="Apellido"/>
            <a href="javascript:void(0)" class="btn btn-danger removeAA"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Borrar</a>
       </div>
   </div>
</div>


<!-- copy of input fields group AUTOR DEL LIBRO -->
<div class="form-group fieldGroupCopyAL" style="display: none;">
   <div class="input-group mb-3">
       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Autor</span>
            </div>
            <input type="text" name="nameAL[]" class="form-control" placeholder="Primer Nombre">
            <input type="text" name="name2AL[]" class="form-control" placeholder="Segundo Nombre"/>
            <input type="text" name="apellidoAL[]" class="form-control" placeholder="Apellido"/>
            <a href="javascript:void(0)" class="btn btn-danger removeAL"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Borrar</a>
       </div>
   </div>
</div>



</div>





</body>
</html>
