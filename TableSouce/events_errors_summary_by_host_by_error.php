<?php
/*
Collection of error information is controlled by the error instrument, which is enabled by default. Timing information is not collected.

Each error summary table has three columns that identify the error:

ERROR_NUMBER is the numeric error value. The value is unique.

ERROR_NAME is the symbolic error name corresponding to the ERROR_NUMBER value. The value is unique.

SQLSTATE is the SQLSTATE value corresponding to the ERROR_NUMBER value. The value is not necessarily unique.

For example, if ERROR_NUMBER is 1050, ERROR_NAME is ER_TABLE_EXISTS_ERROR and SQLSTATE is 42S01.

错误信息的收集由错误仪器控制，默认情况下是启用的。不收集时间信息。

每个错误汇总表有三列用于识别错误:

ERROR_NUMBER是数字错误值。值是唯一的。

ERROR_NAME是对应于ERROR_NUMBER值的符号错误名。值是唯一的。

SQLSTATE是对应于ERROR_NUMBER值的SQLSTATE值。值不一定是唯一的。

例如，如果ERROR_NUMBER是1050,ERROR_NAME是ER_TABLE_EXISTS_ERROR, SQLSTATE是42S01。
https://dev.mysql.com/doc/mysql-errors/8.0/en/server-error-reference.html#error_er_table_exists_error


每个错误汇总表中的一个空行用于汇总超出检测错误范围的所有错误的统计信息。例如，如果MySQL服务器错误位于M到N的范围内，
并且出现了一个错误，而编号Q不在该范围内，则错误聚合在NULL行中。NULL行是ERROR_NUMBER=0、ERROR_NAME=NULL和SQLSTATE=NULL的行。
*/

return [
	//
	'tableName' => 'events_errors_summary_by_host_by_error',
	'tableDesc' => '仅通过域名信息标记的错误信息总结',
	'fields' => [
		'HOST' => [
			//
			'name' => '域名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ERROR_NUMBER' => [
			//
			'name' => '错误号',
			'desc' => 'ERROR_NUMBER是数字错误值。值是唯一的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ERROR_NAME' => [
			//
			'name' => '错误名',
			'desc' => 'ERROR_NAME是对应于ERROR_NUMBER值的符号错误名。值是唯一的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SQL_STATE' => [
			//
			'name' => 'SQLSTATE',
			'desc' => 'SQLSTATE是对应于ERROR_NUMBER值的SQLSTATE值。值不一定是唯一的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_ERROR_RAISED' => [
			//This column aggregates the number of times the error occurred.
			'name' => '错误次数',
			'desc' => 'This column aggregates the number of times the error occurred.',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_ERROR_HANDLED' => [
			//This column aggregates the number of times the error was handled by an SQL exception handler.
			'name' => '处理此错误次数',
			'desc' => '此列聚合SQL异常处理程序处理错误的次数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'FIRST_SEEN' => [
			//Timestamp indicating when the error was first seen and most recently seen.
			'name' => '错误首次出现时间',
			'desc' => '时间戳，指示错误首次出现和最近出现的时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_SEEN' => [
			//
			'name' => '错误最近出现时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'FIRST_SEEN'
		],
	]
];