<?php

namespace Prophetz\Curl;

/**
 * Class ResponseInfo
 * @package Prophetz\Curl
 */
class ResponseInfo
{
    /** @var string */
    private $url;
    /** @var string */
    private $contentType;
    /** @var integer */
    private $httpCode;
    /** @var int */
    private $headerSize;
    /** @var int */
    private $requestSize;
    /** @var int */
    private $fileTime;
    /** @var int */
    private $sslVerifyResult;
    /** @var int */
    private $redirectCount;
    /** @var double */
    private $totalTime;
    /** @var double */
    private $nameLookTime;
    /** @var double */
    private $connectTime;
    /** @var double */
    private $preTransferTime;
    /** @var double */
    private $sizeUpload;
    /** @var double */
    private $sizeDownload;
    /** @var double */
    private $speedDownload;
    /** @var double */
    private $speedUpload;
    /** @var double */
    private $downloadContentLength;
    /** @var double */
    private $uploadContentLength;
    /** @var double */
    private $startTransferTime;
    /** @var double */
    private $redirectTime;
    /** @var string */
    private $redirectUrl;
    /** @var string */
    private $primaryApi;
    /** @var array */
    private $certInfo;
    /** @var int */
    private $primaryPort;
    /** @var string */
    private $localApi;
    /** @var int */
    private $localPort;

