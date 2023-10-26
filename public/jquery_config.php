<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $('#mitarbeiterTabelle').DataTable({
                order: [[3, 'asc']],
                language: {
                    decimal: ',',
                    emptyTable: 'Keine Daten in der Tabelle vorhanden',
                    info: 'Zeige _START_ bis _END_ von _TOTAL_ Einträgen',
                    infoEmpty: 'Zeige 0 bis 0 von 0 Einträgen',
                    infoFiltered: '(gefiltert von _MAX_ Einträgen insgesamt)',
                    infoPostFix: '',
                    thousands: '.',
                    lengthMenu: '_MENU_ Einträge anzeigen',
                    loadingRecords: 'Wird geladen...',
                    processing: 'Verarbeitung...',
                    search: 'Suchen:',
                    zeroRecords: 'Keine passenden Einträge gefunden',
                    paginate: {
                    first: 'Erste',
                    last: 'Letzte',
                    next: 'Nächste',
                    previous: 'Zurück'
                    },
                    aria: {
                    sortAscending: ': aktivieren, um Spalte aufsteigend zu sortieren',
                    sortDescending: ': aktivieren, um Spalte absteigend zu sortieren'
                    }
                }
            });
        </script>