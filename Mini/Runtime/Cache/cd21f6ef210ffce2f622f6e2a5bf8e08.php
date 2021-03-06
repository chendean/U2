<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>优衣柜 - 我的专属衣柜 | 一个可以按气温、穿衣场合及风格快速为您推荐搭配组合的智能衣柜</title>
<meta name="keywords" content="优衣柜,优衣库,搭配,服装搭配,男装搭配,女装搭配,童装搭配,看天气,学搭配" />
<meta name="description" content="优衣柜 - 我的专属衣柜 | 一个可以按气温、穿衣场合及风格快速为您推荐搭配组合的智能衣柜" />
  <link rel="stylesheet" type="text/css" href="__TMPL__Public/css/uniqlo.css" />
  <style type="text/css">
  #getTimeCode,#getTimeCode2{background-color:#ccc;}
  </style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-27414296-10', 'bigodata.com.cn');
  ga('send', 'pageview');
 
</script> 
</head>
<body>
<!-- <div class="mt20 mb20 tc">
  <img src="__TMPL__Public/images/header.jpg" alt="" />
</div> -->
<div class="uniqlo">
  <h1 class="mini-hd tc pr">
    <span class="mini-beta">测试版</span>
    优衣柜<p>我的专属衣柜</p>
  </h1>
  
  <div class="login_bar pr">
	<?php if($uniq_user_name == ''): ?><span>欢迎来到优衣柜</span>
		<a href="javascript:;" class="mini-reg-btn">快速注册</a>
		<a href="javascript:;" class="mini-login-btn">直接登录</a>
	<?php else: ?>
		<span>当前登录账号：</span>
		<strong><?php echo ($uniq_user_name); ?></strong>
		<?php if($is_mobile_active == 0): ?><a href="javascript:;" class="mini-activate-btn mr10 js-click" data-id="#activate_account">激活账号</a><?php endif; ?>
		<a href="javascript:;" class="mini-changepw-btn">修改密码</a>&nbsp;&nbsp;|&nbsp;
		<?php if($user['is_active'] == 0): ?><a href="javascript:;" class="mini-logout js-click" data-id="#logout">退出登录</a>
		<?php else: ?>
			<a href="<?php echo U('Index/loginout');?>" class="mini-logout">退出登录</a><?php endif; endif; ?>
    <a href="http://uniqlo.tmall.com/" target="_blank" class="mini-homepage fr">前往优衣库天猫旗舰店</a>
  </div>

  <div class="mini-cabnet pr clear">
    <div class="mini-cab pr fl">
      <h2 class="mini-cab-title pa tc">搭配间</h2>
      <div method="" class="mini-cab-bin pr">
        <a href="javascript:;" class="mini-cab-clear pa none">清空</a>
        <a href="javascript:;" class="mini-cab-empty pa tc">
          将衣物加入衣柜后<br />就可以在这里搭搭看咯<br />快在下方选衣服吧
        </a>
        <div class="mini-cab-tips pa tc none">
          <h3>优衣柜推荐</h3>
          <p>左右切换，选择最心仪搭配</p>
          <h3>自己搭搭</h3>
          <p>点击柜中衣物，自己搭搭看</p>
          <a href="javascript:;">知道了！开始搭配</a>
        </div>
        <div class="mini-cab-slide pr" id="cab-top">
          <div class="mini-cab-detail pa none">
            <span class="mini-btn"></span>
            <!-- <a href="javascript:;" class="mini-detail-close mini-btn">关闭</a> -->
            <h3><a href="#" target="_blank">default title</a></h3>
            <p>
              剩余库存 <span>default rest</span> 件
            </p>
            <p>
              <a href="#" target="_blank" class="mini-buy-now fr">我要购买</a>
              <i>¥</i> <strong>default price</strong>
            </p>
          </div>
          <a href="javascript:;" class="mini-cab-prev mini-btn">prev</a>
          <a href="javascript:;" class="mini-cab-next mini-btn">next</a>
          <div class="mini-cab-container">
            <ul>
              <!-- <li><a href="#"><img src="__TMPL__Public/images/index/a.png" alt=""></a></li> -->
            </ul>
          </div>
        </div>
        <div class="mini-cab-slide pr" id="cab-bot">
          <div class="mini-cab-detail pa none">
            <span class="mini-btn"></span>
            <!-- <a href="javascript:;" class="mini-detail-close mini-btn">关闭</a> -->
            <h3><a href="#" target="_blank">default title</a></h3>
            <p>
              剩余库存 <span>default rest</span> 件
            </p>
            <p>
              <a href="#" target="_blank" class="mini-buy-now fr">我要购买</a>
              <i>¥</i> <strong>default price</strong>
            </p>
          </div>
          <a href="javascript:;" class="mini-cab-prev mini-btn">prev</a>
          <a href="javascript:;" class="mini-cab-next mini-btn">next</a>
          <div class="mini-cab-container">
            <ul>
              <!-- <li><a href="#"><img src="__TMPL__Public/images/index/b.png" alt=""></a></li> -->
            </ul>
          </div>
        </div>
        <p class="mt20 tc">
          <a href="javascript:;" class="mini-cab-buy none">我要购买</a>
        </p>
        <form class="mini-cab-choose pa tc none">
          <a href="javascript:;" class="mini-cab-close mini-btn"></a>
          <p>选择购买类型</p>
          <p class="ft12">
            <label><input type="radio" name="cloth-type" pos="#cab-top">上装</label>
            <label><input type="radio" name="cloth-type" pos="#cab-bot">下装</label>
          </p>
        </form>
      </div>
      <div class="mini-cab-share">
        <!-- JiaThis Button BEGIN -->
        <div class="jiathis_style_24x24 clear">
          <a class="jiathis_button_tsina"></a>
          <a class="jiathis_button_qzone"></a>
          <a class="jiathis_button_tqq"></a>
          <a class="jiathis_button_kaixin001"></a>
          <a class="jiathis_button_renren"></a>
        </div>
        <script type="text/javascript" >
        var jiathis_config={
          url:"http://uniqlo.bigodata.com.cn/",
          summary:"#我的专属衣柜# 每日的穿衣搭配，你要花多少时间呢？气温变化快，穿衣搭配烦，场合切换多，换装时间短……幸好我有优衣库出品的优衣柜，帮我根据天气、场合、风格选出合适的搭配组合。现在点击链接，你也可以免费拥有专属衣柜哦！",
          title : " ",
          pic:"http://115.29.38.96/uniqlo/Mini/Tpl/Public/images/share.jpg",
          shortUrl:false,
          hideMore:false
        }
        </script>
        <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
        <!-- JiaThis Button END -->
      </div>
    </div>
    <div class="mini-net pr fl">
      <div class="mini-net-hd clear">
        我的优衣柜
		<?php if($is_mobile_active == 0): ?><span class="ft12 index-filter-fail_smaller">
          您需要激活账号后才能保存衣柜中的衣物哦
          </span><?php endif; ?>
        <a href="javascript:;" class="mini-net-choose fr">挑选衣服</a>
      </div>
      <?php if($clothes == '' && $pants == ''): ?><a href="javascript:;" class="mini-net-empty pa tc">
        <h3>您暂时还没有衣物收入衣柜</h3>
        <p>快在下方收入自己<br />喜欢的衣服吧</p>
      </a><?php endif; ?>

      <div class="mini-net-slide mini-net-margin pr" id="net-top" data-pos="#cab-top">
        <a href="javascript:;" class="mini-net-prev mini-btn">prev</a>
        <a href="javascript:;" class="mini-net-next mini-btn">next</a>
        <div class="mini-net-container">
          <ul>
            <!-- <li><img src="__TMPL__Public/images/sku/a1.png" alt="清新生活" tag="tag1" id="1" url="#1"></li> -->
            <?php if(is_array($clothes)): $i = 0; $__LIST__ = $clothes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img sex='<?php echo ($vo["type"]); ?>' fg='<?php echo ($vo["fg"]); ?>' csex='<?php echo ($vo["csex"]); ?>' id="<?php echo ($vo["num_iid"]); ?>" price="<?php echo ($vo["price"]); ?>" place="<?php echo ($vo["tagname2"]); ?>" url="<?php echo ($vo["detail_url"]); ?>" tag="<?php echo ($vo["tagname1"]); ?>" src="__ROOT__/<?php echo ($vo["pic_url"]); ?>" data-like='<?php echo ($vo["love"]); ?>' data-had='<?php echo ($vo["buy"]); ?>' alt="<?php echo ($vo["title"]); ?>" rest="<?php echo ($vo["num"]); ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>
      <div class="mini-net-slide pr" id="net-bot" data-pos="#cab-bot">
        <a href="javascript:;" class="mini-net-prev mini-btn">prev</a>
        <a href="javascript:;" class="mini-net-next mini-btn">next</a>
        <div class="mini-net-container">
          <ul>
          	<?php if(is_array($pants)): $i = 0; $__LIST__ = $pants;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pvo): $mod = ($i % 2 );++$i;?><li><img sex='<?php echo ($pvo["type"]); ?>' fg='<?php echo ($vo["fg"]); ?>' id="<?php echo ($pvo["num_iid"]); ?>" csex='<?php echo ($pvo["csex"]); ?>' price="<?php echo ($pvo["price"]); ?>" place="<?php echo ($vo["tagname2"]); ?>" url="<?php echo ($pvo["detail_url"]); ?>" tag="<?php echo ($vo["tagname1"]); ?>" src="__ROOT__/<?php echo ($pvo["pic_url"]); ?>" data-like='<?php echo ($pvo["love"]); ?>' data-had='<?php echo ($pvo["buy"]); ?>' alt="<?php echo ($pvo["title"]); ?>" rest="<?php echo ($pvo["num"]); ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- <li><img src="__TMPL__Public/images/sku/b1.png" alt="清新生活" tag="tag9" id="9" url="#9"></li> -->
          </ul>
        </div>
      </div>

      <div class="mini-net-hover pa none" data-id="">
        <h3 class="tc">清新生活</h3>
        <img src="" alt="">
        <p>
          <a href="#" class="mini-net-detail fr fb" target="_blank">详情</a>
          <span>约会装</span> <strong>99</strong>元
        </p>
        <a href="javascript:;" class="mini-net-like fl">我喜欢</a>
        <a href="javascript:;" class="mini-net-had fl">已买入</a>
        <div class="mini-net-tips pa">点击试穿</div>
        <a href="javascript:;" class="mini-net-del mini-btn">删除</a>
        <div class="mini-net-confirm pa tc none">
          <span class="mini-btn"></span>
          <h4>确定要将该衣服移出衣柜吗？</h4>
          <a href="javascript:;" class="mini-net-no">取消</a>
          <a href="javascript:;" class="mini-net-yes">确认</a>
        </div>
        <div class="mini-net-fail pa tc none">
          <span class="mini-btn"></span>
          <h5>这件与您搭配间中的衣物性别不符哦</h5>
          <a href="javascript:;" class="mini-net-ok">确认</a>
        </div>
      </div>
    </div>
    <!-- 未登录 start -->
    <!-- <?php if($token == ''): ?><div class="mini-mask pf"></div>
    <div class="mini-login pa tc">
      <p>您需要登录后才能使用专属优衣柜哦！</p>
      <a href="<?php echo U('Index/login');?>" class="mini-login-btn">立即登录</a>
    </div><?php endif; ?> -->
    <!-- 未登录 end -->
  </div>

  <div class="mini-wea fb clear pr">
    <span class="mini-beta">测试版</span>
    <p id="nio-tip" class="mini-wea-tips fl" title="正在加载天气数据，请稍等...">正在加载天气数据，请稍等...</p>
    <i id="nio-img" class="nio-0" title="天气"></i>
    <ul class="mini-wea-ul fl">
      <li class="clear">
        <strong id="nio-city" class="ft18" title="城市">城市</strong>
        <div class="mini-change-city fl pr">
          <a href="javascript:;" class="mini-change-btn fl" title="切换城市">切换</a>
          <form class="mini-city linkageselect pa none">
            <span class="mini-btn"></span>
            <a href="javascript:;" class="mini-city-close mini-btn">关闭</a>
            <label>省份<select class="level_1"></select></label>
            <label>城市<select class="level_2"></select></label>
            <input type="submit" value="切换" />
          </form>
        </div>
        <span id="nio-date">2013年00月00日</span>
        <span id="nio-day" title="星期">星期</span>
      </li>
      <li class="clear ft36">
        <strong id="nio-low">00°</strong>
        <strong>~</strong>
        <strong id="nio-high">00°</strong>
        <b id="nio-wea" class="ft14">天气</b>
      </li>
      <li class="clear">
        <ul class="mini-week">
          <li class="mini-checked">
            <em id="nio-tem1">00°</em>
            <small id="nio-day1">星期</small>
          </li>
          <li>
            <em id="nio-tem2">00°</em>
            <small id="nio-day2">星期</small>
          </li>
          <li>
            <em id="nio-tem3">00°</em>
            <small id="nio-day3">星期</small>
          </li>
          <li>
            <em id="nio-tem4">00°</em>
            <small id="nio-day4">星期</small>
          </li>
          <li>
            <em id="nio-tem5">00°</em>
            <small id="nio-day5">星期</small>
          </li>
          <li class="noborder">
            <em id="nio-tem6">00°</em>
            <small id="nio-day6">星期</small>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="mini-cate">
    <div class="mini-gender-bin tc">
      <ul class="mini-gender fl">
        <!-- <li>
          <a href="javascript:;" data-key="all" id='0' class="mini-gender-all">All</a>
        </li> -->
        <li class="mini-gender-checked">
          <a href="javascript:;" data-key="women" id='1'class="mini-gender-women">WOMEN</span></a>
        </li>
        <li>
          <a href="javascript:;" data-key="men" id='2' class="mini-gender-men">MEN</a>
        </li>
        <li>
          <a href="javascript:;" data-key="kids" class="mini-gender-kids" id='3' class="mini-gender-men">KIDS BABY</a>
        </li>
      </ul>
    </div>

    <div class="mini-cate-ps clear tc">
      <div class="mini-cate-place fl">
        <a href="javascript:;" class="mini-p-0 mini-cate-checked">全部</a>
        <ul class="mini-place-ul clear fl pr">
          <li class="mini-p-1" id='<?php echo ($cbusiness); ?>'>商务</li>
          <li class="mini-p-5" id='<?php echo ($courism); ?>'>逛街</li>
          <li class="mini-p-3" id='<?php echo ($csport); ?>'>运动</li>
          <li class="mini-p-4" id='<?php echo ($cjujia); ?>'>居家</li>

        </ul>
      </div>
      <div class="mini-cate-style fl">
        <a href="javascript:;" class="mini-s-0 mini-cate-checked">全部</a>
        <ul class="mini-style-ul clear fl pr">
          <li class="mini-s-6" id='<?php echo ($fbusiness); ?>'>休闲</li>
          <li class="mini-s-4" id='<?php echo ($fourism); ?>'>酷</li>
          <li class="mini-s-8" id='<?php echo ($fsport); ?>'>英伦</li>
          <li class="mini-s-9" id='<?php echo ($fjujia); ?>'>学院</li>
        </ul>
      </div>
    </div>

    <div class="mini-design clear pr">
      <h3 class="fl">
        优衣柜推荐款式
      </h3>

      <div class="mini-gender fl pa">
        <a href="javascript:;" class="mini-gender-suit tc">套装</a>
        <div class="mini-gender-tips pa ft14 none">
          <b class="mini-gender-close mini-btn">关闭</b>
          <span class="mini-btn"></span>
          <p>您还可以点击“套装”，筛选查看家居套装噢</p>
        </div>
      </div>

      <div class="mini-fm fl mini-checked-all">
        <h3>
          <a href="javascript:;" class="mini-design-all mini-design-checked pr">
            <span class="mini-btn mini-design-l"></span>
            选中所有
            <span class="mini-btn mini-design-r"></span>
          </a>
        </h3>

        <div class="fl">
          <div class="mini-design-bin tc pr">
            <ul class="clear" data-pos="left">
  		        <?php if(is_array($ucuslist)): $i = 0; $__LIST__ = $ucuslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ucvo): $mod = ($i % 2 );++$i;?><li><a href="javascript:;" id='<?php echo ($ucvo["id"]); ?>'><?php echo ($ucvo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
          <div class="mini-design-btn pr">
            <a href="javascript:;" class="mini-design-more mini-btn">more</a>
          </div>
        </div>

        <div class="fr">
          <div class="mini-design-bin tc pr">
            <ul class="clear" data-pos="right">
  		        <?php if(is_array($dcuslist)): $i = 0; $__LIST__ = $dcuslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dcvo): $mod = ($i % 2 );++$i; if($dcvo['name'] != ''): ?><li><a href="javascript:;" id='<?php echo ($dcvo["id"]); ?>'><?php echo ($dcvo["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
          <div class="mini-design-btn pr">
            <a href="javascript:;" class="mini-design-more mini-btn">more</a>
          </div>
        </div>

      </div>

    </div>

  </div>

  <div id="nio-kv" class="index-bin noborder pr">
	 <p class="index-filter-fail pa none" id="qtm">暂时没有符合条件的衣物，请试试其他选择吧</p>
   <p class="index-final-tip">注：衣物实际库存请参照优衣库官方网站</p>
    <div class="index-single mini-kv pr">
      <div class="mini-kv-slide pr" data-pos="#net-top">
        <a href="javascript:;" class="mini-kv-prev mini-btn">prev</a>
        <a href="javascript:;" class="mini-kv-next mini-btn">next</a>
        <div class="mini-kv-container">
          <ul id='upc'>
          	<?php if(is_array($reulist)): $i = 0; $__LIST__ = $reulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$uvo): $mod = ($i % 2 );++$i;?><li>
              <img data-original="__ROOT__/<?php echo ($uvo["pic_url"]); ?>" id="<?php echo ($uvo["num_iid"]); ?>" place="<?php echo ($uvo["tagname2"]); ?>" tag="<?php echo ($uvo["tagname1"]); ?>" url="<?php echo ($uvo["detail_url"]); ?>" rest="<?php echo ($uvo["num"]); ?>" price="<?php echo ($uvo["price"]); ?>" alt="<?php echo ($uvo["title"]); ?>">
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>

      <div class="mini-kv-slide pr" data-pos="#net-bot">
        <a href="javascript:;" class="mini-kv-prev mini-btn">prev</a>
        <a href="javascript:;" class="mini-kv-next mini-btn">next</a>
        <div class="mini-kv-container">
          <ul id='downc'>
          	<?php if(is_array($redlist)): $i = 0; $__LIST__ = $redlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dvo): $mod = ($i % 2 );++$i;?><li>
              <img data-original="__ROOT__/<?php echo ($dvo["pic_url"]); ?>" id="<?php echo ($dvo["num_iid"]); ?>" place="<?php echo ($dvo["tagname2"]); ?>" tag="<?php echo ($dvo["tagname1"]); ?>" url="<?php echo ($dvo["detail_url"]); ?>" rest="<?php echo ($dvo["num"]); ?>" price="<?php echo ($dvo["price"]); ?>" alt="<?php echo ($dvo["title"]); ?>">
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="index-suit mini-kv pr none">
      <div class="mini-kv-slide pr">
        <a href="javascript:;" class="mini-kv-prev mini-btn">prev</a>
        <a href="javascript:;" class="mini-kv-next mini-btn">next</a>
        <div class="mini-kv-container">
          <ul id='taoz'>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mini-kv-hover tc pa none">
      <p class="ft16">¥ <strong class="ft18">7999.00</strong></p>
      <small>剩余库存 <span>123</span> 件</small>
      <a class="ft14" href="" target="_blank">【手机应用专享价】女装 羊毛混纺V领开衫 078662 优衣库U</a>
      <a href="javascript:;" class="mini-kv-add pa">收入衣柜</a>
    </div>

    <a href="javascript:;" class="mini-net-empty pa tc" <?php if($nick == ''): ?>style="display:none;"<?php elseif($reulist == '' && $redlist == ''): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id='tishi'>
      <!-- <h3>很抱歉！</h3> -->
      <p>暂时没有符合条件的套装<br />请试试其他选择吧</p>
    </a>

  </div>


  <ul class="mini-aside pf">
    <li class="mini-aside-msg">意见反馈
      <form class="mini-aside-form pa none" onsubmit="return false;">
        <a href="javascript:;" class="mini-form-close mini-btn">关闭</a>
        <span class="mini-btn"></span>
        <h4>意见反馈</h4>
        <input type="hidden" id="mini-select">
        <div class="mini-select tl">
          请选择主题
        </div>
        <ul class="mini-options pa none">
          <li id="1">设计风格</li>
          <li id="2">使用体验</li>
          <li id="3">功能建议</li>
          <li id="4">其他建议</li>
        </ul>
        <div class="mini-textarea">
          <textarea placeholder="请填写反馈内容" id='propid'></textarea>
        </div>
        <p class="tc">
          <input type="submit" value="提交反馈" id='proposalid'/>
        </p>

        <div class="mini-aside-succ pa none">
          <p>感谢您的反馈与建议，我们会尽快优化调整。欢迎再次访问。</p>
          <button type="button">确定</button>
        </div>
        <div class="mini-aside-tips none">请选择主题/内容</div>
      </form>
    </li>
    <li data-nav="mini-hd">我的衣柜</li>
    <li data-nav="mini-wea">查看天气</li>
    <li data-nav="mini-cate">个性挑选</li>
    <li data-nav="top" class="mini-gotop">回到顶部</li>
  </ul>
  <div class="mini-succ mini-pop tc pf none">
    <a href="javascript:;" class="mini-succ-close mini-btn">关闭</a>
    <h2>您的衣服已经成功加入优衣柜中</h2>
    <h3>快去搭搭看！</h3>
    <p>
      <a href="javascript:;" class="mini-succ-cancel">继续选衣</a>
      <a href="javascript:;" class="mini-succ-enter">进入优衣柜</a>
    </p>
  </div>
  <div class="mini-fail mini-pop tc pf none">
    <a href="javascript:;" class="mini-succ-close mini-btn">关闭</a>
    <h2>您曾经加入过这件衣物哦</h2>
    <h3>快去搭搭看！</h3>
    <p>
      <a href="javascript:;" class="mini-succ-cancel">继续选衣</a>
      <a href="javascript:;" class="mini-succ-enter">进入优衣柜</a>
    </p>
  </div>

  <!-- 半透明浮层 -->
  <?php if($is_allow_register == 0): ?><div class="mini-mask pf none"></div>
  <?php else: ?>
	<div class="mini-mask pf"></div><?php endif; ?>
  <!-- 注册1、2 -->
	<form class="mini-register mini-pop pf <?php if($is_allow_register == 0): ?>none<?php endif; ?>">
	<a href="javascript:;" class="mini-form-close mini-btn">关闭</a><!-- David -->
		<h3>3秒钟快速注册</h3>
		<div class="mini-control">
		  <label class="mini-label">手机号码</label>
      <input class="mini-control-text smaller" type="text" id="mobile" name="mobile" placeholder="请填写手机号码，作为用户名使用" />
      <a href="javascript:;" class="mini-btns tc js-verifying_code" id="getCode" onclick="getFuncCode();" style="padding:6px 14px;">获取验证码</a>
	  <a href="javascript:;" class="mini-btns tc js-verifying_code" id="getNextCode" style="display:none;padding:6px 13px;" onclick="getFuncCode();">再次获取</a>
	  <a href="javascript:;" class="mini-btns tc js-verifying_code" id="getTimeCode" style="display:none;">再次获取(<span id="time_show">180</span>)</a>
      <!-- <a href="javascript:;" class="mini-btns tc">再次获取(60)</a> -->
      <!--<span class="verifying_tips true"></span>-->
		  <!-- <input class="mini-control-text" type="text" id="user_name" placeholder="5-25位字符：支持中英文、数字、“-”、“_”"> -->
		</div>
		<div class="mini-control">
		  <label class="mini-label">验证码</label>
      <input class="mini-control-text verifying_code" id="verifying_code" name="verifying_code" type="text" placeholder="请查收手机短信，填写短信中的验证码">
      <!--<span class="verifying_tips false"></span>-->
		  <!-- <input class="mini-control-text" type="password" id="password" placeholder="6-16位字符，区分大小写"> -->
		</div>
    <div class="mini-control clearfix">
      <span class="fl mr10" style="color:#bbb;">若长时间未收到验证码，可选择稍后验证</span>
      <label class="nomargin"><input class="js-checked fl" type="checkbox" id="js-checked" name="js-checked">稍后验证</label>
    </div>

		<div class="mini-control">
      <label class="mini-label">设置密码</label>
      <input class="mini-control-text" id="password" name="password" type="password" placeholder="6-16个字符，区分大小写">
    </div>
    <div class="mini-control">
		  <label class="mini-label">确认密码</label>
		  <input class="mini-control-text" type="password" id="re_password" placeholder="请再次输入密码">
		</div>
		<div class="mini-control">
		  <label class="mini-label">淘宝账号</label>
      <label><input name="mini-rel" id="checkbox-phone" type="radio" checked="checked" class="fl">关联获取收件人信息</label>
		  <label><input name="mini-rel" type="radio" id="checkbox-none" class="fl" value="3" />不做关联</label>
		</div>
		<div class="mini-control" id="reg-phone">
		  <label class="mini-label">淘宝登录名</label>
      <input class="mini-control-text" type="text" id="taobao_name" placeholder="关联淘宝登录名，优惠券等你拿">
		</div>
		<!--
		<div class="mini-control" id="reg-taobao">
		  <label class="mini-label">淘宝登录名</label>
		  <input class="mini-control-text" type="text" id="taobao_name" placeholder="关联淘宝帐号及收件人信息，优惠券送到手">
		</div>-->
		<div class="mini-control">
		  <p class="mini-control-tips fr mr25" id="msg_error"></p>
		  <label class="nomargin"><input id="t_agree" checked="checked" class="fl" type="checkbox" value="1">已阅读 <a class="mini-clause-btn" href="javascript:;">隐私条款</a></label>
		</div>
		<div class="mini-control tr">
		  <input type="button" onclick="return do_register();" value="注册并登录" class="mini-reg-submit mr25" />
		  <a href="javascript:;" class="mini-reg-login fl">直接登录</a>
		</div>
	</form>
  
  <!-- 注册3、4 -->
  <!-- <form class="mini-register mini-pop pf none" style="height:auto;min-height:0;">
    <h3>3秒钟快速注册</h3>
    <div class="mini-control">
      <label class="mini-label">用户名</label>
      <input class="mini-control-text" type="text" placeholder="5-25位字符：支持中英文、数字、“-”、“_”">
    </div>
    <div class="mini-control">
      <label class="mini-label">密码</label>
      <input class="mini-control-text" type="password" placeholder="6-16位字符，区分大小写">
    </div>
    <div class="mini-control">
      <label class="mini-label">确认密码</label>
      <input class="mini-control-text" type="password" placeholder="请再次输入密码">
    </div>
  
    <div class="mini-control">
      <label class="mini-label">关联手机</label>
      <label><input name="mini-rel" id="checkbox-phone" type="radio" class="fl">关联手机号码</label>
      <label><input name="mini-rel" id="checkbox-none" type="radio" checked="checked" class="fl">不做关联</label>
    </div>
    <div class="mini-control">
      <p class="mini-control-tips fr mr25">该用户名已被占用</p>
      <label class="nomargin"><input checked="checked" class="fl" type="checkbox">已阅读 <a href="javascript:;" class="mini-clause-btn">隐私条款</a></label>
    </div>
    <div class="mini-control tr">
      <input type="submit" value="注册并登录" class="mini-reg-submit mr25" />
      <a href="javascript:;" class="mini-reg-login fl">直接登录</a>
    </div>
  </form> -->



  <!-- 注册提交成功！ -->
  <div class="mini-reg-succ mini-pop pf none">
    <h3>注册提交成功！</h3>
    <p>请发送短信“优衣柜”至号码10690183668，激活帐号。激活帐号后，可享用优衣库不定期发放的优惠券。</p>
    <button class="mini-reg-check">查看激活状态</button>
  </div>


  <!-- 激活1 -->
  <form class="mini-activate mini-pop pf smaller tl none" id="activate_account">
    <h3>您注册的手机号为：</h3>
    <p>
		<span class="mr5"><?php echo ($user['mobile']); ?></span>
		<input type="hidden" id="userMobileCode" name="userMobileCode" value="<?php echo ($user['mobile']); ?>" />
		<a href="javascript:;" class="mini-btns js-verifying_code" id="getCode2" onclick="getFuncCode2()" style="padding:6px 12px;">获取验证码</a>
	    <a href="javascript:;" class="mini-btns tc js-verifying_code" id="getNextCode2" style="display:none;padding: 6px 23px;" onclick="getFuncCode2()">再次获取</a>
	    <a href="javascript:;" class="mini-btns tc js-verifying_code" id="getTimeCode2" style="display:none;">再次获取(<span id="time_show2">180</span>)</a>
	</p>
    <!-- 激活2 -->
    <!-- <p><span class="mr25">15777777777</span><a href="javascript:;" class="mini-btns">再次获取(<span>60</span>)</a></p> -->
    <div class="mini-control">
      <label class="mini-label" style="width:50px;">验证码</label>
      <input class="mini-control-text smaller" id="verCode" name="verCode" type="text" style="width:138px;">
    </div>
    <!-- <input type="submit" value="注册并登录" class="mini-reg-submit mr25" /> -->
    <div class="mt20" style="margin-left:50px;">
      <a href="javascript:;" onclick="activate_succ()" class="mini-btns js-click" data-id="#activate_succ">立即激活</a>
    </div>
  </form>
  <!-- 激活成功 -->
  <div class="mini-activate-succ mini-pop pf smaller none">
    <h3>恭喜您，激活成功！</h3>
    <button>确定</button>
  </div>

  <!-- 激活失败  -->
  <div class="mini-activate-fail mini-pop pf smaller none">
    <h4 class="title"><img src="__TMPL__Public/images/mini/mini-tips_smaller.png" alt="">验证码输入错误<br>请核对您收到的验证码</h4>
    <!-- <p>关联手机号与激活手机号不相符，请重新发送。<br>请发送短信“优衣柜”至号码15000326906，激活帐号。</p> -->
    <button>确定</button>
  </div>

  <!-- 退出登录 -->
  <div class="mini-logout-confirm mini-pop pf none" id="logout">
    <h3>您确定要离开优衣柜吗？</h3>
    <p>您的帐号尚未激活，直接退出将丢失所有衣柜中保存的衣物<br>请点击“激活账号”验证您手机号码，享有优衣柜保存功能</p>
    <p class="mt20">
      <a href="<?php echo U('Index/loginout');?>" class="mini-btns mini-btns_gray">退出登录</a>&nbsp;&nbsp;&nbsp;
      <a href="javascript:;" class="mini-btns js-click" data-id="#activate_account">激活账号</a>
    </p>
  </div>

	
  <!-- 激活流程中 -->
  <!--
  <div class="mini-activate mini-pop pf none">
    <h3>激活流程中</h3>
    <img src="__TMPL__Public/images/mini/mini-loading.gif" alt="">
    <p>大约需要30秒，请等待</p>
  </div>
  -->

  <!-- 激活超时，请点击刷新 -->
  <div class="mini-activate-timeout mini-pop pf none">
    <h3>激活超时，请点击刷新</h3>
    <button onclick="return do_refresh_relate();">刷新激活状态</button>
  </div>

  <!-- 抱歉，未能成功激活 -->
  <div class="mini-activate-fail2 mini-pop pf none">
    <h3>抱歉，未能成功激活。</h3>
    <p>关联手机号与激活手机号不相符，请重新发送。<br>请发送短信“优衣柜”至号码10690183668，激活帐号。</p>
    <button>刷新激活状态</button>
  </div>

  <!-- 恭喜你，帐号激活成功 -->
  <div class="mini-activate-succ2 mini-pop pf none">
    <h3>恭喜你，帐号激活成功！</h3>
    <button id="mini-activate-succ">马上进入优衣库</button>
  </div>

  <!-- 帐号激活提醒 -->
  <!---
  <div class="mini-activate-notice mini-pop pf  <?php if($is_active == 0): ?>none<?php endif; ?>">
    <h3>帐号激活提醒</h3>
    <p>发送“优衣柜”至以下号码，激活帐号。<br>立即享用优衣库不定期发放的线上优惠券。<br>
      <span style="color:#00a1e9;">移动用户：15000327770 <br>
      联通、电信用户：10690183668</span> 
    </p>
    <button id="activeButton" name="activeButton" onclick="return do_relate();">查看激活状态</button>
  </div>
 -->
  <!-- 关联手机号码 -->
  <!--
  <form class="mini-relate mini-pop pf <?php if($is_phone == 0): ?>none<?php endif; ?>">
    <h3>关联手机号码</h3>
    <p>马上关联手机号码，尊享优衣柜搭搭看所有功能。</p>
    <div class="mini-control">
      <label class="mini-label">用户名</label>
      <input class="mini-control-text" type="text" id="a_user_name" name="a_user_name" value="<?php echo ($uniq_user_name); ?>" disabled="disabled">
    </div>
    <div class="mini-control">
      <label class="mini-label">密码</label>
      <input class="mini-control-text" type="password" value="password" disabled="disabled">
    </div>
    <div class="mini-control">
      <label class="mini-label">关联手机</label>
      <label><input type="radio" checked="checked" class="fl">关联手机号码</label>
    </div>
    <div class="mini-control" id="reg-phone">
      <label class="mini-label">手机号码</label>
      <input class="mini-control-text" id="a_mobile" name="a_mobile" type="text" placeholder="关联手机号，取回密码，并凭短信享优惠">
    </div>
    <div class="mini-control">
      <p class="mini-control-tips fr" id="active_mobile_msg"></p>
      <label class="nomargin"><input id="activeAgree" checked="checked" class="fl" type="checkbox">已阅读 <a href="javascript:;" class="mini-clause-btn">隐私条款</a></label>
    </div>
    <div class="mini-control tr">
      <input type="button" id="activeButton" name="activeButton" value="建立关联" class="mini-relate-submit" onclick="return do_active();" />
    </div>
  </form>
	-->
  <!-- 关联手机成功，请马上激活帐号 -->
  <div class="mini-relate-notice mini-pop pf none">
    <h3>关联手机成功，请马上激活帐号</h3>
    <p>发送“优衣柜”至以下号码，激活帐号。<br>立即享用优衣库不定期发放的线上优惠券。<br>
      <span style="color:#00a1e9;">移动用户：15000327770 <br>
      联通、电信用户：10690183668</span> 
    </p>
    <input type="hidden" id="relateMobile" name="relateMobile" value="<?php echo ($mobile); ?>" />
    <button id="relateButton" name="relateButton" onclick="return do_relate();">刷新激活状态</button>
  </div>
  
  <!-- 隐私权保护声明 -->
  <div class="mini-clause mini-pop pf none">
    <h3>隐私声明</h3>
    <div>
      <p>优衣柜（【uniqlo.bigodata.com.cn】，以下称“本网站”）隐私保护声明系本网站保护用户个人隐私的承诺。鉴于网络的特性，本网站将无可避免地与您产生直接或间接的互动关系，故特此说明本网站对用户个人信息所采取的收集、使用和保护政策，请您务必仔细阅读：</p>
      <b>一、非个人化信息</b>
      <p>我们将通过您的IP地址来收集非个人化的信息，例如您的浏览器性质、操作系统种类、给您提供接入服务的ISP的域名等，以优化在您计算机屏幕上显示的页面。通过收集上述信息，我们亦进行客流量统计。</p>
      <p>这些无关个人身份的信息能帮助我们辨别优衣柜最受欢迎的地区并确定我们推广活动的有效性。此外，我们也可能将这些信息披露给我们的广告客户，使他们知道点击他们广告的人数。</p>
      <b>二、个人资料</b>
      <p>当您在优衣柜进行用户注册登记、网上购物等活动时，在您的同意及确认下，本网站将通过注册表格、订单等形式要求您提供一些个人资料。这些个人资料包括：</p>
      <p>1、个人识别资料：如姓名、性别、年龄、出生日期、电话、手机号码、通信地址、电子邮件地址等。</p>
      <p>2、个人背景： 职业、教育程度、收入状况、婚姻、家庭状况。</p>
      <p>请了解，在未经您同意及确认之前，本网站不会将您为参加本网站之特定活动所提供的资料利用于其它目的。唯有按下列第六条规定的应政府及法律要求披露时不在此限。优衣柜收集这类关于个人身份的信息主要是为了其注册成员能够更容易和更满意地使用优衣柜的网页。我们的目标是向所有的互联网用户提供愉快、有益、有趣的上网经历。而这些个人信息有助于我们实现这一目标。</p>
      <p>所有的注册成员和访问者应该知道，当他们在其他网上公开场合披露其个人身份信息，该等信息可能会被他人收集并用来向他们发送未经邀约的电子邮件。</p>
      <b>三、信息安全</b>
      <p>1、本网站将对您所提供的资料进行严格的管理及保护，本网站将使用相应的技术，防止您的个人资料丢失、被盗用或遭篡改。</p>
      <p>2、本网站在必要时委托专业技术人员代为对该类资料进行电脑处理，以符合专业分工之要求。如本网站将电脑处理之通知送达予您，而您未在通知规定的时间内主动明示反对，本网站将推定您已同意。惟在其后您仍然有权如下述第四条第1款第（4）条之规定，请求停止电脑处理。</p>
      <b>四、用户权利</b>
      <p>1、您对于自己的个人资料享有以下权利：</p>
      <p>（1）随时查询及请求阅览；</p>
      <p>（2）随时请求补充或更正；</p>
      <p>（3）随时请求删除；</p>
      <p>（4）请求停止电脑处理及利用。</p>
      <p>2、优衣柜为其用户提供的网上游戏项目，为了参加抽签，我们通常要求申请者在联系方法(通讯地址和电话)之外，还要根据其个人兴趣填写表格。此类信息被优衣柜用来累积其用户的数据。如果用户不想提供所要求的信息和参加比赛，这完全是用户的决定。</p>
      <p>3、用户是唯一对自己的密码及其他帐户信息负有保密责任的人。当你在线时，请小心负责。</p>
      <p>4、针对以上权利，本网站为您提供相关服务，您可以发送电子邮件至：【<a href="mailto:u@BIGOData.com.cn">u@BIGOData.com.cn</a>】</p>
      <b>五、限制利用原则</b>
      <p>本网站惟在符合下列条件之一，方对收集之个人资料进行必要范围以外之利用：</p>
      <p>1、已取得您的书面同意；</p>
      <p>2、为免除您在生命、身体或财产方面之急迫危险；</p>
      <p>3、为防止他人权益之重大危害；</p>
      <p>4、为增进公共利益，且无害于您的重大利益。</p>
      <b>六、个人资料之披露</b>
      <p>当政府机关依照法定程序要求本网站披露个人资料时，本网站将根据执法单位之要求或为公共安全之目的提供个人资料。在此情况下之任何披露，本网站均得免责。</p>
      <b>七、未成年人隐私权的保护</b>
      <p>1、本网站将建立和维持一合理的程序，以保护未成年人个人资料的保密性及安全性。本网站郑重声明：任何16岁以下的未成年人参加网上活动应事先得到家长或其法定监护人（以下统称为"监护人"）的可经查证的同意。</p>
      <p>2、监护人应承担保护未成年人在网络环境下的隐私权的首要责任。</p>
      <p>3、本网站收集未成年人的个人资料，仅为回覆未成人特定要求的目的，一旦回复完毕即从记录中删除，而不会保留这些资料做进一步的利用。</p>
      <p>4、未经监护人之同意，本网站将不会使用未成年人之个人资料，亦不会向任何第三方披露或传送可识别该未成年人的个人资料。本网站如收集监护人或未成年人的姓名或其它网络通讯资料之目的仅是为获得监护人同意，则在经过一段合理时间仍未获得同意时，将主动从记录中删除此类资料。</p>
      <p>5、若经未成人之监护人同意，本网站可对未成年人之个人资料进行收集，本网站将向监护人提供：</p>
      <p>（1）审视自其子女或被监护人收集之资料的机会；</p>
      <p>（2）拒绝其子女或被监护人的个人资料被进一步的收集或利用的机会；</p>
      <p>（3）变更或删除其子女或被监护人个人资料的方式。</p>
      <p>6、监护人有权拒绝本网站与其子女或被监护人做进一步的联络。</p>
      <p>7、本网站收集未成年人的个人资料，这些资料只是单纯作为保护未成年人参与网络活动时的安全，而非作为其它目的之利用。本网站保证不会要求未成年人提供额外的个人资料，以作为允许其参与网上活动的条件。</p>
      <b>八、Cookies</b>
      <p>1、Cookies是指一种技术，当使用者访问设有Cookies装置的本网站时，本网站之服务器会自动发送Cookies至阁下浏览器内，并储存到您的电脑硬盘内，此Cookies便负责记录日后您到访本网站的种种活动、个人资料、浏览习惯、消费习惯甚至信用记录。</p>
      <p>2、运用Cookies技术，本网站能够为您提供更加周到的个性化服务。本网站将会运用Cookies追访您的购物喜好，从而向您提供感兴趣的信息资料或储存密码，以便您造访本网站时不必每次重复输入密码。</p>
      <b>九、免责</b>
      <p>除上述第六条之规定属免责外，下列情况时本网站亦毋需承担任何责任：</p>
      <p>1、由于您将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人资料泄露。</p>
      <p>2、任何由于计算机问题、黑客政击、计算机病毒侵入或发作、因政府管制而造成的暂时性关闭等影响网络正常经营之不可抗力而造成的个人资料泄露、丢失、被盗用或被窜改等。</p>
      <p>链接</p>
      <p>3、优衣柜的网页上有与其他网站网页的链接，包括旗帜广告和网页上的其他广告。优衣柜对其他任何网站的内容、隐私政策或运营，或经营这些网站的公司的行为概不负责。在向这些与优衣柜链接的网站提供个人信息之前，请查阅它们的隐私政策。</p>
      <p>4、由于与本网站链接的其它网站所造成之个人资料泄露及由此而导致的任何法律争议和后果。</p>
      <p>本网站之保护隐私声明的修改及更新权均属于优衣柜<br>联络方式为：【<a href="mailto:u@BIGOData.com.cn">u@BIGOData.com.cn</a>】</p>
    </div>
    <p class="tc"><button>关闭</button></p>
  </div>

  <!-- 登录 -->
  <form class="mini-login mini-pop pf none">
  <a href="javascript:;" class="mini-form-close mini-btn" >关闭</a> <!-- David -->
    <h3>登录</h3>
    <div class="mini-control">
      <label class="mini-label">用户名</label>
      <input type="text" class="mini-control-text" id="d_user_name" placeholder="手机号码/淘宝登录名" />
    </div>
    <div class="mini-control">
      <label class="mini-label">密码</label>
      <input type="password" class="mini-control-text" id="d_password" placeholder="请输入密码" />
    </div>
    <div class="mini-control tr">
      <a href="javascript:;" class="mini-login-fetch">忘记密码</a>
      <label class="nomargin"><input checked="checked" class="fl" type="checkbox" id="remember_login">记住账号</label>
    </div>
    <div class="mini-control tr">
      <p class="mini-control-tips" id="login_error_msg"></p>
    </div>
    <div class="mini-control tr">
      <input type="button" value="登录" onclick="return do_login();" class="mini-login-submit" />
      <a href="javascript:;" class="mini-login-reg fl">3秒快速注册</a>
    </div>
  </form>

  <!-- 找回密码 -->
  <form class="mini-fetch mini-pop pf none">
  <a href="javascript:;" class="mini-form-close mini-btn" >关闭</a> <!-- David -->
    <h3>找回密码</h3>
    <div class="mini-control">
      <label class="mini-label">手机号码</label>
      <input type="text" class="mini-control-text" placeholder="请填写您注册用的手机号码" id="f_mobile" name="f_mobile" />
    </div>
    <!-- <div class="mini-control">
      <label class="mini-label">淘宝登录名</label>
      <input type="text" class="mini-control-text" placeholder="请填写您关联的淘宝登录名" id="f_user_name" name="f_user_name" />
    </div> -->
    <div class="mini-control">
      <label class="mini-label">验证码</label>
      <input type="text" maxlength="5" class="mini-control-text" placeholder="请填写图片中的字符，不区分大小写" id="verify" />
    </div>
    <div class="mini-control">
      <label class="mini-label"></label>
      <img id="verifyImg" src="__APP__/Login/verify/" class="fl" alt="">
      <a href="javascript:;" class="mini-code-refresh fl" onclick="fleshVerify()" >看不清，换张图片？</a>
    </div>
    <div class="mini-control tr">
      <p class="mini-control-tips" id="f_error_msg"></p>
    </div>
    <div class="mini-control tr">
      <input type="button" onclick="return do_find_pwd();" value="提交" class="mini-fetch-submit" />
      <a href="javascript:;" class="mini-fetch-back fl">返回</a>
    </div>

    <div class="mini-fetch-succ mini-pop tc pa none">
      <p>密码将发送至您的手机请注意查收</p>
      <button type="button">确定</button>
    </div>
  </form>

  <!-- 修改密码 -->
  <form class="mini-change-password pa none">
    <a href="javascript:;" class="mini-change-close mini-btn"></a>
    <span class="mini-btn"></span>
    <h3>修改密码</h3>
    <div class="mini-control">
      <label>
        请输入旧密码
        <input type="password" id="c_old_password" placeholder="6-16位字符，区分大小写">
      </label>
    </div>
    <div class="mini-control">
      <label>
        请输入新密码
        <input type="password" id="c_new_password" placeholder="6-16位字符，区分大小写">
      </label>
    </div>
    <div class="mini-control">
      <label>
        请确认新密码
        <input type="password" id="c_reg_new_password" placeholder="请再次输入密码">
      </label>
    </div>
    <p class="mini-control-tips" id="pwd_error_msg"></p>
    <input type="button" onclick="return change_pwd();" value="提交" class="mini-change-submit" />

    <div class="mini-change-succ tc pa none">
      <p>密码修改成功</p>
      <button type="button">确定</button>
    </div>
  </form>

