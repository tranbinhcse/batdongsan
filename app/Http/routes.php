<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('home', 'HomeController@index');

Route::get('/',['as'=>'/','uses'=>'HomeController@index']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

Route::group(['prefix'=>'admin','middleware'=>'auth', 'namespace' => 'Admin'],function(){
		Route::get('/',['as'=>'admin.dashboard','uses'=>'DashboardController@index']);
	Route::group(['prefix'=>'cate'],function(){
		Route::get('/',['as'=>'admin.cate.list','uses'=>'CategoryController@getList']);
		Route::get('list',['as'=>'admin.cate.list','uses'=>'CategoryController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CategoryController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CategoryController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CategoryController@getDelete']);
		Route::post('delete',['as'=>'admin.cate.postDelete','uses'=>'CategoryController@postDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CategoryController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CategoryController@postEdit']);

	});

	Route::group(['prefix' => 'property'], function(){
		Route::get('list', ['as' => 'admin.property.getList', 'uses' => 'PropertyController@index']);
		Route::get('data',['as'=>'admin.property.listdata','uses'=>'PropertyController@ListData']);

		Route::get('add', ['as' => 'admin.property.getAdd', 'uses' => 'PropertyController@create']);
		Route::post('add', ['as' => 'admin.property.postAdd', 'uses' => 'PropertyController@store']);

		Route::get('view/{id}', ['as' => 'admin.property.getView', 'uses' => 'PropertyController@show']);

		Route::get('edit/{id}', ['as' => 'admin.property.getEdit', 'uses' => 'PropertyController@edit']);
		Route::post('edit/{id}', ['as' => 'admin.property.postEdit', 'uses' => 'PropertyController@update']);

		Route::get('delete/{id}', ['as' => 'admin.property.postAdd', 'uses' => 'PropertyController@destroy']);

		Route::get('cateproprty/{type}', ['as' => 'admin.property.getCateProperty', 'uses' => 'PropertyController@selectCate']);

	});

	Route::group(['prefix'=>'post'],function () {
		Route::get('list',['as'=>'admin.post.list','uses'=>'PostController@getList']);
		Route::get('add',['as'=>'admin.post.getAdd','uses'=>'PostController@getAdd']);
		Route::post('add',['as'=>'admin.post.postAdd','uses'=>'PostController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.post.getDelete','uses'=>'PostController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.post.getEdit','uses'=>'PostController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.post.postEdit','uses'=>'PostController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.post.getDelImg','uses'=>'PostController@getDelImg']);
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('list',['as'=>'admin.user.getList','uses'=>'UserController@getList']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		//Route::post('delete',['as'=>'admin.cate.postDelete','uses'=>'CateController@postDelete']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		//Route::get('delimg/{id}',['as'=>'admin.product.getDelImg','uses'=>'ProductController@getDelImg']);
	});

	//Dự Án
	Route::group(['prefix'=>'project'],function(){
			Route::get('/',['as'=>'admin.project.getList','uses'=>'ProjectController@getList']);
			Route::get('list',['as'=>'admin.project.getList','uses'=>'ProjectController@getList']);
			Route::get('delete/{id}',['as'=>'admin.project.getDelete','uses'=>'ProjectController@getDelete']);
			//Route::post('delete',['as'=>'admin.cate.postDelete','uses'=>'CateController@postDelete']);
			Route::get('edit/{id}',['as'=>'admin.project.getEdit','uses'=>'ProjectController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.project.postEdit','uses'=>'ProjectController@postEdit']);
			Route::get('add',['as'=>'admin.project.getAdd','uses'=>'ProjectController@getAdd']);
			Route::post('add',['as'=>'admin.project.postAdd','uses'=>'ProjectController@postAdd']);
			Route::get('delimg/{id}',['as'=>'admin.project.getDelImg','uses'=>'ProjectController@getDelImg']);

	});


	//Tin Tức
	Route::group(['prefix'=>'news'],function(){
			Route::get('/',['as'=>'admin.news.getList','uses'=>'NewsController@getList']);
			Route::get('list',['as'=>'admin.news.getList','uses'=>'NewsController@getList']);
			Route::get('delete/{id}',['as'=>'admin.news.getDelete','uses'=>'NewsController@getDelete']);
			//Route::post('delete',['as'=>'admin.cate.postDelete','uses'=>'CateController@postDelete']);
			Route::get('edit/{id}',['as'=>'admin.news.getEdit','uses'=>'NewsController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.news.postEdit','uses'=>'NewsController@postEdit']);
			Route::get('add',['as'=>'admin.news.getAdd','uses'=>'NewsController@getAdd']);
			Route::post('add',['as'=>'admin.news.postAdd','uses'=>'NewsController@postAdd']);
			Route::get('delimg/{id}',['as'=>'admin.news.getDelImg','uses'=>'NewsController@getDelImg']);

			//Category tin tức
			Route::group(['prefix' => 'cate'],function(){
				Route::get('/',['as'=>'admin.news.cate.getList','uses'=>'CatenewsController@getList']);
				Route::get('list',['as'=>'admin.news.cate.list','uses'=>'CatenewsController@getList']);
				Route::get('add',['as'=>'admin.news.cate.getAdd','uses'=>'CatenewsController@getAdd']);
				Route::post('add',['as'=>'admin.news.cate.postAdd','uses'=>'CatenewsController@postAdd']);
				Route::get('delete/{id}',['as'=>'admin.news.cate.getDelete','uses'=>'CatenewsController@getDelete']);
				Route::post('delete',['as'=>'admin.news.cate.postDelete','uses'=>'CatenewsController@postDelete']);
				Route::get('edit/{id}',['as'=>'admin.news.cate.getEdit','uses'=>'CatenewsController@getEdit']);
				Route::post('edit/{id}',['as'=>'admin.news.cate.postEdit','uses'=>'CatenewsController@postEdit']);
			});

	});
	
	//Dự Án
	Route::group(['prefix'=>'project'],function(){
			Route::get('/',['as'=>'admin.project.getList','uses'=>'ProjectController@getList']);
			Route::get('list',['as'=>'admin.project.getList','uses'=>'ProjectController@getList']);
			Route::get('delete/{id}',['as'=>'admin.project.getDelete','uses'=>'ProjectController@getDelete']);
			//Route::post('delete',['as'=>'admin.cate.postDelete','uses'=>'CateController@postDelete']);
			Route::get('edit/{id}',['as'=>'admin.project.getEdit','uses'=>'ProjectController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.project.postEdit','uses'=>'ProjectController@postEdit']);
			Route::get('add',['as'=>'admin.project.getAdd','uses'=>'ProjectController@getAdd']);
			Route::post('add',['as'=>'admin.project.postAdd','uses'=>'ProjectController@postAdd']);
			Route::get('delimg/{id}',['as'=>'admin.project.getDelImg','uses'=>'ProjectController@getDelImg']);

	});

	//Location	
	Route::group(['prefix'=>'location'],function(){
		Route::group(['prefix' => 'province'],function(){
			Route::get('/',['as'=>'admin.location.province.getList','uses'=>'LocationController@getProvinceList']);
			Route::get('provincedata',['as'=>'admin.location.getProvinceListData','uses'=>'LocationController@getProvinceListData']);

			Route::get('edit/{id}',['as'=>'admin.location.getProvinceEdit','uses'=>'LocationController@getProvinceEdit']);
			Route::post('edit/{id}',['as'=>'admin.location.postProvinceEdit','uses'=>'LocationController@postProvinceEdit']);
			
			Route::get('add',['as'=>'admin.location.getProvinceAdd','uses'=>'LocationController@getProvinceAdd']);
			Route::post('add',['as'=>'admin.location.postProvinceAdd','uses'=>'LocationController@postProvinceAdd']);

			Route::get('delete/{id}',['as'=>'admin.location.getProvinceDelete','uses'=>'LocationController@getProvinceDelete']);


		});

		Route::group(['prefix' => 'district'],function(){
			Route::get('/',['as'=>'admin.location.district.getList','uses'=>'LocationController@getDistrictList']);
			Route::get('districtdata',['as'=>'admin.location.getDistrictListData','uses'=>'LocationController@getDistrictListData']);

			Route::get('edit/{id}',['as'=>'admin.location.getDistrictEdit','uses'=>'LocationController@getDistrictEdit']);
			Route::post('edit/{id}',['as'=>'admin.location.postDistrictEdit','uses'=>'LocationController@postDistrictEdit']);
			
			Route::get('add',['as'=>'admin.location.getDistrictAdd','uses'=>'LocationController@getDistrictAdd']);
			Route::post('add',['as'=>'admin.location.postDistrictAdd','uses'=>'LocationController@postDistrictAdd']);

			Route::get('delete/{id}',['as'=>'admin.location.getDistrictDelete','uses'=>'LocationController@getDistrictDelete']);

			//Get district by ID province
			Route::get('districtbyprovince',['as'=>'admin.location.getDistrictByProvince',function(){return redirect('admin');}]); //URL AJAX GET DISTRICT BY PROVINCE ID
			Route::get('districtbyprovince/{id}',['as'=>'admin.location.getDistrictByProvinceId','uses'=>'LocationController@getDistrictByProvinceId']); //URL RETURN DATA DISTRICT

		});

		Route::group(['prefix' => 'ward'],function(){
			Route::get('/',['as'=>'admin.location.ward.getList','uses'=>'LocationController@getWardList']); 
			Route::get('warddata',['as'=>'admin.location.getWardListData','uses'=>'LocationController@getWardListData']);

			Route::get('edit/{id}',['as'=>'admin.location.getWardEdit','uses'=>'LocationController@getWardEdit']);
			Route::post('edit/{id}',['as'=>'admin.location.postWardeEdit','uses'=>'LocationController@postWardEdit']);
			
			Route::get('add',['as'=>'admin.location.getWardAdd','uses'=>'LocationController@getWardAdd']);
			Route::post('add',['as'=>'admin.location.postWardAdd','uses'=>'LocationController@postWardAdd']);

			Route::get('delete/{id}',['as'=>'admin.location.getWardDelete','uses'=>'LocationController@getWardDelete']);


			//Get Ward by ID District
			Route::get('wardbydistrict',['as'=>'admin.location.getWardByDistrict',function(){return redirect('admin');}]); //URL AJAX GET DISTRICT BY PROVINCE ID
			Route::get('wardbydistrict/{id}',['as'=>'admin.location.getWardByDistrictId','uses'=>'LocationController@getWardByDistrictId']); //URL RETURN DATA DISTRICT

		});
			

			

 

	});

});
 



Route::get('dang-tin',['as'=>'getPost','uses'=>'PostController@getPost']);
Route::post('dang-tin',['as'=>'postPost','uses'=>'PostController@postPost']);
Route::get('tin-tuc',['as'=>'getTintuc','uses'=>'PostController@getTintuc']);



//Tin tức Front page
Route::group(['prefix' => 'tin-tuc'],function(){
	Route::get('/',['as'=>'front.news.getList','uses'=>'NewsController@getList']);
});
 