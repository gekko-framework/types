<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Time extends Date
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Time::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Time;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return '\DateInterval';
    }

}