</div>
  
<div class="mt30 mb20 tc">
  <p>2014&copy; Uniqlo.BIGOData.com.cn</p>
  <p>沪ICP备13035368号 <a href="javascript:;" class="mini-clause-btn">隐私条款</a></p>
</div>
<script type='text/javascript'>
//性别对应的标记
var wclist = '<?php echo ($wclist); ?>';
var wflist = '<?php echo ($wflist); ?>';
var mclist = '<?php echo ($mclist); ?>';
var mflist = '<?php echo ($mflist); ?>';
var cclist = '<?php echo ($cclist); ?>';
var cflist = '<?php echo ($cflist); ?>';
var mcarr = '<?php echo ($mcarr); ?>';//all时候的场合
var mfarr = '<?php echo ($mfarr); ?>';
</script>
<script type="text/javascript" src="__TMPL__Public/js/jquery.js"></script>
<script type="text/javascript" src="__TMPL__Public/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="__TMPL__Public/js/citys.js"></script>
<script type="text/javascript" src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js"></script>
<script type="text/javascript" src="__TMPL__Public/js/nio-weather.js"></script>
<script type="text/javascript" src="__TMPL__Public/js/LinkageSelect/LinkageSelect.js"></script>
<script type="text/javascript" src="__TMPL__Public/js/LinkageSelect/location.js"></script>
<script type="text/javascript" src="__TMPL__Public/js/main.js"></script>
<script type="text/javascript" src="__TMPL__Public/js/reg.js"></script>
<script type="text/javascript">
var gurl = '<?php echo U('Index/delg');?>';
var buyurl = '<?php echo U('Index/addlove');?>';
var addda = '<?php echo U('Index/getdapeijian');?>';
var getgood = '<?php echo U('Index/ajaxgood');?>';
var imgpath = '__TMPL__Public';
var goodurl = '<?php echo U('Index/getgood');?>';
var addwarurl = '<?php echo U('Index/addwar');?>';
var cityn = '<?php echo ($cityn); ?>';
var provi = '<?php echo ($provi); ?>';
var sendurl = '<?php echo ($uniurl); ?>';
var addpropurl = '<?php echo U('Lea/addlea');?>';
var registerurl = '<?php echo U('Login/register');?>';
var findpwdurl = '<?php echo U('Login/forget_pwd');?>';
var changepwdurl = '<?php echo U('Login/change_pwd');?>';
var activephone = '<?php echo U('Login/active_phone');?>';
var activesucc = '<?php echo U('Login/activate_succ');?>';
var ckeckuserurl = '<?php echo U('Login/check_user_exists');?>';
var ckeckmobileurl = '<?php echo U('Login/check_mobile_exists');?>';
var ckeckusermobileurl = '<?php echo U('Login/check_user_mobile_exists');?>';
var loginurl = '<?php echo U('Login/login');?>';
var activeurl = '<?php echo U('Login/active');?>';
var relateurl = '<?php echo U('Login/relate');?>';
$(function(){
  var miniMask = $('div.mini-mask')
	$('#mini-activate-succ').click(function(){
		$('.mini-activate-succ').hide();
    miniMask.hide();
	})
	window.imgpath = imgpath;
	$.weather.init({
		imgpath : imgpath,
		city : cityn || null,
 		callback: function(city, temper, info){
        var avg = getavg(temper.high,temper.low);
 			$.weather.avg = avg;
			$.weather.getgurl = goodurl;
		// var pron,cookcity;
		//     cookcity = provi;
		// if(cookcity){
		// 	pron = provi;
		// }else{
		// 	pron = remote_ip_info.province;
		// }
    $.pron = provi ? provi : remote_ip_info.province;

    $.uniqlo.index.gender.find('a').first().click()
			// $.post(getgood,{tem:avg,pro:pron},function(data,status){
			// var da = eval("("+data+")");
			// if(da.ustr){
   //           $('#upc').html(da.ustr);
			// }else{
   //           $('#upc').html('');      
			// }
			// if(da.dstr){
   //            $('#downc').html(da.dstr);
			// }else{
   //          $('#downc').html('');
			// }
			// $.uniqlo.kvSlider();
			// if(!da.ustr && !da.dstr){
			// $('#tishi').css('display','block');
			// }else{
   //           $('#tishi').css('display','none');
			// 	}
			
			// });    
		}
 });
 
 $.uniqlo.index.week.on('click', 'li', function(){                  // 首页天气切换
      var that = $(this)
      $.uniqlo.index.togClass(that, 'mini-checked')
      $.weather.init({
        index : that.index() + 1,
        imgpath : window.imgpath,
  		callback: function(city, temper, info){
      var avg = getavg(temper.high,temper.low);
 			$.weather.avg = avg;
			$.post(goodurl,{
			tem : avg,
		    cid : $.uniqlo.occasion,
		    sid : $.weather.sex,
		    tid : $.weather.set,
			fid : $.uniqlo.fid,
			zid : $.uniqlo.zid
			},function(data,status){
			var da = eval("("+data+")");
			if(da){
	if(da.flag1=='p'){
	if($.weather.set==1){
	if(da.ustr){
	$('#upc').html(da.ustr);
	}
	if(da.dstr){
	$('#downc').html(da.dstr);
	}
	}else{
	$('#upc').html(da.ustr);
	$('#downc').html(da.dstr);	
	}
	}
    if(da.fl==1){
	$('#tishi').css('display','none');
	$('#qtm').removeClass('none');
	}else{
	$('#tishi').css('display','none');
	$('#qtm').addClass('none');
	}
	if(da.flag=='t'){
     $('#taoz').html(da.tstr);
	}
	$.uniqlo.kvSlider();
	if($.weather.set==1){
	if(!da.ustr && !da.dstr && !da.tstr){
	$('#tishi').css('display','block');
	}else if(da.tstr){
	$('#tishi').css('display','none');	
	}
	}
	/*else{
	if(!da.ustr && !da.dstr){
	$('#tishi').css('display','block');
	}else{
	$('#tishi').css('display','none');	
	}		
	}*/
			
			}
			});   
		}       
      })
    }) 

    /* =============== close popup form =============== David */
    $(function(){
        var allpopform = {
            formregister: $('form.mini-register'),
            formlogin: $('form.mini-login'),
            formfetch: $('form.mini-fetch')
        }

        allpopform.formregister.on('click', 'a.mini-form-close', function(){
            allpopform.formregister.hide();
            miniMask.hide();
        })
        allpopform.formlogin.on('click', 'a.mini-form-close', function(){
            allpopform.formlogin.hide();
            miniMask.hide();
        })
        allpopform.formfetch.on('click', 'a.mini-form-close', function(){
            allpopform.formfetch.hide();
            miniMask.hide();
        })
    })
  /* =============== mini-aside =============== */

  !(function($){
    var aside = {
      msg : $('li.mini-aside-msg'),
      form: $('form.mini-aside-form'),
      formIsOpen: false,
      select: $('div.mini-select'),
      input: $('#mini-select'),
      options: $('ul.mini-options'),
      optionsIsOpen: false,
      succ : $('div.mini-aside-succ'),
      tips: $('div.mini-aside-tips')
    }

    aside.succ.on('click', 'button', function(){
      this.parentNode.style.display = 'none'
    })

    aside.msg.on('click', function(){
      aside.form.trigger(aside.formIsOpen? 'hidden' : 'shown')
    })

    aside.form.on('click', 'a.mini-form-close', function(){
      aside.form.trigger('hidden')
    }).on('click', function(e){
      e.stopPropagation()
    }).on('shown', function(){
      aside.form.show()
      // aside.msg.addClass('mini-msg-checked')
      aside.formIsOpen = true
      aside.select.text('请选择主题')
      aside.input.val('')
    }).on('hidden', function(){
      aside.form.hide()
      // aside.msg.removeClass('mini-msg-checked')
      aside.formIsOpen = false
    })

    aside.select.on('click', function(){
      aside.options.trigger(aside.optionsIsOpen? 'optionsHide' : 'optionsShow')
    })

    aside.options.on('optionsHide', function(){
      aside.options.hide()
      aside.optionsIsOpen = false
    }).on('optionsShow', function(){
      aside.options.show()
      aside.optionsIsOpen = true
    }).on('click', 'li', function(){
      var that = this
      aside.select.text(that.innerHTML)
      aside.input.val(that.id)
      aside.options.trigger('optionsHide')
    })
    //意见反馈 

    aside.form.submit(function(event){
      event.preventDefault();
      var minivalue = aside.input.val();
      var convalue = $('#propid').val();
      if(minivalue<=0){
        aside.tips.html('请选择主题').show();
        return false;
      }
      convalue = stripHTML(convalue);
      if(convalue){
        $.post(addpropurl,{cate:minivalue,con:convalue},function(data,status){
          if(data){
            aside.succ.show();
            aside.tips.hide();
          }
          aside.input.val('');
          $('#propid').val('');
        });
      }else{
        aside.tips.html('请填写内容').show();
      }
    });

    aside.succ.on('click', function(){
      aside.succ.hide();
      aside.tips.hide();
      aside.form.hide();
      aside.formIsOpen = false;
    })
  }($))

  /* ============ login && logout ============ */   
   


})
 function getgoods(zid,fid,cid,sid,tid){
	$.post(goodurl,{
	tem : $.weather.avg,
	zid : zid,
	fid : fid,
	cid : cid,
	sid : sid,
	pro : $.pron,
	tid : tid
	},function(data,status){
	var da = eval("("+data+")");
	if(da){
	if(da.flag1=='p'){
	if(tid==1){
	if(da.ustr){
	$('#upc').html(da.ustr);
	}
	if(da.dstr){
	$('#downc').html(da.dstr);
	}
	}else{
	$('#upc').html(da.ustr);
	$('#downc').html(da.dstr);	
	}
	}
	 if(da.fl==1){
	 $('#tishi').css('display','none');
     $('#qtm').removeClass('none');
	}else{
	 $('#tishi').css('display','none');
     $('#qtm').addClass('none');
	}
	if(da.flag=='t'){
     $('#taoz').html(da.tstr);
	}
    $.uniqlo.kvSlider();
	if(tid==1){
	if(!da.ustr && !da.dstr && !da.tstr){
	$('#tishi').css('display','block');
	}else if(da.tstr){
	$('#tishi').css('display','none');	
	}
	}
	/*else{
	if(!da.ustr && !da.dstr){
	$('#tishi').css('display','block');
	}else{
	$('#tishi').css('display','none');	
	}		
	}*/
	}
	});
}
function delgo(id){
if(id>0){
$.post(gurl,{id:id},function(data,status){	
	});
}
}

