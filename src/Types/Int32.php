<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Int32 extends Integer
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Int32::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Int32;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'int';
    }

}
