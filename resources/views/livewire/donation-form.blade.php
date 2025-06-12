<div style="width: 60%;margin: 40px auto">
    <form wire:submit.prevent="submit">
        {{ $this->form }}

        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
            Donate
        </button>
    </form>

    @if (session()->has('success'))
        <div class="mt-4 text-green-600">
            {{ session('success') }}
        </div>
    @endif
</div>
