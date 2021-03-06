@extends('layouts.main')

@section('title', "Editar usuário")

@section('Content')
<h1>Editar Usuário</h1>
@include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection