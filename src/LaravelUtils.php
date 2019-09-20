<?php


namespace Mokhosh\Jarbon;


use Illuminate\Support\Str;

class LaravelUtils
{
    public static function isInsideBlade()
    {
        $is_inside_blade = false;
        try {
            $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 4);
            $is_inside_blade = $trace[2]['function'] === 'htmlspecialchars';
            $file = $trace[3]['file'];
            $is_inside_blade = $is_inside_blade || Str::contains($file, '\\views\\') || Str::contains($file, '/views/');
        } catch (\Exception $exception) {}

        return $is_inside_blade;
    }

    public static function getParentFile()
    {
        return debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2)[1]['file'];
    }
}
