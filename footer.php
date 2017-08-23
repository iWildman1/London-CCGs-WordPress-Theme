<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package London_Clinical_Commissioning_Groups
 */

?>

<footer>
    <div class="footer-banner" style="background-image: url(<?php echo bloginfo('stylesheet_directory'); ?>/img/ccg_banner.jpg);"></div>
    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li class="fb-icon">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li class="twitter-icon">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li class="rss-icon">
                            <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="footer-nav">
                        <li><a href="#">CCG Directorate</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Directory</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="footer-nav">
                        <li><a href="#">Report technical issue</a></li>
                        <li><a href="#">Complaints and corrections</a></li>
                        <li><a href="#">Terms & conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Cookies policy</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>
