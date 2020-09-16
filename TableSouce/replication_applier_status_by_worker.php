<?php
/*
This table provides details of the transactions handled by applier threads on a replica or Group Replication group member. For a single-threaded replica,
data is shown for the replica's single applier thread. For a multithreaded replica, data is shown individually for each applier thread.
The applier threads on a multithreaded replica are sometimes called workers. The number of applier threads on a replica or Group Replication group member is set by the slave_parallel_workers system variable,
which is set to zero for a single-threaded replica. A multithreaded replica also has a coordinator thread to manage the applier threads,
and the status of this thread is shown in the replication_applier_status_by_coordinator table.

All error codes and messages displayed in the columns relating to errors correspond to error values listed in Server Error Message Reference.

When the Performance Schema is disabled, local timing information is not collected, so the fields showing the start and end timestamps for applied transactions are zero.
The start timestamps in this table refer to when the worker started applying the first event, and the end timestamps refer to when the last event of the transaction was applied.

When a replica is restarted by a START SLAVE statement, the columns beginning APPLYING_TRANSACTION are reset. Before MySQL 8.0.13,
these columns were not reset on a replica that was operating in single-threaded mode, only on a multithreaded replica.

此表提供了应用程序线程在副本或组复制组成员上处理的事务的详细信息。对于单线程副本，显示副本的单applier线程的数据。对于多线程副本，每个applier线程分别显示数据。
多线程副本上的应用程序线程有时称为工作线程。一个副本或组复制组成员上的applier线程数由slave_parallel_workers系统变量设置，对于单线程副本，该变量设置为零。
一个多线程副本也有一个协调线程来管理applier线程，并且这个线程的状态显示在replication_applier_status_by_coordinator表中。

与错误相关的列中显示的所有错误代码和消息都对应于服务器错误消息引用中列出的错误值。

禁用性能模式时，不会收集本地时间信息，因此显示应用事务的开始和结束时间戳的字段为零。该表中的开始时间戳指工作人员开始应用第一个事件的时间，结束时间戳指应用事务的最后一个事件的时间。

当通过START SLAVE语句重新启动一个副本时，以APPLYING_TRANSACTION开始的列将被重置。在MySQL 8.0.13之前，这些列不会在单线程模式下操作的副本上重置，而只会在多线程副本上重置。
*/

