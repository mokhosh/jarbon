<?php


namespace Mokhosh\Jarbon;


use Illuminate\Http\Request;

class JarbonStatusController
{
    public function __invoke(Request $request)
    {
        return response()->json([
            'timezone' => config('app.timezone') === 'Asia/Tehran' ? 'ok' : 'Change config.app.timezone to Asia/Tehran',
            'locale' => in_array(config('app.locale'), ['fa', 'fa_IR']) ? 'ok' : 'Change config.app.locale to fa',
        ]);
    }
}
