<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


#[\AllowDynamicProperties]
class CustomAOS_InvoicesViewEdit extends ViewEdit
{
    public function __construct()
    {
        parent::__construct();
    }
    public function display()
    {
        $this->populateInvoiceTemplates();
        parent::display();
        echo "<style>#EditView #overall_discount_amount,#other_charges_amount  {
                width: 40%;
                max-width: 40%;
                }
             </style>";
    }

    public function populateInvoiceTemplates()
    {
        global $app_list_strings;

        $sql = "SELECT id, name FROM aos_pdf_templates WHERE deleted='0' AND type='AOS_Invoices'";
        $res = $this->bean->db->query($sql);

        $app_list_strings['template_ddown_c_list'] = array();
        while ($row = $this->bean->db->fetchByAssoc($res)) {
            $app_list_strings['template_ddown_c_list'][$row['id']] = $row['name'];
        }
    }
}
