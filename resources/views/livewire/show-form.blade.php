<div class="contaneir my-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Crea il tuo articolo!</h1>
            <p class="lead">Per un'informazione libera e gratuita.</p>
            {{-- Qui comincia il form --}}
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" wire:model="title">
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" class="form-control" wire:model="subtitle">
                </div>
                <label for="abstract" class="form-label">Plot</label>
                <div class="mb-3">
                    <textarea class="form-control" cols="30" rows="10" wire:model="abstract"></textarea>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" wire:model="author">
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mb-3 w-50 me-3">
                        <label for="year" class="form-label">Year</label>
                        <input type="number" class="form-control" wire:model="year">
                    </div>
                    <div class="mb-3 w-50 ms-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" wire:model="genre">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            {{-- Qui finisce il form --}}
        </div>
    </div>
</div>