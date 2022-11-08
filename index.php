<?php
require('vendor/autoload.php');
use Carbon\Carbon;

$cacl = new App\Calcule();
echo $cacl->add(4, 756);


printf("Right now is %s", Carbon::now()->toDateTimeString());
printf("Right now in Vancouver is %s", Carbon::now('America/Vancouver'));  //implicit __toString()