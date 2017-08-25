<?php
/**
 * Template Name: Resources Detail Template
 */

get_header();
?>
<div class="banner" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/resources-banner.jpg);">
</div>
<section class="home-intro no-padding light-grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading-large">Resources</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2>Sharing learning and good practice in meeting the London quality standards</h2>
                <strong>Resources subheading</strong>
                <p>
                    In September 2014, London’s acute hospitals came together to share good practice on the changes and improvements they have made in meeting the London quality standards for acute medicine and emergency general surgery. NHS England (London region) held the Shared Learning Event: Meeting the London quality standards to facilitate shared learning between London’s acute hospitals and commissioners, and to support them in their ongoing implementation of the London quality standards. The event included presentations from:
                </p>
                <ul>
                    <li>
                        <span>Royal Free Hospital on consultant delivered care and training in emergency general surgery;</span>
                    </li>
                    <li>
                        <span>North Middlesex University Hospital on consultant delivered care and training in acute medicine;</span>
                    </li>
                    <li>
                        <span>Kingston Hospital on access to diagnostics for interventional radiology and endoscopy;</span>
                    </li>
                    <li>
                        <span>The Whittington Hospital on ambulatory care and patient experience;</span>
                    </li>
                    <li>
                        <span>St Thomas’ Hospital on multi-disciplinary team assessment; and</span>
                    </li>
                    <li>
                        <span>Homerton University Hospital on access to and provision of emergency theatre.</span>
                    </li>
                </ul>
                <p>
                    The presentations highlighted the learning, good practice and improvement processes used to make progress towards meeting the quality standards and this was followed by an opportunity for workshop attendees to discuss good practice and improvement processes used to further progress meeting the standards.
                </p>
                <p>
                    The shared learning has been used to develop a <span class="blue-text">Good Practice Guide</span> that includes:
                </p>
                <ul>
                    <li>
                        <span>progress of London hospitals towards meetings the London quality standards;</span>
                    </li>
                    <li>
                        <span>abstracts of the hospital presentations describing their experiences; and</span>
                    </li>
                    <li>
                        <span>key learning, improvement steps undertaken and challenges encountered.</span>
                    </li>
                    <li>
                        <span>Homerton University Hospital on access to and provision of emergency theatre.</span>
                    </li>
                </ul>
                <p>
                    The <span class="blue-text">Good Practice Guide</span> aims to provide a tool to support London’s commissioners and acute hospitals in the ongoing implementation of the London quality standards.
                </p>
                <div class="resources-block">
                    <div class="resource">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/resource-placeholder.jpg" alt="">
                            </div>
                            <div class="col-10">
                                <h5>Good Practice Guide</h5>
                                <button class="btn btn-download">Download</button>
                                <img src="<?php bloginfo('stylesheet_directory') ?>/img/pdf-icon.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sidebar transforming-sidebar news-sidebar">
                <h4>Search resources</h4>
                <form action="#" class="news-search">
                    <div class="col-md-12 search-col">
                        <input class="form-control" type="text">
                        <button type="submit" class="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>

                <hr>

                <div class="health-finder-widget">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
