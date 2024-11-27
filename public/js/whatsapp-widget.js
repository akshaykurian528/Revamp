document.addEventListener('DOMContentLoaded', () => {
    // Select the WhatsApp icon element
    const whatsappIcon = document.getElementById('whatsapp-icon');

    // Check if the WhatsApp icon exists in the DOM
    if (whatsappIcon) {
        // Add click event listener to open WhatsApp chat
        whatsappIcon.addEventListener('click', () => {
            const phoneNumber = '1234567890'; // Replace with your WhatsApp number
            const message = 'Hello! I would like to know more.';
            window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
        });

        // Add mouse enter event listener to display QR code
        whatsappIcon.addEventListener('mouseenter', () => {
            const qrCode = whatsappIcon.querySelector('.qr-code');
            if (qrCode) {
                qrCode.style.display = 'block';
            }
        });

        // Add mouse leave event listener to hide QR code
        whatsappIcon.addEventListener('mouseleave', () => {
            const qrCode = whatsappIcon.querySelector('.qr-code');
            if (qrCode) {
                qrCode.style.display = 'none';
            }
        });

    } else {
        console.error('WhatsApp Icon not found in DOM');
    }
});
