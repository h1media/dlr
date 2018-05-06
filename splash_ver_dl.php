<?php
/**
 * Template Name: Dún Laoghaire
 *
 */
?>

<?php
get_header();
while ( have_posts() ) {
	the_post();
	?>

	<div class="container d-flex justify-content-center align-items-center">
		<div class="row d-flex flex-column align-items-center">
			<div class="holder dl">
				<div class="col-12 d-flex align-items-center header">
					<header>
						<a href="<?php echo get_home_url(); ?>">
							<img class="logo" src="<?php echo get_template_directory_uri(); ?>/dist/img/DLR_Logo.png" alt="DLR Logo" />
						</a>
					</header>
				</div>
				<div class="col-12 main-holder">
					<form method="post" class="needs-validation">
						<div class="form-group d-flex justify-content-center wifi">
							<label for="submitButton">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/img/wifi_dl.png"/>
							</label>
						</div>
						<div class="row cards">
							<div class="col-6">
								<a href="#">
									<div class="card">
										<img class="card-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/Website-bcg.png" alt="Card image">
										<div class="card-img-overlay d-flex justify-content-center align-items-center">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/Icons-home.png"/>
										</div>
									</div>
								</a>
							</div>
							<div class="col-6">
								<a href="#">
									<div class="card">
										<img class="card-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/Events-bcg.png" alt="Card image">
										<div class="card-img-overlay d-flex justify-content-center align-items-center">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/Icons-calendar.png"/>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="row cards">
							<div class="col-12">
								<a href="#">
									<div class="card">
										<img class="card-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/Vouchers-bcg.png" alt="Card image">
										<div class="card-img-overlay d-flex justify-content-end align-items-center">
											<div class="col-6 offset-6">
												<img class="icon-euro" src="<?php echo get_template_directory_uri(); ?>/dist/img/Icons-euro.png"/>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="form-group checkbox d-flex justify-content-center">
							<div class="form-check d-flex align-items-center">
								<input class="form-check-input align-self-center" type="checkbox" value="" id="invalidCheck" required>
								<label class="form-check-label" for="invalidCheck">
                                    <?php _e( "Please tick here to accept T's & C's" ); ?>
								</label>
								<a class="btn btn-light btn-sm" href="#" role="button">See all T's & C'</a>
							</div>
						</div>
						<button type="submit" class="btn btn-primary" id="submitButton" name="submit-dl">Submit</button>
					</form>
					<div class="col-12 d-flex justify-content-center align-items-center footer">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/img/Provide-by-CISCO.png"/>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
};
get_footer();
