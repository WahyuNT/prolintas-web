<div>
    <div class="card px-1  mb-2 mt-2 py-1"style="background-color: #F3F3F3;border-radius: 12px">
        <div class="d-flex  flex-wrap align-items-center">

            <div class=" text-start ps-2">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="col mt-2 mt-lg-0">
                <input wire:model="search"
                    @if (session('lang') == 'en') placeholder="Search for solution" @elseif (session('lang') == 'id') placeholder="Cari Solusi" @endif
                    style="background-color: #F3F3F3" class="form-control border-0">
            </div>
        </div>
    </div>

    @forelse ($faq as $item)
        <div e class="accordion accordion-flush mb-2" id="accordionParent">
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
    @empty
        <div class="alert alert-warning" role="alert">
            @if (session('lang') == 'en')
                No data found
            @elseif (session('lang') == 'id')
                Data tidak ditemukan
            @endif
    @endforelse

    <div class="d-flex justify-content-center mt-2">
        {{ $faq->links() }}
    </div>
</div>
