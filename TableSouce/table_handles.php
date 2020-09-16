<?php
/*
The Performance Schema exposes table lock information through the table_handles table to show the table locks currently in effect for each opened table handle. 
table_handles reports what is recorded by the table lock instrumentation. This information shows which table handles the server has open, how they are locked, and by which sessions.

The table_handles table is read only and cannot be updated. It is autosized by default; to configure the table size, set the performance_schema_max_table_handles system variable at server startup.

Table lock instrumentation uses the wait/lock/table/sql/handler instrument, which is enabled by default.

性能模式通过table_handles表公开表锁信息，以显示每个打开的表句柄当前有效的表锁。table_handle报告表锁检测所记录的内容。此信息显示服务器已打开哪个表，它们是如何锁定的，以及通过哪些会话锁定。

table_handles表是只读的，不能更新。默认情况下自动调整大小;要配置表大小，请在服务器启动时设置performance_schema_max_table_handle系统变量。

表锁检测使用等待/锁/表/sql/处理程序工具，这是默认启用的。
*/

return [
	//Table locks and lock requests
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-table-handles-table.html87
	'tableName' => 'table_handles',
	'tableDesc' => '表锁和锁请求',
	'fields' => [
		'OBJECT_TYPE' => [
			//The table opened by a table handle.
			'name' => '对象类型',
			'desc' => '该表由表句柄打开。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_SCHEMA' => [
			//The schema that contains the object.
			'name' => '对象架构',
			'desc' => '包含对象的架构。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_NAME' => [
			//The name of the instrumented object.
			'name' => '对象名称',
			'desc' => '被检测对象的名称。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//The table handle address in memory.
			'name' => '表句柄地址',
			'desc' => '内存中的表句柄地址。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OWNER_THREAD_ID' => [
			//The thread owning the table handle.
			'name' => '拥有表句柄的线程',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OWNER_EVENT_ID' => [
			//The event which caused the table handle to be opened.
			'name' => '导致表句柄被打开的事件',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'INTERNAL_LOCK' => [
			//The table lock used at the SQL level. The value is one of READ, READ WITH SHARED LOCKS, READ HIGH PRIORITY, READ NO INSERT, WRITE ALLOW WRITE, 
			//WRITE CONCURRENT INSERT, WRITE LOW PRIORITY, or WRITE. For information about these lock types, see the include/thr_lock.h source file.
			'name' => 'SQL级别表锁',
			'desc' => '在SQL级别使用的表锁。该值是READ, READ WITH SHARED LOCKS, READ HIGH PRIORITY, READ NO INSERT, WRITE ALLOW WRITE, WRITE CONCURRENT INSERT, WRITE LOW PRIORITY, or WRITE之一。有关这些锁类型的信息，请参见include / thr_lock.h源文件。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EXTERNAL_LOCK' => [
			//The table lock used at the storage engine level. The value is one of READ EXTERNAL or WRITE EXTERNAL.
			'name' => '存储引擎级别表锁',
			'desc' => '在存储引擎级别使用的表锁。该值是READ EXTERNAL或WRITE EXTERNAL之一。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];