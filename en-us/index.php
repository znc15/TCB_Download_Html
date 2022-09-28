<!DOCTYPE html>
<html lang="“zh-CN”">
  <!--   Header Start   -->
  <head>
    <!--   Html info Start   -->
    <meta name="author" content="" />
    <meta charset="utf-8" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="description" content="TCB Work Minecraft文件下载页面" />
    <meta name="keywords" content="TCB Work Minecraft文件下载页面" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TCB Work Minecraft文件下载页面</title>
    <!--   Html info End   -->

    <!--   CSS Start   -->
    <link href="https://assets.cdn.tcbmc.cc/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/animate.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/style.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/responsive.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/mdui.min.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/mdui.css" rel="stylesheet" />
    <link href="https://assets.cdn.tcbmc.cc/assets/css/index.e8409b3c.css" rel="stylesheet" />
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/css/all.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/css/fontawesome.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" rel="stylesheet">
    <!--   CSS End   -->
  </head>
  <!--   Header End   -->
  <!-- Body Start -->
  <body class="mdui-drawer-body-left mdui-drawer-full-height" style="padding-top: 100px;">
    <!-- APPBAR Start -->
    <header>
    <div class="mdui-appbar mc-appbar mdui-appbar-fixed mdui-shadow-0"> 
    <div class="mdui-toolbar toolbar mdui-text-color-black mdui-shadow-3"> 
    <button id="toggle" class="drawer mdui-btn mdui-btn-icon mdui-ripple">
      <i class="mdui-icon material-icons">menu</i>
    </button> 
    <a href="javascript:;" class="mdui-typo-title">TCB Work</a> 
    <div class="mdui-toolbar-spacer"></div> 
    <a onclick="javascript:location.reload();" class="mdui-btn mdui-btn-icon">
       <i class="mdui-icon material-icons">refresh</i>
    </a> 
    <div class="mdui-contain"> 
     <button class="drawer mdui-btn mdui-btn-icon mdui-ripple" mdui-menu="{target: '#example-2'}">
      <i class="mdui-icon material-icons">language</i>
     </button> 
     <ul class="mdui-menu" id="example-2"> 
      <li class="mdui-menu-item"> <a href="/zh-cn" class="mdui-ripple">
        <i class="mdui-menu-item-icon mdui-icon material-icons">remove_red_eye</i>Chinese/中文</a></li> 
      <li class="mdui-menu-item"> <a href="/en-US" class="mdui-ripple">
        <i class="mdui-menu-item-icon mdui-icon material-icons">remove_red_eye</i>English/英文</a></li> 
     </ul> 
    </div> 
    </div> 
    </div>
    </header>
    <!-- APPBAR End -->

    <!-- List Start -->
    <div class="mdui-drawer mdui-shadow-1 mc-drawer" id="drawer">
      <div class="mdui-list">
      <a href="/zh-cn" class="mdui-list-item mdui-ripple mdui-list-item-active">
        <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
        <div class="mdui-list-item-content">首页</div>
      </a>
      <li class="mdui-subheader">下载/Download</li>
      <a href="/zh-cn/java/" class="mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">free_breakfast</i>
        <div class="mdui-list-item-content">Java下载</div>
      </a>
      <a href="/zh-cn/modpack" class="mdui-list-item mdui-ripple">
        <li class="mdui-list-item-icon mdui-icon material-icons">cloud_download</li>
        <div class="mdui-list-item-content">整合包下载</div>
      </a>
      <a href="/zh-cn/hmcl" class="mdui-list-item mdui-ripple">
        <li class="mdui-list-item-icon mdui-icon material-icons">move_to_inbox</li>
        <div class="mdui-list-item-content">启动器下载</div>
      </a>
      <a href="/zh-cn/be" class="mdui-list-item mdui-ripple">
        <li class="mdui-list-item-icon mdui-icon material-icons">android</li>
        <div class="mdui-list-item-content">基岩版下载</div>
      </a>
      <li class="mdui-subheader">联系方式</li>
      <a href="https://jq.qq.com/?_wv=1027&k=hFdySg2N" class="mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">email</i>
        <div href="https://jq.qq.com/?_wv=1027&k=hFdySg2N" class="mdui-list-item-content">QQ群</div>
      </a>
      <li class="mdui-subheader">友情链接/Link</li>
      <a href="https://www.miaofile.com" class="mdui-list-item mdui-ripple">
        <i class="fa-brands fa-internet-explorer mdui-list-item-icon"></i>
        <div class="mdui-list-item-content">储存猫</div>
      </a>
     </div>
     <div class="copyright">
      <p>
        <br>© 2022
        <br>TCB Work's
        <br>Minecraft Server.
        <br>Design with by TCB Work's HTML.
        <br>Powered by
        <a href="https://mdui.org" target="_blank">MDUI&Ali-a.cn</a>
      </p>
    </div>
  </div>
  <!-- List End -->

  <!-- Home#1 Start -->
  <div id="page-index" class="mdui-container">
    <div class="banner">
      <h1>
        <strong>T</strong>CB <strong>W</strong>ork's
        <strong>M</strong>inecraft <strong>下载</strong>中心
      </h1>
      <div class="meta">
        轻松下载Java，TMC整合包，HMCL启动器，基岩版客户端，游玩更方便
      </div>
      <div class="actions">
        <a href="/docs" class="mdui-btn mdui-ripple" target="_blank"
          >加入Q群</a
        ><a
          href="/khd/"
          class="mdui-btn mdui-ripple"
          >立即下载</a
        >
      </div>
      <div class="more-meta mdui-typo">
        <span class="current">当前版本：v1.2.0</span
        ><span
          ><a
            href="https://github.com/MiaoFile"
            rel="nofollow"
            target="_blank"
            >Github</a
          ></span
        ><span
          ><a
            href="https://gitee.com/roundcloud_0"
            rel="nofollow"
            target="_blank"
            >码云</a
          ></span
        ><span
          ><a
            href="https://jq.qq.com/?_wv=1027&k=hFdySg2N"
            rel="nofollow"
            target="_blank"
            >QQ群：690216634</a
          ></span
        >
      </div>
    </div>
        <!--   About Us Start   -->
        <div class="utf-services-area bg-gray default-padding bottom-less">
          <div class="container">
              <div class="row">
                  <div class="utf-site-heading text-center">
                      <div class="col-md-8 col-md-offset-2">
                          <h2>我们的<span>优势</span></h2>
                          <p>感谢您选择我们！您的到来将会使我们变得更好！</p>
                      </div>
                  </div>
              </div>
              <center>
              <div class="row">
                  <div class="utf-services-items">
                      <div class="col-md-4 col-sm-6 equal-height">
                          <div class="item mdui-ripple">
                              <i class="flaticon-layers-1"></i>
                              <h4>高性能</h4>
                              <p>我们拥有高性能，高并发的服务器主机，拒绝任何卡顿！这将会给您带来更棒，更畅快的游戏体验。</p>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 equal-height">
                          <div class="item mdui-ripple">
                              <i class="flaticon-sketch"></i>
                              <h4>经验丰富</h4>
                              <p>我们的服务器最初可以追溯到2020年的夏天，我们早已经在历史的寒风中积累了不少经验和勇气！</p>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 equal-height">
                          <div class="item mdui-ripple">
                              <i class="flaticon-technical-support"></i>
                              <h4>用户体验</h4>
                              <p>遇到问题了？没关系，联系我们的服务器管理！我们将会在收到后1个工作日之内回应您的问题及解决方案！</p>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 equal-height">
                          <div class="item mdui-ripple">
                              <i class="flaticon-growth"></i>
                              <h4>网络节点</h4>
                              <p>我们使用的是BGP宽带，服务器节点位置位于中国，降低您的访问延迟，提高您的游戏体验！</p>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 equal-height">
                          <div class="item mdui-ripple">
                              <i class="flaticon-network"></i>
                              <h4>特色</h4>
                              <p>我们已经逐渐发展出了，我们自己的特色，以及良好的社区环境，总之就是欢迎您加入我们！</p>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 equal-height">
                          <div class="item mdui-ripple">
                              <i class="flaticon-jigsaws"></i>
                              <h4>可持续性</h4>
                              <p>每一次传送都将会是随机传送，世界会定期或不定期刷新以确保资源发展的可持续性，给您带来更棒的游戏体验！</p>
                          </div>
                      </div>
                  </div>
              </div>
              </center>
          </div>
      </div>
      <!--   About Us End   -->
  </div>
  <!-- Home#1 End -->

  <!-- Thanks Start -->
  <article id="aboutus" name="aboutus">
    <div class="utf-team-area carousel-shadow default-thanks-padding">
        <div class="container">
            <div class="row">
                <div class="utf-site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2><span>特别 </span>鸣谢</h2>
                        <p>这里特别感谢熊可狸提供的服务器以及网站模板</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <center>
                <div class="col-md-12">
                    <div class="utf-team-items utf-team-carousel owl-carousel owl-theme">
                        <!--Start KumaAli-->
                        <div class="item">
                            <a target="_blank" href="http://ali-a.cn" title="Blog">
                                <div class="thumb mdui-ripple">
                                    <img src="https://m1.miaomc.cn/uploads/20210117_d75593a0c9af2.png" />
                                </div>
                            </a>
                            <div class="info mdui-ripple">
                                <h4><a target="_blank" href="http://ali-a.cn" title="Blog">熊可狸</a></h4>
                                <span>网站源码提供者,Java版服务器底层架构开发者</span>
                                <p>嗯...也就那样吧，是个很宅的死宅呢！平时就喜欢折腾！想学的东西还有很多呢</p>
                            </div>
                        </div>
                        <!--Start KumaAli-->
                    </div>
                </div>
            </div>
        </div>
      </div>
    </center>
  </article>
  <!-- Thanks End -->
  
  <!-- JavaScript Start -->
  <script src="https://assets.cdn.tcbmc.cc/assets/js/mdui.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/mdui.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/jquery-3.2.1.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/bootstrap.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/equal-height.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/jquery.appear.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/jquery.easing.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/modernizr.custom.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/owl.carousel.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/wow.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/isotope.pkgd.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/count-to.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/bootsnav.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/typed.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/YTPlayer.min.js"></script>
  <script src="https://assets.cdn.tcbmc.cc/assets/js/custom_script.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/js/all.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/js/fontawesome.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js"></script>
  <script src="https://eqcn.ajz.miesnfu.com/wp-content/plugins/wp-3d-pony/live2dw/lib/L2Dwidget.min.js"></script>
  <!-- JavaScript End -->

  </body>
  <!-- Body End -->

  <!-- Footer Start -->
  <footer>
    <!-- Live2d Start -->
    <script>
      L2Dwidget.init({
          "model": {
              jsonPath: "https://assets.cdn.tcbmc.cc/assets/model/xiaomai/xiaomai.model.json",
              "scale": 1
          },
          "display": {
              "position": "right", //显示位置左、右
              "width": 75,  // 宽度
              "height": 150, //高度
          },
          "mobile": {
              "show": false,	// 移动端显示
              "scale": 0.2	//移动端显示缩小比例
          },
          "react": {
              "opacityDefault": 0.9,	//默认透明度
              "opacityOnHover": 0.2	//鼠标选中透明度
          }
      });
    </script>
    <!-- Live2d Start -->
  </footer>
  <!-- Footer end -->

</html>