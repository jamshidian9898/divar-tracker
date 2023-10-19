<div>
    <link rel="stylesheet" href="{{ url('assets/extensions/toastify-js/src/toastify.css') }}">
    <script src="{{ url('assets/extensions/toastify-js/src/toastify.js') }}"></script>
    <script>
        window.addEventListener('toastify:success', event => {
            Toastify({
                text: event.detail.message,
                duration: 3000,
                gravity: "top",
                position: "center",
                style: {
                    background: '#198754'
                }
            }).showToast()
        });
        window.addEventListener('toastify:error', event => {
            Toastify({
                text: event.detail.message,
                duration: 3000,
                gravity: "top",
                position: "center",
                style: {
                    background: '#dc3545'
                }
            }).showToast()
        });
        window.addEventListener('toastify:warning', event => {
            Toastify({
                text: event.detail.message,
                duration: 3000,
                gravity: "top",
                position: "center",
                style: {
                    background: '#ffc107'
                }
            }).showToast()
        });
    </script>
</div>
