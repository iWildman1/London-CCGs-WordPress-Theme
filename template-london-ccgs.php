<?php
/**
 * Template Name: London CCGs Main Template
 */

get_header();
?>
<div class="banner" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/commissioning-banner.jpg);">
    <ul class="banner-controls">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<section class="home-intro no-padding light-grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading-large">London CCGs</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2>Clinical commissioning in London</h2>
                <blockquote class="blockquote">“Commissioning is about getting the best possible health outcomes for the local population, by assessing local needs, deciding priorities and strategies, and then buying services on behalf of the population from providers such as hospitals, clinics, community health bodies, etc.”</blockquote>
                <strong>NHS Clinical Commissioners</strong>

                <p>
                    The Health and Social Care Act 2012 set out the main responsibility for CCGs.
                    “Each clinical commissioning group must exercise its functions with a view to securing continuous improvement in the quality of services provided to individuals for or in connection with the prevention, diagnosis or treatment of illness.”
                </p>

                <p>
                    Achieving the improvements in health services can only be achieved by working closely with commissioners in social care and in government.
                </p>

                <p>
                    There is strong evidence that clinical commissioning is at its most effective when ‘pathways’ – the progression through services that people make which most often begins with a visit to a GP – also include care services. Recent research also shows the benefits of including other services in patient pathways that can affect health and wellbeing such as housing and employment.
                </p>

                <p>
                    Clinical commissioners use data from different sources including local councils, Public Health England and NHS England, and their own expertise and knowledge to ensure that the services they ‘buy’ on behalf of patients, are meet the needs of their local populations. This means that across London, services look different.
                </p>

                <p>
                    In London, CCGs are responsible for £xxx which funds treatment for almost nine million Londoners. Across London the picture of health for residents is very different. The health inequalities experienced in London are being addressed through the work of providers and commissioners. The introduction of plans to ensure health and social care futures can be sustained and developed to respond to innovations in treatments and services for example, means clinical commissioners are working and thinking increasingly about how they can introduce new and different ways of working.
                </p>

                <h4>Chairs List</h4>

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Barking & Dagenham</td>
                            <td>Dr Waseem Mohi</td>
                        </tr>
                        <tr>
                            <td>Havering</td>
                            <td>Dr Atul Aggarwal</td>
                        </tr>
                        <tr>
                            <td>Redbridge</td>
                            <td>Dr Anil Mehta</td>
                        </tr>
                        <tr>
                            <td>City & Hackney CCG</td>
                            <td>Dr Clare Highton</td>
                        </tr>
                        <tr>
                            <td>Newham CCG</td>
                            <td>Dr Prakash Chandra</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 sidebar transforming-sidebar">
                <button class="btn sidebar-nav-button sidebar-active">What is clinical commissioning?</button>
                <button class="btn sidebar-nav-button">Plans and programmes</button>

                <h4>Downloads</h4>
                <button class="btn sidebar-nav-button btn-download"><i class="fa fa-download" aria-hidden="true"></i> Download 1</button>
                <button class="btn sidebar-nav-button btn-download"><i class="fa fa-download" aria-hidden="true"></i> Download 2</button>
                <button class="btn sidebar-nav-button btn-download"><i class="fa fa-download" aria-hidden="true"></i> Download 3</button>

                <hr>

                <div class="health-finder-widget">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
