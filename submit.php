<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="clipboard.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<?php

$tipo = $_POST['tipo'];
if ($tipo=='1')

{
if(isset($_POST['submit'])){
	$citanombres = "";
	$citanombresConi = "";
	$citadatos = "";
	$citafinalAPA = "";
	$citafinalAPACONI = "";
	$iddspace = $_POST['iddspace'];
    $nameArr = $_POST['name'];
    $name2Arr = $_POST['name2'];
    $apellidoArr = $_POST['apellido'];
    $titulo = $_POST['titulo'];
    $ciudad = $_POST['ciudad'];
    $editorial = $_POST['editorial'];
    $volumentomo = $_POST['volumentomo'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $paginas = $_POST['paginas'];
    $tipo = $_POST['tipo'];

/*	echo 'tipo de cita: '.$tipo.'<br>';
	echo 'ID Dspace: '.$iddspace.'<br>';
	echo 'APA Pura';
*/
    if(!empty($nameArr)){
        for($i = 0; $i < count($nameArr); $i++){
            if(!empty($nameArr[$i])){
                $name = ucwords($nameArr[$i]);
                $name2 = ucwords($name2Arr[$i]);
                $apellido = ucwords($apellidoArr[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{//echo $apellido.', '.$name.' '.$name2.'; ';
				$citanombres = $citanombres.$apellido.', '.$name.' '.$name2.'; ';
				}
				else
				{//echo $apellido.', '.$name.'; '; 
				$citanombres = $citanombres.$apellido.', '.$name.'; '; 
				
				};
								
			}	
		}		
//			echo $citanombres;
    }
}
	 if (!empty($titulo)) {$citadatos = $citadatos.$titulo.'; ';}
	 if (!empty($ciudad)) {$citadatos = $citadatos.$ciudad.': ';}
	 if (!empty($editorial)) {$citadatos = $citadatos.$editorial.'; ';}
	 if (!empty($volumentomo)) {$citadatos = $citadatos.$volumentomo.'; ';}
	 if (!empty($dia)) {$citadatos = $citadatos.$dia.'-';}
	 if (!empty($mes)) {$citadatos = $citadatos.$mes.'-';}
     if (!empty($anio)) {$citadatos = $citadatos.$anio.'; ';}
	 if (!empty($paginas)) {$citadatos = $citadatos.$paginas ;}

$citafinalAPA = $citanombres.$citadatos;
//echo $citafinalAPA; button class="btn"

?>
<center><h3>Resultados Libro</h3></center>
<br>
<h4>APA Pura</h4>
<div class="input-group mb-3">
	<div class="input-group">
		<input id="foo" type="text" value="<?=$citafinalAPA?>" class="form-control">
		<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo">Copiar</button>
	</div>
</div>


   <script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
<?php

// APA Conicet

if(isset($_POST['submit'])){
    $nameArr = $_POST['name'];
    $name2Arr = $_POST['name2'];
    $apellidoArr = $_POST['apellido'];
    $titulo = $_POST['titulo'];
    $ciudad = $_POST['ciudad'];
    $editorial = $_POST['editorial'];
    $volumentomo = $_POST['volumentomo'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $paginas = $_POST['paginas'];

//	echo 'APA Conicet';

    if(!empty($nameArr)){
        for($i = 0; $i < count($nameArr); $i++){
            if(!empty($nameArr[$i])){
                $name = ucwords($nameArr[$i]);
                $name2 = ucwords($name2Arr[$i]);
                $apellido = ucwords($apellidoArr[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{//echo $apellido.', '.$name.' '.$name2.'; ';
				$citanombresConi = $citanombresConi.$apellido.', '.$name[0].'. '.$name2[0].'.; ';
				}
				else
				{//echo $apellido.', '.$name.'; '; 
				$citanombresConi = $citanombresConi.$apellido.', '.$name[0].'.; '; 
				};
            }
        }
    }
}
$citafinalAPACONI = $citanombresConi.$citadatos;
//echo $citafinalAPACONI;

?>

<br>
<h4>APA Conicet</h4>
<div class="input-group mb-3">
	<div class="input-group">
		<input id="foo1" type="text" value="<?=$citafinalAPACONI?>" class="form-control">
		<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo1" >Copiar</button>
	</div>
</div>


 <script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
	
<?php
}

/*
========================================================================================================
========================================================================================================
========================================================================================================
========================================================================================================
========================================================================================================
*/





if ($tipo=='2')
{
if(isset($_POST['submit'])){
	$citanombresAA = "";
	$citanombresAL = "";
	$citanombresConiAA = "";
	$citanombresConiAL = "";
	$citadatos = "";
	$citafinalAPA = "";
	$citafinalAPACONI = "";
	$iddspace = $_POST['iddspace'];

    $nameArrAA = $_POST['nameAA'];
    $name2ArrAA = $_POST['name2AA'];
    $apellidoArrAA = $_POST['apellidoAA'];
    $tituloCap = $_POST['tituloCap'];
    $nameArrAL = $_POST['nameAL'];
    $name2ArrAL = $_POST['name2AL'];
    $apellidoArrAL= $_POST['apellidoAL'];
    $tituloLibro = $_POST['tituloLibro'];
    $edicion = $_POST['edicion'];
    $ciudad = $_POST['ciudad'];
    $editorial = $_POST['editorial'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $paginas = $_POST['paginas'];
  
  $tipo = $_POST['tipo'];

/*	echo 'tipo de cita: '.$tipo.'<br>';
	echo 'ID Dspace: '.$iddspace.'<br>';
	echo 'APA Pura';
*/
    if(!empty($nameArrAA)){
        for($i = 0; $i < count($nameArrAA); $i++){
            if(!empty($nameArrAA[$i])){
                $name = ucwords($nameArrAA[$i]);
                $name2 = ucwords($name2ArrAA[$i]);
                $apellido = ucwords($apellidoArrAA[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{//echo $apellido.', '.$name.' '.$name2.'; ';
				$citanombresAA = $citanombresAA.$apellido.', '.$name.' '.$name2.'; ';
				}
				else
				{//echo $apellido.', '.$name.'; '; 
				$citanombresAA = $citanombresAA.$apellido.', '.$name.'; '; 
				
				};
								
			}	
		}		
//			echo $citanombresAA;
    }
	
    if(!empty($nameArrAL)){
        for($i = 0; $i < count($nameArrAL); $i++){
            if(!empty($nameArrAL[$i])){
                $name = ucwords($nameArrAL[$i]);
                $name2 = ucwords($name2ArrAL[$i]);
                $apellido = ucwords($apellidoArrAL[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{//echo $apellido.', '.$name.' '.$name2.'; ';
				$citanombresAL = $citanombresAL.$apellido.', '.$name.' '.$name2.'; ';
				}
				else
				{//echo $apellido.', '.$name.'; '; 
				$citanombresAL = $citanombresAL.$apellido.', '.$name.'; '; 
				
				};
								
			}	
		}		
//			echo $citanombresAL;
    }
	
}
	 if (!empty($tituloCap)) {$citadatos = $citadatos.$tituloCap.'; En ';}
	 if (!empty($citanombresAL)) {$citadatos = $citadatos.$citanombresAL;}
	 if (!empty($tituloLibro)) {$citadatos = $citadatos.$tituloLibro.'; ';}
	 if (!empty($edicion)) {$citadatos = $citadatos.$edicion.'; ';}
	 if (!empty($ciudad)) {$citadatos = $citadatos.$ciudad.': ';}
	 if (!empty($editorial)) {$citadatos = $citadatos.$editorial.'; ';}
	 if (!empty($dia)) {$citadatos = $citadatos.$dia.'-';}
	 if (!empty($mes)) {$citadatos = $citadatos.$mes.'-';}
     if (!empty($anio)) {$citadatos = $citadatos.$anio.'; ';}
	 if (!empty($paginas)) {$citadatos = $citadatos.$paginas ;}

$citafinalAPA = $citanombresAA.$citadatos;
//echo $citafinalAPA; button class="btn"

?>
<center><h3>Resultados Capítulo de Libro</h3></center>
<br>
<h4>APA Pura</h4>
<div class="input-group mb-3">
	<div class="input-group">
		<input id="foo" type="text" value="<?=$citafinalAPA?>" class="form-control">
		<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo">Copiar</button>
	</div>
</div>


   <script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
<?php

// APA Conicet

if(isset($_POST['submit'])){
    $nameArrAA= $_POST['nameAA'];
    $name2ArrAA = $_POST['name2AA'];
    $apellidoArrAA = $_POST['apellidoAA'];
    $titulo = $_POST['titulo'];
    $ciudad = $_POST['ciudad'];
    $editorial = $_POST['editorial'];
    $volumentomo = $_POST['volumentomo'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $paginas = $_POST['paginas'];

//	echo 'APA Conicet';

    if(!empty($nameArrAA)){
        for($i = 0; $i < count($nameArrAA); $i++){
            if(!empty($nameArrAA[$i])){
                $name = ucwords($nameArrAA[$i]);
                $name2 = ucwords($name2ArrAA[$i]);
                $apellido = ucwords($apellidoArrAA[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{//echo $apellido.', '.$name.' '.$name2.'; ';
				$citanombresConiAA = $citanombresConiAA.$apellido.', '.$name[0].'. '.$name2[0].'; ';
				}
				else
				{//echo $apellido.', '.$name.'; '; 
				$citanombresConiAA = $citanombresConiAA.$apellido.', '.$name[0].'.; '; 
				};
            }
        }
    }
	
    if(!empty($nameArrAL)){
        for($i = 0; $i < count($nameArrAL); $i++){
            if(!empty($nameArrAL[$i])){
                $name = ucwords($nameArrAL[$i]);
                $name2 = ucwords($name2ArrAL[$i]);
                $apellido = ucwords($apellidoArrAL[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{//echo $apellido.', '.$name.' '.$name2.'; ';
				$citanombresConiAL = $citanombresConiAL.$apellido.', '.$name[0].'. '.$name2[0].'; ';
				}
				else
				{//echo $apellido.', '.$name.'; '; 
				$citanombresConiAL = $citanombresConiAL.$apellido.', '.$name[0].'; '; 
				};
            }
        }
    }	
	
}
	$citadatos = "";
	 if (!empty($tituloCap)) {$citadatos = $citadatos.$tituloCap.'; En ';}
	 if (!empty($citanombresConiAL)) {$citadatos = $citadatos.$citanombresConiAL;}
	 if (!empty($tituloLibro)) {$citadatos = $citadatos.$tituloLibro.'; ';}
	 if (!empty($edicion)) {$citadatos = $citadatos.$edicion.'; ';}
	 if (!empty($ciudad)) {$citadatos = $citadatos.$ciudad.': ';}
	 if (!empty($editorial)) {$citadatos = $citadatos.$editorial.'; ';}
	 if (!empty($dia)) {$citadatos = $citadatos.$dia.'-';}
	 if (!empty($mes)) {$citadatos = $citadatos.$mes.'-';}
     if (!empty($anio)) {$citadatos = $citadatos.$anio.'; ';}
	 if (!empty($paginas)) {$citadatos = $citadatos.$paginas ;}

$citafinalAPACONI = $citanombresConiAA.$citadatos;
//echo $citafinalAPACONI;

?>

<br>
<h4>APA Conicet</h4>
<div class="input-group mb-3">
	<div class="input-group">
		<input id="foo1" type="text" value="<?=$citafinalAPACONI?>" class="form-control">
		<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo1" >Copiar</button>
	</div>
</div>


 <script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
	
<?php
}



/*
========================================================================================================
========================================================================================================
========================================================================================================
========================================================================================================
========================================================================================================
*/



if ($tipo=='3')
{

if(isset($_POST['submit'])){
	$citanombres = "";
	$citanombresConi = "";
	$citadatos = "";
	$citafinalAPA = "";
	$citafinalAPACONI = "";
	$iddspace = $_POST['iddspace'];
    
	$nameArr = $_POST['name'];
    $name2Arr = $_POST['name2'];
    $apellidoArr = $_POST['apellido'];
    $tituloArt = $_POST['tituloArt'];
	$editorial = $_POST['editorial'];
    $nombreRevista = $_POST['nombreRevista'];
    $volumentomo = $_POST['volumentomo'];
    $numeroEjemplar = $_POST['numeroEjemplar'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $paginas = $_POST['paginas'];
    $tipo = $_POST['tipo'];

/*	echo 'tipo de cita: '.$tipo.'<br>';
	echo 'ID Dspace: '.$iddspace.'<br>';
	echo 'APA Pura';
*/
    if(!empty($nameArr)){
        for($i = 0; $i < count($nameArr); $i++){
            if(!empty($nameArr[$i])){
                $name = ucwords($nameArr[$i]);
                $name2 = ucwords($name2Arr[$i]);
                $apellido = ucwords($apellidoArr[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{//echo $apellido.', '.$name.' '.$name2.'; ';
				$citanombres = $citanombres.$apellido.', '.$name.' '.$name2.'; ';
				}
				else
				{//echo $apellido.', '.$name.'; '; 
				$citanombres = $citanombres.$apellido.', '.$name.'; '; 
				
				};
								
			}	
		}		
//			echo $citanombres;
    }
}
	 if (!empty($tituloArt)) {$citadatos = $citadatos.$tituloArt.'; ';}
	 if (!empty($editorial)) {$citadatos = $citadatos.$editorial.'; ';}
	 if (!empty($nombreRevista)) {$citadatos = $citadatos.$nombreRevista.'; ';}
	 if (!empty($volumentomo)) {$citadatos = $citadatos.$volumentomo.'; ';}
	 if (!empty($numeroEjemplar)) {$citadatos = $citadatos.$numeroEjemplar.'; ';}
	 if (!empty($dia)) {$citadatos = $citadatos.$dia.'-';}
	 if (!empty($mes)) {$citadatos = $citadatos.$mes.'-';}
     if (!empty($anio)) {$citadatos = $citadatos.$anio.'; ';}
	 if (!empty($paginas)) {$citadatos = $citadatos.$paginas ;}

$citafinalAPA = $citanombres.$citadatos;
//echo $citafinalAPA; button class="btn"

?>
<center><h3>Resultados Artículo</h3></center>
<br>
<h4>APA Pura</h4>

<div class="input-group mb-3">
	<div class="input-group">
		<input id="foo" type="text" value="<?=$citafinalAPA?>" class="form-control">
		<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo">Copiar</button>
	</div>
</div>


   <script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
<?php

// APA Conicet

if(isset($_POST['submit'])){
	$nameArr = $_POST['name'];
    $name2Arr = $_POST['name2'];
    $apellidoArr = $_POST['apellido'];
    $tituloArt = $_POST['tituloArt'];
	$editorial = $_POST['editorial'];
    $nombreRevista = $_POST['nombreRevista'];
    $volumentomo = $_POST['volumentomo'];
    $numeroEjemplar = $_POST['numeroEjemplar'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $paginas = $_POST['paginas'];
	
//	echo 'APA Conicet';

    if(!empty($nameArr)){
        for($i = 0; $i < count($nameArr); $i++){
            if(!empty($nameArr[$i])){
                $name = ucwords($nameArr[$i]);
                $name2 = ucwords($name2Arr[$i]);
                $apellido = ucwords($apellidoArr[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{//echo $apellido.', '.$name.' '.$name2.'; ';
				$citanombresConi = $citanombresConi.$apellido.', '.$name[0].'. '.$name2[0].'.; ';
				}
				else
				{//echo $apellido.', '.$name.'; '; 
				$citanombresConi = $citanombresConi.$apellido.', '.$name[0].'.; '; 
				};
            }
        }
    }
}
$citafinalAPACONI = $citanombresConi.$citadatos;
//echo $citafinalAPACONI;

?>

<br>
<h4>APA Conicet</h4>
<div class="input-group mb-3">
	<div class="input-group">
		<input id="foo1" type="text" value="<?=$citafinalAPACONI?>" class="form-control">
		<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo1" >Copiar</button>
	</div>
</div>


 <script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
	
<?php
}



/*
========================================================================================================
========================================================================================================
========================================================================================================
========================================================================================================
========================================================================================================
*/



if ($tipo=='4')

{
if(isset($_POST['submit'])){
	$citanombres = "";
	$citanombresConi = "";
	$citadatos = "";
	$citafinalAPA = "";
	$citafinalAPACONI = "";
	$iddspace = $_POST['iddspace'];
    $nameArr = $_POST['name'];
    $name2Arr = $_POST['name2'];
    $apellidoArr = $_POST['apellido'];
    $titulo = $_POST['titulo'];
    $editorial = $_POST['editorial'];
    $anio = $_POST['anio'];
    $paginas = $_POST['paginas'];
    $tipo = $_POST['tipo'];
	$coleccionFanzin = 'En Colección Archivo Fanzines de Mendoza: Ilustraciones';
	
/*	echo 'tipo de cita: '.$tipo.'<br>';
	echo 'ID Dspace: '.$iddspace.'<br>';
	echo 'APA Pura';
*/
    if(!empty($apellidoArr)){
        for($i = 0; $i < count($apellidoArr); $i++){
            if(!empty($apellidoArr[$i])){
                $name = ucwords($nameArr[$i]);
                $name2 = ucwords($name2Arr[$i]);
                $apellido = ucwords($apellidoArr[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{$citanombres = $citanombres.$apellido.', '.$name.' '.$name2.'; ';}
				else{
					if (empty($name)) {$citanombres = $citanombres.$apellido.'; ';}
					else{$citanombres = $citanombres.$apellido.', '.$name.'; '; };
					}				
			}	
		}		
//			echo $citanombres;
    }
}
	 if (!empty($titulo)) {$citadatos = $citadatos.$titulo.'; ';}
	 if (!empty($coleccionFanzin)) {$citadatos = $citadatos.$coleccionFanzin.'; ';}
	 if (!empty($editorial)) {$citadatos = $citadatos.$editorial.'; ';}
     if (!empty($anio)) {$citadatos = $citadatos.$anio;}
	 if (!empty($paginas)) {$citadatos = $citadatos.'; '.$paginas ;}

$citafinalAPA = $citanombres.$citadatos;
//echo $citafinalAPA; button class="btn"

?>
<center><h3>Resultados Fanzine</h3></center>
<br>
<h4>APA Pura</h4>
<div class="input-group mb-3">
	<div class="input-group">
		<input id="foo" type="text" value="<?=$citafinalAPA?>" class="form-control">
		<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo">Copiar</button>
	</div>
</div>


   <script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
<?php

// APA Conicet

if(isset($_POST['submit'])){
    $nameArr = $_POST['name'];
    $name2Arr = $_POST['name2'];
    $apellidoArr = $_POST['apellido'];
    $titulo = $_POST['titulo'];
    $editorial = $_POST['editorial'];
    $anio = $_POST['anio'];
    $paginas = $_POST['paginas'];

//	echo 'APA Conicet';

    if(!empty($apellidoArr)){
        for($i = 0; $i < count($apellidoArr); $i++){
            if(!empty($apellidoArr[$i])){
                $name = ucwords($nameArr[$i]);
                $name2 = ucwords($name2Arr[$i]);
                $apellido = ucwords($apellidoArr[$i]);
                //database insert query goes here
				if (!empty($name2)) 
				{$citanombresConi = $citanombresConi.$apellido.', '.$name[0].'. '.$name2[0].'.; ';}
				else{
					if (empty($name)) {$citanombresConi = $citanombresConi.$apellido.'; ';}
					else{$citanombresConi = $citanombresConi.$apellido.', '.$name[0].'.; ';};
					}
				
            }
        }
    }
}
$citafinalAPACONI = $citanombresConi.$citadatos;
//echo $citafinalAPACONI;

?>

<br>
<h4>APA Conicet</h4>
<div class="input-group mb-3">
	<div class="input-group">
		<input id="foo1" type="text" value="<?=$citafinalAPACONI?>" class="form-control">
		<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo1" >Copiar</button>
	</div>
</div>


 <script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
	
<?php
}

/*
========================================================================================================
========================================================================================================
========================================================================================================
========================================================================================================
========================================================================================================
*/





?>