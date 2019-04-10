<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Int16 extends Integer
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Int16::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Int16;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'int';
    }

}
