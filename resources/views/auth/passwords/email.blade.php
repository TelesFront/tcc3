
<div  class="background">

<img class="vetor1" src="../img/Vector1.png" alt="detalhe">
        <img class="vetor2" src="../img/Vector2.png" alt="detalhe">
        <img class="bolinhasRosa" src="../img/BolinhasRosa.png" alt="detalhe">
        <img class="bolinhasVerde" src="../img/BolinhasVerde.png" alt="detalhe">
        <img class="circleRosa" src="../img/circleRosa.png" alt="detalhe">
        <img class="circleVerde" src="../img/CircleVerde.png" alt="detalhe">


@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                        
             <div class="form">

                    <div class="senha-nova-container">
                    
                 <div class="senha-nova">{{ __('Redefinição de senha') }}</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="email">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="botao-confirmacao">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar email de confirmação') }}
                                </button>
                            </div>
                        </div>
                        
                        <a class="retorno-login" href="{{ route('login') }}">{{ __('Lembrou de sua senha? Faça o login') }}</a>

                    </form>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <footer class="footer-login">
    <div class="footer-login-container">

                <p>Teles D.A</p>
            <div class="teles-da">      
                <a href="https://www.instagram.com/teles_d.a/?igshid=YmMyMTA2M2Y%3D "  target=”_blank” >
                <img src="img/instagram.svg"  alt="Instagram">
                </a>
                <a href=" https://telesda.com" target=”_blank”>
                <img src="img/web.svg" alt="Web">
                </a>
                <a href="mailto:victor00007567@gmail.com sub?subject=Interesse em contato" target=”_blank”>
                <img src="img/email.svg" alt="Email">
                </a>
            </div>
            


        <div class="icones-apresentacao">
    <a href="https://www.flaticon.com/br/icones-gratis/instagram" target="_blank" title="instagram ícones">Instagram ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/whatsapp" target="_blank" title="whatsapp ícones">Whatsapp ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/facebook" target="_blank" title="facebook ícones">Facebook ícones criados por Freepik - Flaticon</a>  
    <a href="https://www.flaticon.com/br/icones-gratis/tiktok" target="_blank" title="tiktok ícones">Tiktok ícones criados por Freepik - Flaticon</a>  
    <a href="https://www.flaticon.com/br/icones-gratis/o-email" target="_blank" title="o email ícones">O email ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/pagina-da-web" title="página da web ícones">Página da web ícones criados por Freepik - Flaticon</a>
        </div>
    </div>
</footer>
</footer>
</div>
@endsection
</div>