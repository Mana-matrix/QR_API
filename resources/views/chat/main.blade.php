@extends('layouts.app')
@section('main')

    <div class="container-fluid">
        <div class="col-md-12  form-group">
        <div class='row'>
            <div class="container-fluid" id="chat_panel">
                @foreach($items as $message)

                    <div class="row col-md-12"><label class="{{$message->from_id==$ids['id_from']?'me':'you'}}">{{$message->text}}</label></div>

                @endforeach
            </div>
        </div>
            {{ Form::open(array('action' => 'chatController@sendMessage','method'=>'POST')) }}


            {{ Form::hidden('from',$ids['id_from'], []) }}
            {{ Form::hidden('to', $ids['id_to'], []) }}
                <div class='row'>
                    <textarea id="inputArea" name="message" class="form-control"></textarea>
                </div>
                <div class='row'>
                <input type="submit" value="Send" class="btn btn-primary">
                </div>


            {{ Form::close() }}
        </div>
    </div>
@endsection