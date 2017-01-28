<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Ingreso</title>
  <!--link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>


      <!-- Header -->
         <header id="header">
            <h1><a href="../../index.php">W00tflix<span></span></a></h1>
    
    </header>
    
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrate</a></li>
        <li class="tab"><a href="#login">Ingresa</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <div class="tituloo">Registrate para entrar</div>
          
          <form action="../../index2.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombres<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Apellidos<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Correo electronico<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contrasena<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block">Empecemos</button> 
		  <a href="https://www.facebook.com/"><img src="../../images/face.png" width="480px" style="position:relative; margin-left:-30px; margin-top:-25px;" /></a>
          
          </form>

        </div>
        
        <div id="login">   
          <div class="tituloo">Bienvenido!</div>
          
          <form action="../../index2.php" method="post">
          
            <div class="field-wrap">
            <label>
              Correo electronico<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Olvidaste tu contraseña?</a></p>
          
          <button class="button button-block" onclick="parent.location.href('http://www.pagina.com');">Ingresa</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
    
    <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/jquery.scrolly.min.js"></script>
   <script src="../assets/js/skel.min.js"></script>
   <script src="../assets/js/util.js"></script>
   <script src="../assets/js/main.js"></script>
   
   
    </div>
</body>
</html>