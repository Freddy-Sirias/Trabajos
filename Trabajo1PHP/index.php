<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Freddy PHP</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-orange lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Fred</a>
      <ul class="right hide-on-med-and-down">
        <li class="freddy"><a href="#">Freddy</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Fred</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">Freddy</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Ejercicios php</h1>
      
      <br><br>

    </div>
  </div>


  
   

      <!--   seccion icono   -->
      <div class="row center">
     
      <div class="container">
        <div class="col s12">
          <div class="col s6">
            <h4>Calculo de divisas</h4>

            <form action="inc/calculo.php" method="post">
              
               <div class="input-field col s12">
            <i class="material-icons prefix">input</i>
        
          <input name="monto" id="monto" type="text" required onkeypress=" " class="validate">
          <label for="monto">Monto</label>
        </div>
        <div class="row">
          <div class="container">
            <div class="input-field col s12">
       
    <select name="moneda">
      <option value="" disabled selected>Selecione su moneda</option>
      <option value="1">Córdobas</option>
      <option value="2">Dolares</option>
     
    </select>

    <label>La moneda que ingreso es:</label>
      <i class="material-icons prefix">input</i>
  </div>
          </div>

            <div class="row center">
              <div class="container">
              <br>
          <br>
                  <button class="btn waves-effect waves-light" type="submit" >Enviar
    <i class="material-icons right">send</i>
  </button>
 
       </div>
            </div>
        </div>
     

            </form>
          </div>
          <div class="col s6">
            <h4>Calculo IMC</h4>

              <form method="post" action="inc/imc.php">
           <div class="input-field col s12">
            <i class="material-icons prefix">dialpad</i>
          <input name="peso" id="peso" type="text"   class="validate">
          <label for="peso">Peso (Kg)</label>
          <br>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">dialpad</i>
        
          <input name="altura"  id="altura" type="text"  class="validate">
          <label for="altura">Altura (M)</label>
        </div>
        <div class="row center">
              <div class="container">
              <br>
          
                  <button class="btn waves-effect waves-light" type="submit" >Enviar
    <i class="material-icons right">send</i>
  </button>
 </form>
       </div>
            </div>
          </div>

           
          
        </div>

      </div>

      </div>

      <div class="row center">
        <div class="container">
          <div class="col s12">
            <div class="col s6">
            <h4>Calculos de pagos</h4>
              <form method="post" action="inc/salario.php">
           <div class="input-field col s12">
            <i class="material-icons prefix">clear_all</i>
        
          <input name="horas" id="horas" type="text"  class="validate">
          <label for="horas">Cantidad de horas</label>
        </div>
        <div class="row">

            <div class="row center">
              <div class="container">
                  <button class="btn waves-effect waves-light" type="submit" >Enviar
    <i class="material-icons right">send</i>
  </button>
 
       </div>
            </div>
        </div>
     
        </form>

          </div>
          <div class="col s6">
            <h4>Conversion</h4>

             <form method="post" action="inc/distancia.php">


        <div class="input-field col s12">

          <div class="col s8">
            <i class="material-icons prefix">done</i>
        
          <input name="valor" id="valor" type="text"  class="validate">
          <label for="altura">Cantidad</label>
          </div>

          <div class="col s4">
             <select name="medida">
      
      <option value="1">Km</option>
      <option value="2">Mt</option>
      <option value="3">Pg</option>
      <option value="4">Cm</option>
     
    </select>
   
          </div>
          
        </div>

                   <div class="input-field col s12">

                      
    <select name="salida" multiple>
      
      <option value="1">Kilometro</option>
      <option value="2">Metro</option>
      <option value="3">Pulgada</option>
      <option value="4">Centrimeto</option>
    </select>
     <label>Seleccioone la salida</label>
    
 
                   
         
          
        </div>
        <div class="row">
   

            <div class="row center">
              <div class="container">
                  <button class="btn waves-effect waves-light" type="submit" >Enviar
    <i class="material-icons right">send</i>
  </button>
 
       </div>
            </div>
        </div>
     
        </form>
          </div>
          </div>
        </div>  

      </div>
    <br><br>

    
  
  <footer class="page-footer light-orange">
    
    <div class="footer-copyright">
      <div class="container">
      Hecho por  <a class="orange-text text-lighten-3" href="http://materializecss.com">Freddy</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
   <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
  });
       
  </script>

  </body>
</html>
