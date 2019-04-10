<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class DateTime extends Date
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\DateTime::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new DateTime;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return '\DateTime';
    }

}
