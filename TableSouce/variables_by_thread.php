<?php
/*
The MySQL server maintains many system variables that indicate how it is configured (see Section 5.1.8, “Server System Variables”). System variable information is available in these Performance Schema tables:

global_variables: Global system variables. An application that wants only global values should use this table.

session_variables: System variables for the current session. An application that wants all system variable values for its own session should use this table. It includes the session variables for its session, as well as the values of global variables that have no session counterpart.

variables_by_thread: Session system variables for each active session. An application that wants to know the session variable values for specific sessions should use this table. It includes session variables only, identified by thread ID.

persisted_variables: Provides a SQL interface to the mysqld-auto.cnf file that stores persisted global system variable settings. See Section 26.12.14.1, “Performance Schema persisted_variables Table”.

variables_info: Shows, for each system variable, the source from which it was most recently set, and its range of values. See Section 26.12.14.2, “Performance Schema variables_info Table”.

The session variable tables (session_variables, variables_by_thread) contain information only for active sessions, not terminated sessions.

MySQL服务器维护了许多系统变量来指示它是如何配置的(参见5.1.8节，“服务器系统变量”)。系统变量信息可在以下性能模式表中获得:
https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html

全局系统变量。只需要全局值的应用程序应该使用此表。

session_variables:当前会话的系统变量。如果应用程序希望为其自己的会话使用所有系统变量值，则应该使用此表。它包括其会话的会话变量，以及没有会话对应项的全局变量的值。

variables_by_thread:每个活动会话的会话系统变量。希望知道特定会话的会话变量值的应用程序应该使用此表。它只包含由线程ID标识的会话变量。

persisted_variables:为存储持久化全局系统变量设置的mysqld-auto.cnf文件提供一个SQL接口。参见26.12.14.1节，“Performance Schema persisted_variables表”。
https://dev.mysql.com/doc/refman/8.0/en/performance-schema-persisted-variables-table.html

variables_info:对于每个系统变量，显示最近设置它的源和它的值范围。参见第26.12.14.2节“性能模式变量_info表”。
https://dev.mysql.com/doc/refman/8.0/en/performance-schema-variables-info-table.html

会话变量表(session_variables, variables_by_thread)只包含活动会话的信息，而不包含终止会话的信息。
*/

return [
	//Session system variables per session
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-system-variable-tables.html
	'tableName' => 'variables_by_thread',
	'tableDesc' => '每个会话的会话系统变量',
	'fields' => [
		'THREAD_ID' => [
			//The thread identifier of the session in which the system variable is defined.
			'name' => '定义系统变量的会话的线程标识符',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_NAME' => [
			//The system variable name.
			'name' => '系统变量名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_VALUE' => [
			//The session variable value for the session named by the THREAD_ID column.
			'name' => '由THREAD_ID列命名的会话的会话变量值',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],

	]
];