<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users in $user)
            <tr>
                <td>{{ $user.name }}</td>
                <td>{{ $user.email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>