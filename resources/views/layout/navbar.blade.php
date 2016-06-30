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
                            <li class="dropdown-header">Button groups</li>
                            <li><a href="#">Basic example</a></li>
                            <li><a href="#">Button toolbar</a></li>
                            <li><a href="#">Sizing</a></li>
                            <li><a href="#">Nesting</a></li>
                            <li><a href="#">Vertical variation</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Button dropdowns</li>
                            <li><a href="#">Single button dropdowns</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Input groups</li>
                            <li><a href="#">Basic example</a></li>
                            <li><a href="#">Sizing</a></li>
                            <li><a href="#">Checkboxes and radio addons</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Navs</li>
                            <li><a href="#">Tabs</a></li>
                            <li><a href="#">Pills</a></li>
                            <li><a href="#">Justified</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Navbar</li>
                            <li><a href="#">Default navbar</a></li>
                            <li><a href="#">Buttons</a></li>
                            <li><a href="#">Text</a></li>
                            <li><a href="#">Non-nav links</a></li>
                            <li><a href="#">Component alignment</a></li>
                            <li><a href="#">Fixed to top</a></li>
                            <li><a href="#">Fixed to bottom</a></li>
                            <li><a href="#">Static top</a></li>
                            <li><a href="#">Inverted navbar</a></li>
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
