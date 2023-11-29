<div class="card col p-0 shadow" style="width: 18rem">
    <img
        src="{{ $imagePath }}"
        class="card-img-top"
        alt="..."
    />
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $description }}</p>
        @if($price !== '')
            <p class="card-text">${{ $price }}</p>
        @endif
        <a
            {{-- href="{{ route('service-details', ['slug' => 'Motor', 'service' => 'Oil Change']) }}" --}}
            class="btn btn-primary"
        >
            Detalles
        </a>
    </div>
</div>
