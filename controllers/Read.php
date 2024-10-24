<?php

namespace Rhymix\Modules\Nicepay\Controllers;

/**
 * NICE 페이먼츠 결제
 * 
 * Copyright (c) 위드레브
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Read extends Base
{
	/**
	 * 초기화
	 */
	public function init()
	{
		// 스킨 또는 뷰 경로 지정
		$this->setTemplatePath($this->module_path . 'skins/' . ($this->module_info->skin ?: 'default'));
	}
	
	/**
	 * 글읽기 화면 예제
	 */
	public function dispNicepayRead()
	{
		// 글번호 받아오기
		$item_srl = \Context::get('item_srl');
		
		// 뷰 파일명 지정
		$this->setTemplateFile('read');
	}
}
