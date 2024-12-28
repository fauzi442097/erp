@php
    $urlImg = $user->photo_url ? asset($user->photo_url) : 'assets/media/svg/avatars/blank.svg';
@endphp
<div class="overflow-hidden symbol symbol-circle symbol-40px me-3">
    <div class="symbol-label">
        <img src="{{ $urlImg }}" alt="Photo {{ $user->name }}" class="w-100" style="object-fit: cover" />
    </div>
</div>
