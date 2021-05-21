<?php

namespace Mokhosh\Jarbon;

use Carbon\Carbon;

class Jarbon extends Carbon
{
    public function toDefaultString()
    {
        return JarbonUtils::format($this);
    }

    public function toJString()
    {
        return JarbonUtils::format($this, '%T %A %e %B %Y');
    }

    public function toJDateString()
    {
        return JarbonUtils::format($this, 'Y-m-d');
    }
    public function toJFormattedDateString()
    {
        return JarbonUtils::format($this, '%e %B Y');
    }

    public function toJTimeString()
    {
        return JarbonUtils::format($this, '%T');
    }

    public function toJDateTimeString()
    {
        return JarbonUtils::format($this, 'Y-m-d H:i:s');
    }

    public function toJDayDateTimeString()
    {
        return JarbonUtils::format($this, '%A %e %B %Y %I:%M %P');
    }

    public function jormat($format)
    {
        return JarbonUtils::format($this, $format);
    }
}
