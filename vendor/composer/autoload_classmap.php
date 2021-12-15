<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'WPGraphQL\\GF\\Connection\\AbstractConnection' => $baseDir . '/src/Connection/AbstractConnection.php',
    'WPGraphQL\\GF\\Connection\\EntriesConnection' => $baseDir . '/src/Connection/EntriesConnection.php',
    'WPGraphQL\\GF\\Connection\\FormFieldsConnection' => $baseDir . '/src/Connection/FormFieldsConnection.php',
    'WPGraphQL\\GF\\Connection\\FormsConnection' => $baseDir . '/src/Connection/FormsConnection.php',
    'WPGraphQL\\GF\\CoreSchemaFilters' => $baseDir . '/src/CoreSchemaFilters.php',
    'WPGraphQL\\GF\\Data\\Connection\\EntriesConnectionResolver' => $baseDir . '/src/Data/Connection/EntriesConnectionResolver.php',
    'WPGraphQL\\GF\\Data\\Connection\\FormFieldsConnectionResolver' => $baseDir . '/src/Data/Connection/FormFieldsConnectionResolver.php',
    'WPGraphQL\\GF\\Data\\Connection\\FormsConnectionResolver' => $baseDir . '/src/Data/Connection/FormsConnectionResolver.php',
    'WPGraphQL\\GF\\Data\\Factory' => $baseDir . '/src/Data/Factory.php',
    'WPGraphQL\\GF\\Data\\Loader\\DraftEntriesLoader' => $baseDir . '/src/Data/Loader/DraftEntriesLoader.php',
    'WPGraphQL\\GF\\Data\\Loader\\EntriesLoader' => $baseDir . '/src/Data/Loader/EntriesLoader.php',
    'WPGraphQL\\GF\\Data\\Loader\\FormsLoader' => $baseDir . '/src/Data/Loader/FormsLoader.php',
    'WPGraphQL\\GF\\GF' => $baseDir . '/src/GF.php',
    'WPGraphQL\\GF\\Interfaces\\DataManipulator' => $baseDir . '/src/Interfaces/DataManipulator.php',
    'WPGraphQL\\GF\\Interfaces\\Enum' => $baseDir . '/src/Interfaces/Enum.php',
    'WPGraphQL\\GF\\Interfaces\\Field' => $baseDir . '/src/Interfaces/Field.php',
    'WPGraphQL\\GF\\Interfaces\\FieldProperty' => $baseDir . '/src/Interfaces/FieldProperty.php',
    'WPGraphQL\\GF\\Interfaces\\Mutation' => $baseDir . '/src/Interfaces/Mutation.php',
    'WPGraphQL\\GF\\Interfaces\\Registrable' => $baseDir . '/src/Interfaces/Registrable.php',
    'WPGraphQL\\GF\\Interfaces\\Type' => $baseDir . '/src/Interfaces/Type.php',
    'WPGraphQL\\GF\\Interfaces\\TypeWithFields' => $baseDir . '/src/Interfaces/TypeWithFields.php',
    'WPGraphQL\\GF\\Model\\DraftEntry' => $baseDir . '/src/Model/DraftEntry.php',
    'WPGraphQL\\GF\\Model\\Entry' => $baseDir . '/src/Model/Entry.php',
    'WPGraphQL\\GF\\Model\\Form' => $baseDir . '/src/Model/Form.php',
    'WPGraphQL\\GF\\Mutation\\AbstractMutation' => $baseDir . '/src/Mutation/AbstractMutation.php',
    'WPGraphQL\\GF\\Mutation\\DeleteDraftEntry' => $baseDir . '/src/Mutation/DeleteDraftEntry.php',
    'WPGraphQL\\GF\\Mutation\\DeleteEntry' => $baseDir . '/src/Mutation/DeleteEntry.php',
    'WPGraphQL\\GF\\Mutation\\FormSubmissionHelper' => $baseDir . '/src/Mutation/FormSubmissionHelper.php',
    'WPGraphQL\\GF\\Mutation\\SubmitDraftEntry' => $baseDir . '/src/Mutation/SubmitDraftEntry.php',
    'WPGraphQL\\GF\\Mutation\\SubmitForm' => $baseDir . '/src/Mutation/SubmitForm.php',
    'WPGraphQL\\GF\\Mutation\\UpdateDraftEntry' => $baseDir . '/src/Mutation/UpdateDraftEntry.php',
    'WPGraphQL\\GF\\Mutation\\UpdateEntry' => $baseDir . '/src/Mutation/UpdateEntry.php',
    'WPGraphQL\\GF\\TypeRegistry' => $baseDir . '/src/TypeRegistry.php',
    'WPGraphQL\\GF\\Type\\AbstractType' => $baseDir . '/src/Type/AbstractType.php',
    'WPGraphQL\\GF\\Type\\Enum\\AbstractEnum' => $baseDir . '/src/Type/Enum/AbstractEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\AddressFieldCountryEnum' => $baseDir . '/src/Type/Enum/AddressFieldCountryEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\AddressFieldTypeEnum' => $baseDir . '/src/Type/Enum/AddressFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CaptchaFieldBadgePositionEnum' => $baseDir . '/src/Type/Enum/CaptchaFieldBadgePositionEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CaptchaFieldThemeEnum' => $baseDir . '/src/Type/Enum/CaptchaFieldThemeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CaptchaFieldTypeEnum' => $baseDir . '/src/Type/Enum/CaptchaFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ChainedSelectFieldAlignmentEnum' => $baseDir . '/src/Type/Enum/ChainedSelectFieldAlignmentEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ConditionalLogicActionTypeEnum' => $baseDir . '/src/Type/Enum/ConditionalLogicActionTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ConditionalLogicLogicTypeEnum' => $baseDir . '/src/Type/Enum/ConditionalLogicLogicTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\DateFieldFormatEnum' => $baseDir . '/src/Type/Enum/DateFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\DateFieldTypeEnum' => $baseDir . '/src/Type/Enum/DateFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\EntryIdTypeEnum' => $baseDir . '/src/Type/Enum/EntryIdTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\EntryStatusEnum' => $baseDir . '/src/Type/Enum/EntryStatusEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FieldFiltersModeEnum' => $baseDir . '/src/Type/Enum/FieldFiltersModeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FieldFiltersOperatorInputEnum' => $baseDir . '/src/Type/Enum/FieldFiltersOperatorInputEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormButtonTypeEnum' => $baseDir . '/src/Type/Enum/FormButtonTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormConfirmationTypeEnum' => $baseDir . '/src/Type/Enum/FormConfirmationTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormCreditCardTypeEnum' => $baseDir . '/src/Type/Enum/FormCreditCardTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormDescriptionPlacementEnum' => $baseDir . '/src/Type/Enum/FormDescriptionPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldCalendarIconTypeEnum' => $baseDir . '/src/Type/Enum/FormFieldCalendarIconTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldDescriptionPlacementEnum' => $baseDir . '/src/Type/Enum/FormFieldDescriptionPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldLabelPlacementEnum' => $baseDir . '/src/Type/Enum/FormFieldLabelPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldRequiredIndicatorEnum' => $baseDir . '/src/Type/Enum/FormFieldRequiredIndicatorEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldSizeEnum' => $baseDir . '/src/Type/Enum/FormFieldSizeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldTypeEnum' => $baseDir . '/src/Type/Enum/FormFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldVisibilityEnum' => $baseDir . '/src/Type/Enum/FormFieldVisibilityEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormIdTypeEnum' => $baseDir . '/src/Type/Enum/FormIdTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormLabelPlacementEnum' => $baseDir . '/src/Type/Enum/FormLabelPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormLimitEntriesPeriodEnum' => $baseDir . '/src/Type/Enum/FormLimitEntriesPeriodEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormNotificationToTypeEnum' => $baseDir . '/src/Type/Enum/FormNotificationToTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormPageProgressStyleEnum' => $baseDir . '/src/Type/Enum/FormPageProgressStyleEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormPageProgressTypeEnum' => $baseDir . '/src/Type/Enum/FormPageProgressTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormRuleOperatorEnum' => $baseDir . '/src/Type/Enum/FormRuleOperatorEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormStatusEnum' => $baseDir . '/src/Type/Enum/FormStatusEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormSubLabelPlacementEnum' => $baseDir . '/src/Type/Enum/FormSubLabelPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\NumberFieldFormatEnum' => $baseDir . '/src/Type/Enum/NumberFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\PasswordFieldMinStrengthEnum' => $baseDir . '/src/Type/Enum/PasswordFieldMinStrengthEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\PhoneFieldFormatEnum' => $baseDir . '/src/Type/Enum/PhoneFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\PostFormatTypeEnum' => $baseDir . '/src/Type/Enum/PostFormatTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\QuizFieldGradingTypeEnum' => $baseDir . '/src/Type/Enum/QuizFieldGradingTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\QuizFieldTypeEnum' => $baseDir . '/src/Type/Enum/QuizFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\SignatureFieldBorderStyleEnum' => $baseDir . '/src/Type/Enum/SignatureFieldBorderStyleEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\SignatureFieldBorderWidthEnum' => $baseDir . '/src/Type/Enum/SignatureFieldBorderWidthEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\TimeFieldFormatEnum' => $baseDir . '/src/Type/Enum/TimeFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Input\\AbstractInput' => $baseDir . '/src/Type/Input/AbstractInput.php',
    'WPGraphQL\\GF\\Type\\Input\\AddressFieldInput' => $baseDir . '/src/Type/Input/AddressFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\ChainedSelectFieldInput' => $baseDir . '/src/Type/Input/ChainedSelectFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\CheckboxFieldInput' => $baseDir . '/src/Type/Input/CheckboxFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\CreditCardFieldInput' => $baseDir . '/src/Type/Input/CreditCardFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EmailFieldInput' => $baseDir . '/src/Type/Input/EmailFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EntriesConnectionOrderbyInput' => $baseDir . '/src/Type/Input/EntriesConnectionOrderbyInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EntriesDateFiltersInput' => $baseDir . '/src/Type/Input/EntriesDateFiltersInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EntriesFieldFiltersInput' => $baseDir . '/src/Type/Input/EntriesFieldFiltersInput.php',
    'WPGraphQL\\GF\\Type\\Input\\FormFieldValuesInput' => $baseDir . '/src/Type/Input/FormFieldValuesInput.php',
    'WPGraphQL\\GF\\Type\\Input\\FormsConnectionOrderbyInput' => $baseDir . '/src/Type/Input/FormsConnectionOrderbyInput.php',
    'WPGraphQL\\GF\\Type\\Input\\ListFieldInput' => $baseDir . '/src/Type/Input/ListFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\NameFieldInput' => $baseDir . '/src/Type/Input/NameFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\PostImageFieldInput' => $baseDir . '/src/Type/Input/PostImageFieldInput.php',
    'WPGraphQL\\GF\\Type\\WPInterface\\FormField' => $baseDir . '/src/Type/WPInterface/FormField.php',
    'WPGraphQL\\GF\\Type\\WPObject\\AbstractObject' => $baseDir . '/src/Type/WPObject/AbstractObject.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Button\\Button' => $baseDir . '/src/Type/WPObject/Button/Button.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Button\\LastPageButton' => $baseDir . '/src/Type/WPObject/Button/LastPageButton.php',
    'WPGraphQL\\GF\\Type\\WPObject\\ConditionalLogic\\ConditionalLogic' => $baseDir . '/src/Type/WPObject/ConditionalLogic/ConditionalLogic.php',
    'WPGraphQL\\GF\\Type\\WPObject\\ConditionalLogic\\ConditionalLogicRule' => $baseDir . '/src/Type/WPObject/ConditionalLogic/ConditionalLogicRule.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Entry\\Entry' => $baseDir . '/src/Type/WPObject/Entry/Entry.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Entry\\EntryQuizResults' => $baseDir . '/src/Type/WPObject/Entry/EntryQuizResults.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FieldError' => $baseDir . '/src/Type/WPObject/FieldError.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\ChoiceMapper' => $baseDir . '/src/Type/WPObject/FormField/FieldProperty/ChoiceMapper.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\FieldProperties' => $baseDir . '/src/Type/WPObject/FormField/FieldProperty/FieldProperties.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\InputMapper' => $baseDir . '/src/Type/WPObject/FormField/FieldProperty/InputMapper.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\PropertyMapper' => $baseDir . '/src/Type/WPObject/FormField/FieldProperty/PropertyMapper.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperties' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperties.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\AddressValueProperty' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/AddressValueProperty.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\CheckboxValueProperty' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/CheckboxValueProperty.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\ListValueProperty' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/ListValueProperty.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\NameValueProperty' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/NameValueProperty.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\PostImageValueProperty' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/PostImageValueProperty.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\TimeValueProperty' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/TimeValueProperty.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FormFields' => $baseDir . '/src/Type/WPObject/FormField/FormFields.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\Form' => $baseDir . '/src/Type/WPObject/Form/Form.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormConfirmation' => $baseDir . '/src/Type/WPObject/Form/FormConfirmation.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormNotification' => $baseDir . '/src/Type/WPObject/Form/FormNotification.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormNotificationRouting' => $baseDir . '/src/Type/WPObject/Form/FormNotificationRouting.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormPagination' => $baseDir . '/src/Type/WPObject/Form/FormPagination.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\QuizGrades' => $baseDir . '/src/Type/WPObject/Form/QuizGrades.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\QuizSettings' => $baseDir . '/src/Type/WPObject/Form/QuizSettings.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\SaveAndContinue' => $baseDir . '/src/Type/WPObject/Form/SaveAndContinue.php',
    'WPGraphQL\\GF\\Utils\\GFUtils' => $baseDir . '/src/Utils/GFUtils.php',
    'WPGraphQL\\GF\\Utils\\Utils' => $baseDir . '/src/Utils/Utils.php',
);
