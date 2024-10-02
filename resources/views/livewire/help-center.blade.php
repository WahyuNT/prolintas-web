<div>
    @foreach ($faq as $item)
        <div class="accordion accordion-flush mb-2" id="accordion{{ $item->id }}">
            <div class="accordion-item border border-2" style="border-radius: 12px">
                <h2 class="accordion-header">
                    <button style="border-radius: 12px" class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#flush-{{ $item->id }}" aria-expanded="false"
                        aria-controls="flush-{{ $item->id }}">
                        {{ $item->title }}
                    </button>
                </h2>
                <div id="flush-{{ $item->id }}" class="accordion-collapse collapse"
                    data-bs-parent="#accordion{{ $item->id }}">
                    <div class="accordion-body"> {{ $item->desc }}</div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $faq->links() }}
    </div>
</div>
