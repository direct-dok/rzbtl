@extends('layouts.layouts')

@section('title', $page->seo_title)
@section('description', $page->description)
@section('keywords', $page->keywords)

@section('main')
    {!! $page->content !!}
@endsection('main')
