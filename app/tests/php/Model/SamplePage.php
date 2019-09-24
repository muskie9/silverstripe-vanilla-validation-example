<?php

namespace LocalValidate\Tests\Model;

use LocalValidate\Tests\Extension\ValidateDataExtension;

/**
 * Class SamplePage
 * @package LocalValidate\Tests\Model
 */
class SamplePage extends \Page
{
    /**
     * @var string
     */
    private static $table_name = 'Validate_SamplePage';

    /**
     * @var array
     */
    private static $extensions = [
        ValidateDataExtension::class,
    ];
}
