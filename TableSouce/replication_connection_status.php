<?php
/*
This table shows the current status of the I/O thread that handles the replica's connection to the source, information on the last transaction queued in the relay log, 
and information on the transaction currently being queued in the relay log.

Compared to the replication_connection_configuration table, replication_connection_status changes more frequently. It contains values that change during the connection, 
whereas replication_connection_configuration contains values which define how the replica connects to the source and that remain constant during the connection.

此表显示了处理副本到源的连接的I/O线程的当前状态、在中继日志中排队的最后一个事务的信息，以及在中继日志中排队的当前事务的信息。

与replication_connection_configuration表相比，replication_connection_status更改得更频繁。它包含在连接期间更改的值，而replication_connection_configuration包含定义副本如何连接到源的值，并且在连接期间保持不变。
*/

return [
	//Current status of the connection to the source
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-replication-connection-status-table.html
	'tableName' => 'replication_connection_status',
	'tableDesc' => '到源的连接的当前状态',
	'fields' => [
		'CHANNEL_NAME' => [
			//The replication channel which this row is displaying. There is always a default replication channel, and more replication channels can be added. See Section 17.2.2, “Replication Channels” for more information.
			'name' => '复制通道',
			'desc' => '该行所显示的复制通道。始终存在一个默认复制通道，可以添加更多复制通道。更多信息请参见17.2.2节“复制通道”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-channels.html',
			'link' => '',
			'linkDesc' => ''
		],
		'GROUP_NAME' => [
			//If this server is a member of a group, shows the name of the group the server belongs to.
			'name' => '所属组的名称',
			'desc' => '如果此服务器是某个组的成员，则显示该服务器所属的组的名称。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SOURCE_UUID' => [
			//The server_uuid value from the source.
			'name' => 'SOURCE_UUID',
			'desc' => '来自源的server_uuid值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'THREAD_ID' => [
			//The I/O thread ID.
			'name' => 'I/O线程ID',
			'desc' => 'I/O线程ID。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SERVICE_STATE' => [
			//ON (thread exists and is active or idle), OFF (thread no longer exists), or CONNECTING (thread exists and is connecting to the source).
			'name' => '线程是否存在',
			'desc' => 'ON(线程存在并且是活动的或空闲的)，OFF(线程不再存在)，或connection(线程存在并且正在连接到源)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_RECEIVED_HEARTBEATS' => [
			//The total number of heartbeat signals that a replica received since the last time it was restarted or reset, or a CHANGE MASTER TO statement was issued.
			'name' => '心跳信号总数',
			'desc' => '自上次重新启动或重置或发出CHANGE MASTER TO语句以来，副本接收到的心跳信号的总数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_HEARTBEAT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the most recent heartbeat signal was received by a replica.
			'name' => '何时接收到最新的心跳信号',
			'desc' => '一个时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]，它显示了一个副本何时接收到最新的心跳信号。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'RECEIVED_TRANSACTION_SET' => [
			//The set of global transaction IDs (GTIDs) corresponding to all transactions received by this replica. Empty if GTIDs are not in use. See GTID Sets for more information.
			'name' => '全局事务id',
			'desc' => '与此副本接收到的所有事务对应的全局事务id (GTIDs)集。如果未使用GTIDs，则为空。有关更多信息，请参阅GTID集。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_ERROR_NUMBER' => [
			//The error number and error message of the most recent error that caused the I/O thread to stop. 
			//An error number of 0 and message of the empty string mean “no error.” If the LAST_ERROR_MESSAGE value is not empty, the error values also appear in the replica's error log.
			//Issuing RESET MASTER or RESET SLAVE resets the values shown in these columns.
			'name' => '错误数',
			'desc' => '导致I/O线程停止的最近错误的错误编号和错误消息。错误数为0，空字符串的消息表示“没有错误”。如果LAST_ERROR_MESSAGE值不是空的，则错误值也会出现在副本的错误日志中。发出RESET MASTER或RESET SLAVE将重置这些列中显示的值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_ERROR_MESSAGE' => [
			//
			'name' => '错误消息',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'LAST_ERROR_NUMBER'
		],
		'LAST_ERROR_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the most recent I/O error took place.
			'name' => '最近I/O错误发生的时间',
			'desc' => '以YYYY-MM-DD hh:mm:ss[.fraction]格式显示最近的I/O错误发生的时间戳。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_QUEUED_TRANSACTION' => [
			//The global transaction ID (GTID) of the last transaction that was queued to the relay log.
			'name' => '全局事务ID',
			'desc' => '排队到中继日志中的最后一个事务的全局事务ID (GTID)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_QUEUED_TRANSACTION_ORIGINAL_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the last transaction queued in the relay log was committed on the original source.
			'name' => '最后一个事务何时提交到原始源',
			'desc' => 'YYYY-MM-DD hh:mm:ss[.fraction格式的时间戳，显示在中继日志中排队的最后一个事务何时提交到原始源。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_QUEUED_TRANSACTION_IMMEDIATE_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the last transaction queued in the relay log was committed on the immediate source.
			'name' => '最后一个事务何时提交到直接源上',
			'desc' => 'YYYY-MM-DD hh:mm:ss[.fraction]格式的时间戳，显示在中继日志中排队的最后一个事务何时提交到直接源上。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_QUEUED_TRANSACTION_START_QUEUE_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the last transaction was placed in the relay log queue by this I/O thread.
			'name' => '最后一个事务放入中继日志队列',
			'desc' => '一个时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]，显示这个I/O线程在何时将最后一个事务放入中继日志队列。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_QUEUED_TRANSACTION_END_QUEUE_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the last transaction was queued to the relay log files.
			'name' => '何时排队到中继日志文件中',
			'desc' => 'YYYY-MM-DD hh:mm:ss[.fraction]格式的时间戳，显示最后一个事务何时排队到中继日志文件中。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUEUEING_TRANSACTION' => [
			//The global transaction ID (GTID) of the currently queueing transaction in the relay log.
			'name' => '全局事务ID',
			'desc' => '中继日志中当前排队事务的全局事务ID (GTID)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUEUEING_TRANSACTION_ORIGINAL_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the currently queueing transaction was committed on the original source.
			'name' => '何时在原始数据源上提交',
			'desc' => '一个时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]，显示当前排队的事务何时在原始数据源上提交。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUEUEING_TRANSACTION_IMMEDIATE_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the currently queueing transaction was committed on the immediate source.
			'name' => '何时提交到直接源上',
			'desc' => '一个时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]，显示当前队列中的事务何时提交到直接源上。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUEUEING_TRANSACTION_START_QUEUE_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the first event of the currently queueing transaction was written to the relay log by this I/O thread.
			'name' => '何时被这个I/O线程写入中继日志',
			'desc' => '一个时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]，显示当前排队的事务的第一个事件何时被这个I/O线程写入中继日志。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];