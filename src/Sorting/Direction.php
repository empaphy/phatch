<?php

declare(strict_types=1);

namespace empaphy\phatch\Sorting;

enum Direction: int
{
    case Ascending = +1;
    case Descending = -1;
}
