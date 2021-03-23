<?php declare(strict_types=1);
namespace Boxalino\DataIntegrationDoc\Service\Doc;

use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Typed\DatetimeAttribute;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Repeated;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Typed\NumericAttribute;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Typed\StringAttribute;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\TypedLocalized;
use Boxalino\DataIntegrationDoc\Service\Doc\DocPropertiesTrait;
use Boxalino\DataIntegrationDoc\Service\Doc\Schema\Order\Comment;

class Order implements DocPropertiesInterface
{
    use DocPropertiesTrait;

    /**
     * @var string
     */
    protected $internal_id;

    /**
     * @var string | null
     */
    protected $external_id;

    /**
     * @var string | null
     */
    protected $parent_order_id;

    /**
     * @var string | null
     */
    protected $persona_type;

    /**
     * @var string
     */
    protected $persona_id;

    /**
     * @var string | null
     */
    protected $order_sys_cd = "ECM";

    /**
     * @var string | null
     */
    protected $seller_persona_type;

    /**
     * @var string | null
     */
    protected $seller_persona_id;

    /**
     * @var string | null
     */
    protected $currency_cd;

    /**
     * @var int
     */
    protected $total_crncy_amt;

    /**
     * @var int | null
     */
    protected $total_crncy_amt_net;

    /**
     * @var int | null
     */
    protected $total_gross_margin_crncy_amt;

    /**
     * @var int | null
     */
    protected $total_net_margin_crncy_amt;

    /**
     * @var int | null
     */
    protected $shipping_costs_net;

    /**
     * @var int | null
     */
    protected $currency_factor;

    /**
     * @var bool | null
     */
    protected $tax_free;

    /**
     * @var int | null
     */
    protected $tax_rate;

    /**
     * @var int | null
     */
    protected $tax_amnt;

    /**
     * @var string | null
     */
    protected $payment_method;

    /**
     * @var string | null
     */
    protected $shipping_method;

    /**
     * @var string | null
     */
    protected $shipping_description;

    /**
     * @var string | null
     */
    protected $device;

    /**
     * @var string | null
     */
    protected $referer;

    /**
     * @var string | null
     */
    protected $partner;

    /**
     * @var string | null
     */
    protected $language;

    /**
     * @var string | null
     */
    protected $tracking_code;

    /**
     * @var bool | null
     */
    protected $is_gift;

    /**
     * @var bool | null
     */
    protected $wrapping;

    /**
     * @var string | null
     */
    protected $email;

    /**
     * @var Array<<Comment>> | array
     */
    protected $comments = [];

    /**
     * @var Array<<Comment>> | array
     */
    protected $internal_comments = [];

    /**
     * @var Array<<Comment>> | array
     */
    protected $customer_comments = [];

    /**
     * @var Array<<Contact>> | array
     */
    protected $contacts = [];

    /**
     * @var string | datetime | null
     */
    protected $creation;

    /**
     * @var string | datetime | null
     */
    protected $last_update;

    /**
     * @var string | datetime| null
     */
    protected $confirmation;

    /**
     * @var string | datetime | null
     */
    protected $cleared;

    /**
     * @var string | datetime | null
     */
    protected $sent;

    /**
     * @var string | datetime | null
     */
    protected $received;

    /**
     * @var string | datetime | null
     */
    protected $returned;

    /**
     * @var string | datetime | null
     */
    protected $repaired;

    /**
     * @var bool | null
     */
    protected $status;

    /**
     * @var string | null
     */
    protected $status_code;

    /**
     * @var Array<<StringAttribute>>
     */
    protected $string_attributes = [];

    /**
     * @var Array<<TypedLocalized>>
     */
    protected $localized_string_attributes = [];

    /**
     * @var Array<<NumericAttribute>>
     */
    protected $numeric_attributes = [];

    /**
     * @var Array<<TypedLocalized>>
     */
    protected $localized_numeric_attributes = [];

    /**
     * @var Array<<DatetimeAttribute>>
     */
    protected $datetime_attributes = [];

    /**
     * @var Array<<TypedLocalized>>
     */
    protected $localized_datetime_attributes = [];

