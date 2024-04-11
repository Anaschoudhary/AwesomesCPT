<?php


namespace Awesome_Plugin;


class Deactivator
{

    public static function deactivate(): void
    {
        flush_rewrite_rules();
    }
}
