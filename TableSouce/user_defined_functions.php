<?php
/*
The user_defined_functions table contains a row for each user-defined function (UDF) registered by a server component or plugin, or by a CREATE FUNCTION statement.
user_defined_functions表包含每个用户定义函数(UDF)的行，UDF是由服务器组件或插件或CREATE function语句注册的。
*/

return [
	//Registered user-defined functions
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-user-defined-functions-table.html
	'tableName' => 'user_defined_functions',
	'tableDesc' => '注册用户定义函数',
	'fields' => [
		'UDF_NAME' => [
			//The UDF name as referred to in SQL statements. The value is NULL if the function was registered by a CREATE FUNCTION statement and is in the process of unloading.
			'name' => '在SQL语句中引用的UDF名称',
			'desc' => '在SQL语句中引用的UDF名称。如果函数是由CREATE function语句注册的，并且正在卸载，则该值为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'UDF_RETURN_TYPE' => [
			//The UDF return value type. The value is one of int, decimal, real, char, or row.
			'name' => 'UDF返回值类型',
			'desc' => 'UDF返回值类型。该值是int、decimal、real、char或row的值之一。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'UDF_TYPE' => [
			//The UDF type. The value is one of function (scalar) or aggregate.
			'name' => 'UDF类型',
			'desc' => 'UDF类型。值是函数(标量)或集合的值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'UDF_LIBRARY' => [
			//The name of the UDF library file containing the executable UDF code. The file is located in the directory named by the plugin_dir system variable. The value is NULL if the UDF was registered using a server component service rather than by a CREATE FUNCTION statement.
			'name' => '包含可执行UDF代码的UDF库文件的名称',
			'desc' => '包含可执行UDF代码的UDF库文件的名称。该文件位于由plugin_dir系统变量命名的目录中。如果UDF是使用服务器组件服务而不是通过CREATE FUNCTION语句注册的，则该值为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'UDF_USAGE_COUNT' => [
			//The current UDF usage count.
			'name' => '当前UDF使用计数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];