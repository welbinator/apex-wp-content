<?php /* Template Name: Home Page */ ?>
<?php echo get_header("apex"); ?>


<div class="hero"><img class="hero-image" src="<?php echo get_template_directory_uri() ?>/assets/img/Apex-outline.svg">
        <div class="container hero-contaienr">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="hero-header">Giving Purpose to your brand.</h1>
                    <p>Praesent pharetra. In consequat felis in tellus. In mi enim, rhoncus ullamcorper, sagittis at, placerat eget, mauris. Suspendisse auctor erat at ipsum. Aliquam vitae tortor id massa tincidunt eleifend.</p><button class="btn btn-primary" type="button">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <h1 class="text-center">Recent Work</h1>
        </div>
    </div>
    <div class="section no-gutter">
        <div class="container-fluid">
            <div class="row g-0"><a class="col-12 col-lg-4 client-container" href="work-single.html"><img class="client-background-image" src="<?php echo get_template_directory_uri() ?>/assets/img/fred-client-image.png">
                    <div class="client-background-image-overlay"></div><img class="img-fluid client-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/fred-ebong-logo.png">
                    <div class="client-container-action-text"><span>View Case Study</span></div>
                </a><a class="col-12 col-lg-4 client-container" href="work-single.html"><img class="client-background-image" src="<?php echo get_template_directory_uri() ?>/assets/img/fred-client-image.png">
                    <div class="client-background-image-overlay"></div><img class="img-fluid client-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/fred-ebong-logo.png">
                    <div class="client-container-action-text"><span>View Case Study</span></div>
                </a><a class="col-12 col-lg-4 client-container" href="work-single.html"><img class="client-background-image" src="<?php echo get_template_directory_uri() ?>/assets/img/fred-client-image.png">
                    <div class="client-background-image-overlay"></div><img class="img-fluid client-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/fred-ebong-logo.png">
                    <div class="client-container-action-text"><span>View Case Study</span></div>
                </a></div>
        </div>
    </div>
    <div class="section">
        <div class="container text-center"><a class="btn btn-primary" role="button" href="work.html">View WOrk</a></div>
    </div>
    <div class="section">
        <div class="container">
            <h1 class="text-center">Founders</h1>
            <div class="row">
                <div class="col-12 col-md-4 mb-4 mb-lg-0"><img class="img-fluid founder-image" src="<?php echo get_template_directory_uri() ?>/assets/img/james.png">
                    <h3 class="team-header">James Welbes</h3>
                    <h5 class="team-header subheader">Brand Strategist</h5>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-lg-0"><img class="img-fluid founder-image" src="<?php echo get_template_directory_uri() ?>/assets/img/james.png">
                    <h3 class="team-header">James Welbes</h3>
                    <h5 class="team-header subheader">Brand Strategist</h5>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-lg-0"><img class="img-fluid founder-image" src="<?php echo get_template_directory_uri() ?>/assets/img/james.png">
                    <h3 class="team-header">James Welbes</h3>
                    <h5 class="team-header subheader">Brand Strategist</h5>
                </div>
            </div>
        </div>
    </div>


<?php echo get_footer("apex"); ?>