<?php
/*
The Performance Schema provides instrumentation for prepared statements, for which there are two protocols:
The binary protocol. This is accessed through the MySQL C API and maps onto underlying server commands as shown in the following table.
The text protocol. This is accessed using SQL statements and maps onto underlying server commands as shown in the following table.
Performance Schema prepared statement instrumentation covers both protocols. The following discussion refers to the server commands rather than the C API functions or SQL statements.

性能模式为准备好的语句提供插装，对于这些语句有两种协议:

二进制协议。它通过MySQL C API访问，并映射到底层服务器命令，如下表所示。

协议的文本。使用SQL语句访问并映射到底层服务器命令，如下表所示。

性能模式准备的语句插装涵盖了这两种协议。下面的讨论涉及服务器命令，而不是C API函数或SQL语句。

Information about prepared statements is available in the prepared_statements_instances table. This table enables inspection of prepared statements used in the server and provides aggregated statistics about them. 
To control the size of this table, set the performance_schema_max_prepared_statements_instances system variable at server startup.
关于准备好的语句的信息可以在prepared_statements_instances表中获得。此表支持对服务器中使用的准备语句进行检查，并提供关于这些语句的聚合统计信息。
要控制这个表的大小，请在服务器启动时设置performance_schema_max_prepared_statements_instances系统变量。
*/

