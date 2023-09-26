<div>
    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Tài khoản</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-user"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm tài khoản</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" wire:submit="save">
                                
                                <x-forms.input-text title="Tên tài khoản" type="text" name="username" wire:model.live="username" />
                                
                                <x-forms.input-text title="Email" type="text" name="email" wire:model.live="email" />
                                
                                <x-forms.input-text title="Số điện thoại" type="text" name="phone" wire:model.live="phone" />
                                
                                <x-forms.input-text title="Địa chỉ" type="text" name="address" wire:model.live="address" />
                                
                                <x-forms.input-text title="Hình ảnh" type="file" name="image" wire:model.live="image" />

                                <x-forms.button title="Thêm tài khoản" class="primary" />


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>

    <script data-navigate-once type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</div>
