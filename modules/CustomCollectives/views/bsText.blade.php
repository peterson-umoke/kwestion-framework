<div class="form-group">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    @if($type=='text')
        {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    @elseif($type=='hidden')
        {{ Form::hidden($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    @elseif($type == 'password')
        {{ Form::password($name, array_merge(['class' => 'form-control'], $attributes)) }}
    @elseif($type == 'file')
        {{ Form::file($name, array_merge(['class' => 'form-control-file'], $attributes)) }}
    @elseif($type == 'email')
        {{ Form::email($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    @elseif($type == 'number')
        {{ Form::number($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    @endif
</div>