    /**
     * @var Array<<\Boxalino\DataIntegrationDoc\Service\Doc\Schema\Order\Product>>
     */
    protected $products = [];

    /**
     * @var Array<<\Boxalino\DataIntegrationDoc\Service\Doc\Schema\Order\Voucher>>
     */
    protected $vouchers = [];

    /**
     * @var string
     */
    protected $created_tm;

    /**
     * @var int
     */
    protected $client_id = 0;

    /**
     * @var int
     */
    protected $src_sys_id = 0;

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internal_id;
    }

    /**
     * @param string $internal_id
     * @return Order
     */
    public function setInternalId(string $internal_id): Order
    {
        $this->internal_id = $internal_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->external_id;
    }

    /**
     * @param string|null $external_id
     * @return Order
     */
    public function setExternalId(?string $external_id): Order
    {
        $this->external_id = $external_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getParentOrderId(): ?string
    {
        return $this->parent_order_id;
    }

    /**
     * @param string|null $parent_order_id
     * @return Order
     */
    public function setParentOrderId(?string $parent_order_id): Order
    {
        $this->parent_order_id = $parent_order_id;
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
     * @return Order
     */
    public function setPersonaType(?string $persona_type): Order
    {
        $this->persona_type = $persona_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonaId(): string
    {
        return $this->persona_id;
    }

    /**
     * @param string $persona_id
     * @return Order
     */
    public function setPersonaId(string $persona_id): Order
    {
        $this->persona_id = $persona_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderSysCd(): ?string
    {
        return $this->order_sys_cd;
    }

    /**
     * @param string|null $order_sys_cd
     * @return Order
     */
    public function setOrderSysCd(?string $order_sys_cd): Order
    {
        $this->order_sys_cd = $order_sys_cd;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSellerPersonaType(): ?string
    {
        return $this->seller_persona_type;
    }

    /**
     * @param string|null $seller_persona_type
     * @return Order
     */
    public function setSellerPersonaType(?string $seller_persona_type): Order
    {
        $this->seller_persona_type = $seller_persona_type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSellerPersonaId(): ?string
    {
        return $this->seller_persona_id;
    }

    /**
     * @param string|null $seller_persona_id
     * @return Order
     */
    public function setSellerPersonaId(?string $seller_persona_id): Order
    {
        $this->seller_persona_id = $seller_persona_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCd(): ?string
    {
        return $this->currency_cd;
    }

    /**
     * @param string|null $currency_cd
     * @return Order
     */
    public function setCurrencyCd(?string $currency_cd): Order
    {
        $this->currency_cd = $currency_cd;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCrncyAmt(): int
    {
        return $this->total_crncy_amt;
    }

    /**
     * @param int $total_crncy_amt
     * @return Order
     */
    public function setTotalCrncyAmt(int $total_crncy_amt): Order
    {
        $this->total_crncy_amt = $total_crncy_amt;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalCrncyAmtNet(): ?int
    {
        return $this->total_crncy_amt_net;
    }

    /**
     * @param int|null $total_crncy_amt_net
     * @return Order
     */
    public function setTotalCrncyAmtNet(?int $total_crncy_amt_net): Order
    {
        $this->total_crncy_amt_net = $total_crncy_amt_net;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalGrossMarginCrncyAmt(): ?int
    {
        return $this->total_gross_margin_crncy_amt;
    }

    /**
     * @param int|null $total_gross_margin_crncy_amt
     * @return Order
     */
    public function setTotalGrossMarginCrncyAmt(?int $total_gross_margin_crncy_amt): Order
    {
        $this->total_gross_margin_crncy_amt = $total_gross_margin_crncy_amt;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalNetMarginCrncyAmt(): ?int
    {
        return $this->total_net_margin_crncy_amt;
    }

    /**
     * @param int|null $total_net_margin_crncy_amt
     * @return Order
     */
    public function setTotalNetMarginCrncyAmt(?int $total_net_margin_crncy_amt): Order
    {
        $this->total_net_margin_crncy_amt = $total_net_margin_crncy_amt;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getShippingCostsNet(): ?int
    {
        return $this->shipping_costs_net;
    }

    /**
     * @param int|null $shipping_costs_net
     * @return Order
     */
    public function setShippingCostsNet(?int $shipping_costs_net): Order
    {
        $this->shipping_costs_net = $shipping_costs_net;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCurrencyFactor(): ?int
    {
        return $this->currency_factor;
    }

    /**
     * @param int|null $currency_factor
     * @return Order
     */
    public function setCurrencyFactor(?int $currency_factor): Order
    {
        $this->currency_factor = $currency_factor;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTaxFree(): ?bool
    {
        return $this->tax_free;
    }

    /**
     * @param bool|null $tax_free
     * @return Order
     */
    public function setTaxFree(?bool $tax_free): Order
    {
        $this->tax_free = $tax_free;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTaxRate(): ?int
    {
        return $this->tax_rate;
    }

    /**
     * @param int|null $tax_rate
     * @return Order
     */
    public function setTaxRate(?int $tax_rate): Order
    {
        $this->tax_rate = $tax_rate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTaxAmnt(): ?int
    {
        return $this->tax_amnt;
    }

    /**
     * @param int|null $tax_amnt
     * @return Order
     */
    public function setTaxAmnt(?int $tax_amnt): Order
    {
        $this->tax_amnt = $tax_amnt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->payment_method;
    }

    /**
     * @param string|null $payment_method
     * @return Order
     */
    public function setPaymentMethod(?string $payment_method): Order
    {
        $this->payment_method = $payment_method;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShippingMethod(): ?string
    {
        return $this->shipping_method;
    }

    /**
     * @param string|null $shipping_method
     * @return Order
     */
    public function setShippingMethod(?string $shipping_method): Order
    {
        $this->shipping_method = $shipping_method;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShippingDescription(): ?string
    {
        return $this->shipping_description;
    }

    /**
     * @param string|null $shipping_description
     * @return Order
     */
    public function setShippingDescription(?string $shipping_description): Order
    {
        $this->shipping_description = $shipping_description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDevice(): ?string
    {
        return $this->device;
    }

    /**
     * @param string|null $device
     * @return Order
     */
    public function setDevice(?string $device): Order
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferer(): ?string
    {
        return $this->referer;
    }

    /**
     * @param string|null $referer
     * @return Order
     */
    public function setReferer(?string $referer): Order
    {
        $this->referer = $referer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartner(): ?string
    {
        return $this->partner;
    }

    /**
     * @param string|null $partner
     * @return Order
     */
    public function setPartner(?string $partner): Order
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     * @return Order
     */
    public function setLanguage(?string $language): Order
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTrackingCode(): ?string
    {
        return $this->tracking_code;
    }

    /**
     * @param string|null $tracking_code
     * @return Order
     */
    public function setTrackingCode(?string $tracking_code): Order
    {
        $this->tracking_code = $tracking_code;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsGift(): ?bool
    {
        return $this->is_gift;
    }

    /**
     * @param bool|null $is_gift
     * @return Order
     */
    public function setIsGift(?bool $is_gift): Order
    {
        $this->is_gift = $is_gift;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getWrapping(): ?bool
    {
        return $this->wrapping;
    }

    /**
     * @param bool|null $wrapping
     * @return Order
     */
    public function setWrapping(?bool $wrapping): Order
    {
        $this->wrapping = $wrapping;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Order
     */
    public function setEmail(?string $email): Order
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return array|[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param array|[] $comments
     * @return Order
     */
    public function setComments(array $comments): Order
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return array|[]
     */
    public function getInternalComments(): array
    {
        return $this->internal_comments;
    }

    /**
     * @param array|[] $internal_comments
     * @return Order
     */
    public function setInternalComments(array $internal_comments): Order
    {
        $this->internal_comments = $internal_comments;
        return $this;
    }

    /**
     * @return array|[]
     */
    public function getCustomerComments(): array
    {
        return $this->customer_comments;
    }

    /**
     * @param array|[] $customer_comments
     * @return Order
     */
    public function setCustomerComments(array $customer_comments): Order
    {
        $this->customer_comments = $customer_comments;
        return $this;
    }

    /**
     * @return array|[]
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    /**
     * @param array|[] $contacts
     * @return Order
     */
    public function setContacts(array $contacts): Order
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * @return datetime|string|null
     */
    public function getCreation(): string|datetime|null
    {
        return $this->creation;
    }

    /**
     * @param datetime|string|null $creation
     * @return Order
     */
    public function setCreation(string|datetime|null $creation): Order
    {
        $this->creation = $creation;
        return $this;
    }

    /**
     * @return datetime|string|null
     */
    public function getLastUpdate(): string|datetime|null
    {
        return $this->last_update;
    }

    /**
     * @param datetime|string|null $last_update
     * @return Order
     */
    public function setLastUpdate(string|datetime|null $last_update): Order
    {
        $this->last_update = $last_update;
        return $this;
    }

    /**
     * @return datetime|string|null
     */
    public function getConfirmation(): string|datetime|null
    {
        return $this->confirmation;
    }

    /**
     * @param datetime|string|null $confirmation
     * @return Order
     */
    public function setConfirmation(string|datetime|null $confirmation): Order
    {
        $this->confirmation = $confirmation;
        return $this;
    }

    /**
     * @return datetime|string|null
     */
    public function getCleared(): string|datetime|null
    {
        return $this->cleared;
    }

    /**
     * @param datetime|string|null $cleared
     * @return Order
     */
    public function setCleared(string|datetime|null $cleared): Order
    {
        $this->cleared = $cleared;
        return $this;
    }

    /**
     * @return datetime|string|null
     */
    public function getSent(): string|datetime|null
    {
        return $this->sent;
    }

    /**
     * @param datetime|string|null $sent
     * @return Order
     */
    public function setSent(string|datetime|null $sent): Order
    {
        $this->sent = $sent;
        return $this;
    }

    /**
     * @return datetime|string|null
     */
    public function getReceived(): string|datetime|null
    {
        return $this->received;
    }

    /**
     * @param datetime|string|null $received
     * @return Order
     */
    public function setReceived(string|datetime|null $received): Order
    {
        $this->received = $received;
        return $this;
    }

    /**
     * @return datetime|string|null
     */
    public function getReturned(): string|datetime|null
    {
        return $this->returned;
    }

    /**
     * @param datetime|string|null $returned
     * @return Order
     */
    public function setReturned(string|datetime|null $returned): Order
    {
        $this->returned = $returned;
        return $this;
    }

    /**
     * @return datetime|string|null
     */
    public function getRepaired(): string|datetime|null
    {
        return $this->repaired;
    }

    /**
     * @param datetime|string|null $repaired
     * @return Order
     */
    public function setRepaired(string|datetime|null $repaired): Order
    {
        $this->repaired = $repaired;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * @param bool|null $status
     * @return Order
     */
    public function setStatus(?bool $status): Order
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->status_code;
    }

    /**
     * @param string|null $status_code
     * @return Order
     */
    public function setStatusCode(?string $status_code): Order
    {
        $this->status_code = $status_code;
        return $this;
    }

    /**
     * @return Array
     */
    public function getStringAttributes(): array
    {
        return $this->string_attributes;
    }

    /**
     * @param Array $string_attributes
     * @return Order
     */
    public function setStringAttributes(array $string_attributes): Order
    {
        $this->string_attributes = $string_attributes;
        return $this;
    }

    /**
     * @param Repeated ...$repeateds
     * @return $this
     */
    public function addStringAttributes(Repeated ...$repeateds) : self
    {
        foreach($repeateds as $repeated)
        {
            $this->string_attributes[] = $repeated->toArray();
        }

        return $this;
    }

    /**
     * @return Array
     */
    public function getLocalizedStringAttributes(): array
    {
        return $this->localized_string_attributes;
    }

    /**
     * @param Array $localized_string_attributes
     * @return Order
     */
    public function setLocalizedStringAttributes(array $localized_string_attributes): Order
    {
        $this->localized_string_attributes = $localized_string_attributes;
        return $this;
    }

    /**
     * @param Repeated ...$repeateds
     * @return $this
     */
    public function addLocalizedStringAttributes(Repeated ...$repeateds) : self
    {
        foreach($repeateds as $repeated)
        {
            $this->localized_string_attributes[] = $repeated->toArray();
        }

        return $this;
    }

    /**
     * @return Array
     */
    public function getNumericAttributes(): array
    {
        return $this->numeric_attributes;
    }

    /**
     * @param Array $numeric_attributes
     * @return Order
     */
    public function setNumericAttributes(array $numeric_attributes): Order
    {
        $this->numeric_attributes = $numeric_attributes;
        return $this;
    }

    /**
     * @param Repeated ...$repeateds
     * @return $this
     */
    public function addNumericAttributes(Repeated ...$repeateds) : self
    {
        foreach($repeateds as $repeated)
        {
            $this->numeric_attributes[] = $repeated->toArray();
        }

        return $this;
    }

    /**
     * @return Array
     */
    public function getLocalizedNumericAttributes(): array
    {
        return $this->localized_numeric_attributes;
    }

    /**
     * @param Array $localized_numeric_attributes
     * @return Order
     */
    public function setLocalizedNumericAttributes(array $localized_numeric_attributes): Order
    {
        $this->localized_numeric_attributes = $localized_numeric_attributes;
        return $this;
    }

    /**
     * @param Repeated ...$repeateds
     * @return $this
     */
    public function addLocalizedNumericAttributes(Repeated ...$repeateds) : self
    {
        foreach($repeateds as $repeated)
        {
            $this->localized_numeric_attributes[] = $repeated->toArray();
        }

        return $this;
    }

    /**
     * @return Array
     */
    public function getDatetimeAttributes(): array
    {
        return $this->datetime_attributes;
    }

    /**
     * @param Array $datetime_attributes
     * @return Order
     */
    public function setDatetimeAttributes(array $datetime_attributes): Order
    {
        $this->datetime_attributes = $datetime_attributes;
        return $this;
    }

    /**
     * @param Repeated ...$repeateds
     * @return $this
     */
    public function addDatetimeAttributes(Repeated ...$repeateds) : self
    {
        foreach($repeateds as $repeated)
        {
            $this->datetime_attributes[] = $repeated->toArray();
        }

        return $this;
    }

    /**
     * @return Array
     */
    public function getLocalizedDatetimeAttributes(): array
    {
        return $this->localized_datetime_attributes;
    }

    /**
     * @param Array $localized_datetime_attributes
     * @return Order
     */
    public function setLocalizedDatetimeAttributes(array $localized_datetime_attributes): Order
    {
        $this->localized_datetime_attributes = $localized_datetime_attributes;
        return $this;
    }

    /**
     * @param Repeated ...$repeateds
     * @return $this
     */
    public function addLocalizedDatetimeAttributes(Repeated ...$repeateds) : self
    {
        foreach($repeateds as $repeated)
        {
            $this->localized_datetime_attributes[] = $repeated->toArray();
        }

        return $this;
    }

    /**
     * @return []
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param [] $products
     * @return Order
     */
    public function setProducts(array $products): Order
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @return []
     */
    public function getVouchers(): array
    {
        return $this->vouchers;
    }

    /**
     * @param [] $vouchers
     * @return Order
     */
    public function setVouchers(array $vouchers): Order
    {
        $this->vouchers = $vouchers;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedTm(): string
    {
        return $this->created_tm;
    }

    /**
     * @param string $created_tm
     * @return Order
     */
    public function setCreatedTm(string $created_tm): Order
    {
        $this->created_tm = $created_tm;
        return $this;
    }

    /**
     * @return int
     */
    public function getClientId(): int
    {
        return $this->client_id;
    }

    /**
     * @param int $client_id
     * @return Order
     */
    public function setClientId(int $client_id): Order
    {
        $this->client_id = $client_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getSrcSysId(): int
    {
        return $this->src_sys_id;
    }

    /**
     * @param int $src_sys_id
     * @return Order
     */
    public function setSrcSysId(int $src_sys_id): Order
    {
        $this->src_sys_id = $src_sys_id;
        return $this;
    }


}
