<?php
/**
 * Size field property.
 *
 * @package WPGraphQL\GF\Types\Field\FieldProperty;
 * @since   0.0.1
 */

namespace WPGraphQL\GF\Types\Field\FieldProperty;

use WPGraphQL\GF\Interfaces\FieldProperty;
use WPGraphQL\GF\Types\Enum\SizePropertyEnum;

/**
 * Class - SizeProperty
 */
class SizeProperty implements FieldProperty {
	/**
	 * Get 'size' property.
	 *
	 * Applies to: All fields except html, section and captcha.
	 *
	 * @return array
	 */
	public static function get() : array {
		return [
			'size' => [
				'type'        => SizePropertyEnum::$type,
				'description' => __( 'Determines the size of the field when displayed on the page.', 'wp-graphql-gravity-forms' ),
			],
		];
	}
}
