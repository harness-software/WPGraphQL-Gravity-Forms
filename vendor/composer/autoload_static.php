<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4041e9042c6b9fdddfadea4e48957371
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\GF\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\GF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQL\\GF\\Connection\\AbstractConnection' => __DIR__ . '/../..' . '/src/Connection/AbstractConnection.php',
        'WPGraphQL\\GF\\Connection\\EntryConnections' => __DIR__ . '/../..' . '/src/Connection/EntryConnections.php',
        'WPGraphQL\\GF\\Connection\\FormConnections' => __DIR__ . '/../..' . '/src/Connection/FormConnections.php',
        'WPGraphQL\\GF\\Connection\\FormFieldConnections' => __DIR__ . '/../..' . '/src/Connection/FormFieldConnections.php',
        'WPGraphQL\\GF\\CoreSchemaFilters' => __DIR__ . '/../..' . '/src/CoreSchemaFilters.php',
        'WPGraphQL\\GF\\Data\\Connection\\EntriesConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/EntriesConnectionResolver.php',
        'WPGraphQL\\GF\\Data\\Connection\\FormFieldsConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/FormFieldsConnectionResolver.php',
        'WPGraphQL\\GF\\Data\\Connection\\FormsConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/FormsConnectionResolver.php',
        'WPGraphQL\\GF\\Data\\Factory' => __DIR__ . '/../..' . '/src/Data/Factory.php',
        'WPGraphQL\\GF\\Data\\Loader\\DraftEntriesLoader' => __DIR__ . '/../..' . '/src/Data/Loader/DraftEntriesLoader.php',
        'WPGraphQL\\GF\\Data\\Loader\\EntriesLoader' => __DIR__ . '/../..' . '/src/Data/Loader/EntriesLoader.php',
        'WPGraphQL\\GF\\Data\\Loader\\FormsLoader' => __DIR__ . '/../..' . '/src/Data/Loader/FormsLoader.php',
        'WPGraphQL\\GF\\GF' => __DIR__ . '/../..' . '/src/GF.php',
        'WPGraphQL\\GF\\Interfaces\\DataManipulator' => __DIR__ . '/../..' . '/src/Interfaces/DataManipulator.php',
        'WPGraphQL\\GF\\Interfaces\\Enum' => __DIR__ . '/../..' . '/src/Interfaces/Enum.php',
        'WPGraphQL\\GF\\Interfaces\\Field' => __DIR__ . '/../..' . '/src/Interfaces/Field.php',
        'WPGraphQL\\GF\\Interfaces\\FieldProperty' => __DIR__ . '/../..' . '/src/Interfaces/FieldProperty.php',
        'WPGraphQL\\GF\\Interfaces\\Mutation' => __DIR__ . '/../..' . '/src/Interfaces/Mutation.php',
        'WPGraphQL\\GF\\Interfaces\\Registrable' => __DIR__ . '/../..' . '/src/Interfaces/Registrable.php',
        'WPGraphQL\\GF\\Interfaces\\Type' => __DIR__ . '/../..' . '/src/Interfaces/Type.php',
        'WPGraphQL\\GF\\Interfaces\\TypeWithFields' => __DIR__ . '/../..' . '/src/Interfaces/TypeWithFields.php',
        'WPGraphQL\\GF\\Model\\DraftEntry' => __DIR__ . '/../..' . '/src/Model/DraftEntry.php',
        'WPGraphQL\\GF\\Model\\Entry' => __DIR__ . '/../..' . '/src/Model/Entry.php',
        'WPGraphQL\\GF\\Model\\Form' => __DIR__ . '/../..' . '/src/Model/Form.php',
        'WPGraphQL\\GF\\Mutation\\AbstractMutation' => __DIR__ . '/../..' . '/src/Mutation/AbstractMutation.php',
        'WPGraphQL\\GF\\Mutation\\DeleteDraftEntry' => __DIR__ . '/../..' . '/src/Mutation/DeleteDraftEntry.php',
        'WPGraphQL\\GF\\Mutation\\DeleteEntry' => __DIR__ . '/../..' . '/src/Mutation/DeleteEntry.php',
        'WPGraphQL\\GF\\Mutation\\FormSubmissionHelper' => __DIR__ . '/../..' . '/src/Mutation/FormSubmissionHelper.php',
        'WPGraphQL\\GF\\Mutation\\SubmitDraftEntry' => __DIR__ . '/../..' . '/src/Mutation/SubmitDraftEntry.php',
        'WPGraphQL\\GF\\Mutation\\SubmitForm' => __DIR__ . '/../..' . '/src/Mutation/SubmitForm.php',
        'WPGraphQL\\GF\\Mutation\\UpdateDraftEntry' => __DIR__ . '/../..' . '/src/Mutation/UpdateDraftEntry.php',
        'WPGraphQL\\GF\\Mutation\\UpdateEntry' => __DIR__ . '/../..' . '/src/Mutation/UpdateEntry.php',
        'WPGraphQL\\GF\\TypeRegistry' => __DIR__ . '/../..' . '/src/TypeRegistry.php',
        'WPGraphQL\\GF\\Type\\AbstractType' => __DIR__ . '/../..' . '/src/Type/AbstractType.php',
        'WPGraphQL\\GF\\Type\\Enum\\AbstractEnum' => __DIR__ . '/../..' . '/src/Type/Enum/AbstractEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\AddressCountryEnum' => __DIR__ . '/../..' . '/src/Type/Enum/AddressCountryEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\AddressTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/AddressTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\ButtonTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/ButtonTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\CalendarIconTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/CalendarIconTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\CaptchaBadgePositionEnum' => __DIR__ . '/../..' . '/src/Type/Enum/CaptchaBadgePositionEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\CaptchaThemeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/CaptchaThemeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\CaptchaTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/CaptchaTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\ChainedSelectsAlignmentEnum' => __DIR__ . '/../..' . '/src/Type/Enum/ChainedSelectsAlignmentEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\ConditionalLogicActionTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/ConditionalLogicActionTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\ConditionalLogicLogicTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/ConditionalLogicLogicTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\ConfirmationTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/ConfirmationTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\CreditCardTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/CreditCardTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\DateFieldFormatEnum' => __DIR__ . '/../..' . '/src/Type/Enum/DateFieldFormatEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\DateTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/DateTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\DescriptionPlacementPropertyEnum' => __DIR__ . '/../..' . '/src/Type/Enum/DescriptionPlacementPropertyEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\EntryStatusEnum' => __DIR__ . '/../..' . '/src/Type/Enum/EntryStatusEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\FieldFiltersModeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/FieldFiltersModeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\FieldFiltersOperatorInputEnum' => __DIR__ . '/../..' . '/src/Type/Enum/FieldFiltersOperatorInputEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\FormDescriptionPlacementEnum' => __DIR__ . '/../..' . '/src/Type/Enum/FormDescriptionPlacementEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\FormFieldTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/FormFieldTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\FormLabelPlacementEnum' => __DIR__ . '/../..' . '/src/Type/Enum/FormLabelPlacementEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\FormLimitEntriesPeriodEnum' => __DIR__ . '/../..' . '/src/Type/Enum/FormLimitEntriesPeriodEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\FormStatusEnum' => __DIR__ . '/../..' . '/src/Type/Enum/FormStatusEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\FormSubLabelPlacementEnum' => __DIR__ . '/../..' . '/src/Type/Enum/FormSubLabelPlacementEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\IdTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/IdTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\LabelPlacementPropertyEnum' => __DIR__ . '/../..' . '/src/Type/Enum/LabelPlacementPropertyEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\MinPasswordStrengthEnum' => __DIR__ . '/../..' . '/src/Type/Enum/MinPasswordStrengthEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\NotificationToTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/NotificationToTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\NumberFieldFormatEnum' => __DIR__ . '/../..' . '/src/Type/Enum/NumberFieldFormatEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\PageProgressStyleEnum' => __DIR__ . '/../..' . '/src/Type/Enum/PageProgressStyleEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\PageProgressTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/PageProgressTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\PhoneFieldFormatEnum' => __DIR__ . '/../..' . '/src/Type/Enum/PhoneFieldFormatEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\PostFormatTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/PostFormatTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\QuizFieldTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/QuizFieldTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\QuizGradingTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/QuizGradingTypeEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\RequiredIndicatorEnum' => __DIR__ . '/../..' . '/src/Type/Enum/RequiredIndicatorEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\RuleOperatorEnum' => __DIR__ . '/../..' . '/src/Type/Enum/RuleOperatorEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\SignatureBorderStyleEnum' => __DIR__ . '/../..' . '/src/Type/Enum/SignatureBorderStyleEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\SignatureBorderWidthEnum' => __DIR__ . '/../..' . '/src/Type/Enum/SignatureBorderWidthEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\SizePropertyEnum' => __DIR__ . '/../..' . '/src/Type/Enum/SizePropertyEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\SortingInputEnum' => __DIR__ . '/../..' . '/src/Type/Enum/SortingInputEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\TimeFieldFormatEnum' => __DIR__ . '/../..' . '/src/Type/Enum/TimeFieldFormatEnum.php',
        'WPGraphQL\\GF\\Type\\Enum\\VisibilityPropertyEnum' => __DIR__ . '/../..' . '/src/Type/Enum/VisibilityPropertyEnum.php',
        'WPGraphQL\\GF\\Type\\Input\\AbstractInput' => __DIR__ . '/../..' . '/src/Type/Input/AbstractInput.php',
        'WPGraphQL\\GF\\Type\\Input\\AddressInput' => __DIR__ . '/../..' . '/src/Type/Input/AddressInput.php',
        'WPGraphQL\\GF\\Type\\Input\\ChainedSelectInput' => __DIR__ . '/../..' . '/src/Type/Input/ChainedSelectInput.php',
        'WPGraphQL\\GF\\Type\\Input\\CheckboxInput' => __DIR__ . '/../..' . '/src/Type/Input/CheckboxInput.php',
        'WPGraphQL\\GF\\Type\\Input\\CreditCardInput' => __DIR__ . '/../..' . '/src/Type/Input/CreditCardInput.php',
        'WPGraphQL\\GF\\Type\\Input\\EmailInput' => __DIR__ . '/../..' . '/src/Type/Input/EmailInput.php',
        'WPGraphQL\\GF\\Type\\Input\\EntriesDateFiltersInput' => __DIR__ . '/../..' . '/src/Type/Input/EntriesDateFiltersInput.php',
        'WPGraphQL\\GF\\Type\\Input\\EntriesFieldFiltersInput' => __DIR__ . '/../..' . '/src/Type/Input/EntriesFieldFiltersInput.php',
        'WPGraphQL\\GF\\Type\\Input\\EntriesSortingInput' => __DIR__ . '/../..' . '/src/Type/Input/EntriesSortingInput.php',
        'WPGraphQL\\GF\\Type\\Input\\FieldValuesInput' => __DIR__ . '/../..' . '/src/Type/Input/FieldValuesInput.php',
        'WPGraphQL\\GF\\Type\\Input\\FormsSortingInput' => __DIR__ . '/../..' . '/src/Type/Input/FormsSortingInput.php',
        'WPGraphQL\\GF\\Type\\Input\\ListInput' => __DIR__ . '/../..' . '/src/Type/Input/ListInput.php',
        'WPGraphQL\\GF\\Type\\Input\\NameInput' => __DIR__ . '/../..' . '/src/Type/Input/NameInput.php',
        'WPGraphQL\\GF\\Type\\Input\\PostImageInput' => __DIR__ . '/../..' . '/src/Type/Input/PostImageInput.php',
        'WPGraphQL\\GF\\Type\\WPInterface\\FormField' => __DIR__ . '/../..' . '/src/Type/WPInterface/FormField.php',
        'WPGraphQL\\GF\\Type\\WPObject\\AbstractObject' => __DIR__ . '/../..' . '/src/Type/WPObject/AbstractObject.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Button\\Button' => __DIR__ . '/../..' . '/src/Type/WPObject/Button/Button.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Button\\LastPageButton' => __DIR__ . '/../..' . '/src/Type/WPObject/Button/LastPageButton.php',
        'WPGraphQL\\GF\\Type\\WPObject\\ConditionalLogic\\ConditionalLogic' => __DIR__ . '/../..' . '/src/Type/WPObject/ConditionalLogic/ConditionalLogic.php',
        'WPGraphQL\\GF\\Type\\WPObject\\ConditionalLogic\\ConditionalLogicRule' => __DIR__ . '/../..' . '/src/Type/WPObject/ConditionalLogic/ConditionalLogicRule.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Entry\\Entry' => __DIR__ . '/../..' . '/src/Type/WPObject/Entry/Entry.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Entry\\EntryQuizResults' => __DIR__ . '/../..' . '/src/Type/WPObject/Entry/EntryQuizResults.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FieldError' => __DIR__ . '/../..' . '/src/Type/WPObject/FieldError.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\ChoiceMapper' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldProperty/ChoiceMapper.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\FieldProperties' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldProperty/FieldProperties.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\InputMapper' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldProperty/InputMapper.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\PropertyMapper' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldProperty/PropertyMapper.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperties' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldValue/ValueProperties.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\AddressValueProperty' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/AddressValueProperty.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\CheckboxValueProperty' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/CheckboxValueProperty.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\ListValueProperty' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/ListValueProperty.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\NameValueProperty' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/NameValueProperty.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\PostImageValueProperty' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/PostImageValueProperty.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\TimeValueProperty' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/TimeValueProperty.php',
        'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FormFields' => __DIR__ . '/../..' . '/src/Type/WPObject/FormField/FormFields.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Form\\Form' => __DIR__ . '/../..' . '/src/Type/WPObject/Form/Form.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormConfirmation' => __DIR__ . '/../..' . '/src/Type/WPObject/Form/FormConfirmation.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormNotification' => __DIR__ . '/../..' . '/src/Type/WPObject/Form/FormNotification.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormNotificationRouting' => __DIR__ . '/../..' . '/src/Type/WPObject/Form/FormNotificationRouting.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormPagination' => __DIR__ . '/../..' . '/src/Type/WPObject/Form/FormPagination.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Form\\QuizGrades' => __DIR__ . '/../..' . '/src/Type/WPObject/Form/QuizGrades.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Form\\QuizSettings' => __DIR__ . '/../..' . '/src/Type/WPObject/Form/QuizSettings.php',
        'WPGraphQL\\GF\\Type\\WPObject\\Form\\SaveAndContinue' => __DIR__ . '/../..' . '/src/Type/WPObject/Form/SaveAndContinue.php',
        'WPGraphQL\\GF\\Utils\\GFUtils' => __DIR__ . '/../..' . '/src/Utils/GFUtils.php',
        'WPGraphQL\\GF\\Utils\\Utils' => __DIR__ . '/../..' . '/src/Utils/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4041e9042c6b9fdddfadea4e48957371::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4041e9042c6b9fdddfadea4e48957371::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4041e9042c6b9fdddfadea4e48957371::$classMap;

        }, null, ClassLoader::class);
    }
}
