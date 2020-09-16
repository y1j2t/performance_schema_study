<?php
/*
The tp_thread_group_state table has one row per thread group in the thread pool. Each row provides information about the current state of a group.
tp_thread_group_state表在线程池中每个线程组有一行。每行提供关于组当前状态的信息。

The Performance Schema table described here is available as of MySQL 8.0.14. Prior to MySQL 8.0.14, use the corresponding INFORMATION_SCHEMA table instead; see Section 25.52.1, “The INFORMATION_SCHEMA TP_THREAD_GROUP_STATE Table”.
这里描述的性能模式表在MySQL 8.0.14中是可用的。在MySQL 8.0.14之前，使用相应的INFORMATION_SCHEMA表代替;参见25.52.1节“INFORMATION_SCHEMA TP_THREAD_GROUP_STATE表”。
*/

return [
	//Information about thread pool thread group states
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-tp-thread-group-state-table.html
	'tableName' => 'tp_thread_group_state',
	'tableDesc' => '关于线程池、线程组状态的信息',
	'fields' => [
		'TP_GROUP_ID' => [
			// The thread group ID. This is a unique key within the table.
			'name' => '线程组ID',
			'desc' => '线程组ID。这是表中唯一的键。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CONSUMER' => [
			//The number of consumer threads. There is at most one thread ready to start executing if the active threads become stalled or blocked.
			'name' => '使用者',
			'desc' => '使用者线程数。如果活动线程停止或阻塞，最多有一个线程准备开始执行。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'THREADS' => [
			// 
			'name' => '线程数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'CONSUMER'
		],
		'RESERVE_THREADS' => [
			//The number of threads in the reserved state. This means that they will not be started until there is a need to wake a new thread and there is no consumer thread. 
			//This is where most threads end up when the thread group has created more threads than needed for normal operation. 
			//Often a thread group needs additional threads for a short while and then does not need them again for a while. In this case, they go into the reserved state and remain until needed again. 
			//They take up some extra memory resources, but no extra computing resources.
			'name' => '处于保留状态的线程数',
			'desc' => '处于保留状态的线程数。这意味着在需要唤醒新线程且没有使用者线程时，它们才会启动。当线程组创建的线程多于正常操作所需的线程时，大多数线程都会在这里结束。通常，线程组在一段时间内需要额外的线程，然后在一段时间内不再需要它们。在这种情况下，它们进入保留状态，直到再次需要为止。它们会占用一些额外的内存资源，但不会占用额外的计算资源。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CONNECT_THREAD_COUNT' => [
			// The number of threads that are processing or waiting to process connection initialization and authentication. There can be a maximum of four connection threads per thread group; these threads expire after a period of inactivity.
			'name' => '身份验证的线程数',
			'desc' => '正在处理或等待处理连接初始化和身份验证的线程数。每个线程组最多可以有四个连接线程;这些线程在一段不活动的时间后到期。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CONNECTION_COUNT' => [
			//The number of connections using this thread group.
			'name' => '连接数',
			'desc' => '使用此线程组的连接数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUEUED_QUERIES' => [
			//The number of statements waiting in the high-priority queue.
			'name' => '高优先级队列等待的语句数',
			'desc' => '在高优先级队列中等待的语句数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUEUED_TRANSACTIONS' => [
			//The number of statements waiting in the low-priority queue. These are the initial statements for transactions that have not started, so they also represent queued transactions.
			'name' => '低优先级队列等待的语句数',
			'desc' => '在低优先级队列中等待的语句数。这些是尚未启动的事务的初始语句，因此它们也表示排队的事务。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'STALL_LIMIT' => [
			//The value of the thread_pool_stall_limit system variable for the thread group. This is the same value for all thread groups.
			'name' => 'thread_pool_stall_limit系统变量值',
			'desc' => '线程组的thread_pool_stall_limit系统变量的值。对于所有线程组，这是相同的值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PRIO_KICKUP_TIMER' => [
			//The value of the thread_pool_prio_kickup_timer system variable for the thread group. This is the same value for all thread groups.
			'name' => 'thread_pool_prio_kickup_timer系统变量值',
			'desc' => '线程组的thread_pool_prio_kickup_timer系统变量的值。对于所有线程组，这是相同的值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ALGORITHM' => [
			//The value of the thread_pool_algorithm system variable for the thread group. This is the same value for all thread groups.
			'name' => 'thread_pool_algorithm系统变量值',
			'desc' => '线程组的thread_pool_algorithm系统变量的值。对于所有线程组，这是相同的值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'THREAD_COUNT' => [
			//The number of threads started in the thread pool as part of this thread group.
			'name' => '线程池中启动的线程数',
			'desc' => '作为这个线程组的一部分，在线程池中启动的线程数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ACTIVE_THREAD_COUNT' => [
			//The number of threads active in executing statements.
			'name' => '活动的线程数',
			'desc' => '执行语句时活动的线程数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'STALLED_THREAD_COUNT' => [
			//The number of stalled statements in the thread group. A stalled statement could be executing, but from a thread pool perspective it is stalled and making no progress. A long-running statement quickly ends up in this category.
			'name' => '停止的语句的数量',
			'desc' => '线程组中停止的语句的数量。一个停止的语句可能正在执行，但是从线程池的角度来看，它停止了并且没有进展。长时间运行的语句很快就会出现在这个类别中。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'WAITING_THREAD_NUMBER' => [
			//If there is a thread handling the polling of statements in the thread group, this specifies the thread number within this thread group. It is possible that this thread could be executing a statement.
			'name' => '线程号',
			'desc' => '如果线程组中有一个线程处理语句轮询，则指定该线程组中的线程号。这个线程可能正在执行一条语句。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OLDEST_QUEUED' => [
			//How long in milliseconds the oldest queued statement has been waiting for execution.
			'name' => '最老的排队语句等待执行的时间',
			'desc' => '最老的排队语句等待执行的时间(毫秒)是多少?',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_THREAD_IDS_IN_GROUP' => [
			//The maximum thread ID of the threads in the group. This is the same as MAX(TP_THREAD_NUMBER) for the threads when selected from the tp_thread_state table.
			'name' => '最大线程ID',
			'desc' => '组中线程的最大线程ID。这与从tp_thread_state表中选择的线程的MAX(TP_THREAD_NUMBER)相同。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],		
	]
];