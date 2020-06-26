// Call the dataTables jQuery plugin
$('#bpStartTable').DataTable({
    ajax: {
        url: 'bpStart.json',
        dataSrc: "data"
    },
    columns: [
        { data: 'name' },
        { data: 'sector' },
        { data: 'service' },
        { data: 'experience' },
    ],
    "pageLength": 10
});