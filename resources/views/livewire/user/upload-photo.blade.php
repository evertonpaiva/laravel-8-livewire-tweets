<div>

    <h1>Profile Photo Update</h1>

    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo">
        @error('photo') {{ $message }} @enderror
        <br />
        <button type="submit">Upload Photo</button>
    </form>
</div>
