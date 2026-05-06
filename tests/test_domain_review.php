<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(47, 28, 10, 61);
assert(DomainReviewLens::score($item) === 153);
assert(DomainReviewLens::lane($item) === "ship");
