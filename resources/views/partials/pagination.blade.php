@if ($paginator->hasPages())
    <div class="text-center">
        <div class="join my-5">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <button aria-hidden="true" class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">&lsaquo;</button>
                @else

                    <a class="join-item btn" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>

                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <button class="join-item btn btn-disabled" aria-disabled="true">{{ $element }}</button>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <button class="join-item btn btn-active" aria-current="page">{{ $page }}</button>
                            @else
                                <a href="{{ $url }}" class="join-item btn">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="join-item btn" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>

                @else
                    <button aria-hidden="true" class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">&rsaquo;</button>

                @endif
        </div>
    </div>
@endif
