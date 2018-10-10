<form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">

    @csrf
    @method('PUT')

    <label for="user-name">Nome:</label>
    <input type="text" id="user-name" name="name" value="{{ $user->name }}">

    <label for="user-email">E-mail</label>
    <input type="text" id="user-email" name="email" value="{{ $user->email }}">

    <button type="submit">Enviar</button>

</form>