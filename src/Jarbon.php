<?php


namespace Mokhosh\Jarbon;


use Carbon\Carbon;

class Jarbon extends Carbon
{
    public function __toString()
    {
        return CalendarUtils::strftime('Y-m-d H:i:s', $this);
    }
}
