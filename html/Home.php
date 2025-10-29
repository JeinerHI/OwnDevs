<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer - Home</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>

    <?php require_once("header.php"); ?> //Editando para ver los cambios en git

    <section class="first-section">
        <div class="content-section">
            <div class="first-column-section">
                <h1 class="title-first-column-section">
                    ¡Transforma retos en victorias!
                </h1>
                <p class="text-first-column-section">
                    Como entrenador personal apasionado, creo en la capacitación de las personas para alcanzar sus
                    objetivos de fitness a través de entrenamiento personalizado y apoyo.
                </p>
                <a href="SignUp.html" class="cta1">
                    <h2>¡Unirme!</h2>
                </a>
            </div> 
            <div class="second-column-section">
                <img src="../img/entrenador random.png" alt="">
            </div>
            <div class="third-column-section">
                <div class="contenido-form">
                    <form action="">
                        <h2>No te lies, te llamamos...</h2>
                        <label for="">nombre</label>
                        <input type="text" placeholder="Juan Peres" required>
                        <label for="">Telefono</label>
                        <input type="number" placeholder="+34-123456789" required>
                        <label for="">email</label>
                        <input type="email" placeholder="example@example.com" required>
                        <label for="">Detalles (*Opcional*)</label>
                        <textarea name="" id="" placeholder="Detalles..."></textarea>
                        <button>Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="second-section">
        <div class="content-section">
            <div class="left-column-section">
                <img src="../img/logo-header.png" alt="">
            </div>
            <div class="right-column-section">
                <h2 class="sizeh1">Who are we?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore incidunt quasi repudiandae error minus
                    est cum nisi velit non aliquid? Blanditiis culpa voluptates veritatis. Officia perferendis in quo soluta
                    autem.</p>
                <div class="waw-indicators">
                    <div class="first-indicador">
                        <h2 class="value">
                            More +
                        </h2>
                        <p>Discipline</p>
                    </div>
                    
                    <div class="second-indicador">
                        <h2 class="value">
                            Less -
                        </h2>
                        <p>Excuses</p>
                    </div>
                    
                    <div class="third-indicador">
                        <h2 class="value">
                            Equals =
                        </h2>
                        <p>Great Results</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="third-section">
        <div class="content-section">
            <div class="right-column-section">
                <h2 class="sizeh1">QUALIFICATIONS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore incidunt quasi repudiandae error minus
                    est cum nisi velit non aliquid? Blanditiis culpa voluptates veritatis. Officia perferendis in quo soluta
                    autem.</p>
                <div class="waw-indicators">
                    <div class="first-indicador">
                        <h2 class="value">
                            CERTIFICATED
                        </h2>
                    </div>
                    
                    <div class="second-indicador">
                        <h2 class="value">
                            TRUST
                        </h2>
                    </div>
                    
                    <div class="third-indicador">
                        <h2 class="value">
                            EXPERIENCED
                        </h2>
                    </div>
                </div>
            </div>
            <div class="left-column-section">
                <img src="../img/logo-header.png" alt="">
            </div>
        </div>
    </section>

    <section class="fourth-section">
        <div class="content-section">
            <h2 class="sizeh1">training programs</h2>
            <p>Choose your program</p>
                <div class="waw-indicators">
                    <a href="#">
                        <article class="first-indicador">
                            <h3>Personal Trainings</h3>
                            <h2 class="value">
                                200$
                            </h2>
                            <span>Incidunt, iusto deserunt! Fugit quas consequuntur dolorum veritatis quidem iste!</span>
                            <a href="forms/Get_Started.html" class="cta1">
                                <h2>Contratar</h2>
                            </a>
                        </article>
                    </a>
                    <a href="#">
                        <article class="second-indicador">
                            <h3>Personal Training + Diet</h3>
                            <h2 class="value">
                                300$
                            </h2>
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
                            <a href="forms/Get_Started.html" class="cta1">
                                <h2>Contratar</h2>
                            </a>
                        </article>
                    </a>
                    <a href="#">
                        <article class="third-indicador">
                            <h3>Diet</h3>
                            <h2 class="value">
                                150$
                            </h2>
                            <span>Autem ad culpa rem ullam eveniet quod cum, delectus minima! Itaque, laudantium!</span>
                            <a href="forms/Get_Started.html" class="cta1">
                                <h2>Contratar</h2>
                            </a>
                        </article>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="whatsapp-button">
            <div id="chatbox" class="form">
                <div class="head">
                    <h3>Chateanos...</h3>
                    <div id="close" class="close">
                        <p>x</p>
                    </div>
                </div>
                <textarea name="Escribe un whastapp" id="" placeholder="Hello world"></textarea>
            </div>
            <div id="chat-toggle" class="w-button">
                <img src="../img/whatsapp-logo.webp" alt="">
            </div>
        </div>
        <div class="content-footer">
            <div class="first-column-footer logo">
                <img src="../img/logo-header.png" alt="">
            </div>
            <div class="second-column-footer">
                <h3>Personal Trainer</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Ut a mattis eget augue vivamus parturient eu aliquet. In
                        laoreet risus ut nulla interdum urna sollicitudin. Nisl viverra in id ultricies.</p>
            </div>
            <div class="third-column-footer">
                <h3>Menu</h3>
                <ul>
                    <li>
                        <a href="#">
                            <p>Home</p>
                        </a>
                        <a href="../html/Services.html">
                            <p>Services</p>
                        </a>
                        <a href="../html/Contact.html">
                            <p>Contacto</p>
                        </a>
                        <a href="../html/Testimonials.html">
                            <p>Testimonios</p>
                        </a>
                        <a href="Sign.html">
                            <p>Mi Area</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025. All rights reserved</p>
        </div>

        <script src="../js/chatbox.js"></script>
    </footer>
    

</body>

</html>