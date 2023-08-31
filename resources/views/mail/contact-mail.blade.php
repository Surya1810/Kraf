<x-mail::message>
    # Message

    {{ $mail_data['body'] }}

    {{-- <x-mail::button :url="''">
        Button Text
    </x-mail::button> --}}

    Thanks,
    {{ $mail_data['fromName'] }}
    {{ $mail_data['fromEmail'] }}
</x-mail::message>
