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
                        <h2>Career Predictor Test . Step 1</h2>
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
                                This section involves the answering of career based related questions.
                                Answers will greatly contribute to the predicted career.
                            </p>
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="section-title-s3">
                            <h2> Would You Like to ... </h2>
                        </div>
                        <form method = "post" action="{{ route('training.store1') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Advise organizations on how to meet their business goals</label>
                              <select class="form-control" id="exampleFormControlSelect1" name = "q1">
                                <option disabled selected>Choose Answer</option>
                                <option>Very Interested</option>
                                <option>Interested</option>
                                <option>Slightly Interested</option>
                                <option>Not Interested</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Teach  how to use the computer effectively</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q2">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Repair damaged computing equipment</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q3">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Oversee all aspects of a computing departments</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q4">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Help a client make business decisions</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q5">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Help a client make business decisions</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q6">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Analyze data using modern computer tools </label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q7">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <button type= "submit" class="btn btn-success mb-2" >save and Continue</button>
                              </div>

                          </form>


                    </div>
                </div> <!-- end row -->
            </div>
        </section>
        <!-- end offer -->
@endsection
