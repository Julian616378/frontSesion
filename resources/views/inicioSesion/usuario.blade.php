<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil - Tranquilidad y Bienestar</title>
    <link rel="stylesheet" href="{{ asset('css/inicioSesion/usuario.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Estilos adicionales para el formulario */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .formulario-editar {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            max-height: 90vh;
            overflow-y: auto;
        }
        
        .formulario-editar h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        
        .formulario-editar label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #34495e;
        }
        
        .formulario-editar input[type="text"],
        .formulario-editar textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .formulario-editar textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        .formulario-editar button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
        }
        
        .formulario-editar button:hover {
            background-color: #2980b9;
        }
        
        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 28px;
            font-weight: bold;
            color: #7f8c8d;
            cursor: pointer;
        }
        
        .close:hover {
            color: #34495e;
        }
        
        /* Estilos para el modal de foto */
        .modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border-radius: 8px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            position: relative;
        }
        
        .modal-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 15px auto;
            border: 3px solid #3498db;
        }
        
        .upload-label {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }
        
        .upload-label:hover {
            background-color: #2980b9;
        }
        
        .file-input {
            display: none;
        }
        
        #mensaje-guardado {
            color: #27ae60;
            font-weight: bold;
            text-align: center;
            margin-top: 15px;
            display: none;
        }
    </style>
