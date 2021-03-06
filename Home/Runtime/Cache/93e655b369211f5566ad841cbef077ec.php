<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="http://phoneicolor.networking.io/uniqlo/Home/Tpl/Public/css/uniqlo.css?45" />
<div class="uniqlo">
  <div class="index-wea mini-wea">
    <span class="mini-beta">测试版</span>
    <i id="nio-img" class="nio-0" title="天气"></i>
    <ul class="mini-wea-ul fl">
      <li class="clear">
        <strong id="nio-city" class="ft18" title="城市">城市</strong>
        <div class="mini-change-city fl pr">
          <a href="javascript:;" class="mini-change-btn fl" title="切换城市">切换</a>
          <form class="mini-city linkageselect pa none">
            <a href="javascript:;" class="mini-city-close mini-btn">关闭</a>
            <label>省份<select class="level_1"></select></label>
            <label>城市<select class="level_2"></select></label>
            <input type="submit" value="切换" />
          </form>
        </div>
        <span id="nio-date" title="2013年00月00日">2013年00月00日</span>
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
    <p id="nio-tip" class="mini-wea-tips fl" title="正在加载天气数据，请稍等...">正在加载天气数据，请稍等...</p>
  </div>

  <div class="index-box pr">

    <div class="index-bar pr tc">
      <div class="mini-gender-bin index-gender index-first-gender tc fl">
        <ul class="mini-gender fl">
          <li class="mini-gender-checked">
            <a href="javascript:;" id='0' class="mini-gender-all">U</a>
          </li>
          <li>
            <a href="javascript:;" id='1'class="mini-gender-women">WOMEN</a>
          </li>
          <li>
            <a href="javascript:;" id='2' class="mini-gender-men">MEN</a>
          </li>
          <li>
            <a href="javascript:;" data-page="index" class="mini-gender-kids" id='3'>KIDS BABY</a>
          </li>
        </ul>
      </div>
      <!-- <p class="mini-gender-tips pa none">你还可以点击套装，筛选查看居家类套装哦</p> -->
      <ul class="index-bar-place fl">
        <li class="index-p-0 index-p-checked" id='0'>全部</li>
        <li class="index-p-1" id='3_9'>商务</li>
		    <li class="index-p-1 index-p-kids none" id='__15'>上学</li>
        <li class="index-p-5" id='4_10_16'>逛街</li>
        <li class="index-p-3" id='7_13_19'>运动</li>
        <li class="index-p-4" id='8_14_20'>居家</li>
      </ul>
      <div class="mini-gender-bin index-gender tc fl">
        <div class="mini-gender fl pr">
          <a href="javascript:;" class="mini-gender-suit">套装</a>
          <div class="mini-gender-tips pa ft14 none">
            <b class="mini-gender-close mini-btn">关闭</b>
            <span class="mini-btn"></span>
            <p>您还可以点击“套装”，筛选查看家居套装噢</p>
          </div>
        </div>
      </div>
      
      <a href="http://phoneicolor.networking.io/uniqlo/mini.php" class="index-archor pa" target="_blank">
        <span class="mini-beta">测试版</span>
        <strong>去优衣柜搭搭</strong><br /><b>LET'S GO</b>
      </a>
    </div>

    <div id="nio-kv" class="index-bin pr" data-page="index">
      <p class="index-filter-fail pa none" id='qtm'>暂时没有符合条件的衣物，请试试其他选择吧</p>
      <div class="index-single mini-kv pr">
        <div class="mini-kv-slide pr" data-pos="#net-top">
          <a href="javascript:;" class="mini-kv-prev mini-btn">prev</a>
          <a href="javascript:;" class="mini-kv-next mini-btn">next</a>
          <div class="mini-kv-container">
            <ul id='upc'>

            </ul>
          </div>
        </div>

        <div class="mini-kv-slide pr" data-pos="#net-bot">
          <a href="javascript:;" class="mini-kv-prev mini-btn">prev</a>
          <a href="javascript:;" class="mini-kv-next mini-btn">next</a>
          <div class="mini-kv-container">
            <ul id='downc'>
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
              <li>
                
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="mini-kv-hover tc pa none">
        <p class="ft16">￥ <strong class="ft18">85.00</strong></p>
        <small>剩余库存 <span>129</span> 件</small>
        <a class="ft14" href="http://detail.tmall.com/item.htm?id=18942416200" target="_blank">【手机应用专享价】女装 羊毛混纺V领开衫10</a>
        <a href="javascript:;" class="mini-kv-add pa" target="_blank">收入衣柜</a>
      </div>
      
      <a href="javascript:;" class="mini-net-empty pa tc none" id='tishi'>
        <!-- <h3>很抱歉！</h3> -->
        <span>没有找到符合您需求的衣物<br>请试试其他选择</span>
      </a>
    </div>
  </div>
  <div class="index-box-btn pr">
    <a href="javascript:;" class="index-btn pa">收起</a>
  </div>

