<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types\Mappers;

interface ITypeMapper
{
    function mapFrom(\Gekko\Types\Type $type) : string;
    function mapTo(string $type) : \Gekko\Types\Type;
}
