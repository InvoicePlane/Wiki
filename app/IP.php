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
        // return '<a href="https://development.invoiceplane.com/browse/' . $issue_id . '">' . $issue_id . '</a>'; // origin
        $arch = '';
        $path = 'search?q=repo%3AInvoicePlane%2FInvoicePlane+' . $issue_id . '&type=pullrequests'; // commits
        if (strpos($issue_id, 'IP') !== false) {
            // Add search in web archives like : https://web.archive.org/web/*/https://development.invoiceplane.com/browse/IP-681*
            $arch = ' - <a href="https://web.archive.org/web/*/https://development.invoiceplane.com/browse/' . $issue_id . '*">(Archive?)</a>';
        }
        elseif (strpos($issue_id, 'PR') !== false) {
            $path = 'InvoicePlane/InvoicePlane/pull/' . ltrim($issue_id, 'PR');
        }
        elseif (strpos($issue_id, 'C') !== false) {
            $path = 'InvoicePlane/InvoicePlane/commit/' . ltrim($issue_id, 'C');
        }

        return '<a href="https://github.com/' . $path . '">' . $issue_id . '</a>' . $arch;
    }
}
