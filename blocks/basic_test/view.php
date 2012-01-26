
<div class="product-information">
<?php
$html = Loader::helper('html');
$navigation = Loader::helper('navigation');
$al = Loader:: helper ('concrete/asset_library');

$picture = $this->controller->getPicture();
$what = $this->controller->getLinkText();
//echo $al->file($picture->getbIDfileLinkText());
echo "<h2>{$title}</h2>";
if($picture){
    echo $html->image($picture-getURL());
}
/*
if ($picture) {
	echo $al->file($picture->getbIDfileLinkText());
}
//echo "<p>{$description}</p>";
*/





?>

</div>