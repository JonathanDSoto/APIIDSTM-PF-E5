<div class="card col p-0 shadow position-relative" style="width: 18rem">
    <div class="dropdown position-absolute end-0">
        <button
            class="btn btn-primary p-1"
            id="actions"
            data-bs-toggle="dropdown"
            type="button"
            data-bs-display="static"
        >
            <i class="tf-icons ti ti-menu"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="actions">
            <li>
                <div class="dropdown-item p-0">
                    <button
                        class="btn btn-primary"
                        style="width: 100%"
                        type="button"
                    >
                        <i class="menu-icon tf-icons ti ti-pencil"></i>
                        <span>Edit</span>
                    </button>
                </div>
            </li>
            <li>
                <div class="dropdown-item p-0">
                    <button
                        class="btn btn-danger"
                        style="width: 100%"
                        type="button"
                    >
                        <i class="menu-icon tf-icons ti ti-trash"></i>
                        <span>Delete</span>
                    </button>
                </div>
            </li>
        </ul>
    </div>
    <img
        src="{{ asset('assets/img/machape/fail.png') }}"
        class="card-img-top"
        alt="Image of {{ $title }}"
    />
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $description }}</p>
        @if($price !== '')
        <p class="card-text">${{ $price }}</p>
        @endif
        <a href="{{ $route }}" class="btn btn-primary"> Detalles </a>
    </div>
</div>
