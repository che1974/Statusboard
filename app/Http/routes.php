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

$app->get('/', 'Controller@index');

$app->get('auth/slack', 'AuthController@slack');
$app->get('auth/github', 'AuthController@github');

$app->get('api/slack-users', 'ApiController@getSlackUsers');
$app->get('api/github-notifications', 'ApiController@getGithubNotifications');
$app->get('api/helpscout-mailboxes', 'ApiController@getHelpscoutMailboxes');
