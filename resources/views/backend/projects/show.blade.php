@extends ('layouts.master')

@section ('title', 'Exibir projeto')

@section ('content')
    <div class="row my-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    {{ $project->projectType->description }}
                </div>

                <div class="card-body">
                    @include ('layouts.projects.info')
                </div>
            </div>

            <div class="card my-3">
                <div class="card-header text-center">
                    Anexos
                </div>

                <div class="card-body">
                    @if (count($project->projectDocuments))
                        @include ('layouts.docs.view')
                    @else
                        <p class="alert alert-warning text-center">
                            Não há anexos disponíveis
                        </p>
                    @endif
                </div>
            </div>
        </div>

        @include ('backend.projects.menu')
    </div>
@endsection
