<link rel="stylesheet" href="style.min.css">
<?php use classes\Location;
require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php' ?>

<?php
parse_str($_SERVER['QUERY_STRING'], $arrQuery);
$loc = new Location($arrQuery['loc']);
?>


<div class="container">

</div>