@extends ('layouts.master')

@section ('title', 'Listar Pessoas')

@section ('content')
    <div class="row my-4">
        <div class="col-md-12 mx-auto">
            <div class="d-sm-flex flex-row-reverse">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        Ordenar por:
                    </button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url()->current() }}?by=">
                            Tipo de usuário
                        </a>
                        <a class="dropdown-item" href="{{ url()->current() }}?by=id">
                            Id
                        </a>
                        <a class="dropdown-item" href="{{ url()->current() }}?by=email">
                            E-mail
                        </a>
                        <a class="dropdown-item" href="{{ url()->current() }}?order=desc&by=created_at">
                            Mais recentes
                        </a>
                        <a class="dropdown-item" href="{{ url()->current() }}?by=created_at">
                            Mais antigos
                        </a>
                    </div>
                </div>
            </div>

            <table class="table table-bordered mt-3">
                <thead>
                    <tr class="text-center bg-light">
                        <td colspan="6">Pessoas</td>
                    </tr>

                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>E-mail</th>
                        <th>CPF / CNPJ</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($people as $person)
                        <tr>
                            <td>{{ $person->id }}</td>
                            <td>
                                <a href="/backend/people/{{ $person->id }}">{{ $person->name }}</a>
                            </td>
                            <td>{{ $person->users->first()['role']['description']}}</td>
                            <td>{{ $person->email }}</td>
                            <td>{{ $person->cpf_cnpj }}</td>
                            <td>
                                @can ('create', \ProjetoDigital\Models\User::class)
                                    <a href="/backend/people/{{ $person->id }}/add-user">
                                        Adicionar conta
                                    </a>
                                @else
                                    {{ '###' }}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-4 mb-5">
                {{ $people->appends(['order' => $order, 'by' => $by])->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
