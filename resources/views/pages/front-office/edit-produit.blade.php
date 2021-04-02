<x-master-layout>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
                    <h1>Modifier produit</h1>
                    <hr>
        <form action="{{ route('update-produit') }}" method="POST" >
            @method("POST")
            @csrf

@include("partials._partial_produit_form")
        </form>
    </div>

    </div>
</div>
</x-master-layout>
