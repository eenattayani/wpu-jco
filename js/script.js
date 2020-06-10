function tampilkanSemuaMenu() {
    $.getJSON('https://eenattayani.github.io/een-json/jco.json', function(data) {
        let menu = data.menu; 
        $.each(menu, function (i, data) { //ambil semua elemen menu dan tiap elemennya diberikan function
            $('#daftar-menu').append('<div class="col-md-4"><div class="card  mb-3" style="width: 18rem;"><img src="img/'+ data.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">varian: <a href="#" class="btn btn-warning">'+ data.varian +'</a></p><p class="card-text">ukuran: <a href="#" class="btn btn-success">'+ data.ukuran +'</a></p><h5 class="card-title">Harga: '+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
        }); 
    });
}

tampilkanSemuaMenu();

$('.nav-link').on('click', function() {
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let kategori = $(this).html();
    // console.log(kategori);
    
    $('h1').html(kategori);

    if( kategori == 'All Menu') {
        $('#daftar-menu').empty();
        tampilkanSemuaMenu();
        return; // return langsung keluar dari fungsi
    } 
    
    $.getJSON('data/jco.json', function (data) {
        let menu = data.menu;
        let content = '';

        $.each(menu, function (i, data) {
            if( data.kategori == kategori.toLowerCase()) {
                content += '<div class="col-md-4"><div class="card  mb-3" style="width: 18rem;"><img src="img/'+ data.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">varian: <a href="#" class="btn btn-warning">'+ data.varian +'</a></p><p class="card-text">ukuran: <a href="#" class="btn btn-success">'+ data.ukuran +'</a></p><h5 class="card-title">Harga: '+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>'
            }
        });

        $('#daftar-menu').html(content);
    });
    



});