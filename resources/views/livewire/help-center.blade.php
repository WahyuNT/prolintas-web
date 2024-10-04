<div>
    @foreach ($faq as $item)
        <div class="accordion accordion-flush mb-2" id="accordionParent">
            <div class="accordion-item border border-2" style="border-radius: 12px">
                <h2 class="accordion-header">
                    <button style="border-radius: 12px" class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#flush-{{ $item->id }}" aria-expanded="false"
                        aria-controls="flush-{{ $item->id }}">
                        @if (session('lang') == 'en')
                            {{ $item->title }}
                        @elseif (session('lang') == 'id')
                            @if ($item->judul != null)
                                {{ $item->judul }}
                            @else
                                {{ $item->title }}
                            @endif
                        @endif
                    </button>
                </h2>
                <div id="flush-{{ $item->id }}" class="accordion-collapse collapse"
                    data-bs-parent="#accordionParent">
                    @if (session('lang') == 'en')
                        <div class="accordion-body"> {{ $item->desc }}</div>
                    @elseif (session('lang') == 'id')
                        @if ($item->deskripsi != null)
                            <div class="accordion-body"> {{ $item->deskripsi }}</div>
                        @else
                            <div class="accordion-body"> {{ $item->desc }}</div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    @endforeach

    <div class="d-flex justify-content-center">
        {{ $faq->links() }}
    </div>
</div>
