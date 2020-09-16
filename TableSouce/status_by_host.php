<?php
/*

*/

return [
	//Session status variables per host name
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-status-variable-summary-tables.html
	'tableName' => 'status_by_host',
	'tableDesc' => '每个主机名的会话状态变量',
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