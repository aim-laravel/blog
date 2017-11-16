@if ($paginator->hasPages())
    <nav class="pagination is-centered m-t-20">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous" disabled>&laquo;</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous" rel="prev">&laquo;</a>
        @endif

        <ul class="pagination-list">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <li class="disabled">
                    <span class="pagination-ellipsis">&hellip;</span>
                </li>
                @endif
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <li>
                            <a class="pagination-link is-current">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{ $url }}" class="pagination-link" >{{ $page }}</a>
                        </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
            <a disabled class="pagination-next"><span>&raquo;</span></a>
        @endif
    </nav>
@endif
