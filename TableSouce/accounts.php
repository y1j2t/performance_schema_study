<?php
/*
 The accounts table contains a row for each account that has connected to the MySQL server. For each account,
 the table counts the current and total number of connections. The table size is autosized at server startup.
 To set the table size explicitly, set the performance_schema_accounts_size system variable at server startup.
 To disable account statistics, set this variable to 0.
 
  accounts表包含连接到MySQL服务器的每个帐户的一行。为每一个账户,
 该表计算当前连接数和总连接数。表的大小在服务器启动时自动调整。
 要显式设置表大小，请在服务器启动时设置performance_schema_accounts_size系统变量。
 若要禁用帐户统计信息，请将此变量设置为0。
*/

return [
	//Connection statistics per client account
	'tableName' => 'accounts',
	'tableDesc' => '每个客户端用户的连接统计信息',
	'fields' => [
		'USER' => [
			//The client user name for the connection. This is NULL for an internal thread, or for a user session that failed to authenticate.
			'name' => '连接用户',
			'desc' => '此连接的客户端用户名',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HOST' => [
			//The host from which the client connected. This is NULL for an internal thread, or for a user session that failed to authenticate.
			'name' => '用户域名',
			'desc' => '此连接的客户端用户域名',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CURRENT_CONNECTIONS' => [
			//The current number of connections for the account.
			'name' => '连接数',
			'desc' => '当前用户连接数',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TOTAL_CONNECTIONS' => [
			//The total number of connections for the account.
			'name' => '总连接数',
			'desc' => '自启动以来总计连接数',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		]
	]
];