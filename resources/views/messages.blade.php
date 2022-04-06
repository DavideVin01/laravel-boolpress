@component('mail::message')
    # Nuovo Messaggio

    <p>__Email:__ {{ $contact['email'] }}</p>

    <p>__Message::__ {{ $contact['message'] }}</p>
@endcomponent
