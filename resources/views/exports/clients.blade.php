<table>
    <thead>
        <tr>
            <th>Client ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Passport No</th>
            <th>Joining date</th>
            <th>Updated date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $index => $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->passport }}</td>
                <td>{{ $client->created_at }}</td>
                <td>{{ $client->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- 
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>client id</th>
            <th>status id</th>
            <th>created</th>
            <th>updated</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userStatus as $index => $status)
            <tr>
                <td>{{ $status->id }}</td>
                <td>{{ $status->client_id }}</td>
                <td>{{ $status->status_id }}</td>
                <td>{{ $status->created_at }}</td>
                <td>{{ $status->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


<table>
    <thead>
        <tr>
            <th>clientStatus</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientStatus as $index => $status)
            <tr>
                <td>{{ $status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Country ID</th>
            <th>Country Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($countries as $index => $status)
            <tr>
                <td>{{ $status->id }}</td>
                <td>{{ $status->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
 --}}
