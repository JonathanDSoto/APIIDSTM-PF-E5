<div class="card col p-0 shadow" style="width: 18rem">
    <img
        src="https://www.idolz.com/wp-content/uploads/2021/08/image2.png"
        class="card-img-top"
        alt="..."
    />
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $description }}</p>
        <p class="card-text">${{ $price }}</p>
        <a
            href="{{ route('service-details', ['slug' => 'Motor', 'service' => 'Oil Change']) }}"
            class="btn btn-primary"
        >
            Detalles
        </a>
    </div>
</div>
