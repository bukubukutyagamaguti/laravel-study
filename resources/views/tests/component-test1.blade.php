<x-tests.app>
    <x-slot name="heder">hedder1</x-slot>
    こんぽーねんと １
    <x-tests.card title="test太郎" content="本文テスト" :message="$message" />
    
    <x-tests.card title="test太郎" />

    <x-tests.card title="css変更" class="bg-red-200"/>
</x-tests.app>
