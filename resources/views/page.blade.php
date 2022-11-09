@extends('layouts.layouts_page')

@section('title', $page->seo_title)
@section('caption', $page->title)
@section('description', $page->description)
@section('keywords', $page->keywords)

@section('main')
    {!! $page->content !!}
@endsection('main')
