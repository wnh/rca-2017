<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Top Menu', 'twentyseventeen' ); ?>">
  <?php // TODO(wnh): EDITABLE: main nav icon ?>
  <img id="header-icon" src="<?php echo get_parent_theme_file_uri( '/assets/images/rca_logo.png' ); ?>" >
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) ); echo twentyseventeen_get_svg( array( 'icon' => 'close' ) ); _e( 'Menu', 'twentyseventeen' ); ?></button>
  <div class="main-menu header-menu">
    <?php wp_nav_menu( array(
      'theme_location' => 'top',
      'menu_id'        => 'top-menu',
    ) ); ?>
  </div>

    <?php // TODO(wnh): EDITABLE: membership menu ?>
  <ul class="membership-menu">
    <li><a href="/membership">Membership</a></li>
    <li><a href="/donate">Donate</a></li>
  </ul>
	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
