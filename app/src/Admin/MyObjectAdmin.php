<?php

namespace LocalValidate\Admin;

use LocalValidate\Model\MyDataObject;
use SilverStripe\Admin\ModelAdmin;

/**
 * Class MyObjectAdmin
 * @package LocalValidate\Admin
 */
class MyObjectAdmin extends ModelAdmin
{
    /**
     * @var string
     */
    private static $url_segment = 'my-object-admin';

    /**
     * @var string
     */
    private static $menu_title = 'My Object Admin';

    /**
     * @var array
     */
    private static $managed_models = [
        MyDataObject::class,
    ];
}
