<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap-full cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<h1 class="wrap blog-header">ARTICLES</h1>

								<ul class="post-list">
									<?php
									$recent_posts = wp_get_recent_posts();
									foreach( $recent_posts as $recent ){
									echo '<li><h2 class="hentry"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h2> </li> ';
										}
									?>
								</ul>
							</article></a>
						</div>


						</main>

				</div>

			</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
