@extends('layouts.protblog')

@section('header')
    <a href="/">Qiita</a>
    <form action="/find" method="post">
        @csrf
        <input type="text" name="input" placeholder="記事のあいまい検索" value="{{old('input')}}">
        <input type="submit" value="検索">
    </form>
@endsection

@section('title', 'ProtBlog')

@section('menu_title')
Qiitaトップ
@endsection

@section('content')



<!-- 新規登録ボタン -->
    <!-- <a href="/kouka2_2/add">新規登録</a> -->

<!-- 新着記事一覧 -->
    <table>
        <tr><th>post_user_id</th><th>post_title</th><th>text</th></tr>
        <!-- 以下繰り返し部分 -->
        @foreach ($items as $item)
            <tr>
                <td>{{$item -> post_user_id}}</td>
                <td>{{$item -> post_title}}</td>
                <td>{{$item -> text}}</td>
                <!-- <td><a href="/kouka2_2/show?id={{$item->id}}">詳細</a></td>
                <td><a href="/kouka2_2/edit?id={{$item->id}}">更新</a></td>
                <td><a href="/kouka2_2/del?id={{$item->id}}">削除</a></td> -->
            </tr>
        @endforeach
    </table>


@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection