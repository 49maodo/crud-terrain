<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-light">Place sticky footer content here.</span>
    </div>
</footer>
<script src="/asset/js/bootstrap.bundle.min.js"></script>
<script src="/asset/js/datatables.min.js"></script>
<script src="/asset/js/app.js"></script>
<script>
    // Initialisation de Datatable
$(document).ready(function() {
    $('#myDataTable').DataTable({
        "oLanguage": {
            "sSearch": "Rechercher",
            "sLengthMenu": "Afficher _MENU_ Lignes par page",
            "sInfo": "Affichage de _START_ à _END_ sur _TOTAL_ enregistrements",
            "oPaginate": {
                "sNext": "Suivant",
                "sPrevious": "Précédent"
            }
        },
        "bPaginate": false,
        "bInfo": false,
    });
});
</script>
</body>

</html>
