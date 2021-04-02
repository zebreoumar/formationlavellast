@component('mail::message')
# Nouvelle commande
une nouvelle commande vient d'etre ajouté



ci dessous les informations de la commande

Ceci est un mail test

## Voir le produit le :

@component('mail::button', ['url' => ''])


Designation : {{ $commande->produit->designation }}

prix : {{ $commande->produit->prix }}

pays source : {{ $commande->produit->pays_source }}

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
