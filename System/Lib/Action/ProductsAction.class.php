<?php
class ProductsAction extends Action{
	private $aid;
	private $nick;
	public function _initialize(){
	$this->aid = session('aid');
	$this->nick = session('nickn');
    $this->assign('aid',$this->aid);
    $this->assign('nick',$this->nick);
	}
    public function index(){
	if(!empty($this->aid)){
	$goodmodel = M('Goods');
	$cate = M('Category');
	$keyword = trim($this->_request('keyword'));
	$istag = $this->_request('ist');
	$cate1 = $this->_request('cate1');
	$cate2 = $this->_request('cate2');
	$isdoubt = $this->_request('isdoubt');
	$pagestr = '';
	import("@.ORG.Pageyu");
	if(!empty($cate1)){
    $pagestr.="/cate1/".$cate1;
	}
	if(!empty($cate2)){
    $map['catid'] = $cate2;
	$pagestr.="/cate2/".$cate2;
	}
    if(!empty($keyword)){
    $where['id'] = $keyword;
	$where['num_iid']  = $keyword;
    $where['title']  = array('like','%'.$keyword.'%');
    $where['_logic'] = 'or';
    $map['_complex'] = $where;
    $pagestr.="/keyword/".$keyword;
	}
    if(!empty($istag)){
    $map['istag'] = $istag;
    $pagestr.="/ist/".$istag;
	}
    if(!empty($isdoubt)){
    $map['isdoubt'] = $isdoubt;
	$pagestr.="/isdoubt/".$isdoubt;
    }
	$count = $goodmodel->where($map)->count();
	$p = new Page($count,20,$pagestr);
	$goods = $goodmodel->field('*')->where($map)->order('id desc')->limit($p->firstRows.','.$p->maxRows)->select(); 		
	$page = $p->showPage();
	//取得分类
    $onecate = $cate->field('*')->where(array('parent_id'=>0))->select();
	if(!empty($cate1)){
     $twocate = $cate->field('*')->where(array('pcid'=>$cate1))->select();
	}
	$this->assign('goods',$goods);
	$this->assign('page',$page);
	$this->assign('keyword',$keyword);
	$this->assign('istag',$istag);
	$this->assign('onecate',$onecate);
	$this->assign('twocate',$twocate);
	$this->assign('cate1',$cate1);
	$this->assign('cate2',$cate2);
	$this->assign('isdoubt',$isdoubt);
	$this->assign('p',$_GET['p']);
    $this->display();
		exit;
    }else{
    $this->display('Login/index');
    }
    }

    public function _empty(){
	header("HTTP/1.1 404 Not Found");
	$this->error('次方法不存在',U('Index/index'));
	}
	public function addcate(){
    $cateid = trim($this->_post('cateid'));
    $cate = M('Category');
	$list = $cate->field('*')->where(array('pcid'=>$cateid))->select();
	if(!empty($list)){
	$str = '<option>请选择</option>';
    foreach($list as $k=>$v){
	if($k==0){
    $str.='<option value="'.$v['cid'].'" selected="selected">'.$v['name'].'</option>';
	}else{
    $str.='<option value="'.$v['cid'].'">'.$v['name'].'</option>';
	}
	}
	$arr['flag'] = true;
	$arr['str'] = $str;
	}else{
     $arr['flag'] = false;
	 $arr['msg'] = '没有数据';
	}
	echo json_encode($arr);
	}
}
