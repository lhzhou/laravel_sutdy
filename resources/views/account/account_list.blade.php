@extends('layout.layout')
@section('content')
    <div class="jumbotron" id="jumbotron">
        <form class="form-horizontal"  action="{{url('/account')}}" method="get">
            <div class="col-lg-3">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" name="id" placeholder="id" value="{{Request::input('id')}}">
                    </div>

                    <div class="form-group">
                        <label>openID</label>
                        <input type="text" class="form-control" name="openID" placeholder="openID" value="{{Request::input('openID')}}">
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label>昵称</label>
                        <input type="text" class="form-control" name="nickname" placeholder="昵称" value="{{Request::input('nickname')}}">
                    </div>

                    <div class="form-group">
                        <label>城市</label>
                        <input type="text" class="form-control" name="city" placeholder="城市" value="{{Request::input('city')}}">
                    </div>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label>游戏ID</label>
                        <input type="text" class="form-control" name="gameID" placeholder="游戏ID" value="{{Request::input('gameID')}}">
                    </div>

                    <div class="form-group">
                        <label>推荐人ID</label>
                        <input type="text" class="form-control" name="paternalID" placeholder="推荐人ID" value="{{Request::input('paternalID')}}">
                    </div>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label>关注时间(开始)</label>
                        <div class="input-group date from_date" data-date="" data-date-format="yyyy-mm-dd"  data-link-format="yyyy-mm-dd">
                            <input class="form-control"  type="text" name="startDate" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>关注时间(结束)</label>
                        <div class="input-group date from_date" data-date="" data-date-format="yyyy-mm-dd"  data-link-format="yyyy-mm-dd">
                            <input class="form-control"  type="text" name="endDate" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>

                    </div>

                </div>
            </div>


                 <div class="col-lg-push-9 col-lg-3">
                    <div class="col-lg-12">
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">查询</button>
                            </div>
                    </div>
                 </div>

        </form>
    </div>


    <table class="table table-bordered table-striped">
        <thead>
            <td>ID</td>
            <td>OpenID</td>
            <td>昵称</td>
            <td>游戏ID</td>
            <td>用户地区</td>
            <td>关注时间</td>
            <td>关注状态</td>
        </thead>
        {{--id, openID, subscribe, nickname, sex, language, city, province, country, headimgurl, subscribe_time, remark, groupid, created_at, updated_at, deleted_at, paternalID, gameID, id, id--}}
        <tbody>
            @foreach($results AS $value )
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->openID}}</td>
                <td>{{$value->nickname}}</td>
                <td>{{$value->gameID}}</td>
                <td>{{$value->country .'-'.$value->province .'-'.$value->city}}</td>
                <td>{{date('Y-m-d h:i:s' , $value->subscribe_time)}}</td>
                <td>{!!($value->subscribe == 1) ? '关注中': '<span style="color:red">已取消</span>'!!}</td>
            </tr>
            @endforeach

        </tbody>

    </table>



          {{$results->appends(Request::all())->links()}}



@endsection


