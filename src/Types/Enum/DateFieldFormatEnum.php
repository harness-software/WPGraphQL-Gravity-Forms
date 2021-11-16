<?php
/**
 * Enum Type - DateFieldFormatEnum
 *
 * @package WPGraphQL\GF\Types\Enum,
 * @since   0.4.0
 */

namespace WPGraphQL\GF\Types\Enum;

/**
 * Class - DateFieldFormatEnum
 */
class DateFieldFormatEnum extends AbstractEnum {
	/**
	 * Type registered in WPGraphQL.
	 *
	 * @var string
	 */
	public static $type = 'DateFieldFormatEnum';

	// Individual elements.
	const MDY       = 'mdy';
	const DMY       = 'dmy';
	const DMY_DASH  = 'dmy_dash';
	const DMY_DOT   = 'dmy_dot';
	const YMD_SLASH = 'ymd_slash';
	const YMD_DASH  = 'ymd_dash';
	const YMD_DOT   = 'ymd_dot';

	/**
	 * Sets the Enum type description.
	 *
	 * @return string Enum type description.
	 */
	public function get_type_description() : string {
		return __( 'How the DateField date is displayed', 'wp-graphql-gravity-forms' );
	}

	/**
	 * Sets the Enum type values.
	 *
	 * @return array
	 */
	public function get_values() : array {
		return [
			'MDY'       => [
				'description' => __( 'mm/dd/yyyy format.', 'wp-graphql-gravity-forms' ),
				'value'       => self::MDY,
			],
			'DMY'       => [
				'description' => __( 'dd/mm/yyyy format.', 'wp-graphql-gravity-forms' ),
				'value'       => self::DMY,
			],
			'DMY_DASH'  => [
				'description' => __( 'dd-mm-yyyy format.', 'wp-graphql-gravity-forms' ),
				'value'       => self::DMY_DASH,
			],
			'DMY_DOT'   => [
				'description' => __( 'dd.mm.yyyy format.', 'wp-graphql-gravity-forms' ),
				'value'       => self::DMY_DOT,
			],
			'YMD_SLASH' => [
				'description' => __( 'yyyy/mm/dd format.', 'wp-graphql-gravity-forms' ),
				'value'       => self::YMD_SLASH,
			],
			'YMD_DASH'  => [
				'description' => __( 'yyyy/mm/dd format.', 'wp-graphql-gravity-forms' ),
				'value'       => self::YMD_DASH,
			],
			'YMD_DOT'   => [
				'description' => __( 'yyyy.mm.dd format.', 'wp-graphql-gravity-forms' ),
				'value'       => self::YMD_DOT,
			],
		];
	}
}
