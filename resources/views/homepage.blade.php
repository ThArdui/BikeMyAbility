@extends('template.projet')

@section('titre', 'Trouvez votre vélo idéal - BikemyAbility')
@section('navbar')
    @include('navBar')
@endsection

@section('contenu')
@include('bikesearch')
@endsection
@section('footer')
    @include('footer')
@endsection
