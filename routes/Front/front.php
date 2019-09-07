<?php

/**
 * Administrator Routing
 */
Route::group(['prefix' => 'administrator', 'namespace'=>'Administrator', 'middleware' => ['auth', 'access:1']], function(){
	
	Route::get('user-login', 'LoginController@user-login')->name('administrator.payroll.detail-history');

	//Route::get('/', 'IndexController@index')->name('administrator.dashboard');
	Route::get('/', 'ApplicantController@index')->name('administrator.dashboard');
	Route::resource('karyawan', 'KaryawanController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('department', 'DepartmentController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('provinsi', 'ProvinsiController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('kabupaten', 'KabupatenController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('kecamatan', 'KecamatanController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('kelurahan', 'KelurahanController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('training', 'TrainingController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('training-type', 'TrainingTypeController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('cuti', 'CutiController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('overtime', 'OvertimeController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('payment-request', 'PaymentRequestController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('exit-clearance', 'ExitClearanceController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('exit-interview', 'ExitInterviewController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('directorate', 'DirectorateController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('division', 'DivisionController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('position', 'PositionController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('section', 'SectionController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('overtime', 'OvertimeController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('cabang', 'CabangController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('medical', 'MedicalController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('bank', 'BankController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('universitas', 'UniversitasController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('program-studi', 'ProgramStudiController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('jurusan', 'JurusanController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('sekolah', 'SekolahController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('alasan-pengunduran-diri', 'AlasanPengunduranDiriSettingController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('training/detail/{id}',  'TrainingController@detail')->name('administrator.training.detail');
	Route::post('training/proses',  'TrainingController@proses')->name('administrator.training.proses');
	Route::get('training/biaya/{id}', 'TrainingController@biaya')->name('administrator.training.biaya');
	Route::post('training/proses-biaya', 'TrainingController@prosesBiaya')->name('administrator.training.proses-biaya');
	Route::resource('setting-cuti', 'SettingCutiController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('setting-payment-request', 'SettingPaymentRequestController', ['only'=> ['index','destroy'], 'as' => 'administrator']);
	Route::resource('setting-medical', 'SettingMedicalController', ['only'=> ['index','destroy'], 'as' => 'administrator']);
	Route::resource('setting-overtime', 'SettingOvertimeController', ['only'=> ['index','destroy'], 'as' => 'administrator']);
	Route::resource('setting-exit', 'SettingExitController', ['only'=> ['index','destroy'], 'as' => 'administrator']);
	Route::resource('setting-training', 'SettingTrainingController', ['only'=> ['index','destroy'], 'as' => 'administrator']);
	Route::resource('setting-master-cuti', 'SettingMasterCutiController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('setting-exit-clearance', 'SettingExitClearanceController', ['as' => 'administrator']);
	Route::resource('cuti-bersama', 'CutiBersamaController', ['as' => 'administrator']);
	Route::get('structure', 'IndexController@structure')->name('administrator.structure');
	Route::resource('setting', 'SettingController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);

	Route::resource('setting-approvalLeave', 'SettingApprovalLeaveController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('setting-approvalLeave/indexItem/{id}', 'SettingApprovalLeaveController@indexItem')->name('administrator.setting-approvalLeave.indexItem');
	Route::get('setting-approvalLeave/createItem/{id}', 'SettingApprovalLeaveController@createItem')->name('administrator.setting-approvalLeave.createItem');
	Route::post('setting-approvalLeave/storeItem', 'SettingApprovalLeaveController@storeItem')->name('administrator.setting-approvalLeave.storeItem');
	Route::get('setting-approvalLeave/editItem/{id}', 'SettingApprovalLeaveController@editItem')->name('administrator.setting-approvalLeave.editItem');
	Route::post('setting-approvalLeave/updateItem/{id}', 'SettingApprovalLeaveController@updateItem')->name('administrator.setting-approvalLeave.updateItem');
	Route::post('setting-approvalLeave/destroyItem/{id}', 'SettingApprovalLeaveController@destroyItem')->name('administrator.setting-approvalLeave.destroyItem');

	Route::resource('setting-approvalPaymentRequest', 'SettingApprovalPaymentRequestController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('setting-approvalPaymentRequest/indexItem/{id}', 'SettingApprovalPaymentRequestController@indexItem')->name('administrator.setting-approvalPaymentRequest.indexItem');
	Route::get('setting-approvalPaymentRequest/createItem/{id}', 'SettingApprovalPaymentRequestController@createItem')->name('administrator.setting-approvalPaymentRequest.createItem');
	Route::post('setting-approvalPaymentRequest/storeItem', 'SettingApprovalPaymentRequestController@storeItem')->name('administrator.setting-approvalPaymentRequest.storeItem');
	Route::get('setting-approvalPaymentRequest/editItem/{id}', 'SettingApprovalPaymentRequestController@editItem')->name('administrator.setting-approvalPaymentRequest.editItem');
	Route::post('setting-approvalPaymentRequest/updateItem/{id}', 'SettingApprovalPaymentRequestController@updateItem')->name('administrator.setting-approvalPaymentRequest.updateItem');
	Route::post('setting-approvalPaymentRequest/destroyItem/{id}', 'SettingApprovalPaymentRequestController@destroyItem')->name('administrator.setting-approvalPaymentRequest.destroyItem');

	Route::resource('setting-approvalOvertime', 'SettingApprovalOvertimeController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('setting-approvalOvertime/indexItem/{id}', 'SettingApprovalOvertimeController@indexItem')->name('administrator.setting-approvalOvertime.indexItem');
	Route::get('setting-approvalOvertime/createItem/{id}', 'SettingApprovalOvertimeController@createItem')->name('administrator.setting-approvalOvertime.createItem');
	Route::post('setting-approvalOvertime/storeItem', 'SettingApprovalOvertimeController@storeItem')->name('administrator.setting-approvalOvertime.storeItem');
	Route::get('setting-approvalOvertime/editItem/{id}', 'SettingApprovalOvertimeController@editItem')->name('administrator.setting-approvalOvertime.editItem');
	Route::post('setting-approvalOvertime/updateItem/{id}', 'SettingApprovalOvertimeController@updateItem')->name('administrator.setting-approvalOvertime.updateItem');
	Route::post('setting-approvalOvertime/destroyItem/{id}', 'SettingApprovalOvertimeController@destroyItem')->name('administrator.setting-approvalOvertime.destroyItem');

	Route::resource('setting-approvalTraining', 'SettingApprovalTrainingController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('setting-approvalTraining/indexItem/{id}', 'SettingApprovalTrainingController@indexItem')->name('administrator.setting-approvalTraining.indexItem');
	Route::get('setting-approvalTraining/createItem/{id}', 'SettingApprovalTrainingController@createItem')->name('administrator.setting-approvalTraining.createItem');
	Route::post('setting-approvalTraining/storeItem', 'SettingApprovalTrainingController@storeItem')->name('administrator.setting-approvalTraining.storeItem');
	Route::get('setting-approvalTraining/editItem/{id}', 'SettingApprovalTrainingController@editItem')->name('administrator.setting-approvalTraining.editItem');
	Route::post('setting-approvalTraining/updateItem/{id}', 'SettingApprovalTrainingController@updateItem')->name('administrator.setting-approvalTraining.updateItem');
	Route::post('setting-approvalTraining/destroyItem/{id}', 'SettingApprovalTrainingController@destroyItem')->name('administrator.setting-approvalTraining.destroyItem');

    
	Route::resource('setting-approvalMedical', 'SettingApprovalMedicalController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('setting-approvalMedical/indexItem/{id}', 'SettingApprovalMedicalController@indexItem')->name('administrator.setting-approvalMedical.indexItem');
	Route::get('setting-approvalMedical/createItem/{id}', 'SettingApprovalMedicalController@createItem')->name('administrator.setting-approvalMedical.createItem');
	Route::post('setting-approvalMedical/storeItem', 'SettingApprovalMedicalController@storeItem')->name('administrator.setting-approvalMedical.storeItem');
	Route::get('setting-approvalMedical/editItem/{id}', 'SettingApprovalMedicalController@editItem')->name('administrator.setting-approvalMedical.editItem');
	Route::post('setting-approvalMedical/updateItem/{id}', 'SettingApprovalMedicalController@updateItem')->name('administrator.setting-approvalMedical.updateItem');
	Route::post('setting-approvalMedical/destroyItem/{id}', 'SettingApprovalMedicalController@destroyItem')->name('administrator.setting-approvalMedical.destroyItem');

	Route::resource('setting-approvalExit', 'SettingApprovalExitController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('setting-approvalExit/indexItem/{id}', 'SettingApprovalExitController@indexItem')->name('administrator.setting-approvalExit.indexItem');
	Route::get('setting-approvalExit/createItem/{id}', 'SettingApprovalExitController@createItem')->name('administrator.setting-approvalExit.createItem');
	Route::post('setting-approvalExit/storeItem', 'SettingApprovalExitController@storeItem')->name('administrator.setting-approvalExit.storeItem');
	Route::get('setting-approvalExit/editItem/{id}', 'SettingApprovalExitController@editItem')->name('administrator.setting-approvalExit.editItem');
	Route::post('setting-approvalExit/updateItem/{id}', 'SettingApprovalExitController@updateItem')->name('administrator.setting-approvalExit.updateItem');
	Route::post('setting-approvalExit/destroyItem/{id}', 'SettingApprovalExitController@destroyItem')->name('administrator.setting-approvalExit.destroyItem');

	Route::resource('setting-approvalClearance', 'SettingApprovalClearanceController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);

	Route::resource('news', 'NewsController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('internal-memo', 'InternalMemoController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('branch-organisasi', 'BranchOrganisasiController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('branch-staff', 'BranchStaffController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('libur-nasional', 'LiburNasionalController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('plafond-dinas', 'PlafondDinasController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('position', 'PositionController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('job-rule', 'JobRuleController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::post('libur-nasional/import', 'LiburNasionalController@import')->name('administrator.libur-nasional.import');
	Route::post('cabang/import', 'CabangController@import')->name('administrator.cabang.import');
	Route::post('plafond-dinas/import', 'PlafondDinasController@import')->name('administrator.plafond-dinas.import');
	Route::get('plafond-dinas/create-luar-negeri', 'PlafondDinasController@createLuarNegeri')->name('administrator.plafond-dinas.create-luar-negeri');
	Route::post('plafond-dinas/store-luar-negeri', 'PlafondDinasController@storeLuarNegeri')->name('administrator.plafond-dinas.store-luar-negeri');
	Route::get('plafond-dinas/edit-luar-negeri/{id}', 'PlafondDinasController@editLuarNegeri')->name('administrator.plafond-dinas.edit-luar-negeri');
	Route::post('plafond-dinas/update-luar-negeri/{id}', 'PlafondDinasController@updateLuarNegeri')->name('administrator.plafond-dinas.update-luar-negeri');
	Route::get('plafond-dinas/destroy-luar-negeri/{id}', 'PlafondDinasController@deleteLuarNegeri')->name('administrator.plafond-dinas.destroy-luar-negeri');
	
	
	#Route::get('request-pay-slipnet', 'RequestPaySlipNetController@index')->name('administrator.request-pay-slipnet.index');
	#Route::get('request-pay-slipnet/proses/{id}', 'RequestPaySlipNetController@proses')->name('administrator.request-pay-slipnet.proses');
	#Route::post('request-pay-slipnet/submit/{id}', 'RequestPaySlipNetController@submit')->name('administrator.request-pay-slipnet.submit');
	#Route::get('karyawan/print-payslipgross/{id}', 'KaryawanController@printPayslipGross')->name('administrator.karyawan.print-payslipgross');
	#Route::get('request-pay-slipgross', 'RequestPaySlipGrossController@index')->name('administrator.request-pay-slipgross.index');
	#Route::get('request-pay-slipgross/proses/{id}', 'RequestPaySlipGrossController@proses')->name('administrator.request-pay-slipgross.proses');
	#Route::post('request-pay-slipgross/submit/{id}', 'RequestPaySlipGrossController@submit')->name('administrator.request-pay-slipgross.submit');
	Route::get('karyawan/delete-dependent/{id}', 'KaryawanController@deleteDependent')->name('administrator.karyawan.delete-dependent');
	Route::get('karyawan/delete-education/{id}', 'KaryawanController@deleteEducation')->name('administrator.karyawan.delete-education');
	Route::get('karyawan/delete-inventaris/{id}', 'KaryawanController@deleteInventaris')->name('administrator.karyawan.delete-inventaris');
	Route::get('karyawan/delete-inventaris-mobil/{id}', 'KaryawanController@deleteInventarisMobil')->name('administrator.karyawan.delete-inventaris-mobil');
	Route::get('karyawan/delete-inventaris-lainnya/{id}', 'KaryawanController@deleteInventarisLainnya')->name('administrator.karyawan.delete-inventaris-lainnya');
	Route::resource('empore-direktur', 'EmporeDirekturController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('empore-manager', 'EmporeManagerController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('empore-staff', 'EmporeStaffController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('payroll/index', 'PayrollController@index')->name('administrator.payroll.index');
	Route::post('payroll/index', 'PayrollController@index')->name('administrator.payroll.index');
	#Route::get('payrollnet/index', 'PayrollNetController@index')->name('administrator.payrollnet.index');
	#Route::post('payrollnet/index', 'PayrollNetController@index')->name('administrator.payrollnet.index');
	#Route::get('payrollgross/index', 'PayrollGrossController@index')->name('administrator.payrollgross.index');
	#Route::post('payrollgross/index', 'PayrollGrossController@index')->name('administrator.payrollgross.index');
	Route::get('karyawan/autologin/{id}', 'KaryawanController@autologin')->name('administrator.karyawan.autologin');
	Route::get('profile', 'IndexController@profile')->name('administrator.profile');
	Route::post('update-profile', 'IndexController@updateProfile')->name('administrator.update-profile');
	//custom
	Route::post('leaveCustom/index', 'LeaveCustomController@index')->name('administrator.leaveCustom.index');
	Route::get('leaveCustom/index', 'LeaveCustomController@index')->name('administrator.leaveCustom.index');
	Route::get('leaveCustom/proses/{id}', 'LeaveCustomController@proses')->name('administrator.leaveCustom.proses');
	
	Route::post('paymentRequestCustom/index', 'PaymentRequestCustomController@index')->name('administrator.paymentRequestCustom.index');
	Route::get('paymentRequestCustom/index', 'PaymentRequestCustomController@index')->name('administrator.paymentRequestCustom.index');
	Route::get('paymentRequestCustom/proses/{id}', 'PaymentRequestCustomController@proses')->name('administrator.paymentRequestCustom.proses');

	Route::post('overtimeCustom/index', 'OvertimeCustomController@index')->name('administrator.overtimeCustom.index');
	Route::get('overtimeCustom/index', 'OvertimeCustomController@index')->name('administrator.overtimeCustom.index');
	Route::get('overtimeCustom/proses/{id}', 'OvertimeCustomController@proses')->name('administrator.overtimeCustom.proses');
	Route::get('overtimeCustom/claim/{id}', 'OvertimeCustomController@claim')->name('administrator.overtimeCustom.claim');

	Route::post('trainingCustom/index', 'TrainingCustomController@index')->name('administrator.trainingCustom.index');
	Route::get('trainingCustom/index', 'TrainingCustomController@index')->name('administrator.trainingCustom.index');
	Route::get('trainingCustom/proses/{id}', 'TrainingCustomController@proses')->name('administrator.trainingCustom.proses');
	Route::get('trainingCustom/claim/{id}', 'TrainingCustomController@claim')->name('administrator.trainingCustom.claim');

	Route::post('medicalCustom/index', 'MedicalCustomController@index')->name('administrator.medicalCustom.index');
	Route::get('medicalCustom/index', 'MedicalCustomController@index')->name('administrator.medicalCustom.index');
	Route::get('medicalCustom/proses/{id}', 'MedicalCustomController@proses')->name('administrator.medicalCustom.proses');

	Route::post('exitCustom/index', 'ExitInterviewClearanceCustomController@index')->name('administrator.exitCustom.index');
	Route::get('exitCustom/index', 'ExitInterviewClearanceCustomController@index')->name('administrator.exitCustom.index');
	Route::get('exitCustom/detail/{id}', 'ExitInterviewClearanceCustomController@detail')->name('administrator.exitCustom.detail');
	Route::get('exitCustom/clearance/{id}', 'ExitInterviewClearanceCustomController@clearance')->name('administrator.exitCustom.clearance');
	

	Route::get('setting/general', 'SettingController@index')->name('administrator.setting.general');
	Route::get('setting/email', 'SettingController@email')->name('administrator.setting.email');
	Route::get('organization-structure-custom', 'StructureOrganizationCustomController@index')->name('administrator.organization-structure-custom.index');
	Route::get('organization-structure-custom/delete/{id}', 'StructureOrganizationCustomController@delete')->name('administrator.organization-structure-custom.delete');
	Route::get('setting/backup', 'SettingController@backup')->name('administrator.setting.backup');
	Route::post('setting/backup-save', 'SettingController@backupSave')->name('administrator.setting.backup-save');
	Route::post('setting/backup-delete',  'SettingController@backupDelete')->name('administrator.setting.backup-delete');
	Route::post('setting/backup-get',  'SettingController@backupGet')->name('administrator.setting.backup-get');
	Route::post('setting/save','SettingController@save')->name('administrator.setting.save');
	Route::post('setting/email-save', 'SettingController@emailSave')->name('administrator.setting.email-save');
	Route::post('setting/email-test-send', 'SettingController@emailTestSend')->name('administrator.setting.email-test-send');
	Route::post('organization-structure-custom/store', 'StructureOrganizationCustomController@store')->name('administrator.organization-structure-custom.store');
	Route::post('karyawan/send-pay-slip', 'KaryawanController@sendPaySlip')->name('administrator.karyawan.send-pay-slip');
	Route::post('setting/store-backup-schedule', 'SettingController@storeBackupSchedule')->name('administrator.setting.store-backup-schedule');
	Route::get('setting/delete-backup-schedule/{id}', 'SettingController@deleteBackupSchedule')->name('administrator.setting.delete-backup-schedule');
	Route::get('payroll/create-by-payroll-id/{id}', 'PayrollController@createByPayrollId')->name('administrator.payroll.create-by-payroll-id');
	Route::get('payroll/detail-history/{id}', 'PayrollController@detailHistory')->name('administrator.payroll.detail-history');


	
	Route::resource('request-pay-slip-karyawan', 'RequestPaySlipKaryawanController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);	

	Route::resource('applicant', 'ApplicantController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('applicant/download/{id}', 'ApplicantController@download')->name('applicant/download');
	
	Route::resource('job-vacancy', 'JobVacancyController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::post('job-vacancy/update/{id}', 'JobVacancyController@update')->name('job-vacancy/update');
	
	Route::resource('company-profile', 'CompanyProfileController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::post('company-profile/update/{id}', 'CompanyProfileController@update')->name('company-profile/update');

	Route::resource('job-list', 'JobListController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::post('job-list/update/{id}', 'JobListController@update')->name('job-list/update');
	
	Route::resource('blog', 'BlogController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	

});