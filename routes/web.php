<?php

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
//     return view('register');
// });

    // Route::get('/no-internet', function () {
    //     return view('no-internet');
    // });

// Route::group(['prefix' => '/','middleware' => ['isConected']],function () {
Route::get('/admin/login','LoginController@index')->name('admin.loginIndex');
Route::post('/admin/login','LoginController@login')->name('admin.login');
Route::post('/admin/logout','LoginController@logout')->name('admin.logout');

Route::get('/register','RegisterController@create')->name('admin.create');
Route::post('/register','RegisterController@store')->name('admin.store');

Route::get('/forget/password','MainController@forgetPassword')->name('forget.password');
Route::post('/forget/password','MainController@forgetPasswordReset')->name('forget.password.reset');

Route::get('/reset/password/{user}','MainController@resetPassword')->name('password.reset');
Route::post('/reset/password/{user}','MainController@resetPasswordCode')->name('password.reset.code');


Route::group(['prefix' => 'admin','middleware' => ['isAdmin']],function () {

Route::get('/','AdminController@index')->name('admin.index');
Route::get('/contact/query','AdminController@contactQuery')->name('admin.contact');
Route::get('/contact/query/{contact}','AdminController@contactQueryShow')->name('admin.contact.show');
Route::post('/contact/query/{contact}/replay','ContactController@contactQueryReplay')->name('admin.contact.replay');
Route::get('/contact/query/{replay}/replay/delete','ContactController@contactQueryDelete')->name('admin.contact.replay.delete');



Route::get('/school/message','MessageController@index')->name('admin.school.message');
Route::get('/school/message/show/{message}','MessageController@show')->name('admin.school.message.show');
Route::post('/school/message/{message}/replay','MessageController@replay')->name('admin.school.message.replay');
Route::get('/school/message/{replay}/delete','MessageController@deleteReplay')->name('admin.school.message.delete');


Route::get('/school/create','SchoolController@create')->name('admin.school.create');
Route::post('/school/create','SchoolController@store')->name('admin.school.store');
Route::get('/school/index','SchoolController@index')->name('admin.school.index');
Route::get('/school/show/{school}','SchoolController@show')->name('admin.school.show');
Route::get('/school/edit/{school}','SchoolController@edit')->name('admin.school.edit');
Route::post('/school/edit/{school}','SchoolController@update')->name('admin.school.update');


Route::get('/school/{school}/grade','GradeController@showGradeSchool')->name('admin.school.showGrade');

Route::get('/school/grade/show','GradeController@showGradeGet')->name('admin.school.show.grade.get');
Route::post('/school/grade/show','GradeController@showGradePost')->name('admin.school.show.grade.post');


Route::get('/school/{school}/grade/{grade}','SubjectController@indexSubjectSchool')->name('admin.school.grade.subject');

Route::get('/school/{school}/create/grade','GradeController@create')->name('admin.school.create.grade.sub');
Route::post('/school/{school}/create/grade','GradeController@store')->name('admin.school.store.grade.sub');




Route::get('/school/{school}/grade/{grade}/subject/{subject}/file','FileController@index')->name('admin.school.grade.subject.file');


Route::get('/school/{school}/grade/{grade}/subject/{subject}/file/create','FileController@create')->name('admin.school.grade.subject.file.create');

Route::post('/school/{school}/grade/{grade}/subject/{subject}/file/create','FileController@store')->name('admin.school.grade.subject.file.store');


});


Route::get('/','MainController@index')->name('site.index');

Route::get('/about-us','MainController@aboutUs')->name('site.aboutus');
Route::get('/services','MainController@services')->name('site.services');

Route::get('/school','MainController@school')->name('site.school');
Route::get('/school/{school}/info','MainController@schoolShow')->name('site.school.show');

Route::get('/contact','MainController@contact')->name('site.contact');
Route::post('/contact','ContactController@store')->name('site.contact.store');

Route::get('/login','MainController@login')->name('site.login');
Route::post('/login','MainController@loginUser')->name('site.login.user');
Route::post('/logout','MainController@logout')->name('site.logout');



