<div>
    <div class="card h-100 shadow-sm border-0 borad-15" data-aos="fade-left">
        <div class="card-body">
            @if (session('lang') == 'en')
            <h4 class="text-center fw-bold my-3">Send a Message</h4>
            @elseif (session('lang') == 'id')
            <h4 class="text-center fw-bold my-3">Kirim Pesan</h4>
            @endif
           
            <div class="d-flex flex-column gap-3 px-3">
                <input wire:model="name" type="text" class="form-control" placeholder="Name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input wire:model="email" type="email" class="form-control" placeholder="Email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <textarea wire:model="message" placeholder="Message" class="form-control" name="" id="" cols="2"
                    rows="2"></textarea>
                @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <div class="div">
                    <button type="button" wire:click="submit" class="btn btn-secondary mt-3">
                        @if (session('lang') == 'en')
                            Send
                        @elseif (session('lang') == 'id')
                            Kirim
                        @endif
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
