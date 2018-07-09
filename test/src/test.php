
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="scss/base.css">
    <link rel="stylesheet" href="scss/index.css">
    <script src="ajax.js"></script>
    <title>药房网商城-网上药店,有保障的网上药店,网上买药,网上购药,药品网站</title>
</head>
<body>
    <header>
        <div class="header_top">
            <div class="container">
                    <ul class="fl">
                            <li class="n"><i class="icons fav fl"></i><a title="收藏药房网商城，下次访问更方便！" id="addFav" href="#">收藏药房网商城</a><s></s></li>
                                        <li id="weixin"><i class="icons wx fl"></i><a title="关注药房网商城微信公众账号，随时随地查药价！" href="#" rel="nofollow">微信查价</a><s></s><div class="wxbig" style="display: none;"><div class="pic"></div><div class="txt">微信扫描二维码，查药比价更方便！</div></div></li>
                            <li id="app"><i class="icons app fl"></i><a href="#" target="_blank" title="下载药房网商城APP" rel="nofollow">手机APP</a><div class="appbig" style="display: none;"><div class="pic"></div><div class="txt">药房网商城App，注册就送20元</div></div></li>
                    </ul> 
                    <ul class="right" id="TopNav">
                            <li class="entry_btn">
                                    <a href="//reg.yaofangwang.com/JoinIn.html">商家入驻</a>
                                </li>
                            <li class="daohang">
                        <a href="javascript:void(0);" class="disa" style="text-decoration:none;">网站导航</a>
                        <i class="icons dorpdown"></i>        
                            <div class="line"></div>
                            <div class="other">
                                <div class="item">
                                    <div class="h1">健康咨询</div>
                                    <a href="//www.yaofangwang.com/news/">医药资讯</a>
                                    <a href="//www.yaofangwang.com/jibing/">疾病知识</a>
                                    <a href="//www.yaofangwang.com/yongyao/">用药指导</a>
                                    <a href="//www.yaofangwang.com/ask/">健康问答</a>
                                    <a href="//www.yaofangwang.com/disease/">疾病症状库</a>
                                </div>
                                <div class="item">
                                    <div class="h1">特色服务</div>
                                    <a href="//www.yaofangwang.com/jkzt/">健康专题</a>
                                    <a href="//www.yaofangwang.com/bk/">健康百科</a>
                                    <a href="//www.yaofangwang.com/yiyuan/">医院大全</a>
                                    <a href="//www.yaofangwang.com/yaodian/">药房联盟</a>
                                </div>
                            </div>
                        </li>
                        <li class="n"><a href="//www.yaofangwang.com/help/servicecenter.html" class="disa" rel="nofollow">客服中心</a></li><li><a href="javascript:gofavorite();" class="disa">收藏夹</a><s></s></li><li class="person" id="user">	<a href="https://www.yaofangwang.com/manage/Order.aspx" class="fl disa" rel="nofollow">个人中心</a><i class="icons dorpdown"></i><s></s>	<div class="line"></div>	<div class="menu_list" style="display: none;"><a href="https://www.yaofangwang.com/manage/Order.aspx" rel="nofollow">需求管理</a><a href="https://www.yaofangwang.com/manage/User_Center_Address.aspx" rel="nofollow">地址管理</a><a href="https://www.yaofangwang.com/manage/MyConsultation.aspx" rel="nofollow">我的咨询</a><a href="https://www.yaofangwang.com/ask/MyQuestion.aspx" rel="nofollow">我的问答</a><a href="https://www.yaofangwang.com/scan.aspx" rel="nofollow">最近浏览</a>	</div></li><li class="cart" id="cart">	<i class="icons cart"></i><a href="https://www.yaofangwang.com/Cart.aspx" class="hi nline disa" rel="nofollow">需求单（<label id="CartNum">0</label>）</a>	<div class="line"></div>	<div class="cart_box" style="display: none;">您的购物车目前没有任何商品，建议您 <a class="green" href="https://reg.yaofangwang.com/login.aspx">[登录]</a> 查看</div></li><li class="fix"><a href="https://reg.yaofangwang.com/login.aspx" id="a_Referer" rel="nofollow">登录</a> / <a href="https://reg.yaofangwang.com/register.aspx" id="a_Referer_register" rel="nofollow">免费注册</a></li></ul>  
            </div>
        </div>
        <div class="header">
            <div class="container">
                    <div class="logo"><a href="//www.yaofangwang.com/" class="name" title="药房网商城(网上药店) "><img src="https://c1.yaofangwang.net/common/images/logo.jpg" alt="药房网商城是专业网上药店(网上药房),经国家药监局认证合法医药网，药品网购就到药房网商城!"></a></div>
                    <div class="search">
                            <form method="get" action="//www.yaofangwang.com/search.html" id="search" class="search_input" onsubmit="return false"> 
                                <ul class="opt_list">
                                    <li class="current"><a href="javascript:void(0);" rel="search_Yao" action="//www.yaofangwang.com/search.html">商品</a><i></i></li>
                                    <li><a href="javascript:void(0);" class="cur" rel="search_Shop" action="//www.yaofangwang.com/yaodian/search.html">商家</a><i></i></li>
                                    <li><a href="javascript:void(0);" rel="search_Mill" action="//www.yaofangwang.com/yaochang/search.html">厂家</a><i></i></li>
                                    <li><a href="javascript:void(0);" rel="search_Hospital" action="//www.yaofangwang.com/yiyuan/search.html">医院</a><i></i></li>
                                </ul>
                                <input type="text" placeholder="请输入批准文号、通用名、商品名、症状" value="" maxlength="60" autocomplete="off" id="keyword" class="txt">
                                <button type="button" class="submit" id="btn_submit">搜索</button>
                                <div class="suggest" id="result"></div>
                            </form>
                            <ul id="hot_search" class="hot_search clearfix"><li class="noborder highlight"><a href="https://www.yaofangwang.com/medicine-584398.html" title="拜阿司匹灵">拜阿司匹灵</a></li><li class="highlight"><a href="https://www.yaofangwang.com/search.html?keyword=%e8%a1%a5%e8%a1%80" title="补血">补血</a></li><li><a href="https://www.yaofangwang.com/search/13791.html" title="999">999</a></li><li class="highlight"><a href="https://www.yaofangwang.com/search/39735.html" title="片仔癀">片仔癀</a></li><li><a href="https://www.yaofangwang.com/search.html?keyword=%e5%a6%88%e5%af%8c%e9%9a%86" title="妈富隆">妈富隆</a></li><li class="highlight"><a href="https://www.yaofangwang.com/search/11442.html" title="阿胶">阿胶</a></li><li><a href="https://www.yaofangwang.com/search/30642.html" title="金戈">金戈</a></li><li><a href="https://www.yaofangwang.com/search/50493.html" title="汤臣倍健">汤臣倍健</a></li></ul>
                        </div>
                    <div class="promise"><a href="//www.yaofangwang.com/promise.html" title="第三方药品交易服务平台,一站多店式药品订购体验,严格审核正规药房供货"></a></div>
                </div>
        </div>
    </header>
    <div class="nav2">
        <div class="container">
            <ul class="mainnav">
            <li class="category"><a href="javascript:void(0);">全部商品分类</a></li>
            <li class="home"><a id="home" href="#">首页</a></li>
            <li><a id="yao" href="#" title="药品超市">药品超市</a></li>
            <li><a id="yaodian" href="" title="药房联盟">药房联盟</a></li>
            <li><a id="yiyuan" href="" title="医院大全">医院大全</a></li>
            <li><a id="news" href="" title="医药资讯">医药资讯</a></li>
            <li><a id="ask" href="" title="健康问答">健康问答</a></li>
        </ul>
        <div class="catlist">
            <ul class="maincat">
                    <ul class="maincat b" style="opacity: 0.9;">
                            <li class="zxyp" id="zxyp1">
                                <h2><a href="" title="中西药品">中西药品</a></h2>
                                <div class="sub clearfix">
                                    <a href="" title="肠胃用药">肠胃用药</a>
                                    <a href="" title="感冒药">感冒药</a>
                                    <a href="" title="心脑血管" class="n">心脑血管</a>
                                </div>
                                <i></i>
                            </li>
                            <li class="ylqx" id="ylqx1">
                                <h2><a href="" title="医疗器械">医疗器械</a></h2>
                                <div class="sub clearfix">
                                    <a href="" title="血压计">血压计</a>
                                    <a href="" title="血糖仪">血糖仪</a>
                                    <a href="" title="创可贴" class="n">创可贴</a>
                                </div>
                                <i></i>
                            </li>
                            <li class="ysbj" id="ysbj1">
                                <h2><a href="" title="养生保健">养生保健</a></h2>
                                <div class="sub clearfix">
                                    <a href="" title="滋补药酒">滋补药酒</a>
                                    <a href="" title="补钙">补钙</a>
                                    <a href="" title="补气养血" class="n">补气养血</a>
                                </div>
                                <i></i>
                            </li>
                            <li class="jsyp" id="jsyp1">
                                <h2><a href="" title="计生用品">计生用品</a></h2>
                                <div class="sub clearfix">
                                    <a href="" title="避孕套">避孕套</a>
                                    <a href="" title="避孕药">避孕药</a>
                                    <a href="" title="验孕检查" class="n">验孕检查</a>
                                </div>
                                <i></i>
                            </li>
                            <li class="zyyp" id="zyyp1">
                                <h2><a href="" title="中药饮片">中药饮片</a></h2>
                                <div class="sub clearfix">
                                    <a href="" title="西洋参">西洋参</a>
                                    <a href="" title="三七">三七</a>
                                    <a href="" title="灵芝孢子粉" class="n">灵芝孢子粉</a>
                                </div>
                                <i></i>
                            </li>
                            <li class="mrhf nb" id="mrhf1">
                                <h2><a href="" title="美容护肤">美容护肤</a></h2>
                                <div class="sub clearfix">
                                    <a href="" title="祛痘">祛痘</a>
                                    <a href="" title="祛斑">祛斑</a>
                                    <a href="" title="疤痕修复" class="n">疤痕修复</a>
                                </div>
                                <i></i>
                            </li>
                        </ul>
            </ul>
        </div>
        <a href="#" target="_blank" class="header-img">
            <img src="img/index.png" width="180px" height="330px">
        </a>
        <div class="xsqg">
                <div class="h2">
                    <i class="ic ic-xs"></i>
                    <span class="tit">限时抢购</span>
                    <div class="timer" style="display: none;">
                        <span>剩余</span>
                        <span class="tm js-hour">00</span>:
                        <span class="tm js-min">00</span>:
                        <span class="tm js-sec">00</span>
                    </div>
                </div>
                <div class="cont">

                    <div class="item hover">
                        <input type="hidden" id="hidfsmedicineid6724020" value="6724020">
                        <a href="//www.yaofangwang.com/detail-6724020.html" class="img" target="_blank">
                        <input type="hidden" id="hidFlashSale" value="2017/5/25 12:05:00">
                        <img src="https://c1.yaofangwang.net/Common/Upload/Medicine/629/629950/2ec9d310-bd82-44c1-a1fe-e287f0e81dc89435.jpg_300x300.jpg" alt="创口贴">
                        <i class="ic ic-sheng"><span><small>￥</small>5.90</span></i>                 </a>
                        <div class="ewm">
                        <div class="h3">APP扫码专享</div>
                        </div>
                        <a href="#" class="name" target="_blank">
                            创口贴
                        </a>
                        <div class="price">
                        <small>￥</small>6.90 <del>￥12.80</del>
                        </div>
                    </div>

                    <div class="item good">
                       <input type="hidden" id="hidfsmedicineid8746374" value="8746374">
                        <a  class="img" >
                        <input type="hidden" id="hidFlashSale" value="2017/5/25 12:05:00">
                        <img src="" alt="小儿氨酚黄那敏颗粒">
                        <i class="ic ic-sheng"><span><small>￥</small>7.10</span></i>                 </a>
                        <a href="" class="name" target="_blank">
                        <span></span>
                        </a>
                        <div class="price">
                            <small>￥</small><span>8.70</span><del>￥15.80</del>
                        </div>
                    </div>

                    <div class="item good">
                        <input type="hidden" id="hidfsmedicineid5891167" value="5891167">
                        <a  class="img">
                            <input type="hidden" id="hidFlashSale" value="2017/5/25 12:05:00">
                            <img src="" alt="藿香祛暑软胶囊">
                            <i class="ic ic-sheng"><span><small>￥</small>8.00</span></i>                 
                        </a>
                        <a  class="name" target="_blank">
                           <span></span>
                        </a>
                        <div class="price">
                            <small>￥</small><span>11.80</span><del>￥19.80</del>
                        </div>
                    </div>

                    <div class="item good">
                        <input type="hidden" id="hidfsmedicineid5947213" value="5947213">

                        <a  class="img" target="_blank">
                        <input type="hidden" id="hidFlashSale" value="2017/5/25 12:05:00">
                        <img src="" alt="卡通防水创可贴">
                        <i class="ic ic-sheng"><span><small>￥</small>3.30</span></i>                
                        </a>

                        <a class="name" target="_blank">
                            <span></span>
                        </a>

                        <div class="price">
                            <small>￥</small><span>7.50</span><del>￥10.80</del>
                        </div>
                    </div>

                    <div class="item good">
                       <input type="hidden" id="hidfsmedicineid7696503" value="7696503">

                        <a class="img" target="_blank">
                            <input type="hidden" id="hidFlashSale" value="2017/5/25 12:05:00">
                            <img src="" alt="天然胶乳橡胶避孕套">
                        <i class="ic ic-sheng"><span><small>￥</small>10.90</span></i>
                        </a>

                        <a href="#" class="name" target="_blank">
                            <span></span>
                        </a>

                        <div class="price">
                            <small>￥</small><span>9.90</span><del>￥20.80</del>
                        </div>
                    </div>
                                        
                </div>
            </div>
    </div>
    </div>
    
