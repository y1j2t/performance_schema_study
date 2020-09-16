<?php
/*
The Performance Schema maintains file I/O summary tables that aggregate information about I/O operations.

性能模式维护文件I/O汇总表，这些汇总表汇总了关于I/O操作的信息。
*/

return [
	//File events per file instance
	//https://dev.mysql.com/doc/refman/8.0/en/file-summary-tables.html
	'tableName' => 'file_summary_by_instance',
	'tableDesc' => '通过实例区分的文件事件总汇',
	'fields' => [
		'FILE_NAME' => [
			//
			'name' => '文件名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_NAME' => [
			//file_summary_by_instance has FILE_NAME, EVENT_NAME, and OBJECT_INSTANCE_BEGIN columns. Each row summarizes events for a given file and event name.
			'name' => '事件名',
			'desc' => 'file_summary_by_instance具有FILE_NAME，EVENT_NAME和OBJECT_INSTANCE_BEGIN列。每行总结了给定文件和事件名称的事件。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//
			'name' => 'OBJECT_INSTANCE_BEGIN',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'EVENT_NAME'
		],
		'COUNT_STAR' => [
			//These columns aggregate all I/O operations.
			'name' => '事件总数',
			'desc' => '这些列汇总了所有I / O操作。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WAIT' => [
			//
			'name' => '总等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_STAR'
		],
		'MIN_TIMER_WAIT' => [
			//
			'name' => '最小等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_STAR'
		],
		'AVG_TIMER_WAIT' => [
			//
			'name' => '平均等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_STAR'
		],
		'MAX_TIMER_WAIT' => [
			//
			'name' => '最大等待时间',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_STAR'
		],
		'COUNT_READ' => [
			//These columns aggregate all read operations, including FGETS, FGETC, FREAD, and READ.
			'name' => '读事件总数',
			'desc' => '这些列汇总了所有读取操作，包括FGETS，FGETC，FREAD和READ。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ' => [
			//
			'name' => '读事件总耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'MIN_TIMER_READ' => [
			//
			'name' => '读事件最小耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'AVG_TIMER_READ' => [
			//
			'name' => '读事件平均耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'MAX_TIMER_READ' => [
			//
			'name' => '读事件最大耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'SUM_NUMBER_OF_BYTES_READ' => [
			//
			'name' => '总读取字节',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'COUNT_WRITE' => [
			//These columns aggregate all write operations, including FPUTS, FPUTC, FPRINTF, VFPRINTF, FWRITE, and PWRITE.
			'name' => '写事件总数',
			'desc' => '这些列汇总了所有写操作，包括FPUTS，FPUTC，FPRINTF，VFPRINTF，FWRITE和PWRITE',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'SUM_TIMER_WRITE' => [
			//
			'name' => '写事件总耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'MIN_TIMER_WRITE' => [
			//
			'name' => '写事件最小耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'AVG_TIMER_WRITE' => [
			//
			'name' => '写事件最小耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'MAX_TIMER_WRITE' => [
			//
			'name' => '写事件最大耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'SUM_NUMBER_OF_BYTES_WRITE' => [
			//
			'name' => '总写入字节',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'COUNT_MISC' => [
			//These columns aggregate all other I/O operations, including CREATE, DELETE, OPEN, CLOSE, STREAM_OPEN, STREAM_CLOSE, SEEK, TELL, FLUSH, STAT, FSTAT, CHSIZE, RENAME, and SYNC. There are no byte counts for these operations.
			'name' => '其他IO事件总数',
			'desc' => '这些列汇总了所有其他I / O操作，包括CREATE，DELETE，OPEN，CLOSE，STREAM_OPEN，STREAM_CLOSE，SEEK，TELL，FLUSH，STAT，FSTAT，CHSIZE，RENAME和SYNC。这些操作没有字节数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_MISC' => [
			//
			'name' => '其他IO事件总耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_MISC'
		],
		'MIN_TIMER_MISC' => [
			//
			'name' => '其他IO事件最小耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_MISC'
		],
		'AVG_TIMER_MISC' => [
			//
			'name' => '其他IO事件平均耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_MISC'
		],
		'MAX_TIMER_MISC' => [
			//
			'name' => '其他IO事件最大耗时',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_MISC'
		]
	]
];