<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Syantik | Sistem Informasi Layanan Statistik</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="{{asset('public/admin/assets/css/styles.css')}}">
  
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('public/admin/assets/img/favicon.png')}}">>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
			aa  <img src="{{asset('public/admin/assets/img/logo-dark.svg')}}" alt="Syantik Logo" class="img-fluid" width="150" height="150"> &nsbp
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
               
            <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"> <span>Hi, {{ Auth::user()->name }} </span><i class="icon-submenu lnr lnr-chevron-down"></i> </a>
							<ul class="dropdown-menu">
						
								<li> &nbsp <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
							</ul>
						</li>
            
              
            </ul>
        </nav>
        <div id="layoutSidenav">

        @include('back-end/layouts/sidebar')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <br>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <div class="card mb-4">
<div class="card-header">    </div>     
      <div class="card-body">
        
     
        <div class="col d-flex flex-column h-sm-100">
            <main class="row overflow-auto">
           
                <div class="col pt-4">
                    
                    
                    <hr />
                      
       
           
        
       
             <!-- Button trigger modal -->     
            <center>   <strong>Metadata Variabel</strong> </center> 
      
                     <hr />    
            
           


<!-- Modal -->
<p class="page-title text-left"><a href="https://webapps.bps.go.id/sultra/syantik/view-metadata/{{$keg_id}}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
        <h5 class="modal-title" id="variabelModalLabel">MS-Variabel</h5> <br>
    
 <form class="was-validated" method="post" action="{{ route('variabel.simpan') }}" enctype="multipart/form-data">
                @csrf
                            @if (session('success2'))
                            <div class="alert alert-success">
                                {{ session('success2') }}
                            </div>
                            @endif
          
          <input type="hidden" id="opd" name="opd" value="{{Auth::user()->organisasi}}"> <br>
          <input type="hidden" id="id_keg" name="id_keg" value="{{$keg_id}}"> <br>
          
          
        <strong>Nama: </strong>  
        <input type="text" id="v1" name="v1" class="form-control" placeholder="Tuliskan Nama Variabel" required> <br>
        
        <strong>Alias: </strong>  
        <input type="text" id="v2" name="v2" class="form-control" placeholder="Tuliskan Alias Variabel" required> <br>
        
        <strong>Definisi Variabel:</strong>
        <textarea class="form-control" style="height:100px" name="v3" id="v3" placeholder="Tuliskan Definisi Variabel" ></textarea>
        
        <strong>Konsep: </strong>  
        <input type="text" id="v4" name="v4" class="form-control" placeholder="Tuliskan Konsep Variabel" required> <br>
        
        <strong>Referensi Pemilihan: </strong>  
        <input type="text" id="v5" name="v5" class="form-control" placeholder="Tuliskan Referensi Pemilihan" required> <br>
        
        <strong>Referensi Waktu: </strong>  
        <input type="text" id="v6" name="v6" class="form-control" placeholder="Tuliskan Referensi Waktu" required> <br>
        
        <strong>Ukuran: </strong>  
        <input type="text" id="v7" name="v7" class="form-control" placeholder="Tuliskan Ukuran" required> <br>
        
        <strong>Satuan: </strong>  
        <input type="text" id="v8" name="v8" class="form-control" placeholder="Tuliskan Satuan" required> <br>
        
        <strong>Tipe Data: </strong>  
        <input type="text" id="v9" name="v9" class="form-control" placeholder="Tuliskan Tipe Data" required> <br>
        
        <strong>Isian Klasifikasi: </strong>
        <table class="table table-bordered" id="dynamicAddRemove2">
                             <tr>
            					 <th>No </th>
            					 <th>Kode Item Klasifikasi</th>
            					 <th>Nama Item Klasifikasi</th>
            					 <th>Aksi</th>
            				
            				</tr>
   
                            <tr>
                            <td>1</td>    
                            <td>
                               <input type="text" id="v10k1" name="v10k1[0]" class="form-control" placeholder="Tuliskan Kode Item" required>
                            </td>
                            <td> <input type="text" id="v10k2" name="v10k2[0]" class="form-control" placeholder="Tuliskan Nama Item" required>
                            </td>
                            <td> <button type="button" name="add" id="dynamic-ar2" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i></button></td>
                    					             
                        </tr>
        </table>
        
        
        <strong>Aturan Validasi: </strong>  
        <input type="text" id="v11" name="v11" class="form-control" placeholder="Tuliskan Aturan Validasi" required> <br>
        
        <strong>Kalimat Pertanyaan: </strong>  
        <input type="text" id="v12" name="v12" class="form-control" placeholder="Tuliskan Kalimat Pertanyaan" required> <br>
        
        <strong>Apakah Variabel Dapat Diakses Umum? </strong> <br>
        <input type="radio" class="form-check-input" id="ya" name="v13" value="Ya"  required>
        <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp
        <input type="radio" class="form-check-input" id="tidak" name="v13" value="Tidak"  required>
        <label class="form-check-label" for="tidak">Tidak</label> <br> <br>
       <button type="submit" class="btn btn-primary">Kirim</button>
      </form>   
     
               
        <!-- AKHIR BLOK 2 -->
        
        

        
        
  
                  

        

        
        
        </div>
    </div>
    
        <!-- AKHIR TAB -->
          
       
    </div>        
            </main>
        
        </div>
    </div>
