<?php
/**
 * Messages Interface
 *
 * @package    User
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Api\User;

/**
 * Messages Interface
 *
 * @package    User
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface MessagesInterface
{
    /**
     * Store Flash (User) Messages in Session for presentation after redirect
     *
     * @param   int    $message_id
     * @param   array  $values
     * @param   string $type (Success, Notice, Warning, Error)
     *
     * @return  $this
     * @since   1.0
     */
    public function setFlashMessage($message_id, array $values = array(), $type = 'Error');

    /**
     * Format Exception Message and throw the Exception
     *
     * @param   int    $message_id
     * @param   array  $values
     * @param   string $exception
     *
     * @return  null
     * @since   1.0
     */
    public function throwException($message_id, array $values = array(), $exception = 'SystemException');
}