function addbuy(id,flag){
	if(id>0){
	$.post(buyurl,{id:id,flag:flag},function(data,status){
		
	});
	}
}
//取出添加到大配件衣服的tag信息
function adddapei(id,po){
	if(id>0){
	 $.post(addda,{id:id,po:po},function(data,status){
	 $(po).siblings('.mini-cab-slide').find('ul').html(data);
	 $.uniqlo.cabSlider();
	 });
	}
}
function getavg(high,low){
	   var avg = Math.ceil((low+high)/2);
	   return avg;
}
function addwardrobe(id, onFailCallback, onSuccCallback){
  if(id>0){
    $.post(addwarurl,{id:id},function(data,status){
      if(data['code'] < 0){
			//未登录状态收入衣柜
			if(data['code'] == -1 ){
				$.Register.showMask().register.show();
			}else if(data['code'] == -2){
				onFailCallback();
			}else if(data['code'] == -3){
				$('.mini-mask').show();
				$('.mini-relate').show();
			}//else if(data['code'] == -4){
				//$('#relateMobile').val(data['msg']);
				//$('.mini-mask').show();
				//$('.mini-activate-notice').show();
			//}
	  }else{
			onSuccCallback();
      }
    });
  }
}
function sendcity(pro,city){
	$.post(sendurl+'index.php/Sendcity/sendpro',{proname:pro,cityname:city},function(data,status){
		
	});
}

