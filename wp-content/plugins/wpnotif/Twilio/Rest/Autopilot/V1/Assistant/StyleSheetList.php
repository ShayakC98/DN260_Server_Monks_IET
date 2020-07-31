<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant;

use Twilio\ListResource;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class StyleSheetList extends ListResource {
	/**
	 * Construct the StyleSheetList
	 *
	 * @param Version $version Version that contains the resource
	 * @param string $assistantSid The unique ID of the Assistant
	 *
	 * @return \Twilio\Rest\Autopilot\V1\Assistant\StyleSheetList
	 */
	public function __construct( Version $version, $assistantSid ) {
		parent::__construct( $version );

		// Path Solution
		$this->solution = array( 'assistantSid' => $assistantSid, );
	}

	/**
	 * Constructs a StyleSheetContext
	 *
	 * @return \Twilio\Rest\Autopilot\V1\Assistant\StyleSheetContext
	 */
	public function getContext() {
		return new StyleSheetContext( $this->version, $this->solution['assistantSid'] );
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		return '[Twilio.Autopilot.V1.StyleSheetList]';
	}
}