</body>
</html>
<script>
        // $.ajax({
        //     api: 'goods.php',
        //     success: function(res){
        //         // window.eval("({name: 'Tom'})")
        //         // let str = "{name: 'Tom'}"
        //         // JSON.parse(str)
        //         // window.eval("(" + str + ")")
        //         var data = window.eval('(' + res + ')');
        //         if(data.status){
        //             generateTable(data.data);
        //         }
        //     }
        // })

        // function generateTable(data){   
        //     console.log(data)

        // }
        var xhr = new XMLHttpRequest();
        xhr.open("get","goods.php",true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        xhr.send();
        xhr.onreadystatechange=function(){
        if(xhr.readyState==4){
        if(xhr.status==200){
        var data=JSON.parse(xhr.responseText);
             
        
        var good = document.getElementsByClassName('good');
        // var img  = good.getElementsByClassName('img')[0];
        for(var i = 0; i<good.length;i++){

            var img = good[i].getElementsByClassName('img')[0].children[1];
            img.src = data.data1[i].url; 
            img.setAttribute ('data-site',data.data1[i].gid);
           

            img.onclick = function(e){
                target = e.target;    
                var gid = target.getAttribute('data-site');
                window.location = 'detail.html?gid='+gid;                  
            }
                 
            var price = document.getElementsByClassName('price')[i+1].getElementsByTagName('span')[0];
            price.innerHTML = data.data1[i].price;
            
            var name = document.getElementsByClassName('name')[i+2].getElementsByTagName('span')[0];
            name.innerHTML = data.data1[i].name;
            
            }
             
        }
    }
}
</script>