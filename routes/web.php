<?php

// デフォルトのコメント部分は省略

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');