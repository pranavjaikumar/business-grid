// Call the dataTables jQuery plugin
$('#dataTable').DataTable({
  ajax: {
    url: 'test.json',
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