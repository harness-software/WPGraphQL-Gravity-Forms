<?php
/**
 * Mutation - updateDraftEntryTextFieldValue
 *
 * Registers mutation to update a Gravity Forms draft entry text field value.
 *
 * @package WPGraphQL\GF\Mutation
 * @since 0.0.1
 */

namespace WPGraphQL\GF\Mutations;

/**
 * Class - UpdateDraftEntryTextFieldValue
 */
class UpdateDraftEntryTextFieldValue extends AbstractDraftEntryUpdater {
	/**
	 * Mutation Name
	 *
	 * @var string
	 */
	public static $name = 'updateDraftEntryTextFieldValue';

	/**
	 * Gravity forms field type for the mutation.
	 *
	 * @var string
	 */
	protected static $gf_type = 'text';

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
	 * Sanitizes the field value.
	 *
	 * @param string $value The field value.
	 *
	 * @return string
	 */
	protected function prepare_field_value( string $value ) : string {
		return $this->prepare_string_value( $value );
	}
}
