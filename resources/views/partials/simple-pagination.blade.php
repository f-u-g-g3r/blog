@if ($paginator->hasPages())
    <div class="my-5 text-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="btn btn-disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></a>
        @else
            <a class="btn btn-primary" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn-primary" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
        @else
            <a class="btn btn-disabled" aria-disabled="true"><span>@lang('pagination.next')</span></a>
        @endif
    </div>
@endif
