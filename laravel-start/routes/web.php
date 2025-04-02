<?php
use App\Http\Controllers\InfosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return 'Login';
});

Route::get('/user/{name}', function($name){
    return 'Hallo ' . $name;
});

Route::get('/data', function($name){
    return ['firstname' => 'Jörg',  'lastname'=> 'Aderhold'];
});

Route::get('/user', function(){
    $id = request('id');
    return "Hallo, Deine ID lautet: " . $id;
});

// Phase 2
Route::get('/user', function(){
    return view('user', [
        'id' =>request('id')
    ]);
});

// Phase 3

Route::get('/infos', [InfosController::class, 'show']);

Route::get( '/kommentar', function(){
    $comment = 'Hier ist alles super! ';
    return view('comments', [
        'comment' => $comment,
        'songs' => 3,
        'loggedIn' => false

    ]);
});

/* === Master- /Child-Temülates
=============================================================================================
 */
Route::get( '/child', function() {
    return view( 'child');
});

Route::get( '/sibling', function() {
    return view( 'sibling');
});

Route::get( '/u1-login', function() {
    $text ="Bitte Einlogen";
    return view( 'u1-login', [
            'text' => $text
    ]);
});

Route::get( '/u1-logout', function() {
    return view( 'u1-logout');
});

Route::get( '/u1-register', function() {
    return view( 'u1-register');
});

Route::get( '/u1-start', function() {
    return view( 'u1-start');
});

Route::get( '/logout', function() {
    $text = "Logout ist erfolgreich";
    return view( 'u1-logout', [
        'text' => $text
    ]);
});


/* === Komponenten
=====================================================================================
========  */
// Klassisch

Route::get('/card', function() {
    return view('component-1');
});

// modern
Route::get('/card', function() {
    return view('component-2');
});



Route::get('/portfolio', function () {
    return view('u2-portfolio', [
        'title' => 'Mein Portfolio',
        'description' => 'Hier ist mein Portfolio mit verschiedenen Projekten.'
    ]);
});

Route::get('/service', function () {
    return view('u2-service', [
        'title' => 'Service',
        'description' => 'Hier ist Service mit verschiedenen Projekten.'
    ]);
});



Route::get('/portfolio', function () {
    $title = 'Portfolio';
    $heading = 'Mein Portfolio';
    $content = 'Hier findet man Projekte.';
    return view('u2-portfolio', compact('title', 'heading', 'content'));
});

Route::get('/service', function () {
    $title = 'Service';
    $heading = 'Unsere Diensleistungen';
    $content = 'Wir bieten Webdesign, Hosting und mehr.';
    return view('u2-portfolio', compact('title', 'heading', 'content'));
});

