<?php
/**
 * Mutation - updateDraftEntrySelectFieldValue
 *
 * Registers mutation to update a Gravity Forms draft entry select field value.
 *
 * @package WPGraphQL\GF\Mutation
 * @since 0.0.1
 */

namespace WPGraphQL\GF\Mutations;

/**
 * Class - UpdateDraftEntrySelectFieldValue
 */
class UpdateDraftEntrySelectFieldValue extends AbstractDraftEntryUpdater {
	/**
	 * Mutation Name
	 *
	 * @var string
	 */
	public static $name = 'updateDraftEntrySelectFieldValue';

	/**
	 * Gravity forms field type for the mutation.
	 *
	 * @var string
	 */
	protected static $gf_type = 'select';

	/**
	 * Defines the input field value configuration.
	 *
	 * @return array
	 */
	protected function get_value_input_field() : array {
		return [
			'type'        => 'String',
			'description' => __( 'The form field value.', 'wp-graphql-gravity-forms' ),
		];
	}

	/**
	 * Sanitizes the field values.
	 *
	 * @param string $value The field value.
	 *
	 * @return string
	 */
	protected function prepare_field_value( string $value ) : string {
		return $this->prepare_string_value( $value );
	}
}
