<?php

namespace Mokhosh\Jarbon;

trait JarbonTrait
{
    public function freshTimestamp()
    {
        return new Jarbon;
    }

    protected function asDateTime($value)
    {
        if (is_numeric($value)) {
            return Jarbon::createFromTimestamp($value);
        } elseif (preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $value)) {
            return Jarbon::createFromFormat('Y-m-d', $value)->startOfDay();
        } elseif (! $value instanceof DateTime) {
            $format = $this->getDateFormat();
            return Jarbon::createFromFormat($format, $value);
        }
        return Jarbon::instance($value);
    }
}
