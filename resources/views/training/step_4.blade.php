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
                        <h2>Career Predictor Test . Step 4</h2>
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
                            <h2> Congratulations. Which of the following best describes you interms of education ? </h2>
                        </div>
                        <div class = "form-group">
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store4', ['answer' => 'I have completed a post-secondary degree']) }}"><b style = "color:red; float:left">1</b>I have completed a post-secondary degree</a>
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store4', ['answer' => 'I am currently completing my first post-secondary degree']) }}"><b style = "color:red; float:left">2</b>I am currently completing my first post-secondary degree</a>
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store4', ['answer' => 'I have completed high school']) }}"><b style = "color:red; float:left">3</b>I have completed high school</a>
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store4', ['answer' => 'I am currently in high school']) }}"><b style = "color:red; float:left">4</b>I am currently in high school</a>
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store4', ['answer' => 'I have not started high school']) }}"><b style = "color:red; float:left">5</b>I have not started high school</a>
                        <a type="button" class="btn btn-primary btn-lg btn-block" href = "{{ route('training.store4', ['answer' => 'I attended but did not complete high school']) }}"><b style = "color:red; float:left">6</b>I attended but did not complete high school</a>
                        </div>
                        <div class="form-group">
                            <a  class="btn btn-primary mb-2" href = "{{ route('training.step_3') }}">Back</a>
                        </div>
                    </div>


                </div> <!-- end row -->
            </div>
        </section>
        <!-- end offer -->
@endsection
