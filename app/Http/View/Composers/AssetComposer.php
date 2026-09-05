<?php

namespace App\Http\View\Composers;

use App\Models\Setting;
use Illuminate\View\View;

class AssetComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $site_assets = Setting::whereIn('group', ['home', 'about', 'contact', 'course', 'footer'])
                            ->pluck('value', 'key');
        
        $view->with('site_assets', $site_assets);
    }
}
