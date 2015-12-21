<?php

namespace Prophetz\Curl;

class Curl
{
    /**
     * @var resource
     */
    private $instance;
    /**
     * @var string
     */
    private $userAgent;
    /**
     * @var string
     */
    private $referer;
    /**
     * @var string
     */
    private $proxy;
    /**
     * @var string
     */
    private $proxyAuth;
    /**
     * @var string
     */
    private $cookieFile;
    /**
     * @var string
     */
    private $url;
    /**
     * @var bool
     */
    private $followLocation = true;
    /**
     * @var bool
     */
    private $header = false;
    /**
     * @var bool
     */
    private $returnTransfer = true;
    /**
     * @var bool
     */
    private $sslVerify = true;
    /**
     * @var string
     */
    private $data;
    /**
     * @var array
     */
    private $postFields;
    /**
     * @var string
     */
    private $requestType;
    /**
     * @var array
     */
    private $headers;
    /**
     * @var string
     */
    private $encoding;
    /**
     * @var int
     */
    private $timeout = 10;
    /**
     * @var int
     */
    private $connectionTimeout = 10;

    /**
     * @return resource
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * @param resource $instance
     * @return $this
     */
    private function setInstance($instance)
    {
        $this->instance = $instance;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * @param string $referer
     * @return $this
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferer()
    {
        return $this->referer;
    }

    /**
     * @return string
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param string $proxy
     * @return $this
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;

        return $this;
    }

    /**
     * @return string
     */
    public function getProxyAuth()
    {
        return $this->proxyAuth;
    }

    /**
     * @param string $proxyAuth
     * @return $this
     */
    public function setProxyAuth($proxyAuth)
    {
        $this->proxyAuth = $proxyAuth;

        return $this;
    }

    /**
     * @return string
     */
    public function getCookieFile()
    {
        return $this->cookieFile;
    }

    /**
     * @param string $cookieFile
     * @return $this
     */
    public function setCookieFile($cookieFile)
    {
        $this->cookieFile = $cookieFile;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isFollowLocation()
    {
        return $this->followLocation;
    }

    /**
     * @param boolean $followLocation
     * @return $this
     */
    public function setFollowLocation($followLocation)
    {
        $this->followLocation = $followLocation;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isHeader()
    {
        return $this->header;
    }

    /**
     * @param boolean $header
     * @return $this
     */
    public function setHeader($header)
    {
        $this->header = $header;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isReturnTransfer()
    {
        return $this->returnTransfer;
    }

    /**
     * @param boolean $returnTransfer
     * @return $this
     */
    public function setReturnTransfer($returnTransfer)
    {
        $this->returnTransfer = $returnTransfer;

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        $result = json_decode($this->data, true);

        if (json_last_error() === JSON_ERROR_NONE) {

            return $result;
        }

        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isSslVerify()
    {
        return $this->sslVerify;
    }

    /**
     * @param boolean $sslVerify
     * @return $this
     */
    public function setSslVerify($sslVerify)
    {
        $this->sslVerify = $sslVerify;

        return $this;
    }

    /**
     * @return array
     */
    public function getPostFields()
    {
        return $this->postFields;
    }

    /**
     * @param array $postFields
     * @return $this
     */
    public function setPostFields($postFields)
    {
        $this->postFields = $postFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * @param string $requestType
     * @return $this
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param string $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * @return int
     */
    public function getConnectionTimeout()
    {
        return $this->connectionTimeout;
    }

    /**
     * @param int $connectionTimeout
     * @return $this
     */
    public function setConnectionTimeout($connectionTimeout)
    {
        $this->connectionTimeout = $connectionTimeout;

        return $this;
    }

    public function init($url = null)
    {
        $instance = curl_init();
        if (false === $instance) {
            throw new \Exception('Failed to initialize curl');
        }
        $this->setUrl($url);
        $this->setInstance($instance);

        return $this;
    }

    public function exec()
    {
        $ch = $this->getInstance();
        if (!$ch) {
            throw new \Exception('Before exec need init');
        }

        $this->prepare();

        $data = curl_exec($ch);

        $this->setData($data);

        $this->close();

        return $this;
    }

    private function prepare()
    {
        $ch = $this->getInstance();

        if ($this->getUserAgent()) {
            curl_setopt($ch,  CURLOPT_USERAGENT , $this->getUserAgent());
        }

        if ($this->getReferer()) {
            curl_setopt($ch, CURLOPT_REFERER, $this->getReferer());
        }

        if (!$this->getUrl()) {
            throw new \Exception('Url not settled');
        } else {
            curl_setopt($ch, CURLOPT_URL, $this->getUrl());
        }

        if ($this->getProxy()) {
            curl_setopt($ch, CURLOPT_PROXY, $this->getProxy());
            if ($this->getProxyAuth()) {
                curl_setopt($ch, CURLOPT_PROXYUSERPWD, $this->getProxyAuth());
            }
        }

        if ($this->getCookieFile()) {
            curl_setopt($ch, CURLOPT_COOKIEFILE, $this->getCookieFile());
            curl_setopt($ch, CURLOPT_COOKIEJAR, $this->getCookieFile());
        }

        if ($this->getRequestType()) {
            if ($this->getRequestType() === 'post') {
                curl_setopt($ch, CURLOPT_POST, true);
            }
        }

        if ($this->getPostFields()) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->getPostFields());
        }

        if ($this->getHeaders()) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeaders());
        }

        if ($this->getEncoding()) {
            curl_setopt($ch, CURLOPT_ENCODING , $this->getEncoding());
        }

        if ($this->getTimeout()) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->getTimeout());
        }

        if ($this->getConnectionTimeout()) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->getConnectionTimeout());
        }

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $this->isFollowLocation());
        curl_setopt($ch, CURLOPT_HEADER, $this->isHeader());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, $this->isReturnTransfer());
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->isSslVerify());
    }

    private function close()
    {
        $ch = $this->getInstance();
        if (!$ch) {
            throw new \Exception('Before close need init');
        }
        curl_close($ch);

        $this->setPostFields(null);
    }
}