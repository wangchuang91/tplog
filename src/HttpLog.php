<?php
/**
 * @desc: 记录http响应异常的请求日志
 * @author: wangchuang
 * @datetime: 2024/5/9 18:01
 */
namespace wangchuang91;

use think\Response;
class HttpLog
{
    public function handle(Response $response)
    {
        // 记录请求日志
        app()->log->record($response->getData());
    }
}
