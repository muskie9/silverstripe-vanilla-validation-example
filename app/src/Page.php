<?php

namespace {

    use LocalValidate\Model\MyDataObject;
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;

    /**
     * Class Page
     */
    class Page extends SiteTree
    {
        /**
         * @var array
         */
        private static $has_many = [
            'MyDataObjects' => MyDataObject::class,
        ];

        /**
         * @return FieldList
         */
        public function getCMSFields()
        {
            $this->beforeUpdateCMSFields(function (FieldList $fields) {
                $fields->addFieldToTab(
                    'Root.MyObjects',
                    GridField::create(
                        'MyDataObjects',
                        'My Data Objects',
                        $this->MyDataObjects(),
                        GridFieldConfig_RelationEditor::create()
                    )
                );
            });

            return parent::getCMSFields();
        }
    }
}
