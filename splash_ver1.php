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
                <form class="needs-validation" novalidate>
                    <div class="form-group d-flex justify-content-center wifi">
                        <label for="submitButton">
                            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/wifi1.png"/>
                        </label>
                    </div>
                    <div class="row cards">
                        <div class="col-6">
                            <div class="card">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Events-bcg.png" alt="Card image">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons-home.png"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Website-bcg.png" alt="Card image">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons-calendar.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Vouchers-bcg.png" alt="Card image">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icons-euro.png"/>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    <?php _e( "Please tick here to accept T's & C's" ); ?>
                                </label>
                                <a class="btn btn-primary" href="#" role="button">Link</a>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
	<?php
};
get_footer();
