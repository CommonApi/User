<?php
/**
 * Template Interface
 *
 * @package    User
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\User;

use stdClass;

/**
 * Template Interface
 *
 * @package    User
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface TemplateInterface
{
    /**
     * Get the current value (or default) of the specified key
     *
     * @param   string $key
     * @param   mixed  $default
     *
     * @return  mixed
     * @since   0.1
     */
    public function get($key, $default = null);

    /**
     * Set the value of a specified key
     *
     * @param   string $key
     * @param   mixed  $value
     *
     * @return  $this
     * @since   0.1
     */
    public function set($key, $value = null);

    /**
     * Set the Option Values, Initiate Rendering, Send
     *
     * @param   stdClass $data
     *
     * @return  string
     * @since   0.1
     */
    public function render(stdClass $data);
}

