<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($notifications as $item)
            <div class="card mb-2">
                <div class="card-header">{{ $item->title }}</div>
                <div class="card-body">
                    {{ Str::limit($item->description, 25, '...') }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
