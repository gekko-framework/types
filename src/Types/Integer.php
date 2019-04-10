<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

abstract class Integer extends Type
{
    
    public function raw() : string
    {
        return 'int';
    }

}
