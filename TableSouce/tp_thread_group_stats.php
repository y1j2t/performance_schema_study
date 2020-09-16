<?php
/*
The Performance Schema table described here is available as of MySQL 8.0.14. Prior to MySQL 8.0.14, use the corresponding INFORMATION_SCHEMA table instead; see Section 25.52.2, “The INFORMATION_SCHEMA TP_THREAD_GROUP_STATS Table”.
这里描述的性能模式表在MySQL 8.0.14中是可用的。在MySQL 8.0.14之前，使用相应的INFORMATION_SCHEMA表代替;请参阅25.52.2节“INFORMATION_SCHEMA TP_THREAD_GROUP_STATS表”。
https://dev.mysql.com/doc/refman/8.0/en/information-schema-tp-thread-group-stats-table.html

The tp_thread_group_stats table reports statistics per thread group. There is one row per group.
tp_thread_group_stats表报告每个线程组的统计信息。每组有一行。
*/

return [
	//Thread group statistics
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-tp-thread-group-stats-table.html
	'tableName' => 'tp_thread_group_stats',
	'tableDesc' => '线程组的统计数据',
	'fields' => [
		'TP_GROUP_ID' => [
			//The thread group ID. This is a unique key within the table.
			'name' => '线程组ID',
			'desc' => '线程组ID。这是表中唯一的键。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CONNECTIONS_STARTED' => [
			//The number of connections started.
			'name' => '启动的连接数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CONNECTIONS_CLOSED' => [
			//The number of connections closed.
			'name' => '关闭的连接数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUERIES_EXECUTED' => [
			//The number of statements executed. This number is incremented when a statement starts executing, not when it finishes.
			'name' => '执行的语句数',
			'desc' => '执行的语句数。这个数字在语句开始执行时递增，而不是在语句结束时递增。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUERIES_QUEUED' => [
			//The number of statements received that were queued for execution. This does not count statements that the thread group was able to begin executing immediately without queuing, 
			//which can happen under the conditions described in Section 5.6.3.3, “Thread Pool Operation”.
			'name' => '排队等待执行的语句的数量',
			'desc' => '接收到排队等待执行的语句的数量。这并不计算线程组在不排队的情况下能够立即开始执行的语句，排队可以在第5.6.3.3节“线程池操作”中描述的条件下发生。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/thread-pool-operation.html',
			'link' => '',
			'linkDesc' => ''
		],
		'THREADS_STARTED' => [
			//The number of threads started.
			'name' => '启动的线程数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PRIO_KICKUPS' => [
			//The number of statements that have been moved from low-priority queue to high-priority queue based on the value of the thread_pool_prio_kickup_timer system variable. 
			//If this number increases quickly, consider increasing the value of that variable. A quickly increasing counter means that the priority system is not keeping transactions from starting too early. 
			//For InnoDB, this most likely means deteriorating performance due to too many concurrent transactions..
			'name' => '从低优先级队列移动到高优先级队列的语句数',
			'desc' => '根据thread_pool_prio_kickup_timer系统变量的值，从低优先级队列移动到高优先级队列的语句数。如果这个数字快速增长，考虑增加该变量的值。快速增加的计数器意味着优先级系统不会阻止事务过早启动。对于InnoDB来说，这很可能意味着由于太多并发事务而导致性能恶化。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'STALLED_QUERIES_EXECUTED' => [
			//The number of statements that have become defined as stalled due to executing for longer than the value of the thread_pool_stall_limit system variable.
			'name' => '停止的语句的数量',
			'desc' => '由于执行时间超过thread_pool_stall_limit系统变量的值而被定义为停止的语句的数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'BECOME_CONSUMER_THREAD' => [
			//The number of times thread have been assigned the consumer thread role.
			'name' => '线程被分配给使用者线程角色的次数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'BECOME_RESERVE_THREAD' => [
			//The number of times threads have been assigned the reserve thread role.
			'name' => '线程被分配预留线程角色的次数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'BECOME_WAITING_THREAD' => [
			//The number of times threads have been assigned the waiter thread role. When statements are queued, this happens very often, even in normal operation, so rapid increases in this value are normal in the case of a highly loaded system where statements are queued up.
			'name' => '线程被分配给服务线程角色的次数',
			'desc' => '线程被分配给服务线程角色的次数。当语句排队时，这种情况经常发生，甚至在正常操作中也是如此，所以在高负载的系统中，这个值的快速增加是正常的，在这个系统中，语句排队。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'WAKE_THREAD_STALL_CHECKER' => [
			//The number of times the stall check thread decided to wake or create a thread to possibly handle some statements or take care of the waiter thread role.
			'name' => '线程决定唤醒或创建线程处理语句或服务次数',
			'desc' => 'stall check线程决定唤醒或创建一个线程来处理一些语句或处理服务线程角色的次数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SLEEP_WAITS' => [
			//The number of THD_WAIT_SLEEP waits. These occur when threads go to sleep (for example, by calling the SLEEP() function).
			'name' => 'THD_WAIT_SLEEP等待的数目',
			'desc' => 'THD_WAIT_SLEEP等待的数目。当线程进入睡眠状态时(例如，通过调用sleep()函数)就会发生这种情况。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'DISK_IO_WAITS' => [
			//The number of THD_WAIT_DISKIO waits. These occur when threads perform disk I/O that is likely to not hit the file system cache. Such waits occur when the buffer pool reads and writes data to disk, not for normal reads from and writes to files.
			'name' => '等待的THD_WAIT_DISKIO数目',
			'desc' => '等待的THD_WAIT_DISKIO数目。当线程执行磁盘I/O时，可能没有命中文件系统缓存，就会发生这种情况。这种等待发生在缓冲池将数据读写到磁盘时，而不是普通的对文件的读写。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ROW_LOCK_WAITS' => [
			//The number of THD_WAIT_ROW_LOCK waits for release of a row lock by another transaction.
			'name' => 'THD_WAIT_ROW_LOCK的数量等待另一个事务释放行锁',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'GLOBAL_LOCK_WAITS' => [
			//The number of THD_WAIT_GLOBAL_LOCK waits for a global lock to be released.
			'name' => 'THD_WAIT_GLOBAL_LOCK的数量等待释放一个全局锁',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'META_DATA_LOCK_WAITS' => [
			//The number of THD_WAIT_META_DATA_LOCK waits for a metadata lock to be released.
			'name' => 'THD_WAIT_META_DATA_LOCK的数目等待元数据锁被释放',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TABLE_LOCK_WAITS' => [
			//The number of THD_WAIT_TABLE_LOCK waits for a table to be unlocked that the statement needs to access.
			'name' => 'THD_WAIT_TABLE_LOCK的数目等待语句需要访问的表被解锁',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'USER_LOCK_WAITS' => [
			//The number of THD_WAIT_USER_LOCK waits for a special lock constructed by the user thread.
			'name' => 'THD_WAIT_USER_LOCK的数目等待由用户线程构造的特殊锁',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'BINLOG_WAITS' => [
			//The number of THD_WAIT_BINLOG_WAITS waits for the binary log to become free.
			'name' => 'THD_WAIT_BINLOG_WAITS的数量等待二进制日志变为空闲',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'GROUP_COMMIT_WAITS' => [
			//The number of THD_WAIT_GROUP_COMMIT waits. These occur when a group commit must wait for the other parties to complete their part of a transaction.
			'name' => 'THD_WAIT_GROUP_COMMIT的数目将等待',
			'desc' => 'THD_WAIT_GROUP_COMMIT的数目将等待。当组提交必须等待其他各方完成其事务的那一部分时，就会发生这种情况。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'FSYNC_WAITS' => [
			//The number of THD_WAIT_SYNC waits for a file sync operation.
			'name' => 'THD_WAIT_SYNC的数目等待文件同步操作',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];