<?php
/*
The Performance Schema provides a user_variables_by_thread table that exposes user-defined variables. These are variables defined within a specific session and include a @ character preceding the name; see Section 9.4, “User-Defined Variables”.
性能模式提供了一个user_variables_by_thread表，该表公开用户定义的变量。这些是在特定会话中定义的变量，在名称前包含@字符;参见第9.4节，“用户定义变量”。
https://dev.mysql.com/doc/refman/8.0/en/user-variables.html
*/

return [
	//User-defined variables per thread
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-user-variable-tables.html
	'tableName' => 'user_variables_by_thread',
	'tableDesc' => '每个线程的用户定义变量',
	'fields' => [
		'THREAD_ID' => [
			//The thread identifier of the session in which the variable is defined.
			'name' => '定义变量的会话的线程标识符',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_NAME' => [
			//The variable name, without the leading @ character.
			'name' => '变量名',
			'desc' => '变量名，没有前导@字符',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_VALUE' => [
			//The variable value.
			'name' => '变量的值',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];
