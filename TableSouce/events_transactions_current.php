<?php
/*
*/

return [
	//Current transaction events
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-events-transactions-current-table.html
	'tableName' => 'events_transactions_current',
	'tableDesc' => '当前事务事件',
	'fields' => [
		'THREAD_ID' => [
			//The thread associated with the event and the thread current event number when the event starts. The THREAD_ID and EVENT_ID values taken together uniquely identify the row. No two rows have the same pair of values.
			'name' => '线程ID',
			'desc' => '与事件关联的线程和事件启动时的线程当前事件号。THREAD_ID和EVENT_ID值一起唯一地标识行。没有两行具有相同的值对。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_ID' => [
			//
			'name' => '事件ID',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'THREAD_ID'
		],
		'END_EVENT_ID' => [
			//This column is set to NULL when the event starts and updated to the thread current event number when the event ends.
			'name' => '最终事件ID',
			'desc' => '该列在事件开始时设置为NULL，并在事件结束时更新为线程当前事件号。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_NAME' => [
			//The name of the instrument from which the event was collected. This is a NAME value from the setup_instruments table.
			//Instrument names may have multiple parts and form a hierarchy, as discussed in Section 26.6, “Performance Schema Instrument Naming Conventions”.
			'name' => '生产者',
			'desc' => '收集该事件的生产者名称。这是来自setup_instruments表的名称值。生产者名称可以由多个部分组成，并形成一个层次结构，如26.6节“性能模式生产者命名约定”所讨论的那样。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/performance-schema-instrument-naming.html',
			'link' => '',
			'linkDesc' => ''
		],
		'STATE' => [
			//The current transaction state. The value is ACTIVE (after START TRANSACTION or BEGIN), COMMITTED (after COMMIT), or ROLLED BACK (after ROLLBACK).
			'name' => '当前事务状态',
			'desc' => '当前事务状态。该值是活动的(在启动事务或BEGIN之后)、提交的(在提交之后)或回滚的(在回滚之后)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TRX_ID' => [
			//Unused
			'name' => '',
			'desc' => '没用',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'GTID' => [
			//The GTID column contains the value of gtid_next, which can be one of ANONYMOUS, AUTOMATIC, or a GTID using the format UUID:NUMBER.
			//For transactions that use gtid_next=AUTOMATIC, which is all normal client transactions, the GTID column changes when the transaction commits and the actual GTID is assigned.
			//If gtid_mode is either ON or ON_PERMISSIVE, the GTID column changes to the transaction's GTID. If gtid_mode is either OFF or OFF_PERMISSIVE, the GTID column changes to ANONYMOUS.
			'name' => 'GTID',
			'desc' => 'GTID列包含gtid_next的值，该值可以是匿名的、自动的，也可以是使用格式UUID:NUMBER的GTID。对于使用gtid_next=AUTOMATIC的事务(都是正常的客户端事务)，当事务提交并分配实际的GTID时，GTID列会发生更改。如果gtid_mode是ON或ON_PERMISSIVE，则GTID列将更改为事务的GTID。如果gtid_mode是OFF或OFF_PERMISSIVE，则GTID列将更改为ANONYMOUS。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'XID_FORMAT_ID' => [
			//The components of the XA transaction identifier. They have the format described in Section 13.3.8.1, “XA Transaction SQL Statements”.
			'name' => 'XA事务标识符的组件',
			'desc' => 'XA事务标识符的组件。它们的格式在13.3.8.1节“XA事务SQL语句”中描述。formatID是事务xid的格式化部分',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/xa-statements.html',
			'link' => '',
			'linkDesc' => ''
		],
		'XID_GTRID' => [
			//gtrid is a global transaction identifier, bqual is a branch qualifier, and formatID is a number that identifies the format used by the gtrid and bqual values.
			//As indicated by the syntax, bqual and formatID are optional. The default bqual value is '' if not given. The default formatID value is 1 if not given.
			'name' => '全局事务标识符',
			'desc' => 'gtrid是一个全局事务标识符，bqual是一个分支限定符，formatID是一个数字，它标识gtrid和bqual值使用的格式。如语法所示，bqual和formatID是可选的。默认的bqual值是“如果没有给出”。如果没有给出默认的formatID值，则为1。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'XID_BQUAL' => [
			//
			'name' => '分支限定符',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'XID_GTRID'
		],
		'XA_STATE' => [
			//The state of the XA transaction. The value is ACTIVE (after XA START), IDLE (after XA END), PREPARED (after XA PREPARE), ROLLED BACK (after XA ROLLBACK), or COMMITTED (after XA COMMIT).
			
			//On a replica, the same XA transaction can appear in the events_transactions_current table with different states on different threads.
			//This is because immediately after the XA transaction is prepared, it is detached from the replica's applier thread, and can be committed or rolled back by any thread on the replica.
			//The events_transactions_current table displays the current status of the most recent monitored transaction event on the thread, and does not update this status when the thread is idle.
			//So the XA transaction can still be displayed in the PREPARED state for the original applier thread, after it has been processed by another thread.
			//To positively identify XA transactions that are still in the PREPARED state and need to be recovered, use the XA RECOVER statement rather than the Performance Schema transaction tables.
			
			//在副本上，相同的XA事务可以以不同线程上的不同状态出现在events_transactions_current表中。这是因为XA事务准备好之后，就会立即与副本的applier线程分离，并且可以由副本上的任何线程提交或回滚。
			//events_transactions_current表显示线程上最近监视的事务事件的当前状态，并且在线程空闲时不更新该状态。因此，在XA事务被另一个线程处理之后，原始applier线程仍然可以以准备状态显示XA事务。
			//要确定仍然处于准备状态并需要恢复的XA事务，使用XA RECOVER语句而不是性能模式事务表。
			'name' => 'XA事务的状态',
			'desc' => 'XA事务的状态。该值是ACTIVE(XA启动后)、IDLE(XA结束后)、PREPARED(XA准备后)、ROLLED BACK(XA回滚后)或COMMITTED(XA提交后)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SOURCE' => [
			//The name of the source file containing the instrumented code that produced the event and the line number in the file at which the instrumentation occurs.
			//This enables you to check the source to determine exactly what code is involved.
			'name' => '源文件名',
			'desc' => '源文件的名称，其中包含产生事件的插装代码，以及插装发生的文件中的行号。这使您能够检查源代码以确定所涉及的代码。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_START' => [
			//Timing information for the event. The unit for these values is picoseconds (trillionths of a second). The TIMER_START and TIMER_END values indicate when event timing started and ended.
			//TIMER_WAIT is the event elapsed time (duration).
			'name' => '事件计时开始',
			'desc' => '事件的计时信息。这些值的单位是皮秒(万亿分之一秒)。TIMER_START和TIMER_END值指示事件计时开始和结束的时间。TIMER_WAIT是事件经过的时间(持续时间)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_END' => [
			//
			'name' => '事件计时结束',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'TIMER_START'
		],
		'TIMER_WAIT' => [
			//
			'name' => '事件持续时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'TIMER_START'
		],
		'ACCESS_MODE' => [
			//The transaction access mode. The value is READ WRITE or READ ONLY.
			'name' => '事务访问模式',
			'desc' => '事务访问模式。该值是READ WRITE or READ ONLY.',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ISOLATION_LEVEL' => [
			//The transaction isolation level. The value is REPEATABLE READ, READ COMMITTED, READ UNCOMMITTED, or SERIALIZABLE.
			'name' => '事务隔离级别',
			'desc' => '事务隔离级别。该值为REPEATABLE READ（可重复读取）, READ COMMITTED（已提交读取）, READ UNCOMMITTED（未提交读取）, or SERIALIZABLE（可序列化）',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AUTOCOMMIT' => [
			//Whether autcommit mode was enabled when the transaction started.
			'name' => '否启用自动提交',
			'desc' => '事务启动时是否启用自动提交模式。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NUMBER_OF_SAVEPOINTS' => [
			//The number of SAVEPOINT, ROLLBACK TO SAVEPOINT, and RELEASE SAVEPOINT statements issued during the transaction.
			'name' => '',
			'desc' => '在事务期间发出的SAVEPOINT，ROLLBACK TO SAVEPOINT和RELEASE SAVEPOINT语句的数量',
			'descInvUrl' => '发出SAVEPOINTS语句数量',
			'link' => '',
			'linkDesc' => 'NUMBER_OF_SAVEPOINTS'
		],
		'NUMBER_OF_ROLLBACK_TO_SAVEPOINT' => [
			//
			'name' => '发出ROLLBACK_TO_SAVEPOINT语句数量',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'NUMBER_OF_SAVEPOINTS'
		],
		'NUMBER_OF_RELEASE_SAVEPOINT' => [
			//
			'name' => '发出RELEASE_SAVEPOINT语句数量',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'NUMBER_OF_SAVEPOINTS'
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//Unused
			'name' => 'OBJECT_INSTANCE_BEGIN',
			'desc' => '没用',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NESTING_EVENT_ID' => [
			//The EVENT_ID value of the event within which this event is nested.
			'name' => '嵌套此事件ID',
			'desc' => '嵌套此事件的事件的EVENT_ID值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NESTING_EVENT_TYPE' => [
			//The nesting event type. The value is TRANSACTION, STATEMENT, STAGE, or WAIT. (TRANSACTION will not appear because transactions cannot be nested.)
			'name' => '嵌套事件类型',
			'desc' => '嵌套事件类型。该值为TRANSACTION，STATEMENT，STAGE或WAIT。 （因为事务不能嵌套，所以不会出现“TRANSACTION”。）',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],		
	]
];