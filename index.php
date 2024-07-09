<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perú En Tu Mente</title>
    <link rel="stylesheet" href="css/Index.css">
    <link rel="stylesheet" href="css/Niveles.css">
    <link rel="stylesheet" href="css/Galería.css">
</head>

<body>
    <?php
    include 'modules/header.php';
    ?>
    <!------------------- CARRUSEL- MÓVIL------------------->
    <section class="carrusel-movil">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="assets/img/bannerMobile.png" class="d-block w-100" style="max-width:100%" alt="bannerMovile">
                </div>
            </div>
        </div>
    </section>
    <section class="carrusel-pc">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="assets/img/bannerMain.png" style="max-width:100%" class="d-block w-100" alt="bannerMain">
                </div>
            </div>
        </div>
    </section>

    <!---------------------------- NOSOTROS ----------------------------->
    <section class="content-nosotros">
        <div class="nosotros-descripcion">
            <h2>¿Cuánto sabes realmente sobre la fascinante cultura de Perú</h2>
            <p>Descúbrelo ahora con nuestro emocionante quiz interactivo diseñado para jóvenes como tú que desean
                explorar y fortalecer su conocimiento
                sobre nuestro hermoso país. Sumérgete en un viaje de descubrimiento mientras exploras preguntas sobre la
                rica historia, tradiciones coloridas,
                deliciosa gastronomía y lugares icónicos de Perú. Desde las majestuosas ruinas en Machu Picchu hasta las
                vibrantes celebraciones de Inti Raymi,
                nuestro quiz abarca una amplia gama de temas que te permitirán conocer más a fondo la diversidad y la
                belleza de nuestra cultura.</p>
        </div>
        <div class="nosotros-img">
            <img src="https://ivolegal.com/wp-content/uploads/2021/11/ivolegal-imagenes-chica-estudiando.png"
                alt="image1">
        </div>
    </section>
    <!---------------------------- OBJETIVOS ----------------------------->
    <section class="content-objetivos">
        <h2>Nuestros objetivos</h2>
        <div class="cards-obj">
            <div class="card-obj">
                <img src="https://img.freepik.com/vector-gratis/ilustracion-peruana-dibujada-mano_23-2150079003.jpg"
                    alt="image2">
                <div class="card-content">
                    <h3>Evaluar el nivel de conocimiento sobre la cultura peruana</h3>
                    <p>*Abordar áreas clave como historia, arte, gastronomía y música. <br>
                        *Medir la familiaridad con eventos históricos, figuras destacadas, platos tradicionales y
                        géneros musicales peruanos.</p>
                </div>
            </div>
            <div class="card-obj">
                <img src="https://st5.depositphotos.com/1292719/64658/v/450/depositphotos_646587972-stock-illustration-peru-cartoon-vector-doodle-illustration.jpg"
                    alt="image3">
                <div class="card-content">
                    <h3>Proporcionar una experiencia educativa</h3>
                    <p>*Ofrecer explicaciones detalladas junto con las respuestas correctas para ampliar el
                        conocimiento.<br>
                        *Incluir información adicional sobre temas específicos para enriquecer la comprensión de la
                        cultura peruana.</p>
                </div>
            </div>
            <div class="card-obj">
                <img src="https://st5.depositphotos.com/1292719/66133/i/450/depositphotos_661334094-stock-photo-autumn-cartoon-doodles-illustration-fall.jpg"
                    alt="image4">
                <div class="card-content">
                    <h3> Despertar el interés y la conexión emocional con la cultura peruana</h3>
                    <p>*Plantear preguntas ineresantes y desafiantes que fomentan la curiosidad y la exploración.<br>
                        *Incentivar la difusión de resultados en redes sociales para compartir el descubrimiento y
                        promover la cultura</p>
                </div>
            </div>
        </div>
    </section>
    <!----------------------QUIZ_PREVIEW------------------------->
    <section>
        <div class="contenidoQuiz">
            <h2>Que contendrá nuestro quiz?</h2>
            <p>En un esfuerzo por celebrar y promover el rico legado cultural de nuestra amada
                patria, nos complace presentarles nuestro emocionante Quiz de Cultura General Peruana. Como peruanos,
                reconocemos la importancia de conocer y valorar nuestra historia, tradiciones y contribuciones al mundo,
                y qué mejor manera de hacerlo que a través de un desafío divertido y educativo.
                En este quiz, nos sumergiremos en las profundidades de la historia milenaria del Perú, desde los
                antiguos incas hasta los valientes guerreros de las culturas precolombinas. Exploraremos las maravillas
                geográficas de nuestro país, desde las alturas de los Andes hasta las vastas extensiones de la selva
                amazónica y las costas bañadas por el océano Pacífico. <strong>El usuario podrá escoger la cantidad de
                    preguntas que desea realizar y las preguntas serán aleatorias.</strong></p>
        </div>
        <div class="container-niveles">
            <div class="hexagon">
                <div class="shape">
                    <img src="https://static.vecteezy.com/system/resources/previews/014/307/354/non_2x/thin-tree-trunk-icon-cartoon-style-vector.jpg"
                        alt="image5">
                    <div class="content">
                        <div>
                            <h2>Nivel Fácil </h2>
                            <p>Desafía tus conocimientos fundamentales con preguntas simples pero informativas sobre una
                                variedad de temas en nuestro nivel básico. Perfecto para principiantes y aquellos que
                                deseen refrescar sus bases.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="https://thumbs.dreamstime.com/b/dibujo-animado-%C3%A1rbol-verde-aislado-sobre-fondo-blanco-ilustraci%C3%B3n-de-planta-s%C3%ADmbolo-ecol%C3%B3gico-214183581.jpg"
                        alt="image6">
                    <div class="content">
                        <div>
                            <h2>Nivel intermedio</h2>
                            <p>Sube la apuesta y demuestra tus habilidades de conexión entre temas con nuestro nivel
                                intermedio de preguntas de cultura general. Aquí encontrarás preguntas diseñadas para
                                desafiar tu pensamiento crítico y tu capacidad para hacer conexiones.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="https://cdn.pixabay.com/photo/2017/01/31/22/47/tree-2027899_1280.png" alt="image7">
                    <div class="content">
                        <div>
                            <h2>Nivel Avanzado</h2>
                            <p>¡Prepárate para el desafío definitivo! Nuestro nivel difícil te pondrá a prueba con
                                preguntas complejas y poco convencionales que separarán a los verdaderos eruditos de los
                                aficionados. ¿Tienes lo que se necesita para conquistarlo?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------Galería de Imagenes ------------------------->
    <section class="section-servicios-vp">
        <h1>Galería de Imágenes</h1>
        <div class="container-serv">
            <div class="hexagon">
                <div class="shape">
                    <img src="https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-1.jpg"
                        alt="image8">
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-3.jpg"
                        alt="image9">
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-2.jpg"
                        alt="image10">
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-5.jpg"
                        alt="image11">
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-4.jpg"
                        alt="image12">
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-6.jpg"
                        alt="image13">
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-8.jpg"
                        alt="image14">
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="https://tipsparatuviaje.com/wp-content/uploads/2019/07/montana-ausangate.jpg"
                        alt="image15">
                </div>
            </div>
        </div>
    </section>
    <section class="Registrate-quiz">
        <div class="imagen-registro">
            <img src="https://mir-s3-cdn-cf.behance.net/projects/404/ab060d105326347.Y3JvcCwxOTczLDE1NDMsMjY4LDQ1OQ.png"
                alt="image16">
        </div>
        <div class="iniciar-quiz">
            <div class="formulario-registro">
                <h3>EMPIEZA AHORA!</h3><br>
                <form>
                    <div>
                        <label>¡Pon a prueba tu conocimiento sobre el Perú y descubre cuánto
                            sabes de nuestra rica cultura y fascinante historia! ¡Haz el test ahora y
                            sorpréndete!</label>
                    </div><br>
                    <a href="modules/quiz.php" class="btnQuiz">Iniciar Quiz</a>
                </form>
            </div>
        </div>
    </section>

    <?php
    include 'modules/footer.php';
    ?>
</body>

</html>