<div>
   {{$message}}

   <form method="post" wire:submit.prevent="create">
      <input type="text" name="message" id="message" wire:model='message'>
      <button type="submit">Pesquisar</button>
   </form>


   <hr>

   @foreach ($loja as $loja)
      {{$loja->nome}} - {{ $loja->cliente->nome }}<br>
   @endforeach
</div>
