@extends('layouts.index')
@section('structure')
    <div class="clearfix"></div>
    <!-- Header Container / End -->
    <!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="submit-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-circle"></i> Add Property</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row">
            <!-- Submit Page -->
            <div class="col-md-12">
                <div class="submit-page">
                    <form method="POST" action="{{route('property.store')}}">
                        @csrf
                        <div class="notification notice large margin-bottom-55">
                            <h4>Don't Have an Account?</h4>
                            <p>If you don't have an account you can create one by entering your email address in contact
                                details section. A password will be automatically emailed to you.</p>
                        </div>
                        <!-- Section -->
                        <h3>Basic Information</h3>
                        <div class="submit-section">
                            <!-- Title -->
                            <div class="form">
                                <h5>Property Title <i class="tip"
                                                      data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i>
                                </h5>
                                <input class="search-field" type="text" value="" name="title"/>
                            </div>
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Status -->
                                <div class="col-md-6">
                                    <h5>Status</h5>
                                    <select class="chosen-select-no-single" name="status">
                                        <option label="blank"></option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                                <!-- Type -->
                                <div class="col-md-6">
                                    <h5>Type</h5>
                                    <select class="chosen-select-no-single" name="type_id">
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Row / End -->
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Price -->
                                <div class="col-md-4">
                                    <h5>Price <i class="tip"
                                                 data-tip-content="Type overall or monthly price if property is for rent"></i>
                                    </h5>
                                    <div class="select-input disabled-first-option">
                                        <input type="text" data-unit="USD" name="price">
                                    </div>
                                </div>
                                <!-- Area -->
                                <div class="col-md-4">
                                    <h5>Area</h5>
                                    <div class="select-input disabled-first-option">
                                        <input type="text" data-unit="Sq Ft" name="area">
                                    </div>
                                </div>
                                <!-- Rooms -->
                                <div class="col-md-4">
                                    <h5>Rooms</h5>
                                    <select class="chosen-select-no-single" name="rooms">
                                        <option label="blank"></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>More than 5</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Row / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <h3>Location</h3>
                        <div class="submit-section">
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Address -->
                                <div class="col-md-6">
                                    <h5>Address</h5>
                                    <input type="text" name="address">
                                </div>
                                <!-- City -->
                                <div class="col-md-6">
                                    <h5>City</h5>
                                    <input type="text" name="city">
                                </div>
                                <!-- City -->
                                <div class="col-md-6">
                                    <h5>State</h5>
                                    <input type="text" name="state">
                                </div>
                                <!-- Zip-Code -->
                                <div class="col-md-6">
                                    <h5>Zip-Code</h5>
                                    <input type="text" name="zip_code">
                                </div>
                            </div>
                            <!-- Row / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <h3>Detailed Information</h3>
                        <div class="submit-section">
                            <!-- Description -->
                            <div class="form">
                                <h5>Description</h5>
                                <textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary"
                                          spellcheck="true"></textarea>
                            </div>
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Age of Home -->
                                <div class="col-md-4">
                                    <h5>Building Age <span>(optional)</span></h5>
                                    <select class="chosen-select-no-single" name="building_age">
                                        <option label="blank"></option>
                                        <option>0 - 1 Years</option>
                                        <option>0 - 5 Years</option>
                                        <option>0 - 10 Years</option>
                                        <option>0 - 20 Years</option>
                                        <option>0 - 50 Years</option>
                                        <option>50 + Years</option>
                                    </select>
                                </div>
                                <!-- Beds -->
                                <div class="col-md-4">
                                    <h5>Bedrooms <span>(optional)</span></h5>
                                    <select class="chosen-select-no-single" name="bedrooms">
                                        <option label="blank"></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <!-- Baths -->
                                <div class="col-md-4">
                                    <h5>Bathrooms <span>(optional)</span></h5>
                                    <select class="chosen-select-no-single" name="bathrooms">
                                        <option label="blank"></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Row / End -->
                            <!-- Checkboxes -->
                            <h5 class="margin-top-30">Other Features <span>(optional)</span></h5>
                            <div class="checkboxes in-row margin-bottom-20">

                                <input id="check-2" type="checkbox" name="features[1]">
                                <label for="check-2">Air Conditioning</label>

                                <input id="check-3" type="checkbox" name="features[2]">
                                <label for="check-3">Swimming Pool</label>

                                <input id="check-4" type="checkbox" name="features[3]">
                                <label for="check-4">Central Heating</label>

                                <input id="check-5" type="checkbox" name="features[4]">
                                <label for="check-5">Laundry Room</label>

                                <input id="check-6" type="checkbox" name="features[5]">
                                <label for="check-6">Gym</label>

                                <input id="check-7" type="checkbox" name="features[6]">
                                <label for="check-7">Alarm</label>

                                <input id="check-8" type="checkbox" name="features[7]">
                                <label for="check-8">Window Covering</label>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <h3>Contact Details</h3>
                        <div class="submit-section">
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Name -->
                                <div class="col-md-4">
                                    <h5>Name</h5>
                                    <input type="text" name="username"
                                           @if(Auth::user())
                                               value = "{{Auth::user()->username}}"
                                        @endif
                                    >
                                </div>
                                <!-- Email -->
                                <div class="col-md-4">
                                    <h5>E-Mail</h5>
                                    <input type="email" name="email"
                                           @if(Auth::user())
                                               value = "{{Auth::user()->email}}"
                                        @endif
                                    >
                                </div>
                                <!-- Name -->
                                <div class="col-md-4">
                                    <h5>Phone <span>(optional)</span></h5>
                                    <input type="number" name="phone"
                                           @if(Auth::user())
                                               value = "{{Auth::user()->phone}}"
                                        @endif
                                    >
                                </div>
                            </div>
                            <!-- Row / End -->
                        </div>
                        <!-- Section / End -->
                        <div class="divider"></div>
                        <button type="submit" class="button preview margin-top-5">Preview <i
                                class="fa fa-arrow-circle-right"></i>
                        </button>
                        <!-- Section -->
                        <h3>Gallery</h3>
                        <div class="submit-section">
                            <form method="POST" action="{{ route('uploadImage') }}" enctype="multipart/form-data"
                                          class="dropzone"
                                @csrf
                            </form>
                            <form method="POST" action="{{ route('uploadImage') }}" enctype="multipart/form-data"
                                  class="dropzone" id="dropzone">
                                @csrf
                            </form>
                            <div id="submitForm"></div>
                        </div>
                <!-- Section / End -->
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>
    <script src="scripts/dropzone.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"
                integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        Dropzone.options.dropzone = {
            paramName: 'file',
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 5,
            dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Click here or drop files to upload",
            success: function (file, response) {
                $('#submitForm').append(`<input hidden name='imageIds[]' value='${response.id}'></input>`);
            }
        };
    </script>
@endsection
