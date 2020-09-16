<?php
/*

*/

return [
	//Session status variables per session
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-status-variable-tables.html
	'tableName' => 'status_by_thread',
	'tableDesc' => '每个会话的会话状态变量',
	'fields' => [
		'THREAD_ID' => [
			//The thread identifier of the session in which the status variable is defined.
			'name' => '线程ID',
			'desc' => '定义状态变量的会话的线程标识符。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_NAME' => [
			//The status variable name.
			'name' => '状态变量名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_VALUE' => [
			//The session variable value for the session named by the THREAD_ID column.
			'name' => '变量值',
			'desc' => '由THREAD_ID列命名的会话的会话变量值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];