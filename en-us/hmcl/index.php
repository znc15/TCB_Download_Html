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
      <a href="/zh-cn" class="mdui-list-item mdui-ripple">
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
      <a href="/zh-cn/hmcl" class="mdui-list-item mdui-ripple mdui-list-item-active">
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

  <!-- Home Start -->
  <div id="page-index" class="mdui-container">

    <!-- Home#1 Start -->
    <div class="banner">
      <h1>
        <strong>启</strong>动器 <strong>下</strong>载
        <strong>页</strong>面 
      </h1>
      <div class="meta">
        主流启动器齐聚一堂，有条件的请去官网下载
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
        <span class="current">当前版本：[Null]</span
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
    <!-- Home#1 End -->

    <!-- Home#2 Start -->
    <div class="utf-services-area bg-gray default-padding bottom-less"> 
    <div class="container"> 
    <div class="row"> 
     <div class="utf-site-heading text-center"> 
      <div class="col-md-8 col-md-offset-2"> 
       <h2>主要版本<span>下载</span></h2> 
       <p>流行版本下载区，版本为Windows x64</p> 
      </div> 
     </div> 
    </div> 
    <div class="mdui-container"> 
     <div class="mdui-row"> 
      <div class="mdui-col-sm-6 mdui-col-md-4"> 
       <div class="mdui-card"> 
        <div class="mdui-card-media"> 
         <img src="https://api.miaomc.cn/image/get?1" height="200" width="200"/> 
         <div class="mdui-card-media-covered mdui-card-media-covered-transparent">
         <div class="mdui-card-media-covered">
          <div class="mdui-card-primary"> 
           <div class="mdui-card-primary-title">
            HMCL 启动器
           </div> 
           </div>
          </div> 
         </div> 
        </div> 
        <div class="mdui-card-actions">
        <a href="https://www.miaofile.com/api/v3/file/source/132374/jdk-8u333-windows-x64.exe?sign=0WXn4zfJvsIs0L7RfsrY2hO1LPgabDEEzgvtXrCpk0I%3D%3A0">
         <button class="mdui-btn mdui-ripple" mdui-dialog="{target: '#download-ts'}">下载</button> 
        </a>
         <div class="mdui-dialog" id="download-ts">
           <div class="mdui-dialog-title">正在下载了喵！</div>
           <div class="mdui-dialog-content">如果下载速度不行，可以使用IDM，FreeDownload等多线程下载器</div>
           <div class="mdui-dialog-actions">
           <button class="mdui-btn mdui-ripple" mdui-dialog-cancel>我知道啦</button>
          </div>
         </div>
         <button class="mdui-btn mdui-ripple">历史版本查看</button> 
        </div> 
       </div> 
      </div> 
      <div class="mdui-col-sm-6 mdui-col-md-4"> 
       <div class="mdui-card"> 
        <div class="mdui-card-media"> 
         <img src="https://api.miaomc.cn/image/get?2" height="200" width="200"/> 
         <div class="mdui-card-media-covered mdui-card-media-covered-transparent">
         <div class="mdui-card-media-covered">
          <div class="mdui-card-primary"> 
           <div class="mdui-card-primary-title">
            PCL 启动器
            </div>
           </div> 
          </div> 
         </div> 
        </div> 
        <div class="mdui-card-actions">
        <a href="https://www.miaofile.com/api/v3/file/source/132379/jdk-11.0.16_windows-x64_bin.exe?sign=7UVYX8fy38hPp5z3RweRE6KzaopYjnaqnwCuTyjFwUA%3D%3A0">
         <button class="mdui-btn mdui-ripple" mdui-dialog="{target: '#download-ts'}">下载</button>
         </a>
         <button class="mdui-btn mdui-ripple">历史版本查看</button> 
        </div> 
       </div> 
      </div> 
      <div class="mdui-col-sm-6 mdui-col-md-4"> 
       <div class="mdui-card"> 
        <div class="mdui-card-media"> 
         <img src="https://api.miaomc.cn/image/get?3" height="200" width="200"/> 
         <div class="mdui-card-media-covered mdui-card-media-covered-transparent"> 
         <div class="mdui-card-media-covered">
          <div class="mdui-card-primary"> 
           <div class="mdui-card-primary-title">
           BAKAXL 启动器
            </div>
           </div> 
          </div> 
         </div> 
        </div> 
        <div class="mdui-card-actions"> 
        <a href="https://www.miaofile.com/api/v3/file/source/132388/jdk-16.0.2_windows-x64_bin.exe?sign=O_wWHpXKBSibMPDpidGsQXEDj42BZxO9EmpT9Fj7CLA%3D%3A0">
         <button class="mdui-btn mdui-ripple" mdui-dialog="{target: '#download-ts'}">下载</button> 
        </a>
         <button class="mdui-btn mdui-ripple">历史版本查看</button> 
        </div> 
       </div> 
       </div>
       </div>
      </div>
     </div>
    </div>
    <!-- Home#2 End -->

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
  <script src="https://cdn.jsdelivr.net/npm/mtu/dist/mtu.min.js"></script>
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
              "scale": 0.15	//移动端显示缩小比例
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