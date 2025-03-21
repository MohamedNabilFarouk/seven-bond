@extends('admin.layouts.app')


@section('toolbar')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">تغيير كلمة المرور
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                   
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
@endsection

@section('content')

    @include('admin.includes.messages')

    <div class="container-fluid page__container p-2">

        <div class="card rounded card-form__body card-body shadow-lg">
            <form method="POST" action="{{ route('do.changePass') }}">
                @csrf


               

                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">كلمة المرور </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="old_password" required autocomplete="old-password">

                </div>


                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">كلمة المرور الجديدة</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="new_password" required autocomplete="new-password">

                </div>
                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">تأكيد كلمة المرور
                        </label>
                    <input id="password-confirm" type="password" class="form-control" name="new_password_confirmation" required
                        autocomplete="new-password">

                </div>



               




                <div class="text-right mb-5">
                    <input type="submit" class="btn btn-success" value="نعديل">
                </div>
            </form>
        </div>
    </div>
    <!-- // END drawer-layout__content -->
    </div>
@stop
