<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vlad
 */
/* Template Name: Front page */
get_header(); ?>
<div class="banner">
    <div class="container">
        <h1><?php the_title() ?></h1>
        <div class="bottom_items">
            <button class="banner_btn">Обрати квартиру</button>
            <div class="location">
                <span><img src="<?php echo get_bloginfo('template_url'); ?>/images/icons/Location.png" alt="Location"></span>
                с. Липини,<br>
                вул. Володимира Князя, 22А
            </div>
        </div>
        <div class="social">
            <a href="http://" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_bloginfo('template_url'); ?>/images/icons/Instagram.png" alt="Instagram"></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_bloginfo('template_url'); ?>/images/icons/Facebook.png" alt="Instagram"></a>
        </div>
    </div>
</div>
<div class="about_the_project">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/about_the_project.jpg" alt="">
    <div class="about_the_project_content">
        <h3>про проєкт</h3>
        <div class="description">
            <p> «Перший квартал» — це сучасний багатофункціональний житловий комплекс комфорт-класу,
                що являє собою ідеальне поєднання трендової архітектури, продуманого ландшафтного
                проектування й максимального комфорту мешканців.</p>
            <p> Досить шукати компроміс між енергією міста та
                особистим комфортом – настав час жити там, де поєднується усе, що вам потрібно.</p>
        </div>
        <div class="about_the_project_size">
            <span>Площі</span>
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/kv_size.png" alt="">
        </div>
    </div>
</div>
<?php get_footer(); ?>