<?php
/**
 * Helper functions for mutations handling form submissions
 *
 * @package WPGraphQL\GF\Data
 * @since 0.10.0
 */

namespace WPGraphQL\GF\Data;

use GF_Field;
use GFCommon;
use GFFormsModel;
use GraphQL\Error\UserError;
use WPGraphQL\GF\Data\FieldValueInput;
use WPGraphQL\GF\Utils\GFUtils;
use WPGraphQL\GF\Utils\Utils;

/**
 * Class - EntryObjectMutation
 */
class EntryObjectMutation {
	/**
	 * Disables validation for unsupported fields when submitting a form.
	 * Applied using the 'gform_field_validation' filter.
	 * Currently unsupported fields: captcha
	 *
	 * @param array    $result .
	 * @param mixed    $value .
	 * @param array    $form .
	 * @param GF_Field $field .
	 */
	public static function disable_validation_for_unsupported_fields( array $result, $value, array $form, GF_Field $field ) : array {
		if ( in_array( $field->get_input_type(), [ 'captcha' ], true ) ) {
			$result = [
				'is_valid' => true,
				'message'  => __( 'This field type is not (yet) supported.', 'wp-graphql-gravity-forms' ),
			];
		}
		return $result;
	}

	/**
	 * Returns the FieldValueInput object relative to the field type.
	 *
	 * @param array $input_value The GraphQL mutation input object for the field.
	 * @param array $form The GF form object.
	 * @param array $entry The GF entry object. Used when updating.
	 */
	public static function get_field_value_input( array $input_value, array $form, array $entry = null ) : FieldValueInput\AbstractFieldValueInput {
		$field = GFUtils::get_field_by_id( $form, $input_value['id'] );

		$input_type = $field->get_input_type();

		switch ( $input_type ) {
			case 'address':
				$field_value_input = new FieldValueInput\AddressValuesInput( $input_value, $form, $field );
				break;
			case 'checkbox':
				$field_value_input = new FieldValueInput\CheckboxValuesInput( $input_value, $form, $field );
				break;
			case 'chainedselect':
				$field_value_input = new FieldValueInput\ChainedSelectValuesInput( $input_value, $form, $field );
				break;
			case 'consent':
				$field_value_input = new FieldValueInput\ConsentValueInput( $input_value, $form, $field );
				break;
			case 'email':
				$field_value_input = new FieldValueInput\EmailValuesInput( $input_value, $form, $field );
				break;
			case 'fileupload':
				$field_value_input = new FieldValueInput\FileUploadValuesInput( $input_value, $form, $field );
				break;
			case 'list':
				$field_value_input = new FieldValueInput\ListValuesInput( $input_value, $form, $field );
				break;
			case 'multiselect':
				$field_value_input = new FieldValueInput\ValuesInput( $input_value, $form, $field );
				break;
			case 'name':
				$field_value_input = new FieldValueInput\NameValuesInput( $input_value, $form, $field );
				break;
			case 'post_image':
				$field_value_input = new FieldValueInput\ImageValuesInput( $input_value, $form, $field );
				break;
			case 'signature':
				$field_value_input = new FieldValueInput\SignatureValuesInput( $input_value, $form, $field, $entry );
				break;
			case 'date':
			case 'hidden':
			case 'number':
			case 'phone':
			case 'post_content':
			case 'post_excerpt':
			case 'post_title':
			case 'radio':
			case 'select':
			case 'text':
			case 'textarea':
			case 'time':
			case 'website':
			default:
				$field_value_input = new FieldValueInput\ValueInput( $input_value, $form, $field );
		}

		// @todo: add filter.

		return $field_value_input;
	}

	/**
	 * Generates array of field errors from the submission.
	 *
	 * @param array $messages The Gravity Forms submission validation messages.
	 */
	public static function get_submission_errors( array $messages ) : array {
		return array_map(
			function( $id, $message ) {
				return [
					'id'      => $id,
					'message' => $message,
				];
			},
			array_keys( $messages ),
			$messages
		);
	}

	/**
	 * Renames $field_value keys to input_{id}_{sub_id}, so Gravity Forms can read them.
	 *
	 * @param array $field_values .
	 * */
	public static function rename_value_keys_for_submission( array $field_values ) : array {
		$formatted = [];

		foreach ( $field_values as $key => $value ) {
			$formatted[ 'input_' . str_replace( '.', '_', $key ) ] = $value;
		}
		return $formatted;
	}
}
