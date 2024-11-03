<?php

/**
 * @noinspection StaticClosureCanBeUsedInspection
 */

use empaphy\phatch\Sorting\Type;

describe('Sorting Type', function () {
    test('regular',                  fn() => expect(Type::Regular->value)->toBe(SORT_REGULAR));
    test('case insensitive regular', fn() => expect(Type::RegularCaseInsensitive->value)->toBe(SORT_REGULAR | SORT_FLAG_CASE));
    test('numeric',                  fn() => expect(Type::Numeric->value)->toBe(SORT_NUMERIC));
    test('string',                   fn() => expect(Type::String->value)->toBe(SORT_STRING));
    test('case insensitive string',  fn() => expect(Type::StringCaseInsensitive->value)->toBe(SORT_STRING | SORT_FLAG_CASE));
    test('locale string',            fn() => expect(Type::LocaleString->value)->toBe(SORT_LOCALE_STRING));
    test('natural',                  fn() => expect(Type::Natural->value)->toBe(SORT_NATURAL));
});
