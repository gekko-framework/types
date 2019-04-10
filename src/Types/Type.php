<?php
/*
* (c) Leonardo Brugnara
*
* Full copyright and license information in LICENSE file.
*/

namespace Gekko\Types;

use \Gekko\Serialization\IJsonSerializable;
use \Gekko\Serialization\JsonDescriptor;

class Type implements IJsonSerializable
{
    /**
     * Implements jsonSerialize
     */
    use \Gekko\Serialization\JsonSerializable;

    private $name;

    protected function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function new(string $name) : self
    {
        switch ($name)
        {
            case \Gekko\Types\Binary::class:
                return \Gekko\Types\Binary::instance();

            case \Gekko\Types\Blob::class:
                return \Gekko\Type\Blob::instance();

            case \Gekko\Types\Boolean::class:
                return \Gekko\Types\Boolean::instance();

            case \Gekko\Types\Byte::class:
                return \Gekko\Types\Byte::instance();

            case \Gekko\Types\Int16::class:
                return \Gekko\Types\Int16::instance();

            case \Gekko\Types\Int32::class:
                return \Gekko\Types\Int32::instance();

            case \Gekko\Types\Int64::class:
                return \Gekko\Types\Int64::instance();

            case \Gekko\Types\Float32::class:
                return \Gekko\Types\Float32::instance();

            case \Gekko\Types\Double64::class:
                return \Gekko\Types\Double64::instance();

            case \Gekko\Types\Decimal::class:
                return \Gekko\Types\Decimal::instance();

            case \Gekko\Types\Char::class:
                return \Gekko\Types\Char::instance();

            case \Gekko\Types\Varchar::class:
                return \Gekko\Types\Varchar::instance();

            case \Gekko\Types\Text::class:
            case \Gekko\Types\Str::class:
                return \Gekko\Types\Text::instance();

            case \Gekko\Types\Time::class:
                return \Gekko\Types\Time::instance();

            case \Gekko\Types\Timestamp::class:
                return \Gekko\Types\Timestamp::instance();

            case \Gekko\Types\DateTime::class:
                return \Gekko\Types\DateTime::instance();
        }

        return new Type($name);
    }

    public function __toString()
    {
        return $this->name;
    }

    public function raw() : string
    {
        return $this->name;
    }

    /**
     * Type can be serialized/deserialized to JSON
     * this method return a JsonDescriptor indicating the fields
     * to save/restore 
     */
    public function getJsonDescriptor() : JsonDescriptor
    {
        $d = new JsonDescriptor();

        $d->property("name")->string();

        return $d;
    }
}
