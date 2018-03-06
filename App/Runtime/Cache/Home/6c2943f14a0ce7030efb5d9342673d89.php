<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>联想商城—购物车</title>
  <meta name="keywords" content="联想中国官网,联想电脑,联想服务器，联想官方网上商城" />
    <meta name="description" content="联想官方网上商城,为您提供最新联想笔记本电脑,联想平板电脑,联想手机,联想台式机,联想一体电脑,联想服务器,联想外设数码产品,联想智能电视等产品在线购买及售后服务,您提供愉悦的网上购物体验" />
  <link rel="shortcut icon" href="/Public/home/img/1.png">
  <link rel="stylesheet" href="/Public/home/css/shop.css">
  <link rel="stylesheet" href="/Public/home/css/footer.css">
  <script src="/Public/home/js/jquery.js"></script>
  <script src="/Public/home/js/shop.js"></script>
</head>
<body>

<div class="top_box">
    <div class="top_cont">

        <div class="top_login_r top_red">
		
        </div>
        <ul class="top_login top_red">

            <li id="headorderID_a" style="">
                <a href="http://order.lenovo.com.cn/center/orderlist.jhtm?merchantId=1">我的订单</a>
            </li>

            <li class="top_loginbtn" id="LoginID" style="display: none;">
                <a href="javascript:void(0);" class="login">登录</a>
            </li>
            <li class="top_regist" id="RegisterID" style="display: none;">
                <a href="javascript:void(0);" class="regist">注册</a>
            </li>
        </ul>

        <div class="top_phone" style="" id="UserInfo">
            <div class="top_phone_title"><span id="UserNameID">15364711138</span> 
                <a href="#" class=" top_usepng top_downs"></a>
            </div>
            <ul>
            <li>
                <a href="http://i.lenovo.com.cn/info/center.jhtml?sts=e40e7004-4c8a-4963-8564-31271a8337d8">我的商城
                </a>
            </li>
            <li>
            <a href="javascript:void(0);" id="LogOutID" class="logout">退出登录</a>
            </li>
            </ul>
        </div>

        <ul class="top_login top_red">
            <!-- <li><a href="#">18101020964</a></li> -->
            <li style="border-left:none;"><a href="http://www.lenovo.com.cn/">返回首页</a></li>
        </ul>


    </div>
</div>
<!-- logo -->
<div class="top_logob">
    <img src="/Public/home/img/pic-13.jpg" class="top_logob_imga">
    <img src="/Public/home/img/pic-12.jpg" class="top_logob_imgb">
</div>
<div class="buycart w1200">
<div id="cart_main">
    <div class="bc_option clearfix">
    <div class="bc_all clearfix active">
  <input type="checkbox" class="selectAll">
 <span>全选</span></div>
</div>
<div class="bc_table" id="main_table">
    <table cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <th colspan="3" width="462">商品</th>
                <th width="163">规格</th>
                <th width="152">单价</th>
                <th width="152">数量</th>
                <th width="152">金额</th>
                <th width="117">操作</th>
              </tr>
        	</tbody>
    </table>
    <table cellpadding="0" cellspacing="0">
		
        <!--带服务-->
         <tbody><tr class=" active" gcode="52770" stock="18">
                <td width="57" class="bc_table_sel">
    <input type="checkbox" name="checkbox" />
     
                    
                </td>
                <td width="148" class="bc_table_img">
                    <a href="http://thinkpad.lenovo.com.cn/product/52770.html" target="_blank">
                             <img src="/Public/home/img/4vduyGoAB3Aljn8d6kWamCChI-4382.jpg" alt="">
                    </a>
                    <div class="bc_zhezhao"></div>
                </td>
                <td width="257" class="bc_proname bc_name_gift">
                    <a href="http://thinkpad.lenovo.com.cn/product/52770.html" target="_blank">ThinkPad 黑将S5 20G4A00NCD 银色</a>
                    <div class="bc_service"><a href="javascript:;" class="bc_add choose_service">
                        <img src="http://m1.lefile.cn/trade/pc/images/lenovo_icon.jpg">&nbsp;购买联想服务</a>
    <ul class="service_box" id="slists">
        <h4>联想服务</h4>
        
        <li>
            <select ccode="04010302">
                <option value="">--Think笔记本意外保--</option>
                
                <option value="04010302" gcode="51726" gprice="509.00" gname="Think笔记本2年意外保修">Think笔记本2年意外保修</option>
                
                <option value="04010302" gcode="51725" gprice="255.00" gname="Think笔记本1年意外保修">Think笔记本1年意外保修</option>
                
            </select>
        </li>
        
        <li>
            <select ccode="04010202">
                <option value="">--Think笔记本上门--</option>
                
                <option value="04010202" gcode="51728" gprice="579.00" gname="Think笔记本2年上门服务（全国）">Think笔记本2年上门服务（全国）</option>
                
            </select>
        </li>
        
        <p id="select_service"></p><div class="div_servicebox"></div>
        <p>
            <input class="service_ok" type="button" value="确定">
            &nbsp;
            <input class="service_cancel" type="button" value="取消">
        </p>
    </ul>
