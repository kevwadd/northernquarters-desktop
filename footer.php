		<?php get_template_part( 'parts/sections/section', 'form' ); ?>
		
		<?php get_template_part( 'parts/sections/section', 'location' ); ?>
		
		</main><!-- #content -->
		<?php
		$gbl_contacts = get_field('gbl_contacts', 'options');	
		$privacy_page_id = get_option('wp_page_for_privacy_policy');
		$general_tickets_url = get_field('general_tickets_url', 'options');	
		$talk_tickets_url = get_field('talk_tickets_url', 'options');
		$stall_enquiry_email = get_field('stall_enquiry_email', 'options');	
		$gbl_social = get_field('gbl_social_links', 'options');	
		//echo '<pre>';print_r($privacy_page);echo '</pre>';
		?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-4">
						<h3 class="caps">Contacts</h3>
						<?php foreach ($gbl_contacts as $contact) { ?>
						<div class="vcard">
							<div class="name"><?php echo $contact['name']; ?></div>
							<a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a>
						</div>
						<?php } ?>
					</div>
					<div class="col-7">
					<h3 class="caps">Tickets &amp; Enquiries</h3>	
						<div class="row">
							<div class="col-4">
								<a href="<?php echo $general_tickets_url; ?>" target="_blank" class="text-center yell-btn"><span><i class="fa fa-ticket"></i>General Tickets</span></a>
							</div>
							<div class="col-4">
								<a href="<?php echo $talk_tickets_url; ?>" target="_blank" class="text-center yell-btn"><span><i class="fa fa-comment"></i>Talk Tickets</span></a>
							</div>
							<div class="col-4">
								<a href="mailto:<?php echo $stall_enquiry_email; ?>" class="text-center yell-btn"><span><i class="fa fa-cubes"></i>Stand Enquiry</span></a>
							</div>
						</div>
					</div>
					<div class="col-1 rel">
						<button id="backToTop" class="btn btn-light btn-block"><span class="sr-only">Back to top</span><i class="fa fa-angle-up"></i></button>
						<?php foreach ($gbl_social as $social) { ?>
						<a href="<?php echo $social['url']; ?>" target="_blank" class="btn btn-light btn-block social-link"><span class="sr-only"><?php echo $social['name']; ?></span><i class="fa <?php echo $social['icon']; ?>"></i></a>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-9">
						<span class="copyright"><?php bloginfo('name'); ?> - Copyright &copy; 2018 - All rights reserved.</span>
					</div>
					<div class="col-3">
						<nav class="footer-nav pull-right">
							<a href="<?php echo get_permalink($privacy_page_id); ?>"><?php echo get_the_title($privacy_page_id); ?></a>
						</nav>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
		
	</div><!-- #page -->
	
<?php wp_footer(); ?>

</body>
</html>