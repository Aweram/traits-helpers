<?php

if (! function_exists("date_helper")) {
    /**
     * @return \Aweram\TraitsHelpers\Helpers\DateHelper
     */
    function date_helper(): \Aweram\TraitsHelpers\Helpers\DateHelper
    {
        return app("date_helper");
    }
}
