<?php
/*
The hosts table contains a row for each host from which clients have connected to the MySQL server. For each host name, the table counts the current and total number of connections. 
The table size is autosized at server startup. To set the table size explicitly, set the performance_schema_hosts_size system variable at server startup. To disable host statistics, set this variable to 0.

The hosts table has the following columns. For a description of how the Performance Schema maintains rows in this table, including the effect of TRUNCATE TABLE, see Section 26.12.8, “Performance Schema Connection Tables”.

hosts表包含客户机连接到MySQL服务器的每个主机的一行。对于每个主机名，该表计算当前连接数和连接总数。表的大小在服务器启动时自动调整。要显式设置表大小，
请在服务器启动时设置performance_schema_hosts_size系统变量。若要禁用主机统计信息，请将此变量设置为0。


主机表有以下列。有关性能模式如何维护表中的行(包括TRUNCATE表的影响)的描述，请参阅26.12.8节“性能模式连接表”。
https://dev.mysql.com/doc/refman/8.0/en/performance-schema-connection-tables.html
*/

return [
	//Connection statistics per client host name
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-hosts-table.html
	'tableName' => 'hosts',
	'tableDesc' => '每个客户端主机名的连接统计信息',
	'fields' => [
		'HOST' => [
			//The host from which the client connected. This is NULL for an internal thread, or for a user session that failed to authenticate.
			'name' => '主机',
			'desc' => '客户端与之连接的主机。对于内部线程或未能进行身份验证的用户会话，此值为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CURRENT_CONNECTIONS' => [
			//The current number of connections for the host.
			'name' => '主机当前连接数',
			'desc' => '主机的当前连接数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TOTAL_CONNECTIONS' => [
			//The total number of connections for the host.
			'name' => '主机连接总数',
			'desc' => '主机的连接总数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];