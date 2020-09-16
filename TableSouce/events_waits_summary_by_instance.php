<?php
/*
*/

return [
	//Wait events per instance
	//https://dev.mysql.com/doc/refman/8.0/en/wait-summary-tables.html
	'tableName' => 'events_waits_summary_by_instance',
	'tableDesc' => '每个实例的等待事件',
	'fields' => [
		'EVENT_NAME' => [
			//
			'name' => '事件名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//events_waits_summary_by_instance has EVENT_NAME and OBJECT_INSTANCE_BEGIN columns. Each row summarizes events for a given event name and object. 
			//If an instrument is used to create multiple instances, each instance has a unique OBJECT_INSTANCE_BEGIN value and is summarized separately in this table.
			'name' => 'OBJECT_INSTANCE_BEGIN',
			'desc' => 'events_waits_summary_by_instance拥有EVENT_NAME和OBJECT_INSTANCE_BEGIN列。每行汇总给定事件名称和对象的事件。如果使用工具创建多个实例，那么每个实例都有一个惟一的OBJECT_INSTANCE_BEGIN值，并在该表中单独汇总。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_STAR' => [
			//The number of summarized events. This value includes all events, whether timed or nontimed.
			'name' => '事件总数',
			'desc' => '汇总事件的数目。此值包括所有定时或非定时事件。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WAIT' => [
			//The total wait time of the summarized timed events. This value is calculated only for timed events because nontimed events have a wait time of NULL. The same is true for the other xxx_TIMER_WAIT values.
			'name' => '总等待时间',
			'desc' => '汇总的定时事件的总等待时间。此值仅针对定时事件计算，因为非定时事件的等待时间为NULL。对于其他的xxx_TIMER_WAIT值也是如此。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_WAIT' => [
			//The minimum wait time of the summarized timed events.
			'name' => '最小等待时间',
			'desc' => '汇总时间事件的最小等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_WAIT' => [
			//The average wait time of the summarized timed events.
			'name' => '平均等待时间',
			'desc' => '汇总的定时事件的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_WAIT' => [
			//The maximum wait time of the summarized timed events.
			'name' => '最大等待时间',
			'desc' => '汇总的定时事件的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];