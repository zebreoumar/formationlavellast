<x-master-layout>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
                    <h1>Ajout d'un nouveau produit</h1>
                    <hr>
        <form action="{{ route('enregistrer-produit') }}" method="post" enctype="multipart/form-data" >
            @method("POST")
            @csrf
           @include("partials._partial_produit_form")

        </form>
    </div>

    </div>
</div>
</x-master-layout>
