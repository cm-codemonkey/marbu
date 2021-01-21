<?php

defined('_EXEC') or die;

// $this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.carousel.min.css']);
// $this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.theme.default.min.css']);
// $this->dependencies->add(['js', '{$path.plugins}owlcarousel/owl.carousel.min.js']);
// $this->dependencies->add(['css', '{$path.plugins}fancybox/source/jquery.fancybox.css']);
// $this->dependencies->add(['js', '{$path.plugins}fancybox/source/jquery.fancybox.pack.js']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0.0']);
// $this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);

?>

<main class="main_body">
    <section id="home" class="home d-flex align-items-center p-40" style="background-image: url('{$path.images}home_background.png');">
        <div class="row">
            <div class="col-12 col-lg-6 p-0">
                <h1 class="text-center text-md-left">{$lang.return_home}</h1>
                <p class="m-t-20 m-b-20 text-justify">{$lang.more_countries}</p>
                <a href="#contact">{$lang.quote_now}</a>
                <a href="#tests" class="m-t-10 m-md-0">{$lang.other_covid_tests}</a>
            </div>
        </div>
    </section>
    <section id="tests" class="tests d-flex align-items-center flex-column p-40" style="background-image: url('{$path.images}tests_background.png');">
        <h2>{$lang.whats_test}</h2>
        <h3>{$lang.tests_covid_detected}</h3>
        <div class="row">
            <div class="col-12 col-lg-4 d-flex align-items-center flex-column m-t-40 m-b-0 m-b-md-40 p-tb-40">
                <h4><strong>PCR</strong></h4>
                <figure class="d-flex align-items-center justify-content-center m-tb-40">
                    <img src="{$path.images}tests_icon_pcr.png">
                </figure>
                <a href="#contact" class="m-b-40">{$lang.contact_us}</a>
                <h5><strong>{$lang.demo}:</strong></h5>
                <p class="m-b-20">{$lang.nasopharyngeal}</p>
                <h5><strong>{$lang.along}:</strong></h5>
                <p class="m-b-20">{$lang.all_period}</p>
                <h5><strong>{$lang.results}:</strong></h5>
                <p class="m-b-20">{$lang.exist_infection}</p>
                <h5><strong>{$lang.time}:</strong></h5>
                <p>{$lang.aprox_12}</p>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center flex-column m-t-40 m-b-0 m-b-md-40 p-tb-40">
                <h4><strong>{$lang.antigen}</strong></h4>
                <figure class="d-flex align-items-center justify-content-center m-tb-40">
                    <img src="{$path.images}tests_icon_antigeno.png">
                </figure>
                <a href="#contact" class="m-b-40">{$lang.contact_us}</a>
                <h5><strong>{$lang.demo}:</strong></h5>
                <p class="m-b-20">{$lang.nasopharyngeal}</p>
                <h5><strong>{$lang.along}:</strong></h5>
                <p class="m-b-20">{$lang.0_7_days}</p>
                <h5><strong>{$lang.results}:</strong></h5>
                <p class="m-b-20">{$lang.exist_infection}</p>
                <h5><strong>{$lang.time}:</strong></h5>
                <p>{$lang.15_20_minutes}</p>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center flex-column m-tb-40 p-tb-40">
                <h4><strong>{$lang.serology}</strong></h4>
                <figure class="d-flex align-items-center justify-content-center m-tb-40">
                    <img src="{$path.images}tests_icon_serologia.png">
                </figure>
                <a href="#contact" class="m-b-40">{$lang.contact_us}</a>
                <h5><strong>{$lang.demo}:</strong></h5>
                <p class="m-b-20">{$lang.bloodline}</p>
                <h5><strong>{$lang.along}:</strong></h5>
                <p class="m-b-20">{$lang.0_7_days}</p>
                <h5><strong>{$lang.results}:</strong></h5>
                <p class="m-b-20">{$lang.anticorps_detected}</p>
                <h5><strong>{$lang.time}:</strong></h5>
                <p>{$lang.15_20_minutes}</p>
            </div>
        </div>
        <h2 class="m-b-40">{$lang.how_do_test}</h2>
        <figure>
            <img src="{$path.images}tests_graph.png">
        </figure>
    </section>
    <section class="your_company p-40" style="background-image: url('{$path.images}your_company_background.png');">
        <h2 class="text-center text-md-right">{$lang.a_healthy_company}</h2>
    </section>
    <section id="other_services" class="other_services d-flex align-items-center flex-column p-40" style="background-image: url('{$path.images}other_services_background.png');">
        <h2>{$lang.your_employees}</h2>
        <h3>{$lang.other_services}</h3>
        <div class="circles m-tb-40">
            <span class="first"></span>
            <span class="medium"></span>
            <span class="last"></span>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 d-flex align-items-center flex-column m-b-40 m-b-md-0">
                <figure class="d-flex align-items-center justify-content-center">
                    <img src="{$path.images}other_services_alcoholimetro.png">
                </figure>
                <h4 class="m-tb-40"><strong>{$lang.breathalyser}</strong></h4>
                <a href="#contact" class="m-b-40">{$lang.contact_us}</a>
                <p>{$lang.start_journal}</p>
                <p>{$lang.random}</p>
                <p>{$lang.reasonable_suspicion}</p>
                <p>{$lang.after_accident}</p>
                <p>{$lang.end_journal}</p>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center flex-column m-b-40 m-b-md-0">
                <figure class="d-flex align-items-center justify-content-center">
                    <img src="{$path.images}other_services_toxicologica.png">
                </figure>
                <h4 class="m-tb-40"><strong>{$lang.toxicological}</strong></h4>
                <a href="#contact" class="m-b-40">{$lang.contact_us}</a>
                <p>3 {$lang.elements}</p>
                <p>5 {$lang.elements}</p>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center flex-column">
                <figure class="d-flex align-items-center justify-content-center">
                    <img src="{$path.images}other_services_poligrafo.png">
                </figure>
                <h4 class="m-tb-40"><strong>{$lang.polygraph}</strong></h4>
                <a href="#contact" class="m-b-40">{$lang.contact_us}</a>
                <p>{$lang.pre_employee}</p>
                <p>{$lang.periodic}</p>
                <p>{$lang.specific}</p>
            </div>
        </div>
    </section>
    <form id="contact" name="contact" class="contact d-flex align-items-center flex-column p-40">
        <h2>{$lang.how_can_we_help_you}</h2>
        <a href="tel:+529984403302" class="call d-flex align-items-center justify-content-center m-t-40 m-b-10"><strong>{$lang.call_us}</strong> <i class="fas fa-headset m-l-20"></i></a>
        <a href="https://api.whatsapp.com/send?phone=+529984403302" class="whatsapp d-flex align-items-center justify-content-center m-b-40"><strong>{$lang.send_us_whatsapp}</strong> <i class="fab fa-whatsapp m-l-20"></i></a>
        <p class="m-b-20">{$lang.or}</p>
        <p class="m-b-20">{$lang.we_contact_you}</p>
        <input type="text" name="name" placeholder="{$lang.complete_name}" class="m-b-10 p-lr-20">
        <input type="email" name="email" placeholder="{$lang.email}" class="m-b-10 p-lr-20">
        <input type="text" name="phone" placeholder="{$lang.phone}" class="m-b-10 p-lr-20">
        <input type="number" name="age" placeholder="{$lang.age}" class="m-b-10 p-lr-20">
        <input type="text" name="nationality" placeholder="{$lang.nationality}" class="m-b-10 p-lr-20">
        <select name="test" class="m-b-10 p-lr-20">
            <option value="">{$lang.what_test}</option>
            <option value="Covid PCR">Covid PCR</option>
            <option value="Covid Antigeno rápida">Covid {$lang.antigen} ({$lang.fast_test})</option>
            <option value="Covid Serologia rápida">Covid {$lang.serology} ({$lang.fast_test})</option>
            <option value="Alcoholimetro">{$lang.breathalyser}</option>
            <option value="Toxicológica">{$lang.toxicological}</option>
            <option value="Polígrafo">{$lang.polygraph}</option>
        </select>
        <input type="text" name="travel" placeholder="{$lang.where_travel}" class="m-b-10 p-lr-20">
        <button type="submit"><strong>{$lang.send}</strong></button>
    </form>
    <section class="clients p-40">
        <h2 class="m-b-40">{$lang.worked_with}</h2>
        <div class="row">
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="v d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/majestic.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="v d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/royalresorts.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="h d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/URBIS.png">
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="h d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/westin.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="v d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/imperial_perlas.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="h d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/mexico_planner.png">
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="h d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/flordeliz.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="v d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/cancun_sailing.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="h d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/cenacolo.png">
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="v d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/mapla.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="v d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/sobmex.png">
                </figure>
            </div>
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="h d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/kolekaabal.png">
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 m-0 p-0">
                <figure class="v d-flex align-items-center justify-content-center p-40">
                    <img src="{$path.images}clients/icebar.png">
                </figure>
            </div>
        </div>
    </section>
</main>
