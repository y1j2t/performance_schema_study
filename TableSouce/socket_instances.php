<?php
/*
The socket_instances table provides a real-time snapshot of the active connections to the MySQL server. The table contains one row per TCP/IP or Unix socket file connection. 
Information available in this table provides a real-time snapshot of the active connections to the server. (Additional information is available in socket summary tables, 
including network activity such as socket operations and number of bytes transmitted and received; see Section 26.12.18.9, “Socket Summary Tables”).

socket_instances表提供了到MySQL服务器的活动连接的实时快照。该表为每个TCP/IP或Unix套接字文件连接包含一行。该表中可用的信息提供了到服务器的活动连接的实时快照。
(套接字汇总表提供其他信息，包括网络活动，如套接字操作和传输和接收的字节数;参见第26.12.18.9节“套接字汇总表”)。
*/

return [
	//Active connection instances
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-socket-instances-table.html
	'tableName' => 'socket_instances',
	'tableDesc' => '活动连接实例',
	'fields' => [
		'EVENT_NAME' => [
			//The name of the wait/io/socket/* instrument that produced the event. This is a NAME value from the setup_instruments table. 
			//Instrument names may have multiple parts and form a hierarchy, as discussed in Section 26.6, “Performance Schema Instrument Naming Conventions”.
			'name' => '产生事件的等待/io/套接字/*生产者的名称',
			'desc' => '产生事件的等待/io/套接字/*生产者的名称。这是来自setup_instruments表的名称值。生产者名称可以由多个部分组成，并形成一个层次结构，如26.6节“性能模式生产者命名约定”所讨论的那样。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/performance-schema-instrument-naming.html',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//This column uniquely identifies the socket. The value is the address of an object in memory.
			'name' => '惟一地标识套接字',
			'desc' => '此列惟一地标识套接字。该值是内存中一个对象的地址。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'THREAD_ID' => [
			//The internal thread identifier assigned by the server. Each socket is managed by a single thread, so each socket can be mapped to a thread which can be mapped to a server process.
			'name' => '内部线程标识符',
			'desc' => '由服务器分配的内部线程标识符。每个套接字由单个线程管理，因此每个套接字可以映射到一个线程，这个线程可以映射到一个服务器进程。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SOCKET_ID' => [
			//The internal file handle assigned to the socket.
			'name' => '内部文件句柄',
			'desc' => '分配给套接字的内部文件句柄。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'IP' => [
			//The client IP address. The value may be either an IPv4 or IPv6 address, or blank to indicate a Unix socket file connection.
			'name' => 'IP地址',
			'desc' => '客户端IP地址。该值可以是IPv4或IPv6地址，也可以是空白(表示Unix套接字文件连接)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PORT' => [
			//The TCP/IP port number, in the range from 0 to 65535.
			'name' => 'TCP/IP端口号',
			'desc' => 'TCP/IP端口号，范围从0到65535。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'STATE' => [
			//The socket status, either IDLE or ACTIVE. Wait times for active sockets are tracked using the corresponding socket instrument. Wait times for idle sockets are tracked using the idle instrument.
			//A socket is idle if it is waiting for a request from the client. When a socket becomes idle, the event row in socket_instances that is tracking the socket switches from a status of ACTIVE to IDLE. 
			//The EVENT_NAME value remains wait/io/socket/*, but timing for the instrument is suspended. Instead, an event is generated in the events_waits_current table with an EVENT_NAME value of idle.
			//When the next request is received, the idle event terminates, the socket instance switches from IDLE to ACTIVE, and timing of the socket instrument resumes.
			'name' => '套接字状态',
			'desc' => '套接字状态，空闲或活动。使用相应的socket工具跟踪活动套接字的等待时间。使用空闲仪器跟踪空闲套接字的等待时间。如果套接字正在等待客户端的请求，那么它就是空闲的。当套接字变为空闲时，socket_instances中跟踪套接字的事件行从活动状态切换到空闲状态。EVENT_NAME值仍然是wait/io/socket/*，但是暂停了仪器的计时。相反，在events_waits_current表中生成一个事件，其EVENT_NAME值为idle。当接收到下一个请求时，空闲事件终止，套接字实例从空闲切换到活动，套接字工具的计时恢复。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		
	]
];