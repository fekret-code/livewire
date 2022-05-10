<div>
    @if($errors->any())
        <div class="" >
            @foreach($errors->all() as $error)
                <b>{{$error}}</b><br>
            @endforeach
        </div>
    @endif
    @if($successMessage)
    <h4>{{$successMessage}} <button wire:click="$set('successMessage','')" >X</button></h4>
    @endif
    <form wire:submit.prevent="submitForm" method="">
        <input name="name" wire:model="name"  placeholder="name">
        <input name="email" wire:model="email"  placeholder="email">
        <input name="password"  wire:model="password" placeholder="password" type="password">
        <button>تسجيل</button>
        <br>
        <h4 wire:loading  wire:target="submitForm">جاري الارسال ...</h4>
    </form>
</div>
