<?php 
/* 
Archive.php


Les articles sont affichés sous forme de "cards" (largeur 540px, 2 par ligne).

Pour chaque article trouvé, affichez dans une balise <article> :

    Le titre (doit être "cliquable").
    L'image de mise en avant.
    L'extrait.
    La date de publication.
    La catégorie (cliquable)

Sous les articles, ajouter les liens de pagination

*/ 

get_header();
?>

<main class="main-content">
    <section class="articles-container">
    <?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>

        <article class="article-card-archive">
            <h2> <a href="<?php the_permalink() ?>">
                <?php the_title() ?> </a> </h2>
                <?php the_post_thumbnail()?>
                <?php the_excerpt() ?>
                <p>Publié le <?php echo get_the_date() ?></p>
                <p>Catégorie : <?php the_category(', ') ?></p>
        </article>

    <?php
        }
        ?>
        
            <div class="pagination">

                <div class="pagination-previous">
                    <?php previous_posts_link('Précédent'); ?>
                </div>
                <div class="pagination-next">
                    <?php next_posts_link('Suivant'); ?>
                </div>

            <?php
        
        }
            ?>
        

    </section>
</main>

<?php 

get_footer();

?>
