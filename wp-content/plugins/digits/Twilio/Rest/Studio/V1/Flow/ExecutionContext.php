<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Studio\V1\Flow;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\ListResource;
use Twilio\Rest\Studio\V1\Flow\Execution\ExecutionContextContext;
use Twilio\Rest\Studio\V1\Flow\Execution\ExecutionContextList;
use Twilio\Rest\Studio\V1\Flow\Execution\ExecutionStepContext;
use Twilio\Rest\Studio\V1\Flow\Execution\ExecutionStepList;
use Twilio\Values;
use Twilio\Version;

/**
 * @property ExecutionStepList steps
 * @property ExecutionContextList executionContext
 * @method ExecutionStepContext steps(string $sid)
 * @method ExecutionContextContext executionContext()
 */
class ExecutionContext extends InstanceContext {
    protected $_steps = null;
    protected $_executionContext = null;

    /**
     * Initialize the ExecutionContext
     * 
     * @param Version $version Version that contains the resource
     * @param string $flowSid Flow Sid.
     * @param string $sid Execution Sid.
     * @return ExecutionContext
     */
    public function __construct(Version $version, $flowSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('flowSid' => $flowSid, 'sid' => $sid, );

        $this->uri = '/Flows/' . rawurlencode($flowSid) . '/Executions/' . rawurlencode($sid) . '';
    }

    /**
     * Fetch a ExecutionInstance
     * 
     * @return ExecutionInstance Fetched ExecutionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new ExecutionInstance(
            $this->version,
            $payload,
            $this->solution['flowSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the ExecutionInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
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
        return '[Twilio.Studio.V1.ExecutionContext ' . implode(' ', $context) . ']';
    }

    /**
     * Access the steps
     *
     * @return ExecutionStepList
     */
    protected function getSteps() {
        if (!$this->_steps) {
            $this->_steps = new ExecutionStepList(
                $this->version,
                $this->solution['flowSid'],
                $this->solution['sid']
            );
        }

        return $this->_steps;
    }

    /**
     * Access the executionContext
     *
     * @return ExecutionContextList
     */
    protected function getExecutionContext() {
        if (!$this->_executionContext) {
            $this->_executionContext = new ExecutionContextList(
                $this->version,
                $this->solution['flowSid'],
                $this->solution['sid']
            );
        }

        return $this->_executionContext;
    }
}