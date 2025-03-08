<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquilidad y Bienestar</title>
    <link rel="stylesheet" href="{{ asset('css/inicioSesion/usuario.css') }}">
</head>
<body>
 

    @include('inicioSesion.layouts.header')
   <div class="marca-agua">
    <div class="contenido">
        <div class="informacion">
            <div class="infoUsuario">
                <div class="logoUsuario">
                    <img src="{{ asset('css/inicioSesion/imagenesIcon/logoUsuario.png') }}" alt="logoUsuario">
                    <div   id="profilePic" class="editOverlay">
                        <span >Cambiar foto</span>
                    </div>
                </div>
                <div id="modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <img src="{{ asset('css/inicioSesion/imagenesIcon/logoUsuario.png') }}" alt="Current profile picture" class="modal-image">
                        <label for="fileUpload" class="upload-label">Subir nueva foto</label>
                        <input type="file" id="fileUpload" class="file-input">
                    </div>
                </div>
                 <div class="descripcion">
                    <h2 style="text-align: center;"> Juanito Alimaña</h2>
                    <div class="botonesUsuario">

                       <a  id="profilePic1" class="boton">
                           <div class="botonimg">
                              <img src="{{ asset('css/inicioSesion/imagenesIcon/cambiarFoto.png') }}" alt="Agregar">
                           </div><h3>Cambiar foto</h3>
                       </a> 

                        <a   id="editarPerfilBtn" class="boton">
                           <div class="botonimg">
                              <img src="{{ asset('css/inicioSesion/imagenesIcon/editar.png') }}" alt="Editar">
                           </div>
                           <h3>Editar</h3>
                       </a> 
                    </div>
                 </div>
            </div>
            <div class="infoUsuario2">
                <h2 style="text-align: center;">Detalles</h2>
                <div class="Detalles">
                    <div class="infoDetalle">
                        <div class="infoDetalleimg">
                            <img src="{{ asset('css/inicioSesion/imagenesIcon/dondevive.png') }}" alt="dondevive">
                        </div>
                        <p>Vive en <h3>Popayan</h3></p>
                    </div>
                    <div class="infoDetalle">
                        <div class="infoDetalleimg">
                            <img src="{{ asset('css/inicioSesion/imagenesIcon/ubicacion.png') }}" alt="ubicacion">
                        </div>
                        <p>De <h3>Popayan</h3></p>
                    </div>
                    <div class="infoDetalle">
                        <div class="infoDetalleimg">
                            <img src="{{ asset('css/inicioSesion/imagenesIcon/graduado.png') }}" alt="estudios">
                        </div>
                        <p>Estudio en<h3>Institucion Gabriel Garcia Marquez.</h3></p>
                    </div>
                    <div class="infoDetalle">
                        <div class="infoDetalleimg">
                            <img src="{{ asset('css/inicioSesion/imagenesIcon/fecha-de-nacimiento.png') }}" alt="nacimiento">
                        </div>
                        <p>Fecha de nacimiento: <h3>21/05/1999</h3></p>
                    </div>
                </div>
            </div> 
        </div>
        <div class="informacion2">
            <div class="acercaDemi">
                <h1>Acerca de mi</h1>
                <div class="contenedorAcercademi">
                    <div class="contenedorParrafoAcercademi">
                        <p>¡Hola! Soy Juainito, un apasionado de la vida y todo lo que
                            ofrece. Me considero un eterno aprendiz, siempre en busca de
                             nuevas experiencias y conocimientos que enriquezcan mi vida
                              y la de los demás.</p>
                    </div>       
                </div>                
            </div>
        </div>
        <div id="formulario-editar-overlay" class="overlay">
            <div class="formulario-editar">
                <span class="close">&times;</span> <!-- Botón de cierre -->
                <h2>Editar Perfil</h2>
                <form action="/actualizarPerfil" method="POST">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="Juanito" required>
    
                    <label for="apellido" style="text-align: right;">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" value="Alimaña" required>
    
                    <label for="viveEn">Ciudad actual:</label>
                    <input type="text" id="viveEn" name="viveEn" value="Popayán" required>
    
                    <label for="deDondeEs">Ciudad de origen:</label>
                    <input type="text" id="deDondeEs" name="deDondeEs" value="Popayán" required>
    
                    <label for="estudios">Realizó sus estudios en:</label>
                    <input type="text" id="estudios" name="estudios" value="Institución Gabriel García Márquez" required>
    
                    <label for="acercaDeMi">Acerca de mí:</label>
                    <textarea id="acercaDeMi" name="acercaDeMi" rows="5">¡Hola! Soy Juanito, un apasionado de la vida...</textarea>
    
                    <button type="submit">Guardar Cambios</button>
                    <p id="mensaje-guardado" style="color: green; font-weight: bold; display: none; text-align: center; margin-top: 10px;">
                        ¡Cambios guardados con éxito!
                    </p>
                </form>
               
            </div>
        </div>
    </div> 
  </div>
   
           
   <!-- footer -->
   @include('inicioSesion.layouts.footer')

  
   
  
        <script src="/inicio-de-sesion/Modulo-iniciar-sesion/usuario/js.js"></script> 
</body>
</html>

