<?php
/*
For a multithreaded replica, the replica uses multiple worker threads and a coordinator thread to manage them, and this table shows the status of the coordinator thread.
For a single-threaded replica, this table is empty. For a multithreaded replica, the replication_applier_status_by_worker table shows the status of the worker threads.
This table provides information about the last transaction which was buffered by the coordinator thread to a worker’s queue, as well as the transaction it is currently buffering.
The start timestamp refers to when this thread read the first event of the transaction from the relay log to buffer it to a worker’s queue,
while the end timestamp refers to when the last event finished buffering to the worker’s queue.

对于多线程副本，副本使用多个工作线程和一个协调线程来管理它们，此表显示了协调线程的状态。对于单线程副本，此表为空。对于多线程副本，replication_applier_status_by_worker表显示工作线程的状态。
这个表提供了有关协调线程缓冲到工作队列的最后一个事务的信息，以及它当前缓冲的事务。开始时间戳指这个线程从中继日志中读取事务的第一个事件并将其缓冲到工作线程队列的时间，
而结束时间戳指最后一个事件完成缓冲到工作线程队列的时间。
*/

return [
	//SQL or coordinator thread applier status
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-replication-applier-status-by-coordinator-table.html
	'tableName' => 'replication_applier_status_by_coordinator',
	'tableDesc' => 'SQL或协调线程应用程序状态',
	'fields' => [
		'CHANNEL_NAME' => [
			//The replication channel which this row is displaying. There is always a default replication channel, and more replication channels can be added. See Section 17.2.2, “Replication Channels” for more information.
			'name' => '复制通道',
			'desc' => '该行所显示的复制通道。始终存在一个默认复制通道，可以添加更多复制通道。更多信息请参见17.2.2节“复制通道”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-channels.html',
			'link' => '',
			'linkDesc' => ''
		],
		'THREAD_ID' => [
			//The SQL/coordinator thread ID.
			'name' => 'SQL/协调线程ID',
			'desc' => 'SQL/协调线程ID。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SERVICE_STATE' => [
			//ON (thread exists and is active or idle) or OFF (thread no longer exists).
			'name' => '线程是否存在',
			'desc' => 'ON（线程存在并且处于活动或空闲状态）或OFF（线程不再存在）',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_ERROR_NUMBER' => [
			//The error number and error message of the most recent error that caused the SQL/coordinator thread to stop. An error number of 0 and message which is an empty string means “no error”.
			//If the LAST_ERROR_MESSAGE value is not empty, the error values also appear in the replica's error log.
			//Issuing RESET MASTER or RESET SLAVE resets the values shown in these columns.
			//All error codes and messages displayed in the LAST_ERROR_NUMBER and LAST_ERROR_MESSAGE columns correspond to error values listed in Server Error Message Reference.
			'name' => '错误代码',
			'desc' => '导致SQL/协调线程停止的最近错误的错误号和错误消息。错误数为0，空字符串表示“没有错误”。如果LAST_ERROR_MESSAGE值不是空的，则错误值也会出现在副本的错误日志中。发出RESET MASTER或RESET SLAVE将重置这些列中显示的值。LAST_ERROR_NUMBER和LAST_ERROR_MESSAGE列中显示的所有错误代码和消息都对应于服务器错误消息引用中列出的错误值。',
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
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the most recent SQL/coordinator error occurred.
			'name' => '最近的SQL/coordinator错误发生的时间',
			'desc' => '一个时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]，显示最近的SQL/coordinator错误发生的时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_PROCESSED_TRANSACTION' => [
			//The global transaction ID (GTID) of the last transaction processed by this coordinator.
			'name' => '全局事务ID',
			'desc' => '此协调器处理的最后一个事务的全局事务ID (GTID)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_PROCESSED_TRANSACTION_ORIGINAL_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the last transaction processed by this coordinator was committed on the original source.
			'name' => '最后一个事务是何时提交到原始源上的',
			'desc' => 'YYYY-MM-DD hh:mm:ss[.fraction]格式的时间戳，显示该协调器处理的最后一个事务是何时提交到原始源上的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_PROCESSED_TRANSACTION_IMMEDIATE_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the last transaction processed by this coordinator was committed on the immediate source.
			'name' => '最后一个事务是何时提交到直接源上的',
			'desc' => 'YYYY-MM-DD hh:mm:ss[.fraction]格式的时间戳，显示此协调器处理的最后一个事务是何时提交到直接源上的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_PROCESSED_TRANSACTION_START_BUFFER_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when this coordinator thread started writing the last transaction to the buffer of a worker thread.
			'name' => '何时开始向工作线程的缓冲区写入最后一个事务',
			'desc' => '以YYYY-MM-DD hh:mm:ss[.fraction]格式显示的时间戳，显示协调线程何时开始向工作线程的缓冲区写入最后一个事务。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_PROCESSED_TRANSACTION_END_BUFFER_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the last transaction was written to the buffer of a worker thread by this coordinator thread.
			'name' => '何时将最后一个事务写到工作线程的缓冲区',
			'desc' => '一个时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]，显示这个协调线程在何时将最后一个事务写到工作线程的缓冲区。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSING_TRANSACTION' => [
			//The global transaction ID (GTID) of the transaction that this coordinator thread is currently processing.
			'name' => '正在处理的事务的全局事务ID',
			'desc' => '此协调线程当前正在处理的事务的全局事务ID (GTID)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSING_TRANSACTION_ORIGINAL_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the currently processing transaction was committed on the original source.
			'name' => '正在处理的事务是何时提交到原始数据源的时间戳',
			'desc' => '以YYYY-MM-DD hh:mm:ss[.fraction]格式显示当前正在处理的事务是何时提交到原始数据源的时间戳。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSING_TRANSACTION_IMMEDIATE_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the currently processing transaction was committed on the immediate source.
			'name' => '正在处理的事务是何时在直接源上提交的',
			'desc' => 'YYYY-MM-DD hh:mm:ss[.fraction]格式的时间戳，显示当前正在处理的事务是何时在直接源上提交的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSING_TRANSACTION_START_BUFFER_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when this coordinator thread started writing the currently processing transaction to the buffer of a worker thread.
			'name' => '何时开始将当前正在处理的事务写入工作线程的缓冲区',
			'desc' => '一个时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]，显示协调线程何时开始将当前正在处理的事务写入工作线程的缓冲区。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];
