<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo C('TITLE');?></title>
  <meta name="keywords" content="<?php echo C('KEYWORDS');?>" />
  <meta name="description" content="<?php echo C('DESCRIPT');?>" />
  <link rel="shortcut icon" href="/Public/home/img/1.png">
  <link rel="stylesheet" href="/Public/home/css/lenovo.css">
  <link rel="stylesheet" href="/Public/home/css/footer.css">
  <script src="/Public/home/js/jquery.js"></script>
  <script src="/Public/home/js/index.js"></script>
</head>
<body>
  <!-- 头 -->
<!-- 顶部 -->
<div class='nav'>
  <div class="top">
    <ul class="nav-1">
      <li><a href="/Lenovo_HouseHold_Index.aspx" target="_blank">个人及家用产品</a><span class="gang">|</span></li>
      <li><a href="/Lenovo_Commercial_Index.aspx" target="_blank">库商用产品</a><span class="gang">|</span></li>
      <li><a href="appserver.lenovo.com.cn/Lenovo_EnterPrise_Index.aspx" target="_blank">库企业级产品库</a><span class="gang">|</span></li>
      <li><a href="http://www.lenovovip.com.cn/" target="_blank">聚享汇会员</a><span class="gang">|</span></li>
      <li class='she'>
        <a href="javascript:">社交平台
            <span class="tou-one"></span>
          </a>
        <span class="gang" style="margin-left:18px">|</span>

        <ul class='menu'>
          <li><a href=""><span class="guanbo"></span>联想官方微博</a></li>
          <li><a href=""><span class="bo"></span>杨元庆微博</a></li>
          <li><a href=""><span class="wei"></span>联想官方微信</a></li>
          <li><a href=""><span class="tie"></span>百度贴吧联想吧</a></li>
          <li><a href=""><span class="bu"></span>联想兴趣部落</a></li>
          <li><a href=""><span class="qq"></span>联想qq空间</a></li>
          <li><a href=""><span class="gushe"></span>联想官方社区</a></li>
        </ul>
      </li>
      <li class="ji">
        <a href="javascript:">手机版</a>
        <span class="tou"></span>
        <ul class='shou'>
          <li>
            <span class="shou-tu"></span>
            <div class="shou-zi">联想商城客户端</div>
            <div class='shou-jian'>首次下单立减20元</div>
            <img src="/Public/home/img/2.jpg" alt="">
          </li>
          <div class="clear"></div>
        </ul>
      </li>
      <div class="clear"></div>
    </ul>
    <div class="nav-right">
      <ul>
        <li>
          <a style="position:relative" href="<?php echo U('Car/index');?>">购物车 
            <span class="guo">0</span>
            </a>
        </li>
        <li><a class="" href="<?php echo U('Login/reg');?>">注册</a><span class="gang">|</span></li>
        <li><a class="" href="<?php echo U('Login/index');?>">登陆</a><span class="gang">|</span></li>
      </ul>
    </div>
  </div>
</div>
<!-- 顶部图片 -->
<div class='container header'>
  <a href="http://www.lenovo.com.cn/activity/marketing/yoga5prof/index.html" title="" target="_blank">
      <img id='imgs
      'src="/Public/home/img/3.png" alt="" width='1200px' height="101px">
  </a>
  <a href="javascript:;"><span id='close'>&times;</span></a>
</div>
<!-- 中 -->
<!-- <div class="middle">
   <!-- 搜索 -->
<div class="container search">
  <div class="search-left">
    <a href="http://www.lenovo.com.cn"><img src="/Uploads/<?php echo C('LOGO');?>" alt=""></a>
  </div>
  <div class="search-right">
    <div class="fang">
      <span class="da"></span>
    </div>
    <input type="text" placeholder="miix5">
  </div>
  <div class="clear"></div>
