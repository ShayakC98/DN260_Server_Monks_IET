<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Pricing;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Pricing\V1\MessagingList;
use Twilio\Rest\Pricing\V1\PhoneNumberList;
use Twilio\Rest\Pricing\V1\VoiceList;
use Twilio\Version;

/**
 * @property \Twilio\Rest\Pricing\V1\MessagingList messaging
 * @property \Twilio\Rest\Pricing\V1\PhoneNumberList phoneNumbers
 * @property \Twilio\Rest\Pricing\V1\VoiceList voice
 */
class V1 extends Version {
	protected $_messaging = null;
	protected $_phoneNumbers = null;
	protected $_voice = null;

	/**
	 * Construct the V1 version of Pricing
	 *
	 * @param \Twilio\Domain $domain Domain that contains the version
	 *
	 * @return \Twilio\Rest\Pricing\V1 V1 version of Pricing
	 */
	public function __construct( Domain $domain ) {
		parent::__construct( $domain );
		$this->version = 'v1';
	}

	/**
	 * Magic getter to lazy load root resources
	 *
	 * @param string $name Resource to return
	 *
	 * @return \Twilio\ListResource The requested resource
	 * @throws \Twilio\Exceptions\TwilioException For unknown resource
	 */
	public function __get( $name ) {
		$method = 'get' . ucfirst( $name );
		if ( method_exists( $this, $method ) ) {
			return $this->$method();
		}

		throw new TwilioException( 'Unknown resource ' . $name );
	}

	/**
	 * Magic caller to get resource contexts
	 *
	 * @param string $name Resource to return
	 * @param array $arguments Context parameters
	 *
	 * @return \Twilio\InstanceContext The requested resource context
	 * @throws \Twilio\Exceptions\TwilioException For unknown resource
	 */
	public function __call( $name, $arguments ) {
		$property = $this->$name;
		if ( method_exists( $property, 'getContext' ) ) {
			return call_user_func_array( array( $property, 'getContext' ), $arguments );
		}

		throw new TwilioException( 'Resource does not have a context' );
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		return '[Twilio.Pricing.V1]';
	}

	/**
	 * @return \Twilio\Rest\Pricing\V1\MessagingList
	 */
	protected function getMessaging() {
		if ( ! $this->_messaging ) {
			$this->_messaging = new MessagingList( $this );
		}

		return $this->_messaging;
	}

	/**
	 * @return \Twilio\Rest\Pricing\V1\PhoneNumberList
	 */
	protected function getPhoneNumbers() {
		if ( ! $this->_phoneNumbers ) {
			$this->_phoneNumbers = new PhoneNumberList( $this );
		}

		return $this->_phoneNumbers;
	}

	/**
	 * @return \Twilio\Rest\Pricing\V1\VoiceList
	 */
	protected function getVoice() {
		if ( ! $this->_voice ) {
			$this->_voice = new VoiceList( $this );
		}

		return $this->_voice;
	}
}