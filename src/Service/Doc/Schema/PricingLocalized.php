<?php declare(strict_types=1);
namespace Boxalino\InstantUpdate\Service\Doc\Schema;

use Boxalino\InstantUpdate\Service\DocPropertiesTrait;

class PricingLocalized extends PriceLocalized
{

    /**
     * @var string
     */
    protected $label;


    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }


}