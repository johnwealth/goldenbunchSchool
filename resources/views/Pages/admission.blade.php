@extends('layouts.app')
@section('title', 'Admission')
@section('content')


<section class = "header-contact">
            <div class="container">
                <div class="header-contact">
                    <h1>Admission</h1>
                   <p><a href="courses1.html#">Home</a> -Admission</p>                    
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 1 Area Start Here -->
        <div class="courses-page-area1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 ">
                        <div class="row">
                            <div class="content-box">
                                <h2>GETTING STARTED</h2>
                                <p style="text-align: justify;">Admission into the school is through entrance examination, which holds annually in the school and other centers across Nigeria. The examination is made up of English Language, Literature in English, Mathematics, General Aptitude, Oral English and Comprehensibility. Student’s public speaking ability is tested at the oral interview session.
                                Ability to play a musical instrument is an added advantage to promote students vocational skills. Admission into basic depends on availability of vacancies. The school has authority to respect students with complicated medical history, which it has no provision for, becoming a global village, and our students are groomed to rule the world. They have an opportunity to interact with the French Community.</p>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar">
                          <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Find a Course</h3>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form">
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Course Name" class="form-control" type="text" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-select">
                                                    <select id="district" class='select2'>
                                                        <option value="0">Categories</option>
                                                        <option value="1">Categories 1</option>
                                                        <option value="2">Categories 2</option>
                                                        <option value="4">Categories 3</option>
                                                        <option value="5">Categories 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-default" type="submit" value="Login">Search Course</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Account Page Start Here -->
                <div class="section-space accent-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <ul class="profile-title">
                                    <li class="active"><a href="account.html#Personal" data-toggle="tab" aria-expanded="false">FAMILY INFORMATION</a></li>
                                    <li><a href="account.html#Profile" data-toggle="tab" aria-expanded="false">EDUCATION</a></li>
                                    <li><a href="account.html#Badges" data-toggle="tab" aria-expanded="false">MIDDLE/UPPER SCHOOL</a></li>
                                    <li><a href="account.html#E-mail" data-toggle="tab" aria-expanded="false">PAYMENTS</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <div class="profile-details tab-content">
                                        <div class="tab-pane fade active in" id="Personal">
                                            <h3 class="title-section title-bar-high mb-40">Family Information</h3>

                                        <form id="checkout-form">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Student First Name  *</label>
                                                            <input type="text" id="user-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Preferred Name *</label>
                                                            <input type="password" id="pass" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Student Middle Name *</label>
                                                            <input type="text" id="first-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last-name">Student Last Name *</label>
                                                            <input type="text" id="last-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Suffix</label>
                                                            <input type="text" id="user-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Gender *</label>
                                                            <select class="form-control">
                                                                <option selected disabled>Sex</option>
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Date Of Birth *</label>
                                                            <input type="text" id="first-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last-name">Home Address *</label>
                                                            <input type="text" id="last-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">City</label>
                                                            <input type="text" id="user-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">State *</label>
                                                            <select class="form-control">
                                                                <option selected disabled>state</option>
                                                                <option>Lagos</option>
                                                                <option>Ogun</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Zip Code *</label>
                                                            <input type="text" id="first-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last-name">Home Phone *</label>
                                                            <input type="text" id="last-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">School year applying for?</label>
                                                            <select class="form-control">
                                                                <option selected disabled>year</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Grade applying for? *</label>
                                                            <select class="form-control">
                                                                <option selected disabled>Grade</option>
                                                                <option>Basic</option>
                                                                <option>Primary</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            <h3 class="title-section title-bar-high mb-40">Parent/Guardian</h3>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Title</label>
                                                            <input type="text" id="user-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Full Name</label>
                                                            <input type="text" id="user-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Relationship to Applicant *</label>
                                                            <input type="text" id="first-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last-name">Home Address  *</label>
                                                            <input type="text" id="last-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Email Address</label>
                                                            <input type="text" id="user-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Cell Phone</label>
                                                            <input type="text" id="user-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Occupation *</label>
                                                            <input type="text" id="first-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last-name">Office phone  *</label>
                                                            <input type="text" id="last-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                        </form>
                                        </div>

                                        <div class="tab-pane fade" id="Profile">
                                            <h3 class="title-section title-bar-high mb-40">Education</h3>
                                            <form id="checkout-form">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Student current grade *</label>
                                                            <select class="form-control">
                                                                <option selected disabled>current grade</option>
                                                                <option>Basic</option>
                                                                <option>Primary</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Name of Student's Current School *</label>
                                                            <input type="password" id="pass" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Dates of Attendance  *</label>
                                                            <input type="text" id="first-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last-name">School Address *</label>
                                                            <input type="text" id="last-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">School City/State/Zip *</label>
                                                            <input type="text" id="user-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">School Phone Number *</label>
                                                            <input type="text" id="first-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">School year applying for?</label>
                                                            <select class="form-control">
                                                                <option selected disabled>year</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Grade applying for? *</label>
                                                            <select class="form-control">
                                                                <option selected disabled>Grade</option>
                                                                <option>Basic</option>
                                                                <option>Primary</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            <h3 class="title-section title-bar-high mb-40">Parent/Guardian Questions</h3>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Please describe your child's special interests or skills.</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Please describe the type of setting in which your child learns best.</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Please describe your child's academic strengths and weaknesses. *</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last-name">Does your child have any health irregularities, allergies, or educational challenges that might interfere with admission testing or normal classroom and/or physical education activities? If yes, please explain.  *</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last-name">Has your child received any assistance in the form of special education programming, including gifted and/or talented, behavioral intervention, or English as a Second Language instruction? If yes, please explain.  *</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                        </form>
                                        </div>

                                        <div class="tab-pane fade" id="Badges">
                                            <h3 class="title-section title-bar-high mb-40">Middle/Upper School (6-12TH Grade) Applicant Questions</h3>
                                            
                                            <form id="checkout-form">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Think about a person whom you admire (parent, relative, friend., athlete, famous person from history, character in a book, etc.). Please describe what you admire about that person and why. *</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Describe a personal challenge you have overcome or a personal accomplishment. How did you overcome the challenge or achieve the accomplishment? *</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Application Fee  *</label>
                                                            <input type="text" id="first-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                </div>   
                                        </form>
                                        </div>

                                        <div class="tab-pane fade" id="E-mail">
                                            <h3 class="title-section title-bar-high mb-40">Payments</h3>
                                            <form id="checkout-form">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">First name *</label>
                                                            <input type="text" id="pass" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Last name *</label>
                                                            <input type="text" id="pass" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Email  *</label>
                                                            <input type="text" id="first-name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last-name">Card number *</label>
                                                            <input type="text" id="last-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="first-name">Security Code *</label>
                                                            <input type="password" id="user-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <label class="control-label" for="first-name">Payment Method </label>
                                                         <a href="#"><img alt="payment-method" src="img/payment-method1.jpg"></a>
                                                        <a href="#"><img alt="payment-method" src="img/payment-method2.jpg"></a>
                                                        <a href="#"><img alt="payment-method" src="img/payment-method3.jpg"></a>
                                                        <a href="#"><img alt="payment-method" src="img/payment-method4.jpg"></a>
                                                    </div>
                                                </div>
                                           
                                        </form>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Account Page End Here -->
                </div>
            </div>
        </div>
    </section>
        <!-- Courses Page 1 Area End Here -->



@endsection