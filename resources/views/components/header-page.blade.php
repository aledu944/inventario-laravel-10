<header class="mb-8 flex justify-between items-center">
    <div>
        <h1>
            {{ $title }}
        </h1>
        <p>{{ $description }}</p>
    </div>

    <a class="btn-primary" href={{ route($path) }}>{{ $button }}</a>
</header>
