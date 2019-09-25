<?php

namespace Worldline\Sips\Common\Field;


class PaymentMeanData extends Field
{
    protected $franfinance3xcb;
    protected $franfinance4xcb;

    /**
     * @return array
     */
    public function getFranfinance3xcb(): array
    {
        return $this->franfinance3xcb;
    }

    /**
     * @param mixed $franfinance3xcb
     */
    public function setFranfinance3xcb(array $franfinance3xcb)
    {
        return $this->franfinance3xcb = $franfinance3xcb;
    }

    /**
     * @return array
     */
    public function getFranfinance4xcb(): array
    {
        return $this->franfinance4xcb;
    }

    /**
     * @param mixed $franfinance4xcb
     */
    public function setFranfinance4xcb(array $franfinance4xcb)
    {
        return $this->franfinance4xcb = $franfinance4xcb;
    }

}
