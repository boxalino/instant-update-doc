<?php declare(strict_types=1);
namespace Boxalino\DataIntegrationDoc\Service\Doc\Schema\Typed;

use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Repeated;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\RepeatedLocalized;

/**
 * Class NumericAttribute
 *
 * @package Boxalino\DataIntegrationDoc\Service\Doc\Schema
 */
class NumericLocalizedAttribute extends Repeated
{

    /**
     * @var string
     */
    protected $type = "numeric";

    /**
     * @var string
     */
    protected $key;

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return this
     */
    public function setKey(string $key): self
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param RepeatedLocalized $localizeds
     * @return $this
     */
    public function addValue(RepeatedLocalized $localized) : self
    {
        $this->values[] = $localized->toArray();
        return $this;
    }


}
