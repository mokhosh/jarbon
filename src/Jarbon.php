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
}
