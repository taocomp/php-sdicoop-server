<?php namespace Taocomp\Sdicoop;

class WebService extends \SoapServer
{
    public static function log( $msg, $priority = LOG_INFO )
    {
        if ($priority == LOG_ERR) {
            $msg = "ERROR: $msg";
        }

        openlog(get_class(), 0, LOG_LOCAL0);
        syslog($priority, $msg);
        closelog();
    }
}
