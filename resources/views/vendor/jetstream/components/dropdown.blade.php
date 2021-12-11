@props(['id' => 'navbarDropdown'])

<li {!! $attributes->merge(['class' => 'nav-item dropdown']) !!}>
    <a id="{{ $id }}" href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
        {{ $trigger }}
    </a>

    <div class="pb-2 dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="{{ $id }}">
        {{ $content }}
    </div>
</li>
