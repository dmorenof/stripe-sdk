<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Tax ID
 *
 * You can add one or multiple tax IDs to a [customer](https://docs.stripe.com/api/customers) or account.
 * Customer and account tax IDs get displayed on related invoices and credit notes.
 *
 * Related guides: [Customer tax identification numbers](https://docs.stripe.com/billing/taxes/tax-ids), [Account tax IDs](https://docs.stripe.com/invoicing/connect#account-tax-ids)
 */
final class TaxId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'type',
        'value',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'value' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Two-letter ISO code representing the country of the tax ID.
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * ID of the customer.
     */
    public ?\StripeSDK\DTOs\TaxId\CustomerDTO $customer;
    /**
     * ID of the Account representing the customer.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\TaxId\ObjectEnum $object_;
    /**
     * The account or customer the tax ID belongs to.
     */
    public ?\StripeSDK\DTOs\TaxIDsOwner $owner;
    /**
     * Type of the tax ID, one of `ad_nrt`, `ae_trn`, `al_tin`, `am_tin`, `ao_tin`, `ar_cuit`, `au_abn`, `au_arn`, `aw_tin`, `az_tin`, `ba_tin`, `bb_tin`, `bd_bin`, `bf_ifu`, `bg_uic`, `bh_vat`, `bj_ifu`, `bo_tin`, `br_cnpj`, `br_cpf`, `bs_tin`, `by_tin`, `ca_bn`, `ca_gst_hst`, `ca_pst_bc`, `ca_pst_mb`, `ca_pst_sk`, `ca_qst`, `cd_nif`, `ch_uid`, `ch_vat`, `cl_tin`, `cm_niu`, `cn_tin`, `co_nit`, `cr_tin`, `cv_nif`, `de_stn`, `do_rcn`, `ec_ruc`, `eg_tin`, `es_cif`, `et_tin`, `eu_oss_vat`, `eu_vat`, `fo_vat`, `gb_vat`, `ge_vat`, `gi_tin`, `gn_nif`, `hk_br`, `hr_oib`, `hu_tin`, `ic_nif`, `id_npwp`, `il_vat`, `in_gst`, `is_vat`, `it_cf`, `jp_cn`, `jp_rn`, `jp_trn`, `ke_pin`, `kg_tin`, `kh_tin`, `kr_brn`, `kz_bin`, `la_tin`, `li_uid`, `li_vat`, `lk_vat`, `ma_vat`, `md_vat`, `me_pib`, `mk_vat`, `mr_nif`, `mx_rfc`, `my_frp`, `my_itn`, `my_sst`, `ng_tin`, `no_vat`, `no_voec`, `np_pan`, `nz_gst`, `om_vat`, `pe_ruc`, `ph_tin`, `pl_nip`, `py_ruc`, `ro_tin`, `rs_pib`, `ru_inn`, `ru_kpp`, `sa_vat`, `sg_gst`, `sg_uen`, `si_tin`, `sn_ninea`, `sr_fin`, `sv_nit`, `th_vat`, `tj_tin`, `tr_tin`, `tw_vat`, `tz_vat`, `ua_vat`, `ug_tin`, `us_ein`, `uy_ruc`, `uz_tin`, `uz_vat`, `ve_rif`, `vn_tin`, `za_vat`, `zm_tin`, or `zw_tin`. Note that some legacy tax IDs have type `unknown`
     */
    public \StripeSDK\Enums\TaxId\TypeEnum $type;
    /**
     * Value of the tax ID.
     */
    public string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }
    /**
     * Tax ID verification information.
     */
    public ?\StripeSDK\DTOs\TaxIdVerification $verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\TaxId\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'owner' => $value === null || $value instanceof \stdClass ? $this->owner = $value === null ? null : new \StripeSDK\DTOs\TaxIDsOwner($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TaxId\TypeEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            'verification' => $value === null || $value instanceof \stdClass ? $this->verification = $value === null ? null : new \StripeSDK\DTOs\TaxIdVerification($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
