<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<h1>Edit Announcement</h1>

<form method="POST" action="/update-announcement">
@csrf
<input type="hidden" name="id" value="{{ $announcement->id }}" />

Title:
<input type="text" name="title" value="{{ $announcement->title }}" />
<br />

Content:
<textarea name="content" rows='7'>{{ $announcement->content }}</textarea>
<br />

Start Date:
<input type="date" name="start_date" value="{{ $announcement->start_date }}" />
<br />

End Date:
<input type="date" name="end_date" value="{{ $announcement->end_date }}" />
<br />
Status:
<select name="is_active">
<option value="1" @if ($announcement->is_active == 1) selected @endif>YES</option>
<option value="0" @if ($announcement->is_active == 0) selected @endif>NO</option>
</select>

<input type="submit" value="SAVE CHANGES" />
</form>

<a href="/datatable">Back to the list of announcements</a>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
jQuery(document).ready(function(){

});
</script>
</html>