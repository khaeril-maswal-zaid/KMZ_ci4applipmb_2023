<!-- FOOTER -->
<footer>
    <div class="bg-dark text-white text-center py-4">
        <span>Copyright© 2023 Designed &amp; Devaloper by Al~Zaid</span>
    </div>

    <script>
        // membatalkan event default ketika halaman web dimuat
        window.addEventListener('load', function(event) {
            event.preventDefault();

            // setelah 3 detik, redirect ke halaman baru
            setTimeout(function() {
                window.location.href = '<?= $slugPopulerPPC ?>';
            }, 6000);
        });
    </script>
</footer>