<?php
/*
The persisted_variables table provides an SQL interface to the mysqld-auto.cnf file that stores persisted global system variable settings, 
enabling the file contents to be inspected at runtime using SELECT statements. Variables are persisted using SET PERSIST or PERSIST_ONLY statements; 
see Section 13.7.6.1, “SET Syntax for Variable Assignment”. The table contains a row for each persisted system variable in the file. Variables not persisted do not appear in the table.

For information about persisted system variables, see Section 13.7.6.1, “SET Syntax for Variable Assignment”.

persisted_variables表为存储持久化的全局系统变量设置的mysqld-auto.cnf文件提供了一个SQL接口，允许在运行时使用SELECT语句检查文件内容。
使用SET PERSIST或PERSIST_ONLY语句持久化变量;参见13.7.6.1节“变量赋值的设置语法”。该表包含文件中每个持久系统变量的一行。未持久保存的变量不会出现在表中。
https://dev.mysql.com/doc/refman/8.0/en/set-variable.html

有关持久化系统变量的信息，请参见13.7.6.1节“设置变量赋值语法”。
https://dev.mysql.com/doc/refman/8.0/en/set-variable.html
*/

return [
	//Contents of mysqld-auto.cnf file
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-persisted-variables-table.html
	'tableName' => 'persisted_variables',
	'tableDesc' => 'mysqld-auto.cnf文件的内容',
	'fields' => [
		'VARIABLE_NAME' => [
			//The variable name listed in mysqld-auto.cnf.
			'name' => '变量名称',
			'desc' => '变量名称在mysqld-auto.cnf中列出。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VARIABLE_VALUE' => [
			//The value listed for the variable in mysqld-auto.cnf.
			'name' => '变量值',
			'desc' => 'mysqld-auto.cnf中列出的变量值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];