function stripHTML(msg)
{
    return msg=msg.replace(/<[^>]*>/g, "");
}

!(function($){
	/*
	$('#user_name').blur(function(){
		var user_name	= $('#user_name').val();
		if(user_name){
			$.post(ckeckuserurl,{user_name:user_name},function(data){
				if(data['code'] < 0){
					$('#msg_error').html(data['msg']);
					return false;
				}
			});
		}
	});

	$('#mobile').blur(function(){
		var mobile	= $('#mobile').val();
		if(mobile){
			$.post(ckeckmobileurl,{mobile:mobile},function(data){
				if(data['code'] < 0){
					$('#msg_error').html(data['msg']);
					return false;
				}
			});  
		}
	});

	$('#f_mobile').blur(function(){
		var user_name	= $('#f_user_name').val();
		var mobile	= $('#f_mobile').val();
		if(user_name && mobile){
			$.post(ckeckusermobileurl,{user_name:user_name,mobile:mobile},function(data){
				if(data['code'] < 0){
					$('#f_error_msg').html(data['msg']);
					return false;
				}
			}); 
		}
	});
	*/
	$(".mini-activate-fail").click(function(){
		$('.mini-activate-fail').hide();
		$('.mini-activate').show();
	})
	$(".mini-activate-succ").click(function(){
		window.location.reload();
	})
}($))

