<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>
<body>

<h1>Announcements</h1>

<table id="announcements" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Active</th>
            <th>Date Created</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($announcements as $announcement)
        <tr>
            <td>{{ $announcement->id }}</td>
            <td>{{ $announcement->title }}</td>
            <td>{{ $announcement->start_date }}</td>
            <td>{{ $announcement->end_date }}</td>
            <td>
            @if ($announcement->is_active)
                <span class="badge badge-success">YES</span>
            @else
                <span class="badge badge-danger">NO</span>
            @endif
            </td>
            <td>{{ $announcement->created_at }}</td>
            <td>
                <a href="/view-announcement/{{ $announcement->id }}" class="btn btn-secondary">
                VIEW
                </a>
                <a href="/edit-announcement/{{ $announcement->id }}" class="btn btn-primary">
                EDIT
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
jQuery(document).ready(function(){
    jQuery('#announcements').DataTable();
});
</script>
</html>