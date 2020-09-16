<?php
/*
The setup_actors table contains information that determines whether to enable monitoring and historical event logging for new foreground server threads (threads associated with client connections). 
This table has a maximum size of 100 rows by default. To change the table size, modify the performance_schema_setup_actors_size system variable at server startup.

For each new foreground thread, the Performance Schema matches the user and host for the thread against the rows of the setup_actors table. 
If a row from that table matches, its ENABLED and HISTORY column values are used to set the INSTRUMENTED and HISTORY columns, respectively, of the threads table row for the thread. 
This enables instrumenting and historical event logging to be applied selectively per host, user, or account (user and host combination). If there is no match, the INSTRUMENTED and HISTORY columns for the thread are set to NO.

For background threads, there is no associated user. INSTRUMENTED and HISTORY are YES by default and setup_actors is not consulted.

setup_actors表包含决定是否为新的前台服务器线程(与客户端连接关联的线程)启用监视和历史事件日志记录的信息。默认情况下，该表的最大大小为100行。要更改表大小，请在服务器启动时修改performance_schema_setup_actors_size系统变量。

对于每个新的前台线程，性能模式将线程的用户和主机与setup_actors表中的行进行匹配。如果该表中的一行匹配，则使用它的ENABLED列和HISTORY列值分别设置线程表行的插装列和HISTORY列。
这允许对每个主机、用户或帐户(用户和主机组合)有选择地应用检测和历史事件日志记录。如果没有匹配，则将线程的检测列和历史列设置为no。

对于后台线程，没有关联的用户。仪表化和历史默认是YES，不咨询setup_actors。
*/

return [
	//How to initialize monitoring for new foreground threads
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-setup-actors-table.html
	'tableName' => 'setup_actors',
	'tableDesc' => '如何初始化监控新前台线程',
	'fields' => [
		'HOST' => [
			//The host name. This should be a literal name, or '%' to mean “any host.”
			'name' => '主机名',
			'desc' => '主机名。此名称应为文字名称，或为“％”以表示“任何主机”。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'USER' => [
			//The user name. This should be a literal name, or '%' to mean “any user.”
			'name' => '用户名',
			'desc' => '用户名。这应该是文字名称，或者是“％”以表示“任何用户”。',
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
		'ENABLED' => [
			//Whether to enable instrumentation for foreground threads matched by the row. The value is YES or NO.
			'name' => '是否为该行匹配的前台线程启用仪表',
			'desc' => '是否为该行匹配的前台线程启用插装。值是YES或NO。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HISTORY' => [
			//Whether to log historical events for foreground threads matched by the row. The value is YES or NO.
			'name' => '是否记录该行匹配的前台线程的历史事件',
			'desc' => '是否记录该行匹配的前台线程的历史事件。值是YES或NO。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];