<div class="form-group form-check{{$isInline ? ' form-check-inline' : ''}}">
    {{Form::checkbox($name, $value, $isChecked, array_merge(['class' => 'form-check-input'], $attributes))}}
    {{ Form::label($name, null, ['class' => 'form-check-label']) }}
</div>