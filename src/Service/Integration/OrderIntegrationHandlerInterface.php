<?php declare(strict_types=1);
namespace Boxalino\DataIntegrationDoc\Service\Integration;

/**
 * Interface OrderIntegrationHandlerInterface
 *
 * @package Boxalino\DataIntegrationDoc\Service\Integration
 */
interface OrderIntegrationHandlerInterface
    extends IntegrationHandlerInterface
{
    public const INTEGRATION_TYPE="order";

    public const INTEGRATION_MODE="F";

}
