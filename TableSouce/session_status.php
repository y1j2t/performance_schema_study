<?php
/*
The MySQL server maintains many status variables that provide information about its operation (see Section 5.1.10, “Server Status Variables”). Status variable information is available in these Performance Schema tables:

global_status: Global status variables. An application that wants only global values should use this table.

session_status: Status variables for the current session. An application that wants all status variable values for its own session should use this table. 
It includes the session variables for its session, as well as the values of global variables that have no session counterpart.

status_by_thread: Session status variables for each active session. An application that wants to know the session variable values for specific sessions should use this table. 
It includes session variables only, identified by thread ID.

There are also summary tables that provide status variable information aggregated by account, host name, and user name. See Section 26.12.18.12, “Status Variable Summary Tables”.

MySQL服务器维护了许多状态变量，提供关于其操作的信息(见5.1.10节，“服务器状态变量”)。状态变量信息可在以下性能模式表中获得:
https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html

全局状态变量。只需要全局值的应用程序应该使用此表。

session_status:当前会话的状态变量如果应用程序希望为其自己的会话使用所有状态变量值，则应该使用此表。它包括其会话的会话变量，以及没有会话对应项的全局变量的值。

status_by_thread:每个活动会话的会话状态变量。希望知道特定会话的会话变量值的应用程序应该使用此表。它只包含由线程ID标识的会话变量。

还有一些汇总表，提供按帐户、主机名和用户名聚合的状态变量信息。见第26.12.18.12节，“状态变量汇总表”。
https://dev.mysql.com/doc/refman/8.0/en/performance-schema-status-variable-summary-tables.html
*/

return [
	//Status variables for current session
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-status-variable-tables.html
	'tableName' => 'session_status',
	'tableDesc' => '当前会话的状态变量',
	'fields' => [
		'VARIABLE_NAME' => [
			//The status variable name.
			'name' => '状态变量名',
			'desc' => '状态变量名。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_VALUE' => [
			//The status variable value. For global_status, this column contains the global value. For session_status, this column contains the variable value for the current session.
			'name' => '状态变量的值',
			'desc' => '状态变量的值。对于全局状态，此列包含全局值。对于会话状态，此列包含当前会话的变量值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];