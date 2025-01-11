<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    1,
    'Populate Sub-Installs field',
    'custom/modules/UT_Installation/UpdateSubInstallsField.php',
    'UpdateSubInstallsField',
    'updateField'
);
