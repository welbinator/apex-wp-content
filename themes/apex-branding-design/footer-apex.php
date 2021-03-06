<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apex_Branding_&_Design
 */

?>

<div class="section footer">
        <div class="container">
            <h3 class="footer-header">APEX<br>DESIGN STUDIO</h3>
            <ul class="nav flex-column flex-lg-row mb-5">
                <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="work.html">Work</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
            <ul class="nav social-links mb-4">
                <li class="nav-item"><a class="nav-link active" href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="#"><i class="fab fa-twitter"></i></a></li>
            </ul><span class="text-uppercase text-white-50">Copyright © Apex Design studio. All Rights Reserved</span>
        </div><img class="footer-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/Apex-outline.svg">
    </div>
    

    <?php wp_footer(); ?>
</body>

</html>