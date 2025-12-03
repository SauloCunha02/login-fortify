@extends('layouts.main_layout')
@section('content')
    <h1>usuários não autenticados e autenticados</h1>

    @auth
    <h2>usuários autenticados</h2>
    @endauth

    @guest
    <h2>Usuários visitantes</h2>
    @endguest

@endsection
