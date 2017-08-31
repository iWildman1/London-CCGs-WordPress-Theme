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

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

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
                        <?php
                            wp_nav_menu( array(
                                'menu_class' => 'navigation-items'
                            ) );
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>