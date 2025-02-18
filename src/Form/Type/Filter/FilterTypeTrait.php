<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Form\Type\Filter;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
trait FilterTypeTrait
{
    protected static $uniqueAliasId = 0;

    /**
     * Generates dynamic alias from a given name.
     */
    protected static function createAlias(string $name): string
    {
        return \str_replace('.', '_', $name).'_'.++static::$uniqueAliasId;
    }
}
