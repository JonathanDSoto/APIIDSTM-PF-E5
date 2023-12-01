@props(['label', 'type' => 'text', 'id', 'name', 'placeholder'])

<div class="col-sm-12">
    <label class="form-label" for="{{ $id }}">{{ $label }}</label>
    <div class="input-group input-group-merge">
        <input
            id="{{ $id }}"
            class="form-control dt-{{ $name }}"
            type="{{ $type }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
        />
    </div>
</div>
