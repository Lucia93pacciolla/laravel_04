<x-layout>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <form method="POST" action="{{route('contact_submit')}}" class='p-5 mx- mt-5 shadow'>
            
            @if(session('emailError'))
            <div class='alert alert-danger text-center'>
                {{session('emailError')}}
            </div>
            @endif

              @csrf

              <div class="mb-3">
                <label for="name" class="form-label">Inserisci il tuo nome</label>
                <input type="text" name="name" class="form-control" id="name">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Inserisci la tua email</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>

              <div class="mb-3">
                <label for="message" class="form-label">Inserisci il tuo messaggio</label>
                <textarea name="message" id="message" cols="10" rows="7" class="form-control"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">Contattaci</button>
            </form>
        </div>
    </div>
</div>

</x-layout>

