<?php
/*
The Performance Schema makes status variable information available in the tables described in Section 26.12.15, “Performance Schema Status Variable Tables”. 
It also makes aggregated status variable information available in summary tables, described here. 
Each status variable summary table has one or more grouping columns to indicate how the table aggregates status values:
性能方案在26.12.15节“性能方案状态变量表”中描述的表中提供状态变量信息。它还可以在汇总表中提供聚合状态变量信息，如下所述。每个状态变量汇总表有一个或多个分组列，以指示表如何聚合状态值:

status_by_account has USER, HOST, and VARIABLE_NAME columns to summarize status variables by account.
status_by_account拥有USER、HOST和VARIABLE_NAME列，可以按帐户汇总状态变量。

status_by_host has HOST and VARIABLE_NAME columns to summarize status variables by the host from which clients connected.
status_by_host具有HOST和VARIABLE_NAME列，用于汇总客户机所连接的主机的状态变量。

status_by_user has USER and VARIABLE_NAME columns to summarize status variables by client user name.
status_by_user拥有USER和VARIABLE_NAME列，可以根据客户端用户名总结状态变量。
*/

return [
	//Session status variables per account
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-status-variable-summary-tables.html
	'tableName' => 'status_by_account',
	'tableDesc' => '每个帐户的会话状态变量',
	'fields' => [
		'USER' => [
			//
			'name' => '用户名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HOST' => [
			//
			'name' => '主机',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_NAME' => [
			//
			'name' => '变量名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_VALUE' => [
			//The aggregated status variable value for active and terminated sessions.
			'name' => '变量值',
			'desc' => '活动会话和终止会话的聚合状态变量值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];