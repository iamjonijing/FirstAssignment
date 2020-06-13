<?php

/*
 * Template Name: FirstAssignment
 * Version: 1.0
 * Description: Response to my first assignment during training
 * Author: Joni
 * Author URI: https://www.gravitypdf.com
 * Group: Gravity PDF
 * License: GPLv2
 * Required PDF Version: 4.4.0
 * Toolkit: true
 */

/* Prevent direct access to the template */
if ( ! class_exists( 'GFForms' ) ) {
	return;
}

/**
 * Gravity PDF Toolkit templates have access to the following variables
 *
 * @var array  $form      The current Gravity Form array
 * @var array  $entry     The raw entry data
 * @var array  $form_data The processed entry data stored in an array
 * @var array  $settings  The current PDF configuration
 * @var array  $fields    An array of Gravity Form fields which can be accessed with their ID number
 * @var array  $config    The initialised template config class – eg. /config/zadani.php
 * @var object $gfpdf     The main Gravity PDF object containing all our helper classes
 * @var array  $args      Contains an array of all variables - the ones being described right now - passed to the template
 */

/**
 * @var GFPDF\Plugins\DeveloperToolkit\Writer\Writer $w    A helper class that does the heavy lifting and PDF manipulation
 * @var \mPDF|\Mpdf\Mpdf                             $mpdf The raw Mpdf object
 */

/* Load PDF Styles */
$w->beginStyles();
?>
	<style>
		/* Helper styles to see the field mapping. Remove when ready. */
		.single,
		.multi {
			background: blue;
			color: #000;
		}
	</style>
<?php
$w->endStyles();

/*
 * Begin PDF Generation
 *
 * The API documentation can be found at https://gravitypdf.com/developer-toolkit-api-documentation/
 */
//$w->addPdf( __DIR__ . '/pdfs/my-pdf-document.pdf' ); /* CHANGE THIS TO POINT TO YOUR PDF */
//$w->addPage( 1 );
//
//$w->add( 'My content', [ 50, 50, 100, 7 ] ); /* html, [x, y, w, h] */
