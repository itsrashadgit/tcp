

<?php


// Country

use SalimHosen\Core\Http\Controllers\HomeController;
use SalimHosen\Core\Http\Controllers\NotificationController;
use SalimHosen\Core\Http\Controllers\CompanyController;
use SalimHosen\Core\Http\Controllers\LoginController;
use SalimHosen\Core\Http\Controllers\ForgotPasswordController;
use SalimHosen\Core\Http\Controllers\ResetPasswordController;
use SalimHosen\Core\Http\Controllers\VerificationController;
use SalimHosen\Core\Http\Controllers\MeController;
use SalimHosen\Core\Http\Controllers\PermissionController;
use SalimHosen\Core\Http\Controllers\RoleController;
use SalimHosen\Core\Http\Controllers\SettingController;
use SalimHosen\Core\Http\Controllers\SubroleController;
use SalimHosen\Core\Http\Controllers\UserController;
use SalimHosen\Core\Http\Controllers\AccountController;
use SalimHosen\Core\Http\Controllers\CompanySettingController;
use SalimHosen\Core\Http\Controllers\ContactController;

// Apply Web Middlewre
Route::group(["middleware" => ["web"]], function () {

    // Guest Routes
    Route::group(["middleware" => ["guest"]],function () {

        // Route::get('login', [LoginController::class, 'showLogin'])->name("login");

        // Web Login
        Route::post('login', [LoginController::class, 'login'])->name("login");
        Route::get('admin', [LoginController::class, 'showAdminLogin'])->name("admin.login");



        Route::get('password/request', [ForgotPasswordController::class, 'showPasswordRequestForm'])->name("password.request");
        Route::get('password/reset/{token}', [ResetPasswordController::class, 'showPasswordResetForm'])->name("password.reset");
        Route::get('verification/resend', [VerificationController::class, 'resendVerificationMail'])->name("verification.resend");
        Route::get('verification/verify/{user}', [VerificationController::class, 'verifyEmail'])->name("verify.email");

    });

    // After Login Dashboard
    Route::get("home", [HomeController::class, 'index'])->name("home");

    // Web logout
    Route::post("logout", [LoginController::class, 'logout'])->name("logout");

    Route::get("profile", [MeController::class, 'profile'])->name("profile");

    Route::get("settings/general", [SettingController::class, 'index'])->name("settings.general");
    Route::get("features", [SettingController::class, 'features'])->name("features.settings");
    Route::get("commission-settings", [SettingController::class, 'commissionSetting'])->name("commission.settings");
    Route::get("withdraw-settings", [SettingController::class, 'withDrawSetting'])->name("withdraw.settings");

    // Csv Import
    Route::post('bulk-imports/parse-bulk-import', [BulkUploadController::class, 'parseBulkImport'])->name('bulk.import.parse');
    Route::post('bulk-imports/process-bulk-import', [BulkUploadController::class, 'processBulkImport'])->name('bulk.import.process');

    // Permission
    Route::resource('permissions', PermissionController::class);

    // Roles
    Route::resource('roles', RoleController::class)->only(["index", "show",'edit', 'update']);
    Route::resource('subroles', SubroleController::class);

    // Users
    Route::resource('users', UserController::class);

    Route::resource('companies', CompanyController::class);
    Route::get("company/set/{id}", [CompanyController::class, 'setCompany'])->name("company.set");
    Route::post('activate-company', [CompanyController::class, 'activateCompany'])->name("company.activate");

    Route::post("company-user", [CompanyController::class, 'addUserToCompany'])->name("companyuser.add");
    Route::delete("company-user/{user_id}", [CompanyController::class, 'removeUser'])->name("companyuser.remove");

    Route::resource('notifications', NotificationController::class)->only(["index", "show"]);


    Route::resource('contacts', ContactController::class);
    Route::resource('accounts', AccountController::class);

    Route::post('import/contacts', [ContactController::class, 'importContacts'])->name("contacts.import");

    Route::get("account/list", [AccountController::class, 'addToList'])->name("accounts.addto.list");
    Route::post("account/list", [AccountController::class, 'storeToList'])->name("accounts.addto.list");

    Route::get("contact/list", [ContactController::class, 'addToList'])->name("contacts.addto.list");
    Route::post("contact/list", [ContactController::class, 'storeToList'])->name("contacts.addto.list");

});


Route::group(['middleware' => ['api'], "as" => "api.", "prefix" => "api/v1"], function(){

    // Guest Routes
    Route::group(["middleware" => ["guest"]],function () {

        // Mobile App Login
        Route::post('login', [LoginController::class, 'login'])->name("login");

        Route::post('verification/verify/{user}', [VerificationController::class, 'verify'])->name('verification.verify');
        Route::post('verification/resend', [VerificationController::class, 'resend'])->name("verification.resend");
        Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name("password.email");
        Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name("password.reset");

    });


    // Get Auth User
    Route::get("me", [MeController::class, "getMe"]);

    // Logout from Mobile App
    Route::post("logout", [LoginController::class, 'logout'])->name("logout");

    Route::put("profile", [MeController::class, 'updateProfile'])->name("profile");
    Route::put("password/update", [MeController::class, 'updatePassword'])->name("password.update");
    Route::put("avatar/update", [MeController::class, 'updateAvatar'])->name("avatar.update");

    Route::put("settings/general/update", [SettingController::class, 'updateGeneral'])->name("settings.general");
    Route::put("company-settings/update", [CompanySettingController::class, 'updateCompanySettings'])->name("company.settings.update");

    Route::resource('contacts', ContactController::class)->only(["index"]);
    Route::get('contact/search', [ContactController::class, 'search'])->name("contacts.search");

    Route::delete('contacts/mass-destroy', [ContactController::class, 'massDestroy'])->name('contacts.massDestroy');

    Route::resource('accounts', AccountController::class)->only(["index"]);
    Route::delete('accounts/mass-destroy', [AccountController::class, 'massDestroy'])->name('accounts.massDestroy');


});


