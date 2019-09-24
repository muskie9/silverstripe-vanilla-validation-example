<?php

namespace LocalValidate\Tests\Extension;

use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\ValidationResult;

/**
 * Class ValidateDataExtension
 * @package LocalValidate\Tests\Extension
 */
class ValidateDataExtension extends DataExtension
{
    /**
     * @var array
     */
    private static $db = [
        'MyCustomField' => 'Int',
        'MyOtherCustomField' => 'Varchar(255)',
    ];

    /**
     * @param ValidationResult $validationResult
     */
    public function validate(ValidationResult $validationResult)
    {
        if ($this->owner->exists()) {
            if (!$this->owner->MyCustomField) {
                $validationResult->addError('Missing MyCustomField');
            }

            if (!$this->owner->MyOtherCustomField) {
                $validationResult->addError('Missing MyOtherCustomField');
            }
        }
    }
}
