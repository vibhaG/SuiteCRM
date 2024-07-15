<?php
//Logic hook to override save
$hook_array['before_save'][] = array(100, 'Save Line item for opportunities', 'custom/modules/Opportunities/logic_hooks/opplineitem_save.php','OppLineItemSave', 'OppLineItemSave');
