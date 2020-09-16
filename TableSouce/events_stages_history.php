<?php
/*
 The events_stages_history table contains the N most recent stage events that have ended per thread.
 Stage events are not added to the table until they have ended. When the table contains the maximum number of rows for a given thread,
 the oldest thread row is discarded when a new row for that thread is added. When a thread ends, all its rows are discarded.

 The Performance Schema autosizes the value of N during server startup.
 To set the number of rows per thread explicitly, set the performance_schema_events_stages_history_size system variable at server startup.

 The events_stages_history table has the same columns as events_stages_current.
 See Section 22.12.5.1, “The events_stages_current Table”.
 https://dev.mysql.com/doc/refman/5.6/en/performance-schema-events-stages-current-table.html
 
 TRUNCATE TABLE is permitted for the events_stages_history table. It removes the rows.

 For more information about the relationship between the three stage event tables,
 see Section 22.9, “Performance Schema Tables for Current and Historical Events”.
 https://dev.mysql.com/doc/refman/5.6/en/performance-schema-event-tables.html

 For information about configuring whether to collect stage events,
 see Section 22.12.5, “Performance Schema Stage Event Tables”.
 https://dev.mysql.com/doc/refman/5.6/en/performance-schema-stage-tables.html
 
 events_stages_history表包含每个线程最近结束的N个阶段事件。阶段事件直到结束后才添加到表中。
 当表包含给定线程的最大行数时，当为该线程添加新行时，将丢弃最老的线程行。当一个线程结束时，它的所有行都被丢弃。

 性能模式会在服务器启动时自动调整N的值。要显式地设置每个线程的行数，可以在服务器启动时设置performance_schema_events_stages_history_size系统变量。

 events_stages_history表的列与events_stages_current相同。参见22.12.5.1节“events_stages_current表”。

 events_stages_history表允许使用TRUNCATE表。它删除行。

 有关三个阶段事件表之间关系的更多信息，请参见22.9节“当前事件和历史事件的性能模式表”。

 有关配置是否收集阶段事件的信息，请参阅22.12.5节“性能模式阶段事件表”。
*/

return [
	//Most recent stage events per thread
	'tableName' => 'events_stages_history',
	'tableDesc' => '每个线程的最近阶段事件',
	'fields' => [
		'THREAD_ID' => [
			//The thread associated with the event and the thread current event number when the event starts.
			//The THREAD_ID and EVENT_ID values taken together uniquely identify the row. No two rows have the same pair of values.
			'name' => '线程ID',
			'desc' => '当前事件线程ID',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_ID' => [
			'name' => '事件ID',
			'desc' => '当前事件事件ID',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'END_EVENT_ID' => [
			//This column is set to NULL when the event starts and updated to the thread current event number when the event ends.
			'name' => '事件结束时事件ID',
			'desc' => '当前事件结束时事件ID，开始时为NULL',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_NAME' => [
			//The name of the instrument that produced the event. This is a NAME value from the setup_instruments table.
			//Instrument names may have multiple parts and form a hierarchy, as discussed in Section 22.6, “Performance Schema Instrument Naming Conventions”.
			'name' => '事件名',
			'desc' => '由一个或多个事件组成',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/5.6/en/performance-schema-instrument-naming.html',
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
			//Timing information for the event. The unit for these values is picoseconds (trillionths of a second).
			//The TIMER_START and TIMER_END values indicate when event timing started and ended. TIMER_WAIT is the event elapsed time (duration).

			//If an event has not finished, TIMER_END and TIMER_WAIT are NULL before MySQL 5.6.26. As of 5.6.26,
			//TIMER_END is the current timer value and TIMER_WAIT is the time elapsed so far (TIMER_END − TIMER_START).

			//If an event is produced from an instrument that has TIMED = NO, timing information is not collected,
			//and TIMER_START, TIMER_END, and TIMER_WAIT are all NULL.

			//For discussion of picoseconds as the unit for event times and factors that affect time values, see Section 22.4.1, “Performance Schema Event Timing”.
			'name' => '事件开始时间',
			'desc' => 'TIMER_START和TIMER_END值指示事件计时开始和结束的时间',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/5.6/en/performance-schema-timing.html',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_END' => [
			'name' => '事件结束时间',
			'desc' => 'TIMER_START和TIMER_END值指示事件计时开始和结束的时间',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_WAIT' => [
			'name' => '事件持续时间',
			'desc' => 'TIMER_WAIT是事件经过的时间(持续时间)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NESTING_EVENT_ID' => [
			//The EVENT_ID value of the event within which this event is nested. The nesting event for a stage event is usually a statement event.
			'name' => '嵌套该事件ID',
			'desc' => '嵌套该事件的事件的EVENT_ID值。 阶段事件的嵌套事件通常是语句事件。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NESTING_EVENT_TYPE' => [
			//The nesting event type. The value is STATEMENT, STAGE, or WAIT.
			'name' => '嵌套事件类型',
			'desc' => '嵌套事件类型值有STATEMENT,STAGE,WAIT',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		]
	]
];