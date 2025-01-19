<?php

// Menggunakan bootstrap Laravel tanpa perlu masuk ke public/index.php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

// Menjalankan aplikasi Laravel
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Mengirim response ke browser
$response->send();

// Menyelesaikan request
$kernel->terminate($request, $response);