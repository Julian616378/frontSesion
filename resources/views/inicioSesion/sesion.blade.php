<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio de sesion</title>
  <link rel="stylesheet" href="{{ asset('css/inicioSesion/sesion.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
  <div class="contenedorCrearcuenta">
    <!-- contenedor de ingresar -->
    <div class="ingresar"> 
      <div class="contenedorLogo">
        <img src="{{ asset('css/inicioSesion/img/logo.png') }}" alt="" />
      </div>
      <div class="contenedorH2">
        <h2>¡Bienvenido De Nuevo!</h2>
      </div>
      <div class="contenedorP">
        <p>
          Para mantenerse conectado, inicie sesión con su información
          personal.
        </p>
      </div>

    
    </div>
    <!-- contenedor de crear cuenta -->
    <div class="crearCuenta">
      <div class="contenedorIngresar">
        <h1>Iniciar sesión</h1>
        <p>Ingresa tus datos</p>
        <form class="registrarse">
          <div class="inputGrupo">
            <input type="text" placeholder="Correo:" />
          </div>
          <div class="inputGrupo">
            <input type="password" placeholder="Contraseña:" />
          </div>
          <div class="btnRegistro">
            <a href="{{ url('/home') }}" class="button">
              <h3>Ingresar</h3>
            </a>
          </div>
        </form>
      </div>

      <a href="/inicio-de-sesion/Modulo-iniciar-sesion/mensajes/recuperarContraseña2.html">¿Olvidaste tu contraseña?</a>
      <a href="{{ url('/registroProfesional') }}">Registrarse como profesional</a>
      <a href="{{ url('/registro') }}">Registrate</a>

      <div class="redes">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>
</body>

</html>