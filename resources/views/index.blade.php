@extends('layouts.layouts')

@section('title', $page->title)
@section('description', $page->description)

@section('main')
    {!! $page->content !!}
@endsection('main')
