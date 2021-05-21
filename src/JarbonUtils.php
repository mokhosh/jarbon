<?php

namespace Mokhosh\Jarbon;

use Carbon\Carbon;

class JarbonUtils
{
    public static function format(Carbon $carbon, string $format = null)
    {
        if (is_null($format)) {
            $format = static::getDefaultFormat();
        }

        $date = CalendarUtils::strftime($format, $carbon);

        return static::getShouldConvertNumbers() ? static::convertNumbers($date) : $date;
    }

    public static function convertNumbers(string $date)
    {
        return CalendarUtils::convertNumbers($date);
    }

    public static function getDefaultFormat()
    {
        return config('jarbon.default_format', 'Y-m-d H:i:s');
    }

    public static function getShouldConvertNumbers()
    {
        return config('jarbon.convert_numbers', false);
    }
}
