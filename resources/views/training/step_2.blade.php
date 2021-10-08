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
                                This section involves the answering of career based related questions.
                                Answers will greatly contribute to the predicted career.
                            </p>
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="section-title-s3">
                            <h2> Would you enjoy ... </h2>
                        </div>
                        <form method = "post" action = "{{ route('training.store2') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Athletics <br>
                                Which sought of sporting activity do you engage in ?</label>
                              <select class="form-control" id="exampleFormControlSelect1" name = "q1">
                                <option disabled selected>Choose Answer</option>
                                <option>BasketBall</option>
                                <option>FootBall</option>
                                <option>Tennis</option>
                                <option>Swimming</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Engineering<br>
                                    Developing and using technology to produce and maintain things.</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q2">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Information technology<br>
                                    Programming, maintaining, and providing support for software or hardware of computing devices.
                                    </label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q3">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">
                                    Mathematics<br>
                                    Working with quantitative concepts and mathematical formulas.</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q4">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Teaching<br>
                                    Instructing people.</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q5">
                                  <option disabled selected>Choose Answer</option>
                                  <option>Very Interested</option>
                                  <option>Interested</option>
                                  <option>Slightly Interested</option>
                                  <option>Not Interested</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <a  class="btn btn-primary mb-2" href = "{{ route('training.step_1') }}">Back</a>
                                <button type = "submit" class="btn btn-success mb-2" style = "float : right;">Save and Continue</button>
                              </div>

                          </form>


                    </div>
                </div> <!-- end row -->
            </div>
        </section>
        <!-- end offer -->
@endsection
