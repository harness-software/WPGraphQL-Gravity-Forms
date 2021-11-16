<?php
/**
 * Enum Type - FormFieldsEnum
 *
 * @package WPGraphQL\GF\Types\Enum,
 * @since   0.0.1
 */

namespace WPGraphQL\GF\Types\Enum;

use WPGraphQL\Type\WPEnumType;
use WPGraphQL\GF\Types\Field\AbstractFormField;
use WPGraphQL\GF\GF;

/**
 * Class - FormFieldsEnum
 */
class FormFieldsEnum extends AbstractEnum {
	/**
	 * Type registered in WPGraphQL.
	 *
	 * @var string
	 */
	public static $type = 'FormFieldsEnum';


	/**
	 * Sets the Enum type description.
	 *
	 * @return string Enum type description.
	 */
	public function get_type_description() : string {
		return __( 'Gravity Forms Field Types', 'wp-graphql-gravity-forms' );
	}

	/**
	 * Sets the Enum type values.
	 *
	 * @return array
	 */
	public function get_values() : array {
		$fields = array_filter( GF::instances(), fn( $instance ) => $instance instanceof AbstractFormField );

		$values = [];

		foreach ( $fields as $field ) {
			$values[ WPEnumType::get_safe_name( $field::$gf_type ) ] = [
				'value'       => $field::$gf_type,
				// translators: GF Field type.
				'description' => sprintf( __( 'FormField enum %s.', 'wp-graphql-gravity-forms' ), $field::$gf_type ),
			];
		}

		return $values ?? [];
	}
}
