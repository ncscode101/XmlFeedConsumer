<?php

use Illuminate\Support\Facades\Route;
use ncscode101\XmlFeedConsumer\Http\Controllers\XmlFeedController;

Route::get('xml-feed', [XmlFeedController::class, 'index']);
