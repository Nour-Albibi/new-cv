<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('companies', CompanyController::class);
    $router->resource('company-packages', CompanyPackageController::class);
    $router->resource('company-subscriptions', CompanySubscriptionController::class);
    $router->resource('customers', CustomerController::class);
    $router->resource('customer-packages', CustomerPackageController::class);
    $router->resource('customer-subscriptions', CustomerSubscriptionController::class);
    $router->resource('packages', PackageController::class);
    $router->resource('subscriptions', SubscriptionController::class);
    $router->resource('invoices', InvoiceController::class);
    $router->resource('templates', CVTemplateController::class);
    $router->resource('job-titles', JobTitleController::class);
    $router->resource('skills', SkillController::class);
    $router->resource('education-levels', EducationLevelController::class);
    $router->resource('cities', CityController::class);
    $router->resource('countries', CountryController::class);
    $router->resource('customer-cvs', CustomerCvController::class);
    $router->get('/view_cv/{cv}', 'CustomerCvController@PreviewCVinPage')->name('admin.view_cv');

    $router->resource('customer-cv-courses', CustomerCvCourseController::class);
    $router->resource('customer-cv-educations', CustomerCvEducationController::class);
    $router->resource('customer-cv-languages', CustomerCvLanguageController::class);
    $router->resource('customer-cv-projects', CustomerCvProjectController::class);
    $router->resource('customer-cv-skills', CustomerCvSkillController::class);
    $router->resource('customer-cv-summeries', CustomerCvSummeryController::class);
    $router->resource('customer-cv-work-histories', CustomerCvWorkHistoryController::class);
    $router->resource('coupons', CouponController::class);
    $router->resource('site-settings', SiteSettingController::class);
    $router->resource('home-hero-sections', HomeHeroSectionController::class);
    $router->resource('home-section-clients', HomeClientsController::class);
    $router->resource('home-section-steps', HomeSectionStepsController::class);
    $router->resource('home-section-boxes', HomeSectionBoxesController::class);
});
