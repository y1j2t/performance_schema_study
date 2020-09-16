<?php
/*
The Performance Schema maintains file I/O summary tables that aggregate information about I/O operations.

����ģʽά���ļ�I/O���ܱ���Щ���ܱ�����˹���I/O��������Ϣ��
*/

return [
	//File events per event name
	//https://dev.mysql.com/doc/refman/8.0/en/file-summary-tables.html
	'tableName' => 'file_summary_by_event_name',
	'tableDesc' => 'ͨ���¼������ֵ��ļ��¼��ܻ�',
	'fields' => [
		'EVENT_NAME' => [
			//
			'name' => '�¼���',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_STAR' => [
			//These columns aggregate all I/O operations.
			'name' => '�¼�����',
			'desc' => '��Щ�л���������I / O������',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WAIT' => [
			//
			'name' => '�ܵȴ�ʱ��',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_STAR'
		],
		'MIN_TIMER_WAIT' => [
			//
			'name' => '��С�ȴ�ʱ��',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_STAR'
		],
		'AVG_TIMER_WAIT' => [
			//
			'name' => 'ƽ���ȴ�ʱ��',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_STAR'
		],
		'MAX_TIMER_WAIT' => [
			//
			'name' => '���ȴ�ʱ��',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_STAR'
		],
		'COUNT_READ' => [
			//These columns aggregate all read operations, including FGETS, FGETC, FREAD, and READ.
			'name' => '���¼�����',
			'desc' => '��Щ�л��������ж�ȡ����������FGETS��FGETC��FREAD��READ��',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ' => [
			//
			'name' => '���¼��ܺ�ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'MIN_TIMER_READ' => [
			//
			'name' => '���¼���С��ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'AVG_TIMER_READ' => [
			//
			'name' => '���¼�ƽ����ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'MAX_TIMER_READ' => [
			//
			'name' => '���¼�����ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'SUM_NUMBER_OF_BYTES_READ' => [
			//
			'name' => '�ܶ�ȡ�ֽ�',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'COUNT_WRITE' => [
			//These columns aggregate all write operations, including FPUTS, FPUTC, FPRINTF, VFPRINTF, FWRITE, and PWRITE.
			'name' => 'д�¼�����',
			'desc' => '��Щ�л���������д����������FPUTS��FPUTC��FPRINTF��VFPRINTF��FWRITE��PWRITE',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'SUM_TIMER_WRITE' => [
			//
			'name' => 'д�¼��ܺ�ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'MIN_TIMER_WRITE' => [
			//
			'name' => 'д�¼���С��ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'AVG_TIMER_WRITE' => [
			//
			'name' => 'д�¼���С��ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'MAX_TIMER_WRITE' => [
			//
			'name' => 'д�¼�����ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'SUM_NUMBER_OF_BYTES_WRITE' => [
			//
			'name' => '��д���ֽ�',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'COUNT_MISC' => [
			//These columns aggregate all other I/O operations, including CREATE, DELETE, OPEN, CLOSE, STREAM_OPEN, STREAM_CLOSE, SEEK, TELL, FLUSH, STAT, FSTAT, CHSIZE, RENAME, and SYNC. There are no byte counts for these operations.
			'name' => '����IO�¼�����',
			'desc' => '��Щ�л�������������I / O����������CREATE��DELETE��OPEN��CLOSE��STREAM_OPEN��STREAM_CLOSE��SEEK��TELL��FLUSH��STAT��FSTAT��CHSIZE��RENAME��SYNC����Щ����û���ֽ�����',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_MISC' => [
			//
			'name' => '����IO�¼��ܺ�ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_MISC'
		],
		'MIN_TIMER_MISC' => [
			//
			'name' => '����IO�¼���С��ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_MISC'
		],
		'AVG_TIMER_MISC' => [
			//
			'name' => '����IO�¼�ƽ����ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_MISC'
		],
		'MAX_TIMER_MISC' => [
			//
			'name' => '����IO�¼�����ʱ',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_MISC'
		]
	]
];