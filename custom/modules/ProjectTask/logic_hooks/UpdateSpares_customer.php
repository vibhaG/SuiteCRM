<?php
class SparesUpdation {
    /**
     * Logic hook to update Installation of project to project task
     */
    public function UpdateSparesCustomer($bean, $event, $args) {

        // Get the related module's data using the relationship name
        $relatedBeans = $bean->get_linked_beans('projecttask_aos_products_1projecttask_ida', 'AOS_Products');

        // Loop through the related beans and perform your logic
        $spareList = '';
        foreach ($relatedBeans as $relatedBean) {
            $spareList = $spareList + $relatedBean->name + ', ';
        }
        $bean->spares_used = $spareList;
        // Save the bean with the updated field
        $bean->save();
    }
}
?>