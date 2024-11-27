<?php
$hook_version = 1;
$hook_array = [];
$hook_array['after_relationship_add'] = array();
$hook_array['after_relationship_add'][] = [
    2,
    'Update Installation to Project Task',
    'custom/modules/ProjectTask/logic_hooks/UpdateInstallation.php',
    'SaveHooks',
    'UpdateInstallation'
];
$hook_array['before_save'] = Array();

$hook_array['before_save'][] = Array(1,
'Generate custom identifier with prefix',
'custom/modules/ProjectTask/GenerateIdentifier.php','GenerateIdentifier','generateCustomIdentifier');
?>
