<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'WPGraphQL\\GF\\Connection\\AbstractConnection' => $baseDir . '/src/Connection/AbstractConnection.php',
    'WPGraphQL\\GF\\Connection\\EntryConnections' => $baseDir . '/src/Connection/EntryConnections.php',
    'WPGraphQL\\GF\\Connection\\FormConnections' => $baseDir . '/src/Connection/FormConnections.php',
    'WPGraphQL\\GF\\Connection\\FormFieldConnections' => $baseDir . '/src/Connection/FormFieldConnections.php',
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
    'WPGraphQL\\GF\\Interfaces\\FieldValue' => $baseDir . '/src/Interfaces/FieldValue.php',
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
    'WPGraphQL\\GF\\Type\\Enum\\AddressTypeEnum' => $baseDir . '/src/Type/Enum/AddressTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ButtonTypeEnum' => $baseDir . '/src/Type/Enum/ButtonTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CalendarIconTypeEnum' => $baseDir . '/src/Type/Enum/CalendarIconTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CaptchaThemeEnum' => $baseDir . '/src/Type/Enum/CaptchaThemeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CaptchaTypeEnum' => $baseDir . '/src/Type/Enum/CaptchaTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ChainedSelectsAlignmentEnum' => $baseDir . '/src/Type/Enum/ChainedSelectsAlignmentEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ConditionalLogicActionTypeEnum' => $baseDir . '/src/Type/Enum/ConditionalLogicActionTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ConditionalLogicLogicTypeEnum' => $baseDir . '/src/Type/Enum/ConditionalLogicLogicTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ConfirmationTypeEnum' => $baseDir . '/src/Type/Enum/ConfirmationTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CreditCardStyleEnum' => $baseDir . '/src/Type/Enum/CreditCardStyleEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CreditCardTypeEnum' => $baseDir . '/src/Type/Enum/CreditCardTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\DateFieldFormatEnum' => $baseDir . '/src/Type/Enum/DateFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\DateTypeEnum' => $baseDir . '/src/Type/Enum/DateTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\DescriptionPlacementPropertyEnum' => $baseDir . '/src/Type/Enum/DescriptionPlacementPropertyEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\EntryStatusEnum' => $baseDir . '/src/Type/Enum/EntryStatusEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FieldFiltersModeEnum' => $baseDir . '/src/Type/Enum/FieldFiltersModeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FieldFiltersOperatorInputEnum' => $baseDir . '/src/Type/Enum/FieldFiltersOperatorInputEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormDescriptionPlacementEnum' => $baseDir . '/src/Type/Enum/FormDescriptionPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldsEnum' => $baseDir . '/src/Type/Enum/FormFieldsEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormLabelPlacementEnum' => $baseDir . '/src/Type/Enum/FormLabelPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormLimitEntriesPeriodEnum' => $baseDir . '/src/Type/Enum/FormLimitEntriesPeriodEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormStatusEnum' => $baseDir . '/src/Type/Enum/FormStatusEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormSubLabelPlacementEnum' => $baseDir . '/src/Type/Enum/FormSubLabelPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\IdTypeEnum' => $baseDir . '/src/Type/Enum/IdTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\LabelPlacementPropertyEnum' => $baseDir . '/src/Type/Enum/LabelPlacementPropertyEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\MinPasswordStrengthEnum' => $baseDir . '/src/Type/Enum/MinPasswordStrengthEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\NotificationToTypeEnum' => $baseDir . '/src/Type/Enum/NotificationToTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\NumberFieldFormatEnum' => $baseDir . '/src/Type/Enum/NumberFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\PageProgressStyleEnum' => $baseDir . '/src/Type/Enum/PageProgressStyleEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\PageProgressTypeEnum' => $baseDir . '/src/Type/Enum/PageProgressTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\PhoneFieldFormatEnum' => $baseDir . '/src/Type/Enum/PhoneFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\QuizFieldTypeEnum' => $baseDir . '/src/Type/Enum/QuizFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\QuizGradingTypeEnum' => $baseDir . '/src/Type/Enum/QuizGradingTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\RequiredIndicatorEnum' => $baseDir . '/src/Type/Enum/RequiredIndicatorEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\RuleOperatorEnum' => $baseDir . '/src/Type/Enum/RuleOperatorEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\SignatureBorderStyleEnum' => $baseDir . '/src/Type/Enum/SignatureBorderStyleEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\SignatureBorderWidthEnum' => $baseDir . '/src/Type/Enum/SignatureBorderWidthEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\SizePropertyEnum' => $baseDir . '/src/Type/Enum/SizePropertyEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\SortingInputEnum' => $baseDir . '/src/Type/Enum/SortingInputEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\TimeFieldFormatEnum' => $baseDir . '/src/Type/Enum/TimeFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\VisibilityPropertyEnum' => $baseDir . '/src/Type/Enum/VisibilityPropertyEnum.php',
    'WPGraphQL\\GF\\Type\\Input\\AbstractInput' => $baseDir . '/src/Type/Input/AbstractInput.php',
    'WPGraphQL\\GF\\Type\\Input\\AddressInput' => $baseDir . '/src/Type/Input/AddressInput.php',
    'WPGraphQL\\GF\\Type\\Input\\ChainedSelectInput' => $baseDir . '/src/Type/Input/ChainedSelectInput.php',
    'WPGraphQL\\GF\\Type\\Input\\CheckboxInput' => $baseDir . '/src/Type/Input/CheckboxInput.php',
    'WPGraphQL\\GF\\Type\\Input\\CreditCardInput' => $baseDir . '/src/Type/Input/CreditCardInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EmailInput' => $baseDir . '/src/Type/Input/EmailInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EntriesDateFiltersInput' => $baseDir . '/src/Type/Input/EntriesDateFiltersInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EntriesFieldFiltersInput' => $baseDir . '/src/Type/Input/EntriesFieldFiltersInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EntriesSortingInput' => $baseDir . '/src/Type/Input/EntriesSortingInput.php',
    'WPGraphQL\\GF\\Type\\Input\\FieldValuesInput' => $baseDir . '/src/Type/Input/FieldValuesInput.php',
    'WPGraphQL\\GF\\Type\\Input\\FormsSortingInput' => $baseDir . '/src/Type/Input/FormsSortingInput.php',
    'WPGraphQL\\GF\\Type\\Input\\ListInput' => $baseDir . '/src/Type/Input/ListInput.php',
    'WPGraphQL\\GF\\Type\\Input\\NameInput' => $baseDir . '/src/Type/Input/NameInput.php',
    'WPGraphQL\\GF\\Type\\Input\\PostImageInput' => $baseDir . '/src/Type/Input/PostImageInput.php',
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
