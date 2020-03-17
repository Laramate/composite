<?php

namespace Laramate\Composite;

class Path
{
    /**
     * Get package src path.
     *
     * @param string|null $path
     *
     * @return string
     */
    public static function src(?string $path = null): string
    {
        return static::concat(__DIR__, $path);
    }

    /**
     * Get package migrations path.
     *
     * @param string|null $path
     *
     * @return string
     */
    public static function migrations(?string $path = null): string
    {
        $base = static::src('Migrations');

        return static::concat($base, $path);
    }

    /**
     * Get package views path.
     *
     * @param string|null $path
     *
     * @return string
     */
    public static function views(?string $path = null): string
    {
        $base = static::src('Views');

        return static::concat($base, $path);
    }

    /**
     * Concat two paths.
     *
     * @param string      $path1
     * @param string|null $path2
     *
     * @return string
     */
    protected static function concat(string $path1, ?string $path2 = null)
    {
        return $path2
            ? sprintf('%s/%s', $path1, $path2)
            : $path1;
    }
}
