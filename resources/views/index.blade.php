@extends('layouts.layouts')

@section('title', $page->title)
@section('description', $page->description)
@section('keywords', $page->keywords)

@section('main')
    {!! $page->content !!}
@endsection('main')
