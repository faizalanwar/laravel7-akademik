@extends('layout/main')
@section('title','Ini Title About')
@section('heading','Dashboard')

@section('container')
<div class="uk-section">
    <div class="uk-container uk-container-center">
        <div class="uk-width-1-2@m uk-align-center">
            <div class="uk-padding uk-box-shadow-large">
                <h2>Login as Students</h2>
                <form class="uk-form-stacked" role="form" method="POST" action="https://wave.devdojo.com/login">
                    <input type="hidden" name="_token" value="P7nocCJqIAZ7g6Z1bKRak1okDU8F8YBjXM3OICJE">
                    <div>
                        <label class="uk-form-label">NRP</label>
                        <input id="nrp" type="text" class="uk-input" name="nrp" value="" required autofocus>
                    </div>
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit" name="button">Login</button>
                        <a class="uk-float-right" href="https://wave.devdojo.com/password/reset">
                            Login Sebagai Admin 
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection