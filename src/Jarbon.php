<?php


namespace Mokhosh\Jarbon;


use Carbon\Carbon;

class Jarbon extends Carbon
{
    public function __toString()
    {
        return JarbonUtils::format($this);
    }
}
