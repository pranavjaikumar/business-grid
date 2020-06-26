// Call the dataTables jQuery plugin
$('#sAItable').DataTable({
  ajax: {
    url: 'sAI.json',
    dataSrc: "data"
  },
  columns: [
    { data: 'first_name' },
    { data: 'last_name' },
    { data: 'sector' },
    { data: 'employer' },
    { data: 'title' },
    { data: 'investment' },
  ],
  "pageLength": 10
});