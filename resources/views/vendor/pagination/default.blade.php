@if ($paginator->hasPages())
    <div class="pagination-wrapper m-t-20">
        <nav class="pagination is-centered">
            <ul class="pagination-list">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <a class="disabled"><span>&laquo;</span></a>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
                @endif
               {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li><span class="pagination-ellipsis">{{ $element }}</span></li>
                    @endif
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li><a class="pagination-link is-current">{{ $page }}</a>
                            @else
                                <li><a class="pagination-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach                
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
                @else
                    <li class="disabled"><span>&raquo;</span></li>
                @endif
            </ul>
        </nav>
    </div>

@endif
