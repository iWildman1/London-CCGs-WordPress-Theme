<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package London_Clinical_Commissioning_Groups
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="upper-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 upper-header-container">
                        <div class="pull-left">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/img/Logo.png" alt="">
                        </div>
                        <div class="pull-right">
                            <form action="#" class="header-search">
                                <input class="form-control" type="text">
                                <button type="submit" class="">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="navigation-items">
                            <li class="nav-item active">
                                <a href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">Transforming Health</a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item">
                                        <a href="#">Commissioning for local populations</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a href="#">Devolution</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a href="#">Sustainability transformation plans</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">London CCGs</a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item">
                                        <a href="#">What is clinical commissioning?</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a href="#">Plans and programmes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">Membership</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">News & Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">Resources</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>