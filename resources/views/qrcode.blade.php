<div class="visible-print text-center">
    {!! QrCode::size(250)->generate('latihan qrcode 1'); !!}
    <p>Scan me to return to the original page.</p>

    <a href="{{ route('qrcode.download') }}">Download</a>
</div>