</div>

                </td>
                <td width="163">S5 i7 4G 1TB 银色 </td>
                <td width="152" style="position:relative;">
	                <span class="current_price">7499.00</span>
	                <!--满减-->
	             </td>
                <td width="152" text-align:center>
                    <label class="i_box clearfix">
                        <input class="pro_less J_minus" type="button" value="-" latag="latag_pc_shopcart_carNumDel_52770">
                        <input class="pro_num J_input" type="text" value="1" style="ime-mode: disabled;" val="1">
                        <input class="pro_add J_add" type="button" value="+" latag="latag_pc_shopcart_carNumAdd_52770">
                    </label>
                </td>
                <td width="152" class="bc_red">6999.00</td>
                <td width="117" style="text-align:left">
                    <a href="javascript:;" style="color: #000" title="删除" onclick="deleline('52770')" latag="latag_pc_shopcart_delete_52770">删除</a>
                                            <br>
                        <a href="javascript:;" style="color: #000" title="收藏" onclick="conllectionFun('52770')">移入收藏夹</a>
                    
                </td>
            </tr>
    </tbody>
</table>
</div>
<div class="bc_num clearfix">
    <div class="bc_num_fl">
        <div class="bc_all clearfix active">
    <input type="checkbox" name="checkbox" class="selectAll" />

            <span>全选</span></div>
        <a href="javascript:;" class="bc_num_del">删除选中商品</a>
    </div>
    <ul class="bc_num_fr">
     <!--    <li style="margin-top:0;">商品总价：7499.00 元</li>
        <li>优惠节省：500.00 元</li> -->
        <li>合计：<span class="bc_red" id="totalmoneyf">6999.00 元</span></li>
    </ul>
