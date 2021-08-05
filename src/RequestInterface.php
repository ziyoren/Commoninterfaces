<?php

namespace ziyoren\Commoninterfaces;

interface RequestInterface
{
    public function getApiUrl();
    public function getAllowParams();
    public function getMethod();

    public function setParams($key, $value=null);
    public function getParams();
    
    public function setHeaders($headers);
    public function getHeaders();
}