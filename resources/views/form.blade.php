@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach 
{!! Form::open(array('action' => 'TsController@store')) !!}
<p>{!!Form::text('name')!!}</p>
<p>{!!Form::select('category',array('Family'=> 'Family','Work'=>'work'))!!}</p>
<p>{!! Form::date('date') !!}</p>
<p>{!! Form::submit('submit') !!}</p>
{!! Form::close() !!}