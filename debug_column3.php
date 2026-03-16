<?php
require 'vendor/autoload.php';
$app = require_once('bootstrap/app.php');
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\sarana;
use Filament\Tables\Columns\ImageColumn;
use Filament\Support\Concerns\HasCellState;

$col = ImageColumn::make('cover.image_path')->disk('public');
$r = sarana::with('cover')->first();

echo "---- record ----\n";
var_export($r->toArray());
echo "\n---- relation value ----\n";
var_export($r->getRelationValue('cover'));
echo "\n---- hasRelation? ----\n";
var_export($col->hasRelationship($r));
echo "\n---- fullAttrName ----\n";
// use reflection to call protected method? it's public in trait
echo $col->getFullAttributeName($r)."\n";

echo "---- relationship results ----\n";
var_export($col->getRelationshipResults($r));
echo "\n---- built state manually----\n";
$rel = $col->getRelationshipResults($r);
foreach($rel as $model) {
    echo 'rel model attr: '.data_get($model, 'image_path')."\n";
}

echo "---- getState() returned ----\n";
var_export($col->getState($r));

