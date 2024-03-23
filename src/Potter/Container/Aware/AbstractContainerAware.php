<?php

declare(strict_types=1);

namespace Potter\Container\Aware;

use \Psr\Container\ContainerInterface;

abstract class AbstractContainerAware implements ContainerAwareInterface
{
    abstract public function getContainer(): ContainerInterface;
    abstract public function hasContainer(): bool;
    abstract protected function setContainer(ContainerInterface $container): void;
    abstract protected function withContainer(ContainerInterface $container): ContainerAwareInterface;
    abstract protected function withoutContainer(): ContainerAwareInterface;
}