<?php
namespace App;

/*
|--------------------------------------------------------------------------
| IP helper Class
|--------------------------------------------------------------------------
|
| This class contains some helper functions that doesn't fit into other
| classes.
|
*/

class IP
{

    /**
     * IP::now()
     * Returns the current timestamp in two formats:
     *  $timestamp = false (default)    - MySQL Datetime String
     *  $timestamp = true               - Unix Timestamp
     *
     * @param bool $timestamp
     * @return int|string
     */
    public static function now($timestamp = false)
    {
        if ($timestamp === true) {
            return time();
        } else {
            return \Carbon\Carbon::now()->toDateTimeString();
        }
    }

    /**
     * @param $view_name
     * @return mixed
     */
    public static function formatViewName($view_name)
    {
        $out = preg_replace('/[\.\_]/', '-', $view_name);
        return str_replace('sites-', '', $out);
    }

    /**
     * @param $view_name
     * @param $check
     * @return null|string
     */
    public static function sidebarActiveCheck($view_name, $check)
    {
        if ($view_name == $check) {
            return 'class="active"';
        } else {
            return null;
        }
    }

    /**
     * @param bool $outputForView
     * @return string
     */
    public static function getLocAndVer($outputForView = false)
    {
        if ($outputForView === true) {
            return Config::get('app.locale').'.'.Config::get('app.version');
        }
        return '/'.Config::get('app.locale').'/'.str_replace('_', '.', Config::get('app.version'));
    }

    /**
     * @param $version
     * @return mixed
     */
    public static function urlVersion($version)
    {
        return str_replace('_', '.', $version);
    }

    /**
     * @param $url
     */
    public static function headlineLink($url)
    {
        echo '<a href="'.$url.'" class="headline-link" title="'.trans('global.link_to_headline').'"><i class="fa fa-link"></i></a>&nbsp;';
    }

    /**
     * @param $issue_id
     */
    public static function devLink($issue_id)
    {
        echo '<a href="https://development.invoiceplane.com/browse/'.$issue_id.'">'.$issue_id.'</a>';
    }
}