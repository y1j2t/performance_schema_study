<?php
/*
 The Performance Schema maintains statement event summary tables that contain information about minimum, maximum, and average statement latency (see Section 26.12.18.3, “Statement Summary Tables”).
 Those tables permit high-level assessment of system performance. To permit assessment at a more fine-grained level, the Performance Schema also collects histogram data for statement latencies.
 These histograms provide additional insight into latency distributions.

 Section 26.12.6, “Performance Schema Statement Event Tables” describes the events on which statement summaries are based.
 See that discussion for information about the content of statement events, the current and historical statement event tables,
 and how to control statement event collection, which is partially disabled by default.
 
 性能模式维护语句事件汇总表，其中包含关于最小、最大和平均语句延迟的信息(参见26.12.18.3节，“语句汇总表”)。
 这些表允许对系统性能进行高级评估。为了允许在更细粒度的级别上进行评估，性能模式还为语句延迟收集直方图数据。
 这些直方图提供了对延迟分布的进一步了解。
 https://dev.mysql.com/doc/refman/8.0/en/statement-summary-tables.html

 第26.12.6节，“性能模式语句事件表”描述了语句摘要所基于的事件。有关语句事件的内容、
 当前和历史语句事件表以及如何控制语句事件集合(默认情况下部分禁用)的信息，请参见该讨论。
 https://dev.mysql.com/doc/refman/8.0/en/performance-schema-statement-tables.html
*/

return [
	//Statement histogram summarized globally
	'tableName' => 'events_statements_histogram_global',
	'tableDesc' => '全局总结的语句直方图',
	'fields' => [
		'BUCKET_NUMBER' => [
			//Within a given histogram, the BUCKET_NUMBER column indicates the bucket number.
			'name' => '桶编号',
			'desc' => '在给定的柱状图中，BUCKET_NUMBER列表示桶号。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'BUCKET_TIMER_LOW' => [
			//A bucket counts statements that have a latency, in picoseconds, measured between BUCKET_TIMER_LOW and BUCKET_TIMER_HIGH:
			//The value of BUCKET_TIMER_LOW for the first bucket (BUCKET_NUMBER = 0) is 0.
			//The value of BUCKET_TIMER_LOW for a bucket (BUCKET_NUMBER = k) is the same as BUCKET_TIMER_HIGH for the previous bucket (BUCKET_NUMBER = k−1)
			//The last bucket is a catchall for statements that have a latency exceeding previous buckets in the histogram.
			'name' => '桶计数语句此前耗时',
			'desc' => '一个bucket计数语句有一个延迟，以皮秒为单位，在BUCKET_TIMER_LOW和BUCKET_TIMER_HIGH之间测量:第一个bucket (BUCKET_NUMBER = 0)的BUCKET_TIMER_LOW的值为0。一个bucket (BUCKET_NUMBER = k)的BUCKET_TIMER_LOW值与前一个bucket (BUCKET_NUMBER = k−1)的BUCKET_TIMER_HIGH值相同。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'BUCKET_TIMER_HIGH' => [
			//
			'name' => '桶计数语句当前耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'BUCKET_TIMER_LOW'
		],
		'COUNT_BUCKET' => [
			//The number of statements measured with a latency in the interval from BUCKET_TIMER_LOW up to but not including BUCKET_TIMER_HIGH.
			'name' => '耗时桶计数语句数量-从上条结束',
			'desc' => '在从BUCKET_TIMER_LOW到(但不包括)BUCKET_TIMER_HIGH的时间间隔内，测量具有延迟的语句的数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_BUCKET_AND_LOWER' => [
			//The number of statements measured with a latency in the interval from 0 up to but not including BUCKET_TIMER_HIGH.
			'name' => '耗时桶计数语句数量-从0',
			'desc' => '在从0到(但不包括BUCKET_TIMER_HIGH)的时间间隔内测量的具有延迟的语句数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'BUCKET_QUANTILE' => [
			//The proportion of statements that fall into this or a lower bucket. This proportion corresponds by definition to COUNT_BUCKET_AND_LOWER / SUM(COUNT_BUCKET) and is displayed as a convenience column.
			'name' => '小等于当前语句级别列比例',
			'desc' => '属于这个或更低的存储段的语句的比例。根据定义，该比例对应于COUNT_BUCKET_AND_LOWER / SUM(COUNT_BUCKET)，并显示为方便列。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		
	]
];