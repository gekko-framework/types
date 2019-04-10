<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

class Text extends Str
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct(\Gekko\Types\Text::class);
    }

    public static function instance() : Type
    {
        if (self::$instance == null)
            self::$instance = new Text;
        return self::$instance;
    }
    
    public function raw() : string
    {
        return 'string';
    }

}
