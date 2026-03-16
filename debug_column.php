<?php
require 'vendor/autoload.php';
$app = require_once('bootstrap/app.php');
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\sarana;
use Filament\Tables\Columns\ImageColumn;

$col = ImageColumn::make('cover.image_path')->disk('public')->circular()->height(80)->width(80);
$r = sarana::with('cover')->first();

echo "Record cover? ".($r->cover ? 'yes':'no')."\n";
echo "Cover path: ".($r->cover?->image_path)."\n";
echo "getState(): ".var_export($col->getState($r), true)."\n";
