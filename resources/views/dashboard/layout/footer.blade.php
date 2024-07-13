</div>
</div>
</div>
<script src="{{ url('back') }}/libs/jquery/dist/jquery.min.js"></script>
<script src="{{ url('back') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('back') }}/js/sidebarmenu.js"></script>
<script src="{{ url('back') }}/js/app.min.js"></script>
<script src="{{ url('back') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{ url('back') }}/libs/simplebar/dist/simplebar.js"></script>
<script src="{{ url('back') }}/js/dashboard.js"></script>

<script>
    document.querySelectorAll('.hapus').forEach(function(element) {
        element.addEventListener('click', function(event) {
            if (!confirm('Apakah anda yakin ingin menghapus data ini?')) {
                event.preventDefault();
            }
        });
    });
</script>

</body>

</html>