</div>
<div class="bc_probtn clearfix"><a href="<?php echo U('Orders/index');?>" title="去结算" id="submit" event-name="PC端_去结算">去结算</a></div>
</div>
<div class="bc_prolist" id="bc_prolist"><h3>
        <span>买了又买</span>
        <a  href="javascript:void(0);"><span class="lft-btn"></span></a>
        <a  href="javascript:void(0);"><span class="rgt-btn"></span></a>
    </h3>
    <div class="lunbo-box">
        <ul id="lunbo-img">                 
                <li>
                    <a href="http://www.lenovo.com.cn/product/51186.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/51186.html" target="_blank" >新秀丽轻薄商务高端手提包 T900</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="51186">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄商务高端手提包 T900" >加入购物车</a>
                    </div>
                </li>
                
                <li>
                    <a href="http://www.lenovo.com.cn/product/51330.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/51330.html" target="_blank" latag="latag_pc_cart_buy_rec_2_52770|48635_51330_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_name">联想小新闪存盘 F300-U3 16G
                    </a>
                    </p>
                    <p>商城价：99元</p>
                    <div class="bc_btn" gcode="51330">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想小新闪存盘 F300-U3 16G" latag="latag_pc_cart_buy_rec_2_52770|48635_51330_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a></div>
                </li>
                
                <li>
                    <a href="" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/PHYIgt6pSesb6HQ6WZQlxT82J-3810.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="" target="_blank">新秀丽休闲款双肩包 B800</a></p>

                    <p>商城价：599元</p>
                    <div class="bc_btn" gcode="58635"><a href="javascript:;" event-name="PC端_加入购物车_新秀丽休闲款双肩包 B800" latag="latag_pc_cart_buy_rec_3_52770|48635_58635_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a></div>

                </li>
                

                <li>
                    <a href="http://www.lenovo.com.cn/product/48070.html" target="_blank">
                    <img style="height:200px;width:200px;" src="/Public/home/img/CmBZD1Yg2BSAQf2eAABLGXxzFSg408.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/48070.html" target="_blank" latag="latag_pc_cart_buy_rec_4_52770|48635_48070_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_name">联想笔记本单肩包鼠套装TM200</a>
                    </p>
                    <p>商城价：149元</p>
                    <div class="bc_btn" gcode="48070">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想笔记本单肩包鼠套装TM200" latag="latag_pc_cart_buy_rec_4_52770|48635_48070_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/52099.html" target="_blank" latag="latag_pc_cart_buy_rec_5_52770|48635_52099_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_pic">
                    <img style="height:200px;width:200px;" src="/Public/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/52099.html" target="_blank" latag="latag_pc_cart_buy_rec_5_52770|48635_52099_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_name">ThinkPad X1 平板电脑轻薄小红点键盘盖（黑） 选件</a>
                    </p>
                    <p>商城价：1099元</p>
                    <div class="bc_btn" gcode="52099">
                    <a href="javascript:;" event-name="PC端_加入购物车_ThinkPad X1 平板电脑轻薄小红点键盘盖（黑） 选件" latag="latag_pc_cart_buy_rec_5_52770|48635_52099_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a>
                    </div>
                </li>
                
                <li>
                    <a href="http://www.lenovo.com.cn/product/50522.html" target="_blank"><img style="height:200px;width:200px;" src="/Public/home/img/CmPJilW4atiARKnaAACSJOOXg14930.jpg"></a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/50522.html" target="_blank" >联想游戏鼠标M600 烈焰红</a>
                    </p>
                    <p>商城价：199元</p>
                    <div class="bc_btn" gcode="50522">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想游戏鼠标M600 烈焰红">加入购物车</a>
                    </div>
                </li>

                <li>
                    <a href="http://www.lenovo.com.cn/product/53132.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/L3d8ElIUyhoS6Tx95PzHdjS1p-1229.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/53132.html" target="_blank" >新秀丽轻薄款单肩包 T600 米白</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="53132">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄款单肩包 T600 米白" >加入购物车</a>
                    </div>
                </li>
                
                <li>
                    <a href="http://www.lenovo.com.cn/product/53130.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/53130.html" target="_blank" >新秀丽轻薄款单肩包 T600 黑</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="53130">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄款单肩包 T600 黑" >加入购物车</a>
                    </div>
                </li>
                
                <li>
                    <a href="http://www.lenovo.com.cn/product/51186.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/51186.html" target="_blank" >新秀丽轻薄商务高端手提包 T900</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="51186">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄商务高端手提包 T900" >加入购物车</a>
                </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/51330.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/51330.html" target="_blank" >联想小新闪存盘 F300-U3 16G</a>
                    </p>
                    <p>商城价：99元</p>
                    <div class="bc_btn" gcode="51330">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想小新闪存盘 F300-U3 16G" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/PHYIgt6pSesb6HQ6WZQlxT82J-3810.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="" target="_blank" >新秀丽休闲款双肩包 B800</a>
                    </p>
                    <p>商城价：599元</p>
                    <div class="bc_btn" gcode="58635">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽休闲款双肩包 B800" latag="latag_pc_cart_buy_rec_3_52770|48635_58635_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/48070.html" target="_blank">
                    <img style="height:200px;width:200px;" src="/Public/home/img/CmBZD1Yg2BSAQf2eAABLGXxzFSg408.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/48070.html" target="_blank" latag="latag_pc_cart_buy_rec_4_52770|48635_48070_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_name">联想笔记本单肩包鼠套装TM200</a>
                    </p>
                    <p>商城价：149元</p>
                    <div class="bc_btn" gcode="48070"><a href="javascript:;" event-name="PC端_加入购物车_联想笔记本单肩包鼠套装TM200" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/52099.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/52099.html" target="_blank" >ThinkPad X1 平板电脑轻薄小红点键盘盖（黑） 选件</a>
                    </p>
                    <p>商城价：1099元</p>
                    <div class="bc_btn" gcode="52099">
                    <a href="javascript:;" event-name="PC端_加入购物车_ThinkPad X1 平板电脑轻薄小红点键盘盖（黑） 选件" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/50522.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/CmPJilW4atiARKnaAACSJOOXg14930.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/50522.html" target="_blank" >联想游戏鼠标M600 烈焰红</a>
                    </p>
                    <p>商城价：199元</p>
                    <div class="bc_btn" gcode="50522">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想游戏鼠标M600 烈焰红" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/53132.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/L3d8ElIUyhoS6Tx95PzHdjS1p-1229.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/53132.html" target="_blank" >新秀丽轻薄款单肩包 T600 米白</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="53132">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄款单肩包 T600 米白" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/53130.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/Public/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/53130.html" target="_blank" >新秀丽轻薄款单肩包 T600 黑
                    </a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="53130">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄款单肩包 T600 黑" latag="latag_pc_cart_buy_rec_8_52770|48635_53130_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a>
                    </div>
                </li></ul>
    </div>
</div>
</div>
 <div class="footer">
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
</body>
</html>