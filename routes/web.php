<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;


Route::get('/', function () {
    return view('welcome');
});

//for about me 

Route::get('/about-me', [AboutMeController::class, 'showAboutMe']);

//for skills 

Route::get('/skills', [SkillsController::class, 'showSkills']);

// for hobbies
Route::get('/hobbies', [HobbiesController::class, 'showHobbies']);
