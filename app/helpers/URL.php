<?php

    /**
     * Url Helper
     */

    namespace App\Helpers;

    class URL
    {
        public function __construct()
        {

        }

        /**
         * Get current page URL
         *
         * @return string
         *
         * @since Cactus Alpha 1.0
         * @package om
         */
        function getCurrentURL ()
        {
            $pageURL = 'http';
            if ($_SERVER["HTTPS"] == "on") {
                $pageURL .= "s";
            }
            $pageURL .= "://";
            if ($_SERVER["SERVER_PORT"] != "80") {
                $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
            } else {
                $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            }

            return $pageURL;
        }
    }