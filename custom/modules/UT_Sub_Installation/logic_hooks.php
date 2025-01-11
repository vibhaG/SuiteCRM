<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$hook_version = 1;
$hook_array = Array();

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(
    1,
    'Update Installation WYSIWYG field',
    'custom/modules/UT_Sub_Installation/UpdateInstallationField.php',
    'UpdateInstallationField',
    'updateField'
);
