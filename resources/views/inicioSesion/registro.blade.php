<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/inicioSesion/registro.css') }}">
</head>

<body>
    <div class="contenedorCrearcuenta1">
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
                    Un camino hacia la sanación y el bienestar emocional comienza con el
                    apoyo y la guía de un psicólogo comprometido.
                </p>
            </div>
        </div>
        <!-- contenedor de crear cuenta -->
        <div class="crearCuenta">
            <div class="contenedorIngresar">
                <h1>Crear Cuenta</h1>
                <p>Ingresa tus datos</p>
                <form class="registrarse">
                    <div class="inputGrupo" style="display: inline-flex">
                        <input type="text" placeholder="Nombre:" />
                        <input type="text" placeholder="Apellidos:" />
                    </div>
                    <div class="inputGrupo">
                        <input type="email" placeholder="Correo:" />
                    </div>
                    <div class="inputGrupo">
                        <input type="password" placeholder="Contraseña:" />
                    </div>
                    <h4>Fecha de nacimiento</h4>
                    <div class="inputGrupo" style="justify-content: center; display: flex">
                        <select>
                            <option value="">Día</option>
                            <!-- Opciones de días -->
                        </select>
                        <select>
                            <option value="">Mes</option>
                            <!-- Opciones de meses -->
                        </select>
                        <select>
                            <option value="">Año</option>
                            <!-- Opciones de años -->
                        </select>
                    </div>
                    <h4>Selecciona tu género</h4>
                    <div class="inputGrupo genero" style="display: inline-flex; justify-content: center">
                        <label><input class="radio" type="radio" name="genero" value="Mujer" />
                            Mujer</label>
                        <label><input class="radio" type="radio" name="genero" value="Hombre" />
                            Hombre</label>
                        <label><input class="radio" type="radio" name="genero" value="Personalizado" />
                            Personalizado</label>
                    </div>
                </form>
                <div class="btnRegistro">
                    <a href="/inicio-de-sesion/Modulo-iniciar-sesion/mensajes/bienvenida.html" class="button">
                        <h3>Crear</h3>
                    </a>
                </div>
            </div>
            <a href="{{ url('/login') }}">¿Ya tienes cuenta?</a>
            <div class="redes">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    
    <script src="script.js"></script>

</body>

</html>