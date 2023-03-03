<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Middleware\Debug;

use Doctrine\DBAL\Driver as DriverInterface;
use Doctrine\DBAL\Driver\Middleware\AbstractDriverMiddleware;
use Symfony\Component\Stopwatch\Stopwatch;

/**
 * @author Laurent VOULLEMIER <laurent.voullemier@gmail.com>
 *
 * @internal
 */
final class Driver extends AbstractDriverMiddleware
{
    private $debugDataHolder;
    private $stopwatch;
    private $connectionName;

    public function __construct(DriverInterface $driver, DebugDataHolder $debugDataHolder, ?Stopwatch $stopwatch, string $connectionName)
    {
        parent::__construct($driver);

        $this->debugDataHolder = $debugDataHolder;
        $this->stopwatch = $stopwatch;
        $this->connectionName = $connectionName;
    }

    public function connect(array $params): Connection
    {
        return new Connection(
            parent::connect($params),
            $this->debugDataHolder,
            $this->stopwatch,
            $this->connectionName
        );
    }
}
