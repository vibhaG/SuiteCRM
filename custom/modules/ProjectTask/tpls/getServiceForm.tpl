<!-- BEGIN: consentform -->
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" media="all">
      <style type="text/css">
         label {
         font-size: 16px;
         color: #555;
         text-transform: capitalize;
         display: block;
         margin-bottom: 5px;
         font-weight:500;
         }
         .title {
         font-size: 36px;
         color: #525252;
         font-weight: 400;
         margin-bottom: 40px;
         }
         .font-poppins {
         font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
         }
         fieldset 
         {
         border: 1px solid #ddd !important;
         margin: 0;
         xmin-width: 0;
         padding: 10px;       
         position: relative;
         border-radius:4px;
         background-color:#f5f5f5;
         padding-left:10px!important;
         }    
         legend
         {
         font-size:14px;
         font-weight:bold;
         margin-bottom: 0px; 
         /*width: 35%; */
         border: 1px solid #ddd;
         border-radius: 4px; 
         padding: 5px 5px 5px 10px; 
         background-color: #ffffff;
         }
         .requiredMark:after{
         color:#f06269;
         content: " *"; 
         color: #F00; 
         font-size: 90%;
         }
      </style>
   </head>
   <body style="background:#1f5577;" class="font-poppins">
        <div class="container" style="padding-top: 100px;">
         <div class="row justify-content-md-center">
            <div class="col col-lg-10">
               <div class="card" style="border-radius:10px;">
<!-- BEGIN: invalidcid -->
                <div class="card-body" style="padding: 3.25rem;">
                    <h3 class="title">
                        {MOD.LBL_SELECT_PERSON_EMPTY_TITLE}
                    </h3>
                </div>
<!-- END: invalidcid -->
<!-- BEGIN: alreadycompleted -->
                <div class="card-body" style="padding: 3.25rem;">
                    <h3 class="title">
                        {MOD.LBL_ALREADY_COMPLETED_TITLE}
                    </h3>
                </div>
