@props(['type' => 'button', 'variant' => 'primary'])
<button type="{{ $type }}" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; color: white; background-color: {{ $variant === 'danger' ? '#dc3545' : '#28a745' }};">
    {{ $slot }}
</button>
