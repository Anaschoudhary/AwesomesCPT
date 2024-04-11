<?php


namespace Awesome_Plugin;


class Activator
{

    public static function activate(): void
    {
        flush_rewrite_rules();
    }
}
