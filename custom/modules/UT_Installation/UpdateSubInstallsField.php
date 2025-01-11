<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateSubInstallsField {
    public function updateField($bean, $event, $arguments) {
        // Fetch related Sub-Installations
        $subInstallations = $bean->get_linked_beans('ut_sub_installation_ut_installation', 'UT_Sub_Installation');
        $GLOBALS['log']->fatal('SubIntsalls array found');

        // Build the HTML table
        $html = "<table border='1' cellspacing='0' cellpadding='5'>";
        $html .= "<thead>
                    <tr>
                        <th>Name</th>
                        <th>Serial Number</th>
                        <th>Software Version</th>
                        <th>Firmware Version</th>
                    </tr>
                  </thead>";
        $html .= "<tbody>";

        $GLOBALS['log']->fatal('Step 1  '.$html);
        if (count($subInstallations) > 0) {
            foreach ($subInstallations as $subInstallation) {
                $html .= "<tr>
                            <td>" . htmlspecialchars($subInstallation->name) . "</td>
                            <td>" . htmlspecialchars($subInstallation->serial_number) . "</td>
                            <td>" . htmlspecialchars($subInstallation->sub_software_version) . "</td>
                            <td>" . htmlspecialchars($subInstallation->sub_firmware_version) . "</td>
                          </tr>";
            }
        } else {
            $html .= "<tr>
                        <td colspan='4' style='text-align: center;'>No Sub-Installations Available</td>
                      </tr>";
        }

        $html .= "</tbody></table>";
        $GLOBALS['log']->fatal('Step 2  '.$html);
        // Update the WYSIWYG field
        $bean->sub_installs_c = $html;
        $bean->save();
    }
}
