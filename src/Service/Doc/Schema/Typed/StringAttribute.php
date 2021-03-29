<?php declare(strict_types=1);
namespace Boxalino\DataIntegrationDoc\Service\Doc\Schema\Typed;

use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Localized;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Repeated;

/**
 * Class StringAttribute
 *
 * @package Boxalino\DataIntegrationDoc\Service\Doc\Schema
 */
class StringAttribute extends Repeated
{

    /**
     * @var string
     */
    protected $type = "string";

    /**
     * @param string | null $value
     * @return $this
     */
    public function addValue(?string $value = null) : self
    {
        $this->values[] = (string) $value;
        return $this;
    }

}
