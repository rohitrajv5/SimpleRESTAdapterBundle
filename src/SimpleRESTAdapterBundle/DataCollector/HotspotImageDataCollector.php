<?php

/**
 * Simple REST Adapter.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2021 CI HUB GmbH (https://ci-hub.com)
 * @license    https://github.com/ci-hub-gmbh/SimpleRESTAdapterBundle/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

namespace Rohit\Bundle\SimpleRESTAdapterBundle\DataCollector;

use Pimcore\Model\Asset;
use Pimcore\Model\DataObject\Data\Hotspotimage;
use Rohit\Bundle\SimpleRESTAdapterBundle\Reader\ConfigReader;

final class HotspotImageDataCollector implements DataCollectorInterface
{
    /**
     * @var ImageDataCollector
     */
    private $imageDataCollector;

    /**
     * @param ImageDataCollector $imageDataCollector
     */
    public function __construct(ImageDataCollector $imageDataCollector)
    {
        $this->imageDataCollector = $imageDataCollector;
    }

    /**
     * {@inheritdoc}
     */
    public function collect($value, ConfigReader $reader): array
    {
        $image = $value->getImage();

        if (!$image instanceof Asset\Image) {
            return [];
        }

        return $this->imageDataCollector->collect($image, $reader);
    }

    /**
     * {@inheritdoc}
     */
    public function supports($value): bool
    {
        return $value instanceof Hotspotimage;
    }
}
