<?php

declare(strict_types=1);

namespace Potter\Container\Aware;

use \Psr\Container\ContainerInterface;

interface ContainerAwareInterface
{    
    public function getContainer(): ContainerInterface;
    public function hasContainer(): bool;
}