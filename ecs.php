<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/config',
    ]);
    $ecsConfig->sets([
        SetList::ARRAY,
        SetList::STRICT,
        SetList::PSR_12,
        SetList::NAMESPACES,
        SetList::SPACES,
        SetList::CLEAN_CODE,
        SetList::PHPUNIT,
    ]);
};
