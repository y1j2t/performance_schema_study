<?php
/*
The host_cache table provides access to the contents of the host cache, which contains client host name and IP address information and is used to avoid Domain Name System (DNS) lookups. 
The host_cache_size system variable controls the size of the host cache, as well as the size of the host_cache table that exposes the cache contents. 
For operational and configuration information about the host cache, see Section 5.1.12.3, “DNS Lookups and the Host Cache”.


Because the host_cache table exposes the contents of the host cache, it can be examined using SELECT statements. 
This may help you diagnose the causes of connection problems. The Performance Schema must be enabled or this table is empty.

host_cache表提供对主机缓存内容的访问，其中包含客户端主机名和IP地址信息，用于避免域名系统(DNS)查找。host_cache_size系统变量控制主机缓存的大小，
以及暴露缓存内容的host_cache表的大小。有关主机缓存的操作和配置信息，请参阅5.1.12.3节，“DNS查找和主机缓存”。
https://dev.mysql.com/doc/refman/8.0/en/host-cache.html

因为host_cache表公开了主机缓存的内容，所以可以使用SELECT语句对其进行检查。这可以帮助您诊断连接问题的原因。必须启用性能模式，否则该表为空。
*/

return [
	//Information from the internal host cache
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-host-cache-table.html
	'tableName' => 'host_cache',
	'tableDesc' => '来自内部域名缓存的信息',
	'fields' => [
		'IP' => [
			//The IP address of the client that connected to the server, expressed as a string.
			'name' => '客户端IP',
			'desc' => '连接到服务器的客户端的IP地址，用字符串表示。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HOST' => [
			//The resolved DNS host name for that client IP, or NULL if the name is unknown.
			'name' => '域名',
			'desc' => '该客户端IP的解析DNS主机名，如果名称未知，则为空。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HOST_VALIDATED' => [
			//Whether the IP-to-host name-to-IP DNS resolution was performed successfully for the client IP. 
			//If HOST_VALIDATED is YES, the HOST column is used as the host name corresponding to the IP so that additional calls to DNS can be avoided. While HOST_VALIDATED is NO, 
			//DNS resolution is attempted for each connection attempt, until it eventually completes with either a valid result or a permanent error. 
			//This information enables the server to avoid caching bad or missing host names during temporary DNS failures, which would negatively affect clients forever.
			'name' => 'DNS解析是否成功',
			'desc' => '客户端IP的IP-主机名-IP DNS解析是否成功执行。如果HOST_VALIDATED is YES，主机列将用作与IP对应的主机名，这样就可以避免对DNS的额外调用。虽然HOST_VALIDATED is NO，但每次连接尝试都会尝试DNS解析，直到它最终以有效的结果或永久的错误完成为止。此信息使服务器能够避免在临时DNS故障期间缓存坏的或丢失的主机名，这将对客户机产生永久的负面影响。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_CONNECT_ERRORS' => [
			//The number of connection errors that are deemed “blocking” (assessed against the max_connect_errors system variable). Only protocol handshake errors are counted, 
			//and only for hosts that passed validation (HOST_VALIDATED = YES).
			//Once SUM_CONNECT_ERRORS for a given host reaches the value of max_connect_errors, new connections from that host are blocked. 
			//The SUM_CONNECT_ERRORS value can exceed the max_connect_errors value because multiple connection attempts from a host can occur simultaneously while the host is not blocked. 
			//Any or all of them can fail, independently incrementing SUM_CONNECT_ERRORS, possibly beyond the value of max_connect_errors.
			//Suppose that max_connect_errors is 200 and SUM_CONNECT_ERRORS for a given host is 199. If 10 clients attempt to connect from that host simultaneously, 
			//none of them are blocked because SUM_CONNECT_ERRORS has not reached 200. If blocking errors occur for five of the clients, SUM_CONNECT_ERRORS is increased by one for each client, 
			//for a resulting SUM_CONNECT_ERRORS value of 204. The other five clients succeed and are not blocked because the value of SUM_CONNECT_ERRORS when their connection attempts began had not reached 200. 
			//New connections from the host that begin after SUM_CONNECT_ERRORS reaches 200 are blocked.
			'name' => '因阻塞连接失败数量',
			'desc' => '被认为是“阻塞”的连接错误的数量(根据max_connect_errors系统变量评估)。只计算协议握手错误，并且只计算通过验证的主机(host_valid= YES)。一旦给定主机的SUM_CONNECT_ERRORS值达到max_connect_errors，来自该主机的新连接将被阻塞。SUM_CONNECT_ERRORS值可能会超过max_connect_errors值，因为当主机未被阻塞时，可能会同时出现来自主机的多个连接尝试。它们中的任何一个或所有都可能失败，独立地递增SUM_CONNECT_ERRORS，可能超过max_connect_errors的值。假设max_connect_errors为200，给定主机的SUM_CONNECT_ERRORS为199。如果10个客户端同时尝试从该主机连接，没有一个会被阻塞，因为SUM_CONNECT_ERRORS还没有达到200。如果阻塞错误发生在5个客户机上，则每个客户机的SUM_CONNECT_ERRORS增加1个，结果SUM_CONNECT_ERRORS值为204。其他5个客户端成功，没有被阻塞，因为它们的连接尝试开始时SUM_CONNECT_ERRORS的值还没有达到200。当SUM_CONNECT_ERRORS达到200时，从主机开始的新连接将被阻塞。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_HOST_BLOCKED_ERRORS' => [
			//The number of connections that were blocked because SUM_CONNECT_ERRORS exceeded the value of the max_connect_errors system variable.
			'name' => '超出max_connect_errors值的数量',
			'desc' => '因为SUM_CONNECT_ERRORS而阻塞的连接数超过了max_connect_errors系统变量的值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_NAMEINFO_TRANSIENT_ERRORS' => [
			//The number of transient errors during IP-to-host name DNS resolution.
			'name' => 'DNS解析期间错误数',
			'desc' => 'IP-to-host name DNS解析期间瞬时错误的数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_NAMEINFO_PERMANENT_ERRORS' => [
			//The number of permanent errors during IP-to-host name DNS resolution.
			'name' => 'DNS解析永久错误数',
			'desc' => '在ip到主机名DNS解析期间永久错误的数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_FORMAT_ERRORS' => [
			//The number of host name format errors. MySQL does not perform matching of Host column values in the mysql.user system table against host names for which one or more of the initial components of the name are entirely numeric, 
			//such as 1.2.example.com. The client IP address is used instead. For the rationale why this type of matching does not occur, see Section 6.2.4, “Specifying Account Names”.
			'name' => '主机名格式错误的数量',
			'desc' => '主机名格式错误的数量。MySQL不执行主机列值的匹配。针对主机名的用户系统表，其中名称的一个或多个初始组件完全是数字的，例如1.2.example.com。而是使用客户端IP地址。对于这种匹配没有发生的原因，请参见第6.2.4节“指定帐户名称”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/account-names.html',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_ADDRINFO_TRANSIENT_ERRORS' => [
			//The number of transient errors during host name-to-IP reverse DNS resolution.
			'name' => '反向DNS解析期间错误数',
			'desc' => '主机名到ip反向DNS解析期间的瞬时错误数。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_ADDRINFO_PERMANENT_ERRORS' => [
			//The number of permanent errors during host name-to-IP reverse DNS resolution.
			'name' => '反向DNS解析永久错误数',
			'desc' => '在主机名到ip的反向DNS解析过程中永久错误的数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_FCRDNS_ERRORS' => [
			//The number of forward-confirmed reverse DNS errors. These errors occur when IP-to-host name-to-IP DNS resolution produces an IP address that does not match the client originating IP address.
			'name' => '前向确认的反向DNS错误的数',
			'desc' => '前向确认的反向DNS错误的数量。当IP-主机名-IP DNS解析生成的IP地址与客户端原始IP地址不匹配时，就会发生这些错误。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_HOST_ACL_ERRORS' => [
			//The number of errors that occur because no users are permitted to connect from the client host. In such cases, the server returns ER_HOST_NOT_PRIVILEGED and does not even ask for a user name or password.
			'name' => '拒绝连接的用户被拒绝次数',
			'desc' => '由于不允许任何用户从客户端主机连接而发生的错误数量。在这种情况下，服务器返回ER_HOST_NOT_PRIVILEGED，甚至不要求用户名或密码。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_NO_AUTH_PLUGIN_ERRORS' => [
			//The number of errors due to requests for an unavailable authentication plugin. A plugin can be unavailable if, for example, it was never loaded or a load attempt failed.
			'name' => '不可用身份验证插件导致的错误数',
			'desc' => '由于请求不可用的身份验证插件而导致的错误数量。一个插件可能不可用，例如，它从来没有加载或加载尝试失败。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_AUTH_PLUGIN_ERRORS' => [
			//The number of errors reported by authentication plugins.
			//An authentication plugin can report different error codes to indicate the root cause of a failure. 
			//Depending on the type of error, one of these columns is incremented: COUNT_AUTHENTICATION_ERRORS, COUNT_AUTH_PLUGIN_ERRORS, COUNT_HANDSHAKE_ERRORS. 
			//New return codes are an optional extension to the existing plugin API. Unknown or unexpected plugin errors are counted in the COUNT_AUTH_PLUGIN_ERRORS column.
			'name' => '身份验证插件报告的错误数',
			'desc' => '身份验证插件报告的错误数量。身份验证插件可以报告不同的错误代码，以指出失败的根本原因。根据错误的类型，其中一列会增加:COUNT_AUTHENTICATION_ERRORS、COUNT_AUTH_PLUGIN_ERRORS、COUNT_HANDSHAKE_ERRORS。新的返回码是现有插件API的可选扩展。未知或意外的插件错误会在COUNT_AUTH_PLUGIN_ERRORS列中计算。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_HANDSHAKE_ERRORS' => [
			//The number of errors detected at the wire protocol level.
			'name' => '连接握手错误数',
			'desc' => '在有线协议级别检测到的错误数',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_PROXY_USER_ERRORS' => [
			//The number of errors detected when proxy user A is proxied to another user B who does not exist.
			'name' => '用户代理错误数',
			'desc' => '代理用户A被代理到另一个不存在的用户B时检测到的错误数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_PROXY_USER_ACL_ERRORS' => [
			//The number of errors detected when proxy user A is proxied to another user B who does exist but for whom A does not have the PROXY privilege.
			'name' => '没有代理权限错误数',
			'desc' => '代理用户A被代理到另一个存在但A没有代理权限的用户B时检测到的错误数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_AUTHENTICATION_ERRORS' => [
			//The number of errors caused by failed authentication.
			'name' => '身份验证失败错误数',
			'desc' => '身份验证失败导致的错误数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_SSL_ERRORS' => [
			//The number of errors due to SSL problems.
			'name' => 'SSL问题导致的错误数',
			'desc' => '由于SSL问题导致的错误数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_MAX_USER_CONNECTIONS_ERRORS' => [
			//The number of errors caused by exceeding per-user connection quotas. See Section 6.2.20, “Setting Account Resource Limits”.
			'name' => '超过连接限额导致的错误',
			'desc' => '因超过每个用户的连接限额而导致的错误数量。见第6.2.20节，“设置帐户资源限制”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/user-resources.html',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_MAX_USER_CONNECTIONS_PER_HOUR_ERRORS' => [
			//The number of errors caused by exceeding per-user connections-per-hour quotas. See Section 6.2.20, “Setting Account Resource Limits”.
			'name' => '超过每小时连接限额导致的错误数',
			'desc' => '因超过每用户每小时连接限额而导致的错误数量。见第6.2.20节，“设置帐户资源限制”。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_DEFAULT_DATABASE_ERRORS' => [
			//The number of errors related to the default database. For example, the database does not exist or the user has no privileges to access it.
			'name' => '默认数据库相关的错误数',
			'desc' => '与默认数据库相关的错误数量。例如，数据库不存在，或者用户没有权限访问它。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_INIT_CONNECT_ERRORS' => [
			//The number of errors caused by execution failures of statements in the init_connect system variable value.
			'name' => '语句执行失败导致的错误数',
			'desc' => 'init_connect系统变量值中语句执行失败导致的错误数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_LOCAL_ERRORS' => [
			//The number of errors local to the server implementation and not related to the network, authentication, or authorization. For example, out-of-memory conditions fall into this category.
			'name' => '服务器实现本地错误数',
			'desc' => '服务器实现的本地错误数量，与网络、身份验证或授权无关。例如，内存不足的情况就属于这一类。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_UNKNOWN_ERRORS' => [
			//The number of other, unknown errors not accounted for by other columns in this table. This column is reserved for future use, in case new error conditions must be reported, 
			//and if preserving the backward compatibility and structure of the host_cache table is required.
			'name' => '未知错误数',
			'desc' => '本表中其他列没有考虑到的其他未知错误的数量。这个列被保留以备将来使用，以防必须报告新的错误条件，以及如果需要保持向后兼容性和host_cache表的结构。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'FIRST_SEEN' => [
			//The timestamp of the first connection attempt seen from the client in the IP column.
			'name' => '首次连接时间',
			'desc' => '在IP列中从客户端看到的第一次连接尝试的时间戳。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_SEEN' => [
			//The timestamp of the most recent connection attempt seen from the client in the IP column.
			'name' => '最近连接时间',
			'desc' => '在IP列中从客户端看到的最近连接尝试的时间戳。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'FIRST_ERROR_SEEN' => [
			//The timestamp of the first error seen from the client in the IP column.
			'name' => '首次连接错误时间',
			'desc' => '在IP列中从客户端看到的第一个错误的时间戳。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LAST_ERROR_SEEN' => [
			//The timestamp of the most recent error seen from the client in the IP column.
			'name' => '最近错误连接时间',
			'desc' => '从客户端在IP列中看到的最近错误的时间戳。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],		
	]
];