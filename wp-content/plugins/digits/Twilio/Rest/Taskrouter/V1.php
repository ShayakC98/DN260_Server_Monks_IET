<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\ListResource;
use Twilio\Rest\Taskrouter\V1\WorkspaceContext;
use Twilio\Rest\Taskrouter\V1\WorkspaceList;
use Twilio\Version;

/**
 * @property WorkspaceList workspaces
 * @method WorkspaceContext workspaces(string $sid)
 */
class V1 extends Version {
    protected $_workspaces = null;

    /**
     * Construct the V1 version of Taskrouter
     * 
     * @param Domain $domain Domain that contains the version
     * @return V1 V1 version of Taskrouter
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     *
     * @return ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get($name) {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
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
        return '[Twilio.Taskrouter.V1]';
    }

    /**
     * @return WorkspaceList
     */
    protected function getWorkspaces() {
        if (!$this->_workspaces) {
            $this->_workspaces = new WorkspaceList($this);
        }
        return $this->_workspaces;
    }
}