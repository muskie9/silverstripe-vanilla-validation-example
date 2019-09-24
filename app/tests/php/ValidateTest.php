<?php

namespace LocalValidate\Tests;

use LocalValidate\Tests\Extension\ValidateDataExtension;
use LocalValidate\Tests\Model\SampleDataObject;
use LocalValidate\Tests\Model\SamplePage;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Versioned\Versioned;

/**
 * Class ValidateTest
 * @package LocalValidate\Tests
 */
class ValidateTest extends SapphireTest
{
    /**
     * @var array
     */
    protected static $extra_dataobjects = [
        SampleDataObject::class,
    ];

    /**
     * @var array
     */
    protected static $required_extensions = [
        SampleDataObject::class => [
            ValidateDataExtension::class,
        ],
        SamplePage::class => [
            ValidateDataExtension::class,
        ],
    ];

    /**
     * @throws \SilverStripe\ORM\ValidationException
     */
    public function testValidateModelFromExtension()
    {
        $object = SampleDataObject::create();
        $object->write();

        $object->MyCustomField = 1;
        $object->MyOtherCustomField = 'foo';
        $object->write();
    }

    /**
     *
     */
    public function testValidatePageFromExtension()
    {
        $page = SamplePage::create();
        $page->Title = 'Sample Page';
        $page->writeToStage(Versioned::DRAFT);

        $page->MyCustomField = 1;
        $page->MyOtherCustomField = 'foo';
        $page->writeToStage(Versioned::DRAFT);
    }
}
