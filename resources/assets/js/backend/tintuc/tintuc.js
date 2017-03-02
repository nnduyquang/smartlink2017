$('#summernote').summernote({
    height:500,
    minHeight: null,
    maxHeight:null,
    focus:true
});
$('#chooseHinhChuDe').change(function(event){
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showHinhChuDe").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
});