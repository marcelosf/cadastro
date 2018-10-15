<p><img src="{{ $user->picture }}" alt=""></p>
<p>Name: {{ $user->name }}</p>
<p>E-mail: {{ $user->email }}</p>
<p>Nº de sócio: {{ $user->membership_number }}</p>
<p>Telefone: {{ $user->phone }}</p>
<p>Endereço: {{ $user->address }}</p>
<p>Cidade: {{ $user->city }}</p>
<p>Estado: {{ $user->state }}</p>
<p>Ano de filiação: {{ $user->membership_year }}</p>
<p>Data de nascimento: {{ $user->birth_date->format('d/m/Y') }}</p>
<p>RG: {{ $user->rg }}</p>
<p>CPF: {{ $user->cpf }}</p>
<p>Tipo sanguíneo: {{ $user->bloody_type }}</p>
<p>Convênio médico: {{ $user->health_plan }}</p>
<p>
    Fez CBM?
    
    @if($user->cbm_where)
        Sim 
    @else
        Não
    @endif

</p>
<p>
    Onde?

    @if($user->cbm_where)
        {{ $user->cbm_where }}
    @endif
</p>

<form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">

    @csrf()
    @method('DELETE')

    <button type="submit">Apagar usuário</button>

</form>