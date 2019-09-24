<?php

namespace LocalValidate\Model;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\DataObject;

/**
 * Class MyDataObject
 * @package LocalValidate\Model
 */
class MyDataObject extends DataObject
{
    /**
     * @var string
     */
    private static $table_name = 'MyDataObject';

    /**
     * @var array
     */
    private static $has_one = [
        'Page' => SiteTree::class,
    ];
}
