@if ($paginator->hasPages())
    <div class="pagination-wrapper centred">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li><a href="#" >Prev</a></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}">Prev</a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li><a href="#">{{ $element }}</a></li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a href="#" class="active">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
    
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" >Next</a></li>
            @else
                <li><a href="#">Next</a></li>
            @endif
        </ul>
    </div>
@endif