<div class="row wrapper border-bottom white-bg page-heading ibox-title">
    <div class="header">
        <h2 id="pageTitle">Manage Company </h2>
        <div id="navpath"> Company / <strong>Manage Company</strong></div>
    </div>
    <div class="ibox-tools">
            <a id="btnHelp" class="helpButton HelpLink" onclick="applicationHelp.show('Company');"><i class="fa fa-question-circle fa-3x helpButton"></i></a>
        <a class="btn btn-primary" href="./index.php?page=add_company.php" id="btnAdd"><i class="fa fa-plus"></i><span class="smscreenhide"> Create</span></a>
<button class="btn btn-danger" id="btnDelete" type="button"><i class="fa fa-times"></i><span class="smscreenhide"> Delete</span></button>


            <button id="ImportStatutory" data-toggle="modal" class="btn btn-success" type="button"><i class="fa fa-upload"></i>&nbsp; Upload Docs</button>
        
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content" id="empbranch">
                    <div class="table-responsive">
                        <div id="user_infotab_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="user_infotab_length"><label>Show <select name="user_infotab_length" aria-controls="user_infotab" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="user_infotab_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="user_infotab"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover compact nowrap dataTable customSelect no-footer" id="user_infotab" name="user_infotab" role="grid" aria-describedby="user_infotab_info">	<thead>
	<tr role="row"><th style="width:40px;" class="td-5 sorting_disabled" rowspan="1" colspan="1" aria-label=""><div class="checkbox checkbox-info"><input id="chkParent" type="checkbox"><label for="chkParent"></label></div></th><th style="width:40px;" class="td-5 sorting_disabled" rowspan="1" colspan="1" aria-label=""></th><th style="width:50px;" class="td-5 sorting_disabled" rowspan="1" colspan="1" aria-label=""></th><th class="sorting_asc" tabindex="0" aria-controls="user_infotab" rowspan="1" colspan="1" style="width: 229.283px;" aria-sort="ascending" aria-label="Company Code: activate to sort column descending">Company Code</th><th class="sorting" tabindex="0" aria-controls="user_infotab" rowspan="1" colspan="1" style="width: 350.117px;" aria-label="Company Name: activate to sort column ascending">Company Name</th><th class="sorting" tabindex="0" aria-controls="user_infotab" rowspan="1" colspan="1" style="width: 160.6px;" aria-label="Is Default: activate to sort column ascending">Is Default</th></tr>
	</thead>
	<tbody class="ui-selectable">
	
	
	<tr role="row" class="odd">
		<td class="ui-selectee"><div class="checkbox checkbox-info"><input id="chkChild2" type="checkbox" data-compid="4" data-com_name="CLSS Demo" data-compcode="CLS001"><label for="chkChild2"></label></div></td>
		<td><a href="./index.php?page=Company_Manage.php">Edit</a></td>
		<td><a href="./index.php?page=add_company.php">Details</a></td>
		<td class="sorting_1">CLS001</td>
		<td>CLSS Demo</td>
		<td>No</td>
	</tr><tr role="row" class="even">
		<td class="ui-selectee"><div class="checkbox checkbox-info"><input id="chkChild1" type="checkbox" data-compid="1" data-com_name="CLSS Demo 2 " data-compcode="CLS002"><label for="chkChild1"></label></div></td>
		<td><a href="./index.php?page=Company_Manage.php">Edit</a></td>
		<td><a href="./index.php?page=add_company.php">Details</a></td>
		<td class="sorting_1">C018</td>
		<td>ClS Demo 2 </td>
		<td>Yes</td>
	</tr></tbody>
