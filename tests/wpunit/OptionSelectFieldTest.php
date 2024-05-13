<?php
/**
 * Test OptionSelect type.
 *
 * @package Tests\WPGraphQL\GF
 */

use Tests\WPGraphQL\GF\TestCase\FormFieldTestCase;
use Tests\WPGraphQL\GF\TestCase\FormFieldTestCaseInterface;

/**
 * Class -OptionSelectFieldTest.
 */
class OptionSelectFieldTest extends FormFieldTestCase implements FormFieldTestCaseInterface {
	protected $product_field_helper;

	/**
	 * Tests the field properties and values.
	 */
	public function testField(): void {
		$this->runTestField();
	}

	/**
	 * Tests submitting the field values as a draft entry with submitGfForm.
	 */
	public function testSubmitDraft(): void {
		$this->runTestSubmitDraft();
	}

	/**
	 * Tests submitting the field values as an entry with submitGfForm.
	 */
	public function testSubmitForm(): void {
		$this->runtestSubmitForm();
	}

	/**
	 * Tests updating the field value with updateGfEntry.
	 */
	public function testUpdateEntry(): void {
		$this->runtestUpdateEntry();
	}

	/**
	 * Tests updating the draft field value with updateGfEntry.
	 */
	public function testUpdateDraft(): void {
		$this->runTestUpdateDraft();
	}

	/**
	 * Sets the correct Field Helper.
	 */
	public function field_helper() {
		$this->product_field_helper = $this->tester->getPropertyHelper(
			'ProductField',
			[
				'inputType'             => 'singleproduct',
				'autocompleteAttribute' => 'autocomplete',
				'disableQuantity'       => true,
			]
		);
		return $this->tester->getPropertyHelper(
			'OptionField',
			[
				'inputType'             => 'select',
				'productField'          => 1,
				'id'                    => 2,
				'autocompleteAttribute' => true,
				'enableAutocomplete'    => true,
				'enableEnhancedUI'      => true,
				'enablePrice'           => true,
				'noDuplicates'          => false,
			]
		);
	}

	/**
	 * Generates the form fields from factory. Must be wrappend in an array.
	 */
	public function generate_fields(): array {
		return [
			$this->factory->field->create(
				array_merge(
					$this->product_field_helper->values,
					[
						'inputs' => [
							[
								'id'    => 1.1,
								'label' => 'Name',
								'name'  => null,
							],
							[
								'id'    => 1.2,
								'label' => 'Price',
								'name'  => null,
							],
							[
								'id'    => 1.3,
								'label' => 'Quantity',
								'name'  => null,
							],
						],
					]
				)
			),
			$this->factory->field->create(
				array_merge(
					$this->property_helper->values,
					[]
				)
			),
		];
	}

	public function mutation_value_field_id(): int {
		return $this->fields[1]->id;
	}

	/**
	 * The value as expected in GraphQL.
	 */
	public function field_value() {
		return $this->field_value_input() . ' (' . $this->fields[1]['choices'][0]['price'] . ')';
	}

	public function field_value_input() {
		return $this->fields[1]['choices'][0]['value'];
	}

	/**
	 * The value as expected in GraphQL when updating from field_value().
	 */
	public function updated_field_value() {
		return $this->updated_field_value_input() . ' (' . $this->fields[1]['choices'][2]['price'] . ')';
	}

	public function updated_field_value_input() {
		return $this->fields[1]['choices'][2]['value'];
	}

	/**
	 * The value as expected by Gravity Forms.
	 */
	public function value() {
		return [
			(string) $this->fields[0]['inputs'][0]['id'] => $this->fields[0]->label,
			(string) $this->fields[0]['inputs'][1]['id'] => $this->fields[0]->basePrice,
			(string) $this->fields[0]['inputs'][2]['id'] => 1.0,
			$this->fields[1]->id                         => $this->field_value,
		];
	}

