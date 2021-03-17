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
						$(".addMore").click(function(){
							if($('body').find('.fieldGroup').length < maxGroup){
								var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
								$('body').find('.fieldGroup:last').after(fieldHTML);
							}else{
								alert('Maximum '+maxGroup+' groups are allowed.');
							}
						});
						
						//remove fields group
						$("body").on("click",".remove",function(){ 
							$(this).parents(".fieldGroup").remove();
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

<h4>Citas de Artículos</h4>

<div class="form-group fieldGroup">
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
            <input type="text" name="name[]" class="form-control" placeholder="Primer Nombre">
            <input type="text" name="name2[]" class="form-control" placeholder="Segundo Nombre"/>
            <input type="text" name="apellido[]" class="form-control" placeholder="Apellido"/>
            <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Agregar</a>
     </div>
   </div>
</div>
       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Título del Artículo</span>
            </div>
            <input type="text" name="tituloArt" class="form-control"/>
       </div><br/>

 	    <div class="input-group">
			<div class="input-group-prepend">
              <span class="input-group-text">Editorial</span>
            </div>
            <input type="text" name="editorial" class="form-control"/>

			<div class="input-group-prepend">
              <span class="input-group-text">Nombre de la Revista</span>
            </div>
            <input type="text" name="nombreRevista" class="form-control"/>

        </div><br/>

	    <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Volumen o tomo</span>
            </div>
            <input type="text" name="volumentomo" class="form-control"/>
 
			<div class="input-group-prepend">
              <span class="input-group-text">Nro. ejemplar</span>
            </div>
            <input type="text" name="numeroEjemplar" class="form-control"/>
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

		<input type="hidden" name="tipo" value="3">


    <br/>
    <input type="submit" name="submit" class="btn btn-primary" value="enviar"/>
 	<br />	<br />
	<input type="reset" class="btn btn-danger" value="Borrar información">
<br />
   
</form>

<!-- copy of input fields group -->
<div class="form-group fieldGroupCopy" style="display: none;">
   <div class="input-group mb-3">
       <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Autor</span>
            </div>
            <input type="text" name="name[]" class="form-control" placeholder="Primer Nombre">
            <input type="text" name="name2[]" class="form-control" placeholder="Segundo Nombre"/>
            <input type="text" name="apellido[]" class="form-control" placeholder="Apellido"/>
            <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Borrar</a>
       </div>
   </div>
</div>



</div>





</body>
</html>
