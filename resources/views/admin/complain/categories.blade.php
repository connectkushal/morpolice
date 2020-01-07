<div class="box">
    <div class="content">
        <p class="title">{{ __('Category list') }}</p>
        <hr>
        <ol type="1">
        @foreach ($categories as $item)
        <li><h6> {{ $item->name }}</h6> </li>
        <ol type="i"> 
        @foreach ($item->subcategories as $s)
        <li>{{ $s->name }}</li>                                
        @endforeach 
            </ol>
        @endforeach
        </ol>
    </div>
</div>