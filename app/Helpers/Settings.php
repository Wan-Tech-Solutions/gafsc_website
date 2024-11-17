<?php

use App\Models\Settings;
use Symfony\Component\HttpFoundation\Response;

function settings()
{
    return Settings::query();
}

function system_set($key, $value, $flatten = false)
{
    Settings::updateOrCreate([
        'key' => $key,
    ], [
        'configs' => $flatten ? collect($value)->flatten()->toArray() : $value,
    ]);

    return response()->json([], Response::HTTP_OK);
}

function system_get($key)
{
    $settings = Settings::where(['key' => $key])->first();

    if (! empty($settings)) {
        return  $settings->value;
    }
}

function system_all()
{
    try {
        $settings = Settings::all();
        foreach ($settings as $setting) {
            $config[$setting->key] = $setting->value;
        }

        return  $config ?? [];
    } catch (\Throwable $th) {
        //throw $th;
    }
}
