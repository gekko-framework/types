<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Varchar extends Str
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Varchar::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Varchar;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'string';
    }

}
