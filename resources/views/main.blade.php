@extends('layout.base')

@section('title', 'Base')

@section('contents')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Base Portlets
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Portlets
											</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Base Portlets
											</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">

                <div class="col-lg-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-multimedia"></i>
												</span>
                                    <h3 class="m-portlet__head-text">
                                        Icon Title
                                        <small>
                                            portlet sub title
                                        </small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                        </div>
                        <div class="m-portlet__foot m--hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    Portlet footer:
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <span class="m--margin-left-10">
													or
													<a href="#" class="m-link m--font-bold">
														Cancel
													</a>
												</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-multimedia"></i>
												</span>
                                    <h3 class="m-portlet__head-text">
                                        Portlet Footer
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                        </div>
                        <div class="m-portlet__foot">
                            <div class="row align-items-center">
                                <div class="col-lg-6 m--valign-middle">
                                    Portlet footer:
                                </div>
                                <div class="col-lg-6 m--align-right">
                                    <button type="submit" class="btn btn-brand">
                                        Submit
                                    </button>
                                    <span class="m--margin-left-10">
													or
													<a href="#" class="m-link m--font-bold">
														Cancel
													</a>
												</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-multimedia"></i>
												</span>
                                    <h3 class="m-portlet__head-text">
                                        Scrollable Content
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="m-scrollable" data-scrollable="true" data-max-height="200" data-scrollbar-shown="true">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                            </div>
                        </div>
                        <div class="m-portlet__foot">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success">
                                        Submit
                                    </button>
                                    <button type="submit" class="btn btn-secondary">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->


                </div>
            </div>
        </div>
    </div>
@endsection