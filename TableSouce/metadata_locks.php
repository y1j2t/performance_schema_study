<?php
/*
MySQL uses metadata locking to manage concurrent access to database objects and to ensure data consistency; see Section 8.11.4, “Metadata Locking”. Metadata locking applies not just to tables, 
but also to schemas, stored programs (procedures, functions, triggers, scheduled events), tablespaces, user locks acquired with the GET_LOCK() function (see Section 12.15, “Locking Functions”), 
and locks acquired with the locking service described in Section 5.6.8.1, “The Locking Service”.
MySQL使用元数据锁定来管理对数据库对象的并发访问，并确保数据的一致性;参见8.11.4节“元数据锁定”。元数据锁定不仅适用于表，也适用于模式、
存储程序(过程、函数、触发器、计划事件)、表空间、用GET_LOCK()函数获得的用户锁(参见12.15节“锁定函数”)，以及用5.6.8.1节“锁定服务”描述的锁定服务获得的锁。
Section 8.11.4, “Metadata Locking”  https://dev.mysql.com/doc/refman/8.0/en/metadata-locking.html
Section 12.15, “Locking Functions”  https://dev.mysql.com/doc/refman/8.0/en/locking-functions.html
Section 5.6.8.1, “The Locking Service”  https://dev.mysql.com/doc/refman/8.0/en/locking-service.html

The Performance Schema exposes metadata lock information through the metadata_locks table:
性能模式通过metadata_locks表公开元数据锁信息:

Locks that have been granted (shows which sessions own which current metadata locks).
已授予的锁(显示哪些会话拥有哪些当前元数据锁)。

Locks that have been requested but not yet granted (shows which sessions are waiting for which metadata locks).
已请求但尚未授予的锁(显示哪些会话正在等待哪些元数据锁)。

Lock requests that have been killed by the deadlock detector.
锁定已被死锁检测器杀死的请求。

Lock requests that have timed out and are waiting for the requesting session's lock request to be discarded.
锁定超时并等待请求会话的锁定请求被丢弃的请求。

This information enables you to understand metadata lock dependencies between sessions. You can see not only which lock a session is waiting for, but which session currently holds that lock.
此信息使您能够理解会话之间的元数据锁依赖关系。您不仅可以看到会话正在等待哪个锁，还可以看到哪个会话当前持有该锁。

The metadata_locks table is read only and cannot be updated. It is autosized by default; to configure the table size, set the performance_schema_max_metadata_locks system variable at server startup.
metadata_locks表是只读的，不能更新。默认情况下自动调整大小;要配置表大小，请在服务器启动时设置performance_schema_max_metadata_locks系统变量。

Metadata lock instrumentation uses the wait/lock/metadata/sql/mdl instrument, which is enabled by default.
元数据锁检测使用等待/锁/元数据/sql/mdl工具，该工具在默认情况下是启用的。

*/

return [
	//Metadata locks and lock requests
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-metadata-locks-table.html
	'tableName' => 'metadata_locks',
	'tableDesc' => '元数据锁和锁请求',
	'fields' => [
		'OBJECT_TYPE' => [
			//The type of lock used in the metadata lock subsystem. The value is one of GLOBAL, SCHEMA, TABLE, FUNCTION, PROCEDURE, TRIGGER (currently unused), EVENT, COMMIT, USER LEVEL LOCK, TABLESPACE, or LOCKING SERVICE.
			//A value of USER LEVEL LOCK indicates a lock acquired with GET_LOCK(). A value of LOCKING SERVICE indicates a lock acquired with the locking service described in Section 5.6.8.1, “The Locking Service”.
			'name' => '锁定类型',
			'desc' => '元数据锁定子系统中使用的锁定类型。该值是GLOBAL，SCHEMA，TABLE，FUNCTION，PROCEDURE，TRIGGER（当前未使用），EVENT，COMMIT，USER LEVEL LOCK，TABLESPACE或LOCKING SERVICE之一。USER LEVEL LOCK的值表示使用GET_LOCK()获取的锁。 LOCKING SERVICE的值表示使用第5.6.8.1节“锁定服务”中所述的锁定服务获取的锁定。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/locking-service.html',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_SCHEMA' => [
			//The schema that contains the object.
			'name' => '对象概要',
			'desc' => '包含对象的架构。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_NAME' => [
			//The name of the instrumented object.
			'name' => '对象的名称',
			'desc' => '被检测对象的名称。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//The address in memory of the instrumented object.
			'name' => '被检测对象在内存中的地址',
			'desc' => '被检测对象在内存中的地址',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LOCK_TYPE' => [
			//The lock type from the metadata lock subsystem. The value is one of INTENTION_EXCLUSIVE, SHARED, SHARED_HIGH_PRIO, SHARED_READ, SHARED_WRITE, SHARED_UPGRADABLE, SHARED_NO_WRITE, SHARED_NO_READ_WRITE, or EXCLUSIVE.
			'name' => '锁定类型',
			'desc' => '来自元数据锁定子系统的锁定类型。该值是INTENTION_EXCLUSIVE，SHARED，SHARED_HIGH_PRIO，SHARED_READ，SHARED_WRITE，SHARED_UPGRADABLE，SHARED_NO_WRITE，SHARED_NO_READ_WRITE或独占之一。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LOCK_DURATION' => [
			//The lock duration from the metadata lock subsystem. The value is one of STATEMENT, TRANSACTION, or EXPLICIT. The STATEMENT and TRANSACTION values signify locks that are released implicitly at statement or transaction end, 
			//respectively. The EXPLICIT value signifies locks that survive statement or transaction end and are released by explicit action, such as global locks acquired with FLUSH TABLES WITH READ LOCK.
			'name' => '锁定持续时间',
			'desc' => '来自元数据锁定子系统的锁定持续时间。该值是STATEMENT，TRANSACTION或EXPLICIT中的一种。 STATEMENT和TRANSACTION值分别表示在语句或事务端隐式释放的锁。 EXPLICIT值表示可以在语句或事务结束后保留​​并由显式操作释放的锁，例如使用带有读取锁的FLUSH TABLES获取的全局',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LOCK_STATUS' => [
			//The lock status from the metadata lock subsystem. The value is one of PENDING, GRANTED, VICTIM, TIMEOUT, KILLED, PRE_ACQUIRE_NOTIFY, or POST_RELEASE_NOTIFY. The Performance Schema assigns these values as described previously.
			'name' => '锁定状态',
			'desc' => '来自元数据锁定子系统的锁定状态。该值是PENDING，GRANTED，VICTIM，TIMEOUT，KILLED，PRE_ACQUIRE_NOTIFY或POST_RELEASE_NOTIFY中的一种。性能架构如上所述分配这些值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SOURCE' => [
			//The name of the source file containing the instrumented code that produced the event and the line number in the file at which the instrumentation occurs. This enables you to check the source to determine exactly what code is involved.
			'name' => '源文件的名称',
			'desc' => '源文件的名称，其中包含产生事件的检测代码，以及发生检测的文件中的行号。这使您可以检查源以确定确切涉及的代码。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OWNER_THREAD_ID' => [
			//The thread requesting a metadata lock.
			'name' => '请求元数据锁定的线程',
			'desc' => '请求元数据锁定的线程。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OWNER_EVENT_ID' => [
			//The event requesting a metadata lock.
			'name' => '请求元数据锁定的事件',
			'desc' => '请求元数据锁定的事件。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];