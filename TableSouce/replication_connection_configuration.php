<?php
/*
This table shows the configuration parameters used by the replica for connecting to the source. Parameters stored in the table can be changed at runtime with the CHANGE MASTER TO statement, 
as indicated in the column descriptions.

Compared to the replication_connection_status table, replication_connection_configuration changes less frequently. 
It contains values that define how the replica connects to the source and that remain constant during the connection, whereas replication_connection_status contains values that change during the connection.

The replication_connection_configuration table has the following columns. The column descriptions indicate the corresponding CHANGE MASTER TO options from which the column values are taken, 
and the table given later in this section shows the correspondence between replication_connection_configuration columns and SHOW SLAVE STATUS columns.

此表显示副本用于连接到源的配置参数。如列描述中所示，可以在运行时使用CHANGE MASTER TO语句更改表中存储的参数。

与replication_connection_status表相比，replication_connection_configuration更改得更少。它包含定义副本如何连接到源的值，并且在连接期间保持不变，而replication_connection_status包含在连接期间更改的值。

replication_connection_configuration表有以下列。列描述指明从其中获取列值的选项的相应更改主选项，本节稍后给出的表显示了replication_connection_configuration列和SHOW SLAVE STATUS列之间的对应关系。
*/

return [
	//Configuration parameters for connecting to the source
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-replication-connection-configuration-table.html
	'tableName' => 'replication_connection_configuration',
	'tableDesc' => '用于连接到源的配置参数',
	'fields' => [
		'CHANNEL_NAME' => [
			//The replication channel which this row is displaying. There is always a default replication channel, and more replication channels can be added. 
			//See Section 17.2.2, “Replication Channels” for more information. (CHANGE MASTER TO option: FOR CHANNEL)
			'name' => '复制通道',
			'desc' => '该行所显示的复制通道。始终存在一个默认复制通道，可以添加更多复制通道。更多信息请参见17.2.2节“复制通道”。(将MASTER改为option: FOR CHANNEL)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HOST' => [
			//The host name of the source that the replica is connected to. (CHANGE MASTER TO option: MASTER_HOST)
			'name' => '主机名',
			'desc' => '副本所连接的源的主机名。(将MASTER改为option: MASTER_HOST)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PORT' => [
			//The port used to connect to the source. (CHANGE MASTER TO option: MASTER_PORT)
			'name' => '端口',
			'desc' => '用于连接到源的端口。(将MASTER改为option: MASTER_PORT)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'USER' => [
			//The user name of the replication user account used to connect to the source. (CHANGE MASTER TO option: MASTER_USER)
			'name' => '用户名',
			'desc' => '用于连接到源的复制用户帐户的用户名。(将MASTER改为option: MASTER_USER)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NETWORK_INTERFACE' => [
			//The network interface that the replica is bound to, if any. (CHANGE MASTER TO option: MASTER_BIND)
			'name' => '网络接口',
			'desc' => '副本绑定到的网络接口(如果有的话)。(将MASTER改为option: MASTER_BIND)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AUTO_POSITION' => [
			//1 if GTID auto-positioning is in use; otherwise 0. (CHANGE MASTER TO option: MASTER_AUTO_POSITION)
			'name' => '是否使用GTID自动定位',
			'desc' => '1 .使用GTID自动定位;否则0。(将MASTER改为option: MASTER_AUTO_POSITION)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SSL_ALLOWED' => [
			//These columns show the SSL parameters used by the replica to connect to the source, if any.
			//SSL_ALLOWED has these values:
			//Yes if an SSL connection to the source is permitted
			//No if an SSL connection to the source is not permitted
			//Ignored if an SSL connection is permitted but the replica does not have SSL support enabled
			//CHANGE MASTER TO options for the other SSL columns: MASTER_SSL_CA, MASTER_SSL_CAPATH, MASTER_SSL_CERT, MASTER_SSL_CIPHER, MASTER_SSL_CRL, MASTER_SSL_CRLPATH, MASTER_SSL_KEY, MASTER_SSL_VERIFY_SERVER_CERT.
			'name' => 'SSL_ALLOWED',
			'desc' => '这些列显示副本用于连接到源(如果有的话)的SSL参数。SSL_ALLOWED有以下值:1.如果允许到源的SSL连接，则可以。2.如果不允许到源的SSL连接，则不允许。3.如果允许SSL连接，但副本没有启用SSL支持，则忽略。将MASTER更改为其他SSL列的选项:MASTER_SSL_CA、MASTER_SSL_CAPATH、MASTER_SSL_CERT、MASTER_SSL_CIPHER、MASTER_SSL_CRL、MASTER_SSL_CRLPATH、MASTER_SSL_KEY、MASTER_SSL_VERIFY_SERVER_CERT。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SSL_ALLOWED'
		],
		'SSL_CA_FILE' => [
			//
			'name' => 'SSL_CA_FILE',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SSL_ALLOWED'
		],
		'SSL_CA_PATH' => [
			//
			'name' => 'SSL_CA_PATH',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SSL_ALLOWED'
		],
		'SSL_CERTIFICATE' => [
			//
			'name' => 'SSL_CERTIFICATE',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SSL_ALLOWED'
		],
		'SSL_CIPHER' => [
			//
			'name' => 'SSL_CIPHER',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SSL_ALLOWED'
		],
		'SSL_KEY' => [
			//
			'name' => 'SSL_KEY',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SSL_ALLOWED'
		],
		'SSL_VERIFY_SERVER_CERTIFICATE' => [
			//
			'name' => 'SSL_VERIFY_SERVER_CERTIFICATE',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SSL_ALLOWED'
		],
		'SSL_CRL_FILE' => [
			//
			'name' => 'SSL_CRL_FILE',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SSL_ALLOWED'
		],
		'SSL_CRL_PATH' => [
			//
			'name' => 'SSL_CRL_PATH',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'SSL_ALLOWED'
		],
		'CONNECTION_RETRY_INTERVAL' => [
			//The number of seconds between connect retries. (CHANGE MASTER TO option: MASTER_CONNECT_RETRY)
			'name' => '连接重试间隔秒数',
			'desc' => '连接重试之间的秒数。(更改主选项:MASTER_CONNECT_RETRY)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'CONNECTION_RETRY_COUNT' => [
			//The number of times the replica can attempt to reconnect to the source in the event of a lost connection. (CHANGE MASTER TO option: MASTER_RETRY_COUNT)
			'name' => '可重连次数',
			'desc' => '在连接丢失的情况下，副本可以尝试重新连接到源的次数。(更改主选项:MASTER_RETRY_COUNT)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HEARTBEAT_INTERVAL' => [
			//The replication heartbeat interval on a replica, measured in seconds. (CHANGE MASTER TO option: MASTER_HEARTBEAT_PERIOD)
			'name' => '心跳间隔',
			'desc' => '副本上的复制心跳间隔，以秒为单位度量。(更改主选项:MASTER_HEARTBEAT_PERIOD)',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TLS_VERSION' => [
			//The list of TLS protocol versions that are permitted by the replica for the replication connection. For TLS version information, see Section 6.3.2, “Encrypted Connection TLS Protocols and Ciphers”. (CHANGE MASTER TO option: MASTER_TLS_VERSION)
			'name' => '允许的TLS协议版本列表',
			'desc' => '副本允许复制连接使用的TLS协议版本列表。TLS版本信息，见第6.3.2节“加密连接TLS协议和密码”。(将MASTER更改为选项:MASTER_TLS_VERSION)',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/encrypted-connection-protocols-ciphers.html',
			'link' => '',
			'linkDesc' => ''
		],
		'TLS_CIPHERSUITES' => [
			//The list of ciphersuites that are permitted by the replica for the replication connection. For TLS ciphersuite information, see Section 6.3.2, “Encrypted Connection TLS Protocols and Ciphers”. (CHANGE MASTER TO option: MASTER_TLS_CIPHERSUITES)
			'name' => '允许的密码套件列表',
			'desc' => '副本允许用于复制连接的密码套件列表。关于TLS密码套件信息，请参见第6.3.2节“加密连接TLS协议和密码”。(将主文件更改为选项:MASTER_TLS_CIPHERSUITES)',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/encrypted-connection-protocols-ciphers.html',
			'link' => '',
			'linkDesc' => ''
		],
		'PUBLIC_KEY_PATH' => [
			//The path name to a file containing a replica-side copy of the public key required by the source for RSA key pair-based password exchange. The file must be in PEM format. 
			//This column applies to replicas that authenticate with the sha256_password or caching_sha2_password authentication plugin. (CHANGE MASTER TO option: MASTER_PUBLIC_KEY_PATH)
			//If PUBLIC_KEY_PATH is given and specifies a valid public key file, it takes precedence over GET_PUBLIC_KEY.
			'name' => '公钥文件的路径',
			'desc' => '一个文件的路径名，该文件包含用于基于RSA密钥对的密码交换的源所需的公钥的副本。该文件必须是PEM格式。此列适用于使用sha256_password或caching_sha2_password身份验证插件进行身份验证的副本。(将MASTER改为option: MASTER_PUBLIC_KEY_PATH)如果给定了PUBLIC_KEY_PATH并指定了一个有效的公钥文件，那么它优先于GET_PUBLIC_KEY。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'GET_PUBLIC_KEY' => [
			//Whether to request from the source the public key required for RSA key pair-based password exchange. This column applies to replicas that authenticate with the caching_sha2_password authentication plugin. 
			//For that plugin, the source does not send the public key unless requested. (CHANGE MASTER TO option: MASTER_GET_PUBLIC_KEY)If PUBLIC_KEY_PATH is given and specifies a valid public key file, 
			//it takes precedence over GET_PUBLIC_KEY.
			'name' => '密码交换所需公钥',
			'desc' => '是否从源请求基于RSA密钥对的密码交换所需的公钥。此列适用于使用caching_sha2_password身份验证插件进行身份验证的副本。对于该插件，除非被请求，否则源代码不会发送公钥。(将MASTER改为option: MASTER_GET_PUBLIC_KEY)如果给定了PUBLIC_KEY_PATH并指定了一个有效的公钥文件，那么它优先于GET_PUBLIC_KEY。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'NETWORK_NAMESPACE' => [
			//
			'name' => '',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COMPRESSION_ALGORITHMS' => [
			//The permitted compression algorithms for connections to the source. (CHANGE MASTER TO option: MASTER_COMPRESSION_ALGORITHMS)
			//For more information, see Section 4.2.8, “Connection Compression Control”.
			//This column was added in MySQL 8.0.18.
			'name' => '允许压缩算法',
			'desc' => '用于连接到源的允许压缩算法。 （将MASTER TO更改为MASTER_COMPRESSION_ALGORITHMS） 有关更多信息，请参见第4.2.8节“连接压缩控制”。 该列是在MySQL 8.0.18中添加的。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/connection-compression-control.html',
			'link' => '',
			'linkDesc' => ''
		],
		'ZSTD_COMPRESSION_LEVEL' => [
			//The compression level to use for connections to the source that use the zstd compression algorithm. (CHANGE MASTER TO option: MASTER_ZSTD_COMPRESSION_LEVEL)
			//For more information, see Section 4.2.8, “Connection Compression Control”.
			//This column was added in MySQL 8.0.18.
			'name' => 'zstd压缩算法的压缩级别',
			'desc' => '用于连接到使用zstd压缩算法的源的压缩级别。 （将MASTER TO选项更改为：MASTER_ZSTD_COMPRESSION_LEVEL） 有关更多信息，请参见第4.2.8节“连接压缩控制”。 该列是在MySQL 8.0.18中添加的。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/connection-compression-control.html',
			'link' => '',
			'linkDesc' => ''
		],
		
	]
];