</div>


<!-- Javascript -->
	<script src="{{asset('public/admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/scripts/klorofil-common.js')}}"></script>
	  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/mathlive"></script>
    <script>
      window.addEventListener('DOMContentLoaded', 
        () => MathLive.renderMathInDocument()
      );
      
document.getElementById('mf').setOptions({
virtualKeyboardMode: "manual",
virtualKeyboardLayout: 'dvorak'
});

const mf = document.getElementById('mf');
mf.addEventListener('input',(ev) => {
document.getElementById('i6').value = mf.value;
});

document.getElementById('i6').value = mf.value;

document.getElementById('i6').
addEventListener('input', (ev) => {
mf.setValue(
ev.target.value,
{suppressChangeNotifications: true}
);
});

    </script>
    
    
    
<script>


        function myFunction() {
          var checkBox = document.getElementById("check");
          var text = document.getElementById("lainnya");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
         function cekSarana() {
          var checkBox = document.getElementById("check-sarana");
          var text = document.getElementById("lainnya-sarana");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
        function cekUnit() {
          var checkBox = document.getElementById("check-unit");
          var text = document.getElementById("lainnya-unit");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
        function cekKualitas() {
          var checkBox = document.getElementById("check-kualitas");
          var text = document.getElementById("lainnya-kualitas");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
         function cekAnalisis() {
          var checkBox = document.getElementById("check-analisis");
          var text = document.getElementById("lainnya-analisis");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
        function cekPenyajian() {
          var checkBox = document.getElementById("check-penyajian");
          var text = document.getElementById("lainnya-penyajian");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
</script>
	<script>

$(document).ready(function() {
  $(".select2").select2({
    placeholder: "Pilih cara pengumpulan data",

});

  $(".select21").select2({
    placeholder: "Pilih sektor kegiatan",
 
});

$(".select22").select2({
    placeholder: "Pilih Wilayah",

});





});

$(document).ready(function() {
    
    
    $("input[name$='b4r1']").click(function() {
        var test = $(this).val();
        
        if($("#berulang").is(':checked')) {
			$('#harian').attr('required', true);
			$('#mingguan').attr('required', true);
			$('#bulanan').attr('required', true);
			$('#triwulanan').attr('required', true);
			$('#empatbulanan').attr('required', true);
			$('#semesteran').attr('required', true);
			$('#tahunan').attr('required', true);
			$('#lebihduatahun').attr('required', true);
		} else {
			$('#harian').removeAttr('required');
			$('#mingguan').removeAttr('required');
			$('#bulanan').removeAttr('required');
			$('#triwulanan').removeAttr('required');
			$('#empatbulanan').removeAttr('required');
			$('#semesteran').removeAttr('required');
			$('#tahunan').removeAttr('required');
			$('#lebihduatahun').removeAttr('required');
		}
		

        $("div.desc").hide();
        $("#" + test).show();
    });
    
    
    $("input[name$='i10']").click(function() {
        var test = $(this).val();
        
        if($("#ya").is(':checked')) {
			$('#i11k1').attr('required', true);
			$('#i11k2').attr('required', true);
		
		} else {
			$('#i11k1').removeAttr('required');
			$('#i11k2').removeAttr('required');
		
		}
		
		if($("#tidak").is(':checked')) {
			$('#i12k1').attr('required', true);
			$('#i12k2').attr('required', true);
		
		} else {
			$('#i12k1').removeAttr('required');
			$('#i12k2').removeAttr('required');
		
		}
        
        $("div.desc3").hide();
        $("div.desc4").hide();
        $("#" + test).show();
    });
    

    
    
    $("input[name$='b4r4']").click(function() {
        var test = $(this).val();
        
   if($("#sebagian-indo").is(':checked')) {
			$('#b4r5').attr('required', true);

		} else {
			$('#b4r5').removeAttr('required');

		}

        $("div.desc2").hide();
        $("#" + test).show();
    });
    
    
    
     $("input[name$='b5r2']").click(function() {
        var test = $(this).val();
        
        if($("#probabilitas").is(':checked')) {
			$('#list').attr('required', true);
			$('#area').attr('required', true);
			$('#b5r5').attr('required', true);
			$('#b5r6').attr('required', true);

		} else {
			$('#list').removeAttr('required');
			$('#area').removeAttr('required');
			$('#b5r5').removeAttr('required');
			$('#b5r6').removeAttr('required');

		}
        
        
        $("div.desc3").hide();
        $("#" + test).show();
    });
    
   
    $('input').change(() => {
  const first = $('input[name=b8r1a]:checked').val();
  const second = $('input[name=b8r1b]:checked').val();
  const third = $('input[name=b8r1c]:checked').val();
  
     if($("#aya").is(':checked')) {
			$('#b8r2a').attr('required', true);
		} else {
			$('#b8r2a').removeAttr('required');
		}
		
		if($("#bya").is(':checked')) {
			$('#b8r2b').attr('required', true);
		} else {
			$('#b8r2b').removeAttr('required');
		}
		
		if($("#cya").is(':checked')) {
			$('#b8r2c').attr('required', true);
		} else {
			$('#b8r2c').removeAttr('required');
		}
  
  $("div[name=YaYaYa]").toggle(first === "Ya" || second === "Ya" || third === "Ya");
  $("div[name=b8r2a]").toggle(first === "Ya"); 
  $("div[name=b8r2b]").toggle(second === "Ya");
  $("div[name=b8r2c]").toggle(third === "Ya"); 

});

    

    
    
    $("#b0r3").change(function(){
     var status = this.value;
     
   if(status=="Survei")
    $("#" + status).show();
    if(status=="Pencacahan Lengkap")
    $("#Survei").hide();
    if(status=="Kompilasi Produk Administrasi")
    $("#Survei").hide();
    if(status=="Cara Lain Sesuai Dengan Perkembangan TI")
    $("#Survei").hide();

  
   
  });
    
    
    
});

  </script>
  

  
	<script type="text/javascript">
    $(function () {
        $("#ddlModels").change(function () {
            if ($(this).val() == 'others') {
                $("#instansi_pembinaan").removeAttr("disabled");
                $("#instansi_pembinaan").focus();
            } else {
                $("#instansi_pembinaan").attr("disabled", "disabled");
            }
        });
    });
</script>


<script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function() {
 
            ++i;
            $("#dynamicAddRemove").append(
                '<tr> <td> '+i+' </td> <td> <input type="text" id="i11k1" name="i11k1['+
                i+
                ']" class="form-control" placeholder="Tuliskan Nama Indikator Pembangun" required ></td> <td> <input type="text" id="i11k1" name="i11k2['+
                i+
                ']" class="form-control" placeholder="Tuliskan Sumber Publikasi Ketersediaan"  required></td>    <td><button type="button" class="btn btn-outline-danger remove-input-field"><i class="fa-solid fa-trash"></i></button></td></tr>'
            );





        });

        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>
    
     <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar2").click(function() {
    


            ++i;
           $("#dynamicAddRemove2").append(
                '<tr> <td> '+i+' </td> <td> <input type="text" id="v10k1" name="v10k1['+
                i+
                ']" class="form-control" placeholder="Tuliskan Kode Item" required ></td> <td> <input type="text" id="v10k2" name="v10k2['+
                i+
                ']" class="form-control" placeholder="Tuliskan Nama Item"  required></td>    <td><button type="button" class="btn btn-outline-danger remove-input-field"><i class="fa-solid fa-trash"></i></button></td></tr>'
            );





        });

        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>
</body>

</html>
