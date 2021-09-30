<?php

namespace App\Http\Controllers;

use App\Models\SiteImage;
use Illuminate\Http\Request;

class SiteImageController extends Controller
{
    /**
     * Show the form for editing resource.
     */
    public function edit()
    {
        $data['resources'] = SiteImage::all();
        return view('@dashboard.site_image.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteImage $site_file)
    {
        $data['resource'] = $site_file;

        // Return
        if(!$data['resource']){
            return redirect()->back()->with('message',[
                'type'=>'danger',
                'text'=>'Sorry! file not exists.'
            ]);
        }

        $resource = $data['resource']->update([
            'title' => $request->title,
            'file' => $request->file,
        ]);

        // Return
        if($resource){
            return redirect(route('dashboard.site_file.edit'))->with('message', [
                'type' => 'success',
                'text' => 'Updated successfully'
            ]);
        }else{
            return back()->with('message', [
                'type' => 'error',
                'text' => 'Error!, Please try again.'
            ]);
        }
    }
}
