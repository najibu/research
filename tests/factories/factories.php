<?php 

$factory('App\Thread', [
  'user_id'=> 'factory:App\User', 
  'title'=> $faker->sentence,
  'body'=> $faker->paragraph
]);

$factory('App\Reply', [
  'user_id'=> 'factory:App\User', 
  'thread_id'=> 'factory:App\Thread',
  'body'=> $faker->paragraph
]);

$factory('App\User', [
  'name'=> $faker->username, 
  'email'=> $faker->unique()->numberBetween(10, 20),
  'password'=> $faker->password
]);

$factory('App\User', 'admin_user', [
  'name'=> 'Administrator', 
  'email'=> $faker->email,
  'password'=> $faker->password
]);