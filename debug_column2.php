<?php
require 'vendor/autoload.php';
$app = require_once('bootstrap/app.php');
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\sarana;
use Filament\Tables\Columns\ImageColumn;

$col1 = ImageColumn::make('cover.image_path')->disk('public');
$col2 = ImageColumn::make('image_path')
    ->disk('public')
    ->getStateUsing(fn($record) => $record->cover?->image_path);

$r = sarana::with('cover')->first();
echo "record cover? ".($r->cover?'yes':'no')."\n";
echo "col1 state: ".var_export($col1->getState($r), true)."\n";
echo "col2 state: ".var_export($col2->getState($r), true)."\n";
