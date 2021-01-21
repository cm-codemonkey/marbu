<?php defined('_EXEC') or die; ?>

        <footer class="main_footer d-flex align-items-center justify-content-center p-tb-40">
            <p>Copyright © 2021 <strong><?php echo Configuration::$web_page; ?> & <a href="https://one-consultores.com">One consultores</a></strong> <i class="fas fa-heart"></i> {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank">Code Monkey</a></p>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js?v=1.0"></script>
        <script src="https://cdn.codemonkey.com.mx/js/codemonkey.js?v=1.0"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script defer src="https://kit.fontawesome.com/743152b0c5.js"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
