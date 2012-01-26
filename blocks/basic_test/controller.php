<?php

defined('C5_EXECUTE') or die("Access Denied.");
Loader::block('library_file');
Loader:: helper ('concrete/asset_library');

class BasicTestBlockController extends BlockController {

    var $pobj;
    protected $btDescription = "A simple testing block for developers.";
    protected $btName = "Basic Test";
    protected $btTable = 'btBasicTest';
    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "300";

    public function getBlockTypeDescription() {
        return t('Embeds a Product Information in your web page.');
    }

    public function getBlockTypeName() {
        return t('Basic Test');
    }

    function view() {
        $this->set('bID', $this->bID);
    }

    function save($data) {
        parent::save($data);
    }

    function getPicture() {
        if ($this->fIDpicture > 0) {
            return File::getByID($this->fIDfileLinkText);
        }
        return null;
    }

    function getFileID() {
        return $this->bID;
    }

    function getFileObject() {
        return File::getByID($this->bID);
    }

    function getLinkText() {
        if ($this->fileLinkText) {
            return $this->fileLinkText;
        } else {
            $f = $this->getFileObject();
            return $f->getTitle();
        }
    }

}

?>