</table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="user_infotab_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="user_infotab_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="user_infotab_previous"><a href="#" aria-controls="user_infotab" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="user_infotab" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="user_infotab_next"><a href="#" aria-controls="user_infotab" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel-body">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Contact Information
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group" data-fctrl="CompCode">
                                                            <label class="control-label col-sm-2" for="CompCode" data-flbl="CompCode">Company Code *</label>
                                                            <div class="col-sm-10">
                                                                
                                                                
                                                                <input type="text" id="CompCode" name="CompCode" class="form-control" data-fval="CompCode" value="C001" maxlength="6" readonly="" required="required">
                                                                
                                                            </div>


                                                        </div>
                                                        <div class="form-group" data-fctrl="IsDefault">
                                                            <label class="control-label col-sm-2" for="IsDefault">Set As Default Company</label>
                                                            <div class="col-sm-4">
                                                                <div class="checkbox checkbox-info" data-fval="IsDefault"><input data-check="1" data-fval="IsDefault" data-uncheck="0" id="IsDefault" name="IsDefault" type="checkbox" value="0" placeholder="Enter IsDefault"><label for="IsDefault"></label></div>
                                                                <input type="hidden" id="hdnDefault" value="0">
                                                            </div>
                                                        </div>

                                                        <div class="form-group" data-fctrl="com_name">
                                                            <label class="control-label col-sm-2" for="com_name" data-flbl="com_name">Company Name *</label>
                                                            <div class="col-sm-10">
                                                                
                                                                <input type="text" id="com_name" name="com_name" class="form-control" data-fval="com_name" value="Amalan Technologies Demo 1" maxlength="50" required="required" placeholder="Enter Company Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group" data-fctrl="CompAlias">
                                                            <label class="control-label col-sm-2" for="txtCompAlias" data-flbl="CompAlias">Alias</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" data-fval="CompAlias" id="txtCompAlias" maxlength="5" name="CompAlias" value="" placeholder="Enter Alias">
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group" data-fctrl="add1">
                                                            <label class="control-label col-sm-2" for="add1" data-flbl="add1">Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="add1" name="add1" class="form-control" data-fval="add1" value="pune" maxlength="40" placeholder="Enter Address">
                                                            </div>
                                                        </div>

                                                        <div class="form-group" data-fctrl="add2">
                                                            <label class="control-label col-sm-2" for="add2"></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="add2" name="add2" class="form-control" data-fval="add2" value="" maxlength="40" placeholder="Enter Address">
                                                            </div>
                                                        </div>

                                                        <div class="form-group" data-fctrl="add3">
                                                            <label class="control-label col-sm-2" for="add3"></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="add3" name="add3" class="form-control" data-fval="add3" value="" maxlength="40" placeholder="Enter Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <hr>
                                                    <div class="col-md-6">
                                                        <div class="form-group" data-fctrl="city">
                                                            <label class="control-label col-sm-4" for="city" data-flbl="city">City</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="city" name="city" class="form-control" data-fval="city" value="" maxlength="40" placeholder="Enter City">
                                                            </div>
                                                        </div>

                                                        <div class="form-group" data-fctrl="StateName">
                                                            
                                                            
                                                            <label class="control-label col-sm-4" for="StateName" data-flbl="StateName">State</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="StateName" name="StateName" class="form-control" data-fval="StateName" value="" maxlength="40" placeholder="Enter State">
                                                            </div>
                                                        </div>

                                                        <div class="form-group" data-fctrl="phone">
                                                            <label class="control-label col-sm-4" for="phone" data-flbl="phone">Phone</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="phone" name="phone" class="form-control" data-fval="phone" value="" maxlength="20" placeholder="Enter Phone">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-sm-6">

                                                        <div class="form-group" data-fctrl="pin_code">
                                                            <label class="control-label col-sm-4" for="pin_code" data-flbl="pin_code">Pin Code</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="pin_code" name="pin_code" class="form-control" data-fval="pin_code" maxlength="10" value="" onkeypress="return AllowOnlyInteger(event);" placeholder="Enter Pin Code">
                                                            </div>

                                                        </div>

                                                        <div class="form-group" data-fctrl="fax">
                                                            <label class="control-label col-sm-4" for="fax" data-flbl="fax">Fax</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="fax" name="fax" class="form-control" data-fval="fax" value="" maxlength="20" placeholder="Enter Fax">
                                                            </div>
                                                        </div>

                                                        <div class="form-group" data-fctrl="stdcode">
                                                            <label class="control-label col-sm-4" for="stdcode" data-flbl="stdcode">Std Code</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="stdcode" name="stdcode" class="form-control" data-fval="stdcode" value="" maxlength="20" placeholder="Enter Std Code">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div style="clear:both;"></div>
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" data-fctrl="email">
                                                            <label class="control-label col-sm-2" for="email" data-flbl="tel_no">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="email" name="email" class="form-control" data-fval="email" value="" maxlength="80" placeholder="Enter Email">
                                                            </div>
                                                        </div>

                                                        <div class="form-group" data-fctrl="Authorised">
                                                            <label class="control-label col-sm-2" for="Authorised" data-flbl="Authorised">Authorized Person Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="Authorised" name="Authorised" class="form-control" data-fval="Authorised" value="" maxlength="40" placeholder="Enter Authorized Person Name">
                                                            </div>
                                                        </div>

                                                        <div class="form-group" data-fctrl="ApprovedBy">
                                                            <label class="control-label col-sm-2" for="ApprovedBy" data-flbl="ApprovedBy">Person Name for Approve By</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="ApprovedBy" name="ApprovedBy" class="form-control" data-fval="ApprovedBy" value="" maxlength="40" placeholder="Enter Person Name for Approve By">
                                                            </div>
                                                        </div>

                                                        <div class="form-group" data-fctrl="Desigantion">
                                                            <label class="control-label col-sm-2" for="Desigantion" data-flbl="Desigantion">Designation</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="Desigantion" name="Desigantion" class="form-control" data-fval="Desigantion" value="" maxlength="40" placeholder="Enter Designation">
                                                            </div>
                                                        </div>
                                                        <div class="form-group" data-fctrl="CompType">
                                                            <label class="control-label col-sm-2" for="CompType" data-flbl="CompType">Type of Company</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="CompType" name="CompType" class="form-control" data-fval="CompType" value="" maxlength="10" placeholder="Enter Type of Company">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <hr>

                                                    <div class="col-md-6">

                                                        <div class="form-group" data-fctrl="BankACCNo">
                                                            <label class="control-label col-sm-4" for="BankACCNo" data-flbl="BankACCNo">Bank Account No.</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="BankACCNo" name="BankACCNo" class="form-control" data-fval="BankACCNo" value="" maxlength="20" placeholder="Enter Bank Account No.">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">


                                                        <div class="form-group" data-fctrl="CorpId">
                                                            <label class="control-label col-sm-4" for="CorpId" data-flbl="CorpId">Bank Login Corp Id</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="CorpId" name="CorpId" class="form-control" data-fval="CorpId" maxlength="50" value="" placeholder="Enter Bank Login Corp Id">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <hr>

                                                    <div class="col-md-12">
                                                        <div class="form-group" data-fctrl="BankId">
                                                            <label class="control-label col-sm-2" for="BankId" data-flbl="BankId">Bank Name</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" data-fval="BankId" data-val="true" data-val-number="The field BankId must be a number." data-val-required="The BankId field is required." id="BankId" name="BankId" placeholder="Enter Bank Name"><option value="">Select</option>
