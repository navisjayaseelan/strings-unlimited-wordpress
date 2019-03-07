<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Strings_Unlimited
 */

get_header();
?>

	  
    <!--Page Title-->
    <section class="page-title">
    	<div class="auto-container text-center">
        
        	<h4 class="small-text">something is wrong</h4>
            <h2 class="page-name">404 Page</h2>
            
            <!--Bread Crumb-->
            <ul class="bread-crumb clearfix">
                <li><a href="#">Home</a></li>
                <li class="active">404</li>
            </ul>
            
        </div>
    </section>
    
    
    <!--Error Section-->
    <section class="error-section">
    	<div class="auto-container">
        	<div class="error-icon"><span class="flaticon-plug"></span></div>
            <div class="extra-big">404 Error</div>
            <div class="bigger-text">Looks like desired page is Not Available.</div>
            <div class="text-lower">
            	<a href="index.html" class="theme-btn btn-style-two">Return Home</a>
            </div>
    	</div>
    </section>
    

<?php
get_footer();
