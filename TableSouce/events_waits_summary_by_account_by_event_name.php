<?php
/*
*/

return [
	//Wait events per account and event name
	//https://dev.mysql.com/doc/refman/8.0/en/stage-summary-tables.html
	'tableName' => 'events_waits_summary_by_account_by_event_name',
	'tableDesc' => '等待每个帐户和事件名的事件',
	'fields' => [
		'USER' => [
			//
			'name' => '用户名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HOST' => [
			//
			'name' => '域名',
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