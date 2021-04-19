@extends('layouts.common')

@section('content')
  <div class="parallax-bg bg psycology_test">
    <p></p>
  </div>

  <div class="parallax-bg psycology_test">
    <div class="container parallax-bg psycology_test">
      <div class="scrollbox" style="height: auto; color: white;">
      <div class="row">
      
        <h1 style="text-align: center;">エゴグラム</h1>
        <p style="text-align: center;">あなたの特性を知ろう！！</p>
      </div>
      </div>
    </div>
  </div>

  <div class="parallax-bg psycology_test" style="height: 20px">
    <p></p>
  </div>

  
  <div class="parallax-bg psycology_test">
  <div class="container parallax-bg psycology_test">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row">
        <!-- 位置調整用カラム-->
        <div class="col-md-2 parallax-bg psycology_test">
        </div>
        <div class="col-md-8">
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
                        <input type="radio" value="round" name="ego<?=$array['id']?>"/>
                      </td>
                      <td>
                        <input type="radio" value="triangle" name="ego<?=$array['id']?>"/>
                      </td>
                      <td>
                        <input type="radio" value="cross" name="ego<?=$array['id']?>"/>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            <p><input class="btn-primary" type="button" value="どうなるかな？" id="button1"></p>
          </form>
        </div>
        <!-- 位置調整用カラム-->
        <div class="col-md-2 parallax-bg psycology_test">
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="parallax-bg psycology_test" style="height: 200px">
    <p></p>
  </div>


  <div class="parallax-bg psycology_test">
    <div class="container">
      <div class="scrollbox">
        グラフ
      </div>
    </div>
  </div>
@endsection

@section('js')
@endsection

@section('title')
エゴグラム
@endsection