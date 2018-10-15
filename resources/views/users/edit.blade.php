<form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">

    @csrf
    @method('PUT')
    
    <label for="user-name">Nome:</label>
    <input type="text" id="user-name" name="name" value="{{ $user->name }}">

    <label for="user-email">E-mail</label>
    <input type="text" id="user-email" name="email" value="{{ $user->email }}">

    <p>
        <label for="membership_number">Número de sócio:</label>
        <input type="text" value="{{ $user->membership_number }}" id="membership_number">
    </p>
    <p>
        <label for="phone">Telefone:</label>
        <input type="text" value="{{ $user->phone }}" id="phone">
    </p>
    <p>
        <label for="address">Endereço:</label>
        <input type="text" value="{{ $user->address }}" id="address">
    </p>
    <p>
        <label for="city">Cidade</label>
        <input type="text" value="{{ $user->city }}" id="city">
    </p>
    <p>
        <label for="state">Estado:</label>
        <input type="text" value="{{ $user->state }}" id="state">
    </p>
    <p>
        <label for="membership_year">Ano de filiação:</label>
        <input type="text" value="{{ $user->membership_year }}" id="membership_year">
    </p>
    <p>
        <label for="birth_date">Cidade:</label>
        <input type="text" value="{{ $user->birth_date }}" id="birth_date">
    </p>
    <p>
        <label for="rg">RG:</label>
        <input type="text" value="{{ $user->rg }}" id="rg">
    </p>
    <p>
        <label for="cpf">CPF</label>
        <input type="text" value="{{ $user->cpf }}" id="cpf">
    </p>
    <p>
        <label for="bloody_type">Cidade</label>
        <input type="text" value="{{ $user->bloody_type }}" id="bloody_type">
    </p>
    <p>
        <label for="health_plan">Plano de saúde:</label>
        <input type="text" value="{{ $user->health_plan }}" id="health_plan">
    </p>
    <p>
        <label for="cbm_where">Fez CBM? Onde?</label>
        <input type="text" value="{{ $user->cbm_where }}" id="cbm_where">
    </p>

    <button type="submit">Enviar</button>

</form>