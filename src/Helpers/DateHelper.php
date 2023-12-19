<?php

namespace Aweram\TraitsHelpers\Helpers;
class DateHelper
{
    const ACTIONS = [
        "forFilter",
        "changeTz",
        "format"
    ];

    public $date;

    public function __call($method, $args)
    {
        if (in_array($method, self::ACTIONS))
            $this->methodRouter($method, $args);
        return $this->date;
    }

    public function methodRouter($method, $args): void
    {
        switch ($method) {
            case "forFilter":
                call_user_func_array([$this, "getForFilterDate"], $args);
                break;

            case "changeTz":
                call_user_func_array([$this, "changeTimeZone"], $args);
                break;

            case "format":
                call_user_func_array([$this, "formatValue"], $args);
                break;
        }
    }

    protected function getForFilterDate($value, $to = false): void
    {
        $this->date = "filter";
    }

    protected function changeTimeZone($value): void
    {
        $this->date = "zone";
    }

    protected function formatValue($value, $format = "d.m.Y H:i"): void
    {
        $this->date = "format";
    }
}
