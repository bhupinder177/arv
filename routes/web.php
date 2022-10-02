<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Start Front End routes
Route::get('/', 'HomeController@index')->name('home');
// End Front End routes
//Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/arvca', 'HomeController@arvca')->name('arvca');
Route::get('/vision', 'HomeController@vision')->name('vision');
Route::get('/coreteam', 'HomeController@coreteam')->name('coreteam');
Route::get('/supporting-professionals', 'HomeController@supportingProfessionals')->name('supporting-professionals');
Route::get('/sectoral-experience', 'HomeController@sectoralExperience')->name('sectoral-experience');
Route::get('/ibc-related', 'HomeController@ibcRelated')->name('ibc-related');
Route::get('/other-service', 'HomeController@otherService')->name('other-service');
Route::get('/knowledge-legal', 'HomeController@knowledgeLegal')->name('knowledge-legal');
Route::get('/knowledge-detail/{id}', 'HomeController@knowledgeDetail')->name('knowledge-detail');
Route::get('/ibc-related2', 'HomeController@ibcRelated2')->name('ibc-related2');
Route::get('/allied-law', 'HomeController@alliedLaws')->name('allied-law');
Route::get('/blogs','HomeController@blog')->name('blogs');
Route::get('/blog-detail/{id}','HomeController@blogDetail');
Route::get('/contact-us','ContactController@index')->name('contact-us');
Route::post('/contactSave','ContactController@contactSave')->name('send.contact.us');
Route::post('/homeSave','ContactController@homeSave')->name('home.form.save');
Route::post('/gettouchSave','ContactController@gettouchSave')->name('send.gettouch');





// ******************************Website routes**********
// ******************************Admin routes**********
// Admin Routes
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('login', 'AdminController@loginView')->name('admin.login');
    Route::post('login', 'AdminController@loginAuthenticate');
    Route::get('forgot-password', 'AdminController@forgotPasswordView');
    Route::post('forgot-password', 'AdminController@forgotPassword');
    Route::get('reset-password/{token}', 'AdminController@resetPasswordView');
    Route::post('reset-password', 'AdminController@resetPassword');
    Route::get('logout', function () {
        \Auth::logout();

        return redirect('admin/login');
    });
    Route::group(['middleware' => ['auth', 'admin']], function () {


        Route::get('dashboard', 'DashboardController@DashboardView');
        Route::get('home', 'DashboardController@home');
        Route::post('homeSave', 'DashboardController@homeSave');



        Route::get('categories','CategoriesController@index');
        Route::get('categories-add','CategoriesController@add');
        Route::post('categoriesSave','CategoriesController@save');
        Route::get('categories-edit/{id}','CategoriesController@edit');
        Route::post('categories-update','CategoriesController@update');
        Route::post('categories-delete','CategoriesController@delete');



        Route::get('testimonials','TestimonialsController@index');
        Route::get('testimonials-add','TestimonialsController@add');
        Route::post('testimonialsSave','TestimonialsController@save');
        Route::get('testimonials-edit/{id}','TestimonialsController@edit');
        Route::post('testimonials-update','TestimonialsController@update');
        Route::post('testimonials-delete','TestimonialsController@delete');




        Route::get('qualification','QualificationController@index');
        Route::get('qualification-add','QualificationController@add');
        Route::post('qualificationSave','QualificationController@save');
        Route::get('qualification-edit/{id}','QualificationController@edit');
        Route::post('qualification-update','QualificationController@update');
        Route::post('qualification-delete','QualificationController@delete');

        Route::get('workingsectors','WorkingSectorsController@index');
        Route::get('workingsectors-add','WorkingSectorsController@add');
        Route::post('workingsectorsSave','WorkingSectorsController@save');
        Route::get('workingsectors-edit/{id}','WorkingSectorsController@edit');
        Route::post('workingsectors-update','WorkingSectorsController@update');
        Route::post('workingsectors-delete','WorkingSectorsController@delete');

        Route::get('payments','PaymentsController@index');

        Route::get('/password', 'DashboardController@password');
        Route::post('/passwordUpdate', 'DashboardController@passwordUpdate');

        Route::get('settings','SettingsController@index')->name("settings.index");
        Route::post('settings-save','SettingsController@save')->name("settings.save");




        Route::get('allied-laws','AlliedLawsController@index')->name("allied-laws.index");
        Route::get('allied-laws-add','AlliedLawsController@add')->name("allied-laws.add");
        Route::post('allied-laws-save','AlliedLawsController@save')->name("allied-laws.save");
        Route::get('allied-laws-edit/{id}','AlliedLawsController@edit')->name("allied-laws.edit");
        Route::post('allied-laws-update','AlliedLawsController@update')->name("allied-laws.update");
        Route::post('allied-laws-delete','AlliedLawsController@delete')->name("allied-laws.delete");





        Route::get('page','PageController@index')->name("page.index");
        Route::get('page-add','PageController@add')->name("page.add");
        Route::post('page-save','PageController@save')->name("page.save");
        Route::get('page-edit/{id}','PageController@edit')->name("page.edit");
        Route::post('page-update','PageController@update')->name("page.update");
        Route::post('page-delete','PageController@delete')->name("page.delete");

        Route::get('blog','BlogController@index')->name("blog.index");
        Route::get('blog-add','BlogController@add')->name("blog.add");
        Route::post('blog-save','BlogController@save')->name("blog.save");
        Route::get('blog-edit/{id}','BlogController@edit')->name("blog.edit");
        Route::post('blog-update','BlogController@update')->name("blog.update");
        Route::post('blog-delete','BlogController@delete')->name("blog.delete");

        Route::get('knowledge-legal','KnowledgeLegalController@index')->name("knowledge-legal.index");
        Route::get('knowledge-legal-add','KnowledgeLegalController@add')->name("knowledge-legal.add");
        Route::post('knowledge-legal-save','KnowledgeLegalController@save')->name("knowledge-legal.save");
        Route::get('knowledge-legal-edit/{id}','KnowledgeLegalController@edit')->name("knowledge-legal.edit");
        Route::post('knowledge-legal-update','KnowledgeLegalController@update')->name("knowledge-legal.update");
        Route::post('knowledge-legal-delete','KnowledgeLegalController@delete')->name("knowledge-legal.delete");
    });
  });
// ******************************Admin routes**********
