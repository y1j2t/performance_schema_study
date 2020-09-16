<?php
/*
 The file_instances table lists all the files seen by the Performance Schema when executing file I/O instrumentation. 
 If a file on disk has never been opened, it will not be in file_instances. When a file is deleted from the disk, it is also removed from the file_instances table.
 
 file_instances表列出了执行文件I/O检测时性能模式所看到的所有文件。如果磁盘上的文件从未被打开过，那么它将不在file_instances中。当从磁盘中删除一个文件时，它也会从file_instances表中删除。
*/

return [
	//File instances
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-file-instances-table.html
	'tableName' => 'file_instances',
	'tableDesc' => '文件实例',
	'fields' => [
		'FILE_NAME' => [
			//The file name.
			'name' => '文件名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'EVENT_NAME' => [
			//The instrument name associated with the file.
			'name' => '生产者',
			'desc' => '与文件相关联的生产者名称。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OPEN_COUNT' => [
			//The count of open handles on the file. If a file was opened and then closed, it was opened 1 time, but OPEN_COUNT will be 0. To list all the files currently opened by the server, use WHERE OPEN_COUNT > 0.
			'name' => '文件中打开句柄的计数',
			'desc' => '文件中打开句柄的计数。如果一个文件被打开然后关闭，它被打开1次，但是OPEN_COUNT将为0。要列出服务器当前打开的所有文件，请使用WHERE OPEN_COUNT > 0。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];