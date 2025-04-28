<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', fn() => view('home'), ['as' => 'home']);
$routes->group('tasks', function ($routes) {
    $routes->get('index',       "Task::index",  ['as' => 'tasks_index']);
    $routes->get('create',  "Task::create", ['as' => 'tasks_create']);
    $routes->post('store',  "Task::store",  ['as' => 'tasks_store']);
    $routes->get('show/(:num)',    "Task::show/$1",   ['as' => 'tasks_show']);
    $routes->get('edit/(:num)',    "Task::edit/$1",   ['as' => 'tasks_edit']);
    $routes->post('update/(:num)',  "Task::update/$1",   ['as' => 'tasks_update']);
    $routes->post('destroy/(:num)',  "Task::destroy/$1",   ['as' => 'tasks_destroy']);
    $routes->get('queue', "Task::queue", ['as' => 'tasks_queue']);
    $routes->get('dashboard', "Task::dashboard", ['as' => 'tasks_dashboard']);
});
$routes->group('users', function ($routes) {
    $routes->get('index',       "User::index",  ['as' => 'users_index']);
    $routes->get('create',  "User::create", ['as' => 'users_create']);
    $routes->post('store',  "User::store",  ['as' => 'users_store']);
    $routes->get('show/(:num)',    "User::show/$1",   ['as' => 'users_show']);
    $routes->get('edit/(:num)',    "User::edit/$1",   ['as' => 'users_edit']);
    $routes->post('update/(:num)',  "User::update/$1",   ['as' => 'users_update']);
    $routes->post('destroy/(:num)',  "User::destroy/$1",   ['as' => 'users_destroy']);
    $routes->get('login', "User::auth", ['as' => 'users_login_form']);
    $routes->post('login', "User::login", ['as' => 'users_login']);
    $routes->post('logout', "User::logout", ['as' => 'users_logout']);
});