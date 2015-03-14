<?php
return array(
    // set your paypal credential
    'client_id' => 'Af0CNzsrQRd8-9sqYaGKNu7rxaBzCZemh3EXU1vgN8e-BH1fm0sN9bdzgXXt7OPo9m6DqWknXa9PZnT7',
    'secret' => 'EIbyfSwXVQFdDiwyvNPpDrKn13OQwvBaIXGtSJROGzry7NnPwL_KmsZ2JioqFl_yt-hsz_NIDCwzW7Y7',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);