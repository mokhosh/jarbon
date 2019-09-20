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
}
