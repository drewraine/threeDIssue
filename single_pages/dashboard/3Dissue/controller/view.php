<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$form = Loader::helper('form');
$ih = Loader::helper('concrete/interface');
$pag = Loader::library('item_list');
$al = Loader::helper('concrete/asset_library');
?>

<?= Loader::helper('concrete/dashboard')->getDashboardPaneHeaderWrapper(t('3DIssue'), false, false, false); ?>


<div class="ccm-pane-body">

    <?php echo $ih->button(t('Add New'), View::url('/dashboard/3Dissue/controller', 'add'), 'left', 'primary'); ?>

    </br>

    <div class="clearfix" style="padding-bottom: 4px;">

        <?= $al->file('ccm-b-file', 'fID', t('Choose File')); ?>
    </div>

    <form method="post" action="<?= $this->action('save') ?>"  id="ccm-dealer-locator-record" class="form-stacked">

        <table border="0" cellspacing="0" cellpadding="0" id="ccm-user-list" class="ccm-results-list">
            <tbody>
            <th>One</th>
            <th>One</th>
            <th>One</th>              
            <th>One</th>
            <tr>
                <td>One</td>
                <td>One</td>
                <td>One</td>
                <td>One</td>
            </tr>
            <tr>
                <td>One</td>
                <td>One</td>
                <td>One</td>
                <td>One</td>
            </tr>
            <tr>
                <td>One</td>
                <td>One</td>
                <td>One</td>
                <td>One</td>
            </tr>
            <tr>
                <td>One</td>
                <td>One</td>
                <td>One</td>
                <td>One</td>
            </tr>
            </tbody>    
        </table>	    
</div>





<div class="ccm-pane-footer">
    <?php echo $ih->submit(t('Save'), 'ccm-dealer-locator-record', 'right', 'primary'); ?>
    <?php echo $ih->button(t('Cancel'), View::url('/dashboard/dealer_locator/dealers'), 'Default'); ?>
    <?php //echo $pag->displayPagingV2()   ?></div>
</form>
<?= Loader::helper('concrete/dashboard')->getDashboardPaneFooterWrapper(false); ?>

