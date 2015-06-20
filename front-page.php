<?php
/**
 * Home page template
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<main id="main" class="site-main" role="main">
		<div class="big-diamond"></div>
		<ul class="skills-horizontal-list">
			<li>HTML5</li>
			<li>CSS3</li>
			<li>JavaScript</li>
			<li>PHP</li>
		</ul>
		<ul class="skills-horizontal-list horizontal-sub-list">
			<li>WordPress</li>
			<li>Optimization</li>
			<li>Automation</li>
		</ul>
		<div class="text-center">
			<h2>Design is in the Details &mdash; So is Development</h2>
		</div>
		<p>
			I work with designers in order to bring their vision to life on the web. If a designer takes the time to fine tune the details then a developer should carry those details over to the actual website.
		</p>
		<p>
			That doesn't mean I'm a silent partner. Clients deserve the combined experience of the developer and designer being leveraged in order to meet the client's goals. If I'm given a design that will compromise user experience then I work with the designer to craft a solution that will preserve the feel of the design without frustrating users.
		</p>
		<h3 class="text-center diamond-headline">Ultimately, I'm a problem solver. Give me a problem, and I'll build you a solution.</h3>

		<div class="down-arrow"></div>

		<div class="text-center">
			<h2>And I Talk to More Than Computers!</h2>
		</div>
		<p>
			I'm no social butterfly, but I don't mind talking on the phone, Skype, in-person, by carrier pigeon, or CIA-trained spy squirrel.
		</p>
		<p>
			As a youth pastor I wrote and delivered over 200 sermons, bringing my fear of speaking in front of crowds to a dull whimper. Off stage, while running my computer repair company I taught elderly and disabled clients how to use the internet.
		</p>
		<?php
		/*
		// Removed until I finish recording presentations and port over blog

		<p>
			Here's a couple videos of me teaching, and you can <a href="/blog">visit my blog</a> to see more examples of my writing.
		</p>
		<div class="home-presentations clearboth">
			<div class="one-half first text-center">
				<img src="<?php home_url( '/' )?>wp-content/uploads/2015/06/powerpoint-e1434472536254.jpg">
				<p class="home-presentations-caption">10x the Speed PhotoShop Scrolls While Making a Large Selection</p>
			</div>
			<div class="one-half text-center">
				<img src="<?php home_url( '/' )?>wp-content/uploads/2015/06/powerpoint-e1434472536254.jpg">
				<p class="home-presentations-caption">JavaScript Something or Other</p>
			</div>
		</div>

		*/
		?>

		<div class="down-arrow clearboth"></div>

		<div class="text-center clearboth">
			<h2>Notable Accomplishments <i class="sub-headline">Though not all about programming</i></h2>
		</div>
		<ul class="triangle max760">
			<li>
				Won an award for robotics programming, leading to the rules of an international competition being changed to forbid the technique I developed. <i>I came up with a new technique to do the same thing the next year.</i>
			</li>
			<li>
				Began college at 16, skipped the first year of computer science courses, still wasn't challenged, and left college at 17 to travel the country and work full-time.
			</li>
			<li>
				Was tested at having a college reading level when I was 7 and have read 300+ books a year for most of my life. It directly led to whatever knowledge I have. I started early, but firmly believe reading more is important and you can’t be too old to start. Unless you’re dead. Then that’d be difficult.
			</li>
		</ul>

		<div class="down-arrow"></div>

		<div class="text-center clearboth">
			<h2>Job History</h2>
		</div>
		<dl class="max760">
		<dt>ShyCyborg Studios, LLC &mdash; Owner</dt>
		<dd>
			<i>January 2013 &mdash; Present</i>
			<p>
				Built around 100 custom WordPress themes based off of PSDs, designing the mobile experience for many of them myself and handling everything needed on the front and back ends.
			</p>
		</dd>
		<dt>Bethel Church &mdash; Youth Pastor</dt>
		<dd>
			<i>January 2011 &mdash; December 2012</i>
			<p>
				I wrote and preached sermons 2-3 times a week for two years. Counseled teenagers and their parents. Ran the sound and video systems. Waged war on the traditional way to shoot a basketball.
			</p>
		</dd>
		<dt>David's Computer Repair &mdash; Owner</dt>
		<dd>
			<i>June 2008 &mdash; January 2013</i>
			<p>
				I removed viruses for people who never wanted to admit to visiting naughty sites, and taught elderly and disabled clients how to use their computer. Until computers became cheap enough to replace instead of repair.
			</p>
		</dd>
		</dl>

		<div class="down-arrow"></div>



		<div class="text-center clearboth">
			<h2>Testimonials</h2>
		</div>
		<div class="max760">
			<blockquote>&ldquo;I’ve worked with David before and I will work with him again… and again… and again. He’s that good! David is diligent, talented, and a true pleasure to work with.&rdquo;<br>&mdash; Charles Zimmerman, Zimmerman Law Firm</blockquote><blockquote>&ldquo;Another excellent job by David! I’m so excited that I’m finally able to try new things on my blog that I’ve always wanted to but didn’t know how.&rdquo;<br>&mdash; Ambrosio, Franchise Chatter</blockquote>
			<blockquote>&ldquo;David’s work, professionalism, and quick, clear and concise communication wildly exceeded all my expectations. Not only did he understand and address my project needs in-depth, but he offered suggestions to make it work even better.&rdquo;<br>&mdash; Jess Drenth, Bliss Marketing &amp; PR</blockquote>
			<blockquote>&ldquo;Outstanding job! There’s nothing that would have made this job go more smoothly or the finished job better. I got exactly what I was looking for and was more than pleased!&rdquo;<br>&mdash; Steven Peters, Team Vahalla Racing</blockquote>
		</div>

		<div class="down-arrow"></div>

		<div class="text-center clearboth">
			<h2>Portfolio</h2>
		</div>
		<p>These are some of my recent projects. Clicking one will bring you to a page with more photos and details.</p>

		<div class="home-portfolio clearfix" id="portfolio">

		<?php

		$args = array (
			'post_type'              => 'davidrg-project',
			'post_status'            => 'publish',
			'posts_per_page'         => '-1',
		);

		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			$looped = 0;
			while ( $query->have_posts() ) {
				$query->the_post();
				$class = ( 0 == $looped || 0 == $looped % 3 ) ? 'one-third first' : 'one-third';
				?>
				<div class="<?php echo $class; ?>">
					<a href="<?php echo the_permalink(); ?>">
						<div class="portfolio-overlay">
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'full' );
							}
							?>
							<h3 class="portfolio-title"><?php the_title(); ?></h3>
						</div>
					</a>
				</div>
				<?php
				$looped += 1;
			}
		} else {
			// no posts found
		}

		wp_reset_postdata();
		?>
		</div>
		</main>
	</div>

<?php get_footer(); ?>
