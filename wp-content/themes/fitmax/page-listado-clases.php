<?php
/*
*Template name: Listado clases
*/
get_header();
?>
<main class="contenedor seccion">
    <?php

    get_template_part('template-parts/pagina');
    gymfitness_lista_clases();

    ?>
    
</main>
<?php

get_footer();

?>