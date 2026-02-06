<?php
// 1
Route::get('/test', function () {
    return 'Первое задание текст';
});

// 2
Route::get('/dir/test', function () {
    return 'Сообщение для dir/test';
});

// 3
Route::get('/user/{name}', function ($name) {
    return 'Привет, ' . $name;
});

// 4
Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return 'Пользователь: ' . $name . ' ' . $surname;
});

// 5
Route::get('/city/{city?}', function ($city = 'novosibirsk') {
    return 'Город: ' . $city;
});

// 6
Route::get('/user-id/{id}', function ($id) {
    return 'ID пользователя: ' . $id;
})->whereNumber('id');

// 7
Route::get('/user-full/{id}/{name}', function ($id, $name) {
    return 'ID: ' . $id . ', Имя: ' . $name;
})->whereNumber('id')->where('name', '[a-z]{3,}');

// 8
Route::get('/posts/{date}', function ($date) {
    return 'Посты за дату: ' . $date;
})->where('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');

// 9
Route::get('/city-name/{name}', function ($name) {
    return 'Город: ' . $name;
})->whereAlpha('name');