return [
	//Worker thread applier status (empty unless replica is multithreaded)
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-replication-applier-status-by-worker-table.html
	'tableName' => 'replication_applier_status_by_worker',
	'tableDesc' => '工作线程应用程序状态(空，除非副本是多线程的)',
	'fields' => [
		'CHANNEL_NAME' => [
			//The replication channel which this row is displaying. There is always a default replication channel, and more replication channels can be added. See Section 17.2.2, “Replication Channels” for more information.
			'name' => '复制通道',
			'desc' => '该行所显示的复制通道。始终存在一个默认复制通道，可以添加更多复制通道。更多信息请参见17.2.2节“复制通道”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-channels.html',
			'link' => '',
			'linkDesc' => ''
		],
		'WORKER_ID' => [
			//The worker identifier (same value as the id column in the mysql.slave_worker_info table). After STOP SLAVE, the THREAD_ID column becomes NULL, but the WORKER_ID value is preserved.
			'name' => '工作者标识符',
			'desc' => '工作者标识符(与mysql中的id列的值相同。slave_worker_info表)。在STOP SLAVE之后，THREAD_ID列变为NULL，但是WORKER_ID值被保留。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'THREAD_ID' => [
			//The worker thread ID.
			'name' => '工作线程ID',
			'desc' => '工作线程ID。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SERVICE_STATE' => [
			//ON (thread exists and is active or idle) or OFF (thread no longer exists).
			'name' => '线程是否存在',
			'desc' => 'ON(线程存在并且是活动的或空闲的)或OFF(线程不再存在)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_ERROR_NUMBER' => [
			//The error number and error message of the most recent error that caused the worker thread to stop. An error number of 0 and message of the empty string mean “no error”.
			//If the LAST_ERROR_MESSAGE value is not empty, the error values also appear in the replica's error log.Issuing RESET MASTER or RESET SLAVE resets the values shown in these columns.
			'name' => '错误数',
			'desc' => '导致工作线程停止的最近错误的错误数和错误消息。错误数为0，空字符串的消息表示“没有错误”。如果LAST_ERROR_MESSAGE值不是空的，则错误值也会出现在副本的错误日志中。发出RESET MASTER或RESET SLAVE将重置这些列中显示的值。',
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
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the most recent worker error occurred.
			'name' => '最近的工作线程错误发生的时间',
			'desc' => '一个时间戳，以YYYY-MM-DD hh:mm:ss[.fraction]格式显示最近的工人错误发生的时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_APPLIED_TRANSACTION' => [
			//The global transaction ID (GTID) of the last transaction applied by this worker.
			'name' => '最后一个事务的全局事务ID',
			'desc' => '此工作程序应用的最后一个事务的全局事务ID (GTID)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_APPLIED_TRANSACTION_ORIGINAL_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the last transaction applied by this worker was committed on the original source.
			'name' => '最后一个事务是何时提交到原始源上的',
			'desc' => '以YYYY-MM-DD hh:mm:ss[.fraction]格式表示的时间戳，显示此工作程序应用的最后一个事务是何时提交到原始源上的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_APPLIED_TRANSACTION_IMMEDIATE_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the last transaction applied by this worker was committed on the immediate source.
			'name' => '最后一个事务何时提交到直接源上',
			'desc' => '以YYYY-MM-DD hh:mm:ss[.fraction]格式表示的时间戳，显示此工作程序应用的最后一个事务何时提交到直接源上。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_APPLIED_TRANSACTION_START_APPLY_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when this worker started applying the last applied transaction.
			'name' => '何时开始应用最后一个应用的事务',
			'desc' => '以YYYY-MM-DD hh:mm:ss[.fraction]格式表示的时间戳，显示该worker何时开始应用最后一个应用的事务。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_APPLIED_TRANSACTION_END_APPLY_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when this worker finished applying the last applied transaction.
			'name' => '何时完成应用最后一个应用的事务',
			'desc' => '以YYYY-MM-DD hh:mm:ss[.fraction]格式表示的时间戳，显示该worker何时完成应用最后一个应用的事务。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'APPLYING_TRANSACTION' => [
			//The global transaction ID (GTID) of the transaction this worker is currently applying.
			'name' => '当前应用的事务的全局事务ID',
			'desc' => '此工作程序当前应用的事务的全局事务ID (GTID)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'APPLYING_TRANSACTION_ORIGINAL_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the transaction this worker is currently applying was committed on the original source.
			'name' => '当前应用的事务何时提交到原始数据源上',
			'desc' => '以YYYY-MM-DD hh:mm:ss[.fraction]格式表示的时间戳，显示该worker当前应用的事务何时提交到原始数据源上。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'APPLYING_TRANSACTION_IMMEDIATE_COMMIT_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when the transaction this worker is currently applying was committed on the immediate source.
			'name' => '当前应用的事务何时提交到直接源上',
			'desc' => '以YYYY-MM-DD hh:mm:ss[.fraction]格式表示的时间戳，显示该worker当前应用的事务何时提交到直接源上。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'APPLYING_TRANSACTION_START_APPLY_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format that shows when this worker started its first attempt to apply the transaction that is currently being applied.
			//Before MySQL 8.0.13, this timestamp was refreshed when a transaction was retried due to a transient error, so it showed the timestamp for the most recent attempt to apply the transaction.
			'name' => '何时开始首次尝试应用当前事务',
			'desc' => '一个时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]，显示该worker何时开始首次尝试应用当前正在应用的事务。在MySQL 8.0.13之前，这个时间戳是在由于暂时错误而重试事务时刷新的，因此它显示了最近一次尝试应用事务的时间戳。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_APPLIED_TRANSACTION_RETRIES_COUNT' => [
			//The number of times the last applied transaction was retried by the worker after the first attempt. If the transaction was applied at the first attempt, this number is zero.
			'name' => '重试最后一个事务的次数',
			'desc' => 'worker在第一次尝试后重试最后一个应用的事务的次数。如果在第一次尝试时应用了事务，则该数字为零。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_APPLIED_TRANSACTION_LAST_TRANSIENT_ERROR_NUMBER' => [
			//The error number of the last transient error that caused the transaction to be retried.
			'name' => '导致重试的最后一个错误号',
			'desc' => '导致重试事务的最后一个瞬时错误的错误号。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_APPLIED_TRANSACTION_LAST_TRANSIENT_ERROR_MESSAGE' => [
			//The message text for the last transient error that caused the transaction to be retried.
			'name' => '导致重试的最后一个错误消息',
			'desc' => '导致重试事务的最后一个瞬时错误的消息文本。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_APPLIED_TRANSACTION_LAST_TRANSIENT_ERROR_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format for the last transient error that caused the transaction to be retried.
			'name' => '最后一个导致重试的瞬时错误时间戳',
			'desc' => '最后一个导致重试事务的暂态错误的时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'APPLYING_TRANSACTION_RETRIES_COUNT' => [
			//The number of times the transaction that is currently being applied was retried until this moment. If the transaction was applied at the first attempt, this number is zero.
			'name' => '重试当前正在应用的事务的次数',
			'desc' => '重试当前正在应用的事务直到此时的次数。如果在第一次尝试时应用了事务，则该数字为零。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'APPLYING_TRANSACTION_LAST_TRANSIENT_ERROR_NUMBER' => [
			//The error number of the last transient error that caused the current transaction to be retried.
			'name' => '重试当前事务最后一个错误编号',
			'desc' => '导致重试当前事务的最后一个暂态错误的错误编号。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'APPLYING_TRANSACTION_LAST_TRANSIENT_ERROR_MESSAGE' => [
			//The message text for the last transient error that caused the current transaction to be retried.
			'name' => '重试当前事务最后一个错误消息',
			'desc' => '导致重试当前事务的最后一个瞬时错误的消息文本。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'APPLYING_TRANSACTION_LAST_TRANSIENT_ERROR_TIMESTAMP' => [
			//A timestamp in 'YYYY-MM-DD hh:mm:ss[.fraction]' format for the last transient error that caused the current transaction to be retried.
			'name' => '最后一个导致重试的错误时间',
			'desc' => '最后一个导致重试当前事务的暂态错误的时间戳，格式为YYYY-MM-DD hh:mm:ss[.fraction]。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];
