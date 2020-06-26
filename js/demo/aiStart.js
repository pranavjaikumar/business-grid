// Call the dataTables jQuery plugin
$('#aiStartTable').DataTable({
    ajax: {
        url: 'aiStart.json',
        dataSrc: "data"
    },
    columns: [
        { data: 'name' },
        { data: 'sector' },
        { data: 'service' },
        { data: 'experience' },
        { data: 'earnings' }
    ],
    "pageLength": 10
});