<!-- END: alreadycompleted -->
<!-- BEGIN: consentformdocument -->
                            <div class="card-body" style="padding: 3.25rem;">
                                <div class="row">
                                        <div class="col-md-2">
                                            <img class="img-fluid" src="custom/modules/ProjectTask/images/gulf_support_centre_logo.jpg">
                                       </div>
                                       <div class="col-md-10">
                                            <h3 class="title">Service Visit Report</h3>
                                       </div>
                                </div>
                             
                             <div class="row">
                                <div class="col-md-12">
                                    <p style="margin-top:30px;"></p>
                                    <p>This Service Visit Report form is designed to document the details and outcomes of each service visit conducted by our technicians. Please ensure that all sections are filled out thoroughly and accurately. This form will be used to improve our service quality and maintain a high level of customer satisfaction. Thank you for your attention to detail and commitment to excellence.</p>
                                </div>
                             </div>
                             <form name="service_request_form" id="service_request_form" method="POST" enctype="multipart/form-data" action="{submiturl}/index.php?entryPoint=CaptureServiceVisit">
                                <input type="hidden" name="record_id" value="{record_id}">
                                <input type="hidden" name="formodule" value="{formodule}">
                                <input type="hidden" name="markCompleted" id="markCompleted" value="">
                                
                                <div class="form-row">
                                   <div class="form-group col-md-12">
                                      <label for="customer_name" class="">Customer's Name</label>
                                      <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Customer's Name" readonly="readonly" value="{sCustomerName}">
                                   </div>
                                </div>
                                <div class="form-row">
                                   <div class="form-group col-md-6">
                                      <label for="phone_mobile" class="">Phone Number</label>
                                      <input type="text" class="form-control" id="phone_mobile" name="phone_mobile" placeholder="Phone Number" readonly="readonly" value="{sCustomerPhone}">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="email1" class="">Email</label>
                                      <input type="email" class="form-control" id="email1" name="email1" placeholder="Email" readonly="readonly" value="{sCustomerEmail}">
                                   </div>
                                </div>
                                <div class="form-row">
                                   <div class="form-group col-md-6">
                                      <label for="service_visit_type" class="">Visit type</label>
                                      <select id="service_visit_type" name="service_visit_type" class="form-control js-select-simple" readonly="readonly" disabled="disabled" >
                                         <option disabled="disabled" selected="selected">Choose Visit</option>
                                         {visit_type_list}
                                      </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="visit_number" class="">Visit Number</label>
                                       <input type="text" class="form-control" id="visit_number" name="visit_number" placeholder="Visit Number" readonly="readonly" value="{sVisitNumber}">
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="service_contract_id">Service Contract</label>
                                   <input type="text" class="form-control" id="service_contract_id" name="service_contract_id" placeholder="Service Contract" readonly="readonly" value="{sServiceContractID}">
                                </div>
                                <div class="form-group">
                                   <label for="service_enginer_name" class="requiredMark">Service Engineer Name</label>
                                   <input type="text" class="form-control" id="service_enginer_name" name="service_enginer_name" placeholder="Service Engineer Name" required="required" value="{sServiceEnginerName}">
                                </div>
                                <div class="form-row">
                                   <div class="form-group col-md-6">
                                      <label for="first_name" class="">System Name</label>
                                      <input type="text" class="form-control" id="system_name" name="system_name" placeholder="System Name" readonly="readonly" value="{sSystemName}">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="system_model" class="">System Model</label>
                                      <input type="text" class="form-control" id="system_model" name="system_model" placeholder="System Model" readonly="readonly" value="{sSystemModel}">
                                   </div>
                                </div>
                                <div class="form-group">
                                   <label for="serial_number" class="">Serial Number</label>
                                   <input type="text" class="form-control" id="serial_number" name="serial_number" placeholder="Serial Number" readonly="readonly" value="{sSerialNumber}">
                                </div>
                                <div class="form-row">
                                   <div class="form-group col-md-6">
                                      <label for="firmware_version" class="">Firmware Version</label>
                                      <input type="text" class="form-control" id="firmware_version" name="firmware_version" placeholder="Firmware Version" value="{sFirmwareVersion}">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="software_version" class="">Software Version</label>
                                      <input type="text" class="form-control" id="software_version" name="software_version" placeholder="Software Version" value="{sSoftwareVersion}">
                                   </div>
                                </div>
                                <div>
                                   <p style="font-weight:bold;">Sub Installation</p>
                                   <table width="100%">
                                       {sSubInstallationsTRs}
                                   </table>
                                   <br/>
                                </div>
                                <div class="form-group">
                                   <label for="equipment_id" class="">Equipment ID</label>
                                   <input type="text" class="form-control" id="equipment_id" name="equipment_id" placeholder="Equipment ID" readonly="readonly" value="{sEquipmentID}">
                                </div>
                                <div class="form-group">
                                   <label for="job_description" class="requiredMark">Job Description</label>
                                   <textarea class="form-control" name="job_description" cols="60" required="required">{sJobDescription}</textarea>
                                </div>
                                <div class="form-group">
                                   <label for="pending_problem" class="">Pending Problem (s)</label>
                                   <textarea class="form-control" name="pending_problem" cols="60"></textarea>
                                </div>
                                <div class="form-group">
                                   <label for="spares_used" class="">Spares used</label>
                                   <textarea class="form-control" name="spares_used" cols="60"></textarea>
                                </div>
                                <div class="row">
                                   <div class="col-md-12">
                                   <p>We will use the information you provided on this form to be in touch with you and to provide updates and marketing. Please let us know all the ways you would like to hear from us:</p>
                                   </div>
                                </div>
                                <button type="button" id="submitButton" class="btn btn-success btn-lg">Save</button>
                                <button type="button" id="saveCompletedButton" class="btn btn-primary btn-lg" >Save and mark completed</button>
                             </form>
                          </div>
<!-- END: consentformdocument -->
                    
                </div>
            </div>
         </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
      <script type="text/javascript">
         (function ($) {
             try {
                 $('.js-select-simple').select2();
             } catch (err) {
                 console.log(err);
             }
             
            $('#submitButton').click(function() {
               $('#markCompleted').val('');
               $('#service_request_form').submit();
            });

            $('#saveCompletedButton').click(function() {
                alert('come shere');
                $('#markCompleted').val('Yes');
                $('#service_request_form').submit();
            });
             
         })(jQuery);
      </script>
   </body>
</html>                
<!-- END: consentform -->