<?php

namespace LocalValidate\Tests\Model;

use LocalValidate\Tests\Extension\ValidateDataExtension;
use SilverStripe\ORM\DataObject;

/**
 * Class SampleDataObject
 * @package LocalValidate\Tests\Model
 */
class SampleDataObject extends DataObject
{
    /**
     * @var string
     */
    private static $table_name = 'Validate_SampleDataObject';

    /**
     * @var array
     */
    private static $extensions = [
        ValidateDataExtension::class,
    ];
}