</div>

  
  <!-- 菜单 -->
  <div class="container menus">
    <div class="menus-img">
      <a><img src="/Public/home/img/4.jpg"alt=""></a>
    </div>
    <div class="menus-dao">
      <ul>
        <li><a class=xp>小新Air 13 Pro
          <span class="pro"></span>
        </a>
        </li>
        <li class="bk">
          <a >爆款</a>
          <ul class="bk-bao">
           <li> <a href="">小新Air 12</a></li>
            <li><a href="">小新Air13 Pro</a></li>
            <li><a href="">小新310</a></li>
            <li><a href="">拯救者游戏本</a></li>
            <li><a href="">ThinkPad New S2</a></li>
            <li><a href="">看家宝Snowman</a></li>
            <li><a href="">小新700</a></li>
            <li><a href="">MIIX5</a> </li> 
            <li><a href="">YOGA BOOK</a></li>
          </ul>
        </li>
        <li ><a class="lx">联想合伙人<span class="hehou"></span></a></li>
        <li><a>0元试用</a></li>
        <li><a>以旧换新</a></li>
        <li><a>私人定制</a></li>
        <li class="fw"><a>服务</a>
          <ul class="fuwu">
            <li><a href="">服务支持</a></li>
            <li><a href="">驱动下载</a></li>
            <li><a href="">联想知识库</a></li>
          </ul>
        </li>
        <li><a>社区</a></li>
        <!-- <li></li> -->
      </ul>
     </div>
  </div>
  <!-- 监听 -->
  <div class="jianting">
    <ul>   
    </ul>
  </div>
  <!-- 侧边栏 -->
  <div class="cebianlang">
   <ul>
    <li class="ccbl"><span class="dianhua"></span>
      <div class="xianshi">
        <dl class="clearfix">
          <dt class="pc"></dt>
           <dd>
            <a href="javascript:;">商城服务热线<br>
            4000-888-222</a>
          </dd>
           <dt class="tk"></dt>
           <dd>
            <a href="javascript:;">商城服务热线<br>4000-888-222</a>
          </dd>
           <dt class="shouji"></dt>
           <dd>
            <a href="javascript:;">手机频道服务热线<br>
              400-818-8818</a>
          </dd>
           <dt class="xiuli"></dt>
           <dd>
            <a href="javascript:;">服务产品购买热线<br>
              400-890-1566</a>
          </dd> 
          <dt class="dianlian"></dt>
          <dd>
            <a href="javascript:;">联想商用客户热线<br>
              400-813-6161</a>
          </dd>
          <dt class="ka"></dt>
          <dd>
            <a href="javascript:;">通信卡服务热线<br>
              400-641-0041</a>
          </dd>
         </dl>
      </div>
    </li>
    <li><span class="wechat"></span></li>
    <li><span class="home"></span></li>
    <li><span class="qianbi"></span></li>
   </ul>
   <div class="huidao"> 
    <span class="dingbu"></span>
   </div>
   
  </div>
  <!-- 轮播区 -->
  <div class="container carouse">
      <div class="left">
    <ul>
    <?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cone): $mod = ($i % 2 );++$i;?><li>
       <div class="left-menu">
         <a href="<?php echo U('Types/index',array('id'=>$cone[id],'cen'=>'1'));?>"><?php echo ($cone[cname]); ?>
         <span class="list_usepng list_icona"></span>
         </a>
         <!-- 详细内容 -->
          <div class="left-xiang">
              <!-- 总说 -->
            <div class="left-zong">
              <!-- 分说 字-->

              <?php if(is_array($cone["zi"])): $i = 0; $__LIST__ = $cone["zi"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?><div class="left-zi">
              <p><a href="<?php echo U('Types/index',array('id'=>$son[id],'cen'=>'2'));?>" ><?php echo ($son[cname]); ?></a></p>
              <ul class="clearfix">
                <?php if(is_array($son["zi"])): $i = 0; $__LIST__ = $son["zi"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sonzi): $mod = ($i % 2 );++$i;?><li>
                  <a href="<?php echo U('Types/index',array('id'=>$sonzi[id],'cen'=>'3'));?>" ><?php echo ($sonzi['cname']); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

              </ul>
             </div><?php endforeach; endif; else: echo "" ;endif; ?>
            
            
             
            </div>
            <!-- 分说图 -->
            <div class="left-tu">
              <?php if(is_array($cone["ads_xiao"])): $i = 0; $__LIST__ = $cone["ads_xiao"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiao): $mod = ($i % 2 );++$i;?><a href="<?php echo ($xiao[url]); ?>">
                <img class="classification_img" src="/Uploads/Ads/<?php echo ($xiao[img]); ?>">
              </a><?php endforeach; endif; else: echo "" ;endif; ?>
              
            </div>
          </div>
        </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>





        </ul>
      </div>
      <div class="clear"></div>
      <div class="center">
      <ul class='imgs'>
        <?php if(is_array($lunbo)): $i = 0; $__LIST__ = $lunbo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lun): $mod = ($i % 2 );++$i; if($key == 0): ?><li class='active'><a href='<?php echo ($lun[url]); ?>'><img src="/Uploads/Lunbo/<?php echo ($lun[img]); ?>" alt=""></a></li> 
          <?php else: ?>
            <li class=''><a href='<?php echo ($lun[url]); ?>'><img src="/Uploads/Lunbo/<?php echo ($lun[img]); ?>" alt=""></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <ul class='nums'>
        <?php if(is_array($lunbo)): $i = 0; $__LIST__ = $lunbo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lun): $mod = ($i % 2 );++$i; if($key == 0): ?><li class='active'></li> 
          <?php else: ?>
             <li></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </ul>
      <a href="javascript:;" class="btn btn-left"></a>
      <a href="javascript:;" class="btn btn-right"></a>
  </div>
      <div class="right">
        <div class="xin">   
          <div class="xisn">
            <div class="horn_ring"></div>
            <ul class="xnss"> 
               <li><a target="_blank" href="">四年延保，沸腾国庆！</a></li> 
               <li><a target="_blank" href="">联想APP客户端乐豆抽奖大战开始啦，赶快下载抽取大奖，miix平板等着你！</a></li>
               <li><a target="_blank" href="">四年延保，沸腾国庆！</a></li> 
               <li><a target="_blank" href="">联想APP客户端乐豆抽奖大战开始啦，赶快下载抽取大奖，miix平板等着你！</a>
               </li>                   
             </ul>  
            </div> 
          </div>
        <!-- 评论 -->
        <div class="ping">
           <h2 class="clearfix"><span>精彩讨论</span>
            <a target="_blank" href="">更多 &gt;</a>
           </h2>
           <ul class="lun">               
              <li>
                <a target="_blank" href="">【评测】一款高颜值笔记本的告白</a>
              </li>               
              <li>
                <a target="_blank" href="">【评测】Moto Z+哈苏模块≈单反体验</a>
              </li>       
              <li>
              <a target="_blank" href="">【活动】分享你的怀旧珍藏赢好礼</a>
              </li>          
              <li>
                <a target="_blank" href="">【体验】诠释轻薄与性能的小新 Air 13 Pro</a>
              </li>           
              <li>
                <a target="_blank" href="">【小白课堂】小新笔记本还能这样玩</a>
              </li>        
              <li>
                <a target="_blank" href="l">【活动】联想智能存储有奖征名</a>
              </li>        
              <li>
                
                <a target="_blank" href="">【选本】新晋二合一笔记本推荐</a>
              </li>               
             </ul>
        </div>
      </div>
  
  </div>
  <!-- 图片 -->
  <div class="container middle-erbo">
   <div class="bao"> 
    <div class="tui">
      <img src="/Public/home/img/70.jpg" alt="">
    </div>
    <div class="boo">
      <ul class="bo-1"> 
        <?php if(is_array($ads)): $i = 0; $__LIST__ = $ads;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiaojian): $mod = ($i % 2 );++$i;?><li width="252px" height="159px">
            <a target="_blank" href="<?php echo ($xiaojian[url]); ?>">
            <img src="/Uploads/Ads/<?php echo ($xiaojian[img]); ?>">
          </a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
          
      </ul>
      <a href="javascript:;" class="btn btn-left"></a>
      <a href="javascript:;" class="btn btn-right"></a>
    </div>
   </div>
  </div>  
  <!-- 明星单品 -->
  <div class="container star">
    <div class="star-1">
      <h3><span><img src="/Public/home/img/555.png" alt=""dispaly="none"></span>明星单品</h3>
      <div class="start-xi">
        <ul>
          <?php if(is_array($mingxing)): $i = 0; $__LIST__ = $mingxing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li style="width: 198px; height: 297px;">
            <a target="_blank" href="<?php echo U('Goods/index',array('id'=>$goods[id]));?>"> 
              <img src="/Uploads/Goods/md_<?php echo ($goods[img]); ?>">
            </a>
            <p class="star_name">
              <a target="_blank" href="<?php echo U('Goods/index',array('id'=>$goods[id]));?>"><?php echo ($goods[name]); ?></a>
            </p>
            <p class="star_ad">
              <a target="_blank" href="<?php echo U('Goods/index',array('id'=>$goods[id]));?>"><?php echo ($goods[info]); ?></a>
            </p>
            <p class="star_price"><a target="_blank" href="<?php echo U('Goods/index',array('id'=>$goods[id]));?>"><?php echo number_format($goods[price]);?>元</a></p>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
        
      <div class='clear'></div>
    </ul>
  </div>
 </div>