</head>
<body>
    @include('inicioSesion.layouts.header')
   
    <div class="marca-agua">
        <div class="contenido">
            <div class="informacion">
                <div class="infoUsuario">
                    <div class="logoUsuario">
                        <img id="profileImage" src="{{ $usuario->foto ?? asset('css/inicioSesion/imagenesIcon/logoUsuario.png') }}" alt="Foto de perfil">
                        <div id="profilePic" class="editOverlay">
                            <span>Cambiar foto</span>
                        </div>
                    </div>
                    <div id="modal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <img id="modalProfileImage" src="{{ $usuario->foto ?? asset('css/inicioSesion/imagenesIcon/logoUsuario.png') }}" alt="Foto de perfil" class="modal-image">
                            <label for="fileUpload" class="upload-label">Subir nueva foto</label>
                            <input type="file" id="fileUpload" class="file-input" accept="image/*">
                        </div>
                    </div>
                    <div class="descripcion">
                        <h2 style="text-align: center;" id="nombreCompleto">{{ $usuario->nombre }} {{ $usuario->apellidos }}</h2>
                        <div class="botonesUsuario">
                            <a id="profilePic1" class="boton">
                                <div class="botonimg">
                                    <img src="{{ asset('css/inicioSesion/imagenesIcon/cambiarFoto.png') }}" alt="Cambiar foto">
                                </div>
                                <h3>Cambiar foto</h3>
                            </a> 
                            <a id="editarPerfilBtn" class="boton">
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
                            <p>Vive en <h3 id="viveEnText">{{ $usuario->vive_en }}</h3></p>
                        </div>
                        <div class="infoDetalle">
                            <div class="infoDetalleimg">
                                <img src="{{ asset('css/inicioSesion/imagenesIcon/ubicacion.png') }}" alt="ubicacion">
                            </div>
                            <p>De <h3 id="deDondeEsText">{{ $usuario->de_donde_es }}</h3></p>
                        </div>
                        <div class="infoDetalle">
                            <div class="infoDetalleimg">
                                <img src="{{ asset('css/inicioSesion/imagenesIcon/graduado.png') }}" alt="estudios">
                            </div>
                            <p>Estudio en<h3 id="estudiosText">{{ $usuario->estudios }}</h3></p>
                        </div>
                        @if($usuario->fecha_nacimiento)
                        <div class="infoDetalle">
                            <div class="infoDetalleimg">
                                <img src="{{ asset('css/inicioSesion/imagenesIcon/fecha-de-nacimiento.png') }}" alt="nacimiento">
                            </div>
                            <p>Fecha de nacimiento: <h3>{{ date('d/m/Y', strtotime($usuario->fecha_nacimiento)) }}</h3></p>
                        </div>
                        @endif
                    </div>
                </div> 
            </div>
            <div class="informacion2">
                <div class="acercaDemi">
                    <h1>Acerca de mi</h1>
                    <div class="contenedorAcercademi">
                        <div class="contenedorParrafoAcercademi">
                            <p id="acercaDeMiText">{{ $usuario->acerca_de_mi ?? 'Este usuario aún no ha completado su información.' }}</p>
                        </div>       
                    </div>                
                </div>
            </div>
            <div id="formulario-editar-overlay" class="overlay">
                <div class="formulario-editar">
                    <span class="close">&times;</span>
                    <h2>Editar Perfil</h2>
                    <form id="formularioActualizarPerfil" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="tipoUsuario" name="tipo" value="{{ $tipo ?? 'usuario' }}">
                        <input type="hidden" id="usuarioId" name="id" value="{{ $usuario->id }}">
                    
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
                    
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" value="{{ $usuario->apellidos }}" required>
                    
                        <label for="viveEn">Ciudad actual:</label>
                        <input type="text" id="viveEn" name="viveEn" value="{{ $usuario->vive_en }}" required>
                    
                        <label for="deDondeEs">Ciudad de origen:</label>
                        <input type="text" id="deDondeEs" name="deDondeEs" value="{{ $usuario->de_donde_es }}" required>
                    
                        <label for="estudios">Realizó sus estudios en:</label>
                        <input type="text" id="estudios" name="estudios" value="{{ $usuario->estudios }}" required>
                    
                        <label for="acercaDeMi">Acerca de mí:</label>
                        <textarea id="acercaDeMi" name="acercaDeMi" rows="5">{{ $usuario->acerca_de_mi }}</textarea>
                    
                        <label for="foto">Foto de perfil:</label>
                        <input type="file" id="foto" name="foto" accept="image/*">
                    
                        <button type="submit">Guardar Cambios</button>
                        <p id="mensaje-guardado" style="color: green; font-weight: bold; display: none; text-align: center; margin-top: 10px;">
                            ¡Cambios guardados con éxito!
                        </p>
                    </form>
                </div>
            </div>
        </div> 
    </div>
       
    @include('inicioSesion.layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del DOM
            const editarPerfilBtn = document.getElementById('editarPerfilBtn');
            const formularioOverlay = document.getElementById('formulario-editar-overlay');
            const closeBtn = formularioOverlay.querySelector('.close');
            const formulario = document.getElementById('formularioActualizarPerfil');
            const mensajeGuardado = document.getElementById('mensaje-guardado');
            const modal = document.getElementById('modal');
            const profilePicBtn = document.getElementById('profilePic');
            const profilePicBtn1 = document.getElementById('profilePic1');
            const modalClose = modal.querySelector('.close');
            const fileUpload = document.getElementById('fileUpload');
            const fotoInput = document.getElementById('foto');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            // Mostrar formulario de edición
            editarPerfilBtn.addEventListener('click', function() {
                formularioOverlay.style.display = 'flex';
            });

            // Cerrar formulario
            closeBtn.addEventListener('click', function() {
                formularioOverlay.style.display = 'none';
            });

            // Mostrar modal de cambio de foto
            profilePicBtn.addEventListener('click', function() {
                modal.style.display = 'block';
            });

            profilePicBtn1.addEventListener('click', function() {
                modal.style.display = 'block';
            });

            // Cerrar modal de foto
            modalClose.addEventListener('click', function() {
                modal.style.display = 'none';
            });

            // Cerrar al hacer clic fuera del modal/formulario
            window.addEventListener('click', function(event) {
                if (event.target === formularioOverlay) {
                    formularioOverlay.style.display = 'none';
                }
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });

            // Manejar envío del formulario principal
            formulario.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(formulario);
                const usuarioId = document.getElementById('usuarioId').value;
                
                fetch(`/perfil/${usuarioId}/actualizar`, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error en la respuesta del servidor');
                    }
                    return response.json();
                })
                .then(data => {
                    if(data.success) {
                        // Mostrar mensaje de éxito
                        mensajeGuardado.style.display = 'block';
                        
                        // Ocultar mensaje después de 3 segundos
                        setTimeout(() => {
                            mensajeGuardado.style.display = 'none';
                            formularioOverlay.style.display = 'none';
                        }, 3000);
                        
                        // Actualizar la vista con los nuevos datos
                        actualizarVistaPerfil(data.usuario);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Ocurrió un error al actualizar el perfil');
                });
            });

            // Manejar cambio de foto desde el modal
            fileUpload.addEventListener('change', function(e) {
                if(this.files && this.files[0]) {
                    const formData = new FormData();
                    formData.append('foto', this.files[0]);
                    formData.append('tipo', document.getElementById('tipoUsuario').value);
                    formData.append('_token', csrfToken);
                    
                    const usuarioId = document.getElementById('usuarioId').value;
                    
                    fetch(`/perfil/${usuarioId}/actualizar-foto`, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if(data.success) {
                            // Actualizar la imagen en la vista
                            document.getElementById('profileImage').src = data.foto_url;
                            document.getElementById('modalProfileImage').src = data.foto_url;
                            modal.style.display = 'none';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error al subir la imagen');
                    });
                }
            });

            // Función para actualizar la vista con los nuevos datos
            function actualizarVistaPerfil(usuario) {
                // Actualizar nombre
                document.getElementById('nombreCompleto').textContent = `${usuario.nombre} ${usuario.apellidos}`;
                
                // Actualizar detalles
                document.getElementById('viveEnText').textContent = usuario.vive_en;
                document.getElementById('deDondeEsText').textContent = usuario.de_donde_es;
                document.getElementById('estudiosText').textContent = usuario.estudios;
                
                // Actualizar "Acerca de mí"
                document.getElementById('acercaDeMiText').textContent = usuario.acerca_de_mi;
                
                // Si hay foto nueva, actualizarla
                if(usuario.foto) {
                    document.getElementById('profileImage').src = usuario.foto;
                    document.getElementById('modalProfileImage').src = usuario.foto;
                }
            }
        });
    </script>
</body>
</html>