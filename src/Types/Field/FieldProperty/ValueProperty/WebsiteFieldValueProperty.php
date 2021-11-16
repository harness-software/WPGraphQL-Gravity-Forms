<?php
/**
 * GraphQL Field - WebsiteFieldValueProperty
 * Values for an individual Website field.
 *
 * @package WPGraphQL\GF\Types\Field\FieldProperties\ValueProperty
 * @since   0.5.0
 */

namespace WPGraphQL\GF\Types\Field\FieldProperty\ValueProperty;

use GF_Field;

/**
 * Class - WebsiteFieldValueProperty
 */
class WebsiteFieldValueProperty extends AbstractValueProperty {
	/**
	 * Type registered in WPGraphQL that we are adding the field to.
	 *
	 * @var string
	 */
	public static $type = 'WebsiteField';

	/**
	 * Existing type registered in WPGraphQL that we are adding the field to.
	 *
	 * @var string
	 */
	public static $field_name = 'value';

	/**
	 * Gets the field type description.
	 */
	public function get_type_description() : string {
		return __( 'Website field value.', 'wp-graphql-gravity-forms' );
	}

	/**
	 * Gets the GraphQL type for the field.
	 *
	 * @return string
	 */
	public function get_field_type() : string {
		return 'String';
	}

	/**
	 * Get the field value.
	 *
	 * @param array    $entry Gravity Forms entry.
	 * @param GF_Field $field Gravity Forms field.
	 *
	 * @return string|null Entry field value.
	 */
	public static function get( array $entry, GF_Field $field ) {
		return isset( $entry[ $field->id ] ) ? (string) $entry[ $field->id ] : null;
	}
}
