<?php

namespace GFPDF\Templates\Config;

use GFPDF\Helper\Helper_Interface_Config;
use GFPDF\Helper\Helper_Interface_Setup_TearDown;

use GPDFAPI;

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Firstassignment
 *
 * @package  GFPDF\Templates\Config
 *
 * @Internal See https://gravitypdf.com/documentation/v4/developer-template-configuration-and-image/ for more information about this class
 */
class Firstassignment implements Helper_Interface_Config, Helper_Interface_Setup_TearDown {

	/**
	 * Runs when the template is initially installed via the PDF Template Manager
	 *
	 * @Internal Great for installing custom fonts you've shipped with your template.
	 * @Internal Recommend creating the directory structure /install/Firstassignment/ for bundled fonts
	 *
	 * @since    1.0
	 */
	public function setUp() {
		$font_data = [
			'font_name'   => 'Font Name',
			'regular'     => __DIR__ . '/../install/Firstassignment/Roboto/Roboto-Regular.ttf',
			'italics'     => __DIR__ . '/../install/Firstassignment/Roboto/Roboto-Italic.ttf',
			'bold'        => __DIR__ . '/../install/Firstassignment/Roboto/Roboto-Medium.ttf',
			'bolditalics' => __DIR__ . '/../install/Firstassignment/Roboto/Roboto-MediumItalic.ttf',
		];

		GPDFAPI::add_pdf_font( $font_data );
	}

	/**
	 * Runs when the template is deleted via the PDF Template Manager
	 *
	 * @Internal Great for cleaning up any additional directories
	 *
	 * @since    1.0
	 */
	public function tearDown() {
		$misc = GPDFAPI::get_misc_class();
		$misc->rmdir( __DIR__ . '/../install/Firstassignment/' );
	}

	/**
	 * Return the templates configuration structure which control what extra fields will be shown in the "Template" tab when configuring a form's PDF.
	 *
	 * @return array The array, split into core components and custom fields
	 *
	 * @since 1.0
	 */
	public function configuration() {
//		return [
//			/* Enable core fields */
//			'core'   => [
//				'show_form_title'      => true,
//				'show_page_names'      => true,
//				'show_html'            => true,
//				'show_section_content' => true,
//				'enable_conditional'   => true,
//				'show_empty'           => true,
//				'header'               => true,
//				'first_header'         => true,
//				'footer'               => true,
//				'first_footer'         => true,
//				'background_color'     => true,
//				'background_image'     => true,
//			],
//
//			/* Create custom fields to control the look and feel of a template */
//			'fields' => [
//				'my_text_field' => [
//					'id'   => 'my_text_field',
//					'name' => 'Label',
//					'type' => 'text',
//					'desc' => 'Description about this field',
//				],
//			],
//		];
	}
}
