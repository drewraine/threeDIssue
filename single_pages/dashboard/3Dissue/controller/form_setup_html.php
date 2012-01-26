<?php defined('C5_EXECUTE') or die(_("Access Denied.")); 
$form = Loader::helper('form');
$ih = Loader::helper('concrete/interface');
$pag = Loader::library('item_list');
$al = Loader::helper('concrete/asset_library');
?>

<?=Loader::helper('concrete/dashboard')->getDashboardPaneHeaderWrapper(t('3DIssue'),false, false, false); ?>

<form method="post" action="<?=$this->action('save')?>"  id="ccm-dealer-locator-record" class="form-stacked">
<div class="ccm-pane-body">
	<?php echo ($data['dID']?$form->hidden('dID', $data['dID']):''); ?>
		<fieldset>
		<legend><?php echo ($data['dID']? t('Edit Record') : t('Add Record'))?></legend>
                <?php echo  $ih->button(t('Add New'),View::url('/dashboard/3Dissue/controller/3Dissue','add'),'right', 'primary'); ?>
		<div class="clearfix">
			<?php echo $form->label('name', t('Name *'))?>  
	        <div class="input">
				<?php echo $form->text('name', $data['name'], array('style' => 'width: 100%'))?>
                    </div>
                </fieldset> 
			
                    
        </div>
  </form>              




<div class="ccm-pane-footer"><?php //echo $dl->displayPagingV2() ?></div>

<?=Loader::helper('concrete/dashboard')->getDashboardPaneFooterWrapper(false);?>


