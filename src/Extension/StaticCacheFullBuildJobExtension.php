<?php

namespace SilverStripe\StaticPublishQueue\Subsites;

use SilverStripe\Core\Extension;
use SilverStripe\Subsites\Model\Subsite;

class StaticCacheFullBuildJobExtension extends Extension
{
    public function beforeGetAllLivePageURLs($urls)
    {
        Subsite::disable_subsite_filter(true);
        return $urls;
    }

    public function afterGetAllLivePageURLs($urls)
    {
        Subsite::disable_subsite_filter(false);
        return $urls;
    }
}
