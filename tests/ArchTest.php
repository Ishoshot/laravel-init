<?php

declare(strict_types=1);

arch()->preset()->php();

arch()->preset()->security()->ignoring('assert');

arch()->preset()->laravel();

arch('strict types')
    ->expect('App')
    ->toUseStrictTypes();

arch('avoid open for extension')
    ->expect('App')
    ->classes()
    ->toBeFinal();

arch('ensure no extends')
    ->expect('App')
    ->classes()
    ->not->toBeAbstract();

arch('annotations')
    ->expect('App')
    ->toHavePropertiesDocumented()
    ->toHaveMethodsDocumented();
