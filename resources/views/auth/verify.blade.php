@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora! Só precisamos que você confirme seu email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos para você um email com o link de validação.
                        </div>
                    @endif

                    Antes de utilizar os recursos da aplicação, por favor valide seu e-mail pelo link de verificação que mandamos no seu email. 
                    <br>
                    Caso você não tenha recebido o email de verificação, clique no link a seguir para receber um novo email.
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
