<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap-full cf">

					<!--<?php the_post_thumbnail(); ?>-->

					<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

 								<?php 
 									$imageid = get_post_thumbnail_id();
 									$imageurl = wp_get_attachment_image_src($imageid, true);
 								?>

               		 			<header class="article-header entry-header" style="background-image: url('<?php echo $imageurl[0]; ?>'); margin-top:-60px;">

                  					<div class="wrap title-container">

                    					<h1 class="wrap" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                  					</div>

                				</header> <?php // end article header ?>

                				<section class="wrap entry-content cf" itemprop="articleBody">
                  				
                  					<?php
					                    // the content (pretty self explanatory huh)
					                    the_content();

					                    /*
					                     * Link Pages is used in case you have posts that are set to break into
					                     * multiple pages. You can remove this if you don't plan on doing that.
					                     *
					                     * Also, breaking content up into multiple pages is a horrible experience,
					                     * so don't do it. While there are SOME edge cases where this is useful, it's
					                     * mostly used for people to get more ad views. It's up to you but if you want
					                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
					                     *
		                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
		                     *
		                    */
		                    wp_link_pages( array(
		                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
		                      'after'       => '</div>',
		                      'link_before' => '<span>',
		                      'link_after'  => '</span>',
		                    ) );
		                  ?>
		                </section>
		                <footer class="wrap article-footer">

		                	<!-- <a href="#"><span><i class="fa fa-chevron-left"></i>&nbsp; PREV POST</span></a> -->
		                	<?php
												$next_post = get_next_post();
												if (!empty( $next_post )): ?>
											  	<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo "NEXT POST" ?><i class="fa fa-chevron-right"></a>
											<?php endif; ?>



		                </footer> <?php // end article footer ?>

		              </article>

								<?php endwhile; ?>

								<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>
							             
				</div>

			</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
