<?php

/**
 * Hook for Subsites and StaticPublishQueue on SS4.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package AndrewAndante\StaticPublishQueueSubsites
 * @author Andrew Aitken-Fincham <andrew@silverstripe.com>
 * @copyright 2018 SilverStripe
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/andrewandante/silverstripe-staticpublishqueuesubsites
 */

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\StaticPublishQueue\Extension\Publishable\PublishableSiteTree;
use SilverStripe\StaticPublishQueue\Subsites\SubsitesPublishableSiteTree;

SiteTree::remove_extension(PublishableSiteTree::class);
SiteTree::add_extension(SubsitesPublishableSiteTree::class);
