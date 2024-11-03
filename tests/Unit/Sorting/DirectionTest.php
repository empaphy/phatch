<?php

/**
 * @noinspection PhpFullyQualifiedNameUsageInspection
 * @noinspection StaticClosureCanBeUsedInspection
 */

describe('Sorting Direction', function () {
    test('ascending', function () {
        expect(\empaphy\phatch\Sorting\Direction::Ascending->value)->toBe(+1);
    });

    test('descending', function () {
        expect(\empaphy\phatch\Sorting\Direction::Descending->value)->toBe(-1);
    });
});
