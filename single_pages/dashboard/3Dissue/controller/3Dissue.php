<?php defined('C5_EXECUTE') or die(_("Access Denied.")); 
$form = Loader::helper('form');
$ih = Loader::helper('concrete/interface');
$pag = Loader::library('item_list');
$al = Loader::helper('concrete/asset_library');
?>

<?=Loader::helper('concrete/dashboard')->getDashboardPaneHeaderWrapper(t(''),false, false, false); ?>















<div class="ccm-pane-footer">
	<?php echo $concrete_interface->submit(t('Save'),'ccm-dealer-locator-record','right', 'primary');?>
	<?php echo $concrete_interface->button(t('Cancel'),View::url('/dashboard/dealer_locator/dealers'),'Default');?>
</div>

<?=Loader::helper('concrete/dashboard')->getDashboardPaneFooterWrapper(false);?>
