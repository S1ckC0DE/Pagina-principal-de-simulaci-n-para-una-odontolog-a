<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/desaparecer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://images.vexels.com/content/127559/preview/dentistry-flat-icon-5f56a5.png" type="image/x-icon">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Dc Esteban Pinto</title>
    <script>
    function autoSlide() {
        var slides = document.getElementsByName('slider'); 
        var currentSlide = 0;
        
        setInterval(function() {
            slides[currentSlide].checked = true; 
            currentSlide++;
            
            if (currentSlide >= slides.length) {
                currentSlide = 0; 
            }
        }, 2000);
    }

    window.onload = function() {
        autoSlide();
    };
    
    </script>
</head>
<body>
    <nav class="navbar">
        <div>
        <a href="" id="logo__">Logo</a>
        </div>
        <div>
        <a href="" id="Titulo">Titulo de la pagina web</a>
        <!--<a href="">Button 2</a>
        <a href="">Button 3</a>
        <a href="">Button 4</a>-->
        <!--<a href="" id="box-icon"><box-icon name='search-alt-2'></box-icon></a>-->
        </div>
        <div>
            <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <div>
    </nav>
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleMenu()">&times;</a>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
        <script src="../JS/script.js"></script>
    </div>
    <section>
        <br><br><br><br>
    <div>
        <div id="slider">
            <input type="radio" name="slider" id="slide1" checked>
            <input type="radio" name="slider" id="slide2">
            <input type="radio" name="slider" id="slide3">
            <input type="radio" name="slider" id="slide4">
            <div id="slides">
                <div id="overflow">
                    <div class="inner">
                        <div class="slide slide_1">
                            <div class="slide-content">
                                <h2 id="titulo-slide"></h2>
                                <p></p>
                            </div>
                        </div>
                        <div class="slide slide_2">
                            <div class="slide-content">
                                <h2 id="titulo-slide"></h2>
                                <p></p>
                            </div>
                        </div>
                        <div class="slide slide_3">
                            <div class="slide-content">
                                <h2 id="titulo-slide"></h2>
                                <p></p>
                            </div>
                        </div>
                        <div class="slide slide_4">
                            <div class="slide-content">
                                <h2 id="titulo-slide"></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="controls">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
            <div id="bullets">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
        </div>
    </div>
    </section>
    <br><br><br>
    <hr>
    <div class="info-corte-tipo">
        <div>
            <img src="https://images.vexels.com/content/127559/preview/dentistry-flat-icon-5f56a5.png" alt="">
        </div>
        <div>
            <h1>Descripción del proyecto</h1>
            <br><br>
            <h2>Subtitulo del proyecto</h2>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor <br>
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud<br>
                 exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute <br>
                 irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla <br>
                 pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia<br>
                  deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <hr>
    <section id="Corte">

        <div class="rectangulos-container">
            <div class="rectangulo">
                <div id="prd_caja_2">
                <h1>
                    Producto / servicio 
                </h1>
                </div>
                <div>
                    <box-icon name='child' size="150px" ></box-icon>
                </div>
                <div>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                </div>
            </div>
            <div class="rectangulo">
                <div id="prd_caja_2">
                <h1>
                    Producto / servicio 
                </h1>
                </div>
                <div>
                    <box-icon name='heart-circle' size="150px"></box-icon></box-icon>
                </div>
                <div>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                </div>
            </div>
            <div class="rectangulo">
                <div id="prd_caja_2">
                <h1>
                    Producto / servicio 
                </h1>
                </div>
                <div>
                    <box-icon name='child' size="150px" ></box-icon>
                </div>
                <div>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                </div>
            </div>
            <div class="rectangulo">
                <div id="prd_caja_1">
                <h1>
                    Producto / servicio 
                </h1>
                </div>
                <div>
                    <box-icon name='child' size="150px" ></box-icon>
                </div>
                <div>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                </div>
            </div>
            <div class="rectangulo">
                <div id="prd_caja_1">
                <h1>
                    Producto / servicio 
                </h1>
                </div>
                <div>
                    <box-icon name='heart-circle' size="150px"></box-icon>
                </div>
                <div>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                </div>
            </div>
            <div class="rectangulo">
                <div id="prd_caja_1">
                <h1>
                    Producto / servicio 
                </h1>
                </div>
                <div>
                    <box-icon name='child' size="150px" ></box-icon>
                </div>
                <div>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                </div>
            </div>
          </div>
    </section>
    <br><br><br>
    <section>
        <div class="imagen-drc">
            <div class="content">
                <div class="text-drc">
                    <h1>Titular/ejemplo</h1>
                    <br>
                    <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                </div>
                <div class="img-drc">
                    <img src="https://i.tribune-group.com/0001/805de489/resize-crop(w=1600;h=900):sharpen(level=0):output(format=jpeg)/up/dt/2022/06/UB-Paciente.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="section-carou">   
        <div class="ttl-cas">
        <h1>Casos</h1>
