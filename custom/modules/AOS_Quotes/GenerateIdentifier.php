<?php

class GenerateIdentifier
{
    public function generateCustomIdentifier($bean, $event, $arguments)
    {
        // Only generate identifier if it hasn't been set yet
        if (!empty($bean->identifier_c)) {
            return;
        }

        // Assume that the prefix field is user-entered in a separate field, e.g., 'prefix_field'
        $prefix = $bean->prefix_c;

        if (empty($prefix)) {
            // Exit if no prefix is entered
            return;
        }

        // Query to find the last identifier with the same prefix
        $query = "SELECT identifier_c FROM ut_ordersupplier_cstm
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
