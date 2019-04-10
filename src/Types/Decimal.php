<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Decimal extends Real
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Decimal::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Decimal;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'float';
    }

}
