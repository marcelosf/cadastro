<p>Name: {{ $user->name }}</p>
<p>E-mail: {{ $user->email }}</p>

<form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">

    @csrf()
    @method('DELETE')

    <button type="submit">Apagar usuário</button>

</form>