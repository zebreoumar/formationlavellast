<input type="hidden" name="produit_id" value="{{$produit->id}}">
<div class="form-group">
<label for="">Designation</label>
<input value="{{$produit->designation}}" type="text"
class="form-control" name="designation" id="" aria-describedby="helpId" placeholder="">
</div>
@error('designation')
<span class="alert-danger">{{$message}}</span>
@enderror
<div class="form-group">
<label for="">Prix</label>
<input type="number" value="{{$produit->prix}}"
class="form-control" name="prix" id="" aria-describedby="helpId" placeholder="">
</div>
@error('prix')
<span class="alert-danger">{{$message }}</span>
@enderror

<div class="form-group">
<label for="">Pays Source</label>
<input type="text" value="{{$produit->pays_source}}"
  class="form-control" name="pays_source" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="custom-file">

  <input type="file" class="custom-file-input" name="image" id="" placeholder="" aria-describedby="fileHelpId">
</div>

<button type="submit" class="btn btn-block btn-success m-10">Valider</button>
<br>
<br>
<br>

