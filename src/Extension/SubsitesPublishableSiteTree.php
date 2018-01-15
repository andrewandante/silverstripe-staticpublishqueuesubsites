<?php

namespace SilverStripe\StaticPublishQueue\Subsites;

use SilverStripe\Control\Controller;
use SilverStripe\Control\Director;
use SilverStripe\StaticPublishQueue\Extension\Publishable\PublishableSiteTree;
use SilverStripe\Subsites\Extensions\SiteTreeSubsites;

class SubsitesPublishableSiteTree extends PublishableSiteTree
{
    /**
     * Get all the appropriate Subsite Domains for this URL.
     */
    public function urlsToCache()
    {
        if ($this->getOwner()->hasExtension(SiteTreeSubsites::class)
            && $subsite = $this->getOwner()->Subsite()) {
            $urls = [];
            foreach ($subsite->Domains() as $domain) {
                $urls[Director::absoluteURL(
                    Controller::join_links(
                        $domain->Domain,
                        $this->getOwner()->RelativeLink()
                    )
                )] = 0;
            }
            return $urls;
        } else {
            return [Director::absoluteURL($this->getOwner()->Link()) => 0];
        }
    }
}
