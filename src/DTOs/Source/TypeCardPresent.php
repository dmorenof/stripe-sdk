<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeCardPresent extends \Dmorenof\SdkRuntime\DTO
{
    public string $application_cryptogram;
    public string $application_preferred_name;
    public ?string $authorization_code;
    public string $authorization_response_code;
    public ?string $brand;
    public ?string $country;
    public string $cvm_type;
    public ?string $data_type;
    public string $dedicated_file_name;
    public string $emv_auth_data;
    public ?string $evidence_customer_signature;
    public ?string $evidence_transaction_certificate;
    public ?int $exp_month;
    public ?int $exp_year;
    public string $fingerprint;
    public ?string $funding;
    public ?string $last4;
    public ?string $pos_device_id;
    public string $pos_entry_mode;
    public ?string $read_method;
    public ?string $reader;
    public string $terminal_verification_results;
    public string $transaction_status_information;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application_cryptogram' => is_string($value) ? $this->application_cryptogram = $value : parent::assignMember($name, $value),
            'application_preferred_name' => is_string($value) ? $this->application_preferred_name = $value : parent::assignMember($name, $value),
            'authorization_code' => $value === null || is_string($value) ? $this->authorization_code = $value : parent::assignMember($name, $value),
            'authorization_response_code' => is_string($value) ? $this->authorization_response_code = $value : parent::assignMember($name, $value),
            'brand' => $value === null || is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'cvm_type' => is_string($value) ? $this->cvm_type = $value : parent::assignMember($name, $value),
            'data_type' => $value === null || is_string($value) ? $this->data_type = $value : parent::assignMember($name, $value),
            'dedicated_file_name' => is_string($value) ? $this->dedicated_file_name = $value : parent::assignMember($name, $value),
            'emv_auth_data' => is_string($value) ? $this->emv_auth_data = $value : parent::assignMember($name, $value),
            'evidence_customer_signature' => $value === null || is_string($value) ? $this->evidence_customer_signature = $value : parent::assignMember($name, $value),
            'evidence_transaction_certificate' => $value === null || is_string($value) ? $this->evidence_transaction_certificate = $value : parent::assignMember($name, $value),
            'exp_month' => $value === null || is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => $value === null || is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'fingerprint' => is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding' => $value === null || is_string($value) ? $this->funding = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'pos_device_id' => $value === null || is_string($value) ? $this->pos_device_id = $value : parent::assignMember($name, $value),
            'pos_entry_mode' => is_string($value) ? $this->pos_entry_mode = $value : parent::assignMember($name, $value),
            'read_method' => $value === null || is_string($value) ? $this->read_method = $value : parent::assignMember($name, $value),
            'reader' => $value === null || is_string($value) ? $this->reader = $value : parent::assignMember($name, $value),
            'terminal_verification_results' => is_string($value) ? $this->terminal_verification_results = $value : parent::assignMember($name, $value),
            'transaction_status_information' => is_string($value) ? $this->transaction_status_information = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
