<?php
/**
 * Cookie Interface
 *
 * @package    User
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\User;

/**
 * Cookie Interface
 *
 * @link       http://www.faqs.org/rfcs/rfc6265.html
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface CookieInterface
{
    /**
     * Get an HTTP Cookie
     *
     * @param   $name
     *
     * @return  $this
     * @since   0.1
     */
    public function getCookie($name);

    /**
     * Sets an HTTP Cookie to be sent with the HTTP response
     *
     * @param           $name
     * @param   null    $value
     * @param   int     $minutes
     * @param   string  $path
     * @param   string  $domain
     * @param   bool    $secure
     * @param   bool    $http_only
     *
     * @return  $this
     * @since   0.1
     */
    public function setCookie(
        $name,
        $value = null,
        $minutes = 0,
        $path = '/',
        $domain = '',
        $secure = false,
        $http_only = true
    );

    /**
     * Delete a cookie
     *
     * @param   string $name
     *
     * @return  $this
     * @since   0.1
     */
    public function deleteCookie($name);

    /**
     * sendCookies
     *
     * @return  $this
     * @since   0.1
     */
    public function sendCookies();
}
