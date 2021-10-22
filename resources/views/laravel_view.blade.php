@foreach($listes as $liste)
Identifiant : {{$liste->id}}<br>
Nom : {{$liste->nom}}<br>
Age : {{$liste->age}}<br>
Adresse : {{$liste->ville}}<br><br>
@endforeach
