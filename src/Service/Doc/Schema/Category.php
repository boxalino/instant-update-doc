<?php declare(strict_types=1);
namespace Boxalino\InstantUpdate\Service\Doc\Schema;

use Boxalino\InstantUpdate\Service\DocPropertiesTrait;

class Category implements \JsonSerializable, DocSchemaDefinitionInterface
{

    use DocPropertiesTrait;

    /**
     * @var string | null
     */
    protected $categorization;

    /**
     * @var Array<<Localized>>
     */
    protected $category_ids;

    /**
     * @return string|null
     */
    public function getCategorization(): ?string
    {
        return $this->categorization;
    }

    /**
     * @param string|null $categorization
     * @return Category
     */
    public function setCategorization(?string $categorization): Category
    {
        $this->categorization = $categorization;
        return $this;
    }

    /**
     * @return Array
     */
    public function getCategoryIds(): array
    {
        return $this->category_ids;
    }

    /**
     * @param Array $category_ids
     * @return Category
     */
    public function setCategoryIds(array $category_ids): Category
    {
        $this->category_ids = $category_ids;
        return $this;
    }

    /**
     * @param Localized $category
     * @return $this
     */
    public function addCategoryId(Localized $category)
    {
        $this->category_ids[] = $category;
        return $this;
    }


}
