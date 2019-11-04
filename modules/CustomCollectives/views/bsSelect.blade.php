<div class="form-group">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {{Form::select($name, $options, $value, array_merge(['placeholder' => $placeholder ?? $name,'class' => 'form-control'], $attributes))}}
</div>
