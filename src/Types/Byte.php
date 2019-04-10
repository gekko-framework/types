<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Byte extends Integer
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Byte::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Byte;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'int';
    }

}
