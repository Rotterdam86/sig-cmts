@extends('masters.modele_de_base', ['title' => 'Contacts'])

@section('content') 
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1">
                <h2>Envoyer un Contact</h2>
                <p class="text-muted">Gestion des contacts - <a href="mailto:{{ config('sigcmts.admin_support_email') }}">Bureau Informatique du CMTS</a> &agrave; votre service.</p>

                <form method="POST" action="{{ route('contact_path') }}">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" required="required" value="{{ old('nom') }}"/>
                        {!! $errors->first('nom','<span class="form-text text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('prenom') ? 'has-error' : ''}}">
                        <label for="Prenom" class="form-label">Prénom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" required="required" value="{{ old('prenom') }}"/>
                        {!! $errors->first('prenom','<span class="form-text text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <label for="email" class="form-label">e-mail</label>
                        <input type="email" id="email" name="email" class="form-control" required="required" value="{{ old('email') }}"/>
                        {!! $errors->first('email','<span class="form-text text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('sms') ? 'has-error' : ''}}">
                        <label for="sms" class="form-label sr-only">Message</label>
                        <textarea class="form-control" rows="10" cols="10" required="required" name="sms" id="sms">{{ old('sms') }}</textarea>
                        {!! $errors->first('sms','<span class="form-text text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group d-grid gap-2">
                        <button class="btn btn-primary btn-sm" type="submit">Envoyer le mail &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop 