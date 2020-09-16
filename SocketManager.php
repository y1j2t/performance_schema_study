<?php
/**
 * Created by yjt.
 * Date: 2020/9/8
 * Time: 8:07 下午
 */

namespace App\Library\MysqlPerformanceSchema;


use GatewayWorker\Lib\Gateway;

class SocketManager
{
    public static function onWorkerStart($businessWorker)
    {
        echo "WorkerStart\n";
    }

    /**
     * @param string $client_id
     * client_id固定为20个字符的字符串，用来全局标记一个socket连接，每个客户端连接都会被分配一个全局唯一的client_id。
     *
     * 如果client_id对应的客户端连接断开了，那么这个client_id也就失效了。当这个客户端再次连接到Gateway时，
     * 将会获得一个新的client_id。也就是说client_id和客户端的socket连接生命周期是一致的。
     *
     * client_id一旦被使用过，将不会被再次使用，也就是说client_id是不会重复的，即使分布式部署也不会重复。
     *
     * 只要有client_id，并且对应的客户端在线，就可以调用Gateway::sendToClient($client_id, $data)等方法向这个客户端发送数据。
     */
    public static function onConnect(string $client_id)
    {
        Gateway::sendToCurrentClient(json_encode(['code' => 265, 'msg' => 'you are connected clentId[' . $client_id . ']', 'data' => []]));
    }

    /**
     * @param string $client_id
     * client_id固定为20个字符的字符串，用来全局标记一个socket连接，每个客户端连接都会被分配一个全局唯一的client_id
     * @param array $data
     * websocket握手时的http头数据，包含get、server等变量
     */
    public static function onWebSocketConnect(string $client_id, array $data)
    {
        echo $data['get'] ?: "$client_id not have get\n";
    }

    public static function onMessage($client_id, $message)
    {
        $message = json_decode($message, true);
        if (!is_array($message)) {
            Gateway::sendToClient($client_id, json_encode(['code' => 360, 'msg' => '数据格式不正确', 'data' => []]));
        }
        if (isset($message['type']) && $message['type'] == 1) {
            Gateway::sendToClient($client_id, json_encode(['code' => 266, 'msg' => 'ping', 'data' => []]));
        }

    }

    public static function onClose($client_id)
    {
        echo "$client_id is closed\n";
    }

}
