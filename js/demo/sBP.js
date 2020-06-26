// Call the dataTables jQuery plugin
$('#sBPtable').DataTable({
    ajax: {
        url: 'sBP.json',
        dataSrc: "data"
    },
    columns: [
        { data: 'first_name' },
        { data: 'last_name' },
        { data: 'sector' },
        { data: 'employer' },
        { data: 'title' },
        { data: 'service' },
        { data: 'payment'}
    ],
    "pageLength": 10
});