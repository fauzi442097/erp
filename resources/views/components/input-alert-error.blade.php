@props(['messages'])

@if ($messages)
    <div class="p-5 mb-6 alert alert-danger d-flex align-items-center">
        <ul class="mb-0">
            @foreach ((array) $messages as $message)
                <li> {{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
