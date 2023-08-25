<x-mail::message>
    # Message

    {{ $mail_data['body'] }}

    {{-- <x-mail::button :url="''">
        Button Text
    </x-mail::button> --}}

    Thanks,<br>
    {{ $mail_data['fromName'] }}
</x-mail::message>
