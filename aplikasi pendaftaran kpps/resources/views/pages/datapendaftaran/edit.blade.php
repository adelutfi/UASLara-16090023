@extends('default')

@section('content')
<div class="container">
<form>
<div class="form-group">
          <label for="NIK">NIK</label>
          <input type="number" class="form-control" id="NIK" placeholder="Enter Nik">
        </div>
        <div class="form-group">
          <label for="Nama">Nama</label>
          <input type="text" class="form-control" id="Nama" placeholder="Enter nama">
        </div>
        <div class="form-group">
          <label for="TTL">TTL</label>
          <input type="string" class="form-control" id="TTL" placeholder="Enter TTL">
        </div>
        <div class="form-group">
          <label for="JK">JK</label>
          <input type="text" class="form-control" id="JK" placeholder="Enter JK">
        </div>
        <div class="form-group">
          <label for="Email">Email</label>
          <input type="string" class="form-control" id="Email" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label for="NO_HP">NO_HP</label>
          <input type="string" class="form-control" id="NO_HP" placeholder="Enter NO_HP">
        </div>
        <div class="form-group">
          <label for="LULUSAN">LULUSAN</label>
          <input type="text" class="form-control" id="LULUSAN" placeholder="Enter LULUSAN">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>

</div>
@stop