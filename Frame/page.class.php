<?php
#分页框架
#      1          6           5-6             7       	8-9        8           25          20
#  firstPage	prePage		leftPages		page	 rightPages	    nextPage	  lastPage	    goPage
#
class Page{
	private $rows;//总记录数
	private $rowsPer;//每页记录数
	///private $pageNum;//当前页
	private $pages;//总页数
	private $url;//当前URL


	private $firstPage;//首页
	private $prePage;//上一页

	private $leftPages;//左侧页数
	private $page;//当前页
	private $rightPages;//右侧页数

	private $nextPage;//下一页
	private $lastPage;//尾页

	private $goPage;//跳转

	private $config=array('firstPage'=>'首页','lastPage'=>'尾页','prePage'=>'上一页','nextPage'=>'下一页','header'=>'记录');

	private $offset;


	public function __construct($rows,$rowsPer,$pa='',$lrPages=2)
	{
		$this->rows=$rows;//总记录数
		$this->rowsPer=$rowsPer;//每页记录数
		$this->pages=ceil($rows/$rowsPer);//总页数

		$this->url=$this->getUrl($pa);//todo:获取当前页URL
		$this->page=isset($_GET['page']) ? $_GET['page'] : 1 ;//当前页


		$this->leftPages=$this->page-$lrPages;//左右页数
		$this->rightPages=$this->page+$lrPages;
		$this->offset=($this->page-1)*$this->rowsPer;
		$this->pageNum();
	}
	function __get($args){
		if($args=="offset")
			return $this->offset;
		else
			return null;
	}

	//获取当前URL
	public function getUrl($pa=''){
		$url=$_SERVER["REQUEST_URI"].(strpos($_SERVER["REQUEST_URI"], '?') ? '' : "?").$pa;
		$parse=parse_url($url);

		if(isset($parse["query"])){
			parse_str($parse['query'],$params);
			unset($params["page"]);
			$url=$parse['path'].'?'.http_build_query($params);
		}
		return $url;
	}
	//分页页码维护
	private function pageNum(){
		$this->firstPage=1;//首页
		$this->lastPage=$this->pages;//尾页
		//上一页
		if($this->page==1) $this->prePage=1;
		else $this->prePage=$this->page-1;
		//下一页
		if($this->page==$this->pages) $this->nextPage=$this->page;
		else $this->nextPage=$this->page+1;
		//左侧页数
		if($this->leftPages<1) $this->leftPages=1;
		//右侧页数
		if($this->rightPages>$this->pages) $this->rightPages=$this->pages;
	}
	//分页接口
	public function pageFace(){
		$page['pageCurrent']=$this->page;
		$page['firstPage']=$this->firstPage;
		$page['lastPage']=$this->lastPage;
		for($i=$this->leftPages;$i<=$this->rightPages;$i++){
			$page['pageList'][]=array('href'=>"{$this->url}&page={$i}",'page'=>$i);
		}

		$page['pageWrap']=array('firstPage'=>"{$this->url}&page={$this->firstPage}",
								'lastPage'=>"{$this->url}&page={$this->lastPage}",
								'prePage'=>"{$this->url}&page={$this->prePage}",
								'nextPage'=>"{$this->url}&page={$this->nextPage}");
		$page['pageHeader']=array('rows'=>$this->rows,'pages'=>$this->pages);
		return $page;
	}

	public function pageDiv(){
		return $this->pageWrap($this->pageList(),$this->pageGo());
	}







	//分页样式维护
	private function pageStyle(){
		$pageHtml='<ul class="pagination">
                        <li class="disabled"><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a>
                        </li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2<span class="sr-only"></span></a></li>

                        <li><a href="#">3 <span class="sr-only"></span></a></li>
                        <li><a href="#">4 <span class="sr-only"></span></a></li>
                        <li><a href="#">5 <span class="sr-only"></span></a></li>
                        <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a>
                        </li>
                    </ul>';
	}
	private function pageList(){
		$html='';
		for($i=$this->leftPages;$i<=$this->rightPages;$i++){
			$page="<a href='{$this->url}&page={$i}'>$i<span class='sr-only'></span></span></a>";
			$html.=$page;
		}
		return $html;
	}
	private function pageGo(){
	return '';
	}
	private function pageWrap($pageList,$pageGo){
		$html='';
		$html.="<a href='{$this->url}&page={$this->firstPage}'>{$this->config['firstPage']}</a>";
		$html.="<a href='{$this->url}&page={$this->prePage}'>{$this->config['prePage']}</a>";
		$html.=$pageList;
		$html.="<a href='{$this->url}&page={$this->nextPage}'>{$this->config['nextPage']}</a>";
		$html.="<a href='{$this->url}&page={$this->lastPage}'>{$this->config['lastPage']}</a>";
		$html.=$pageGo;
		return $html;
	}

	function pageDiv1($pageNum,$rowsPerPage,$rowCount,$url){

	#分页操作
#当前页
//$pageNum
#每页显示记录数量
//$rowsPerPage
#总记录数
//$rowCount
#链接地址
//$url
#总页数
	$pageCount = ceil($rowCount/$rowsPerPage) ;
//若超出最大页数则跳转最后一页
	if ($pageNum>$pageCount) {
		$pageNum=$pageCount;
	}


	#分页框架
#      1         4            5-6          7       8       9         10-11        12      25          20
#  firstPage startPage    midPages=2   prePage pageNum nextPage   midPages=2   endPage lastPage	   goPage
#
#分页框架
#         1         4              5-6              7        8        9              10-11            12      25
#  firstPage startPage    midPages=2   prePage pageNum nextPage   midPages=2   endPage lastPage
#
	$firstPage=1;
	$lastPage =$pageCount;
	$midPages=0;
	$startPage= $pageNum-2-$midPages;
	if ($startPage<2) {
		$startPage=$firstPage;
	}
	$prePage = $pageNum-1;
	if ($prePage<2) {
		$prePage=$firstPage;
	}
	$nextPage = $pageNum+1;
	if ($nextPage>=$lastPage) {
		$nextPage=$lastPage;
	}
	$endPage  =$pageNum+2+$midPages;
	if ($endPage>=$lastPage) {
		$endPage=$lastPage;
	}


	$pageStr ='';
//firstPage
	$pageStr.= "<a href='{$url}pageNum=$firstPage'>首页</a> ";
//prePage
	$pageStr.= "<a href='{$url}pageNum=$prePage'><<前一页</a> ";

//中间pages
	if($startPage<$pageNum){
		for ($i=$startPage; $i <=$prePage ; $i++) {
			$pageStr.= "<a href='{$url}pageNum=$i'>$i</a> ";
		}
	}
//当前pages
	$pageStr.="<span>$pageNum</span>";

//中间pages
	if($endPage>$pageNum){
		for ($i=$nextPage; $i <=$endPage ; $i++) {
			$pageStr.= "<a href='{$url}pageNum=$i'>$i</a> ";
		}
	}
//nextPage
	$pageStr.= "<a href='{$url}pageNum=$nextPage'>后一页>></a> ";
//lastPage
	$pageStr.= "<a href='{$url}pageNum=$lastPage'>尾页</a> ";

	$pageStr.= "<form action='{$url}' style='display:inline;'>
               <input type='text' name='pageNum' value='1' style='display:inline-block;width:20px;'>

               <input type='submit'  value='跳转'>
           </form>";

	return $pageStr;
}
}


?>