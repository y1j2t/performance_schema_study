<?php
/*
*/

return [
	//Transaction events per user name and event name
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-table-index.html
	'tableName' => 'events_transactions_summary_by_user_by_event_name',
	'tableDesc' => '通过用户名和事件名划分的事务事件总汇',
	'fields' => [
		'THREAD_ID' => [
			//
			'name' => '线程ID',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_NAME' => [
			//
			'name' => '事件名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_STAR' => [
			//The number of summarized events. This value includes all events, whether timed or nontimed.
			'name' => '事件数目',
			'desc' => '汇总事件的数目。此值包括所有定时或非定时事件。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/wait-summary-tables.html',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WAIT' => [
			//The total wait time of the summarized timed events. This value is calculated only for timed events because nontimed events have a wait time of NULL. The same is true for the other xxx_TIMER_WAIT values.
			'name' => '事件总等待时间',
			'desc' => '汇总的定时事件的总等待时间。此值仅针对定时事件计算，因为非定时事件的等待时间为NULL。对于其他的xxx_TIMER_WAIT值也是如此。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_WAIT' => [
			//The minimum wait time of the summarized timed events.
			'name' => '事件最小等待时间',
			'desc' => '汇总时间事件的最小等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_WAIT' => [
			//The average wait time of the summarized timed events.
			'name' => '事件平均等待时间',
			'desc' => '汇总的定时事件的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_WAIT' => [
			//The maximum wait time of the summarized timed events.
			'name' => '事件最大等待时间',
			'desc' => '汇总的定时事件的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_READ_WRITE' => [
			//These are similar to the COUNT_STAR and xxx_TIMER_WAIT columns, but summarize read-write transactions only. The transaction access mode specifies whether transactions operate in read/write or read-only mode.
			'name' => '读写事务数目',
			'desc' => '它们类似于COUNT_STAR和xxx_TIMER_WAIT列，但只汇总读写事务。事务访问模式指定事务是以读/写模式操作还是以只读模式操作。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ_WRITE' => [
			//
			'name' => '读写事务总等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_WRITE'
		],
		'MIN_TIMER_READ_WRITE' => [
			//
			'name' => '读写事务最小等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_WRITE'
		],
		'AVG_TIMER_READ_WRITE' => [
			//
			'name' => '读写事务平均等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_WRITE'
		],
		'MAX_TIMER_READ_WRITE' => [
			//
			'name' => '读写事务最大等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_WRITE'
		],
		'COUNT_READ_ONLY' => [
			//These are similar to the COUNT_STAR and xxx_TIMER_WAIT columns, but summarize read-only transactions only. The transaction access mode specifies whether transactions operate in read/write or read-only mode.
			'name' => '只读事务数目',
			'desc' => '它们类似于COUNT_STAR和xxx_TIMER_WAIT列，但只汇总只读事务。事务访问模式指定事务是以读/写模式操作还是以只读模式操作。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ_ONLY' => [
			//
			'name' => '只读事务总等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_ONLY'
		],
		'MIN_TIMER_READ_ONLY' => [
			//
			'name' => '只读事务最小等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_ONLY'
		],
		'AVG_TIMER_READ_ONLY' => [
			//
			'name' => '只读事务平均等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_ONLY'
		],
		'MAX_TIMER_READ_ONLY' => [
			//
			'name' => '只读事务最大等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_ONLY'
		],	
	]
];