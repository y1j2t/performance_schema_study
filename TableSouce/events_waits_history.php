<?php
/*
 The events_waits_history table contains the N most recent wait events that have ended per thread. Wait events are not added to the table until they have ended.
 When the table contains the maximum number of rows for a given thread,
 the oldest thread row is discarded when a new row for that thread is added. When a thread ends, all its rows are discarded.
 
 events_waits_history表包含每个线程最近结束的N个等待事件。等待事件直到结束才添加到表中。当表包含给定线程的最大行数时，当为该线程添加新行时，将丢弃最老的线程行。当一个线程结束时，它的所有行都被丢弃。
*/

return [
	//Most recent wait events per thread
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-events-waits-history-table.html
	'tableName' => 'events_waits_history',
	'tableDesc' => '每个线程最近的等待事件',
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
			'name' => '事件最终ID',
			'desc' => '该列在事件开始时设置为NULL，并在事件结束时更新为线程当前事件号。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_NAME' => [
			//The name of the instrument that produced the event. This is a NAME value from the setup_instruments table. 
			//Instrument names may have multiple parts and form a hierarchy, as discussed in Section 26.6, “Performance Schema Instrument Naming Conventions”.
			'name' => '生产者',
			'desc' => '产生该事件的生产者的名称。这是来自setup_instruments表的名称值。生产者名称可以由多个部分组成，并形成一个层次结构，如26.6节“性能模式乐器命名约定”所讨论的那样。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/performance-schema-instrument-naming.html',
			'link' => '',
			'linkDesc' => ''
		],
		'SOURCE' => [
			//The name of the source file containing the instrumented code that produced the event and the line number in the file at which the instrumentation occurs. 
			//This enables you to check the source to determine exactly what code is involved. For example, if a mutex or lock is being blocked, you can check the context in which this occurs.
			'name' => '源文件名',
			'desc' => '源文件的名称，其中包含产生事件的插装代码，以及插装发生的文件中的行号。这使您能够检查源代码以确定所涉及的代码。例如，如果一个互斥或锁被阻塞，您可以检查发生阻塞的上下文。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_START' => [
			//Timing information for the event. The unit for these values is picoseconds (trillionths of a second). The TIMER_START and TIMER_END values indicate when event timing started and ended. TIMER_WAIT is the event elapsed time (duration).
			'name' => '事件开始事件',
			'desc' => '事件的计时信息。这些值的单位是皮秒(万亿分之一秒)。TIMER_START和TIMER_END值指示事件计时开始和结束的时间。TIMER_WAIT是事件经过的时间(持续时间)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_END' => [
			//
			'name' => '事件结束时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'TIMER_START'
		],
		'TIMER_WAIT' => [
			//
			'name' => '事件持续事件',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'TIMER_START'
		],
		'SPINS' => [
			//For a mutex, the number of spin rounds. If the value is NULL, the code does not use spin rounds or spinning is not instrumented.
			'name' => '空转随机次数',
			'desc' => '对于互斥量，为旋转轮数。如果值为NULL，则代码不使用旋转轮，或者旋转不被检测。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_SCHEMA' => [
			//For a file I/O object:OBJECT_SCHEMA is NULL.
			//For a socket object:
			//For a table I/O object:OBJECT_SCHEMA is the name of the schema that contains the table.
			'name' => '表模式名',
			'desc' => 'For a file I/O object:OBJECT_SCHEMA i是 NULL。For a table I/O object:OBJECT_SCHEMA是包含表的模式的名称。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_NAME' => [
			//For a file I/O object:OBJECT_NAME is the file name.
			//For a socket object:OBJECT_NAME is the IP:PORT value for the socket.
			//For a table I/O object:OBJECT_NAME is the table name.
			'name' => '文件名/连接信息/表名',
			'desc' => 'For a file I/O object:OBJECT_NAME是文件名。For a socket object:OBJECT_NAME是socket的IP:PORT。For a table I/O object:OBJECT_NAME 是表名。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'INDEX_NAME' => [
			//The name of the index used. PRIMARY indicates the table primary index. NULL means that no index was used.
			'name' => '使用索引名称',
			'desc' => '所使用的索引的名称。表示表的主索引。NULL表示没有使用索引。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_TYPE' => [
			//For a file I/O object:OBJECT_TYPE is FILE.
			//For a socket object:
			//For a table I/O object:OBJECT_TYPE is TABLE for a persistent base table or TEMPORARY TABLE for a temporary table.
			'name' => '文件/基表或临时表',
			'desc' => 'For a file I/O object:OBJECT_TYPE 是文件。For a table I/O object:OBJECT_TYPE是用于持久基表的表，或用于临时表的临时表。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//For a file I/O object:OBJECT_INSTANCE_BEGIN is an address in memory.
			//For a socket object:OBJECT_INSTANCE_BEGIN is an address in memory.
			//For a table I/O object:OBJECT_INSTANCE_BEGIN is an address in memory.
			'name' => '内存地址',
			'desc' => 'For a file I/O object:OBJECT_INSTANCE_BEGIN是内存中的一个地址。For a socket object:OBJECT_INSTANCE_BEGIN是内存中的一个地址。For a table I/O object:OBJECT_INSTANCE_BEGIN是内存中的一个地址',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NESTING_EVENT_ID' => [
			//The EVENT_ID value of the event within which this event is nested.
			'name' => '嵌套此事件的事件ID',
			'desc' => '嵌套此事件的事件的EVENT_ID值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NESTING_EVENT_TYPE' => [
			//The nesting event type. The value is TRANSACTION, STATEMENT, STAGE, or WAIT.
			'name' => '嵌套事件类型',
			'desc' => '嵌套事件类型。值是TRANSACTION, STATEMENT, STAGE, or WAIT',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OPERATION' => [
			//The type of operation performed, such as lock, read, or write.
			'name' => '',
			'desc' => '执行的操作类型，例如lock, read, or write。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NUMBER_OF_BYTES' => [
			//The number of bytes read or written by the operation. For table I/O waits (events for the wait/io/table/sql/handler instrument), NUMBER_OF_BYTES indicates the number of rows. If the value is greater than 1, the event is for a batch I/O operation. 
			'name' => '读取或写入的字节数',
			'desc' => '操作读取或写入的字节数。对于表I/O等待(等待/io/表/sql/处理程序工具的事件)，NUMBER_OF_BYTES表示行数。如果值大于1，则该事件用于批处理I/O操作。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'FLAGS' => [
			//Reserved for future use.
			'name' => 'FLAGS',
			'desc' => '留作将来使用。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];