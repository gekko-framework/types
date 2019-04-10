<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Float32 extends Real
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Float32::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Float32;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'float';
    }

}
