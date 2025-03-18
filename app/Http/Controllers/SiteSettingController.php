<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\SiteSetting;
use App\SocialSetting;
use App\Traits\imagesTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SiteSettingController extends Controller
{
    use imagesTrait;

    public function generalShow()
    {
        $site_settings =  SiteSetting::first();

        return view('admin.settings.site.index', compact('site_settings'));

    } // end of index

    public function generalUpdate(Request $request)
    {
        //  return $request -> all();
        $site_settings = SiteSetting::findorFail(1);

        $request_data = $request->except(['_token', '_method', 'logo', 'favicon','about_section_1_image1','about_section_1_image2','banner','team_section_image','banner_vid']);

        foreach ($request_data as $index => $item) {
            if($request_data[$index] == null){
                $request_data[$index] = $site_settings[$index];
            }
        }

        if($request->has('logo')){
            if ($site_settings -> logo != 'default.png') {
                Storage::disk('public_uploads')->delete('site/' . $site_settings -> logo);
            } // end of inner if
            $logoPath = $this->saveImages( $request -> logo , 'images/site');
            $request_data['logo']= $logoPath;
        }
        if($request->has('banner_vid')){
            if ($site_settings -> banner_vid != 'defaultVid.png') {
                File::delete(public_path('site/'.basename($site_settings->banner_vid)));
                // Storage::disk('public')->delete($site_settings -> banner_vid);
            } // end of inner if
            $vidPath = $this->saveImages( $request -> banner_vid , 'site');
            $request_data['banner_vid']= $vidPath;
        }
        if($request->has('about_section_1_image1')){
            if ($site_settings -> about_section_1_image1 != 'default.png') {
                Storage::disk('public_uploads')->delete('site/' . $site_settings -> about_section_1_image1);
            } // end of inner if
            $aboutimg1Path = $this->saveImages( $request -> about_section_1_image1 , 'images/site');
            $request_data['about_section_1_image1']= $aboutimg1Path;
        }
        if($request->has('about_section_1_image2')){
            if ($site_settings -> about_section_1_image2 != 'default.png') {
                Storage::disk('public_uploads')->delete('site/' . $site_settings -> about_section_1_image2);
            } // end of inner if
            $aboutimg2Path = $this->saveImages( $request -> about_section_1_image2 , 'images/site');
            $request_data['about_section_1_image2']= $aboutimg2Path;
        }
        if($request->has('banner')){
            if ($site_settings -> banner != 'default.png') {
                Storage::disk('public_uploads')->delete('site/' . $site_settings -> banner);
            } // end of inner if
            $bannerPath = $this->saveImages( $request -> banner , 'images/site');
            $request_data['banner']= $bannerPath;
        }
        if($request->has('team_section_image')){
            if ($site_settings -> team_section_image != 'default.png') {
                Storage::disk('public_uploads')->delete('site/' . $site_settings -> team_section_image);
            } // end of inner if
            $teamPath = $this->saveImages( $request -> team_section_image , 'images/site');
            $request_data['team_section_image']= $teamPath;
        }

        if($request->has('favicon')){
            if ($site_settings -> favicon != 'favicon.png') {
                Storage::disk('public_uploads')->delete('site/' . $site_settings -> favicon);
            } // end of inner if
            $faviconPath = $this->saveImages( $request -> favicon , 'images/site');
            $request_data['favicon'] = $faviconPath;
        }

        $site_settings->update($request_data);

        session()->flash('success', trans('Updated Successfully'));
        return redirect()->back();

    } // end of index

    public function socialShow()
    {
        $social_settings =  SocialSetting::all();

        return view('admin.settings.social.index', compact('social_settings'));

    } // end of index

    public function socialUpdate(Request $request)
    {
        $social_settings = SocialSetting::all();

        $request_data = $request -> except('_token', '_method');

        foreach ($social_settings as $social){

            $values = [];
            $setting_key = $social_settings -> where('key', $social -> key)-> first() -> key;

            $values += [
                'key' => $setting_key,
                'value' => $request_data[$setting_key],
            ];

            $social -> update($values);

        }  // end of foreach

        session()->flash('success', trans('Updated Successfully'));
        return redirect()->route('settings.social.show');

    } // end of index

}
