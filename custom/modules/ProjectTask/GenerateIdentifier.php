<?php

class GenerateIdentifier
{
    public function generateCustomIdentifier($bean, $event, $arguments)
    {
        // Check if the status has changed and if it is now 'on-going'
        if ($bean->fetched_row['status'] == 'Not Started' && ($bean->status === 'In Progress'||
                                                              $bean->status === 'Completed')) {

            // Only generate identifier if it hasn't been set yet
            if (!empty($bean->identifier_c)) {
                return;
            }
	   
            // Dynamically set the prefix to the current year
            $prefix = date('Y').'-'; // Fetch the current year as the prefix

            // Query to find the last identifier with the same prefix
            $query = "SELECT identifier_c FROM project_task_cstm
                      WHERE identifier_c LIKE '{$prefix}%'
                      ORDER BY identifier_c DESC LIMIT 1";
            $result = $GLOBALS['db']->query($query);
            $row = $GLOBALS['db']->fetchByAssoc($result);

            if ($row) {
                // Extract the last number part and increment it
                preg_match('/(\d+)$/', $row['identifier_c'], $matches);
                $nextNumber = isset($matches[1]) ? (int)$matches[1] + 1 : 1;
            } else {
                // If no match is found, start with 1
                $nextNumber = 1;
            }
            // Construct the new identifier
            $bean->identifier_c = $prefix . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);
        }
    }
}
