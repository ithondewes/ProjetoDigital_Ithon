@extends ('layouts.master')

@section ('title', 'Documentos do projeto')

@section ('content')
    <div class="row my-4">
        <div class="col-md-12">
            @include ('layouts.status')

            <div class="card" style="font-weight: bold;">
                <div class="card-header text-center">
                    Observações
                </div>

                <div class="card-body">
                    <ul>
                        <li>Os documentos devem estar no formato PDF</li>
                        <li>Documentos com multiplas folhas, como plantas baixas, devem ser juntadas em um arquivo
                            unico
                        </li>
                        <li>O tamanho máximo por arquivo é de 10mb</li>
                        {{-- <li>Caso seja maior é recomendo o uso de um otimizador de PDFs</li> --}}
                        <li>Todos os documentos deverão estar assinados pelo Proprietário/Requerente e pelo Ténico
                            Responsável
                        </li>
                        <li>Todos os processos deverão vir acompanhados de recibo de pagamento de protocolo e de
                            requrimento (Quando for o caso)
                        </li>
                        <li>Cópia da Matricula atualizada do imóvel com no máximo 30 dias</li>
                        <li>Nenuma obra (Construção, reconstrução, reforma, aumento ou demolição) poderá ser iniciada
                            sem a prévia autorização do Município
                        </li>
                        <li>Nenuma obra (Construção, reconstrução, reforma, aumento ou demolição) poderá abrir janelas a
                            menos de 1,5 metros do terreno vizinho em paredes paralelas e a menos de 0,75 metros em
                            paredes perpendiculares à divisa
                        </li>
                        <li>Projetos de construção em imóveis marginais as rodovias estaduais e federais deverão
                            observar a faixa <i>"non aedificandi"</i> e apresentar comprovação da aprovação de acesso à
                            rodovia pelo DNIT ou DAER
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header text-center">
                    Documentos <b>Obrigatórios</b> da solicitação
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <form method="POST" action="/project-docs/{{$project->id}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @foreach($project->projectType->documentTypes as $documentType)
                                <div class="form-group">
                                    <label for="{{$documentType->id}}"><h3>{{$documentType->title}}</h3></label>
                                    <p>{{$documentType->text}}</p>
                                    <input type="file" class="form-control" name="{{$documentType->id}}"
                                           value="{{ old($documentType->id) }}" required>
                                </div>
                                <hr>
                            @endforeach
                            <button type="submit" class="btn btn-primary btn-custom">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
