<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owlcarousel/owl.carousel.min.js']);
$this->dependencies->add(['css', '{$path.plugins}fancybox/source/jquery.fancybox.css']);
$this->dependencies->add(['js', '{$path.plugins}fancybox/source/jquery.fancybox.pack.js']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0.0']);
$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);

?>

<main class="main_body">
    <section id="home" class="home d-flex align-items-center" style="background-image: url('{$path.images}home_background.png');">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1>Regresa <span>a casa</span></h1>
                <p>Más de 140 países del mundo solicitan una prueba de laboratorio Sars-cov-2 avalado por un laboratorista clínico, con al menos <strong>48 horas</strong> previas al viaje.</p>
                <a href="#contact">¡Pide tu cita! o cotiza</a>
            </div>
        </div>
    </section>
    <section id="tests" class="tests d-flex align-items-center flex-column"  style="background-image: url('{$path.images}tests_background.png');">
        <h2>¿Que prueba <span>me tengo que hacer?</span></h2>
        <h3>Pruebas de detección de Covid 19</h3>
        <div class="icons">
            <div class="row">
                <div class="col-12 col-lg-4 d-flex align-items-center flex-column">
                    <h4>PCR</h4>
                    <img src="{$path.images}tests_icon_pcr.png">
                </div>
                <div class="col-12 col-lg-4 d-flex align-items-center flex-column">
                    <h4>Antigeno</h4>
                    <img src="{$path.images}tests_icon_antigeno.png">
                </div>
                <div class="col-12 col-lg-4 d-flex align-items-center flex-column">
                    <h4>Serología</h4>
                    <img src="{$path.images}tests_icon_serologia.png">
                </div>
            </div>
        </div>
        <div class="data">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h5>Muestra:</h5>
                    <p>Nasofaríngeo</p>
                    <h5>Durante:</h5>
                    <p>Todo el periodo de infección</p>
                    <h5>Resultados:</h5>
                    <p>Existe infección actualmente</p>
                    <h5>Tiempo:</h5>
                    <p>Aproximadamente 12 horas</p>
                </div>
                <div class="col-12 col-lg-4">
                    <h5>Muestra:</h5>
                    <p>Nasofaríngeo</p>
                    <h5>Durante:</h5>
                    <p>0-7 días</p>
                    <h5>Resultados:</h5>
                    <p>Existe infección actualmente</p>
                    <h5>Tiempo:</h5>
                    <p>15-20 minutos</p>
                </div>
                <div class="col-12 col-lg-4">
                    <h5>Muestra:</h5>
                    <p>Sanguinea</p>
                    <h5>Durante:</h5>
                    <p>0-7 días</p>
                    <h5>Resultados:</h5>
                    <p>Detección cultivada de anticuerpos IgM-IgG</p>
                    <h5>Tiempo:</h5>
                    <p>15-20 min</p>
                </div>
            </div>
        </div>
        <h2>¿Cuando hacerse <span>la prueba?</span></h2>
        <figure>
            <img src="{$path.images}tests_graph.png">
        </figure>
    </section>
    <section class="your_company" style="background-image: url('{$path.images}your_company_background.png');">
        <h2>Una <strong>empresa saludable</strong> <br> <span>es  una empresa <br> <strong>productiva</strong></span></h2>
    </section>
    <section id="other_services" class="other_services d-flex align-items-center flex-column" style="background-image: url('{$path.images}other_services_background.png');">
        <h2>Tus empleados <span>son tu empresa</span></h2>
        <h3>Otros servicios</h3>
        <div class="circles">
            <span class="first"></span>
            <span class="medium"></span>
            <span class="last"></span>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 d-flex align-items-center flex-column">
                <figure class="d-flex align-items-center flex-column">
                    <img src="{$path.images}other_services_alcoholimetro.png">
                    <a href="#contact" class="d-flex align-items-center">¡Pide tu cita! o cotiza</a>
                </figure>
                <h4>Alcoholimetro</h4>
                <ul>
                    <li>Inicio de la jornada</li>
                    <li>Aleatoriamente</li>
                    <li>Sospecha razonable</li>
                    <li>Después de un accidente</li>
                    <li>Finalizar la jornada</li>
                </ul>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center flex-column">
                <figure class="d-flex align-items-center flex-column">
                    <img src="{$path.images}other_services_toxicologica.png">
                    <a href="#contact" class="d-flex align-items-center">¡Pide tu cita! o cotiza</a>
                </figure>
                <h4>Toxicológica</h4>
                <ul>
                    <li>3 elementos</li>
                    <li>5 elementos</li>
                </ul>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center flex-column">
                <figure class="d-flex align-items-center flex-column">
                    <img src="{$path.images}other_services_poligrafo.png">
                    <a href="#contact" class="d-flex align-items-center">¡Pide tu cita! o cotiza</a>
                </figure>
                <h4>Polígrafo</h4>
                <ul>
                    <li>Pre-empleado</li>
                    <li>Periódico</li>
                    <li>Especifico</li>
                </ul>
            </div>
        </div>
    </section>
    <form id="contact" class="contact d-flex align-items-center flex-column">
        <h2>Bienvenidos <span>a nuestro laboratorio</span></h2>
        <a href="tel:+529984403302">998 440 3302 ¡Llámanos!</a>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="text" name="phone" placeholder="Teléfono">
        <input type="email" name="email" placeholder="Correo electrónico">
        <input type="number" name="age" placeholder="Edad">
        <input type="text" name="nationality" placeholder="Nacionalidad">
        <select name="test">
            <option value="">¿Que prueba te deseas realizar?</option>
            <option value="Covid PCR">Covid PCR</option>
            <option value="Covid Antigeno rápida">Covid Antígeno (Prueba rápdia)</option>
            <option value="Covid Serologia rápida">Covid Serología (Pruaba rápida)</option>
            <option value="Alcoholimetro">Alcoholimetro</option>
            <option value="Toxicológica">Toxicológica</option>
            <option value="Polígrafo">Polígrafo</option>
        </select>
        <input type="text" name="travel" placeholder="¿A donde viajas?">
        <button type="submit">Enviar</button>
    </form>
    <section class="clients">
        <h2>Hemos <strong>trabajado con</strong></h2>
        <div class="row">
            <div class="col-12 col-lg-4">
                <figure class="h d-flex align-items-center flex-column">
                    <img src="{$path.images}clients_mexico_planners.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4">
                <figure class="h d-flex align-items-center flex-column">
                    <img src="{$path.images}clients_flordeliz.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4">
                <figure class="v d-flex align-items-center flex-column">
                    <img src="{$path.images}clients_cancun_sailing.png">
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <figure class="h d-flex align-items-center flex-column">
                    <img src="{$path.images}clients_cenacolo.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4">
                <figure class="v d-flex align-items-center flex-column">
                    <img src="{$path.images}clients_mapla.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4">
                <figure class="v d-flex align-items-center flex-column">
                    <img src="{$path.images}clients_sobmex.png">
                </figure>
            </div>
        </div>
    </section>
</main>
