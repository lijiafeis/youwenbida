<?php
    namespace Home\Common;
	//分页类
	class Page{
		//我们通过分析，分页有这些相关的成员变量
		//$_page_now 表示当前页
		private $_page_now = 1;
		//$_page_size 一页显示多少条记录
		private $_page_size;
		//$_total 有多少条记录
		private $_total;
		//$_url 表示你分页请求是发送给哪个url地址
		private $_url ;
		//添加一个拼接where 子句的属性
		private $_where = '';

		//使用魔术方式对私有属性赋值
		public function __set($p, $v){
			
			if(property_exists($this, $p)){
				$this->$p = $v;
			}
		}

		//使用魔术方法获取私有属性
		public function __get($p){
			if(isset($this->$p)){
				return $this->$p;
			}
		}
		
		public function create(){
			//确定我们的url 
			$url = $this->_url . '/page/' ;
			//确定我们的首页是1
			$first = 1;

			//计算出共有多少页
			$page_count = ceil($this->_total / $this->_page_size);
			//确定我们的尾页是
			$last = $page_count;

			
		
		//分页导航的首页
		$html =	<<<PAGEHTML
	<ul class="pagination">
	<!--首页-->
  <li>
    <a aria-label="First" href="$url$first{$this->_where}">
        <span aria-hidden="true">首页</span>
    </a>
  </li>
PAGEHTML;
	
	//分页导航的中间部分
	//规范，我们现实当前页的前三页和后三页
	for($i = $this->_page_now - 3; $i <= $this->_page_now + 3; $i++){
		//要进行一个处理，当我们显示分页要满足>0 并且小于 $page_count
		if($i < 1 || $i > $page_count){
			continue;
		}
    //当点击时，使$class =  'active'，从而设置每页的标签背景色为蓝色，即能显示当前页；
	$class = $i == $this->_page_now ? 'active' : '';

$html .= <<<PAGEHTML
<li class="$class">
<a href="$url$i{$this->_where}">$i</a>
</li>
PAGEHTML;
}
	//分页导航的尾页
	$html.=<<<PAGEHTML
<li>
<a aria-label="End" href="$url$last{$this->_where}">
<span aria-hidden="true">尾页</span>
</a>
</li>
</ul>
PAGEHTML;
		return $html;

		}

		public function ajaxPage(){
			//确定我们的url 
			$url = $this->_url;
			//确定我们的首页是1
			$first = 1;

			//计算出共有多少页
			$page_count = ceil($this->_total / $this->_page_size);
			//确定我们的尾页是
			$last = $page_count;

			
		
		//分页导航的首页
		$html =	<<<PAGEHTML
	<ul class="pagination">
	<!--首页-->
  <li>
    <a aria-label="First" href="javascript:goPage($first)">
        <span aria-hidden="true">首页</span>
    </a>
  </li>
PAGEHTML;
	
	//分页导航的中间部分
	//规范，我们现实当前页的前三页和后三页
	for($i = $this->_page_now - 3; $i <= $this->_page_now + 3; $i++){
		//要进行一个处理，当我们显示分页要满足>0 并且小于 $page_count
		if($i < 1 || $i > $page_count){
			continue;
		}
    //当点击时，使$class =  'active'，从而设置每页的标签背景色为蓝色，即能显示当前页；
	$class = $i == $this->_page_now ? 'active' : '';

$html .= <<<PAGEHTML
<li class="$class">
<a href="javascript:goPage($i)">$i</a>
</li>
PAGEHTML;
}
	//分页导航的尾页
	$html.=<<<PAGEHTML
<li>
<a aria-label="End" href="javascript:goPage($last)">
<span aria-hidden="true">尾页</span>
</a>
</li>
</ul>
PAGEHTML;
		return $html;
		}
	}