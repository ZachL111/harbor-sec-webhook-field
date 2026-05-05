<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(56, 70, 8, 9, 10);
assert(Policy::score($signal_case_1) === 161);
assert(Policy::classify($signal_case_1) === "accept");
$signal_case_2 = new Signal(81, 86, 25, 5, 7);
assert(Policy::score($signal_case_2) === 201);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(84, 98, 10, 11, 6);
assert(Policy::score($signal_case_3) === 215);
assert(Policy::classify($signal_case_3) === "accept");
