<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Binary extends Type
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Binary::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Binary;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'string';
    }

}
