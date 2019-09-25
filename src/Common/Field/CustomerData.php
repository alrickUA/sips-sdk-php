<?php

namespace Worldline\Sips\Common\Field;


class CustomerData extends Field
{
    protected $birthDate;

    /**
     * @return int|null
     */
    public function getBirthDate(): ?int
    {
        return $this->birthDate;
    }

    /**
     * @param int $birthDate
     */
    public function setBirthDate(int $birthDate)
    {
        $this->birthDate = $birthDate;
    }

}
