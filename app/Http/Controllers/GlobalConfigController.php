<?php

namespace App\Http\Controllers;

use App\Models\GlobalConfig;
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
        $request->validate([
            'placement_types' => 'nullable|string|max:10000',
        ]);

        $request->request->remove('_token');
        $dirty = false;
        foreach ($request->all() as $key => $value) {


            $submitted = $request->input($key) ?? '';
            $submittedValues = array_map('trim', explode(',', $submitted));

            $currentRaw = getGlobalConfig($key);
            $currentValues = array_map('trim', explode(',', $currentRaw));

            $removedValues = array_diff($currentValues, $submittedValues);

            foreach ($removedValues as $value) {
                // Example: checking if any user has this role
                $inUse = false;

                if ($key === 'roles' && \App\Models\User::where('role', $value)->exists()) {
                    $inUse = true;
                }

                if ($key === 'designations' && \App\Models\User::where('designation', $value)->exists()) {
                    $inUse = true;
                }

                // if ($key === 'placement_types' && \App\Models\Task::where('placement_type', $value)->exists()) {
                //     $inUse = true;
                // }

                if ($inUse) {
                    $blocked[] = $value;
                }
            }

            if (empty($blocked)) {
                if ((string) $currentRaw !== (string) $submitted) {
                    $this->GlobalConfigUpdate($key, implode(',', $submittedValues));
                    $dirty = true;
                }
            }
            // $currentValue = getGlobalConfig($key); // Or however your config is stored
            // if ((string) $currentValue !== (string) $value) {
            //     $this->GlobalConfigUpdate($key, $value);
            //     $dirty = true;
            // }
        }
        if (!empty($blocked)) {
            return redirect()->back()->with('error', 'Cannot remove in-use values: ' . implode(', ', $blocked));
        }
        if ($dirty) {
            return redirect()->back()->with('success', trans('app.message.update.success'));
        } else {

            return redirect()->back()->with('warning', trans('app.message.no-change'));
        }
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
