<?php
/*
The Performance Schema table described here is available as of MySQL 8.0.14. Prior to MySQL 8.0.14, use the corresponding INFORMATION_SCHEMA table instead; see Section 25.52.3, “The INFORMATION_SCHEMA TP_THREAD_STATE Table”.
这里描述的性能模式表在MySQL 8.0.14中是可用的。在MySQL 8.0.14之前，使用相应的INFORMATION_SCHEMA表代替;参见25.52.3节“INFORMATION_SCHEMA TP_THREAD_STATE表”。
https://dev.mysql.com/doc/refman/8.0/en/information-schema-tp-thread-state-table.html

The tp_thread_state table has one row per thread created by the thread pool to handle connections.
在tp_thread_state表中，线程池为每个线程创建一行来处理连接。
*/

return [
	//Information about thread pool thread states
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-tp-thread-state-table.html
	'tableName' => 'tp_thread_state',
	'tableDesc' => '关于线程池线程状态的信息',
	'fields' => [
		'TP_GROUP_ID' => [
			//The thread group ID.
			'name' => '线程组ID',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TP_THREAD_NUMBER' => [
			//The ID of the thread within its thread group. TP_GROUP_ID and TP_THREAD_NUMBER together provide a unique key within the table.
			'name' => '线程组中的线程的ID',
			'desc' => '线程组中的线程的ID。TP_GROUP_ID和TP_THREAD_NUMBER一起提供了表中的唯一键',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESS_COUNT' => [
			//The 10ms interval in which the statement that uses this thread is currently executing. 0 means no statement is executing, 1 means it is in the first 10ms, and so forth.
			'name' => '当前正在执行使用此线程的语句的10ms间隔',
			'desc' => '当前正在执行使用此线程的语句的10ms间隔。 0表示没有语句在执行，1表示在前10毫秒之内，依此类推。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'WAIT_TYPE' => [
			//The type of wait for the thread. NULL means the thread is not blocked. Otherwise, the thread is blocked by a call to thd_wait_begin() and the value specifies the type of wait. 
			//The xxx_WAIT columns of the tp_thread_group_stats table accumulate counts for each wait type.
			//The WAIT_TYPE value is a string that describes the type of wait, as shown in the following table.
			'name' => '等待线程的类型',
			'desc' => '等待线程的类型。NULL表示线程没有被阻塞。否则，调用thd_wait_begin()会阻塞线程，该值指定等待的类型。tp_thread_group_stats表的xxx_WAIT列为每种等待类型积累计数。WAIT_TYPE值是一个描述等待类型的字符串，如下表所示。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];