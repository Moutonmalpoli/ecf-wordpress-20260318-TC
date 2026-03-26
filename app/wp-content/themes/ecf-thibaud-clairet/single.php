<?php 
/* Single.php
L'article est affiché dans une balise <article> (largeur 100%) :

    Le titre.
    L'image de mise en avant.
    Le nom de l'auteur
    Le texte complet de l'article.
    La date de publication.
    La catégorie (cliquable)
    L'auteur

*/
get_header();
?>

<main class="main-content">
    <?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>

        <article class="article-single">
            <h2> <?php the_title() ?> </h2>
                <?php the_post_thumbnail()?>
                <p>Publié le <?php the_date() ?></p>
                <p>Par <?php the_author() ?></p>
                <?php the_content() ?>
                <p>Catégorie : <?php the_category(', ') ?></p>

        </article>
    <?php
        }
    }
    ?>
</main>

<?php 

get_footer();

?>



