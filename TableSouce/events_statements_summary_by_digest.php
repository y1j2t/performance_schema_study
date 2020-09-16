<?php
/*
*/

return [
	//Statement events per schema and digest value
	//https://dev.mysql.com/doc/refman/8.0/en/statement-summary-tables.html
	'tableName' => 'events_statements_summary_by_digest',
	'tableDesc' => '每个模式和摘要值的语句事件',
	'fields' => [
		'SCHEMA_NAME' => [
			//
			'name' => '概要名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'DIGEST' => [
			//
			'name' => '摘要号',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'DIGEST_TEXT' => [
			//The DIGEST_TEXT column contains the corresponding normalized statement digest text, but is neither a grouping nor a summary column
			'name' => '摘要内容',
			'desc' => 'DIGEST_TEXT列包含相应的规范化语句摘要文本，但它既不是分组列，也不是摘要列',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_STAR' => [
			//The number of summarized events. This value includes all events, whether timed or nontimed.
			'name' => '事件数',
			'desc' => '汇总事件的数目。此值包括所有定时或非定时事件。',
			'descInvUrl' => '',
			'link' => 'events_waits_summary_global_by_event_name',
			'linkDesc' => ''
		],
		'SUM_TIMER_WAIT' => [
			//The total wait time of the summarized timed events. This value is calculated only for timed events because nontimed events have a wait time of NULL. The same is true for the other xxx_TIMER_WAIT values.
			'name' => '总等待时间',
			'desc' => '汇总的定时事件的总等待时间。此值仅针对定时事件计算，因为非定时事件的等待时间为NULL。对于其他的xxx_TIMER_WAIT值也是如此。',
			'descInvUrl' => '',
			'link' => 'events_waits_summary_global_by_event_name',
			'linkDesc' => ''
		],
		'MIN_TIMER_WAIT' => [
			//The minimum wait time of the summarized timed events.
			'name' => '最小等待时间',
			'desc' => '汇总时间事件的最小等待时间。',
			'descInvUrl' => '',
			'link' => 'events_waits_summary_global_by_event_name',
			'linkDesc' => ''
		],
		'AVG_TIMER_WAIT' => [
			//The average wait time of the summarized timed events.
			'name' => '平均等待时间',
			'desc' => '汇总的定时事件的平均等待时间。',
			'descInvUrl' => '',
			'link' => 'events_waits_summary_global_by_event_name',
			'linkDesc' => ''
		],
		'MAX_TIMER_WAIT' => [
			//The maximum wait time of the summarized timed events.
			'name' => '定时事件的最大等待时间',
			'desc' => '汇总的定时事件的最大等待时间。',
			'descInvUrl' => '',
			'link' => 'events_waits_summary_global_by_event_name',
			'linkDesc' => ''
		],
		'SUM_LOCK_TIME' => [
			//
			'name' => '等待表锁总耗时',
			'desc' => '汇总等待表锁所花费的时间',
			'descInvUrl' => '',
			'link' => 'events_statements_current.LOCK_TIME',
			'linkDesc' => ''
		],
		'SUM_ERRORS' => [
			//Whether an error occurred for the statement. The value is 0 if the SQLSTATE value begins with 00 (completion) or 01 (warning). The value is 1 is the SQLSTATE value is anything else.
			'name' => '语句出现错误次数',
			'desc' => '汇总语句出现错误次数',
			'descInvUrl' => '',
			'link' => 'events_statements_current.ERRORS',
			'linkDesc' => ''
		],
		'SUM_WARNINGS' => [
			//
			'name' => '警告数量',
			'desc' => '汇总来自语句诊断区域的警告数量。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.WARNINGS',
			'linkDesc' => ''
		],
		'SUM_ROWS_AFFECTED' => [
			//
			'name' => '受语句影响行数',
			'desc' => '汇总受语句影响的行数',
			'descInvUrl' => '',
			'link' => 'events_statements_current.ROWS_AFFECTED',
			'linkDesc' => ''
		],
		'SUM_ROWS_SENT' => [
			//The number of rows returned by the statement.
			'name' => '语句返回行数',
			'desc' => '汇总语句返回的行数。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.ROWS_SENT',
			'linkDesc' => ''
		],
		'SUM_ROWS_EXAMINED' => [
			//
			'name' => '服务器层检查行数',
			'desc' => '汇总服务器层检查的行数(不包括存储引擎内部的任何处理)。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.ROWS_EXAMINED',
			'linkDesc' => ''
		],
		'SUM_CREATED_TMP_DISK_TABLES' => [
			//
			'name' => '临时表创建数量',
			'desc' => '汇总服务器在执行语句时创建的内部磁盘上临时表的数量。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.CREATED_TMP_DISK_TABLES',
			'linkDesc' => ''
		],
		'SUM_CREATED_TMP_TABLES' => [
			//The number of internal temporary tables created by the server while executing statements.
			'name' => '创建内部临时表数量',
			'desc' => '汇总服务器在执行语句时创建的内部临时表的数量。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.CREATED_TMP_TABLES',
			'linkDesc' => ''
		],
		'SUM_SELECT_FULL_JOIN' => [
			//The number of joins that perform table scans because they do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.
			'name' => '执行表扫描联接数量',
			'desc' => '汇总执行表扫描的联接的数量，因为它们不使用索引。如果这个值不是0，那么应该仔细检查表的索引。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.SELECT_FULL_JOIN',
			'linkDesc' => ''
		],
		'SUM_SELECT_FULL_RANGE_JOIN' => [
			//The number of joins that used a range search on a reference table.
			'name' => '使用范围搜索的连接数',
			'desc' => '汇总在引用表上使用范围搜索的连接数。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.SELECT_FULL_RANGE_JOIN',
			'linkDesc' => ''
		],
		'SUM_SELECT_RANGE' => [
			//The number of joins that used ranges on the first table. This is normally not a critical issue even if the value is quite large.
			'name' => '第一个表上使用联接的数量',
			'desc' => '汇总在第一个表上使用的联接的数量。即使值相当大，这通常也不是一个关键问题。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.SELECT_RANGE',
			'linkDesc' => ''
		],
		'SUM_SELECT_RANGE_CHECK' => [
			//The number of joins without keys that check for key usage after each row. If this is not 0, you should carefully check the indexes of your tables.
			'name' => '无键连接的数目',
			'desc' => '汇总在每行后检查键使用情况的无键连接的数目。如果这个值不是0，那么应该仔细检查表的索引。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.SELECT_RANGE_CHECK',
			'linkDesc' => ''
		],
		'SUM_SELECT_SCAN' => [
			//The number of joins that did a full scan of the first table.
			'name' => '第一个表进行完整扫描联接的数量',
			'desc' => '汇总对第一个表进行完整扫描的联接的数量。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.SELECT_SCAN',
			'linkDesc' => ''
		],
		'SUM_SORT_MERGE_PASSES' => [
			//The number of merge passes that the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.
			'name' => '排序算法必须执行的合并通过次数',
			'desc' => '汇总排序算法必须执行的合并通过次数。如果该值很大，则应考虑增加sort_buffer_size系统变量的值。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.SORT_MERGE_PASSES',
			'linkDesc' => ''
		],
		'SUM_SORT_RANGE' => [
			//The number of sorts that were done using ranges.
			'name' => '完成的排序数量',
			'desc' => '汇总使用范围完成的排序数量。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.SORT_RANGE',
			'linkDesc' => ''
		],
		'SUM_SORT_ROWS' => [
			//The number of sorted rows.
			'name' => '已排序行数',
			'desc' => '汇总已排序的行数',
			'descInvUrl' => '',
			'link' => 'events_statements_current.SORT_ROWS',
			'linkDesc' => ''
		],
		'SUM_SORT_SCAN' => [
			//The number of sorts that were done by scanning the table.
			'name' => '扫描表完成的排序数量',
			'desc' => '汇总通过扫描表完成的排序数量。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.SORT_SCAN',
			'linkDesc' => ''
		],
		'SUM_NO_INDEX_USED' => [
			//1 if the statement performed a table scan without using an index, 0 otherwise.
			'name' => '扫描表是否使用索引',
			'desc' => '如果语句在没有使用索引的情况下执行了表扫描，则为1，否则为0。',
			'descInvUrl' => '',
			'link' => 'events_statements_current.NO_INDEX_USED',
			'linkDesc' => ''
		],
		'SUM_NO_GOOD_INDEX_USED' => [
			//1 if the server found no good index to use for the statement, 0 otherwise. For additional information, see the description of the Extra column from EXPLAIN output for the Range checked for each record value in Section 8.8.2, “EXPLAIN Output Format”.
			'name' => '是否找到好的索引',
			'desc' => '如果服务器没有找到好的索引用于语句，则为0。有关更多信息，请参见在8.8.2节“EXPLAIN output Format”中对每个记录值检查范围的解释输出中额外的列的描述。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/explain-output.html',
			'link' => 'events_statements_current.NO_GOOD_INDEX_USED',
			'linkDesc' => ''
		],
		'FIRST_SEEN' => [
			//Timestamps indicating when statements with the given digest value were first seen and most recently seen.
			'name' => '摘要语句首次出现时间',
			'desc' => '时间戳，指示具有给定摘要值的语句何时第一次出现和最近出现。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_SEEN' => [
			//
			'name' => '摘要语句最近出现时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'FIRST_SEEN'
		],
		'QUANTILE_95' => [
			//The 95th percentile of the statement latency, in picoseconds. This percentile is a high estimate, computed from the histogram data collected.
			//In other words, for a given digest, 95% of the statements measured have a latency lower than QUANTILE_95.
			'name' => '第95个百分位的语句延迟时间值',
			'desc' => '语句延迟的第95个百分位，以皮秒为单位。这个百分比是一个很高的估计，是从所收集的柱状图数据计算出来的。换句话说，对于给定的摘要，测量的95%语句的延迟都低于QUANTILE_95。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUANTILE_99' => [
			//Similar to QUANTILE_95, but for the 99th percentile.
			'name' => '第99个百分位的语句延迟时间值',
			'desc' => '类似于QUANTILE_95，但用于第99个百分位数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUANTILE_999' => [
			//Similar to QUANTILE_95, but for the 99.9th percentile.
			'name' => '第99.9个百分位的语句延迟时间值',
			'desc' => '类似于QUANTILE_95，但用于99.9百分位数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUERY_SAMPLE_TEXT' => [
			//A sample SQL statement that produces the digest value in the row. This column enables applications to access, for a given digest value, a statement actually seen by the server that produces that digest.
			//One use for this might be to run EXPLAIN on the statement to examine the execution plan for a representative statement associated with a frequently occurring digest.
			'name' => '摘要值的示例SQL语句',
			'desc' => '生成行的摘要值的示例SQL语句。对于给定的摘要值，此列使应用程序能够访问由产生该摘要的服务器实际看到的语句。它的一种用途可能是在语句上运行EXPLAIN，以检查与经常发生的摘要关联的代表性语句的执行计划。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUERY_SAMPLE_SEEN' => [
			//A timestamp indicating when the statement in the QUERY_SAMPLE_TEXT column was seen.
			'name' => 'QUERY_SAMPLE_TEXT语句出现时间',
			'desc' => '时间戳，指示何时看到QUERY_SAMPLE_TEXT列中的语句。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'QUERY_SAMPLE_TIMER_WAIT' => [
			//The wait time for the sample statement in the QUERY_SAMPLE_TEXT column.
			'name' => '在QUERY_SAMPLE_TEXT列中的等待时间',
			'desc' => '示例语句在QUERY_SAMPLE_TEXT列中的等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];
