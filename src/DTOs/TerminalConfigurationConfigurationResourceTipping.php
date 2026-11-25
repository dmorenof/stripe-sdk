<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TerminalConfigurationConfigurationResourceTipping
 */
final class TerminalConfigurationConfigurationResourceTipping extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $aed;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $aud;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $cad;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $chf;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $czk;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $dkk;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $eur;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $gbp;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $gip;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $hkd;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $huf;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $jpy;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $mxn;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $myr;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $nok;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $nzd;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $pln;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $ron;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $sek;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $sgd;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig $usd;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aed' => $value instanceof \stdClass ? $this->aed = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'aud' => $value instanceof \stdClass ? $this->aud = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'cad' => $value instanceof \stdClass ? $this->cad = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'chf' => $value instanceof \stdClass ? $this->chf = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'czk' => $value instanceof \stdClass ? $this->czk = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'dkk' => $value instanceof \stdClass ? $this->dkk = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'eur' => $value instanceof \stdClass ? $this->eur = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'gbp' => $value instanceof \stdClass ? $this->gbp = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'gip' => $value instanceof \stdClass ? $this->gip = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'hkd' => $value instanceof \stdClass ? $this->hkd = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'huf' => $value instanceof \stdClass ? $this->huf = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'jpy' => $value instanceof \stdClass ? $this->jpy = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'mxn' => $value instanceof \stdClass ? $this->mxn = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'myr' => $value instanceof \stdClass ? $this->myr = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'nok' => $value instanceof \stdClass ? $this->nok = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'nzd' => $value instanceof \stdClass ? $this->nzd = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'pln' => $value instanceof \stdClass ? $this->pln = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'ron' => $value instanceof \stdClass ? $this->ron = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'sek' => $value instanceof \stdClass ? $this->sek = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'sgd' => $value instanceof \stdClass ? $this->sgd = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            'usd' => $value instanceof \stdClass ? $this->usd = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCurrencySpecificConfig($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
