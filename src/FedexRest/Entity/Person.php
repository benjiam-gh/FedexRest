<?php


namespace FedexRest\Entity;


class Person
{
    public ?Address $address = null;
    public string $personName = '';
    public string $phoneNumber;
    public string $companyName = '';
    protected array $tins = [];
    public string $emailAddress;

    /**
     * @param  mixed  $address
     * @return Person
     */
    public function withAddress(Address $address)
    {
        $this->address = $address;
        return $this;
    }


    /**
     * @param  mixed  $personName
     * @return Person
     */
    public function setPersonName(string $personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * @param  string  $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @param  string  $companyName
     * @return $this
     */
    public function setCompanyName(string $companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @param Tin ...$tins
     * @return $this
     */
    public function setTins(Tin ...$tins)
    {
        $this->tins = $tins;
        return $this;
    }

    /**
     * @param  string  $emailAddress
     * @return $this
     */
    public function setEmailAddress(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return array[]
     */
    public function prepare(): array
    {
        $data = [];
        if (!empty($this->personName)) {
            $data['contact']['personName'] = $this->personName;
        }
        if (!empty($this->phoneNumber)) {
            $data['contact']['phoneNumber'] = $this->phoneNumber;
        }
        if (!empty($this->companyName)) {
            $data['contact']['companyName'] = $this->companyName;
        }
        if (!empty($this->emailAddress)) {
            $data['contact']['emailAddress'] = $this->emailAddress;
        }

        if ($this->address != null) {
            $data['address'] = $this->address->prepare();
        }

        if (!empty($this->tins)) {
            $tins = [];
            foreach ($this->tins as $tin) {
                $tins[] = $tin->prepare();
            }
            $data['tins'] = $tins;
        }
        return $data;
    }
}
