
<div  class="background">
<div id="preloader">
    <div class="inner">
    <img class="gif" src="img/1491.gif" alt="loading">
    </div>
</div>

<img class="vetor1" src="img/Vector1.png" alt="detalhe">
        <img class="vetor2" src="img/Vector2.png" alt="detalhe">
        <img class="bolinhasRosa" src="img/BolinhasRosa.png" alt="detalhe">
        <img class="bolinhasVerde" src="img/BolinhasVerde.png" alt="detalhe">
        <img class="circleRosa" src="img/circleRosa.png" alt="detalhe">
        <img class="circleVerde" src="img/CircleVerde.png" alt="detalhe">

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="form">
                    <form method="POST" action="{{ route('register') }}">
                    <div class="cadastro-label">{{ __('Cadastrar') }}</div>
                        @csrf
                                
                        <div class="nome">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="email">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="senha">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="confirmarsenha">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="botao-cadastro">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar Cadastro') }}
                                </button>
                            </div>
                        </div>
                    </form>
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
    </div>


</div>
@endsection
</div>
<script src="js/preloader.js"></script>