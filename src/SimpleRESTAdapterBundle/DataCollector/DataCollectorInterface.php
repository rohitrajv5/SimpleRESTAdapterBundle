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

namespace CIHubPim11\Bundle\SimpleRESTAdapterBundle\DataCollector;

use CIHubPim11\Bundle\SimpleRESTAdapterBundle\Reader\ConfigReader;

interface DataCollectorInterface
{
    /**
     * Collects the data appropriate for the provided value and config.
     *
     * @param mixed        $value
     * @param ConfigReader $reader
     *
     * @return array<int|string, mixed>
     */
    public function collect($value, ConfigReader $reader): array;

    /**
     * Checks if the current data collector supports the provided value.
     *
     * @param mixed $value
     *
     * @return bool
     */
    public function supports($value): bool;
}
