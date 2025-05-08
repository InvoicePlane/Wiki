<?php

namespace App;

/**
 * Class IP
 *
 * This class contains some helper functions that doesn't fit into other classes.
 *
 * @package App
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
        $out = preg_replace('/[._]/', '-', $view_name);
        return str_replace('sites-', '', $out);
    }

    /**
     * @param $view_name
     * @param $check
     * @return null|string
     */
    public static function sidebarActiveCheck($view_name, $check)
    {
        if ($view_name === $check) {
            return 'class="active"';
        }

        return null;
    }

    /**
     * @param bool $outputForView
     * @return string
     */
    public static function getLocAndVer($outputForView = false)
    {
        if ($outputForView === true) {
            return config('app.locale') . '.' . config('app.version');
        }

        return '/' . config('app.locale') . '/' . str_replace('_', '.', config('app.version'));
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
     * @return string
     */
    public static function headlineLink($url)
    {
        return sprintf(
            '<a href="%s" class="headline-link" title="%s"><i class="fa fa-link"></i></a>&nbsp;',
            url($url),
            trans('global.link_to_headline')
        );
    }

    /**
     * @param $issue_id
     * @return string
     */
    public static function devLink($issue_id)
    {
        return '<a href="https://development.invoiceplane.com/browse/' . $issue_id . '">' . $issue_id . '</a>';
    }
}
