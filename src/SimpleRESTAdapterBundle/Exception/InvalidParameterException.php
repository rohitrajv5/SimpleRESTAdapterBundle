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

namespace CIHubPim11\Bundle\SimpleRESTAdapterBundle\Exception;

use Symfony\Component\HttpFoundation\Response;

final class InvalidParameterException extends \InvalidArgumentException implements EndpointExceptionInterface
{
    /**
     * @param array<int, string> $requiredParams
     * @param int                $code
     */
    public function __construct(array $requiredParams = [], int $code = Response::HTTP_BAD_REQUEST)
    {
        parent::__construct(sprintf('Required parameters: %s', implode(', ', $requiredParams)), $code);
    }
}
