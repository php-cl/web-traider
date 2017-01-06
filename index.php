<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset ="UTF8">
  <title>WebTraider</title>
  <meta name="viewport" content="width = device-width">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,100' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
 <body>

  <div class="main-wrapper">
    
  <div class="container">
       <div class="row principal">
          <p>WEBTRAIDER</p>
       </div>
       
       <div class="row">
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3 class="numero"><?php echo "1"; ?></h3> </div></div>
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div>    
       </div>

       <div class="row">
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div>
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div>    
       </div>


       <div class="row">
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div>
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div>    
       </div>

       <div class="row">
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div>
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div>    
       </div>

       <div class="row">
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div>
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div> 
            <div class="col-lg-2 cuadro"><h3>EUR-USD</h3><div class="bott"><h3>1.10</h3> </div></div>    
       </div>

  </div>



  </div>

    <script>            
$(document).ready(function() { 

function actualizar(){
        $('.cuadro .bott').each(function(indice, elemento) {
                $(elemento).html("<h3>Carg:</h3>");
                indice = indice + 1;
        });
    }
        setInterval(actualizar, 1000);

   });
</script>

 </body>
</html>