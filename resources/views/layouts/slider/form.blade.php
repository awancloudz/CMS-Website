@if (isset($dataedit))
<input type="hidden" name="id" value="{{ $dataedit->id }}">
@endif
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Gambar</label><br>
            <div id="tampilgambar"></div><br>
            <input type="file" class="default" name="picture" multiple>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Judul Slide</label>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul slide">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="buttontext">Teks Tombol</label>
            <input type="text" class="form-control" id="buttontext" name="buttontext" placeholder="Masukkan teks tombol">
            <input type="hidden" id="active" name="active" value="Y">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <button type="submit" class="btn btn-success">{{ $submitButtonText }}</button>
        </div>
    </div>
</div>
<script>
<?php
if (isset($dataedit)){
    echo "var dataedit = '{$dataedit}';";
}
else{
    echo "var dataedit = '';";
}
?>

if(dataedit != ''){
    var arr = JSON.parse(dataedit);
    document.getElementById('title').value = arr.title;
    document.getElementById('link').value = arr.link;
    document.getElementById('description').value = arr.description;
    document.getElementById('buttontext').value = arr.buttontext;
    document.getElementById('tampilgambar').innerHTML = "<img src='../../../../slider/" + arr.picture + "' width='200'>";
}
</script>