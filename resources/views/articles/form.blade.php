
{!! Form::hidden('dummy',1) !!}
<div class="form-group">
	{!! Form::label('title','title:')!!}
	{!! Form::text('title',null,['class'=>'form-control','foo'=>'bar'])  !!}
</div>


<div class="form-group">
	{!! Form::label('body','Body:')!!}
	{!! Form::textarea('body',null,['class'=>'form-control'])  !!}
</div>

<div class="form-group">
	{!! Form::label('published_at','Published On:')!!}
	{!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control'])  !!}
</div>


<div class="form-group">
	{!! Form::label('taglist','Tags:')!!}
	{!! Form::select('taglist[]',$tags,null,['class'=>'form-control','multiple','id'=>'taglist'])  !!}
</div>

<div class="form-group">
	{!! Form::submit($submitbuttontext,['class'=>'btn btn-primary form-control']) !!}
</div>


@section('footer')

<script>
	$('#taglist').select2({
		placeholder: 'Choose a tag'
	});
</script>



<!--<script>-->
<!--	$('#taglist').select2({-->
<!--		placeholder: 'Choose a tag',-->
<!--		tags:true,-->
<!--		ajax:{-->
<!--			dataType: 'json',-->
<!--			url: 'api/tags',-->
<!--			delay: 250,-->
<!--			data: function(params){-->
<!--				return {-->
<!--					q:params.term-->
<!--				}-->
<!--			},-->
<!--			processResults: function(data)-->
<!--			{-->
<!--				return {results:data}-->
<!--			}-->
<!--		}-->
<!--	});-->
<!--</script>-->



<!--<script>-->
<!--	$('#taglist').select2({-->
<!--		placeholder: 'Choose a tag',-->
<!--		tags:true,-->
<!--		data:[-->
<!--			{id:'one',text:'One'},-->
<!--			{id:'two',text:'Two'},-->
<!--		]-->
<!--	});-->
<!--</script>-->
@endsection