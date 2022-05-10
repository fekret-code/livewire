<div>
    @if($successMessage != '')
    <div class="alert alert-success">
        {{$successMessage}}
    </div>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $error => $message)
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @endforeach
    @endif
    <div class="row">
        @foreach($photos as $photo)
            <div class="col-3">
                <img style="width: 100%" src="{{$photo->temporaryUrl()}}" class="img-thumbnail">
            </div>
        @endforeach
    </div>
    <form wire:submit.prevent="submitFile">
        <input type="file" multiple wire:model="photos">
        <button type="submit">upload the files</button>
    </form>
</div>
