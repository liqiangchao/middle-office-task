<?php

namespace Gupo\MiddleOfficeTask\App;

use Gupo\MiddleOffice\Config\Config;
use Gupo\MiddleOffice\Clients\Client;
use Gupo\MiddleOffice\VO\RequestHeader;
use GuzzleHttp\Exception\GuzzleException;
use Gupo\MiddleOffice\Exception\ClientException;

/**
 * Class MessageCenter
 *
 * @author: Wumeng - wumeng@gupo.onaliyun.com
 * @since: 2023-06-15 16:42
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
     * @return mixed
     * @throws ClientException
     * @throws GuzzleException
     */

    public function create($body, $endpoint)
    {
        $header = new RequestHeader($this->config, $body, $this->config->appId);

        return $this->callApiPost($header->getHeader(), $body, $endpoint . 'openapi/task/create');
    }
}