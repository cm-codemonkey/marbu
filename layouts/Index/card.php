<?php

defined('_EXEC') or die;

$this->dependencies->add(['js', '{$path.js}Index/card.js?v=1.0.0']);
$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);

?>

<article class="card">
    <header>
        <figure>
            <img src="{$path.images}logotype.png">
        </figure>
    </header>
    <main>
        <h1>Marbu Salud</h1>
        <p>{$lang.card_description}</p>
        <!-- <div class="buttons">
            <a href="https://api.whatsapp.com/send?phone=+529984403302"><i class="fab fa-whatsapp"></i><span>Whatsapp</span></a>
            <a href="tel:+529984403302"><i class="fas fa-phone-alt"></i><span>{$lang.call}</span></a>
            <a href="mailto:marbu@one-consultores.com"><i class="fas fa-envelope"></i><span>Email</span></a>
        </div>
        <div class="buttons">
            <a href="https://www.google.com.mx/maps/dir//21.1487581,-86.8450274/@21.1490613,-86.8451551,18z/data=!4m2!4m1!3e0" target="_blank"><i class="fas fa-map-marked-alt"></i><span>{$lang.location}</span></a>
            <a href="https://marbu.one-consultores.com" target="_blank"><i class="fas fa-globe"></i><span>{$lang.website}</span></a>
            <a data-action="share" data-text="{$lang.share_card}"><i class="fas fa-share-alt"></i><span>{$lang.share}</span></a>
        </div>
        <figure>
            <img src="{$path.images}qr.png">
        </figure>
        <div id="map"></div> -->
    </main>
</article>
