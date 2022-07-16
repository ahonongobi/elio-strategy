@component('mail::message')
# Elio strategy
 Un utilisateur vous a contacté via le formulaire de contact de {{ config('app.name') }}. Voici les informations : \
 OBJET: {{$code}} \
 NOM : {{$name}} \
 EMAIL: {{$email}} \
 TELEPHONE : {{$tel}} \
 MESSAGE : {{$message}} \
Merci,<br>
{{ config('app.name') }}
@endcomponent
