<?php

namespace App\Dto\Abstracts;

use Illuminate\Contracts\Support\Arrayable;
use ReflectionClass;
use ReflectionProperty;

abstract class Dto
{
    /** @return ReflectionProperty[] */
    final protected static function properties(): array
    {
        return static::reflection()->getProperties(ReflectionProperty::IS_PUBLIC);
    }

    final protected static function reflection(): ReflectionClass
    {
        /** @throws never */
        return new ReflectionClass(static::class);
    }

    /** @return array<string|int, mixed> */
    public function toArray(): array
    {
        $properties = static::properties();
        $array = [];
        foreach ($properties as $property) {
            if (! $property->isInitialized($this)) {
                continue;
            }

            $name = $property->name;
            $value = $this->$name;

            if ($value instanceof Arrayable) {
                $value = $value->toArray();
            }

            $array[$name] = $value;
        }

        return $array;
    }
}
