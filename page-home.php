<?php
/*
 Template Name: Home Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								<div class="hello m-all t-1of2 d-1of2">	
									
									<h1 class="hello-h">HI, HOW<br />ARE YOU</h1>

									<p class="hello-p">My name is Scott, and I like the interwebs.<br>
									Right now, I’m doing QA & rails things with<br>
									OwnLocal (YC W10) and WordPress in my<br>
									free time.   I also drum, compose & spend<br> 
									way too much of my money eating here.</p>
								</div>

								<div class="frog m-all t-1of2 d-1of2 last-col">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/frog-soft.png" />
								</div>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
