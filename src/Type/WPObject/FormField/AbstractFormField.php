<?php
/**
 * Gravity Forms field.
 *
 * @see https://docs.gravityforms.com/field-object/
 * @see https://docs.gravityforms.com/gf_field/
 *
 * @package WPGraphQL\GF\Type\WPObject\FormField
 * @since   0.7.0
 */

namespace WPGraphQL\GF\Type\WPObject\FormField;

use GF_Fields;
use WPGraphQL\GF\Type\WPObject\AbstractObject;
use WPGraphQL\GF\Type\WPInterface\FormField;
use WPGraphQL\GF\Type\WPObject\FormField\FieldProperty;
use WPGraphQL\Registry\TypeRegistry;

/**
 * Class - AbstractFormField
 */
abstract class AbstractFormField extends AbstractObject {
	/**
	 * Type registered in Gravity Forms.
	 *
	 * @var string
	 */
	public static $gf_type;

	/**
	 * {@inheritDoc}
	 *
	 * @var boolean
	 */
	public static bool $should_load_eagerly = true;

	/**
	 * {@inheritDoc}
	 */
	public static function register( TypeRegistry $type_registry = null ) : void {
		register_graphql_object_type(
			static::$type,
			self::prepare_config(
				[
					'description'     => static::get_description(),
					'interfaces'      => [ FormField::$type ],
					'fields'          => static::get_fields(),
					'eagerlyLoadType' => static::$should_load_eagerly,
				]
			)
		);
	}

	/**
	 * Converts the Gravity Forms Setting groups into field properties.
	 *
	 * Used to autoregister FormField fields.
	 */
	protected static function get_fields_from_gf_settings() : array {
		$field = GF_Fields::get( static::$gf_type );

		if ( empty( $field ) ) {
			return [];
		}

		$settings = $field->get_form_editor_field_settings();

		return static::get_field_properties_from_settings( $settings );
	}

	/**
	 * Grabs the GraphQL FormField property for for the corresponding GF field setting.
	 *
	 * @param array $settings .
	 */
	private static function get_field_properties_from_settings( array $settings ) : array {
		$properties = [];

		foreach ( $settings as $setting ) {
			switch ( $setting ) {
				case 'label_setting':
					$properties[] = FieldProperty\LabelProperty::get();
					break;
			}
		}
		return $properties;
	}
}
