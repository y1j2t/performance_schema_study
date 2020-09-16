<?php
/*
The Performance Schema maintains the objects_summary_global_by_type table for aggregating object wait events.
性能架构维护objects_summary_global_by_type表以聚合对象等待事件。
*/

return [
	//Object summaries
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-objects-summary-global-by-type-table.html
	'tableName' => 'objects_summary_global_by_type',
	'tableDesc' => '对象总结',
	'fields' => [
		'OBJECT_TYPE' => [
			//
			'name' => '对象类型',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_SCHEMA' => [
			//
			'name' => '对象概要',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_NAME' => [
			//
			'name' => '对象的名称',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_STAR' => [
			//The number of summarized events. This value includes all events, whether timed or nontimed.
			'name' => '事件的数目',
			'desc' => '汇总事件的数目。此值包括所有定时或非定时事件。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WAIT' => [
			//The total wait time of the summarized timed events. This value is calculated only for timed events because nontimed events have a wait time of NULL. The same is true for the other xxx_TIMER_WAIT values.
			'name' => '事件的总等待时间',
			'desc' => '汇总的定时事件的总等待时间。此值仅针对定时事件计算，因为非定时事件的等待时间为NULL。对于其他的xxx_TIMER_WAIT值也是如此。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_WAIT' => [
			//The minimum wait time of the summarized timed events.
			'name' => '事件的最短等待时间',
			'desc' => '摘要定时事件的最短等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_WAIT' => [
			//The average wait time of the summarized timed events.
			'name' => '事件的平均等待时间',
			'desc' => '摘要定时事件的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_WAIT' => [
			//The maximum wait time of the summarized timed events.
			'name' => '事件的最大等待时间',
			'desc' => '摘要定时事件的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];