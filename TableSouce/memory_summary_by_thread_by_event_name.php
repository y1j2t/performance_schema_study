<?php
/*
The Performance Schema instruments memory usage and aggregates memory usage statistics, detailed by these factors:
性能模式测量内存使用情况并聚合内存使用统计数据，具体由以下因素组成:

Type of memory used (various caches, internal buffers, and so forth)
使用的内存类型(各种缓存、内部缓冲区等等)

Thread, account, user, host indirectly performing the memory operation
线程、帐户、用户、主机间接执行内存操作

The Performance Schema instruments the following aspects of memory use
性能模式说明了内存使用的以下方面

Memory sizes used
使用的内存大小

Operation counts
操作数

Low and high water marks
高低水位标志

Memory sizes help to understand or tune the memory consumption of the server.
内存大小有助于理解或调优服务器的内存消耗。


Operation counts help to understand or tune the overall pressure the server is putting on the memory allocator, which has an impact on performance. 
Allocating a single byte one million times is not the same as allocating one million bytes a single time; tracking both sizes and counts can expose the difference.
操作计数有助于理解或调优服务器对内存分配器造成的总体压力，这对性能有影响。将一个字节分配一百万次和一次性分配一百万字节是不一样的;跟踪大小和计数可以暴露差异。

Low and high water marks are critical to detect workload spikes, overall workload stability, and possible memory leaks.
低水标和高水标对于检测工作负载峰值、总体工作负载稳定性和可能的内存泄漏至关重要。

Memory summary tables do not contain timing information because memory events are not timed.
内存汇总表不包含计时信息，因为内存事件没有计时。

For information about collecting memory usage data, see Memory Instrumentation Behavior.
有关收集内存使用数据的信息，请参见内存插装行为。
https://dev.mysql.com/doc/refman/8.0/en/memory-summary-tables.html#memory-instrumentation-behavior
*/

return [
	//Memory operations per thread and event name
	//https://dev.mysql.com/doc/refman/8.0/en/memory-summary-tables.html
	'tableName' => 'memory_summary_by_thread_by_event_name',
	'tableDesc' => '根据线程ID和事件名划分的内存事件总汇',
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
		'COUNT_ALLOC' => [
			//The aggregated numbers of calls to memory-allocation and memory-free functions.
			'name' => '调用内存分配函数次数',
			'desc' => '调用内存分配函数和无内存函数的聚合数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_FREE' => [
			//
			'name' => '调用无内存函数次数',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_ALLOC'
		],
		'SUM_NUMBER_OF_BYTES_ALLOC' => [
			//The aggregated sizes of allocated and freed memory blocks.
			'name' => '分配内存大小总计',
			'desc' => '分配和释放的内存块的聚合大小。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_NUMBER_OF_BYTES_FREE' => [
			//
			'name' => '释放内存大小总计',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SUM_NUMBER_OF_BYTES_ALLOC'
		],
		'LOW_COUNT_USED' => [
			//The low and high water marks corresponding to the CURRENT_COUNT_USED column.
			'name' => '低水平位标志',
			'desc' => '与CURRENT_COUNT_USED列对应的低水位和高水位标志。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CURRENT_COUNT_USED' => [
			//The aggregated number of currently allocated blocks that have not been freed yet. This is a convenience column, equal to COUNT_ALLOC − COUNT_FREE.
			'name' => '尚未释放的块总数',
			'desc' => '当前分配的尚未释放的块的总数。这是一个便捷列，等于COUNT_ALLOC-COUNT_FREE。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HIGH_COUNT_USED' => [
			//
			'name' => '高水平位标志',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LOW_NUMBER_OF_BYTES_USED' => [
			//The low and high water marks corresponding to the CURRENT_NUMBER_OF_BYTES_USED column.
			'name' => '低水平位标志',
			'desc' => '高低水位线对应于CURRENT_NUMBER_OF_BYTES_USED列',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CURRENT_NUMBER_OF_BYTES_USED' => [
			//The aggregated size of currently allocated memory blocks that have not been freed yet. This is a convenience column, equal to SUM_NUMBER_OF_BYTES_ALLOC − SUM_NUMBER_OF_BYTES_FREE.
			'name' => '尚未释放的内存块的聚合大小',
			'desc' => '当前分配的尚未释放的内存块的聚合大小。这是一个方便的列，等于SUM_NUMBER_OF_BYTES_ALLOC−SUM_NUMBER_OF_BYTES_FREE。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HIGH_NUMBER_OF_BYTES_USED' => [
			//
			'name' => '高水平位标志',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];