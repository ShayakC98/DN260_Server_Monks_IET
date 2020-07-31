<?php
// This file was auto-generated from sdk-root/src/data/groundstation/2019-05-23/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2019-05-23',
		'endpointPrefix'   => 'groundstation',
		'jsonVersion'      => '1.1',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'AWS Ground Station',
		'serviceId'        => 'GroundStation',
		'signatureVersion' => 'v4',
		'signingName'      => 'groundstation',
		'uid'              => 'groundstation-2019-05-23',
	],
	'operations' => [
		'CancelContact'               => [
			'name'       => 'CancelContact',
			'http'       => [
				'method'       => 'DELETE',
				'requestUri'   => '/contact/{contactId}',
				'responseCode' => 200,
			],
			'input'      => [ 'shape' => 'CancelContactRequest', ],
			'output'     => [ 'shape' => 'ContactIdResponse', ],
			'errors'     => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
			'idempotent' => true,
		],
		'CreateConfig'                => [
			'name'   => 'CreateConfig',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/config', 'responseCode' => 200, ],
			'input'  => [ 'shape' => 'CreateConfigRequest', ],
			'output' => [ 'shape' => 'ConfigIdResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'CreateDataflowEndpointGroup' => [
			'name'   => 'CreateDataflowEndpointGroup',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/dataflowEndpointGroup',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreateDataflowEndpointGroupRequest', ],
			'output' => [ 'shape' => 'DataflowEndpointGroupIdResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'CreateMissionProfile'        => [
			'name'   => 'CreateMissionProfile',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/missionprofile',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreateMissionProfileRequest', ],
			'output' => [ 'shape' => 'MissionProfileIdResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DeleteConfig'                => [
			'name'       => 'DeleteConfig',
			'http'       => [
				'method'       => 'DELETE',
				'requestUri'   => '/config/{configType}/{configId}',
				'responseCode' => 200,
			],
			'input'      => [ 'shape' => 'DeleteConfigRequest', ],
			'output'     => [ 'shape' => 'ConfigIdResponse', ],
			'errors'     => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
			'idempotent' => true,
		],
		'DeleteDataflowEndpointGroup' => [
			'name'       => 'DeleteDataflowEndpointGroup',
			'http'       => [
				'method'       => 'DELETE',
				'requestUri'   => '/dataflowEndpointGroup/{dataflowEndpointGroupId}',
				'responseCode' => 200,
			],
			'input'      => [ 'shape' => 'DeleteDataflowEndpointGroupRequest', ],
			'output'     => [ 'shape' => 'DataflowEndpointGroupIdResponse', ],
			'errors'     => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
			'idempotent' => true,
		],
		'DeleteMissionProfile'        => [
			'name'       => 'DeleteMissionProfile',
			'http'       => [
				'method'       => 'DELETE',
				'requestUri'   => '/missionprofile/{missionProfileId}',
				'responseCode' => 200,
			],
			'input'      => [ 'shape' => 'DeleteMissionProfileRequest', ],
			'output'     => [ 'shape' => 'MissionProfileIdResponse', ],
			'errors'     => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
			'idempotent' => true,
		],
		'DescribeContact'             => [
			'name'   => 'DescribeContact',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/contact/{contactId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeContactRequest', ],
			'output' => [ 'shape' => 'DescribeContactResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'GetConfig'                   => [
			'name'   => 'GetConfig',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/config/{configType}/{configId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetConfigRequest', ],
			'output' => [ 'shape' => 'GetConfigResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'GetDataflowEndpointGroup'    => [
			'name'   => 'GetDataflowEndpointGroup',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/dataflowEndpointGroup/{dataflowEndpointGroupId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetDataflowEndpointGroupRequest', ],
			'output' => [ 'shape' => 'GetDataflowEndpointGroupResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'GetMissionProfile'           => [
			'name'   => 'GetMissionProfile',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/missionprofile/{missionProfileId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetMissionProfileRequest', ],
			'output' => [ 'shape' => 'GetMissionProfileResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListConfigs'                 => [
			'name'   => 'ListConfigs',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/config',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListConfigsRequest', ],
			'output' => [ 'shape' => 'ListConfigsResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListContacts'                => [
			'name'   => 'ListContacts',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/contacts',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListContactsRequest', ],
			'output' => [ 'shape' => 'ListContactsResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListDataflowEndpointGroups'  => [
			'name'   => 'ListDataflowEndpointGroups',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/dataflowEndpointGroup',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListDataflowEndpointGroupsRequest', ],
			'output' => [ 'shape' => 'ListDataflowEndpointGroupsResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListMissionProfiles'         => [
			'name'   => 'ListMissionProfiles',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/missionprofile',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListMissionProfilesRequest', ],
			'output' => [ 'shape' => 'ListMissionProfilesResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ReserveContact'              => [
			'name'   => 'ReserveContact',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/contact',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ReserveContactRequest', ],
			'output' => [ 'shape' => 'ContactIdResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'UpdateConfig'                => [
			'name'       => 'UpdateConfig',
			'http'       => [
				'method'       => 'PUT',
				'requestUri'   => '/config/{configType}/{configId}',
				'responseCode' => 200,
			],
			'input'      => [ 'shape' => 'UpdateConfigRequest', ],
			'output'     => [ 'shape' => 'ConfigIdResponse', ],
			'errors'     => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
			'idempotent' => true,
		],
		'UpdateMissionProfile'        => [
			'name'       => 'UpdateMissionProfile',
			'http'       => [
				'method'       => 'PUT',
				'requestUri'   => '/missionprofile/{missionProfileId}',
				'responseCode' => 200,
			],
			'input'      => [ 'shape' => 'UpdateMissionProfileRequest', ],
			'output'     => [ 'shape' => 'MissionProfileIdResponse', ],
			'errors'     => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
			'idempotent' => true,
		],
		'GetMinuteUsage'              => [
			'name'   => 'GetMinuteUsage',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/minute-usage',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetMinuteUsageRequest', ],
			'output' => [ 'shape' => 'GetMinuteUsageResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'GetSatellite'                => [
			'name'   => 'GetSatellite',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/satellite/{satelliteId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetSatelliteRequest', ],
			'output' => [ 'shape' => 'GetSatelliteResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListGroundStations'          => [
			'name'   => 'ListGroundStations',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/groundstation',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListGroundStationsRequest', ],
			'output' => [ 'shape' => 'ListGroundStationsResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListSatellites'              => [
			'name'   => 'ListSatellites',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/satellite',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListSatellitesRequest', ],
			'output' => [ 'shape' => 'ListSatellitesResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListTagsForResource'         => [
			'name'   => 'ListTagsForResource',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/tags/{resourceArn}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'TagResource'                 => [
			'name'   => 'TagResource',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/tags/{resourceArn}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'output' => [ 'shape' => 'TagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'UntagResource'               => [
			'name'       => 'UntagResource',
			'http'       => [
				'method'       => 'DELETE',
				'requestUri'   => '/tags/{resourceArn}',
				'responseCode' => 200,
			],
			'input'      => [ 'shape' => 'UntagResourceRequest', ],
			'output'     => [ 'shape' => 'UntagResourceResponse', ],
			'errors'     => [
				[ 'shape' => 'DependencyException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
			'idempotent' => true,
		],
	],
	'shapes'     => [
		'UpdateConfigRequest'                => [
			'type'     => 'structure',
			'required' => [ 'configData', 'configId', 'configType', 'name', ],
			'members'  => [
				'configData' => [ 'shape' => 'ConfigTypeData', ],
				'configId'   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'configId',
				],
				'configType' => [
					'shape'        => 'ConfigCapabilityType',
					'location'     => 'uri',
					'locationName' => 'configType',
				],
				'name'       => [ 'shape' => 'SafeName', ],
			],
		],
		'ConfigTypeData'                     => [
			'type'    => 'structure',
			'members' => [
				'antennaDownlinkConfig'            => [ 'shape' => 'AntennaDownlinkConfig', ],
				'antennaDownlinkDemodDecodeConfig' => [ 'shape' => 'AntennaDownlinkDemodDecodeConfig', ],
				'antennaUplinkConfig'              => [ 'shape' => 'AntennaUplinkConfig', ],
				'dataflowEndpointConfig'           => [ 'shape' => 'DataflowEndpointConfig', ],
				'trackingConfig'                   => [ 'shape' => 'TrackingConfig', ],
				'uplinkEchoConfig'                 => [ 'shape' => 'UplinkEchoConfig', ],
			],
		],
		'noradSatelliteID'                   => [ 'type' => 'integer', 'min' => 1, 'max' => 99999, ],
		'GroundStationData'                  => [
			'type'    => 'structure',
			'members' => [
				'groundStationId'   => [ 'shape' => 'String', ],
				'groundStationName' => [ 'shape' => 'String', ],
				'region'            => [ 'shape' => 'String', ],
			],
		],
		'GetConfigRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'configId', 'configType', ],
			'members'  => [
				'configId'   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'configId',
				],
				'configType' => [
					'shape'        => 'ConfigCapabilityType',
					'location'     => 'uri',
					'locationName' => 'configType',
				],
			],
		],
		'GroundStationList'                  => [ 'type' => 'list', 'member' => [ 'shape' => 'GroundStationData', ], ],
		'SecurityGroupIdList'                => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'EndpointDetails'                    => [
			'type'    => 'structure',
			'members' => [
				'endpoint'        => [ 'shape' => 'DataflowEndpoint', ],
				'securityDetails' => [ 'shape' => 'SecurityDetails', ],
			],
		],
		'DataflowEndpointGroupArn'           => [ 'type' => 'string', ],
		'GetMinuteUsageResponse'             => [
			'type'    => 'structure',
			'members' => [
				'estimatedMinutesRemaining'     => [ 'shape' => 'Integer', ],
				'isReservedMinutesCustomer'     => [ 'shape' => 'Boolean', ],
				'totalReservedMinuteAllocation' => [ 'shape' => 'Integer', ],
				'totalScheduledMinutes'         => [ 'shape' => 'Integer', ],
				'upcomingMinutesScheduled'      => [ 'shape' => 'Integer', ],
			],
		],
		'MissionProfileListItem'             => [
			'type'    => 'structure',
			'members' => [
				'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ],
				'missionProfileId'  => [ 'shape' => 'String', ],
				'name'              => [ 'shape' => 'String', ],
				'region'            => [ 'shape' => 'String', ],
			],
		],
		'SatelliteList'                      => [ 'type' => 'list', 'member' => [ 'shape' => 'SatelliteListItem', ], ],
		'ListDataflowEndpointGroupsResponse' => [
			'type'    => 'structure',
			'members' => [
				'dataflowEndpointGroupList' => [ 'shape' => 'DataflowEndpointGroupList', ],
				'nextToken'                 => [ 'shape' => 'String', ],
			],
		],
		'AntennaDownlinkDemodDecodeConfig'   => [
			'type'     => 'structure',
			'required' => [
				'decodeConfig',
				'demodulationConfig',
				'spectrumConfig',
			],
			'members'  => [
				'decodeConfig'       => [ 'shape' => 'DecodeConfig', ],
				'demodulationConfig' => [ 'shape' => 'DemodulationConfig', ],
				'spectrumConfig'     => [ 'shape' => 'SpectrumConfig', ],
			],
		],
		'MissionProfileIdResponse'           => [
			'type'    => 'structure',
			'members' => [ 'missionProfileId' => [ 'shape' => 'String', ], ],
		],
		'SubnetList'                         => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'Polarization'                       => [
			'type' => 'string',
			'enum' => [ 'LEFT_HAND', 'NONE', 'RIGHT_HAND', ],
		],
		'ConfigList'                         => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigListItem', ], ],
		'AntennaUplinkConfig'                => [
			'type'     => 'structure',
			'required' => [ 'spectrumConfig', 'targetEirp', ],
			'members'  => [
				'spectrumConfig' => [ 'shape' => 'UplinkSpectrumConfig', ],
				'targetEirp'     => [ 'shape' => 'Eirp', ],
			],
		],
		'Integer'                            => [ 'type' => 'integer', 'box' => true, ],
		'AntennaDownlinkConfig'              => [
			'type'     => 'structure',
			'required' => [ 'spectrumConfig', ],
			'members'  => [ 'spectrumConfig' => [ 'shape' => 'SpectrumConfig', ], ],
		],
		'Boolean'                            => [ 'type' => 'boolean', 'box' => true, ],
		'EndpointStatus'                     => [
			'type' => 'string',
			'enum' => [ 'created', 'creating', 'deleted', 'deleting', 'failed', ],
		],
		'UplinkEchoConfig'                   => [
			'type'     => 'structure',
			'required' => [ 'antennaUplinkConfigArn', 'enabled', ],
			'members'  => [
				'antennaUplinkConfigArn' => [ 'shape' => 'ConfigArn', ],
				'enabled'                => [ 'shape' => 'Boolean', ],
			],
		],
		'DecodeConfig'                       => [
			'type'     => 'structure',
			'required' => [ 'unvalidatedJSON', ],
			'members'  => [ 'unvalidatedJSON' => [ 'shape' => 'JsonString', ], ],
		],
		'DeleteDataflowEndpointGroupRequest' => [
			'type'     => 'structure',
			'required' => [ 'dataflowEndpointGroupId', ],
			'members'  => [
				'dataflowEndpointGroupId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'dataflowEndpointGroupId',
				],
			],
		],
		'ContactStatus'                      => [
			'type' => 'string',
			'enum' => [
				'AVAILABLE',
				'AWS_CANCELLED',
				'CANCELLED',
				'COMPLETED',
				'FAILED',
				'FAILED_TO_SCHEDULE',
				'PASS',
				'POSTPASS',
				'PREPASS',
				'SCHEDULED',
				'SCHEDULING',
			],
		],
		'MissionProfileList'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MissionProfileListItem', ],
		],
		'CreateConfigRequest'                => [
			'type'     => 'structure',
			'required' => [ 'configData', 'name', ],
			'members'  => [
				'configData' => [ 'shape' => 'ConfigTypeData', ],
				'name'       => [ 'shape' => 'SafeName', ],
				'tags'       => [ 'shape' => 'TagsMap', ],
			],
		],
		'Frequency'                          => [
			'type'     => 'structure',
			'required' => [ 'units', 'value', ],
			'members'  => [
				'units' => [ 'shape' => 'FrequencyUnits', ],
				'value' => [ 'shape' => 'Double', ],
			],
		],
		'UntagResourceResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'ConfigIdResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'configArn'  => [ 'shape' => 'ConfigArn', ],
				'configId'   => [ 'shape' => 'String', ],
				'configType' => [ 'shape' => 'ConfigCapabilityType', ],
			],
		],
		'SecurityDetails'                    => [
			'type'     => 'structure',
			'required' => [ 'roleArn', 'securityGroupIds', 'subnetIds', ],
			'members'  => [
				'roleArn'          => [ 'shape' => 'RoleArn', ],
				'securityGroupIds' => [ 'shape' => 'SecurityGroupIdList', ],
				'subnetIds'        => [ 'shape' => 'SubnetList', ],
			],
		],
		'TrackingConfig'                     => [
			'type'     => 'structure',
			'required' => [ 'autotrack', ],
			'members'  => [ 'autotrack' => [ 'shape' => 'Criticality', ], ],
		],
		'CreateDataflowEndpointGroupRequest' => [
			'type'     => 'structure',
			'required' => [ 'endpointDetails', ],
			'members'  => [
				'endpointDetails' => [ 'shape' => 'EndpointDetailsList', ],
				'tags'            => [ 'shape' => 'TagsMap', ],
			],
		],
		'Elevation'                          => [
			'type'     => 'structure',
			'required' => [ 'unit', 'value', ],
			'members'  => [
				'unit'  => [ 'shape' => 'AngleUnits', ],
				'value' => [ 'shape' => 'Double', ],
			],
		],
		'JsonString'                         => [ 'type' => 'string', 'min' => 2, 'max' => 8192, ],
		'GetSatelliteRequest'                => [
			'type'     => 'structure',
			'required' => [ 'satelliteId', ],
			'members'  => [
				'satelliteId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'satelliteId',
				],
			],
		],
		'CancelContactRequest'               => [
			'type'     => 'structure',
			'required' => [ 'contactId', ],
			'members'  => [
				'contactId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'contactId',
				],
			],
		],
		'UplinkSpectrumConfig'               => [
			'type'     => 'structure',
			'required' => [ 'centerFrequency', ],
			'members'  => [
				'centerFrequency' => [ 'shape' => 'Frequency', ],
				'polarization'    => [ 'shape' => 'Polarization', ],
			],
		],
		'UntagResourceRequest'               => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', 'tagKeys', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'tagKeys'     => [
					'shape'        => 'TagKeys',
					'location'     => 'querystring',
					'locationName' => 'tagKeys',
				],
			],
		],
		'satelliteArn'                       => [ 'type' => 'string', ],
		'GetMissionProfileResponse'          => [
			'type'    => 'structure',
			'members' => [
				'contactPostPassDurationSeconds'      => [ 'shape' => 'DurationInSeconds', ],
				'contactPrePassDurationSeconds'       => [ 'shape' => 'DurationInSeconds', ],
				'dataflowEdges'                       => [ 'shape' => 'DataflowEdgeList', ],
				'minimumViableContactDurationSeconds' => [ 'shape' => 'DurationInSeconds', ],
				'missionProfileArn'                   => [ 'shape' => 'MissionProfileArn', ],
				'missionProfileId'                    => [ 'shape' => 'String', ],
				'name'                                => [ 'shape' => 'String', ],
				'region'                              => [ 'shape' => 'String', ],
				'tags'                                => [ 'shape' => 'TagsMap', ],
				'trackingConfigArn'                   => [ 'shape' => 'ConfigArn', ],
			],
		],
		'ContactIdResponse'                  => [
			'type'    => 'structure',
			'members' => [ 'contactId' => [ 'shape' => 'String', ], ],
		],
		'EndpointDetailsList'                => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointDetails', ], ],
		'ListGroundStationsRequest'          => [
			'type'    => 'structure',
			'members' => [
				'maxResults' => [
					'shape'        => 'Integer',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'InvalidParameterException'          => [
			'type'      => 'structure',
			'members'   => [
				'message'       => [ 'shape' => 'String', ],
				'parameterName' => [ 'shape' => 'String', ],
			],
			'exception' => true,
			'error'     => [
				'code'           => 'InvalidParameterException',
				'httpStatusCode' => 431,
				'senderFault'    => true,
			],
		],
		'DependencyException'                => [
			'type'      => 'structure',
			'members'   => [
				'message'       => [ 'shape' => 'String', ],
				'parameterName' => [ 'shape' => 'String', ],
			],
			'exception' => true,
			'error'     => [
				'code'           => 'DependencyException',
				'httpStatusCode' => 531,
				'fault'          => true,
			],
		],
		'DescribeContactRequest'             => [
			'type'     => 'structure',
			'required' => [ 'contactId', ],
			'members'  => [
				'contactId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'contactId',
				],
			],
		],
		'ResourceNotFoundException'          => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'exception' => true,
			'error'     => [
				'code'           => 'ResourceNotFoundException',
				'httpStatusCode' => 434,
				'senderFault'    => true,
			],
		],
		'Timestamp'                          => [ 'type' => 'timestamp', ],
		'DeleteConfigRequest'                => [
			'type'     => 'structure',
			'required' => [ 'configId', 'configType', ],
			'members'  => [
				'configId'   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'configId',
				],
				'configType' => [
					'shape'        => 'ConfigCapabilityType',
					'location'     => 'uri',
					'locationName' => 'configType',
				],
			],
		],
		'BandwidthUnits'                     => [ 'type' => 'string', 'enum' => [ 'GHz', 'MHz', 'kHz', ], ],
		'SpectrumConfig'                     => [
			'type'     => 'structure',
			'required' => [ 'bandwidth', 'centerFrequency', ],
			'members'  => [
				'bandwidth'       => [ 'shape' => 'FrequencyBandwidth', ],
				'centerFrequency' => [ 'shape' => 'Frequency', ],
				'polarization'    => [ 'shape' => 'Polarization', ],
			],
		],
		'DemodulationConfig'                 => [
			'type'     => 'structure',
			'required' => [ 'unvalidatedJSON', ],
			'members'  => [ 'unvalidatedJSON' => [ 'shape' => 'JsonString', ], ],
		],
		'ListMissionProfilesResponse'        => [
			'type'    => 'structure',
			'members' => [
				'missionProfileList' => [ 'shape' => 'MissionProfileList', ],
				'nextToken'          => [ 'shape' => 'String', ],
			],
		],
		'ListConfigsResponse'                => [
			'type'    => 'structure',
			'members' => [
				'configList' => [ 'shape' => 'ConfigList', ],
				'nextToken'  => [ 'shape' => 'String', ],
			],
		],
		'DataflowEdge'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigArn', ],
			'min'    => 2,
			'max'    => 2,
		],
		'SafeName'                           => [
			'type'    => 'string',
			'min'     => 1,
			'max'     => 256,
			'pattern' => '^[ a-zA-Z0-9_:-]+$',
		],
		'Eirp'                               => [
			'type'     => 'structure',
			'required' => [ 'units', 'value', ],
			'members'  => [
				'units' => [ 'shape' => 'EirpUnits', ],
				'value' => [ 'shape' => 'Double', ],
			],
		],
		'RoleArn'                            => [ 'type' => 'string', ],
		'ListMissionProfilesRequest'         => [
			'type'    => 'structure',
			'members' => [
				'maxResults' => [
					'shape'        => 'Integer',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'GetSatelliteResponse'               => [
			'type'    => 'structure',
			'members' => [
				'dateCreated'      => [ 'shape' => 'Timestamp', ],
				'lastUpdated'      => [ 'shape' => 'Timestamp', ],
				'noradSatelliteID' => [ 'shape' => 'noradSatelliteID', ],
				'satelliteArn'     => [ 'shape' => 'satelliteArn', ],
				'satelliteId'      => [ 'shape' => 'Uuid', ],
				'tags'             => [ 'shape' => 'TagsMap', ],
			],
		],
		'StatusList'                         => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactStatus', ], ],
		'ListContactsRequest'                => [
			'type'     => 'structure',
			'required' => [ 'endTime', 'startTime', 'statusList', ],
			'members'  => [
				'endTime'           => [ 'shape' => 'Timestamp', ],
				'groundStation'     => [ 'shape' => 'String', ],
				'maxResults'        => [ 'shape' => 'Integer', ],
				'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ],
				'nextToken'         => [ 'shape' => 'String', ],
				'satelliteArn'      => [ 'shape' => 'satelliteArn', ],
				'startTime'         => [ 'shape' => 'Timestamp', ],
				'statusList'        => [ 'shape' => 'StatusList', ],
			],
		],
		'ContactData'                        => [
			'type'    => 'structure',
			'members' => [
				'contactId'         => [ 'shape' => 'String', ],
				'contactStatus'     => [ 'shape' => 'ContactStatus', ],
				'endTime'           => [ 'shape' => 'Timestamp', ],
				'errorMessage'      => [ 'shape' => 'String', ],
				'groundStation'     => [ 'shape' => 'String', ],
				'maximumElevation'  => [ 'shape' => 'Elevation', ],
				'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ],
				'postPassEndTime'   => [ 'shape' => 'Timestamp', ],
				'prePassStartTime'  => [ 'shape' => 'Timestamp', ],
				'satelliteArn'      => [ 'shape' => 'satelliteArn', ],
				'startTime'         => [ 'shape' => 'Timestamp', ],
				'tags'              => [ 'shape' => 'TagsMap', ],
			],
		],
		'ListGroundStationsResponse'         => [
			'type'    => 'structure',
			'members' => [
				'groundStationList' => [ 'shape' => 'GroundStationList', ],
				'nextToken'         => [ 'shape' => 'String', ],
			],
		],
		'DataflowEndpoint'                   => [
			'type'    => 'structure',
			'members' => [
				'address' => [ 'shape' => 'SocketAddress', ],
				'name'    => [ 'shape' => 'SafeName', ],
				'status'  => [ 'shape' => 'EndpointStatus', ],
			],
		],
		'ListConfigsRequest'                 => [
			'type'    => 'structure',
			'members' => [
				'maxResults' => [
					'shape'        => 'Integer',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'SocketAddress'                      => [
			'type'     => 'structure',
			'required' => [ 'name', 'port', ],
			'members'  => [
				'name' => [ 'shape' => 'String', ],
				'port' => [ 'shape' => 'Integer', ],
			],
		],
		'GetConfigResponse'                  => [
			'type'     => 'structure',
			'required' => [ 'configArn', 'configData', 'configId', 'name', ],
			'members'  => [
				'configArn'  => [ 'shape' => 'ConfigArn', ],
				'configData' => [ 'shape' => 'ConfigTypeData', ],
				'configId'   => [ 'shape' => 'String', ],
				'configType' => [ 'shape' => 'ConfigCapabilityType', ],
				'name'       => [ 'shape' => 'String', ],
				'tags'       => [ 'shape' => 'TagsMap', ],
			],
		],
		'TagsMap'                            => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'String', ],
		],
		'TagResourceResponse'                => [ 'type' => 'structure', 'members' => [], ],
		'DeleteMissionProfileRequest'        => [
			'type'     => 'structure',
			'required' => [ 'missionProfileId', ],
			'members'  => [
				'missionProfileId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'missionProfileId',
				],
			],
		],
		'DataflowEndpointGroupList'          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DataflowEndpointListItem', ],
		],
		'ContactList'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactData', ], ],
		'DurationInSeconds'                  => [ 'type' => 'integer', 'min' => 1, 'max' => 21600, ],
		'SatelliteListItem'                  => [
			'type'    => 'structure',
			'members' => [
				'noradSatelliteID' => [ 'shape' => 'noradSatelliteID', ],
				'satelliteArn'     => [ 'shape' => 'satelliteArn', ],
				'satelliteId'      => [ 'shape' => 'Uuid', ],
			],
		],
		'GetMissionProfileRequest'           => [
			'type'     => 'structure',
			'required' => [ 'missionProfileId', ],
			'members'  => [
				'missionProfileId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'missionProfileId',
				],
			],
		],
		'Double'                             => [ 'type' => 'double', 'box' => true, ],
		'ListSatellitesResponse'             => [
			'type'    => 'structure',
			'members' => [
				'nextToken'  => [ 'shape' => 'String', ],
				'satellites' => [ 'shape' => 'SatelliteList', ],
			],
		],
		'CreateMissionProfileRequest'        => [
			'type'     => 'structure',
			'required' => [
				'dataflowEdges',
				'minimumViableContactDurationSeconds',
				'name',
				'trackingConfigArn',
			],
			'members'  => [
				'contactPostPassDurationSeconds'      => [ 'shape' => 'DurationInSeconds', ],
				'contactPrePassDurationSeconds'       => [ 'shape' => 'DurationInSeconds', ],
				'dataflowEdges'                       => [ 'shape' => 'DataflowEdgeList', ],
				'minimumViableContactDurationSeconds' => [ 'shape' => 'DurationInSeconds', ],
				'name'                                => [ 'shape' => 'SafeName', ],
				'tags'                                => [ 'shape' => 'TagsMap', ],
				'trackingConfigArn'                   => [ 'shape' => 'ConfigArn', ],
			],
		],
		'ReserveContactRequest'              => [
			'type'     => 'structure',
			'required' => [
				'endTime',
				'groundStation',
				'missionProfileArn',
				'satelliteArn',
				'startTime',
			],
			'members'  => [
				'endTime'           => [ 'shape' => 'Timestamp', ],
				'groundStation'     => [ 'shape' => 'String', ],
				'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ],
				'satelliteArn'      => [ 'shape' => 'satelliteArn', ],
				'startTime'         => [ 'shape' => 'Timestamp', ],
				'tags'              => [ 'shape' => 'TagsMap', ],
			],
		],
		'DataflowEndpointConfig'             => [
			'type'     => 'structure',
			'required' => [ 'dataflowEndpointName', ],
			'members'  => [ 'dataflowEndpointName' => [ 'shape' => 'String', ], ],
		],
		'Uuid'                               => [
			'type'    => 'string',
			'min'     => 1,
			'max'     => 128,
			'pattern' => '[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}',
		],
		'ListTagsForResourceResponse'        => [
			'type'    => 'structure',
			'members' => [ 'tags' => [ 'shape' => 'TagsMap', ], ],
		],
		'MissionProfileArn'                  => [ 'type' => 'string', ],
		'ListContactsResponse'               => [
			'type'    => 'structure',
			'members' => [
				'contactList' => [ 'shape' => 'ContactList', ],
				'nextToken'   => [ 'shape' => 'String', ],
			],
		],
		'DataflowEdgeList'                   => [ 'type' => 'list', 'member' => [ 'shape' => 'DataflowEdge', ], ],
		'DescribeContactResponse'            => [
			'type'    => 'structure',
			'members' => [
				'contactId'         => [ 'shape' => 'String', ],
				'contactStatus'     => [ 'shape' => 'ContactStatus', ],
				'endTime'           => [ 'shape' => 'Timestamp', ],
				'errorMessage'      => [ 'shape' => 'String', ],
				'groundStation'     => [ 'shape' => 'String', ],
				'maximumElevation'  => [ 'shape' => 'Elevation', ],
				'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ],
				'postPassEndTime'   => [ 'shape' => 'Timestamp', ],
				'prePassStartTime'  => [ 'shape' => 'Timestamp', ],
				'satelliteArn'      => [ 'shape' => 'satelliteArn', ],
				'startTime'         => [ 'shape' => 'Timestamp', ],
				'tags'              => [ 'shape' => 'TagsMap', ],
			],
		],
		'ConfigListItem'                     => [
			'type'    => 'structure',
			'members' => [
				'configArn'  => [ 'shape' => 'ConfigArn', ],
				'configId'   => [ 'shape' => 'String', ],
				'configType' => [ 'shape' => 'ConfigCapabilityType', ],
				'name'       => [ 'shape' => 'String', ],
			],
		],
		'ListTagsForResourceRequest'         => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
			],
		],
		'ListDataflowEndpointGroupsRequest'  => [
			'type'    => 'structure',
			'members' => [
				'maxResults' => [
					'shape'        => 'Integer',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'FrequencyBandwidth'                 => [
			'type'     => 'structure',
			'required' => [ 'units', 'value', ],
			'members'  => [
				'units' => [ 'shape' => 'BandwidthUnits', ],
				'value' => [ 'shape' => 'Double', ],
			],
		],
		'String'                             => [ 'type' => 'string', ],
		'ListSatellitesRequest'              => [
			'type'    => 'structure',
			'members' => [
				'maxResults' => [
					'shape'        => 'Integer',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'UpdateMissionProfileRequest'        => [
			'type'     => 'structure',
			'required' => [ 'missionProfileId', ],
			'members'  => [
				'contactPostPassDurationSeconds'      => [ 'shape' => 'DurationInSeconds', ],
				'contactPrePassDurationSeconds'       => [ 'shape' => 'DurationInSeconds', ],
				'dataflowEdges'                       => [ 'shape' => 'DataflowEdgeList', ],
				'minimumViableContactDurationSeconds' => [ 'shape' => 'DurationInSeconds', ],
				'missionProfileId'                    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'missionProfileId',
				],
				'name'                                => [ 'shape' => 'SafeName', ],
				'trackingConfigArn'                   => [ 'shape' => 'ConfigArn', ],
			],
		],
		'FrequencyUnits'                     => [ 'type' => 'string', 'enum' => [ 'GHz', 'MHz', 'kHz', ], ],
		'TagResourceRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'tags'        => [ 'shape' => 'TagsMap', ],
			],
		],
		'Criticality'                        => [
			'type' => 'string',
			'enum' => [ 'PREFERRED', 'REMOVED', 'REQUIRED', ],
		],
		'ConfigCapabilityType'               => [
			'type' => 'string',
			'enum' => [
				'antenna-downlink',
				'antenna-downlink-demod-decode',
				'antenna-uplink',
				'dataflow-endpoint',
				'tracking',
				'uplink-echo',
			],
		],
		'TagKeys'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'AngleUnits'                         => [ 'type' => 'string', 'enum' => [ 'DEGREE_ANGLE', 'RADIAN', ], ],
		'DataflowEndpointListItem'           => [
			'type'    => 'structure',
			'members' => [
				'dataflowEndpointGroupArn' => [ 'shape' => 'DataflowEndpointGroupArn', ],
				'dataflowEndpointGroupId'  => [ 'shape' => 'String', ],
			],
		],
		'GetDataflowEndpointGroupResponse'   => [
			'type'    => 'structure',
			'members' => [
				'dataflowEndpointGroupArn' => [ 'shape' => 'DataflowEndpointGroupArn', ],
				'dataflowEndpointGroupId'  => [ 'shape' => 'String', ],
				'endpointsDetails'         => [ 'shape' => 'EndpointDetailsList', ],
				'tags'                     => [ 'shape' => 'TagsMap', ],
			],
		],
		'GetDataflowEndpointGroupRequest'    => [
			'type'     => 'structure',
			'required' => [ 'dataflowEndpointGroupId', ],
			'members'  => [
				'dataflowEndpointGroupId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'dataflowEndpointGroupId',
				],
			],
		],
		'ConfigArn'                          => [ 'type' => 'string', ],
		'GetMinuteUsageRequest'              => [
			'type'     => 'structure',
			'required' => [ 'month', 'year', ],
			'members'  => [
				'month' => [ 'shape' => 'Integer', ],
				'year'  => [ 'shape' => 'Integer', ],
			],
		],
		'DataflowEndpointGroupIdResponse'    => [
			'type'    => 'structure',
			'members' => [ 'dataflowEndpointGroupId' => [ 'shape' => 'String', ], ],
		],
		'EirpUnits'                          => [ 'type' => 'string', 'enum' => [ 'dBW', ], ],
	],
];
