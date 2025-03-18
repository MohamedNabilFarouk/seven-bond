@extends('admin.layouts.app')


@section('toolbar')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">@lang('site.Site Settings')
                <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1"></small>
                    <!--end::Description--></h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
@endsection

@section('content')

    @include('admin.includes.messages')

    <div class="card mb-5 mb-xl-8">

        <form class="col-12" action="{{ route('settings.site.update') }}" method="post"
              enctype="multipart/form-data">

        {{ csrf_field() }}
        {{ method_field('put') }}

            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">@lang('site.Site Settings')</span>
                </h3>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">

                        <table class="table table-hover align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 min-w-325px text-center">@lang('site.Site Settings')</th>
                                <th class="ps-4 min-w-325px">@lang('site.value')</th>
                            </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="border">

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.phone')</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> phone }}</a>
                                            <input type="text" name="phone" class="form-control form-control-solid" placeholder="@lang('site.Enter New') @lang('site.phone')"/>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.address')</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> address_en }}</a>
                                            <input type="text" name="address_en" class="form-control form-control-solid" placeholder="@lang('site.Enter New') @lang('site.address')"/>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Address Ar</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> address_ar }}</a>
                                            <input type="text" name="address_ar" class="form-control form-control-solid" placeholder="@lang('site.Enter New') @lang('site.address')"/>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.Email')</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> email }}</a>
                                            <input type="text" name="email" class="form-control form-control-solid" placeholder="@lang('site.Enter New') @lang('site.Email')"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">completed projects</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings ->completed_projects }}</a>
                                            <input type="text" name="completed_projects" class="form-control form-control-solid" placeholder="completed projects"/>
                                        </div>
                                    </div>
                                </td>
                                </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center"> 	happy clients </a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings ->happy_clients  }}</a>
                                            <input type="text" name="happy_clients" class="form-control form-control-solid" placeholder="happy_clients"/>
                                        </div>
                                    </div>
                                </td>
                                </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center"> awards won </a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings ->awards_won  }}</a>
                                            <input type="text" name="awards_won" class="form-control form-control-solid" placeholder="awards won"/>
                                        </div>
                                    </div>
                                </td>
                                </tr>


                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">About Description</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                            <textarea name="about_des" rows="2" id="editor" class="form-control form-control-solid" >{{ old('about_des', $site_settings->about_des) }}</textarea>
                                            {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                        </div>
                                    </div>
                                </td>
                                </tr>



                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column m-auto">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Home Middel Banner Text En</a>
                                            </div>
                                        </div>
                                    </td>
    
    
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                                <textarea name="home_middel_banner_text_en" rows="2" id="editor" class="form-control form-control-solid">{{ $site_settings ->home_middel_banner_text_en }}</textarea>
                                                {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                            </div>
                                        </div>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column m-auto">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Home Middel Banner Text Ar</a>
                                            </div>
                                        </div>
                                    </td>
    
    
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                                <textarea name="home_middel_banner_text_ar" class="form-control form-control-solid" rows="2" id="editor">{{ $site_settings ->home_middel_banner_text_ar }}</textarea>
                                                {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                            </div>
                                        </div>
                                    </td>
                                    </tr>
    


                                {{-- image heree --}}

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column m-auto">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Get in touch image</a>
                                            </div>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <input type="file" name="about_section_1_image1" class="form-control input-sm aboutimage1" accept="jpg, png, jpeg, svg">
                                                <img src="{{ $site_settings -> about_section_1_image1 }}" width="100px"
                                                    class="img-thumbnail aboutimage1-preview mt-1" alt="">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column m-auto">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">About section 1 Image 2</a>
                                            </div>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <input type="file" name="about_section_1_image2" class="form-control input-sm aboutimage2" accept="jpg, png, jpeg, svg">

                                                <img src="{{ $site_settings -> about_section_1_image2 }}" width="100px"
                                                    class="img-thumbnail aboutimage2-preview mt-1" alt="">
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column m-auto">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Team image</a>
                                            </div>
                                        </div>
                                    </td>
    
    
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <input type="file" name="team_section_image" class="form-control input-sm team" accept="jpg, png, jpeg, svg">
    
                                                <img src="{{ $site_settings -> team_section_image }}" width="100px"
                                                     class="img-thumbnail team-preview mt-1" alt="">
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.logo')</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="file" name="logo" class="form-control input-sm logo" accept="jpg, png, jpeg, svg">

                                            <img src="{{ $site_settings -> logo }}" width="100px"
                                                 class="img-thumbnail logo-preview mt-1" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.favicon')</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="file" name="favicon" class="form-control input-sm favicon" accept="jpg, png, jpeg, svg">

                                            <img src="{{ $site_settings -> favicon }}" width="100px"
                                                 class="img-thumbnail favicon-preview mt-1" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.banner')</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="file" name="banner" class="form-control input-sm image" accept="jpg, png, jpeg, svg">

                                            <img src="{{ $site_settings -> banner }}" width="100px"
                                                 class="img-thumbnail image-preview mt-1" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>





                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center"Banner Video</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="file" name="banner_vid" class="form-control input-sm image" value='{{ $site_settings -> banner_vid }}'>

                                            <div class="position-relative mt-10">
                                                <a href="{{asset($site_settings->banner_vid)}}" target="_blank" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Map</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="text" name="map" class="form-control input-sm image" value='{{ $site_settings -> map }}'>
                                                {!!$site_settings->map!!}
                                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.61185028528!2d31.17606207091597!3d30.059611343484303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1683415177676!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                            <!--end::Table body-->
                        </table>



                    <!--begin::Table-->
                        {{-- <table class="table table-hover align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 min-w-325px text-center">@lang('site.Site Settings')</th>
                                <th class="ps-4 min-w-325px">@lang('site.English')</th>
                                <th class="ps-4 min-w-325px">@lang('site.Arabic')</th>
                            </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="border">

                            <tr>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.Title')</a>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> title_en }}</a>
                                            <input type="text" name="title_en" class="form-control form-control-solid" placeholder="@lang('site.Enter New') @lang('site.Title') @lang('site.in English')"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> title_ar }}</a>
                                            <input type="text" name="title_ar" class="form-control form-control-solid" placeholder="@lang('site.Enter New') @lang('site.Title') @lang('site.in Arabic')"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>






                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Meta Title</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_title_en }}</a>
                                            <input type="text" name="meta_title_en" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Title @lang('site.in English')"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_title_ar }}</a>
                                            <input type="text" name="meta_title_ar" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Title @lang('site.in Arabic')"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Meta Description</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_description_en }}</a>
                                            <input type="text" name="meta_description_en" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Title @lang('site.in English')"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_description_ar }}</a>
                                            <input type="text" name="meta_description_ar" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Description @lang('site.in Arabic')"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Meta Keywords</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_keyword_en }}</a>
                                            <input type="text" name="meta_keyword_en" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Keywords @lang('site.in English')"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_keyword_ar }}</a>
                                            <input type="text" name="meta_keyword_ar" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Keywords @lang('site.in Arabic')"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                            <!--end::Table body-->
                        </table> --}}


                        <!--end::Table-->
                </div>
                <!--end::Table container-->

                <button type="submit" href="{{route('settings.site.update')}}" class="m-5 btn btn-lg btn-primary float-end">
                    @lang('site.Update') @lang('site.Site Settings') <i class="fa fa-edit"></i>
                </button>

            </div>
            <!--begin::Body-->
        </form>
    </div>
    <!--end::Tables Widget 11-->
@endsection



<!--begin::Tables Widget 11-->
