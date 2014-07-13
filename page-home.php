<?php
/*
 Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" class="" role="article">

			<section id="home" class="machine-hero-wrap cf">
				<div class="machine-hero timed">
					<div class="wrap cf hero-text animated fadeInUp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/join-the-machine.png">
						<h2>
							When you surround yourself with good people Great things happen
						</h2>
					</div>
				</div>

			</section>
			<section id="about" class="machine-about cf">
				<div class="wrap cf"
					<div class="about-text d-3of5">
						<h2>So, can you fix my car?</h2>
						<p>
							Probably not. Our name is an homage to our studio’s history. Nicknamed “The Machine Shop” by the hard-working folks who worked here in decades past, our workspace still embodies the same roll-up-our-sleeves, straight-talking, fix-it-better mentality as our predecessors.
						</p>
						<p>
							But, with 100% more creativity and a whole lot less axle grease.
						</p>
						<p>
							You’ll find us doing creative work for clients, sharing ideas, throwing events, eating tacos, collaborating on projects, hosting artists, and sending a signal boost to the creative greatness in our community.
						</p>
						<span class="machine-caption"><strong>The Machine Shop</strong> Circa 1952</span>
					</div>
				</div>
			</section>
			<section class="machine-details cf">
				<div class="wrap cf">
					<h2>Nuts &amp; Bolts</h2>
					<div class="d-1of3 t-1of3">
						<img class="machine-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icon-sparkplug.png">
						<h3>Creativity</h3>
						<p>
							Although we’re independent companies with a range of skill sets, we share one important trait: creativity. We put every ounce of energy into creating/building/designing/capturing creative responses for our clients and, we hope, for the betterment of the world around us.
						</p>
					</div>
					<div class="d-1of3 t-1of3">
						<img class="machine-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icon-gears.png">
						<h3>Collaboration</h3>
						<p>
							In the immortal words of Vanilla Ice, we like to “stop, collaborate and listen.” We think that working together when projects call for it, sharing our lives, work and ideas can only lead to good things, except for when someone plays <em>Ice Ice Baby</em> on the stereo.
						</p>
					</div>
					<div class="d-1of3 t-1of3">
						<img class="machine-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icon-wrench.png">
						<h3>Community</h3>
						<p>
							We love Colorado Springs, and part of our mission is to find ways to collaborate not only with each other, but with you. From events, classes, our artist-in-residence program and ideas we haven’t dreamed up yet, we’ve got big plans for all of us.
						</p>
					</div>										
				</div>
			</section>
			<section id="team" class="machine-team">
				<div class="wrap cf">
					<h2>The Machinists</h2>
					<p class="intro">We’ve got four anchor companies who founded and share our space, along with a few like-minded creative folks here and there, an artist-in-residence, and one french bulldog mascot.</p>

					<div class="d-1of4 t-1of2 machine-partner">
						<a href="http://www.copilotcreative.com/" target="_blank"><img class="machinist-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/logo-copilot.png"></a>
						<h3>Co-Pilot <br>Creative</h3>
						<p>Crafting and launching <br>brands into full flight.</p>
						<a href="http://www.copilotcreative.com/" target="_blank">CoPilot Creative Website</a>						
					</div>

					<div class="d-1of4 t-1of2 machine-partner">
						<a href="http://designrangers.com/" target="_blank"><img class="machinist-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/logo-design-rangers.png"></a>
						<h3>Design <br>Rangers</h3>
						<p>Field guides to the <br>creative world.</p>
						<a href="http://designrangers.com/" target="_blank">Design Rangers Website</a>						
					</div>

					<div class="d-1of4 t-1of2 machine-partner">
						<a href="http://echo-arch.com/" target="_blank"><img class="machinist-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/logo-echo.png"></a>
						<h3>Echo <br>Architecture</h3>
						<p>Sustainable. Economical. <br>Beautiful.</p>
						<a href="http://echo-arch.com/" target="_blank">Echo Architecure Website</a>
					</div>					

					<div class="d-1of4 machine-partner">
						<a href="http://fixercreative.com/" target="_blank"><img class="machinist-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/logo-fixer.png"></a>
						<h3>Fixer <br>Creative Co.</h3>
						<p>Design + Writing + <br>Creative Direction</p>
						<a href="http://fixercreative.com/" target="_blank">Fixer Creative Co. Website</a>						
					</div>

																				
				</div>
			</section>
			<section id="thespace" class="machine-space">
				<div class="wrap cf">
					<h2>The Space</h2>
					<div class="machine-slideshow">
						<?php wooslider( array( 'slider_type' => 'slides', 'smoothheight' => 'true' ) ); ?>
					</div>
				</div>
			</section>
			<section id="events" class="machine-events">
				<div class="wrap cf">
					<h2>Upcoming Events</h2>
					<div class="d-2of3 t-all">
						<div class="d-1of3 t-1of3">
							<img src="http://placehold.it/400x400" style="max-width: 100%;">
						</div>
						<div class="d-2of3 t-2of3 event-description">
							<h3>Featured Event</h3>
							<h4>Open House</h4>
							<p>Stay tuned for more details on the grand opening of the Machine Shop and our open house.</p>
							<a class="machine-button" href="#">Full Event Info</a>
						</div>
					</div>
					<div class="d-1of3 m-all events-more">
						<h3>More Events</h3>
						<ul class="events-list">
							<li><a href="#"><span class="event-date">Date TBD</span>Details coming soon</a></li>
							<li><a href="#"><span class="event-date">Date TBD</span>Details coming soon</a></li>
							<li><a href="#"><span class="event-date">Date TBD</span>Details coming soon</a></li>							
						</ul>
					</div>

				</div>
			</section>

			<section id="inquire" class="machine-join">
					<h2>Join the Machine</h2>
					<p>
						Although we’re not a traditional open coworking space, everyone can join “the Machine.” 
					</p>
					<p>
						Have an idea? An event? A project you need one or all of us to work on? Want to just hang out or listen to our mascot snore? Drop us a line. Our (enormous) front door is wide open.
					</p>
					<p>
						We occasionally have a space or two for some like-minded creatives, but we also will have events, classes, art shows, and an artist-in-residence program that we’d love to have you be part of.
					</p>
					<?php gravity_form(1, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); ?>
				</div>
			</section>

			<section id="visit" class="machine-contact">
				<div class="wrap cf">
					<h2>Find Us</h2>
				</div>
				<div class="Flexible-container">
					<div id="map-canvas" />
				</div>
			</section>				





	</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>



<?php get_footer(); ?>
