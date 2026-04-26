<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content">
			<?php
			/* translators: Hidden accessibility text. */
			_e( 'Skip to content', 'twentysixteen' );
			?>
		</a>
<div class="tail-container min-h-screen bg-zinc-950 text-white overflow-x-hidden">
<header id="masthead" class="site-header">
<nav class="fixed top-0 left-0 right-0 z-50 bg-black/90 backdrop-blur-lg border-b border-white/10">
            
<?php if ( is_home() || is_archive() || is_page('blog') ) : ?>
        <!-- ESTE MENÚ SOLO APARECE EN EL ÍNDICE DEL BLOG O CATEGORÍAS -->
        
        <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 py-5 flex items-center justify-between">
            <div class="flex items-center gap-x-3">
                <div class="hidden w-10 h-10 bg-linear-to-br from-blue-400 to-blue-600 rounded-2xl items-center justify-center text-2xl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center justify-center w-12 h-12 rounded-2xl text-2xl text-white shadow-lg bg-linear-to-br from-blue-400 to-blue-600 hover:from-sky-400 hover:to-sky-500 transition-all active:scale-95" title="Inicio">🪂</a></div>
                <h1  class="text-2xl font-semibold tracking-tighter"><a id="home-link" href="/" target="_blank" class="hidden md:flex items-center gap-x-2  hover:bg-sky-400 text-white font-semibold px-7 h-11 rounded-3xl text-sm uppercase tracking-widest">Sergio O'Farrill</a></h1>
            </div>
            <div class="flex items-center gap-x-9">
                <a href="https://www.instagram.com/sergioofarrill/" target="_blank" 
                    class="hidden md:flex items-center gap-x-2  hover:bg-sky-400 text-white font-semibold px-7 h-11 rounded-3xl text-sm uppercase tracking-widest">
                    Instagram
                </a>
            </div>

        </div>

      <?php elseif ( is_single() ) : ?>
        <!-- ESTE MENÚ SOLO APARECE EN POSTS INDIVIDUALES -->
         <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 py-5 flex items-center justify-between">
            <div class="flex items-center gap-x-3">
                <div class="hidden w-10 h-10 bg-linear-to-br from-blue-400 to-blue-600 rounded-2xl items-center justify-center text-2xl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center justify-center w-12 h-12 rounded-2xl text-2xl text-white shadow-lg bg-linear-to-br from-blue-400 to-blue-600 hover:from-sky-400 hover:to-sky-500 transition-all active:scale-95" title="Inicio">🪂</a></div>
                <h1  class="text-2xl font-semibold tracking-tighter"><a id="home-link" href="/" target="_blank" class="hidden md:flex items-center gap-x-2  hover:bg-sky-400 text-white font-semibold px-7 h-11 rounded-3xl text-sm uppercase tracking-widest">Sergio O'Farrill</a></h1>
            </div>
        </div>
        
      <?php else : ?>
        <!-- MENÚ POR DEFECTO (Páginas estáticas, Home, etc.) -->

        <!-- NAVBAR (unchanged) -->
        <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 py-5 flex items-center justify-between">
            <div class="flex items-center gap-x-3">
                <div class="hidden w-10 h-10 bg-linear-to-br from-blue-400 to-blue-600 rounded-2xl items-center justify-center text-2xl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center justify-center w-12 h-12 rounded-2xl text-2xl text-white shadow-lg bg-linear-to-br from-blue-400 to-blue-600 hover:from-sky-400 hover:to-sky-500 transition-all active:scale-95" title="Inicio">🪂</a></div>
                <h1  class="text-2xl font-semibold tracking-tighter"><a id="home-link" href="/" target="_blank" class="hidden md:flex items-center gap-x-2  hover:bg-sky-400 text-white font-semibold px-7 h-11 rounded-3xl text-sm uppercase tracking-widest">Sergio O'Farrill</a></h1>
            </div>

            <div class="hidden md:flex items-center gap-x-10 text-sm uppercase font-medium tracking-widest">
                <a href="#photos" class="nav-link">PHOTOS</a>
                <a href="#about" class="nav-link">ABOUT</a>
                <a href="#music" class="nav-link">MUSIC</a>
                <a href="#tour" class="nav-link">TOUR DATES</a>
                <a href="#adventures" class="nav-link">ADVENTURES</a>
                <a href="#contact" class="nav-link">CONTACT</a>
            </div>

            <button onclick="toggleMobileMenu()" class="md:hidden text-3xl">☰</button>

            <a href="https://www.instagram.com/sergioofarrill/" target="_blank" 
                class="hidden md:flex items-center gap-x-2  hover:bg-sky-400 text-white font-semibold px-7 h-11 rounded-3xl text-sm uppercase tracking-widest">
                Instagram
            </a>
            </div>

            <div id="mobileMenu" class="hidden md:hidden bg-black/95 px-6 py-8 border-t border-white/10">
                <div class="flex flex-col gap-y-6 text-lg font-medium">
                    <a href="#photos" onclick="toggleMobileMenu()" class="py-2">Photos</a>
                    <a href="#about" onclick="toggleMobileMenu()" class="py-2">About Me</a>
                    <a href="#music" onclick="toggleMobileMenu()" class="py-2">Music</a>
                    <a href="#tour" onclick="toggleMobileMenu()" class="py-2">Tour Dates</a>
                    <a href="#adventures" onclick="toggleMobileMenu()" class="py-2">Adventures</a>
                    <a href="#contact" onclick="toggleMobileMenu()" class="py-2">Contact</a>
                </div>
            </div>
      
      <?php endif; ?>
</nav>
</header><!-- .site-header -->

<div id="content" class="site-content">



