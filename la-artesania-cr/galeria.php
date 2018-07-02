<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
        <title>La Artesanía CR</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
    <body class="subpage">

        <!-- Header -->
        <header id="header">
            <div class="logo"><a href="index.html">LaArtesaníaCR <span>SISTEMAS EXPERTOS</span></a></div>
            <a href="#menu">Menu</a>
        </header>

        <!-- Nav -->
        <nav id="menu">
            <ul class="links">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="recomendaciones.html">Recomendaciones</a></li>
                <li><a href="categorias.html">Categorías</a></li>
                <li><a href="galeria.html">Galeria</a></li>
                <li><a href="sobreNosotros.html">Sobre Nosotros</a></li>
            </ul>
        </nav>

        <!-- One -->
        <section id="One" class="wrapper style3">
            <div class="inner">
                <header class="align-center">
                    <p>Navega por nuestra galería </p>
                    <h2>Galería</h2>
                </header>
            </div>
        </section>

        <!-- Main -->
        <div id="main" class="container">

            <div style="text-align:center">
                <p>Puedes hacer click en las imagenes para obtener mas información</p>
            </div>

            <!-- The four columns -->
            <div class="rowGallery">
                <div class="columnGallery">
                    <img src="images/ajedres_madera.jpg" alt="Ajedrez" style="width:100%" onclick="myFunction(this);">
                </div>
                <div class="columnGallery">
                    <img src="images/jardin_vidrio.jpg" alt="Jardin" style="width:100%" onclick="myFunction(this);">
                </div>
                <div class="columnGallery">
                    <img src="images/jaguar_barro.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
                </div>
                <div class="columnGallery">
                    <img src="images/figura_madera.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
                </div>
            </div>

            <div class="containerGallery">
                <span onclick="this.parentElement.style.display='none'" class="closebtnGallery">&times;</span>
                <img id="expandedImg" style="width:50%">
                <div id="imgtext"></div>
            </div>
            <div class="table-wrapper">
                <table class="alt">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Material</th>
                            <th>Artista</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Item 1</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>Item 1</td>
                            <td>29.99</td>
                        </tr>
                    </tbody>

                </table>
            </div>



            <!-- Three -->
            <section id="three" class="wrapper style2">
                <div class="inner">
                    <header class="align-center">
                        <p class="special">Calidad, cercanía y variedad </p>
                        <h2>Una pincelada</h2>
                    </header>
                    <div class="gallery">
                        <div>
                            <div class="image fit">
                                <a href="#"><img src="images/rueda_metal.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div>
                            <div class="image fit">
                                <a href="#"><img src="images/tren_metal.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div>
                            <div class="image fit">
                                <a href="#"><img src="images/varios_madera.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div>
                            <div class="image fit">
                                <a href="#"><img src="images/corazon_madera.jpg" alt="" /></a>.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            <!-- Footer -->
            <footer id="footer">
                <div class="container">
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                    </ul>
                </div>
                <div class="copyright">
                    &copy; Untitled. All rights reserved.
                </div>
            </footer>

            <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="assets/js/galeria.js"></script>
</body>
</html>