</div>
    <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
                <div class="carousel-item"><div>
                <nav class="img-caso"><img alt="caso No.##"></nav>    
                <nav class="titulo-caso"><h1>Caso No.##</h1></nav>
                <nav class="text-caso"><p>una pequeña descripción sobre que es el caso en cuestión</p></nav>
                <nav><button>Ver más...</button></nav>
                </div></div>
            </div>
            <div class="carousel-nav">
                <button id="prev">&#10094;</button>
                <button id="next">&#10095;</button>
            </div>
        </div>

        
        <script>
        let currentSlide = 0;
        const itemsPerPage = 4;

        function updateCarousel() {
            const carouselInner = document.querySelector('.carousel-inner');
            const totalItems = document.querySelectorAll('.carousel-item').length;
            const maxSlide = Math.ceil(totalItems / itemsPerPage) - 1;
            currentSlide = Math.min(currentSlide, maxSlide);
            const newTransform = -currentSlide * 100 / itemsPerPage;
            carouselInner.style.transform = `translateX(${newTransform}%)`;
        }

        document.getElementById('next').onclick = function() {
            const totalItems = document.querySelectorAll('.carousel-item').length;
            const maxSlide = Math.ceil(totalItems / itemsPerPage) - 1;
            if (currentSlide < maxSlide) {
                currentSlide++;
            }
            updateCarousel();
        };

        document.getElementById('prev').onclick = function() {
            if (currentSlide > 0) {
                currentSlide--;
            }
            updateCarousel();
        };

        window.addEventListener('resize', updateCarousel);
    </script>
    </section>
    <br><br><br>
    <hr>
    
    <section>
    <div class="redes-con">
        <div class="titulo-redes">
        <h1>!Contactanos!</h1>
        <br>
    </div>
        <div class="redes_cubo">
            <div><h1>Twitter</h1></div>
                <div><box-icon name='twitter' type='logo' size="50px" color="#000" ></box-icon></div>
                    <div><h3>@Empresa</h3></div>
                
        </div>
        <div class="redes_cubo">
                <div><h1>Whatsapp</h1></div>
                <box-icon name='whatsapp' type='logo' size="50px" color="#111"></box-icon>
                <div><h3>+57 1234567890</h3></div>
        </div>
        <div class="redes_cubo">
                <div>
                    <h1>Instagram</h1>
                </div>
                <box-icon name='instagram' type='logo' size="50px" color="#000" ></box-icon></i>
                <div>
                    <h3>@Empresa</h3>
                </div>
        </div>
    </div>
    </section>  
    <br><br><br>
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>Sobre mí</h2>
                <p>Desarrollador web apasionado por la programación y la tecnología. Me encanta compartir conocimientos y ayudar a otros a aprender.</p>
            </div>
            <div class="footer-section links">
                <h2>Enlaces</h2>
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#about">Sobre mí</a></li>
                    <li><a href="#projects">Proyectos</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contacto</h2>
                <p>Email: ejemplo@example.com</p>
                <p>Teléfono: +34 123 456 789</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 @empresa | Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>