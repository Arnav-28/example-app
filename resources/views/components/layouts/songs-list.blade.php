<table>
    <thead>
    <tr>
        <th>Sr No.</th>
        <th>Song Title</th>
        <th>Artists</th>
        <th>Album</th>
        <th>Duration</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($songs as $songs )
    <tr>
        <td>1</td>
        <td>{{$songs->title}}</td>
        <td>{{$songs->artist}}</td>
        <td>Album 1</td>
        <td>3:30</td>
    </tr>
    @endforeach
    </tbody>
</table>