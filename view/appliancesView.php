<?php
require_once "controller/ApplianceController.class.php";
$applianceController = new ApplianceController($f3);


$session = $f3->get('PARAMS.session');

$lang = $f3->get('PARAMS.lang');


if(!empty($lang))
{
    echo json_encode(array(
        'data' => $applianceController->getAppliances($lang)
    ));
}
else
{
    echo json_encode(array(
        'data' => $applianceController->getAppliances()
    ));
}
?>