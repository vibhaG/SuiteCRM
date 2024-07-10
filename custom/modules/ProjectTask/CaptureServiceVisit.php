<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('XTemplate/xtpl.php');
require_once('include/formbase.php');
//require_once("modules/ut_dataprivacy/utils.php");
global $db, $current_language, $timedate;
clean_special_arguments();
clean_incoming_data();

$base_mod_string = return_module_language($current_language,'ProjectTask');
$xtpl = new XTemplate('custom/modules/ProjectTask/tpls/captureservicevisit.tpl');
$xtpl->assign('MOD', $base_mod_string);

if (empty($_POST['record_id']) || empty($_POST['formodule']) ) {
    $xtpl->assign("message",$base_mod_string['LBL_SOMETHING_WRONG']);
    $xtpl->parse("captureconsent");
    $xtpl->out("captureconsent");
    exit();
}

$_POST['formodule'] = 'ProjectTask';
$oServiceVisit = BeanFactory::getBean($_POST['formodule'], $_POST['record_id']);

if(empty($oServiceVisit->id) || $oServiceVisit->status == 'Completed'){
    $xtpl->assign("message",$base_mod_string['LBL_SOMETHING_WRONG']);
    $xtpl->parse("captureconsent");
    $xtpl->out("captureconsent");
    exit();
}
/*
$aCheckbox = $aTempChk = array();
$iFlag=false;
foreach($_POST as $ik => $sVal) {
    if( strpos( $ik, 'chk___') !== false) {
        $aTempChk = explode('___',$sVal);
        $aCheckbox[] = $sVal;
        //$iFlag=true;
    }
}

$sDate = gmdate("Y-m-d H:i:s");
$oBean->consent_status_c = 'obtained';
$oBean->consent_obtained_c = encodeMultienumValue($aCheckbox);
require_once("modules/Configurator/Configurator.php");
$configurator = new Configurator();
$isConfirmOptedIn = $configurator->isConfirmOptInEnabled();
if (!empty($oBean->emailAddress->addresses) && $isConfirmOptedIn) {
    foreach ($oBean->emailAddress->addresses as $idx => $email) {
        if (isset($email['primary_address']) && $email['primary_address'] ==1) {
            $oBean->emailAddress->confirm_opt_in = 'confirmed-opt-in';
            $oBean->emailAddress->AddUpdateEmailAddress($email['email_address'], $email['invalid_email'],  $email['opt_out'], $email['id'], 1);            
        }
    }
}
$oBean->consent_date_c = $timedate->to_display_date_time($sDate);
*/
if(!empty($oServiceVisit->project_id)) {
    $sContractId = $oServiceVisit->project_id;
    $sSalesContract = BeanFactory::getBean('Project',$sContractId);
}

if(!empty($sSalesContract->ut_installation_project_1ut_installation_ida)) {
    $sInstallationId = $sSalesContract->ut_installation_project_1ut_installation_ida;
    $oInstallation = BeanFactory::getBean('UT_Installation',$sInstallationId);
    $oInstallation->software_version = $_POST['software_version'];
    $oInstallation->firmware_version = $_POST['firmware_version'];
    $oInstallation->save();
}

$oServiceVisit->job_description = $_POST['job_description'];
$oServiceVisit->pending_problem = $_POST['pending_problem'];
$oServiceVisit->spares_used = $_POST['spares_used'];

if(!empty($_POST['markCompleted'])&& $_POST['markCompleted'] ==  'Yes'){
    $oServiceVisit->status ='Completed';
}
$oServiceVisit->save();

// Save Subinstallation - Software and firmware
if(!empty($_POST['sub_firmware_version'])) {
    foreach($_POST['sub_firmware_version'] as $idx => $sFirmwareVersion) {
        $oSubInstallation = BeanFactory::getBean('UT_Sub_Installation', $idx);
        $oSubInstallation->sub_firmware_version = $sFirmwareVersion;
        $oSubInstallation->save();
    }
}
if(!empty($_POST['sub_software_version'])) {
    foreach($_POST['sub_software_version'] as $idx => $sSoftwareVersion) {
        $oSubInstallation = BeanFactory::getBean('UT_Sub_Installation', $idx);
        $oSubInstallation->sub_software_version = $sSoftwareVersion;
        $oSubInstallation->save();
    }
}
if(!empty($_POST['sub_description'])) {
    foreach($_POST['sub_description'] as $idx => $sSubDescription) {
        $oSubInstallation = BeanFactory::getBean('UT_Sub_Installation', $idx);
        $oSubInstallation->description = $sSubDescription;
        $oSubInstallation->save();
    }
}

$xtpl->assign("message",$base_mod_string['LBL_SERVICE_VISIT_UPDATED']);
$xtpl->parse("captureconsent");
$xtpl->out("captureconsent");
return;
exit();