<link rel="stylesheet" href="{{ asset('css/whatsapp-widget.css') }}">
<script src="{{ asset('js/whatsapp-widget.js') }}"></script>



<div class="whatsapp-widget">
    <div class="whatsapp-icon" id="whatsapp-icon">
        <img src="{{ asset('images/whatsapp.svg') }}" alt="WhatsApp">
        <div class="qr-code" style="display: none;">
            <img src="{{ asset('images/qr.png') }}" alt="Scan to Chat">
        </div>
    </div>
</div>