function getFuncCode(){
	var mobile		= $('#mobile').val();
	if(!mobile){
		$('#msg_error').html('请填写手机号码');
		return false;
	}else{
		var mobile_reg = /^1[3|4|5|8][0-9]\d{4,8}$/;
		if(!mobile_reg.test(mobile)){  
			$('#msg_error').html('手机号码格式错误');
			return false;
		}else{
			$.post(ckeckmobileurl,{mobile:mobile},function(data){
				if(data['code'] < 0){
					$('#msg_error').html(data['msg']);
					return false;
				}else{
					$.post(activephone,{mobile:mobile},function(data){
						if(data['code'] < 0){
							$('#msg_error').html(data['msg']);
							clearInterval($.uniqlo.activePhone);
							return false;
						}else{
							$('#getTimeCode').css('display','inline');
							$('#getCode').css('display','none');
							$('#getNextCode').css('display','none');
							var i=0;
							$.uniqlo.activePhone = setInterval( function(){
								i++;
								if( 180 - i > 0 ){
									$('#time_show').html(180-i);
								}else{
									$('#time_show').html(180);
								}
								if( i > 179 ){
									$('#getTimeCode').css('display','none');
									$('#getNextCode').css('display','inline-block');
									clearInterval($.uniqlo.activePhone);
								}
							}, 1000);	
						}
					});  
				}
			});
		}
	}
}


