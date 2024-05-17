@extends('template.projet')
@section('titre')
Nous contacter!
@endsection
@section('content')
    <h1>Comment nous contacter?</h1>

    <p>Si vous voulez nous proposer d'autres velos adaptés ou si vous êtes un revendeur de vélos et vous avez envie d'en ajouter dans notre base des données, envoyez nous un message en utilisant ce formulaire. Un de nos bikers vous répondra dans les plus brefs délais. </p>
    <p> * Champs obligatoires</p>
    <form method="post" action="{{ route('contact') }}" class="col-md-6 mx-auto">
        @csrf
        <div class="form-group">
            <label for="nom">Votre nom et prenom <span aria-hidden="true"> * </span> :</label>
            <input type="text" class="form-control" id="nom" name="nom" max="255" required>
        </div>
        <div class="form-group">
            <label for="email">Email ( ex : nom@example.com) <span aria-hidden="true"> * </span> :</label>
            <input type="email" class="form-control" id="email" name="email" max="255" required>
        </div>
        <div class="form-group">
            <label for="phone">Votre numéro de gsm <span aria-hidden="true"> * </span> :</label>
            <input type="tel" class="form-control" id="phone" name="phone" max="20">
        </div>
        <div class="form-group">
            <label for="message">Votre message <span aria-hidden="true"> * </span> :</label>
            <textarea class="form-control" id="message" name="message"  cols="10" rows="8" required>  </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyez le message</button>
    </form>
@endsection
