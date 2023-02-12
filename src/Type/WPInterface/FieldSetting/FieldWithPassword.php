<?php
/**
 * GraphQL Interface for a FormField with the `password_setting` setting.
 *
 * @package WPGraphQL\GF\Type\Interface\FieldSetting
 * @since  @todo
 */

namespace WPGraphQL\GF\Type\WPInterface\FieldSetting;

use GF_Field;
use WPGraphQL\GF\Interfaces\TypeWithInterfaces;
use WPGraphQL\GF\Registry\FieldInputRegistry;
use WPGraphQL\GF\Type\WPInterface\FieldWithInputs;
use WPGraphQL\Registry\TypeRegistry;

/**
 * Class - FieldWithPassword
 */
class FieldWithPassword extends AbstractFieldSetting implements TypeWithInterfaces {
	/**
	 * Type registered in WPGraphQL.
	 *
	 * @var string
	 */
	public static string $type = 'GfFieldWithPasswordSetting';

	/**
	 * The password of GF Field Setting
	 *
	 * @var string
	 */
	public static string $field_setting = 'password_setting';

	/**
	 * {@inheritDoc}
	 */
	public static function get_type_config( ?TypeRegistry $type_registry = null ): array {
		$config = parent::get_type_config( $type_registry );

		$config['interfaces'] = static::get_interfaces();

		return $config;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_fields() : array {
		return FieldWithInputs::get_fields();
	}

	
	/**
	 * {@inheritDoc}
	 */
	public static function get_interfaces() : array {
		return [
			FieldWithInputs::$type,
		];
	}
}
