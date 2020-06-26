// Call the dataTables jQuery plugin
$('#sCOtable').DataTable({
    ajax: {
        url: 'sCO.json',
        dataSrc: "data"
    },
    columns: [
        { data: 'name' },
        { data: 'sector' },
        { data: 'service' },
        { data: 'experience' }
    ],
    "pageLength": 10
});