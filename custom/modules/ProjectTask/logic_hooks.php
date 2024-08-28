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

?>

