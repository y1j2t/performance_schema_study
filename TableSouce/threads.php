<?php
/*

*/

return [
	//Information about server threads
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-threads-table.html
	'tableName' => 'threads',
	'tableDesc' => '关于服务器线程的信息',
	'fields' => [
		'THREAD_ID' => [
			//A unique thread identifier.
			'name' => '线程ID',
			'desc' => '唯一的线程标识符。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NAME' => [
			//The name associated with the thread instrumentation code in the server. For example, 
			//thread/sql/one_connection corresponds to the thread function in the code responsible for handling a user connection, and thread/sql/main stands for the main() function of the server.
			'name' => '线程检测代码关联名',
			'desc' => '与服务器中的线程检测代码关联的名称。例如，thread / sql / one_connection对应于代码中负责处理用户连接的线程函数，而thread / sql / main则代表服务器的main（）函数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TYPE' => [
			//The thread type, either FOREGROUND or BACKGROUND. User connection threads are foreground threads. Threads associated with internal server activity are background threads. 
			//Examples are internal InnoDB threads, “binlog dump” threads sending information to replicas, and replication I/O and SQL threads.
			'name' => '线程类型',
			'desc' => '线程类型，前台或后台。用户连接线程是前台线程。与内部服务器活动相关联的线程是后台线程。例子有内部InnoDB线程，“binlog dump”线程发送信息给副本，以及复制I/O和SQL线程。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSLIST_ID' => [
			//For a foreground thread (associated with a user connection), this is the connection identifier. This is the same value displayed in the ID column of the INFORMATION_SCHEMA PROCESSLIST table, 
			//displayed in the Id column of SHOW PROCESSLIST output, and returned by the CONNECTION_ID() function within the thread.
			//For a background thread (not associated with a user connection), PROCESSLIST_ID is NULL, so the values are not unique.
			'name' => '连接标识符',
			'desc' => '对于前台线程(与用户连接相关联)，这是连接标识符。这个值与在INFORMATION_SCHEMA PROCESSLIST表的ID列中显示的值相同，在SHOW PROCESSLIST输出的ID列中显示，并由线程中的CONNECTION_ID()函数返回。对于后台线程(不与用户连接关联)，PROCESSLIST_ID为NULL，因此值不是惟一的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSLIST_USER' => [
			//The user associated with a foreground thread, NULL for a background thread.
			'name' => '前台线程关联用户',
			'desc' => '与前台线程关联的用户，后台线程为空。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSLIST_HOST' => [
			//The host name of the client associated with a foreground thread, NULL for a background thread.
			'name' => '前台线程主机',
			'desc' => '与前台线程关联的客户端主机名，后台线程为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSLIST_DB' => [
			//The default database for the thread, or NULL if none has been selected.
			'name' => '默认数据库',
			'desc' => '线程的默认数据库，如果没有选择，则为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSLIST_COMMAND' => [
			//For foreground threads, the type of command the thread is executing on behalf of the client, or Sleep if the session is idle. For descriptions of thread commands, 
			//see Section 8.14, “Examining Server Thread (Process) Information”. The value of this column corresponds to the COM_xxx commands of the client/server protocol and Com_xxx status variables. 
			//See Section 5.1.10, “Server Status Variables”
			'name' => '命令类型',
			'desc' => '对于前台线程，是线程代表客户端执行的命令类型，如果会话空闲，则是休眠。关于线程命令的描述，请参见8.14节，“检查服务器线程(进程)信息”。这个列的值对应于客户端/服务器协议的COM_xxx命令和COM_xxx状态变量。参见5.1.10节“服务器状态变量”',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/thread-information.html|https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSLIST_TIME' => [
			//The time in seconds that the thread has been in its current state. For a replica SQL thread, 
			//the value is the number of seconds between the timestamp of the last replicated event and the real time of the replica host. See Section 17.2.3, “Replication Threads”.
			'name' => '线程处于当前状态的时间',
			'desc' => '线程处于当前状态的时间(秒)。对于复制SQL线程，该值是上次复制事件的时间戳与复制主机的实时时间之间的秒数。参见17.2.3节“复制线程”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-implementation-details.html',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSLIST_STATE' => [
			//An action, event, or state that indicates what the thread is doing. For descriptions of PROCESSLIST_STATE values, see Section 8.14, “Examining Server Thread (Process) Information”. 
			//If the value if NULL, the thread may correspond to an idle client session or the work it is doing is not instrumented with stages.
			//Most states correspond to very quick operations. If a thread stays in a given state for many seconds, there might be a problem that bears investigation.
			'name' => '线程当前状态',
			'desc' => '指示线程正在做什么的操作、事件或状态。有关PROCESSLIST_STATE值的描述，请参见8.14节“检查服务器线程(进程)信息”。如果该值为NULL，则该线程可能对应于一个空闲客户机会话，或者它正在执行的工作没有使用阶段进行检测。大多数状态对应于非常快速的操作。如果一个线程在给定状态下停留了很多秒，那么可能存在需要调查的问题。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROCESSLIST_INFO' => [
			//The statement the thread is executing, or NULL if it is executing no statement. The statement might be the one sent to the server, or an innermost statement if the statement executes other statements. 
			//For example, if a CALL statement executes a stored procedure that is executing a SELECT statement, the PROCESSLIST_INFO value shows the SELECT statement.
			'name' => '正在执行的语句',
			'desc' => '线程正在执行的语句，如果线程没有执行语句，则为NULL。该语句可以是发送到服务器的语句，也可以是执行其他语句的最内层语句。例如，如果调用语句执行正在执行SELECT语句的存储过程，则PROCESSLIST_INFO值显示SELECT语句。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PARENT_THREAD_ID' => [
			//If this thread is a subthread (spawned by another thread), this is the THREAD_ID value of the spawning thread.
			'name' => '父线程ID',
			'desc' => '如果这个线程是子线程(由另一个线程派生)，则这是生成线程的THREAD_ID值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ROLE' => [
			//Unused.
			'name' => 'ROLE',
			'desc' => '没用',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'INSTRUMENTED' => [
			//Whether events executed by the thread are instrumented. The value is YES or NO.
			'name' => '执行事件否被检测',
			'desc' => '线程执行的事件是否被检测。值是YES或NO。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HISTORY' => [
			//Whether to log historical events for the thread. The value is YES or NO.
			'name' => '是否记录线程历史事件',
			'desc' => '是否记录线程的历史事件。值是YES或NO。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CONNECTION_TYPE' => [
			//The protocol used to establish the connection, or NULL for background threads. Permitted values are TCP/IP (TCP/IP connection established without encryption), 
			//SSL/TLS (TCP/IP connection established with encryption), Socket (Unix socket file connection), Named Pipe (Windows named pipe connection), and Shared Memory (Windows shared memory connection).
			'name' => '用于建立连接的协议',
			'desc' => '用于建立连接的协议，或为空的后台线程。允许的值是TCP/IP(未加密建立的TCP/IP连接)、SSL/TLS(加密建立的TCP/IP连接)、Socket (Unix套接字文件连接)、命名管道(Windows命名管道连接)和共享内存(Windows共享内存连接)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'THREAD_OS_ID' => [
			//The thread or task identifier as defined by the underlying operating system, if there is one:
			//When a MySQL thread is associated with the same operating system thread for its lifetime, THREAD_OS_ID contains the operating system thread ID.
			//When a MySQL thread is not associated with the same operating system thread for its lifetime, THREAD_OS_ID contains NULL. This is typical for user sessions when the thread pool plugin is used (see Section 5.6.3, “MySQL Enterprise Thread Pool”).
			//For Windows, THREAD_OS_ID corresponds to the thread ID visible in Process Explorer (https://technet.microsoft.com/en-us/sysinternals/bb896653.aspx).
			//For Linux, THREAD_OS_ID corresponds to the value of the gettid() function. This value is exposed, for example, using the perf or ps -L commands, or in the proc file system (/proc/[pid]/task/[tid]). For more information, see the perf-stat(1), ps(1), and proc(5) man pages.
			'name' => '底层操作系统定义的线程或任务标识符',
			'desc' => '底层操作系统定义的线程或任务标识符(如果有的话):当MySQL线程在其生命周期中与相同的操作系统线程相关联时，THREAD_OS_ID包含操作系统线程ID。当MySQL线程在其生命周期中与同一操作系统线程没有关联时，THREAD_OS_ID包含NULL。当线程池插件被使用时，这是典型的用户会话(见5.6.3节，“MySQL企业线程池”)。对于Windows, THREAD_OS_ID对应于Process Explorer中可见的线程ID (https://technet.microsoft.com/en-us/sysinternals/bb896653.aspx)。对于Linux, THREAD_OS_ID对应于gettid()函数的值。例如，使用perf或ps -L命令或在proc文件系统(/proc/[pid]/task/[tid])中公开这个值。有关更多信息，请参见perf-stat(1)、ps(1)和proc(5)手册页。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/thread-pool.html|https://technet.microsoft.com/en-us/sysinternals/bb896653.aspx',
			'link' => '',
			'linkDesc' => ''
		],
		'RESOURCE_GROUP' => [
			//The resource group label. This value is NULL if resource groups are not supported on the current platform or server configuration (see Resource Group Restrictions).
			'name' => '资源组标签',
			'desc' => '资源组标签。如果当前平台或服务器配置不支持资源组，则此值为空(请参阅资源组限制)。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/resource-groups.html#resource-group-restrictions',
			'link' => '',
			'linkDesc' => ''
		],
	]
];