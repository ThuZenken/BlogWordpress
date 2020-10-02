<?php 
/**
 * Template Name: Home Page
 */

get_header();

	get_template_part('homepage','slider');

	get_template_part('homepage','service');
		
	get_template_part('homepage','news');
		 
	get_template_part('homepage','contact');
	
get_footer(); ?>