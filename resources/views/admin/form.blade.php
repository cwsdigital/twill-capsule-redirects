@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'old_url',
        'label' => 'Description',
        'maxlength' => 100
    ])
@stop