</div>
<script type="text/javascript" src="http://phoneicolor.networking.io/uniqlo/Home/Tpl/Public/js/jquery.js"></script>
<script type="text/javascript" src="http://phoneicolor.networking.io/uniqlo/Home/Tpl/Public/js/citys.js"></script>
<script type="text/javascript" src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js"></script>
<script type="text/javascript" src="http://phoneicolor.networking.io/uniqlo/Home/Tpl/Public/js/nio-weather.js"></script>
<script type="text/javascript" src="http://phoneicolor.networking.io/uniqlo/Home/Tpl/Public/js/LinkageSelect/LinkageSelect.js"></script>
<script type="text/javascript" src="http://phoneicolor.networking.io/uniqlo/Home/Tpl/Public/js/LinkageSelect/location.js"></script>
<script type="text/javascript" src="http://phoneicolor.networking.io/uniqlo/Home/Tpl/Public/js/main.js"></script>
<script type='text/javascript'>
var getgood = 'http://phoneicolor.networking.io/uniqlo/index.php/Index/ajaxgood';
var imgpath = 'http://phoneicolor.networking.io/uniqlo/Home/Tpl/Public';
var goodurl = 'http://phoneicolor.networking.io/uniqlo/index.php/Index/getgood';
var sendurl = '<?php echo ($uniurl); ?>';
var cityn = '<?php echo ($cityn); ?>';
//var provi = '<?php echo ($provi); ?>';
var provi = '';
$(function(){
	window.imgpath = imgpath;
	$.weather.init({
    imgpath : imgpath,
	city : cityn || null,
    callback: function(city, temper, info){
      var avg = getavg(temper.high,temper.low);
      $.weather.avg = avg;
      $.weather.getgurl = goodurl;
	  var pron,cookcity;
		cookcity = provi;
		if(cookcity){
			pron = provi;
		}else{
			pron = remote_ip_info.province;
		}
	var JSONP=document.createElement("script");  
    JSONP.type="text/javascript";  
    JSONP.src="http://phoneicolor.networking.io/uniqlo/index.php/Index/ajaxgood?callback=jsonpCallback&tem="+avg+"&pro="+pron;  
    document.getElementsByTagName("head")[0].appendChild(JSONP); 

      /*$.post(getgood,{tem:avg,pro:pron},function(data,status){
        var da = eval("("+data+")");
        if(da.ustr){
          $('#upc').html(da.ustr);
        }else{
          $('#upc').html('');
        }
        if(da.dstr){
          $('#downc').html(da.dstr);
        }else{
          $('#downc').html('');
        }
        $.uniqlo.kvSlider();
        if(!da.ustr && !da.dstr){
          $('#tishi').show();
        }else{
          $('#tishi').hide();
        }
      });*/
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
	var JSONP=document.createElement("script");  
    JSONP.type="text/javascript";  
    JSONP.src="http://phoneicolor.networking.io/uniqlo/index.php/Index/getgood?callback=jsonpCallback2&tem="+avg+"&cid="+$.weather.occasion+'&sid='+$.weather.sex+'&tid='+$.weather.set;  
    document.getElementsByTagName("head")[0].appendChild(JSONP); 

        /*$.post(goodurl,{
          tem : avg,
          cid : $.weather.occasion,
          sid : $.weather.sex,
          tid : $.weather.set			
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
            if(da.flag=='t'){
              $('#taoz').html(da.tstr);
            }
			if(da.fl==1){
			$('#tishi').css('display','none');
			 $('#qtm').removeClass('none');
			}else{
			 $('#tishi').css('display','none');
			 $('#qtm').addClass('none');
			}
			$.uniqlo.kvSlider();
            if($.weather.set==1){
              if(!da.ustr && !da.dstr && !da.tstr){
                $('#tishi').css('display','block');
              }else if(da.tstr){
                $('#tishi').css('display','none');	
              }
            }*/
			/*else{
              if(!da.ustr && !da.dstr){
                $('#tishi').show();
              }else{
                $('#tishi').hide();
              }		
            }*/
          /*}
        });*/
      }
    })
  })
})

