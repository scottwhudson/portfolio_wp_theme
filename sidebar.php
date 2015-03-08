<!-- <a href="#cd-nav" class="cd-nav-trigger">MENU</a> -->
	
	<div id="cd-nav" class="cd-nav">
		<div class="cd-navigation-wrapper">
			<div class="cd-half-block">
				<h2><span class="light">SCOTT W</span> HUDSON</h2>

				<nav>
					<ul class="cd-primary-nav">
						<li><a href="#0" class="selected">HOME</a></li>
						<li><a href="#0">ABOUT</a></li>
						<li><a href="#0">WORK</a></li>
						<?php
							$args = array( 'numberposts' => '1' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '"><span class="latest-article">LATEST ARTICLE</span><br/>' .   $recent["post_title"].'</a> </li> ';
							}
						?>
						<li><a href="#0">ARCHIVE</a></li>
						<li><a href="#0">MUSIC</a></li>
					</ul>
				</nav>
			</div><!-- .cd-half-block -->
			
			<div class="cd-half-block">
				<address>
					<ul class="cd-contact-info">
						<li>SAY HOWDY</li>
						<input type="text" name="name" placeholder="NAME"></input>
						<input type="text" name="email" placeholder="EMAIL"></input>
						<textarea type="textarea" name="message" placeholder="MESSAGE"></textarea>
						<input id="validation" type="text" name="validation" placeholder="2 + 3 ?"></input>
						<button class="send-btn" type="button">SEND</button>
					</ul>

				</address>
				
		</div> <!-- .cd-navigation-wrapper -->
	</div> <!-- .cd-nav -->