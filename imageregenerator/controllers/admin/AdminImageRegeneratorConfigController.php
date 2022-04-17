<?php

/**
 * Class AdminImageRegeneratorConfigController
 *
 * @property Image Regenerator $module
 */
class AdminImageRegeneratorConfigController extends ModuleAdminController
{

    public function __construct()
    {
        Tools::redirectAdmin(Context::getContext()->link->getAdminLink('AdminModules').'&configure=imageregenerator');
    }

}
