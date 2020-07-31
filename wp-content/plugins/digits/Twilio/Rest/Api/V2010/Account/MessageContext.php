<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\ListResource;
use Twilio\Rest\Api\V2010\Account\Message\FeedbackList;
use Twilio\Rest\Api\V2010\Account\Message\MediaContext;
use Twilio\Rest\Api\V2010\Account\Message\MediaList;
use Twilio\Values;
use Twilio\Version;

/**
 * @property MediaList media
 * @property FeedbackList feedback
 * @method MediaContext media(string $sid)
 */
class MessageContext extends InstanceContext {
    protected $_media = null;
    protected $_feedback = null;

    /**
     * Initialize the MessageContext
     * 
     * @param Version $version Version that contains the resource
     * @param string $accountSid The account_sid
     * @param string $sid Fetch by unique message Sid
     * @return MessageContext
     */
    public function __construct(Version $version, $accountSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('accountSid' => $accountSid, 'sid' => $sid, );

        $this->uri = '/Accounts/' . rawurlencode($accountSid) . '/Messages/' . rawurlencode($sid) . '.json';
    }

    /**
     * Deletes the MessageInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Fetch a MessageInstance
     * 
     * @return MessageInstance Fetched MessageInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new MessageInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the MessageInstance
     * 
     * @param string $body The text of the message you want to send, limited to
     *                     1600 characters.
     * @return MessageInstance Updated MessageInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($body) {
        $data = Values::of(array('Body' => $body, ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new MessageInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     *
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     *
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call($name, $arguments) {
        $property = $this->$name;
        if (method_exists($property, 'getContext')) {
            return call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.MessageContext ' . implode(' ', $context) . ']';
    }

    /**
     * Access the media
     *
     * @return MediaList
     */
    protected function getMedia() {
        if (!$this->_media) {
            $this->_media = new MediaList(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->_media;
    }

    /**
     * Access the feedback
     *
     * @return FeedbackList
     */
    protected function getFeedback() {
        if (!$this->_feedback) {
            $this->_feedback = new FeedbackList(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->_feedback;
    }
}