<option value="1">Bank Of Baroda</option>
<option value="3">Bank Of India</option>
<option value="5">HDFC</option>
<option value="2">ICICI Bank</option>
<option value="4">Kotak</option>
</select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">&nbsp;</div>
                                                        <div class="col-lg-10"><span class="info">Company Logo(width 180px; height 80px) in HRMS will be picked up from 'assets\uploads\CompanyLogo\CompanyLogo/'</span></div>

                                                        <div class="form-group" data-fctrl="Logo1">
                                                            <label class="control-label col-sm-2" for="Logo1" data-flbl="Logo1">Company Logo</label>
                                                            <div class="col-sm-10">
                                                                

<div id="divImageUploadBtns" class="divImageUploadBtns">

     
    <img src="" alt="Image Not found" class="img-md img-Logo myLogo btnUploadedFile text-warning hidden" id="btnUploadedFile_f1" data-file="" height="80px">
    <button type="button" class="btn btn-w-m btn-link btnShowUploadBox text-success" id="btnShowUploadBox_f1" onclick="imageUploadManager.showUploadPanel(this);"> <i class="fa fa-upload"></i> Upload Logo</button>
    
    <br>
    <br>
    <a class="btn btn-w-m btn-link text-success btnRemoveFile hidden" id="btnRemoveFile_f1" data-file="" onclick="imageUploadManager.removeDocument(this); chkSamplePhoto(true);">
        <i class="fa fa-times-circle"></i> Remove Logo
    </a>
    <input type="hidden" class="hdnFile" id="Logo1" name="Logo1" value="">
    <input type="hidden" class="hdnFile_del" id="Logo1_del" name="Logo1_del" value="">
    <input type="hidden" class="hdnFilePath" id="iFilePath" name="iFilePath" value="../assets\uploads\CompanyLogo/">