function getFuncCode2(){
	var mobile		= $('#userMobileCode').val();
	$.post(activephone,{mobile:mobile},function(data){
		if(data['code'] < 0){
			clearInterval($.uniqlo.activePhone2);
			return false;
		}else{
			$('#getTimeCode2').css('display','inline');
			$('#getCode2').css('display','none');
			$('#getNextCode2').css('display','none');
			var i=0;
			$.uniqlo.activePhone2 = setInterval( function(){
				i++;
				if( 180 - i > 0 ){
					$('#time_show2').html(180-i);
				}else{
					$('#time_show2').html(180);
				}
				if( i > 179 ){
					$('#getTimeCode2').css('display','none');
					$('#getNextCode2').css('display','inline-block');
					clearInterval($.uniqlo.activePhone2);
				}
			}, 1000);	
		}
	});  
}


function activate_succ(){
	var verCode = $('#verCode').val();
	if(!verCode){
		//alert('验证码错误');return;
		$('.mini-activate-fail').show();
	}else{
		$.post(activesucc,{verCode:verCode},function(data){
			if(data['code'] > 0){
				$('.mini-activate-succ').show();
			}else{
				$('.mini-activate-fail').show();
			}
      $('.mini-activate').hide(); // 始终关闭激活层
		})
	}
}

