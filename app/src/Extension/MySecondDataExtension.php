<?php

namespace LocalValidate\Extension;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\ValidationResult;

/**
 * Class MySecondDataExtension
 * @package LocalValidate\Extension
 */
class MySecondDataExtension extends DataExtension
{
    /**
     * @var array
     */
    private static $db = [
        'CustomOne' => 'Int',
        'CustomTwo' => 'Varchar(255)',
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab(
            'Root.CustomFields',
            [
                DropdownField::create('CustomOne')
                    ->setSource([1 => 'One', 2 => 'Two'])
                    ->setEmptyString('Select One'),
                TextField::create('CustomTwo'),
            ]
        );
    }

    /**
     * @param ValidationResult $validationResult
     */
    public function validate(ValidationResult $validationResult)
    {
        if (!$this->owner->CustomOne > 0) {
            $validationResult->addError('Missing Custom One');
        }

        if (!$this->owner->CustomTwo) {
            $validationResult->addError('Missing Custom Two');
        }
    }
}
