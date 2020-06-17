<div style="padding: 2rem;">
    <label style="display: inline-block; cursor: pointer; padding: 1rem; border: 1px solid #aaa;">
        <span class="text-base leading-normal">Add Files</span>
        <input type='file' style="display: none" wire:model="files" multiple/>
    </label>

    <span wire:loading wire:target="files">Uploading...</span>

    @foreach($files as $key => $file)
        <div>{{ $file->getClientOriginalName() }} <button type="button" wire:click="removeFile({{$key}})">remove</button></div>
    @endforeach
</div>
