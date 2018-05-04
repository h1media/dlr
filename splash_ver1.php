<?php
/**
 * Template Name: Dún Laoghaire
 *
 */

get_header();
while ( have_posts() ) {
	the_post();
	?>
    <div class="container">
        <div class="row d-flex flex-column align-items-center">
            <div class="col-sm-12 header">
                <header>
                    <a href="<?php echo get_home_url(); ?>">
                        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/DLR_Logo.png" alt="DLR Logo" />
                    </a>
                </header>
            </div>
            <div class="col-sm-12 main-holder">
                <form class="">
                    <div class="form-group d-flex justify-content-center wifi">
                        <label for="submitButton">
                            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/wifi1.png"/>
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Events-bcg.png" alt="Card image">
                                <div class="card-img-overlay">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons-home.png"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Website-bcg.png" alt="Card image">
                                <div class="card-img-overlay">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons-calendar.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Vouchers-bcg.png" alt="Card image">
                                <div class="card-img-overlay">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons-euro.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox" required>
                        <label class="form-check-label"
                               for="checkbox"><?php _e( "Please tick here to accept T's & C's" ); ?></label>
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                </form>
            </div>
        </div>
    </div>
	<?php
};
get_footer();
