<?php
/*
 The events_statements_history table contains the N most recent statement events that have ended per thread.
 Statement events are not added to the table until they have ended. When the table contains the maximum number of rows for a given thread,
 the oldest thread row is discarded when a new row for that thread is added. When a thread ends, all its rows are discarded.

 The Performance Schema autosizes the value of N during server startup. To set the number of rows per thread explicitly,
 set the performance_schema_events_statements_history_size system variable at server startup.

 The events_statements_history table has the same columns and indexing as events_statements_current. See Section 26.12.6.1, “The events_statements_current Table”.

 TRUNCATE TABLE is permitted for the events_statements_history table. It removes the rows.

 For more information about the relationship between the three events_statements_xxx event tables, see Section 26.9, “Performance Schema Tables for Current and Historical Events”.
 
 events_statements_history表包含每个线程最近结束的N个语句事件。语句事件直到结束才添加到表中。当表包含给定线程的最大行数时，当为该线程添加新行时，将丢弃最老的线程行。当一个线程结束时，它的所有行都被丢弃。

 性能模式会在服务器启动时自动调整N的值。要显式地设置每个线程的行数，可以在服务器启动时设置performance_schema_events_statements_history_size系统变量。

 events_statements_history表具有与events_statements_current相同的列和索引。参见26.12.6.1节“events_statements_current表”。

 events_statements_history表允许使用TRUNCATE表。它删除行。

 有关三个events_statements_xxx事件表之间关系的更多信息，请参见26.9节“当前事件和历史事件的性能模式表”。
*/

