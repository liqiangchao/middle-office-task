<?php

namespace Gupo\MiddleOfficeTask\App;

use Gupo\MiddleOffice\Config\Config;
use Gupo\MiddleOffice\Clients\Client;
use Gupo\MiddleOffice\VO\RequestHeader;
use GuzzleHttp\Exception\GuzzleException;
use Gupo\MiddleOffice\Exception\ClientException;

/**
 * 任务中心
 */
class TaskCenterClient extends Client
{
    /**
     * @throws ClientException
     */
    public function __construct()
    {
        parent::__construct(new Config());
    }


    /**
     * 创建任务
     * @param $body
     * @param $endpoint
     * @param $headerEx
     * @return mixed
     * @throws ClientException
     * @throws GuzzleException
     */
    public function create($body, $endpoint ,$headerEx = [])
    {
        $header = new RequestHeader($this->config, $body, $this->config->appId);

        return $this->callApiPost($header->getHeader($headerEx), $body, $endpoint . 'openapi/task/create');
    }

    /**
     * 获得任务列表
     * @param $body
     * @param $endpoint
     * @param $headerEx
     * @return mixed
     * @throws ClientException
     * @throws GuzzleException
     */
    public function getTaskList($body, $endpoint,$headerEx = [])
    {
        $header = new RequestHeader($this->config, $body, $this->config->appId);

        return $this->callApiPost($header->getHeader($headerEx), $body, $endpoint . 'openapi/task/list');
    }

    /**
     * 修改任务状态
     * @param $body
     * @param $endpoint
     * @param $headerEx
     * @return mixed
     * @throws ClientException
     * @throws GuzzleException
     */
    public function change($body, $endpoint,$headerEx = [])
    {
        $header = new RequestHeader($this->config, $body, $this->config->appId);

        return $this->callApiPost($header->getHeader($headerEx), $body, $endpoint . 'openapi/task/change');
    }

    /**
     * 修改任务
     * @param $body
     * @param $endpoint
     * @param $headerEx
     * @return mixed
     * @throws ClientException
     * @throws GuzzleException
     */
    public function update($body, $endpoint,$headerEx = [])
    {
        $header = new RequestHeader($this->config, $body, $this->config->appId);

        return $this->callApiPost($header->getHeader($headerEx), $body, $endpoint . 'openapi/task/update');
    }

    /**
     * 获取任务类型
     * @param $body
     * @param $endpoint
     * @param $headerEx
     * @return mixed
     * @throws ClientException
     * @throws GuzzleException
     */
    public function category($body, $endpoint,$headerEx = [])
    {
        $header = new RequestHeader($this->config, $body, $this->config->appId);

        return $this->callApiPost($header->getHeader($headerEx), $body, $endpoint . 'openapi/task/category');
    }
}