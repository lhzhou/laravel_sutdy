@extends('layout.layout')
@section('content')

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
                <td>{{date('Y-m-d h:i:s' , strtotime($value->subscribe_time))}}</td>
                <td>{!!($value->subscribe == 1) ? '关注中': '<span style="color:red">已取消</span>'!!}</td>
            </tr>
            @endforeach

        </tbody>

    </table>

    <div class="col-lg-12">
          {{$results->links()}}
    </div>


@endsection


