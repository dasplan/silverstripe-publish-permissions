<?php

class PublishPermissionsDecorator extends DataObjectDecorator implements PermissionProvider
{

    public function extraStatics()
    {
        return array();
    }

    public function providePermissions()
    {
        return array(
            'PUBLISH_PAGES' => 'Publish pages on the site'
        );
    }

    public function canPublish()
    {
        return Permission::check('PUBLISH_PAGES');
    }

}
