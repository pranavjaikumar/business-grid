// Call the dataTables jQuery plugin
$('#bpForumTable').DataTable({
    ajax: {
        url: 'bpForum.json',
        dataSrc: "data"
    },
    columns: [
        { data: 'first_name' },
        { data: 'last_name' },
        { data: 'sector' },
        { data: 'employer' },
        { data: 'title' },
        { data: 'service' },
        { data: 'payment' },
    ],
    "pageLength": 10
});