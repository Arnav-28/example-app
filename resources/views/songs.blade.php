<html>

<body>

</b<table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->title() }}</td>
<td>{{ $song->artist() }}</td><br>
<td>{{ $song->album() }}</td><br>
    	    <td>{{ $song->duration() }}</td><br>
</tr>
@endforeach
</table></body>

</html>
