<?php
/*
The log_status table provides information that enables an online backup tool to copy the required log files without locking those resources for the duration of the copy process.

When the log_status table is queried, the server blocks logging and related administrative changes for just long enough to populate the table, then releases the resources. 
The log_status table informs the online backup which point it should copy up to in the source's binary log and gtid_executed record, and the relay log for each replication channel. 
It also provides relevant information for individual storage engines, such as the last log sequence number (LSN) and the LSN of the last checkpoint taken for the InnoDB storage engine.

 log_status表提供的信息允许在线备份工具复制所需的日志文件，而无需在复制过程中锁定这些资源。

当查询log_status表时，服务器会阻塞日志记录和相关管理更改，时间刚好够填充表，然后释放资源。
 log_status表通知在线备份应该复制到源的二进制日志和gtid_executed记录中的哪个点，以及每个复制通道的中继日志。
它还提供了各个存储引擎的相关信息，比如InnoDB存储引擎的最后一个日志序列号(LSN)和最后一个检查点的LSN。
*/

return [
	//Information about server logs for backup purposes
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-log-status-table.html
	'tableName' => 'log_status',
	'tableDesc' => '用于备份的服务器日志信息',
	'fields' => [
		'SERVER_UUID' => [
			//The server UUID for this server instance. This is the generated unique value of the read-only system variable server_uuid.
			'name' => '服务器UUID',
			'desc' => '此服务器实例的服务器UUID。这是只读系统变量server_uuid生成的惟一值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LOCAL' => [
			//The log position state information from the source, provided as a single JSON object with the following keys:
			//binary_log_file   The name of the current binary log file.
			//binary_log_position    The current binary log position at the time the log_status table was accessed.
			//gtid_executed   The current value of the global server variable gtid_executed at the time the log_status table was accessed. This information is consistent with the binary_log_file and binary_log_position keys.
			'name' => '日志位置状态信息',
			'desc' => '来自源的日志位置状态信息，作为一个JSON对象提供，具有以下键:binary_log_file：当前二进制日志文件的名称，binary_log_position：访问log_status表时的当前二进制日志位置。gtid_executed：在访问log_status表时执行全局服务器变量gtid_的当前值。此信息与binary_log_file和binary_log_position键一致。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'REPLICATION' => [
			//A JSON array of channels, each with the following information:
			//channel_name   The name of the replication channel. The default replication channel's name is the empty string (“”).
			//relay_log_file   The name of the current relay log file for the replication channel.
			//relay_log_pos   The current relay log position at the time the log_status table was accessed.
			'name' => '通道数组',
			'desc' => '一个JSON通道数组，每个通道都有以下信息:channel_name复制通道的名称。默认复制通道的名称是空字符串(" ")。relay_log_file复制通道的当前中继日志文件的名称。relay_log_pos访问log_status表时的当前中继日志位置。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'STORAGE_ENGINES' => [
			//Relevant information from individual storage engines, provided as a JSON object with one key for each applicable storage engine.
			'name' => '各个存储引擎的相关信息',
			'desc' => '来自各个存储引擎的相关信息，以JSON对象的形式提供，每个适用的存储引擎都有一个键。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];