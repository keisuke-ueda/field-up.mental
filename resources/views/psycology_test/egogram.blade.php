@extends('layouts.common')

@section('content')
<?php $bg_img = 'psycology_test'; ?>
<div class="parallax-bg bg {{$bg_img}}" style="height: 50px;">
</div>

<div class="parallax-bg {{$bg_img}}">
  <div class="container parallax-bg {{$bg_img}}">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row parallax-bg {{$bg_img}}">
        <div class="col-md-3 parallax-bg {{$bg_img}}">
        </div>
        <div class="col-md-6">
          <h1 style="text-align: center;">エゴグラム</h1>
          <p style="text-align: center;">あなたの特性を知ろう！！</p>
        </div>
        <div class="col-md-3 parallax-bg {{$bg_img}}">
        </div> 
      </div>
    </div>
  </div>
</div>

<div class="parallax-bg {{$bg_img}}" style="height: 20px">
</div>


<div class="parallax-bg {{$bg_img}}">
  <div class="container parallax-bg {{$bg_img}}">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row justify-content-center parallax-bg {{$bg_img}}">
        <!-- 位置調整用カラム-->
        <div class="col-md-10" style="background-color:aquamarine;">
          <form action="#" method="post">
            <h4>ⅰ</h4>
            <table class="table mt-5">
              <tbody>
                <tr>
                  <th>id</th>
                  <th>質問</th>
                  <th>○</th>
                  <th>△</th>
                  <th>✗</th>
                <tr>
                  @foreach($arrays as $array)
                <tr>
                  <td>{{ $array['id'] }}</td>
                  <td>{{ $array['question'] }}</td>
                  <td>
                    <input type="radio" value="round" name="ego<?=$array['id']?>" />
                  </td>
                  <td>
                    <input type="radio" value="triangle" name="ego<?=$array['id']?>" />
                  </td>
                  <td>
                    <input type="radio" value="cross" name="ego<?=$array['id']?>" />
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </form>
        </div>
        <div class="w-100 parallax-bg {{$bg_img}}" style="height: 50px;">
        </div>
        <div class="w-100">
          <button type="button" class="btn btn-primary mx-auto d-block">どうなるかな？</button>
        </div>
        <!-- 位置調整用カラム-->
        <div class="col-md-2 parallax-bg {{$bg_img}}">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="parallax-bg {{$bg_img}}" style="height: 100px">
</div>


<div class="parallax-bg {{$bg_img}}">
  <div class="container parallax-bg {{$bg_img}}">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row justify-content-center parallax-bg {{$bg_img}}">
        <!-- 位置調整用カラム-->
        <div class="col-md-10 overflow-auto" style="height: 400px; background-color:aquamarine;">
         グラフ
        </div>
        <div class="w-100 parallax-bg {{$bg_img}}" style="height: 50px;">
        </div>
        <div class="w-100">
          <button type="button" class="btn btn-primary mx-auto d-block">分析してみよう</button>
        </div>
        <!-- 位置調整用カラム-->
        <div class="col-md-2 parallax-bg {{$bg_img}}">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="parallax-bg {{$bg_img}}" style="height: 100px">
</div>
@endsection

@section('js')
@endsection

@section('title')
エゴグラム
@endsection