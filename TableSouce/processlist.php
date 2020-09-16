<?php
/*
The MySQL process list indicates the operations currently being performed by the set of threads executing within the server. The processlist table is one source of process information. 
For a comparison of this table with other sources, see Sources of Process Information.

The processlist table can be queried directly. If you have the PROCESS privilege, you can see all threads, even those belonging to other users. Otherwise (without the PROCESS privilege), 
nonanonymous users have access to information about their own threads but not threads for other users, and anonymous users have no access to thread information.

MySQL进程列表表示服务器内执行的一组线程当前正在执行的操作。processlist表是过程信息的一个来源。有关此表与其他来源的比较，请参阅过程信息来源。
https://dev.mysql.com/doc/refman/8.0/en/processlist-access.html#processlist-sources

可以直接查询processlist表。如果您拥有进程特权，那么您可以查看所有线程，甚至是属于其他用户的线程。否则(没有进程特权)，非匿名用户可以访问关于自己线程的信息，但不能访问其他用户的线程，而匿名用户不能访问线程信息。

If the performance_schema_show_processlist system variable is enabled, the processlist table also serves as the basis for an alternative implementation underlying the SHOW PROCESSLIST statement. For details, see later in this section.
如果启用了performance_schema_show_processlist系统变量，则processlist表还可以作为显示processlist语句下的替代实现的基础。有关详细信息，请参阅本节后面的内容。
*/

return [
	//Process list information
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-processlist-table.html
	'tableName' => 'processlist',
	'tableDesc' => '流程列表信息',
	'fields' => [
		'ID' => [
			//The connection identifier. This is the same value displayed in the Id column of the SHOW PROCESSLIST statement, 
			//displayed in the PROCESSLIST_ID column of the Performance Schema threads table, and returned by the CONNECTION_ID() function within the thread.
			'name' => '连接标识符',
			'desc' => '连接标识符。这个值显示在SHOW PROCESSLIST语句的Id列中，显示在Performance Schema threads表的PROCESSLIST_ID列中，并由线程内的CONNECTION_ID()函数返回。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'USER' => [
			//The MySQL user who issued the statement. A value of system user refers to a nonclient thread spawned by the server to handle tasks internally, for example, 
			//a delayed-row handler thread or an I/O or SQL thread used on replica hosts. For system user, there is no host specified in the Host column. 
			//unauthenticated user refers to a thread that has become associated with a client connection but for which authentication of the client user has not yet occurred. 
			//event_scheduler refers to the thread that monitors scheduled events (see Section 24.4, “Using the Event Scheduler”).
			'name' => 'MySQL用户',
			'desc' => '发布声明的MySQL用户。系统用户的值指的是由服务器生成的用于内部处理任务的非客户端线程，例如，在副本主机上使用的延迟行处理程序线程或I/O或SQL线程。对于系统用户，在host列中没有指定主机。未经身份验证的用户是指已与客户端连接关联但尚未对其进行客户端用户身份验证的线程。event_scheduler是指监视计划事件的线程(参见24.4节“使用事件调度器”)。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/event-scheduler.html',
			'link' => '',
			'linkDesc' => ''
		],
		'HOST' => [
			//The host name of the client issuing the statement (except for system user, for which there is no host). 
			//The host name for TCP/IP connections is reported in host_name:client_port format to make it easier to determine which client is doing what.
			'name' => '主机名',
			'desc' => '发出该语句的客户机的主机名(系统用户除外，因为它没有主机)。TCP/IP连接的主机名以host_name:client_port格式报告，以便更容易确定哪个客户机正在执行什么操作。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'DB' => [
			//The default database for the thread, or NULL if none has been selected.
			'name' => '默认数据库',
			'desc' => '线程的默认数据库，如果没有选择，则为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COMMAND' => [
			//The type of command the thread is executing on behalf of the client, or Sleep if the session is idle. For descriptions of thread commands, see Section 8.14, “Examining Server Thread (Process) Information”. 
			//The value of this column corresponds to the COM_xxx commands of the client/server protocol and Com_xxx status variables. See Section 5.1.10, “Server Status Variables”
			'name' => '命令类型',
			'desc' => '线程代表客户端执行的命令类型，或者在会话空闲时休眠。关于线程命令的描述，请参见8.14节，“检查服务器线程(进程)信息”。这个列的值对应于客户端/服务器协议的COM_xxx命令和COM_xxx状态变量。参见5.1.10节“服务器状态变量”',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/thread-information.html|https://dev.mysql.com/doc/refman/8.0/en/thread-information.html',
			'link' => '',
			'linkDesc' => ''
		],
		'TIME' => [
			//The time in seconds that the thread has been in its current state. For a replica SQL thread, the value is the number of seconds between the timestamp of the last replicated event and the real time of the replica host. 
			//See Section 17.2.3, “Replication Threads”.
			'name' => '处于当前状态的时间',
			'desc' => '线程处于当前状态的时间(秒)。对于复制SQL线程，该值是上次复制事件的时间戳与复制主机的实时时间之间的秒数。参见17.2.3节“复制线程”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-implementation-details.html',
			'link' => '',
			'linkDesc' => ''
		],
		'STATE' => [
			//An action, event, or state that indicates what the thread is doing. For descriptions of STATE values, see Section 8.14, “Examining Server Thread (Process) Information”.
			//Most states correspond to very quick operations. If a thread stays in a given state for many seconds, there might be a problem that needs to be investigated.
			'name' => '状态值',
			'desc' => '指示线程正在做什么的操作、事件或状态。关于状态值的描述，请参见8.14节“检查服务器线程(进程)信息”。大多数状态对应于非常快速的操作。如果一个线程在给定状态下停留了很多秒，那么可能存在需要研究的问题。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/thread-information.html',
			'link' => '',
			'linkDesc' => ''
		],
		'INFO' => [
			//The statement the thread is executing, or NULL if it is executing no statement. The statement might be the one sent to the server, or an innermost statement if the statement executes other statements. 
			//For example, if a CALL statement executes a stored procedure that is executing a SELECT statement, the INFO value shows the SELECT statement.
			'name' => '正在执行的语句',
			'desc' => '线程正在执行的语句，如果线程没有执行语句，则为NULL。该语句可以是发送到服务器的语句，也可以是执行其他语句的最内层语句。例如，如果调用语句执行正在执行SELECT语句的存储过程，则INFO值显示SELECT语句。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];