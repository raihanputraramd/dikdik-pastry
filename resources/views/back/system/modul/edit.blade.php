<section class="p-3">
    <form id="form-validation" action="{{ route('back.system.modul.update', $modul->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group mb-12">
            <label for="nama">Nama Modul</label>
            <input type="text" name="nama" id="nama" class="form-control form-control-sm" value="{{ $modul->nama }}">
        </div>

        <div class="form-group mb-0">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" rows="3" class="form-control">{{ $modul->keterangan }}</textarea>
        </div>
    </form>
</section>

<hr class="modal-divider">

<section class="p-2 d-flex justify-content-end">
    <button data-dismiss="modal" class="btn btn-custom red px-3 ml-3">
        <i class="fas fa-times-circle mr-2"></i>
        Keluar
    </button>
    <button id="btn-save" class="btn btn-custom green px-3 ml-3">
        <i class="fas fa-save mr-2"></i>
        Simpan
    </button>
</section>

<script>
    $('#form-validation').validate({
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
            element.closest('.col-md-9').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    })
</script>