    /**
     * ResponseInfo constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setUrl($data['url']);
        $this->setContentType($data['content_type']);
        $this->setHttpCode($data['http_code']);
        $this->setHeaderSize($data['header_size']);
        $this->setRequestSize($data['request_size']);
        $this->setFileTime($data['filetime']);
        $this->setSslVerifyResult($data['ssl_verify_result']);
        $this->setRedirectCount($data['redirect_count']);
        $this->setTotalTime($data['total_time']);
        $this->setNameLookTime($data['namelookup_time']);
        $this->setConnectTime($data['connect_time']);
        $this->setPreTransferTime($data['pretransfer_time']);
        $this->setSizeUpload($data['size_upload']);
        $this->setSizeDownload($data['size_download']);
        $this->setSpeedDownload($data['speed_download']);
        $this->setSpeedUpload($data['speed_upload']);
        $this->setDownloadContentLength($data['download_content_length']);
        $this->setUploadContentLength($data['upload_content_length']);
        $this->setStartTransferTime($data['starttransfer_time']);
        $this->setRedirectTime($data['redirect_time']);
        $this->setRedirectUrl($data['redirect_url']);
        $this->setPrimaryApi($data['primary_ip']);
        $this->setCertInfo($data['certinfo']);
        $this->setPrimaryPort($data['primary_port']);
        $this->setLocalApi($data['local_ip']);
        $this->setLocalPort($data['local_port']);
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
     * @return ResponseInfo
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return ResponseInfo
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    /**
     * @param int $httpCode
     * @return ResponseInfo
     */
    public function setHttpCode($httpCode)
    {
        $this->httpCode = $httpCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeaderSize()
    {
        return $this->headerSize;
    }

    /**
     * @param int $headerSize
     * @return ResponseInfo
     */
    public function setHeaderSize($headerSize)
    {
        $this->headerSize = $headerSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getRequestSize()
    {
        return $this->requestSize;
    }

    /**
     * @param int $requestSize
     * @return ResponseInfo
     */
    public function setRequestSize($requestSize)
    {
        $this->requestSize = $requestSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileTime()
    {
        return $this->fileTime;
    }

    /**
     * @param int $fileTime
     * @return ResponseInfo
     */
    public function setFileTime($fileTime)
    {
        $this->fileTime = $fileTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getSslVerifyResult()
    {
        return $this->sslVerifyResult;
    }

    /**
     * @param int $sslVerifyResult
     * @return ResponseInfo
     */
    public function setSslVerifyResult($sslVerifyResult)
    {
        $this->sslVerifyResult = $sslVerifyResult;
        return $this;
    }

    /**
     * @return int
     */
    public function getRedirectCount()
    {
        return $this->redirectCount;
    }

    /**
     * @param int $redirectCount
     * @return ResponseInfo
     */
    public function setRedirectCount($redirectCount)
    {
        $this->redirectCount = $redirectCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * @param float $totalTime
     * @return ResponseInfo
     */
    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getNameLookTime()
    {
        return $this->nameLookTime;
    }

    /**
     * @param float $nameLookTime
     * @return ResponseInfo
     */
    public function setNameLookTime($nameLookTime)
    {
        $this->nameLookTime = $nameLookTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getConnectTime()
    {
        return $this->connectTime;
    }

    /**
     * @param float $connectTime
     * @return ResponseInfo
     */
    public function setConnectTime($connectTime)
    {
        $this->connectTime = $connectTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreTransferTime()
    {
        return $this->preTransferTime;
    }

    /**
     * @param float $preTransferTime
     * @return ResponseInfo
     */
    public function setPreTransferTime($preTransferTime)
    {
        $this->preTransferTime = $preTransferTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getSizeUpload()
    {
        return $this->sizeUpload;
    }

    /**
     * @param float $sizeUpload
     * @return ResponseInfo
     */
    public function setSizeUpload($sizeUpload)
    {
        $this->sizeUpload = $sizeUpload;
        return $this;
    }

    /**
     * @return float
     */
    public function getSizeDownload()
    {
        return $this->sizeDownload;
    }

    /**
     * @param float $sizeDownload
     * @return ResponseInfo
     */
    public function setSizeDownload($sizeDownload)
    {
        $this->sizeDownload = $sizeDownload;
        return $this;
    }

    /**
     * @return float
     */
    public function getSpeedDownload()
    {
        return $this->speedDownload;
    }

    /**
     * @param float $speedDownload
     * @return ResponseInfo
     */
    public function setSpeedDownload($speedDownload)
    {
        $this->speedDownload = $speedDownload;
        return $this;
    }

    /**
     * @return float
     */
    public function getSpeedUpload()
    {
        return $this->speedUpload;
    }

    /**
     * @param float $speedUpload
     * @return ResponseInfo
     */
    public function setSpeedUpload($speedUpload)
    {
        $this->speedUpload = $speedUpload;
        return $this;
    }

    /**
     * @return float
     */
    public function getDownloadContentLength()
    {
        return $this->downloadContentLength;
    }

    /**
     * @param float $downloadContentLength
     * @return ResponseInfo
     */
    public function setDownloadContentLength($downloadContentLength)
    {
        $this->downloadContentLength = $downloadContentLength;
        return $this;
    }

    /**
     * @return float
     */
    public function getUploadContentLength()
    {
        return $this->uploadContentLength;
    }

    /**
     * @param float $uploadContentLength
     * @return ResponseInfo
     */
    public function setUploadContentLength($uploadContentLength)
    {
        $this->uploadContentLength = $uploadContentLength;
        return $this;
    }

    /**
     * @return float
     */
    public function getStartTransferTime()
    {
        return $this->startTransferTime;
    }

    /**
     * @param float $startTransferTime
     * @return ResponseInfo
     */
    public function setStartTransferTime($startTransferTime)
    {
        $this->startTransferTime = $startTransferTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getRedirectTime()
    {
        return $this->redirectTime;
    }

    /**
     * @param float $redirectTime
     * @return ResponseInfo
     */
    public function setRedirectTime($redirectTime)
    {
        $this->redirectTime = $redirectTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     * @return ResponseInfo
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryApi()
    {
        return $this->primaryApi;
    }

    /**
     * @param string $primaryApi
     * @return ResponseInfo
     */
    public function setPrimaryApi($primaryApi)
    {
        $this->primaryApi = $primaryApi;
        return $this;
    }

    /**
     * @return array
     */
    public function getCertInfo()
    {
        return $this->certInfo;
    }

    /**
     * @param array $certInfo
     * @return ResponseInfo
     */
    public function setCertInfo($certInfo)
    {
        $this->certInfo = $certInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrimaryPort()
    {
        return $this->primaryPort;
    }

    /**
     * @param int $primaryPort
     * @return ResponseInfo
     */
    public function setPrimaryPort($primaryPort)
    {
        $this->primaryPort = $primaryPort;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocalApi()
    {
        return $this->localApi;
    }

    /**
     * @param string $localApi
     * @return ResponseInfo
     */
    public function setLocalApi($localApi)
    {
        $this->localApi = $localApi;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalPort()
    {
        return $this->localPort;
    }

    /**
     * @param int $localPort
     * @return ResponseInfo
     */
    public function setLocalPort($localPort)
    {
        $this->localPort = $localPort;
        return $this;
    }


}