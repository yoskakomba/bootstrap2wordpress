<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

	

<?php wp_footer(); ?>
<!-- BOOTSTRAP CORE JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.4.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<!-- TYPEKIT FONT -->
<script src="https://use.typekit.net/qxu7xaq.js"></script>
<script>
    try {
        Typekit.load({
            async: true
        });
    } catch (e) {}
</script>
</body>
</html>
