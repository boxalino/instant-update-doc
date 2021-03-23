<?php declare(strict_types=1);
namespace Boxalino\DataIntegrationDoc\Service\Integration;

use Boxalino\DataIntegrationDoc\Service\Doc\DocSchemaPropertyHandlerInterface;
use Boxalino\DataIntegrationDoc\Service\Integration\Doc\DocHandlerInterface;

/**
 * Trait DocIntegrationTrait
 *
 * @package Boxalino\DataIntegrationDoc\Service\Integration
 */
trait DocIntegrationTrait
{

    /**
     * @var \ArrayIterator
     */
    protected $attributeHandlerList;

    /**
     * @var null
     */
    protected $docData = null;

    /**
     * Dynamically configure the attribute handlers for every data type to be retrieved
     * (the handler must have DB access information for the attribute element data)
     *
     * @param DocSchemaPropertyHandlerInterface $attributeHandler
     * @return DocHandlerInterface
     */
    public function addHandler(DocSchemaPropertyHandlerInterface $attributeHandler) : DocHandlerInterface
    {
        $this->attributeHandlerList->append($attributeHandler);
        return $this;
    }

    /**
     * @return \ArrayIterator
     */
    public function getHandlers() : \ArrayIterator
    {
        return $this->attributeHandlerList;
    }

    /**
     * Create the content (based on the IDs to be updated)
     *
     * Structure of the array:
     * [product1=>[property1=>property1schema, property2=>property2schema,[..]],..]
     *
     * @return array
     */
    public function generateDocData() : array
    {
        if(is_null($this->docData))
        {
            $data = [];
            foreach($this->getHandlers() as $handler)
            {
                if($handler instanceof DocSchemaPropertyHandlerInterface)
                {
                    $data = array_merge_recursive($data, $handler->getValues());
                }
            }

            $this->docData = $data;
        }

        return $this->docData;
    }
}
