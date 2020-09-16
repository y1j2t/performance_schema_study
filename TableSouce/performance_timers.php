<?php
/*
The performance_timers table shows which event timers are available:
performance_timers表显示了可用的事件计时器

If the values associated with a given timer name are NULL, that timer is not supported on your platform. For an explanation of how event timing occurs, see Section 26.4.1, “Performance Schema Event Timing”.
如果与给定计时器名称关联的值为NULL，则您的平台不支持该计时器。有关事件计时如何发生的说明，请参见第26.4.1节“性能模式事件计时”。
https://dev.mysql.com/doc/refman/8.0/en/performance-schema-timing.html

*/

return [
	//Which event timers are available
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-performance-timers-table.html
	'tableName' => 'performance_timers',
	'tableDesc' => '哪些事件计时器可用',
	'fields' => [
		'TIMER_NAME' => [
			//The timer name.
			'name' => '定时器名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_FREQUENCY' => [
			//The number of timer units per second. For a cycle timer, the frequency is generally related to the CPU speed. For example, on a system with a 2.4GHz processor, the CYCLE may be close to 2400000000.
			'name' => '每秒的计时器单位数',
			'desc' => '每秒的计时器单位数。对于循环计时器，频率通常与CPU速度有关。例如，在具有2.4GHz处理器的系统上，CYCLE可能接近2400000000。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_RESOLUTION' => [
			//Indicates the number of timer units by which timer values increase. If a timer has a resolution of 10, its value increases by 10 each time.
			'name' => '计时器步进单位',
			'desc' => '指示计时器值增加的计时器单位数。如果计时器的分辨率为10，则其值每次都会增加10。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMER_OVERHEAD' => [
			//The minimal number of cycles of overhead to obtain one timing with the given timer. The Performance Schema determines this value by invoking the timer 20 times during initialization and picking the smallest value. 
			//The total overhead really is twice this amount because the instrumentation invokes the timer at the start and end of each event. The timer code is called only for timed events, 
			//so this overhead does not apply for nontimed events.
			'name' => '定计时器所需最少开销周期数',
			'desc' => '用给定计时器获得一个计时所需的最少开销周期数。性能模式通过在初始化期间调用计时器20次并选择最小值来确定该值。总开销实际上是此数量的两倍，因为检测在每个事件的开始和结束时都会调用计时器。仅针对定时事件调用计时器代码，因此此开销不适用于非定时事件。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];