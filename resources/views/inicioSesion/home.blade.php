<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquilidad y Bienestar</title>
    <link rel="stylesheet" href="{{ asset('css/inicioSesion/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    
    
</head>


<body>
    <!-- Lugar donde se cargará el header -->
    @include('inicioSesion.layouts.header')
    <br>
    <br><br>
    <div class="marca-agua">
    <main class="main-content">


        <div class="container mt-5">
            <!-- Carrusel -->
            <main class="body">
                <div id="carouselExampleIndicators" class="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('css/inicioSesion/imagenes/atardecer.jpg') }}" alt="Imagen1" class="carousel-image">
                    </div>
                    <div class="carousel-item active">
                      <img src="{{ asset('css/inicioSesion/imagenes/atardecer2.jpg') }}" alt="Imagen2" class="carousel-image">
                    </div>
                    <div class="carousel-item active">
                      <img src="{{ asset('css/inicioSesion/imagenes/atardecer3.jpg') }}" alt="Imagen3" class="carousel-image">
                    </div>
                  </div>
                  <button class="carousel-control-prev" onclick="prevSlide()">&#10094;</button>
              <button class="carousel-control-next" onclick="nextSlide()">&#10095;</button>
                </div>
              </main>

            <!-- Frases y Tips -->
            <div class="tips">
                <p id="motivational-quote">"La tranquilidad es el camino hacia la paz interior."</p>
            </div>

            <!-- Título del apartado de Tips -->
            <h1 id="modulosTitle">Tips</h1>

            <!-- Tips y Recomendaciones -->
            <div id="tips-container" class="tips-container">
                <!-- Las tarjetas de tips se generarán dinámicamente aquí -->
            </div>

            <!-- Paginación -->
            <div class="pagination">
                <button onclick="changePage(1)">1</button>
                <button onclick="changePage(2)">2</button>
                <button onclick="changePage(3)">3</button>
            </div>

            <!-- Título de Módulos -->
            <h2 class="text-center mt-5 mb-4" id="modulosTitle">Módulos</h2>

            <!-- Tarjetas principales -->
            <div class="main-card-container">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card text-center" onclick="window.location.href='/atencion-profesional/USUARIO/Home_Usuario/HomeUsuario.html';">
                            <div class="card-body">
                                <h5 class="card-title">Atención Profesional</h5>
                                <img src="{{ asset('css/inicioSesion/imagenes/imagen3.jpg') }}" alt="">
                                <p class="card-text">Recibe apoyo de expertos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" onclick="window.location.href='/mapa-de-suenos/Inicio/Inicio.html';">
                            <div class="card-body">
                                <h5 class="card-title">Mapa de Sueños</h5>
                                <img src="{{ asset('css/inicioSesion/imagenes/imagen2.jpg') }}" alt="">
                                <p class="card-text">Visualiza tus metas y sueños.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" onclick="window.location.href='/musicoterapia/Vistas1.1/bienvenido_a_musicoterapia.html';">
                            <div class="card-body">
                                <h5 class="card-title">Musicoterapia</h5>
                                <img src="{{ asset('css/inicioSesion/imagenes/imagen1.jpg') }}" alt="">
                                <p class="card-text">La música como herramienta de sanación.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Botón Ver Más centrado -->
            <div class="ver-mas-container text-center">
                <button class="btn-ver-mas" onclick="mostrarModulos()">Ver Más</button>
            </div>

            <!-- Módulos ocultos al inicio con animación de aparición -->
<div id="modulos-extras" class="modulos-ocultos animate-fade-in">
    <div class="row mt-4">
        <!-- Módulo de Alimentación -->
        <div class="col-md-6">
            <div class="card text-center" onclick="window.location.href='/alimentacion/Inicio/index.html';">
                <div class="card-body">
                    <h5 class="card-title">Alimentación</h5>
                    <img src="{{ asset('css/inicioSesion/imagenes/imagen4.jpg') }}" alt="Alimentación" class="img-fluid">
                    <p class="card-text">Consejos de alimentación saludable.</p>
                </div>
            </div>
        </div>
        <!-- Módulo de Ejercicios -->
        <div class="col-md-6">
            <div class="card text-center" onclick="window.location.href='/rutinas-de-ejercicios/inicio/index.html';">
                <div class="card-body">
                    <h5 class="card-title">Ejercicios</h5>
                    <img src="{{ asset('css/inicioSesion/imagenes/imagen5.jpg') }}" alt="Ejercicios" class="img-fluid">
                    <p class="card-text">Rutinas de ejercicio recomendadas.</p>
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- Flecha de scroll hacia arriba -->
            <div id="scrollToTop" onclick="scrollToTop()">
                &#9650; <!-- Código de flecha hacia arriba -->
            </div>
    </main>
</div>
    <!-- Lugar donde se cargará el footer -->
    @include('inicioSesion.layouts.footer')
    <script src="/inicio-de-sesion/Modulo-iniciar-sesion/home/script.js"></script>
    <script src="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.js"></script>
    <script src="/inicio-de-sesion/Modulo-iniciar-sesion/Header/Header/script.js"></script>

    
