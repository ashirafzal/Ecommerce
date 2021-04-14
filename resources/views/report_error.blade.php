@extends('layouts.app')
@section('content')
<style>
    body {
        font-size: 1.4rem;
        font-family: sans-serif;
    }

    .form-check-label {
        margin-left: 16px;
    }
</style>
<div class="container">
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Report Error</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Enter the Error details with subject in the below form.</p>

        <div class="row">
            <!--Grid column-->
            <div class="border col-md-9 mb-md-0 mb-5 py-4">
                <form class="p-3" id="contact-form" name="contact-form" action="error-report" method="POST">
                    @csrf
                    @if(session('success'))
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{session('success')}}</strong>
                    </div>
                    @endif
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Email</label>
                                <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror">
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <label for="report_error">Error Detail</label>
                                <textarea type="text" id="report_error" name="report_error" rows="2" class="form-control @error('report_error') is-invalid @enderror md-textarea"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Submit</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->
</div>
@endsection