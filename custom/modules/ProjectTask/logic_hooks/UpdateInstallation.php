<?php
class SaveHooks {
    /**
    * Logic hook to update Installation of project to project task
    */
    public function UpdateInstallation($bean, $event, $args) {
        //Add relationship to instllation
        if($args['related_module']=='Project' && $args['relationship']=='projects_project_tasks') {
            if(!empty($args['related_bean']->ut_installation_project_1ut_installation_ida)) {
                $bean->load_relationship('ut_installation_projecttask_1');
                $bean->ut_installation_projecttask_1->add($args['related_bean']->ut_installation_project_1ut_installation_ida);
            }
            if(!empty($args['related_bean']->projecttask_aos_products_1projecttask_ida)) {
                $bean->load_relationship('projecttask_aos_products_1projecttask_ida');
            }
        }
    }

}
?>