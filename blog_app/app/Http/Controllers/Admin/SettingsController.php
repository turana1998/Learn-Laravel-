<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Settings;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(): void
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Factory|View|Application
     */
    public function edit(int $id): Factory|View|Application
    {
        $setting=Settings::findOrFail($id);
        return view('admin.settings.edit')->with('setting',$setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SettingRequest $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(SettingRequest $request, int $id)
    {
        $setting=Settings::findOrFail($id);

        $validated=$request->all();
        $file=$request->file('logo');
        $file_name=$file->getClientOriginalName();
        Storage::disk('public')->makeDirectory('settings');
        $file->move(storage_path('app/public/settings'),$file_name);

        File::delete(storage_path('app/public/settings/'.$setting->logo));
        $validated['logo']=$file_name;

        $setting->update($validated);
        return redirect(route('settings.edit',$setting->id))->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
