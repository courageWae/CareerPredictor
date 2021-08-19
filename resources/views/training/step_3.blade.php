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
                        <h2>Career Predictor Test . Step 3</h2>
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
                            <h4>Tell Us Your History</h4>
                            <p>
                                Your education and work history helps us build upon your existing experience and surface opportunities you may not have thought of.
                            </p>
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="section-title-s3">
                            <h2> Congratulations. Let's Start with the basics  </h2>
                        </div>
                        <form method = "post" action = "{{ route('training.store3') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Information communication technology fundamentals</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q1">
                                    <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Object oriented programming with java</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q2">
                                <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Data structures and algorithms</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q3">
                                    <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Object oriented system analysis and design</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q4">
                                    <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Database concepts and technologies</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q5">
                                    <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Network infrastructure</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q6">
                                    <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Object oriented software development with Visual Basic .NET</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q7"> 
                                    <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Information Systems Development</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q8">
                                    <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Network Server concepts</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q9">
                                    <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Open source operating system : LINUX</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "q10">
                                    <option disabled selected> Choose Answer </option>
                                    <option> A+ </option>
                                    <option> A </option>
                                    <option> B+ </option>
                                    <option> B </option>
                                    <option> C+ </option>
                                    <option> C </option>
                                    <option> D </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a  class="btn btn-primary mb-2" href = "{{ route('training.step_2') }}">Back</a>
                                <button type = "submit" class="btn btn-success mb-2"  style = "float : right;">Save and Continue</button>
                            </div>
                        </form>
                    </div>

                </div> <!-- end row -->
            </div>
        </section>
        <!-- end offer -->
@endsection
