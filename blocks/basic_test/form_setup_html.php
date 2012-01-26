<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

$al = Loader:: helper ('concrete/asset_library');

echo '<div class="ccm-block-field-group">';
echo '<h2>' . t('Title') . '</h2>';
echo $form->text('title', $title, array('style' => 'width: 550px'));
echo '</div>';

echo '<div class="ccm-block-field-group">';
echo '<h2>' .  t('Zip File') . '</h2>';
//echo $al->image('ccm-b-image' , 'bIDpicture', t('Choose File'), $this->controller->getPicture());
echo $al->file('bID','', t('Choose File'),$this->controller->getPicture() );

 echo '</div>'; 
?>