</div>

<div class="modal inmodal fade" id="modalImageUpload" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">Attach Image</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label style="margin-left:15px;">Select File</label>
                                                <div class="input-group">
                                                    <input type="file" name="flUploadFile" id="flUploadFile" class="form-control">

                                                    <input type="hidden" name="hdnAttachDocId" id="hdnAttachDocId">
                                                    <input type="hidden" name="hdnViewDocId" id="hdnViewDocId">
                                                    <input type="hidden" name="hdnRemoveDocId" id="hdnRemoveDocId">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button type="button" class="btn btn-primary" onclick="imageUploadManager.uploadDocument(); chkSamplePhoto(false);">Upload File</button>
                                            <button type="button" class="btn btn-warning" onclick="modalClose();" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {

        var fileName = '';

        imageUploadManager.showDocumentLink('#btnShowUploadBox_f1', '#btnUploadedFile_f1', '#btnRemoveFile_f1', fileName);

        if (fileName == '') {
            chkSamplePhoto(true);
        } else {
            chkSamplePhoto(false);
        }
    });

    function modalClose() {
        var hasfile = $('#btnUploadedFile_f1').attr('data-file');

        if (hasfile == '') {
            chkSamplePhoto(true);
        } else {
            chkSamplePhoto(false);
        }
    }

    function chkSamplePhoto(showSample) {

        if ($('.fSampleImage').length > 0) {

            if (showSample == false) {
                $('.fSampleImage').addClass('hidden');
            } else {
                $('.fSampleImage').removeClass('hidden');
            }

        }

    }

</script>

                                                                
                                                            </div>
                                                        </div>
                                                        <div class="form-group hidden" data-fctrl="Logo2">
                                                            <label class="control-label col-sm-2" for="Logo2" data-flbl="Logo2">Company Log 2</label>
                                                            <div class="col-sm-10">

                                                                
<style>
    .uploaderRF {
        font-size: 16px;
        color: red;
        cursor: pointer;
    }
</style>


<div id="spineUploader_" class="dropzone drop-previews dz-clickable">
<div class="dz-default dz-message"><span>Upload file</span> <i class="fa fa-upload"></i></div></div>

<div id="divFileName" class="bg-muted p-xs b-r-sm col-lg-12" style="display:none;">
    <div class="pull-left">
        <a onclick="fileUploadManager.downlodFile(this);">
            <i class="fa fa-download"></i>
                <span>Logo_</span>

        </a>
    </div>
    <div class="pull-right uploaderRF fa fa-times-circle" title="Remove" onclick="fileUploadManager.removeFile(this);"></div>
    <input type="hidden" id="userFileName" name="userFileName" value="Logo_">
    <input type="hidden" id="savedFileName" name="savedFileName" value="">
    <input type="hidden" id="uploadPath" name="uploadPath" value="~/UserData/SALES_C018\Company/Logo2/">
    <input type="hidden" id="fileNameSuffix" name="fileNameSuffix" value="C004">
    
</div>


<script type="text/javascript">

    fileUploadManager.initPostUrl('/GeneralUtility/FileUpload/Upload');

    fileUploadManager.initDwnldUrl('/GeneralUtility/FileUpload/DownloadFile');

    fileUploadManager.initDeleteUrl('/GeneralUtility/FileUpload/DeleteFile');

    fileUploadManager.setaccptedExtns('.png,.jpg');

    //fileUploadManager.setSuffix('C004');

</script>

                                                                <input type="hidden" id="Logo2" name="Logo2" data-hdn="Logo2" value="">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
									