<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php
require 'menu.php';
?>

<div class="container">
<br>

<h3>Generador de Citas</h3>

<blockquote class="blockquote">
  <p class="mb-0">Este generador, posibilita la creación de citas de distintos elementos que se cargan en Dspace.
  Éstas se pueden crear, accediendo por el menú ubicado en la parte superior de cada página. Por el momento se pueden generar citas para:
  Libro, Capítulos de Libros y Artículos.
  El procedimiento es bastante sensillo, una vez que se acceda al apartado elegido, se deberán cargar todos los campos que el formulario nos
  requiera. En el caso de los nombres de autores, existe un botón que permite ir agregando mas autores, en el caso que el elemento tenga mas
  de un autor o autora.
  Una vez finalizada la carga y presionando el boton 'Enviar' se desplegará una ventana emergente donde tendremos dos opciones:</p>
  <p class="mb-0">1 - Cita generada en base a las normas APA.</p>
  <p class="mb-0">2 - Cita generada en base a las normas APA utilizada por CONICET.</p>
  <p class="mb-0">La diferencia entre ambas está en que las normas APA citan a un nombre de esta manera "García, Juan Pedro" y las APA adoptadas por el CONICET lo
  hacen de esta manera "García, J. P.", es decir, con el mismo formato de nombre, pero solo usando las iniciales de cada nombre.
  Están las dos posibilidades, para que en base a lo que se acuerde, el operador podrá elegir la óptima.
  Al lado de cada cita generada, hay un botón que dice "Copiar" el cual permite copiar al portapapeles de la PC, el contenido de la cita 
  ya generada, lo que posibilitará poder pegarla en el campo 'citation' del registro de Dspace que se esté trabajando.
  Para generar otra cita, se cierra esta última ventana emergente y se procede a seguir cargando otro ítem, ya sea del mismo tipo que se venía cargando, o
  de otro tipo que se elija por medio del menú superior.
  Si se sigue cargando ítems del mismo tipo con el botón "Borrar Información" se pueden limpiar todos los valores que existan de una carga anteríor para
  así poder tener todos los campos del formulario en blanco</p>
  <footer class="blockquote-footer">INCIHUSA Digital, <cite title="Source Title"> Marzo, 2020.</cite></footer>
</blockquote>






</div>





</body>
</html>
