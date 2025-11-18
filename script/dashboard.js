        function openPopup() {
            document.getElementById('popupOverlay').classList.add('active');
        }

        function closePopup() {
            document.getElementById('popupOverlay').classList.remove('active');
            document.getElementById('categoryForm').reset();
        }

        // Close popup when clicking outside
        document.getElementById('popupOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closePopup();
            }
        });