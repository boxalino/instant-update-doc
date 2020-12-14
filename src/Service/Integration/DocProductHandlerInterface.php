<?php declare(strict_types=1);
namespace Boxalino\InstantUpdate\Service\Integration;

use Boxalino\InstantUpdate\Service\Generator\Product\Doc;
use Boxalino\InstantUpdate\Service\Integration\DocProduct\AttributeHandlerInterface;

/**
 * Interface DocProductHandlerInterface
 *
 * @package Boxalino\InstantUpdate\Service\Integration
 */
interface DocProductHandlerInterface extends DocHandlerInterface
{

    public const DOC_TYPE = "doc_product";

    public const DOC_PRODUCT_LEVEL_SKU = 'skus';
    public const DOC_PRODUCT_LEVEL_LINE = 'product_line';
    public const DOC_PRODUCT_LEVEL_GROUP = 'product_groups';

    /**
     * @param AttributeHandlerInterface $attributeHandler
     * @return DocHandlerInterface
     */
    public function addHandler(AttributeHandlerInterface $attributeHandler) : DocHandlerInterface;

    /**
     * @return \ArrayIterator
     */
    public function getHandlers() : \ArrayIterator;

}
