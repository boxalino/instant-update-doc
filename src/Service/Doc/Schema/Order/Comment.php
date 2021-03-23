<?php declare(strict_types=1);
namespace Boxalino\DataIntegrationDoc\Service\Doc\Schema\Order;

use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Typed\DatetimeAttribute;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Typed\NumericAttribute;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Typed\StringAttribute;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\TypedLocalized;
use Boxalino\DataIntegrationDoc\Service\Doc\DocPropertiesTrait;
use Boxalino\DataIntegrationDoc\Service\Doc\DocPropertiesInterface;

class Comment implements DocPropertiesInterface
{

    use DocPropertiesTrait;

    /**
     * @var string | null
     */
    protected $created;

    /**
     * @var string | null
     */
    protected $persona_id;

    /**
     * @var string | null
     */
    protected $persona_type;

    /**
     * @var string | null
     */
    protected $comment;

    /**
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * @param string|null $created
     * @return Comment
     */
    public function setCreated(?string $created): Comment
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPersonaId(): ?string
    {
        return $this->persona_id;
    }

    /**
     * @param string|null $persona_id
     * @return Comment
     */
    public function setPersonaId(?string $persona_id): Comment
    {
        $this->persona_id = $persona_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPersonaType(): ?string
    {
        return $this->persona_type;
    }

    /**
     * @param string|null $persona_type
     * @return Comment
     */
    public function setPersonaType(?string $persona_type): Comment
    {
        $this->persona_type = $persona_type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     * @return Comment
     */
    public function setComment(?string $comment): Comment
    {
        $this->comment = $comment;
        return $this;
    }


}
