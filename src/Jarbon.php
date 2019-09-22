<?php


namespace Mokhosh\Jarbon;


use Carbon\Carbon;

class Jarbon extends Carbon
{
    public function __toString()
    {
        return LaravelUtils::isInsideBlade() ? JarbonUtils::format($this) : parent::__toString();
    }

    public function toString()
    {
        return JarbonUtils::format($this, '%T %A %e %B %Y');
    }

    public function toDateString()
    {
        return JarbonUtils::format($this, 'Y-m-d');
    }
    public function toFormattedDateString()
    {
        return JarbonUtils::format($this, '%e %B Y');
    }

    public function toTimeString()
    {
        return JarbonUtils::format($this, '%T');
    }

    public function toDateTimeString()
    {
        return JarbonUtils::format($this, 'Y-m-d H:i:s');
    }

    public function toDayDateTimeString()
    {
        return JarbonUtils::format($this, '%A %e %B %Y %I:%M %P');
    }

    public function format($format)
    {
        return JarbonUtils::format($this, $format);
    }
}
