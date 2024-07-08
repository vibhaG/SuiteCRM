<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once('XTemplate/xtpl.php');
//require_once("custom/modules/Project/utils.php");
global $mod_strings,$db,$app_strings,$app_list_strings,$current_language,$sugar_config;
$base_mod_string = return_module_language($current_language,'ProjectTask');
clean_special_arguments();
clean_incoming_data();

$xtpl = new XTemplate('custom/modules/ProjectTask/tpls/getServiceForm.tpl');
$xtpl->assign('MOD', $base_mod_string);
$xtpl->assign('APP', $app_strings);
$xtpl->assign('APP_LIST_STRING', $app_list_strings);
$_REQUEST['consentmodule'] = 'ProjectTask';
if (empty($_REQUEST['cid']) || empty($_REQUEST['consentmodule']) ) {
    $xtpl->parse("consentform.invalidcid");
    $xtpl->parse("consentform");
    $xtpl->out("consentform");
    return;
    exit();
}
$oServiceVisit = BeanFactory::getBean($_REQUEST['consentmodule'], $_REQUEST['cid']);
if(empty($oServiceVisit->id)){
    $xtpl->parse("consentform.invalidcid");
    $xtpl->parse("consentform");
    $xtpl->out("consentform");
    return;
    exit();
}
if($oServiceVisit->status == 'Completed'){
    $xtpl->parse("consentform.alreadycompleted");
    $xtpl->parse("consentform");
    $xtpl->out("consentform");
    return;
    exit();
}

$sCustomerName= $sCustomerPhone = $sCustomerEmail = $sServiceContractID = $sServiceEnginerName = $sSystemName = 
$sSystemModel = $sSerialNumber = $sFirmwareVersion = $sSoftwareVersion = $sVisitNumber = $sEquipmentID = $sJobDescription = $sServiceContractName = '';
$sSubInstallationsTRs = '';
/*
$sCustomerName='111';
$sCustomerPhone='222';
$sCustomerEmail='333';
$sServiceContractID='444';
$sServiceEnginerName='555';
$sSystemName='666';
$sSystemModel='777';
$sSerialNumber='8888';
$sFirmwareVersion='9999';
$sSoftwareVersion='0000';
$sVisitNumber = 'aaa';
$sEquipmentID = 'bbb';
*/
$sContractId = $sInstallationId = $sAccountsId = $sProductId = $sSubInstallationID = '';

$sVisitNumber = $oServiceVisit->task_number;
$sJobDescription = $oServiceVisit->job_description;

$oUser = BeanFactory::getBean('Users',$oServiceVisit->assigned_user_id);
$sServiceEnginerName = $oUser->full_name;

$visit_type = array_filter($app_list_strings['visit_type_list']);// this removes empty row
$visit_type_list = get_select_options_with_id($visit_type,$oServiceVisit->visit_type_c);

if(!empty($oServiceVisit->project_id)) {
    $sContractId = $oServiceVisit->project_id;
    $sSalesContract = BeanFactory::getBean('Project',$sContractId);
    $sServiceContractName = $sSalesContract->name;
}

if(!empty($sSalesContract->ut_installation_project_1ut_installation_ida)) {
    $sInstallationId = $sSalesContract->ut_installation_project_1ut_installation_ida;
    $oInstallation = BeanFactory::getBean('UT_Installation',$sInstallationId);
    
    $sSerialNumber = $oInstallation->serial_number;
    $sSoftwareVersion = $oInstallation->software_version;
    $sFirmwareVersion = $oInstallation->firmware_version;
    $sSystemName = $oInstallation->installation_id;
    
    $oSubInstallations = $oInstallation->get_linked_beans("ut_sub_installation_ut_installation","UT_Sub_Installation");
    foreach($oSubInstallations as $oSubInstallation)
    {
        $sSubProdName = '';
        if(!empty($oSubInstallation->aos_products_id_c)){
            $oSubInstProd = BeanFactory::getBean('AOS_Products',$oSubInstallation->aos_products_id_c);
            $sSubProdName = $oSubInstProd->name;
        }
        $sSubInstallationsTRs .= '<tr>
            <td>'.$oSubInstallation->name.'</td>
            <td>'.$oSubInstallation->serial_number.'</td>
            <td>'.$sSubProdName.'</td>
        </tr>';
    }
    if(empty($sSubInstallationsTRs)){
        $sSubInstallationsTRs .= '<tr>
            <td colspan="3">No Sub-Installations found</td>
        </tr>';
    }
}

if(!empty($sInstallationId)) {

    if(!empty($oInstallation->account_id_c)) {
        $sAccountsId = $oInstallation->account_id_c;
        $oAccounts = BeanFactory::getBean('Accounts',$sAccountsId);
        $sCustomerName = $oAccounts->name;
        $sCustomerPhone = $oAccounts->phone_office;
        $sCustomerEmail = $oAccounts->email1;
    }
    
    if(!empty($oInstallation->aos_products_id_c)) {
        $sProductId = $oInstallation->aos_products_id_c;
        $oProduct = BeanFactory::getBean('AOS_Products',$sProductId);
        $sEquipmentID = $oProduct->part_number;
        $sSystemModel = $oProduct->name;
    }
}


$each_consent_checkbox = "";
//if(!empty($app_list_strings['ut_dataprivacy_consent_obtained_list'])) {
    //foreach($app_list_strings['ut_dataprivacy_consent_obtained_list'] as $sKey => $sValue) {
        $each_consent_checkbox .= "<div class='form-group'>
                                    <div class='custom-control custom-checkbox'>
                                      <input type='checkbox' class='custom-control-input' name='chk___{$sKey}' id='chk___{$sKey}' value='{$sKey}'>
                                      <label class='custom-control-label' for='chk___{$sKey}'>{$sValue} asdf asdf </label>
                                    </div>
                                </div>";
    //}
//}


$xtpl->assign("each_consent_checkbox", $each_consent_checkbox);
$xtpl->assign("record_id", $_REQUEST['cid']);
$xtpl->assign("formodule", $_REQUEST['consentmodule']);
$xtpl->assign("submiturl", $sugar_config['site_url']);
$xtpl->assign("visit_type_list", $visit_type_list);


$xtpl->assign("sCustomerName", $sCustomerName);
$xtpl->assign("sCustomerPhone", $sCustomerPhone);
$xtpl->assign("sCustomerEmail", $sCustomerEmail);
$xtpl->assign("sServiceContractID", $sServiceContractName);
$xtpl->assign("sServiceEnginerName", $sServiceEnginerName);
$xtpl->assign("sSystemName", $sSystemName);
$xtpl->assign("sSystemModel", $sSystemModel);
$xtpl->assign("sSerialNumber", $sSerialNumber);
$xtpl->assign("sFirmwareVersion", $sFirmwareVersion);
$xtpl->assign("sSoftwareVersion", $sSoftwareVersion);
$xtpl->assign("sSubInstallationsTRs", $sSubInstallationsTRs);

$xtpl->assign("sVisitNumber", $sVisitNumber);
$xtpl->assign("sEquipmentID", $sEquipmentID);
$xtpl->assign("sJobDescription", $sJobDescription);

$xtpl->parse("consentform.consentformdocument");
$xtpl->parse("consentform");
$xtpl->out("consentform",true);