return [
	//Most recent statement events per thread
	'tableName' => 'events_statements_history',
	'tableDesc' => '每个线程最近的语句事件',
	'fields' => [
		'THREAD_ID' => [
			//The thread associated with the event and the thread current event number when the event starts.
			//The THREAD_ID and EVENT_ID values taken together uniquely identify the row. No two rows have the same pair of values.
			'name' => '线程ID',
			'desc' => '与事件关联的线程和事件启动时的线程当前事件号',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_ID' => [
			//
			'name' => '事件ID',
			'desc' => '与事件关联的线程和事件启动时的线程当前事件号',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'END_EVENT_ID' => [
			//This column is set to NULL when the event starts and updated to the thread current event number when the event ends.
			'name' => '结束时事件ID',
			'desc' => '该列在事件开始时设置为NULL，并在事件结束时更新为线程当前事件号。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_NAME' => [
			//This is a NAME value from the setup_instruments table
			'name' => '事件名',
			'desc' => '这是来自setup_instruments表的名称值',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SOURCE' => [
			//The name of the source file containing the instrumented code that produced the event and the line number in the file at which the instrumentation occurs.
			//This enables you to check the source to determine exactly what code is involved.
			'name' => '源文件名',
			'desc' => '源文件的名称，其中包含产生事件的插装代码，以及插装发生的文件中的行号',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_START' => [
			//
			'name' => '事件计时开始',
			'desc' => '事件的计时信息。这些值的单位是皮秒（万亿分之一秒）',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_END' => [
			//
			'name' => '事件计时结束',
			'desc' => '事件的计时信息。这些值的单位是皮秒（万亿分之一秒）',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_WAIT' => [
			//
			'name' => '事件持续事件',
			'desc' => '事件的计时信息。这些值的单位是皮秒（万亿分之一秒）',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LOCK_TIME' => [
			//The time spent waiting for table locks. This value is computed in microseconds but normalized to picoseconds for easier comparison with other Performance Schema timers.
			'name' => '等待表锁时间',
			'desc' => '等待表锁所花费的时间。该值以微秒为单位计算，但为了更容易与其他性能模式计时器进行比较，该值被规范化为皮秒。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SQL_TEXT' => [
			//The text of the SQL statement. For a command not associated with an SQL statement, the value is NULL.
			'name' => 'SQL语句',
			'desc' => 'SQL语句的文本。对于不与SQL语句关联的命令，值为NULL。默认存储长度performance_schema_max_sql_text_length=1024字节',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'DIGEST' => [
			//The statement digest SHA-256 value as a string of 64 hexadecimal characters, or NULL if the statements_digest consumer is no.
			'name' => '语句摘要',
			'desc' => '语句摘要SHA-256的值为64个十六进制字符的字符串，如果statements_digest使用者为no，则为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'DIGEST_TEXT' => [
			//The normalized statement digest text, or NULL if the statements_digest consumer is no.
			'name' => '规范化语句摘要',
			'desc' => '规范化语句摘要文本，如果statements_digest使用者为no，则为NULL',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/performance-schema-statement-digests.html',
			'link' => '',
			'linkDesc' => ''
		],
		'CURRENT_SCHEMA' => [
			//The default database for the statement, NULL if there is none.
			'name' => '默认数据库',
			'desc' => '语句的默认数据库，如果没有，则为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_SCHEMA' => [
			//For nested statements (stored programs), these columns contain information about the parent statement. Otherwise they are NULL.
			'name' => '文本模式或库名',
			'desc' => '对于嵌套语句(存储过程)，这些列包含有关父语句的信息。否则为空。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_NAME' => [
			//The OBJECT_SCHEMA and OBJECT_NAME columns should contain a literal schema or table name, or '%' to match any name.
			'name' => '文本模式或表名',
			'desc' => 'OBJECT_SCHEMA和OBJECT_NAME列应该包含一个文字模式或表名，或者“%”来匹配任何名称。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_TYPE' => [
			//
			'name' => '对象的类型',
			'desc' => 'OBJECT_TYPE列指示行适用的对象的类型。表过滤会影响表I / O事件（wait / io / table / sql / handler工具）和表锁定事件（wait / lock / table / sql / handler工具）',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//This column identifies the statement. The value is the address of an object in memory.
			'name' => '列标识',
			'desc' => '此列标识该语句。该值是内存中一个对象的地址。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MYSQL_ERRNO' => [
			//The statement error number, from the statement diagnostics area.
			'name' => '错误编号',
			'desc' => '语句错误编号，来自语句诊断区域。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'RETURNED_SQLSTATE' => [
			//The statement SQLSTATE value, from the statement diagnostics area.
			'name' => '语句SQLSTATE',
			'desc' => '语句诊断区域中的语句SQLSTATE值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MESSAGE_TEXT' => [
			//The statement error message, from the statement diagnostics area.
			'name' => '错误信息',
			'desc' => '语句错误消息，来自语句诊断区域。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ERRORS' => [
			//Whether an error occurred for the statement. The value is 0 if the SQLSTATE value begins with 00 (completion) or 01 (warning). The value is 1 is the SQLSTATE value is anything else.
			'name' => '否出现错误。',
			'desc' => '语句是否出现错误。如果SQLSTATE值以00(完成)或01(警告)开始，则值为0。值是1,SQLSTATE值是其他值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'WARNINGS' => [
			//The number of warnings, from the statement diagnostics area.
			'name' => '警告数量',
			'desc' => '来自语句诊断区域的警告数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ROWS_AFFECTED' => [
			//The number of rows affected by the statement. For a description of the meaning of “affected,” see mysql_affected_rows().
			'name' => '影响行数',
			'desc' => '受语句影响的行数。有关“affected”含义的说明，请参见mysql_affected_rows()。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ROWS_SENT' => [
			//The number of rows returned by the statement.
			'name' => '返回行数',
			'desc' => '语句返回的行数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ROWS_EXAMINED' => [
			//The number of rows examined by the server layer (not counting any processing internal to storage engines).
			'name' => '服务器层检查行数',
			'desc' => '服务器层检查的行数(不包括存储引擎内部的任何处理)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CREATED_TMP_DISK_TABLES' => [
			//The number of internal on-disk temporary tables created by the server while executing statements.
			//You can compare the number of internal on-disk temporary tables created to the total number of internal temporary tables created by comparing Created_tmp_disk_tables and Created_tmp_tables values.
			//Due to a known limitation, Created_tmp_disk_tables does not count on-disk temporary tables created in memory-mapped files.
			//By default, the TempTable storage engine overflow mechanism creates internal temporary tables in memory-mapped files. 
			//This behavior is controlled by the temptable_use_mmap variable, which is enabled by default.
			'name' => '内部磁盘上临时表的数量',
			'desc' => '服务器在执行语句时创建的内部磁盘上临时表的数量。通过比较Created_tmp_disk_tables和Created_tmp_tables值，可以将创建的内部磁盘上临时表的数量与创建的内部临时表的总数进行比较。由于已知的限制，Created_tmp_disk_tables不计算在内存映射文件中创建的磁盘临时表。默认情况下，TempTable存储引擎溢出机制在内存映射文件中创建内部临时表。该行为由temptable_use_mmap变量控制，该变量在默认情况下是启用的。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables|https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'CREATED_TMP_TABLES' => [
			//The number of internal temporary tables created by the server while executing statements.
			//You can compare the number of internal on-disk temporary tables created to the total number of internal temporary tables created by comparing Created_tmp_disk_tables and Created_tmp_tables values.
			'name' => '内部临时表的数量',
			'desc' => '服务器在执行语句时创建的内部临时表的数量。通过比较Created_tmp_disk_tables和Created_tmp_tables值，可以将创建的内部磁盘上临时表的数量与创建的内部临时表的总数进行比较。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/internal-temporary-tables.html|https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'SELECT_FULL_JOIN' => [
			//The number of joins that perform table scans because they do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.
			'name' => '执行表扫描的联接的数量',
			'desc' => '执行表扫描的联接的数量，因为它们不使用索引。如果这个值不是0，那么应该仔细检查表的索引。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'SELECT_FULL_RANGE_JOIN' => [
			//The number of joins that used a range search on a reference table.
			'name' => '在引用表上使用范围搜索的连接数',
			'desc' => '',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'SELECT_RANGE' => [
			//The number of joins that used ranges on the first table. This is normally not a critical issue even if the value is quite large.
			'name' => '在第一个表上使用的联接的数量',
			'desc' => '在第一个表上使用的联接的数量。即使值相当大，这通常也不是一个关键问题。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'SELECT_RANGE_CHECK' => [
			//The number of joins without keys that check for key usage after each row. If this is not 0, you should carefully check the indexes of your tables.
			'name' => '无键连接的数目',
			'desc' => '在每行后检查键使用情况的无键连接的数目。如果这个值不是0，那么应该仔细检查表的索引。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'SELECT_SCAN' => [
			//The number of joins that did a full scan of the first table.
			'name' => '对第一个表进行完整扫描的联接的数量',
			'desc' => '',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'SORT_MERGE_PASSES' => [
			//The number of merge passes that the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.
			'name' => '排序算法需要进行的归并次数',
			'desc' => '排序算法需要进行的归并次数。如果这个值很大，那么应该考虑增加sort_buffer_size系统变量的值。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'SORT_RANGE' => [
			//The number of sorts that were done using ranges.
			'name' => '使用范围进行的排序的数量',
			'desc' => '',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'SORT_ROWS' => [
			//The number of sorted rows.
			'name' => '已排序的行数',
			'desc' => '',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'SORT_SCAN' => [
			//The number of sorts that were done by scanning the table.
			'name' => '通过扫描表完成的排序数量',
			'desc' => '',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/server-status-variables.html#statvar_Created_tmp_disk_tables',
			'link' => '',
			'linkDesc' => ''
		],
		'NO_INDEX_USED' => [
			//1 if the statement performed a table scan without using an index, 0 otherwise.
			'name' => '是否使用索引',
			'desc' => '如果语句在没有使用索引的情况下执行了表扫描，则为1，否则为0。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NO_GOOD_INDEX_USED' => [
			//1 if the server found no good index to use for the statement, 0 otherwise. For additional information,
			//see the description of the Extra column from EXPLAIN output for the Range checked for each record value in Section 8.8.2, “EXPLAIN Output Format”.
			'name' => '是否有好索引',
			'desc' => '如果服务器没有找到好的索引用于语句，则为0。有关更多信息，请参见在8.8.2节“EXPLAIN output Format”中对每个记录值检查范围的解释输出中额外的列的描述。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NESTING_EVENT_ID' => [
			//These three columns are used with other columns to provide information as follows for top-level (unnested) statements and nested statements (executed within a stored program).
			'name' => '父级事件ID',
			'desc' => '这三列与其他列一起用于为顶级(未嵌套)语句和嵌套语句(在存储程序中执行)提供如下信息。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NESTING_EVENT_TYPE' => [
			//
			'name' => '父级事件类型',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'NESTING_EVENT_ID'
		],
		'NESTING_EVENT_LEVEL' => [
			//
			'name' => '父语句登录',
			'desc' => '父语句NESTING_LEVEL加1',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'STATEMENT_ID' => [
			//The query ID maintained by the server at the SQL level.
			//The value is unique for the server instance because these IDs are generated using a global counter that is incremented atomically. This column was added in MySQL 8.0.14.
			'name' => '查询ID',
			'desc' => '由服务器在SQL级别维护的查询ID。该值对于服务器实例是唯一的，因为这些id是使用一个原子递增的全局计数器生成的。该列是在MySQL 8.0.14中添加的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		]	
	]
];