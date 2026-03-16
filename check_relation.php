<?php
require 'vendor/autoload.php';
$app = require_once('bootstrap/app.php');
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\sarana;

$r = sarana::first();
var_export(['hasRelationCover' => $r->isRelation('cover')]);
echo "\n";
var_export(['getRelationValueCover' => $r->getRelationValue('cover')]);
echo "\n";

// also check attribute detection
var_export(['hasAttributeCover' => $r->hasAttribute('cover')]);
echo "\n";
