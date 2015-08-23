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
     * Set User Data for id, username, email or Initialise User
     *
     * @param   null|string $key
     * @param   null|string $value
     *
     * @return  $this
     */
    public function load($key = 'username', $value = null);

    /**
     * Create User
     *
     * @param   array $data
     *
     * @return  $this
     * @since   1.0.0
     */
    public function createUser(array $data = array());

    /**
     * Return data for current user
     *
     * @return  object
     * @since   1.0.0
     */
    public function readUser();

    /**
     * Update Current User
     *
     * @param   array  $data
     *
     * @return  $this
     * @since   1.0.0
     */
    public function updateUser(array $data = array());

    /**
     * Delete Current User
     *
     * @return  object
     * @since   1.0.0
     */
    public function deleteUser();
}