function jsonpCallback(da){
        if(da.ustr){
          $('#upc').html(da.ustr);
        }else{
          $('#upc').html('');
        }
        if(da.dstr){
          $('#downc').html(da.dstr);
        }else{
          $('#downc').html('');
        }
        $.uniqlo.kvSlider();
        if(!da.ustr && !da.dstr){
          $('#tishi').show();
        }else{
          $('#tishi').hide();
        }
	}
function getgoods(cid,sid,tid){
	var JSONP=document.createElement("script");  
    JSONP.type="text/javascript";  
	if(cid==0 && sid==0){
		var pron,cookcity;
		cookcity = provi;
		if(cookcity){
			pron = provi;
		}else{
			pron = remote_ip_info.province;
		}
		JSONP.src="http://phoneicolor.networking.io/uniqlo/index.php/Index/ajaxgood?callback=jsonpCallback&tem="+$.weather.avg+"&pro="+cid;  
	}else{
		JSONP.src="http://phoneicolor.networking.io/uniqlo/index.php/Index/getgood?callback=jsonpCallback3&tem="+$.weather.avg+"&cid="+cid+'&sid='+sid+'&tid='+tid;  
	}
    document.getElementsByTagName("head")[0].appendChild(JSONP); 

	/*$.post(goodurl,{
   tem : $.weather.avg,
   cid : cid,
   sid : sid,
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
     if(da.flag=='t'){
       $('#taoz').html(da.tstr);
     }
	 if(da.fl==1){
	 $('#tishi').css('display','none');
     $('#qtm').removeClass('none');
	}else{
	 $('#tishi').css('display','none');
     $('#qtm').addClass('none');
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
   /*}

 });*/
}

function jsonpCallback2(da){
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
            if(da.flag=='t'){
              $('#taoz').html(da.tstr);
            }
			if(da.fl==1){
			$('#tishi').css('display','none');
			 $('#qtm').removeClass('none');
			}else{
			 $('#tishi').css('display','none');
			 $('#qtm').addClass('none');
			}
			$.uniqlo.kvSlider();
            if($.weather.set==1){
              if(!da.ustr && !da.dstr && !da.tstr){
                $('#tishi').css('display','block');
              }else if(da.tstr){
                $('#tishi').css('display','none');	
              }
            }
}
function jsonpCallback3(da){
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
     if(da.flag=='t'){
       $('#taoz').html(da.tstr);
     }
	 if(da.fl==1){
	 $('#tishi').css('display','none');
     $('#qtm').removeClass('none');
	}else{
	 $('#tishi').css('display','none');
     $('#qtm').addClass('none');
	}
	 $.uniqlo.kvSlider();
     if($.weather.set==1){
       if(!da.ustr && !da.dstr && !da.tstr){
         $('#tishi').css('display','block');
       }else if((!da.ustr || !da.dstr) && !da.tstr){
         $('#tishi').css('display','block');	
       }else if(da.tstr){
         $('#tishi').css('display','none');	
       }
     }
	}
function getavg(high,low){
  var avg = Math.ceil((low+high)/2);
  return avg;
}
function sendcity(pro,city){
	 var url = "http://phoneicolor.networking.io/uniqlo/mini.php/Sendcity/sendpro?callback=jsonpCallback&proname="+pro+"&cityname="+city;
    // 创建script标签，设置其属性
    var script = document.createElement('script');
    script.setAttribute('src', url);
    // 把script标签加入head，此时调用开始
    document.getElementsByTagName('head')[0].appendChild(script); 
}

function jsonpCallback4(da){
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
	if(da.flag=='t'){
     $('#taoz').html(da.tstr);
     $.uniqlo.kvSlider();
	}
	if($.weather.set==1){
	if(!da.ustr && !da.dstr && !da.tstr){
	$('#tishi').css('display','block');
	}else if(da.tstr){
         $('#tishi').css('display','none');	
       }
	}else{
	if(!da.ustr && !da.dstr){
	$('#tishi').css('display','block');
	}else{
	$('#tishi').css('display','none');	
	}		
	}
	}
</script>