</div>
  <!-- 猜你喜欢 -->
  <!-- <div class="like"></div> -->

  <!-- 楼层 -->
  <div class="ceng"> 
    <div class='container lou '>
  <!-- 1F联想 -->
<?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$onetwo): $mod = ($i % 2 );++$i; $a++; ?>
     <div class="lenovo">
     <div class="title"> 
       <h3><span><?php echo ($a); ?>F</span><em> <?php echo ($onetwo[cname]); ?></em></h3>
       <div class="jieshao">
        <?php if(is_array($onetwo["zi"])): $i = 0; $__LIST__ = array_slice($onetwo["zi"],0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zi): $mod = ($i % 2 );++$i;?><a target="_blank" href="" title="YOGA4 Pro系列"><?php echo ($zi[cname]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        <a href="" target="_blank" title="" class="myicon floor_more">更多</a>
       </div>
     </div>
     <div class="rong">
       <div class="zuo">
        <?php if(is_array($onetwo["ads_da"])): $i = 0; $__LIST__ = $onetwo["ads_da"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$da): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo ($da[url]); ?>"> <img width="240" height="535" src="/Uploads/Ads/<?php echo ($da[img]); ?>">
         </a><?php endforeach; endif; else: echo "" ;endif; ?>
       </div>
       <div class="you">
        <?php if(is_array($onetwo["goods"])): $i = 0; $__LIST__ = $onetwo["goods"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="you1 good">
          <a target="_blank" href=""  title="小新Air 12 (6Y30/Windows 10 家庭版/LTE 4G 12G流量)"> 
           <img width="164" height="164" src="/Uploads/Goods/<?php echo ($goods[img]); ?>" > 
          </a>
          <a class="good-jie"target="_blank" href=""><?php echo ($goods[name]); ?>
          </a>
          <a class="good-jie1"target="_blank" href="" title="小新Air 12 (6Y30/Windows 10 家庭版/LTE 4G 12G流量)"><?php echo ($goods[info]); ?>
          </a>
          <a class="money"  target="_blank" href=""  title="小新Air 12 (6Y30/Windows 10 家庭版/LTE 4G 12G流量)"><?php echo number_format($goods[price]);?>元
          </a>
          <?php switch($goods[type]): case "0": ?><span class=""></span><?php break;?>
            <?php case "1": ?><span class="good-xinping"></span><?php break;?>
            <?php case "2": ?><span class="good-zhijian"></span><?php break;?>
            <?php case "3": ?><span class="good-re"></span><?php break;?>
            <?php case "4": ?><span class="good-biao"></span><?php break; endswitch;?>
          
         </div><?php endforeach; endif; else: echo "" ;endif; ?>
        
       </div>
       <div class="clear"></div>
     </div>
     </div><?php endforeach; endif; else: echo "" ;endif; ?>
   <!-- 2Fthinkpad -->
   
<!-- 6F社交平台 -->
       <div class="container social">
          <div class="title">
            <h3><span><?php echo ++$a;?>F</span> 社交平台</h3>
          </div>
          <div class="social-tu">
            <ul>
              <li>
                <div class="shekuang" datatype="5" sort="1" b_i="190,212,30">
                      <a target="_blank" href="">
                        <img width="190" height="212" src="/Public/home/img/50.jpg" class="lazy_img"></a>
                      <div class="social-tou"></div>
                      <div class="social-rong">
                        <em class="social-zi" ></em>
                        <span>联想社区</span>
                      </div>
                </div>
              </li>
              <li>
                <div class="shekuang" datatype="5" sort="2" b_i="190,212,30">
                      <a target="_blank" href="http://955.cc/muj82">
                        <img width="190" height="212" src="/Public/home/img/52.jpg" class="lazy_img"></a>
                      <div class="social-tou"></div>
                      <div class="social-rong">
                        <em class="social-guanwei"></em>
                        <span>官方微信</span>
                      </div>
                </div>
              </li>
              <li>
                <div class="shekuang" datatype="5" sort="3" b_i="190,212,30">
                      <a target="_blank" href="">
                        <img width="190" height="212" src="/Public/home/img/53.jpg" class="lazy_img"></a>
                      <div class="social-tou"></div>
                     <div class="social-rong">
                        <em class="social-weifu"></em>
                        <span>微信服务</span>
                      </div>
                </div>
              </li>
              <li>
                <div class="shekuang" datatype="5" sort="4" b_i="190,212,30">
                      <a target="_blank" href="">
                        <img width="190" height="212" src="/Public/home/img/54.jpg" class="lazy_img"></a>
                      <div class="social-tou"></div>
                      <div class="social-rong">
                        <em class="social-batie"></em>
                        <span>百度贴吧</span>
                      </div>
                </div>
              </li>
              <li>
                <div class="shekuang" datatype="5" sort="5" b_i="190,212,30">
                      <a target="_blank" href="">
                        <img width="190" height="212" src="/Public/home/img/55.jpg" class="lazy_img"></a>
                      <div class="social-tou"></div>
                      <div class="social-rong">
                        <em class="social-gaungwei"></em>
                        <span>官方微博</span>
                      </div>
                </div>
              </li>
              <li style="margin-right:0px;">
                <div class="shekuang" datatype="5" sort="6" b_i="190,212,30">
                      <a target="_blank" href="" >
                        <img width="190" height="212" src="/Public/home/img/56.jpg" class="lazy_img"></a>
                      <div class="social-tou"></div>
                      <div class="social-rong">
                        <em class="social-xinqu" ></em>
                        <span>兴趣部落</span>
                      </div>
                </div>
              </li>
              <div class="clear"><div>
            </ul>
          </div>
      </div>
     </div>
    </div>
   </div>
 </div>
<!-- 页脚-->
  <div class=" bottom">
  <!-- top -->
  <div class="container bottom-1"><img src="/Public/home/img/6.png" alt=""></div>
  <!-- middle -->
  <div class=" bottom-2">
          <dl>
              <dt> <a>购物指南 </a></dt>
              <dd>
                <a target="_blank" href="">服务商信息</a>
                <a target="_blank" href="">购买流程</a> 
                <a target="_blank" href="">注册登录</a>
              </dd>
          </dl>
          <dl>
              <dt> <a>配送方式</a></dt>
              <dd> 
                <a target="_blank" href="">配送方式</a> 
                <a target="_blank" href="">配送方式信息</a> 
                <a target="_blank" href="">签收原则</a>
                <a target="_blank" href="">物流查询</a>
              </dd>
          </dl>
          <dl>
              <dt> <a>支付方式  </a></dt>
              <dd> 
                <a target="_blank" href="">支付方式</a> 
                <a target="_blank" href="">支付问题</a>
                <a target="_blank" href="">分期支付</a>
              </dd>
          </dl>
          <dl>
              <dt> <a>订单信息  </a></dt>
              <dd> 
                <a target="_blank" href="">订单信息</a> 
                <a target="_blank" href="">其它频道订单发票</a>
                <a target="_blank" href="">手机频道订单发票</a>
              </dd>
          </dl>
          <dl>
              <dt> <a>售后服务 </a></dt>
              <dd> 
                <a target="_blank" href="">Lenovo频道商品售后</a>
                <a target="_blank" href="">手机频道商品售后7天</a> 
                <a target="_blank" href="">无理由退换货说明</a>
                <a target="_blank" href="">24小时在线客服</a>
              </dd>
          </dl>
          <dl style="padding-right:0;">
              <dt> <a>其他说明  </a></dt>
              <dd> 
                <a target="_blank" href="">服务承诺</a> 
                <a target="_blank" href="">账户安全</a> 
                <a target="_blank" href="">产品安全</a>
              </dd>
          </dl>
  </div>
  <!-- bottom -->
  <div class="container bottom-3">
    <div class='action'>
      <div class="yihang">
            <a href="" title="关于联想" target="_blank">关于联想</a><span class="gang">|</span>
            <a href="" title="联系我们" target="_blank">联系我们</a><span class="gang">|</span>
            <a href="" title="工作机会" target="_blank">工作机会</a><span class="gang">|</span>
            <a href="/About/news_center.aspx" title="新闻中心" target="_blank">新闻中心</a><span style="display:none;">|</span>
            <a href="" style="display:none;" title="商城移动版" target="_blank">商城移动版</a><span class="gang">|</span>
            <a href="" title="聚享汇会员专享" target="_blank">聚享汇会员专享</a><span class="gang">|</span>
            <a href="" title="联想社区" target="_blank">联想社区</a><span class="gang">|</span>
            <a href="" title="NBD" target="_blank">NBD</a><span class="gang">|</span>
            <a href="" title="联想超融合" target="_blank">联想超融合</a><span class="gang">|</span>
            <a href="" title="联想官网热搜榜" target="_blank">联想官网热搜榜</a><span class="gang">|</span>
            <a href="" title="分类大全" target="_blank">分类大全</a><span class="gang">|</span>
            <a href="" title="联想产品大全" target="_blank">联想产品大全</a><span class="gang">|</span>
            <a href="" title="智慧医疗" target="_blank">智慧医疗</a>
      </div>
      <div class="erhang">
            版权所有：1998-2016 联想集团<span class="gang">|</span>
            <a href="" title="法律公告" target="_blank">法律公告</a><span class="gang">|</span>
            <a href="" title="隐私保护" target="_blank">隐私保护</a><span class="gang">|</span>
            <a href="" target="_blank">京ICP备11035381</a><span class="gang">|</span>
            <i style="font-style:normal;">京公网安备110108007970号</i><span class="gang">|</span>
            <a href="http://pic.shop.lenovo.com.cn/g1/M00/01/3C/CmBZD1aLdE-AHmSmAAJk4Nd8ReY449.jpg" title="营业执照" target="_blank">营业执照：110000410127232</a><span class="gang">|</span>
            <a href="/LenovoMap/LenovoMap_Direct.aspx?intcmp=MAP20140730_1" title=" 销售网点" target="_blank">销售网点</a><span class="gang">|</span>
            <a href="http://support1.lenovo.com.cn/lenovo/wsi/station/servicestation/default.aspx?intcmp=MAP20140730_2" title=" 服务网点" target="_blank">服务网点</a>
        </div>
      </div>
    </div>
</div>
</div>  
<!-- 登陆页面 -->
<div class="WB" id="WB">
  <div class="Wto">
      <div class="dengtitle"> 
        <h2 class="btn1 now" type="0" >普通登录</h2>
        <h2 class="btn2" type="1" >快捷登录</h2> 
        <a class="closess" href="javascript:;"></a>
      </div>

      <div class="inputa"> 
        <div class="img"> 
          <img src="/Public/home/img/8989.png">
        </div>  
        <input class="account" type="text" placeholder="请输入手机号或邮箱" style="display: inline:block;"> 
        <input class="m_account" style="display: none;" type="text" placeholder="请输入手机号">
      </div>



    <div class="imgs"> 
      <img height="34px" width="34px"src="/Public/home/img/9898.png"> 
    </div>

    <button class="getMobileCode" style="display:none;">获取动态密码</button> 

      <input class="pwd" type="password"  style="display: inline-block;"> 
      <input class="mcode" style="display: none;" type="text" >
      <div class="pwd_placeholder" style="line-height: 33px; width: 280px; height: 33px; left: 35.1042px; top: 4.50195e-06px; display: block;">密码
      </div>
      <div class="m_account_placeholder" style="line-height: 33px; width: 180px; height: 33px; left: 35.1042px; top: 4.50195e-06px; display: none;">动态密码
      </div>
  </div>


        <div class="captcha_wrapper" style="display: none;">
        <input class="captcha" type="text" data-placeholder="请输入验证码">
        <img class="captcha_img">
        <span class="captcha_tip">换一换</span>
      </div>
      <div class="login_main"> 
      <p class="tip"></p> 
   </div>
   <div class="login_mains">
    <label>
     <input class="persistent" checked="" type="checkbox" latag="latag_pc_login_autologin">
     <p>自动登录</p>
    </label>
     </div>
     <div class="login_btn"> <a href="javascript:void(0)" class="submit" latag="latag_pc_login_confirm">登&nbsp;&nbsp;录</a> </div>
     <div class="login_footer"><p><a class="regist" href="javascript:void(0)" latag="latag_pc_login_register">立即注册</a><a href="javascript:void(0)" class="forgetPwd" latag="latag_pc_login_forgetpw">忘记密码</a></p> 
     </div>
     <div class="cooperation">使用合作网站账号登录:
      <div class="cooperation_items">
      <a href=""><img title="qq登陆"src="/Public/home/img/qq.png" alt=""></a>
      <a href=""><img title="微博登陆" src="/Public/home/img/ico_sina.png" alt=""></a>
      <a href=""><img title="微信登陆" src="/Public/home/img/ico_wc.png" alt=""></a>
      <a href=""><img title="支付宝登陆" src="/Public/home/img/ico_zfb.png" alt=""></a>
    </div>
  </div>
</div>
</div>
<div class="zhuce"> 
      <div class="zhuce_title"> 
        <h1>欢迎注册联想会员</h1> 
           <a href=""><span class="close2s"></span></a>
        </div> 
        <div class="zhuce_inputa">
         <p><label>账号</label>
          <input class="account" type="text" placeholder="请输入手机号或邮箱">
        </p> 
       </div>
        <div class="zhuce_inputaa errorAccount">
            <p class="error">帐号不能为空
            </p>
      </div> 
      <div class="zhuce_inputb"> 
            <p>
              <label>密码</label><input placeholder="密码长度8~20位,数字、字母、字符至少包含两种" class="pwd" type="password">
            </p>
      </div> 
      <div class="zhuce_inputaa errorPwd">
      </div>
      <div class="zhuce_inputc"> 
        <p>
          <label>确认密码</label>
          <input type="password" class="repwd">
        </p> 
      </div> 
    <div class="zhuce_inputaa errorRepwd"></div>
      <div class="zhuce_inputd"> 
          <p><label>验证码</label>
          <input type="text" class="captcha">
          </p>
          <img class="img_captcha" ><span class="img_captcha_tip" >换一张</span>
          <button class="mobile_captcha" style="display:none;">获取验证码</button>
      </div> 
      <div class="zhuce_inputaa errorCaptcha"></div> 
      <div class="zhuce_main"><label>
      <input type="checkbox" class="chk" checked="">
      <p style="color: #000"> 同意联想的 
      <a target="_blank" href="" style="color: #005ce6;" >使用条款</a> 
      和 
      <a target="_blank" href="" style="color: #005ce6;" >隐私权政策</a>
      </p>
      </label>
      </div> 
      <div class="zhuce_btn">
        <a style="text-decoration:none;" class="submit" href="javascript:void(0)" latag="latag_pc_register_confirm">立即注册</a>
      </div> 
    </div>
 

   </div>
</body>

</html>