@component('mail::message')
    # Nuovo Messaggio

    <p>Email: {{ $contact['email'] }}</p>

    <p>Message:: {{ $contact['message'] }}</p>
@endcomponent
