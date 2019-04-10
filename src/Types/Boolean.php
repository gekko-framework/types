<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Boolean extends Type
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Boolean::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Boolean;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'boolean';
    }

}
