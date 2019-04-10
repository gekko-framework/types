<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Int64 extends Integer
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Int64::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Int64;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'int';
    }

}
