    <div class="form-group">
        <label for="guia_recolhimento"><h3>1-Requerimento e Guia de recolhimento paga:</h3></label>
        <p>Requerimento específico dirigo ao Prefeito Municipal com guia de recolhimento paga</p>
        <input type="file" class="form-control"  name="guia_recolhimento" value="{{ old('guia_recolhimento') }}" required>
    </div>
    <hr>
    <div class="form-group">
        <label for="vias_memorial_descritivo"><h3>2-Via do Memorial Descritivo Simplificado</h3></label>
        <p>Via do Memorial Descritivo Simplificado das Confrontações do imóvel</p>
        <input type="file" class="form-control"  name="vias_memorial_descritivo" value="{{ old('vias_memorial_descritivo') }}" required>
    </div>
    <hr>
    <div class="form-group">
        <label for="plantas"><h3>3-Plantas Baixas</h3></label>
        <p>Uma via, em escala propriada <i>-formatação padrão ABNT-</i>, da planta topográfica contendo todos os elementos técnicos (inclusive situação urbana na quadra,largura da vi pública ou da estreada municipal, contruções existentes e acidentes naturais e artificiais quando for o caso)</p>
        <input type="file" class="form-control"  name="plantas" value="{{ old('plantas') }}" required>
    </div>
    <hr>
    <div class="form-group">
        <label for="art_rrt"><h3>4-ART/RRT</h3></label>
        <p>Via da ART/RRT específica do responsável Técnico com comprovante de pagamento</p>
        <input type="file" class="form-control"  name="art_rrt" value="{{ old('art_rrt') }}" required>
    </div>
    <hr>
    <div class="form-group">
        <label for="martricula_imovel"><h3>5-Matrícula do Imóvel</h3></label>
        <p>Cópia atualizada da matrícula do imóvel em nome do requerente</p>
        <input type="file" class="form-control"  name="martricula_imovel" value="{{ old('martricula_imovel') }}" required>
    </div>
    <hr>
        
    @if ($errors->any())
        <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
        </div>
    @endif
  
