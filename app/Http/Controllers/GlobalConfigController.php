<?php

namespace App\Http\Controllers;

use App\Models\GlobalConfig;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;

class GlobalConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.config.global-config');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GlobalConfig $globalConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GlobalConfig $globalConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'website_logo' => 'nullable|image|max:10000',
            "website_title" => 'required|string|max:255',
            "contact_number" => 'required|string|max:20',
            "contact_email" => 'required|email|max:255',
            "contact_address" => 'required|string|max:500',
            "facebook_page" => 'nullable|url|max:255',
            "instagram_page" => 'nullable|url|max:255',
        ]);

        $request->request->remove('_token');
        $dirty = false;
        foreach ($request->all() as $key => $value) {
            $currentValue = getGlobalConfig($key); // Or however your config is stored
            if ((string) $currentValue !== (string) $value) {
                $this->GlobalConfigUpdate($key, $value);
                $dirty = true;
            }
        }
        if ($dirty) {
            Flasher::success('Global Config update successfully.');
        } else {
            Flasher::info('No changes made to Global Config.');
        }
        return redirect(route('global-config'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GlobalConfig $globalConfig)
    {
        //
    }
    private function GlobalConfigUpdate($key, $value)
    {
        $config = GlobalConfig::where('key', $key)->first();

        if ($config != null) {
            $config->value = is_array($value) ? implode(',', $value) : $value;

            return $config->save();
        } else {
            $config = new GlobalConfig();
            $config->key = $key;
            $config->value = is_array($value) ? implode(',', $value) : $value;
            return $config->save();
        }
    }
}
