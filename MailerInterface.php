<?php
/**
 * Mailer Interface
 *
 * @package    User
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\User;

/**
 * Mailer Interface
 *
 * @package    User
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface MailerInterface
{
    /**
     * Set the Option Values, Initiate Rendering, Send
     *
     * @param   array             $options
     * @param   TemplateInterface $template
     *
     * @return  $this
     * @since   0.1
     */
    public function render(
        $options = array(),
        Templateinterface $template = null
    );

    /**
     * Send Email
     *
     * @return  $this
     * @since   0.1
     */
    public function send();
}
