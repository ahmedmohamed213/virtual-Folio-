<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminHomeController as AdminHomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FirstPageController;
use App\Http\Controllers\HomeController as UserHomeController;
use App\Http\Controllers\PartenrController;
use App\Http\Controllers\PortfolioCategoryController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillCategoryController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('Admin.login');
// });

Route::get('/admin/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['perfix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/adminHome', [AdminHomeController::class, 'index'])->name('admin.adminHome');


    ////////////   firstPage crud ///////////
    Route::get('/firstPage/edit', [FirstPageController::class, 'edit'])->name('admin.firstPage.edit');
    Route::put('/firstPage/update', [FirstPageController::class, 'update'])->name('admin.firstPage.update');


    ////////////   skill category crud      ///////////
    Route::get('/skills/categories', [SkillCategoryController::class, 'index'])->name('admin.skill.category.index');
    Route::get('/skills/category/create', [SkillCategoryController::class, 'create'])->name('admin.skill.category.craete');
    Route::post('/skills/category/store', [SkillCategoryController::class, 'store'])->name('admin.skill.category.store');
    Route::delete('/skills/category/delete', [SkillCategoryController::class, 'delete'])->name('admin.skill.category.delete');
    Route::get('/skills/category/edit/{id}', [SkillCategoryController::class, 'edit'])->name('admin.skill.category.edit');
    Route::put('/skills/category/update', [SkillCategoryController::class, 'update'])->name('admin.skill.category.update');


    ////////////   skills crud      ///////////
    Route::get('/skills', [SkillsController::class, 'index'])->name('admin.skill.index');
    Route::get('/skills/create', [SkillsController::class, 'create'])->name('admin.skill.craete');
    Route::post('/skills/store', [SkillsController::class, 'store'])->name('admin.skill.store');
    Route::delete('/skills/delete', [SkillsController::class, 'delete'])->name('admin.skill.delete');
    Route::get('/skills/edit/{id}', [SkillsController::class, 'edit'])->name('admin.skill.edit');
    Route::put('/skills/update', [SkillsController::class, 'update'])->name('admin.skill.update');


    ////////////   about crud     firstPage ///////////
    Route::get('/about/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
    Route::put('/about/update', [AboutController::class, 'update'])->name('admin.about.update');


    ////////////   profile crud      ///////////

    Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/profiles/update', [ProfileController::class, 'update'])->name('admin.profile.update');


    ////////////   services crud      ///////////
    Route::get('/services', [ServicesController::class, 'index'])->name('admin.service.index');
    Route::get('/services/create', [servicesController::class, 'create'])->name('admin.service.craete');
    Route::post('/services/store', [servicesController::class, 'store'])->name('admin.service.store');
    Route::delete('/services/delete', [servicesController::class, 'delete'])->name('admin.service.delete');
    Route::get('/services/edit/{id}', [servicesController::class, 'edit'])->name('admin.service.edit');
    Route::put('/services/update', [servicesController::class, 'update'])->name('admin.service.update');


    ////////////   portfolio category crud      ///////////
    Route::get('/portfolios/categories', [PortfolioCategoryController::class, 'index'])->name('admin.portfolio.category.index');
    Route::get('/portfolios/category/create', [portfolioCategoryController::class, 'create'])->name('admin.portfolio.category.craete');
    Route::post('/portfolios/category/store', [portfolioCategoryController::class, 'store'])->name('admin.portfolio.category.store');
    Route::delete('/portfolios/category/delete', [portfolioCategoryController::class, 'delete'])->name('admin.portfolio.category.delete');
    Route::get('/portfolios/category/edit/{id}', [portfolioCategoryController::class, 'edit'])->name('admin.portfolio.category.edit');
    Route::put('/portfolios/category/update', [portfolioCategoryController::class, 'update'])->name('admin.portfolio.category.update');


    ////////////   portfolios crud      ///////////
    Route::get('/portfolios', [PortfolioController::class, 'index'])->name('admin.portfolio.index');
    Route::get('/portfolios/create', [PortfolioController::class, 'create'])->name('admin.portfolio.craete');
    Route::post('/portfolios/store', [PortfolioController::class, 'store'])->name('admin.portfolio.store');
    Route::delete('/portfolios/delete', [PortfolioController::class, 'delete'])->name('admin.portfolio.delete');
    Route::get('/portfolios/edit/{id}', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
    Route::put('/portfolios/update', [PortfolioController::class, 'update'])->name('admin.portfolio.update');


    ////////////   user  crud      ///////////
    Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.user.craete');
    Route::post('/users/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::delete('/users/delete', [UserController::class, 'delete'])->name('admin.user.delete');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('/users/update', [UserController::class, 'update'])->name('admin.user.update');


    ////////////    education crud      ///////////
    Route::get('/educations', [EducationController::class, 'index'])->name('admin.education.index');
    Route::get('/educations/create', [EducationController::class, 'create'])->name('admin.education.craete');
    Route::post('/educations/store', [EducationController::class, 'store'])->name('admin.education.store');
    Route::delete('/educations/delete', [EducationController::class, 'delete'])->name('admin.education.delete');
    Route::get('/educations/edit/{id}', [EducationController::class, 'edit'])->name('admin.education.edit');
    Route::put('/educations/update', [EducationController::class, 'update'])->name('admin.education.update');


    ////////////    experience crud      ///////////
    Route::get('/experiences', [ExperienceController::class, 'index'])->name('admin.experience.index');
    Route::get('/experiences/create', [ExperienceController::class, 'create'])->name('admin.experience.craete');
    Route::post('/experiences/store', [ExperienceController::class, 'store'])->name('admin.experience.store');
    Route::delete('/experiences/delete', [ExperienceController::class, 'delete'])->name('admin.experience.delete');
    Route::get('/experiences/edit/{id}', [ExperienceController::class, 'edit'])->name('admin.experience.edit');
    Route::put('/experiences/update', [ExperienceController::class, 'update'])->name('admin.experience.update');



    ////////////    partenr crud      ///////////
    Route::get('/partenrs', [PartenrController::class, 'index'])->name('admin.partenr.index');
    Route::get('/partenrs/create', [PartenrController::class, 'create'])->name('admin.partenr.craete');
    Route::post('/partenrs/store', [PartenrController::class, 'store'])->name('admin.partenr.store');
    Route::delete('/partenrs/delete', [PartenrController::class, 'delete'])->name('admin.partenr.delete');
    Route::get('/partenrs/edit/{id}', [PartenrController::class, 'edit'])->name('admin.partenr.edit');
    Route::put('/partenrs/update', [PartenrController::class, 'update'])->name('admin.partenr.update');


    ////////////    contact crud      ///////////
    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contact.index');
    Route::post('/contacts/store', [ContactController::class, 'store'])->name('admin.contact.store');
    Route::delete('/contacts/delete', [ContactController::class, 'delete'])->name('admin.contact.delete');
});




////////////////////////     user route     /////////////////
Route::get('/', [UserHomeController::class, 'index']);
