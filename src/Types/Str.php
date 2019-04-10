<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

abstract class Str extends Type
{
    
    public function raw() : string
    {
        return 'string';
    }

}
