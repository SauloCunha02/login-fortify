@extends('layouts.main_layout')
@section('content')
 <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 card p-5">
               
                <form action="{{route('password.email')}}" method="post">
                     @csrf
                    <p class="display-6 text-center">Recuperar Senha</p>
                    <div class="mb-3">
                        <label for="email">indique o seu endereço de email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="mt-4 d-flex justify-content-between">
                        <div>
                            <a href="{{route('register')}}">Já sei a minha conta</a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary px-5">Recuperar senha</button>
                        </div>
                    </div>
                </form>
                @if(session('status') || $errors->any())
                <p>Um email foi enviado para o seu endereço de email com as intruções para recuperação de senha </p>
                <a href="{{route('login')}}">voltar</a>
                @endif



                
            </div>
        </div>
    </div>
@endsection