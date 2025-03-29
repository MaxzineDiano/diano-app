@props([
    'active' => false
])

<a class="nav-link {{ $active ? 'active' : '' }}" 
   {{ $active ? 'aria-current="page"' : '' }}
   {{ $attributes }}>
   {{ $slot }}
</a>
