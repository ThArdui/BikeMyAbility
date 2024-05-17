@extends('template.projet')
@section('titre')
Nous contacter!
@endsection
@section('content')
    <h1>Comment nous contacter?</h1>
    <p>Si vous voullez nous proposer d'autres velos adaptés ou si vous êtes un revendeur des velos et vous avez envie d'ajouter des velos dans notre base des donnés, envoyez nous un message en utilisant ce formulaire. Un de nos bikers va vous repondre dans le plus bref delai.</p>
    <form method="post" action="{{ route('contact') }}" class="col-md-6 mx-auto">
        @csrf
        <div class="form-group">
            <label for="nom">Votre nom et prenom :</label>
            <input type="text" class="form-control" id="nom" name="nom" max="255" required>
        </div>
        <div class="form-group">
            <label for="email">Email - exemple : nom@example.com</label>
            <input type="email" class="form-control" id="email" name="email" max="255" required>
        </div>
        <div class="form-group">
            <label for="phone">Votre numero gsm :</label>
            <input type="tel" class="form-control" id="phone" name="phone" max="20">
        </div>
        <div class="form-group">
            <label for="message">Votre message :</label>
            <input type="text" class="form-control" id="message" name="message" max="2500" min="20" required>
        </div>
        <button type="submit" class="btn btn-primary">Envoyez le message</button>
    </form>
@endsection
