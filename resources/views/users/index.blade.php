<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Data de nascimento</th>
            <th>Última atualização</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->birth_date }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>