function do_register(){
	var taobao_name	= $('#taobao_name').val();
	var password	= $('#password').val();
	var re_password = $('#re_password').val();
	var mobile		= $('#mobile').val();
	var c_phone = $('#checkbox-phone').val();
	var c_none = $('#checkbox-none').val();
	var verifying_code = $('#verifying_code').val();
	var isChecked = 1;
	/*
	if(!user_name){
		$('#msg_error').html('请填写用户名');
		return false;
	}else{
		var reg = /^[a-zA-Z0-9-_\u4e00-\u9fa5]{3,25}$/;
		if(!reg.test(user_name)){ 
			$('#msg_error').html('用户名格式错误');
			return false;
		}else{
			/*
			$.post(ckeckuserurl,{user_name:user_name},function(data){
				if(data['code'] < 0){
					$('#msg_error').html(data['msg']);
					return false;
				}
			});  
			
		}
	}
	*/
	if(!mobile){
		$('#msg_error').html('请填写手机号码');
		return false;
	}else{
		var mobile_reg = /^1[3|4|5|8][0-9]\d{4,8}$/;
		if(!mobile_reg.test(mobile)){  
			$('#msg_error').html('手机号码格式错误');
			return false;
		}
	}
	if(!password){
		$('#msg_error').html('请输入密码');
		return false;
	}else{
		if(password.length < 6 || password.length > 16){
			$('#msg_error').html('密码格式错误');
			return false;
		}
	}
	if(!re_password){
		$('#msg_error').html('请再次输入密码');
		return false;
	}else{
		if(password.length < 6 || password.length > 16){
			$('#msg_error').html('密码格式错误');
			return false;
		}
	}
	if(password != re_password){
		$('#msg_error').html('您两次输入的密码不一致');
		return false;
	}
	/*
	if($('#checkbox-phone').prop('checked')){
		if(!mobile){
			$('#msg_error').html('请填写手机号码');
			return false;
		}else{
			var mobile_reg = /^1[3|4|5|8][0-9]\d{4,8}$/;
			if(!mobile_reg.test(mobile)){  
				$('#msg_error').html('手机号码格式错误');
				return false;
			}else{
				$.post(ckeckmobileurl,{mobile:mobile},function(data){
					if(data['code'] < 0){
						$('#msg_error').html(data['msg']);
						return false;
					}
				});  
			}
		}
	}else{
		mobile = '';
	}
	*/
	if($('#checkbox-phone').prop('checked')){
		if(!taobao_name){
			$('#msg_error').html('请填写淘宝登录名');
			return false;
		}else{
			if(taobao_name.length < 5 || taobao_name.length > 25){
				$('#msg_error').html('淘宝登录名格式错误');
				return false;
			}
		}
	}else{
		taobao_name = '';
	}
	if($('#js-checked').prop('checked')==false){
		if(!verifying_code){
			$('#msg_error').html('请填写验证码');
			return false;	
		}
	}
	if($('#t_agree').prop('checked')==false){
		$('#msg_error').html('请勾选“已阅读隐私条款”');
		return false;
	}
	if($('#js-checked').prop('checked')){
		isChecked = 0;
	}
	$.post(ckeckmobileurl,{mobile:mobile},function(data){
		if(data['code'] < 0){
			$('#msg_error').html(data['msg']);
			return false;
		}else{
			if($('#checkbox-phone').prop('checked')){
				$.post(ckeckuserurl,{user_name:taobao_name},function(data){
					if(data['code'] < 0){
						$('#msg_error').html(data['msg']);
						return false;
					}else{
						$.post(registerurl,{taobao_name:taobao_name,password:password,mobile:mobile,verifying_code:verifying_code,isChecked:isChecked},function(data){
							if(data['code'] > 0){
								$('.mini-reg-submit').addClass('disabled');
								$('.mini-reg-submit').attr('disabled','disabled');
								//$('.mini-register').hide();
								//$('.mini-activate-notice').show();
								window.location.reload();
							}else{
								$('#msg_error').html(data['msg']);
								return false;
							}
						}); 
					}
				}); 
			}else{
				$.post(registerurl,{taobao_name:taobao_name,password:password,mobile:mobile,verifying_code:verifying_code,isChecked:isChecked},function(data){
					if(data['code'] > 0){
						$('.mini-reg-submit').addClass('disabled');
						$('.mini-reg-submit').attr('disabled','disabled');
						//$('.mini-register').hide();
						//$('.mini-activate-notice').show();
						window.location.reload();
					}else{
						$('#msg_error').html(data['msg']);
						return false;
					}
				}); 
			}
		}
	});	

}

