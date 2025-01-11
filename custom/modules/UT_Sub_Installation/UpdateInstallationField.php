<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateInstallationField {
    public function updateField($bean, $event, $arguments) {
        // Load the related Installation record
        if (empty($bean->ut_sub_installation_ut_installation)) { // Assuming the relationship field is installation_id_c
              $GLOBALS['log']->fatal('No relationship 1  ');
            return;
        }
         $relationshipName = 'ut_sub_installation_ut_installation';

         if ($bean->load_relationship($relationshipName)) {
         // Retrieve related parent beans (UT_Installation)
         $parentBeans = $bean->$relationshipName->getBeans();

         // Assuming one-to-many relationship, there should be one parent
         if (!empty($parentBeans)) {
             $installationBean = reset($parentBeans); // Get the first (and only) parent

             // Access parent details
             echo "Parent ID: " . $installationBean->id . "\n";
             echo "Parent Name: " . $installationBean->name . "\n";
           } else {
             echo "No parent UT_Installation found for this UT_Sub_installation.\n";
           }
         } else {
             echo "Relationship '$relationshipName' not found on UT_Sub_installation.\n";
             return;
         }
        if (!$installationBean) {
          $GLOBALS['log']->fatal('No Installation bean 1  ');
            return;
        }

        // Fetch all related Sub-Installation records
        $subInstallations = $installationBean->get_linked_beans('ut_sub_installation_ut_installation', 'UT_Sub_Installation');

        if (!$subInstallations) {
          $GLOBALS['log']->fatal('No subInstallations beans  ');
            return;
        }

        // Build the HTML table
        $html = "<table border='1' cellspacing='0' cellpadding='5'>";
        $html .= "<thead><tr> <th>Name</th><th>Serial Number</th><th>Software Version</th><th>Firmware Version</th></tr></thead>";
        $html .= "<tbody>";
        $GLOBALS['log']->fatal('Step 1  '.$html);
        if (count($subInstallations) > 0) {
            foreach ($subInstallations as $subInstallation) {
                $html .= "<tr><td>" . htmlspecialchars($subInstallation->name) . "</td><td>"
                . htmlspecialchars($subInstallation->serial_number) . "</td><td>"
                . htmlspecialchars($subInstallation->sub_software_version) . "</td><td>"
                . htmlspecialchars($subInstallation->sub_firmware_version) . "</td>  </tr>";
            }
        } else {
            $html .= "<tr>
                        <td colspan='4' style='text-align: center;'>No Sub-Installations Available</td>
                      </tr>";
        }

        // Update the WYSIWYG field in Installation
        $html=str_replace("\r\n",' ',$html);
        $installationBean->sub_installs_c = $html; // Assuming the WYSIWYG field is sub_installs_c
        $installationBean->save();
    }
}
