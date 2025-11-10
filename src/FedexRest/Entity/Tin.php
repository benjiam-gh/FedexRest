<?php

namespace FedexRest\Entity;

class Tin
{
    public int $number;
    public string $tinType;
    public string $usage;
    public string $effectiveDate;
    public string $expirationDate;

    /**
     * @param int $number
     * @return $this
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @param string $tinType
     * @return $this
     */
    public function setTinType(string $tinType)
    {
        $this->tinType = $tinType;
        return $this;
    }

    /**
     * @param string $usage
     * @return $this
     */
    public function setUsage(string $usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * @param string $effectiveDate
     * @return $this
     */
    public function setEffectiveDate(string $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @param bool $expirationDate
     * @return $this
     */
    public function setExpirationDate(string $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    public function prepare(): array
    {
        $tin = [];
        if (!empty($this->number)) {
            $tin['number'] = $this->number;
        }
        if (!empty($this->tinType)) {
            $tin['tinType'] = $this->tinType;
        }
        if (!empty($this->usage)) {
            $tin['usage'] = $this->usage;
        }
        if (!empty($this->effectiveDate)) {
            $tin['effectiveDate'] = $this->effectiveDate;
        }
        if (!empty($this->expirationDate)) {
            $tin['expirationDate'] = $this->expirationDate;
        }

        return $tin;
    }
}
