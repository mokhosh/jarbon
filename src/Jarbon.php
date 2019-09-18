<?php


namespace Mokhosh\Jarbon;


use Carbon\Carbon;

class Jarbon extends Carbon
{
    public function __toString()
    {
        return JarbonUtils::format($this);
    }

    public function toString()
    {
        return JarbonUtils::format($this, '%T %A %e %B %Y');
    }
}