function do_login(){
	var user_name	= $('#d_user_name').val();
	var password	= $('#d_password').val();
	if(!user_name || !password){
		$('#login_error_msg').html('请输入正确的用户名或密码');
		return false;
	}
	var is_remember_login = 0;
	if($('#remember_login').prop('checked')){
		is_remember_login = 1;
	}
	$.post(loginurl,{user_name:user_name,password:password,is_remember_login:is_remember_login},function(data){
		if(data['code'] > 0){
			window.location.reload()
		}else{
			$('#login_error_msg').html(data['msg']);
			return false;
		}
	});   
}

function do_find_pwd(){
	// var user_name	= $('#f_user_name').val();
	var mobile	= $('#f_mobile').val();
	var verify	= $('#verify').val();
	// if(!user_name){
	// 	$('#f_error_msg').html('请输入正确的淘宝登录名或手机号码');
	// 	return false;
	// }
	if(!mobile){
		$('#f_error_msg').html('请输入正确的手机号码');
		return false;
	}
	/*
	if(!verify){
		$('#f_error_msg').html('请填写验证码');
		return false;
	}
	*/
	$.post(findpwdurl,{mobile:mobile,verify:verify},function(data){
		if(data['code'] > 0){
			$('.mini-fetch-submit').addClass('disabled');
			$('.mini-fetch-submit').attr('disabled','disabled');
			$('.mini-fetch-succ').show();
		}else{
			$('#f_error_msg').html(data['msg']);
			return false;
		}
	});   
}

function change_pwd(){
	var old_password = $('#c_old_password').val();
	var new_password = $('#c_new_password').val();
	var reg_new_password = $('#c_reg_new_password').val();
	if(old_password.length < 6 || old_password.length > 16){
		$('#pwd_error_msg').html('请输入正确的旧密码');
		return false;
	}
	if(!new_password){
		$('#pwd_error_msg').html('请填写新密码');
		return false;
	}else{
		if(new_password.length < 6 || new_password.length > 16){
			$('#pwd_error_msg').html('密码格式错误');
			return false;
		}else{
			if(old_password == new_password){
				$('#pwd_error_msg').html('新密码不能与旧密码相同');
				return false;
			}
		}
	}
	
	if(!reg_new_password){
		$('#pwd_error_msg').html('请再次输入密码');
		return false;
	}else{
		if(new_password != reg_new_password){
			$('#pwd_error_msg').html('您两次输入的密码不一致');
			return false;
		}
	}
	$.post(changepwdurl,{old_password:old_password,new_password:new_password},function(data){
		if(data['code'] > 0){
			//$('.mini-change-password').hide();
			$('.mini-change-succ').show();
			$('#pwd_error_msg').html('');
		}else{
			$('#pwd_error_msg').html(data['msg']);
			return false;
		}
	});   
}

function do_active(){
	var a_user_name = $('#a_user_name').val();
	var a_mobile = $('#a_mobile').val();
	if(!a_mobile){
		$('#active_mobile_msg').html('请填写手机号码');
		return false;
	}else{
		var mobile_reg = /^1[3|4|5|8][0-9]\d{4,8}$/;
		if(!mobile_reg.test(a_mobile)){  
			$('#active_mobile_msg').html('手机号码格式错误');
			return false;
		}
	}

	if($('#activeAgree').prop('checked')==false){
		$('#active_mobile_msg').html('请勾选“已阅读隐私条款”');
		return false;
	}
	$.post(activeurl,{user_name:a_user_name,mobile:a_mobile},function(data){
		if(data['code'] > 0){
			$('.mini-relate').hide();
			$('.mini-relate-notice').show();
			$('#relateMobile').val(a_mobile);
		}else{
			$('#active_mobile_msg').html(data['msg']);
			return false;
		}
	}); 
}

function do_relate(){
	var relateMobile = $('#relateMobile').val();
	if(relateMobile){
		$.post(relateurl,{mobile:relateMobile},function(data){
			if(data['code'] > 0){
				$('.mini-activate-notice').hide();
				$('.mini-relate-notice').hide();
				$('.mini-activate-succ').show();
			}else{
				$('.mini-activate-notice').hide();
				$('.mini-relate-notice').hide();
				$('.mini-activate').show();
				var i=0;
				$.uniqlo.timerFind1 = setInterval( function(){
					// 查询数据库 成功？  clearInterval(find)
					$.post(relateurl,{mobile:relateMobile},function(data){
						if(data['code'] > 0){
							$('.mini-activate').hide();
							$('.mini-activate-succ').show();
							clearInterval($.uniqlo.timerFind1);
						}else{
							i++;
							if( i > 10 ){
								$('.mini-activate').hide();
								$('.mini-activate-timeout').show();	
								clearInterval($.uniqlo.timerFind1);
							}
						}
					});
				}, 3000);
				return false;
			}
		}); 
	}
}

function do_refresh_relate(){
	var relateMobile = $('#relateMobile').val();
	if(relateMobile){
		$('.mini-activate-timeout').hide();	
		$('.mini-activate').show();
		var i=0;
		$.uniqlo.timerFind2 = setInterval( function(){
			// 查询数据库 成功？  clearInterval(find)
			$.post(relateurl,{mobile:relateMobile},function(data){
				if(data['code'] > 0){
					$('.mini-activate').hide();
					$('.mini-activate-succ').show();
					clearInterval($.uniqlo.timerFind2);
				}else{
					i++;
					if( i > 10 ){
						$('.mini-activate').hide();
						$('.mini-activate-timeout').show();	
						clearInterval($.uniqlo.timerFind2);
					}
				}
			});
		}, 3000);
	}
}

function fleshVerify(){ 
    //重载验证码
    var time = new Date().getTime();
    document.getElementById('verifyImg').src= '__APP__/Login/verify/'+time;
}

</script>

<script type="text/javascript">
  $(function(){
    $('.js-checked').change(function(){
      if ($('.js-checked:checked').length == 1) {
        $('.verifying_code').attr('disabled',true)
      }else{
        $('.verifying_code').attr('disabled',false)
      };
    });
    $('.js-click').click(function(e){
      e.preventDefault;
      var idname = $(this).attr('data-id');
      $(idname).show().siblings('.mini-pop').hide();
      $('.mini-mask').show()
    });

    // $('.js-verifying_code').click(function(){
      // $(this).html('再次获取(<span id="dd">60</span>)');
      // if ($('#dd').length == 1 ) {
      // console.log($('#dd').length)

        // setInterval(function(){
        //   var s = document.getElementById('dd');

        //   if(s.innerHTML == 0){
        //     $('.js-verifying_code').html("获取验证码")
        //     return false;
        //     $('#dd').remove();
        //   }
        //   s.innerHTML = s.innerHTML * 1-1;
        //   console.log(s.innerHTML)
        // },1000);
      // };
    // });

  })
</script>
</body>
</html>