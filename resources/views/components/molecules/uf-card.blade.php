@props(['valor'])
<div style="background: #e2e8f0; padding: 12px; border-radius: 6px; margin-bottom: 20px; border-left: 4px solid #3182ce;">
    <strong>Indicador Económico Oficial:</strong> 
    @if($valor)
        Valor UF hoy: <strong>${{ number_format($valor, 2, ',', '.') }} CLP</strong>
    @else
        <span style="color: red;">No fue posible consultar la UF.</span>
    @endif
</div>
