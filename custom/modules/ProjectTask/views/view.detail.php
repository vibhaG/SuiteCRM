<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
class ProjectTaskViewDetail extends ViewDetail
{
    public function __construct()
    {
        parent::__construct();
    }

    public function display()
    {
        global $sugar_config;
        if (empty($this->bean->id)) {
            global $app_strings;
            sugar_die($app_strings['ERROR_NO_RECORD']);
        }
        $this->dv->process();
        $sServiceFormURL = $sugar_config['site_url'].'/index.php?entryPoint=getServiceForm&cid='.$this->bean->id;
        $this->ss->assign("sServiceFormURL", $sServiceFormURL);

        echo $this->dv->display();
    }
}