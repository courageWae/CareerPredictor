@extends('layouts.training.master')
@section('head')
   @include('layouts.training.head')
@endsection
@section('content')
        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Career Predictor Test . Step 2</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start offer -->
        <section class="section-padding offer-section">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="section-title-s3">
                            <h2> What is Involved </h2>
                        </div>
                        <div class="offer-text">
                            <p>
                                Your education and work history helps us build upon your existing experience and surface opportunities you may not have thought of.
                            </p>
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="section-title-s3">
                            <h2> How Sure are you with the answers provided so far ?</h2>
                        </div>
                        <div class = "form-group">
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store5', ['answer' => 'Strongly Disagree']) }}"><b style = "color:red; float:left">1</b>Strongly Disagree</a>
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store5', ['answer' => 'Disagree']) }}"><b style = "color:red; float:left">2</b>Disagree</a>
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store5', ['answer' => 'Very Sure']) }}"><b style = "color:red; float:left">3</b>Not Sure</a>
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store5', ['answer' => 'Not Really']) }}"><b style = "color:red; float:left">4</b>Very Sure</a>
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store5', ['answer' => 'Dont Know']) }}"><b style = "color:red; float:left">5</b>Don't Know</a>
                        </div>
                        <div class="form-group">
                            <a  class="btn btn-primary mb-2" href = "{{ route('training.step_4') }}">Back</a>
                        </div>
                    </div>

                </div> <!-- end row -->
            </div>
        </section>
        <!-- end offer -->
@endsection
