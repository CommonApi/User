<?php
/**
 * User Data Interface
 *
 * @package    User
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\User;

/**
 * User Data Interface
 *
 * @package    User
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface UserDataInterface
{
    /**
     * Get the current value (or default) of the specified key or all User Data for null key
     * The secondary key can be used to designate a customfield group or child object
     *
     * @param   null|string $key
     * @param   null|string $secondary_key
     *
     * @return  mixed
     * @since   1.0
     */
    public function getUserData($key = null, $secondary_key = null);

    /**
     * Set the value of a specified key
     *
     * @param   string $key
     * @param   mixed  $value
     *
     * @return  $this
     * @since   1.0
     */
    public function setUserData($key, $value = null);

    /**
     * Save the User
     *
     * @return  $this
     * @since   1.0
     */
    public function updateUser();

    /**
     * Delete the User
     *
     * @return  $this
     * @since   1.0
     */
    public function deleteUser();
}
