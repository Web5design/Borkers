<?php
/**
 * @package WordPress
 * @subpackage Borkers
 */

get_header(); ?>

<div id="main">
<?php get_template_part('parts/loop','index');?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>