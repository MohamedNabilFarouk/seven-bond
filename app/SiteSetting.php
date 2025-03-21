<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'site_settings';

    protected $guarded =[];

    public $timestamps = true;

    public function getLogoAttribute($value)
    {
        return asset('images/site/' . $value);
    } // end of get name attribute

    public function getFaviconAttribute($value)
    {
        return asset('images/site/' . $value);
    } // end of get name attribute
    public function getBannerAttribute($value)
    {
        return asset('images/site/' . $value);
    } // end of get name attribute
    public function getBannerVidAttribute($value)
    {
        return asset('site/' . $value);
    } // end of get name attribute
    public function getAboutSection1Image1Attribute($value)
    {
        return asset('images/site/' . $value);
    } // end of get name attribute
    public function getAboutSection1Image2Attribute($value)
    {
        return asset('images/site/' . $value);
    } // end of get name attribute
    public function getTeamSectionImageAttribute($value)
    {
        return asset('images/site/' . $value);
    } // end of get name attribute

}
