<?php

Route::group(['middleware' => ['web']], function() {
  Route::get('/', [
    'uses' => 'PostController@getBlogIndex',
    'as' => 'blog.index'
  ]);

  Route::get('/blog', [
    'uses' => 'PostController@getBlogIndex',
    'as' => 'blog.index'
  ]);

  Route::get('/blog/{post_id}', [
    'uses' => 'PostController@getSinglePost',
    'as' => 'blog.single'
  ]);

  /** Other routes */
  Route::get('/about', function() {
    return view('frontend.other.about');
  })->name('about');

  Route::get('/contact', [
    'uses' => 'ContactMessageController@getContactIndex',
    'as' => 'contact'
  ]);

  Route::group([
    'prefix' => '/admin'
  ], function() {
    Route::get('/', [
      'uses' => 'AdminController@getIndex',
      'as' => 'admin.index'
    ]);
  });

});
