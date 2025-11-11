<?php

namespace FedexRest\Services\Ship\Entity;

class CustomsClearanceDetail
{
    public ?array $dutiesPayment;
    public ?array $commodities;
    public ?array $commercialInvoice;
    public ?array $regulatoryControls;
    public ?array $brokers;
    public ?string $freightOnValue;
    public ?bool $isDocumentOnly;
    public ?array $recipientCustomsId;
    public ?array $customsOption;
    public ?array $importerOfRecord;
    public ?string $generatedDocumentLocale;
    public ?array $exportDetail;
    public ?array $totalCustomsValue;
    public ?bool $partiesToTransactionAreRelated;
    public ?array $declarationStatementDetail;
    public ?array $insuranceCharge;

    /**
     * @param array  $dutiesPayment
     * @return $this
     */
    public function setSpecialServiceTypes(array $dutiesPayment): CustomsClearanceDetail
    {
        $this->dutiesPayment = $dutiesPayment;
        return $this;
    }

    /**
     * @param array  $commodities
     * @return $this
     */
    public function setCommodities(array $commodities): CustomsClearanceDetail
    {
        $this->commodities = $commodities;
        return $this;
    }

    /**
     * @param array  $commercialInvoice
     * @return $this
     */
    public function setCommercialInvoice(array $commercialInvoice): CustomsClearanceDetail
    {
        $this->commercialInvoice = $commercialInvoice;
        return $this;
    }

    /**
     * @param array  $regulatoryControls
     * @return $this
     */
    public function setRegulatoryControls(array $regulatoryControls): CustomsClearanceDetail
    {
        $this->regulatoryControls = $regulatoryControls;
        return $this;
    }

    /**
     * @param array  $brokers
     * @return $this
     */
    public function setBrokers(array $brokers): CustomsClearanceDetail
    {
        $this->brokers = $brokers;
        return $this;
    }

    /**
     * @param string  $freightOnValue
     * @return $this
     */
    public function setFreightOnValuee(string $freightOnValue): CustomsClearanceDetail
    {
        $this->freightOnValue = $freightOnValue;
        return $this;
    }

    /**
     * @param bool  $isDocumentOnly
     * @return $this
     */
    public function setIsDocumentOnly(bool $isDocumentOnly): CustomsClearanceDetail
    {
        $this->isDocumentOnly = $isDocumentOnly;
        return $this;
    }

    /**
     * @param array  $recipientCustomsId
     * @return $this
     */
    public function setRecipientCustomsId(array $recipientCustomsId): CustomsClearanceDetail
    {
        $this->recipientCustomsId = $recipientCustomsId;
        return $this;
    }

    /**
     * @param array  $customsOption
     * @return $this
     */
    public function setCustomsOption(array $customsOption): CustomsClearanceDetail
    {
        $this->customsOption = $customsOption;
        return $this;
    }

    /**
     * @param array  $importerOfRecord
     * @return $this
     */
    public function setImporterOfRecord(array $importerOfRecord): CustomsClearanceDetail
    {
        $this->importerOfRecord = $importerOfRecord;
        return $this;
    }

    /**
     * @param string  $generatedDocumentLocale
     * @return $this
     */
    public function setGeneratedDocumentLocale(string $generatedDocumentLocale): CustomsClearanceDetail
    {
        $this->generatedDocumentLocale = $generatedDocumentLocale;
        return $this;
    }

    /**
     * @param array  $exportDetail
     * @return $this
     */
    public function setExportDetail(array $exportDetail): CustomsClearanceDetail
    {
        $this->exportDetail = $exportDetail;
        return $this;
    }

    /**
     * @param array  $totalCustomsValue
     * @return $this
     */
    public function setTotalCustomsValue(array $totalCustomsValue): CustomsClearanceDetail
    {
        $this->totalCustomsValue = $totalCustomsValue;
        return $this;
    }

    /**
     * @param bool  $partiesToTransactionAreRelated
     * @return $this
     */
    public function setPartiesToTransactionAreRelated(bool $partiesToTransactionAreRelated): CustomsClearanceDetail
    {
        $this->partiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }

    /**
     * @param array  $declarationStatementDetail
     * @return $this
     */
    public function setDeclarationStatementDetail(array $declarationStatementDetail): CustomsClearanceDetail
    {
        $this->declarationStatementDetail = $declarationStatementDetail;
        return $this;
    }

    /**
     * @param array  $insuranceCharge
     * @return $this
     */
    public function setInsuranceCharge(array $insuranceCharge): CustomsClearanceDetail
    {
        $this->insuranceCharge = $insuranceCharge;
        return $this;
    }

    public function prepare(): array
    {
        $data = [];
        if (!empty($this->commodities)) {
            $data['commodities'] = $this->commodities;
        }
        if (!empty($this->dutiesPayment)) {
            $data['dutiesPayment'] = $this->dutiesPayment;
        }
        if (!empty($this->commercialInvoice)) {
            $data['commercialInvoice'] = $this->commercialInvoice;
        }
        if (!empty($this->regulatoryControls)) {
            $data['regulatoryControls'] = $this->regulatoryControls;
        }
        if (!empty($this->brokers)) {
            $data['brokers'] = $this->brokers;
        }
        if (!empty($this->freightOnValue)) {
            $data['freightOnValue'] = $this->freightOnValue;
        }
        if (!is_null($this->isDocumentOnly)) {
            $data['isDocumentOnly'] = $this->isDocumentOnly;
        }
        if (!empty($this->recipientCustomsId)) {
            $data['recipientCustomsId'] = $this->recipientCustomsId;
        }
        if (!empty($this->customsOption)) {
            $data['customsOption'] = $this->customsOption;
        }
        if (!empty($this->importerOfRecord)) {
            $data['importerOfRecord'] = $this->importerOfRecord;
        }
        if (!empty($this->generatedDocumentLocale)) {
            $data['generatedDocumentLocale'] = $this->generatedDocumentLocale;
        }
        if (!empty($this->exportDetail)) {
            $data['exportDetail'] = $this->exportDetail;
        }
        if (!empty($this->totalCustomsValue)) {
            $data['totalCustomsValue'] = $this->totalCustomsValue;
        }
        if (!is_null($this->partiesToTransactionAreRelated)) {
            $data['partiesToTransactionAreRelated'] = $this->partiesToTransactionAreRelated;
        }
        if (!empty($this->declarationStatementDetail)) {
            $data['declarationStatementDetail'] = $this->declarationStatementDetail;
        }
        if (!empty($this->insuranceCharge)) {
            $data['insuranceCharge'] = $this->insuranceCharge;
        }
        return $data;
    }
}
