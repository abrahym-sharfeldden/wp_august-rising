<?php get_header(); ?>

		<div class="jumbotron flex-container">
			<div class="jumbo-child flex-parent">
				<div class="flex-container">
					<h1>Words Don't Write Themselves</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu non diam phasellus vestibulum lorem. </p>

					<button type="button" name="btn">Read my work</button>
					<button type="button" name="btn">Explore my ideas</button>
				</div>
			</div>
		</div>
		<div class="arrow-container flex-container">
			<div class="arrow">
				<a href="#scrollToAbout"><i class="fas fa-angle-double-down"></i></a>
			</div>
		</div>
	</div>
</section>
<section class="about-section" id="scrollToAbout">
	<div class="flex-parent about-container">
		<div class="flex-container">
			<div class="image-container">
				<img src="<?php echo get_avatar_url(0); ?>" alt="August Rising"/> <!-- Must be square -->
			</div>
		</div>
		<div class="flex-container summary-container">
			<header>
				<h1>Inside August Rising</h1>
			</header>

			<p class="about-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</section>
<section class="blog-section">
	<div class="blog-container">
		<header>
			<h1>Recently Posted</h1>
		</header>
		<div class="flex-parent">
			<?php if(have_posts()): ?>
	    		<?php $args = array(); ?>
	    		<?php $myposts = get_posts($args); ?>
	    		<?php foreach($myposts as $post): setup_postdata($post); ?>	
	    			<?php if($number >= 3) break; ?>	
					<div class="flex-container card-container">
						<div class="blog-card flex-parent">
							<div class="blog">
								<div class="blog-image image-container flex-container">
									<?php the_post_thumbnail('home'); ?>
									<!-- <img src="assets/images/activity-autumn-blond-1374545.jpg" alt="Blog Image"> -->
								</div>
			    				<div class="blog-content flex-container">
									<h1><?php echo get_the_title(); ?></h1>
									<p>
										<?php echo get_the_author(); ?>
										<br>
										<?php echo get_the_date(); ?>
									</p>

									<p class="description"><?php echo get_the_excerpt(); ?></p>

									<a href="<?php the_permalink(); ?>">	<p class="read-more">Read More <i class="fas fa-arrow-right"></i></p></a>
								</div>
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					<?php $number++; ?>
	    		<?php endforeach; ?>
	    	<?php endif; ?>	
			</div>
		</div>
	</div>
</section>
<section class="contact-section" id="scrollToContact">
	<div class="contact-container">
		<header>
			<h1>Get In Touch</h1>
		</header>
	
		<form class="contact-form flex-parent" method="GET" action="#">
			<div class="flex-parent">
				<div class="form-field flex-container">
					<input type="text" name="name" id="name" placeholder=" " required/>
					<label for="name">Name</label>
				</div>
				<div class="form-field flex-container">
					<input type="email" name="email" id="email" placeholder=" " required/>
					<label for="email">E-mail</label>
				</div>
			</div>
			<div class="flex-parent">
				<div class="form-field col-100 flex-container">				
					<input type="text" name="message" id="message"  placeholder=" " required/>
					<label for="message">Message</label>
				</div>
			</div>
			<div class="flex-parent contact-btn">
				<div class="form-field col-100 flex-container">
					<button type="submit" value="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
</section>

<?php get_footer(); ?>
