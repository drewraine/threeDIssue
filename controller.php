<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

class ThreeDissuePackage extends Package {

    protected $pkgHandle = 'ThreeDissue';
    protected $appVersionRequired = '0.1';
    protected $pkgVersion = '0.1';

    public function getPackageName() {
        return t('3D Issue');
    }

    public function getPackageDescription() {
        return t('Allows users to Upload 3DIssue Magazines.');
    }

    public function on_start() {
        
    }

    public function install() {
        $pkg = parent::install();
        BlockType::installBlockTypeFromPackage('basic_test', $pkg);

        Loader::model('single_page');
        $dm = SinglePage::add('/dashboard/3Dissue/controller', $pkg);
        $dm->update(array('cName' => t("3DIssue"), 'cDescription' => t("load a Zip")));

        $dm = SinglePage::add('/dashboard/3Dissue/controller/3Dissue', $pkg);
        $dm->update(array('cName' => t("Upload a Zip File"), 'cDescription' => t("Manage Your List of Dealers")));
    }

    public function upgrade() {
        parent::upgrade();
        $pkg = Package::getByHandle($this->pkgHandle);
        
        $dm = Page::getByPath('/dashboard/3Dissue/controller/3Dissue/view');
        $dm->update(array('cName' => t("3DIssue"), 'cDescription' => t("load a Zip")));
    }

    

}
?>		
