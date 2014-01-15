<?php
$_head_profile_attr = '';
if ( bb_is_profile() ) {
	global $self;
	if ( !$self ) {
		$_head_profile_attr = ' profile="http://www.w3.org/2006/03/hcard"';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"<?php bb_language_attributes( '1.1' ); ?>>
<head<?php echo $_head_profile_attr; ?>>
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php bb_title() ?></title>
	<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" />
<?php if ( 'rtl' == bb_get_option( 'text_direction' ) ) : ?>
	<link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
<?php endif; ?>

<?php bb_feed_head(); ?>

<?php bb_head(); ?>

</head>
<body id="<?php bb_location(); ?>">
	<div id="wrapper">
		<div id="header" role="banner">

			<!-- SliTaz Network -->
			<div id="network">
				<a href="http://www.slitaz.org/">Home</a>
				<a href="http://scn.slitaz.org/">Community</a>
				<a href="http://doc.slitaz.org/">Doc</a>
				<span>Forum</span>
				<a href="http://irc.slitaz.org/">IRC</a>
				<a href="http://slitaz.pro/">Pro</a>
				<a href="http://shop.slitaz.org/">Shop</a>
				<a href="http://bugs.slitaz.org">Bugs</a>
				<a href="http://hg.slitaz.org/?sort=lastchange">Hg</a>
			</div>

			<h1><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a></h1>
			<?php if ( bb_get_option('description') ) : ?><p class="description"><?php bb_option('description'); ?></p><?php endif; ?>

<?php if ( !in_array( bb_get_location(), array( 'login-page', 'register-page' ) ) ) login_form(); ?>

			<div class="search">
<?php search_form(); ?>
			</div>
		</div>

		<!-- SliTaz Block -->
		<div id="block">
			<div style="text-align: justify; width: 48%; padding: 20px 10px 0 0;">
				The SliTaz Forum is the place where you can get support,
				ask any questions about SliTaz, make requests, help others
				and get involved in a community group.
			</div>
		</div>

		<div id="main">

<?php if ( bb_is_profile() ) profile_menu(); ?>
