<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Blob extends Type
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Blob::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Blob;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'string';
    }

}
