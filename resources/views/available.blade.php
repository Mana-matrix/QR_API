@extends('layouts.app')
@section ('main')
    <?php
        $response = Route::dispatch(Request::create("/getSessions/".env('APP_KEY')."/".$session->session_key, 'GET'));
        $dataSet=$response->getData();
      //  echo $session->session_key;
    ?>
    @foreach($dataSet as $data)
    <div class="row">
        <div class="col-md-6 ">
            <div class="panel panel-success">
               <a href="/chat/{{$session->id}}/{{$data->id}}"> <button class="btn btn-sm btn-primary">{{$data->username}}</button></a>
            </div>
        </div>
    </div>
    @endforeach

@endsection
