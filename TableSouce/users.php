<?php
/*
The users table contains a row for each user who has connected to the MySQL server. For each user name, the table counts the current and total number of connections. The table size is autosized at server startup. 
To set the table size explicitly, set the performance_schema_users_size system variable at server startup. To disable user statistics, set this variable to 0.

The users table has the following columns. For a description of how the Performance Schema maintains rows in this table, including the effect of TRUNCATE TABLE, see Section 26.12.8, “Performance Schema Connection Tables”.

users表为每个连接到MySQL服务器的用户包含一行。对于每个用户名，该表计算当前连接数和总连接数。表的大小在服务器启动时自动调整。要显式设置表大小，请在服务器启动时设置performance_schema_users_size系统变量。
若要禁用用户统计信息，请将此变量设置为0。

users表有以下列。有关性能模式如何维护表中的行(包括TRUNCATE表的影响)的描述，请参阅26.12.8节“性能模式连接表”。
https://dev.mysql.com/doc/refman/8.0/en/performance-schema-connection-tables.html
*/

return [
	//Connection statistics per client user name
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-users-table.html
	'tableName' => 'users',
	'tableDesc' => '每个客户端用户名的连接统计信息',
	'fields' => [
		'USER' => [
			//The client user name for the connection. This is NULL for an internal thread, or for a user session that failed to authenticate.
			'name' => '连接的客户端用户名',
			'desc' => '连接的客户端用户名。对于内部线程或未能进行身份验证的用户会话，此值为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CURRENT_CONNECTIONS' => [
			//The current number of connections for the user.
			'name' => '用户的当前连接数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TOTAL_CONNECTIONS' => [
			//The total number of connections for the user.
			'name' => '用户的连接总数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];