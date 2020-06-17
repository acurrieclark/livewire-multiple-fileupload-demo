<div style="padding: 2rem;">
    <label style="cursor: pointer; padding: 1rem; border: 1px solid #aaa;" wire:loading.remove wire:target="file">
        Choose
        <input type='file' style="display: none" wire:model="file" accept="application/pdf"/>
    </label>
    <span wire:loading wire:target="file">Uploading...</span>
</div>