	/**
	 * The GraphQL query string.
	 */
	public function field_query(): string {
		return '
			... on OptionField {
				adminLabel
				canPrepopulate
				choices {
					formattedPrice
					isSelected
					price
					text
					value
				}
				cssClass
				defaultValue
				description
				descriptionPlacement
				errorMessage
				hasChoiceValue
				inputName
				inputType
				isRequired
				label
				labelPlacement
				personalData {
					isIdentificationField
					shouldErase
					shouldExport
				}
				placeholder
				productField
				type
				... on OptionSelectField {
					autocompleteAttribute
					hasAutocomplete
					hasEnhancedUI
					shouldAllowDuplicates
					size
					value
				}
			}
		';
	}

	/**
	 * SubmitForm mutation string.
	 */
	public function submit_form_mutation(): string {
		return '
			mutation ($formId: ID!, $fieldId: Int!, $value: String!, $draft: Boolean) {
				submitGfForm( input: { id: $formId, saveAsDraft: $draft, fieldValues: {id: $fieldId, value: $value}}) {
					errors {
						id
						message
					}
					entry {
						formFields {
							nodes {
								... on OptionField {
									value
								}
							}
						}
						... on GfSubmittedEntry {
							databaseId
						}
						... on GfDraftEntry {
							resumeToken
						}
					}
				}
			}
		';
	}

	/**
	 * Returns the UpdateEntry mutation string.
	 */
	public function update_entry_mutation(): string {
		return '
			mutation updateGfEntry( $entryId: ID!, $fieldId: Int!, $value: String! ){
				updateGfEntry( input: { id: $entryId, shouldValidate: true, fieldValues: {id: $fieldId, value: $value} }) {
					errors {
						id
						message
					}
					entry {
						formFields {
							nodes {
								__typename
								... on OptionSelectField {
									value
								}
							}
						}
					}
				}
			}
		';
	}

	/**
	 * Returns the UpdateDraftEntry mutation string.
	 */
	public function update_draft_entry_mutation(): string {
		return '
			mutation updateGfDraftEntry( $resumeToken: ID!, $fieldId: Int!, $value: String! ){
				updateGfDraftEntry( input: {id: $resumeToken, idType: RESUME_TOKEN, shouldValidate: true, fieldValues: {id: $fieldId, value: $value} }) {
					errors {
						id
						message
					}
					entry: draftEntry {
						formFields {
							nodes {
								... on OptionSelectField {
									value
								}
							}
						}
					}
				}
			}
		';
	}

	/**
	 * {@inheritDoc}
	 */
	public function expected_field_response( array $form ): array {
		$expected   = $this->getExpectedFormFieldValues( $form['fields'][1] );
		$expected[] = $this->expected_field_value( 'value', $this->field_value );

		return [
			$this->expectedObject(
				'gfEntry',
				[
					$this->expectedObject(
						'formFields',
						[
							$this->expectedNode(
								'nodes',
								$expected,
								1
							),
						]
					),
				]
			),
		];
	}

	/**
	 * The expected WPGraphQL mutation response.
	 *
	 * @param string $mutationName .
	 * @param mixed  $value .
	 */
	public function expected_mutation_response( string $mutationName, $value ): array {
		return [
			$this->expectedObject(
				$mutationName,
				[
					$this->expectedObject(
						'entry',
						[
							$this->expectedObject(
								'formFields',
								[
									$this->expectedField( 'nodes.1.value', $value ),
								]
							),
						]
					),
				]
			),
		];
	}

	/**
	 * Checks if values submitted by GraphQL are the same as whats stored on the server.
	 *
	 * @param array $actual_entry .
	 * @param array $form .
	 */
	public function check_saved_values( $actual_entry, $form ): void {
		$this->assertStringStartsWith( $this->field_value_input, $actual_entry[ $form['fields'][1]->id ], 'Submit mutation entry value not equal' );
	}
}
