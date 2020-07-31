<?php
// This file was auto-generated from sdk-root/src/data/medialive/2017-10-14/waiters-2.json
return [
	'version' => 2,
	'waiters' => [
		'ChannelCreated' => [
			'description' => 'Wait until a channel has been created',
			'operation'   => 'DescribeChannel',
			'delay'       => 3,
			'maxAttempts' => 5,
			'acceptors'   => [
				[
					'state'    => 'success',
					'matcher'  => 'path',
					'argument' => 'State',
					'expected' => 'IDLE',
				],
				[
					'state'    => 'retry',
					'matcher'  => 'path',
					'argument' => 'State',
					'expected' => 'CREATING',
				],
				[ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ],
				[
					'state'    => 'failure',
					'matcher'  => 'path',
					'argument' => 'State',
					'expected' => 'CREATE_FAILED',
				],
			],
		],
		'ChannelRunning' => [
			'description' => 'Wait until a channel is running',
			'operation'   => 'DescribeChannel',
			'delay'       => 5,
			'maxAttempts' => 120,
			'acceptors'   => [
				[
					'state'    => 'success',
					'matcher'  => 'path',
					'argument' => 'State',
					'expected' => 'RUNNING',
				],
				[
					'state'    => 'retry',
					'matcher'  => 'path',
					'argument' => 'State',
					'expected' => 'STARTING',
				],
				[ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ],
			],
		],
		'ChannelStopped' => [
			'description' => 'Wait until a channel has is stopped',
			'operation'   => 'DescribeChannel',
			'delay'       => 5,
			'maxAttempts' => 28,
			'acceptors'   => [
				[
					'state'    => 'success',
					'matcher'  => 'path',
					'argument' => 'State',
					'expected' => 'IDLE',
				],
				[
					'state'    => 'retry',
					'matcher'  => 'path',
					'argument' => 'State',
					'expected' => 'STOPPING',
				],
				[ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ],
			],
		],
		'ChannelDeleted' => [
			'description' => 'Wait until a channel has been deleted',
			'operation'   => 'DescribeChannel',
			'delay'       => 5,
			'maxAttempts' => 20,
			'acceptors'   => [
				[
					'state'    => 'success',
					'matcher'  => 'path',
					'argument' => 'State',
					'expected' => 'DELETED',
				],
				[
					'state'    => 'retry',
					'matcher'  => 'path',
					'argument' => 'State',
					'expected' => 'DELETING',
				],
				[ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ],
			],
		],
	],
];
