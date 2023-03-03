<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Doctrine;

use Symfony\Bundle\MakerBundle\Str;

/**
 * @internal
 */
final class RelationOneToMany extends BaseCollectionRelation
{
    public function getTargetGetterMethodName(): string
    {
        return 'get'.Str::asCamelCase($this->getTargetPropertyName());
    }

    public function getTargetSetterMethodName(): string
    {
        return 'set'.Str::asCamelCase($this->getTargetPropertyName());
    }

    public function isMapInverseRelation(): bool
    {
        throw new \Exception('OneToMany IS the inverse side!');
    }
}