return [
	//Prepared statement instances and statistics
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-prepared-statements-instances-table.html
	'tableName' => 'prepared_statements_instances',
	'tableDesc' => '准备的语句实例和统计信息',
	'fields' => [
		'OBJECT_INSTANCE_BEGIN' => [
			//The address in memory of the instrumented prepared statement.
			'name' => '语句在内存中的地址',
			'desc' => '已准备好的语句在内存中的地址。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'STATEMENT_ID' => [
			//The internal statement ID assigned by the server. The text and binary protocols both use statement IDs.
			'name' => '内部语句ID',
			'desc' => '服务器分配的内部语句ID。文本协议和二进制协议都使用语句ID。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'STATEMENT_NAME' => [
			//For the binary protocol, this column is NULL. For the text protocol, this column is the external statement name assigned by the user. For example, for the following SQL statement, the name of the prepared statement is stmt:
			'name' => '外部语句名称',
			'desc' => '对于二进制协议，此列为NULL。对于文本协议，此列是用户分配的外部语句名称。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SQL_TEXT' => [
			//The prepared statement text, with ? placeholder markers.
			'name' => '语句文本',
			'desc' => '准备好的语句文本，带有？占位符标记。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OWNER_THREAD_ID' => [
			//These columns indicate the event that created the prepared statement.
			'name' => '所属线程ID',
			'desc' => '这些列指示创建预备语句的事件。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OWNER_EVENT_ID' => [
			//
			'name' => '所属事件ID',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'OWNER_THREAD_ID'
		],
		'OWNER_OBJECT_TYPE' => [
			//For a prepared statement created by a client session, these columns are NULL. For a prepared statement created by a stored program, these columns point to the stored program. A typical user error is forgetting to deallocate prepared statements.
			'name' => 'OWNER_OBJECT_TYPE',
			'desc' => '对于客户机会话创建的准备语句，这些列为NULL。对于由存储过程创建的预准备语句，这些列指向存储的程序。一个典型的用户错误是忘记释放准备好的语句。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OWNER_OBJECT_SCHEMA' => [
			//
			'name' => 'OWNER_OBJECT_SCHEMA',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'OWNER_OBJECT_TYPE'
		],
		'OWNER_OBJECT_NAME' => [
			//
			'name' => 'OWNER_OBJECT_NAME',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'OWNER_OBJECT_TYPE'
		],
		'TIMER_PREPARE' => [
			//The time spent executing the statement preparation itself.
			'name' => '执行准备所费时间',
			'desc' => '执行语句准备本身所花费的时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_REPREPARE' => [
			//The number of times the statement was reprepared internally (see Section 8.10.3, “Caching of Prepared Statements and Stored Programs”). 
			//Timing statistics for repreparation are not available because it is counted as part of statement execution, not as a separate operation.
			'name' => '内部被重新准备的次数',
			'desc' => '语句在内部被重新准备的次数(参见8.10.3节，“准备语句和存储程序的缓存”)。重新准备的时间统计信息是不可用的，因为它是语句执行的一部分，而不是单独的操作。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/statement-caching.html',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_EXECUTE' => [
			//Aggregated statistics for executions of the prepared statement.
			'name' => '',
			'desc' => '预准备语句执行的汇总统计信息。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_EXECUTE' => [
			//
			'name' => 'SUM_TIMER_EXECUTE',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_EXECUTE'
		],
		'MIN_TIMER_EXECUTE' => [
			//
			'name' => 'MIN_TIMER_EXECUTE',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_EXECUTE'
		],
		'AVG_TIMER_EXECUTE' => [
			//
			'name' => 'AVG_TIMER_EXECUTE',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_EXECUTE'
		],
		'MAX_TIMER_EXECUTE' => [
			//
			'name' => 'MAX_TIMER_EXECUTE',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_EXECUTE'
		],
		'SUM_LOCK_TIME' => [
			//The time spent waiting for table locks. This value is computed in microseconds but normalized to picoseconds for easier comparison with other Performance Schema timers.
			'name' => '等待表锁所费时间',
			'desc' => '等待表锁所花费的时间。该值以微秒为单位计算，但为了更容易与其他性能模式计时器进行比较，该值被规范化为皮秒。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_ERRORS' => [
			//Whether an error occurred for the statement. The value is 0 if the SQLSTATE value begins with 00 (completion) or 01 (warning). The value is 1 is the SQLSTATE value is anything else.
			'name' => '是否发生错误',
			'desc' => '语句是否发生错误。如果SQLSTATE值以00（完成）或01（警告）开头，则值为0。值为1是SQLSTATE值是其他任何值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_WARNINGS' => [
			//The number of warnings, from the statement diagnostics area.
			'name' => '警告数',
			'desc' => '语句诊断区域中的警告数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_ROWS_AFFECTED' => [
			//The number of rows affected by the statement. For a description of the meaning of “affected,” see mysql_affected_rows().
			'name' => '影响行数',
			'desc' => '语句影响的行数。有关“受影响”的含义的说明，请参见mysql_affected_rows()。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_ROWS_SENT' => [
			//The number of rows returned by the statement.
			'name' => '返回的行数',
			'desc' => '语句返回的行数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_ROWS_EXAMINED' => [
			//The number of rows examined by the server layer (not counting any processing internal to storage engines).
			'name' => '服务器层检查的行数',
			'desc' => '服务器层检查的行数（不计算存储引擎内部的任何处理）。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_CREATED_TMP_DISK_TABLES' => [
			//The number of internal on-disk temporary tables created by the server while executing statements.
			//You can compare the number of internal on-disk temporary tables created to the total number of internal temporary tables created by comparing Created_tmp_disk_tables and Created_tmp_tables values.
			//Due to a known limitation, Created_tmp_disk_tables does not count on-disk temporary tables created in memory-mapped files. By default, 
			//the TempTable storage engine overflow mechanism creates internal temporary tables in memory-mapped files. This behavior is controlled by the temptable_use_mmap variable, which is enabled by default.
			'name' => '磁盘临时表数量',
			'desc' => '服务器在执行语句时创建的内部磁盘临时表的数量。您可以将创建的内部磁盘临时表的数量与通过比较Created_tmp_disk_tables和Created_tmp_tables值创建的内部临时表的总数进行比较。由于已知限制，Created_tmp_disk_tables不计算在内存映射文件中创建的磁盘上临时表。默认情况下，TempTable存储引擎溢出机制会在内存映射文件中创建内部临时表。此行为由temptable_use_mmap变量控制，该变量默认情况下处于启用状态。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_CREATED_TMP_TABLES' => [
			//The number of internal temporary tables created by the server while executing statements.
			//You can compare the number of internal on-disk temporary tables created to the total number of internal temporary tables created by comparing Created_tmp_disk_tables and Created_tmp_tables values.
			'name' => '临时表数量',
			'desc' => '服务器在执行语句时创建的内部临时表的数量。您可以将创建的内部磁盘临时表的数量与通过比较Created_tmp_disk_tables和Created_tmp_tables值创建的内部临时表的总数进行比较。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_SELECT_FULL_JOIN' => [
			//The number of joins that perform table scans because they do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.
			'name' => '无索引表扫描联接数',
			'desc' => '由于不使用索引而执行表扫描的联接数。如果该值不为0，则应仔细检查表的索引。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_SELECT_FULL_RANGE_JOIN' => [
			//The number of joins that used a range search on a reference table.
			'name' => '范围搜索连接数',
			'desc' => '在引用表上使用范围搜索的连接数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_SELECT_RANGE' => [
			//The number of joins that used ranges on the first table. This is normally not a critical issue even if the value is quite large.
			'name' => '第一个表上使用的联接的数量',
			'desc' => '在第一个表上使用的联接的数量。即使值相当大，这通常也不是一个关键问题。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_SELECT_RANGE_CHECK' => [
			//The number of joins without keys that check for key usage after each row. If this is not 0, you should carefully check the indexes of your tables.
			'name' => '无键连接的数目',
			'desc' => '在每行后检查键使用情况的无键连接的数目。如果这个值不是0，那么应该仔细检查表的索引。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_SELECT_SCAN' => [
			//The number of joins that did a full scan of the first table.
			'name' => '第一个表进行完整扫描的联接的数量',
			'desc' => '对第一个表进行完整扫描的联接的数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_SORT_MERGE_PASSES' => [
			//The number of merge passes that the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.
			'name' => '排序算法需要进行的归并次数',
			'desc' => '排序算法需要进行的归并次数。如果这个值很大，那么应该考虑增加sort_buffer_size系统变量的值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_SORT_RANGE' => [
			//The number of sorts that were done using ranges.
			'name' => '使用范围完成的排序数量',
			'desc' => '使用范围完成的排序数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_SORT_ROWS' => [
			//The number of sorted rows.
			'name' => '排序行数',
			'desc' => '排序的行数',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_SORT_SCAN' => [
			//The number of sorts that were done by scanning the table.
			'name' => '通过扫描表完成的排序数',
			'desc' => '通过扫描表完成的排序数',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_NO_INDEX_USED' => [
			//1 if the statement performed a table scan without using an index, 0 otherwise.
			'name' => '是否使用索引',
			'desc' => '如果语句在没有使用索引的情况下执行了表扫描，则为1，否则为0。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_NO_GOOD_INDEX_USED' => [
			//1 if the server found no good index to use for the statement, 0 otherwise. For additional information, 
			//see the description of the Extra column from EXPLAIN output for the Range checked for each record value in Section 8.8.2, “EXPLAIN Output Format”.
			'name' => '是否有好的索引',
			'desc' => '如果服务器没有找到好的索引用于语句，则为0。有关更多信息，请参见在8.8.2节“EXPLAIN output Format”中对每个记录值检查范围的解释输出中额外的列的描述。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		
	]
];