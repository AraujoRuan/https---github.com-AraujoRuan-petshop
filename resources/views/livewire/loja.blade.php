<div>
   {{$message}}

   <form method="post" wire:submit.prevent="create">
      <input type="text" name="message" id="message" wire:model='message'>
      <button type="submit">Pesquisar</button>
   </form>
   

   <hr>

   @foreach ($loja as $loja)
      {{$loja->user->name}} - {{$loja->content}} <br>
   @endforeach
</div>
