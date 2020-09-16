<?php
/*
The variables_info table shows, for each system variable, the source from which it was most recently set, and its range of values.
variables_info表显示了每个系统变量的最新设置源及其取值范围。
*/

return [
	//How system variables were most recently set
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-variables-info-table.html
	'tableName' => 'variables_info',
	'tableDesc' => '最近系统变量是如何设置的',
	'fields' => [
		'VARIABLE_NAME' => [
			//The variable name.
			'name' => '变量的名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_SOURCE' => [
			//The source from which the variable was most recently set:
			//COMMAND_LINE    	The variable was set on the command line.
			//COMPILED      	The variable has its compiled-in default value. COMPILED is the value used for variables not set any other way.
			//DYNAMIC			The variable was set at runtime. This includes variables set within files specified using the init_file system variable.
			//EXPLICIT			The variable was set from an option file named with the --defaults-file option.
			//EXTRA				The variable was set from an option file named with the --defaults-extra-file option.
			//GLOBAL			The variable was set from a global option file. This includes option files not covered by EXPLICIT, EXTRA, LOGIN, PERSISTED, SERVER, or USER.
			//LOGIN				The variable was set from a user-specific login path file (~/.mylogin.cnf).
			//PERSISTED			The variable was set from a server-specific mysqld-auto.cnf option file. No row has this value if the server was started with persisted_globals_load disabled.
			//SERVER			The variable was set from a server-specific $MYSQL_HOME/my.cnf option file. For details about how MYSQL_HOME is set, see Section 4.2.2.2, “Using Option Files”.
			//USER				The variable was set from a user-specific ~/.my.cnf option file.
			'name' => '变量最近被设置的来源',
			'desc' => '变量最近被设置的来源:COMMAND_LINE=>该变量是在命令行上设置的。COMPILED=>变量有其编译后的默认值。编译是未以其他方式设置的变量所使用的值。DYNAMIC=>该变量是在运行时设置的。这包括在使用init_file系统变量指定的文件中设置的变量。EXPLICIT=>该变量是从一个名为——default -file选项的选项文件中设置的。EXTRA=>该变量是从一个名为——default -extra-file选项的选项文件中设置的。GLOBAL=>该变量是从一个全局选项文件中设置的。这包括显式、额外、登录、持久、服务器或用户未包含的选项文件。LOGIN=>该变量是从特定于用户的登录路径文件(~/.mylogin.cnf)设置的。PERSISTED=>该变量是从特定于服务器的mysqld-auto.cnf选项文件中设置的。如果服务器在禁用persisted_globals_load的情况下启动，那么没有一行具有这个值。SERVER=>该变量是从特定于服务器的$MYSQL_HOME/my.cnf选项文件中设置的。有关如何设置MYSQL_HOME的详细信息，请参见4.2.2.2节“使用选项文件”。USER=>该变量是从用户特定的~/.my.cnf选项文件中设置的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_PATH' => [
			//If the variable was set from an option file, VARIABLE_PATH is the path name of that file. Otherwise, the value is the empty string.
			'name' => '选项文件路径',
			'desc' => '如果该变量是从选项文件中设置的，则VARIABLE_PATH是该文件的路径名。否则，值为空字符串。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_VALUE' => [
			//The minimum and maximum permitted values for the variable. Both are 0 for variables that have no such values (that is, variables that are not numeric).
			'name' => '变量允许的最小值',
			'desc' => '变量允许的最小值和最大值。对于没有这些值的变量(即不是数值的变量)，两者都为0。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_VALUE' => [
			//
			'name' => '变量允许的最大值',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'MIN_VALUE'
		],
		'SET_TIME' => [
			//The time at which the variable was most recently set. The default is the time at which the server initialized global system variables during startup.
			'name' => '变量最近被设置的时间',
			'desc' => '变量最近被设置的时间。默认值是服务器在启动时初始化全局系统变量的时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SET_USER' => [
			//The user name and host name of the client user that most recently set the variable. 
			//If a client connects as user17 from host host34.example.com using the account 'user17'@'%.example.com, SET_USER and SET_HOST will be user17 and host34.example.com, respectively. 
			//For proxy user connections, these values correspond to the external (proxy) user, not the proxied user against which privilege checking is performed. 
			//The default for each column is the empty string, indicating that the variable has not been set since server startup.
			'name' => '最近设置该变量的用户名',
			'desc' => '最近设置该变量的客户端用户的用户名和主机名。如果客户端使用帐户"user17"@"%.example.com从主机host34.example.com连接为user17, SET_USER和SET_HOST将分别是user17和host34.example.com。对于代理用户连接，这些值对应于外部(代理)用户，而不是对其执行特权检查的代理用户。每个列的默认值是空字符串，表示自服务器启动以来没有设置变量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SET_HOST' => [
			//
			'name' => '最近设置该变量的主机名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SET_USER'
		],

	]
];