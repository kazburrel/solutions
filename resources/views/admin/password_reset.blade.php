@extends('admin.layouts.index')

@section('content')
<div id="kt_signin_password_edit" class="flex-row-fluid">
    <!--begin::Form-->
    <x-flash />
    <form class="form" novalidate="novalidate" method="POST"
        action="{{route('UpdatePassword')}}">
        @csrf
        @method('PUT')
        <div class="row mb-1">
            <div class="col-lg-4">
                <div class="fv-row mb-0">
                    <label for="currentpassword"
                        class="form-label fs-6 fw-bolder mb-3">Current Password</label>
                    <input type="password"
                        class="form-control form-control-lg  border border-3"
                        name="currentpassword" id="currentpassword" />
                    @error('currentpassword')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4">
                <div class="fv-row mb-0">
                    <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New
                        Password</label>
                    <input type="password"
                        class="form-control form-control-lg  border border-3"
                        name="newpassword" id="newpassword" />
                        @error('newpassword')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4">
                <div class="fv-row mb-0">
                    <label for="confirmpassword"
                        class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
                    <input type="password"
                        class="form-control form-control-lg  border border-3"
                        name="newpassword_confirmation" id="confirmpassword" />
                        @error('password_confirmation')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
        </div>
        {{-- <div class="form-text mb-5">Password must be at least 8 character and contain
            symbols</div> --}}
        <div class="d-flex justify-content-center m-5">
            <button id="kt_password_submit" type="submit"
                class="btn btn-primary me-2 px-6">Update Password</button>
            <button id="kt_password_cancel" type="button"
                class="btn btn-danger px-6">Cancel</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection