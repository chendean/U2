<?php
/**
 * TOP API: taobao.ebook.signstatus.check request
 * 
 * @author auto create
 * @since 1.0, 2013-09-22 12:49:27
 */
class EbookSignstatusCheckRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.ebook.signstatus.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
