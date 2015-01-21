<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap-full cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<!-- <h1 class="wrap blog-header">ARTICLES</h1> -->

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header blog-index-header">

									<div class="wrap">

										<h1 class="h2 entry-title"><?php the_title(); ?>
										</h1>
 										<p class="byline entry-meta vcard">
                                        				<?php the_date('m.d.Y', '<span class="entry-time">','</span>'); ?>
                                        				<span class="entry-time"> - READ MORE</span>
										</p>
									</div> 

								</header>

							</article></a>
						</div>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

				</div>

			</div>


<?php get_footer(); ?>