</body>
<script>// Función para hacer scroll hasta el carrusel
    function scrollToTop() {
        const carousel = document.getElementById("carouselExample");
    
        carousel.scrollIntoView({ behavior: "smooth" });
    }
    
    const quotes = [
        "La tranquilidad es el camino hacia la paz interior.",
        "Respira profundamente y encuentra tu centro.",
        "Cada día es una nueva oportunidad para encontrar la paz."
    ];
    
    let currentQuote = 0;
    setInterval(() => {
        currentQuote = (currentQuote + 1) % quotes.length;
        document.getElementById('motivational-quote').innerText = quotes[currentQuote];
    }, 5000);
    
    // Array de tips y recomendaciones
    const tips = [
        // Pagina 1
        { title: "Practica la Respiración Profunda", img: "{{ asset('css/inicioSesion/imagenes/repirar.png') }}", recommendation: "Haz respiraciones lentas y profundas..." },
        { title: "Realiza Ejercicio Regular", img: "{{ asset('css/inicioSesion/imagenes/ejercicio.png') }}", recommendation: "Hacer ejercicio 30 minutos al día..." },
        { title: "Mantén una Dieta Balanceada", img: "{{ asset('css/inicioSesion/imagenes/alimentacion.png') }}", recommendation: "Consume frutas, verduras y proteínas..." },
        { title: "Practica la Meditación", img: "{{ asset('css/inicioSesion/imagenes/meditacion.png') }}", recommendation: "Dedica 10 minutos diarios a la meditación..." },
        { title: "Prioriza el Sueño", img: "{{ asset('css/inicioSesion/imagenes/sueño.png') }}", recommendation: "Dormir al menos 7 horas es clave..." },
        { title: "Establece Metas Diarias", img: "{{ asset('css/inicioSesion/imagenes/metas.png') }}", recommendation: "Establecer metas pequeñas cada día..." },
        // Paginas 2
        { title: "Evita el Estrés", img: "{{ asset('css/inicioSesion/imagenes/estres.png') }}", recommendation: "Tómate un tiempo para relajarte cada día..." },
        { title: "Organiza tu Espacio", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/espacio.png", recommendation: "Un espacio ordenado te ayuda a concentrarte..." },
        { title: "Escucha Música Relajante", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/musica.png", recommendation: "La música tranquila puede mejorar tu ánimo..." },
        { title: "Pasa Tiempo en la Naturaleza", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/naturaleza.png", recommendation: "Conectar con la naturaleza reduce el estrés..." },
        { title: "Aprende Algo Nuevo", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/aprender.png", recommendation: "El aprendizaje continuo estimula la mente..." },
        { title: "Socializa con Amigos", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/socializar.png", recommendation: "Pasar tiempo con amigos fortalece relaciones..." },
        // Página 3
        { title: "Bebe Suficiente Agua", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/agua.png", recommendation: "Mantente hidratado para mejorar tu energía y concentración." },
        { title: "Evita el Exceso de Azúcar", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/azucar.png", recommendation: "Reducir el consumo de azúcar ayuda a mantener tu nivel de energía estable." },
        { title: "Practica la Gratitud", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/gratitud.png", recommendation: "Tomarte unos minutos para agradecer cada día mejora el bienestar general." },
        { title: "Haz una Pausa", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/pausas.png", recommendation: "Tomarse descansos cortos durante el día ayuda a mantener la productividad." },
        { title: "Usa Protector Solar", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/solar.png", recommendation: "Protege tu piel con protector solar incluso en días nublados." },
        { title: "Lee Libros Motivacionales", img: "/inicio-de-sesion/Modulo-iniciar-sesion/home/imagenes/leer.png", recommendation: "Leer libros inspiradores te ayuda a mantener una actitud positiva." },
        
    ];
    // Variables de control de paginación
    let currentPage = 1;
    const tipsPerPage = 6;
    
    function displayTips(page) {
        const startIndex = (page - 1) * tipsPerPage;
        const endIndex = startIndex + tipsPerPage;
        const tipsToDisplay = tips.slice(startIndex, endIndex);
    
        const tipsContainer = document.getElementById('tips-container');
        tipsContainer.innerHTML = ''; // Limpiar el contenido actual
    
        tipsToDisplay.forEach((tip, index) => {
            const tipCard = document.createElement('div');
            tipCard.classList.add('tip-card');
    
            // Crear el contenido de cada tarjeta con el botón que redirige
            tipCard.innerHTML = `
                <h3>${tip.title}</h3>
                <img src="${tip.img}" alt="${tip.title}">
                <button onclick="goToRecommendation(${(page - 1) * tipsPerPage + index})">Ver Más</button>
            `;
    
            tipsContainer.appendChild(tipCard);
        });
    }
    
    function goToRecommendation(index) {
        // Redirigir a los archivos HTML dentro de la carpeta "Recomendacion"
        const pageNumber = index + 1; // Asumiendo que los archivos son "recomendacion1.html", "recomendacion2.html", etc.
        window.location.href = `Recomendacion/recomendacion${pageNumber}.html`;
    }
    
    function changePage(page) {
        currentPage = page;
        displayTips(currentPage);
    }
    
    // Inicializar la primera página
    displayTips(currentPage);
    function mostrarModulos() {
        const modulos = document.getElementById("modulos-extras");
        const botonVerMas = document.querySelector(".btn-ver-mas");
    
        // Mostrar los módulos con animación y ocultar el botón
        modulos.style.display = "block";
        botonVerMas.style.display = "none";
    }
    
    // Mostrar u ocultar la flecha según la posición de scroll
    window.onscroll = function () {
        const scrollToTopBtn = document.getElementById("scrollToTop");
        const carousel = document.getElementById("carouselExample");
    
        if (window.scrollY > 200) {
            scrollToTopBtn.classList.add("show");
        } else {
            scrollToTopBtn.classList.remove("show");
        }
    };
    </script>
</html>