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

        return CalendarUtils::strftime($format, $carbon);
    }

    public static function getDefaultFormat()
    {
        return config('jarbon.default_format', 'Y-m-d H:i:s');
    }
}
