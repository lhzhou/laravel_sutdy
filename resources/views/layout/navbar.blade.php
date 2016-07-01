<nav class="navbar navbar-default navbar-static">

    <a class="navbar-brand" href="#">首页</a>


    <div class="collapse navbar-collapse js-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown dropdown-large">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">微信管理 <b class="caret"></b></a>

                <ul class="dropdown-menu dropdown-menu-large row">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">账号管理</li>
                            <li><a href="{{url('account/')}}">账号列表</a></li>
                            <li class="disabled"><a href="#">How to use</a></li>
                            <li><a href="#">Examples</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Dropdowns</li>
                            <li><a href="#">Example</a></li>
                            <li><a href="#">Aligninment options</a></li>
                            <li><a href="#">Headers</a></li>
                            <li><a href="#">Disabled menu items</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">自动回复管理</li>
                            <li><a href="#">文字消息</a></li>
                            <li><a href="#">图片消息</a></li>
                            <li><a href="#">图文消息</a></li>

                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">自定义菜单</li>
                            <li><a href="#">管理菜单</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">数据分析</li>
                            <li><a href="#">待定内容</a></li>

                        </ul>
                    </li>
                </ul>

            </li>

            <li class="dropdown dropdown-large">
                <a href="{{url('auditlog')}}" >日志管理 </a>



            </li>
        </ul>


        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">账号管理 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">操作记录</a></li>
                    <li><a href="#">修改密码</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{url('out')}}">退出登录</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.nav-collapse -->




</nav>