// school Route
Route::group(['prefix' => 'school','middleware' => ['isSchool']],function () {

Route::get('/admin','school\SchoolController@index')->name('school.index');
Route::get('/profile','school\SchoolController@profile')->name('school.profile');
Route::get('/profile/edit/{school}','school\SchoolController@profileEdit')->name('school.edit.profile');
Route::post('/profile/edit/{school}','school\SchoolController@profileUpdate')->name('school.update.profile');

Route::get('/profile/edit/emailpassword/{school}','school\SchoolController@profileEditEmailpassword')->name('school.edit.profile.email.password');
Route::post('/profile/edit/emailpassword/{school}','school\SchoolController@profileUpdateEmailpassword')->name('school.update.profile.email.password');


Route::get('/message','ContactController@message')->name('school.message');
Route::get('/message/show/{message}','ContactController@messageShow')->name('school.message.show');
Route::get('/message/send','ContactController@messageSend')->name('school.message.send');
Route::post('/message/send','ContactController@messageStore')->name('school.message.store');

Route::get('/school/grades','school\SchoolController@showGrade')->name('school.grade');

Route::get('/subject/{school}/grade/{grade}','school\SchoolController@showSubject')->name('school.grade.subject');


Route::get('/subject/file/{school}/grade/{grade}/subject/{subject}','school\SchoolController@showSubjectFile')->name('school.grade.subject.file');


Route::get('/school/add/teacher','school\SchoolController@addTeacher')->name('school.add.teacher');
Route::post('/school/add/teacher','school\SchoolController@storeTeacher')->name('school.store.teacher');

Route::get('/school/edit/teacher/{teacher}','school\SchoolController@editTeacher')->name('school.teacher.edit');
Route::post('/school/edit/teacher/{teacher}','school\SchoolController@updateTeacher')->name('school.teacher.update');

Route::get('/show/teacher','school\SchoolController@showTeacher')->name('school.show.teacher');

Route::get('/school/delete/teacher/{teacher}','school\SchoolController@delTeacher')->name('school.del.teacher');

Route::get('/school/{school}/grade/{grade}/add/teacher/grade','school\SchoolController@addTeacherGrade')->name('school.add.teacher.grade');
Route::post('/school/{school}/grade/{grade}/add/teacher/grade','school\SchoolController@storeTeacherGrade')->name('school.store.teacher.grade');
Route::get('/school/{school}/grade/{grade}/del/teacher/{teacher}/grade','school\SchoolController@delTeacherGrade')->name('school.del.teacher.grade');

Route::get('/school/{school}/grade/{grade}/add/teacher/subject/{subject}','school\SchoolController@addTeacherSubject')->name('school.add.teacher.subject');
Route::post('/school/{school}/grade/{grade}/add/teacher/subject/{subject}','school\SchoolController@storeTeacherSubject')->name('school.store.teacher.subject');
Route::get('/school/{school}/grade/{grade}/del/teacher/{teacher}/subject/{subject}','school\SchoolController@delTeachersubject')->name('school.del.teacher.subject');
});




Route::group(['prefix' => 'teacher','middleware' => ['isTeacher']],function () {
	Route::get('/admin','teacher\TeacherController@index')->name('teacher.index');
	Route::get('/grade','teacher\TeacherController@gradeShowe')->name('teacher.grade');

	Route::get('/grade/{school}/{grade}/subject','teacher\TeacherController@subjectShow')->name('teacher.grade.subject');

	Route::get('/subject/file/{school}/grade/{grade}/subject/{subject}','teacher\TeacherController@showSubjectFile')->name('teacher.grade.subject.file');

	Route::get('/subject/show','teacher\TeacherController@subjectTeacherShow')->name('teacher.subject.show');
	});




Route::group(['prefix' => '','middleware' => ['isBlock']],function () {
Route::get('/verfication/{user}','MainController@verfication')->name('verfication');
Route::post('/verfication/{user}','MainController@verficationCode')->name('verfication.code');
});

// });